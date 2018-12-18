<?php

include_once 'conexao.class.php';

class apPincashCreditoMovDAO {

    private $conexao;
    private $tableName = 'ap_pincash_contrato_creditos_mov';

    function __construct() {
        $this->conexao = new conexao();
    }
    
    public function insert(stdClass $pincashCredMv) {
        $connection = $this->conexao->conectar();

        $insert = $connection->prepare("INSERT INTO $this->tableName (aquisicao, fk_pincash_contrato_creditos, fk_pincash_moeda, pacote)
                                        VALUES (:aquisicao, :fk_pincash_contrato_creditos, :fk_pincash_moeda, :pacote)");
        $insert->bindValue(':aquisicao', $pincashCredMv->aquisicao, PDO::PARAM_STR);
        $insert->bindValue(':fk_pincash_contrato_creditos', $pincashCredMv->fk_pincash_contrato_creditos, PDO::PARAM_INT);
        $insert->bindValue(':fk_pincash_moeda', $pincashCredMv->fk_pincash_moeda, PDO::PARAM_INT);
        $insert->bindValue(':pacote', $pincashCredMv->pacote, PDO::PARAM_INT);
        $res = $insert->execute();

        $connection = null;

        if($res == false) {
            return $res;
        } else {
            return $insert;
        }
    }
    
    public function update(stdClass $pincashCredMv) {
        $connection = $this->conexao->conectar();

        $update = $connection->prepare("UPDATE $this->tableName
                                        SET aquisicao = :aquisicao,
                                        fk_pincash_contrato_creditos = :fk_pincash_contrato_creditos,
                                        fk_pincash_moeda = :fk_pincash_moeda, pacote = :pacote
                                        WHERE pk_pincash_creditomov = :pk_pincash_creditomov");
        $update->bindValue(':pk_pincash_creditomov', $pincashCredMv->pk_pincash_creditomov, PDO::PARAM_INT);
        $update->bindValue(':aquisicao', $pincashCredMv->aquisicao, PDO::PARAM_STR);
        $update->bindValue(':fk_pincash_contrato_creditos', $pincashCredMv->fk_pincash_contrato_creditos, PDO::PARAM_INT);
        $update->bindValue(':fk_pincash_moeda', $pincashCredMv->fk_pincash_moeda, PDO::PARAM_INT);
        $update->bindValue(':pacote', $pincashCredMv->pacote, PDO::PARAM_INT);
        
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
