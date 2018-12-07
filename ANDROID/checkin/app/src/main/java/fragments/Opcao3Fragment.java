package fragments;


import android.content.SharedPreferences;
import android.graphics.Typeface;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.SeekBar;
import android.widget.TextView;
import android.widget.Toast;

import com.google.gson.JsonArray;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import java.util.ArrayList;

import adapter.CategoriaAdapter;

import adapter.TabsAdapter;
import br.com.alphasolutions.checkin.R;
import br.com.alphasolutions.checkin.activity.MainActivity;
import modelDB.mCategoria;


/**
 * A simple {@link Fragment} subclass.
 */
public class Opcao3Fragment extends Fragment {


    private ListView listView;
    private ArrayAdapter<mCategoria> adapter;
    private ArrayList<mCategoria> categoria;
    private TextView textoSelecione;
    private TextView textoRaio;
    private SeekBar seekbar;
    private String idcategoria;

    private int raiokm;
    private TextView itemcategoria;

    private static final String ARQUIVO_PREFERENCIA = "ArquivoPreferencia";


    public Opcao3Fragment() {
        // Required empty public constructor
    }



    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view =  inflater.inflate(R.layout.fragment_opcao3, container, false);



        carregaCategoria();

        /*
        Montar LISTVIEW e ADAPTER
         */

        categoria = new ArrayList<>();
        listView = (ListView) view.findViewById(R.id.listviewCategoriaId);
        textoRaio = (TextView) view.findViewById(R.id.txtRaioKMID);
        seekbar = (SeekBar) view.findViewById(R.id.seekBarID);
        adapter = new CategoriaAdapter(getContext(), categoria );
        itemcategoria = (TextView) view.findViewById(R.id.textViewCategoriaID);
        textoSelecione = (TextView) view.findViewById(R.id.textViewSelecione);


        Typeface myCustomFont = Typeface.createFromAsset(getContext().getAssets(), "fonts/Raleway-SemiBold.ttf");
//        itemcategoria.setTypeface(myCustomFont);


        textoSelecione.setTypeface(myCustomFont);
        textoRaio.setTypeface(myCustomFont);
        lerPreferencias();

        seekbar.setProgress(raiokm);

        final mCategoria modelCategoria = new mCategoria("0", " Todas categorias");

        categoria.add(modelCategoria);




        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int posicao, long l) {

                idcategoria = categoria.get(posicao).getCategoriaID();
                String txtcategoria = categoria.get(posicao).getDescricao();

                Toast.makeText(getContext(), "Selecionada a categoria: " + txtcategoria, Toast.LENGTH_SHORT).show();

                gravapref();



            }
        });




        seekbar.setOnSeekBarChangeListener(new SeekBar.OnSeekBarChangeListener() {
            @Override
            public void onProgressChanged(SeekBar seekBar, int i, boolean b) {


                if( i < 5)
                    i=5;

                raiokm = i;



                gravapref();

            }

            @Override
            public void onStartTrackingTouch(SeekBar seekBar) {

                textoRaio.setText("Distância: " + raiokm + " km");

            }

            @Override
            public void onStopTrackingTouch(SeekBar seekBar) {

                textoRaio.setText("Distância: " + raiokm + " km");

            }
        });
        return view;
    }

    private void gravapref()
    {
        // definição padrao para arquivo de preferencia
        SharedPreferences pref = getContext().getSharedPreferences(ARQUIVO_PREFERENCIA,0);
        SharedPreferences.Editor editor = pref.edit();
        editor.putString("categoria", idcategoria);
        editor.putInt("raio", raiokm);

        editor.commit();
    }

    private void lerPreferencias()
    {
        SharedPreferences pref =  getContext().getSharedPreferences(ARQUIVO_PREFERENCIA, 0);

        if (pref.contains("raio"))
        {

            idcategoria = pref.getString("categoria", "0");
            raiokm = pref.getInt("raio", 5);

            textoRaio.setText("Distância: " + raiokm + " km");
        }
    }

    private void carregaCategoria(){




        String URL = "https://www.checkincash.com.br/conn/recupera_categorias.php";

        Ion.with(getContext())
                .load(URL)
                .asJsonArray()
                .setCallback(new FutureCallback<JsonArray>() {
                                 public void onCompleted(Exception e, JsonArray result) {

                                     if ( result == null){
                                         Toast.makeText(getContext(), "Problemas com a internet, verifique ou tente mais tarde!", Toast.LENGTH_SHORT).show();

                                     } else {

                                         for (int i = 0; i < result.size(); i++) {
                                             JsonObject obj = result.get(i).getAsJsonObject();

                                             String codigoid = obj.get("pk_classificacao").getAsString();
                                             String descricao = obj.get("descricao").getAsString();


                                             mCategoria modelCategoria = new mCategoria(codigoid, descricao);

                                             categoria.add(modelCategoria);


                                         }

                                         listView.setAdapter(adapter);
                                     }
                                 }


                             }



                );




    }

    public void atualizaPostagem()
    {
        adapter.clear();
        carregaCategoria();
    }

}
