package adapter;

import android.content.Context;
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
import de.hdodenhof.circleimageview.CircleImageView;
import modelDB.mLocais;

/**
 * Created by manoelvieiradasilvaneto on 03/04/2018.
 */

public class LugaresAdapter extends ArrayAdapter<mLocais> {

    private Context context;
    private ArrayList<mLocais> postagens;

    public LugaresAdapter(@NonNull Context c, @NonNull ArrayList<mLocais> objects) {
        super(c, 0, objects);

        this.context = c;
        this.postagens = objects;
    }


    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        View view = convertView;

        mLocais lugaresPosicao = this.postagens.get(position);

        /*

        Verifica se nao existe o objeto view criado
        pois a view utilizada no cache do android e fica na variavel
        contentview

         */

        if (view == null) {

            // inicializa ibjeti oara mintagem do layout

            LayoutInflater inflater = (LayoutInflater) context.getSystemService(context.LAYOUT_INFLATER_SERVICE);

            //monta vi view a partir do xml
            view = inflater.inflate(R.layout.lopcaolugares, parent, false);

        }

        //verifica se exite postagens
        if (postagens.size() > 0) {

            CircleImageView imageLoja = (CircleImageView) view.findViewById(R.id.imgluglojaID);
            TextView txtRazao = (TextView) view.findViewById(R.id.txtlugrazaoID);
            TextView txtDesconto = (TextView) view.findViewById(R.id.textViewDescontoID);
            TextView txtToken = (TextView) view.findViewById(R.id.textViewTokenID);
            TextView txtPins = (TextView) view.findViewById(R.id.textViewPinsID);
            TextView txtDataLan = (TextView) view.findViewById(R.id.textViewDataLanID);
            ImageView imageTick = (ImageView) view.findViewById(R.id.imageTickID);






            // verifica a validacao do token e caso verdadeiro liga o tick azul
            if (lugaresPosicao.getToken_validado().trim().equals("1") )
                imageTick.setImageAlpha(1000);
            else
                imageTick.setImageAlpha(50);


            Picasso.with(getContext()).load("https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + lugaresPosicao.getCnpj() + "/" + lugaresPosicao.getFachada()).fit().into(imageLoja);


            txtRazao.setText(lugaresPosicao.getRazao());
            txtToken.setText(lugaresPosicao.getRetornaTokenFormatado());
            txtDesconto.setText(lugaresPosicao.getRetornaDescontoFormatado());
            txtPins.setText(lugaresPosicao.getRetornoPinsFormatado());
            txtDataLan.setText(lugaresPosicao.getRetornoDataLanFormatado());





        }

        return view;
    }
}
