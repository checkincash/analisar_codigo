package fragments;


import android.content.Intent;
import android.content.SharedPreferences;
import android.graphics.Typeface;
import android.location.Location;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.gms.common.ConnectionResult;
import com.google.android.gms.common.api.GoogleApiClient;
import com.google.android.gms.location.LocationServices;
import com.google.gson.JsonArray;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import java.util.ArrayList;

import adapter.DestaquesAdapter;
import br.com.alphasolutions.checkin.R;
import br.com.alphasolutions.checkin.activity.CheckinsucessoActivity;
import br.com.alphasolutions.checkin.activity.FeedPublicacaoActivity;
import modelDB.mClientes;

/**
 * A simple {@link Fragment} subclass.
 */
public class Opcao2Fragment extends Fragment implements GoogleApiClient.ConnectionCallbacks, GoogleApiClient.OnConnectionFailedListener{

    private double pLatitude, pLongitude;
    private int pRaio;
    private String pCategoria;
    private GoogleApiClient mGoogleApiClient;
    private String pUsuario;
    private ListView listView;
    private ArrayAdapter<mClientes> adapter;
    private ArrayList<mClientes> destaques;
    private static final String ARQUIVO_PREFERENCIA = "ArquivoPreferencia";
    private ProgressBar progressBar;

    private TextView mensagem;

    public Opcao2Fragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        //Carrega arquivo de preferencias
        lerPreferencias();

        // Inflate the layout for this fragment
        View view =  inflater.inflate(R.layout.fragment_opcao2, container, false);


        // Recupera localizacao atual
        callConnection();

        progressBar = (ProgressBar) view.findViewById(R.id.progressBarDestaque);
        progressBar.setVisibility( progressBar.INVISIBLE );

        /*
        Montsr Listview e Adapter
         */

        Typeface myCustomFont = Typeface.createFromAsset(getContext().getAssets(), "fonts/Raleway-SemiBold.ttf");


        destaques = new ArrayList<>();
        listView = (ListView) view.findViewById(R.id.listViewDestaques);
        adapter = new DestaquesAdapter(getContext(), destaques);

        mensagem = (TextView) view.findViewById(R.id.textViewMensagemID);


        mensagem.setTypeface(myCustomFont);


