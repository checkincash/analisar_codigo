//
//  MeusorteioTableViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 16/03/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import Kingfisher
import Alamofire

class MeusorteioTableViewController: UITableViewController {

    var  label: UILabel = {
        let label = UILabel()
        label.textAlignment = .center
        label.textColor = Color.blue
        return label
    }()
    
    var listData: [[String: AnyObject]] = [[String: AnyObject]]()
    var codigousuario: String!
    var datasorteio: String!
    
    // instancia preferencias do usuario
    let arquivodeconfiguracoes = Configuration.compartilhado
    
    

    @IBOutlet weak var lbSaldo: UILabel!
    @IBOutlet weak var lbDataSorteio: UILabel!
    @IBOutlet weak var lbmaxPin: UILabel!
   
    
    override func viewDidLoad() {
        super.viewDidLoad()

        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

    // Carregou a View Completamente
    override func viewDidAppear(_ animated: Bool) {
        super.viewDidAppear(animated)
        
       
        DispatchQueue.main.async {
            
            self.recuperaPreferencias()
            
            let url: URL = URL(string: "https://www.checkincash.com.br/api/pincash/recupera_pincash_premios.php?pusuario=\(self.codigousuario!)")!
            
            Alamofire.request(url).responseJSON(completionHandler: {response in
                switch response.result{
                case .success:
                    self.listData = response.result.value as! [[String: AnyObject]]
                    self.tableView.reloadData()
                    
                case .failure(let error):
                    // print(error)
                    self.alertSimple(mensagem: error.localizedDescription)
                }
                
                if self.listData.count == 0
                {
                    self.label.text = "Não há campanhas de premiação disponivel"
                }
                
            })
        }
        
    }
    
    func alertSimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        present(alertController, animated: true, completion: nil)
    }
    
    // MARK: - Table view data source
    override func numberOfSections(in tableView: UITableView) -> Int {
        // #warning Incomplete implementation, return the number of sections
        return 1
    }

    override func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        // #warning Incomplete implementation, return the number of rows
        
        tableView.backgroundView = listData.count == 0 ? label : nil
        return listData.count
    }

    
    override func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        let cell = tableView.dequeueReusableCell(withIdentifier: "ReuseMeuSorteio", for: indexPath) as! MeusorteioTableViewCell

        let item = self.listData[indexPath.row]
        
        
        
        datasorteio = item["data_sorteio"] as? String
        
        let saldo = item["saldo_usuario"] as? String
        
        let fotopremio = item["foto_premiacao"] as? String
        let id = item["id"] as? String
        let pinnecessario = item["pin_necessario"] as? String
        let maxpin = item["maxpin"] as? String
        let titulo = item["titulo"] as? String
        let chamada = item["chamada"] as? String
        let label = item["label"] as? String
       
        
        lbSaldo.text = "\(saldo!)pins"
        lbDataSorteio.text = dataSorteioFormatado
        lbmaxPin.text = "com \(maxpin!) pins você concorre a todos os prêmios,"
        
        
        let alcance = Int( processa_saldo(pinUsuario: saldo!, pinNecessario: pinnecessario!))
        
        if ( alcance! > 0 )
        {
            
             cell.lbFaltaPin.text = "\(processa_saldo(pinUsuario: saldo!, pinNecessario: pinnecessario!)) pins"
             cell.lbTitulo.text = titulo
             cell.lbChamada.text = chamada
            
           
        }
        else
        {
             
             cell.lbImagemMoedaAlcance.alpha = 0
             cell.lbTextoFaltam.alpha = 0
             cell.lbFaltaPin.alpha = 0
             cell.lbFaltaPin.textColor = UIColor.blue
            
            // Atualiza Titulo e a Chamada para parabelizar o usuario por ter atingido a meta
            
            cell.lbTitulo.text = "Parabéns!"
            cell.lbChamada.text = "você ja está concorrendo à \(label!)"
            
        }
        
       
        
        if let url = URL(string: "https://www.checkincash.com.br/app/_lib/file/img/imagemsorteio/"+id!+"/"+fotopremio!){
            cell.imagemPremio.kf.indicatorType = .activity
            cell.imagemPremio.kf.setImage(with: url)
            
            cell.imagemPremio.image = cell.imagemPremio.image
            
        }else
        {
            cell.imagemPremio = nil
            
        }
        
        return cell
    }
    
    // desmarca selecao ao tocar na celula
    override func tableView(_ tableView: UITableView, didSelectRowAt indexPath: IndexPath) {
        tableView.deselectRow(at: indexPath, animated: true)
        
        
    }
    
    func processa_saldo(pinUsuario: String, pinNecessario: String ) -> String
    {
        let qtdepin = Int(pinNecessario)
        let saldo = Int(pinUsuario)
        let resultado: Int = (qtdepin! - saldo!)
        
        return String(resultado)
        
    }
    
    // RECUPERA DADOS DO USUARIO
    func recuperaPreferencias(){
        
       self.codigousuario = arquivodeconfiguracoes.codigousuario
        
    }
    // variavel computada que retorna data formatada
    var dataSorteioFormatado: String {
        
        let dateFormatterGet = DateFormatter()
        dateFormatterGet.dateFormat = "yyyy-MM-dd"
        
        let dateFormatterPrint = DateFormatter()
        dateFormatterPrint.dateFormat = "dd/MM/yyyy"
        
        let date: Date? = dateFormatterGet.date(from: self.datasorteio)
        
        let mydate = dateFormatterPrint.string(from: date!)
        
        let datacomponente = mydate.split(separator: "/")
        
        var dia: String
        var mes: String!
        var ano: String!
        var txtMes: String!
        var txtDataFormated: String!
        
        dia =  (String(datacomponente[0]) as String)
        mes = (String(datacomponente[1]) as String)
        ano = (String(datacomponente[2]) as String)
        
        switch mes {
        case "01":
            txtMes = " de Jan "
        case "02":
            txtMes = " de Fev "
        case "03":
            txtMes = " de Mar "
        case "04":
            txtMes = " de Abr "
        case "05":
            txtMes = " de Mai "
        case "06":
            txtMes = " de Jun "
        case "07":
            txtMes = " de Jul "
        case "08":
            txtMes = " de Ago "
        case "09":
            txtMes = " de Set "
        case "10":
            txtMes = " de Out "
        case "11":
            txtMes = " de Nov "
        case "12":
            txtMes = " de Dez "
            
        default:
            txtMes = " de Jan "
        }
        
        txtDataFormated = "Sorteio dia " + dia + txtMes  + ano
        
        return txtDataFormated
        
            // dateFormatterPrint.string(from: date!)
    }
    

}
