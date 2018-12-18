<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    echo json_encode(array(
        'erro' => false,
        'msg' => ''
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    echo json_encode(array(
        'erro' => true,
        'msg' => ''
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}