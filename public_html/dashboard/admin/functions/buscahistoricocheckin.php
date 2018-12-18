<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/conexao.class.php';
    
    $qtdeDias = 7;
    
    $conexao = new conexao();
    $con = $conexao->conectar();
    
    $dados = array();
    //pesquisa o dia mais antigo
    $diaPesquisado = date('Y-m-d', strtotime("-$qtdeDias day", strtotime(date('Y-m-d'))));
    for($i = 0; $i < $qtdeDias; $i++) {
        $query = $con->prepare("SELECT COUNT(*) as qtde
                                FROM ap_pincash_user_mov
                                WHERE token_data_ativacao BETWEEN '$diaPesquisado 00:00:00' AND '$diaPesquisado 23:59:59'");
        $query->execute();
        $res = $query->fetch(PDO::FETCH_OBJ);
        $key = date('d/m/Y', strtotime($diaPesquisado));
        $dados[$key] = $res->qtde;
        //passa para o próximo dia
        $diaPesquisado = date('Y-m-d', strtotime("+1 day", strtotime($diaPesquisado)));
    }

    header('Content-Type: application/json');
    
    echo json_encode(array(
        'erro' => false,
        'dados' => $dados
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}