package adapter;

import android.content.Context;
import android.graphics.Typeface;
import android.support.annotation.LayoutRes;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import java.util.ArrayList;

import br.com.alphasolutions.checkin.R;
import modelDB.mCategoria;
import modelDB.mClientes;

/**
 * Created by User on 11/10/2017.
 */

public class CategoriaAdapter extends ArrayAdapter<mCategoria> {


    private Context context;
    private ArrayList<mCategoria> categoria;

    public CategoriaAdapter(@NonNull Context c,  @NonNull ArrayList<mCategoria> objects) {
        super(c, 0, objects);

        this.context = c;
        this.categoria = objects;

    }

    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {

        View view = convertView;

        mCategoria categoriaPosicao = this.categoria.get(position);

        /*

        Verifica se nao existe o objeto view criado
        pois a view utilizada no cache do android e fica na variavel
        contentview

         */

        if(view == null){

            // inicializa ibjeti oara mintagem do layout

            LayoutInflater inflater = (LayoutInflater) context.getSystemService(context.LAYOUT_INFLATER_SERVICE);

            //monta vi view a partir do xml
            view = inflater.inflate(R.layout.lopcao3, parent, false);

        }

        if( categoria.size() > 0){
            //recupera componente de tela


            Typeface myCustomFont = Typeface.createFromAsset(getContext().getAssets(), "fonts/Raleway-SemiBold.ttf");


            TextView txtCategoria = (TextView) view.findViewById(R.id.textViewCategoriaID);

            txtCategoria.setTypeface(myCustomFont);
            txtCategoria.setText(categoriaPosicao.getDescricao());

        }


        return view;
    }
}


