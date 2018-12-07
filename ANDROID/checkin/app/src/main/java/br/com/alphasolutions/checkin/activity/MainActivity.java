package br.com.alphasolutions.checkin.activity;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.content.pm.ActivityInfo;
import android.content.pm.PackageManager;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.support.v4.view.ViewPager;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
//import android.support.v7.appcompat.BuildConfig;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import com.facebook.login.LoginManager;
import com.facebook.login.widget.LoginButton;
import adapter.TabsAdapter;
import br.com.alphasolutions.checkin.R;
import database.DadosOpenHelper;
import dominio.entidades.Usuario;
import dominio.repositorio.UsuarioRepositorio;
import fragments.Opcao1Fragment;
import fragments.Opcao2Fragment;
import fragments.Opcao3Fragment;
import util.SlidingTabLayout;

public class MainActivity extends AppCompatActivity {

/*
    private String[] permissoesNecessarias = new String[]{
            Manifest.permission.ACCESS_FINE_LOCATION};
*/

    private Toolbar toolbarPrincipal;

    private SlidingTabLayout slidingTabLayout;
    private ViewPager viewPager;
    private static final String ARQUIVO_PREFERENCIA = "ArquivoPreferencia";
    private LoginButton actionface;
    private String codlojista;
    private String razao;
    private String cnpj;
    public static boolean actionRefresh;



    private Usuario usuario;
    private UsuarioRepositorio usuarioRepositorio;


