package br.com.alphasolutions.checkin.activity;

import android.content.Intent;
import android.graphics.Typeface;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

import com.google.gson.JsonIOException;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import br.com.alphasolutions.checkin.R;

public class TokenActivity extends AppCompatActivity {

    private TextView token;
    private Button btnEnviar;
    private String email;
    private String tokendb;
    private String nome;
    private String sobrenome;
    private TextView titulocabe;
    private ProgressBar progress_BarTokenId;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_token);

        token = (TextView) findViewById(R.id.txtTokenId);
        btnEnviar = (Button) findViewById(R.id.btnEnviarTokenId);
        progress_BarTokenId = (ProgressBar) findViewById(R.id.progressBarTokenId);
        titulocabe = (TextView) findViewById(R.id.txttitulocabe);

        progress_BarTokenId.setVisibility(progress_BarTokenId.INVISIBLE);


        btnEnviar.setText("AGUARDE...");
        btnEnviar.setEnabled(false);

        Typeface myCustomFont = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Raleway-SemiBold.ttf");
        Typeface myCustomFont2 = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Raleway-Regular.ttf");
        Typeface myCustomFont3 = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Quicksand-Regular.ttf");
        titulocabe.setTypeface(myCustomFont);
        btnEnviar.setTypeface(myCustomFont);

        Bundle extra = getIntent().getExtras();

        if( extra != null ) {
            email = extra.getString("email");
        }


        // recupera o token armazenado para o usuario
        recuperarToken();

        btnEnviar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {


                    if( token.getText().toString().trim().equals(tokendb.trim()))
                    {
                        Intent intent = new Intent(getApplicationContext(), RecadastrarSenhaActivity.class);
                        intent.putExtra("email", email );
                        intent.putExtra("nome", nome );
                        intent.putExtra("sobrenome", sobrenome );
                        startActivity(intent);

                        finish();
                    }
                    else
                    {
                        Toast.makeText(getApplicationContext(), "TOKEN INVALIDO..", Toast.LENGTH_SHORT).show();
                    }



            }
        });

    }




    private void recuperarToken()
    {

        progress_BarTokenId.setVisibility(progress_BarTokenId.VISIBLE);

        String URL = "https://www.checkincash.com.br/conn/recupera_token.php";

        try {
            Ion.with(getBaseContext())
                    .load(URL)
                    .setBodyParameter("pemail", email )
                    .asJsonObject()
                    .setCallback(new FutureCallback<JsonObject>() {
                        @Override
                        public void onCompleted(Exception e, JsonObject result) {
                            if(result.get("retorno").getAsString().equals("YES"))
                            {
                                tokendb = result.get("token").getAsString().toString();
                                nome = result.get("nome").getAsString().toString();
                                sobrenome = result.get("sobrenome").getAsString().toString();

                                btnEnviar.setEnabled(true);
                                btnEnviar.setText("ENVIAR");
                            }
                            else
                            {
                                Toast.makeText(getApplicationContext(), "Token não registrado na base de dados..", Toast.LENGTH_SHORT).show();
                            }

                            progress_BarTokenId.setVisibility(progress_BarTokenId.INVISIBLE);

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

}
