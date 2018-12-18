<?php

include_once 'conexao.class.php';

class apPincashMoedaDAO {

    private $conexao;
    private $tableName = 'ap_pincash_moeda';

    function __construct() {
        $this->conexao = new conexao();
    }
    
    public function insert(stdClass $moeda) {
        $connection = $this->conexao->conectar();

        $insert = $connection->prepare("INSERT INTO $this->tableName (ativo, data_inclusao, pacote, valor_pacote)
                                        VALUES (:ativo, :data_inclusao, :pacote, :valor_pacote)");
        $insert->bindValue(':ativo', $moeda->ativo, PDO::PARAM_BOOL);
        $insert->bindValue(':data_inclusao', $moeda->data_inclusao, PDO::PARAM_STR);
        $insert->bindValue(':pacote', $moeda->pacote, PDO::PARAM_INT);
        $insert->bindValue(':valor_pacote', $moeda->valor_pacote, PDO::PARAM_STR);
        
        $res = $insert->execute();

        $connection = null;

        if($res == false) {
            return $res;
        } else {
            return $insert;
        }
    }
    
    public function update(stdClass $moeda) {
        $connection = $this->conexao->conectar();

        $update = $connection->prepare("UPDATE $this->tableName
                                        SET ativo = :ativo, data_inclusao = :data_inclusao,
                                            pacote = :pacote, valor_pacote = :valor_pacote
                                        WHERE pk_pincash_moeda = :pk_pincash_moeda");
        $update->bindValue(':pk_pincash_moeda', $moeda->pk_pincash_moeda, PDO::PARAM_INT);
        $update->bindValue(':ativo', $moeda->ativo, PDO::PARAM_BOOL);
        $update->bindValue(':data_inclusao', $moeda->data_inclusao, PDO::PARAM_STR);
        $update->bindValue(':pacote', $moeda->pacote, PDO::PARAM_INT);
        $update->bindValue(':valor_pacote', $moeda->valor_pacote, PDO::PARAM_STR);
        
        $res = $update->execute();

        $connection = null;

        if($res == false) {
            return $res;
        } else {
            return $update;
        }
    }
    
    public function select($strColumns, $strWhere) {
        $connection = $this->conexao->conectar();

        $select = $connection->prepare("SELECT $strColumns FROM $this->tableName WHERE $strWhere");

        $select->execute();
        
        $connection = null;

        return $select;
    }
}
