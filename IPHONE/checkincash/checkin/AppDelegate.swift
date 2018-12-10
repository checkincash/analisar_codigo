//
//  AppDelegate.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 28/12/2017.
//  Copyright © 2017 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import CoreData
import GoogleMaps
import UserNotifications


@UIApplicationMain
class AppDelegate: UIResponder, UIApplicationDelegate {

    var window: UIWindow?
    let center = UNUserNotificationCenter.current()


   
   // @available(iOS 9.0, *)
    func application(_ application: UIApplication, didFinishLaunchingWithOptions launchOptions: [UIApplicationLaunchOptionsKey: Any]?) -> Bool {
        // Override point for customization after application launch.
        window?.tintColor = UIColor(named: "colorapp")
        GMSServices.provideAPIKey("AIzaSyCvbzFc1yVaGbgYcF3tOSTmiMC6PRfkrwQ")
        
     
        FBSDKApplicationDelegate.sharedInstance().application(application, didFinishLaunchingWithOptions: launchOptions)
        
  
        
        // centro de notificacoes, repassando o delegate
        center.delegate = self
        
        // obtendo os ajustes de notificacao
        center.getNotificationSettings { (settings) in
            if settings.authorizationStatus == .notDetermined {
                let options: UNAuthorizationOptions = [.alert, .sound, .badge]
                self.center.requestAuthorization(options: options, completionHandler: { (sucess, error) in
                    if error == nil{
                        print("sucesso")
                    }else{
                        print(error!.localizedDescription)
                    }
                })
            } else if settings.authorizationStatus == .denied   // nao autorizou a notificacao
            {
                print("usuario negou a notificacao, isso impede o uso de notificações")
            }
        }
        
    
        
        // OBSERVACAO, CRIANDO EXEMPLOS DE BOTOES NA NOTIFICACAO
        
        let confirmAction = UNNotificationAction(identifier: "Confirm", title: "Ja Entendi 👍 ", options: [.foreground]) // options
        // foreground -> tras o APP para execucao
        let cancelAction = UNNotificationAction(identifier: "Cancel", title: "Cancelar", options: []) // nao executa nehuma açao no APP
      
        // Vinculando botoes a uma categoria, isto significa que podemos ter varias categorias e cada uma delas com seus respectivos botoes
        let categoria = UNNotificationCategory(identifier: "PinNotificationSimple", actions: [confirmAction, cancelAction], intentIdentifiers: [], hiddenPreviewsBodyPlaceholder: "", options: [.customDismissAction])
        
        center.setNotificationCategories([categoria])
        
     
        return true
    }
  
    
    @available(iOS 9.0, *)
    func application(_ application: UIApplication, open url: URL, options: [UIApplicationOpenURLOptionsKey : Any]) -> Bool {
        
        print("Processou o callback!")
        
        return FBSDKApplicationDelegate.sharedInstance().application(application, open: url, options: options)
        
     
    }
 

    @available(iOS 9.0, *)
    func application(_ application: UIApplication, open url: URL, sourceApplication: String?, annotation: Any) -> Bool {
        
        
       return FBSDKApplicationDelegate.sharedInstance().application(application, open: url, sourceApplication: sourceApplication, annotation: annotation)
 
        
        /*
        return FBSDKApplicationDelegate.sharedInstance().application(application, open: url as URL!, sourceApplication: UIApplicationOpenURLOptionsKey.sourceApplication.rawValue, annotation: UIApplicationOpenURLOptionsKey.annotation)
       */
      
      
    }

    func applicationWillResignActive(_ application: UIApplication) {
        // Sent when the application is about to move from active to inactive state. This can occur for certain types of temporary interruptions (such as an incoming phone call or SMS message) or when the user quits the application and it begins the transition to the background state.
        // Use this method to pause ongoing tasks, disable timers, and invalidate graphics rendering callbacks. Games should use this method to pause the game.
    }

    func applicationDidEnterBackground(_ application: UIApplication) {
        // Use this method to release shared resources, save user data, invalidate timers, and store enough application state information to restore your application to its current state in case it is terminated later.
        // If your application supports background execution, this method is called instead of applicationWillTerminate: when the user quits.
    }

    func applicationWillEnterForeground(_ application: UIApplication) {
        // Called as part of the transition from the background to the active state; here you can undo many of the changes made on entering the background.
    }

    func applicationDidBecomeActive(_ application: UIApplication) {
        // Restart any tasks that were paused (or not yet started) while the application was inactive. If the application was previously in the background, optionally refresh the user interface.
    }

    func applicationWillTerminate(_ application: UIApplication) {
        // Called when the application is about to terminate. Save data if appropriate. See also applicationDidEnterBackground:.
        // Saves changes in the application's managed object context before the application terminates.
        self.saveContext()
    }

    // MARK: - Core Data stack

    lazy var persistentContainer: NSPersistentContainer = {
        /*
         The persistent container for the application. This implementation
         creates and returns a container, having loaded the store for the
         application to it. This property is optional since there are legitimate
         error conditions that could cause the creation of the store to fail.
        */
        let container = NSPersistentContainer(name: "checkin")
        container.loadPersistentStores(completionHandler: { (storeDescription, error) in
            if let error = error as NSError? {
                // Replace this implementation with code to handle the error appropriately.
                // fatalError() causes the application to generate a crash log and terminate. You should not use this function in a shipping application, although it may be useful during development.
                 
                /*
                 Typical reasons for an error here include:
                 * The parent directory does not exist, cannot be created, or disallows writing.
                 * The persistent store is not accessible, due to permissions or data protection when the device is locked.
                 * The device is out of space.
                 * The store could not be migrated to the current model version.
                 Check the error message to determine what the actual problem was.
                 */
                fatalError("Unresolved error \(error), \(error.userInfo)")
            }
        })
        return container
    }()

    // MARK: - Core Data Saving support

    func saveContext () {
        let context = persistentContainer.viewContext
        if context.hasChanges {
            do {
                try context.save()
            } catch {
                // Replace this implementation with code to handle the error appropriately.
                // fatalError() causes the application to generate a crash log and terminate. You should not use this function in a shipping application, although it may be useful during development.
                let nserror = error as NSError
                fatalError("Unresolved error \(nserror), \(nserror.userInfo)")
            }
        }
    }

}

// central de notificacoes, impementando o delegate
extension AppDelegate: UNUserNotificationCenterDelegate {
    
    func userNotificationCenter(_ center: UNUserNotificationCenter, willPresent notification: UNNotification, withCompletionHandler completionHandler: @escaping (UNNotificationPresentationOptions) -> Void) {
        completionHandler([.alert, .sound])
    }
    
    
    // Neste metodo temos todo o acesso as informações da Notificacao
    func userNotificationCenter(_ center: UNUserNotificationCenter, didReceive response: UNNotificationResponse, withCompletionHandler completionHandler: @escaping () -> Void) {
        
        let id = response.notification.request.identifier
        
        print("identificador da notificacao: " + id)
        
        switch response.actionIdentifier {
        case "Confirm":
            print("usuario disse que entendeu")
        case "Cancel":
            print("usuario cancelou")
        case UNNotificationDefaultActionIdentifier:
            print("tocou na propria notificacao")
        case UNNotificationDismissActionIdentifier:
            print("usuario fez o dismiss na notificacao")
        default:
            break
        }
        
        completionHandler()
    }
}
