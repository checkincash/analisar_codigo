package br.com.alphasolutions.checkin.activity;

import android.content.Intent;
import android.content.SharedPreferences;

import android.content.pm.ActivityInfo;
import android.graphics.Typeface;
import android.net.Uri;
import android.os.Build;
import android.os.Bundle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

import com.facebook.AccessToken;
import com.facebook.CallbackManager;
import com.facebook.FacebookCallback;
import com.facebook.FacebookException;

import com.facebook.GraphRequest;
import com.facebook.GraphResponse;
import com.facebook.HttpMethod;
import com.facebook.share.Sharer;
import com.facebook.share.model.ShareHashtag;
import com.facebook.share.model.ShareLinkContent;
import com.facebook.share.model.ShareOpenGraphAction;
import com.facebook.share.model.ShareOpenGraphContent;
import com.facebook.share.model.ShareOpenGraphObject;
import com.facebook.share.model.SharePhoto;
import com.facebook.share.model.SharePhotoContent;
import com.facebook.share.widget.ShareButton;
import com.facebook.share.widget.ShareDialog;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;
import com.squareup.picasso.Picasso;


import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;
import java.util.Random;

import br.com.alphasolutions.checkin.R;


public class FeedPublicacaoActivity extends AppCompatActivity {

    private Toolbar toolbar;
    private ListView listView;
    private TextView nomeEstabelecimento;
    private TextView endereco;
    private TextView endereco2;
    private TextView categoria;

    private TextView classificacao1;
    private TextView classificacao2;
    private TextView textoPromocional;
    private TextView txtDes1;
    private TextView txtDes2;
    private TextView txtDes3;
    private TextView telefone;

    private TextView hfuncionamento;
    private TextView fsegunda;
    private TextView fterca;
    private TextView fquarta;
    private TextView fquinta;
    private TextView fsexta;
    private TextView fsabado;
    private TextView fdomingo;

    private TextView hfuncseg;
    private TextView hfuncter;
    private TextView hfuncqua;
    private TextView hfuncqui;
    private TextView hfuncsex;
    private TextView hfuncsab;
    private TextView hfuncdom;


    private String  cnpj, fotopub, textopub;
    private String codigoId, codigousuario, idsorteio, fotopath, fotofachada, qtdepin, desconto;
    private ImageView imagemView;
    private String latitude, longitude, token, labelBotaoCheckin;
    private String clientelongitude, clientelatitude;
   // private WebView webView;
    private ProgressBar progressBar;
    private Button voltar;
    private Button meleve;
    private Button checkin;
    private CallbackManager callbackManager;
    private ShareDialog shareDialog;
    private ShareLinkContent linkContent;
    private Double distanciakm;

