//
//  TokenValida.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 14/01/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import Foundation
import UIKit

class TokenValida: UIViewController, UITextFieldDelegate{

    @IBOutlet weak var tokenInformado: UITextField!
    
    var tokenRecebido: String!
    var emailRecebido: String!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
      tokenInformado.delegate = self
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        if segue.identifier == "seguePassword"{
            let vcDestino =  segue.destination as! TrocaSenha
            
            vcDestino.emailRecebido = self.emailRecebido
            
        }
    }
    // Mantem foco dos campos do cadastro, via Delegate
    func textFieldShouldReturn(_ textField: UITextField) -> Bool {
        
        if  textField == tokenInformado{
            
            // desliga o teclado, uma vez que se perde o foco do campo
            textField.resignFirstResponder()
        }
        return true
    }
    // toda vez que se tocar na tela o metodo touchesBegan sera chamado, e assim encerra o teclado
    // se ele estiver na tela
    override func touchesBegan(_ touches: Set<UITouch>, with event: UIEvent?) {
        view.endEditing(true)
    }
    
    
    @IBAction func botaoEnviar(_ sender: Any) {
        
        if tokenRecebido != tokenInformado.text!{
            
           
             self.alertSimple(mensagem: "Token Inválido")
        }
        else{
            
            self.performSegue(withIdentifier: "seguePassword", sender: nil)
            
        }
    }
    
    func alertSimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        present(alertController, animated: true, completion: nil)
        
    }
}
