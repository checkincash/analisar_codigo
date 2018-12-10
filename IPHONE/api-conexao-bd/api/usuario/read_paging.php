<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/core.php';
include_once '../shared/utilities.php';
include_once '../config/database.php';
include_once '../objetos/usuario.php';
 
// utilities
$utilities = new Utilities();
 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$dataTable = new Usuario($db);
 
// query products
$stmt = $dataTable->readPaging($from_record_num, $records_per_page);
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // usuario array
    $dataTable_arr=array();
    $dataTable_arr["records"]=array();
    $dataTable_arr["paging"]=array();
 
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
            "sobrenome" => html_entity_decode($sobrenome),
            "email" => $email,
            "senha" => $senha
        );
 
        array_push($dataTable_arr["records"], $dataTable_item);
    }
 
 
    // include paging
    $total_rows=$dataTable->count();
    $page_url="{$home_url}usuario/read_paging.php?";
    $paging=$utilities->getPaging($page, $total_rows, $records_per_page, $page_url);
    $dataTable_arr["paging"]=$paging;
 
    echo json_encode($dataTable_arr);
}
 
else{
    echo json_encode(
        array("message" => "No Users found.")
    );
}
?>