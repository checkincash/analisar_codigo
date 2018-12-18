<?php

include_once 'conexao.class.php';

class apPincashCreditoDAO {

    private $conexao;
    private $tableName = 'ap_pincash_contrato_creditos';

    function __construct() {
        $this->conexao = new conexao();
    }
    
    public function update(stdClass $pincashCred) {
        $connection = $this->conexao->conectar();

        $update = $connection->prepare("UPDATE $this->tableName
                                        SET pincash_saldo = :pincash_saldo
                                        WHERE pk_pincash_credito = :pk_pincash_credito");
        $update->bindValue(':pk_pincash_credito', $pincashCred->pk_pincash_credito, PDO::PARAM_INT);
        $update->bindValue(':pincash_saldo', $pincashCred->pincash_saldo, PDO::PARAM_INT);
        
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
