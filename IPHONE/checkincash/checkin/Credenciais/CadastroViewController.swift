//
//  CadastroViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 02/01/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import Foundation
import UIKit
import CoreData
import SwiftHash

class CadastroViewController: UIViewController, UITextFieldDelegate {
   
    var userexists: Bool!
    
    var usr: [Usuario] = []
    
    @IBOutlet weak var txtNome: UITextField!
    @IBOutlet weak var txtSobrenome: UITextField!
    @IBOutlet weak var txtEmail: UITextField!
    @IBOutlet weak var txtRedigiteEmail: UITextField!
    @IBOutlet weak var txtSenha: UITextField!
    @IBOutlet weak var txtRedigiteSenha: UITextField!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        txtNome.delegate = self
        txtSobrenome.delegate = self
        txtEmail.delegate = self
        txtRedigiteEmail.delegate = self
        txtSenha.delegate = self
        txtRedigiteSenha.delegate = self
        
    }
    // Mantem foco dos campos do cadastro, via Delegate
    func textFieldShouldReturn(_ textField: UITextField) -> Bool {
        
        if textField == txtNome{
            txtSobrenome.becomeFirstResponder()
        }else if textField == txtSobrenome{
            txtEmail.becomeFirstResponder()
        }else if textField == txtEmail{
            txtRedigiteEmail.becomeFirstResponder()
        }else if textField == txtRedigiteEmail{
            txtSenha.becomeFirstResponder()
        }else if textField == txtSenha{
            txtRedigiteSenha.becomeFirstResponder()
        }else if textField == txtRedigiteSenha{
            
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
    
    @IBAction func btnCadastrar(_ sender: Any) {
        
      // inicia validações dos campos do cadastro
        if !isValidEmailAddress(emailAddressString: txtEmail.text!){
            self.alertSimple(mensagem: "email invalido!")
            return
        }
       
        if( txtEmail.text != txtRedigiteEmail.text){
            self.alertSimple(mensagem: "Email não confere!")
            return
        }
        
      if (txtNome.text?.count)! < 3
        {
            self.alertSimple(mensagem: "Campo nome inválido!")
            return
            
        }
        
        if (txtSobrenome.text?.count)! < 3
        {
            self.alertSimple(mensagem: "Campo sobrenome inválido!")
            return
            
        }
        
        if (txtSenha.text?.count)! < 5 {
            self.alertSimple(mensagem: "senha deve ter no mínimo 5 digitos")
            return
        }
        
        if ( txtSenha.text != txtRedigiteSenha.text ){
            self.alertSimple(mensagem: "Senha não confere!")
            return
            
        }
        
       // verifica se ja existem dados armazenados no Sqlite
        if !lerDados(){
      
            
            RESTusr.loadUsersID(emailID: txtEmail.text!, onComplete: { (recebeusr) in
                self.usr = recebeusr
                
                if self.usr[0].email == "" 
                {
                    // Efetua a inclusao do usuario local e no servidor
                   self.registrarUsuario()
                
                    
                }
                else
                {
                    DispatchQueue.main.async {
                        
                    self.alertSimple(mensagem: "email ja cadastrado")
                        
                    }
                }
                
            }, onError: { (error) in
                print( error  )
            })
           
           
            
            }
        else
            {
                // self.apagarDados()
                self.alertSimple(mensagem: "ja contem dados locais do usuário")
            }
 
        }
    
       
    
    
 
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    override func viewWillAppear(_ animated: Bool) {
        self.navigationController?.setNavigationBarHidden(false, animated: true)
    }
    
  
    func registrarUsuario(){
        
        
        let usuariorst = Usuario()
        
        usuariorst.email = txtEmail.text!
        usuariorst.nome = txtNome.text!
        usuariorst.sobrenome = txtSobrenome.text!
        usuariorst.iscompleto = "0"
        usuariorst.senha = MD5(txtSenha.text!).lowercased()
        
        // Armazena dados
        RESTusr.save(usr: usuariorst) { (Sucess) in
           
            DispatchQueue.main.async {
                
                self.alertSucesso()
                
            }
            
        }
        
    }
    
    
    func lerDados() -> Bool {
   
        let appDelegate = UIApplication.shared.delegate as! AppDelegate
        let context = appDelegate.persistentContainer.viewContext
        
        let requisicao = NSFetchRequest<NSFetchRequestResult>(entityName: "Usuariodb")
        
        
        do{
           let usuario =  try  context.fetch(requisicao)
            
            if usuario.count <= 0
            {
                userexists = false
               
            }
            else
            {
               userexists = true
            }
            
            
        }catch{
            self.alertSimple(mensagem: "Erro ao Recuperar os dados")
        }
        
        return userexists
        
    }
    
    func apagarDados()
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
                    
                   // let nomeUsuario = usr.value(forKey: "nome")
                    
                   // print( String(describing: nomeUsuario) + " - oi " )
                    
                    context.delete(usr)
                    
                    do{
                        try context.save()
                        
                        self.alertSimple(mensagem: "Usuário deletado")
                    }catch{
                        self.alertSimple(mensagem: "Usuário não foi deletado")
                    }
                }
            }
            
        }catch{
            self.alertSimple(mensagem: "Erro ao deletar usuario")
        }
        
      
        
        
        
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
    
    // verifica campos
    func isValidaCampos() -> Bool{
        
        let res: Bool!
        
        res = isValidEmailAddress(emailAddressString: txtEmail.text!)
        
        return res
        
    }
    
    func alertSimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        present(alertController, animated: true, completion: nil)
        
    }
    
    func alertSucesso(){
        let alertController = UIAlertController(title: "Sucesso", message: "Registro bem sucedido!", preferredStyle: .alert)
        
        let acaoConfirmar = UIAlertAction(title: "Voltar ao Login", style: .default){(action) in
            self.performSegue(withIdentifier: "segueCadastroLogin", sender: nil)
            
        }
        
        alertController.addAction(acaoConfirmar)
      
        self.present(alertController, animated: true, completion: nil)
        
    }
    
}

