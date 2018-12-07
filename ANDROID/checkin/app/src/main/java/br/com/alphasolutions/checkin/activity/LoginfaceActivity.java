package br.com.alphasolutions.checkin.activity;

import android.app.Activity;
import android.content.Intent;
import android.content.pm.ActivityInfo;
import android.graphics.Typeface;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
//import android.support.v7.appcompat.BuildConfig;
import android.util.Log;
import android.widget.TextView;

import com.facebook.CallbackManager;
import com.facebook.FacebookCallback;
import com.facebook.FacebookException;
import com.facebook.FacebookSdk;
import com.facebook.GraphRequest;
import com.facebook.GraphResponse;
import com.facebook.LoggingBehavior;
import com.facebook.login.LoginResult;
import com.facebook.login.widget.LoginButton;

import org.json.JSONObject;

import java.util.Arrays;

import br.com.alphasolutions.checkin.R;

public class LoginfaceActivity extends Activity {

    private CallbackManager callbackManager;
    private LoginButton actionface;
    private TextView msg1;
    private TextView msg2;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_loginface);

        this.setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);


        // LOGIN FACEBOOK
        FacebookSdk.getApplicationName();
        FacebookSdk.sdkInitialize(getApplication());

        /*
        if (BuildConfig.DEBUG) {
            FacebookSdk.setIsDebugEnabled(true);
            FacebookSdk.addLoggingBehavior(LoggingBehavior.INCLUDE_ACCESS_TOKENS);
        }
        */

        FacebookSdk.addLoggingBehavior(LoggingBehavior.INCLUDE_ACCESS_TOKENS);
        actionface = (LoginButton) findViewById(R.id.loginbuttonfaceID);
        actionface.setReadPermissions(Arrays.asList("public_profile", "email", "user_friends"));
        callbackManager = CallbackManager.Factory.create();

        msg1 = (TextView) findViewById(R.id.txtconecte);
        msg2 = (TextView) findViewById(R.id.txtconectese);



        Typeface myCustomFont  =  Typeface.createFromAsset(getAssets(),"fonts/FredokaOne-Regular.ttf");
        Typeface myCustomFont2 =  Typeface.createFromAsset(getAssets(),"fonts/Quicksand-Regular.ttf");

        msg1.setTypeface(myCustomFont2);
        msg2.setTypeface(myCustomFont2);

        // BOTAO LOGIN FACE
        actionface.registerCallback(callbackManager, new FacebookCallback<LoginResult>(){
            @Override
            public void onSuccess(LoginResult loginResult) {



                GraphRequest request = GraphRequest.newMeRequest(
                        loginResult.getAccessToken(),
                        new GraphRequest.GraphJSONObjectCallback() {
                            @Override
                            public void onCompleted(
                                    JSONObject object,
                                    GraphResponse response) {
                                // Application code



                                Log.e("GraphResponse", "-------------" + response.toString());


                            }
                        });
                Bundle parameters = new Bundle();
                parameters.putString("fields", "name, email");
                request.setParameters(parameters);
                request.executeAsync();



            }

            @Override
            public void onCancel() {

            }

            @Override
            public void onError(FacebookException error) {

            }
        });
    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);
        callbackManager.onActivityResult(requestCode,resultCode,data);
    }


}
