//
//  PincashClasses.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 27/02/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import Foundation



struct Sorteio: Codable  {
    let pk_sorteio_cabe_pincash: String
    let ativo: String
    let datainicio: String
    let datafim: String
    let texto_campanha: String
    let foto_campanha: String
   
    // Variavel computada para retornar uma data formatada
    var dataSorteioFormatado: String {
        
        let dateFormatterGet = DateFormatter()
        dateFormatterGet.dateFormat = "yyyy-MM-dd"
        
        let dateFormatterPrint = DateFormatter()
        dateFormatterPrint.dateFormat = "dd/MM/yyyy"
        
        let date: Date? = dateFormatterGet.date(from: datafim)
        
        return "Data do Sorteio: " + dateFormatterPrint.string(from: date!)
    }
}

struct Sorteiomov: Codable  {
    let pk_mov_sorteio_mv: String
    let fk_cabe_sorteio: String
    let foto_premiacao: String
    let foto_catalogo: String
    let texto_premiacao: String
    let pincash_premio: String
    let titulo: String
    let chamada: String
    
    var textoPremiacaoFormatado: String {
        
        return " ‟" + texto_premiacao + "〞 "
    }
    
    var textoPinsFormatado: String {
        return  pincash_premio + "pins"
    }
    
}
