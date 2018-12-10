//
//  enviaEmailClient.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 04/01/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import Foundation
import MessageUI

class enviaEmailClient: UIViewController, MFMailComposeViewControllerDelegate {
    
    
    
    
    func sendEmail() {
        
        let mail = configureMailController()
        
        if MFMailComposeViewController.canSendMail(){
            
            self.present(mail, animated: true, completion: nil)
        }else{
            showMailError()
        }
        
    }
    
    
    func mailComposeController(_ controller: MFMailComposeViewController, didFinishWith result: MFMailComposeResult, error: Error?) {
        controller.dismiss(animated: true, completion: nil)
    }
    
    func configureMailController() -> MFMailComposeViewController {
        let mailComposerVC = MFMailComposeViewController()
        mailComposerVC.mailComposeDelegate = self
        mailComposerVC.setToRecipients(["mvsilvaneto.cel@gmail.com"])
        mailComposerVC.setSubject("Alo")
        mailComposerVC.setMessageBody("isto é um teste", isHTML: false)
        
        return mailComposerVC
    }
    
    
    
    func showMailError(){
        
        let alertController = UIAlertController(title: "Email", message: "Erro ao enviar email pelo dispositivo", preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        self.present(alertController, animated: true, completion: nil)
        
    }
    
    
}
