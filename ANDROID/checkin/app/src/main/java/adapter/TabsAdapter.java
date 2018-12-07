package adapter;

import android.content.Context;
import android.graphics.drawable.Drawable;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentStatePagerAdapter;
import android.support.v4.content.ContextCompat;
import android.text.SpannableString;
import android.text.Spanned;
import android.text.style.ImageSpan;
import android.util.DisplayMetrics;
import android.view.ViewGroup;

import java.util.HashMap;

import br.com.alphasolutions.checkin.R;

import fragments.Opcao1Fragment;
import fragments.Opcao2Fragment;
import fragments.Opcao3Fragment;

/**
 * Created by User on 26/09/2017.
 */

public class TabsAdapter extends FragmentStatePagerAdapter {

    private Context context;
   // private String[] abas = new String[]{"HOME","USUARIO"};
    private int[] icones = new int[]{R.drawable.ic_action_lista, R.drawable.ic_action_destaque, R.drawable.ic_action_categoria};
    private int tamanhoIcone;
    private HashMap<Integer, Fragment> fragmentoUtilizado;

    public TabsAdapter(FragmentManager fm, Context c) {
        super(fm);


        this.fragmentoUtilizado = new HashMap<>();

        //RECUPERA O DIMENCIONAMENTO DA ESCALA DA TELA DO CELULAR
        double escala = c.getResources().getDisplayMetrics().density;

        tamanhoIcone = (int) (26 * escala);
        this.context = c;
    }

    @Override
    public Fragment getItem(int position)
    {
        Fragment fragment = null;

        switch (position){

            case 0 :  //Primeira Aba
                fragment = new Opcao1Fragment();
                fragmentoUtilizado.put(position, fragment);
                break;
            case 1 :  // Segunda Aba
                fragment = new Opcao2Fragment();
                fragmentoUtilizado.put(position, fragment);
                break;
            case 2 :  // Terceira Aba
                fragment = new Opcao3Fragment();
                fragmentoUtilizado.put(position, fragment);
                break;

        }

        return fragment;
    }

    @Override
    public void destroyItem(ViewGroup container, int position, Object object) {
        super.destroyItem(container, position, object);

        fragmentoUtilizado.remove(position);
    }

    public  Fragment pegaFragmento(Integer indice){

        return fragmentoUtilizado.get(indice);

    }

    @Override
    public CharSequence getPageTitle(int position) {
        // return abas[position];

        //RECUPERAR O ICONE DEACORDO COM A POSICAO
        Drawable drawable = ContextCompat.getDrawable(this.context, icones[position]);
        drawable.setBounds(0,0,tamanhoIcone,tamanhoIcone); // TAMANHO PADRAO DOS ICONES

        //PERMITE COLOCAR UMA IMAGEM DENTRO DE UM TEXTO
        ImageSpan imageSpan = new ImageSpan(drawable);

        // COLOCAR DENTRO DO CHARSEQUENCE
        SpannableString spannableString = new SpannableString(" ");
        spannableString.setSpan(imageSpan,0,spannableString.length(), Spanned.SPAN_EXCLUSIVE_EXCLUSIVE);

        // RETORNA O DRAWABLE PARA CHARSEQUENCE EM IMAGEM EM TEXTO
        return spannableString;




    }

    @Override
    public int getCount() {
        //return abas.length;
        return icones.length;
    }
}
