<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/apPincashMoedaDAO.php';
    include_once '../../model/Util.php';
    $pincashMoedaDAO = new apPincashMoedaDAO();
    
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    
    if(empty($id)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Não foi possível encontrar os dados do pacote.'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    $pacote = $pincashMoedaDAO->select('*', "pk_pincash_moeda = $id")->fetch(PDO::FETCH_OBJ);
    
    if(empty($pacote)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Pacote não encontrado!'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    echo json_encode(array(
        'erro' => false,
        'msg' => 'Dados carregados!',
        'pacote' => $pacote
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}