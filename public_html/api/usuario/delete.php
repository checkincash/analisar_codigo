<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
 
// include database and object file
include_once '../config/database.php';
include_once '../objetos/usuario.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare usuario object
$dataTable = new Usuario($db);
 
// get usuario id
$data = json_decode(file_get_contents("php://input"));
 
// set usuario id to be deleted

$dataTable->email = $data->email; //'ribeirocarlose@gmail.com';
 
// delete the usuario
if($dataTable->delete()){
    echo '{';
        echo '"message": "Product was deleted."';
    echo '}';
}
 
// if unable to delete the usuario
else{
    echo '{';
        echo '"message": "Unable to delete object."';
    echo '}';
}
?>