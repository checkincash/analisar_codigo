package br.com.alphasolutions.checkin.activity;

import android.content.DialogInterface;
import android.content.Intent;
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

import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

import br.com.alphasolutions.checkin.R;
import database.Conversores;
import database.MyAES;

public class RecadastrarSenhaActivity extends AppCompatActivity {

    private TextView nome;
    private TextView sobrenome;
    private TextView email;
    private TextView titulocabe;
    private EditText senha;
    private EditText senhaRedigite;
    private Button gravar;
    private ProgressBar progressBarSenha;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_recadastrar_senha);

        nome = ( TextView) findViewById(R.id.txtNomeAlteraSenhaId);
        sobrenome = (TextView) findViewById(R.id.txtAlteraSenhaSobrenomeId);
        email = (TextView) findViewById(R.id.txtAlteraSenhaEmailId);
        senha = (EditText) findViewById(R.id.editAlteraSenhaId);
        senhaRedigite = (EditText) findViewById(R.id.editAlteraSenhaRedigiteId);
        gravar = (Button) findViewById(R.id.btnCadastrarId);
        titulocabe = (TextView)  findViewById(R.id.txttitulocabe);

        progressBarSenha = (ProgressBar) findViewById(R.id.progressBarAlteraSenhaId);

        progressBarSenha.setVisibility(progressBarSenha.INVISIBLE);


        Typeface myCustomFont = Typeface.createFromAsset(getAssets(), "fonts/Raleway-SemiBold.ttf");
        Typeface myCustomFont3 = Typeface.createFromAsset(getAssets(), "fonts/Quicksand-Regular.ttf");

        titulocabe.setTypeface(myCustomFont);
        nome.setTypeface(myCustomFont);
        sobrenome.setTypeface(myCustomFont);
        email.setTypeface(myCustomFont);
        senha.setTypeface(myCustomFont);
        senhaRedigite.setTypeface(myCustomFont);


        gravar.setTypeface(myCustomFont);

        Bundle extra = getIntent().getExtras();

        if( extra != null ) {
            email.setText( extra.getString("email"));
            nome.setText(  extra.getString("nome") );
            sobrenome.setText( extra.getString("sobrenome") );
        }

        gravar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if( validaCampos() )
                {

                    try {
                        registrarNovaSenha();
                    } catch (Exception e) {
                        Toast.makeText(getApplicationContext(), e.getMessage(), Toast.LENGTH_SHORT).show();
                    }


                }

            }
        });



    }


    private boolean validaCampos()
    {

        boolean res = false;

        String lnome = nome.getText().toString();
        String lsobrenome = sobrenome.getText().toString();
        String lemail = email.getText().toString();
        String lsenha = senha.getText().toString();
        String lsenhaRedigite = senhaRedigite.getText().toString();

        if (res = isCampoVazio(lnome)) {
            nome.requestFocus();
        } else if (res = isCampoVazio(lsobrenome)) {
            sobrenome.requestFocus();
        } else if (res = !isEmailValido(lemail)) {
            email.requestFocus();
        } else if (res = isCampoVazio(lsenha)) {
            senha.requestFocus();
        } else if (res =isCampoVazio(lsenhaRedigite)) {
            senhaRedigite.requestFocus();
        }

        if( !lsenha.trim().equals(lsenhaRedigite.trim())   )
        {

            senha.requestFocus();

            res = true;

        }

        if( senha.length() < 5)
        {
            senha.requestFocus();

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
    private void cadastroErro(){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle(R.string.titulo_redefinir_senha);
        builder.setMessage(R.string.mensagem_campos_invalidos_formulario);
        builder.setNeutralButton(R.string.mensagem_ok,null);


        AlertDialog dialog = builder.create();
        dialog.show();

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


    private void registrarNovaSenha() throws Exception {

        /*
        MyAES cr = new MyAES();

        String senhaConvertidaemHexa = Conversores.converteByteArrayToHexString(
                Conversores.converteASCIIparaByteArray(senha.getText().toString(), true)
        );


        String senhaCrypt = cr.encriptar(senhaConvertidaemHexa);

        */

        String senhaCrypt = md5(senha.getText().toString());


        progressBarSenha.setVisibility(progressBarSenha.VISIBLE);


        // URL
        String URL = "https://www.checkincash.com.br/conn/alterar_senha.php";
        Ion.with(getBaseContext())
                .load(URL)
                .setBodyParameter("pemail", email.getText().toString().trim())
                .setBodyParameter("psenha", senhaCrypt)
                .asJsonObject()
                .setCallback(new FutureCallback<JsonObject>() {
                    @Override
                    public void onCompleted(Exception e, JsonObject result) {
                        if (result.get("retorno").getAsString().equals("NAO_EXISTE")) {
                            emailNaoExiste();
                        } else {
                            if (result.get("retorno").getAsString().equals("YES")) {

                                    cadastroSucesso();
                            }
                            else
                            {
                                impossivelIncluir();
                            }
                        }

                        progressBarSenha.setVisibility(progressBarSenha.INVISIBLE);

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

    private void emailNaoExiste(){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle(R.string.titulo_redefinir_senha);
        builder.setMessage(R.string.mesagem_email_nao_licalizado_na_base);
        builder.setNeutralButton(R.string.mensagem_ok,null);


        AlertDialog dialog = builder.create();
        dialog.show();

    }

    private void impossivelIncluir(){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle(R.string.titulo_redefinir_senha);
        builder.setMessage(R.string.mensagem_erro_incluir_alterar_senha);
        builder.setNeutralButton(R.string.mensagem_ok,null);


        AlertDialog dialog = builder.create();
        dialog.show();

    }

    private void cadastroSucesso(){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle(R.string.titulo_redefinir_senha);
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

}
