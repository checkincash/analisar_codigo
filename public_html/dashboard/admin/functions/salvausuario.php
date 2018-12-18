<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/apAdministradorDAO.php';
    include_once '../../model/Util.php';
    $administradorDAO = new apAdministradorDAO();
    
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $usuario = filter_input(INPUT_POST, 'usuario');
    $senha = filter_input(INPUT_POST, 'senha');
    $nivel = filter_input(INPUT_POST, 'nivel', FILTER_VALIDATE_INT);
    $ativo = filter_input(INPUT_POST, 'ativo', FILTER_VALIDATE_BOOLEAN);
    
    if(!empty($id)) {
        $administradorOld = $administradorDAO->select('*', "id = $id")->fetch(PDO::FETCH_OBJ);
    } else {
        $administradorOld = new stdClass();
        $administradorOld->senha = '';
    }
    
    $administrador = new stdClass();
    $administrador->id = $id;
    $administrador->usuario = $usuario;
    $administrador->senha = !empty($senha) ? md5($senha) : $administradorOld->senha; // se não informar senha pega a senha já cadastrada
    $administrador->nivel = $nivel;
    $administrador->ativo = $ativo;
    
    $erroMsg = '';
    if(empty($administrador->usuario)) {
        $erroMsg = 'Nome de Usuário não informado!';
    } else if(empty($administrador->senha)) {
        $erroMsg = 'Senha não informada!';
    } else if(empty($administrador->nivel) && !is_numeric($administrador->nivel)) {
        $erroMsg = 'Selecione um nível de Acesso!';
    }
    
    if(!empty($erroMsg)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => $erroMsg
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    if(!empty($administrador->id)) {
        $res = $administradorDAO->update($administrador);
    } else {
        $res = $administradorDAO->insert($administrador);
    }
    
    if($res != true) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Não foi possível salvar os dados.'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
     echo json_encode(array(
        'erro' => false,
        'msg' => 'Dados atualizados.'
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}