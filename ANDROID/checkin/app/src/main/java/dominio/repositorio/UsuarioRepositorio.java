package dominio.repositorio;

import android.content.Context;
import android.content.ContentValues;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import java.util.ArrayList;
import java.util.List;
import dominio.entidades.Usuario;



/**
 * Created by User on 19/09/2017.
 */

public class UsuarioRepositorio {

    private SQLiteDatabase conexao;



    public UsuarioRepositorio(SQLiteDatabase conexao)
    {
        this.conexao = conexao;
    }

    public void inserir(Usuario usuario)
    {

        ContentValues contentValues = new ContentValues();

        contentValues.put("CODIGOUSUARIO", usuario.codigousuario);
        contentValues.put("NOME", usuario.nome);
        contentValues.put("SOBRENOME", usuario.sobrenome);
        contentValues.put("EMAIL", usuario.email);
        contentValues.put("SENHA", usuario.senha);
        contentValues.put("RUA", usuario.rua);
        contentValues.put("NUMERO", usuario.numero);
        contentValues.put("COMPLEMENTO", usuario.complemento);
        contentValues.put("BAIRRO", usuario.bairro);
        contentValues.put("CIDADE", usuario.cidade);
        contentValues.put("ESTADO", usuario.estado);
        contentValues.put("CEP", usuario.cep);
        contentValues.put("AREA", usuario.area);
        contentValues.put("TELEFONE", usuario.telefone);
        contentValues.put("ISCOMPLETO", usuario.iscompleto);

        conexao.insertOrThrow("USUARIO", null, contentValues );


    }

    public void excluir( String email)
    {


        String[] parametros = new String[1];
        parametros[0] = email;

        conexao.delete("USUARIO", "EMAIL = ?", parametros);
    }

    public void limparBaseDados( )
    {


        String[] parametros = new String[1];
        parametros[0] = "xxxx";

        conexao.delete("USUARIO", "EMAIL != ?", parametros);
    }

    public void alterar(Usuario usuario)
    {
        ContentValues contentValues = new ContentValues();

        contentValues.put("NOME", usuario.nome);
        contentValues.put("SOBRENOME", usuario.sobrenome);
        contentValues.put("EMAIL", usuario.email);
        contentValues.put("RUA", usuario.rua);
        contentValues.put("NUMERO", usuario.numero);
        contentValues.put("COMPLEMENTO", usuario.complemento);
        contentValues.put("BAIRRO", usuario.bairro);
        contentValues.put("CIDADE", usuario.cidade);
        contentValues.put("ESTADO", usuario.estado);
        contentValues.put("CEP", usuario.cep);
        contentValues.put("AREA", usuario.area);
        contentValues.put("TELEFONE", usuario.telefone);
        contentValues.put("ISCOMPLETO", usuario.iscompleto);

        String[] parametros = new String[1];
        parametros[0] = usuario.email;

        conexao.update("USUARIO", contentValues, "EMAIL = ?", parametros);
    }

    public void registroPIN(String email, String token)
    {
        ContentValues contentValues = new ContentValues();


        String[] parametros = new String[2];
        parametros[0] = email;
        parametros[1] = token;

        conexao.update("USUARIO", contentValues, "EMAIL = ?, TOKEN = ?", parametros);
    }

