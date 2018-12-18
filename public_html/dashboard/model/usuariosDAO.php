<?php

include_once 'conexao.class.php';

class usuariosDAO {

    private $conexao;
    private $tableName = 'usuarios';

    function __construct() {
        $this->conexao = new conexao();
    }
    
    public function insert(stdClass $usuario) {
        $connection = $this->conexao->conectar();

        $insert = $connection->prepare("INSERT INTO $this->tableName (login, senha, nome)
                                        VALUES (:login, :senha, :nome)");
        $insert->bindValue('::login', $usuario->codigo, PDO::PARAM_STR);
        $insert->bindValue(':senha', $usuario->senha, PDO::PARAM_STR);
        $insert->bindValue(':nome', $usuario->nome, PDO::PARAM_STR);
        
        $res = $insert->execute();

        $connection = null;

        if($res == false) {
            return $res;
        } else {
            return $insert;
        }
    }
    
    public function delete($where) {
        $connection = $this->conexao->conectar();

        $delete = $connection->prepare("DELETE FROM $this->tableName WHERE $where");

        $res = $delete->execute();

        $connection = null;

        return $res;
    }
    
    public function update(stdClass $usuario) {
        $connection = $this->conexao->conectar();

        $update = $connection->prepare("UPDATE $this->tableName SET login=:login, senha=:senha, nome=:nome WHERE id=:id");
        $update->bindValue(':id', $usuario->id, PDO::PARAM_INT);
        $update->bindValue(':login', $usuario->codigo, PDO::PARAM_STR);
        $update->bindValue(':senha', $usuario->senha, PDO::PARAM_STR);
        $update->bindValue(':nome', $usuario->nome, PDO::PARAM_STR);
        
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
