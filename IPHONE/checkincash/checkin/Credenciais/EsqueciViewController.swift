//
//  EsqueciViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 02/01/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import Foundation
import UIKit
import CoreData
import MessageUI
import Mailgun_In_Swift




class EsqueciViewController: UIViewController, UITextFieldDelegate, MFMailComposeViewControllerDelegate {
    
    var usr: [Usuario] = []
    var token: String = ""
    
    @IBOutlet weak var txtEmail: UITextField!
    
    @IBOutlet weak var indicadorProcessamento: UIActivityIndicatorView!
    
    // toda vez que se tocar na tela o metodo touchesBegan sera chamado, e assim encerra o teclado
    // se ele estiver na tela
    override func touchesBegan(_ touches: Set<UITouch>, with event: UIEvent?) {
        view.endEditing(true)
    }
    
    
    
    @IBAction func btnEnviar(_ sender: Any) {
        
        indicadorProcessamento.isHidden = false
        indicadorProcessamento.startAnimating()
        
        
        let mailgun = MailgunAPI(apiKey: "key-e9c8ba3aac2ae85b1b1ac54776d1a0e8", clientDomain:"checkincash.com.br")
        
        RESTusr.loadUsersID(emailID: txtEmail.text!, onComplete: { (recebeusr) in
            self.usr = recebeusr
            
            if self.usr[0].email == ""
            {
                  DispatchQueue.main.async {
                    self.alertSimple(mensagem: "email informado não existe!")
                    
                    self.indicadorProcessamento.isHidden = true
                    self.indicadorProcessamento.stopAnimating()
                }
            }
            else
            {
                  DispatchQueue.main.async {
                  //  self.alertSimple(mensagem: "email localizado.")
                    // ROTINA QUE ENVIA EMAIL
                    
                  
                    // Gera o token com 4 digitos
                    for _ in 0..<4{
                        
                        
                         self.token = self.token + String(arc4random_uniform( UInt32(9) )+1 )
                        
                         
                    }
                    
                    self.usr[0].pin_recupera_senha = self.token
                    
                    let usuariorst = Usuario()
                    
                    usuariorst.email = self.usr[0].email
                    usuariorst.nome = self.usr[0].nome
                    usuariorst.sobrenome = self.usr[0].sobrenome
                    usuariorst.iscompleto = self.usr[0].iscompleto
                    usuariorst.senha = self.usr[0].senha
                    usuariorst.pin_recupera_senha = self.usr[0].pin_recupera_senha
                    
                    // update dados no servidor
                    
                    RESTusr.update(usr: usuariorst) { (Sucess) in
                        
                        // Envia Email contendo o Token
                        
                        let mensagem = "Olá " + self.usr[0].nome + ", recebemos sua notificação para troca de senha, agora faça o seguinte: Insira este TOKEN: " + self.token + " em seu aplicativo para efetuar a troca de sua senha."
                        
                        DispatchQueue.main.async {
                        mailgun.sendEmail(to: self.txtEmail.text!, from: "noreply@checkincash.com.br", subject: "Checkin | Troca Senha", bodyHTML: mensagem) { mailgunResult in
                            
                            if mailgunResult.success{
                                
                                
                                self.alertaEnvioEmailSucesso()
                                
                                self.indicadorProcessamento.isHidden = true
                                self.indicadorProcessamento.stopAnimating()
                                
                                
                            }else
                            {
                                self.alertSimple(mensagem: "Email not sent")
                                
                                self.indicadorProcessamento.isHidden = true
                                self.indicadorProcessamento.stopAnimating()
                            }
                            
                         }
                        }
                    }
                    
                    
                   
                }
                
                

                
                
            }
            
        }, onError: { (error) in
            print( error  )
        })
        
        
       
        
    }
    override func viewDidLoad() {
        super.viewDidLoad()
        
        txtEmail.delegate = self
        indicadorProcessamento.isHidden = true
    }
    
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        
        if segue.identifier == "segueToken"{
            let vcDestino =  segue.destination as! TokenValida
            
            vcDestino.tokenRecebido = self.token
            vcDestino.emailRecebido = self.txtEmail.text
        }
        
    }
    
    func textFieldShouldReturn(_ textField: UITextField) -> Bool {
        if textField == txtEmail{
             // desliga o teclado, uma vez que se perde o foco do campo usando o resignFirstResponder
            textField.resignFirstResponder()
        }
        return true
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    override func viewWillAppear(_ animated: Bool) {
        self.navigationController?.setNavigationBarHidden(false, animated: true)
    }
    
    func alertSimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        self.present(alertController, animated: true, completion: nil)
        
    }
    
    func alertaEnvioEmailSucesso(){
        let alertController = UIAlertController(title: "Email Enviado", message: "Um email foi enviado com o código token para registro de nova senha", preferredStyle: .alert)
        
        let acaoConfirmar = UIAlertAction(title: "Informar Token", style: .default){(action) in
              self.performSegue(withIdentifier: "segueToken", sender: nil)
            
        }
        let acaoCancelar = UIAlertAction(title: "Fechar", style: .cancel, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        alertController.addAction(acaoCancelar)
        
        self.present(alertController, animated: true, completion: nil)
        
    }
    
    func update(token: String)
    {
        let appDelegate = UIApplication.shared.delegate as! AppDelegate
        let context = appDelegate.persistentContainer.viewContext
        let requisicao = NSFetchRequest<NSFetchRequestResult>(entityName: "Usuariodb")
        let predicate = NSPredicate(format: "email = %@", txtEmail.text!)
        
        requisicao.predicate = predicate
        
        do {
            
            let usuario = try context.fetch(requisicao)
            
            if usuario.count > 0 {
                
                
                for usr in usuario as! [NSManagedObject] {
                    
                    usr.setValue(token, forKey: "pin_recupera_senha")
                    
                    do{
                        try context.save()
                    }catch{
                        self.alertSimple(mensagem: "Erro ao atualizar dados")
                    }
                }
            }
            
        }catch{
            self.alertSimple(mensagem: "Erro ao atualizar dados")
        }
        
    
   }
}
