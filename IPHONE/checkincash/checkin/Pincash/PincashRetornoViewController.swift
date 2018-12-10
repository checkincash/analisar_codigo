//
//  PincashRetornoViewController.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 02/03/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit

class PincashRetornoViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()

        // Do any additional setup after loading the view.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    // carregou completamnte
    override func viewDidAppear(_ animated: Bool) {
        super.viewDidAppear(animated)
        
        
        self.performSegue(withIdentifier: "segueVoltarCheckin", sender: nil)
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
