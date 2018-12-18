<?php

include_once 'conexao.class.php';

class apContratoColDAO {

    private $conexao;
    private $tableName = 'ap_contrato_coletor';

    function __construct() {
        $this->conexao = new conexao();
    }
    
    public function select($strColumns, $strWhere) {
        $connection = $this->conexao->conectar();

        $where = !empty($strWhere) ? "WHERE $strWhere" : "";
        $select = $connection->prepare("SELECT $strColumns FROM $this->tableName $where");

        $select->execute();
        
        $connection = null;

        return $select;
    }
}
