<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/apPincashSorteioMovDAO.php';
    include_once '../../model/Util.php';
    $pincashSorteioMovDAO = new apPincashSorteioMovDAO();
    
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    
    $res = $pincashSorteioMovDAO->delete("pk_mov_sorteio_mv = $id");
    
    if($res != true) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Não foi excluir o produto.'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
     echo json_encode(array(
        'erro' => false,
        'msg' => 'Produto removido.'
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}