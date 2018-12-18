<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    include_once '../model/Util.php';
    
    $cep = !empty($_POST['cep']) ? $_POST['cep'] : '00000000';
    
    $dados = Util::buscaCep($cep);
    
     echo json_encode(array(
        'erro' => false,
        'dados' => $dados
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}