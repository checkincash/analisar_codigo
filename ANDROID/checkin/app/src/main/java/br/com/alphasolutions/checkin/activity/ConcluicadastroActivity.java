package br.com.alphasolutions.checkin.activity;

import android.content.SharedPreferences;
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

import br.com.alphasolutions.checkin.R;
import database.DadosOpenHelper;
import dominio.entidades.Usuario;
import dominio.repositorio.UsuarioRepositorio;

public class ConcluicadastroActivity extends AppCompatActivity {

    private TextView titulocabe;
    private EditText nome;
    private EditText sobrenome;

    private EditText email;
    private EditText endereco;
    private EditText numero;
    private EditText complemento;
    private EditText bairro;
    private EditText cidade;
    private EditText estado;
    private EditText cep;
    private String isCompleto;
    private Button btnAtualizar;
    private ProgressBar progressBar;
    private UsuarioRepositorio usuarioRepositorio;
    private Usuario usuario;

    private SQLiteDatabase conexao;
    private DadosOpenHelper dadosOpenHelper;

    private static final String ARQUIVO_PREFERENCIA = "ArquivoPreferencia";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_concluicadastro);


        this.setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);

        titulocabe = (TextView) findViewById(R.id.txttitulocabe);




        Typeface myCustomFont = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Raleway-SemiBold.ttf");
        Typeface myCustomFont2 = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Raleway-Regular.ttf");
        Typeface myCustomFont3 = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Quicksand-Regular.ttf");

        titulocabe.setTypeface(myCustomFont);
       // btnAtualizar.setTypeface(myCustomFont);

        nome = (EditText) findViewById(R.id.txtnome);
        sobrenome = (EditText) findViewById(R.id.txtsobrenomeend);

        email = (EditText) findViewById(R.id.txtemail);
        endereco = (EditText) findViewById(R.id.txtendereco);
        numero = (EditText) findViewById(R.id.txtnumeroend);
        complemento = (EditText) findViewById(R.id.txtcomplemento);
        bairro = (EditText) findViewById(R.id.txtbairroend);
        cidade = (EditText) findViewById(R.id.txtcidadeend);
        estado = (EditText) findViewById(R.id.txtestadoend);
        cep = (EditText) findViewById(R.id.txtcepend);


        nome.setTypeface(myCustomFont);
        sobrenome.setTypeface(myCustomFont);
        email.setTypeface(myCustomFont);
        endereco.setTypeface(myCustomFont);
        numero.setTypeface(myCustomFont);
        complemento.setTypeface(myCustomFont);
        bairro.setTypeface(myCustomFont);
        cidade.setTypeface(myCustomFont);
        estado.setTypeface(myCustomFont);
        cep.setTypeface(myCustomFont);


        progressBar = (ProgressBar) findViewById(R.id.progressBarCad);
        progressBar.setVisibility(View.INVISIBLE);


        email.setEnabled(false);


        criarConexao();

        lerUsuario();


        btnAtualizar= (Button) findViewById(R.id.btnatualizarend);

        btnAtualizar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                if( !validaCampos() )
                {
                     alterarCadastro();
                }
                else
                {
                   cadastroErro();
                }

            }
        });





    }
    private boolean validaCampos() {


        boolean res = false;


        if(res = isCampoVazio(nome.getText().toString()))
        {
            nome.requestFocus();
        } else if (res = isCampoVazio(sobrenome.getText().toString())){
            sobrenome.requestFocus();
        } else if ( res = isCampoVazio(endereco.getText().toString())){
            endereco.requestFocus();
        } else if ( res = isCampoVazio(numero.getText().toString())){
            numero.requestFocus();
        } else if(res = isCampoVazio(complemento.getText().toString())){
            complemento.requestFocus();
        }
        else if ( res = isCampoVazio(bairro.getText().toString())){
            bairro.requestFocus();
        } else if ( res = isCampoVazio(cidade.getText().toString())){
            cidade.requestFocus();
        } else if( res = isCampoVazio(estado.getText().toString())){
            estado.requestFocus();
        } else if ( res = isCampoVazio(cep.getText().toString())){
            cep.requestFocus();
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

    private void alterarCadastro()
    {

        usuario = new Usuario();
        usuario.email = email.getText().toString();

        usuarioRepositorio = new UsuarioRepositorio(conexao);

        progressBar.setVisibility(View.VISIBLE);

        String URL = "https://www.checkincash.com.br/conn/alterar_dados_usuario.php";

        String txemail = email.getText().toString().toLowerCase();
        String txnome = nome.getText().toString().toUpperCase();
        String txsobrenome = sobrenome.getText().toString().toUpperCase();
        String txcep = cep.getText().toString();
        String txendereco = endereco.getText().toString().toUpperCase();
        String txnumero = numero.getText().toString();
        String txcomplemento = complemento.getText().toString().toUpperCase();
        String txbairro =  bairro.getText().toString().toUpperCase();
        String txcidade = cidade.getText().toString().toUpperCase();
        String txestado = estado.getText().toString().toUpperCase();

        Ion.with(getBaseContext())
                .load(URL)
                .setBodyParameter("pemail", txemail)
                .setBodyParameter("pnome", txnome)
                .setBodyParameter("psobrenome", txsobrenome)
                .setBodyParameter("pcep", txcep)
                .setBodyParameter("prua", txendereco)
                .setBodyParameter("pnumero", txnumero)
                .setBodyParameter("pcomplemento", txcomplemento)
                .setBodyParameter("pbairro", txbairro)
                .setBodyParameter("pcidade", txcidade)
                .setBodyParameter("pestado", txestado)
                .asJsonObject()
                .setCallback(new FutureCallback<JsonObject>() {
                    @Override
                    public void onCompleted(Exception e, JsonObject result) {
                        if (result.get("retorno").getAsString().equals("YES")) {
                            usuario.nome = nome.getText().toString().toUpperCase();
                            usuario.sobrenome = sobrenome.getText().toString().toUpperCase();
                            usuario.rua = endereco.getText().toString().toUpperCase();
                            usuario.numero = numero.getText().toString();
                            usuario.complemento = complemento.getText().toString().toUpperCase();
                            usuario.bairro = bairro.getText().toString().toUpperCase();
                            usuario.cidade = cidade.getText().toString().toUpperCase();
                            usuario.estado = estado.getText().toString().toUpperCase();
                            usuario.cep = cep.getText().toString().toUpperCase();
                            usuario.iscompleto = "1";


                            usuarioRepositorio.alterar(usuario);


                            Toast.makeText(getApplicationContext(), "Cadastro atualizado..", Toast.LENGTH_SHORT).show();


                        } else {
                            Toast.makeText(getApplicationContext(), "Erro ao atualizar cadastro", Toast.LENGTH_SHORT).show();
                            finish();
                        }


                        progressBar.setVisibility(View.INVISIBLE);

                        finish();
                    }


                });

    }

    private void lerUsuario()
    {


        Usuario local = usuarioRepositorio.usuarioLocal();

        nome.setText(local.nome);
        sobrenome.setText(local.sobrenome);
        email.setText(local.email);


        String iscompl = (local.iscompleto == "1" ? "1":"0");


        if( iscompl.equals("1") ) {
            cep.setText(local.cep);
            endereco.setText(local.rua);
            numero.setText(local.numero);
            complemento.setText(local.complemento);
            bairro.setText(local.bairro);
            cidade.setText(local.cidade);
            estado.setText(local.estado);
            isCompleto = local.iscompleto;
        }
        else
        {

            lerUsuariodb();

        }



    }

    private void lerUsuariodb()
    {

        progressBar.setVisibility(View.VISIBLE);



        String URL = "https://www.checkincash.com.br/conn/recupera_usuario.php";

        try {
            Ion.with(getBaseContext())
                    .load(URL)
                    .setBodyParameter("pemail", email.getText().toString() )
                    .asJsonObject()
                    .setCallback(new FutureCallback<JsonObject>() {
                        @Override
                        public void onCompleted(Exception e, JsonObject result) {
                            if(result.get("retorno").getAsString().equals("YES"))
                            {
                                endereco.setText( result.get("rua").getAsString().toUpperCase());
                                numero.setText(result.get("numero").getAsString());
                                complemento.setText(result.get("complemento").getAsString().toUpperCase());
                                bairro.setText( result.get("bairro").getAsString().toUpperCase());
                                cidade.setText(result.get("cidade").getAsString().toUpperCase());
                                estado.setText( result.get("estado").getAsString().toUpperCase());
                                cep.setText( result.get("cep").getAsString());
                                isCompleto  = result.get("iscompleto").getAsString();

                                if( endereco.getText().length() == 1)
                                {
                                    endereco.setText("");
                                }

                                if( numero.getText().length() == 1)
                                {
                                    numero.setText("");
                                }

                                if( complemento.getText().length() == 1)
                                {
                                    complemento.setText("");
                                }

                                if( bairro.getText().length() == 1)
                                {
                                    bairro.setText("");
                                }

                                if( cidade.getText().length() == 1)
                                {
                                    cidade.setText("");
                                }

                                if( estado.getText().length() == 1)
                                {
                                    estado.setText("");
                                }

                                if( cep.getText().length() == 1)
                                {
                                    cep.setText("");
                                }

                            }
                            else
                            {
                                Toast.makeText(getApplicationContext(), "Email não registrado na base de dados..", Toast.LENGTH_SHORT).show();
                            }

                            progressBar.setVisibility(progressBar.INVISIBLE);
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

    private void cadastroErro(){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle("CADASTRO DE USUARIO");
        builder.setMessage(R.string.mensagem_campos_invalidos_formulario);
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



}
