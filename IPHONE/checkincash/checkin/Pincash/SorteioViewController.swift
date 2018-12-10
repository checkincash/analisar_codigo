//
//  SorteioViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 28/02/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import Kingfisher

class SorteioViewController: UIViewController {

    @IBOutlet weak var ivPremio: UIImageView!
    @IBOutlet weak var lbRegulamento: UIButton!
    @IBOutlet weak var ImageMoedaPin: UIImageView!
    @IBOutlet weak var lbQtdePins: UILabel!
    @IBOutlet weak var lbTitulo: UILabel!
    @IBOutlet weak var lbSubtitulo: UILabel!
    @IBOutlet weak var ctAlturaSubtitulo: NSLayoutConstraint!    
    @IBOutlet weak var lvOutdoor: UIImageView!
    @IBOutlet weak var lbDataSorteio: UILabel!
    @IBOutlet weak var lbTextViewRegulamento: UITextView!
    @IBAction func btRegulamento(_ sender: Any) {
        
        // view.isHidden = !view.isHidden
        lbTextViewRegulamento.isHidden = !lbTextViewRegulamento.isHidden
      
    }
    
    var sorteiodb: [Sorteio] = []
    var premio: [Sorteiomov] = []
    var posicao: Int = 9
    
    var timer: Timer?
    
    override func viewDidLoad() {
        super.viewDidLoad()
              // carrega o sorteio
                PincashAPI.loadSorteio { (sorteio) in
                    
                    
                    self.ivPremio.alpha = 0
                    self.sorteiodb = sorteio!
                    let id = self.sorteiodb[0].pk_sorteio_cabe_pincash
                    self.lbDataSorteio.alpha = 0
                    self.lbTitulo.alpha = 0
                    self.ctAlturaSubtitulo.constant = -60
                    self.ImageMoedaPin.alpha = 0
                    self.lbQtdePins.alpha = 0
                    self.lbTitulo.text = self.sorteiodb[0].texto_campanha
                    self.lbDataSorteio.text = self.sorteiodb[0].dataSorteioFormatado
                    self.lbSubtitulo.alpha = 0
                    
                    // alteracao Angelo / Sorteio somente foto
                    self.lbSubtitulo.alpha = 0
                    self.ivPremio.alpha = 0
                    
                    
                  
                    self.lbTextViewRegulamento.isHidden = true
                    
                    if let url = URL(string: "https://www.checkincash.com.br/app/_lib/file/img/imagemsorteio/"+self.sorteiodb[0].pk_sorteio_cabe_pincash+"/"+self.sorteiodb[0].foto_campanha){
                        self.lvOutdoor.kf.indicatorType = .activity
                        self.lvOutdoor.kf.setImage(with: url)
                        
                        
                    }else
                    {
                        self.ivPremio = nil
                     
                    }
                    
                    // carrega itens no vetor
                    PincashAPI.loadSorteioItens(itemID: id, onComplete: { (item) in
                        
                        self.premio = item!
                        
                        self.posicao = 0
                       
                    })
                    
                    
                    
            }
        
        
    }
    
    

    // executa sempre que carregar
    override func viewWillAppear(_ animated: Bool) {
        super.viewWillAppear(animated)
        
       
        if posicao != 9 {
            prepareMensagem()
        }
    }
    
    // carrega a view completamente
    override func viewDidAppear(_ animated: Bool) {
        super.viewDidAppear(animated)
        
        
        
        
    }
    
    // a view ira desaparecer, ou seja, uma outra view foi chamada
    override func viewDidDisappear(_ animated: Bool) {
        super.viewDidAppear(animated)
        
        // Retira o ler regulamento
        
        lbRegulamento.isHidden = true
      
     
    }
    // sempre que tocar na tela altera o premio
    override func touchesBegan(_ touches: Set<UITouch>, with event: UIEvent?) {
        prepareMensagem()
        
        lbRegulamento.isHidden = true
       
        
        
        
    }
    
    func prepareMensagem(){
        timer?.invalidate()
        timer = Timer.scheduledTimer(withTimeInterval: 8.0, repeats: true) { (timer) in
            self.showMensagem()
        }
        showMensagem()
    }
    
    // apresenta os premios que serao sorteados um a um, voltando ao inicio apos chegar ao fim
    func showMensagem(){
       
    
       self.ctAlturaSubtitulo.constant = 30
       // self.lbTitulo.alpha = 1
       // self.lbSubtitulo.alpha = 1
       // self.ImageMoedaPin.alpha = 1
       // self.lbQtdePins.alpha = 1
       self.lbDataSorteio.alpha = 1
       // self.ivPremio.alpha = 1
       self.lvOutdoor.alpha = 1
        
        if posicao < premio.count
        {
                lbTitulo.text = premio[posicao].titulo
                lbSubtitulo.text = premio[posicao].texto_premiacao
                lbQtdePins.text =  premio[posicao].textoPinsFormatado
            
            
                if let url = URL(string: "https://www.checkincash.com.br/app/_lib/file/img/imagemsorteio/"+sorteiodb[0].pk_sorteio_cabe_pincash+"/"+premio[posicao].foto_catalogo){
                  //  ivPremio.kf.indicatorType = .activity
                  //  ivPremio.kf.setImage(with: url)
                    
                    lvOutdoor.kf.indicatorType = .activity
                    lvOutdoor.kf.setImage(with: url)
                    
                    
                }
                else
                {
                    ivPremio = nil
                }
            
            
                // animacao imagem
              
                lbSubtitulo.alpha = 0.0
               // ivPremio.alpha = 0.0
            
                lvOutdoor.alpha = 0.0
            
                view.layoutIfNeeded() // metodo responsavel por reposicionar as constrains / redesenhar as posicoes
            
                UIView.animate(withDuration: 2.5) {
                  //  self.lbSubtitulo.alpha = 1.0
                  //  self.ivPremio.alpha = 1.0
               
                    self.lvOutdoor.alpha = 1.0
                
                    self.view.layoutIfNeeded()
                    
                }
        }
 
        // atualiza posicao
        if posicao  < premio.count
        {
           posicao += 1
        }
        else
        {
            
            posicao = 0
        }
        
    }
    
    func alertSimple(mensagem: String){
        let alertController = UIAlertController(title: "Atenção", message: mensagem, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        present(alertController, animated: true, completion: nil)
        
    }
    
    
    
}
