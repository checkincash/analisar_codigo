<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../config/database.php';
include_once '../objetos/usuario.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare product object
$dataTable = new Usuario($db);

 
// set ID property of product to be edited
$dataTable->email = isset($_GET['email']) ? $_GET['email'] : die();
 
// read the details of product to be edited
$stmt = $dataTable->readOne();
$num =  $stmt->rowCount();
$null[] = "";
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



/*
// create array
$dataTable_arr = array(
    "dataregistro" =>  $dataTable->dataregistro,
    "nome" => $dataTable->nome,
    "sobrenome" => $dataTable->sobrenome,
    "email" => $dataTable->email,
    "senha" => $dataTable->senha,
    "iscompleto" => $dataTable->iscompleto
    
    
);
*/ 
// make it json format
//print_r(json_encode($dataTable_arr));
?>