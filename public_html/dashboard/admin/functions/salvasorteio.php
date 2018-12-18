<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/upload.class.php';
    include_once '../../model/apPincashSorteioDAO.php';
    include_once '../../model/apConfiguracaoDAO.php';
    include_once '../../model/Util.php';
    $pincashSorteioDAO = new apPincashSorteioDAO();
    $configuracaoDAO = new apConfiguracaoDAO();
    $conf = $configuracaoDAO->select('*', 'id = 1')->fetch(PDO::FETCH_OBJ);
    
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $datafim = filter_input(INPUT_POST, 'datafim');
    $ativo = filter_input(INPUT_POST, 'ativo', FILTER_VALIDATE_BOOLEAN);
    $texto = filter_input(INPUT_POST, 'texto');
    $imagem = !empty($_FILES['imagem']) ? $_FILES['imagem'] : null;
    
    $sorteioAtivo = $pincashSorteioDAO->select('*', "ativo is true AND pk_sorteio_cabe_pincash <> $id")->fetchAll(PDO::FETCH_OBJ);
    if(!empty($sorteioAtivo)) {
        $ativo = false;
    }
    
    $sorteio = new stdClass();
    $sorteio->pk_sorteio_cabe_pincash = $id;
    $sorteio->datainicio = date('Y-m-d');
    $sorteio->datafim = date('Y-m-d', strtotime($datafim));
    $sorteio->ativo = $ativo;
    $sorteio->texto_campanha = $texto;
    $sorteio->foto_campanha = '';
    
    $erroMsg = '';
    if(empty($sorteio->datafim)) {
        $erroMsg = 'Data de término não informada!';
    } else if(empty($sorteio->texto_campanha)) {
        $erroMsg = 'Texto do sorteio em branco!';
    }
    
    if(!empty($erroMsg)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => $erroMsg
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    if(!empty($id)) {
        $sorteioOld = $pincashSorteioDAO->select('*', "pk_sorteio_cabe_pincash = $id")->fetch(PDO::FETCH_OBJ);
        $sorteio->foto_campanha = $sorteioOld->foto_campanha;
        //update campanha
        $res = $pincashSorteioDAO->update($sorteio);
        $sorteioId = $sorteio->pk_sorteio_cabe_pincash;
    } else {
        $res = $pincashSorteioDAO->insert($sorteio);
        if(!empty($res)) {
            $sorteioId = $res;
        }
    }
    
    if(!empty($imagem)) {
        $upload = new Upload();
        $pastaImg = "../../../app/_lib/file/img/imagemsorteio/$sorteioId/";
        if(!file_exists($pastaImg)) {
            mkdir($pastaImg, 0777, true);
        }
        $upload->setArquivo($imagem);
        $upload->setPasta($pastaImg);
        $upload->setLimiteTamanho($conf->limite_upload);
        $upload->setSobrescrever(false);
        $upload->setExtensoesPermitidas(array('png', 'jpg', 'jpeg', 'gif',
                                              'PNG', 'JPG', 'JPEG', 'GIF'));
        $filename = Util::removerAcentos(pathinfo($imagem['name'], PATHINFO_FILENAME));
        $upload->setNomeArquivo(str_replace(' ', '_', $filename));
        
        if(!$upload->uploadArquivo()) {
            echo json_encode(array(
                'erro' => true,
                'msg' => $upload->getErros()
            ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            return;
        }
        
        $sorteio->foto_campanha = $upload->getNomeArquivo(true);
        $res = $pincashSorteioDAO->update($sorteio);
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
        'msg' => 'Dados salvos.',
         'sorteioid' => $sorteioId
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}