<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once '../../model/upload.class.php';
    include_once '../../model/apContratoDAO.php';
    include_once '../../model/apConfiguracaoDAO.php';
    include_once '../../model/Util.php';
    $upload = new Upload();
    $contratoDAO = new apContratoDAO();
    $configuracaoDAO = new apConfiguracaoDAO();
    $conf = $configuracaoDAO->select('*', 'id = 1')->fetch(PDO::FETCH_OBJ);
    
    session_start();
    $admin = $_SESSION['dash_adm'];
    
    $postData = $_POST;
    $fachada = !empty($_FILES['fachada']) ? $_FILES['fachada'] : null;
    if(!empty($postData['pk_contrato'])) {
        $contratoOld = $contratoDAO->select('*', 'pk_contrato = '.$postData['pk_contrato'])->fetch(PDO::FETCH_OBJ);
    } else {
        $contratoOld = new stdClass();
        $contratoOld->email = '';
        $contratoOld->senha_usuario = '';
        $contratoOld->fachada = '';
        $contratoOld->ativo = false;
    }
    
    $contrato = new stdClass();
    $contrato->pk_contrato = !empty($postData['pk_contrato']) ? $postData['pk_contrato'] : null;
    $contrato->cnpj = !empty($postData['cnpj']) ? $postData['cnpj'] : '';
    $contrato->inscricao = !empty($postData['inscricao']) ? $postData['inscricao'] : '';
    $contrato->razao = !empty($postData['razao']) ? $postData['razao'] : '';
    $contrato->fantasia = !empty($postData['fantasia']) ? $postData['fantasia'] : '';
    $contrato->fk_classificacao = !empty($postData['classificacao']) ? $postData['classificacao'] : null;
    $contrato->classificacao1 = !empty($postData['classificacao1']) ? $postData['classificacao1'] : '';
    $contrato->classificacao2 = !empty($postData['classificacao2']) ? $postData['classificacao2'] : '';
    
    if($admin->nivel == 1) {
        $contrato->ativo = !empty($postData['ativo']) && $postData['ativo'] == 'true' ? 1 : 0;
    } else {
        $contrato->ativo = $contratoOld->ativo;
    }
    $contrato->email = !empty($postData['email']) ? mb_strtolower($postData['email']) : $contratoOld->email;
    $confEmail = !empty($postData['confEmail']) ?  mb_strtolower($postData['confEmail']) : $contratoOld->email;
    $contrato->senha_usuario = !empty($postData['senha']) ? md5($postData['senha']) : $contratoOld->senha_usuario;
    $confSenha = !empty($postData['confSenha']) ? md5($postData['confSenha']) : $contratoOld->senha_usuario;
    
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
    
    $contrato->fachada = $contratoOld->fachada;
    
    $erroMsg = '';
    if(empty($contrato->cnpj)) {
        $erroMsg = 'CPF/CNPJ não informado!';
    } else if(empty($contrato->razao)) {
        $erroMsg = 'Informe a razão social!';
    } else if(empty($contrato->fantasia)) {
        $erroMsg = 'Informe o nome fantasia!';
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
    
    //se for insert verifica se o email/senha foram informados / foto também é obrigatório
    if(empty($contrato->pk_contrato)) {
        if(empty($contrato->email)) {
            $erroMsg = 'Campo Email não informado!';
        } else if(empty($contrato->senha_usuario)) {
            $erroMsg = 'Campo Senha não informado!';
        } else if(empty($fachada)) {
            $erroMsg = 'Foto da Loja não informada!';
        }
        
        $contratoExiste = $contratoDAO->select('*', "cnpj = '$contrato->cnpj'")->fetchAll(PDO::FETCH_OBJ);
        if(!empty($contratoExiste)) {
            $erroMsg = 'CPF/CNPJ já cadastrado no sistema!';
        }
    }
    
    if(!Util::validaCpfCnpj($contrato->cnpj)) {
        $erroMsg = 'CPF/CNPJ inválido!';
    }
    
    //verifica se o email existe EM OUTRO CONTRATO
    $emailExiste = $contratoDAO->select('*', "email = '$contrato->email AND pk_contrato != '.$contratoOld->pk_contrato")->fetchAll(PDO::FETCH_OBJ);
    if(!empty($emailExiste)) {
        $erroMsg = 'EMAIL já cadastrado no sistema!';
    }
    
    if(!empty($erroMsg)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => $erroMsg
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
    if(!empty($fachada)) {
        $pastaImg = "../../../app/_lib/file/img/imagempub/".$contrato->cnpj;
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
    
    if(!empty($contrato->pk_contrato)) {
        $res = $contratoDAO->update($contrato);
    } else {
        $contrato->id_admin = $admin->id;
        $res = $contratoDAO->insert($contrato);
    }
    
    if(empty($res)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Não foi possível salvar os dados.'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return;
    }
    
     echo json_encode(array(
        'erro' => false,
        'msg' => 'Dados Salvos.'
    ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}