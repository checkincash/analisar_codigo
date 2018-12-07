package adapter;

import android.content.Context;
import android.graphics.Color;
import android.graphics.Typeface;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.TextView;

import com.squareup.picasso.Picasso;

import java.util.ArrayList;

import br.com.alphasolutions.checkin.R;
import modelDB.mSorteio;

/**
 * Created by manoelvieiradasilvaneto on 04/04/2018.
 */

public class SorteiosAdapter extends ArrayAdapter<mSorteio> {

    private Context context;
    private ArrayList<mSorteio> postagens;

    public SorteiosAdapter(@NonNull Context c, @NonNull ArrayList<mSorteio> objects) {
        super(c, 0, objects);

        this.context = c;
        this.postagens = objects;
    }


    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        View view = convertView;

        mSorteio sorteioPosicao = this.postagens.get(position);

        /*

        Verifica se nao existe o objeto view criado
        pois a view utilizada no cache do android e fica na variavel
        contentview

         */
        Typeface myCustomFont3 = Typeface.createFromAsset(getContext().getAssets(), "fonts/Quicksand-Regular.ttf");

        if (view == null) {

            // inicializa ibjeti oara mintagem do layout

            LayoutInflater inflater = (LayoutInflater) context.getSystemService(context.LAYOUT_INFLATER_SERVICE);

            //monta vi view a partir do xml
            view = inflater.inflate(R.layout.lopcaosorteio, parent, false);

        }

        //verifica se exite postagens
        if (postagens.size() > 0) {

            ImageView imagePremio = (ImageView) view.findViewById(R.id.imageViewPremioID);
            TextView txtPinsPremio = (TextView) view.findViewById(R.id.textViewPinsPremioID);
            TextView txtPinsNecessarios = (TextView) view.findViewById(R.id.textViewPinsNecessariosID);
            TextView txtStatus = (TextView) view.findViewById(R.id.textViewStatusID);

            txtPinsPremio.setTypeface(myCustomFont3);
            txtPinsNecessarios.setTypeface(myCustomFont3);
            txtStatus.setTypeface(myCustomFont3);

            Picasso.with(getContext()).load("https://www.checkincash.com.br/app/_lib/file/img/imagemsorteio/" + sorteioPosicao.getId() + "/" + sorteioPosicao.getFoto_premiacao()).into(imagePremio);


            txtPinsPremio.setText(sorteioPosicao.getRetornaPinsPremioFormatado());
            txtPinsNecessarios.setText(sorteioPosicao.getRetornaSaldoPinsNecessariosFormatado());

            if ( sorteioPosicao.getRetornaSaldoPinsNecessariosFormatado().equals("Parabéns!, Você atingiu a meta")){

                txtStatus.setText("Habilitado");
                txtStatus.setTextColor(Color.BLUE);
            }
            else
            {
                txtStatus.setText("Não Habilitado");
                txtStatus.setTextColor(Color.RED);
            }


        }

        return view;
    }
}
