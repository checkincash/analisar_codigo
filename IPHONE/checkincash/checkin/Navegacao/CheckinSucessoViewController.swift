//
//  CheckinSucessoViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 15/02/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import Alamofire
import Kingfisher

class CheckinSucessoViewController: UIViewController {

    
    var listData: [[String: AnyObject]] = [[String: AnyObject]]()
    
    @IBOutlet weak var lojaImageView: UIImageView!
    @IBOutlet weak var tokenOutlet: UIButton!
    @IBOutlet weak var validadeOutlet: UILabel!
    @IBOutlet weak var picGif: UIImageView!
  
    @IBOutlet weak var lbButtonCheckOut: UIButton!
    @IBOutlet weak var lcpicGif: NSLayoutConstraint!
    @IBOutlet weak var pinsOutlet: UILabel!
    
    var token: String!
    var validade: String!
    var codigoID: String!
    var codigoUsuario: String!
    var fachada: String!
    var cnpj: String!
    var pincash: String!
    
    
    @IBAction func checkoutButton(_ sender: Any) {
       
        
        
        let alertController = UIAlertController(title: "CHECK-OUT", message: "Confirma o Check-out para este estabelecimento?", preferredStyle: .alert)
        
        let acaoConfirmar = UIAlertAction(title: "Confirmar Check-Out", style: .default){(action) in
            self.checkout()
        }
        
        let acaoCancelar = UIAlertAction(title: "Cancelar", style: .destructive, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        alertController.addAction(acaoCancelar)
        
        self.present(alertController, animated: true, completion: nil)
        
      
      
    }
    
    func checkout()
    {
       
        let url: URL = URL(string: "https://www.checkincash.com.br/api/lojas/altera_status_checkin.php?pfkpublicador=\(self.codigoID!)&pfkusuario=\(self.codigoUsuario!)&pischeckin=0&ptoken=\(self.token!)")!
        
        
        
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
                    
                    self.dismiss(animated: true, completion: nil)
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
    
    override func viewWillAppear(_ animated: Bool) {
        self.navigationController?.setNavigationBarHidden(true, animated: true)
        
        
        
    }
    
    // ao toque na tela retorna ao HOME
    override func touchesBegan(_ touches: Set<UITouch>, with event: UIEvent?) {
        
        dismiss(animated: false, completion: nil)
        // retorna ao HOME
        self.performSegue(withIdentifier: "segueReturnHome", sender: nil)
        
        
        
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()

        tokenOutlet.setTitle(token, for: .normal)
        
        
        if let url = URL(string: "https://www.checkincash.com.br/app/_lib/file/img/imagempub/"+cnpj!+"/"+fachada!){
            lojaImageView.kf.indicatorType = .activity
            lojaImageView.kf.setImage(with: url)
        }else
        {
            lojaImageView = nil
        }
        
        validadeOutlet.text = dataCheckinFormatado
        pinsOutlet.text = pincash + " pins "
        
        // inicia com o botao de checkout desabilitado
        lbButtonCheckOut.isHidden = true
        
        
        
      
    }

    // carregou completamente
    override func viewDidAppear(_ animated: Bool) {
        super.viewDidAppear(animated)
        
        var imagenames = ["validacao.png"]
        var images = [UIImage]()
        
        for i in 0..<imagenames.count{
            
            images.append(UIImage(named: imagenames[i])!)
        }
        
        let ischkout =  data12
        // pega a primeira ocorrencia da sequencia de string, se for um sinal de menos, significa
        // que ultrapassou um dia, sendo assim libera o check-out
        let ischar = ischkout[ischkout.startIndex]
        if  ischar ==  "-"
        {
            // habilita botao checkout
            lbButtonCheckOut.isHidden = false
            
        }
        
        
        /*
        // invoca GIF criando a view
        let jeremyGif = UIImage.animatedImage(with: images, duration: 1.0)
        let imageView = UIImageView(image: jeremyGif)
        imageView.frame = CGRect(x: 20.0, y: 50.0, width: self.view.frame.size.width - 40, height: 150.0)
        self.view.addSubview(imageView)
        
        imageView.startAnimating()
        */
        
        self.picGif.isHidden = false
        self.picGif.animationImages = images
        self.picGif.animationDuration = 1.0
        self.picGif.alpha = 0
        
        
       
        // animacao imagem
     
        lcpicGif.constant = 300
        
        view.layoutIfNeeded() // metodo responsavel por reposicionar as constrains / redesenhar as posicoes
        
        UIView.animate(withDuration: 1.5) {
            
             self.picGif.startAnimating()
            
             self.lcpicGif.constant = -95
             self.picGif.alpha = 1
            
            
            // sempre que se trabalha com animacoes de constraints
            // temos que nos preocupar com o reposicionamento destas contraints, por este motivo
            // devemos chamar o metodo de reconstrucao da view para resolver este problema
            
            self.view.layoutIfNeeded()
            
        }
   
        
    }
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    

    func alertasimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        self.present(alertController, animated: true, completion: nil)
        
    }
    
    
    // variavel computada que retorna data formatada
    var dataCheckinFormatado: String {
        
        let dateFormatterGet = DateFormatter()
        dateFormatterGet.dateFormat = "yyyy-MM-dd HH:mm:ss"
        
        let dateFormatterPrint = DateFormatter()
        dateFormatterPrint.dateFormat = "dd/MM/yyyy HH:mm:ss"
     
        
        let date: Date? = dateFormatterGet.date(from: self.validade)
        
        return  dateFormatterPrint.string(from: date!)
    }
    
    var data12: String {
        
        let dateFormatterGet = DateFormatter()
        dateFormatterGet.dateFormat = "yyyy-MM-dd HH:mm:ss"
        
        let EDD = dateFormatterGet.date(from: self.validade)
        let now = NSDate()
        
        let formatter = DateComponentsFormatter()
        formatter.unitsStyle = .short
        formatter.allowedUnits = [.day]
        formatter.maximumUnitCount = 2
        
        let string = formatter.string (from: now as Date, to: EDD!)
        
       
        
        return  string!
    }
    

}

extension Date
{
    func toString( dateFormat format  : String ) -> String
    {
        let dateFormatter = DateFormatter()
        dateFormatter.dateFormat = format
        return dateFormatter.string(from: self)
    }
}

extension String
{
    func toDate( dateFormat format  : String) -> Date
    {
        let dateFormatter = DateFormatter()
        dateFormatter.dateFormat = format
        dateFormatter.timeZone = NSTimeZone(name: "UTC") as TimeZone!
        return dateFormatter.date(from: self)!
    }
    
}
