<?php
//
   if (!session_id())
   {
   include_once('form_contrato_updt2_mob_session.php');
   @session_start() ;
       if (!function_exists("sc_check_mobile"))
       {
           include_once("../_lib/lib/php/nm_check_mobile.php");
       }
       $_SESSION['scriptcase']['device_mobile'] = sc_check_mobile();
       if ($_SESSION['scriptcase']['device_mobile'])
       {
           if (!isset($_SESSION['scriptcase']['display_mobile']))
           {
               $_SESSION['scriptcase']['display_mobile'] = true;
           }
           if ($_SESSION['scriptcase']['display_mobile'] && isset($_POST['_sc_force_mobile']) && 'out' == $_POST['_sc_force_mobile'])
           {
               $_SESSION['scriptcase']['display_mobile'] = false;
           }
           elseif (!$_SESSION['scriptcase']['display_mobile'] && isset($_POST['_sc_force_mobile']) && 'in' == $_POST['_sc_force_mobile'])
           {
               $_SESSION['scriptcase']['display_mobile'] = true;
           }
       }
       else
       {
           $_SESSION['scriptcase']['display_mobile'] = false;
       }
       if (!$_SESSION['scriptcase']['display_mobile'])
       {
          include_once('form_contrato_updt2.php');
          exit;
       }
   }
   $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_perfil']          = "conn_checkin";
   $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_prod']       = "";
   $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_imagens']    = "";
   $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_imag_temp']  = "";
   $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_doc']        = "";
