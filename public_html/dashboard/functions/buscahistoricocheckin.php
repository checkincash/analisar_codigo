<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../model/conexao.class.php';
    
    $contrato = filter_input(INPUT_POST, 'contrato', FILTER_VALIDATE_INT);
    $qtdeDias = 7;
    
    if(empty($contrato)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Contrato não encontrado!'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    $conexao = new conexao();
    $con = $conexao->conectar();
    
    $query = $con->prepare("SELECT pk_publicador FROM ap_contrato_publicador WHERE fk_contrato = $contrato");
    $query->execute();
    $contratoPub = $query->fetch(PDO::FETCH_OBJ);
    
    $dados = array();
    //pesquisa o dia mais antigo
    $diaPesquisado = date('Y-m-d', strtotime("-$qtdeDias day", strtotime(date('Y-m-d'))));
    for($i = 0; $i < $qtdeDias; $i++) {
        $query = $con->prepare("SELECT COUNT(*) as qtde
                                FROM ap_pincash_user_mov
                                WHERE token_data_ativacao BETWEEN '$diaPesquisado 00:00:00' AND '$diaPesquisado 23:59:59'
                                AND fk_contrato_publicador = $contratoPub->pk_publicador");
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