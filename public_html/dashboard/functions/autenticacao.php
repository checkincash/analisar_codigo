<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $campo = !empty($_POST['campo']) ? $_POST['campo'] : null;
    $senha = !empty($_POST['senha']) ? $_POST['senha'] : null;
    $admin = !empty($_POST['admin']) && $_POST['admin'] == 'true' ? true : false;
    
    if(empty($campo) || empty($senha)) {
        echo json_encode(array(
            'erro' => true,
            'msg' => 'Preencha todos os campos.'
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        exit;
    }
    
    if(!$admin) {
        include_once '../model/apContratoDAO.php';
        $contratoDAO = new apContratoDAO();    
        $senha = md5($senha);
        $contrato = $contratoDAO->select('*', "cnpj = '$campo' AND senha_usuario = '$senha'")->fetch(PDO::FETCH_OBJ);

        if(!empty($contrato)) {
            if(!$contrato->ativo) {
                echo json_encode(array(
                    'erro' => true,
                    'msg' => 'Seu contrato ainda não foi ativado por um de nossos administrares, tente novamente mais tarde ou entre em contato conosco.'
                ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
                exit;
            }
            
            session_start();
            $_SESSION['dash_contrato'] = $contrato;

            echo json_encode(array(
                'erro' => false,
                'msg' => 'Autenticação efetuada. Você será redirecionado em instantes.',
                'url' => './'
            ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode(array(
                'erro' => true,
                'msg' => 'CPF/CNPJ ou SENHA inseridos não conferem.'
            ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }
    } else {
        include_once '../model/apAdministradorDAO.php';
        $admDAO = new apAdministradorDAO();
        $senha = md5($senha);
        $adm = $admDAO->select('*', "usuario = '$campo' AND senha = '$senha' AND ativo is true")->fetch(PDO::FETCH_OBJ);
        
        if(!empty($adm)) {
            session_start();
            $_SESSION['dash_adm'] = $adm;
            
            echo json_encode(array(
                'erro' => false,
                'msg' => 'Autenticação efetuada. Você será redirecionado em instantes.',
                'url' => './admin/'
            ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode(array(
                'erro' => true,
                'msg' => 'USUARIO ou SENHA estão incorretos.'
            ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }
    }   
}