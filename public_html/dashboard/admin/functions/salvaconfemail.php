<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/apConfiguracaoDAO.php';
    include_once '../../model/Util.php';
    $configuracaoDAO = new apConfiguracaoDAO();
    
    $alerta_pincash1 = filter_input(INPUT_POST, 'alerta_pincash1', FILTER_VALIDATE_INT);
    $alerta_pincash2 = filter_input(INPUT_POST, 'alerta_pincash2', FILTER_VALIDATE_INT);
    $alerta_pincash3 = filter_input(INPUT_POST, 'alerta_pincash3', FILTER_VALIDATE_INT);
    $alerta_pincash_msg = filter_input(INPUT_POST, 'alerta_pincash_msg');
    
    $config = new stdClass();
    $config->alerta_pincash1 = $alerta_pincash1;
    $config->alerta_pincash2 = $alerta_pincash2;
    $config->alerta_pincash3 = $alerta_pincash3;
    $config->alerta_pincash_msg = $alerta_pincash_msg;
    
    $res = $configuracaoDAO->updateEmail($config);
    
    if($res != true) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Não foi possível salvar os dados.'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
     echo json_encode(array(
        'erro' => false,
        'msg' => 'Dados salvos.'
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}