package br.com.alphasolutions.checkin.activity;

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
import com.google.gson.JsonIOException;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import java.util.Random;

import br.com.alphasolutions.checkin.R;
import email.SendMail;
import email.SendToken;

public class RecuperaSenhaActivity extends AppCompatActivity {

    private EditText txtEmail;
    private Button btnEnviar;
    private ProgressBar progressBarRecupera;
    private String nomeUsuario;
    private TextView textoesqueci;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_recupera_senha);

        txtEmail = (EditText) findViewById(R.id.txtEmailUserId);
        btnEnviar = (Button) findViewById(R.id.btnEnviarUserId);
        progressBarRecupera = (ProgressBar) findViewById(R.id.progressBarRecuperaId);
        progressBarRecupera.setVisibility(progressBarRecupera.INVISIBLE);
        textoesqueci = (TextView) findViewById(R.id.txtComunicado);


        Typeface myCustomFont = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Raleway-SemiBold.ttf");
        Typeface myCustomFont2 = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Raleway-Regular.ttf");
        Typeface myCustomFont3 = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Quicksand-Regular.ttf");

        txtEmail.setTypeface(myCustomFont);
        btnEnviar.setTypeface(myCustomFont);
        textoesqueci.setTypeface(myCustomFont3);
        btnEnviar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                if( validaCampos() )
                {
                    token();




                }
                else
                {
                    Toast.makeText(getApplicationContext(), R.string.mensagem_email_invalido, Toast.LENGTH_SHORT).show();
                }
            }
        });

    }



    private void token()
    {


        progressBarRecupera.setVisibility(progressBarRecupera.VISIBLE);

        //gerar TOKEN

        Random randomico = new Random();
        int numeroRandomico;
        numeroRandomico = randomico.nextInt(9999 - 1000) + 1000;

        final String token = String.valueOf(numeroRandomico);


        String URL = "https://www.checkincash.com.br/conn/inserir_token.php";

        try {
            Ion.with(getBaseContext())
                    .load(URL)
                    .setBodyParameter("pemail", txtEmail.getText().toString() )
                    .setBodyParameter("ppin", token )
                    .asJsonObject()
                    .setCallback(new FutureCallback<JsonObject>() {
                        @Override
                        public void onCompleted(Exception e, JsonObject result) {
                            if(result.get("retorno").getAsString().equals("YES"))
                            {

                                nomeUsuario = result.get("nome").getAsString().toString();
                                enviarToken(token);




                            }
                            else
                            {
                                Toast.makeText(getApplicationContext(), "Email não registrado na base de dados..", Toast.LENGTH_SHORT).show();
                            }

                            progressBarRecupera.setVisibility(progressBarRecupera.INVISIBLE);


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


    private void enviarToken(String token)
    {
        String usuarioemail = txtEmail.getText().toString();
        String subject = "Check-in cash | Troca de senha";
        String message = "Olá, recebemos sua notificação para troca de senha, agora faça o seguinte" +
                " insira este PIN: " + token + " em seu aplicativo para efetuar a troca de senha" +
                "";

/*
      StringBuilder mensagem = new StringBuilder();

        mensagem.append("<html>\n" +
                "\t<head>\n" +
                "\t\t<title>CHECKIN</title>\n" +
                "\t</head>\n" +
                "\t<body>\n" +
                "\t\t<div style=\"text-align: left;\">\n" +
                "\t\t\t<div style=\"font-family: Helvetica, Tahoma, Arial, sans-serif; font-size: 14.6667px; background-color: rgb(255, 255, 255);\">\n" +
                "\t\t\t\t<span style=\"font-size: 14.6667px;\">Ol&aacute;&nbsp;" + nomeUsuario +",</span></div>\n" +
                "\t\t\t<div style=\"font-family: Helvetica, Tahoma, Arial, sans-serif; font-size: 14.6667px; background-color: rgb(255, 255, 255);\">\n" +
                "\t\t\t\t&nbsp;</div>\n" +
                "\t\t\t<div style=\"font-family: Helvetica, Tahoma, Arial, sans-serif; font-size: 14.6667px; background-color: rgb(255, 255, 255);\">\n" +
                "\t\t\t\t<span style=\"font-size: 14.6667px;\">Recebemos sua notifica&ccedil;&atilde;o para troca de senha, agora fa&ccedil;a o seguinte: Insira este <strong>TOKEN</strong>: <span style=\"font-size:18px;\">"+token+"</span> em seu aplicativo para efetuar a troca de sua senha.</span></div>\n" +
                "\t\t\t<div style=\"font-family: Helvetica, Tahoma, Arial, sans-serif; font-size: 14.6667px; background-color: rgb(255, 255, 255);\">\n" +
                "\t\t\t\t&nbsp;</div>\n" +
                "\t\t\t<div style=\"font-family: Helvetica, Tahoma, Arial, sans-serif; font-size: 14.6667px; background-color: rgb(255, 255, 255);\">\n" +
                "\t\t\t\t&nbsp;</div>\n" +
                "\t\t\t<div style=\"font-family: Helvetica, Tahoma, Arial, sans-serif; font-size: 14.6667px; background-color: rgb(255, 255, 255);\">\n" +
                "\t\t\t\t&nbsp;</div>\n" +
                "\t\t\t<div style=\"font-family: Helvetica, Tahoma, Arial, sans-serif; font-size: 14.6667px; background-color: rgb(255, 255, 255);\">\n" +
                "\t\t\t\t&nbsp;</div>\n" +
                "\t\t\t<div style=\"font-family: Helvetica, Tahoma, Arial, sans-serif; font-size: 14.6667px; background-color: rgb(255, 255, 255);\">\n" +
                "\t\t\t\t<span style=\"font-size: 14.6667px;\">&nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"https://www.checkincash.com.br/imagem/checkin_logo_mail.png\" style=\"border: 0px; width: 45px; height: 56px;\" /></span></div>\n" +
                "\t\t\t<div style=\"font-family: Helvetica, Tahoma, Arial, sans-serif; font-size: 14.6667px; background-color: rgb(255, 255, 255);\">\n" +
                "\t\t\t\t<span style=\"font-size: 9px;\">CHECK-In cash &reg;</span></div>\n" +
                "\t\t\t<div style=\"font-family: Helvetica, Tahoma, Arial, sans-serif; font-size: 14.6667px; background-color: rgb(255, 255, 255);\">\n" +
                "\t\t\t\t<span style=\"font-size: 9px;\">Localize seu desconto</span></div>\n" +
                "\t\t</div>\n" +
                "\t\t<p>\n" +
                "\t\t\t&nbsp;</p>\n" +
                "\t</body>\n" +
                "</html>");


        String message = mensagem.toString();
*/
                //Envia Email com o PIN para cadastro de nova senha.
        SendToken sm = new SendToken(this, usuarioemail, subject, message);


        //Executing sendmail to send email
        sm.execute();





    }

    private void telaToken()
    {
        Intent intent = new Intent(getApplicationContext(), TokenActivity.class);
        startActivity(intent);
    }

    private boolean validaCampos()
    {
        boolean res = false;
        String email = txtEmail.getText().toString();

        if (!isEmailValido(email)) {
            txtEmail.requestFocus();
            res=false;
        }
        else
            res = true;



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





}
