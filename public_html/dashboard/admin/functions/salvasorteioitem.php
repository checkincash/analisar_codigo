<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/upload.class.php';
    include_once '../../model/apPincashSorteioMovDAO.php';
    include_once '../../model/apConfiguracaoDAO.php';
    include_once '../../model/Util.php';
    $pincashSorteioMovDAO = new apPincashSorteioMovDAO();
    $configuracaoDAO = new apConfiguracaoDAO();
    $conf = $configuracaoDAO->select('*', 'id = 1')->fetch(PDO::FETCH_OBJ);
    
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $sorteioId = filter_input(INPUT_POST, 'sorteioid', FILTER_VALIDATE_INT);
    $texto = filter_input(INPUT_POST, 'texto');
    $label = filter_input(INPUT_POST, 'label');
    $pincash = filter_input(INPUT_POST, 'pincash', FILTER_VALIDATE_INT);
    $titulo = filter_input(INPUT_POST, 'titulo');
    $chamada = filter_input(INPUT_POST, 'chamada');
    $imagem = !empty($_FILES['imagem']) ? $_FILES['imagem'] : null;
    $imagemCat = !empty($_FILES['imagemcat']) ? $_FILES['imagemcat'] : null;
    
    $item = new stdClass();
    $item->pk_mov_sorteio_mv = $id;
    $item->fk_cabe_sorteio = $sorteioId;
    $item->texto_premiacao = $texto;
    $item->label = $label;
    $item->pincash_premio = $pincash;
    $item->foto_premiacao = '';
    $item->foto_catalogo = '';
    $item->titulo = $titulo;
    $item->chamada = $chamada;
    if(!empty($id)) {
        $itemOld = $pincashSorteioMovDAO->select('*', "pk_mov_sorteio_mv = $id")->fetch(PDO::FETCH_OBJ);
        $item->foto_premiacao = $itemOld->foto_premiacao;
    }
    
    $erroMsg = '';
    if(empty($item->texto_premiacao)) {
        $erroMsg = 'Texto do item não informado!';
    } else if(empty($item->pincash_premio)) {
        $erroMsg = 'Quantidade de Pincash inválida!';
    } else if(empty($item->foto_premiacao)) {
//        $erroMsg = 'Imagem não informada!';
    } else if(empty($item->foto_catalogo)) {
//        $erroMsg = 'Imagem do Catalogo não informada!';
    } else if(empty($item->titulo)) {
//        $erroMsg = 'Título não informado!';
    } else if(empty($item->chamada)) {
//        $erroMsg = 'Texto de Chamada não informado!';
    }
    
    if(!empty($erroMsg)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => $erroMsg
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    if(!empty($imagem)) {
        $upload = new Upload();
        $pastaImg = "../../../app/_lib/file/img/imagemsorteio/$item->fk_cabe_sorteio/";
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
        
        $item->foto_premiacao = $upload->getNomeArquivo(true);
    }
    
    if(!empty($imagemCat)) {
        $upload = new Upload();
        $pastaImg = "../../../app/_lib/file/img/imagemsorteio/$item->fk_cabe_sorteio/";
        if(!file_exists($pastaImg)) {
            mkdir($pastaImg, 0777, true);
        }
        $upload->setArquivo($imagemCat);
        $upload->setPasta($pastaImg);
        $upload->setLimiteTamanho($conf->limite_upload);
        $upload->setSobrescrever(false);
        $upload->setExtensoesPermitidas(array('png', 'jpg', 'jpeg', 'gif',
                                              'PNG', 'JPG', 'JPEG', 'GIF'));
        $filename = Util::removerAcentos(pathinfo($imagemCat['name'], PATHINFO_FILENAME));
        $upload->setNomeArquivo(str_replace(' ', '_', $filename));
        
        if(!$upload->uploadArquivo()) {
            echo json_encode(array(
                'erro' => true,
                'msg' => $upload->getErros()
            ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            return;
        }
        
        $item->foto_catalogo = $upload->getNomeArquivo(true);
    }
    
    if(!empty($item->pk_mov_sorteio_mv)) {
        $res = $pincashSorteioMovDAO->update($item);
    } else {
        $res = $pincashSorteioMovDAO->insert($item);
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
        'msg' => 'Dados salvos.'
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}