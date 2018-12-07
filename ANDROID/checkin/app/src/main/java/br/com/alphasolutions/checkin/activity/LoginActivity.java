package br.com.alphasolutions.checkin.activity;

import android.Manifest;
import android.app.Activity;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.pm.ActivityInfo;
import android.content.pm.PackageManager;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.graphics.Typeface;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
//import android.support.v7.appcompat.BuildConfig;
import android.text.TextUtils;
import android.util.Log;
import android.util.Patterns;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

import com.facebook.AccessToken;
import com.facebook.CallbackManager;
import com.facebook.FacebookCallback;
import com.facebook.FacebookException;
import com.facebook.FacebookSdk;
import com.facebook.GraphRequest;
import com.facebook.GraphResponse;
import com.facebook.LoggingBehavior;
import com.facebook.Profile;
import com.facebook.login.LoginManager;
import com.facebook.login.LoginResult;
import com.facebook.login.widget.LoginButton;
import com.google.gson.JsonIOException;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import org.json.JSONException;
import org.json.JSONObject;
import org.w3c.dom.Text;

import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.util.Arrays;

import adapter.Permissao;
import br.com.alphasolutions.checkin.R;
import database.Conversores;
import database.DadosOpenHelper;
import database.MyAES;
import dominio.entidades.Usuario;
import dominio.repositorio.UsuarioRepositorio;

// AppCompatActivity
public class LoginActivity extends Activity {


    private String[] permissoesNecessarias = new String[]{
            Manifest.permission.ACCESS_FINE_LOCATION};


    private EditText textoEmail;
    private EditText textoSenha;
    private Button botaoAcessar;
    private ProgressBar progressLoginBar;
    private LoginButton loginButton;
    private CallbackManager callbackManager;
    private TextView semconta;
    private TextView esquecisenha;
    private TextView soulojista;
    private TextView informacao;
    private TextView localize;



    private AccessToken accessToken;


    private Usuario usuario;
    private UsuarioRepositorio usuarioRepositorio;


    private SQLiteDatabase conexao;
    private DadosOpenHelper dadosOpenHelper;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        this.setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);

        Permissao.validaPermissoes(1,this,permissoesNecessarias);


        Typeface myCustomFont = Typeface.createFromAsset(getAssets(), "fonts/Raleway-SemiBold.ttf");
        Typeface myCustomFont3 = Typeface.createFromAsset(getAssets(), "fonts/Quicksand-Regular.ttf");

        textoEmail = (EditText) findViewById(R.id.txtEmailUserId);
        textoSenha = (EditText) findViewById(R.id.txtSenha);
        botaoAcessar = (Button) findViewById(R.id.btnAcessar);
        progressLoginBar = (ProgressBar) findViewById(R.id.progressLoginId);
        semconta = (TextView) findViewById(R.id.txtSemConta);
        esquecisenha = (TextView) findViewById(R.id.txtEsqueciSenha);
        soulojista = (TextView) findViewById(R.id.textViewLojista);
        informacao = (TextView) findViewById(R.id.textViewinfor);
        localize = (TextView) findViewById(R.id.textViewLocalize);


        progressLoginBar.setVisibility(progressLoginBar.INVISIBLE);


        textoEmail.setTypeface(myCustomFont);
        textoSenha.setTypeface(myCustomFont);
        botaoAcessar.setTypeface(myCustomFont);
        informacao.setTypeface(myCustomFont3);
        semconta.setTypeface(myCustomFont3);
        localize.setTypeface(myCustomFont3);
        esquecisenha.setTypeface(myCustomFont3);
        soulojista.setTypeface(myCustomFont3);

        //Estabelece conexao com banco de dados local
        criarConexao();

        //carrega dados do servidor e atualiza bando de dados local
        botaoAcessar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                //Verifica e Carrega dados do usuario.

                if( !validaCampos())
                    lerUsuario();
                else
                    mensagemValidacaoCampos();


            }
        });



        // LOGIN FACEBOOK
        FacebookSdk.getApplicationName();
        //FacebookSdk.sdkInitialize(getApplication());
        FacebookSdk.sdkInitialize(getApplicationContext());
