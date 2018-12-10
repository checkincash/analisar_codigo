//
//  LocaisTableViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 12/03/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import Alamofire
import Kingfisher


class LocaisTableViewController: UITableViewController {

    // variavel computada para mensagens dentro da listview.
    var  label: UILabel = {
        let label = UILabel()
        label.textAlignment = .center
        label.textColor = Color.blue
        return label
    }()
    
    var listData: [[String: AnyObject]] = [[String: AnyObject]]()
    var validade: String!
    var codigousuario: String! // contém o codigo do usuario logado
    var nomeusuario: String! // contém o nome do usuario logado
    // instancia preferencias do usuario
    let arquivodeconfiguracoes = Configuration.compartilhado
    
    @IBOutlet weak var lbMeuSaldo: UILabel!
    @IBOutlet weak var lbNomeusuario: UILabel!
    
    override func viewDidLoad() {
        super.viewDidLoad()

        // Uncomment the following line to preserve selection between presentations
        // self.clearsSelectionOnViewWillAppear = false

        // Uncomment the following line to display an Edit button in the navigation bar for this view controller.
        // self.navigationItem.rightBarButtonItem = self.editButtonItem
    }
    
    
    
    // Carregou a View Completamente
    override func viewDidAppear(_ animated: Bool) {
        super.viewDidAppear(animated)
        
        
        DispatchQueue.main.async {
            
            self.recuperaPreferencias()
            
            self.lbNomeusuario.text = self.nomeusuario
            
            let url: URL = URL(string: "https://www.checkincash.com.br/api/pincash/recupera_locais_visitados.php?pusuario=\(self.codigousuario!)")!
            
            
            
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
                    
                   
                     self.label.text = "Você ainda não possui pontos do Pin Cash."
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

    // RECUPERA DADOS DO USUARIO
    func recuperaPreferencias(){
        
       self.codigousuario = arquivodeconfiguracoes.codigousuario
       self.nomeusuario = arquivodeconfiguracoes.nomeusuario
        
        
    }
    
     override func tableView(_ tableView: UITableView, didSelectRowAt indexPath: IndexPath) {
        tableView.deselectRow(at: indexPath, animated: true)
        
        
    }
    
    override func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        
        let reuseLocal = "reuseLocal"
        // ************************************************************************************-> Celula Customizada
        let cell = tableView.dequeueReusableCell(withIdentifier: reuseLocal, for: indexPath) as! LocaisTableViewCell
        
        let item = self.listData[indexPath.row]
        
        let cnpj = item["cnpj"] as? String
        let fachada = item["fachada"] as? String
        let razao = item["razao"] as? String
        let cidade = item["cidade"] as? String
        let estado = item["estado"] as? String
        let pinqtde = item["pincash_qtde"] as? String
        let desconto = item["desconto_recebido"] as? String
        let intDes: Int = Int(Double(desconto!)!)
        let descontoformat = "Você Ganhou \(intDes)% de desconto"
        let pincashformatado = "\(pinqtde!)"
        let istoken = item["token_validado"] as? String
        let saldoPin = item["saldopin"] as? String
        // recupera data validade
        self.validade = item["data_lancamento"] as? String
        
        if let url = URL(string: "https://www.checkincash.com.br/app/_lib/file/img/imagempub/"+cnpj!+"/"+fachada!){
            cell.imagemLoja.kf.indicatorType = .activity
            cell.imagemLoja.kf.setImage(with: url)
        }else
        {
            cell.imagemLoja = nil
        }
        
        cell.lbData.text = dataCheckinFormatado
        cell.lbRazao.text = razao
        cell.lbEndereco.text = cidade! + " - " + estado!
        cell.lbPincash.text = pincashformatado
        cell.lbPcpa.text = descontoformat
        
        lbMeuSaldo.text = "\(saldoPin!)pins"
        
        if istoken == "0"  {
            cell.imagemTick.alpha = 0.2
        }
        else
        {
            cell.imagemTick.alpha = 1.0
        
        }
 
 
        
        return cell
    }
    
    // variavel computada que retorna data formatada
    var dataCheckinFormatado: String {
        
        let dateFormatterGet = DateFormatter()
        dateFormatterGet.dateFormat = "yyyy-MM-dd"
        
        let dateFormatterPrint = DateFormatter()
        dateFormatterPrint.dateFormat = "dd/MM/yyyy"
        
        let date: Date? = dateFormatterGet.date(from: self.validade)
        
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
        
        txtDataFormated = dia + txtMes  + ano
        
        return  txtDataFormated
        //dateFormatterPrint.string(from: date!)
    }
    
}
