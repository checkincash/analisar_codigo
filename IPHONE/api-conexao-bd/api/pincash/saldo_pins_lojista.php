<?php

    include "db.php";
		
	if(!isset($_GET["pcontrato"])){
	   exit;
	}

    $pcontrato     = $_GET["pcontrato"];
	$psaldo        = $_GET["psaldo"];
	
	
		
		 $verifica_existencia = "select fk_contrato from ap_pincash_contrato_creditos where fk_contrato = '" . $pcontrato . "'" ;
		 $exec_row = $conn->query($verifica_existencia );

		 if($exec_row->num_rows != 0)
		 {
			 $row = $exec_row->fetch_row();
			 
			 $query = 'update ap_pincash_contrato_creditos set pincash_saldo = pincash_saldo - ? where fk_contrato =  ?';

			 $stm = $conn->prepare($query);
			 $stm->bind_param("ss", $psaldo, $pcontrato);
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