//
//  FuncoesGerenciaveis.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 31/01/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import Foundation
import CoreData


class FuncoesGerenciaveis {
    
    static var funcao: FuncoesGerenciaveis =  FuncoesGerenciaveis() // Criado arquivo singleton; pois de qualquer lugar que se queira ter acesso, basta
    //digitar FuncoesGerenciaveis.funcao e se tera acesso a todos os metodos desta classe
    
    // torna privada a classe para que se
    // nao instancie ela por acidente
    private init(){
        
        
    }
    
    var isComplete: Bool! = false
    
     // propriedades computadas
    // Verifica se o usuario existe ou nao
    var usuarioLogOnOff: Bool {
    
        let appDelegate = UIApplication.shared.delegate as! AppDelegate
        let context = appDelegate.persistentContainer.viewContext
        
        let requisicao = NSFetchRequest<NSFetchRequestResult>(entityName: "Usuariodb")
        
        
        do{
        let usuario =  try  context.fetch(requisicao)
        
        if usuario.count <= 0
        {
        isComplete = false
        
        }
        else
        {
        isComplete = true
        }
        
        
        }catch{
            print( "Erro ao Recuperar os dados")
        }
        
        return isComplete
    
    }
    
    // propriedade computada
    // limpa dados do usuario do app
    
    var limpaDadosUsuario: Bool {
        
        
        let appDelegate = UIApplication.shared.delegate as! AppDelegate
        let context = appDelegate.persistentContainer.viewContext
        let requisicao = NSFetchRequest<NSFetchRequestResult>(entityName: "Usuariodb")
        let preferencia = NSFetchRequest<NSFetchRequestResult>(entityName: "Preferenciasdb")
        
        
        let predicateusua = NSPredicate(format: "nome !=  ''", "")
        let predicatepref = NSPredicate(format: "codigousuario != '0'", "")
        
        requisicao.predicate = predicateusua
        preferencia.predicate = predicatepref
        
        do {
            
            //USUARIO
            let usuario = try context.fetch(requisicao)
            
            if usuario.count > 0 {
                
                
                for usr in usuario as! [NSManagedObject] {
                    
                    context.delete(usr)
                    
                    do{
                        try context.save()
                        
                        isComplete = true
                        
                    }catch{
                        
                        isComplete = false;
                    
                    }
                }
            }
            
            //PREFERENCIAS
            let prefe = try context.fetch(preferencia)
            
            if prefe.count > 0 {
                
                
                for pre in prefe as! [NSManagedObject] {
                    
                    context.delete(pre)
                    
                    do{
                        try context.save()
                        
                        isComplete = true
                    }catch{
                        isComplete = false
                    }
                }
            }
            
        }catch{
            isComplete = false
        }
        
        
        
        
        
        return isComplete
    }

}