/*
        if (BuildConfig.DEBUG) {
            FacebookSdk.setIsDebugEnabled(true);
            FacebookSdk.addLoggingBehavior(LoggingBehavior.INCLUDE_ACCESS_TOKENS);
        }

*/

        FacebookSdk.addLoggingBehavior(LoggingBehavior.INCLUDE_ACCESS_TOKENS);
        loginButton = (LoginButton) findViewById(R.id.loginButtonID);
        loginButton.setReadPermissions(Arrays.asList("public_profile", "email", "user_friends"));
        //loginButton.setReadPermissions("email");


        callbackManager = CallbackManager.Factory.create();




        // BOTAO LOGIN FACE
        loginButton.registerCallback(callbackManager, new FacebookCallback<LoginResult>(){
            @Override
            public void onSuccess(LoginResult loginResult) {


                GraphRequest request = GraphRequest.newMeRequest(
                        loginResult.getAccessToken(),
                        new GraphRequest.GraphJSONObjectCallback() {
                            @Override
                            public void onCompleted(
                                    JSONObject object,
                                    GraphResponse response) {

                                // Application code
                                usuario = new Usuario();

                                try {


                                    usuario.nome =  object.getString("name").toString();
                                    usuario.nome = usuario.nome.substring(0, usuario.nome.indexOf(" "));
                                    usuario.sobrenome = object.getString("name").toString().substring(object.getString("name").toString().indexOf(" ") + 1, object.getString("name").toString().length());
                /*
                                    usuario.nome = object.getString("first_name").toString();
                                    usuario.sobrenome = object.getString("last_name").toString();
                                    */
                                    usuario.email = object.getString("email").toString();


                                   // usuarioRepositorio.inserir(usuario);

                                    // VERIFICA SE INSERE NO BANCO DE DADOS
                                    try {

                                        insere_usuario_db();


                                    } catch (Exception e) {
                                        e.printStackTrace();
                                    }

                                } catch (JSONException e) {
                                    e.printStackTrace();
                                }
                                Log.e("GraphResponse", "-------------" + response.toString());


                            }
                        });

                Bundle parameters = new Bundle();
                parameters.putString("fields", "name, email");
                request.setParameters(parameters);
                request.executeAsync();


                //Carrega Lista de clientes do checkin cash
                Intent intent = new Intent(getApplicationContext(), SplashActivity.class);
                startActivity(intent);
                finish();

            }

            @Override
            public void onCancel() {

            }

            @Override
            public void onError(FacebookException error) {

            }
        });
    }

    /*
    @Override
    protected void onStart() {
        super.onStart();

        AccessToken accessToken = AccessToken.getCurrentAccessToken();



        if(accessToken != null ) {


            GraphRequest request = GraphRequest.newMeRequest(accessToken, new GraphRequest.GraphJSONObjectCallback() {
                @Override
                public void onCompleted(JSONObject object, GraphResponse response) {

                    try {

                        usuario = new Usuario();

                        usuario.nome = object.getString("name").toString();
                        usuario.nome = usuario.nome.substring(0, usuario.nome.indexOf(" "));
                        usuario.sobrenome = object.getString("name").toString().substring(object.getString("name").toString().indexOf(" ") + 1, object.getString("name").toString().length());
                        usuario.email = object.getString("email").toString();
                        textoEmail.setText(usuario.email);



                    } catch (JSONException e) {
                        Toast.makeText(getApplicationContext(), e.getMessage(), Toast.LENGTH_SHORT).show();
                    }


                    try
                    {
                        insere_usuario_db();

                    }
                    catch(Exception e1)
                    {
                        Toast.makeText(getApplicationContext(), e1.getMessage(), Toast.LENGTH_SHORT).show();
                    }


                    //Carrega Lista de clientes do checkin cash
                    Intent intent = new Intent(getApplicationContext(), SplashActivity.class);
                    startActivity(intent);
                    finish();

                }
            });

            Bundle parameters = new Bundle();
            parameters.putString("fields", "name, email");
            request.setParameters(parameters);
            request.executeAsync();




        }


    }

    */




    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);
        callbackManager.onActivityResult(requestCode,resultCode,data);
    }



    public void onRequestPermissionsResult(int requestCode, String[] permissions, int[] grantResults){
        super.onRequestPermissionsResult(requestCode, permissions, grantResults);

        for(int resultado : grantResults){

            if ( resultado == PackageManager.PERMISSION_DENIED){
                alertaValidacaoPermissao();
            }
        }
    }


    private void alertaValidacaoPermissao(){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle("Permissões Negadas");
        builder.setMessage("Para utilizar o CHECK-IN cash você precisa permitir o acesso à sua localização");

        builder.setPositiveButton("CONFIRMAR", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                finish();
            }
        });

        AlertDialog dialog = builder.create();
        dialog.show();

    }


    // Metodo invocado ao se clicar na opcao "nao tem conta? cadastre-se"
    public void cadastrarUsuario(View view)
    {

        Intent intent = new Intent(LoginActivity.this, CadastroActivity.class);
        startActivity(intent);
    }

    // Metodo invocado ao se clicar na opcao "esqueci minha senha"
    public void recuperarSenha(View view)
    {

        Intent intent = new Intent(LoginActivity.this, RecuperaSenhaActivity.class);
        startActivity(intent);
    }

    // Metodo invocado ao se clicar na opcao "sou lojista"
    public void souLojista(View view)
    {

        Intent intent = new Intent(LoginActivity.this, LoginlojistaActivity.class);
        startActivity(intent);
    }

    //Conexao Sqlite
    private void criarConexao()
    {
        try
        {

            dadosOpenHelper = new DadosOpenHelper(this);

            conexao = dadosOpenHelper.getWritableDatabase();

            usuarioRepositorio = new UsuarioRepositorio(conexao);

        }
        catch (SQLException ex)
        {

            AlertDialog.Builder builder = new AlertDialog.Builder(this);
            builder.setTitle(R.string.mensagem_titulo_erro);
            builder.setMessage(ex.getMessage());

            builder.setPositiveButton(R.string.mensagem_ok, new DialogInterface.OnClickListener() {
                @Override
                public void onClick(DialogInterface dialogInterface, int i) {
                    finish();
                }
            });

            AlertDialog dialog = builder.create();
            dialog.show();

        }
    }

    private void lerUsuario()
    {

        progressLoginBar.setVisibility(progressLoginBar.VISIBLE);

        usuario = new Usuario();
        usuario.email = textoEmail.getText().toString();

        usuarioRepositorio = new UsuarioRepositorio(conexao);


        String URL = "https://www.checkincash.com.br/conn/recupera_usuario.php";

        try {
            Ion.with(getBaseContext())
                    .load(URL)
                    .setBodyParameter("pemail", usuario.email )
                    .asJsonObject()
                    .setCallback(new FutureCallback<JsonObject>() {
                        @Override
                        public void onCompleted(Exception e, JsonObject result) {
                            if (result == null) {

                                Toast.makeText(getApplicationContext(), "Problemas com a internet, verifique ou tente mais tarde!", Toast.LENGTH_SHORT).show();

                            } else {
                                if (result.get("retorno").getAsString().equals("YES")) {
                                    usuario.codigousuario = result.get("pk_usuario").getAsString();
                                    usuario.senha = result.get("senha").getAsString();
                                    usuario.nome = result.get("nome").getAsString().toUpperCase();
                                    usuario.sobrenome = result.get("sobrenome").getAsString().toUpperCase();
                                    usuario.area = result.get("codigoarea").getAsString();
                                    usuario.telefone = result.get("celular").getAsString();
                                    usuario.rua = result.get("rua").getAsString().toUpperCase();
                                    usuario.numero = result.get("numero").getAsString();
                                    usuario.complemento = result.get("complemento").getAsString().toUpperCase();
                                    usuario.bairro = result.get("bairro").getAsString().toUpperCase();
                                    usuario.cidade = result.get("cidade").getAsString().toUpperCase();
                                    usuario.estado = result.get("estado").getAsString().toUpperCase();
                                    usuario.cep = result.get("cep").getAsString();
                                    usuario.iscompleto = result.get("iscompleto").getAsString();

                                    //Verifica se a senha do usuário é valida antes de incluir
                                    try {
                                        checaCredenciais();
                                    } catch (Exception e1) {
                                        Toast.makeText(getApplicationContext(), e1.getMessage(), Toast.LENGTH_SHORT).show();
                                    }
                                } else {
                                    Toast.makeText(getApplicationContext(), "Email não registrado na base de dados..", Toast.LENGTH_SHORT).show();
                                }

                                progressLoginBar.setVisibility(progressLoginBar.INVISIBLE);
                            }
                        }
                    });


        }
        catch (JsonIOException e)
        {
            AlertDialog.Builder dlg = new AlertDialog.Builder(this);
            dlg.setTitle("ERRO AO CONECTAR AO BANCO DADOS");
            dlg.setMessage(e.getMessage().toString());
            dlg.setNeutralButton(R.string.mensagem_ok,null);
            dlg.show();
        }




    }

    private void checaCredenciais() throws Exception {

        /*
        MyAES cr = new MyAES();

        //TRASNFORMA A SENHA DIGITADA EM HEXA
        String senhaDG = Conversores.converteByteArrayToHexString(  Conversores.converteASCIIparaByteArray(textoSenha.getText().toString(), true));
        //DECRIPOTOGRAFA SENHA DO BANCO PARA HEXA
        String senhaDB =  cr.desencriptar(usuario.senha.toString());
        */

        String senhaDG = md5(textoSenha.getText().toString());
        String senhaDB = usuario.senha.toString();

        if( senhaDG.trim().equals(senhaDB.trim()))
        {
            //Inclui o usuario na base de dados local
            usuarioRepositorio.inserir(usuario);

            //Carrega Lista de clientes do checkin cash
            Intent intent = new Intent(getApplicationContext(), SplashActivity.class);
            startActivity(intent);
            finish();
        }
        else
        {
            Toast.makeText(getApplicationContext(), usuario.nome + ", " + "sua senha esta inválida", Toast.LENGTH_SHORT).show();

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

    private void mensagemValidacaoCampos()
    {
        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle(R.string.titulo_login);
        builder.setMessage(R.string.mensagem_campos_invalidos_formulario);
        builder.setNeutralButton(R.string.mensagem_ok,null);


        AlertDialog dialog = builder.create();
        dialog.show();
    }


    private void alertaDadosNaoEncontrado()
    {
        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle(R.string.titulo_login);
        builder.setMessage(R.string.mesagem_email_nao_licalizado_na_base);
        builder.setNeutralButton(R.string.mensagem_ok,null);


        AlertDialog dialog = builder.create();
        dialog.show();
    }

    private boolean validaCampos()
    {
        boolean res = false;

        String email = textoEmail.getText().toString();
        String senha = textoSenha.getText().toString();

        if (res = !isEmailValido(email)) {
            textoEmail.requestFocus();
        }
        else if (res = isCampoVazio(senha)) {
            textoSenha.requestFocus();
        }


        return  res;

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



    // metodo utilizado quando feito login pelo facebook
    private void insere_usuario_db() throws Exception {

        MyAES cr = new MyAES();

        String senhaConvertidaemHexa = Conversores.converteByteArrayToHexString(
                Conversores.converteASCIIparaByteArray("facebook", true)
        );


        textoSenha.setText("facebook");
        textoEmail.setText(usuario.email);

        usuario.senha = cr.encriptar(senhaConvertidaemHexa);

        usuarioRepositorio = new UsuarioRepositorio(conexao);

        try
        {


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
                                   Toast.makeText(getApplicationContext(), usuario.nome + ", você reativado", Toast.LENGTH_SHORT).show();

                                   /*
                                    * Recupera os dados do usuario inserido no banco de dados para
                                    * ser gravado no banco local.
                                    * */

                                lerUsuario();
                            }
                            else
                                {
                                if (result.get("retorno").getAsString().equals("YES"))
                                {


                                    Toast.makeText(getApplicationContext(), "usuário registrado...", Toast.LENGTH_SHORT).show();


                                    /*
                                    * Recupera os dados do usuario inserido no banco de dados para
                                    * ser gravado no banco local.
                                    * */
                                    lerUsuario();


                                } else {
                                    Toast.makeText(getApplicationContext(), "impossível incluir dados", Toast.LENGTH_SHORT).show();
                                }
                            }


                        }
                    });


        }
        catch (JsonIOException e)
        {
            e.printStackTrace();
        }
    }


}