        //Evento de Click da Listview
        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int position, long l) {


                int codigoid = destaques.get(position).getIdpub();
                String foto = destaques.get(position).getFotoservidor();
                String cnpj = destaques.get(position).getCnpj();
                String fotopath = "https://www.checkincash.com.br/app/_lib/file/img/imagempub/"+cnpj+"/"+foto;
                String validade = destaques.get(position).getValidade();
                String token = destaques.get(position).getToken();
                String idsorteio = destaques.get(position).getIdsorteio();
                String qtdepin = destaques.get(position).RetornaQtdePIN();
                String desconto  = destaques.get(position).RetornaDesconto();

                if( destaques.get(position).getIscheckin().equals("1"))
                {

                    Intent intent = new Intent(getContext(), CheckinsucessoActivity.class);


                    String[] data  = validade.split("-");
                    String[] hora = data[2].split(" ");
                    String txtData = hora[0] + "/" + data[1] + "/" + data[0] + " " + hora[1];

                    intent.putExtra("usuario", pUsuario);
                    intent.putExtra("idsorteio", idsorteio );
                    intent.putExtra("qtdepin", qtdepin );
                    intent.putExtra("desconto", desconto );
                    intent.putExtra("codpublicacao", Integer.valueOf(codigoid).toString());
                    intent.putExtra("fotopath", fotopath);
                    intent.putExtra("validade", txtData);
                    intent.putExtra("token", token);


                    startActivity(intent);
                }
                else
                {

                    Intent intent = new Intent(getContext(), FeedPublicacaoActivity.class);

                    intent.putExtra("codigoId", Integer.valueOf(codigoid).toString());
                    intent.putExtra("razao", destaques.get(position).getNomeEstabelecimento());
                    intent.putExtra("latitude", Double.valueOf(pLatitude).toString());
                    intent.putExtra("longitude", Double.valueOf(pLongitude).toString());


                    startActivity(intent);


                }



            }
        });


        return view;
    }


    private void carregaDestaques(){

        progressBar.setVisibility( progressBar.VISIBLE );

        String URL = "https://www.checkincash.com.br/conn/recupera_destaques.php";



        Ion.with(getContext())
                .load(URL)
                .setBodyParameter("platitude", String.valueOf(pLatitude))
                .setBodyParameter("plongitude", String.valueOf(pLongitude))
                .setBodyParameter("pcategoria", pCategoria)
                .setBodyParameter("pdistancia", String.valueOf(pRaio))
                .setBodyParameter("pusuario", pUsuario)
                .asJsonArray()
                .setCallback(new FutureCallback<JsonArray>() {
                                 public void onCompleted(Exception e, JsonArray result) {

                                     if( result == null){
                                         Toast.makeText(getContext(), "Problemas com a internet, verifique ou tente mais tarde!", Toast.LENGTH_SHORT).show();

                                     }
                                     else {

                                         for (int i = 0; i < result.size(); i++) {
                                             JsonObject obj = result.get(i).getAsJsonObject();

                                             String razao = obj.get("razao").getAsString();
                                             int idPublicador = obj.get("id").getAsInt();
                                             String categoria = obj.get("categoria").getAsString();
                                             String classificacao1 = obj.get("classificacao1").getAsString().toUpperCase();
                                             String classificacao2 = obj.get("classificacao2").getAsString().toUpperCase();
                                             String titulo = obj.get("nomenclatura").getAsString();


                                             String endereco = obj.get("abreviatura").getAsString();
                                             String endereco2 = "";


                                             String cnpj = obj.get("cnpj").getAsString();
                                             String fachada = obj.get("fachada").getAsString();
                                             String fotopub = obj.get("foto_publicacao").getAsString();
                                             String pcpa = obj.get("pdesconto").getAsString();
                                             String ischeckin = obj.get("ischeckin").getAsString();
                                             String validade = obj.get("validade").getAsString();
                                             String token = obj.get("token").getAsString();
                                             String pseg = obj.get("segunda").getAsString();
                                             String pter = obj.get("terca").getAsString();
                                             String pqua = obj.get("quarta").getAsString();
                                             String pqui = obj.get("quinta").getAsString();
                                             String psex = obj.get("sexta").getAsString();
                                             String psab = obj.get("sabado").getAsString();
                                             String pdom = obj.get("domingo").getAsString();
                                             String pin1 = obj.get("pin_domingo").getAsString();
                                             String pin2 = obj.get("pin_segunda").getAsString();
                                             String pin3 = obj.get("pin_terca").getAsString();
                                             String pin4 = obj.get("pin_quarta").getAsString();
                                             String pin5 = obj.get("pin_quinta").getAsString();
                                             String pin6 = obj.get("pin_sexta").getAsString();
                                             String pin7 = obj.get("pin_sabado").getAsString();
                                             String idsorteio = obj.get("idsorteio").getAsString();
                                             // pincash refere-se à quantidade de pins armazenado no usuario
                                             // histórico

                                             String pincash = obj.get("pincash").getAsString();




                                             mClientes modelDestaques = new mClientes(idPublicador, cnpj, fachada, fotopub,
                                                     titulo, razao, endereco, endereco2, categoria, classificacao1,
                                                     classificacao2, 0, pcpa, ischeckin, validade,
                                                     token, pseg, pter, pqua, pqui, psex, psab, pdom,
                                                     pin1, pin2, pin3,pin4,pin5,pin6,pin7, idsorteio, pincash);

                                             destaques.add(modelDestaques);


                                         }

                                         listView.setAdapter(adapter);
                                         progressBar.setVisibility(progressBar.INVISIBLE);

                                         if (destaques.size() <= 0)
                                             mensagem.setVisibility(View.VISIBLE);
                                         else
                                             mensagem.setVisibility(View.INVISIBLE);


                                     }


                                 }
                             }

                );




    }

    public void atualizaPostagem()
    {
        adapter.clear();
        lerPreferencias();
        carregaDestaques();
    }

    private synchronized void callConnection() {
        mGoogleApiClient = new GoogleApiClient.Builder(getContext())
                .addOnConnectionFailedListener(this)
                .addConnectionCallbacks(this)
                .addApi(LocationServices.API)
                .build();

        mGoogleApiClient.connect();

    }

    @Override
    public void onConnected(Bundle bundle) {
        Log.i("LOG: ", "onConected(" + bundle + ")");

        Location l = LocationServices.FusedLocationApi.getLastLocation(mGoogleApiClient);

        if(l != null){
            Log.i("LOG", "Latitude" + l.getLatitude());
            Log.i("LOG", "Longitude" + l.getLongitude());

            pLatitude = l.getLatitude();
            pLongitude =  l.getLongitude();


            carregaDestaques();
        }
    }

    @Override
    public void onConnectionSuspended(int i) {

    }

    @Override
    public void onConnectionFailed(ConnectionResult connectionResult) {

    }

    private void lerPreferencias()
    {
        SharedPreferences pref =  getContext().getSharedPreferences(ARQUIVO_PREFERENCIA, 0);

        if (pref.contains("raio"))
        {
            pRaio = pref.getInt("raio", 5);
            pCategoria = pref.getString("categoria", "0");
            pUsuario = pref.getString("usuario", "0");

        }
    }
}
