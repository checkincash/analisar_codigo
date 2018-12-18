<?php

include_once 'conexao.class.php';

class apConfiguracaoDAO {

    private $conexao;
    private $tableName = 'ap_configuracao';

    function __construct() {
        $this->conexao = new conexao();
    }
    
//    public function insert(stdClass $configuracao) {
//        $connection = $this->conexao->conectar();
//
//        $insert = $connection->prepare("INSERT INTO $this->tableName (valor_credenciamento, valor_mensalidade, dia_mensalidade)
//                                        VALUES (:valor_credenciamento, :valor_mensalidade, :dia_mensalidade)");
//        $insert->bindValue(':valor_credenciamento', $configuracao->valor_credenciamento, PDO::PARAM_STR);
//        $insert->bindValue(':valor_mensalidade', $configuracao->valor_mensalidade, PDO::PARAM_STR);
//        $insert->bindValue(':dia_mensalidade', $configuracao->dia_mensalidade, PDO::PARAM_INT);
//        $res = $insert->execute();
//
//        $connection = null;
//
//        if($res == false) {
//            return $res;
//        } else {
//            return $insert;
//        }
//    }
    
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
    
    public function update(stdClass $configuracao) {
        $connection = $this->conexao->conectar();

        $update = $connection->prepare("UPDATE $this->tableName
                                        SET valor_credenciamento = :valor_credenciamento, 
                                        valor_mensalidade = :valor_mensalidade,
                                        dia_mensalidade = :dia_mensalidade,
                                        limite_upload = :limite_upload
                                        WHERE id = :id");
        $update->bindValue(':valor_credenciamento', $configuracao->valor_credenciamento, PDO::PARAM_STR);
        $update->bindValue(':valor_mensalidade', $configuracao->valor_mensalidade, PDO::PARAM_STR);
        $update->bindValue(':dia_mensalidade', $configuracao->dia_mensalidade, PDO::PARAM_INT);
        $update->bindValue(':limite_upload', $configuracao->limite_upload);
        $update->bindValue(':id', 1, PDO::PARAM_INT);
        
        $res = $update->execute();

        $connection = null;
        
        return $res;
    }
    
    public function updateEmail(stdClass $configuracao) {
        $connection = $this->conexao->conectar();

        $update = $connection->prepare("UPDATE $this->tableName
                                        SET alerta_pincash1 = :alerta_pincash1, 
                                        alerta_pincash2 = :alerta_pincash2,
                                        alerta_pincash3 = :alerta_pincash3,
                                        alerta_pincash_msg = :alerta_pincash_msg
                                        WHERE id = :id");
        $update->bindValue(':alerta_pincash1', $configuracao->alerta_pincash1, PDO::PARAM_INT);
        $update->bindValue(':alerta_pincash2', $configuracao->alerta_pincash2, PDO::PARAM_INT);
        $update->bindValue(':alerta_pincash3', $configuracao->alerta_pincash3, PDO::PARAM_INT);
        $update->bindValue(':alerta_pincash_msg', $configuracao->alerta_pincash_msg, PDO::PARAM_STR);
        $update->bindValue(':id', 1, PDO::PARAM_INT);
        
        $res = $update->execute();

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
}