    private static final String ARQUIVO_PREFERENCIA = "ArquivoPreferencia";






    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_feed_publicacao);


        this.setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);


        lerPreferencias();

        imagemView = (ImageView) findViewById(R.id.imageViewFeedPublicaID);
     //   webView = (WebView) findViewById(R.id.webViewFeedID);
        progressBar = (ProgressBar) findViewById(R.id.progressBarFeedID);

        meleve = (Button) findViewById(R.id.buttonMeLeve);
        checkin = (Button) findViewById(R.id.buttonCheckin);
        distanciakm = 0.00;

        Typeface myCustomFont = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Raleway-SemiBold.ttf");
        Typeface myCustomFont2 = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Raleway-Regular.ttf");
        Typeface myCustomFont3 = Typeface.createFromAsset(getBaseContext().getAssets(), "fonts/Quicksand-Regular.ttf");


        txtDes1 = (TextView) findViewById(R.id.txtViewFeedPerDesc1ID);
        txtDes2 = (TextView) findViewById(R.id.txtViewFeedPerDesc2ID);
        txtDes3 = (TextView) findViewById(R.id.txtViewFeedPerDesc3ID);

        txtDes1.setTypeface(myCustomFont3);
        txtDes2.setTypeface(myCustomFont3);
        txtDes3.setTypeface(myCustomFont3);


        meleve.setTypeface(myCustomFont);
        checkin.setTypeface(myCustomFont);

        nomeEstabelecimento = (TextView) findViewById(R.id.txtFeedRazaoID);
        nomeEstabelecimento.setTypeface(myCustomFont);

        endereco = (TextView)  findViewById(R.id.txtFeedEnderecoID);
        endereco2 = (TextView) findViewById(R.id.txtFeedEndereco2ID);
        telefone = ( TextView) findViewById(R.id.textViewFeedTelefoneID);

        telefone.setTypeface(myCustomFont2);

        endereco.setTypeface(myCustomFont2);
        endereco2.setTypeface(myCustomFont2);

        categoria = (TextView) findViewById(R.id.txtViewFeedCategoriaID);
        classificacao1 = (TextView) findViewById(R.id.txtViewFeedClassificacao1ID);
        classificacao2 = (TextView) findViewById(R.id.txtViewFeedClassificacao2ID);

        categoria.setTypeface(myCustomFont2);
        classificacao1.setTypeface(myCustomFont2);
        classificacao2.setTypeface(myCustomFont2);

        textoPromocional = (TextView) findViewById(R.id.txtFeedPromocionalID);
        textoPromocional.setTypeface(myCustomFont);

        hfuncionamento = (TextView) findViewById(R.id.textViewFeedFuncionamento);


        fsegunda = (TextView) findViewById(R.id.textViewFeedSegID);
        fterca = (TextView) findViewById(R.id.textViewFeedTercaID);
        fquarta = (TextView) findViewById(R.id.textViewFeedQuartaId);
        fquinta = (TextView) findViewById(R.id.textViewFeedQuintaID);
        fsexta = (TextView) findViewById(R.id.textViewFeedSextaID);
        fsabado = (TextView) findViewById(R.id.textViewFeedSabadoID);
        fdomingo = (TextView) findViewById(R.id.textViewFeedDomID);

        hfuncseg = (TextView) findViewById(R.id.textViewFeedValSegID);
        hfuncter = (TextView) findViewById(R.id.textViewFeedValTerID);
        hfuncqua = (TextView) findViewById(R.id.textViewFeedValQuaID);
        hfuncqui = (TextView) findViewById(R.id.textViewFeedValQuiID);
        hfuncsex = (TextView) findViewById(R.id.textViewFeedValSexID);
        hfuncsab = (TextView) findViewById(R.id.textViewFeedValSabID);
        hfuncdom = (TextView) findViewById(R.id.textViewFeedValDomID);

        fsegunda.setTypeface(myCustomFont);
        fterca.setTypeface(myCustomFont);
        fquarta.setTypeface(myCustomFont);
        fquinta.setTypeface(myCustomFont);
        fsexta.setTypeface(myCustomFont);
        fsabado.setTypeface(myCustomFont);
        fdomingo.setTypeface(myCustomFont);

        hfuncseg.setTypeface(myCustomFont);
        hfuncter.setTypeface(myCustomFont);
        hfuncqua.setTypeface(myCustomFont);
        hfuncqui.setTypeface(myCustomFont);
        hfuncsex.setTypeface(myCustomFont);
        hfuncsab.setTypeface(myCustomFont);
        hfuncdom.setTypeface(myCustomFont);



        hfuncionamento.setTypeface(myCustomFont);

        //recupera dados enviados da intent


        Bundle ex = getIntent().getExtras();

        if (ex != null) {

            codigoId = ex.getString("codigoId");
            idsorteio = ex.getString( "idsorteio");
            qtdepin = ex.getString( "qtdepin");
            desconto = ex.getString( "desconto");
            nomeEstabelecimento.setText(ex.getString("razao"));
            latitude = ex.getString("latitude");
            longitude = ex.getString("longitude");
        }


        //ME LEVE
        meleve.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Uri gmmIntentUri = Uri.parse("geo:0,0?q=" + clientelatitude + "," + clientelongitude + "(" + nomeEstabelecimento.getText().toString().replace("&", " ") + ")");
                Intent mapIntent = new Intent(Intent.ACTION_VIEW, gmmIntentUri);
                mapIntent.setPackage("com.google.android.apps.maps");
                startActivity(mapIntent);
            }
        });



        //EFETUA O CHEKIN
        callbackManager = CallbackManager.Factory.create();
        shareDialog = new ShareDialog(this);
        // this part is optional
        shareDialog.registerCallback(callbackManager, new FacebookCallback<Sharer.Result>() {
            @Override
            public void onSuccess(Sharer.Result result) {

                checkinsuccess();

                Toast.makeText(getBaseContext(),"successo",Toast.LENGTH_LONG).show();
            }

            @Override
            public void onCancel() {
               // Toast.makeText(getBaseContext(),"cancelado",Toast.LENGTH_LONG).show();
            }

            @Override
            public void onError(FacebookException error) {
                Toast.makeText(getBaseContext(),"erro sincronismo, ou endereço web nao cadastrado",Toast.LENGTH_LONG).show();
            }
        });

        /*
        *  O ShareDialog, que deveria estar aqui foi inserido no metodo RECUPERA_PUBLICACAO
        *  isto foi necessàrio para que os objetos de imagem fossem carregados no modulo
        *  corretamnte
        *
        *
        * */



        //configurar toolbar

        toolbar = (Toolbar) findViewById(R.id.toolbarFeedPublicacao);
        toolbar.setTitle(nomeEstabelecimento.getText().toString());
        toolbar.setNavigationIcon(R.drawable.ic_keyboard_arrow_left);
        setSupportActionBar(toolbar);

        // toolbar.setTitleTextColor(R.color.orange);


        progressBar.setVisibility(View.INVISIBLE);

        recuperaPublicacao();




    }

    private void checkinsuccess(){

        progressBar.setVisibility(View.VISIBLE);

        String URL = "https://www.checkincash.com.br/conn/altera_status_checkin.php";

        //gerar TOKEN

        Random randomico = new Random();
        int numeroRandomico;
        numeroRandomico = randomico.nextInt(999999 - 100000) + 100000;

        token = String.valueOf(numeroRandomico);

        Ion.with(getBaseContext())
                .load(URL)
                .setBodyParameter("pfkpublicador", codigoId)
                .setBodyParameter("pfkusuario", codigousuario)
                .setBodyParameter("pischeckin", "1")
                .setBodyParameter("ptoken", token)
                .asJsonObject()
                .setCallback(new FutureCallback<JsonObject>() {
                    @Override
                    public void onCompleted(Exception e, JsonObject result) {
                        if (result == null) {

                            Toast.makeText(getApplicationContext(), "Problemas com a internet, verifique ou tente mais tarde!", Toast.LENGTH_SHORT).show();

                        }else {

                            if (result.get("retorno").getAsString().equals("YES")) {
                                Toast.makeText(getApplicationContext(), "CHECK-IN Registrado..", Toast.LENGTH_SHORT).show();


                                // Movimenta Saldo para o usuario
                                pincash_usuario_mov();


                                Intent intent = new Intent(getApplication(), CheckinsucessoActivity.class);

                                long date = System.currentTimeMillis();
                                SimpleDateFormat sdf = new SimpleDateFormat("dd/MM/yyyy HH:MM");
                                String dateString = sdf.format(date);


                                intent.putExtra("usuario", codigousuario);
                                intent.putExtra("codpublicacao", codigoId);
                                intent.putExtra("qtdepin", qtdepin);
                                intent.putExtra("fotopath", fotopath);
                                intent.putExtra("estabelecimento", nomeEstabelecimento.getText().toString());
                                intent.putExtra("validade", (dateString));
                                intent.putExtra("token", token);


                                startActivity(intent);


                                finish();


                            } else {
                                Toast.makeText(getApplicationContext(), "Erro ao fazer o CHECK-IN", Toast.LENGTH_SHORT).show();
                                finish();
                            }

                        }

                        progressBar.setVisibility(View.INVISIBLE);
                    }
                });




    }

    public String retornoDataFormatado(String txtdata)
    {
        String[] data = txtdata.split("-");
        // String[] hora = data[2].split(" ");
        String txtData = data[2] + "/" + data[1] + "/" + data[0];


        return  txtData;

    }


    private void pincash_usuario_mov(){

        String URL = "https://www.checkincash.com.br/conn/insere_pins_usuario_mov.php";


        Ion.with(getBaseContext())
                .load(URL)
                .setBodyParameter("publicador", codigoId)
                .setBodyParameter("idsorteio", idsorteio)
                .setBodyParameter("pusuario", codigousuario)
                .setBodyParameter("qtdepin", qtdepin)
                .setBodyParameter("desconto", desconto)
                .setBodyParameter("token", token)
                .asJsonObject()
                .setCallback(new FutureCallback<JsonObject>() {
                    @Override
                    public void onCompleted(Exception e, JsonObject result) {
                        if (result == null) {

                            Toast.makeText(getApplicationContext(), "Problemas com a internet, verifique ou tente mais tarde!", Toast.LENGTH_SHORT).show();

                        }else {

                            if (result.get("retorno").getAsString().equals("YES")) {
                                Toast.makeText(getApplicationContext(), "Parabéns, você ganhou " + qtdepin + " Pin's", Toast.LENGTH_SHORT).show();


                            } else {
                                Toast.makeText(getApplicationContext(), "Erro ao movimentar seu saldo", Toast.LENGTH_SHORT).show();
                                finish();
                            }
                        }

                    }
                });


    }

    @Override
    protected void onActivityResult(final int requestCode, final int resultCode, final Intent data) {
        super.onActivityResult(requestCode, resultCode, data);
        callbackManager.onActivityResult(requestCode, resultCode, data);
    }



    @Override
    protected void onStart() {
        super.onStart();


        AccessToken accessToken = AccessToken.getCurrentAccessToken();


        if(accessToken != null)
        {
            checkin.setEnabled(true);
            labelBotaoCheckin = "check-in";




        }
        else
        {
            checkin.setEnabled(false);
            labelBotaoCheckin = "faça login";
        }
    }

    private void lerPreferencias()
    {
        SharedPreferences pref =  getSharedPreferences(ARQUIVO_PREFERENCIA, 0);

        if (pref.contains("raio"))
        {

            codigousuario = pref.getString("usuario", "0");

        }
    }
    private void mensagemForaLocal()
    {
        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle(R.string.fora_local);
        builder.setMessage(R.string.checkin_invalido);
        builder.setNeutralButton(R.string.mensagem_ok,null);


        AlertDialog dialog = builder.create();
        dialog.show();
    }

    @Override
    protected void onResume() {
        super.onResume();

        /*
        if( distanciakm > 0.09 )
        {
            checkin.setEnabled(false);
            labelBotaoCheckin = "check-in";
            if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.M) {
                checkin.setTextColor(getColor(R.color.color_gray));
            }


        }
      */
    }

    private void recuperaPublicacao()
    {


        progressBar.setVisibility(View.VISIBLE);

        String URL = "https://www.checkincash.com.br/conn/recupera_campanha.php";


        Ion.with(getBaseContext())
                .load(URL)
                .setBodyParameter("platitude", latitude)
                .setBodyParameter("plongitude", longitude)
                .setBodyParameter("pcodigopub", codigoId)
                .asJsonObject()
                .setCallback(new FutureCallback<JsonObject>() {
                    @Override
                    public void onCompleted(Exception e, JsonObject result) {

                        if (result == null) {

                            Toast.makeText(getApplicationContext(), "Problemas com a internet, verifique ou tente mais tarde!", Toast.LENGTH_SHORT).show();

                        } else {

                            if (result.get("retorno").getAsString().equals("YES")) {

                                int idPublicador = result.get("id").getAsInt();
                                String razao = result.get("razao").getAsString();
                                String website = result.get("website").getAsString();
                                nomeEstabelecimento.setText(razao);
                                classificacao1.setText(result.get("classificacao1").getAsString().toUpperCase());
                                classificacao2.setText(result.get("classificacao2").getAsString().toUpperCase());
                                distanciakm = result.get("distancia").getAsDouble();

                            /*
                            if( distanciakm > 0.09 )
                            {
                                checkin.setEnabled(false);
                                labelBotaoCheckin = "check-in";
                                if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.M) {
                                    checkin.setTextColor(getColor(R.color.color_gray));
                                }


                            }

                            */


                                // Checa categorias / Classificacao 1 e Classificacao 2

                                if (classificacao1.getText().toString().isEmpty())
                                    classificacao1.setVisibility(View.INVISIBLE);
                                else {
                                    categoria.setText(result.get("categoria").getAsString().toUpperCase() + " - " +
                                            result.get("classificacao1").getAsString().toUpperCase());
                                }

                                if (classificacao2.getText().toString().isEmpty())
                                    classificacao2.setVisibility(View.INVISIBLE);
                                else {


                                    categoria.setText(result.get("categoria").getAsString().toUpperCase() + " - " +
                                            result.get("classificacao1").getAsString().toUpperCase() + " - " +
                                            result.get("classificacao2").getAsString().toUpperCase());
                                }


                                cnpj = result.get("cnpj").getAsString();
                                fotopub = result.get("foto_publicacao").getAsString();

                                textopub = result.get("texto_publicacao").getAsString();
                                String categoria = result.get("categoria").getAsString().toUpperCase();
                                String fachada = result.get("fachada").getAsString();
                                String desconto = result.get("desconto").getAsString().trim();
                                endereco.setText(result.get("rua").getAsString() + ", " +
                                        result.get("numero").getAsString() + " " +
                                        result.get("complemento").getAsString() + " - " +
                                        result.get("bairro").getAsString());
                                endereco2.setText(result.get("cidade").getAsString() + " - " +
                                        result.get("estado").getAsString());

                                String tel = result.get("telefone").getAsString();
                                String txTEl = "";
                                if (tel.length() == 11) {
                                    txTEl = "(" + tel.substring(0, 2) + ") " + tel.substring(2, 7) + "-" + tel.substring(7, 11);
                                } else {
                                    txTEl = "(" + tel.substring(0, 2) + ") " + tel.substring(2, 6) + "-" + tel.substring(6, 10);

                                }


                                telefone.setText("Telefone: " + txTEl);


                                clientelatitude = result.get("latitude").getAsString();
                                clientelongitude = result.get("longitude").getAsString();


                                fotopath = "https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + cnpj + "/" + fotopub;
                                fotofachada = "https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + cnpj + "/" + fachada;

                                Picasso.with(getBaseContext()).load(fotopath).fit().into(imagemView);


                                Date datapos = new Date();

                                Calendar cal = Calendar.getInstance();
                                cal.setTime(datapos);
                                cal.add(Calendar.DATE, 1);
                                datapos = cal.getTime();

                                //  Date des = new Date();

                                Calendar c = new GregorianCalendar();
                                c.setTime(datapos);


                                int dia = c.get(c.DAY_OF_WEEK);

                                switch (dia) {
                                    case Calendar.SUNDAY:
                                        txtDes1.setText("DOM " + result.get("pdomingo").getAsString() + '%');
                                        break;
                                    case Calendar.MONDAY:
                                        txtDes1.setText("SEG " + result.get("psegunda").getAsString() + '%');
                                        break;
                                    case Calendar.TUESDAY:
                                        txtDes1.setText("TER " + result.get("pterca").getAsString() + '%');
                                        break;
                                    case Calendar.WEDNESDAY:
                                        txtDes1.setText("QUA " + result.get("pquarta").getAsString() + '%');
                                        break;
                                    case Calendar.THURSDAY:
                                        txtDes1.setText("QUI " + result.get("pquinta").getAsString() + '%');
                                        break;
                                    case Calendar.FRIDAY:
                                        txtDes1.setText("SEX " + result.get("psexta").getAsString() + '%');
                                        break;
                                    case Calendar.SATURDAY:
                                        txtDes1.setText("SAB " + result.get("psabado").getAsString() + '%');
                                        break;
                                    default:
                                        txtDes1.setText("0.00%");
                                        break;
                                }


                                datapos = new Date();

                                cal = Calendar.getInstance();
                                cal.setTime(datapos);
                                cal.add(Calendar.DATE, 2);
                                datapos = cal.getTime();

                                //  Date des = new Date();

                                c = new GregorianCalendar();
                                c.setTime(datapos);
                                dia = c.get(c.DAY_OF_WEEK);

                                switch (dia) {
                                    case Calendar.SUNDAY:
                                        txtDes2.setText("DOM " + result.get("pdomingo").getAsString() + "%");
                                        break;
                                    case Calendar.MONDAY:
                                        txtDes2.setText("SEG " + result.get("psegunda").getAsString() + "%");
                                        break;
                                    case Calendar.TUESDAY:
                                        txtDes2.setText("TER " + result.get("pterca").getAsString() + "%");
                                        break;
                                    case Calendar.WEDNESDAY:
                                        txtDes2.setText("QUA " + result.get("pquarta").getAsString() + "%");
                                        break;
                                    case Calendar.THURSDAY:
                                        txtDes2.setText("QUI " + result.get("pquinta").getAsString() + "%");
                                        break;
                                    case Calendar.FRIDAY:
                                        txtDes2.setText("SEX " + result.get("psexta").getAsString() + "%");
                                        break;
                                    case Calendar.SATURDAY:
                                        txtDes2.setText("SAB " + result.get("psabado").getAsString() + "%");
                                        break;
                                    default:
                                        txtDes2.setText("0.00%");
                                        break;
                                }


                                datapos = new Date();

                                cal = Calendar.getInstance();
                                cal.setTime(datapos);
                                cal.add(Calendar.DATE, 3);
                                datapos = cal.getTime();

                                //  Date des = new Date();

                                c = new GregorianCalendar();
                                c.setTime(datapos);


                                dia = c.get(c.DAY_OF_WEEK);

                                switch (dia) {
                                    case Calendar.SUNDAY:
                                        txtDes3.setText("DOM " + result.get("pdomingo").getAsString() + "%");
                                        break;
                                    case Calendar.MONDAY:
                                        txtDes3.setText("SEG " + result.get("psegunda").getAsString() + "%");
                                        break;
                                    case Calendar.TUESDAY:
                                        txtDes3.setText("TER " + result.get("pterca").getAsString() + "%");
                                        break;
                                    case Calendar.WEDNESDAY:
                                        txtDes3.setText("QUA " + result.get("pquarta").getAsString() + "%");
                                        break;
                                    case Calendar.THURSDAY:
                                        txtDes3.setText("QUI " + result.get("pquinta").getAsString() + "%");
                                        break;
                                    case Calendar.FRIDAY:
                                        txtDes3.setText("SEX " + result.get("psexta").getAsString() + "%");
                                        break;
                                    case Calendar.SATURDAY:
                                        txtDes3.setText("SAB " + result.get("psabado").getAsString() + "%");
                                        break;
                                    default:
                                        txtDes3.setText("0.00%");
                                        break;
                                }


                                Date d = new Date();
                                c = new GregorianCalendar();
                                c.setTime(d);

                                String pdesconto;

                                dia = c.get(c.DAY_OF_WEEK);

                                switch (dia) {
                                    case Calendar.SUNDAY:
                                        pdesconto = result.get("pdomingo").getAsString();
                                        break;
                                    case Calendar.MONDAY:
                                        pdesconto = result.get("psegunda").getAsString();
                                        break;
                                    case Calendar.TUESDAY:
                                        pdesconto = result.get("pterca").getAsString();
                                        break;
                                    case Calendar.WEDNESDAY:
                                        pdesconto = result.get("pquarta").getAsString();
                                        break;
                                    case Calendar.THURSDAY:
                                        pdesconto = result.get("pquinta").getAsString();
                                        break;
                                    case Calendar.FRIDAY:
                                        pdesconto = result.get("psexta").getAsString();
                                        break;
                                    case Calendar.SATURDAY:
                                        pdesconto = result.get("psabado").getAsString();
                                        break;
                                    default:
                                        pdesconto = "0.00";
                                        break;
                                }


                                if (pdesconto == "0") {
                                    textoPromocional.setText(textopub);
                                } else {
                                    textoPromocional.setText("-" + pdesconto + "% desconto check-in");
                                }


                                hfuncseg.setText(result.get("segunda").getAsString().replace("00:00", " "));
                                hfuncter.setText(result.get("terca").getAsString().replace("00:00", " "));
                                hfuncqua.setText(result.get("quarta").getAsString().replace("00:00", " "));
                                hfuncqui.setText(result.get("quinta").getAsString().replace("00:00", " "));
                                hfuncsex.setText(result.get("sexta").getAsString().replace("00:00", " "));
                                hfuncsab.setText(result.get("sabado").getAsString().replace("00:00", " "));
                                hfuncdom.setText(result.get("domingo").getAsString().replace("00:00", " "));

                                checkin.setText(labelBotaoCheckin);
                                checkin.getText().toString().toLowerCase();
                                checkin.setPadding(10, 10, 15, 10);
/*
                            //LINK SHARE

                            if (ShareDialog.canShow(ShareLinkContent.class)) {
                                ShareLinkContent linkContent = new ShareLinkContent.Builder()
                                        .setContentUrl(Uri.parse("https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + cnpj + "/" + fotopub + ""))
                                        .build();
                                ;//shareDialog.show(linkContent);


                                ShareButton shareButton = (ShareButton) checkin;//(ShareButton) findViewById(R.id.buttonCheckin);

                                shareButton.setShareContent(linkContent);
                            }
*/


                                //FOTO SHARE
/*

                            if( shareDialog.canShow(SharePhotoContent.class)) {

                                SharePhoto photo = new SharePhoto.Builder()
                                        .setImageUrl(Uri.parse("https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + cnpj + "/" + fotopub + ""))
                                        .setUserGenerated(true)
                                        .build();


                                SharePhotoContent content = new SharePhotoContent.Builder()
                                        .addPhoto(photo)
                                        .build();


                                ShareButton shareButton = (ShareButton)findViewById(R.id.buttonCheckin);

                                shareButton.setShareContent(content);

                            }
*/


                                // BOOK
/*
                            SharePhoto photo = new SharePhoto.Builder()
                                    .setCaption(nomeEstabelecimento.getText().toString())
                                    .setImageUrl(Uri.parse("https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + cnpj + "/" + fotopub + ""))
                                    .setUserGenerated(true)
                                    .build();


                            ShareOpenGraphObject object = new ShareOpenGraphObject.Builder()
                                    .putString("og:type", "books.book")
                                    .putString("og:title", nomeEstabelecimento.getText().toString())
                                    .putString("og:description",textopub )
                                    .putString("books:isbn", "0-553-57340-3")
                                    .putPhoto("og:image",photo)
                                    .build();



                            ShareOpenGraphAction action = new ShareOpenGraphAction.Builder()
                                    .setActionType("books.reads")
                                    .putObject("book", object)
                                    .putPhoto("image",photo)
                                    .build();

                            // Create the content
                            ShareOpenGraphContent content = new ShareOpenGraphContent.Builder()
                                    .setPreviewPropertyName("book")
                                    .setAction(action)
                                    .build();

                            ShareButton shareButton = (ShareButton)findViewById(R.id.buttonCheckin);

                            shareButton.setShareContent(content);
*/

                                // PLACE


/*
                            SharePhoto photo = new SharePhoto.Builder()
                                    .setCaption(nomeEstabelecimento.getText().toString())
                                    .setImageUrl(Uri.parse("https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + cnpj + "/" + fotopub + ""))
                                    .setUserGenerated(true)
                                    .build();


                            ShareOpenGraphObject object = new ShareOpenGraphObject.Builder()
                                    .putString("og:type", "place")
                                    .putString("og:title", nomeEstabelecimento.getText().toString())
                                    .putString("og:description",textopub )
                                    .putString("og:url","http://www.checkincash.com.br")
                                    .putString("place:location:latitude",  clientelatitude)
                                    .putString("place:location:longitude",clientelongitude)
                                    .putString("og:image","https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + cnpj + "/" + fotopub + "")
                                    .build();


                            ShareOpenGraphAction action = new ShareOpenGraphAction.Builder()
                                    .setActionType("og.likes")
                                    .putObject("place", object)
                                    //    .putPhoto("image",photo)
                                    .build();

                            // Create the content
                            ShareOpenGraphContent content = new ShareOpenGraphContent.Builder()
                                    .setPreviewPropertyName("place")
                                    .setAction(action)
                                    .build();

                            ShareButton shareButton = (ShareButton)findViewById(R.id.buttonCheckin);

                            shareButton.setShareContent(content);

*/

/*
                        // BUSSINESS

                            SharePhoto photo = new SharePhoto.Builder()
                                    .setCaption(nomeEstabelecimento.getText().toString())
                                    .setImageUrl(Uri.parse("https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + cnpj + "/" + fotopub + ""))
                                    .setUserGenerated(true)
                                    .build();


                            ShareOpenGraphObject object = new ShareOpenGraphObject.Builder()
                                    .putString("og:type", "business.business")
                                    .putString("og:url","http://www.checkincash.com.br")
                                    .putString("og:title", nomeEstabelecimento.getText().toString())
                                    .putString("og:image","https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + cnpj + "/" + fotopub + "")
                                    .putString("business:contact_data:street_address", "Rua teste, 12")
                                    .putString("business:contact_data:locality", "Sao jose rio preto")
                                    .putString("business:contact_data:postal_code", "15100000")
                                    .putString("business:contact_data:country_name", "Brasil")
                                    .putString("business:hours:day", "2")
                                    .putString("business:hours:start", "08:00:00")
                                    .putString("business:hours:end", "18:00:00")
                                    .putString("place:location:latitude", clientelatitude)
                                    .putString("place:location:longitude", clientelongitude)
                                    .build();


                            ShareOpenGraphAction action = new ShareOpenGraphAction.Builder()
                                    .setActionType("og.likes")
                                    .putObject("business.business", object)
                                    .build();

                            // Create the content
                            ShareOpenGraphContent content = new ShareOpenGraphContent.Builder()
                                    .setPreviewPropertyName("business.business")
                                    .setAction(action)
                                    .setRef("og:image")
                                    .build();

                            ShareButton shareButton = (ShareButton)findViewById(R.id.buttonCheckin);

                            shareButton.setShareContent(content);

*/


                                // ARTICLE


                                SharePhoto photo = new SharePhoto.Builder()
                                        .setCaption(nomeEstabelecimento.getText().toString())
                                        .setImageUrl(Uri.parse("https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + cnpj + "/" + fachada + ""))
                                        .setUserGenerated(true)
                                        .build();


                                ShareOpenGraphObject object = new ShareOpenGraphObject.Builder()
                                        .putString("og:type", "article")
                                        .putString("og:title", nomeEstabelecimento.getText().toString())
                                        .putString("og:description", textopub)
                                        .putString("og:url", website)
                                        .putString("og:image", "https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + cnpj + "/" + fachada)
                                        //.putPhoto("og:image",photo)
                                        .build();

                                ShareOpenGraphAction action = new ShareOpenGraphAction.Builder()
                                        .setActionType("news.publishes")
                                        .putObject("article", object)
                                        //    .putPhoto("image",photo)
                                        .build();

                                // Create the content
                                ShareOpenGraphContent content = new ShareOpenGraphContent.Builder()
                                        .setPreviewPropertyName("article")
                                        .setAction(action)
                                        .build();

                                ShareButton shareButton = (ShareButton) findViewById(R.id.buttonCheckin);

                                shareButton.setShareContent(content);


                            } else {
                                Toast.makeText(getApplicationContext(), "não localizado..", Toast.LENGTH_SHORT).show();
                            }

                        }
                        progressBar.setVisibility(View.INVISIBLE);
                    }
                });


    }




}
