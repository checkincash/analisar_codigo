<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../model/upload.class.php';
    include_once '../model/apContratoDAO.php';
    include_once '../model/apContratoFinDAO.php';
    include_once '../model/apConfiguracaoDAO.php';
    include_once '../model/Util.php';
    $upload = new Upload();
    $contratoDAO = new apContratoDAO();
    $contratoFinDAO = new apContratoFinDAO();
    $configuracaoDAO = new apConfiguracaoDAO();
    $conf = $configuracaoDAO->select('*', 'id = 1')->fetch(PDO::FETCH_OBJ);
    
    $postData = $_POST;
    $fachada = !empty($_FILES['fachada']) ? $_FILES['fachada'] : null;
    
    $contrato = new stdClass();
    $contrato->pk_contrato = null;
    $contrato->cnpj = !empty($postData['cnpj']) ? $postData['cnpj'] : '';
    $contrato->inscricao = !empty($postData['inscricao']) ? $postData['inscricao'] : '';
    $contrato->razao = !empty($postData['razao']) ? $postData['razao'] : '';
    $contrato->fantasia = !empty($postData['fantasia']) ? $postData['fantasia'] : '';
    $contrato->fk_classificacao = !empty($postData['classificacao']) ? $postData['classificacao'] : null;
    $contrato->classificacao1 = !empty($postData['classificacao1']) ? $postData['classificacao1'] : '';
    $contrato->classificacao2 = !empty($postData['classificacao2']) ? $postData['classificacao2'] : '';
    $contrato->id_admin = 0;
    $contrato->ativo = false;
    
    $contrato->email = !empty($postData['email']) ? mb_strtolower($postData['email']) : "";
    $confEmail = !empty($postData['confEmail']) ?  mb_strtolower($postData['confEmail']) : "";
    $contrato->senha_usuario = !empty($postData['senha']) ? md5($postData['senha']) : "";
    $confSenha = !empty($postData['confSenha']) ? md5($postData['confSenha']) : "";
    
    $contrato->nome_contato = !empty($postData['nomeContato']) ? $postData['nomeContato'] : '';
    $contrato->telefone = !empty($postData['telefone']) ? $postData['telefone'] : '';
    $contrato->cep = !empty($postData['cep']) ? $postData['cep'] : '';
    $contrato->bairro = !empty($postData['bairro']) ? $postData['bairro'] : '';
    $contrato->rua = !empty($postData['rua']) ? $postData['rua'] : '';
    $contrato->numero = !empty($postData['numero']) ? $postData['numero'] : '';
    $contrato->cidade = !empty($postData['cidade']) ? $postData['cidade'] : '';
    $contrato->estado = !empty($postData['estado']) ? $postData['estado'] : '';
    $contrato->complemento = !empty($postData['complemento']) ? $postData['complemento'] : '';
    $contrato->latitude = !empty($postData['latitude']) ? $postData['latitude'] : '';
    $contrato->longitude = !empty($postData['longitude']) ? $postData['longitude'] : '';
    $contrato->website = !empty($postData['website']) ? $postData['website'] : '';
    
    $contrato->seg_m_de = !empty($postData['dtPickerSeg1']) ? $postData['dtPickerSeg1'] : '00:00';
    $contrato->seg_m_ate = !empty($postData['dtPickerSeg2']) ? $postData['dtPickerSeg2'] : '00:00';

    $contrato->ter_m_de = !empty($postData['dtPickerTer1']) ? $postData['dtPickerTer1'] : '00:00';
    $contrato->ter_m_ate = !empty($postData['dtPickerTer2']) ? $postData['dtPickerTer2'] : '00:00';

    $contrato->qua_m_de = !empty($postData['dtPickerQua1']) ? $postData['dtPickerQua1'] : '00:00';
    $contrato->qua_m_ate = !empty($postData['dtPickerQua2']) ? $postData['dtPickerQua2'] : '00:00';

    $contrato->qui_m_de = !empty($postData['dtPickerQui1']) ? $postData['dtPickerQui1'] : '00:00';
    $contrato->qui_m_ate = !empty($postData['dtPickerQui2']) ? $postData['dtPickerQui2'] : '00:00';

    $contrato->sex_m_de = !empty($postData['dtPickerSex1']) ? $postData['dtPickerSex1'] : '00:00';
    $contrato->sex_m_ate = !empty($postData['dtPickerSex2']) ? $postData['dtPickerSex2'] : '00:00';

    $contrato->sab_m_de = !empty($postData['dtPickerSab1']) ? $postData['dtPickerSab1'] : '00:00';
    $contrato->sab_m_ate = !empty($postData['dtPickerSab2']) ? $postData['dtPickerSab2'] : '00:00';

    $contrato->dom_m_de = !empty($postData['dtPickerDom1']) ? $postData['dtPickerDom1'] : '00:00';
    $contrato->dom_m_ate = !empty($postData['dtPickerDom2']) ? $postData['dtPickerDom2'] : '00:00';
    
    $contrato->fachada = "";
    
    $erroMsg = '';
    if(empty($contrato->cnpj)) {
        $erroMsg = 'CPF/CNPJ não informado!';
    } else if(empty($contrato->razao)) {
        $erroMsg = 'Informe a razão social!';
    } else if(empty($contrato->fantasia)) {
        $erroMsg = 'Informe o nome fantasia!';
    } else if(empty($contrato->email)) {
        $erroMsg = 'Campo Email não informado!';
    } else if(empty($contrato->senha_usuario)) {
        $erroMsg = 'Campo Senha não informado!';
    } else if(empty($fachada)) {
        $erroMsg = 'Foto da Loja não informada!';
    } else if($confEmail != $contrato->email) {
        $erroMsg = 'Campo Email e Confirma Email incorretos!';
    } else if($confSenha != $contrato->senha_usuario) {
        $erroMsg = 'Campo Senha e Confirma Senha incorretos!';
    } else if(empty($contrato->fk_classificacao)) {
        $erroMsg = 'Defina uma categoria!';
    } else if(empty($contrato->nome_contato)) {
        $erroMsg = 'Nome do Contato não informado!';
    } else if(empty($contrato->telefone)) {
        $erroMsg = 'Telefone de contato não informado!';
    } else if(empty($contrato->cep)) {
        $erroMsg = 'CEP não informado!';
    } else if(empty($contrato->rua)) {
        $erroMsg = 'Rua não informada!';
    } else if(empty($contrato->numero)) {
        $erroMsg = 'Número não informado!';
    } else if(empty($contrato->bairro)) {
        $erroMsg = 'Bairro não informado!';
    } else if(empty($contrato->cidade)) {
        $erroMsg = 'Cidade não informada!';
    } else if(empty($contrato->estado)) {
        $erroMsg = 'Estado não informado!';
    } else if(empty($contrato->latitude) || empty($contrato->longitude)) {
        $erroMsg = 'Latitude ou longitude incorretos!';
    } else if(empty($contrato->website)) {
        $erroMsg = 'Website não informado!';
    }
    
    if(!Util::validaCpfCnpj($contrato->cnpj)) {
        $erroMsg = 'CPF/CNPJ inválido!';
    }
    
    $contratoExiste = $contratoDAO->select('*', "cnpj = $contrato->cnpj OR email = '$contrato->email'")->fetchAll(PDO::FETCH_OBJ);
    if(!empty($contratoExiste)) {
        $erroMsg = 'CPF/CNPJ ou EMAIL já cadastrado no sistema!';
    }
    
    if(!empty($erroMsg)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => $erroMsg
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    if(!empty($fachada)) {
        $pastaImg = "../../app/_lib/file/img/imagempub/".$contrato->cnpj;
        $upload->setArquivo($fachada);
        if(!file_exists($pastaImg)) {
            mkdir($pastaImg, 0777, true);
        }
        $upload->setPasta($pastaImg);
        $upload->setLimiteTamanho($conf->limite_upload);
        $upload->setSobrescrever(false);
        $upload->setExtensoesPermitidas(array('png', 'jpg', 'jpeg', 'gif',
                                              'PNG', 'JPG', 'JPEG', 'GIF'));
        $filename = Util::removerAcentos(pathinfo($fachada['name'], PATHINFO_FILENAME));
        $upload->setNomeArquivo(str_replace(' ', '_', $filename));
        
        if(!$upload->uploadArquivo()) {
            echo json_encode(array(
                'erro' => true,
                'msg' => $upload->getErros()
            ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            return;
        }
        
        $contrato->fachada = $upload->getNomeArquivo(true);
    }
    
    $res = $contratoDAO->insert($contrato);
    
    if(empty($res)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Não foi possível salvar os dados.'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    $lancamento = $contratoFinDAO->select('*', "contrato = $res")->fetch(PDO::FETCH_OBJ);
    $lancamento->referencia = $lancamento->referencia." ". date('Y-m', strtotime($lancamento->vencimento))." CHECK-INcash";
    $lancamento->valor = number_format($lancamento->valor, 2, '.', '');
    
    require_once "../pagseguro/PagSeguro.class.php";
    $PagSeguro = new PagSeguro();

    //EFETUAR PAGAMENTO	
    $venda = array(
        "codigo" => "$lancamento->id",
        "valor" => $lancamento->valor,
        "descricao" => "$lancamento->referencia"
    );
    $urlPagseguro = $PagSeguro->executeCheckout($venda, "http://checkincash.com.br/");
    
    if(!empty($urlPagseguro)) {
        $msg = 'Credenciamento Salvo. Você será redirecionado em instantes.';
    } else {
        $msg = 'Credenciamento Salvo. Porém não foi possivel registrar o pagamento no Pagseguro. Por favor, entre em contato conosco.';
    }
    
    echo json_encode(array(
        'erro' => false,
        'msg' => $msg,
        'urlpagseguro' => $urlPagseguro
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}