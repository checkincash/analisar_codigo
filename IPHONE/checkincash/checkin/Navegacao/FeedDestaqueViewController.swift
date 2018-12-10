//
//  FeedDestaqueViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 07/02/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import Kingfisher
import GoogleMaps
import Alamofire

// import FacebookLogin
import FBSDKShareKit

class FeedDestaqueViewController: UIViewController, FBSDKSharingDelegate {
    
    var listData: [[String: AnyObject]] = [[String: AnyObject]]()
    
    func sharer(_ sharer: FBSDKSharing!, didCompleteWithResults results: [AnyHashable : Any]!) {
        checkinSucesso()
    }
    
    func sharer(_ sharer: FBSDKSharing!, didFailWithError error: Error!) {
        if(error == nil)
        {
            self.alertasimple(mensagem: "erro ao compartilhar")
            //print(FBSDKAccessToken.current()) -> crashes because its nil
            //print(result.grantedPermissions) -> crashes its nil
        }
        else{
            self.alertasimple(mensagem: error.localizedDescription)
        }
    }
    
    func sharerDidCancel(_ sharer: FBSDKSharing!) {
         print("cancelou")
    }
    
    
    
    var codigoID: String!        // codigo idpublicador
    var codigoUsuario: String!   // codigo usuario logado
    var contratoID: String!      // codigo do contrato lojista
    var pincash: String!         // quantidade de pins distribuida pelo lojista
    var idsorteio: String!       // campanha sorteio ativa
    var desconto: String!        // desconto praticado do dia
    var isCheckin: String!       // esta em checkin ou nao
    var validade: String!        // quando foi feito o checkin
    var token: String!           // numero do controle do token
    var lojaimagem: String!      // nome do arquivo da foto referente a publicacao da loja
    var fachada: String!         // nome do arquivo da foto referente a fachada da loja
    var cnpj: String!
    var nomeloja: String!
    var enderecoloja: String!
    var cidadeloja: String!
    var categoriasloja: String!
    var classificacao1: String!
    var classificacao2: String!
    
    var segunda: String!        // horario de funcionamento segunda
    var terca: String!          // horario de funcionamento terca
    var quarta: String!         // horario de funcionamento quarta
    var quinta: String!         // horario de funcionamento quinta
    var sexta: String!          // horario de funcionamento sexta
    var sabado: String!         // horario de funcionamento sabado
    var domingo: String!        // horario de funcionamento domingo
    var telefoneloja: String!
    var pcpa: String!           // desconto formatado do dia
    var desc1: String!          // desconto formatado do dia + 1  ( dia seguinte )
    var desc2: String!          // desconto formatado do dia + 2  ( dia subsequnte )
    var desc3: String!          // desconto formatado do dia + 3  ( desconto do terceiro dia )
    var latitude: String!       // posicionamento do usuario
    var longitude: String!      // posicionamento do usuario
    var latitudeloja: String!   // posicionamento da loja
    var longitudeloja: String!  // posicionamento da loja
    var textoPublicacao: String! // texto da publicacao que aparece no app
    
    
    var website: String!         // pagina web do lojista
    
    
    @IBOutlet weak var lojaImageView: UIImageView!
    @IBOutlet weak var lojaLabel: UILabel!
    @IBOutlet weak var enderecoLabel: UILabel!
    @IBOutlet weak var categoriaLabel: UILabel!
    @IBOutlet weak var segundaLabel: UILabel!
    @IBOutlet weak var tercaLabel: UILabel!
    @IBOutlet weak var quartaLabel: UILabel!
    @IBOutlet weak var quintaLabel: UILabel!
    @IBOutlet weak var sextaLabel: UILabel!
    @IBOutlet weak var sabadoLabel: UILabel!
    @IBOutlet weak var domingoLabel: UILabel!
    @IBOutlet weak var telefoneLabel: UILabel!
    @IBOutlet weak var pcpaLabel: UILabel!
    @IBOutlet weak var desc1Label: UILabel!
    @IBOutlet weak var desc2Label: UILabel!
    @IBOutlet weak var desc3Label: UILabel!
    @IBOutlet weak var lbViewCategoria: UIView!
    @IBOutlet weak var lbViewClass1: UIView!
    @IBOutlet weak var lbViewClass2: UIView!
    @IBOutlet weak var lbClassificacao1: UILabel!
    @IBOutlet weak var lbClassificacao2: UILabel!
    
    
    @IBAction func fbCompartilhar(_ sender: UIButton) {
        
        // Cria o object
        let object = FBSDKShareOpenGraphObject.init(properties: [
            "og:type": "article",
            "og:title": lojaLabel.text! as String,
            "og:description": textoPublicacao,
            "og:url": website,
            "og:image": "https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + cnpj + "/" + fachada
            ])
        
        // Cria a action
        let action = FBSDKShareOpenGraphAction.init()
        action.actionType = "news.publishes"
        action.setObject(object, forKey: "article")
        
        // Cria o content
        let content = FBSDKShareOpenGraphContent.init()
        
        content.action = action
        content.previewPropertyName = "article"
        
        
        let shareDialog = FBSDKShareDialog()
        
        shareDialog.delegate = self
        shareDialog.shareContent = content
        shareDialog.show()
    }
    
