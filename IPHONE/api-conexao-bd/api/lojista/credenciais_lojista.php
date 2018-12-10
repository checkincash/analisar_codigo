<?php
 include "db.php";
 
if(!isset($_GET["pcnpj"]))
{
   exit;
}

$pcnpj		 	= $_GET["pcnpj"];

$dados_checkin = "select  pk_contrato, cnpj, razao, senha_usuario FROM ap_contrato where cnpj = '". $pcnpj ."'" ;




 $exec_row = $conn->query($dados_checkin );

 $result = array();

 while($info = $exec_row->fetch_assoc())
 {
      $result[] = $info;
 }


 echo json_encode($result);

 $conn->close();

?>