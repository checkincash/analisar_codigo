<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/database.php';
include_once '../objetos/usuario.php';
 
// instantiate database and usuario object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$dataTable = new Usuario($db);
 
// get keywords
$keywords=isset($_GET["s"]) ? $_GET["s"] : "";
 
// query products
$stmt = $dataTable->search($keywords);
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // products array
    $dataTable_arr=array();
    $dataTable_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $dataTable_item=array(
            "dataregistro" => $dataregistro,
            "nome" => $nome,
            "sobrenome" => $sobrenome,
            "email" => html_entity_decode($email),
            "senha" => $senha
        );
 
        array_push($dataTable_arr["records"], $dataTable_item);
    }
 
    echo json_encode($dataTable_arr);
}
 
else{
    echo json_encode(
        array("message" => "No Users found.")
    );
}
?>