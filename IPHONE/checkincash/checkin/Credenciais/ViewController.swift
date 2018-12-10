//
//  ViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 28/12/2017.
//  Copyright © 2017 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import CoreData
import SwiftHash
import CoreLocation
import UserNotifications

class ViewController: UIViewController, UITextFieldDelegate, CLLocationManagerDelegate  {

    var minhaLocalizacao = CLLocationManager()
    var latitude: Double = 0.0
    var longitude: Double = 0.0
    var testesorteio: [Sorteio] = []
    lazy var locationManager = CLLocationManager()
    let arquivodeconfiguracoes = Configuration.compartilhado
    let arquivoFuncoes = FuncoesGerenciaveis.funcao
    
    //var usr = Usuario()
    var userexists: Bool!
    var usr: [Usuario] = []
    
    @IBOutlet weak var txtEmail: UITextField!
    @IBOutlet weak var txtSenha: UITextField!
    @IBOutlet weak var txtSemConta: UIButton!
    @IBOutlet weak var txtEsqueceuSenha: UIButton!
    
    // preparou a view a ser carregada
    override func viewDidLoad() {
        super.viewDidLoad()
        
        
        // Do any additional setup after loading the view, typically from a nib.
        minhaLocalizacao.delegate = self
        minhaLocalizacao.desiredAccuracy = kCLLocationAccuracyBest  // escolhida a melhor precisao
        minhaLocalizacao.requestWhenInUseAuthorization() // Efetua solicitacao de autorização
        minhaLocalizacao.startUpdatingLocation()
        
        txtEmail.delegate = self
        txtSenha.delegate = self
        
        
        view.isHidden = true
        
      
        
        
     
      
      
    }
    
    func locationManager(_ manager: CLLocationManager, didChangeAuthorization status: CLAuthorizationStatus) {
        
        if status == .denied {
            
           self.apagarDados()
            
            
            let alertacontroller =  UIAlertController(title: "Permissão de localização", message: "Para que o Checkincash funcione corretamente permita o acesso à sua localização! por favor habilite!", preferredStyle: .alert)
            
            let acaoConfiguracoes = UIAlertAction(title: "Abrir Configurações", style: .default, handler: { (alertaConfiguracoes) in
                
                if  let configuracoes = NSURL(string: UIApplicationOpenSettingsURLString){
                    
                    UIApplication.shared.open(configuracoes as URL)
                }
            })
            let acaoCancelar = UIAlertAction(title: "Cancelar", style: .destructive, handler: nil)
            
            alertacontroller.addAction(acaoConfiguracoes)
            alertacontroller.addAction(acaoCancelar)
            
            present(alertacontroller, animated: true, completion: nil)
            
            
        }
        
    }
    // Carregou a viu completamente
    override func viewDidAppear(_ animated: Bool) {
        super.viewDidAppear(animated)
        
        
         DispatchQueue.main.async {
        
            if self.arquivodeconfiguracoes.lojistaLogOnOff
            {
                // carrega tela lojista
                self.performSegue(withIdentifier: "segueLojistaPinCash", sender: nil)
            }
            else
            {
                if self.arquivoFuncoes.usuarioLogOnOff
                {
                    self.performSegue(withIdentifier: "segueLoginAutomatico", sender: nil)
                }
                else
                {
                    self.view.isHidden = false
                    
                }
      
            }
        }
        
    }
    // a view ira desaparecer, ou seja, uma outra view foi chamada
    override func viewDidDisappear(_ animated: Bool) {
        super.viewDidAppear(animated)
        
       //limpa os campos de digitaçao do usuario antes de chamar a nova tela.
        
        self.txtEmail.text = ""
        self.txtSenha.text = ""
       
        
        
    }
    
  
   
    
    func locationManager(_ manager: CLLocationManager, didUpdateLocations locations: [CLLocation]) {
        // locations.last pega a ultima posicao do usuario
        let localizacaoUsuario: CLLocation = locations.last!
        
       // let platitude = localizacaoUsuario.coordinate.latitude
       // let plongitude = localizacaoUsuario.coordinate.longitude
        
        // self.latitude = String(platitude)
        // self.longitude = String(plongitude)
      
        arquivodeconfiguracoes.latitude = localizacaoUsuario.coordinate.latitude
        arquivodeconfiguracoes.longitude = localizacaoUsuario.coordinate.longitude
        
    
        
        
    }
    
    
    
    // Mantem foco dos campos do cadastro, via Delegate
    func textFieldShouldReturn(_ textField: UITextField) -> Bool {
        
        if textField == txtEmail{
            txtSenha.becomeFirstResponder()
        }else if textField == txtSenha{
            
             // desliga o teclado, uma vez que se perde o foco do campo usando o resignFirstResponder
            textField.resignFirstResponder()
        }
        return true
    }
    
    // toda vez que se tocar na tela o metodo touchesBegan sera chamado, e assim encerra o teclado
    // se ele estiver na tela
    override func touchesBegan(_ touches: Set<UITouch>, with event: UIEvent?) {
        view.endEditing(true)
    }
    
