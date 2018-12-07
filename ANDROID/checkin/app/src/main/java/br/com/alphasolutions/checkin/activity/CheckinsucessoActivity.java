package br.com.alphasolutions.checkin.activity;

import android.content.SharedPreferences;
import android.content.pm.ActivityInfo;
import android.graphics.Typeface;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;
import com.squareup.picasso.Picasso;

import java.text.DateFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;

import br.com.alphasolutions.checkin.R;

public class CheckinsucessoActivity extends AppCompatActivity {

    private ImageView foto;
    private String usuario;
    private String codigopublicacao;
    private String fotopath;
    private String validade;
    private String qtdepin;
    private String token;
    private TextView dataativacao;
    private Button  checkout;
    private ProgressBar progressBar;
    private TextView txtPins;
    private TextView tokenid;
    private TextView txtmsg1, txtmsg2, txtcodigo;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_checkinsucesso);



        this.setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);

        foto = (ImageView) findViewById(R.id.imageFotoID);
        dataativacao = (TextView) findViewById(R.id.dataAtivacaoID);
        checkout = (Button) findViewById(R.id.btnFazerCheckOutID);
        progressBar = (ProgressBar) findViewById(R.id.progressBarCheckOurID);
        tokenid = (TextView) findViewById(R.id.txtTokenID);
        txtmsg1 = (TextView) findViewById(R.id.txtmensagem1);
        txtmsg2 = (TextView) findViewById(R.id.txtMensagem2);
        txtPins = (TextView) findViewById(R.id.txtSucesschekinPin);


        txtcodigo = (TextView) findViewById(R.id.textViewCodigo);


        progressBar.setVisibility(View.INVISIBLE);



        Typeface myCustomFont = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Raleway-SemiBold.ttf");
        Typeface myCustomFont2 = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Raleway-Regular.ttf");
        Typeface myCustomFont3 = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Quicksand-Regular.ttf");

        dataativacao.setTypeface(myCustomFont);
       // tokenid.setTypeface(myCustomFont3);

        txtmsg1.setTypeface(myCustomFont);
        txtmsg2.setTypeface(myCustomFont);

        checkout.setTypeface(myCustomFont);
        txtcodigo.setTypeface(myCustomFont);



        Bundle ex = getIntent().getExtras();

        if (ex != null) {

            token = ex.getString("token");
            usuario = ex.getString("usuario");
            qtdepin = ex.getString("qtdepin");
            codigopublicacao = ex.getString("codpublicacao");
            txtmsg1.setText( ex.getString("estabelecimento"));
            fotopath = ex.getString("fotopath");
            validade = ex.getString("validade");


        }


        Picasso.with(getBaseContext()).load(fotopath).fit().into(foto);


        txtPins.setText("Parabéns, você ganhou " + qtdepin + " Pin's");

        dataativacao.setText(validade.substring(0,10));
        tokenid.setText(token);
        dataativacao.setEnabled(false);


        // inicia com o botao checkOut desabilitado
        checkout.setVisibility(View.INVISIBLE);

        // Dando um exemplo: quantos dias se passam desde 07/09/1822 até 05/06/2006?
        SimpleDateFormat out = new SimpleDateFormat("dd/MM/yyyy");

        String result = out.format(new Date());

        out.setLenient(false);
        Date d1 = null;
        try {
            d1 = out.parse (validade);
        } catch (ParseException e) {
            e.printStackTrace();
        }
        Date d2 = null;
        try {
            d2 = out.parse (result);
        } catch (ParseException e) {
            e.printStackTrace();
        }
        long dt = (d2.getTime() - d1.getTime()) + 3600000; // 1 hora para compensar horário de verão
        long dias =  (dt / 86400000L); // passaram-se 67111 dias


        if ( dias > 0 )
            checkout.setVisibility(View.VISIBLE);

        checkout.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

               checkout();
            }
        });




    }


    private void checkout()
    {

        progressBar.setVisibility(View.VISIBLE);

        String URL = "https://www.checkincash.com.br/conn/altera_status_checkin.php";


        Ion.with(getBaseContext())
                .load(URL)
                .setBodyParameter("pfkpublicador", codigopublicacao)
                .setBodyParameter("pfkusuario", usuario)
                .setBodyParameter("ptoken", token)
                .setBodyParameter("pischeckin", "0")
                .asJsonObject()
                .setCallback(new FutureCallback<JsonObject>() {
                    @Override
                    public void onCompleted(Exception e, JsonObject result) {
                        if (result.get("retorno").getAsString().equals("YES")) {
                            Toast.makeText(getApplicationContext(), "CHECK-OUT Efetuado..", Toast.LENGTH_SHORT).show();
                        } else {
                            Toast.makeText(getApplicationContext(), "Erro ao desfazer o CHECK-IN", Toast.LENGTH_SHORT).show();
                            finish();
                        }


                        progressBar.setVisibility(View.INVISIBLE);

                        finish();
                    }


                });

    }

}
