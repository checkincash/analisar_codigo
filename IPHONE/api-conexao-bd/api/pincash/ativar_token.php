<?php

    include "db.php";
		
	if(!isset($_GET["pusuario"])){
	   exit;
	}

  	$datamov	   = date("Y-m-d H:i:s");
  	$publicador    = $_GET["publicador"];
  	$pusuario      = $_GET["pusuario"];
  	$token         = $_GET["token"];
  	$token_validado = $_GET["token_validado"];
	
	
	
		
		 $verifica_existencia = "select fk_usuario from ap_pincash_user_mov where fk_usuario = '" . $pusuario . "' and fk_contrato_publicador = '" . $publicador ."' and token = '". $token ."'" ;
		 $exec_row = $conn->query($verifica_existencia );

		 if($exec_row->num_rows != 0)
		 {
			 $row = $exec_row->fetch_row();
			 
			 $query = 'update ap_pincash_user_mov set token_validado  =  ?, token_data_ativacao = ? where fk_usuario =  ? and fk_contrato_publicador = ? and token = ?';

			 $stm = $conn->prepare($query);
			 $stm->bind_param("sssss", $token_validado, $datamov, $pusuario, $publicador, $token);
			 if( $stm->execute() )
			 {
				$retorno = array("retorno" => 'YES');
			 }
			 else
			 {
				$retorno = array("retorno" => 'NO');
			 }
			 
			  $stm->close();
		 }
		 else
		 {
			
			  $retorno = array("retorno" => 'NO');
			 
			 
			  $stm->close();
		 }
		 echo "[" . json_encode($retorno) . "]";

		
		 $conn->close();

?>