    @IBAction func btnAcessar(_ sender: Any) {
        
        let senhamd5 = MD5(txtSenha.text!)
        
        RESTusr.loadCredentials(emailID: txtEmail.text!, password: senhamd5, onComplete: { (recebeusr) in
            self.usr = recebeusr
            
            if self.usr[0].email == ""
            {
                // Efetua a inclusao do usuario local e no servidor
              DispatchQueue.main.async {
                self.alertSimple(mensagem: "usuário ou senha inválida.")
                }
                
            }
            else
            {
              
                // print("usuário válido.")
                
                DispatchQueue.main.async {
                    self.salvar(usuariorst: self.usr)
                    
                    // Armazena Preferencias
                    self.arquivodeconfiguracoes.usuarioLogOnOff = true
                    self.arquivodeconfiguracoes.distanciaQuilometros = 3
                    self.arquivodeconfiguracoes.codigousuario = self.usr[0].pk_usuario
                    self.arquivodeconfiguracoes.nomeusuario = self.usr[0].nome
                    self.arquivodeconfiguracoes.codigocategoria = 0
                    
                    // prepara a primeira notificacao
                    let content = UNMutableNotificationContent()
                    content.title = "Check-in Cash"
                    content.subtitle = "Bem Vindo!"
                    content.body = "Obrigado por usar o Check-in Cash a maneira mais fácil de ganhar prêmios"
                    content.sound = UNNotificationSound(named: "beeppin.caf")
                    content.categoryIdentifier = "PinNotificationSimple"
                    
                    // criar um disparo de notificacao, existem tres modelos de disparo de Trigger,
                    // um para o intervalo de tempo em segundos, outro para uma determinada data e hora,
                    // e um terceiro baseado em localização, onde pode-se monitorar uma região, e ao
                    // entrar nesta regiao dispara-se a notificacao.
                    
                    let trigger = UNTimeIntervalNotificationTrigger(timeInterval: 120, repeats: false)
                    
                    // criar uma requisicao para notificacao
                    let idNotification = String( Date().timeIntervalSince1970 )
                    
                    let request = UNNotificationRequest(identifier: idNotification, content: content, trigger: trigger)
                    
                    UNUserNotificationCenter.current().add(request, withCompletionHandler: nil)
                    
              
                    
                    // remove notificacao recorrente se houver
                    self.removeNotificacaoRecorrente()
                    
                  
                    // cria notificacao recorrente
                    self.notificacaoRecorrente()
                    
                    
                    
                    self.view.isHidden = true
                    
                    
                    self.performSegue(withIdentifier: "segueLoginAutomatico", sender: nil)
                    
                }
                
               
                
            }
            
        }, onError: { (error) in
            print( error  )
        })
    }
    
    func notificacaoRecorrente()
    {
        
        // prepara a  notificacao
        let content = UNMutableNotificationContent()
        content.title = "Check-in Cash"
        content.subtitle = "Lembre-se:"
        content.body = "Faça check-in em lojas credênciadas, receba vantagens na hora e concorra a prêmios"
        content.sound = UNNotificationSound(named: "beeppin.caf")
        content.categoryIdentifier = "PinNotificationSimple"
        
        // criar um disparo de notificacao, existem tres modelos de disparo de Trigger,
        // um para o intervalo de tempo em segundos, outro para uma determinada data e hora,
        // e um terceiro baseado em localização, onde pode-se monitorar uma região, e ao
        // entrar nesta regiao dispara-se a notificacao.
        
        
        // 72H em 72H - ou seja de tres em tres dias - 259200
        let trigger = UNTimeIntervalNotificationTrigger(timeInterval: 259200, repeats: true)
        
        let request = UNNotificationRequest(identifier: "2509", content: content, trigger: trigger)
        
        UNUserNotificationCenter.current().add(request, withCompletionHandler: nil)
        
        
    }
    
    // remove notificacao recorrente
    func removeNotificacaoRecorrente()
    {
        UNUserNotificationCenter.current().removePendingNotificationRequests(withIdentifiers: ["2509"])
    }
    
    override func viewWillAppear(_ animated: Bool) {
        self.navigationController?.setNavigationBarHidden(true, animated: true)
    }
    


    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


    func salvar(usuariorst: [Usuario])
    {
        let appDelegate = UIApplication.shared.delegate as! AppDelegate
        let context = appDelegate.persistentContainer.viewContext
        
        
        /* Salvar dados Core Dada */
        let usuario = NSEntityDescription.insertNewObject(forEntityName: "Usuariodb", into: context)
        let preferencia = NSEntityDescription.insertNewObject(forEntityName: "Preferenciasdb", into: context)
        
        /* configurar usuario */
          usuario.setValue(usuariorst[0].nome, forKey: "nome")
          usuario.setValue(usuariorst[0].sobrenome, forKey: "sobrenome")
          usuario.setValue(usuariorst[0].email, forKey: "email")
          usuario.setValue(usuariorst[0].senha, forKey: "senha")
        
          // Inicializa dados de Preferencias do APP
          preferencia.setValue(usuariorst[0].pk_usuario, forKey: "codigousuario")
          
          preferencia.setValue("X", forKey: "categoriaativa")
          preferencia.setValue("X", forKey: "raioquilometro")
        
        do
        {
            try context.save()
        }
        catch
        {
            self.alertSimple(mensagem: "Erro ao salvar no local")
        }
        
    }
    
    func apagarDados()
    {
        
        
        if ( !arquivoFuncoes.limpaDadosUsuario){
            //self.alertSimple(mensagem: "Erro ao restaurar a base")
            // nao é necessario tratar este evento, o objetivo aqui é limpar o usuario da base
            // caso o mesmo nao tenha dado as permissoes de localização, toda vez que o aplicativo
            // iniciar e a permissão nao estiver habilitada, sera apresentado uma pergunta informando
            // que o usuario deve permitir o acesso à localização, caso ele nao permita a tabela de registro
            // de usuário sempre se manterá limpa, por este motivo é invocado o método arquivoFuncoes.limpaDadosUsuario
            // justamente para impedir o acesso ao aplicativo e o mesmo apresente erros.
        }
        
        
    }
    
    func alertSimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        present(alertController, animated: true, completion: nil)
        
    }
  
  
}