    public List<Usuario> listarTodosUsuarios()
    {
        List<Usuario> usuarios = new ArrayList<>();

        StringBuilder sql = new StringBuilder();

        sql.append(" SELECT PK_USUARIO, CODIGOUSUARIO, NOME, SOBRENOME, EMAIL, SENHA, RUA, NUMERO, COMPLEMENTO, BAIRRO, CIDADE, ESTADO, CEP, AREA, TELEFONE ");
        sql.append(" FROM USUARIO");

        Cursor resultado =  conexao.rawQuery(sql.toString(),null);

        if( resultado.getCount() > 0) {

            resultado.moveToFirst();

            do{
                Usuario usr = new Usuario();

                usr.pk_usuario = resultado.getInt( resultado.getColumnIndexOrThrow("PK_USUARIO") );
                usr.codigousuario = resultado.getString( resultado.getColumnIndexOrThrow("CODIGOUSUARIO") );
                usr.nome = resultado.getString( resultado.getColumnIndexOrThrow("NOME") );
                usr.sobrenome = resultado.getString( resultado.getColumnIndexOrThrow("SOBRENOME") );
                usr.email = resultado.getString( resultado.getColumnIndexOrThrow("EMAIL") );
                usr.senha = resultado.getString( resultado.getColumnIndexOrThrow("SENHA") );
                usr.rua = resultado.getString( resultado.getColumnIndexOrThrow("RUA") );
                usr.numero = resultado.getString( resultado.getColumnIndexOrThrow("NUMERO") );
                usr.complemento = resultado.getString( resultado.getColumnIndexOrThrow("COMPLEMENTO") );
                usr.bairro = resultado.getString( resultado.getColumnIndexOrThrow("BAIRRO") );
                usr.cidade = resultado.getString( resultado.getColumnIndexOrThrow("CIDADE") );
                usr.estado = resultado.getString( resultado.getColumnIndexOrThrow("ESTADO") );
                usr.cep = resultado.getString( resultado.getColumnIndexOrThrow("CEP") );
                usr.area = resultado.getString( resultado.getColumnIndexOrThrow("AREA") );
                usr.telefone = resultado.getString( resultado.getColumnIndexOrThrow("TELEFONE") );

                usuarios.add(usr);





            }while (resultado.moveToNext());



        }

        return usuarios;
    }

    public  Usuario buscarUsuario(String email)
    {

        Usuario usuario = new Usuario();

        StringBuilder sql = new StringBuilder();

        sql.append(" SELECT PK_USUARIO, CODIGOUSUARIO, NOME, SOBRENOME, EMAIL, SENHA, TOKEN, RUA, NUMERO, COMPLEMENTO, BAIRRO, CIDADE, ESTADO, CEP, AREA, TELEFONE, ISCOMPLETO ");
        sql.append(" FROM USUARIO WHERE EMAIL = ?");

        String[] parametros = new String[1];
        parametros[0] = email;

        Cursor resultado =  conexao.rawQuery(sql.toString(),parametros);


        if (resultado.getCount() > 0) {

            resultado.moveToFirst();


            usuario.pk_usuario = resultado.getInt(resultado.getColumnIndexOrThrow("PK_USUARIO"));
            usuario.codigousuario = resultado.getString(resultado.getColumnIndexOrThrow("CODIGOUSUARIO"));
            usuario.nome = resultado.getString(resultado.getColumnIndexOrThrow("NOME"));
            usuario.sobrenome = resultado.getString(resultado.getColumnIndexOrThrow("SOBRENOME"));
            usuario.email = resultado.getString(resultado.getColumnIndexOrThrow("EMAIL"));
            usuario.senha = resultado.getString(resultado.getColumnIndexOrThrow("SENHA"));
            usuario.token = resultado.getString(resultado.getColumnIndexOrThrow("TOKEN"));
            usuario.rua = resultado.getString(resultado.getColumnIndexOrThrow("RUA"));
            usuario.numero = resultado.getString(resultado.getColumnIndexOrThrow("NUMERO"));
            usuario.complemento = resultado.getString(resultado.getColumnIndexOrThrow("COMPLEMENTO"));
            usuario.bairro = resultado.getString(resultado.getColumnIndexOrThrow("BAIRRO"));
            usuario.cidade = resultado.getString(resultado.getColumnIndexOrThrow("CIDADE"));
            usuario.estado = resultado.getString(resultado.getColumnIndexOrThrow("ESTADO"));
            usuario.cep = resultado.getString(resultado.getColumnIndexOrThrow("CEP"));
            usuario.area = resultado.getString(resultado.getColumnIndexOrThrow("AREA"));
            usuario.telefone = resultado.getString(resultado.getColumnIndexOrThrow("TELEFONE"));
            usuario.iscompleto = resultado.getString(resultado.getColumnIndexOrThrow("ISCOMPLETO"));

            return usuario;
        }


        return null;
    }

