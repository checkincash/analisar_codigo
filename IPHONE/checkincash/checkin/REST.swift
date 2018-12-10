//
//  REST.swift
//  Checkin
//
//  Created by Manoel Vieira da Silva Neto on 29/12/2017.
//  Copyright © 2017 Eric Brito. All rights reserved.
//

import Foundation

enum listERROR{
    case url
    case taskError(error: Error)
    case noResponse
    case noData
    case responseStatusCode(code: Int)
    case invalidJASON
}

class RESTusr{
    
    
    private static let usuarioPathRead = "https://www.checkincash.com.br/api/usuario/read.php"
    private static let usuarioPathReadOne = "https://www.checkincash.com.br/api/usuario/read_one.php"
    private static let usuarioPathReadCredentials = "https://www.checkincash.com.br/api/usuario/read_credentials.php"
    private static let usuarioPathCreate = "https://www.checkincash.com.br/api/usuario/create.php"
    private static let usuarioPathUpdate = "https://www.checkincash.com.br/api/usuario/update.php"
    
    
    //criando a sessao
    private static let configurationOBJ: URLSessionConfiguration = {
        let config = URLSessionConfiguration.default
        config.allowsCellularAccess = true
        config.httpAdditionalHeaders = ["Content-Type": "application/json"]
        config.timeoutIntervalForRequest = 30.0
        
        return config
    }()
    
    private static let session =  URLSession(configuration: configurationOBJ) //URLSession.shared
    
    
    class func loadUsers(onComplete: @escaping ([Usuario]) -> Void, onError: @escaping (listERROR) ->Void){
        
        
        guard let url = URL(string: usuarioPathRead) else {
            
            onError(.url)
            
            return
        }
        let usuariorst = Usuario()
        let dataTask = session.dataTask(with: url) { (data: Data?, response:  URLResponse?, error: Error?) in
            
            if error == nil
            {
                guard let response = response as? HTTPURLResponse else {
                    
                    onError(.noResponse)
                    return
                }
                if response.statusCode == 200 {
                    guard let data = data else {return}
                    do
                    {
                        let usuarios = try JSONDecoder().decode([Usuario].self, from: data)
                   
                        onComplete(usuarios)
                    }
                    catch
                    {
                        onComplete([usuariorst])
                     //   print(error.localizedDescription)
                     //   onError(.invalidJASON)
                    }
                    
                } else {
                    
                    print("Servidor retornou status invalido ")
                    onError(.responseStatusCode(code: response.statusCode))
                    
                }
                
            }else{
                
                print (error!)
                
                onError(.taskError(error:  error!))
            }
        }
        
        dataTask.resume()
    }
    // Ler usuario pelo ID
    class func loadUsersID(emailID: String, onComplete: @escaping ([Usuario]) -> Void, onError: @escaping (listERROR) ->Void){
        
        
        guard let url = URL(string: usuarioPathReadOne + "?email=" + emailID) else {
            
            onError(.url)
            
            return
        }
        let usuariorst = Usuario()
        let dataTask = session.dataTask(with: url) { (data: Data?, response:  URLResponse?, error: Error?) in
            
            if error == nil
            {
                guard let response = response as? HTTPURLResponse else {
                    
                    onError(.noResponse)
                    return
                }
                if response.statusCode == 200 {
                    guard let data = data else {return}
                    do
                    {
                        let usuarios = try JSONDecoder().decode([Usuario].self, from: data)
                        onComplete(usuarios)
                    }
                    catch
                    {
                        onComplete([usuariorst])
                    //    print(error.localizedDescription)
                    //    onError(.invalidJASON)
                    }
                    
                } else {
                    
                    print("Servidor retornou status invalido ")
                    onError(.responseStatusCode(code: response.statusCode))
                    
                }
                
            }else{
                
                print (error!)
                
                onError(.taskError(error:  error!))
            }
        }
        
