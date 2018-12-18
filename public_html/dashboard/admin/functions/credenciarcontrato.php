<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/apContratoDAO.php';
    include_once '../../model/apContratoFinDAO.php';
    include_once '../../model/Util.php';
    $contratoDAO = new apContratoDAO();
    $contratoFinDAO = new apContratoFinDAO();
    
    $credFinId = filter_input(INPUT_POST, 'cred_fin_id', FILTER_VALIDATE_INT);
    
    if(empty($credFinId)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Não foi possível encontrar os dados do contrato.'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    $credFin = $contratoFinDAO->select('*', "id = $credFinId")->fetch(PDO::FETCH_OBJ);
    
    if(empty($credFin)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Contrato não encontrado!'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    $credFin->status = 1;
    $res = $contratoFinDAO->updateStatus($credFin);
    if($res != true) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Erro ao credenciar contrato!'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    $res = $contratoFinDAO->geraLancamentos($credFin->contrato);
    if($res != true) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Erro ao gerar lançamentos do contrato!'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    echo json_encode(array(
        'erro' => false,
        'msg' => 'Credenciamento efetuado!'
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}