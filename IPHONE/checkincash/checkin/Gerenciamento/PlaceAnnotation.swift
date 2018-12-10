//
//  PlaceAnnotation.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 06/02/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import Foundation
import MapKit

class PlaceAnnotation: NSObject, MKAnnotation {
  
    
    enum PlaceType {
        case place
        case Poi
    }
    
    var coordinate: CLLocationCoordinate2D
    var title: String?
    var subtitle: String?
    var type: PlaceType
    var address: String!
    
    init( coordinate: CLLocationCoordinate2D, type: PlaceType){
        
        self.coordinate = coordinate
        self.type = type
       
    }
    
   
    
}