    public  Usuario usuarioLocal()
    {

        Usuario usuario = new Usuario();

        StringBuilder sql = new StringBuilder();

        sql.append(" SELECT PK_USUARIO, CODIGOUSUARIO, NOME, SOBRENOME, EMAIL, SENHA, TOKEN, RUA, NUMERO, COMPLEMENTO, BAIRRO, CIDADE, ESTADO, CEP, AREA, TELEFONE, ISCOMPLETO ");
        sql.append(" FROM USUARIO ");





        Cursor resultado =  conexao.rawQuery(sql.toString(),null);
        int indiceCodigoUsuario = resultado.getColumnIndex("codigousuario");
        int indiceNomeUsuario = resultado.getColumnIndex("nome");
        int indiceEmail = resultado.getColumnIndex("email");
        int indiceSobrenome = resultado.getColumnIndex("sobrenome");
        int indiceRua = resultado.getColumnIndex("rua");
        int indiceNumero = resultado.getColumnIndex("numero");
        int indiceComplemento = resultado.getColumnIndex("complemento");
        int indiceBairro = resultado.getColumnIndex("bairro");
        int indiceCidade = resultado.getColumnIndex("cidade");
        int indiceEstado = resultado.getColumnIndex("estado");
        int indiceCep = resultado.getColumnIndex("cep");
        int indiceArea = resultado.getColumnIndex("area");
        int indiceTelefone = resultado.getColumnIndex("telefone");
        int indiceIscompleto = resultado.getColumnIndex("iscompleto");



        resultado.moveToFirst();

        while(resultado !=null && resultado.getCount() > 0)
        {


            usuario.codigousuario = resultado.getString(indiceCodigoUsuario);
            usuario.nome = resultado.getString(indiceNomeUsuario);
            usuario.email = resultado.getString(indiceEmail);
            usuario.sobrenome = resultado.getString(indiceSobrenome);
            usuario.rua = resultado.getString(indiceRua);
            usuario.numero = resultado.getString(indiceNumero);
            usuario.complemento = resultado.getString(indiceComplemento);
            usuario.bairro = resultado.getString(indiceBairro);
            usuario.cidade = resultado.getString(indiceCidade);
            usuario.estado = resultado.getString(indiceEstado);
            usuario.cep = resultado.getString(indiceCep);
            usuario.area = resultado.getString(indiceArea);
            usuario.telefone = resultado.getString(indiceTelefone);
            usuario.iscompleto = resultado.getString(indiceIscompleto);



            resultado = null;

            return usuario;
        }



        return null;
    }

    public  Usuario retornaToken(String email)
    {

        Usuario usuario = new Usuario();

        StringBuilder sql = new StringBuilder();

        sql.append(" SELECT TOKEN, SENHA FROM USUARIO WHERE EMAIL = ?");

        String[] parametros = new String[1];
        parametros[0] = email;

        Cursor resultado =  conexao.rawQuery(sql.toString(),parametros);


        if (resultado.getCount() > 0) {

            resultado.moveToFirst();


             usuario.senha = resultado.getString(resultado.getColumnIndexOrThrow("SENHA"));
             usuario.token = resultado.getString(resultado.getColumnIndexOrThrow("TOKEN"));

            return usuario;
        }


        return null;
    }

    public  boolean usuarioExists()
    {

        Usuario usuario = new Usuario();

        StringBuilder sql = new StringBuilder();

        sql.append(" SELECT TOKEN ");
        sql.append(" FROM USUARIO");



        Cursor resultado =  conexao.rawQuery(sql.toString(),null);


        if (resultado.getCount() > 0) {


            return true;
        }


        return false;
    }
}