//
class form_contrato_updt2_mob_ini
{
   var $nm_cod_apl;
   var $nm_nome_apl;
   var $nm_seguranca;
   var $nm_grupo;
   var $nm_grupo_versao;
   var $nm_autor;
   var $nm_versao_sc;
   var $nm_tp_lic_sc;
   var $nm_dt_criacao;
   var $nm_hr_criacao;
   var $nm_autor_alt;
   var $nm_dt_ult_alt;
   var $nm_hr_ult_alt;
   var $nm_timestamp;
   var $cor_bg_table;
   var $border_grid;
   var $cor_bg_grid;
   var $cor_cab_grid;
   var $cor_borda;
   var $cor_txt_cab_grid;
   var $cab_fonte_tipo;
   var $cab_fonte_tamanho;
   var $rod_fonte_tipo;
   var $rod_fonte_tamanho;
   var $cor_rod_grid;
   var $cor_txt_rod_grid;
   var $cor_barra_nav;
   var $cor_titulo;
   var $cor_txt_titulo;
   var $titulo_fonte_tipo;
   var $titulo_fonte_tamanho;
   var $cor_grid_impar;
   var $cor_grid_par;
   var $cor_txt_grid;
   var $texto_fonte_tipo;
   var $texto_fonte_tamanho;
   var $cor_lin_grupo;
   var $cor_txt_grupo;
   var $grupo_fonte_tipo;
   var $grupo_fonte_tamanho;
   var $cor_lin_sub_tot;
   var $cor_txt_sub_tot;
   var $sub_tot_fonte_tipo;
   var $sub_tot_fonte_tamanho;
   var $cor_lin_tot;
   var $cor_txt_tot;
   var $tot_fonte_tipo;
   var $tot_fonte_tamanho;
   var $cor_link_cab;
   var $cor_link_dados;
   var $img_fun_pag;
   var $img_fun_cab;
   var $img_fun_rod;
   var $img_fun_tit;
   var $img_fun_gru;
   var $img_fun_tot;
   var $img_fun_sub;
   var $img_fun_imp;
   var $img_fun_par;
   var $root;
   var $server;
   var $sc_protocolo;
   var $path_prod;
   var $path_link;
   var $path_aplicacao;
   var $path_embutida;
   var $path_botoes;
   var $path_img_global;
   var $path_img_modelo;
   var $path_icones;
   var $path_imagens;
   var $path_imag_cab;
   var $path_imag_temp;
   var $path_libs;
   var $path_doc;
   var $str_lang;
   var $str_schema_all;
   var $str_conf_reg;
   var $path_cep;
   var $path_secure;
   var $path_js;
   var $path_adodb;
   var $path_grafico;
   var $path_atual;
   var $Gd_missing;
   var $sc_site_ssl;
   var $nm_cont_lin;
   var $nm_limite_lin;
   var $nm_limite_lin_prt;
   var $nm_falta_var;
   var $nm_falta_var_db;
   var $nm_tpbanco;
   var $nm_servidor;
   var $nm_usuario;
   var $nm_senha;
   var $nm_database_encoding;
   var $nm_arr_db_extra_args = array();
   var $nm_con_db2 = array();
   var $nm_con_persistente;
   var $nm_con_use_schema;
   var $nm_tabela;
   var $nm_col_dinamica   = array();
   var $nm_order_dinamico = array();
   var $nm_hidden_blocos  = array();
   var $sc_tem_trans_banco;
   var $nm_bases_all;
   var $nm_bases_access;
   var $nm_bases_db2;
   var $nm_bases_ibase;
   var $nm_bases_informix;
   var $nm_bases_mssql;
   var $nm_bases_mysql;
   var $nm_bases_postgres;
   var $nm_bases_oracle;
   var $nm_bases_sqlite;
   var $nm_bases_sybase;
   var $nm_bases_vfp;
   var $nm_bases_odbc;
   var $sc_page;
   var $sc_lig_md5 = array();
   var $sc_lig_target = array();
   var $sc_lig_iframe = array();
//
   function init()
   {
       global
             $nm_url_saida, $nm_apl_dependente, $script_case_init;

      @ini_set('magic_quotes_runtime', 0);
      $this->sc_page = $script_case_init;
      $_SESSION['scriptcase']['sc_num_page'] = $script_case_init;
      $_SESSION['scriptcase']['sc_ctl_ajax'] = 'part';
      $_SESSION['scriptcase']['sc_cnt_sql']  = 0;
      $this->sc_charset['UTF-8'] = 'utf-8';
      $this->sc_charset['ISO-2022-JP'] = 'iso-2022-jp';
      $this->sc_charset['ISO-2022-KR'] = 'iso-2022-kr';
      $this->sc_charset['ISO-8859-1'] = 'iso-8859-1';
      $this->sc_charset['ISO-8859-2'] = 'iso-8859-2';
      $this->sc_charset['ISO-8859-3'] = 'iso-8859-3';
      $this->sc_charset['ISO-8859-4'] = 'iso-8859-4';
      $this->sc_charset['ISO-8859-5'] = 'iso-8859-5';
      $this->sc_charset['ISO-8859-6'] = 'iso-8859-6';
      $this->sc_charset['ISO-8859-7'] = 'iso-8859-7';
      $this->sc_charset['ISO-8859-8'] = 'iso-8859-8';
      $this->sc_charset['ISO-8859-8-I'] = 'iso-8859-8-i';
      $this->sc_charset['ISO-8859-9'] = 'iso-8859-9';
      $this->sc_charset['ISO-8859-10'] = 'iso-8859-10';
      $this->sc_charset['ISO-8859-13'] = 'iso-8859-13';
      $this->sc_charset['ISO-8859-14'] = 'iso-8859-14';
      $this->sc_charset['ISO-8859-15'] = 'iso-8859-15';
      $this->sc_charset['WINDOWS-1250'] = 'windows-1250';
      $this->sc_charset['WINDOWS-1251'] = 'windows-1251';
      $this->sc_charset['WINDOWS-1252'] = 'windows-1252';
      $this->sc_charset['WINDOWS-1253'] = 'windows-1253';
      $this->sc_charset['WINDOWS-1254'] = 'windows-1254';
      $this->sc_charset['WINDOWS-1255'] = 'windows-1255';
      $this->sc_charset['WINDOWS-1256'] = 'windows-1256';
      $this->sc_charset['WINDOWS-1257'] = 'windows-1257';
      $this->sc_charset['KOI8-R'] = 'koi8-r';
      $this->sc_charset['BIG-5'] = 'big5';
      $this->sc_charset['EUC-CN'] = 'EUC-CN';
      $this->sc_charset['GB18030'] = 'GB18030';
      $this->sc_charset['GB2312'] = 'gb2312';
      $this->sc_charset['EUC-JP'] = 'euc-jp';
      $this->sc_charset['SJIS'] = 'shift-jis';
      $this->sc_charset['EUC-KR'] = 'euc-kr';
      $_SESSION['scriptcase']['charset_entities']['UTF-8'] = 'UTF-8';
      $_SESSION['scriptcase']['charset_entities']['ISO-8859-1'] = 'ISO-8859-1';
      $_SESSION['scriptcase']['charset_entities']['ISO-8859-5'] = 'ISO-8859-5';
      $_SESSION['scriptcase']['charset_entities']['ISO-8859-15'] = 'ISO-8859-15';
      $_SESSION['scriptcase']['charset_entities']['WINDOWS-1251'] = 'cp1251';
      $_SESSION['scriptcase']['charset_entities']['WINDOWS-1252'] = 'cp1252';
      $_SESSION['scriptcase']['charset_entities']['BIG-5'] = 'BIG5';
      $_SESSION['scriptcase']['charset_entities']['EUC-CN'] = 'GB2312';
      $_SESSION['scriptcase']['charset_entities']['GB2312'] = 'GB2312';
      $_SESSION['scriptcase']['charset_entities']['SJIS'] = 'Shift_JIS';
      $_SESSION['scriptcase']['charset_entities']['EUC-JP'] = 'EUC-JP';
      $_SESSION['scriptcase']['charset_entities']['KOI8-R'] = 'KOI8-R';
      $_SESSION['scriptcase']['trial_version'] = 'N';
      $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2']['decimal_db'] = "."; 

      $this->nm_cod_apl      = "form_contrato_updt2"; 
      $this->nm_nome_apl     = ""; 
      $this->nm_seguranca    = ""; 
      $this->nm_grupo        = "CheckIn"; 
      $this->nm_grupo_versao = "1"; 
      $this->nm_autor        = "admin"; 
      $this->nm_script_by    = "netmake"; 
      $this->nm_script_type  = "PHP"; 
      $this->nm_versao_sc    = "v9"; 
      $this->nm_tp_lic_sc    = "sb_bronze"; 
      $this->nm_dt_criacao   = "20170821"; 
      $this->nm_hr_criacao   = "090351"; 
      $this->nm_autor_alt    = "admin"; 
      $this->nm_dt_ult_alt   = "20171018"; 
      $this->nm_hr_ult_alt   = "201919"; 
      list($NM_usec, $NM_sec) = explode(" ", microtime()); 
      $this->nm_timestamp    = (float) $NM_sec; 
      $this->nm_app_version  = "1.0.0"; 
// 
      $this->border_grid           = ""; 
      $this->cor_bg_grid           = ""; 
      $this->cor_bg_table          = ""; 
      $this->cor_borda             = ""; 
      $this->cor_cab_grid          = ""; 
      $this->cor_txt_pag           = ""; 
      $this->cor_link_pag          = ""; 
      $this->pag_fonte_tipo        = ""; 
      $this->pag_fonte_tamanho     = ""; 
      $this->cor_txt_cab_grid      = ""; 
      $this->cab_fonte_tipo        = ""; 
      $this->cab_fonte_tamanho     = ""; 
      $this->rod_fonte_tipo        = ""; 
      $this->rod_fonte_tamanho     = ""; 
      $this->cor_rod_grid          = ""; 
      $this->cor_txt_rod_grid      = ""; 
      $this->cor_barra_nav         = ""; 
      $this->cor_titulo            = ""; 
      $this->cor_txt_titulo        = ""; 
      $this->titulo_fonte_tipo     = ""; 
      $this->titulo_fonte_tamanho  = ""; 
      $this->cor_grid_impar        = ""; 
      $this->cor_grid_par          = ""; 
      $this->cor_txt_grid          = ""; 
      $this->texto_fonte_tipo      = ""; 
      $this->texto_fonte_tamanho   = ""; 
      $this->cor_lin_grupo         = ""; 
      $this->cor_txt_grupo         = ""; 
      $this->grupo_fonte_tipo      = ""; 
      $this->grupo_fonte_tamanho   = ""; 
      $this->cor_lin_sub_tot       = ""; 
      $this->cor_txt_sub_tot       = ""; 
      $this->sub_tot_fonte_tipo    = ""; 
      $this->sub_tot_fonte_tamanho = ""; 
      $this->cor_lin_tot           = ""; 
      $this->cor_txt_tot           = ""; 
      $this->tot_fonte_tipo        = ""; 
      $this->tot_fonte_tamanho     = ""; 
      $this->cor_link_cab          = ""; 
      $this->cor_link_dados        = ""; 
      $this->img_fun_pag           = ""; 
      $this->img_fun_cab           = ""; 
      $this->img_fun_rod           = ""; 
      $this->img_fun_tit           = ""; 
      $this->img_fun_gru           = ""; 
      $this->img_fun_tot           = ""; 
      $this->img_fun_sub           = ""; 
      $this->img_fun_imp           = ""; 
      $this->img_fun_par           = ""; 
// 
      $NM_dir_atual = getcwd();
      if (empty($NM_dir_atual))
      {
          $str_path_sys          = (isset($_SERVER['SCRIPT_FILENAME'])) ? $_SERVER['SCRIPT_FILENAME'] : $_SERVER['ORIG_PATH_TRANSLATED'];
          $str_path_sys          = str_replace("\\", '/', $str_path_sys);
      }
      else
      {
          $sc_nm_arquivo         = explode("/", $_SERVER['PHP_SELF']);
          $str_path_sys          = str_replace("\\", "/", getcwd()) . "/" . $sc_nm_arquivo[count($sc_nm_arquivo)-1];
      }
      //check publication with the prod
      $str_path_apl_url = $_SERVER['PHP_SELF'];
      $str_path_apl_url = str_replace("\\", '/', $str_path_apl_url);
      $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/"));
      $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/")+1);
      $str_path_apl_dir = substr($str_path_sys, 0, strrpos($str_path_sys, "/"));
      $str_path_apl_dir = substr($str_path_apl_dir, 0, strrpos($str_path_apl_dir, "/")+1);
      //check prod
      if(empty($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_prod']))
      {
              /*check prod*/$_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_prod'] = $str_path_apl_url . "_lib/prod";
      }
      //check img
      if(empty($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_imagens']))
      {
              /*check img*/$_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_imagens'] = $str_path_apl_url . "_lib/file/img";
      }
      //check tmp
      if(empty($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_imag_temp']))
      {
              /*check tmp*/$_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_imag_temp'] = $str_path_apl_url . "_lib/tmp";
      }
      //check doc
      if(empty($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_doc']))
      {
              /*check doc*/$_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_doc'] = $str_path_apl_dir . "_lib/file/doc";
      }
      //end check publication with the prod
// 
      $this->sc_site_ssl     = (isset($_SERVER['HTTP_REFERER']) && strtolower(substr($_SERVER['HTTP_REFERER'], 0, 5)) == 'https') ? true : false;
      $this->sc_protocolo    = ($this->sc_site_ssl) ? 'https://' : 'http://';
      $this->path_prod       = $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_prod'];
      $this->path_imagens    = $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_imagens'];
      $this->path_imag_temp  = $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_imag_temp'];
      $this->path_doc        = $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_path_doc'];
      if (!isset($_SESSION['scriptcase']['str_lang']) || empty($_SESSION['scriptcase']['str_lang']))
      {
          $_SESSION['scriptcase']['str_lang'] = "pt_br";
      }
      if (!isset($_SESSION['scriptcase']['str_conf_reg']) || empty($_SESSION['scriptcase']['str_conf_reg']))
      {
          $_SESSION['scriptcase']['str_conf_reg'] = "pt_br";
      }
      $this->str_lang        = $_SESSION['scriptcase']['str_lang'];
      $this->str_conf_reg    = $_SESSION['scriptcase']['str_conf_reg'];
      $this->str_schema_all  = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "Sc9_Rhino/Sc9_Rhino";
      $this->server          = (isset($_SERVER['SERVER_NAME'])) ? $_SERVER['SERVER_NAME'] : $_SERVER['HTTP_HOST'];
      if (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != 80 && !$this->sc_site_ssl )
      {
          $this->server         .= ":" . $_SERVER['SERVER_PORT'];
      }
      $this->server_pdf      = $this->sc_protocolo . $this->server;
      $this->server          = "";
      $this->sc_protocolo    = "";
      $str_path_web          = $_SERVER['PHP_SELF'];
      $str_path_web          = str_replace("\\", '/', $str_path_web);
      $str_path_web          = str_replace('//', '/', $str_path_web);
      $this->root            = substr($str_path_sys, 0, -1 * strlen($str_path_web));
      $this->path_aplicacao  = substr($str_path_sys, 0, strrpos($str_path_sys, '/'));
      $this->path_aplicacao  = substr($this->path_aplicacao, 0, strrpos($this->path_aplicacao, '/')) . '/form_contrato_updt2';
      $this->path_embutida   = substr($this->path_aplicacao, 0, strrpos($this->path_aplicacao, '/') + 1);
      $this->path_aplicacao .= '/';
      $this->path_link       = substr($str_path_web, 0, strrpos($str_path_web, '/'));
      $this->path_link       = substr($this->path_link, 0, strrpos($this->path_link, '/')) . '/';
      $this->path_help       = $this->path_link . "_lib/webhelp/";
      $this->path_lang       = "../_lib/lang/";
      $this->path_lang_js    = "../_lib/js/";
      $this->path_botoes     = $this->path_link . "_lib/img";
      $this->path_img_global = $this->path_link . "_lib/img";
      $this->path_img_modelo = $this->path_link . "_lib/img";
      $this->path_icones     = $this->path_link . "_lib/img";
      $this->path_imag_cab   = $this->path_link . "_lib/img";
      $this->path_btn        = $this->root . $this->path_link . "_lib/buttons/";
      $this->path_css        = $this->root . $this->path_link . "_lib/css/";
      $this->path_lib_php    = $this->root . $this->path_link . "_lib/lib/php/";
      $this->url_lib_js      = $this->path_link . "_lib/lib/js/";
      $this->url_lib         = $this->path_link . '/_lib/';
      $this->url_third       = $this->path_prod . '/third/';
      $this->path_cep        = $this->path_prod . "/cep";
      $this->path_cor        = $this->path_prod . "/cor";
      $this->path_js         = $this->path_prod . "/lib/js";
      $this->path_libs       = $this->root . $this->path_prod . "/lib/php";
      $this->path_third      = $this->root . $this->path_prod . "/third";
      $this->path_secure     = $this->root . $this->path_prod . "/secure";
      $this->path_adodb      = $this->root . $this->path_prod . "/third/adodb";

      global $inicial_form_contrato_updt2_mob;
      if (isset($_SESSION['scriptcase']['user_logout']))
      {
          foreach ($_SESSION['scriptcase']['user_logout'] as $ind => $parms)
          {
              if (isset($_SESSION[$parms['V']]) && $_SESSION[$parms['V']] == $parms['U'])
              {
                  $nm_apl_dest = $parms['R'];
                  $dir = explode("/", $nm_apl_dest);
                  if (count($dir) == 1)
                  {
                      $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
                      $nm_apl_dest = $this->path_link . SC_dir_app_name($nm_apl_dest) . "/";
                  }
                  unset($_SESSION['scriptcase']['user_logout'][$ind]);
                  if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag) && $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag)
                  {
                      $inicial_form_contrato_updt2_mob->contr_->NM_ajax_info['redir']['action']  = $nm_apl_dest;
                      $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['redir']['target']  = $parms['T'];
                      $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['redir']['metodo']  = "post";
                      $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['redir']['script_case_init']  = $this->sc_page;
                      $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['redir']['script_case_session']  = session_id();
                      form_contrato_updt2_mob_pack_ajax_response();
                      exit;
                  }
?>
                  <html>
                  <body>
                  <form name="FRedirect" method="POST" action="<?php echo $nm_apl_dest; ?>" target="<?php echo $parms['T']; ?>">
                  </form>
                  <script>
                   document.FRedirect.submit();
                  </script>
                  </body>
                  </html>
<?php
                  exit;
              }
          }
      }
      $str_path = substr($this->path_prod, 0, strrpos($this->path_prod, '/') + 1); 
      if (!is_file($this->root . $str_path . 'devel/class/xmlparser/nmXmlparserIniSys.class.php'))
      {
          unset($_SESSION['scriptcase']['nm_sc_retorno']);
          unset($_SESSION['scriptcase']['form_contrato_updt2']['glo_nm_conexao']);
      }
      include($this->path_lang . $this->str_lang . ".lang.php");
      include($this->path_lang . "config_region.php");
      include($this->path_lang . "lang_config_region.php");
      $_SESSION['scriptcase']['charset'] = "ISO-8859-1";
      ini_set('default_charset', $_SESSION['scriptcase']['charset']);
      $_SESSION['scriptcase']['charset_html']  = (isset($this->sc_charset[$_SESSION['scriptcase']['charset']])) ? $this->sc_charset[$_SESSION['scriptcase']['charset']] : $_SESSION['scriptcase']['charset'];

      asort($this->Nm_lang_conf_region);
      foreach ($this->Nm_lang_conf_region as $ind => $dados)
      {
         if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
         {
             $this->Nm_lang_conf_region[$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
         }
      }
      if (isset($this->Nm_lang['lang_errm_dbcn_conn']))
      {
          $_SESSION['scriptcase']['db_conn_error'] = $this->Nm_lang['lang_errm_dbcn_conn'];
      }
      if (!function_exists("mb_convert_encoding"))
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_xtmb'] . "</font></div>";exit;
      } 
      elseif (!function_exists("sc_convert_encoding"))
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_xtsc'] . "</font></div>";exit;
      } 
      foreach ($this->Nm_conf_reg[$this->str_conf_reg] as $ind => $dados)
      {
          if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
          {
              $this->Nm_conf_reg[$this->str_conf_reg][$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
      }
      foreach ($this->Nm_lang as $ind => $dados)
      {
          if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($ind))
          {
              $ind = sc_convert_encoding($ind, $_SESSION['scriptcase']['charset'], "UTF-8");
              $this->Nm_lang[$ind] = $dados;
          }
          if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
          {
              $this->Nm_lang[$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
      }
      if (isset($_SESSION['sc_session']['SC_parm_violation']))
      {
          unset($_SESSION['sc_session']['SC_parm_violation']);
          echo "<html>";
          echo "<body>";
          echo "<table align=\"center\" width=\"50%\" border=1 height=\"50px\">";
          echo "<tr>";
          echo "   <td align=\"center\">";
          echo "       <b><font size=4>" . $this->Nm_lang['lang_errm_ajax_data'] . "</font>";
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          echo "</body>";
          echo "</html>";
          exit;
      }
      $PHP_ver = str_replace(".", "", phpversion()); 
      if (substr($PHP_ver, 0, 3) < 434)
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_phpv'] . "</font></div>";exit;
      }
      if (file_exists($this->path_libs . "/ver.dat"))
      {
          $SC_ver = file($this->path_libs . "/ver.dat"); 
          $SC_ver = str_replace(".", "", $SC_ver[0]); 
          if (substr($SC_ver, 0, 5) < 40015)
          {
              echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_incp'] . "</font></div>";exit;
          } 
      } 
      if (-1 != version_compare(phpversion(), '5.0.0'))
      {
         $this->path_grafico    = $this->root . $this->path_prod . "/third/jpgraph5/src";
      }
      else
      {
          $this->path_grafico    = $this->root . $this->path_prod . "/third/jpgraph4/src";
      }
      $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2']['path_doc'] = $this->path_doc; 
      $_SESSION['scriptcase']['nm_path_prod'] = $this->root . $this->path_prod . "/"; 
      $_SESSION['scriptcase']['nm_root_cep']  = $this->root; 
      $_SESSION['scriptcase']['nm_path_cep']  = $this->path_cep; 
      if (empty($this->path_imag_cab))
      {
          $this->path_imag_cab = $this->path_img_global;
      }
      if (!is_dir($this->root . $this->path_prod))
      {
          echo "<style type=\"text/css\">";
          echo ".scButton_default { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #3C4858; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 0 12px !important;  }";
          echo ".scButton_disabled { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #7d7d7d; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 0 12px;  }";
          echo ".scButton_group { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #3C4858; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 7.8px 15px;margin:0px -5px !important;  }";
          echo ".scButton_groupdisabled { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #7d7d7d; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 7.8px 15px;margin:0px -5px !important;  }";
          echo ".scButton_groupfirst { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #3C4858; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 7.8px 15px;  }";
          echo ".scButton_grouplast { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #3C4858; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 0 12px;  }";
          echo ".scButton_onmousedown { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;box-shadow: inset 0 1px 0 rgba(31, 45, 61, 0.15);; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #1B8FC8;}.scButton_default:active img{filter: brightness(2)}.scButton_default:active{; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_onmouseover { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;box-shadow: inset 0 -1px 0 rgba(31, 45, 61, 0.15);; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #1B8FC8;}.scButton_default:hover img, .scButton_groupfirst:hover img, .scButton_group:hover img{filter: brightness(2);}.scButton_default:hover{; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_small { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #3C4858; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 3px 13px !important;  }";
          echo ".scLink_default { text-decoration: underline; font-size: 13px; color: #1a0dab;  }";
          echo ".scLink_default:visited { text-decoration: underline; font-size: 13px; color: #660099;  }";
          echo ".scLink_default:active { text-decoration: underline; font-size: 13px; color: #1a0dab;  }";
          echo ".scLink_default:hover { text-decoration: underline; font-size: 13px; color: #1a0dab;  }";
          echo "</style>";
          echo "<table width=\"80%\" border=\"1\" height=\"117\">";
          echo "<tr>";
          echo "   <td bgcolor=\"\">";
          echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_cmlb_nfnd'] . "</font>";
          echo "  " . $this->root . $this->path_prod;
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          if (!$_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_outra_jan']) || $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_outra_jan'] != 'form_contrato_updt2_mob')) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
?>
                  <input type="button" id="sai" onClick="window.location='<?php echo $_SESSION['scriptcase']['nm_sc_retorno'] ?>'; return false" class="scButton_default" value="<?php echo $this->Nm_lang['lang_btns_back'] ?>" title="<?php echo $this->Nm_lang['lang_btns_back_hint'] ?>" style="<?php echo $sCondStyle; ?>vertical-align: middle;display: ''">

<?php
              } 
              else 
              { 
?>
                  <input type="button" id="sai" onClick="window.location='<?php echo $nm_url_saida ?>'; return false" class="scButton_default" value="<?php echo $this->Nm_lang['lang_btns_exit'] ?>" title="<?php echo $this->Nm_lang['lang_btns_exit_hint'] ?>" style="<?php echo $sCondStyle; ?>vertical-align: middle;display: ''">

<?php
              } 
          } 
          exit ;
      }

      $this->path_atual  = getcwd();
      $opsys = strtolower(php_uname());

      global $under_dashboard, $dashboard_app, $own_widget, $parent_widget, $compact_mode;
      if (!isset($_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['under_dashboard']))
      {
          $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['under_dashboard'] = false;
          $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['dashboard_app']   = '';
          $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['own_widget']      = '';
          $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['parent_widget']   = '';
          $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['compact_mode']    = false;
      }
      if (isset($_GET['under_dashboard']) && 1 == $_GET['under_dashboard'])
      {
          if (isset($_GET['own_widget']) && 'dbifrm_widget' == substr($_GET['own_widget'], 0, 13)) {
              $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['own_widget'] = $_GET['own_widget'];
              $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['under_dashboard'] = true;
              if (isset($_GET['dashboard_app'])) {
                  $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['dashboard_app'] = $_GET['dashboard_app'];
              }
              if (isset($_GET['parent_widget'])) {
                  $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['parent_widget'] = $_GET['parent_widget'];
              }
              if (isset($_GET['compact_mode'])) {
                  $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['compact_mode'] = 1 == $_GET['compact_mode'];
              }
          }
      }
      elseif (isset($under_dashboard) && 1 == $under_dashboard)
      {
          if (isset($own_widget) && 'dbifrm_widget' == substr($own_widget, 0, 13)) {
              $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['own_widget'] = $own_widget;
              $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['under_dashboard'] = true;
              if (isset($dashboard_app)) {
                  $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['dashboard_app'] = $dashboard_app;
              }
              if (isset($parent_widget)) {
                  $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['parent_widget'] = $parent_widget;
              }
              if (isset($compact_mode)) {
                  $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['compact_mode'] = 1 == $compact_mode;
              }
          }
      }
      if (!isset($_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['maximized']))
      {
          $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['maximized'] = false;
      }
      if (isset($_GET['maximized']))
      {
          $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['maximized'] = 1 == $_GET['maximized'];
      }
      if ($_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['under_dashboard'])
      {
          $sTmpDashboardApp = $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['dashboard_info']['dashboard_app'];
          if ('' != $sTmpDashboardApp && isset($_SESSION['scriptcase']['dashboard_targets'][$sTmpDashboardApp]["form_contrato_updt2_mob"]))
          {
              foreach ($_SESSION['scriptcase']['dashboard_targets'][$sTmpDashboardApp]["form_contrato_updt2_mob"] as $sTmpTargetLink => $sTmpTargetWidget)
              {
                  if (isset($this->sc_lig_target[$sTmpTargetLink]))
                  {
                      if (isset($this->sc_lig_iframe[$this->sc_lig_target[$sTmpTargetLink]]))
                      {
                          $this->sc_lig_iframe[$this->sc_lig_target[$sTmpTargetLink]] = $sTmpTargetWidget;
                      }
                      $this->sc_lig_target[$sTmpTargetLink] = $sTmpTargetWidget;
                  }
              }
          }
      }
      $this->nm_cont_lin       = 0;
      $this->nm_limite_lin     = 0;
      $this->nm_limite_lin_prt = 0;
// 
      include_once($this->path_adodb . "/adodb.inc.php");
      $this->sc_Include($this->path_libs . "/nm_sec_prod.php", "F", "nm_reg_prod");
      $this->sc_Include($this->path_libs . "/nm_ini_perfil.php", "F", "perfil_lib");
      if(function_exists('set_php_timezone'))  set_php_timezone('form_contrato_updt2_mob'); 
      $this->sc_Include($this->path_lib_php . "/nm_data.class.php", "C", "nm_data") ; 
      $this->sc_Include($this->path_lib_php . "/nm_edit.php", "F", "nmgp_Form_Num_Val") ; 
      $this->sc_Include($this->path_lib_php . "/nm_conv_dados.php", "F", "nm_conv_limpa_dado") ; 
      $this->sc_Include($this->path_lib_php . "/nm_functions.php", "", "") ; 
      $this->nm_data = new nm_data("pt_br");
      global $inicial_form_contrato_updt2_mob, $NM_run_iframe;
      if ((isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag) && $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag) || (isset($_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['embutida_call']) && $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['embutida_call']) || $NM_run_iframe == 1)
      {
           $_SESSION['scriptcase']['sc_ctl_ajax'] = 'part';
      }
      perfil_lib($this->path_libs);
      if (!isset($_SESSION['sc_session'][$this->sc_page]['SC_Check_Perfil']))
      {
          if(function_exists("nm_check_perfil_exists")) nm_check_perfil_exists($this->path_libs, $this->path_prod);
          $_SESSION['sc_session'][$this->sc_page]['SC_Check_Perfil'] = true;
      }
      if (function_exists("nm_check_pdf_server")) $this->server_pdf = nm_check_pdf_server($this->path_libs, $this->server_pdf);
      if (!isset($_SESSION['scriptcase']['sc_num_img']) || empty($_SESSION['scriptcase']['sc_num_img']))
      { 
          $_SESSION['scriptcase']['sc_num_img'] = 1; 
      } 
      $this->regionalDefault();
      $this->sc_tem_trans_banco = false;
      $this->nm_bases_access     = array("access", "ado_access");
      $this->nm_bases_db2        = array("db2", "db2_odbc", "odbc_db2", "odbc_db2v6");
      $this->nm_bases_ibase      = array("ibase", "firebird", "borland_ibase");
      $this->nm_bases_informix   = array("informix", "informix72", "pdo_informix");
      $this->nm_bases_mssql      = array("mssql", "ado_mssql", "odbc_mssql", "mssqlnative", "pdo_sqlsrv", "pdo_dblib");
      $this->nm_bases_mysql      = array("mysql", "mysqlt", "mysqli", "maxsql", "pdo_mysql");
      $this->nm_bases_postgres   = array("postgres", "postgres64", "postgres7", "pdo_pgsql");
      $this->nm_bases_oracle     = array("oci8", "oci805", "oci8po", "odbc_oracle", "oracle");
      $this->nm_bases_sqlite     = array("sqlite", "sqlite3", "pdosqlite");
      $this->nm_bases_sybase     = array("sybase", "pdo_sybase_odbc");
      $this->nm_bases_vfp        = array("vfp");
      $this->nm_bases_odbc       = array("odbc");
      $this->nm_bases_all        = array_merge($this->nm_bases_access, $this->nm_bases_db2, $this->nm_bases_ibase, $this->nm_bases_informix, $this->nm_bases_mssql, $this->nm_bases_mysql, $this->nm_bases_postgres, $this->nm_bases_oracle, $this->nm_bases_sqlite, $this->nm_bases_sybase, $this->nm_bases_vfp, $this->nm_bases_odbc);
      $_SESSION['scriptcase']['nm_bases_security']  = "enc_nm_enc_v1HQNwZSX7DSBYD5B/HgrKVcBOHEF/VorqHQXOH9FaDSrYHQJwDEBODkFeH5FYVoFGHQJKDQBqHANOHuFaHuNOZSrCH5FqDoXGHQJmZ1rqHIveHQXGDMveHEXeDWFGZuJeHQXsZSBiHIBeD5BqHgvsV9BUH5B7VorqD9JmZSB/D1rKHuJeHgBeHEFiV5B3DoF7D9XsDuFaHAveV5BqHgvsVIB/V5X7VoBOD9XOZSB/Z1BeV5FUDENOVkXeDWFqHIJsD9XsZ9JeD1BeD5F7DMvmVcFiV5X7DorqD9BsH9FaHAN7V5X7DMNKZSXeH5FYDoB/D9XsH9FGD1veV5BOHgvsVcFCH5XCVoraDcNwH9FaHArYD5BqDMzGHEBUH5BmDoJeDcXOZSX7Z1BYV5JwHgvsZSrCV5F/VorqD9JmZ1rqHArKHQJwDEBODkFeH5FYVoFGHQJKDQJwHABYHuF7HuNOVIBsDWJeHMrqHQNwZSBqHIrwD5F7HgBYHEJGDuJeHMX7D9JKDQJsZ1N7D5JwDMNOVcBOH5FqHMBiD9BsVIraD1rwV5X7HgBeHErCV5B7ZuJsHQXsDQFUHAvmV5BqDMvmVIB/H5B3DoXGHQNmZSBOHAvmZMJeHgNKZSJ3V5B7VoFGHQFYDuFaHAvmVWBODMBOVcBUDurGDoXGHQXOZSBqHAN7HuFGHgBOZSJ3H5X/DoF7D9XsDQJsDSBYV5FGHgNKDkBsV5X/VEBiHQBiZkFGHAN7HuX7HgvsHENiH5FGVoFGHQXOZ9XGHABYHQrqDMvsVcB/DurGDoXGHQNwH9BqD1zGZMJeHgBeHArCH5FGVoFGHQFYDuBqD1NKVWJsDMvOVIB/DuFGVoBqD9BsZ1F7DSrYD5rqDMrYZSJ3V5B7ZuJsHQBiH9BiHIBeHQF7DMzGDkBsHEFGDoXGHQXOZ1BiHAN7HQFaHgNKVkJqDWB3VoFGHQXODuFaZ1BYHQrqDMrYVcFeDurGDoXGDcFYH9BOHABYHuXGHgBOZSJqH5FGDoF7D9XsDQJsDSBYV5FGHgNKDkBsV5X/VEBiHQNwZ1BOHArYHuFUHgrKHErsDuXKVoFGDcXGZSFUDSzGVWBqDMzGDkB/HEX/DoXGHQBsZSBqHAzGD5JeDMveHArCHEB3VoFGHQXOZSFUHIrwHuNUDMrYVcB/DWBmVoBqD9BsZ1F7DSrYD5rqDMrYZSJ3V5B7ZuJsHQNwZSFUD1BeHuJwHgrwZSNiH5B3DoXGHQBsZSBODSvOZMBqHgveZSJqDuXKVoFGHQFYDQB/HABYHQBOHgrwVIBsH5B7DoXGHQXOZ1X7D1rKHQXGHgvsVkJqDWBmDoF7D9XsDQJsDSBYV5FGHgNKDkBsV5X/VEBiDcFYVINUD1rwHQBOHgNKZSJ3DWrGVoFGDcBiH9FUHABYHQFaHgrwZSJqDurGDoXGHQBsZSBOHIBOZMBODMvCHArsDWB3VoFGHQFYH9BiD1BOVWJeDMvOVIBsV5X/VoBqD9BsZ1F7DSrYD5rqDMrYDkBsHEB3VoJsHQJwZ9JeHAveHuFGHgrKZSrCDWXCDoXGD9BiZ1B/HIrwZMB/DEBeHEJGDWF/VoX7DcBwDuBOHAveHuFGDMNOVcrsH5B7VoFaDcBqZ1FaHAN7V5FaDMrYHEBUH5FYVoJeD9XsZSFGHIrwD5NUDMrwVcFiDWXCVEFGD9BsH9FaD1zGD5raDMBYZSXeDWX7VoBiDcJUDQJwHABYV5BqHgrKV9FiDWXCDoraD9JmZ1FaD1rKV5XGDMzGHEJGDWrGDoNUD9XsZSX7HAvCV5BiHuBYVcFKDur/DoraD9BsZkFUHArKV5BqDEBOZSJGDWrGDoNUD9XsDQJsDSBYV5FGHgrKVcBOV5F/VoFGD9JmZ1B/Z1NOV5BOHgvCDkFeH5FYVoX7D9JKDQX7D1BOV5FGDMzGV9BUHEBmVEX7HQBiZ1X7D1rwHuFGHgvsHEFKV5FqHMBOHQJKDQFUHABYHQXGHgrwV9FiV5FYHIrqDcNmZ1BiHAvmZMXGHgNKDkFeV5FqHIBOHQJeDQFUHAvOVWJeDMvsV9FiH5FqDoJeD9JmZ1B/D1NaD5rqDErKZSXeH5FYDoFUD9NwDQJsHArYVWJsHuvmVcXKV5FGVoraHQJmZ1FaHArKD5BqDEBOHEFiHEFqDoF7DcJeDQFGD1veD5BqHuNODkBOV5F/VoFGHQFYH9BOD1rwD5rqDErKVkXeHEFqDoBOD9NmDQJsD1BeV5FUHuzGDkBOH5XKVoraD9BiVINUDSvOD5FaDEvsZSJGDuFaZuBqD9NwH9X7Z1rwV5JwHuBYVcFiV5X7VoFGDcBqH9FaHAN7V5JeDErKHEBUH5F/DoF7DcJeDQFGD1BeD5JwDMrwZSJ3H5FqDoJeD9JmZ1B/D1NaD5rqDErKZSXeH5FYDoFUD9JKDQJsZ1rwV5BqHuBYVcXKV5X7HIF7DcBqZ1B/D1NaV5X7DEBOHEXeHEFqVoBiD9JKDuBOZ1BYD5JsHgrKV9FiV5FYHIF7DcBqZ1B/Z1NOD5FaDMzGHEXeDuX/VoBiD9XsDQJsZ1rwV5FGHgvsVcBODuFqHMBiD9BsVIraD1rwV5X7HgBeHErsDWrGDoBOHQBiDuBqHINaV5XGDMvOVcBUDWXKVEX7HQJmZ1F7Z1vmD5rqDEBOHArCDWF/DoraHQBiDQJwHABYV5X7DMvOVIBsH5FqVoraHQXGZ1FGD1rwHQJwDEBODkFeH5FYVoFGHQJKDQFaDSN7V5JwHuzGDkBOH5XKVoFaHQJmZ1B/Z1NOV5BODMzGHEXeDuFYDoB/DcJUDQFaDSN7VWJwHuNOVIBOHEFYVoraD9XOZSBqHArKV5FUDMrYZSXeV5FqHIJsHQJeDuBOZ1vCV5Je";
      $this->prep_conect();
      if (isset($_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['initialize']) && $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['initialize'])  
      { 
      }
   }

   function init2()
   {
      if (isset($_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['initialize']) && $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['initialize'])  
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contrato_updt2_mob']['initialize'] = false;
      } 
      $this->conectDB();
      if (!in_array(strtolower($this->nm_tpbanco), $this->nm_bases_all))
      {
          echo "<tr>";
          echo "   <td bgcolor=\"\">";
          echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_nspt'] . "</font>";
          echo "  " . $perfil_trab;
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          if (!$_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_outra_jan']) || $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_outra_jan'] != 'form_contrato_updt2_mob')) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
                  echo "<a href='" . $_SESSION['scriptcase']['nm_sc_retorno'] . "' target='_self'><img border='0' src='" . $this->path_botoes . "/nm_scriptcase9_Rhino_bvoltar.gif' title='" . $this->Nm_lang['lang_btns_rtrn_scrp_hint'] . "' align=absmiddle></a> \n" ; 
              } 
              else 
              { 
                  echo "<a href='$nm_url_saida' target='_self'><img border='0' src='" . $this->path_botoes . "/nm_scriptcase9_Rhino_bsair.gif' title='" . $this->Nm_lang['lang_btns_exit_appl_hint'] . "' align=absmiddle></a> \n" ; 
              } 
          } 
          exit ;
      } 
   }
   function prep_conect()
   {
      $con_devel             =  (isset($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_conexao'])) ? $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_conexao'] : ""; 
      $perfil_trab           = ""; 
      $this->nm_falta_var    = ""; 
      $this->nm_falta_var_db = ""; 
      $nm_crit_perfil        = false;
      if (isset($_SESSION['scriptcase']['sc_connection']) && !empty($_SESSION['scriptcase']['sc_connection']))
      {
          foreach ($_SESSION['scriptcase']['sc_connection'] as $NM_con_orig => $NM_con_dest)
          {
              if (isset($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_conexao']) && $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_conexao'] == $NM_con_orig)
              {
/*NM*/            $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_conexao'] = $NM_con_dest;
              }
              if (isset($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_perfil']) && $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_perfil'] == $NM_con_orig)
              {
/*NM*/            $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_perfil'] = $NM_con_dest;
              }
              if (isset($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_con_' . $NM_con_orig]))
              {
                  $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_con_' . $NM_con_orig] = $NM_con_dest;
              }
          }
      }
      if (isset($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_conexao']))
      {
          db_conect_devel($con_devel, $this->root . $this->path_prod, 'CheckIn', 2); 
          if (empty($_SESSION['scriptcase']['glo_tpbanco']) && empty($_SESSION['scriptcase']['glo_banco']))
          {
              $nm_crit_perfil = true;
          }
      }
      if (isset($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_perfil']) && !empty($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_perfil']))
      {
          $perfil_trab = $_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_perfil'];
      }
      elseif (isset($_SESSION['scriptcase']['glo_perfil']) && !empty($_SESSION['scriptcase']['glo_perfil']))
      {
          $perfil_trab = $_SESSION['scriptcase']['glo_perfil'];
      }
      if (!empty($perfil_trab))
      {
          $_SESSION['scriptcase']['glo_senha_protect'] = "";
          carrega_perfil($perfil_trab, $this->path_libs, "S");
          if (empty($_SESSION['scriptcase']['glo_senha_protect']))
          {
              $nm_crit_perfil = true;
          }
      }
      else
      {
          $perfil_trab = $con_devel;
      }
      if (!$_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['embutida_form'] || !$_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['embutida_proc']) 
      {
      }
// 
      if (!isset($_SESSION['scriptcase']['glo_tpbanco']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_tpbanco; ";
          }
      }
      else
      {
          $this->nm_tpbanco = $_SESSION['scriptcase']['glo_tpbanco']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_servidor']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_servidor; ";
          }
      }
      else
      {
          $this->nm_servidor = $_SESSION['scriptcase']['glo_servidor']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_banco']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_banco; ";
          }
      }
      else
      {
          $this->nm_banco = $_SESSION['scriptcase']['glo_banco']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_usuario']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_usuario; ";
          }
      }
      else
      {
          $this->nm_usuario = $_SESSION['scriptcase']['glo_usuario']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_senha']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_senha; ";
          }
      }
      else
      {
          $this->nm_senha = $_SESSION['scriptcase']['glo_senha']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_autocommit']))
      {
          $this->nm_con_db2['db2_autocommit'] = $_SESSION['scriptcase']['glo_db2_autocommit']; 
      }
      if (isset($_SESSION['scriptcase']['glo_database_encoding']))
      {
          $this->nm_database_encoding = $_SESSION['scriptcase']['glo_database_encoding']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_lib']))
      {
          $this->nm_con_db2['db2_i5_lib'] = $_SESSION['scriptcase']['glo_db2_i5_lib']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_naming']))
      {
          $this->nm_con_db2['db2_i5_naming'] = $_SESSION['scriptcase']['glo_db2_i5_naming']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_commit']))
      {
          $this->nm_con_db2['db2_i5_commit'] = $_SESSION['scriptcase']['glo_db2_i5_commit']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_query_optimize']))
      {
          $this->nm_con_db2['db2_i5_query_optimize'] = $_SESSION['scriptcase']['glo_db2_i5_query_optimize']; 
      }
      if (isset($_SESSION['scriptcase']['glo_use_persistent']))
      {
          $this->nm_con_persistente = $_SESSION['scriptcase']['glo_use_persistent']; 
      }
      if (isset($_SESSION['scriptcase']['glo_use_schema']))
      {
          $this->nm_con_use_schema = $_SESSION['scriptcase']['glo_use_schema']; 
      }
      $this->nm_arr_db_extra_args = array(); 
      if (isset($_SESSION['scriptcase']['glo_use_ssl']))
      {
          $this->nm_arr_db_extra_args['use_ssl'] = $_SESSION['scriptcase']['glo_use_ssl']; 
      }
      if (isset($_SESSION['scriptcase']['glo_mysql_ssl_key']))
      {
          $this->nm_arr_db_extra_args['mysql_ssl_key'] = $_SESSION['scriptcase']['glo_mysql_ssl_key']; 
      }
      if (isset($_SESSION['scriptcase']['glo_mysql_ssl_cert']))
      {
          $this->nm_arr_db_extra_args['mysql_ssl_cert'] = $_SESSION['scriptcase']['glo_mysql_ssl_cert']; 
      }
      if (isset($_SESSION['scriptcase']['glo_mysql_ssl_capath']))
      {
          $this->nm_arr_db_extra_args['mysql_ssl_capath'] = $_SESSION['scriptcase']['glo_mysql_ssl_capath']; 
      }
      if (isset($_SESSION['scriptcase']['glo_mysql_ssl_ca']))
      {
          $this->nm_arr_db_extra_args['mysql_ssl_ca'] = $_SESSION['scriptcase']['glo_mysql_ssl_ca']; 
      }
      if (isset($_SESSION['scriptcase']['glo_mysql_ssl_cipher']))
      {
          $this->nm_arr_db_extra_args['mysql_ssl_cipher'] = $_SESSION['scriptcase']['glo_mysql_ssl_cipher']; 
      }
      $this->date_delim  = "'";
      $this->date_delim1 = "'";
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_access))
      {
          $this->date_delim  = "#";
          $this->date_delim1 = "#";
      }
      if (isset($_SESSION['scriptcase']['glo_decimal_db']) && !empty($_SESSION['scriptcase']['glo_decimal_db']))
      {
         $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2']['decimal_db'] = $_SESSION['scriptcase']['glo_decimal_db']; 
      }
      if (isset($_SESSION['scriptcase']['glo_date_separator']) && !empty($_SESSION['scriptcase']['glo_date_separator']))
      {
          $SC_temp = trim($_SESSION['scriptcase']['glo_date_separator']);
          if (strlen($SC_temp) == 2)
          {
              $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2']['SC_sep_date']  = substr($SC_temp, 0, 1); 
              $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2']['SC_sep_date1'] = substr($SC_temp, 1, 1); 
          }
          else
          {
              $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2']['SC_sep_date']  = $SC_temp; 
              $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2']['SC_sep_date1'] = $SC_temp; 
          }
          $this->date_delim  = $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2']['SC_sep_date'];
          $this->date_delim1 = $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2']['SC_sep_date1'];
      }
      if (empty($this->nm_tabela))
      {
          $this->nm_tabela = "ap_contrato"; 
      }
// 
      if (!empty($this->nm_falta_var) || !empty($this->nm_falta_var_db) || $nm_crit_perfil)
      {
          echo "<style type=\"text/css\">";
          echo ".scButton_default { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #3C4858; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 0 12px !important;  }";
          echo ".scButton_disabled { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #7d7d7d; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 0 12px;  }";
          echo ".scButton_group { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #3C4858; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 7.8px 15px;margin:0px -5px !important;  }";
          echo ".scButton_groupdisabled { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #7d7d7d; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 7.8px 15px;margin:0px -5px !important;  }";
          echo ".scButton_groupfirst { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #3C4858; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 7.8px 15px;  }";
          echo ".scButton_grouplast { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #3C4858; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 0 12px;  }";
          echo ".scButton_onmousedown { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;box-shadow: inset 0 1px 0 rgba(31, 45, 61, 0.15);; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #1B8FC8;}.scButton_default:active img{filter: brightness(2)}.scButton_default:active{; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_onmouseover { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;box-shadow: inset 0 -1px 0 rgba(31, 45, 61, 0.15);; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #1B8FC8;}.scButton_default:hover img, .scButton_groupfirst:hover img, .scButton_group:hover img{filter: brightness(2);}.scButton_default:hover{; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_small { font-family: Tahoma, Arial, sans-serif;box-sizing: border-box;; font-size: 13px; color: #3C4858; font-weight: normal; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 3px 13px !important;  }";
          echo ".scLink_default { text-decoration: underline; font-size: 13px; color: #1a0dab;  }";
          echo ".scLink_default:visited { text-decoration: underline; font-size: 13px; color: #660099;  }";
          echo ".scLink_default:active { text-decoration: underline; font-size: 13px; color: #1a0dab;  }";
          echo ".scLink_default:hover { text-decoration: underline; font-size: 13px; color: #1a0dab;  }";
          echo "</style>";
          echo "<table width=\"80%\" border=\"1\" height=\"117\">";
          if (empty($this->nm_falta_var_db))
          {
              if (!empty($this->nm_falta_var))
              {
                  echo "<tr>";
                  echo "   <td bgcolor=\"\">";
                  echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_glob'] . "</font>";
                  echo "  " . $this->nm_falta_var;
                  echo "   </b></td>";
                  echo " </tr>";
              }
              if ($nm_crit_perfil)
              {
                  echo "<tr>";
                  echo "   <td bgcolor=\"\">";
                  echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_nfnd'] . "</font>";
                  echo "  " . $perfil_trab;
                  echo "   </b></td>";
                  echo " </tr>";
              }
          }
          else
          {
              echo "<tr>";
              echo "   <td bgcolor=\"\">";
              echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_data'] . "</font></b>";
              echo "   </td>";
              echo " </tr>";
          }
          echo "</table>";
          if (!$_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['iframe_menu'] && (!isset($_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['sc_outra_jan']) || $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['sc_outra_jan'] != 'form_contrato_updt2_mob')) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
?>
                  <input type="button" id="sai" onClick="window.location='<?php echo $_SESSION['scriptcase']['nm_sc_retorno'] ?>'; return false" class="scButton_default" value="<?php echo $this->Nm_lang['lang_btns_back'] ?>" title="<?php echo $this->Nm_lang['lang_btns_back_hint'] ?>" style="<?php echo $sCondStyle; ?>vertical-align: middle;display: ''">

<?php
              } 
              else 
              { 
?>
                  <input type="button" id="sai" onClick="window.location='<?php echo $nm_url_saida ?>'; return false" class="scButton_default" value="<?php echo $this->Nm_lang['lang_btns_exit'] ?>" title="<?php echo $this->Nm_lang['lang_btns_exit_hint'] ?>" style="<?php echo $sCondStyle; ?>vertical-align: middle;display: ''">

<?php
              } 
          } 
          exit ;
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_usr']) && !empty($_SESSION['scriptcase']['glo_db_master_usr']))
      {
          $this->nm_usuario = $_SESSION['scriptcase']['glo_db_master_usr']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_pass']) && !empty($_SESSION['scriptcase']['glo_db_master_pass']))
      {
          $this->nm_senha = $_SESSION['scriptcase']['glo_db_master_pass']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_cript']) && !empty($_SESSION['scriptcase']['glo_db_master_cript']))
      {
          $_SESSION['scriptcase']['glo_senha_protect'] = $_SESSION['scriptcase']['glo_db_master_cript']; 
      }
  } 
// 
  function conectDB()
  {
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && isset($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_conexao']))
      { 
          $this->Db = db_conect_devel($_SESSION['scriptcase']['form_contrato_updt2_mob']['glo_nm_conexao'], $this->root . $this->path_prod, 'CheckIn'); 
      } 
      else 
      { 
         if (!isset($this->nm_con_persistente))
         {
            $this->nm_con_persistente = 'N';
         }
         if (!isset($this->nm_con_db2))
         {
            $this->nm_con_db2 = '';
         }
         if (!isset($this->nm_database_encoding))
         {
            $this->nm_database_encoding = '';
         }
         if (!isset($this->nm_arr_db_extra_args))
         {
            $this->nm_arr_db_extra_args = array();
         }
         $this->Db = db_conect($this->nm_tpbanco, $this->nm_servidor, $this->nm_usuario, $this->nm_senha, $this->nm_banco, $glo_senha_protect, "S", $this->nm_con_persistente, $this->nm_con_db2, $this->nm_database_encoding, $this->nm_arr_db_extra_args); 
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_ibase))
      {
          if (function_exists('ibase_timefmt'))
          {
              ibase_timefmt('%Y-%m-%d %H:%M:%S');
          } 
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_sybase))
      {
          $this->Db->fetchMode = ADODB_FETCH_BOTH;
          $this->Db->Execute("set dateformat ymd");
          $this->Db->Execute("set quoted_identifier ON");
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_mssql))
      {
          $this->Db->Execute("set dateformat ymd");
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_oracle))
      {
          $this->Db->Execute("alter session set nls_date_format         = 'yyyy-mm-dd hh24:mi:ss'");
          $this->Db->Execute("alter session set nls_timestamp_format    = 'yyyy-mm-dd hh24:mi:ss'");
          $this->Db->Execute("alter session set nls_timestamp_tz_format = 'yyyy-mm-dd hh24:mi:ss'");
          $this->Db->Execute("alter session set nls_time_format         = 'hh24:mi:ss'");
          $this->Db->Execute("alter session set nls_time_tz_format      = 'hh24:mi:ss'");
          $this->Db->Execute("alter session set nls_numeric_characters  = '.,'");
          $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['decimal_db'] = "."; 
      } 
  }
// 

   function regionalDefault($sConfReg = '')
   {
      if ('' == $sConfReg)
      {
         $sConfReg = $this->str_conf_reg;
      }

      $_SESSION['scriptcase']['reg_conf']['date_format']           = (isset($this->Nm_conf_reg[$sConfReg]['data_format']))              ?  $this->Nm_conf_reg[$sConfReg]['data_format']                  : "ddmmyyyy";
      $_SESSION['scriptcase']['reg_conf']['date_sep']              = (isset($this->Nm_conf_reg[$sConfReg]['data_sep']))                 ?  $this->Nm_conf_reg[$sConfReg]['data_sep']                     : "/";
      $_SESSION['scriptcase']['reg_conf']['date_week_ini']         = (isset($this->Nm_conf_reg[$sConfReg]['prim_dia_sema']))            ?  $this->Nm_conf_reg[$sConfReg]['prim_dia_sema']                : "SU";
      $_SESSION['scriptcase']['reg_conf']['time_format']           = (isset($this->Nm_conf_reg[$sConfReg]['hora_format']))              ?  $this->Nm_conf_reg[$sConfReg]['hora_format']                  : "hhiiss";
      $_SESSION['scriptcase']['reg_conf']['time_sep']              = (isset($this->Nm_conf_reg[$sConfReg]['hora_sep']))                 ?  $this->Nm_conf_reg[$sConfReg]['hora_sep']                     : ":";
      $_SESSION['scriptcase']['reg_conf']['time_pos_ampm']         = (isset($this->Nm_conf_reg[$sConfReg]['hora_pos_ampm']))            ?  $this->Nm_conf_reg[$sConfReg]['hora_pos_ampm']                : "right_without_space";
      $_SESSION['scriptcase']['reg_conf']['time_simb_am']          = (isset($this->Nm_conf_reg[$sConfReg]['hora_simbolo_am']))          ?  $this->Nm_conf_reg[$sConfReg]['hora_simbolo_am']              : "am";
      $_SESSION['scriptcase']['reg_conf']['time_simb_pm']          = (isset($this->Nm_conf_reg[$sConfReg]['hora_simbolo_pm']))          ?  $this->Nm_conf_reg[$sConfReg]['hora_simbolo_pm']              : "pm";
      $_SESSION['scriptcase']['reg_conf']['simb_neg']              = (isset($this->Nm_conf_reg[$sConfReg]['num_sinal_neg']))            ?  $this->Nm_conf_reg[$sConfReg]['num_sinal_neg']                : "-";
      $_SESSION['scriptcase']['reg_conf']['grup_num']              = (isset($this->Nm_conf_reg[$sConfReg]['num_sep_agr']))              ?  $this->Nm_conf_reg[$sConfReg]['num_sep_agr']                  : ".";
      $_SESSION['scriptcase']['reg_conf']['dec_num']               = (isset($this->Nm_conf_reg[$sConfReg]['num_sep_dec']))              ?  $this->Nm_conf_reg[$sConfReg]['num_sep_dec']                  : ",";
      $_SESSION['scriptcase']['reg_conf']['neg_num']               = (isset($this->Nm_conf_reg[$sConfReg]['num_format_num_neg']))       ?  $this->Nm_conf_reg[$sConfReg]['num_format_num_neg']           : 2;
      $_SESSION['scriptcase']['reg_conf']['monet_simb']            = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_simbolo']))        ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_simbolo']            : "R$";
      $_SESSION['scriptcase']['reg_conf']['monet_f_pos']           = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_format_num_pos'])) ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_format_num_pos']     : 3;
      $_SESSION['scriptcase']['reg_conf']['monet_f_neg']           = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_format_num_neg'])) ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_format_num_neg']     : 13;
      $_SESSION['scriptcase']['reg_conf']['grup_val']              = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_sep_agr']))        ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_sep_agr']            : ".";
      $_SESSION['scriptcase']['reg_conf']['dec_val']               = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_sep_dec']))        ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_sep_dec']            : ",";
      $_SESSION['scriptcase']['reg_conf']['num_group_digit']       = (isset($this->Nm_conf_reg[$sConfReg]['num_group_digit']))          ?  $this->Nm_conf_reg[$sConfReg]['num_group_digit']              : "1";
      $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'] = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_group_digit']))    ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_group_digit']        : "1";
      $_SESSION['scriptcase']['reg_conf']['html_dir']              = (isset($this->Nm_conf_reg[$sConfReg]['ger_ltr_rtl']))              ?  " DIR='" . $this->Nm_conf_reg[$sConfReg]['ger_ltr_rtl'] . "'" : "";
      $_SESSION['scriptcase']['reg_conf']['css_dir']               = (isset($this->Nm_conf_reg[$sConfReg]['ger_ltr_rtl']))              ?  $this->Nm_conf_reg[$sConfReg]['ger_ltr_rtl'] : "LTR";
      if ('' == $_SESSION['scriptcase']['reg_conf']['num_group_digit'])
      {
          $_SESSION['scriptcase']['reg_conf']['num_group_digit'] = '1';
      }
      if ('' == $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'])
      {
          $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'] = '1';
      }
   }
   function sc_Include($path, $tp, $name)
   {
       if ((empty($tp) && empty($name)) || ($tp == "F" && !function_exists($name)) || ($tp == "C" && !class_exists($name)))
       {
           include_once($path);
       }
   } // sc_Include
   function sc_Sql_Protect($var, $tp, $conex="")
   {
       if (empty($conex) || $conex == "conn_checkin")
       {
           $TP_banco = $_SESSION['scriptcase']['glo_tpbanco'];
       }
       else
       {
           eval ("\$TP_banco = \$this->nm_con_" . $conex . "['tpbanco'];");
       }
       if ($tp == "date")
       {
           $delim  = "'";
           $delim1 = "'";
           if (in_array(strtolower($TP_banco), $this->nm_bases_access))
           {
               $delim  = "#";
               $delim1 = "#";
           }
           if (isset($_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['SC_sep_date']))
           {
               $delim  = $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['SC_sep_date'];
               $delim1 = $_SESSION['sc_session'][$this->sc_page]['form_contrato_updt2_mob']['SC_sep_date1'];
           }
           return $delim . $var . $delim1;
       }
       else
       {
           return $var;
       }
   } // sc_Sql_Protect
}
//===============================================================================
class form_contrato_updt2_mob_edit
{
    var $contr_form_contrato_updt2_mob;
    function inicializa()
    {
        global $nm_opc_lookup, $nm_opc_php, $script_case_init;
        require_once("form_contrato_updt2_mob_apl.php");
        $this->contr_form_contrato_updt2_mob = new form_contrato_updt2_mob_apl();
    }
}
if (!function_exists("NM_is_utf8"))
{
    include_once("../_lib/lib/php/nm_utf8.php");
}
ob_start();
//
//----------------  
//
    $_SESSION['scriptcase']['form_contrato_updt2_mob']['contr_erro'] = 'off';
    if (!function_exists("NM_is_utf8"))
    {
        include_once("../_lib/lib/php/nm_utf8.php");
    }
    if (!function_exists("SC_dir_app_ini"))
    {
        include_once("../_lib/lib/php/nm_ctrl_app_name.php");
    }
    SC_dir_app_ini('CheckIn');
    $sc_conv_var = array();
    if (!empty($_FILES))
    {
        foreach ($_FILES as $nmgp_campo => $nmgp_valores)
        {
             if (isset($sc_conv_var[$nmgp_campo]))
             {
                 $nmgp_campo = $sc_conv_var[$nmgp_campo];
             }
             elseif (isset($sc_conv_var[strtolower($nmgp_campo)]))
             {
                 $nmgp_campo = $sc_conv_var[strtolower($nmgp_campo)];
             }
             $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
             $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
             $$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
             $$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
             $$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
        }
    }
    $Sc_lig_md5 = false;
    if (!empty($_POST))
    {
        foreach ($_POST as $nmgp_var => $nmgp_val)
        {
             if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
             {
                 $nmgp_var = substr($nmgp_var, 11);
                 $nmgp_val = $_SESSION[$nmgp_val];
             }
             if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
             {
                 $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                 if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                 {
                     $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                     $Sc_lig_md5 = true;
                 }
                 else
                 {
                     $_SESSION['sc_session']['SC_parm_violation'] = true;
                 }
             }
             if (isset($sc_conv_var[$nmgp_var]))
             {
                 $nmgp_var = $sc_conv_var[$nmgp_var];
             }
             elseif (isset($sc_conv_var[strtolower($nmgp_var)]))
             {
                 $nmgp_var = $sc_conv_var[strtolower($nmgp_var)];
             }
             nm_limpa_str_form_contrato_updt2_mob($nmgp_val);
             $$nmgp_var = $nmgp_val;
        }
    }
    if (!empty($_GET))
    {
        foreach ($_GET as $nmgp_var => $nmgp_val)
        {
             if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
             {
                 $nmgp_var = substr($nmgp_var, 11);
                 $nmgp_val = $_SESSION[$nmgp_val];
             }
             if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
             {
                 $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                 if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                 {
                     $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                     $Sc_lig_md5 = true;
                 }
                 else
                 {
                     $_SESSION['sc_session']['SC_parm_violation'] = true;
                 }
             }
             if (isset($sc_conv_var[$nmgp_var]))
             {
                 $nmgp_var = $sc_conv_var[$nmgp_var];
             }
             elseif (isset($sc_conv_var[strtolower($nmgp_var)]))
             {
                 $nmgp_var = $sc_conv_var[strtolower($nmgp_var)];
             }
             nm_limpa_str_form_contrato_updt2_mob($nmgp_val);
             $$nmgp_var = $nmgp_val;
        }
    }
    if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
    {
        $_SESSION['sc_session']['SC_parm_violation'] = true;
    }
    if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
    {
        $nmgp_parms = "";
    }
    if (isset($SC_where_pdf) && !empty($SC_where_pdf))
    {
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['where_filter'] = $SC_where_pdf;
    }
    if (isset($nmgp_start) && $nmgp_start == "SC")
    {
        $nmgp_outra_jan = "";
    }

    if (isset($_POST['rs']) && !is_array($_POST['rs']) && 'ajax_' == substr($_POST['rs'], 0, 5) && isset($_POST['rsargs']) && !empty($_POST['rsargs']))
    {
        if ('ajax_form_contrato_updt2_mob_validate_datacadastro' == $_POST['rs'])
        {
            $datacadastro = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_cnpj' == $_POST['rs'])
        {
            $cnpj = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_inscricao' == $_POST['rs'])
        {
            $inscricao = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_fk_classificacao' == $_POST['rs'])
        {
            $fk_classificacao = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_razao' == $_POST['rs'])
        {
            $razao = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_fantasia' == $_POST['rs'])
        {
            $fantasia = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_email' == $_POST['rs'])
        {
            $email = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_retype_email' == $_POST['rs'])
        {
            $retype_email = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_cep' == $_POST['rs'])
        {
            $cep = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_cidade' == $_POST['rs'])
        {
            $cidade = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_estado' == $_POST['rs'])
        {
            $estado = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_bairro' == $_POST['rs'])
        {
            $bairro = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_rua' == $_POST['rs'])
        {
            $rua = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_complemento' == $_POST['rs'])
        {
            $complemento = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_numero' == $_POST['rs'])
        {
            $numero = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_fachada' == $_POST['rs'])
        {
            $fachada = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_nome_contato' == $_POST['rs'])
        {
            $nome_contato = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_validate_telefone' == $_POST['rs'])
        {
            $telefone = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_contrato_updt2_mob_event_cep_onchange' == $_POST['rs'])
        {
            $cep = NM_utf8_urldecode($_POST['rsargs'][0]);
            $cidade = NM_utf8_urldecode($_POST['rsargs'][1]);
            $estado = NM_utf8_urldecode($_POST['rsargs'][2]);
            $rua = NM_utf8_urldecode($_POST['rsargs'][3]);
            $bairro = NM_utf8_urldecode($_POST['rsargs'][4]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][5]);
        }
        if ('ajax_form_contrato_updt2_mob_submit_form' == $_POST['rs'])
        {
            $datacadastro = NM_utf8_urldecode($_POST['rsargs'][0]);
            $cnpj = NM_utf8_urldecode($_POST['rsargs'][1]);
            $inscricao = NM_utf8_urldecode($_POST['rsargs'][2]);
            $fk_classificacao = NM_utf8_urldecode($_POST['rsargs'][3]);
            $razao = NM_utf8_urldecode($_POST['rsargs'][4]);
            $fantasia = NM_utf8_urldecode($_POST['rsargs'][5]);
            $email = NM_utf8_urldecode($_POST['rsargs'][6]);
            $retype_email = NM_utf8_urldecode($_POST['rsargs'][7]);
            $cep = NM_utf8_urldecode($_POST['rsargs'][8]);
            $cidade = NM_utf8_urldecode($_POST['rsargs'][9]);
            $estado = NM_utf8_urldecode($_POST['rsargs'][10]);
            $bairro = NM_utf8_urldecode($_POST['rsargs'][11]);
            $rua = NM_utf8_urldecode($_POST['rsargs'][12]);
            $complemento = NM_utf8_urldecode($_POST['rsargs'][13]);
            $numero = NM_utf8_urldecode($_POST['rsargs'][14]);
            $fachada = NM_utf8_urldecode($_POST['rsargs'][15]);
            $nome_contato = NM_utf8_urldecode($_POST['rsargs'][16]);
            $telefone = NM_utf8_urldecode($_POST['rsargs'][17]);
            $pk_contrato = NM_utf8_urldecode($_POST['rsargs'][18]);
            $fachada_ul_name = NM_utf8_urldecode($_POST['rsargs'][19]);
            $fachada_ul_type = NM_utf8_urldecode($_POST['rsargs'][20]);
            $fachada_salva = NM_utf8_urldecode($_POST['rsargs'][21]);
            $fachada_limpa = NM_utf8_urldecode($_POST['rsargs'][22]);
            $nm_form_submit = NM_utf8_urldecode($_POST['rsargs'][23]);
            $nmgp_url_saida = NM_utf8_urldecode($_POST['rsargs'][24]);
            $nmgp_opcao = NM_utf8_urldecode($_POST['rsargs'][25]);
            $nmgp_ancora = NM_utf8_urldecode($_POST['rsargs'][26]);
            $nmgp_num_form = NM_utf8_urldecode($_POST['rsargs'][27]);
            $nmgp_parms = NM_utf8_urldecode($_POST['rsargs'][28]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][29]);
            $csrf_token = NM_utf8_urldecode($_POST['rsargs'][30]);
        }
        if ('ajax_form_contrato_updt2_mob_navigate_form' == $_POST['rs'])
        {
            $pk_contrato = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nm_form_submit = NM_utf8_urldecode($_POST['rsargs'][1]);
            $nmgp_opcao = NM_utf8_urldecode($_POST['rsargs'][2]);
            $nmgp_ordem = NM_utf8_urldecode($_POST['rsargs'][3]);
            $nmgp_fast_search = NM_utf8_urldecode($_POST['rsargs'][4]);
            $nmgp_cond_fast_search = NM_utf8_urldecode($_POST['rsargs'][5]);
            $nmgp_arg_fast_search = NM_utf8_urldecode($_POST['rsargs'][6]);
            $nmgp_arg_dyn_search = NM_utf8_urldecode($_POST['rsargs'][7]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][8]);
        }
    }

    if (!empty($glo_perfil))  
    { 
        $_SESSION['scriptcase']['glo_perfil'] = $glo_perfil;
    }   
    if (isset($glo_servidor)) 
    {
        $_SESSION['scriptcase']['glo_servidor'] = $glo_servidor;
    }
    if (isset($glo_banco)) 
    {
        $_SESSION['scriptcase']['glo_banco'] = $glo_banco;
    }
    if (isset($glo_tpbanco)) 
    {
        $_SESSION['scriptcase']['glo_tpbanco'] = $glo_tpbanco;
    }
    if (isset($glo_usuario)) 
    {
        $_SESSION['scriptcase']['glo_usuario'] = $glo_usuario;
    }
    if (isset($glo_senha)) 
    {
        $_SESSION['scriptcase']['glo_senha'] = $glo_senha;
    }
    if (isset($glo_senha_protect)) 
    {
        $_SESSION['scriptcase']['glo_senha_protect'] = $glo_senha_protect;
    }
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['lig_edit_lookup']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['lig_edit_lookup']     = false;
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['lig_edit_lookup_cb']  = '';
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['lig_edit_lookup_row'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_call']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_call'] = false;
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_proc']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_proc'] = false;
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_form_insert']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_form_insert'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_form_update']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_form_update'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_form_delete']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_form_delete'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_form_btn_nav']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_form_btn_nav'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_grid_edit']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_grid_edit'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_grid_edit_link']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_grid_edit_link'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_qtd_reg']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_qtd_reg'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_tp_pag']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_liga_tp_pag'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_modal']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_modal'] = isset($_GET['nmgp_url_saida']) && 'modal' == $_GET['nmgp_url_saida'];
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_proc'])
    {
        return;
    }
    if (isset($script_case_init) && !is_array($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_parms']))
    { 
        $tmp_nmgp_parms = '';
        if (isset($nmgp_parms) && '' != $nmgp_parms)
        {
            $tmp_nmgp_parms = $nmgp_parms . '?@?';
        }
        $nmgp_parms = $tmp_nmgp_parms . $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_parms'];
        unset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_parms']);
    } 
    if (isset($nmgp_parms) && !empty($nmgp_parms) && !is_array($nmgp_parms)) 
    { 
        if (isset($_SESSION['nm_aba_bg_color'])) 
        { 
            unset($_SESSION['nm_aba_bg_color']);
        }   
        $nmgp_parms = NM_decode_input($nmgp_parms);
        $nmgp_parms = str_replace("@aspass@", "'", $nmgp_parms);
        $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
        $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
        $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
        $todo  = explode("?@?", $todox);
        $ix = 0;
        while (!empty($todo[$ix]))
        {
           $cadapar = explode("?#?", $todo[$ix]);
           if (1 < sizeof($cadapar))
           {
               if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
               {
                   $cadapar[0] = substr($cadapar[0], 11);
                   $cadapar[1] = $_SESSION[$cadapar[1]];
               }
               nm_limpa_str_form_contrato_updt2_mob($cadapar[1]);
               if (isset($sc_conv_var[$cadapar[0]]))
               {
                   $cadapar[0] = $sc_conv_var[$cadapar[0]];
               }
               elseif (isset($sc_conv_var[strtolower($cadapar[0])]))
               {
                   $cadapar[0] = $sc_conv_var[strtolower($cadapar[0])];
               }
               if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
               $Tmp_par   = $cadapar[0];
               $$Tmp_par = $cadapar[1];
           }
           $ix++;
        }
        if (isset($usr_cnpj)) 
        {
            $_SESSION['usr_cnpj'] = $usr_cnpj;
        }
        if (isset($pastacliente)) 
        {
            $_SESSION['pastacliente'] = $pastacliente;
        }
    } 
    elseif (isset($script_case_init) && !empty($script_case_init) && !is_array($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['parms']))
    {
        if (!isset($nmgp_opcao) || ($nmgp_opcao != "incluir" && $nmgp_opcao != "novo" && $nmgp_opcao != "recarga" && $nmgp_opcao != "muda_form"))
        {
            $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['parms']);
            $todo  = explode("?@?", $todox);
            $ix = 0;
            while (!empty($todo[$ix]))
            {
               $cadapar = explode("?#?", $todo[$ix]);
               if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
               {
                   $cadapar[0] = substr($cadapar[0], 11);
                   $cadapar[1] = $_SESSION[$cadapar[1]];
               }
               if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
               $Tmp_par   = $cadapar[0];
               $$Tmp_par = $cadapar[1];
               $ix++;
            }
        }
    } 
    if (isset($script_case_init) && $script_case_init != preg_replace('/[^0-9.]/', '', $script_case_init))
    {
        unset($script_case_init);
    }
    if (!isset($script_case_init) || empty($script_case_init) || is_array($script_case_init))
    {
        $script_case_init = rand(2, 10000);
    }
    $salva_run = "N";
    $salva_iframe = false;
    if (isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['iframe_menu']))
    {
        $salva_iframe = $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['iframe_menu'];
        unset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['iframe_menu']);
    }
    if (isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe']))
    {
        $salva_run = $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'];
        unset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe']);
    }
    if (isset($nm_run_menu) && $nm_run_menu == 1)
    {
        if (isset($_SESSION['scriptcase']['sc_aba_iframe']) && isset($_SESSION['scriptcase']['sc_apl_menu_atual']))
        {
            foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
            {
                if ($aba == $_SESSION['scriptcase']['sc_apl_menu_atual'])
                {
                    unset($_SESSION['scriptcase']['sc_aba_iframe'][$aba]);
                    break;
                }
            }
        }
        $_SESSION['scriptcase']['sc_apl_menu_atual'] = "form_contrato_updt2_mob";
        $achou = false;
        if (isset($_SESSION['sc_session'][$script_case_init]))
        {
            foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
            {
                if ($nome_apl == 'form_contrato_updt2_mob' || $achou)
                {
                    unset($_SESSION['sc_session'][$script_case_init][$nome_apl]);
                    if (!empty($_SESSION['sc_session'][$script_case_init][$nome_apl]))
                    {
                        $achou = true;
                    }
                }
            }
            if (!$achou && isset($nm_apl_menu))
            {
                foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
                {
                    if ($nome_apl == $nm_apl_menu || $achou)
                    {
                        $achou = true;
                        if ($nome_apl != $nm_apl_menu)
                        {
                            unset($_SESSION['sc_session'][$script_case_init][$nome_apl]);
                        }
                    }
                }
            }
        }
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['iframe_menu']  = true;
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['mostra_cab']   = "S";
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe']   = "N";
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['retorno_edit'] = "";
    }
    else
    {
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe']  = $salva_run;
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['iframe_menu'] = $salva_iframe;
    }

    if (!isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['db_changed']))
    {
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['db_changed'] = false;
    }
    if (isset($_GET['nmgp_outra_jan']) && 'true' == $_GET['nmgp_outra_jan'] && isset($_GET['nmgp_url_saida']) && 'modal' == $_GET['nmgp_url_saida'])
    {
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['db_changed'] = false;
    }

    if (isset($_SESSION['scriptcase']['sc_outra_jan']) && $_SESSION['scriptcase']['sc_outra_jan'] == 'form_contrato_updt2_mob')
    {
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_outra_jan'] = true;
         unset($_SESSION['scriptcase']['sc_outra_jan']);
    }
    if (isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true')
    {
        if (isset($nmgp_url_saida) && $nmgp_url_saida == "modal")
        {
            $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_modal'] = true;
            $nm_url_saida = "form_contrato_updt2_mob_fim.php"; 
        }
        $nm_apl_dependente = 0;
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_outra_jan'] = true;
    }

    if (!isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['initialize']))
    {
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['initialize'] = true;
    }
    elseif (!isset($_SERVER['HTTP_REFERER']))
    {
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['initialize'] = false;
    }
    elseif (false === strpos($_SERVER['HTTP_REFERER'], '/form_contrato_updt2/'))
    {
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['initialize'] = true;
    }
    else
    {
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['initialize'] = false;
    }

    if (isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['first_time']))
    {
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['first_time'] = false;
    }
    else
    {
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['first_time'] = true;
    }

    $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['menu_desenv'] = false;   
    if (!defined("SC_ERROR_HANDLER"))
    {
        define("SC_ERROR_HANDLER", 1);
    }
    include_once(dirname(__FILE__) . "/form_contrato_updt2_mob_erro.php");
    $nm_browser = strpos($_SERVER['HTTP_USER_AGENT'], "Konqueror") ;
    if (is_int($nm_browser))   
    {
        $nm_browser = "Konqueror"; 
    } 
    else  
    {
        $nm_browser = strpos($_SERVER['HTTP_USER_AGENT'], "Opera") ;
        if (is_int($nm_browser))   
        {
            $nm_browser = "Opera"; 
        }
    } 
    $_SESSION['scriptcase']['change_regional_old'] = '';
    $_SESSION['scriptcase']['change_regional_new'] = '';
    if (!empty($nmgp_opcao) && ($nmgp_opcao == "change_lang_t" || $nmgp_opcao == "change_lang_b" || $nmgp_opcao == "change_lang_f" || $nmgp_opcao == "force_lang"))  
    {
        $Temp_lang = $nmgp_opcao == "force_lang" ? explode(";" , $nmgp_idioma) : explode(";" , $nmgp_idioma_novo);  
        if (isset($Temp_lang[0]) && !empty($Temp_lang[0]))  
        { 
            $_SESSION['scriptcase']['str_lang'] = $Temp_lang[0];
        } 
        if (isset($Temp_lang[1]) && !empty($Temp_lang[1])) 
        { 
            $_SESSION['scriptcase']['change_regional_old'] = (isset($_SESSION['scriptcase']['str_conf_reg']) && !empty($_SESSION['scriptcase']['str_conf_reg'])) ? $_SESSION['scriptcase']['str_conf_reg'] : "pt_br";
            $_SESSION['scriptcase']['str_conf_reg']        = $Temp_lang[1];
            $_SESSION['scriptcase']['change_regional_new'] = $_SESSION['scriptcase']['str_conf_reg'];
        } 
        $nmgp_opcao = $nmgp_opcao == "force_lang" ? "inicio" : "igual";
    } 
    if (!empty($nmgp_opcao) && ($nmgp_opcao == "change_schema_t" || $nmgp_opcao == "change_schema_b" || $nmgp_opcao == "change_schema_f"))  
    {
        if ($nmgp_opcao == "change_schema_t")  
        {
            $nmgp_schema = $nmgp_schema_t . "/" . $nmgp_schema_t;  
        } 
        elseif ($nmgp_opcao == "change_schema_b")  
        {
            $nmgp_schema = $nmgp_schema_b . "/" . $nmgp_schema_b;  
        } 
        else 
        {
            $nmgp_schema = $nmgp_schema_f . "/" . $nmgp_schema_f;  
        } 
        $_SESSION['scriptcase']['str_schema_all'] = $nmgp_schema;
        $nmgp_opcao = "recarga";  
    } 
    if (!empty($nmgp_opcao) && $nmgp_opcao == "lookup")  
    {
        $nm_opc_lookup = $nmgp_opcao;
    }
    elseif (!empty($nmgp_opcao) && $nmgp_opcao == "formphp")  
    {
        $nm_opc_form_php = $nmgp_opcao;
    }
    else
    {
        if (!empty($nmgp_opcao))  
        {
            $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['opcao'] = $nmgp_opcao ; 
        }
        if (isset($_POST["usr_cnpj"])) 
        {
            $_SESSION['usr_cnpj'] = $_POST["usr_cnpj"];
            nm_limpa_str_form_contrato_updt2_mob($_SESSION['usr_cnpj']);
        }
        if (isset($_GET["usr_cnpj"])) 
        {
            $_SESSION['usr_cnpj'] = $_GET["usr_cnpj"];
            nm_limpa_str_form_contrato_updt2_mob($_SESSION['usr_cnpj']);
        }
        if (isset($_POST["pastacliente"])) 
        {
            $_SESSION['pastacliente'] = $_POST["pastacliente"];
            nm_limpa_str_form_contrato_updt2_mob($_SESSION['pastacliente']);
        }
        if (isset($_GET["pastacliente"])) 
        {
            $_SESSION['pastacliente'] = $_GET["pastacliente"];
            nm_limpa_str_form_contrato_updt2_mob($_SESSION['pastacliente']);
        }
        if (!empty($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_redirect_apl']))
        {
            $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_redirect_apl']; 
            $nm_apl_dependente = $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_redirect_tp']; 
            $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_redirect_apl'] = "";
            $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_redirect_tp'] = "";
            $nm_url_saida = "form_contrato_updt2_mob_fim.php"; 
        }
        elseif (isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_outra_jan'] == 'true')
        {
               $nm_url_saida = "form_contrato_updt2_mob_fim.php"; 
        }
        elseif ($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] != "R")
        {
            $nm_url_saida = "https://www.checkincash.com.br/imagem/widescreen.htm" ; 
            $nm_saida_global = $nm_url_saida;
            if ($nm_apl_dependente != 1) 
            { 
                $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] = "N"; 
            } 
            if ($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] != "R" && (!isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_call']) || !$_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['embutida_call']))
            { 
                $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $nm_url_saida; 
                $nm_url_saida = "form_contrato_updt2_mob_fim.php"; 
                $_SESSION['scriptcase']['sc_tp_saida'] = "P"; 
                if ($nm_apl_dependente == 1) 
                { 
                    $_SESSION['scriptcase']['sc_tp_saida'] = "D"; 
                } 
            } 
        }
        if (empty($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_tp']) && $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] != "R")
        {
            $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_php'] = $nm_url_saida;
            $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_apl'] = $nm_saida_global;
            $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_ss']  = (isset($_SESSION['scriptcase']['sc_url_saida'][$script_case_init])) ? $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] : "";
            $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_dep'] = $nm_apl_dependente;
            $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_tp']  = (isset($_SESSION['scriptcase']['sc_tp_saida'])) ? $_SESSION['scriptcase']['sc_tp_saida'] : "";
        }
        $nm_url_saida = $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_php'];
        $nm_saida_global = $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_php'];
        $nm_apl_dependente = $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_dep'];
        if ($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] != "R" && !empty($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_ss'])) 
        { 
            $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_ss'];
            $_SESSION['scriptcase']['sc_tp_saida']  = $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['volta_tp'];
        } 
        if ($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] == "R") 
        { 
            if (!empty($nmgp_url_saida) && empty($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['retorno_edit'])) 
            {
                $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['retorno_edit'] = $nmgp_url_saida . "?script_case_init=" . $script_case_init . "&script_case_session=" . session_id(); 
            } 
        } 
        if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['run_iframe'] != "R") 
        { 
            $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['menu_desenv'] = true;   
        } 
    }
    if (isset($nmgp_redir)) 
    { 
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['redir'] = $nmgp_redir;   
    } 
    if (isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true')
    {
        $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_outra_jan'] = true;
         if ($nmgp_url_saida == "modal")
         {
             $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_modal'] = true;
             $nm_url_saida = "form_contrato_updt2_mob_fim.php"; 
         }
    }
    if (isset($_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$script_case_init]['form_contrato_updt2_mob']['sc_outra_jan'])
    {
        $nm_apl_dependente = 0;
    }
    $GLOBALS["NM_ERRO_IBASE"] = 0;  
    $inicial_form_contrato_updt2_mob = new form_contrato_updt2_mob_edit();
    $inicial_form_contrato_updt2_mob->inicializa();

    $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['select_html'] = array();
    $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['select_html']['fk_classificacao'] = "class=\"sc-js-input scFormObjectOdd css_fk_classificacao_obj\" style=\"\" id=\"id_sc_field_fk_classificacao\" name=\"fk_classificacao\" size=\"1\" alt=\"{type: 'select', enterTab: false}\"";

    if (!defined('SC_SAJAX_LOADED'))
    {
        include_once(dirname(__FILE__) . '/form_contrato_updt2_mob_sajax.php');
        define('SC_SAJAX_LOADED', 'YES');
    }
    if (!class_exists('Services_JSON'))
    {
        include_once(dirname(__FILE__) . '/form_contrato_updt2_mob_json.php');
    }
    $sajax_request_type = "POST";
    sajax_init();
    //$sajax_debug_mode = 1;
    sajax_export("ajax_form_contrato_updt2_mob_validate_datacadastro");
    sajax_export("ajax_form_contrato_updt2_mob_validate_cnpj");
    sajax_export("ajax_form_contrato_updt2_mob_validate_inscricao");
    sajax_export("ajax_form_contrato_updt2_mob_validate_fk_classificacao");
    sajax_export("ajax_form_contrato_updt2_mob_validate_razao");
    sajax_export("ajax_form_contrato_updt2_mob_validate_fantasia");
    sajax_export("ajax_form_contrato_updt2_mob_validate_email");
    sajax_export("ajax_form_contrato_updt2_mob_validate_retype_email");
    sajax_export("ajax_form_contrato_updt2_mob_validate_cep");
    sajax_export("ajax_form_contrato_updt2_mob_validate_cidade");
    sajax_export("ajax_form_contrato_updt2_mob_validate_estado");
    sajax_export("ajax_form_contrato_updt2_mob_validate_bairro");
    sajax_export("ajax_form_contrato_updt2_mob_validate_rua");
    sajax_export("ajax_form_contrato_updt2_mob_validate_complemento");
    sajax_export("ajax_form_contrato_updt2_mob_validate_numero");
    sajax_export("ajax_form_contrato_updt2_mob_validate_fachada");
    sajax_export("ajax_form_contrato_updt2_mob_validate_nome_contato");
    sajax_export("ajax_form_contrato_updt2_mob_validate_telefone");
    sajax_export("ajax_form_contrato_updt2_mob_event_cep_onchange");
    sajax_export("ajax_form_contrato_updt2_mob_submit_form");
    sajax_export("ajax_form_contrato_updt2_mob_navigate_form");
    sajax_handle_client_request();

    $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
//
    function nm_limpa_str_form_contrato_updt2_mob(&$str)
    {
        if (get_magic_quotes_gpc())
        {
            if (is_array($str))
            {
                foreach ($str as $x => $cada_str)
                {
                    $str[$x] = str_replace("@aspasd@", '"', $str[$x]);
                    $str[$x] = stripslashes($str[$x]);
                }
            }
            else
            {
                $str = str_replace("@aspasd@", '"', $str);
                $str = stripslashes($str);
            }
        }
    }

    function ajax_form_contrato_updt2_mob_validate_datacadastro($datacadastro, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_datacadastro';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'datacadastro' => NM_utf8_urldecode($datacadastro),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_datacadastro

    function ajax_form_contrato_updt2_mob_validate_cnpj($cnpj, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_cnpj';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'cnpj' => NM_utf8_urldecode($cnpj),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_cnpj

    function ajax_form_contrato_updt2_mob_validate_inscricao($inscricao, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_inscricao';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'inscricao' => NM_utf8_urldecode($inscricao),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_inscricao

    function ajax_form_contrato_updt2_mob_validate_fk_classificacao($fk_classificacao, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_fk_classificacao';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'fk_classificacao' => NM_utf8_urldecode($fk_classificacao),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_fk_classificacao

    function ajax_form_contrato_updt2_mob_validate_razao($razao, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_razao';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'razao' => NM_utf8_urldecode($razao),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_razao

    function ajax_form_contrato_updt2_mob_validate_fantasia($fantasia, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_fantasia';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'fantasia' => NM_utf8_urldecode($fantasia),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_fantasia

    function ajax_form_contrato_updt2_mob_validate_email($email, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_email';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'email' => NM_utf8_urldecode($email),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_email

    function ajax_form_contrato_updt2_mob_validate_retype_email($retype_email, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_retype_email';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'retype_email' => NM_utf8_urldecode($retype_email),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_retype_email

    function ajax_form_contrato_updt2_mob_validate_cep($cep, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_cep';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'cep' => NM_utf8_urldecode($cep),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_cep

    function ajax_form_contrato_updt2_mob_validate_cidade($cidade, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_cidade';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'cidade' => NM_utf8_urldecode($cidade),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_cidade

    function ajax_form_contrato_updt2_mob_validate_estado($estado, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_estado';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'estado' => NM_utf8_urldecode($estado),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_estado

    function ajax_form_contrato_updt2_mob_validate_bairro($bairro, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_bairro';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'bairro' => NM_utf8_urldecode($bairro),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_bairro

    function ajax_form_contrato_updt2_mob_validate_rua($rua, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_rua';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'rua' => NM_utf8_urldecode($rua),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_rua

    function ajax_form_contrato_updt2_mob_validate_complemento($complemento, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_complemento';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'complemento' => NM_utf8_urldecode($complemento),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_complemento

    function ajax_form_contrato_updt2_mob_validate_numero($numero, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_numero';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'numero' => NM_utf8_urldecode($numero),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_numero

    function ajax_form_contrato_updt2_mob_validate_fachada($fachada, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_fachada';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'fachada' => NM_utf8_urldecode($fachada),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_fachada

    function ajax_form_contrato_updt2_mob_validate_nome_contato($nome_contato, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_nome_contato';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'nome_contato' => NM_utf8_urldecode($nome_contato),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_nome_contato

    function ajax_form_contrato_updt2_mob_validate_telefone($telefone, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'validate_telefone';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'telefone' => NM_utf8_urldecode($telefone),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_validate_telefone

    function ajax_form_contrato_updt2_mob_event_cep_onchange($cep, $cidade, $estado, $rua, $bairro, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'event_cep_onchange';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'cep' => NM_utf8_urldecode($cep),
                  'cidade' => NM_utf8_urldecode($cidade),
                  'estado' => NM_utf8_urldecode($estado),
                  'rua' => NM_utf8_urldecode($rua),
                  'bairro' => NM_utf8_urldecode($bairro),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_event_cep_onchange

    function ajax_form_contrato_updt2_mob_submit_form($datacadastro, $cnpj, $inscricao, $fk_classificacao, $razao, $fantasia, $email, $retype_email, $cep, $cidade, $estado, $bairro, $rua, $complemento, $numero, $fachada, $nome_contato, $telefone, $pk_contrato, $fachada_ul_name, $fachada_ul_type, $fachada_salva, $fachada_limpa, $nm_form_submit, $nmgp_url_saida, $nmgp_opcao, $nmgp_ancora, $nmgp_num_form, $nmgp_parms, $script_case_init, $csrf_token)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'submit_form';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'datacadastro' => NM_utf8_urldecode($datacadastro),
                  'cnpj' => NM_utf8_urldecode($cnpj),
                  'inscricao' => NM_utf8_urldecode($inscricao),
                  'fk_classificacao' => NM_utf8_urldecode($fk_classificacao),
                  'razao' => NM_utf8_urldecode($razao),
                  'fantasia' => NM_utf8_urldecode($fantasia),
                  'email' => NM_utf8_urldecode($email),
                  'retype_email' => NM_utf8_urldecode($retype_email),
                  'cep' => NM_utf8_urldecode($cep),
                  'cidade' => NM_utf8_urldecode($cidade),
                  'estado' => NM_utf8_urldecode($estado),
                  'bairro' => NM_utf8_urldecode($bairro),
                  'rua' => NM_utf8_urldecode($rua),
                  'complemento' => NM_utf8_urldecode($complemento),
                  'numero' => NM_utf8_urldecode($numero),
                  'fachada' => NM_utf8_urldecode($fachada),
                  'nome_contato' => NM_utf8_urldecode($nome_contato),
                  'telefone' => NM_utf8_urldecode($telefone),
                  'pk_contrato' => NM_utf8_urldecode($pk_contrato),
                  'fachada_ul_name' => NM_utf8_urldecode($fachada_ul_name),
                  'fachada_ul_type' => NM_utf8_urldecode($fachada_ul_type),
                  'fachada_salva' => NM_utf8_urldecode($fachada_salva),
                  'fachada_limpa' => NM_utf8_urldecode($fachada_limpa),
                  'nm_form_submit' => NM_utf8_urldecode($nm_form_submit),
                  'nmgp_url_saida' => NM_utf8_urldecode($nmgp_url_saida),
                  'nmgp_opcao' => NM_utf8_urldecode($nmgp_opcao),
                  'nmgp_ancora' => NM_utf8_urldecode($nmgp_ancora),
                  'nmgp_num_form' => NM_utf8_urldecode($nmgp_num_form),
                  'nmgp_parms' => NM_utf8_urldecode($nmgp_parms),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'csrf_token' => NM_utf8_urldecode($csrf_token),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_submit_form

    function ajax_form_contrato_updt2_mob_navigate_form($pk_contrato, $nm_form_submit, $nmgp_opcao, $nmgp_ordem, $nmgp_fast_search, $nmgp_cond_fast_search, $nmgp_arg_fast_search, $nmgp_arg_dyn_search, $script_case_init)
    {
        global $inicial_form_contrato_updt2_mob;
        //register_shutdown_function("form_contrato_updt2_mob_pack_ajax_response");
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_flag          = true;
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao         = 'navigate_form';
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param'] = array(
                  'pk_contrato' => NM_utf8_urldecode($pk_contrato),
                  'nm_form_submit' => NM_utf8_urldecode($nm_form_submit),
                  'nmgp_opcao' => NM_utf8_urldecode($nmgp_opcao),
                  'nmgp_ordem' => NM_utf8_urldecode($nmgp_ordem),
                  'nmgp_fast_search' => NM_utf8_urldecode($nmgp_fast_search),
                  'nmgp_cond_fast_search' => NM_utf8_urldecode($nmgp_cond_fast_search),
                  'nmgp_arg_fast_search' => NM_utf8_urldecode($nmgp_arg_fast_search),
                  'nmgp_arg_dyn_search' => NM_utf8_urldecode($nmgp_arg_dyn_search),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->controle();
        exit;
    } // ajax_navigate_form


   function form_contrato_updt2_mob_pack_ajax_response()
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp = array();

      if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['empty_filter']))
      {
          $aResp['empty_filter'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['empty_filter'];
      }
      if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['dyn_search']['NM_Dynamic_Search']))
      {
          $aResp['dyn_search']['NM_Dynamic_Search'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['dyn_search']['NM_Dynamic_Search'];
      }
      if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str']))
      {
          $aResp['dyn_search']['id_dyn_search_cmd_str'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str'];
      }
      if ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['calendarReload'])
      {
         $aResp['result'] = 'CALENDARRELOAD';
      }
      elseif ('' != $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['autoComp'])
      {
         $aResp['result'] = 'AUTOCOMP';
      }
//mestre_detalhe
      elseif (!empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['newline']))
      {
         $aResp['result'] = 'NEWLINE';
         ob_end_clean();
      }
      elseif (!empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['tableRefresh']))
      {
         $aResp['result'] = 'TABLEREFRESH';
      }
//-----
      elseif (!empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['errList']))
      {
         $aResp['result'] = 'ERROR';
      }
      elseif (!empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['fldList']))
      {
         $aResp['result'] = 'SET';
      }
      else
      {
         $aResp['result'] = 'OK';
      }
      if ('AUTOCOMP' == $aResp['result'])
      {
         $aResp = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['autoComp'];
      }
//mestre_detalhe
      elseif ('NEWLINE' == $aResp['result'])
      {
         $aResp = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['newline'];
      }
      else
//-----
      {
         $aResp['ajaxRequest'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_opcao;
         if ('CALENDARRELOAD' == $aResp['result'])
         {
            form_contrato_updt2_mob_pack_calendar_reload($aResp);
         }
         elseif ('ERROR' == $aResp['result'])
         {
            form_contrato_updt2_mob_pack_ajax_errors($aResp);
         }
         elseif ('SET' == $aResp['result'])
         {
            form_contrato_updt2_mob_pack_ajax_set_fields($aResp);
         }
         elseif ('TABLEREFRESH' == $aResp['result'])
         {
            form_contrato_updt2_mob_pack_ajax_set_fields($aResp);
            $aResp['tableRefresh'] = form_contrato_updt2_mob_pack_protect_string($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['tableRefresh']);
         }
         if ('OK' == $aResp['result'] || 'SET' == $aResp['result'])
         {
            form_contrato_updt2_mob_pack_ajax_ok($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['focus']) && '' != $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['focus'])
         {
            $aResp['setFocus'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['focus'];
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['closeLine']) && '' != $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['closeLine'])
         {
            $aResp['closeLine'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['closeLine'];
         }
         else
         {
            $aResp['closeLine'] = 'N';
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['clearUpload']) && '' != $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['clearUpload'])
         {
            $aResp['clearUpload'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['clearUpload'];
         }
         else
         {
            $aResp['clearUpload'] = 'N';
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['masterValue']) && '' != $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['masterValue'])
         {
            form_contrato_updt2_mob_pack_master_value($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxAlert']) && '' != $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxAlert'])
         {
            form_contrato_updt2_mob_pack_ajax_alert($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']) && '' != $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage'])
         {
            form_contrato_updt2_mob_pack_ajax_message($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxJavascript']) && '' != $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxJavascript'])
         {
            form_contrato_updt2_mob_pack_ajax_javascript($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['redir']) && !empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['redir']))
         {
            form_contrato_updt2_mob_pack_ajax_redir($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['redirExit']) && !empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['redirExit']))
         {
            form_contrato_updt2_mob_pack_ajax_redir_exit($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['blockDisplay']) && !empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['blockDisplay']))
         {
            form_contrato_updt2_mob_pack_ajax_block_display($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['fieldDisplay']) && !empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['fieldDisplay']))
         {
            form_contrato_updt2_mob_pack_ajax_field_display($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['buttonDisplay']) && !empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['buttonDisplay']))
         {
            $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['buttonDisplay'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->nmgp_botoes;
            form_contrato_updt2_mob_pack_ajax_button_display($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['fieldLabel']) && !empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['fieldLabel']))
         {
            form_contrato_updt2_mob_pack_ajax_field_label($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['readOnly']) && !empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['readOnly']))
         {
            form_contrato_updt2_mob_pack_ajax_readonly($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navStatus']) && !empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navStatus']))
         {
            form_contrato_updt2_mob_pack_ajax_nav_status($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navSummary']) && !empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navSummary']))
         {
            form_contrato_updt2_mob_pack_ajax_nav_Summary($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navPage']))
         {
            form_contrato_updt2_mob_pack_ajax_navPage($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['btnVars']) && !empty($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['btnVars']))
         {
            form_contrato_updt2_mob_pack_ajax_btn_vars($aResp);
         }
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['quickSearchRes']) && $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['quickSearchRes'])
         {
            $aResp['quickSearchRes'] = 'Y';
         }
         else
         {
            $aResp['quickSearchRes'] = 'N';
         }
         $aResp['htmOutput'] = '';
    
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output']) && $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['buffer_output'])
         {
            $aResp['htmOutput'] = ob_get_contents();
            if (false === $aResp['htmOutput'])
            {
               $aResp['htmOutput'] = '';
            }
            else
            {
               $aResp['htmOutput'] = form_contrato_updt2_mob_pack_protect_string(NM_charset_to_utf8($aResp['htmOutput']));
               ob_end_clean();
            }
         }
      }
      if (is_array($aResp))
      {
          $oJson = new Services_JSON();
          echo "var res = " . trim(sajax_get_js_repr($oJson->encode($aResp))) . "; res;";
      }
      else
      {
          echo "var res = " . trim(sajax_get_js_repr($aResp)) . "; res;";
      }
      exit;
   } // form_contrato_updt2_mob_pack_ajax_response

   function form_contrato_updt2_mob_pack_calendar_reload(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['calendarReload'] = 'OK';
   } // form_contrato_updt2_mob_pack_calendar_reload

   function form_contrato_updt2_mob_pack_ajax_errors(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['errList'] = array();
      foreach ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['errList'] as $sField => $aMsg)
      {
         if ('geral_form_contrato_updt2_mob' == $sField)
         {
             $aMsg = form_contrato_updt2_mob_pack_ajax_remove_erros($aMsg);
         }
         foreach ($aMsg as $sMsg)
         {
            $iNumLinha = (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['nmgp_refresh_row']) && 'geral_form_contrato_updt2_mob' != $sField)
                       ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['nmgp_refresh_row'] : "";
            $aResp['errList'][] = array('fldName'  => $sField,
                                        'msgText'  => form_contrato_updt2_mob_pack_protect_string(NM_charset_to_utf8($sMsg)),
                                        'numLinha' => $iNumLinha);
         }
      }
   } // form_contrato_updt2_mob_pack_ajax_errors

   function form_contrato_updt2_mob_pack_ajax_remove_erros($aErrors)
   {
       $aNewErrors = array();
       if (!empty($aErrors))
       {
           $sErrorMsgs = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), implode('<br />', $aErrors));
           $aErrorMsgs = explode('<BR>', $sErrorMsgs);
           foreach ($aErrorMsgs as $sErrorMsg)
           {
               $sErrorMsg = trim($sErrorMsg);
               if ('' != $sErrorMsg && !in_array($sErrorMsg, $aNewErrors))
               {
                   $aNewErrors[] = $sErrorMsg;
               }
           }
       }
       return $aNewErrors;
   } // form_contrato_updt2_mob_pack_ajax_remove_erros

   function form_contrato_updt2_mob_pack_ajax_ok(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $iNumLinha = (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['nmgp_refresh_row']))
                 ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['nmgp_refresh_row'] : "";
      $aResp['msgDisplay'] = array('msgText'  => form_contrato_updt2_mob_pack_protect_string($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['msgDisplay']),
                                   'numLinha' => $iNumLinha);
   } // form_contrato_updt2_mob_pack_ajax_ok

   function form_contrato_updt2_mob_pack_ajax_set_fields(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $iNumLinha = (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['nmgp_refresh_row']))
                 ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['param']['nmgp_refresh_row'] : "";
      if ('' != $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['rsSize'])
      {
         $aResp['rsSize'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['rsSize'];
      }
      $aResp['fldList'] = array();
      foreach ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['fldList'] as $sField => $aData)
      {
         $aField = array();
         if (isset($aData['colNum']))
         {
            $aField['colNum'] = $aData['colNum'];
         }
         if (isset($aData['row']))
         {
            $aField['row'] = $aData['row'];
         }
         if (isset($aData['imgFile']))
         {
            $aField['imgFile'] = form_contrato_updt2_mob_pack_protect_string($aData['imgFile']);
         }
         if (isset($aData['imgOrig']))
         {
            $aField['imgOrig'] = form_contrato_updt2_mob_pack_protect_string($aData['imgOrig']);
         }
         if (isset($aData['imgLink']))
         {
            $aField['imgLink'] = form_contrato_updt2_mob_pack_protect_string($aData['imgLink']);
         }
         if (isset($aData['keepImg']))
         {
            $aField['keepImg'] = $aData['keepImg'];
         }
         if (isset($aData['hideName']))
         {
            $aField['hideName'] = $aData['hideName'];
         }
         if (isset($aData['docLink']))
         {
            $aField['docLink'] = form_contrato_updt2_mob_pack_protect_string($aData['docLink']);
         }
         if (isset($aData['docIcon']))
         {
            $aField['docIcon'] = form_contrato_updt2_mob_pack_protect_string($aData['docIcon']);
         }
         if (isset($aData['keyVal']))
         {
            $aField['keyVal'] = $aData['keyVal'];
         }
         if (isset($aData['optComp']))
         {
            $aField['optComp'] = $aData['optComp'];
         }
         if (isset($aData['optClass']))
         {
            $aField['optClass'] = $aData['optClass'];
         }
         if (isset($aData['optMulti']))
         {
            $aField['optMulti'] = $aData['optMulti'];
         }
         if (isset($aData['lookupCons']))
         {
            $aField['lookupCons'] = $aData['lookupCons'];
         }
         if (isset($aData['imgHtml']))
         {
            $aField['imgHtml'] = form_contrato_updt2_mob_pack_protect_string($aData['imgHtml']);
         }
         if (isset($aData['mulHtml']))
         {
            $aField['mulHtml'] = form_contrato_updt2_mob_pack_protect_string($aData['mulHtml']);
         }
         if (isset($aData['updInnerHtml']))
         {
            $aField['updInnerHtml'] = $aData['updInnerHtml'];
         }
         if (isset($aData['htmComp']))
         {
            $aField['htmComp'] = str_replace("'", '__AS__', str_replace('"', '__AD__', $aData['htmComp']));
         }
         $aField['fldName']  = $sField;
         $aField['fldType']  = $aData['type'];
         $aField['numLinha'] = $iNumLinha;
         $aField['valList']  = array();
         foreach ($aData['valList'] as $iIndex => $sValue)
         {
            $aValue = array();
            if (isset($aData['labList'][$iIndex]))
            {
               $aValue['label'] = form_contrato_updt2_mob_pack_protect_string($aData['labList'][$iIndex]);
            }
            $aValue['value']     = ('_autocomp' != substr($sField, -9)) ? form_contrato_updt2_mob_pack_protect_string($sValue) : $sValue;
            $aField['valList'][] = $aValue;
         }
         foreach ($aField['valList'] as $iIndex => $aFieldData)
         {
             if ("null" == $aFieldData['value'])
             {
                 $aField['valList'][$iIndex]['value'] = '';
             }
         }
         if (isset($aData['optList']) && false !== $aData['optList'])
         {
            if (is_array($aData['optList']))
            {
               $aField['optList'] = array();
               foreach ($aData['optList'] as $aOptList)
               {
                  foreach ($aOptList as $sValue => $sLabel)
                  {
                     $sOpt = ($sValue !== $sLabel) ? $sValue : $sLabel;
                     $aField['optList'][] = array('value' => form_contrato_updt2_mob_pack_protect_string($sOpt),
                                                  'label' => form_contrato_updt2_mob_pack_protect_string($sLabel));
                  }
               }
            }
            else
            {
               $aField['optList'] = $aData['optList'];
            }
         }
         $aResp['fldList'][] = $aField;
      }
   } // form_contrato_updt2_mob_pack_ajax_set_fields

   function form_contrato_updt2_mob_pack_ajax_redir(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aInfo              = array('metodo', 'action', 'target', 'nmgp_parms', 'nmgp_outra_jan', 'nmgp_url_saida', 'script_case_init', 'script_case_session', 'h_modal', 'w_modal');
      $aResp['redirInfo'] = array();
      foreach ($aInfo as $sTag)
      {
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['redir'][$sTag]))
         {
            $aResp['redirInfo'][$sTag] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['redir'][$sTag];
         }
      }
   } // form_contrato_updt2_mob_pack_ajax_redir

   function form_contrato_updt2_mob_pack_ajax_redir_exit(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aInfo                  = array('metodo', 'action', 'target', 'nmgp_parms', 'nmgp_outra_jan', 'nmgp_url_saida', 'script_case_init', 'script_case_session');
      $aResp['redirExitInfo'] = array();
      foreach ($aInfo as $sTag)
      {
         if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['redirExit'][$sTag]))
         {
            $aResp['redirExitInfo'][$sTag] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['redirExit'][$sTag];
         }
      }
   } // form_contrato_updt2_mob_pack_ajax_redir_exit

   function form_contrato_updt2_mob_pack_master_value(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      foreach ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['masterValue'] as $sIndex => $sValue)
      {
         $aResp['masterValue'][] = array('index' => $sIndex,
                                         'value' => $sValue);
      }
   } // form_contrato_updt2_mob_pack_master_value

   function form_contrato_updt2_mob_pack_ajax_alert(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['ajaxAlert'] = array('message' => $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxAlert']['message']);
   } // form_contrato_updt2_mob_pack_ajax_alert

   function form_contrato_updt2_mob_pack_ajax_message(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['ajaxMessage'] = array('message'      => form_contrato_updt2_mob_pack_protect_string($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['message']),
                                    'title'        => form_contrato_updt2_mob_pack_protect_string($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['title']),
                                    'modal'        => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['modal'])        ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['modal']        : 'N',
                                    'timeout'      => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['timeout'])      ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['timeout']      : '',
                                    'button'       => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['button'])       ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['button']       : '',
                                    'button_label' => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['button_label']) ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['button_label'] : 'Ok',
                                    'top'          => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['top'])          ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['top']          : '',
                                    'left'         => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['left'])         ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['left']         : '',
                                    'width'        => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['width'])        ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['width']        : '',
                                    'height'       => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['height'])       ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['height']       : '',
                                    'redir'        => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['redir'])        ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['redir']        : '',
                                    'show_close'   => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['show_close'])   ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['show_close']   : 'Y',
                                    'body_icon'    => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['body_icon'])    ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['body_icon']    : 'Y',
                                    'redir_target' => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['redir_target']) ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['redir_target'] : '',
                                    'redir_par'    => isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['redir_par'])    ? $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxMessage']['redir_par']    : '');
   } // form_contrato_updt2_mob_pack_ajax_message

   function form_contrato_updt2_mob_pack_ajax_javascript(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      foreach ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['ajaxJavascript'] as $aJsFunc)
      {
         $aResp['ajaxJavascript'][] = $aJsFunc;
      }
   } // form_contrato_updt2_mob_pack_ajax_javascript

   function form_contrato_updt2_mob_pack_ajax_block_display(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['blockDisplay'] = array();
      foreach ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['blockDisplay'] as $sBlockName => $sBlockStatus)
      {
        $aResp['blockDisplay'][] = array($sBlockName, $sBlockStatus);
      }
   } // form_contrato_updt2_mob_pack_ajax_block_display

   function form_contrato_updt2_mob_pack_ajax_field_display(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['fieldDisplay'] = array();
      foreach ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['fieldDisplay'] as $sFieldName => $sFieldStatus)
      {
        $aResp['fieldDisplay'][] = array($sFieldName, $sFieldStatus);
      }
   } // form_contrato_updt2_mob_pack_ajax_field_display

   function form_contrato_updt2_mob_pack_ajax_button_display(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['buttonDisplay'] = array();
      foreach ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['buttonDisplay'] as $sButtonName => $sButtonStatus)
      {
        $aResp['buttonDisplay'][] = array($sButtonName, $sButtonStatus);
      }
   } // form_contrato_updt2_mob_pack_ajax_button_display

   function form_contrato_updt2_mob_pack_ajax_field_label(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['fieldLabel'] = array();
      foreach ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['fieldLabel'] as $sFieldName => $sFieldLabel)
      {
        $aResp['fieldLabel'][] = array($sFieldName, form_contrato_updt2_mob_pack_protect_string($sFieldLabel));
      }
   } // form_contrato_updt2_mob_pack_ajax_field_label

   function form_contrato_updt2_mob_pack_ajax_readonly(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['readOnly'] = array();
      foreach ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['readOnly'] as $sFieldName => $sFieldStatus)
      {
        $aResp['readOnly'][] = array($sFieldName, $sFieldStatus);
      }
   } // form_contrato_updt2_mob_pack_ajax_readonly

   function form_contrato_updt2_mob_pack_ajax_nav_status(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['navStatus'] = array();
      if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navStatus']['ret']) && '' != $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navStatus']['ret'])
      {
         $aResp['navStatus']['ret'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navStatus']['ret'];
      }
      if (isset($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navStatus']['ava']) && '' != $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navStatus']['ava'])
      {
         $aResp['navStatus']['ava'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navStatus']['ava'];
      }
   } // form_contrato_updt2_mob_pack_ajax_nav_status

   function form_contrato_updt2_mob_pack_ajax_nav_Summary(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['navSummary'] = array();
      $aResp['navSummary']['reg_ini'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navSummary']['reg_ini'];
      $aResp['navSummary']['reg_qtd'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navSummary']['reg_qtd'];
      $aResp['navSummary']['reg_tot'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navSummary']['reg_tot'];
   } // form_contrato_updt2_mob_pack_ajax_nav_Summary

   function form_contrato_updt2_mob_pack_ajax_navPage(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['navPage'] = $inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['navPage'];
   } // form_contrato_updt2_mob_pack_ajax_navPage


   function form_contrato_updt2_mob_pack_ajax_btn_vars(&$aResp)
   {
      global $inicial_form_contrato_updt2_mob;
      $aResp['btnVars'] = array();
      foreach ($inicial_form_contrato_updt2_mob->contr_form_contrato_updt2_mob->NM_ajax_info['btnVars'] as $sBtnName => $sBtnValue)
      {
        $aResp['btnVars'][] = array($sBtnName, form_contrato_updt2_mob_pack_protect_string($sBtnValue));
      }
   } // form_contrato_updt2_mob_pack_ajax_btn_vars

   function form_contrato_updt2_mob_pack_protect_string($sString)
   {
      $sString = (string) $sString;

      if (!empty($sString))
      {
         if (function_exists('NM_is_utf8') && NM_is_utf8($sString))
         {
             return $sString;
         }
         else
         {
/*             return htmlentities($sString, ENT_COMPAT, $_SESSION['scriptcase']['charset']); */
             return sc_htmlentities($sString);
         }
      }
      elseif ('0' === $sString || 0 === $sString)
      {
         return '0';
      }
      else
      {
         return '';
      }
   } // form_contrato_updt2_mob_pack_protect_string
?>
