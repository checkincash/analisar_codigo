package adapter;


import android.app.Activity;
import android.content.pm.PackageManager;
import android.os.Build;
import android.support.v4.app.ActivityCompat;
import android.support.v4.content.ContextCompat;

import java.util.ArrayList;
import java.util.List;

/**
 * Created by User on 30/06/2017.
 */

public class Permissao {

    public static boolean validaPermissoes(int requestCode, Activity activity, String[] permissoes){

        // efetua verificações de permissão somente nas versoes superiores ou igual a 23
        if(Build.VERSION.SDK_INT >=23 ){


            List<String> listaPermissoes = new ArrayList<String>();

             /* Percorre as permissoes passadas, verificando uma a uma se ja tem as
                permissoes liberadas */

            for(String perm : permissoes){
                Boolean validaPermissao = ContextCompat.checkSelfPermission(activity, perm) == PackageManager.PERMISSION_GRANTED;

                if(!validaPermissao)
                    listaPermissoes.add(perm);
            }

            /* caso a lista esteja vazia, nao solicitar permissoes */

            if(listaPermissoes.isEmpty())
                return true;

            /* normatizando o arrayList para um array de Sting
            *  para passar para a classe ActivityCompat*/
            String[] normatizadoNovasPermissoes = new String[listaPermissoes.size()];
            listaPermissoes.toArray(normatizadoNovasPermissoes);

            /* Solicitar a Permissão */
            ActivityCompat.requestPermissions(activity, normatizadoNovasPermissoes, requestCode);
        }
        return true;
    }


}
