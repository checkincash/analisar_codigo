//
//  LojistaViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 14/03/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import SwiftHash
import Alamofire


class LojistaViewController: UIViewController, UITextFieldDelegate {

    let arquivodeconfiguracoes = Configuration.compartilhado
    var listData: [[String: AnyObject]] = [[String: AnyObject]]()
    
    @IBOutlet weak var lbCnpj: UITextField!
    @IBOutlet weak var lbSenha: UITextField!
    
    @IBAction func btnAcessar(_ sender: UIButton) {
        
        
        recupera_lojista()
        
    }
    
    
    override func viewDidLoad() {
        super.viewDidLoad()

        lbCnpj.delegate = self
        lbSenha.delegate = self
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    // Mantem foco dos campos do cadastro, via Delegate
    func textFieldShouldReturn(_ textField: UITextField) -> Bool {
        
        if textField == lbCnpj{
            lbSenha.becomeFirstResponder()
        }else if textField == lbSenha{
            
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
    
   func recupera_lojista(){
        let url: URL = URL(string: "https://www.checkincash.com.br/api/lojista/credenciais_lojista.php?pcnpj=\(self.lbCnpj.text!)")!
        
        
        
        Alamofire.request(url).responseJSON(completionHandler: {response in
            switch response.result{
            case .success:
                self.listData = response.result.value as! [[String: AnyObject]]
                
                if ( self.listData.count > 0 )
                {
                        let item = self.listData[0]
                    
                        let senha   = MD5((self.lbSenha.text)!)
                        let senhadb = (item["senha_usuario"] as? String)!
                    
                        if ( senha.lowercased() == senhadb )
                        {
                            // Armazena Preferencias
                            self.arquivodeconfiguracoes.lojistaLogOnOff = true
                            self.arquivodeconfiguracoes.codigolojista = (item["pk_contrato"] as? String)!
                            self.arquivodeconfiguracoes.cnpjlojista = (item["cnpj"] as? String)!
                            self.arquivodeconfiguracoes.razao = (item["razao"] as? String)!
                            
                            // carrega tela Lojista
                            self.performSegue(withIdentifier: "segueLojistacred", sender: nil)
                        }
                        else
                        {
                           self.alertSimple(mensagem: "Senha Inválida")
                        }
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
    
    func alertSimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        present(alertController, animated: true, completion: nil)
        
    }
    
}

   
