package fragments;


import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.MotionEvent;
import android.view.View;
import android.view.View.OnTouchListener;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.google.gson.JsonArray;
import com.google.gson.JsonObject;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;
import com.squareup.picasso.Picasso;

import java.util.ArrayList;
import java.util.Timer;


import br.com.alphasolutions.checkin.R;
import modelDB.mPremios;

/**
 * A simple {@link Fragment} subclass.
 */
public class PremioFragment extends Fragment  {

    private ImageView imageCampanha;
    //private TextView textoCampanha;
    private TextView textoData;
   // private TextView textPin;
    private Button btnAvancar;
    private ArrayList<mPremios> dadosPremios;
    private Integer showcount;
    private Timer timer = new Timer();
    private String idsorteio;



    public PremioFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment

        View view = inflater.inflate(R.layout.fragment_premio, container, false);

        imageCampanha = (ImageView) view.findViewById(R.id.imageCampanhaID);
       // textoCampanha = (TextView) view.findViewById(R.id.txtCampanhaID);
        textoData = (TextView) view.findViewById(R.id.txtDataID);
       // textPin = (TextView) view.findViewById(R.id.txtPinsID);
        btnAvancar = (Button) view.findViewById(R.id.btnNext);

        showcount = 0;

        dadosPremios = new ArrayList<>();

        carregaCampanha();


        btnAvancar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                showPremios();
            }
        });


        return view;
    }

    // carrega dados da campanha
    private void carregaCampanha() {


        // "https://www.checkincash.com.br/app/_lib/file/img/imagemsorteio/"+self.sorteiodb[0].pk_sorteio_cabe_pincash+"/"+self.sorteiodb[0].foto_campanha){

        String URL = "https://www.checkincash.com.br/conn/sorteio.php";

        Ion.with(getContext())
                .load(URL)
                .asJsonArray()
                .setCallback(new FutureCallback<JsonArray>() {
                                 public void onCompleted(Exception e, JsonArray result) {

                                     if (result == null) {
                                         Toast.makeText(getContext(), "Problemas com a internet, verifique ou tente mais tarde!", Toast.LENGTH_SHORT).show();

                                     } else {

                                         for (int i = 0; i < result.size(); i++) {
                                             JsonObject obj = result.get(i).getAsJsonObject();

                                             idsorteio = obj.get("pk_sorteio_cabe_pincash").getAsString();
                                             Picasso.with(getContext()).load("https://www.checkincash.com.br/app/_lib/file/img/imagemsorteio/" + obj.get("pk_sorteio_cabe_pincash").getAsString().trim() + "/" + obj.get("foto_campanha").getAsString().trim()).into(imageCampanha);
                                      //       textoCampanha.setText(obj.get("texto_campanha").getAsString());
                                             String validade = obj.get("datafim").getAsString();

                                             String[] data = validade.split("-");
                                             // String[] hora = data[2].split(" ");
                                             String txtData = data[2] + "/" + data[1] + "/" + data[0];


                                             textoData.setText("Data Sorteio: " + txtData);


                                         }

                                         // carrega premios
                                         carregaPremios(idsorteio);


                                     }
                                 }


                             }


                );

    }

    private void carregaPremios(String txtId) {

        String URL = "https://www.checkincash.com.br/conn/sorteiomov.php";

        Ion.with(getContext())
                .load(URL)
                .setBodyParameter("id", String.valueOf(txtId))
                .asJsonArray()
                .setCallback(new FutureCallback<JsonArray>() {
                                 public void onCompleted(Exception e, JsonArray result) {


                                     if ( result == null){

                                         Toast.makeText(getContext(), "Problemas com a internet, verifique ou tente mais tarde!", Toast.LENGTH_SHORT).show();

                                     }
                                     else {

                                         for (int i = 0; i < result.size(); i++) {
                                             JsonObject obj = result.get(i).getAsJsonObject();

                                             String id = obj.get("pk_mov_sorteio_mv").getAsString();
                                             String fkpremio = obj.get("fk_cabe_sorteio").getAsString();
                                             String fotopremio = obj.get("foto_catalogo").getAsString();
                                             String textopremiacao = obj.get("texto_premiacao").getAsString();
                                             String pincash = obj.get("pincash_premio").getAsString();


                                             mPremios modelPremios = new mPremios(id,fkpremio, fotopremio, textopremiacao, pincash);

                                             dadosPremios.add(modelPremios);


                                         }


                                     }
                                 }
                             }



                );


    }



    private void showPremios()
    {


        if ( showcount < dadosPremios.size()){

            btnAvancar.setText( "Proximo " + (showcount + 1) + "/" + dadosPremios.size());


            mPremios premio = this.dadosPremios.get(showcount);

            String idSorteio = premio.getFk_cabe_sorteio();
            String fotopremio = premio.getFoto_premiacao();
            String textopremiacao = premio.getTextoPremiacaoFormatado();
            String pincash = premio.getTextoPinsFormatado();

            Picasso.with(getContext()).load("https://www.checkincash.com.br/app/_lib/file/img/imagemsorteio/" + idSorteio + "/" + fotopremio).into(imageCampanha);
          //  textoCampanha.setText(textopremiacao);
          //  textPin.setText(pincash);

            showcount += 1;

        }
        else
        {
            showcount = 0;
        }




    }



}