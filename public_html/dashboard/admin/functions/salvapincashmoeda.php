<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/apPincashMoedaDAO.php';
    include_once '../../model/Util.php';
    $pincashMoedaDAO = new apPincashMoedaDAO();
    
    $pacote = filter_input(INPUT_POST, 'pacote');
    $valor = filter_input(INPUT_POST, 'valor');
    $ativo = filter_input(INPUT_POST, 'ativo', FILTER_VALIDATE_BOOLEAN);
    
    $moeda = new stdClass();
    $moeda->pacote = $pacote;
    $moeda->valor_pacote = $valor;
    $moeda->ativo = $ativo;
    $moeda->data_inclusao = date('Y-m-d');
    
    $erroMsg = '';
    if(empty($moeda->pacote)) {
        $erroMsg = 'Quantidade do pacote não informado!';
    } else if(empty($moeda->valor_pacote)) {
        $erroMsg = 'Valor não informado!';
    }
    
    if(!empty($erroMsg)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => $erroMsg
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    $res = $pincashMoedaDAO->insert($moeda);
    
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