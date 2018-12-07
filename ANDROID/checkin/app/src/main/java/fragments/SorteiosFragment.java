package fragments;


import android.content.SharedPreferences;
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

import adapter.SorteiosAdapter;
import br.com.alphasolutions.checkin.R;

import modelDB.mSorteio;

/**
 * A simple {@link Fragment} subclass.
 */
public class SorteiosFragment extends Fragment {

    private ArrayList<mSorteio> sorteio;
    private ArrayAdapter<mSorteio> adapterSorteio;

    private static final String ARQUIVO_PREFERENCIA = "ArquivoPreferencia";
    private String pUsuario;
    private ProgressBar progressBar;
    private ListView listView;
    private TextView mensagemTopo;


    public SorteiosFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        //Carrega Arquivo de Preferencias
        lerPreferencias();



        View view = inflater.inflate(R.layout.fragment_sorteios, container, false);


        progressBar = (ProgressBar) view.findViewById(R.id.progressBarSorteioID);
        progressBar.setVisibility( progressBar.INVISIBLE );
        mensagemTopo = (TextView) view.findViewById(R.id.TextViewMensagemTopoID);

        // Montar Listview e o Adapter
        sorteio = new ArrayList<>();
        listView = (ListView) view.findViewById(R.id.listViewSorteiosID);
        adapterSorteio = new SorteiosAdapter( getContext(), sorteio );

        carregaPremios();

        // Inflate the layout for this fragment
        return view;


    }


    private void carregaPremios(){

        progressBar.setVisibility( progressBar.VISIBLE );


        String URL = "http://www.checkincash.com.br/conn/recupera_pincash_premios.php";




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

                                             String id = obj.get("id").getAsString();
                                             String foto_premiacao = obj.get("foto_premiacao").getAsString();
                                             String pin_necessario = obj.get("pin_necessario").getAsString();
                                             String label = obj.get("label").getAsString();
                                             String data_sorteio = obj.get("data_sorteio").getAsString();
                                             String saldo_usuario = obj.get("saldo_usuario").getAsString();

                                             mensagemTopo.setText(RetornaMensagemTopoFormatado(data_sorteio,saldo_usuario));

                                             mSorteio modelSorteio = new mSorteio(id,foto_premiacao,pin_necessario,label,data_sorteio,saldo_usuario);


                                             sorteio.add(modelSorteio);


                                         }

                                         listView.setAdapter(adapterSorteio);

                                         progressBar.setVisibility(progressBar.INVISIBLE);


                                     }
                                 }
                             }



                );




    }

    public String RetornaMensagemTopoFormatado(String datastr, String saldostr)
    {
        String[] data = datastr.split("-");
        // String[] hora = data[2].split(" ");
        String txtData = data[2] + "/" + data[1] + "/" + data[0];


        return  "Sorteio: " + txtData + " - Saldo de Pin: " + saldostr;

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
        adapterSorteio.clear();
        carregaPremios();
    }
}
