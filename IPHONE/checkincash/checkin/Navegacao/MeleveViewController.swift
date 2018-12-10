//
//  MeleveViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 05/02/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import MapKit
import GoogleMaps


class MeleveViewController: UIViewController, MKMapViewDelegate, CLLocationManagerDelegate {

    enum MapMessageType{
        case routeError
        case authorizationWarning
    }
    
    var locationManager = CLLocationManager()
    
    //MARK: - Outlet
    var latitude: String!
    var longitude: String!
    var latitudeloja: String!
    var longitudeloja: String!
    var nomeloja: String!
    var categoria: String!
    var btUserLocation: MKUserTrackingButton!
    var selectedAnottation: PlaceAnnotation?
    var timer: Timer?
    
    
  
    
    @IBOutlet weak var mapView: MKMapView!
    //var gerenciadorLocal = CLLocationManager()
    
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
       
        
        locationManager.delegate = self
        locationManager.desiredAccuracy = kCLLocationAccuracyBest
        locationManager.requestAlwaysAuthorization()
        locationManager.startUpdatingLocation()
        
        mapView.delegate = self
        locationManager.delegate = self
        
        mapView.showsUserLocation = true
        mapView.showsScale = true
        mapView.showsPointsOfInterest = true
        
        
        // Configura o botao de Lozalizacao
        configureLocationButton()
        
        // Verifica autorizacao
        requestUserLocationAuthorization()
        
       
        
        
        let latitudeLoja: CLLocationDegrees = Double(self.latitudeloja)!
        let longitudeLoja: CLLocationDegrees = Double(self.longitudeloja)!
        
    //    let latitudeUsuario: CLLocationDegrees = Double(self.latitude)!
     //   let longitudeUsuario: CLLocationDegrees = Double(self.longitude)!
        
        // delta = quanto maior mais distante do mapa
        let deltaLatitude: CLLocationDegrees = 0.004  // Define o ZOOM
        let deltaLongitude: CLLocationDegrees = 0.004 // Define o ZOOM
        let areadevisualizacao: MKCoordinateSpan = MKCoordinateSpanMake(deltaLatitude, deltaLongitude)

        let localizacaoloja: CLLocationCoordinate2D = CLLocationCoordinate2DMake(latitudeLoja, longitudeLoja)
    //    let localizacao: CLLocationCoordinate2D = CLLocationCoordinate2DMake(latitudeUsuario, longitudeUsuario)
        let regiao: MKCoordinateRegion = MKCoordinateRegionMake(localizacaoloja, areadevisualizacao)
      
        mapView.setRegion(regiao, animated: true)
        
        //Definindo marcadores
        let anotacao =  PlaceAnnotation(coordinate: localizacaoloja, type: .place)    //MKPointAnnotation()
      //  anotacao.coordinate = localizacaoloja
        anotacao.title = self.nomeloja
        anotacao.subtitle = self.categoria
        
        
        mapView.addAnnotation(anotacao)
      
        tracarota()
        
