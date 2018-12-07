package adapter;

import android.content.Context;
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
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;

import modelDB.mClientes;
import br.com.alphasolutions.checkin.R;

/**
 * Created by User on 29/09/2017.
 */

public class HomeAdapter extends ArrayAdapter<mClientes> {

    private Context context;
    private ArrayList<mClientes> postagens;

    public HomeAdapter(@NonNull Context c, @NonNull ArrayList<mClientes> objects) {
        super(c, 0, objects);

        this.context = c;
        this.postagens = objects;
    }


    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        View view = convertView;

        mClientes clientePosicao = this.postagens.get(position);



        /*

        Verifica se nao existe o objeto view criado
        pois a view utilizada no cache do android e fica na variavel
        contentview

         */

        if (view == null) {

            // inicializa ibjeti oara mintagem do layout

            LayoutInflater inflater = (LayoutInflater) context.getSystemService(context.LAYOUT_INFLATER_SERVICE);

            //monta vi view a partir do xml
            view = inflater.inflate(R.layout.lopcao1, parent, false);

        }

        //verifica se exite postagens
        if (postagens.size() > 0) {


            //recupera componente de tela
            ImageView imagemPostagem = (ImageView) view.findViewById(R.id.imgFotoID);
            TextView titulo = (TextView) view.findViewById(R.id.txtTituloID);
            TextView nomeEstabelecimento = (TextView) view.findViewById(R.id.textViewRazaoID);
            TextView checkin = (TextView) view.findViewById(R.id.textViewCheckin);
            TextView rua = (TextView) view.findViewById(R.id.txtEnderecoID);
            TextView endereco2 = (TextView) view.findViewById(R.id.txtEndereco2ID);
            TextView categoria = (TextView) view.findViewById(R.id.txtViewCategoriaID);
            TextView classificacao1 = (TextView) view.findViewById(R.id.txtViewClassificacao1ID);
            TextView classificacao2 = (TextView) view.findViewById(R.id.txtViewClassificacao2ID);
            TextView txtPcpa = (TextView) view.findViewById(R.id.textViewDescontoID);
            TextView txtDes1 = (TextView) view.findViewById(R.id.txtViewPerDesc1);
            TextView txtDes2 = (TextView) view.findViewById(R.id.txtViewPerDesc2);
            TextView txtDes3 = (TextView) view.findViewById(R.id.txtViewPerDesc3);
            TextView txtPin  = (TextView)  view.findViewById(R.id.textViewPin);
            ImageView imageViewStar = (ImageView) view.findViewById(R.id.imageViewStar);
            ImageView imageViewPcpa = (ImageView) view.findViewById(R.id.imageViewPcpa);
            ImageView imageChecked = (ImageView) view.findViewById(R.id.imgCheckID);


            Typeface myCustomFont = Typeface.createFromAsset(getContext().getAssets(), "fonts/Raleway-SemiBold.ttf");
            Typeface myCustomFont2 = Typeface.createFromAsset(getContext().getAssets(), "fonts/Raleway-Regular.ttf");
            Typeface myCustomFont3 = Typeface.createFromAsset(getContext().getAssets(), "fonts/Quicksand-Regular.ttf");

            nomeEstabelecimento.setTypeface(myCustomFont);
            rua.setTypeface(myCustomFont2);
            txtPcpa.setTypeface(myCustomFont);
            checkin.setTypeface(myCustomFont);
            txtDes1.setTypeface(myCustomFont3);
            txtDes2.setTypeface(myCustomFont3);
            txtDes3.setTypeface(myCustomFont3);
            txtPin.setTypeface(myCustomFont3);



            Date datapos = new Date();


            Calendar cal = Calendar.getInstance();
            cal.setTime(datapos );
            cal.add(Calendar.DATE, 1);
            datapos = cal.getTime();

            //  Date des = new Date();

            Calendar c = new GregorianCalendar();

            c.setTime(datapos);


            if ( clientePosicao.RetornaQtdePIN().equals("1") )
            {
                txtPin.setText("Ganhe " + clientePosicao.RetornaQtdePIN() + " Pin");
            }
            else {
                txtPin.setText("Ganhe " + clientePosicao.RetornaQtdePIN() + " Pin's");

            }

            int dia = c.get(c.DAY_OF_WEEK);

            dia = c.get(c.DAY_OF_WEEK);

            switch(dia){
                case Calendar.SUNDAY: txtDes1.setText("DOM " + clientePosicao.getPdom()+"%"); break;
                case Calendar.MONDAY: txtDes1.setText("SEG "+ clientePosicao.getPseg()+"%"); break;
                case Calendar.TUESDAY: txtDes1.setText("TER " + clientePosicao.getPter()+"%"); break;
                case Calendar.WEDNESDAY: txtDes1.setText("QUA " + clientePosicao.getPqua()+"%"); break;
                case Calendar.THURSDAY: txtDes1.setText("QUI " + clientePosicao.getPqui()+"%"); break;
                case Calendar.FRIDAY: txtDes1.setText("SEX " + clientePosicao.getPsex()+"%"); break;
                case Calendar.SATURDAY: txtDes1.setText("SAB " + clientePosicao.getPsab()+"%"); break;
                default: txtDes1.setText("0.00%");break;
            }


            datapos = new Date();

            cal = Calendar.getInstance();
            cal.setTime(datapos );
            cal.add(Calendar.DATE, 2);
            datapos = cal.getTime();

            //  Date des = new Date();

            c = new GregorianCalendar();
            c.setTime(datapos);
            dia = c.get(c.DAY_OF_WEEK);

            switch(dia){
                case Calendar.SUNDAY: txtDes2.setText("DOM " + clientePosicao.getPdom()+"%");break;
                case Calendar.MONDAY: txtDes2.setText("SEG " + clientePosicao.getPseg()+"%");break;
                case Calendar.TUESDAY: txtDes2.setText("TER " + clientePosicao.getPter()+"%");break;
                case Calendar.WEDNESDAY: txtDes2.setText("QUA " + clientePosicao.getPqua()+"%");break;
                case Calendar.THURSDAY: txtDes2.setText("QUI " + clientePosicao.getPqui()+"%");break;
                case Calendar.FRIDAY: txtDes2.setText("SEX " + clientePosicao.getPsex()+"%");break;
                case Calendar.SATURDAY: txtDes2.setText("SAB " + clientePosicao.getPsab()+"%");break;
                default: txtDes2.setText("0.00%");break;
            }


            datapos = new Date();

            cal = Calendar.getInstance();
            cal.setTime(datapos );
            cal.add(Calendar.DATE, 3);
            datapos = cal.getTime();

            //  Date des = new Date();

            c = new GregorianCalendar();
            c.setTime(datapos);



            dia = c.get(c.DAY_OF_WEEK);

            switch(dia){
                case Calendar.SUNDAY: txtDes3.setText("DOM " + clientePosicao.getPdom()+"%");break;
                case Calendar.MONDAY: txtDes3.setText("SEG " + clientePosicao.getPseg()+"%");break;
                case Calendar.TUESDAY: txtDes3.setText("TER "+ clientePosicao.getPter()+"%");break;
                case Calendar.WEDNESDAY: txtDes3.setText("QUA " + clientePosicao.getPqua()+"%");break;
                case Calendar.THURSDAY: txtDes3.setText("QUI " + clientePosicao.getPqui()+"%");break;
                case Calendar.FRIDAY: txtDes3.setText("SEX " + clientePosicao.getPsex()+"%");break;
                case Calendar.SATURDAY: txtDes3.setText("SAB " + clientePosicao.getPsab()+"%");break;
                default: txtDes3.setText("0.00%");break;
            }



            endereco2.setTypeface(myCustomFont2);
            categoria.setTypeface(myCustomFont2);
            classificacao1.setTypeface(myCustomFont2);
            classificacao2.setTypeface(myCustomFont2);



            Picasso.with(getContext()).load("https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + clientePosicao.getCnpj() + "/" + clientePosicao.getFachada()).fit().into(imagemPostagem);
            nomeEstabelecimento.setText(clientePosicao.getNomeEstabelecimento());
            titulo.setText(clientePosicao.getTitulo());
            rua.setText(clientePosicao.getEndereco());
            endereco2.setText(clientePosicao.getEndereco2());
            categoria.setText(clientePosicao.getCategoria().toUpperCase());
            classificacao1.setText(clientePosicao.getClassificacao1());
            classificacao2.setText(clientePosicao.getClassificacao2());




            if (clientePosicao.getDestaque() == 1)
                imageViewStar.setImageAlpha(1000);
            else
                imageViewStar.setImageAlpha(100);

            if (clientePosicao.getIscheckin().equals("0"))
                imageChecked.setVisibility(View.INVISIBLE);
            else
                imageChecked.setVisibility(View.VISIBLE);


            if( clientePosicao.getClassificacao1() == "")
                classificacao1.setVisibility(View.INVISIBLE);
            else
                classificacao1.setVisibility(View.VISIBLE);

            if( clientePosicao.getClassificacao2() == "")
                classificacao2.setVisibility(View.INVISIBLE);
            else
                classificacao2.setVisibility(View.VISIBLE);

            Date d = new Date();
            c = new GregorianCalendar();
            c.setTime(d);

            // CLASSIFICA O DESCONTO DO DIA....
            dia = c.get(c.DAY_OF_WEEK);
            switch(dia){
                case Calendar.SUNDAY: clientePosicao.setPcpa(clientePosicao.getPdom());break;
                case Calendar.MONDAY: clientePosicao.setPcpa(clientePosicao.getPseg());break;
                case Calendar.TUESDAY: clientePosicao.setPcpa(clientePosicao.getPter());break;
                case Calendar.WEDNESDAY: clientePosicao.setPcpa(clientePosicao.getPqua());break;
                case Calendar.THURSDAY: clientePosicao.setPcpa(clientePosicao.getPqui());break;
                case Calendar.FRIDAY: clientePosicao.setPcpa(clientePosicao.getPsex());break;
                case Calendar.SATURDAY: clientePosicao.setPcpa(clientePosicao.getPsab());break;
                default: clientePosicao.setPcpa("0.00");break;
            }


            txtPcpa.setText("-" + clientePosicao.getPcpa().toString() + "% desconto check-in");


        }

        return view;
    }
}
