<?php
class Usuario{
 
    // database connection and table name
    private $conn;
    private $table_name = "ap_registro_usuario";
 
    // object properties

    public $pk_usuario;
    public $dataregistro;
    public $nome;
    public $sobrenome;
    public $email;
    public $senha;
    public $pin_recupera_senha;
    public $iscompleto;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    
    //Ler Usuarios
	function read()
	{
 
    // select all query
    $query = "SELECT dataregistro, nome, sobrenome,
     email,senha, iscompleto FROM ". $this->table_name;
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
	}
	
	// Criar Usuario
	function create()
	{
 
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                dataregistro=:dataregistro, nome=:nome, sobrenome=:sobrenome, email=:email, senha=:senha, iscompleto=:iscompleto ";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->dataregistro=htmlspecialchars(strip_tags($this->dataregistro));
    $this->nome=htmlspecialchars(strip_tags($this->nome));
    $this->sobrenome=htmlspecialchars(strip_tags($this->sobrenome));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->senha=htmlspecialchars(strip_tags($this->senha));
    $this->iscompleto=htmlspecialchars(strip_tags($this->iscompleto));
 
    // bind values
    $stmt->bindParam(":dataregistro", $this->dataregistro);
    $stmt->bindParam(":nome", $this->nome);
    $stmt->bindParam(":sobrenome", $this->sobrenome);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":senha", $this->senha); 
    $stmt->bindParam(":iscompleto", $this->iscompleto);
    
 
    // execute query
   	 if($stmt->execute()){
        return true;
    	}
 
    	return false;
     
	}
	
	// usado na necessidade de retornar hum usuario
	function readOne()
	{
 
    // query to read single record
    $query = "SELECT
                pk_usuario, dataregistro, nome, sobrenome, email, senha, pin_recupera_senha, iscompleto
            FROM
                " . $this->table_name . " 
            WHERE
				email = ?";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // bind id of product to be updated
    $stmt->bindParam(1, $this->email);
 
    // execute query
    $stmt->execute();
 
    
    /*
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    // set values to object properties
    $this->dataregistro = $row['dataregistro'];
    $this->nome = $row['nome'];
    $this->sobrenome = $row['sobrenome'];
    $this->email = $row['email'];
    $this->senha = $row['senha'];
    $this->iscompleto = $row['iscompleto'];
    */
    
    return $stmt;
    
    
  }
  // usado na necessidade de retornar hum usuario
	function readCredentials()
	{
 
    // query to read single record
    $query = "SELECT
                pk_usuario, 
                dataregistro, nome, sobrenome, email, senha, pin_recupera_senha, iscompleto
            FROM
                " . $this->table_name . " 
            WHERE
				email = ? and senha = ?";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
    
    // bind id of product to be updated
    $stmt->bindParam(1, $this->email);
    $stmt->bindParam(2, $this->senha);
 
 
    // execute query
    $stmt->execute();
 
    
    /*
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    // set values to object properties
    $this->dataregistro = $row['dataregistro'];
    $this->nome = $row['nome'];
    $this->sobrenome = $row['sobrenome'];
    $this->email = $row['email'];
    $this->senha = $row['senha'];
    $this->iscompleto = $row['iscompleto'];
    */
    
    return $stmt;
    
    
  }
  
  // atualiza usuario
function update(){
 
    // update query
    $query = "UPDATE
                " . $this->table_name . "
            SET
                nome = :nome,
                sobrenome = :sobrenome,
                pin_recupera_senha = :pin_recupera_senha,
                senha = :senha
                
            WHERE
            
                email = :email";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->nome=htmlspecialchars(strip_tags($this->nome));
    $this->sobrenome=htmlspecialchars(strip_tags($this->sobrenome));
    $this->senha=htmlspecialchars(strip_tags($this->senha));
    $this->email=htmlspecialchars(strip_tags($this->email));
 
    
    // bind new values
    
    $stmt->bindParam(':nome', $this->nome);
    $stmt->bindParam(':sobrenome', $this->sobrenome);
    $stmt->bindParam(':senha', $this->senha);
    $stmt->bindParam(':pin_recupera_senha', $this->pin_recupera_senha);
    $stmt->bindParam(':email', $this->email);
 
    // execute the query
    if($stmt->execute()){
        return true;
    }
 
    return false;
}
  
  // delete the usuario
	function delete(){
 
    // delete query
    $query = "DELETE FROM " . $this->table_name . " WHERE email = ?";
 
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->email=htmlspecialchars(strip_tags($this->email));
 
    // bind id of record to delete
    $stmt->bindParam(1, $this->email);
 
    
    
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}

// search usuarios
function search($keywords){
 
    // select all query
    $query = "SELECT
                dataregistro, nome, sobrenome, email, senha
            FROM
                " . $this->table_name . "
            WHERE
                nome LIKE ? OR sobrenome LIKE ? OR email = ?
            ORDER BY
                nome";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $keywords=htmlspecialchars(strip_tags($keywords));
    $keywords = "%{$keywords}%";
 
    // bind
    $stmt->bindParam(1, $keywords);
    $stmt->bindParam(2, $keywords);
    $stmt->bindParam(3, $keywords);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}

// read usuario with pagination
public function readPaging($from_record_num, $records_per_page){
 
    // select query
    $query = "SELECT
                dataregistro, nome, sobrenome, email, senha
            FROM
                " . $this->table_name . " 
            ORDER BY nome
            LIMIT ?, ?";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // bind variable values
    $stmt->bindParam(1, $from_record_num, PDO::PARAM_INT);
    $stmt->bindParam(2, $records_per_page, PDO::PARAM_INT);
 
    // execute query
    $stmt->execute();
 
    // return values from database
    return $stmt;
}
// used for paging usuario
public function count(){
    $query = "SELECT COUNT(*) as total_rows FROM " . $this->table_name . "";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    return $row['total_rows'];
}
  
}