//
//  homeTableViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 18/01/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import CoreLocation
import Alamofire
import Kingfisher


class homeTableViewController: UITableViewController, CLLocationManagerDelegate {

    
    var listData: [[String: AnyObject]] = [[String: AnyObject]]()
    
    
    var minhaLocalizacao = CLLocationManager()
    var latitude: String!
    var longitude: String!
    var categoria: String!
    var distancia: String!
    var codigousuario: String!
    
    var  label: UILabel = {
        let label = UILabel()
        label.textAlignment = .center
        label.textColor = Color.blue
        return label
    }()
   
    // instancia preferencias do usuario
    let arquivodeconfiguracoes = Configuration.compartilhado
    
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        
        // Recupera as preferencias do usuario
        
        
     
        minhaLocalizacao.delegate = self
        minhaLocalizacao.desiredAccuracy = kCLLocationAccuracyBest  // escolhida a melhor precisao
        minhaLocalizacao.requestWhenInUseAuthorization() // Efetua solicitacao de autorização
        minhaLocalizacao.startUpdatingLocation()

    
        
        
       
    }
    
    // Carrega sempre que entrar nesta tela
    override func viewWillAppear(_ animated: Bool) {
        super.viewWillAppear(animated)
        
         self.navigationController?.setNavigationBarHidden(true, animated: true)
        
        if !arquivodeconfiguracoes.usuarioLogOnOff
        {
            self.dismiss(animated: true, completion: nil)
            
        }
     
    }
    
    
    
    // Carregou a View Completamente
    override func viewDidAppear(_ animated: Bool) {
        super.viewDidAppear(animated)
   
        
        DispatchQueue.main.async {
            
            self.recuperaPreferencias()
            
            let url: URL = URL(string: "https://www.checkincash.com.br/api/lojas/recupera_clientes.php?platitude=\(self.latitude!)&plongitude=\(self.longitude!)&pcategoria=\(self.categoria!)&pdistancia=\(self.distancia!)&pusuario=\(self.codigousuario!)")!
 
        
        
            Alamofire.request(url).responseJSON(completionHandler: {response in
                switch response.result{
                    case .success:
                        self.listData = response.result.value as! [[String: AnyObject]]
                        self.tableView.reloadData()
                    
                    case .failure(let error):
                      // print(error)
                       self.alertSimple(mensagem: error.localizedDescription)
            }
            
            
                if self.listData.count == 0 {
                    self.label.text = "Não há lojas credenciadas no perímetro"
                }
            
        })
        }
        
     
      
        
      
    }
   
    
    func locationManager(_ manager: CLLocationManager, didUpdateLocations locations: [CLLocation]) {
        // locations.last pega a ultima posicao do usuario
        let localizacaoUsuario: CLLocation = locations.last!
        
        self.latitude = String(localizacaoUsuario.coordinate.latitude)
        self.longitude = String(localizacaoUsuario.coordinate.longitude)
        
        
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

    // MARK: - Table view data source

    override func numberOfSections(in tableView: UITableView) -> Int {
        // #warning Incomplete implementation, return the number of sections
        return 1
    }

    override func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        // #warning Incomplete implementation, return the number of rows
        
        // dispara mensagem do label informando a inexistencia de dados se houver
        tableView.backgroundView = listData.count == 0 ? label : nil
        return listData.count
        
    }

    
    override func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        
        let reusoHome = "reusoHome"
        // ************************************************************************************-> Celula Customizada
        let cell = tableView.dequeueReusableCell(withIdentifier: reusoHome, for: indexPath) as! HomeTableViewCell

        let item = self.listData[indexPath.row]
        let pincash =  (item[get_pinWeekDay(key: 0)] as? String)! // recupera pin cash da semana
        
        var categoria: String = (item["categoria"] as? String)!
       
        // verifica se tem a segunda e terceira categoria
        
        let classifica1: String = (item["classificacao1"] as? String)!
        let classifica2: String = (item["classificacao2"] as? String)!
        
        if !classifica1.isEmpty{
           cell.lbClassificacao1.text = classifica1.uppercased()
        }
        else{
            cell.lbClassificacao1.text = ""
        }
        
        if !classifica2.isEmpty{
            cell.lbClassificacao2.text = classifica2.uppercased()
            
        }
        else {
            cell.lbClassificacao2.text = ""
        }
        
        
        cell.TituloLabel.text = item["razao"] as? String
        
        
        cell.CategoriasLabel.text = categoria.uppercased()
        cell.abreveaturaLabel.text = item["abreviatura"] as? String
      
        switch pincash {
        case "1":
            cell.pincashLabel.text =  pincash +   " Pin"
        default:
            cell.pincashLabel.text =  pincash +   " Pins"
        }
 
        
        
        
        // Recupera o pcpa
        let pcpaInfo: String = "-" + (item[get_WeekDay(key: 0)] as? String)! + "% desconto check-in"  // pega o dia da semana atual
        
        
        cell.pcpaLabel.text = pcpaInfo
        
        // Recupera percentual 1
        var posicao = get_WeekDay(key: 1).index(get_WeekDay(key: 1).startIndex, offsetBy: 3) // pega o dia da semana + 1
        var perc: String =  get_WeekDay(key: 1)
        
        cell.perc1Label.text = perc[..<posicao].uppercased() + " " + (item[get_WeekDay(key: 1)] as? String)! + "% "
        
        // Recupera percentual 2
        posicao = get_WeekDay(key: 2).index(get_WeekDay(key: 1).startIndex, offsetBy: 3) // pega o dia da semana + 2
        perc =  get_WeekDay(key: 2)
        
        cell.perc2Label.text =  perc[..<posicao].uppercased() + " " + (item[get_WeekDay(key: 2)] as? String)! + "% "
        
        // Recupera percentual 3
        posicao = get_WeekDay(key: 3).index(get_WeekDay(key: 1).startIndex, offsetBy: 3) // pega o dia da semana + 3
        perc =  get_WeekDay(key: 3)
        
        cell.perc3Label.text = perc[..<posicao].uppercased() + " " + (item[get_WeekDay(key: 3)] as? String)! + "% " 
        
        let cnpj = item["cnpj"] as? String
        let fachada = item["fachada"] as? String
        
        if let url = URL(string: "https://www.checkincash.com.br/app/_lib/file/img/imagempub/"+cnpj!+"/"+fachada!){
            cell.lojaImagem.kf.indicatorType = .activity
            cell.lojaImagem.kf.setImage(with: url)
        }else
        {
            cell.lojaImagem = nil
        }
        
        // TRABALHA IMAGEM TRANSPARENTE DO DESTAQUE
        let destaque = item["destaque"]  as? String
        
        switch destaque {
        case "1"?:
            cell.destaqueImagem.alpha = 1
        default:
            cell.destaqueImagem.alpha = 0.25
        }
       
        //TRABALHA IMAGEM CHECKIN
        let checkin = item["ischeckin"] as? String
        switch checkin {
        case "0"?:
            cell.checkImagem.isHidden = true
        default:
            cell.checkImagem.isHidden = false
        }
        
        return cell
    }
    
    // RECUPERA DESCONTOS EXTRAINDO O DIA DA SEMANA DO CALENDARIO
    func  get_WeekDay(key: Int) ->  String {
        
        let CURRENT_DATE = NSDate()
        
        let calendar: NSCalendar = NSCalendar.current as NSCalendar
        let component: NSDateComponents = calendar.components(NSCalendar.Unit.weekday, from: CURRENT_DATE as Date) as NSDateComponents
        
        var diaSemana: String
        var numweek = component.weekday
        
        if numweek == 7 && key > 0 {
            
            numweek = 0
        }
        
        var semana = ((numweek + key) as Int?)
        
        
        if semana! > 7
        {
            semana = semana! - 7
        }
      
        switch semana{
            
        case 1:
            diaSemana = "domingo"
        case 2:
            diaSemana = "segunda"
        case 3:
            diaSemana = "terca"
        case 4:
            diaSemana = "quarta"
        case 5:
            diaSemana = "quinta"
        case 6:
            diaSemana = "sexta"
        case 7:
            diaSemana = "sabado"
        default:
            diaSemana = "domingo"
        }
        
        return diaSemana
    }
    
    // RECUPERA DESCONTOS EXTRAINDO O DIA DA SEMANA DO CALENDARIO
    func  get_pinWeekDay(key: Int) ->  String {
        
        let CURRENT_DATE = NSDate()
        
        let calendar: NSCalendar = NSCalendar.current as NSCalendar
        let component: NSDateComponents = calendar.components(NSCalendar.Unit.weekday, from: CURRENT_DATE as Date) as NSDateComponents
        
        var diaSemana: String
        var numweek = component.weekday
        
        if numweek == 7 && key > 0 {
            
            numweek = 0
        }
        
        
        var semana = ((numweek + key) as Int?)
        
        
        if semana! > 7
        {
            semana = semana! - 7
        }
        
        switch semana{
            
        case 1:
            diaSemana = "pin_domingo"
        case 2:
            diaSemana = "pin_segunda"
        case 3:
            diaSemana = "pin_terca"
        case 4:
            diaSemana = "pin_quarta"
        case 5:
            diaSemana = "pin_quinta"
        case 6:
            diaSemana = "pin_sexta"
        case 7:
            diaSemana = "pin_sabado"
        default:
            diaSemana = "pin_domingo"
        }
        
        return diaSemana
    }
    
    
    
 
    
    //Perpara as informacoes para ser passada a viewController feedViewController
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        if segue.identifier == "segueFeed"{
            
            
            if let indexPath = tableView.indexPathForSelectedRow {
                
                let item = self.listData[indexPath.row]
                
                let vcDestino =  segue.destination as! FeedViewController
                
                // Passando valores ao feedViewController
                let contratoid = item["pk_contrato"] as? String // numero do contrato do lojista
                let idsorteio = item["idsorteio"] as? String    // id da tabela de campanha de premios
                let codigoid = item["id"] as? String            // id da publicacao
                let ischeckin = item["ischeckin"] as? String
                var pincash: String! = "0"
                
                // verifica se esta em checkout
                if ischeckin == "0" // ainda nao foi feito o checkin
                {
                   pincash =  (item[get_pinWeekDay(key: 0)] as? String)! // recupera pin cash da semana
                    
                    
                    // Recupera a Validade Atual
                    vcDestino.validade = dataHojeFormated
                    
                }
                else
                {
                
                   // ja fez checkin recupera o valor contido na tabela ap_pincash_user_mov
                   pincash = item["pincash"] as? String        // quantidade de pin cash que o cliente recebeu em seu ultimo
                                                                // checkin dento da loja, recuperado da tabela de ap_pincash_user_mov
                    
                    // Recupera a Validade Atual
                    vcDestino.validade = item["validade"] as? String
                    
                }
                
                var endereco: String!
                var cidadeloja: String!
                var categoria: String = (item["categoria"] as? String)!
                let segunda: String = (item["seg_m_de"] as? String)! + " " +  (item["seg_m_ate"] as? String)! // horario de funcionamento segunda
                let terca: String = (item["ter_m_de"] as? String)! + " " + (item["ter_m_ate"] as? String)! // horario de funcionamento da terca
                let quarta: String = (item["qua_m_de"] as? String)! + " " + (item["qua_m_ate"] as? String)! // horario de funcionamento da quarta
                let quinta: String = (item["qui_m_de"] as? String)! + " " + (item["qui_m_ate"] as? String)! // horario de funcionamento da quinta
                let sexta: String = (item["sex_m_de"] as? String)! + " " + (item["sex_m_ate"] as? String)! // horario de funcionamento da sexta
                let sabado: String = (item["sab_m_de"] as? String)! + " " + (item["sab_m_ate"] as? String)! // horario de funcionamento do sabado
                let domingo: String = (item["dom_m_de"] as? String)! + " " + (item["dom_m_ate"] as? String)! // horario de funcionamento do domingo
                
                let rua = item["rua"] as? String
                let numero = item["numero"] as? String
                let complemento = (item["complemento"] as? String)!
                let bairro = item["bairro"] as? String
                let cidade = item["cidade"] as? String
                let estado = item["estado"] as? String
                let textopub = item["texto_publicacao"] as? String
                
                
                 cidadeloja = cidade! + " - " + estado!
                
                // verifica se tem a segunda e terceira categoria
                
                let classifica1: String = (item["classificacao1"] as? String)!
                let classifica2: String = (item["classificacao2"] as? String)!
                
                if !classifica1.isEmpty{
                    
                    vcDestino.classificacao1 = classifica1.uppercased()
                }
                else
                {
                    vcDestino.classificacao1 = ""
                }
                
                
                if !classifica2.isEmpty{
                    vcDestino.classificacao2 = classifica2.uppercased()
                }
                else
                {
                    vcDestino.classificacao2 = ""
                }
                
                
                
                if !complemento.isEmpty{
                   endereco = rua! + ", " + numero! +  " " + bairro!
                }else {
                   endereco = rua! + ", " + numero! + " " + complemento + " " + bairro!
                }
                
                vcDestino.codigoID = codigoid
                vcDestino.idsorteio = idsorteio
                vcDestino.contratoID = contratoid
                vcDestino.pincash = pincash
                
               
                
                vcDestino.codigoUsuario = self.codigousuario
                vcDestino.isCheckin = item["ischeckin"] as? String
                vcDestino.token = item["token"] as? String
                vcDestino.fachada = item["fachada"] as? String
                vcDestino.lojaimagem = item["foto_publicacao"] as? String
            
                
                    
                // Latitude e Longitude do Cliente
                vcDestino.latitude = self.latitude
                vcDestino.longitude = self.longitude
                
                // Latitude e Longitude da Loja
                vcDestino.latitudeloja = item["latitude"] as? String
                vcDestino.longitudeloja = item["longitude"] as? String
                
                
                vcDestino.cnpj = item["cnpj"] as? String
                vcDestino.nomeloja = item["razao"] as? String
                vcDestino.enderecoloja = endereco
                vcDestino.cidadeloja = cidadeloja
                vcDestino.categoriasloja = categoria.uppercased()
                vcDestino.segunda = segunda
                vcDestino.terca = terca
                vcDestino.quarta = quarta
                vcDestino.quinta = quinta
                vcDestino.sexta = sexta
                vcDestino.sabado = sabado
                vcDestino.domingo = domingo
                vcDestino.telefoneloja = item["telefone"] as? String
                vcDestino.textoPublicacao = textopub
                vcDestino.website = item["website"] as? String
                
                // Recupera o pcpa
                let pcpaInfo: String = "-" + (item[get_WeekDay(key: 0)] as? String)! + "% desconto check-in"  // pega o dia da semana atual
                let desconto: String =  (item[get_WeekDay(key: 0)] as? String)!  // pega o dia da semana atual
                
                vcDestino.pcpa = pcpaInfo
                vcDestino.desconto = desconto
                
                // Recupera percentual 1
                var posicao = get_WeekDay(key: 1).index(get_WeekDay(key: 1).startIndex, offsetBy: 3) // pega o dia da semana + 1
                var perc: String =  get_WeekDay(key: 1)
                
                vcDestino.desc1 = perc[..<posicao].uppercased() + " " + (item[get_WeekDay(key: 1)] as? String)! + "% "
                
                // Recupera percentual 2
                posicao = get_WeekDay(key: 2).index(get_WeekDay(key: 1).startIndex, offsetBy: 3) // pega o dia da semana + 2
                perc =  get_WeekDay(key: 2)
                
                vcDestino.desc2 =  perc[..<posicao].uppercased() + " " + (item[get_WeekDay(key: 2)] as? String)! + "% "
                
                // Recupera percentual 3
                posicao = get_WeekDay(key: 3).index(get_WeekDay(key: 1).startIndex, offsetBy: 3) // pega o dia da semana + 3
                perc =  get_WeekDay(key: 3)
                
                vcDestino.desc3 = perc[..<posicao].uppercased() + " " + (item[get_WeekDay(key: 3)] as? String)! + "% "
                
                
                
            }
            
            
            
        }
    }
    
    // RECUPERA DADOS DO USUARIO
    func recuperaPreferencias(){
        
        
        
        self.distancia = String(arquivodeconfiguracoes.distanciaQuilometros)
        self.latitude = String(arquivodeconfiguracoes.latitude)
        self.longitude = String(arquivodeconfiguracoes.longitude)
        self.codigousuario = arquivodeconfiguracoes.codigousuario
        self.categoria = String(arquivodeconfiguracoes.codigocategoria)
      
        
    }
  
    func alertSimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        present(alertController, animated: true, completion: nil)
        
    }
    
    // variavel computada que retorna data formatada
    var dataHojeFormated: String {
        
        let dateFormatterGet = DateFormatter()
        dateFormatterGet.dateFormat = "yyyy-MM-dd HH:mm:ss"
        
       // let dateFormatterPrint = DateFormatter()
       // dateFormatterPrint.dateFormat = "dd/MM/yyyy HH:mm:ss"
        
        let now = NSDate()
    
        let date: Date? = now as Date
        
        
        return  dateFormatterGet.string(from: date!)
    }
    
    
}
