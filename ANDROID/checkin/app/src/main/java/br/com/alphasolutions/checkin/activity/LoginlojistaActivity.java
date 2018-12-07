package br.com.alphasolutions.checkin.activity;

import android.content.Intent;
import android.content.SharedPreferences;
import android.content.pm.ActivityInfo;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.Toast;

import com.google.gson.JsonArray;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

import br.com.alphasolutions.checkin.R;

public class LoginlojistaActivity extends AppCompatActivity {

    private ProgressBar progressBar;

    private EditText txtCnpj;
    private EditText senhap;
    private Button btnAcessar;
    private String senhaDB;
    private String razao;
    private String codigocontrato;
    private String cnpj;
    private static final String ARQUIVO_PREFERENCIA = "ArquivoPreferencia";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_loginlojista);

        this.setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);

        txtCnpj = (EditText) findViewById(R.id.editTextCnpj);
        senhap = (EditText) findViewById(R.id.editTextSenhaLojista);
        btnAcessar = (Button) findViewById(R.id.buttonLojistaAcessar);

        progressBar = (ProgressBar) findViewById(R.id.progressBarLojistaID);


        progressBar.setVisibility(progressBar.INVISIBLE);


        btnAcessar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                if( !validaCampos())
                    acessarLojista();
                else
                    mensagemValidacaoCampos();

            }

        });

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
        builder.setMessage(R.string.nocnpj);
        builder.setNeutralButton(R.string.mensagem_ok,null);


        AlertDialog dialog = builder.create();
        dialog.show();
    }

    private boolean isCampoVazio(String valor)
    {
        boolean resultado = (TextUtils.isEmpty(valor) || valor.trim().isEmpty());

        return resultado;
    }

    private boolean validaCampos()
    {
        boolean res = false;

        String cnpj = txtCnpj.getText().toString();
        String senha = senhap.getText().toString();

        if (res = isCampoVazio(cnpj)) {
            txtCnpj.requestFocus();
        }
        else if (res = isCampoVazio(senha)) {
            senhap.requestFocus();
        }


        return  res;

    }

    private void acessarLojista()
    {

        progressBar.setVisibility( progressBar.VISIBLE );


        String URL = "http://www.checkincash.com.br/conn/credenciais_lojista.php";





        Ion.with(getApplicationContext())
                .load(URL)
                .setBodyParameter("pcnpj", txtCnpj.getText().toString())
                .asJsonArray()
                .setCallback(new FutureCallback<JsonArray>() {
                                 public void onCompleted(Exception e, JsonArray result) {


                                     if ( result == null){

                                         Toast.makeText(getApplicationContext(), "Problemas com a internet, verifique ou tente mais tarde!", Toast.LENGTH_SHORT).show();

                                     }
                                     else {

                                         if( result.size() == 0)
                                         {
                                             progressBar.setVisibility(progressBar.INVISIBLE);

                                             alertaDadosNaoEncontrado();
                                             return;
                                         }

                                         for (int i = 0; i < result.size(); i++) {
                                             JsonObject obj = result.get(i).getAsJsonObject();

                                             razao = obj.get("razao").getAsString();
                                             senhaDB = obj.get("senha_usuario").getAsString();
                                             codigocontrato  = obj.get("pk_contrato").getAsString();
                                             cnpj = obj.get("cnpj").getAsString();


                                             String senha = md5(senhap.getText().toString()).toLowerCase();
                                             if ( senhaDB.equals(senha) )
                                             {

                                                 progressBar.setVisibility(progressBar.INVISIBLE);

                                                 seta_preferencias();
                                                 finish();

                                                 //Carrega Lista de clientes do checkin cash
                                                 Intent intent = new Intent(getApplicationContext(), SplashActivity.class);
                                                 startActivity(intent);
                                                 finish();
                                             }
                                             else
                                                 Toast.makeText(getApplicationContext(), "senha esta inválida!", Toast.LENGTH_SHORT).show();




                                         }

                                         progressBar.setVisibility(progressBar.INVISIBLE);


                                     }
                                 }

                             }



                );



    }

    private void seta_preferencias()
    {
        // grava dados do usuario logado no arquivo de preferencias

        SharedPreferences pref = getSharedPreferences(ARQUIVO_PREFERENCIA, 0);
        SharedPreferences.Editor editor = pref.edit();


        editor.putString("codlojista", codigocontrato);
        editor.putString("razao", razao);
        editor.putString("cnpj", cnpj);


        editor.commit();
    }
}
