package br.com.alphasolutions.checkin.activity;

import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.location.LocationManager;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

import br.com.alphasolutions.checkin.MainfragmentActivity;
import br.com.alphasolutions.checkin.R;

public class SplashActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);


        LocationManager manager = (LocationManager) getSystemService( Context.LOCATION_SERVICE );
        boolean isOn = manager.isProviderEnabled( LocationManager.GPS_PROVIDER);

        if ( !isOn )
        {
            AlertDialog.Builder builder = new AlertDialog.Builder(this);
            builder.setTitle("Sem Sinal de GPS / Location");
            builder.setMessage("Para continuar ative os serviços de localização de seu aparelho!");

            builder.setPositiveButton("ENTENDI", new DialogInterface.OnClickListener() {
                @Override
                public void onClick(DialogInterface dialogInterface, int i) {
                    finish();
                }
            });

            AlertDialog dialog = builder.create();
            dialog.show();
        }
        else {
            Thread myTread = new Thread() {
                @Override
                public void run() {
                    try {
                        sleep(3000);
                        Intent intent = new Intent(getApplicationContext(), MainActivity.class);
                        startActivity(intent);
                        finish();
                    } catch (InterruptedException e) {
                        e.printStackTrace();
                    }
                }


            };
            myTread.start();

        }
    }
}
