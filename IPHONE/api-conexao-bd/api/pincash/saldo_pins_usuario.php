<?php

    include "db.php";
		
	if(!isset($_GET["pusuario"])){
	   exit;
	}

    $pusuario      = $_GET["pusuario"];
	$psaldo        = $_GET["psaldo"];
	
	
		
		 $verifica_existencia = "select fk_usuario from ap_pincash_user where fk_usuario = '" . $pusuario . "'" ;
		 $exec_row = $conn->query($verifica_existencia );

		 if($exec_row->num_rows != 0)
		 {
			 $row = $exec_row->fetch_row();
			 
			 $query = 'update ap_pincash_user set saldo_flutuante = saldo_flutuante + ?, saldo_acumulado = saldo_acumulado + ? where fk_usuario =  ?';

			 $stm = $conn->prepare($query);
			 $stm->bind_param("sss", $psaldo, $psaldo, $pusuario);
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
			 $query = 'insert into ap_pincash_user (fk_usuario, saldo_flutuante, saldo_acumulado) values (?, ?, ?)';

			 $stm = $conn->prepare($query);
			 $stm->bind_param("sss", $pusuario, $psaldo, $psaldo);
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
		 echo "[" . json_encode($retorno) . "]";

		
		 $conn->close();

?>