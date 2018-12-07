package database;

/**
 * Created by User on 19/09/2017.
 */

public class ScriptDLL {

    public static String getCreateTableUsuario(){

        StringBuilder sql = new StringBuilder();


        sql.append("CREATE TABLE USUARIO (");
        sql.append("       pk_usuario  INTEGER       PRIMARY KEY AUTOINCREMENT,");
        sql.append("       codigousuario VARCHAR(20),");
        sql.append("       nome        VARCHAR (30),");
        sql.append("       sobrenome   VARCHAR (70),");
        sql.append("       email       VARCHAR (120) UNIQUE,");
        sql.append("       senha       VARCHAR (38),");
        sql.append("       token       INT (6),");
        sql.append("       rua         VARCHAR (70),");
        sql.append("       numero      VARCHAR (10),");
        sql.append("       complemento VARCHAR (40),");
        sql.append("       bairro      VARCHAR (70),");
        sql.append("       cidade      VARCHAR (70),");
        sql.append("       estado      CHAR (2),");
        sql.append("       cep         VARCHAR (10),");
        sql.append("       area        CHAR (2),");
        sql.append("       telefone    CHAR (20),");
        sql.append("       iscompleto  CHAR (1) ) ");



        return sql.toString();
    }
}
