<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../config/database.php';
 
// instantiate product object
include_once '../objetos/usuario.php';
 
$database = new Database();
$db = $database->getConnection();
 
$dataTable = new Usuario($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
// set product property values
$dataTable->dataregistro = date('Y-m-d H:i:s');
$dataTable->nome = $data->nome;
$dataTable->sobrenome = $data->sobrenome;
$dataTable->email = $data->email;
$dataTable->senha = $data->senha;
$dataTable->iscompleto = $data->iscompleto;


 
// create the product
if($dataTable->create()){
    echo '{';
        echo '"message": "Usuario was created."';
    echo '}';
}
 
// if unable to create the product, tell the user
else{
    echo '{';
        echo '"message": "Unable to create usuario."';
    echo '}';
}
?>