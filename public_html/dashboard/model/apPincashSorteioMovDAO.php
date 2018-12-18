<?php

include_once 'conexao.class.php';

class apPincashSorteioMovDAO {

    private $conexao;
    private $tableName = 'ap_pincash_sorteio_mov';

    function __construct() {
        $this->conexao = new conexao();
    }
    
    public function insert(stdClass $apSorteioMov) {
        $connection = $this->conexao->conectar();

        $insert = $connection->prepare("INSERT INTO $this->tableName (fk_cabe_sorteio, foto_premiacao, texto_premiacao, pincash_premio, label, foto_catalogo, titulo, chamada)
                                        VALUES (:fk_cabe_sorteio, :foto_premiacao, :texto_premiacao, :pincash_premio, :label, :foto_catalogo, :titulo, :chamada)");
        $insert->bindValue(':fk_cabe_sorteio', $apSorteioMov->fk_cabe_sorteio, PDO::PARAM_INT);
        $insert->bindValue(':foto_premiacao', $apSorteioMov->foto_premiacao, PDO::PARAM_STR);
        $insert->bindValue(':texto_premiacao', $apSorteioMov->texto_premiacao, PDO::PARAM_STR);
        $insert->bindValue(':label', $apSorteioMov->label, PDO::PARAM_STR);
        $insert->bindValue(':pincash_premio', $apSorteioMov->pincash_premio, PDO::PARAM_INT);
        $insert->bindValue(':foto_catalogo', $apSorteioMov->foto_catalogo, PDO::PARAM_STR);
        $insert->bindValue(':titulo', $apSorteioMov->titulo, PDO::PARAM_STR);
        $insert->bindValue(':chamada', $apSorteioMov->chamada, PDO::PARAM_STR);
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
    
    public function update(stdClass $apSorteioMov) {
        $connection = $this->conexao->conectar();

        $update = $connection->prepare("UPDATE $this->tableName
                                        SET foto_premiacao = :foto_premiacao, texto_premiacao = :texto_premiacao,
                                            pincash_premio = :pincash_premio, label = :label,
                                            foto_catalogo = :foto_catalogo, titulo = :titulo, chamada = :chamada
                                        WHERE pk_mov_sorteio_mv = :pk_mov_sorteio_mv");
        $update->bindValue(':pk_mov_sorteio_mv', $apSorteioMov->pk_mov_sorteio_mv, PDO::PARAM_INT);
        $update->bindValue(':foto_premiacao', $apSorteioMov->foto_premiacao, PDO::PARAM_STR);
        $update->bindValue(':texto_premiacao', $apSorteioMov->texto_premiacao, PDO::PARAM_STR);
        $update->bindValue(':label', $apSorteioMov->label, PDO::PARAM_STR);
        $update->bindValue(':pincash_premio', $apSorteioMov->pincash_premio, PDO::PARAM_INT);
        $update->bindValue(':foto_catalogo', $apSorteioMov->foto_catalogo, PDO::PARAM_STR);
        $update->bindValue(':titulo', $apSorteioMov->titulo, PDO::PARAM_STR);
        $update->bindValue(':chamada', $apSorteioMov->chamada, PDO::PARAM_STR);
        
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
