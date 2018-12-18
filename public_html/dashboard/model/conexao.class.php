<?php

class conexao {

    private $conexao;
    
    function __construct() {
    }

    public function conectar() {
        try {
//            $this->conexao = new PDO("mysql:host=localhost;dbname=check956_db", "desenv", "d3s3nv");
            $this->conexao = new PDO("mysql:host=localhost;dbname=check956_db", "check956_admin", "v1@r2$02!5s2d0");
            $this->conexao->exec("set names utf8");
            
            return $this->conexao;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
