<?php

include_once 'conexao.class.php';

class apContratoPubDAO {

    private $conexao;
    private $tableName = 'ap_contrato_publicador';

    function __construct() {
        $this->conexao = new conexao();
    }
    
    public function insert(stdClass $apContratoPub) {
        $connection = $this->conexao->conectar();

        $insert = $connection->prepare("INSERT INTO $this->tableName 
                                                (fk_contrato, data_criacao, nomenclatura,
                                                foto_publicacao, texto_publicacao,
                                                foto_premiacao, texto_premiacao,
                                                gera_dados,
                                                cep, bairro, rua, numero, cidade,
                                                estado, complemento,
                                                latitude, longitude,
                                                situacao, destaque, abreviatura,
                                                pdesconto,
                                                pseg, pter, pqua,
                                                pqui, psex, psab, pdom,
                                                pinseg, pinter, pinqua,
                                                pinqui, pinsex, pinsab, pindom)
                                        VALUES (:fk_contrato, :data_criacao, :nomenclatura,
                                                :foto_publicacao, :texto_publicacao,
                                                :foto_premiacao, :texto_premiacao,
                                                :gera_dados,
                                                :cep, :bairro, :rua, :numero, :cidade,
                                                :estado, :complemento,
                                                :latitude, :longitude,
                                                :situacao, :destaque, :abreviatura,
                                                :pdesconto,
                                                :pseg, :pter, :pqua,
                                                :pqui, :psex, :psab, :pdom,
                                                :pinseg, :pinter, :pinqua,
                                                :pinqui, :pinsex, :pinsab, :pindom)");
        $insert->bindValue(':fk_contrato', $apContratoPub->fk_contrato, PDO::PARAM_INT);
        $insert->bindValue(':data_criacao', $apContratoPub->data_criacao, PDO::PARAM_STR);
        $insert->bindValue(':nomenclatura', $apContratoPub->nomenclatura, PDO::PARAM_STR);
        $insert->bindValue(':foto_publicacao', $apContratoPub->foto_publicacao, PDO::PARAM_STR);
        $insert->bindValue(':texto_publicacao', $apContratoPub->texto_publicacao, PDO::PARAM_STR);            
        $insert->bindValue(':foto_premiacao', '', PDO::PARAM_STR);
        $insert->bindValue(':texto_premiacao', '', PDO::PARAM_STR);
        $insert->bindValue(':gera_dados', 0, PDO::PARAM_INT);
        $insert->bindValue(':cep', $apContratoPub->cep, PDO::PARAM_STR);
        $insert->bindValue(':bairro', $apContratoPub->bairro, PDO::PARAM_STR);
        $insert->bindValue(':rua', $apContratoPub->rua, PDO::PARAM_STR);
        $insert->bindValue(':numero', $apContratoPub->numero, PDO::PARAM_STR);
        $insert->bindValue(':cidade', $apContratoPub->cidade, PDO::PARAM_STR);
        $insert->bindValue(':estado', $apContratoPub->estado, PDO::PARAM_STR);
        $insert->bindValue(':complemento', $apContratoPub->complemento, PDO::PARAM_STR);
        $insert->bindValue(':latitude', $apContratoPub->latitude, PDO::PARAM_STR);
        $insert->bindValue(':longitude', $apContratoPub->longitude, PDO::PARAM_STR);
        $insert->bindValue(':destaque', 0, PDO::PARAM_INT);
        $insert->bindValue(':situacao', 0, PDO::PARAM_INT);
        $insert->bindValue(':abreviatura', $apContratoPub->abreviatura, PDO::PARAM_STR);

        $insert->bindValue(':pdesconto', 0, PDO::PARAM_INT);
        $insert->bindValue(':pseg', 0, PDO::PARAM_INT);
        $insert->bindValue(':pter', 0, PDO::PARAM_INT);
        $insert->bindValue(':pqua', 0, PDO::PARAM_INT);
        $insert->bindValue(':pqui', 0, PDO::PARAM_INT);
        $insert->bindValue(':psex', 0, PDO::PARAM_INT);
        $insert->bindValue(':psab', 0, PDO::PARAM_INT);
        $insert->bindValue(':pdom', 0, PDO::PARAM_INT);
        
        $insert->bindValue(':pinseg', 1, PDO::PARAM_INT);
        $insert->bindValue(':pinter', 1, PDO::PARAM_INT);
        $insert->bindValue(':pinqua', 1, PDO::PARAM_INT);
        $insert->bindValue(':pinqui', 1, PDO::PARAM_INT);
        $insert->bindValue(':pinsex', 1, PDO::PARAM_INT);
        $insert->bindValue(':pinsab', 1, PDO::PARAM_INT);
        $insert->bindValue(':pindom', 1, PDO::PARAM_INT);
        
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
    
    public function update(stdClass $apContratoPub) {
        $connection = $this->conexao->conectar();

        try {
            $update = $connection->prepare("UPDATE $this->tableName
                                            SET fk_contrato = :fk_contrato, data_criacao = :data_criacao,
                                                nomenclatura = :nomenclatura,
                                                foto_publicacao = :foto_publicacao,
                                                texto_publicacao = :texto_publicacao,
                                                cep = :cep, bairro = :bairro, rua = :rua, numero = :numero, cidade = :cidade,
                                                estado = :estado, complemento = :complemento,
                                                latitude = :latitude, longitude = :longitude,
                                                situacao = :situacao,
                                                destaque = :destaque, abreviatura = :abreviatura,
                                                pseg = :pseg, pter = :pter, pqua = :pqua,
                                                pqui = :pqui, psex = :psex, psab = :psab,
                                                pdom = :pdom,
                                                pinseg = :pinseg, pinter = :pinter, pinqua = :pinqua,
                                                pinqui = :pinqui, pinsex = :pinsex, pinsab = :pinsab,
                                                pindom = :pindom
                                            WHERE pk_publicador = :pk_publicador");
            $update->bindValue(':fk_contrato', $apContratoPub->fk_contrato, PDO::PARAM_INT);
            $update->bindValue(':data_criacao', $apContratoPub->data_criacao, PDO::PARAM_STR);
            $update->bindValue(':nomenclatura', $apContratoPub->nomenclatura, PDO::PARAM_STR);
            $update->bindValue(':foto_publicacao', $apContratoPub->foto_publicacao, PDO::PARAM_STR);
            $update->bindValue(':texto_publicacao', $apContratoPub->texto_publicacao, PDO::PARAM_STR);            
            $update->bindValue(':cep', $apContratoPub->cep, PDO::PARAM_STR);
            $update->bindValue(':bairro', $apContratoPub->bairro, PDO::PARAM_STR);
            $update->bindValue(':rua', $apContratoPub->rua, PDO::PARAM_STR);
            $update->bindValue(':numero', $apContratoPub->numero, PDO::PARAM_STR);
            $update->bindValue(':cidade', $apContratoPub->cidade, PDO::PARAM_STR);
            $update->bindValue(':estado', $apContratoPub->estado, PDO::PARAM_STR);
            $update->bindValue(':complemento', $apContratoPub->complemento, PDO::PARAM_STR);
            $update->bindValue(':latitude', $apContratoPub->latitude, PDO::PARAM_STR);
            $update->bindValue(':longitude', $apContratoPub->longitude, PDO::PARAM_STR);
            $update->bindValue(':situacao', $apContratoPub->situacao, PDO::PARAM_STR);
            $update->bindValue(':destaque', $apContratoPub->destaque, PDO::PARAM_INT);
            $update->bindValue(':abreviatura', $apContratoPub->abreviatura, PDO::PARAM_STR);
            
            $update->bindValue(':pseg', $apContratoPub->pseg, PDO::PARAM_INT);
            $update->bindValue(':pter', $apContratoPub->pter, PDO::PARAM_INT);
            $update->bindValue(':pqua', $apContratoPub->pqua, PDO::PARAM_INT);
            $update->bindValue(':pqui', $apContratoPub->pqui, PDO::PARAM_INT);
            $update->bindValue(':psex', $apContratoPub->psex, PDO::PARAM_INT);
            $update->bindValue(':psab', $apContratoPub->psab, PDO::PARAM_INT);
            $update->bindValue(':pdom', $apContratoPub->pdom, PDO::PARAM_INT);
            
            $update->bindValue(':pinseg', $apContratoPub->pinseg, PDO::PARAM_INT);
            $update->bindValue(':pinter', $apContratoPub->pinter, PDO::PARAM_INT);
            $update->bindValue(':pinqua', $apContratoPub->pinqua, PDO::PARAM_INT);
            $update->bindValue(':pinqui', $apContratoPub->pinqui, PDO::PARAM_INT);
            $update->bindValue(':pinsex', $apContratoPub->pinsex, PDO::PARAM_INT);
            $update->bindValue(':pinsab', $apContratoPub->pinsab, PDO::PARAM_INT);
            $update->bindValue(':pindom', $apContratoPub->pindom, PDO::PARAM_INT);

            $update->bindValue(':pk_publicador', $apContratoPub->pk_publicador, PDO::PARAM_INT);

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
