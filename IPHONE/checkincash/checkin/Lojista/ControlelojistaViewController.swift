//
//  ControlelojistaViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 14/03/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import Alamofire

class ControlelojistaViewController: UIViewController, UITextFieldDelegate {

    let arquivodeconfiguracoes = Configuration.compartilhado
    var isValid: Bool = false
    
    @IBOutlet weak var lbRazao: UILabel!
    @IBOutlet weak var lbLogonOnOff: UISwitch!
    @IBOutlet weak var lbSaldoPin: UILabel!
    
    @IBOutlet weak var txtToken: UITextField!
    
    var listData: [[String: AnyObject]] = [[String: AnyObject]]()
    var idLojista: String!
    var idUsuario: String!
    var pinMov: String!
    var palerta1: String!
    var palerta2: String!
    var palerta3: String!
    var isAlerta: Bool!
    
    
    @IBAction func changeLojistaOnOff(_ sender: UISwitch) {
        
        arquivodeconfiguracoes.lojistaLogOnOff = sender.isOn
        
        
        if !sender.isOn {
            desconectar()
            
        }
        
    }
    
  
    @IBAction func btnValidar(_ sender: UIButton) {
        
        if (txtToken.text?.count)! != 6
        {
            alertSimple(mensagem: "Token Inválido!")
            return
        }
        else
        {
            processar_token()
        }
    }
    override func viewDidLoad() {
        super.viewDidLoad()

        // recuera dados da preferencia
        idLojista = arquivodeconfiguracoes.codigolojista
        idUsuario = arquivodeconfiguracoes.codigousuario
        
          self.view.isHidden = true
          self.txtToken.delegate = self
        
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    // Mantem foco dos campos do cadastro, via Delegate
    func textFieldShouldReturn(_ textField: UITextField) -> Bool {
        
        if textField == txtToken{
           
            // desliga o teclado, uma vez que se perde o foco do campo usando o resignFirstResponder
            textField.resignFirstResponder()
        }
        return true
    }
    
    // Delegate, nao permite passar com campos em branco
    func textFieldShouldEndEditing(_ textField: UITextField) -> Bool {
        return !textField.text!.isEmpty
        
    }
    
    // toda vez que se tocar na tela o metodo touchesBegan sera chamado, e assim encerra o teclado
    // se ele estiver na tela
    override func touchesBegan(_ touches: Set<UITouch>, with event: UIEvent?) {
        view.endEditing(true)
    }
    
    // carregou completamente
    // faz leitura dos dados do lojista
    override func viewDidAppear(_ animated: Bool) {
        super.viewDidAppear(animated)
        
        //carrega dados
        dados_pincash()
        
    }
    
    func dados_pincash(){
        let url: URL = URL(string: "https://www.checkincash.com.br/api/lojista/recupera_saldo_lojista.php?pcontrato=\(self.idLojista!)")!
        
        
        Alamofire.request(url).responseJSON(completionHandler: {response in
            switch response.result{
            case .success:
                self.listData = response.result.value as! [[String: AnyObject]]
                
                if ( self.listData.count > 0 )
                {
                    let item = self.listData[0]
                    
                    self.lbSaldoPin.text  = (item["pincash_saldo"] as? String)!
                    self.lbRazao.text = (item["razao"] as? String)!
                    self.palerta1 = (item["alerta1"] as? String)!
                    self.palerta2 = (item["alerta2"] as? String)!
                    self.palerta3 = (item["alerta3"] as? String)!
                    
                    self.view.isHidden = false
                    
                }
                else
                {
                    self.alertSimple(mensagem: "Contrato não foi localizado")
                }
                
            case .failure(let error):
                // print(error)
                self.alertSimple(mensagem: error.localizedDescription)
            }
            
            
            if self.listData.count == 0 {
                self.alertSimple(mensagem: "Contrato não foi localizado")
            }
            
        })
    }
    
    func processar_token(){
        let url: URL = URL(string: "https://www.checkincash.com.br/api/lojista/movimenta_saldo.php?pcontrato=\(idLojista!)&ptoken=\(txtToken.text!)")!
        
        
        Alamofire.request(url).responseJSON(completionHandler: {response in
            switch response.result{
            case .success:
                self.listData = response.result.value as! [[String: AnyObject]]
                
                if ( self.listData.count > 0 )
                {
                    let item = self.listData[0]
                    
                    let ret = item["retorno"] as? String
                    
                    if ret == "TOKEN_NAO_PODE_SER_PROCESSADO"
                    {
                        self.alertSimple(mensagem: "Token não pode ser processado")
                    }
                    else if ret == "NAO_ATUALIZOU_SALDO"{
                        self.alertSimple(mensagem: "Saldo não pode ser atualizado")
                    } else if ret == "NO"{
                        self.alertSimple(mensagem: "Saldo não pode ser atualizado")
                    }
                    else
                    {
                      // recupera a quantidade de pins que estao sendo movimentados
                      self.pinMov = item["pin_mov"] as? String
                      
                      self.processa_saldo()
                        
                        //verifica se o saldo de pincash chegou ao limite estipulado enviando o email
                        if self.isAlerta{
                            self.envia_email_lojista()
                        }
                        else
                        {
                          self.alertSimple(mensagem: "Processamento efetuado com sucesso")
                            
                        }
                    }
                    
                }
                else
                {
                    self.alertSimple(mensagem: "Token Inválido")
                }
                
            case .failure(let error):
                // print(error)
                self.alertSimple(mensagem: error.localizedDescription)
            }
            
            
            if self.listData.count == 0 {
                self.alertSimple(mensagem: "Token não foi localizado")
            }
            
        })
    }
    
    func processa_saldo()
    {
        let qtdepin = Int(pinMov)
        let saldo = Int(lbSaldoPin.text!)
        let resultado: Int = (saldo! - qtdepin!)
        
        let alerta1 = Int(palerta1)
        let alerta2 = Int(palerta2)
        let alerta3 = Int(palerta3)
        isAlerta = false
        
        if resultado <= alerta3!
        {
            isAlerta = true
        }
        else if resultado <= alerta2!{
            isAlerta = true
        }else if resultado <= alerta1!
        {
            isAlerta = true
        }
        
        lbSaldoPin.text = String(resultado)
        
        
        
        
       
        
        
        
    }
    func envia_email_lojista(){
        let  apiKey = "092865a8e6b63f1db3e06eea3e3652cd"
    
        let url: URL = URL(string: "https://checkincash.com.br/dashboard/alertapincash.php?apikey=\(apiKey)&contrato=\(self.idLojista!)")!
        
        
        
        Alamofire.request(url).responseJSON(completionHandler: {response in
            switch response.result{
            case .success:
                self.listData = response.result.value as! [[String: AnyObject]]
                
                if ( self.listData.count > 0 )
                {
                    let item = self.listData[0]
                    
                    let codReturn = item["result"] as? Int
                    
                    if codReturn == 1
                    {
                        self.alertSimple(mensagem: "Atenção: Processamento efetuado com sucesso, mas seu saldo de pincash está abaixo do limite estipulado")
                    }
                   
                    
                }
                else
                {
                    self.alertSimple(mensagem: "retorno Json do Alerta de email não pode retornar vazio ")
                }
            
            case .failure(let error):
                // print(error)
                self.alertSimple(mensagem: error.localizedDescription)
            }
            
            
            if self.listData.count == 0 {
                self.alertSimple(mensagem: "Arquvo de configuracoes de Pincash não foi localizado")
            }
            
        })
    }

    func alertSimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        present(alertController, animated: true, completion: nil)
        
    }
    
    
    func desconectar(){
        
        
        let alertController = UIAlertController(title: "Usuário", message: "deseja desconectar seu usuário ?", preferredStyle: .alert)
        
        let acaoCancelar = UIAlertAction(title: "Cancelar", style: .cancel){(action) in
            
            self.arquivodeconfiguracoes.lojistaLogOnOff = true
            self.lbLogonOnOff.setOn(self.arquivodeconfiguracoes.lojistaLogOnOff, animated: false)
            
        }
        let acaoConfirmar = UIAlertAction(title: "Sim", style: .default){(action) in
            
            // apaga dados do usuario e das preferencisa do sQLite
                self.arquivodeconfiguracoes.lojistaLogOnOff = false
                
                // voltar para a tela inicial de login.
                 self.performSegue(withIdentifier: "segueRetornoLoginApp", sender: nil)
                
          
            
            
            
        }
        
        alertController.addAction(acaoConfirmar)
        alertController.addAction(acaoCancelar)
        
        self.present(alertController, animated: true, completion: nil)
        
        lbLogonOnOff.setOn(arquivodeconfiguracoes.lojistaLogOnOff, animated: false)
        
        
    }
    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */

}
