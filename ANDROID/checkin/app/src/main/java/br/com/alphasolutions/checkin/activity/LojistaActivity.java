package br.com.alphasolutions.checkin.activity;

import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.content.pm.ActivityInfo;
import android.graphics.Typeface;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.MotionEvent;
import android.view.View;
import android.widget.Button;
import android.widget.CompoundButton;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.Switch;
import android.widget.TextView;
import android.widget.Toast;

import com.google.gson.JsonArray;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import br.com.alphasolutions.checkin.R;
import modelDB.mLocais;

public class LojistaActivity extends AppCompatActivity {

    private Switch logOnOff;
    private TextView razaoSocial;
    private String codigoLojista;
    private String nomeLoja;
    private TextView saldoLojista;
    private ProgressBar progressBar;
    private Button validar;
    private EditText token;
    private String pinMov;
    private static final String ARQUIVO_PREFERENCIA = "ArquivoPreferencia";


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_lojista);

        this.setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);

        lerPreferencias();

        logOnOff = (Switch) findViewById(R.id.swLoginID);
        razaoSocial = (TextView) findViewById(R.id.textViewLojistaRazaoID);
        validar = (Button) findViewById(R.id.buttonTokenValidar);
        token = (EditText) findViewById(R.id.editTextTokenID);
        saldoLojista = (TextView) findViewById(R.id.textViewSaldoLojista);
        progressBar = ( ProgressBar) findViewById(R.id.progressBarLojistaID);


        Typeface myCustomFont = Typeface.createFromAsset(getApplicationContext().getAssets(), "fonts/Raleway-SemiBold.ttf");
        Typeface myCustomFont2 = Typeface.createFromAsset(getApplicationContext().getAssets(), "fonts/Raleway-Regular.ttf");
        Typeface myCustomFont3 = Typeface.createFromAsset(getApplicationContext().getAssets(), "fonts/Quicksand-Regular.ttf");

        razaoSocial.setTypeface(myCustomFont);
        razaoSocial.setText(nomeLoja);


        progressBar.setVisibility(progressBar.INVISIBLE);

        // recupera saldo lojista
        recuperaSaldoLojista();

        logOnOff.setOnCheckedChangeListener(new CompoundButton.OnCheckedChangeListener() {
            @Override
            public void onCheckedChanged(CompoundButton buttonView, boolean isChecked) {
                if (!isChecked) {

                    messageLogOnOff();


                }


            }

        });

        validar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {


               if (token.length() != 6)
               {
                   tokenInvalido();
                   return;

               }
               else
                   validaToken();

            }
        });



    }

    private void recuperaSaldoLojista()
    {

        progressBar.setVisibility(progressBar.VISIBLE);

        String URL = "http://www.checkincash.com.br/conn/recupera_saldo_lojista.php";


        Ion.with(getApplicationContext())
                .load(URL)
                .setBodyParameter("pcontrato", codigoLojista)
                .asJsonArray()
                .setCallback(new FutureCallback<JsonArray>() {
                                 public void onCompleted(Exception e, JsonArray result) {


                                     if ( result == null){

                                         Toast.makeText(getApplicationContext(), "Problemas com a internet, verifique ou tente mais tarde!", Toast.LENGTH_SHORT).show();

                                     }
                                     else {

                                         if ( result.size() == 0)
                                         {

                                             Toast.makeText(getApplicationContext(), "Não foi possível localizar contrato!", Toast.LENGTH_SHORT).show();

                                             return;
                                         }

                                         for (int i = 0; i < result.size(); i++) {
                                             JsonObject obj = result.get(i).getAsJsonObject();

                                             razaoSocial.setText( obj.get("razao").getAsString());
                                             saldoLojista.setText( obj.get("pincash_saldo").getAsString());

                                         }


                                         progressBar.setVisibility(progressBar.INVISIBLE);


                                     }
                                 }
                             }



                );



    }
    private void validaToken(){



        progressBar.setVisibility(progressBar.VISIBLE);

        String URL = "http://www.checkincash.com.br/conn/movimenta_saldo.php";


        String txCodigo = codigoLojista;
        String txToken = token.getText().toString();

        Ion.with(getApplicationContext())
                .load(URL)
                .setBodyParameter("pcontrato", codigoLojista)
                .setBodyParameter("ptoken", token.getText().toString())
                .asJsonArray()
                .setCallback(new FutureCallback<JsonArray>() {
                                 public void onCompleted(Exception e, JsonArray result) {


                                     if ( result == null){

                                         Toast.makeText(getApplicationContext(), "Problemas com a internet, verifique ou tente mais tarde!", Toast.LENGTH_SHORT).show();

                                     }
                                     else {

                                         if ( result.size() == 0)
                                         {

                                             Toast.makeText(getApplicationContext(), "Este token não foi localizado", Toast.LENGTH_SHORT).show();

                                             return;
                                         }

                                         progressBar.setVisibility(progressBar.INVISIBLE);

                                         for (int i = 0; i < result.size(); i++) {
                                             JsonObject obj = result.get(i).getAsJsonObject();

                                             if( obj.get("retorno").getAsString().equals("TOKEN_NAO_PODE_SER_PROCESSADO"))
                                             {
                                                 messalemSimples( "Token não pode ser processado..." );

                                                 return;
                                             } else if (obj.get("retorno").getAsString().equals("NAO_ATUALIZOU_SALDO")){

                                                 messalemSimples( "Saldo não pode ser atualizado..." );

                                             } else if (obj.get("retorno").getAsString().equals("NO")) {

                                                 messalemSimples( "Saldo não pode ser atualizado..." );

                                             }
                                             else
                                             {
                                                 pinMov = obj.get("pin_mov").getAsString();

                                                 processa_saldo();

                                                 messalemSimples( "Processamento efetuado com sucesso!" );


                                                 limparToken();

                                             }


                                         }


                                     }
                                 }
                             }



                );


    }

    private void processa_saldo(){

            Integer qtdepin = new Integer(pinMov);
            Integer saldo = new Integer(saldoLojista.getText().toString());

            Integer resultado =  (saldo - qtdepin);

            saldoLojista.setText( resultado.toString() );




    }
    private void messageLogOnOff()
    {
        AlertDialog.Builder alertDialogBuilder = new AlertDialog.Builder(
                this);
        alertDialogBuilder.setTitle("Desconectar Sessão");
        alertDialogBuilder
                .setMessage("Pressione SIM para Desconectar!")
                .setCancelable(false)
                .setPositiveButton("Sim", new DialogInterface.OnClickListener() {
                    public void onClick(DialogInterface dialog, int id) {
                        // se sim for clicado ele fecha a
                        // activity atual
                        desconectar();
                        finish();

                    }
                })
                .setNegativeButton("Não", new DialogInterface.OnClickListener() {
                    public void onClick(DialogInterface dialog, int id) {
                        // se não for precionado ele apenas termina o dialog
                        // e fecha a janelinha
                        dialog.cancel();
                        logOnOff.setChecked(true);
                    }
                });
        AlertDialog alertDialog = alertDialogBuilder.create();
        alertDialog.show();
    }
    private void desconectar()
    {
        // grava dados do usuario logado no arquivo de preferencias

        SharedPreferences pref = getSharedPreferences(ARQUIVO_PREFERENCIA, 0);
        SharedPreferences.Editor editor = pref.edit();

        // garante que a sessão de preferencia associada ao lojista fique sem paramentros
        editor.putString("codlojista", "0");
        editor.putString("razao", " ");
        editor.putString("cnpj", "0");

        editor.commit();


        finish();
    }

    private void lerPreferencias()
    {
        SharedPreferences pref =  getApplicationContext().getSharedPreferences(ARQUIVO_PREFERENCIA, 0);


        codigoLojista = pref.getString("codlojista", "0");
        nomeLoja = pref.getString("razao", " ");



    }
    private void tokenInvalido(){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle("Token Inválido");
        builder.setMessage("Confira se a sequencia do número informado esta correta...");

        builder.setPositiveButton("ENTENDI", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                return;
            }
        });

        AlertDialog dialog = builder.create();
        dialog.show();

    }

    private void messalemSimples(String msg){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle("ATENÇÃO");
        builder.setMessage(msg);

        builder.setPositiveButton("ENTENDI", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                return;
            }
        });

        AlertDialog dialog = builder.create();
        dialog.show();

    }

    // Metodo invocado ao se clicar no campo token
    public void limparToken()
    {

        token.setText("");

    }
}
