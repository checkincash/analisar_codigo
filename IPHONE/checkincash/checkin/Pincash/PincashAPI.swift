//
//  PincashAPI.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 27/02/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import Foundation
import Alamofire

class PincashAPI {
    // instancia preferencias do usuario
    
    
    static private let basePathSorteio = "https://www.checkincash.com.br/api/pincash/sorteio.php"
    static private let basePathPremios = "https://www.checkincash.com.br/api/pincash/sorteiomov.php?id="
    
    
    // Ler cabeçalho Sorteio
    class func loadSorteio(onComplete: @escaping ([Sorteio]?) -> Void) {
      
        
        
   
        Alamofire.request(basePathSorteio).responseJSON { (response) in
            switch response.result{
            case .success:
            
                let json = try? JSONDecoder().decode([Sorteio].self,  from: response.data!)
                
                if json != nil {
                    onComplete(json)
                }
                else
                {
                    onComplete(nil)
                }
                
            case .failure(let error):
                // print(error)
                onComplete(nil)
                print( error.localizedDescription)
            }
            
     
        }
       
    }
    
    // Ler Itens Sorteio
    class func loadSorteioItens(itemID: String, onComplete: @escaping ([Sorteiomov]?) -> Void) {
        
        
        Alamofire.request(basePathPremios+itemID).responseJSON { (response) in
            switch response.result{
            case .success:
                
                let json = try? JSONDecoder().decode([Sorteiomov].self,  from: response.data!)
                
                if json != nil {
                    onComplete(json)
                }
                else
                {
                    onComplete(nil)
                }
                
            case .failure(let error):
                // print(error)
                onComplete(nil)
                print( error.localizedDescription)
            }
            
            
        }
        
    }
    
        
}