        dataTask.resume()
    }
    // Ler credenciais do usuario pelo ID
    class func loadCredentials(emailID: String, password: String, onComplete: @escaping ([Usuario]) -> Void, onError: @escaping (listERROR) ->Void){
        
        
        guard let url = URL(string: usuarioPathReadCredentials + "?email=" + emailID + "&senha=" + password ) else {
            
            onError(.url)
            
            return
        }
        let usuariorst = Usuario()
        let dataTask = session.dataTask(with: url) { (data: Data?, response:  URLResponse?, error: Error?) in
            
            if error == nil
            {
                guard let response = response as? HTTPURLResponse else {
                    
                    onError(.noResponse)
                    return
                }
                if response.statusCode == 200 {
                    guard let data = data else {return}
                    do
                    {
                        let usuarios = try JSONDecoder().decode([Usuario].self, from: data)
                        onComplete(usuarios)
                    }
                    catch
                    {
                        onComplete([usuariorst])
                        //    print(error.localizedDescription)
                        //    onError(.invalidJASON)
                    }
                    
                } else {
                    
                    print("Servidor retornou status invalido ")
                    onError(.responseStatusCode(code: response.statusCode))
                    
                }
                
            }else{
                
                print (error!)
                
                onError(.taskError(error:  error!))
            }
        }
        
        dataTask.resume()
    }
    
    // incluindo usuario
    class func save(usr: Usuario, onComplete: @escaping (Bool) -> Void){
        guard let url = URL(string: usuarioPathCreate) else {
            onComplete(false)
            return
        }
        var request = URLRequest(url: url)
        request.httpMethod = "POST"
        
        guard let json = try? JSONEncoder().encode(usr) else {
            onComplete(false)
            return
            
        }
        
        request.httpBody = json
        
        let dataTask = session.dataTask(with: request)
        { (data, response, error) in
            if error == nil
            {
                guard let response = response as? HTTPURLResponse, response.statusCode == 200, let _ = data else
                {
                    
                    onComplete(false)
                    return
                }
                
                onComplete(true)
            }
            else
            {
                
                onComplete(false)
            }
            
            
        }
        dataTask.resume()
    }
    
    // alterando usuario
    class func update(usr: Usuario, onComplete: @escaping (Bool) -> Void){
        guard let url = URL(string: usuarioPathUpdate) else {
            
            onComplete(false)
            return
        }
        var request = URLRequest(url: url)
        request.httpMethod = "POST"
        
        guard let json = try? JSONEncoder().encode(usr) else {
            
            onComplete(false)
            return
            
        }
        
        request.httpBody = json
        
        let dataTask = session.dataTask(with: request)
        { (data, response, error) in
            if error == nil
            {
                guard let response = response as? HTTPURLResponse, response.statusCode == 200, let _ = data else
                {
                    
                    onComplete(false)
                    return
                }
                
                print("Complete")
                onComplete(true)
            }
            else
            {
                
                onComplete(false)
            }
            
            
        }
        dataTask.resume()
    }
}

class RESTcatalogo{
    
    private static let clientePathRead = "https://www.checkincash.com.br/api/cliente/recupera_clientes.php"
    
    //criando a sessao
    private static let configurationOBJ: URLSessionConfiguration = {
        let config = URLSessionConfiguration.default
        config.allowsCellularAccess = true
        config.httpAdditionalHeaders = ["Content-Type": "application/json"]
        config.timeoutIntervalForRequest = 30.0
        
        return config
    }()
    
    private static let session =  URLSession(configuration: configurationOBJ) //URLSession.shared
    
    class func loadHome(onComplete: @escaping ([Cliente]) -> Void, onError: @escaping (listERROR) ->Void){
        
        
        guard let url = URL(string: clientePathRead) else {
            
            onError(.url)
            
            return
        }
        let clienterst = Cliente()
        let dataTask = session.dataTask(with: url) { (data: Data?, response:  URLResponse?, error: Error?) in
            
            if error == nil
            {
                guard let response = response as? HTTPURLResponse else {
                    
                    onError(.noResponse)
                    return
                }
                if response.statusCode == 200 {
                    guard let data = data else {return}
                    do
                    {
                        let clientes = try JSONDecoder().decode([Cliente].self, from: data)
                        
                        onComplete(clientes)
                    }
                    catch
                    {
                        onComplete([clienterst])
                        //   print(error.localizedDescription)
                        //   onError(.invalidJASON)
                    }
                    
                } else {
                    
                    print("Servidor retornou status invalido ")
                    onError(.responseStatusCode(code: response.statusCode))
                    
                }
                
            }else{
                
                print (error!)
                
                onError(.taskError(error:  error!))
            }
        }
        
        dataTask.resume()
    }
    
}

