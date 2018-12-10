<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// include database and object files
include_once '../config/database.php';
include_once '../objetos/usuario.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare usuario object
$dataTable = new Usuario($db);
 
// get id of product to be edited
$data = json_decode(file_get_contents("php://input"));
 
// set ID property of usuario to be edited
$dataTable->email = $data->email;
 
// set product property values
$dataTable->dataregistro = date('Y-m-d H:i:s');
$dataTable->nome = $data->nome;
$dataTable->sobrenome = $data->sobrenome;
$dataTable->senha = $data->senha;
$dataTable->pin_recupera_senha = $data->pin_recupera_senha;
$dataTable->iscompleto = $data->iscompleto;

// update the product
if($dataTable->update()){
    echo '{';
        echo '"message": "Usuario was updated."';
    echo '}';
}
 
// if unable to update the product, tell the user
else{
    echo '{';
        echo '"message": "Unable to update Usuario."';
    echo '}';
}
?>