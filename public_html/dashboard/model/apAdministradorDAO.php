<?php

include_once 'conexao.class.php';

class apAdministradorDAO {

    private $conexao;
    private $tableName = 'ap_administrador';

    function __construct() {
        $this->conexao = new conexao();
    }
    
    public function insert(stdClass $apAdministrador) {
        $connection = $this->conexao->conectar();

        $insert = $connection->prepare("INSERT INTO $this->tableName 
                                                (usuario, senha, nivel, ativo)
                                        VALUES (:usuario, :senha, :nivel, :ativo)");
        $insert->bindValue(':usuario', $apAdministrador->usuario, PDO::PARAM_STR);
        $insert->bindValue(':senha', $apAdministrador->senha, PDO::PARAM_STR);
        $insert->bindValue(':nivel', $apAdministrador->nivel, PDO::PARAM_INT);
        $insert->bindValue(':ativo', $apAdministrador->ativo, PDO::PARAM_BOOL);
        
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
    
    public function update(stdClass $apAdministrador) {
        $connection = $this->conexao->conectar();

        try {
            $update = $connection->prepare("UPDATE $this->tableName
                                            SET usuario = :usuario, senha = :senha,
                                            nivel = :nivel, ativo = :ativo
                                            WHERE id = :id");
            
            $update->bindValue(':usuario', $apAdministrador->usuario, PDO::PARAM_STR);
            $update->bindValue(':senha', $apAdministrador->senha, PDO::PARAM_STR);
            $update->bindValue(':nivel', $apAdministrador->nivel, PDO::PARAM_INT);
            $update->bindValue(':ativo', $apAdministrador->ativo, PDO::PARAM_BOOL);
            $update->bindValue(':id', $apAdministrador->id, PDO::PARAM_INT);

            $res = $update->execute();

            $connection = null;

            return $res;
        } catch (Exception $exc) {
            return $exc->getMessage();
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
