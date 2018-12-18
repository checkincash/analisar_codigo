<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/apPincashSorteioDAO.php';
    include_once '../../model/Util.php';
    $pincashSorteioDAO = new apPincashSorteioDAO();
    
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $status = filter_input(INPUT_POST, 'status', FILTER_VALIDATE_BOOLEAN);
    
    $sorteio = $pincashSorteioDAO->select('*', "pk_sorteio_cabe_pincash = $id")->fetch(PDO::FETCH_OBJ);
    if(empty($sorteio)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Sorteio não foi encontrado.'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    if($status) {
        $res = $pincashSorteioDAO->ativar($id);
        $msg = 'Sorteio Ativado!';
    } else {
        $res = $pincashSorteioDAO->inativar($id);
        $msg = 'Sorteio Inativado!';
    }
    
    if($res != true) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Não foi possível alterar o status do sorteio.'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
     echo json_encode(array(
        'erro' => false,
        'msg' => $msg
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}