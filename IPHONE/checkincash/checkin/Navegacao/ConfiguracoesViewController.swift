//
//  ConfiguracoesViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 31/01/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import FBSDKLoginKit


class ConfiguracoesViewController: UIViewController, FBSDKLoginButtonDelegate {
    func loginButton(_ loginButton: FBSDKLoginButton!, didCompleteWith result: FBSDKLoginManagerLoginResult!, error: Error!) {
        
        if(error == nil)
        {
            self.alertSimple(mensagem: "login complete")
            //print(FBSDKAccessToken.current()) -> crashes because its nil
            //print(result.grantedPermissions) -> crashes its nil
        }
        else{
            print(error.localizedDescription)
        }
        
    }
    
    func loginButtonDidLogOut(_ loginButton: FBSDKLoginButton!) {
        
        
    }
    



    @IBOutlet weak var swUsuarioOnOff: UISwitch!
    @IBOutlet weak var slQuilometros: UISlider!
    @IBOutlet weak var lbKM: UILabel!
    @IBOutlet weak var lbNomeusuario: UILabel!
    
    //  var accesstoken: AccessToken!
   
    let arquivodeconfiguracoes = Configuration.compartilhado
    let arquivoFuncoes = FuncoesGerenciaveis.funcao
    
    override func viewDidLoad() {
        super.viewDidLoad()
  
      /*
        if (FBSDKAccessToken.current() != nil)
        {
            // User is already logged in, do work such as go to next view controller.
        }
        else
        {
            let loginView: FBSDKLoginButton = FBSDKLoginButton()
            self.view.addSubview(loginView)
            loginView.center = self.view.center
            loginView.readPermissions = ["public_profile", "email", "user_friends"]
            loginView.delegate = self
        }
         */
        
        fetchProfile()
   }
    
    
    
    // ira aparecer
    override func viewWillAppear(_ animated: Bool) {
        super.viewWillAppear(animated)
        
        // carrega arquivo de configuracoes
        mostra_configuracoes()
        
    }
    

    
    
    func mostra_configuracoes(){
        
        swUsuarioOnOff.setOn(arquivodeconfiguracoes.usuarioLogOnOff, animated: false)
        slQuilometros.setValue(Float(arquivodeconfiguracoes.distanciaQuilometros), animated: false)
        quilometrosdef(with: arquivodeconfiguracoes.distanciaQuilometros)
    }
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    func quilometrosdef(with value: Int){
        lbKM.text = "\(value)KM"
    }
   
    @IBAction func changeUserOnOff(_ sender: UISwitch) {
        arquivodeconfiguracoes.usuarioLogOnOff = sender.isOn
        
        if !sender.isOn {
            msgApagar()
        }
    }
    
    
    @IBAction func changeQuilometro(_ sender: UISlider) {
        let valor = Int(sender.value)
        quilometrosdef(with: valor)
        arquivodeconfiguracoes.distanciaQuilometros = valor
        
       
    }
    
    func msgApagar(){
        
        
        let alertController = UIAlertController(title: "Usuário", message: "deseja desconectar seu usuário ?", preferredStyle: .alert)
        
        let acaoCancelar = UIAlertAction(title: "Cancelar", style: .cancel){(action) in
            
            self.arquivodeconfiguracoes.usuarioLogOnOff = true
            self.swUsuarioOnOff.setOn(self.arquivodeconfiguracoes.usuarioLogOnOff, animated: false)
        
        }
        let acaoConfirmar = UIAlertAction(title: "Sim", style: .default){(action) in
            
            // apaga dados do usuario e das preferencisa do sQLite
            if self.arquivoFuncoes.limpaDadosUsuario
            {
                self.arquivodeconfiguracoes.usuarioLogOnOff = false
                
                // retorna ao login
               
                
                
             //  self.performSegue(withIdentifier: "segueRetornaLogin", sender: nil)
                
               exit(0)
                
                
               
            }
            else
            {
                self.alertSimple(mensagem: "Não foi possível desconectar o usuário")
            }
            
            
            
        }
        
        alertController.addAction(acaoConfirmar)
        alertController.addAction(acaoCancelar)
        
        self.present(alertController, animated: true, completion: nil)
        
        swUsuarioOnOff.setOn(arquivodeconfiguracoes.usuarioLogOnOff, animated: false)
        
        
    }
    
    func alertSimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        present(alertController, animated: true, completion: nil)
        
    }
    
    func fetchProfile() {
        let parameters = ["fields": "first_name, email, last_name, picture"]
        
        FBSDKGraphRequest(graphPath: "me", parameters: parameters).start(completionHandler: { (connection, user, requestError) -> Void in
            
            if requestError != nil {
                print("----------ERROR-----------")
                print(requestError)
                return
            }
            let userData = user as! NSDictionary
            let email = userData["email"] as? String
            let firstName = userData["first_name"] as? String
            let lastName = userData["last_name"] as? String
            
            self.lbNomeusuario.text = firstName! + " " + lastName!
            
            print( firstName! )
            print( lastName! )
          //  print( email! )
            
            var pictureUrl = ""
            if let picture = userData["picture"] as? NSDictionary, let data = picture["data"] as? NSDictionary, let url = data["url"] as? String {
                pictureUrl = url
                print(pictureUrl)
            }
        })
    }
    
   

}

