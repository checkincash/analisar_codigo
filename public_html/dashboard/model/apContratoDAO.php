<?php

include_once 'conexao.class.php';
include_once 'apContratoPubDAO.php';
include_once 'apContratoFinDAO.php';

class apContratoDAO {

    private $conexao;
    private $tableName = 'ap_contrato';

    function __construct() {
        $this->conexao = new conexao();
    }
    
    public function insert(stdClass $apContrato) {
        $connection = $this->conexao->conectar();

        try {
            $insert = $connection->prepare("INSERT INTO $this->tableName 
                                                    (fk_classificacao, classificacao1, classificacao2,
                                                    cnpj, inscricao, razao, fantasia, datacadastro,
                                                    cep, bairro, rua, numero, cidade, estado, complemento,
                                                    fachada, latitude, longitude,
                                                    email, telefone, senha_usuario, nome_contato,
                                                    ativo, rash,
                                                    seg_m_de, seg_m_ate,
                                                    ter_m_de, ter_m_ate,
                                                    qua_m_de, qua_m_ate,
                                                    qui_m_de, qui_m_ate,
                                                    sex_m_de, sex_m_ate,
                                                    sab_m_de, sab_m_ate,
                                                    dom_m_de, dom_m_ate,
                                                    website, id_admin)
                                            VALUES (:fk_classificacao, :classificacao1, :classificacao2,
                                                    :cnpj, :inscricao, :razao, :fantasia, :datacadastro,
                                                    :cep, :bairro, :rua, :numero, :cidade, :estado, :complemento,
                                                    :fachada, :latitude, :longitude,
                                                    :email, :telefone, :senha_usuario, :nome_contato,
                                                    :ativo, :rash,
                                                    :seg_m_de, :seg_m_ate,
                                                    :ter_m_de, :ter_m_ate,
                                                    :qua_m_de, :qua_m_ate,
                                                    :qui_m_de, :qui_m_ate,
                                                    :sex_m_de, :sex_m_ate,
                                                    :sab_m_de, :sab_m_ate,
                                                    :dom_m_de, :dom_m_ate,
                                                    :website, :id_admin)");
            $insert->bindValue(':cnpj', $apContrato->cnpj, PDO::PARAM_STR);
            $insert->bindValue(':inscricao', $apContrato->inscricao, PDO::PARAM_STR);
            $insert->bindValue(':razao', $apContrato->razao, PDO::PARAM_STR);
            $insert->bindValue(':fantasia', $apContrato->fantasia, PDO::PARAM_STR);
            $insert->bindValue(':datacadastro', date('Y-m-d'), PDO::PARAM_STR);
            $insert->bindValue(':fk_classificacao', $apContrato->fk_classificacao, PDO::PARAM_INT);
            $insert->bindValue(':classificacao1', $apContrato->classificacao1, PDO::PARAM_STR);
            $insert->bindValue(':classificacao2', $apContrato->classificacao2, PDO::PARAM_STR);
            $insert->bindValue(':ativo', $apContrato->ativo, PDO::PARAM_INT);
            $insert->bindValue(':email', $apContrato->email, PDO::PARAM_STR);
            $insert->bindValue(':senha_usuario', $apContrato->senha_usuario, PDO::PARAM_STR);
            $insert->bindValue(':nome_contato', $apContrato->nome_contato, PDO::PARAM_STR);
            $insert->bindValue(':telefone', $apContrato->telefone, PDO::PARAM_STR);
            $insert->bindValue(':cep', $apContrato->cep, PDO::PARAM_STR);
            $insert->bindValue(':bairro', $apContrato->bairro, PDO::PARAM_STR);
            $insert->bindValue(':rua', $apContrato->rua, PDO::PARAM_STR);
            $insert->bindValue(':numero', $apContrato->numero, PDO::PARAM_STR);
            $insert->bindValue(':cidade', $apContrato->cidade, PDO::PARAM_STR);
            $insert->bindValue(':estado', $apContrato->estado, PDO::PARAM_STR);
            $insert->bindValue(':complemento', $apContrato->complemento, PDO::PARAM_STR);
            $insert->bindValue(':website', $apContrato->website, PDO::PARAM_STR);
            $insert->bindValue(':fachada', $apContrato->fachada, PDO::PARAM_STR);
            $insert->bindValue(':id_admin', $apContrato->id_admin, PDO::PARAM_INT);
            
            $insert->bindValue(':rash', Util::getRash(), PDO::PARAM_STR);

            $insert->bindValue(':latitude', $apContrato->latitude, PDO::PARAM_STR);
            $insert->bindValue(':longitude', $apContrato->longitude, PDO::PARAM_STR);

            $insert->bindValue(':seg_m_de', $apContrato->seg_m_de, PDO::PARAM_STR);
            $insert->bindValue(':seg_m_ate', $apContrato->seg_m_ate, PDO::PARAM_STR);

            $insert->bindValue(':ter_m_de', $apContrato->ter_m_de, PDO::PARAM_STR);
            $insert->bindValue(':ter_m_ate', $apContrato->ter_m_ate, PDO::PARAM_STR);

            $insert->bindValue(':qua_m_de', $apContrato->qua_m_de, PDO::PARAM_STR);
            $insert->bindValue(':qua_m_ate', $apContrato->qua_m_ate, PDO::PARAM_STR);

            $insert->bindValue(':qui_m_de', $apContrato->qui_m_de, PDO::PARAM_STR);
            $insert->bindValue(':qui_m_ate', $apContrato->qui_m_ate, PDO::PARAM_STR);

            $insert->bindValue(':sex_m_de', $apContrato->sex_m_de, PDO::PARAM_STR);
            $insert->bindValue(':sex_m_ate', $apContrato->sex_m_ate, PDO::PARAM_STR);

            $insert->bindValue(':sab_m_de', $apContrato->sab_m_de, PDO::PARAM_STR);
            $insert->bindValue(':sab_m_ate', $apContrato->sab_m_ate, PDO::PARAM_STR);

            $insert->bindValue(':dom_m_de', $apContrato->dom_m_de, PDO::PARAM_STR);
            $insert->bindValue(':dom_m_ate', $apContrato->dom_m_ate, PDO::PARAM_STR);

            $res = $insert->execute();
            if($res) {
                $novoId = $connection->lastInsertId();
                
                //CAMPANHA
                $contratoPubDAO = new apContratoPubDAO();
                $contratoPub = new stdClass();
                $contratoPub->fk_contrato = $novoId;
                $contratoPub->data_criacao = date('Y-m-d');
                $contratoPub->nomenclatura = $apContrato->razao;
                $contratoPub->foto_publicacao = $apContrato->fachada;
                $contratoPub->texto_publicacao = '';
                $contratoPub->cep = $apContrato->cep;
                $contratoPub->bairro = $apContrato->bairro;
                $contratoPub->rua = $apContrato->rua;
                $contratoPub->numero = $apContrato->numero;
                $contratoPub->cidade = $apContrato->cidade;
                $contratoPub->estado = $apContrato->estado;
                $contratoPub->complemento = $apContrato->complemento;
                $contratoPub->latitude = $apContrato->latitude;
                $contratoPub->longitude = $apContrato->longitude;
                $contratoPub->abreviatura = '';
            
                $res = $contratoPubDAO->insert($contratoPub);
                
                $contratoFinDAO = new apContratoFinDAO();
                $contratoFinDAO->geraCredenciamento($novoId);
                
                $res = $novoId;
            }
        } catch (Exception $exc) {
            $res = false;
        }

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
    
    public function update(stdClass $apContrato) {
        $connection = $this->conexao->conectar();

        try {
            $update = $connection->prepare("UPDATE $this->tableName
                                            SET cnpj = :cnpj, inscricao = :inscricao, razao = :razao, fantasia = :fantasia,
                                                fk_classificacao = :fk_classificacao, classificacao1 = :classificacao1,
                                                classificacao2 = :classificacao2,
                                                ativo = :ativo,
                                                email = :email, senha_usuario = :senha_usuario,
                                                nome_contato = :nome_contato, telefone = :telefone,
                                                cep = :cep, bairro = :bairro, rua = :rua, numero = :numero, cidade = :cidade,
                                                estado = :estado, complemento = :complemento, website = :website,
                                                fachada = :fachada,
                                                latitude = :latitude, longitude = :longitude,
                                                seg_m_de = :seg_m_de, seg_m_ate = :seg_m_ate,
                                                ter_m_de = :ter_m_de, ter_m_ate = :ter_m_ate,
                                                qua_m_de = :qua_m_de, qua_m_ate = :qua_m_ate,
                                                qui_m_de = :qui_m_de, qui_m_ate = :qui_m_ate,
                                                sex_m_de = :sex_m_de, sex_m_ate = :sex_m_ate,
                                                sab_m_de = :sab_m_de, sab_m_ate = :sab_m_ate,
                                                dom_m_de = :dom_m_de, dom_m_ate = :dom_m_ate
                                            WHERE pk_contrato = :pk_contrato");
            $update->bindValue(':cnpj', $apContrato->cnpj, PDO::PARAM_STR);
            $update->bindValue(':inscricao', $apContrato->inscricao, PDO::PARAM_STR);
            $update->bindValue(':razao', $apContrato->razao, PDO::PARAM_STR);
            $update->bindValue(':fantasia', $apContrato->fantasia, PDO::PARAM_STR);
            $update->bindValue(':fk_classificacao', $apContrato->fk_classificacao, PDO::PARAM_INT);
            $update->bindValue(':classificacao1', $apContrato->classificacao1, PDO::PARAM_STR);
            $update->bindValue(':classificacao2', $apContrato->classificacao2, PDO::PARAM_STR);
            $update->bindValue(':ativo', $apContrato->ativo, PDO::PARAM_INT);
            $update->bindValue(':email', $apContrato->email, PDO::PARAM_STR);
            $update->bindValue(':senha_usuario', $apContrato->senha_usuario, PDO::PARAM_STR);
            $update->bindValue(':nome_contato', $apContrato->nome_contato, PDO::PARAM_STR);
            $update->bindValue(':telefone', $apContrato->telefone, PDO::PARAM_STR);
            $update->bindValue(':cep', $apContrato->cep, PDO::PARAM_STR);
            $update->bindValue(':bairro', $apContrato->bairro, PDO::PARAM_STR);
            $update->bindValue(':rua', $apContrato->rua, PDO::PARAM_STR);
            $update->bindValue(':numero', $apContrato->numero, PDO::PARAM_STR);
            $update->bindValue(':cidade', $apContrato->cidade, PDO::PARAM_STR);
            $update->bindValue(':estado', $apContrato->estado, PDO::PARAM_STR);
            $update->bindValue(':complemento', $apContrato->complemento, PDO::PARAM_STR);
            $update->bindValue(':website', $apContrato->website, PDO::PARAM_STR);
            $update->bindValue(':fachada', $apContrato->fachada, PDO::PARAM_STR);
            
            $update->bindValue(':latitude', $apContrato->latitude, PDO::PARAM_STR);
            $update->bindValue(':longitude', $apContrato->longitude, PDO::PARAM_STR);

            $update->bindValue(':seg_m_de', $apContrato->seg_m_de, PDO::PARAM_STR);
            $update->bindValue(':seg_m_ate', $apContrato->seg_m_ate, PDO::PARAM_STR);

            $update->bindValue(':ter_m_de', $apContrato->ter_m_de, PDO::PARAM_STR);
            $update->bindValue(':ter_m_ate', $apContrato->ter_m_ate, PDO::PARAM_STR);

            $update->bindValue(':qua_m_de', $apContrato->qua_m_de, PDO::PARAM_STR);
            $update->bindValue(':qua_m_ate', $apContrato->qua_m_ate, PDO::PARAM_STR);

            $update->bindValue(':qui_m_de', $apContrato->qui_m_de, PDO::PARAM_STR);
            $update->bindValue(':qui_m_ate', $apContrato->qui_m_ate, PDO::PARAM_STR);

            $update->bindValue(':sex_m_de', $apContrato->sex_m_de, PDO::PARAM_STR);
            $update->bindValue(':sex_m_ate', $apContrato->sex_m_ate, PDO::PARAM_STR);

            $update->bindValue(':sab_m_de', $apContrato->sab_m_de, PDO::PARAM_STR);
            $update->bindValue(':sab_m_ate', $apContrato->sab_m_ate, PDO::PARAM_STR);

            $update->bindValue(':dom_m_de', $apContrato->dom_m_de, PDO::PARAM_STR);
            $update->bindValue(':dom_m_ate', $apContrato->dom_m_ate, PDO::PARAM_STR);

            $update->bindValue(':pk_contrato', $apContrato->pk_contrato, PDO::PARAM_INT);

            $res = $update->execute();

            $connection = null;

            return $res;
        } catch (Exception $exc) {
            return $exc->getMessage();
        }
    }
    
    public function updateCredenciamento($contratoId, $credenciamento = false) {
        $connection = $this->conexao->conectar();

        try {
            $update = $connection->prepare("UPDATE $this->tableName
                                            SET credenciamento = :credenciamento
                                            WHERE pk_contrato = :pk_contrato");
            $update->bindValue(':credenciamento', $credenciamento, PDO::PARAM_BOOL);        

            $update->bindValue(':pk_contrato', $contratoId, PDO::PARAM_INT);

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
    
    public function getInfo($registros = array()) {
        $connection = $this->conexao->conectar();
        
        foreach($registros as $item) {
            if(!empty($item->id_admin)) {
                $select = $connection->prepare("SELECT usuario FROM ap_administrador WHERE id = $item->id_admin");
                $select->execute();
                $result = $select->fetch(PDO::FETCH_OBJ);
                $item->admin = $result->usuario;
            } else {
                $item->admin = '';
            }
            
            $contratoFinDAO = new apContratoFinDAO();
            $item->cred_fin = $contratoFinDAO->select('*', "contrato = $item->pk_contrato AND referencia = 'Credenciamento' ORDER BY vencimento DESC LIMIT 1")->fetch(PDO::FETCH_OBJ);
        }
        
        return $registros;
    }
    
    public function getEmptyContrato() {
        $contrato = new stdClass();
        $contrato->pk_contrato = 0;
        $contrato->cnpj = '';
        $contrato->inscricao = '';
        $contrato->razao = '';
        $contrato->fantasia = '';
        $contrato->fk_classificacao = null;
        $contrato->classificacao1 = '';
        $contrato->classificacao2 = '';

        $contrato->ativo = 0;
        $contrato->email = '';
        $contrato->senha_usuario = '';

        $contrato->fachada = '';
        
        $contrato->nome_contato = '';
        $contrato->telefone = '';
        $contrato->cep = '';
        $contrato->bairro = '';
        $contrato->rua = '';
        $contrato->numero = '';
        $contrato->cidade = '';
        $contrato->estado = '';
        $contrato->complemento = '';
        $contrato->website = '';

        $contrato->latitude = '';
        $contrato->longitude = '';

        $contrato->seg_m_de = '00:00';
        $contrato->seg_m_ate = '00:00';
        $contrato->seg_t_de = '00:00';
        $contrato->seg_t_ate = '00:00';

        $contrato->ter_m_de = '00:00';
        $contrato->ter_m_ate = '00:00';
        $contrato->ter_t_de = '00:00';
        $contrato->ter_t_ate = '00:00';

        $contrato->qua_m_de = '00:00';
        $contrato->qua_m_ate = '00:00';
        $contrato->qua_t_de = '00:00';
        $contrato->qua_t_ate = '00:00';

        $contrato->qui_m_de = '00:00';
        $contrato->qui_m_ate = '00:00';
        $contrato->qui_t_de = '00:00';
        $contrato->qui_t_ate = '00:00';

        $contrato->sex_m_de = '00:00';
        $contrato->sex_m_ate = '00:00';
        $contrato->sex_t_de = '00:00';
        $contrato->sex_t_ate = '00:00';

        $contrato->sab_m_de = '00:00';
        $contrato->sab_m_ate = '00:00';
        $contrato->sab_t_de = '00:00';
        $contrato->sab_t_ate = '00:00';

        $contrato->dom_m_de = '00:00';
        $contrato->dom_m_ate = '00:00';
        $contrato->dom_t_de = '00:00';
        $contrato->dom_t_ate = '00:00';
        
        return $contrato;
    }
}
