<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/apPincashSorteioMovDAO.php';
    include_once '../../model/Util.php';
    $pincashSorteioMovDAO = new apPincashSorteioMovDAO();
    
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    
    if(empty($id)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Não foi possível encontrar os dados do produto.'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    $produto = $pincashSorteioMovDAO->select('*', "pk_mov_sorteio_mv = $id")->fetch(PDO::FETCH_OBJ);
    
    if(empty($produto)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Produto não encontrado!'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    echo json_encode(array(
        'erro' => false,
        'msg' => 'Dados carregados!',
        'produto' => $produto
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}