        // Prepara a classe timer para execucao a cada 10 segundos
        timer = Timer.scheduledTimer(withTimeInterval: 10.0, repeats: true) { (time) in
            self.tracarota()
        }
  
    }
    
    
    
    func tracarota()
    {
        
        let latitudeLoja: CLLocationDegrees = Double(self.latitudeloja)!
        let longitudeLoja: CLLocationDegrees = Double(self.longitudeloja)!
        
        
        let localizacaoloja: CLLocationCoordinate2D = CLLocationCoordinate2DMake(latitudeLoja, longitudeLoja)
        let localizacao = locationManager.location?.coordinate
        
        //*************************************** Tracando Rota
        let rota = MKDirectionsRequest()
        rota.destination = MKMapItem(placemark: MKPlacemark(coordinate: localizacaoloja)) // coordenadas da loja
        rota.source = MKMapItem(placemark: MKPlacemark(coordinate: localizacao!)) // coordenadas do usuario
        
        let direcao = MKDirections(request: rota)
        
        
        
       
        // Calculando a Rota
        direcao.calculate { (response, error) in
            if error == nil
            {
                if let response = response {
                    self.mapView.removeOverlays(self.mapView.overlays)
                    
                    let route = response.routes.first!
                    
                    /*
                    print("nome: ", route.name) // nome da rota
                    print("distancia: ", route.distance) // distancia da rota
                    print("duracao: ", route.expectedTravelTime) // tempo
                    
                    // Varrer todos os passos da rota
                    for step in route.steps{
                        
                        print("Em \(step.distance) metro(s), \(step.instructions)")
                    }
                    */
                    
                    self.mapView.add(route.polyline, level: .aboveRoads)
                    
                    /*  var notacoes = self.mapView.annotations.filter({!($0 is PlaceAnnotation)})
                     notacoes.append(self.selectedAnottation!) */
                    let notacoes = self.mapView.annotations
                    self.mapView.showAnnotations(notacoes, animated: true)
                }
            }else
            {
             //   self.showMessage(type: .routeError)
            }
        }
    }
    
    //MARK: - Configuracoes Localizacao
    
    // Configura o botao de localizacao
    func configureLocationButton(){
        btUserLocation = MKUserTrackingButton(mapView: mapView)
        btUserLocation.backgroundColor = .white
        btUserLocation.frame.origin.x = 10
        btUserLocation.frame.origin.y = 70
        btUserLocation.layer.cornerRadius = 5
        btUserLocation.layer.borderWidth = 1
        btUserLocation.layer.borderColor = UIColor(named: "colorapp")?.cgColor
        
    }
    

    // redesenha camadas na tela ( Overlays )
    func mapView(_ mapView: MKMapView, rendererFor overlay: MKOverlay) -> MKOverlayRenderer {
        if overlay is MKPolyline{
            let renderer = MKPolylineRenderer(overlay: overlay)
            renderer.strokeColor = UIColor(named: "colorapp")?.withAlphaComponent(0.60)
            renderer.lineWidth = 5.0
            
            return renderer
        }
        return MKOverlayRenderer(overlay: overlay)
    }
  
    // Personalizando Anotações
    func mapView(_ mapView: MKMapView, viewFor annotation: MKAnnotation) -> MKAnnotationView? {
        
        if !(annotation is PlaceAnnotation){
            return nil
        }
        
        let type = ( annotation as! PlaceAnnotation).type
        let identifier = "\(type)"
        var annotationView  =  mapView.dequeueReusableAnnotationView(withIdentifier: identifier) as? MKMarkerAnnotationView
        
        if annotationView == nil {
            
            annotationView = MKMarkerAnnotationView(annotation: annotation, reuseIdentifier: identifier)
        }
        
        annotationView?.annotation = annotation
        annotationView?.canShowCallout = true
       // annotationView?.markerTintColor = UIColor(named: "colorapp")?.withAlphaComponent(0.45)
       // annotationView?.glyphImage = #imageLiteral(resourceName: "checkin_logo")
        
        annotationView?.markerTintColor = #colorLiteral(red: 0.7450980544, green: 0.1568627506, blue: 0.07450980693, alpha: 1).withAlphaComponent(0.80)
        
        annotationView?.displayPriority = type == .place ? .required : .defaultHigh
        
        
        return annotationView
    }
    
    //Trata mensagens de erro
    func showMessage(type: MapMessageType){
        
        let titulo = type == .authorizationWarning ? "Aviso" : "Erro"
        
        var message: String!
        
        switch type {
        case .authorizationWarning:
            message = "Para usar os recursos de localização do Check-in cash, você precisa permitir o uso na tela de ajustes"
        case .routeError:
            message = "não foi possível traçar a rota"
       
        }
        
        let alertController = UIAlertController(title: titulo, message: message, preferredStyle: .alert)
        let acaoConfirmar = UIAlertAction(title: "Fechar", style: .default, handler: nil)
        
        alertController.addAction(acaoConfirmar)
        
        if type == .authorizationWarning{
            let confirmAction =  UIAlertAction(title: "Ir para Ajustes", style: .default, handler: { (action) in
                // recupera a URL da tela de ajustes ( Setings do aparelho Iphone )
                if let configura = URL(string: UIApplicationOpenSettingsURLString){
                    UIApplication.shared.open(configura, options: [:], completionHandler: nil)
                }
                
             
            })
            
            alertController.addAction(confirmAction)
        }
        
        self.present(alertController, animated: true, completion: nil)
        
    }
    

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    // Mostra informacoes da Anotation
    func showInfo(){
        
     // Como objetivo futuro de monstrar as informações da anotacao
     // deixei este metodo pronto aqui bastando somente construí-lo futuramente
    }
    
    // Verifica as autorizações do usuario
    func requestUserLocationAuthorization(){
        if CLLocationManager.locationServicesEnabled(){
            switch CLLocationManager.authorizationStatus() {
                
            case .authorizedAlways, .authorizedWhenInUse:
                // Caso tudo certo adiciona o botao de navegacao
                mapView.addSubview(btUserLocation)
            case .denied:
                showMessage(type: .authorizationWarning)
            case .notDetermined:
                locationManager.requestWhenInUseAuthorization()
            case .restricted:
                break
            }
        }
    }
    // Mudou o Status da Autorizacao
    func locationManager(_ manager: CLLocationManager, didChangeAuthorization status: CLAuthorizationStatus) {
        switch status {
        case .authorizedAlways, .authorizedWhenInUse:
            mapView.showsUserLocation = true
            mapView.addSubview(btUserLocation)
            locationManager.startUpdatingLocation()
        default:
            break
        }
    }
    
    // Metodo responsavel por capturar as ultimas localizacoes do usuario
    func locationManager(_ manager: CLLocationManager, didUpdateLocations locations: [CLLocation]) {
        // locations.last pega a ultima posicao do usuario
        if let localizacaoUsuario = locations.last{
        
            self.latitude = String(localizacaoUsuario.coordinate.latitude)
            self.longitude = String(localizacaoUsuario.coordinate.longitude)
            
            
            // é Possivel deixar o localizar usuario ligado nas atualizacoes de update, contudo
            // estou deixando a rotina desligada
          
            /*
            let region = MKCoordinateRegionMakeWithDistance(localizacaoUsuario.coordinate, 200, 300)
            mapView.setRegion(region, animated: true)
             */
        }
    }
    //MARK: - Anotacoes
    // Metodo invocado toda vez que se clicar em uma notacao
    func mapView(_ mapView: MKMapView, didSelect view: MKAnnotationView) {
        
        let camera = MKMapCamera()
        camera.centerCoordinate = view.annotation!.coordinate
        camera.pitch = 80
        camera.altitude = 180
        
        mapView.setCamera(camera, animated: true)
        
        
       // selectedAnottation =  ( view.annotation as! PlaceAnnotation)
        
       // showInfo()
    }

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */

}
