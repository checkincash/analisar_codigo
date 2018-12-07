package br.com.alphasolutions.checkin.activity;

import android.content.DialogInterface;
import android.content.Intent;
import android.content.pm.ActivityInfo;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.graphics.Typeface;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Patterns;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

import com.google.gson.JsonIOException;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

import br.com.alphasolutions.checkin.R;
import database.Conversores;
import database.DadosOpenHelper;
import database.MyAES;
import dominio.entidades.Usuario;
import dominio.repositorio.UsuarioRepositorio;
import email.SendMail;

public class CadastroActivity extends AppCompatActivity {

    private EditText textoNome;
    private EditText textoSobrenome;
    private EditText textoEmail;
    private EditText textoEmailRedigite;
    private EditText textoSenha;
    private EditText textoSenhaRedigite;
    private TextView titulocabe;
    private Button botaoCadastrar;
    private TextView mensagemconta;

    private Usuario usuario;
    private UsuarioRepositorio usuarioRepositorio;
    private SQLiteDatabase conexao;
    private DadosOpenHelper dadosOpenHelper;
    private Boolean isSucess = false;
    private ProgressBar progressbar;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cadastro);

        this.setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);

        textoNome = (EditText) findViewById(R.id.txtnome);
        textoSobrenome = (EditText) findViewById(R.id.txtAlteraSenhaSobrenomeId);
        textoEmail = (EditText) findViewById(R.id.txtEmailUserId);
        textoEmailRedigite = (EditText) findViewById(R.id.txtEmailRedigite);
        textoSenha = (EditText) findViewById(R.id.txtSenha);
        textoSenhaRedigite = (EditText) findViewById(R.id.txtSenhaRedigite);
        botaoCadastrar = (Button) findViewById(R.id.btnGravar);
        titulocabe = (TextView) findViewById(R.id.txtimgtop);
        mensagemconta = (TextView) findViewById(R.id.txtPossueConta);

        progressbar     = (ProgressBar) findViewById(R.id.progressBarID);
        progressbar.setVisibility(progressbar.INVISIBLE);



        Typeface myCustomFont = Typeface.createFromAsset(getAssets(), "fonts/Raleway-SemiBold.ttf");
        Typeface myCustomFont3 = Typeface.createFromAsset(getAssets(), "fonts/Quicksand-Regular.ttf");

        titulocabe.setTypeface(myCustomFont);

        botaoCadastrar.setTypeface(myCustomFont);
        textoNome.setTypeface(myCustomFont);
        textoSobrenome.setTypeface(myCustomFont);
        textoEmail.setTypeface(myCustomFont);
        textoEmailRedigite.setTypeface(myCustomFont);
        textoSenha.setTypeface(myCustomFont);
        textoSenhaRedigite.setTypeface(myCustomFont);
        mensagemconta.setTypeface(myCustomFont3);

        //ESTABELECE CONEXAO COM O BANCO DE DADOS SQLITE
        criarConexao();

        botaoCadastrar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

           if( validaCampos() )
           {


               try {
                   insere_usuario_db();
               } catch (Exception e) {
                   Toast.makeText(getApplicationContext(), e.getMessage(), Toast.LENGTH_SHORT).show();
               }


           }

            }
        });



    }

    // Caso o usuário click sobre o texto "Já tem conta? faça o login!
    public void tenhoConta(View view){

        Intent intent = new Intent(CadastroActivity.this, LoginActivity.class);
        startActivity(intent);
    }




    private boolean validaCampos()
    {

        boolean res = false;

        String nome = textoNome.getText().toString();
        String sobrenome = textoSobrenome.getText().toString();
        String email = textoEmail.getText().toString();
        String emailRedigite = textoEmailRedigite.getText().toString();
        String senha = textoSenha.getText().toString();
        String senhaRedigite = textoSenhaRedigite.getText().toString();

        if (res = isCampoVazio(nome)) {
            textoNome.requestFocus();
        } else if (res = isCampoVazio(sobrenome)) {
            textoSobrenome.requestFocus();
        } else if (res = !isEmailValido(email)) {
            textoEmail.requestFocus();
        } else if (res = !isEmailValido(emailRedigite)) {
            textoEmailRedigite.requestFocus();
        } else if (res = isCampoVazio(senha)) {
            textoSenha.requestFocus();
        } else if (res =isCampoVazio(senhaRedigite)) {
            textoSenhaRedigite.requestFocus();
        }

        if( !senha.trim().equals(senhaRedigite.trim())   )
        {

            textoSenha.requestFocus();

            res = true;

        }

        if( senha.length() < 5)
        {
            textoSenha.requestFocus();

            res = true;
        }

        if( !email.trim().equals(emailRedigite.trim()) )
        {

            textoEmail.requestFocus();

            res = true;

        }

        if( res )
        {
            cadastroErro();
            res = false;
        }
        else
        {


            res = true;
        }



        return res;

    }

    private boolean isCampoVazio(String valor)
    {
        boolean resultado = (TextUtils.isEmpty(valor) || valor.trim().isEmpty());

        return resultado;
    }

    private boolean isEmailValido(String email)
    {
        boolean resultado = (!isCampoVazio(email) && Patterns.EMAIL_ADDRESS.matcher(email).matches());

        return resultado;
    }

    //Mensagem de alerta
    private void cadastroSucesso(){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle("CADASTRO DE USUARIO");
        builder.setMessage(R.string.mensagem_cadastro_sucesso);

        builder.setPositiveButton(R.string.mensagem_ok, new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {


                Intent intent = new Intent(getApplicationContext(), SplashActivity.class);
                startActivity(intent);
                finish();

            }
        });

        AlertDialog dialog = builder.create();
        dialog.show();

    }

    private void cadastroErro(){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle("CADASTRO DE USUARIO");
        builder.setMessage(R.string.mensagem_campos_invalidos_formulario);
        builder.setNeutralButton(R.string.mensagem_ok,null);


        AlertDialog dialog = builder.create();
        dialog.show();

    }

    private void emailJaExiste(){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle("CADASTRO DE USUARIO");
        builder.setMessage(R.string.mensagem_email_ja_existe);
        builder.setNeutralButton(R.string.mensagem_ok,null);


        AlertDialog dialog = builder.create();
        dialog.show();

    }

    private void impossivelIncluir(){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle("CADASTRO DE USUARIO");
        builder.setMessage(R.string.mensagem_impossivel_incluir);
        builder.setNeutralButton(R.string.mensagem_ok,null);


        AlertDialog dialog = builder.create();
        dialog.show();

    }


    private void criarConexao()
    {
        try
        {

            dadosOpenHelper = new DadosOpenHelper(this);

            conexao = dadosOpenHelper.getWritableDatabase();


            // Toast.makeText(getApplicationContext(), R.string.mensagem_conexao_sucesso, Toast.LENGTH_SHORT).show();

            usuarioRepositorio = new UsuarioRepositorio(conexao);

        }
        catch (SQLException ex)
        {
            AlertDialog.Builder dlg = new AlertDialog.Builder(this);
            dlg.setTitle(R.string.mensagem_titulo_erro);
            dlg.setMessage(ex.getMessage());
            dlg.setNeutralButton(R.string.mensagem_ok,null);
            dlg.show();

        }
    }



    private void insere_usuario_db() throws Exception {

        /*
        MyAES cr = new MyAES();

        String senhaConvertidaemHexa = Conversores.converteByteArrayToHexString(
                             Conversores.converteASCIIparaByteArray(textoSenha.getText().toString(), true)
        );

        */

        String senha = md5(textoSenha.getText().toString());

        usuario = new Usuario();
        usuario.nome = textoNome.getText().toString().toUpperCase();
        usuario.sobrenome = textoSobrenome.getText().toString().toUpperCase();
        usuario.email = textoEmail.getText().toString().toLowerCase();

        // usuario.senha = cr.encriptar(senhaConvertidaemHexa);


        usuario.senha = senha;

        usuarioRepositorio = new UsuarioRepositorio(conexao);

        try
        {

            progressbar.setVisibility(progressbar.VISIBLE);

            // URL
            String URL = "https://www.checkincash.com.br/conn/inserir_usuario.php";
            Ion.with(getBaseContext())
                    .load(URL)
                    .setBodyParameter("pemail", usuario.email)
                    .setBodyParameter("pnome", usuario.nome)
                    .setBodyParameter("psobrenome", usuario.sobrenome)
                    .setBodyParameter("psenha", usuario.senha)
                    .asJsonObject()
                    .setCallback(new FutureCallback<JsonObject>() {
                        @Override
                        public void onCompleted(Exception e, JsonObject result) {
                            if (result.get("retorno").getAsString().equals("JA_EXISTE")) {
                                emailJaExiste();
                            } else {
                                if (result.get("retorno").getAsString().equals("YES")) {

                                    // EFETUA O REGISTRO TAMBEM NA BASE LOCAL SQLite.
                                   // usuarioRepositorio.inserir(usuario);


                                    cadastroSucesso();


                                } else {
                                    impossivelIncluir();
                                }
                            }

                            progressbar.setVisibility(progressbar.INVISIBLE);
                        }
                    });


        }
        catch (JsonIOException e)
        {
            e.printStackTrace();
        }
    }

    public static final String md5(final String s) {
        final String MD5 = "MD5";
        try {
            // Create MD5 Hash
            MessageDigest digest = java.security.MessageDigest
                    .getInstance(MD5);
            digest.update(s.getBytes());
            byte messageDigest[] = digest.digest();

            // Create Hex String
            StringBuilder hexString = new StringBuilder();
            for (byte aMessageDigest : messageDigest) {
                String h = Integer.toHexString(0xFF & aMessageDigest);
                while (h.length() < 2)
                    h = "0" + h;
                hexString.append(h);
            }
            return hexString.toString();

        } catch (NoSuchAlgorithmException e) {
            e.printStackTrace();
        }
        return "";
    }
    public void envioEmailValidacao()
    {



        String usuarioemail = usuario.email.toString();
        String subject = "Chave de Acesso";
        String message = "Teste pelo gmail";


        //Creating SendMail object
        SendMail sm = new SendMail(this, usuarioemail, subject, message);


        //Executing sendmail to send email
        sm.execute();

    }

}
