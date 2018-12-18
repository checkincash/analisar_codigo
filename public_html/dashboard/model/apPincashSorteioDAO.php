<?php

include_once 'conexao.class.php';

class apPincashSorteioDAO {

    private $conexao;
    private $tableName = 'ap_pincash_sorteio';

    function __construct() {
        $this->conexao = new conexao();
    }
    
    public function insert(stdClass $apSorteio) {
        $connection = $this->conexao->conectar();

        $insert = $connection->prepare("INSERT INTO $this->tableName (ativo, datainicio, datafim, texto_campanha, foto_campanha)
                                        VALUES (:ativo, :datainicio, :datafim, :texto_campanha, :foto_campanha)");
        $insert->bindValue(':ativo', $apSorteio->ativo, PDO::PARAM_BOOL);
        $insert->bindValue(':datainicio', $apSorteio->datainicio, PDO::PARAM_STR);
        $insert->bindValue(':datafim', $apSorteio->datafim, PDO::PARAM_STR);
        $insert->bindValue(':texto_campanha', $apSorteio->texto_campanha, PDO::PARAM_STR);
        $insert->bindValue(':foto_campanha', $apSorteio->foto_campanha, PDO::PARAM_STR);
        $res = $insert->execute();

        $pk_sorteio_cabe_pincash = $connection->lastInsertId();
        
        $connection = null;

        if($res == false) {
            return $res;
        } else {
            return $pk_sorteio_cabe_pincash;
        }
    }
    
    public function update(stdClass $apSorteio) {
        $connection = $this->conexao->conectar();

        $update = $connection->prepare("UPDATE $this->tableName
                                        SET ativo = :ativo, datafim = :datafim, texto_campanha = :texto_campanha,
                                        foto_campanha = :foto_campanha
                                        WHERE pk_sorteio_cabe_pincash = :pk_sorteio_cabe_pincash");
        $update->bindValue(':pk_sorteio_cabe_pincash', $apSorteio->pk_sorteio_cabe_pincash, PDO::PARAM_INT);
        $update->bindValue(':ativo', $apSorteio->ativo, PDO::PARAM_BOOL);
        $update->bindValue(':datafim', $apSorteio->datafim, PDO::PARAM_STR);
        $update->bindValue(':texto_campanha', $apSorteio->texto_campanha, PDO::PARAM_STR);
        $update->bindValue(':foto_campanha', $apSorteio->foto_campanha, PDO::PARAM_STR);
        
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
    
    public function ativar($id) {
        $connection = $this->conexao->conectar();

        $update = $connection->prepare("UPDATE $this->tableName
                                         SET ativo = false");
        $update->execute();

        $update = $connection->prepare("UPDATE $this->tableName
                                         SET ativo = true
                                         WHERE pk_sorteio_cabe_pincash = $id");
        $update->execute();
        
        $connection = null;

        return $update;
    }
    
    public function inativar($id) {
        $connection = $this->conexao->conectar();

        $update = $connection->prepare("UPDATE $this->tableName
                                         SET ativo = false
                                         WHERE pk_sorteio_cabe_pincash = $id");
        $update->execute();
        
        $connection = null;

        return $update;
    }
}
