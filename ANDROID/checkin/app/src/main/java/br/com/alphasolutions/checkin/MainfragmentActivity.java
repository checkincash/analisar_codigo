package br.com.alphasolutions.checkin;

import android.app.Activity;
import android.os.Bundle;
import android.support.v4.app.FragmentTransaction;
import android.support.v7.app.AppCompatActivity;
import android.widget.Button;

import fragments.Opcao1Fragment;

public class MainfragmentActivity extends AppCompatActivity {

    private Button buttonHome;
    private Opcao1Fragment opco1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_mainfragment);

        opco1 = new Opcao1Fragment();

        // Configurar o objeto para o fragmento
        FragmentTransaction  transaction = getSupportFragmentManager().beginTransaction();
        transaction.add(R.id.frameResultadoID, opco1);
        transaction.commit();
    }
}
