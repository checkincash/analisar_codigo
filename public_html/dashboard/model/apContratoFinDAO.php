<?php

include_once 'conexao.class.php';
include_once 'apConfiguracaoDAO.php';

class apContratoFinDAO {

    private $conexao;
    private $config;
    private $tableName = 'ap_contrato_financeiro';

    function __construct() {
        $configuracaoDAO = new apConfiguracaoDAO();
        $this->config = $configuracaoDAO->select('*', 'id = 1')->fetch(PDO::FETCH_OBJ);
        $this->conexao = new conexao();
    }
    
    public function insert(stdClass $apContratoFin) {
        $connection = $this->conexao->conectar();

        $insert = $connection->prepare("INSERT INTO $this->tableName 
                                                (contrato, referencia, vencimento, valor, status)
                                        VALUES (:contrato, :referencia, :vencimento, :valor, :status)");
        $insert->bindValue(':contrato', $apContratoFin->contrato, PDO::PARAM_INT);
        $insert->bindValue(':referencia', $apContratoFin->referencia, PDO::PARAM_STR);
        $insert->bindValue(':vencimento', $apContratoFin->vencimento, PDO::PARAM_STR);
        $insert->bindValue(':valor', $apContratoFin->valor, PDO::PARAM_STR);
        $insert->bindValue(':status', $apContratoFin->status, PDO::PARAM_INT);
        
        $res = $insert->execute();

        $connection = null;

        return $res;
    }
    
    public function delete($where) {
//        $connection = $this->conexao->conectar();
//
//        $delete = $connection->prepare("DELETE FROM $this->tableName WHERE $where");
//
//        $res = $delete->execute();
//
//        $connection = null;
//
//        return $res;
    }
    
    public function update(stdClass $apContratoFin) {
        $connection = $this->conexao->conectar();

        try {
            $update = $connection->prepare("UPDATE $this->tableName
                                            SET contrato = :contrato, referencia = :referencia,
                                                vencimento = :vencimento, valor = :valor, status = :status
                                            WHERE id = :id");
            $update->bindValue(':contrato', $apContratoFin->contrato, PDO::PARAM_INT);
            $update->bindValue(':referencia', $apContratoFin->referencia, PDO::PARAM_STR);
            $update->bindValue(':vencimento', $apContratoFin->vencimento, PDO::PARAM_STR);
            $update->bindValue(':valor', $apContratoFin->valor, PDO::PARAM_STR);
            $update->bindValue(':status', $apContratoFin->status, PDO::PARAM_INT);

            $update->bindValue(':id', $apContratoFin->id, PDO::PARAM_INT);

            $res = $update->execute();
        } catch (Exception $exc) {
            return false;
        }
        
        $connection = null;
        
        return $res;        
    }
    
    public function updateStatus(stdClass $apContratoFin) {
        $connection = $this->conexao->conectar();

        try {
            $update = $connection->prepare("UPDATE $this->tableName
                                            SET status = :status
                                            WHERE id = :id");
            $update->bindValue(':status', $apContratoFin->status, PDO::PARAM_INT);

            $update->bindValue(':id', $apContratoFin->id, PDO::PARAM_INT);

            $res = $update->execute();
        } catch (Exception $exc) {
            return false;
        }
        
        $connection = null;
        
        return $res;        
    }
    
    public function select($strColumns, $strWhere) {
        $connection = $this->conexao->conectar();

        $select = $connection->prepare("SELECT $strColumns FROM $this->tableName WHERE $strWhere");

        $select->execute();
        
        $connection = null;

        return $select;
    }
    
    public function geraLancamentos($contratoId) {
        $connection = $this->conexao->conectar();
        
        $lancamento = new stdClass();
        $lancamento->contrato = $contratoId;
        $lancamento->referencia = 'Mensalidade';
        $lancamento->valor = $this->config->valor_mensalidade;
        $lancamento->status = 0;

        $vencimento = date('Y-m-'.$this->config->dia_mensalidade);
        for($i = 1; $i <= 12; $i++) {
            $novoVenc = date('Y-m-d', strtotime("+$i month", strtotime($vencimento)));
            $lancamento->vencimento = $novoVenc;
            $this->insert($lancamento);
        }
        
        return true;
    }
    
    public function geraCredenciamento($contratoId) {
        $connection = $this->conexao->conectar();
        
        $lancamento = new stdClass();
        $lancamento->contrato = $contratoId;
        $lancamento->referencia = 'Credenciamento';
        $lancamento->valor = $this->config->valor_credenciamento;
        $lancamento->status = 0;

        $vencimento = date('Y-m-'.$this->config->dia_mensalidade);
        $novoVenc = date('Y-m-d', strtotime("+1 month", strtotime($vencimento)));
        $lancamento->vencimento = $novoVenc;
        $this->insert($lancamento);
        
        return true;
    }
}
