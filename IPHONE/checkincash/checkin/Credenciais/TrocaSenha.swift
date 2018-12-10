//
//  TrocaSenha.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 15/01/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import Foundation
import UIKit
import SwiftHash
import CoreData


class TrocaSenha: UIViewController, UITextFieldDelegate{
    
    var usr: [Usuario] = [];
    var emailRecebido: String!
    
    @IBOutlet weak var txtSenha1: UITextField!
    @IBOutlet weak var txtSenha2: UITextField!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        txtSenha1.delegate = self
        txtSenha2.delegate = self
        
    }
    // Mantem foco dos campos do cadastro, via Delegate
    func textFieldShouldReturn(_ textField: UITextField) -> Bool {
        
        if textField == txtSenha1{
            txtSenha2.becomeFirstResponder()
            
        }else if textField == txtSenha2{
            
            // desliga o teclado, uma vez que se perde o foco do campo usando o resignFirstResponder
            textField.resignFirstResponder()
        }
        
        
        return true
    }
    
    // Delegate, nao permite passar com campos em branco
    func textFieldShouldEndEditing(_ textField: UITextField) -> Bool {
        
        let isValidPassword: Bool = textField.text!.count < 6 ? true : false
        
        
        return !isValidPassword
        
    }
    

    
    // toda vez que se tocar na tela o metodo touchesBegan sera chamado, e assim encerra o teclado
    // se ele estiver na tela
    override func touchesBegan(_ touches: Set<UITouch>, with event: UIEvent?) {
        view.endEditing(true)
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    override func viewWillAppear(_ animated: Bool) {
        super.viewWillAppear(animated)
        
        // esconde titulo de navegacao
        self.navigationController?.setNavigationBarHidden(true, animated: true)
        
      
        // carrega tabela com dados do usuario retiradas do servidor
        RESTusr.loadUsersID(emailID: emailRecebido, onComplete: { (recebeusr) in
            self.usr = recebeusr
            
            if self.usr[0].email == ""
            {
                self.alertSimple(mensagem: "Não foi possível carregar dados do servidor, tente mais tarde")
            }
            
            
        }, onError: { (error) in
            print( error  )
        })
 
    }
    
   // Salva dados no Servidor 
    @IBAction func botaoSalvar(_ sender: Any) {
        
        
        if txtSenha1.text != txtSenha2.text{
            
            self.alertSimple(mensagem: "Senha não confere")
            
            return
        }
        
        if (txtSenha1.text?.isEmpty )! {
            
            self.alertSimple(mensagem: "Senha não pode ser vazia")
            
            return
        }
        
        
        
        
        
        
                usr[0].senha = MD5(txtSenha1.text!)
            
                let usuariorst = Usuario()
            
                usuariorst.email = usr[0].email
                usuariorst.nome = usr[0].nome
                usuariorst.sobrenome = usr[0].sobrenome
                usuariorst.iscompleto = "0"
                usuariorst.senha = MD5(txtSenha1.text!).lowercased()
            
                // Armazena dados
                RESTusr.update(usr: usuariorst) { (Sucess) in
                    // salva local
               
                    DispatchQueue.main.async {
                         self.update()
                         self.TrocaSucesso()
                    }
                    
            }
        
        
    }
    
    func update()
    {
        let appDelegate = UIApplication.shared.delegate as! AppDelegate
        let context = appDelegate.persistentContainer.viewContext
        let requisicao = NSFetchRequest<NSFetchRequestResult>(entityName: "Usuariodb")
        let predicate = NSPredicate(format: "email = %@", emailRecebido)
        
        requisicao.predicate = predicate
        
        do {
            
            let usuario = try context.fetch(requisicao)
            
            if usuario.count > 0 {
                
                
                for usr in usuario as! [NSManagedObject] {
                    
                    usr.setValue(MD5(txtSenha1.text!).lowercased(), forKey: "senha")
                    
                    do{
                        try context.save()
                    }catch{
                        self.alertSimple(mensagem: "Erro ao atualizar dados locais")
                    }
                }
            }
            
        }catch{
            self.alertSimple(mensagem: "Erro ao atualizar dados")
        }
        
        
    }
    
    
    // Dispara mensagem simples de alerta
    func alertSimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        present(alertController, animated: true, completion: nil)
        
    }
    
    func TrocaSucesso(){
        let alertController = UIAlertController(title: "Sucesso", message: "Troca de senha bem sucedida!", preferredStyle: .alert)
        
        let acaoConfirmar = UIAlertAction(title: "Voltar ao Login", style: .default){(action) in
            self.performSegue(withIdentifier: "segueLogin", sender: nil)
            
        }
        let acaoCancelar = UIAlertAction(title: "Fechar", style: .destructive, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        alertController.addAction(acaoCancelar)
        
        self.present(alertController, animated: true, completion: nil)
        
    }
    
    
    // Verifica Email
    func isValidEmailAddress(emailAddressString: String) -> Bool {
        
        var returnValue = true
        let emailRegEx = "[A-Z0-9a-z.-_]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,3}"
        
        do {
            let regex = try NSRegularExpression(pattern: emailRegEx)
            let nsString = emailAddressString as NSString
            let results = regex.matches(in: emailAddressString, range: NSRange(location: 0, length: nsString.length))
            
            if results.count == 0
            {
                returnValue = false
            }
            
        } catch let error as NSError {
            print("invalid regex: \(error.localizedDescription)")
            returnValue = false
        }
        
        return  returnValue
    }
}
