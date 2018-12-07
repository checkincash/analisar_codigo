package fragments;


import android.content.SharedPreferences;
import android.graphics.Typeface;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

import com.google.gson.JsonArray;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import java.util.ArrayList;

import adapter.HomeAdapter;
import adapter.LugaresAdapter;
import br.com.alphasolutions.checkin.R;
import br.com.alphasolutions.checkin.activity.MainActivity;
import modelDB.mClientes;
import modelDB.mLocais;

/**
 * A simple {@link Fragment} subclass.
 */
public class LugaresFragment extends Fragment {

    private ArrayList<mLocais> locais;
    private ArrayAdapter<mLocais> adapterLocais;
    private ProgressBar progressBar;
    private static final String ARQUIVO_PREFERENCIA = "ArquivoPreferencia";
    private TextView mensagemLocais;
    private ListView listView;
    private String pUsuario;

    public LugaresFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        //Carrega Arquivo de Preferencias
        lerPreferencias();



        View view = inflater.inflate(R.layout.fragment_lugares, container, false);

        // Montar Listview e o Adapter
        locais = new ArrayList<>();
        listView = (ListView) view.findViewById(R.id.listViewLugaresID);
        adapterLocais = new LugaresAdapter( getContext(), locais );
        progressBar = (ProgressBar) view.findViewById(R.id.progressBarLugaresID);

        Typeface myCustomFont = Typeface.createFromAsset(getContext().getAssets(), "fonts/Raleway-SemiBold.ttf");

        mensagemLocais = ( TextView ) view.findViewById(R.id.textViewLugaresMsgID);

        mensagemLocais.setTypeface(myCustomFont);

        progressBar.setVisibility( progressBar.INVISIBLE );

        MainActivity.actionRefresh = true;


        // carrega dados de locais visitados
        atualizaPostagem();

        // Inflate the layout for this fragment
        return view;



    }



    private void carregaLocais(){

        progressBar.setVisibility( progressBar.VISIBLE );


        String URL = "http://www.checkincash.com.br/conn/recupera_locais_visitados.php";




        Ion.with(getContext())
                .load(URL)
                .setBodyParameter("pusuario", pUsuario)
                .asJsonArray()
                .setCallback(new FutureCallback<JsonArray>() {
                                 public void onCompleted(Exception e, JsonArray result) {


                                     if ( result == null){

                                         Toast.makeText(getContext(), "Problemas com a internet, verifique ou tente mais tarde!", Toast.LENGTH_SHORT).show();

                                     }
                                     else {

                                         for (int i = 0; i < result.size(); i++) {
                                             JsonObject obj = result.get(i).getAsJsonObject();

                                             String fk_usuario = obj.get("fk_usuario").getAsString();
                                             String data_lancamento = obj.get("data_lancamento").getAsString();
                                             String fk_contrato_publicador = obj.get("fk_contrato_publicador").getAsString();
                                             String razao = obj.get("razao").getAsString();
                                             String cnpj = obj.get("cnpj").getAsString();

                                             String fachada = obj.get("fachada").getAsString();

                                             String pincash_qtde = obj.get("pincash_qtde").getAsString();
                                             String desconto_recebido = obj.get("desconto_recebido").getAsString();
                                             String token = obj.get("token").getAsString();
                                             String token_validado = obj.get("token_validado").getAsString();
                                             String saldopin = obj.get("saldopin").getAsString();


                                             mLocais modelLocais = new mLocais(fk_usuario,data_lancamento,fk_contrato_publicador,razao,cnpj,fachada,pincash_qtde,desconto_recebido,token,token_validado,saldopin);


                                             locais.add(modelLocais);


                                         }

                                         listView.setAdapter(adapterLocais);

                                         progressBar.setVisibility(progressBar.INVISIBLE);

                                         if (locais.size() <= 0)
                                             mensagemLocais.setVisibility(View.VISIBLE);
                                         else
                                             mensagemLocais.setVisibility(View.INVISIBLE);
                                     }
                                 }
                             }



                );




    }


    private void lerPreferencias()
    {
        SharedPreferences pref =  getContext().getSharedPreferences(ARQUIVO_PREFERENCIA, 0);

        if (pref.contains("raio"))
        {
            pUsuario = pref.getString("usuario", "0");


        }
    }

    public void atualizaPostagem()
    {
        adapterLocais.clear();
        carregaLocais();
    }
}
