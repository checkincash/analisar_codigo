<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    include_once '../../model/upload.class.php';
    include_once '../../model/apContratoPubDAO.php';
    include_once '../../model/apContratoDAO.php';
    include_once '../../model/apConfiguracaoDAO.php';
    include_once '../../model/Util.php';
    $upload = new Upload();
    $contratoPubDAO = new apContratoPubDAO();
    $contratoDAO = new apContratoDAO();
    $configuracaoDAO = new apConfiguracaoDAO();
    $conf = $configuracaoDAO->select('*', 'id = 1')->fetch(PDO::FETCH_OBJ);
    
    $postData = $_POST;
    $imagem = !empty($_FILES['imagem']) ? $_FILES['imagem'] : null;
    
    $contrato = $contratoDAO->select('pk_contrato, cnpj', "pk_contrato = ".$postData['pk_contrato'])->fetch(PDO::FETCH_OBJ);
    $publicacao = $contratoPubDAO->select('*', "fk_contrato = ".$contrato->pk_contrato)->fetch(PDO::FETCH_OBJ);
    
    $contratoPub = new stdClass();
    $contratoPub->pk_publicador = $publicacao->pk_publicador;
    $contratoPub->fk_contrato = $postData['contrato'];
    $contratoPub->data_criacao = !empty($postData['data']) ? $postData['data'] : '';
    $contratoPub->nomenclatura = !empty($postData['titulo']) ? $postData['titulo'] : '';
    $contratoPub->texto_publicacao = !empty($postData['texto_pub']) ? $postData['texto_pub'] : '';
    
    $contratoPub->situacao = !empty($postData['ativo']) && $postData['ativo'] == 'true' ? 1 : 0;
    $contratoPub->destaque = !empty($postData['destaque']) && $postData['destaque'] == 'true' ? 1 : 0;
    
    $contratoPub->cep = !empty($postData['cep']) ? $postData['cep'] : '';
    $contratoPub->bairro = !empty($postData['bairro']) ? $postData['bairro'] : '';
    $contratoPub->rua = !empty($postData['rua']) ? $postData['rua'] : '';
    $contratoPub->numero = !empty($postData['numero']) ? $postData['numero'] : '';
    $contratoPub->cidade = !empty($postData['cidade']) ? $postData['cidade'] : '';
    $contratoPub->estado = !empty($postData['estado']) ? $postData['estado'] : '';
    $contratoPub->complemento = !empty($postData['complemento']) ? $postData['complemento'] : '';
    $contratoPub->latitude = !empty($postData['latitude']) ? $postData['latitude'] : '';
    $contratoPub->longitude = !empty($postData['longitude']) ? $postData['longitude'] : '';
    $contratoPub->abreviatura = !empty($postData['abreviatura']) ? $postData['abreviatura'] : '';
    
    $contratoPub->pseg = !empty($postData['pseg']) ? str_replace('%', '', $postData['pseg']) : 0;
    $contratoPub->pter = !empty($postData['pter']) ? str_replace('%', '', $postData['pter']) : 0;
    $contratoPub->pqua = !empty($postData['pqua']) ? str_replace('%', '', $postData['pqua']) : 0;
    $contratoPub->pqui = !empty($postData['pqui']) ? str_replace('%', '', $postData['pqui']) : 0;
    $contratoPub->psex = !empty($postData['psex']) ? str_replace('%', '', $postData['psex']) : 0;
    $contratoPub->psab = !empty($postData['psab']) ? str_replace('%', '', $postData['psab']) : 0;
    $contratoPub->pdom = !empty($postData['pdom']) ? str_replace('%', '', $postData['pdom']) : 0;
    
    $contratoPub->pinseg = !empty($postData['pinseg']) ? $postData['pinseg'] : 1;
    $contratoPub->pinter = !empty($postData['pinter']) ? $postData['pinter'] : 1;
    $contratoPub->pinqua = !empty($postData['pinqua']) ? $postData['pinqua'] : 1;
    $contratoPub->pinqui = !empty($postData['pinqui']) ? $postData['pinqui'] : 1;
    $contratoPub->pinsex = !empty($postData['pinsex']) ? $postData['pinsex'] : 1;
    $contratoPub->pinsab = !empty($postData['pinsab']) ? $postData['pinsab'] : 1;
    $contratoPub->pindom = !empty($postData['pindom']) ? $postData['pindom'] : 1;
    
    $erroMsg = '';
    if(empty($contratoPub->nomenclatura)) {
        $erroMsg = 'Preencha o titulo do Evento!';
    } else if(empty($contratoPub->cep) || empty($contratoPub->bairro) || empty($contratoPub->rua) || empty($contratoPub->numero) || empty($contratoPub->cidade) || empty($contratoPub->estado)) {
        $erroMsg = 'Dados de contato incompletos!';
    } else if(empty($contratoPub->latitude) || empty($contratoPub->longitude)) {
        $erroMsg = 'Latitude ou longitude incorretos!';
    }
    
    if(!empty($erroMsg)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => $erroMsg
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    $contratoPub->foto_publicacao = $publicacao->foto_publicacao;
    if(!empty($imagem)) {
        $pastaImg = "../../../app/_lib/file/img/imagempub/".$contrato->cnpj;
        $upload->setArquivo($imagem);
        if(!file_exists($pastaImg)) {
            mkdir($pastaImg, 0777, true);
        }
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
        
        $contratoPub->foto_publicacao = $upload->getNomeArquivo(true);
    }
    
    if(!$contratoPubDAO->update($contratoPub)) {
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