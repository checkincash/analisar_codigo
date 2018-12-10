//
//  LocaisTableViewCell.swift
//  checkin
//
//  Created by Manoel Vieira da Silva Neto on 12/03/2018.
//  Copyright © 2018 Manoel Vieira da Silva Neto. All rights reserved.
//

import UIKit
import Kingfisher

class LocaisTableViewCell: UITableViewCell {

    @IBOutlet weak var imagemLoja: UIImageView!
    @IBOutlet weak var lbRazao: UILabel!
    @IBOutlet weak var lbPincash: UILabel!
    @IBOutlet weak var lbPcpa: UILabel!
    @IBOutlet weak var lbData: UILabel!
    @IBOutlet weak var imagemTick: UIImageView!
    @IBOutlet weak var lbEndereco: UILabel!
    
    @IBOutlet weak var viewPremio: UIView!
    override func awakeFromNib() {
        super.awakeFromNib()
        // Initialization code
    }

    override func setSelected(_ selected: Bool, animated: Bool) {
        super.setSelected(selected, animated: animated)

        // Configure the view for the selected state
        
        imagemLoja.layer.cornerRadius = 8 //imagemLoja.frame.size.height / 2
        imagemLoja.layer.borderColor = UIColor.lightGray.cgColor
        imagemLoja.layer.borderWidth = 1
        
        viewPremio.layer.borderColor = Color.lightGray.cgColor
        viewPremio.layer.borderWidth = 1
        
        
        
    }

}
