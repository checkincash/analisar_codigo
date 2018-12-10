//
//  Usuario.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 03/01/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import Foundation


class Usuario: Codable {
    
    var pk_usuario: String = ""
    var dataregistro: String = ""
    var nome: String = ""
    var sobrenome: String = ""
    var email: String = ""
    var senha: String = ""
    var pin_recupera_senha: String = ""
    var iscompleto: String = ""
    
    
    
}

class Cliente: Codable{
    
    var id: String = ""
    var razao: String = ""
    var classificacao1: String = ""
    var classificacao2: String = ""
    var destaque: String = ""
    var categoria: String = ""
    var cnpj: String = ""
    var nomenclatura: String = ""
    var abreviatura: String = ""
    var rua: String = ""
    var numero: String = ""
    var complemento: String = ""
    var bairro: String = ""
    var cidade: String = ""
    var estado: String = ""
    var cep: String = ""
    var telefone: String = ""
    var fachada: String = ""
    var foto_publicacao: String = ""
    var texto_publicacao: String = ""
    var geradados: String = ""  // contem a informacao se ira ser obrigatorio que o cadastro do usuario seja completo
    var ischeckin: String = ""
    var contador: String = ""
    var validade: String = ""
    var token: String = ""
    var segunda: String = ""
    var terca: String = ""
    var quarta: String = ""
    var quinta: String = ""
    var sexta: String = ""
    var sabado: String = ""
    var domingo: String = ""
    var distancia: String = ""
    
    
    
}
