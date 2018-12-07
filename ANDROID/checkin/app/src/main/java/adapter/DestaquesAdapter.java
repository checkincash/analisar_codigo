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

import br.com.alphasolutions.checkin.R;
import modelDB.mClientes;

/**
 * Created by User on 02/10/2017.
 */

public class DestaquesAdapter extends ArrayAdapter<mClientes>{

    private Context context;
    private ArrayList<mClientes> destaques;


    public DestaquesAdapter(@NonNull Context c,  @NonNull ArrayList<mClientes> objects) {
        super(c, 0, objects);

        this.context = c;
        this.destaques = objects;

    }


    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        View view = convertView;

        mClientes destaquePosicao = this.destaques.get(position);

        /*

        Verifica se nao existe o objeto view criado
        pois a view utilizada no cache do android e fica na variavel
        contentview

         */

        if(view == null){

            // inicializa ibjeti oara mintagem do layout

            LayoutInflater inflater = (LayoutInflater) context.getSystemService(context.LAYOUT_INFLATER_SERVICE);

            //monta vi view a partir do xml
            view = inflater.inflate(R.layout.lopcao2, parent, false);

        }

        //verifica se exite postagens
        if (destaques.size() > 0) {

            //recupera componente de tela
            ImageView imagemPostagem = (ImageView) view.findViewById(R.id.imageViewDestaqueID);
            TextView titulo = (TextView) view.findViewById(R.id.textViewTituloDestaID);
            TextView nomeEstabelecimento = (TextView) view.findViewById(R.id.textViewRazaoDestaID);
            TextView checkin = (TextView) view.findViewById(R.id.textViewDesCheck);
            TextView rua = (TextView) view.findViewById(R.id.txtDestaqueEnd1ID);
            TextView endereco2 = (TextView) view.findViewById(R.id.txtDestaqueEnd2ID);
            TextView categoria = (TextView) view.findViewById(R.id.textViewDestaqCategoriaID);
            TextView classificacao1 = (TextView) view.findViewById(R.id.textViewDestaqClassificacao1ID);
            TextView classificacao2 = (TextView) view.findViewById(R.id.textViewDestaqClassificacao2ID);
            TextView txtPcpa = (TextView) view.findViewById(R.id.textViewDescontoID2);
            TextView txtDes1 = (TextView) view.findViewById(R.id.txtViewPerDestaqueDesc);
            TextView txtDes2 = (TextView) view.findViewById(R.id.txtViewPerDestaqueDesc2);
            TextView txtDes3 = (TextView) view.findViewById(R.id.txtViewPerDestaqueDesc3);
            TextView txtDesPin  = (TextView)  view.findViewById(R.id.textViewDesPin);


            ImageView imageViewPcpa = (ImageView) view.findViewById(R.id.imageViewDestaquePcpa);
            ImageView imageCheckindestaque = (ImageView) view.findViewById(R.id.imgCheckdestaqueID);



            Typeface myCustomFont = Typeface.createFromAsset(getContext().getAssets(), "fonts/Raleway-SemiBold.ttf");
            Typeface myCustomFont2 = Typeface.createFromAsset(getContext().getAssets(), "fonts/Raleway-Regular.ttf");
            Typeface myCustomFont3 =  Typeface.createFromAsset(getContext().getAssets(),"fonts/Quicksand-Regular.ttf");

            nomeEstabelecimento.setTypeface(myCustomFont);
            checkin.setTypeface(myCustomFont);
            txtDes1.setTypeface(myCustomFont3);
            txtDes2.setTypeface(myCustomFont3);
            txtDes3.setTypeface(myCustomFont3);
            txtDesPin.setTypeface(myCustomFont3);




            if ( destaquePosicao.RetornaQtdePIN().equals("1") )
            {
                txtDesPin.setText("Ganhe " + destaquePosicao.RetornaQtdePIN() + " Pin");
            }
            else {
                txtDesPin.setText("Ganhe " + destaquePosicao.RetornaQtdePIN() + " Pin's");

            }

            Date datapos = new Date();

            Calendar cal = Calendar.getInstance();
            cal.setTime(datapos );
            cal.add(Calendar.DATE, 1);
            datapos = cal.getTime();

            //  Date des = new Date();

            Calendar c = new GregorianCalendar();
            c.setTime(datapos);



            int dia = c.get(c.DAY_OF_WEEK);

            switch(dia){
                case Calendar.SUNDAY: txtDes1.setText("DOM " + destaquePosicao.getPdom()+"%"); break;
                case Calendar.MONDAY: txtDes1.setText("SEG "+ destaquePosicao.getPseg()+"%"); break;
                case Calendar.TUESDAY: txtDes1.setText("TER " + destaquePosicao.getPter()+"%"); break;
                case Calendar.WEDNESDAY: txtDes1.setText("QUA " + destaquePosicao.getPqua()+"%"); break;
                case Calendar.THURSDAY: txtDes1.setText("QUI " + destaquePosicao.getPqui()+"%"); break;
                case Calendar.FRIDAY: txtDes1.setText("SEX " + destaquePosicao.getPsex()+"%"); break;
                case Calendar.SATURDAY: txtDes1.setText("SAB " + destaquePosicao.getPsab()+"%"); break;
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
                case Calendar.SUNDAY: txtDes2.setText("DOM " + destaquePosicao.getPdom()+"%");break;
                case Calendar.MONDAY: txtDes2.setText("SEG " + destaquePosicao.getPseg()+"%");break;
                case Calendar.TUESDAY: txtDes2.setText("TER " + destaquePosicao.getPter()+"%");break;
                case Calendar.WEDNESDAY: txtDes2.setText("QUA " + destaquePosicao.getPqua()+"%");break;
                case Calendar.THURSDAY: txtDes2.setText("QUI " + destaquePosicao.getPqui()+"%");break;
                case Calendar.FRIDAY: txtDes2.setText("SEX " + destaquePosicao.getPsex()+"%");break;
                case Calendar.SATURDAY: txtDes2.setText("SAB " + destaquePosicao.getPsab()+"%");break;
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
                case Calendar.SUNDAY: txtDes3.setText("DOM " + destaquePosicao.getPdom()+"%");break;
                case Calendar.MONDAY: txtDes3.setText("SEG " + destaquePosicao.getPseg()+"%");break;
                case Calendar.TUESDAY: txtDes3.setText("TER "+ destaquePosicao.getPter()+"%");break;
                case Calendar.WEDNESDAY: txtDes3.setText("QUA " + destaquePosicao.getPqua()+"%");break;
                case Calendar.THURSDAY: txtDes3.setText("QUI " + destaquePosicao.getPqui()+"%");break;
                case Calendar.FRIDAY: txtDes3.setText("SEX " + destaquePosicao.getPsex()+"%");break;
                case Calendar.SATURDAY: txtDes3.setText("SAB " + destaquePosicao.getPsab()+"%");break;
                default: txtDes3.setText("0.00%");break;
            }




            rua.setTypeface(myCustomFont2);
            endereco2.setTypeface(myCustomFont2);
            categoria.setTypeface(myCustomFont2);
            classificacao1.setTypeface(myCustomFont2);
            classificacao2.setTypeface(myCustomFont2);


            txtPcpa.setTypeface(myCustomFont);


            Picasso.with(getContext()).load("https://www.checkincash.com.br/app/_lib/file/img/imagempub/" + destaquePosicao.getCnpj() + "/" + destaquePosicao.getFachada()).fit().into(imagemPostagem);
            titulo.setText(destaquePosicao.getTitulo());
            nomeEstabelecimento.setText(destaquePosicao.getNomeEstabelecimento());
            rua.setText(destaquePosicao.getEndereco());
            endereco2.setText(destaquePosicao.getEndereco2());
            categoria.setText(destaquePosicao.getCategoria().toUpperCase());
            classificacao1.setText(destaquePosicao.getClassificacao1());
            classificacao2.setText(destaquePosicao.getClassificacao2());


            if(destaquePosicao.getIscheckin().equals("0"))
                imageCheckindestaque.setVisibility(View.INVISIBLE);
            else
                imageCheckindestaque.setVisibility(View.VISIBLE);

            if( destaquePosicao.getClassificacao1() == "")
                classificacao1.setVisibility(View.INVISIBLE);
            else
                classificacao1.setVisibility(View.VISIBLE);

            if( destaquePosicao.getClassificacao2() == "")
                classificacao2.setVisibility(View.INVISIBLE);
            else
                classificacao2.setVisibility(View.VISIBLE);

            Date d = new Date();
            c = new GregorianCalendar();
            c.setTime(d);

            dia = c.get(c.DAY_OF_WEEK);

            switch(dia){
                case Calendar.SUNDAY: destaquePosicao.setPcpa(destaquePosicao.getPdom());break;
                case Calendar.MONDAY: destaquePosicao.setPcpa(destaquePosicao.getPseg());break;
                case Calendar.TUESDAY: destaquePosicao.setPcpa(destaquePosicao.getPter());break;
                case Calendar.WEDNESDAY: destaquePosicao.setPcpa(destaquePosicao.getPqua());break;
                case Calendar.THURSDAY: destaquePosicao.setPcpa(destaquePosicao.getPqui());break;
                case Calendar.FRIDAY: destaquePosicao.setPcpa(destaquePosicao.getPsex());break;
                case Calendar.SATURDAY: destaquePosicao.setPcpa(destaquePosicao.getPsab());break;
                default: destaquePosicao.setPcpa("0.00");break;
            }

            txtPcpa.setText("-" + destaquePosicao.getPcpa().toString() + "% desconto check-in");

        }





            return view;
    }





}
