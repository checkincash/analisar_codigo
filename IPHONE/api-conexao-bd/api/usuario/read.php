<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/database.php';
include_once '../objetos/usuario.php';
 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$usuario = new Usuario($db);
 
// query products
$stmt = $usuario->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // products array
    $usuarios_arr=array();
    $usuarios_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
 
       $result[] = $row;
       
       /* $usuario_item=array(
            "dataregistro" => $dataregistro,
            "nome" => html_entity_decode($nome),
            "sobrenome" => $sobrenome,
            "email" => $email,
            "senha" => $senha,
            "iscompleto" => $iscompleto
        );
 
        array_push($usuarios_arr[" "], $usuario_item);*/
    }
 
   echo json_encode($result);

   // echo json_encode($usuarios_arr);
}
 
else{
    echo json_encode(
        array("message" => "Nenhum usuario encontrado.")
    );
}


?>