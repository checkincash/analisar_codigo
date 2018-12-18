<?php

header("access-control-allow-origin: https://pagseguro.uol.com.br");
require_once("PagSeguro.class.php");
include_once '../model/apContratoFinDAO.php';
include_once '../model/apPincashMoedaDAO.php';
include_once '../model/apPincashCreditoDAO.php';
include_once '../model/apPincashCreditoMovDAO.php';

if (isset($_POST['notificationType']) && $_POST['notificationType'] == 'transaction') {
    $PagSeguro = new PagSeguro();
    $contratoFinDAO = new apContratoFinDAO();
    
    $response = $PagSeguro->executeNotification($_POST);
    
    //PAGAMENTO CONFIRMADO        
    if ($response->status == 3 || $response->status == 4) {
        //referencia pincash 'pincash|11|4'
        if(strpos($response->reference, 'pincash') !== false) {
            $ref = explode('|', $response->reference);
            
            //busca pacote comprado
            $pincashMoedaDAO = new apPincashMoedaDAO();
            $moeda = $pincashMoedaDAO->select('*', 'pk_pincash_moeda = '.$ref[2])->fetch(PDO::FETCH_OBJ);
            
            //inserir na tabela financeiro
            $contratoFin = new stdClass();
            $contratoFin->contrato = $ref[1];
            $contratoFin->referencia = $ref[0]." ".$ref[2];
            $contratoFin->vencimento = date('Y-m-d');
            $contratoFin->valor = $moeda->valor_pacote;
            $contratoFin->status = 1;
            $contratoFinDAO->insert($contratoFin);
            
            //buscando credito atual
            $pincashCredDAO = new apPincashCreditoDAO();
            $credito = $pincashCredDAO->select('*', 'fk_contrato = '.$ref[1])->fetch(PDO::FETCH_OBJ);
            
            //inserir na tabela creditos_mov
            $pincashCredMovDAO = new apPincashCreditoMovDAO();
            $credMov = new stdClass();
            $credMov->aquisicao = date('Y-m-d');
            $credMov->fk_pincash_contrato_creditos = $credito->pk_pincash_credito;
            $credMov->fk_pincash_moeda = $ref[2];
            $credMov->pacote = $moeda->pacote;
            $pincashCredMovDAO->insert($credMov);
            
            //somar quantidade na tabela credito
            $credito->pincash_saldo += $moeda->pacote;
            $pincashCredDAO->update($credito);
            
        } else if(is_numeric($response->reference)) { //referencia por id na tabela financeiro
            $contratoFin = $contratoFinDAO->select('*', "id = $response->reference")->fetch(PDO::FETCH_OBJ);
            $contratoFin->status = 1;
            $contratoFinDAO->updateStatus($contratoFin);
            if($contratoFin->referencia == 'Credenciamento') {
                $contratoFinDAO->geraLancamentos($contratoFin->contrato);
            }
        }
    } else {
        //PAGAMENTO PENDENTE
//        echo $PagSeguro->getStatusText($PagSeguro->status);
    }
}
?>