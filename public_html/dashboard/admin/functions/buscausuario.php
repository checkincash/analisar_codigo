<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/apAdministradorDAO.php';
    include_once '../../model/Util.php';
    $administradorDAO = new apAdministradorDAO();
    
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    
    if(empty($id)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Não foi possível encontrar os dados do usuário.'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    $administrador = $administradorDAO->select('*', "id = $id")->fetch(PDO::FETCH_OBJ);
    
    if(empty($administrador)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Usuário não encontrado!'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    echo json_encode(array(
        'erro' => false,
        'msg' => 'Dados carregados!',
        'usuario' => $administrador
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}