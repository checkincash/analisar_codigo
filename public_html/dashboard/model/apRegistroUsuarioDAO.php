<?php

include_once 'conexao.class.php';

class apRegistroUsuarioDAO {

    private $conexao;
    private $tableName = 'ap_registro_usuario';

    function __construct() {
        $this->conexao = new conexao();
    }
    
    public function select($strColumns, $strWhere) {
        $connection = $this->conexao->conectar();

        $select = $connection->prepare("SELECT $strColumns FROM $this->tableName WHERE $strWhere");

        $select->execute();
        
        $connection = null;

        return $select;
    }
}
