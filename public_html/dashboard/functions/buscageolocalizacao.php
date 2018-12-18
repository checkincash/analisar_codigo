<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../model/Util.php';
    
    $rua = filter_input(INPUT_POST, 'rua');
    $numero = filter_input(INPUT_POST, 'numero');
    $bairro = filter_input(INPUT_POST, 'bairro');
    $cidade = filter_input(INPUT_POST, 'cidade');
    $estado = filter_input(INPUT_POST, 'estado');
    
    $localizacao = Util::getLatitudeLongitude("$rua,$numero,$bairro,$cidade,$estado");
    $latitude = '';
    $longitude = '';        
    if(!empty($localizacao) && !empty($localizacao['latitude']) && !empty($localizacao['longitude'])) {
        $latitude = $localizacao['latitude'];
        $longitude = $localizacao['longitude'];
    }
    
    echo json_encode(array(
        'erro' => false,
        'msg' => '',
        'latitude' => $latitude,
        'longitude' => $longitude
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}