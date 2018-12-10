//
//  Configuration.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 31/01/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import Foundation

enum UserDefaultsKeys: String {
    case usuarioLogOnOff = "usuarioLogOnOff"
    case lojistaLogOnOff = "lojistaLogOnOff"
    case distanciaKm = "distanciaKm"
    case latitude = "latitude"
    case longitude = "longitude"
    case codigousario = "codigousuario"
    case nomeusuario = "nomeusuario"
    case codigolojista = "codigolojista"
    case cnpjlojista = "cnpjlojista"
    case razao = "razao"
    case codigocategoria = "codigocategoria"
    
}

class Configuration {
    let defaults = UserDefaults.standard
    
    static var compartilhado: Configuration =  Configuration() // Criado arquivo singleton; pois de qualquer lugar que se queira ter acesso, basta
    //digitar Configuration.compartilhado e se tera acesso a todos os metodos desta classe
    
    // propriedade computada para status do usuario
    var usuarioLogOnOff: Bool {
        get { return defaults.bool( forKey: UserDefaultsKeys.usuarioLogOnOff.rawValue) }
        set { defaults.set(newValue, forKey: UserDefaultsKeys.usuarioLogOnOff.rawValue) } // a propriedade newvalue é uma propriedade do método UserDefaults
        // que é usada quando se é passado um novo valor, como no caso do método set.
    }
    
    // propriedade computada para status do usuario
    var lojistaLogOnOff: Bool {
        get { return defaults.bool( forKey: UserDefaultsKeys.lojistaLogOnOff.rawValue) }
        set { defaults.set(newValue, forKey: UserDefaultsKeys.lojistaLogOnOff.rawValue) } // a propriedade newvalue é uma propriedade do método UserDefaults
        // que é usada quando se é passado um novo valor, como no caso do método set.
    }
    
    // propriedade computada para distancia em KM
    var distanciaQuilometros: Int {
        
        get { return defaults.integer(forKey: UserDefaultsKeys.distanciaKm.rawValue) }
        set { defaults.set(newValue, forKey: UserDefaultsKeys.distanciaKm.rawValue) } // a propriedade newvalue é uma propriedade do método UserDefaults
        // que é usada quando se é passado um novo valor, como no caso do método set.
    }
    
    
    // propriedade computada para Latitude
    var latitude: Double {
        
        get { return defaults.double(forKey: UserDefaultsKeys.latitude.rawValue) }
        set { defaults.set(newValue, forKey: UserDefaultsKeys.latitude.rawValue) } // a propriedade newvalue é uma propriedade do método UserDefaults
        // que é usada quando se é passado um novo valor, como no caso do método set.
    }
    
    // propriedade computada para Longitude
    var longitude: Double {
        
        get { return defaults.double(forKey: UserDefaultsKeys.longitude.rawValue) }
        set { defaults.set(newValue, forKey: UserDefaultsKeys.longitude.rawValue) } // a propriedade newvalue é uma propriedade do método UserDefaults
        // que é usada quando se é passado um novo valor, como no caso do método set.
    }
    
    
    // propriedade computada para Codigo da Categoria
    var codigocategoria: Int {
        
        get { return defaults.integer(forKey: UserDefaultsKeys.codigocategoria.rawValue) }
        set { defaults.set(newValue, forKey: UserDefaultsKeys.codigocategoria.rawValue) } // a propriedade newvalue é uma propriedade do método UserDefaults
        // que é usada quando se é passado um novo valor, como no caso do método set.
    }
    
    // propriedade computada para CodigoUsuario
    var codigousuario: String {
        
        get { return defaults.string(forKey: UserDefaultsKeys.codigousario.rawValue)! }
        set { defaults.set(newValue, forKey: UserDefaultsKeys.codigousario.rawValue) } // a propriedade newvalue é uma propriedade do método UserDefaults
        // que é usada quando se é passado um novo valor, como no caso do método set.
    }
    
    // propriedade computada para nomeusuario
    var nomeusuario: String {
        
        get { return defaults.string(forKey: UserDefaultsKeys.nomeusuario.rawValue)! }
        set { defaults.set(newValue, forKey: UserDefaultsKeys.nomeusuario.rawValue) } // a propriedade newvalue é uma propriedade do método UserDefaults
        // que é usada quando se é passado um novo valor, como no caso do método set.
    }
    
    // propriedade computada para CodigoLojista
    var codigolojista: String {
        
        get { return defaults.string(forKey: UserDefaultsKeys.codigolojista.rawValue)! }
        set { defaults.set(newValue, forKey: UserDefaultsKeys.codigolojista.rawValue) } // a propriedade newvalue é uma propriedade do método UserDefaults
        // que é usada quando se é passado um novo valor, como no caso do método set.
    }
    
    // propriedade computada para CodigoLojista
    var cnpjlojista: String {
        
        get { return defaults.string(forKey: UserDefaultsKeys.cnpjlojista.rawValue)! }
        set { defaults.set(newValue, forKey: UserDefaultsKeys.cnpjlojista.rawValue) } // a propriedade newvalue é uma propriedade do método UserDefaults
        // que é usada quando se é passado um novo valor, como no caso do método set.
    }
   
    // propriedade computada para Razao Lojista
    var razao: String {
        
        get { return defaults.string(forKey: UserDefaultsKeys.razao.rawValue)! }
        set { defaults.set(newValue, forKey: UserDefaultsKeys.razao.rawValue) } // a propriedade newvalue é uma propriedade do método UserDefaults
        // que é usada quando se é passado um novo valor, como no caso do método set.
    }
    
    
    // torna privada a classe para que se
    // nao instancie ela por acidente
    private init(){
        
        // inicializa o valor padrao para  distancia em KM caso nao tenha nada definido
        if  defaults.integer(forKey: UserDefaultsKeys.distanciaKm.rawValue) == 0 {
            defaults.set(5, forKey: UserDefaultsKeys.distanciaKm.rawValue)
        }
    }
}
