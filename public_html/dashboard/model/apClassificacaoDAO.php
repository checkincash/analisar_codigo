<?php

include_once 'conexao.class.php';

class apClassificacaoDAO {

    private $conexao;
    private $tableName = 'ap_classificacao';

    function __construct() {
        $this->conexao = new conexao();
    }
    
    public function insert(stdClass $apClassificacao) {
        $connection = $this->conexao->conectar();

        $insert = $connection->prepare("INSERT INTO $this->tableName (descricao)
                                        VALUES (:descricao)");
        $insert->bindValue(':descricao', $apClassificacao->descricao, PDO::PARAM_STR);
        $res = $insert->execute();

        $connection = null;

        if($res == false) {
            return $res;
        } else {
            return $insert;
        }
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
    
    public function update(stdClass $representante) {
        $connection = $this->conexao->conectar();

        $update = $connection->prepare("UPDATE $this->tableName SET descricao=:descricao WHERE pk_classificacao = :pk_classificacao");
        $update->bindValue('pk_classificacao', $representante->pk_classificacao, PDO::PARAM_INT);
        
        $res = $update->execute();

        $connection = null;
        
        return $res;
    }
    
    public function select($strColumns, $strWhere) {
        $connection = $this->conexao->conectar();

        $select = $connection->prepare("SELECT $strColumns FROM $this->tableName WHERE $strWhere ORDER BY descricao");

        $select->execute();
        
        $connection = null;

        return $select;
    }
}
