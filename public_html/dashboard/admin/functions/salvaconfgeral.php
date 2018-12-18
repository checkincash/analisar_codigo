<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/apConfiguracaoDAO.php';
    include_once '../../model/Util.php';
    $configuracaoDAO = new apConfiguracaoDAO();
    
    $credenciamento = filter_input(INPUT_POST, 'credenciamento');
    $mensalidade = filter_input(INPUT_POST, 'mensalidade');
    $dia_mensalidade = filter_input(INPUT_POST, 'dia_mensalidade');
    $limite_upload = filter_input(INPUT_POST, 'limite_upload');
    
    $config = new stdClass();
    $config->valor_credenciamento = $credenciamento;
    $config->valor_mensalidade = $mensalidade;
    $config->dia_mensalidade = $dia_mensalidade;
    $config->limite_upload = $limite_upload;
    
    $erroMsg = '';
    if(empty($config->valor_credenciamento)) {
        $erroMsg = 'Valor do Credencimento não informado!';
    } else if(empty($config->valor_mensalidade)) {
        $erroMsg = 'Valor da Mensalidade não informado!';
    } else if(empty($config->dia_mensalidade)) {
        $erroMsg = 'Vencimento da Mensalidade não informado!';
    }
    
    if(!empty($erroMsg)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => $erroMsg
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    $res = $configuracaoDAO->update($config);
    
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