    // Carrega tela de visualizacao do Mapa
    @IBAction func verMapa(_ sender: Any) {
        self.performSegue(withIdentifier: "segueDestaqueMapa", sender: nil)
    }
    
    // carrega google map
    @IBAction func googleMap(_ sender: UIButton) {
        if (UIApplication.shared.canOpenURL(URL(string:"comgooglemaps://")!)) {
            let directionsRequest = "comgooglemaps-x-callback://" +
                "?daddr=\(latitudeloja!),\(longitudeloja!)" +
            "&x-success=sourceapp://?resume=true&x-source=driving"
            
            let directionsURL = URL(string: directionsRequest)!
            UIApplication.shared.open(directionsURL, options: [:], completionHandler: nil)
        } else {
             alertasimple(mensagem: "Você precisa instalar o Google Maps no dispositivo")
        }
    }
    override func viewDidLoad() {
        super.viewDidLoad()
        
      
        // Recuperando valores da segue
        
        if let url = URL(string: "https://www.checkincash.com.br/app/_lib/file/img/imagempub/"+cnpj!+"/"+lojaimagem!){
            lojaImageView.kf.indicatorType = .activity
            lojaImageView.kf.setImage(with: url)
        }else
        {
            lojaImageView = nil
        }
        
        lojaLabel.text = nomeloja
        enderecoLabel.text = enderecoloja
        categoriaLabel.text = categoriasloja
        lbClassificacao1.text = classificacao1
        lbClassificacao2.text = classificacao2
        segundaLabel.text = funcionamento(horario: segunda)
        tercaLabel.text = funcionamento(horario: terca)
        quartaLabel.text = funcionamento(horario: quarta)
        quintaLabel.text = funcionamento(horario: quinta)
        sextaLabel.text = funcionamento(horario: sexta)
        sabadoLabel.text = funcionamento(horario: sabado)
        domingoLabel.text = funcionamento(horario: domingo)
        telefoneLabel.text = telefoneloja
        pcpaLabel.text = pcpa
        desc1Label.text = desc1
        desc2Label.text = desc2
        desc3Label.text = desc3
        
        
        if ( lbClassificacao1.text?.isEmpty )!
        {
            lbViewClass1.alpha = 0
        }
        
        if ( lbClassificacao2.text?.isEmpty )!
        {
            lbViewClass2.alpha = 0
        }
        
        
        lbViewCategoria.layer.borderColor = UIColor.darkGray.cgColor
        lbViewCategoria.layer.borderWidth = 1
        
        lbViewClass1.layer.borderColor = UIColor.darkGray.cgColor
        lbViewClass1.layer.borderWidth = 1
        
        lbViewClass2.layer.borderColor = UIColor.darkGray.cgColor
        lbViewClass2.layer.borderWidth = 1
        
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
       
       
        
        
    }
    
