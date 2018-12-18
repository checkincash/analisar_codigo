<?php
 include "db.php";
 

$dados_checkin = "select 0 pk_classificacao, ' Todas Categorias ' descricao UNION SELECT pk_classificacao, descricao FROM ap_classificacao order by descricao ";




 $exec_row = $conn->query($dados_checkin );

 $result = array();

 while($info = $exec_row->fetch_assoc())
 {
      $result[] = $info;
 }


 echo json_encode($result);

 $conn->close();

?>