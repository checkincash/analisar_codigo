//
//  MeusorteioTableViewCell.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 16/03/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit

class MeusorteioTableViewCell: UITableViewCell {
    @IBOutlet weak var imagemPremio: UIImageView!
    @IBOutlet weak var lbFaltaPin: UILabel!
    @IBOutlet weak var viewPremio: UIView!
    @IBOutlet weak var lbTitulo: UILabel!
    @IBOutlet weak var lbChamada: UILabel!
    @IBOutlet weak var lbImagemMoedaAlcance: UIImageView!
    @IBOutlet weak var lbTextoFaltam: UILabel!
    
    
    override func awakeFromNib() {
        super.awakeFromNib()
        // Initialization code
    }

    override func setSelected(_ selected: Bool, animated: Bool) {
        super.setSelected(selected, animated: animated)

        // Configure the view for the selected state
        
        viewPremio.layer.borderColor = UIColor.lightGray.cgColor
        viewPremio.layer.borderWidth = 1
        
    }

}