    // carregou completamente
    override func viewDidAppear(_ animated: Bool) {
        super .viewDidAppear(animated)
        
        self.navigationController?.setNavigationBarHidden(false, animated: true)
        
        if isCheckin == "1" {
            // FeedDestaqueViewController -> usa segue: segueTokenDestaqueFeed que aponta para
            // CheckinSucessoViewController
            
            self.performSegue(withIdentifier: "segueTokenDestaqueFeed", sender: nil)
            
          
        }
        
        
        
    }
    
    // retorna texto do horario de funcionamento
    func funcionamento( horario: String) -> String {
        
        var hfuncionamento: String!
        
        switch horario{
        case "01:01 01:01":
            hfuncionamento = "Fechado"
        case "00:00 00:00":
            hfuncionamento = " "
        default:
            hfuncionamento = horario
            
        }
        
        
        return hfuncionamento
    }
    
    
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        if segue.identifier == "segueDestaqueMapa" {
            
            let vcDestino =  segue.destination as! MeleveViewController
            
            vcDestino.latitude = self.latitude
            vcDestino.longitude = self.longitude
            vcDestino.latitudeloja = self.latitudeloja
            vcDestino.longitudeloja = self.longitudeloja
            vcDestino.categoria = self.categoriasloja
            vcDestino.nomeloja = self.nomeloja
            
        }
        
        if segue.identifier == "segueTokenDestaqueFeed" {
            
            let vcDestino =  segue.destination as! CheckinSucessoViewController
            
            vcDestino.lojaImageView = self.lojaImageView
            vcDestino.token = self.token
            vcDestino.validade = self.validade
            vcDestino.codigoID = self.codigoID
            vcDestino.codigoUsuario = self.codigoUsuario
            vcDestino.fachada = self.lojaimagem
            vcDestino.cnpj = self.cnpj
            vcDestino.pincash = self.pincash
            
            
        }
    }
    
    func alertasimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        self.present(alertController, animated: true, completion: nil)
        
    }
    
    
    // processa checkin e gera o codigo token
    func checkinSucesso(){
        
        
        self.token = ""
        
        // Gera o token com 4 digitos
        for _ in 0..<6{
            
            
            self.token = self.token + String(arc4random_uniform( UInt32(9) )+1 )
            
            
        }
        
        DispatchQueue.main.async {
            
            
            let url: URL = URL(string: "https://www.checkincash.com.br/api/lojas/altera_status_checkin.php?pfkpublicador=\(self.codigoID!)&pfkusuario=\(self.codigoUsuario!)&pischeckin=1&ptoken=\(self.token!)")!
            
            
            
            Alamofire.request(url).responseJSON(completionHandler: {response in
                switch response.result{
                case .success:
                    self.listData = response.result.value as! [[String: AnyObject]]
                    
                    let item = self.listData[0]
                    
                    if( item.count == 0 ){
                        self.alertasimple(mensagem: "Não foi possível gerar o token a partir da lista")
                    }
                    
                    // a tabela foi atualizada e retornou positivo
                    if item["retorno"] as! String == "YES" {
                        
                        
                        // FeedDestaqueViewController -> usa segue: segueTokenDestaqueFeed que aponta para
                        // CheckinSucessoViewController
                        self.performSegue(withIdentifier: "segueTokenDestaqueFeed", sender: nil)
                       
                    }
                    
                case .failure(let error):
                    // print(error)
                    self.alertasimple(mensagem:  error.localizedDescription)
                }
                
                
                if self.listData.count == 0 {
                    self.alertasimple(mensagem: "Não foi possível gerar o token")
                }
                
            })
        }
        
        
        
        
    }

}
