//
//  DestaquesTableViewCell.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 23/01/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit

class DestaquesTableViewCell: UITableViewCell {

    @IBOutlet weak var lojaImageView: UIImageView!
    @IBOutlet weak var tituloLabel: UILabel!
    @IBOutlet weak var abreviaturaLabel: UILabel!
    @IBOutlet weak var pcpaLabel: UILabel!
    @IBOutlet weak var perc1Label: UILabel!
    @IBOutlet weak var perc2Label: UILabel!
    @IBOutlet weak var perc3Label: UILabel!
    @IBOutlet weak var categoriasLabel: UILabel!
    @IBOutlet weak var lbViewCategoria: UIView!
    @IBOutlet weak var lbViewClass1: UIView!
    @IBOutlet weak var lbViewClass2: UIView!
    @IBOutlet weak var lbClassificacao1: UILabel!
    @IBOutlet weak var lbClassificacao2: UILabel!
    
    @IBOutlet weak var pincashLabel: UILabel!
    override func awakeFromNib() {
        super.awakeFromNib()
        // Initialization code
    }

    override func setSelected(_ selected: Bool, animated: Bool) {
        super.setSelected(selected, animated: animated)

        // Configure the view for the selected state
        
        
        lbViewCategoria.layer.borderColor = UIColor.lightGray.cgColor
        lbViewCategoria.layer.borderWidth = 1
        
        lbViewClass1.layer.borderColor = UIColor.lightGray.cgColor
        lbViewClass1.layer.borderWidth = 1
        
        lbViewClass2.layer.borderColor = UIColor.lightGray.cgColor
        lbViewClass2.layer.borderWidth = 1
        
        if ( lbClassificacao1.text?.isEmpty )!{
            lbViewClass1.alpha = 0
        }
        else
        {
            lbViewClass1.alpha = 1
        }
        if ( lbClassificacao2.text?.isEmpty )!{
            lbViewClass2.alpha = 0
        }
        else{
             lbViewClass2.alpha = 1
            
        }
        
    }

}
