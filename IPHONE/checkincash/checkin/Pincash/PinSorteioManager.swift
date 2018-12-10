//
//  PinSorteioManager.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 01/03/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import Foundation

class PinSorteioManager {
   
    
    var sorteio: [Sorteio]
    var sorteiomov: [Sorteiomov]
    var posicao: Int = 0
    
    
    init(){
        
        // carrega dados do sorteio ativo
        PincashAPI.loadSorteio { (sorteio) in
            
            self.sorteio = sorteio!
            var idsorteio: String
            
            
            
            
        }
        
    }
    
    // recupera premio sequencial
    func proximoPremio() -> Sorteiomov {
        
        if posicao <= sorteiomov.count{
            
            return sorteiomov[posicao]
            
            posicao += 1
        }
        else{
            posicao = 0
        }
        
        
    }

    
}