    private SQLiteDatabase conexao;
    private DadosOpenHelper dadosOpenHelper;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        this.setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);

       // Permissao.validaPermissoes(1,this,permissoesNecessarias);

              //configura Toolbar
        toolbarPrincipal = (Toolbar) findViewById(R.id.toolbar_principal);
        toolbarPrincipal.setLogo(R.drawable.logocheck);
        toolbarPrincipal.setTitle("");
        setSupportActionBar(toolbarPrincipal);
      //  actionface = (LoginButton) findViewById(R.id.action_face);


        //CONFIGURANDO ABAS DO MENU INFERIOR ( TABS )
        slidingTabLayout = (SlidingTabLayout) findViewById(R.id.sliding_tab_main);
        viewPager = (ViewPager) findViewById(R.id.view_pager_main);

        //CONFIGURANDO O ADAPTER
        TabsAdapter tabsAdapter = new TabsAdapter(getSupportFragmentManager(), this);
        viewPager.setAdapter(tabsAdapter);
        slidingTabLayout.setCustomTabView(R.layout.tabs_view_customizado, R.id.text_item_tab);
        slidingTabLayout.setDistributeEvenly(true);
        slidingTabLayout.setViewPager( viewPager );

        actionRefresh = false;



        // verifica se existe o lojista nas preferencias
        lerPreferencias();

        // Verifica se o usuário ja fez login, se sim inicializa o aplicativo
        // Se não vai para tela de Login

        criarConexao();


        if ( codlojista.equals("0")) {

            //CHECA SE O USUARIO ESTA LOGADO OU NAO
            if (!usuarioRepositorio.usuarioExists()) {


                // cria as preferencias pela primeira vez e inicializa com dados padroes
                // definição padrao para arquivo de preferencia

                SharedPreferences pref = getSharedPreferences(ARQUIVO_PREFERENCIA, 0);
                SharedPreferences.Editor editor = pref.edit();
                editor.putInt("raio", 5);
                editor.putString("categoria", "0");

                editor.commit();

                Intent intent = new Intent(getApplicationContext(), LoginActivity.class);
                startActivity(intent);
                finish();

            } else {

                Usuario local = usuarioRepositorio.usuarioLocal();

                // grava dados do usuario logado no arquivo de preferencias

                SharedPreferences pref = getSharedPreferences(ARQUIVO_PREFERENCIA, 0);
                SharedPreferences.Editor editor = pref.edit();


                editor.putString("usuario", local.codigousuario);
                editor.putString("nome", local.nome);
                editor.putString("email", local.email);
                editor.putString("iscompleto", local.iscompleto);

                editor.commit();

            }

        }
        else
        {
            this.setVisible(false);
            Intent intent = new Intent(getApplicationContext(), LojistaActivity.class);
            startActivity(intent);
            finish();
        }


    }



    private void lerPreferencias()
    {
        SharedPreferences pref =  getApplicationContext().getSharedPreferences(ARQUIVO_PREFERENCIA, 0);


        codlojista = pref.getString("codlojista", "0");
        razao = pref.getString("razao", " ");
        cnpj = pref.getString("cnpj", "0");


    }


    public void onRequestPermissionsResult(int requestCode, String[] permissions, int[] grantResults){
        super.onRequestPermissionsResult(requestCode, permissions, grantResults);

        for(int resultado : grantResults){

            if ( resultado == PackageManager.PERMISSION_DENIED){
                alertaValidacaoPermissao();
            }
        }
    }

    private void alertaValidacaoPermissao(){

        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle("Permissões Negadas");
        builder.setMessage("Para utilizar o CHECK-IN cash você precisa permitir o acesso à sua localização");

        builder.setPositiveButton("CONFIRMAR", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                finish();
            }
        });

        AlertDialog dialog = builder.create();
        dialog.show();

    }
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        MenuInflater inflater = getMenuInflater();
        inflater.inflate(R.menu.menu_main, menu);

        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {

        switch (item.getItemId()){
            case R.id.action_sair:

                usuarioRepositorio.limparBaseDados();
                LoginManager.getInstance().logOut();


                // grava dados do usuario logado no arquivo de preferencias

                SharedPreferences pref = getSharedPreferences(ARQUIVO_PREFERENCIA, 0);
                SharedPreferences.Editor editor = pref.edit();


                // garante que a sessão de preferencia associada ao lojista fique sem paramentros
                editor.putString("codlojista", "0");
                editor.putString("razao", " ");
                editor.putString("cnpj", "0");

                editor.commit();


                finish();

                Intent intent = new Intent(this, LoginActivity.class);
                startActivity(intent);


                return true;
            case R.id.action_sincronizar:

                //ATUALIZA OS ITENS DO Fragment1, Fragment2 e 3


                //Fragment 1
                TabsAdapter adapterAtualiza = (TabsAdapter) viewPager.getAdapter();

                Opcao1Fragment home = (Opcao1Fragment) adapterAtualiza.pegaFragmento(0);
                home.atualizaPostagem();


                //Fragment 2
                Opcao2Fragment destaque = (Opcao2Fragment) adapterAtualiza.pegaFragmento(1);
                destaque.atualizaPostagem();


                return true;
            case R.id.action_face:

                Intent intentFace = new Intent(this, LoginfaceActivity.class);
                startActivity(intentFace);

                return true;

            case R.id.action_pin:

                Intent intentPin = new Intent(this, PinActivity.class);
                startActivity(intentPin);

                return true;

            case R.id.action_cadastro:
                Intent intentCad = new Intent(this, ConcluicadastroActivity.class);
                startActivity(intentCad);
                return true;
            default:

                return super.onOptionsItemSelected(item);
        }


    }

    @Override
    protected void onResume() {
        super.onResume();

        if( actionRefresh) {
            //Fragment 1
            TabsAdapter adapterAtualiza = (TabsAdapter) viewPager.getAdapter();

            Opcao1Fragment home = (Opcao1Fragment) adapterAtualiza.pegaFragmento(0);
            home.atualizaPostagem();


            //Fragment 2
            Opcao2Fragment destaque = (Opcao2Fragment) adapterAtualiza.pegaFragmento(1);
            destaque.atualizaPostagem();
        }

    }

    private void criarConexao()
    {
        try
        {

            dadosOpenHelper = new DadosOpenHelper(this);

            conexao = dadosOpenHelper.getWritableDatabase();


           // Toast.makeText(getApplicationContext(), R.string.mensagem_conexao_sucesso, Toast.LENGTH_SHORT).show();

            usuarioRepositorio = new UsuarioRepositorio(conexao);



        }
        catch (SQLException ex)
        {
            AlertDialog.Builder dlg = new AlertDialog.Builder(this);
            dlg.setTitle(R.string.mensagem_titulo_erro);
            dlg.setMessage(ex.getMessage());
            dlg.setNeutralButton(R.string.mensagem_ok,null);
            dlg.show();

        }
    }



}
