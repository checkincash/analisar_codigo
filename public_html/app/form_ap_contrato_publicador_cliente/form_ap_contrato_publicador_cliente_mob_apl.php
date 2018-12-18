<?php
//
class form_ap_contrato_publicador_cliente_mob_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'         => '',
                                'param'          => array(),
                                'autoComp'       => '',
                                'rsSize'         => '',
                                'msgDisplay'     => '',
                                'errList'        => array(),
                                'fldList'        => array(),
                                'focus'          => '',
                                'navStatus'      => array(),
                                'navSummary'     => array(),
                                'redir'          => array(),
                                'blockDisplay'   => array(),
                                'fieldDisplay'   => array(),
                                'fieldLabel'     => array(),
                                'readOnly'       => array(),
                                'btnVars'        => array(),
                                'ajaxAlert'      => '',
                                'ajaxMessage'    => '',
                                'ajaxJavascript' => array(),
                                'buttonDisplay'  => array(),
                                'calendarReload' => false,
                                'quickSearchRes' => false,
                                'displayMsg'     => false,
                                'displayMsgTxt'  => '',
                                'dyn_search'     => array(),
                                'empty_filter'   => '',
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $pk_publicador;
   var $fk_contrato;
   var $fk_contrato_1;
   var $data_criacao;
   var $nomenclatura;
   var $foto_publicacao;
   var $foto_publicacao_scfile_name;
   var $foto_publicacao_ul_name;
   var $foto_publicacao_scfile_type;
   var $foto_publicacao_ul_type;
   var $foto_publicacao_limpa;
   var $foto_publicacao_salva;
   var $out_foto_publicacao;
   var $out1_foto_publicacao;
   var $texto_publicacao;
   var $foto_premiacao;
   var $foto_premiacao_scfile_name;
   var $foto_premiacao_ul_name;
   var $foto_premiacao_scfile_type;
   var $foto_premiacao_ul_type;
   var $foto_premiacao_limpa;
   var $foto_premiacao_salva;
   var $out_foto_premiacao;
   var $out1_foto_premiacao;
   var $texto_premiacao;
   var $gera_dados;
   var $cep;
   var $bairro;
   var $rua;
   var $numero;
   var $complemento;
   var $cidade;
   var $estado;
   var $latitude;
   var $longitude;
   var $destaque;
   var $destaque_1;
   var $pdesconto;
   var $pdesconto_1;
   var $situacao;
   var $situacao_1;
   var $pseg;
   var $pseg_1;
   var $pter;
   var $pter_1;
   var $pqua;
   var $pqua_1;
   var $pqui;
   var $pqui_1;
   var $psex;
   var $psex_1;
   var $psab;
   var $psab_1;
   var $pdom;
   var $pdom_1;
   var $abreviatura;
   var $destaque_img;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $sc_insert_on;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['abreviatura']))
          {
              $this->abreviatura = $this->NM_ajax_info['param']['abreviatura'];
          }
          if (isset($this->NM_ajax_info['param']['bairro']))
          {
              $this->bairro = $this->NM_ajax_info['param']['bairro'];
          }
          if (isset($this->NM_ajax_info['param']['cep']))
          {
              $this->cep = $this->NM_ajax_info['param']['cep'];
          }
          if (isset($this->NM_ajax_info['param']['cidade']))
          {
              $this->cidade = $this->NM_ajax_info['param']['cidade'];
          }
          if (isset($this->NM_ajax_info['param']['complemento']))
          {
              $this->complemento = $this->NM_ajax_info['param']['complemento'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['data_criacao']))
          {
              $this->data_criacao = $this->NM_ajax_info['param']['data_criacao'];
          }
          if (isset($this->NM_ajax_info['param']['destaque']))
          {
              $this->destaque = $this->NM_ajax_info['param']['destaque'];
          }
          if (isset($this->NM_ajax_info['param']['destaque_img']))
          {
              $this->destaque_img = $this->NM_ajax_info['param']['destaque_img'];
          }
          if (isset($this->NM_ajax_info['param']['estado']))
          {
              $this->estado = $this->NM_ajax_info['param']['estado'];
          }
          if (isset($this->NM_ajax_info['param']['fk_contrato']))
          {
              $this->fk_contrato = $this->NM_ajax_info['param']['fk_contrato'];
          }
          if (isset($this->NM_ajax_info['param']['foto_publicacao']))
          {
              $this->foto_publicacao = $this->NM_ajax_info['param']['foto_publicacao'];
          }
          if (isset($this->NM_ajax_info['param']['foto_publicacao_limpa']))
          {
              $this->foto_publicacao_limpa = $this->NM_ajax_info['param']['foto_publicacao_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['foto_publicacao_salva']))
          {
              $this->foto_publicacao_salva = $this->NM_ajax_info['param']['foto_publicacao_salva'];
          }
          if (isset($this->NM_ajax_info['param']['foto_publicacao_ul_name']))
          {
              $this->foto_publicacao_ul_name = $this->NM_ajax_info['param']['foto_publicacao_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['foto_publicacao_ul_type']))
          {
              $this->foto_publicacao_ul_type = $this->NM_ajax_info['param']['foto_publicacao_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['nomenclatura']))
          {
              $this->nomenclatura = $this->NM_ajax_info['param']['nomenclatura'];
          }
          if (isset($this->NM_ajax_info['param']['numero']))
          {
              $this->numero = $this->NM_ajax_info['param']['numero'];
          }
          if (isset($this->NM_ajax_info['param']['pdom']))
          {
              $this->pdom = $this->NM_ajax_info['param']['pdom'];
          }
          if (isset($this->NM_ajax_info['param']['pk_publicador']))
          {
              $this->pk_publicador = $this->NM_ajax_info['param']['pk_publicador'];
          }
          if (isset($this->NM_ajax_info['param']['pqua']))
          {
              $this->pqua = $this->NM_ajax_info['param']['pqua'];
          }
          if (isset($this->NM_ajax_info['param']['pqui']))
          {
              $this->pqui = $this->NM_ajax_info['param']['pqui'];
          }
          if (isset($this->NM_ajax_info['param']['psab']))
          {
              $this->psab = $this->NM_ajax_info['param']['psab'];
          }
          if (isset($this->NM_ajax_info['param']['pseg']))
          {
              $this->pseg = $this->NM_ajax_info['param']['pseg'];
          }
          if (isset($this->NM_ajax_info['param']['psex']))
          {
              $this->psex = $this->NM_ajax_info['param']['psex'];
          }
          if (isset($this->NM_ajax_info['param']['pter']))
          {
              $this->pter = $this->NM_ajax_info['param']['pter'];
          }
          if (isset($this->NM_ajax_info['param']['rua']))
          {
              $this->rua = $this->NM_ajax_info['param']['rua'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['situacao']))
          {
              $this->situacao = $this->NM_ajax_info['param']['situacao'];
          }
          if (isset($this->NM_ajax_info['param']['texto_publicacao']))
          {
              $this->texto_publicacao = $this->NM_ajax_info['param']['texto_publicacao'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
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
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
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
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
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
      if (isset($this->usr_cnpj) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['usr_cnpj'] = $this->usr_cnpj;
      }
      if (isset($this->pastacliente) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['pastacliente'] = $this->pastacliente;
      }
      if (isset($this->pastaclientepremio) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['pastaclientepremio'] = $this->pastaclientepremio;
      }
      if (isset($this->usr_admin) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['usr_admin'] = $this->usr_admin;
      }
      if (isset($_POST["usr_cnpj"]) && isset($this->usr_cnpj)) 
      {
          $_SESSION['usr_cnpj'] = $this->usr_cnpj;
      }
      if (isset($_POST["pastacliente"]) && isset($this->pastacliente)) 
      {
          $_SESSION['pastacliente'] = $this->pastacliente;
      }
      if (isset($_POST["pastaclientepremio"]) && isset($this->pastaclientepremio)) 
      {
          $_SESSION['pastaclientepremio'] = $this->pastaclientepremio;
      }
      if (isset($_POST["usr_admin"]) && isset($this->usr_admin)) 
      {
          $_SESSION['usr_admin'] = $this->usr_admin;
      }
      if (isset($_GET["usr_cnpj"]) && isset($this->usr_cnpj)) 
      {
          $_SESSION['usr_cnpj'] = $this->usr_cnpj;
      }
      if (isset($_GET["pastacliente"]) && isset($this->pastacliente)) 
      {
          $_SESSION['pastacliente'] = $this->pastacliente;
      }
      if (isset($_GET["pastaclientepremio"]) && isset($this->pastaclientepremio)) 
      {
          $_SESSION['pastaclientepremio'] = $this->pastaclientepremio;
      }
      if (isset($_GET["usr_admin"]) && isset($this->usr_admin)) 
      {
          $_SESSION['usr_admin'] = $this->usr_admin;
      }
      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['nm_run_menu'] = 1;
      } 
      if (isset($_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
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
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_ap_contrato_publicador_cliente_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->usr_cnpj)) 
          {
              $_SESSION['usr_cnpj'] = $this->usr_cnpj;
          }
          if (isset($this->pastacliente)) 
          {
              $_SESSION['pastacliente'] = $this->pastacliente;
          }
          if (isset($this->pastaclientepremio)) 
          {
              $_SESSION['pastaclientepremio'] = $this->pastaclientepremio;
          }
          if (isset($this->usr_admin)) 
          {
              $_SESSION['usr_admin'] = $this->usr_admin;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->usr_cnpj)) 
          {
              $_SESSION['usr_cnpj'] = $this->usr_cnpj;
          }
          if (isset($this->pastacliente)) 
          {
              $_SESSION['pastacliente'] = $this->pastacliente;
          }
          if (isset($this->pastaclientepremio)) 
          {
              $_SESSION['pastaclientepremio'] = $this->pastaclientepremio;
          }
          if (isset($this->usr_admin)) 
          {
              $_SESSION['usr_admin'] = $this->usr_admin;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['parms']);
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
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_ap_contrato_publicador_cliente_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("pt_br");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['initialize'];
          $this->Db = $this->Ini->Db; 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['initialize']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['initialize'])
          {
              $_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'on';
         ?>
	
<style type='text/css'>

body {
background-repeat: repeat;
background-image:  url(https://www.checkincash.com.br/imagem/fundoapp.png) !important;

background-attachment: fixed;

background-size: 100% 100%;
}
</style>

<?php
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off';
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob'][$I_conf]  = $Conf_opt;
              }
          }
          }
          $this->Ini->init2();
      } 
      else 
      { 
         $this->nm_data = new nm_data("pt_br");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['upload_field_info']['foto_publicacao'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_ap_contrato_publicador_cliente_mob',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '350',
          'upload_file_width'  => '350',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_publicador_cliente_mob']['upload_field_info']['foto_premiacao'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_ap_contrato_publicador_cliente_mob',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '350',
          'upload_file_width'  => '350',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_ap_contrato_publicador_cliente_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_ap_contrato_publicador_cliente_mob'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_ap_contrato_publicador_cliente_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_ap_contrato_publicador_cliente_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_ap_contrato_publicador_cliente_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_ap_contrato_publicador_cliente_mob']['label'] = "CHECK-IN cash ";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_ap_contrato_publicador_cliente_mob")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form = (isset($_SESSION['scriptcase']['str_button_all'])) ? $_SESSION['scriptcase']['str_button_all'] : "scriptcase8_WhiteSmoke";
      $_SESSION['scriptcase']['str_button_all'] = $this->Ini->Str_btn_form;
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $this->Db = $this->Ini->Db; 
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status      = "scFormInputError";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);


      $this->arr_buttons['group_group_2']= array(
          'value'            => "" . $this->Ini->Nm_lang['lang_btns_options'] . "",
          'hint'             => "" . $this->Ini->Nm_lang['lang_btns_options'] . "",
          'type'             => "button",
          'display'          => "text_img",
          'display_position' => "text_right",
          'image'            => "scriptcase__NM__gear.png",
          'style'            => "default",
      );


      $_SESSION['scriptcase']['error_icon']['form_ap_contrato_publicador_cliente_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_ap_contrato_publicador_cliente_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      if (isset($this->NM_ajax_info['param']['foto_publicacao_ul_name']) && '' != $this->NM_ajax_info['param']['foto_publicacao_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['upload_field_ul_name'][$this->foto_publicacao_ul_name]))
          {
              $this->NM_ajax_info['param']['foto_publicacao_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['upload_field_ul_name'][$this->foto_publicacao_ul_name];
          }
          $this->foto_publicacao = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['foto_publicacao_ul_name'];
          $this->foto_publicacao_scfile_name = substr($this->NM_ajax_info['param']['foto_publicacao_ul_name'], 12);
          $this->foto_publicacao_scfile_type = $this->NM_ajax_info['param']['foto_publicacao_ul_type'];
          $this->foto_publicacao_ul_name = $this->NM_ajax_info['param']['foto_publicacao_ul_name'];
          $this->foto_publicacao_ul_type = $this->NM_ajax_info['param']['foto_publicacao_ul_type'];
      }
      elseif (isset($this->foto_publicacao_ul_name) && '' != $this->foto_publicacao_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['upload_field_ul_name'][$this->foto_publicacao_ul_name]))
          {
              $this->foto_publicacao_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['upload_field_ul_name'][$this->foto_publicacao_ul_name];
          }
          $this->foto_publicacao = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->foto_publicacao_ul_name;
          $this->foto_publicacao_scfile_name = substr($this->foto_publicacao_ul_name, 12);
          $this->foto_publicacao_scfile_type = $this->foto_publicacao_ul_type;
      }

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "on";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_orig'] = " where fk_contrato = ( select pk_contrato from ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "')";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_pesq'] = " where fk_contrato = ( select pk_contrato from ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "')";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_publicador_cliente_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_ap_contrato_publicador_cliente_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_ap_contrato_publicador_cliente_mob'];

              $this->nmgp_botoes['update']     = $tmpDashboardButtons['form_update']    ? 'on' : 'off';
              $this->nmgp_botoes['new']        = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['insert']     = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['delete']     = $tmpDashboardButtons['form_delete']    ? 'on' : 'off';
              $this->nmgp_botoes['copy']       = $tmpDashboardButtons['form_copy']      ? 'on' : 'off';
              $this->nmgp_botoes['first']      = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']    = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['navpage']    = $tmpDashboardButtons['form_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['goto']       = $tmpDashboardButtons['form_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']     = $tmpDashboardButtons['form_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['summary']    = $tmpDashboardButtons['form_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']    = $tmpDashboardButtons['form_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']  = $tmpDashboardButtons['form_dynsearch'] ? 'on' : 'off';
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['exit'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dados_form'];
          if (!isset($this->pk_publicador)){$this->pk_publicador = $this->nmgp_dados_form['pk_publicador'];} 
          if (!isset($this->foto_premiacao)){$this->foto_premiacao = $this->nmgp_dados_form['foto_premiacao'];} 
          if (!isset($this->texto_premiacao)){$this->texto_premiacao = $this->nmgp_dados_form['texto_premiacao'];} 
          if (!isset($this->gera_dados)){$this->gera_dados = $this->nmgp_dados_form['gera_dados'];} 
          if (!isset($this->latitude)){$this->latitude = $this->nmgp_dados_form['latitude'];} 
          if (!isset($this->longitude)){$this->longitude = $this->nmgp_dados_form['longitude'];} 
          if (!isset($this->pdesconto)){$this->pdesconto = $this->nmgp_dados_form['pdesconto'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_ap_contrato_publicador_cliente_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_ap_contrato_publicador_cliente/form_ap_contrato_publicador_cliente_mob_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_ap_contrato_publicador_cliente_mob_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_ap_contrato_publicador_cliente_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_ap_contrato_publicador_cliente_mob_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_ap_contrato_publicador_cliente/form_ap_contrato_publicador_cliente_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_ap_contrato_publicador_cliente_mob_erro.class.php"); 
      }
      $this->Erro      = new form_ap_contrato_publicador_cliente_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opcao']))
         { 
             if ($this->pk_publicador != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_publicador_cliente_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
      $this->sc_insert_on = false;
      if (!isset($this->NM_ajax_flag) || ('validate_' != substr($this->NM_ajax_opcao, 0, 9) && 'add_new_line' != $this->NM_ajax_opcao && 'autocomp_' != substr($this->NM_ajax_opcao, 0, 9)))
      {
      $_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'on';
         if( !$this->permissao() )
	{
	    if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($this->Ini->path_link . "" . SC_dir_app_name('bloqueio') . "/", $this->nm_location, "", "_self", "ret_self", 440, 630);
 };
	}
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off'; 
      }
      if (isset($this->fk_contrato)) { $this->nm_limpa_alfa($this->fk_contrato); }
      if (isset($this->nomenclatura)) { $this->nm_limpa_alfa($this->nomenclatura); }
      if (isset($this->texto_publicacao)) { $this->nm_limpa_alfa($this->texto_publicacao); }
      if (isset($this->cep)) { $this->nm_limpa_alfa($this->cep); }
      if (isset($this->bairro)) { $this->nm_limpa_alfa($this->bairro); }
      if (isset($this->rua)) { $this->nm_limpa_alfa($this->rua); }
      if (isset($this->numero)) { $this->nm_limpa_alfa($this->numero); }
      if (isset($this->complemento)) { $this->nm_limpa_alfa($this->complemento); }
      if (isset($this->cidade)) { $this->nm_limpa_alfa($this->cidade); }
      if (isset($this->estado)) { $this->nm_limpa_alfa($this->estado); }
      if (isset($this->destaque)) { $this->nm_limpa_alfa($this->destaque); }
      if (isset($this->situacao)) { $this->nm_limpa_alfa($this->situacao); }
      if (isset($this->pseg)) { $this->nm_limpa_alfa($this->pseg); }
      if (isset($this->pter)) { $this->nm_limpa_alfa($this->pter); }
      if (isset($this->pqua)) { $this->nm_limpa_alfa($this->pqua); }
      if (isset($this->pqui)) { $this->nm_limpa_alfa($this->pqui); }
      if (isset($this->psex)) { $this->nm_limpa_alfa($this->psex); }
      if (isset($this->psab)) { $this->nm_limpa_alfa($this->psab); }
      if (isset($this->pdom)) { $this->nm_limpa_alfa($this->pdom); }
      if (isset($this->abreviatura)) { $this->nm_limpa_alfa($this->abreviatura); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- data_criacao
      $this->field_config['data_criacao']                 = array();
      $this->field_config['data_criacao']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['data_criacao']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['data_criacao']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'data_criacao');
      //-- pk_publicador
      $this->field_config['pk_publicador']               = array();
      $this->field_config['pk_publicador']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['pk_publicador']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pk_publicador']['symbol_dec'] = '';
      $this->field_config['pk_publicador']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['pk_publicador']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- gera_dados
      $this->field_config['gera_dados']               = array();
      $this->field_config['gera_dados']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['gera_dados']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['gera_dados']['symbol_dec'] = '';
      $this->field_config['gera_dados']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['gera_dados']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_fk_contrato' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fk_contrato');
          }
          if ('validate_situacao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'situacao');
          }
          if ('validate_nomenclatura' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nomenclatura');
          }
          if ('validate_data_criacao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'data_criacao');
          }
          if ('validate_cep' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cep');
          }
          if ('validate_bairro' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bairro');
          }
          if ('validate_rua' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'rua');
          }
          if ('validate_numero' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'numero');
          }
          if ('validate_complemento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'complemento');
          }
          if ('validate_cidade' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cidade');
          }
          if ('validate_estado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estado');
          }
          if ('validate_abreviatura' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'abreviatura');
          }
          if ('validate_pseg' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pseg');
          }
          if ('validate_pter' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pter');
          }
          if ('validate_pqua' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pqua');
          }
          if ('validate_pqui' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pqui');
          }
          if ('validate_psex' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'psex');
          }
          if ('validate_psab' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'psab');
          }
          if ('validate_pdom' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pdom');
          }
          if ('validate_destaque_img' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'destaque_img');
          }
          if ('validate_destaque' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'destaque');
          }
          if ('validate_foto_publicacao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'foto_publicacao');
          }
          if ('validate_texto_publicacao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'texto_publicacao');
          }
          form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_cep_onchange' == $this->NM_ajax_opcao)
          {
              $this->cep_onChange();
          }
          form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          if (is_array($this->destaque))
          {
              $x = 0; 
              $this->destaque_1 = $this->destaque;
              $this->destaque = ""; 
              if ($this->destaque_1 != "") 
              { 
                  foreach ($this->destaque_1 as $dados_destaque_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->destaque .= ";";
                      } 
                      $this->destaque .= $dados_destaque_1;
                      $x++ ; 
                  } 
              } 
          } 
          $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dados_select']['destaque']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->destaque = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dados_select']['destaque'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
    if ('recarga' == $nm_sc_sv_opcao) {
      $_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'on';
         ?>
	
<style type='text/css'>

body {
background-repeat: repeat;
background-image:  url(https://www.checkincash.com.br/imagem/fundoapp.png) !important;

background-attachment: fixed;

background-size: 100% 100%;
}
</style>

<?php
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off'; 
    }
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "&script_case_session=" . session_id() . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'fk_contrato':
               return "CONTRATO";
               break;
           case 'situacao':
               return "SITUAÇÃO";
               break;
           case 'nomenclatura':
               return "TITULO DO EVENTO";
               break;
           case 'data_criacao':
               return "DATA CADASTRO";
               break;
           case 'cep':
               return "CEP";
               break;
           case 'bairro':
               return "BAIRRO";
               break;
           case 'rua':
               return "RUA";
               break;
           case 'numero':
               return "NUMERO";
               break;
           case 'complemento':
               return "COMPLEMENTO";
               break;
           case 'cidade':
               return "CIDADE";
               break;
           case 'estado':
               return "ESTADO";
               break;
           case 'abreviatura':
               return "ABREVIATURA";
               break;
           case 'pseg':
               return "SEGUNDA";
               break;
           case 'pter':
               return "TERÇA";
               break;
           case 'pqua':
               return "QUARTA";
               break;
           case 'pqui':
               return "QUINTA";
               break;
           case 'psex':
               return "SEXTA";
               break;
           case 'psab':
               return "SABADO";
               break;
           case 'pdom':
               return "DOMINGO";
               break;
           case 'destaque_img':
               return "";
               break;
           case 'destaque':
               return " Obtenha melhores resultados ficando entre os primeiros no aplicativo mobile.";
               break;
           case 'foto_publicacao':
               return "";
               break;
           case 'texto_publicacao':
               return "";
               break;
           case 'pk_publicador':
               return "Pk Publicador";
               break;
           case 'foto_premiacao':
               return "";
               break;
           case 'texto_premiacao':
               return " ";
               break;
           case 'gera_dados':
               return "Exige Dados";
               break;
           case 'latitude':
               return "Latitude";
               break;
           case 'longitude':
               return "Longitude";
               break;
           case 'pdesconto':
               return " Desconto a conceder";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_ap_contrato_publicador_cliente_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_ap_contrato_publicador_cliente_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_ap_contrato_publicador_cliente_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_ap_contrato_publicador_cliente_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'fk_contrato' == $filtro)
        $this->ValidateField_fk_contrato($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'situacao' == $filtro)
        $this->ValidateField_situacao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nomenclatura' == $filtro)
        $this->ValidateField_nomenclatura($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'data_criacao' == $filtro)
        $this->ValidateField_data_criacao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cep' == $filtro)
        $this->ValidateField_cep($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'bairro' == $filtro)
        $this->ValidateField_bairro($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'rua' == $filtro)
        $this->ValidateField_rua($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'numero' == $filtro)
        $this->ValidateField_numero($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'complemento' == $filtro)
        $this->ValidateField_complemento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cidade' == $filtro)
        $this->ValidateField_cidade($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estado' == $filtro)
        $this->ValidateField_estado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'abreviatura' == $filtro)
        $this->ValidateField_abreviatura($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'pseg' == $filtro)
        $this->ValidateField_pseg($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'pter' == $filtro)
        $this->ValidateField_pter($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'pqua' == $filtro)
        $this->ValidateField_pqua($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'pqui' == $filtro)
        $this->ValidateField_pqui($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'psex' == $filtro)
        $this->ValidateField_psex($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'psab' == $filtro)
        $this->ValidateField_psab($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'pdom' == $filtro)
        $this->ValidateField_pdom($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'destaque_img' == $filtro)
        $this->ValidateField_destaque_img($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'destaque' == $filtro)
        $this->ValidateField_destaque($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'foto_publicacao' == $filtro)
        $this->ValidateField_foto_publicacao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'texto_publicacao' == $filtro)
        $this->ValidateField_texto_publicacao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
//-- converter datas   
          $this->nm_converte_datas();
//---

      if (!isset($this->NM_ajax_flag) || 'validate_' != substr($this->NM_ajax_opcao, 0, 9))
      {
      $_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_foto_publicacao = $this->foto_publicacao;
    $original_texto_publicacao = $this->texto_publicacao;
}
         if( $this->foto_publicacao  == 'no_foto.png')
	{

			
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= 'FOTO DA PUBLICAÇÃO NÃO DEFINIDA';
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_ap_contrato_publicador_cliente_mob' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = 'FOTO DA PUBLICAÇÃO NÃO DEFINIDA';
 }
;

	}


if( $this->texto_publicacao  == null or $this->texto_publicacao  == "")
	{

			
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= 'TEXTO DA PUBLICACAO NO FACE PRECISA SER DEFINIDO';
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_ap_contrato_publicador_cliente_mob' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = 'TEXTO DA PUBLICACAO NO FACE PRECISA SER DEFINIDO';
 }
;

	}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_foto_publicacao != $this->foto_publicacao || (isset($bFlagRead_foto_publicacao) && $bFlagRead_foto_publicacao)))
    {
        $this->ajax_return_values_foto_publicacao(true);
    }
    if (($original_texto_publicacao != $this->texto_publicacao || (isset($bFlagRead_texto_publicacao) && $bFlagRead_texto_publicacao)))
    {
        $this->ajax_return_values_texto_publicacao(true);
    }
}
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off'; 
      }
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_fk_contrato(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->fk_contrato) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato']) && !in_array($this->fk_contrato, $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fk_contrato']))
                   {
                       $Campos_Erros['fk_contrato'] = array();
                   }
                   $Campos_Erros['fk_contrato'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fk_contrato']) || !is_array($this->NM_ajax_info['errList']['fk_contrato']))
                   {
                       $this->NM_ajax_info['errList']['fk_contrato'] = array();
                   }
                   $this->NM_ajax_info['errList']['fk_contrato'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_fk_contrato

    function ValidateField_situacao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->situacao == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      if ($this->situacao == "")  
      { 
          $this->situacao = 0;
          $this->sc_force_zero[] = 'situacao';
      } 
    } // ValidateField_situacao

    function ValidateField_nomenclatura(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->nomenclatura = sc_strtoupper($this->nomenclatura); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['nomenclatura']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['nomenclatura'] == "on")) 
      { 
          if ($this->nomenclatura == "")  
          { 
              $Campos_Falta[] =  "TITULO DO EVENTO" ; 
              if (!isset($Campos_Erros['nomenclatura']))
              {
                  $Campos_Erros['nomenclatura'] = array();
              }
              $Campos_Erros['nomenclatura'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['nomenclatura']) || !is_array($this->NM_ajax_info['errList']['nomenclatura']))
                  {
                      $this->NM_ajax_info['errList']['nomenclatura'] = array();
                  }
                  $this->NM_ajax_info['errList']['nomenclatura'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nomenclatura) > 80) 
          { 
              $Campos_Crit .= "TITULO DO EVENTO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nomenclatura']))
              {
                  $Campos_Erros['nomenclatura'] = array();
              }
              $Campos_Erros['nomenclatura'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nomenclatura']) || !is_array($this->NM_ajax_info['errList']['nomenclatura']))
              {
                  $this->NM_ajax_info['errList']['nomenclatura'] = array();
              }
              $this->NM_ajax_info['errList']['nomenclatura'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_nomenclatura

    function ValidateField_data_criacao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->data_criacao, $this->field_config['data_criacao']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['data_criacao']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['data_criacao']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['data_criacao']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['data_criacao']['date_sep']) ; 
          if (trim($this->data_criacao) != "")  
          { 
              if ($teste_validade->Data($this->data_criacao, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "DATA CADASTRO; " ; 
                  if (!isset($Campos_Erros['data_criacao']))
                  {
                      $Campos_Erros['data_criacao'] = array();
                  }
                  $Campos_Erros['data_criacao'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['data_criacao']) || !is_array($this->NM_ajax_info['errList']['data_criacao']))
                  {
                      $this->NM_ajax_info['errList']['data_criacao'] = array();
                  }
                  $this->NM_ajax_info['errList']['data_criacao'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['data_criacao']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_data_criacao

    function ValidateField_cep(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_cep($this->cep) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->cep) != "")  
          { 
              if (strlen($this->cep) != 8  || (int)$this->cep == 0)
              { 
                  $Campos_Crit .= "CEP; " ; 
                  if (!isset($Campos_Erros['cep']))
                  {
                      $Campos_Erros['cep'] = array();
                  }
                  $Campos_Erros['cep'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['cep']) || !is_array($this->NM_ajax_info['errList']['cep']))
                  {
                      $this->NM_ajax_info['errList']['cep'] = array();
                  }
                  $this->NM_ajax_info['errList']['cep'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['cep']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['cep'] == "on") 
           { 
              $Campos_Falta[] = "CEP" ; 
              if (!isset($Campos_Erros['cep']))
              {
                  $Campos_Erros['cep'] = array();
              }
              $Campos_Erros['cep'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['cep']) || !is_array($this->NM_ajax_info['errList']['cep']))
                  {
                      $this->NM_ajax_info['errList']['cep'] = array();
                  }
                  $this->NM_ajax_info['errList']['cep'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
    } // ValidateField_cep

    function ValidateField_bairro(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['bairro']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['bairro'] == "on")) 
      { 
          if ($this->bairro == "")  
          { 
              $Campos_Falta[] =  "BAIRRO" ; 
              if (!isset($Campos_Erros['bairro']))
              {
                  $Campos_Erros['bairro'] = array();
              }
              $Campos_Erros['bairro'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['bairro']) || !is_array($this->NM_ajax_info['errList']['bairro']))
                  {
                      $this->NM_ajax_info['errList']['bairro'] = array();
                  }
                  $this->NM_ajax_info['errList']['bairro'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->bairro) > 45) 
          { 
              $Campos_Crit .= "BAIRRO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['bairro']))
              {
                  $Campos_Erros['bairro'] = array();
              }
              $Campos_Erros['bairro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['bairro']) || !is_array($this->NM_ajax_info['errList']['bairro']))
              {
                  $this->NM_ajax_info['errList']['bairro'] = array();
              }
              $this->NM_ajax_info['errList']['bairro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_bairro

    function ValidateField_rua(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['rua']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['rua'] == "on")) 
      { 
          if ($this->rua == "")  
          { 
              $Campos_Falta[] =  "RUA" ; 
              if (!isset($Campos_Erros['rua']))
              {
                  $Campos_Erros['rua'] = array();
              }
              $Campos_Erros['rua'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['rua']) || !is_array($this->NM_ajax_info['errList']['rua']))
                  {
                      $this->NM_ajax_info['errList']['rua'] = array();
                  }
                  $this->NM_ajax_info['errList']['rua'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->rua) > 80) 
          { 
              $Campos_Crit .= "RUA " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['rua']))
              {
                  $Campos_Erros['rua'] = array();
              }
              $Campos_Erros['rua'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['rua']) || !is_array($this->NM_ajax_info['errList']['rua']))
              {
                  $this->NM_ajax_info['errList']['rua'] = array();
              }
              $this->NM_ajax_info['errList']['rua'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_rua

    function ValidateField_numero(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['numero']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['numero'] == "on")) 
      { 
          if ($this->numero == "")  
          { 
              $Campos_Falta[] =  "NUMERO" ; 
              if (!isset($Campos_Erros['numero']))
              {
                  $Campos_Erros['numero'] = array();
              }
              $Campos_Erros['numero'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['numero']) || !is_array($this->NM_ajax_info['errList']['numero']))
                  {
                      $this->NM_ajax_info['errList']['numero'] = array();
                  }
                  $this->NM_ajax_info['errList']['numero'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->numero) > 10) 
          { 
              $Campos_Crit .= "NUMERO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['numero']))
              {
                  $Campos_Erros['numero'] = array();
              }
              $Campos_Erros['numero'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['numero']) || !is_array($this->NM_ajax_info['errList']['numero']))
              {
                  $this->NM_ajax_info['errList']['numero'] = array();
              }
              $this->NM_ajax_info['errList']['numero'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_numero

    function ValidateField_complemento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->complemento) > 45) 
          { 
              $Campos_Crit .= "COMPLEMENTO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['complemento']))
              {
                  $Campos_Erros['complemento'] = array();
              }
              $Campos_Erros['complemento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['complemento']) || !is_array($this->NM_ajax_info['errList']['complemento']))
              {
                  $this->NM_ajax_info['errList']['complemento'] = array();
              }
              $this->NM_ajax_info['errList']['complemento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_complemento

    function ValidateField_cidade(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['cidade']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['cidade'] == "on")) 
      { 
          if ($this->cidade == "")  
          { 
              $Campos_Falta[] =  "CIDADE" ; 
              if (!isset($Campos_Erros['cidade']))
              {
                  $Campos_Erros['cidade'] = array();
              }
              $Campos_Erros['cidade'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['cidade']) || !is_array($this->NM_ajax_info['errList']['cidade']))
                  {
                      $this->NM_ajax_info['errList']['cidade'] = array();
                  }
                  $this->NM_ajax_info['errList']['cidade'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cidade) > 70) 
          { 
              $Campos_Crit .= "CIDADE " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 70 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cidade']))
              {
                  $Campos_Erros['cidade'] = array();
              }
              $Campos_Erros['cidade'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 70 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cidade']) || !is_array($this->NM_ajax_info['errList']['cidade']))
              {
                  $this->NM_ajax_info['errList']['cidade'] = array();
              }
              $this->NM_ajax_info['errList']['cidade'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 70 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cidade

    function ValidateField_estado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['estado']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['estado'] == "on")) 
      { 
          if ($this->estado == "")  
          { 
              $Campos_Falta[] =  "ESTADO" ; 
              if (!isset($Campos_Erros['estado']))
              {
                  $Campos_Erros['estado'] = array();
              }
              $Campos_Erros['estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['estado']) || !is_array($this->NM_ajax_info['errList']['estado']))
                  {
                      $this->NM_ajax_info['errList']['estado'] = array();
                  }
                  $this->NM_ajax_info['errList']['estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->estado) > 2) 
          { 
              $Campos_Crit .= "ESTADO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['estado']))
              {
                  $Campos_Erros['estado'] = array();
              }
              $Campos_Erros['estado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['estado']) || !is_array($this->NM_ajax_info['errList']['estado']))
              {
                  $this->NM_ajax_info['errList']['estado'] = array();
              }
              $this->NM_ajax_info['errList']['estado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_estado

    function ValidateField_abreviatura(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['abreviatura']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['abreviatura'] == "on")) 
      { 
          if ($this->abreviatura == "")  
          { 
              $Campos_Falta[] =  "ABREVIATURA" ; 
              if (!isset($Campos_Erros['abreviatura']))
              {
                  $Campos_Erros['abreviatura'] = array();
              }
              $Campos_Erros['abreviatura'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['abreviatura']) || !is_array($this->NM_ajax_info['errList']['abreviatura']))
                  {
                      $this->NM_ajax_info['errList']['abreviatura'] = array();
                  }
                  $this->NM_ajax_info['errList']['abreviatura'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->abreviatura) > 80) 
          { 
              $Campos_Crit .= "ABREVIATURA " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['abreviatura']))
              {
                  $Campos_Erros['abreviatura'] = array();
              }
              $Campos_Erros['abreviatura'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['abreviatura']) || !is_array($this->NM_ajax_info['errList']['abreviatura']))
              {
                  $this->NM_ajax_info['errList']['abreviatura'] = array();
              }
              $this->NM_ajax_info['errList']['abreviatura'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_abreviatura

    function ValidateField_pseg(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->pseg == "" && $this->nmgp_opcao != "excluir")
      { 
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['pseg']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['pseg'] == "on")
        { 
          $Campos_Falta[] = "SEGUNDA" ;
          if (!isset($Campos_Erros['pseg']))
          {
              $Campos_Erros['pseg'] = array();
          }
          $Campos_Erros['pseg'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['pseg']) || !is_array($this->NM_ajax_info['errList']['pseg']))
                  {
                      $this->NM_ajax_info['errList']['pseg'] = array();
                  }
                  $this->NM_ajax_info['errList']['pseg'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
        } 
      } 
    } // ValidateField_pseg

    function ValidateField_pter(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->pter == "" && $this->nmgp_opcao != "excluir")
      { 
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['pter']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['pter'] == "on")
        { 
          $Campos_Falta[] = "TERÇA" ;
          if (!isset($Campos_Erros['pter']))
          {
              $Campos_Erros['pter'] = array();
          }
          $Campos_Erros['pter'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['pter']) || !is_array($this->NM_ajax_info['errList']['pter']))
                  {
                      $this->NM_ajax_info['errList']['pter'] = array();
                  }
                  $this->NM_ajax_info['errList']['pter'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
        } 
      } 
    } // ValidateField_pter

    function ValidateField_pqua(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->pqua == "" && $this->nmgp_opcao != "excluir")
      { 
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['pqua']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['pqua'] == "on")
        { 
          $Campos_Falta[] = "QUARTA" ;
          if (!isset($Campos_Erros['pqua']))
          {
              $Campos_Erros['pqua'] = array();
          }
          $Campos_Erros['pqua'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['pqua']) || !is_array($this->NM_ajax_info['errList']['pqua']))
                  {
                      $this->NM_ajax_info['errList']['pqua'] = array();
                  }
                  $this->NM_ajax_info['errList']['pqua'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
        } 
      } 
    } // ValidateField_pqua

    function ValidateField_pqui(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->pqui == "" && $this->nmgp_opcao != "excluir")
      { 
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['pqui']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['pqui'] == "on")
        { 
          $Campos_Falta[] = "QUINTA" ;
          if (!isset($Campos_Erros['pqui']))
          {
              $Campos_Erros['pqui'] = array();
          }
          $Campos_Erros['pqui'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['pqui']) || !is_array($this->NM_ajax_info['errList']['pqui']))
                  {
                      $this->NM_ajax_info['errList']['pqui'] = array();
                  }
                  $this->NM_ajax_info['errList']['pqui'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
        } 
      } 
    } // ValidateField_pqui

    function ValidateField_psex(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->psex == "" && $this->nmgp_opcao != "excluir")
      { 
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['psex']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['psex'] == "on")
        { 
          $Campos_Falta[] = "SEXTA" ;
          if (!isset($Campos_Erros['psex']))
          {
              $Campos_Erros['psex'] = array();
          }
          $Campos_Erros['psex'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['psex']) || !is_array($this->NM_ajax_info['errList']['psex']))
                  {
                      $this->NM_ajax_info['errList']['psex'] = array();
                  }
                  $this->NM_ajax_info['errList']['psex'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
        } 
      } 
    } // ValidateField_psex

    function ValidateField_psab(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->psab == "" && $this->nmgp_opcao != "excluir")
      { 
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['psab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['psab'] == "on")
        { 
          $Campos_Falta[] = "SABADO" ;
          if (!isset($Campos_Erros['psab']))
          {
              $Campos_Erros['psab'] = array();
          }
          $Campos_Erros['psab'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['psab']) || !is_array($this->NM_ajax_info['errList']['psab']))
                  {
                      $this->NM_ajax_info['errList']['psab'] = array();
                  }
                  $this->NM_ajax_info['errList']['psab'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
        } 
      } 
    } // ValidateField_psab

    function ValidateField_pdom(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->pdom == "" && $this->nmgp_opcao != "excluir")
      { 
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['pdom']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['php_cmp_required']['pdom'] == "on")
        { 
          $Campos_Falta[] = "DOMINGO" ;
          if (!isset($Campos_Erros['pdom']))
          {
              $Campos_Erros['pdom'] = array();
          }
          $Campos_Erros['pdom'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['pdom']) || !is_array($this->NM_ajax_info['errList']['pdom']))
                  {
                      $this->NM_ajax_info['errList']['pdom'] = array();
                  }
                  $this->NM_ajax_info['errList']['pdom'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
        } 
      } 
    } // ValidateField_pdom

    function ValidateField_destaque_img(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->destaque_img) != "")  
          { 
          } 
      } 
    } // ValidateField_destaque_img

    function ValidateField_destaque(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->destaque == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->destaque = "0";
      } 
      else 
      { 
          if (is_array($this->destaque))
          {
              $x = 0; 
              $this->destaque_1 = array(); 
              foreach ($this->destaque as $ind => $dados_destaque_1 ) 
              {
                  if ($dados_destaque_1 != "") 
                  {
                      $this->destaque_1[] = $dados_destaque_1;
                  } 
              } 
              $this->destaque = ""; 
              foreach ($this->destaque_1 as $dados_destaque_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->destaque .= ";";
                   } 
                   $this->destaque .= $dados_destaque_1;
                   $x++ ; 
              } 
          } 
      } 
      if ($this->destaque == "")  
      { 
          $this->destaque = 0;
          $this->sc_force_zero[] = 'destaque';
      } 
    } // ValidateField_destaque

    function ValidateField_foto_publicacao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->foto_publicacao;
            if ("" != $this->foto_publicacao && "S" != $this->foto_publicacao_limpa && !$teste_validade->ArqExtensao($this->foto_publicacao, array()))
            {
                $Campos_Crit .= ": " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['foto_publicacao']))
                {
                    $Campos_Erros['foto_publicacao'] = array();
                }
                $Campos_Erros['foto_publicacao'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['foto_publicacao']) || !is_array($this->NM_ajax_info['errList']['foto_publicacao']))
                {
                    $this->NM_ajax_info['errList']['foto_publicacao'] = array();
                }
                $this->NM_ajax_info['errList']['foto_publicacao'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
    } // ValidateField_foto_publicacao

    function ValidateField_texto_publicacao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->texto_publicacao) > 32767) 
          { 
              $Campos_Crit .= " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['texto_publicacao']))
              {
                  $Campos_Erros['texto_publicacao'] = array();
              }
              $Campos_Erros['texto_publicacao'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['texto_publicacao']) || !is_array($this->NM_ajax_info['errList']['texto_publicacao']))
              {
                  $this->NM_ajax_info['errList']['texto_publicacao'] = array();
              }
              $this->NM_ajax_info['errList']['texto_publicacao'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_texto_publicacao
//
//--------------------------------------------------------------------------------------
   function upload_img_doc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros) 
   {
     global $nm_browser;
     if (!empty($Campos_Crit) || !empty($Campos_Falta))
     {
          return;
     }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->foto_publicacao == "none") 
          { 
              $this->foto_publicacao = ""; 
          } 
          if ($this->foto_publicacao != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_ap_contrato_publicador_cliente_mob_doc_name.php';
              }
              $this->foto_publicacao = sc_upload_unprotect_chars($this->foto_publicacao);
              $this->foto_publicacao_scfile_name = sc_upload_unprotect_chars($this->foto_publicacao_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->foto_publicacao_scfile_type = substr($this->foto_publicacao_scfile_type, 0, strpos($this->foto_publicacao_scfile_type, ";")) ; 
              } 
              if ($this->foto_publicacao_scfile_type == "image/pjpeg" || $this->foto_publicacao_scfile_type == "image/jpeg" || $this->foto_publicacao_scfile_type == "image/gif" ||  
                  $this->foto_publicacao_scfile_type == "image/png" || $this->foto_publicacao_scfile_type == "image/x-png" || $this->foto_publicacao_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->foto_publicacao))  
                  { 
                      if ($this->nmgp_opcao == "incluir")
                      { 
                          $this->SC_IMG_foto_publicacao = $this->foto_publicacao;
                      } 
                      else 
                      { 
                          $arq_foto_publicacao = fopen($this->foto_publicacao, "r") ; 
                          $reg_foto_publicacao = fread($arq_foto_publicacao, filesize($this->foto_publicacao)) ; 
                          fclose($arq_foto_publicacao) ;  
                      } 
                      $this->foto_publicacao =  trim($this->foto_publicacao_scfile_name) ;  
                      $dir_img = $this->Ini->root . $this->Ini->path_imagens . "" . $_SESSION['pastacliente'] . "/"; 
                     if ($this->nmgp_opcao != "incluir")
                     { 
                      if (is_dir($dir_img))  
                      { 
                          $_test_file = $this->fetchUniqueUploadName($this->foto_publicacao_scfile_name, $dir_img, "foto_publicacao");
                          if (trim($this->foto_publicacao_scfile_name) != $_test_file)
                          {
                              $this->foto_publicacao_scfile_name = $_test_file;
                              $this->foto_publicacao = $_test_file;
                          }
                          $arq_foto_publicacao = fopen($dir_img . trim($this->foto_publicacao_scfile_name), "w") ; 
                          fwrite($arq_foto_publicacao, $reg_foto_publicacao) ;  
                          fclose($arq_foto_publicacao) ;  
                      } 
                      else 
                      { 
                          $Campos_Crit .= ": " . $this->Ini->Nm_lang['lang_errm_nfdr']; 
                          $this->foto_publicacao = "";
                          if (!isset($Campos_Erros['foto_publicacao']))
                          {
                              $Campos_Erros['foto_publicacao'] = array();
                          }
                          $Campos_Erros['foto_publicacao'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                          if (!isset($this->NM_ajax_info['errList']['foto_publicacao']) || !is_array($this->NM_ajax_info['errList']['foto_publicacao']))
                          {
                              $this->NM_ajax_info['errList']['foto_publicacao'] = array();
                          }
                          $this->NM_ajax_info['errList']['foto_publicacao'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                      } 
                     } 
                  } 
                  else 
                  { 
                      $Campos_Crit .= " " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->foto_publicacao = "";
                      if (!isset($Campos_Erros['foto_publicacao']))
                      {
                          $Campos_Erros['foto_publicacao'] = array();
                      }
                      $Campos_Erros['foto_publicacao'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['foto_publicacao']) || !is_array($this->NM_ajax_info['errList']['foto_publicacao']))
                      {
                          $this->NM_ajax_info['errList']['foto_publicacao'] = array();
                      }
                      $this->NM_ajax_info['errList']['foto_publicacao'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->foto_publicacao = "" ; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= " " . $this->Ini->Nm_lang['lang_errm_ivtp']; 
                      if (!isset($Campos_Erros['foto_publicacao']))
                      {
                          $Campos_Erros['foto_publicacao'] = array();
                      }
                      $Campos_Erros['foto_publicacao'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                      if (!isset($this->NM_ajax_info['errList']['foto_publicacao']) || !is_array($this->NM_ajax_info['errList']['foto_publicacao']))
                      {
                          $this->NM_ajax_info['errList']['foto_publicacao'] = array();
                      }
                      $this->NM_ajax_info['errList']['foto_publicacao'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                  } 
              } 
          } 
          elseif (!empty($this->foto_publicacao_salva) && $this->foto_publicacao_limpa != "S")
          {
              $this->foto_publicacao = $this->foto_publicacao_salva;
          }
      } 
      elseif (!empty($this->foto_publicacao_salva) && $this->foto_publicacao_limpa != "S")
      {
          $this->foto_publicacao = $this->foto_publicacao_salva;
      }
   }

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['fk_contrato'] = $this->fk_contrato;
    $this->nmgp_dados_form['situacao'] = $this->situacao;
    $this->nmgp_dados_form['nomenclatura'] = $this->nomenclatura;
    $this->nmgp_dados_form['data_criacao'] = (strlen(trim($this->data_criacao)) > 19) ? str_replace(".", ":", $this->data_criacao) : trim($this->data_criacao);
    $this->nmgp_dados_form['cep'] = $this->cep;
    $this->nmgp_dados_form['bairro'] = $this->bairro;
    $this->nmgp_dados_form['rua'] = $this->rua;
    $this->nmgp_dados_form['numero'] = $this->numero;
    $this->nmgp_dados_form['complemento'] = $this->complemento;
    $this->nmgp_dados_form['cidade'] = $this->cidade;
    $this->nmgp_dados_form['estado'] = $this->estado;
    $this->nmgp_dados_form['abreviatura'] = $this->abreviatura;
    $this->nmgp_dados_form['pseg'] = $this->pseg;
    $this->nmgp_dados_form['pter'] = $this->pter;
    $this->nmgp_dados_form['pqua'] = $this->pqua;
    $this->nmgp_dados_form['pqui'] = $this->pqui;
    $this->nmgp_dados_form['psex'] = $this->psex;
    $this->nmgp_dados_form['psab'] = $this->psab;
    $this->nmgp_dados_form['pdom'] = $this->pdom;
    $this->nmgp_dados_form['destaque_img'] = $this->destaque_img;
    $this->nmgp_dados_form['destaque'] = $this->destaque;
    if (empty($this->foto_publicacao))
    {
        $this->foto_publicacao = $this->nmgp_dados_form['foto_publicacao'];
    }
    $this->nmgp_dados_form['foto_publicacao'] = $this->foto_publicacao;
    $this->nmgp_dados_form['foto_publicacao_limpa'] = $this->foto_publicacao_limpa;
    $this->nmgp_dados_form['texto_publicacao'] = $this->texto_publicacao;
    $this->nmgp_dados_form['pk_publicador'] = $this->pk_publicador;
    if (empty($this->foto_premiacao))
    {
        $this->foto_premiacao = $this->nmgp_dados_form['foto_premiacao'];
    }
    $this->nmgp_dados_form['foto_premiacao'] = $this->foto_premiacao;
    $this->nmgp_dados_form['foto_premiacao_limpa'] = $this->foto_premiacao_limpa;
    $this->nmgp_dados_form['texto_premiacao'] = $this->texto_premiacao;
    $this->nmgp_dados_form['gera_dados'] = $this->gera_dados;
    $this->nmgp_dados_form['latitude'] = $this->latitude;
    $this->nmgp_dados_form['longitude'] = $this->longitude;
    $this->nmgp_dados_form['pdesconto'] = $this->pdesconto;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_data($this->data_criacao, $this->field_config['data_criacao']['date_sep']) ; 
      nm_limpa_cep($this->cep) ; 
      nm_limpa_numero($this->pk_publicador, $this->field_config['pk_publicador']['symbol_grp']) ; 
      nm_limpa_numero($this->gera_dados, $this->field_config['gera_dados']['symbol_grp']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~i', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "cep")
      {
          nm_limpa_cep($this->cep) ; 
      }
      if ($Nome_Campo == "pk_publicador")
      {
          nm_limpa_numero($this->pk_publicador, $this->field_config['pk_publicador']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "gera_dados")
      {
          nm_limpa_numero($this->gera_dados, $this->field_config['gera_dados']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if ((!empty($this->data_criacao) && 'null' != $this->data_criacao) || (!empty($format_fields) && isset($format_fields['data_criacao'])))
      {
          nm_volta_data($this->data_criacao, $this->field_config['data_criacao']['date_format']) ; 
          nmgp_Form_Datas($this->data_criacao, $this->field_config['data_criacao']['date_format'], $this->field_config['data_criacao']['date_sep']) ;  
      }
      elseif ('null' == $this->data_criacao || '' == $this->data_criacao)
      {
          $this->data_criacao = '';
      }
      if (!empty($this->cep) || (!empty($format_fields) && isset($format_fields['cep'])))
      {
          nmgp_Form_Cep($this->cep) ; 
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
//
//-- 
   function nm_converte_datas($use_null = true, $bForce = false)
   {
      $guarda_format_hora = $this->field_config['data_criacao']['date_format'];
      if ($this->data_criacao != "")  
      { 
          nm_conv_data($this->data_criacao, $this->field_config['data_criacao']['date_format']) ; 
          $this->data_criacao_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->data_criacao_hora = substr($this->data_criacao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->data_criacao_hora = substr($this->data_criacao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->data_criacao_hora = substr($this->data_criacao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->data_criacao_hora = substr($this->data_criacao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->data_criacao_hora = substr($this->data_criacao_hora, 0, -4);
          }
      } 
      if ($this->data_criacao == "" && $use_null)  
      { 
          $this->data_criacao = "null" ; 
      } 
      $this->field_config['data_criacao']['date_format'] = $guarda_format_hora;
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_fk_contrato();
          $this->ajax_return_values_situacao();
          $this->ajax_return_values_nomenclatura();
          $this->ajax_return_values_data_criacao();
          $this->ajax_return_values_cep();
          $this->ajax_return_values_bairro();
          $this->ajax_return_values_rua();
          $this->ajax_return_values_numero();
          $this->ajax_return_values_complemento();
          $this->ajax_return_values_cidade();
          $this->ajax_return_values_estado();
          $this->ajax_return_values_abreviatura();
          $this->ajax_return_values_pseg();
          $this->ajax_return_values_pter();
          $this->ajax_return_values_pqua();
          $this->ajax_return_values_pqui();
          $this->ajax_return_values_psex();
          $this->ajax_return_values_psab();
          $this->ajax_return_values_pdom();
          $this->ajax_return_values_destaque_img();
          $this->ajax_return_values_destaque();
          $this->ajax_return_values_foto_publicacao();
          $this->ajax_return_values_texto_publicacao();
          $this->ajax_return_values_pk_publicador();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['pk_publicador']['keyVal'] = form_ap_contrato_publicador_cliente_mob_pack_protect_string($this->nmgp_dados_form['pk_publicador']);
          }
   } // ajax_return_values

          //----- fk_contrato
   function ajax_return_values_fk_contrato($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fk_contrato", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fk_contrato);
              $aLookup = array();
              $this->_tmp_lookup_fk_contrato = $this->fk_contrato;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_data_criacao = $this->data_criacao;
   $old_value_cep = $this->cep;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_criacao = $this->data_criacao;
   $unformatted_value_cep = $this->cep;

   $nm_comando = "SELECT pk_contrato, razao  FROM ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "' ORDER BY razao";

   $this->data_criacao = $old_value_data_criacao;
   $this->cep = $old_value_cep;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_ap_contrato_publicador_cliente_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"fk_contrato\"";
          if (isset($this->NM_ajax_info['select_html']['fk_contrato']) && !empty($this->NM_ajax_info['select_html']['fk_contrato']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['fk_contrato'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->fk_contrato == $sValue)
                  {
                      $this->_tmp_lookup_fk_contrato = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fk_contrato'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fk_contrato']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fk_contrato']['valList'][$i] = form_ap_contrato_publicador_cliente_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fk_contrato']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fk_contrato']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fk_contrato']['labList'] = $aLabel;
          }
   }

          //----- situacao
   function ajax_return_values_situacao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("situacao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->situacao);
              $aLookup = array();
              $this->_tmp_lookup_situacao = $this->situacao;

$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('0') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("Ativo"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('1') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("Inativo"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_situacao'][] = '0';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_situacao'][] = '1';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"situacao\"";
          if (isset($this->NM_ajax_info['select_html']['situacao']) && !empty($this->NM_ajax_info['select_html']['situacao']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['situacao'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->situacao == $sValue)
                  {
                      $this->_tmp_lookup_situacao = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['situacao'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['situacao']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['situacao']['valList'][$i] = form_ap_contrato_publicador_cliente_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['situacao']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['situacao']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['situacao']['labList'] = $aLabel;
          }
   }

          //----- nomenclatura
   function ajax_return_values_nomenclatura($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nomenclatura", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nomenclatura);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nomenclatura'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- data_criacao
   function ajax_return_values_data_criacao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("data_criacao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->data_criacao);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['data_criacao'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- cep
   function ajax_return_values_cep($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cep", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cep);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cep'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- bairro
   function ajax_return_values_bairro($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("bairro", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->bairro);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['bairro'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- rua
   function ajax_return_values_rua($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("rua", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->rua);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['rua'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- numero
   function ajax_return_values_numero($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("numero", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->numero);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['numero'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- complemento
   function ajax_return_values_complemento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("complemento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->complemento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['complemento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cidade
   function ajax_return_values_cidade($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cidade", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cidade);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cidade'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- estado
   function ajax_return_values_estado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estado);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['estado'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- abreviatura
   function ajax_return_values_abreviatura($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("abreviatura", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->abreviatura);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['abreviatura'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- pseg
   function ajax_return_values_pseg($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pseg", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pseg);
              $aLookup = array();
              $this->_tmp_lookup_pseg = $this->pseg;

$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('0') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("0%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('1') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("1%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('2') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("2%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('3') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("3%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('4') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("4%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('5') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("5%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('6') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("6%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('7') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("7%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('8') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("8%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('9') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("9%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('10') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("10%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('15') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("15%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('20') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("20%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('25') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("25%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('30') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("30%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('35') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("35%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('40') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("40%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('45') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("45%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('50') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("50%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('55') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("55%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('60') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("60%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('65') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("65%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('70') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("70%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('75') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("75%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('80') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("80%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('85') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("85%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('90') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("90%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('95') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("95%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('100') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("100%"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '0';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '2';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '3';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '4';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '5';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '6';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '7';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '8';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '9';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '10';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '15';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '20';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '25';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '30';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '35';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '40';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '45';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '50';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '55';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '60';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '65';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '70';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '75';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '80';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '85';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '90';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '95';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pseg'][] = '100';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"pseg\"";
          if (isset($this->NM_ajax_info['select_html']['pseg']) && !empty($this->NM_ajax_info['select_html']['pseg']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['pseg'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->pseg == $sValue)
                  {
                      $this->_tmp_lookup_pseg = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pseg'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pseg']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pseg']['valList'][$i] = form_ap_contrato_publicador_cliente_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pseg']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pseg']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pseg']['labList'] = $aLabel;
          }
   }

          //----- pter
   function ajax_return_values_pter($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pter", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pter);
              $aLookup = array();
              $this->_tmp_lookup_pter = $this->pter;

$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('0') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("0%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('1') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("1%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('2') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("2%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('3') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("3%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('4') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("4%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('5') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("5%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('6') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("6%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('7') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("7%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('8') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("8%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('9') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("9%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('10') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("10%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('15') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("15%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('20') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("20%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('25') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("25%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('30') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("30%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('35') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("35%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('40') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("40%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('45') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("45%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('50') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("50%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('55') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("55%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('60') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("60%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('65') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("65%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('70') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("70%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('75') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("75%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('80') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("80%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('85') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("85%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('90') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("90%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('95') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("95%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('100') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("100%"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '0';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '2';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '3';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '4';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '5';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '6';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '7';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '8';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '9';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '10';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '15';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '20';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '25';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '30';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '35';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '40';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '45';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '50';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '55';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '60';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '65';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '70';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '75';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '80';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '85';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '90';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '95';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pter'][] = '100';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"pter\"";
          if (isset($this->NM_ajax_info['select_html']['pter']) && !empty($this->NM_ajax_info['select_html']['pter']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['pter'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->pter == $sValue)
                  {
                      $this->_tmp_lookup_pter = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pter'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pter']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pter']['valList'][$i] = form_ap_contrato_publicador_cliente_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pter']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pter']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pter']['labList'] = $aLabel;
          }
   }

          //----- pqua
   function ajax_return_values_pqua($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pqua", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pqua);
              $aLookup = array();
              $this->_tmp_lookup_pqua = $this->pqua;

$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('0') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("0%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('1') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("1%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('2') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("2%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('3') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("3%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('4') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("4%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('5') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("5%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('6') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("6%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('7') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("7%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('8') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("8%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('9') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("9%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('10') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("10%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('15') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("15%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('20') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("20%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('25') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("25%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('30') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("30%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('35') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("35%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('40') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("40%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('45') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("45%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('50') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("50%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('55') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("55%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('60') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("60%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('65') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("65%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('70') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("70%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('75') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("75%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('80') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("80%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('85') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("85%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('90') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("90%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('95') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("95%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('100') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("100%"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '0';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '2';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '3';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '4';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '5';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '6';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '7';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '8';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '9';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '10';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '15';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '20';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '25';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '30';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '35';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '40';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '45';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '50';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '55';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '60';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '65';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '70';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '75';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '80';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '85';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '90';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '95';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqua'][] = '100';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"pqua\"";
          if (isset($this->NM_ajax_info['select_html']['pqua']) && !empty($this->NM_ajax_info['select_html']['pqua']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['pqua'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->pqua == $sValue)
                  {
                      $this->_tmp_lookup_pqua = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pqua'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pqua']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pqua']['valList'][$i] = form_ap_contrato_publicador_cliente_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pqua']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pqua']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pqua']['labList'] = $aLabel;
          }
   }

          //----- pqui
   function ajax_return_values_pqui($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pqui", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pqui);
              $aLookup = array();
              $this->_tmp_lookup_pqui = $this->pqui;

$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('0') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("0%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('1') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("1%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('2') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("2%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('3') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("3%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('4') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("4%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('5') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("5%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('6') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("6%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('7') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("7%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('8') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("8%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('9') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("9%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('10') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("10%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('15') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("15%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('20') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("20%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('25') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("25%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('30') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("30%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('35') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("35%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('40') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("40%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('45') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("45%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('50') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("50%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('55') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("55%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('60') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("60%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('65') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("65%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('70') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("70%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('75') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("75%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('80') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("80%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('85') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("85%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('90') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("90%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('95') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("95%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('100') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("100%"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '0';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '2';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '3';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '4';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '5';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '6';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '7';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '8';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '9';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '10';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '15';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '20';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '25';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '30';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '35';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '40';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '45';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '50';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '55';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '60';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '65';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '70';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '75';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '80';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '85';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '90';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '95';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pqui'][] = '100';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"pqui\"";
          if (isset($this->NM_ajax_info['select_html']['pqui']) && !empty($this->NM_ajax_info['select_html']['pqui']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['pqui'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->pqui == $sValue)
                  {
                      $this->_tmp_lookup_pqui = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pqui'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pqui']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pqui']['valList'][$i] = form_ap_contrato_publicador_cliente_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pqui']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pqui']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pqui']['labList'] = $aLabel;
          }
   }

          //----- psex
   function ajax_return_values_psex($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("psex", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->psex);
              $aLookup = array();
              $this->_tmp_lookup_psex = $this->psex;

$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('0') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("0%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('1') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("1%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('2') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("2%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('3') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("3%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('4') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("4%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('5') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("5%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('6') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("6%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('7') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("7%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('8') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("8%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('9') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("9%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('10') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("10%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('15') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("15%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('20') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("20%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('25') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("25%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('30') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("30%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('35') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("35%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('40') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("40%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('45') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("45%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('50') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("50%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('55') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("55%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('60') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("60%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('65') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("65%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('70') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("70%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('75') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("75%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('80') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("80%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('85') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("85%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('90') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("90%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('95') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("95%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('100') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("100%"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '0';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '2';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '3';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '4';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '5';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '6';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '7';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '8';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '9';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '10';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '15';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '20';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '25';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '30';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '35';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '40';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '45';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '50';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '55';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '60';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '65';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '70';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '75';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '80';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '85';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '90';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '95';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psex'][] = '100';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"psex\"";
          if (isset($this->NM_ajax_info['select_html']['psex']) && !empty($this->NM_ajax_info['select_html']['psex']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['psex'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->psex == $sValue)
                  {
                      $this->_tmp_lookup_psex = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['psex'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['psex']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['psex']['valList'][$i] = form_ap_contrato_publicador_cliente_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['psex']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['psex']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['psex']['labList'] = $aLabel;
          }
   }

          //----- psab
   function ajax_return_values_psab($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("psab", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->psab);
              $aLookup = array();
              $this->_tmp_lookup_psab = $this->psab;

$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('0') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("0%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('1') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("1%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('2') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("2%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('3') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("3%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('4') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("4%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('5') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("5%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('6') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("6%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('7') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("7%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('8') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("8%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('9') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("9%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('10') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("10%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('15') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("15%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('20') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("20%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('25') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("25%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('30') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("30%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('35') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("35%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('40') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("40%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('45') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("45%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('50') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("50%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('55') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("55%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('60') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("60%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('65') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("65%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('70') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("70%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('75') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("75%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('80') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("80%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('85') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("85%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('90') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("90%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('95') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("95%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('100') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("100%"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '0';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '2';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '3';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '4';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '5';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '6';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '7';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '8';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '9';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '10';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '15';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '20';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '25';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '30';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '35';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '40';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '45';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '50';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '55';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '60';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '65';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '70';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '75';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '80';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '85';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '90';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '95';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_psab'][] = '100';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"psab\"";
          if (isset($this->NM_ajax_info['select_html']['psab']) && !empty($this->NM_ajax_info['select_html']['psab']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['psab'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->psab == $sValue)
                  {
                      $this->_tmp_lookup_psab = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['psab'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['psab']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['psab']['valList'][$i] = form_ap_contrato_publicador_cliente_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['psab']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['psab']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['psab']['labList'] = $aLabel;
          }
   }

          //----- pdom
   function ajax_return_values_pdom($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pdom", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pdom);
              $aLookup = array();
              $this->_tmp_lookup_pdom = $this->pdom;

$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('0') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("0%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('1') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("1%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('2') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("2%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('3') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("3%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('4') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("4%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('5') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("5%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('6') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("6%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('7') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("7%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('8') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("8%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('9') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("9%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('10') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("10%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('15') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("15%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('20') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("20%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('25') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("25%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('30') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("30%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('35') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("35%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('40') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("40%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('45') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("45%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('50') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("50%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('55') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("55%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('60') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("60%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('65') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("65%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('70') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("70%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('75') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("75%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('80') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("80%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('85') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("85%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('90') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("90%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('95') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("95%"));
$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('100') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("100%"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '0';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '2';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '3';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '4';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '5';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '6';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '7';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '8';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '9';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '10';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '15';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '20';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '25';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '30';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '35';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '40';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '45';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '50';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '55';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '60';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '65';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '70';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '75';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '80';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '85';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '90';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '95';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdom'][] = '100';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"pdom\"";
          if (isset($this->NM_ajax_info['select_html']['pdom']) && !empty($this->NM_ajax_info['select_html']['pdom']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['pdom'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->pdom == $sValue)
                  {
                      $this->_tmp_lookup_pdom = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pdom'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pdom']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pdom']['valList'][$i] = form_ap_contrato_publicador_cliente_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pdom']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pdom']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pdom']['labList'] = $aLabel;
          }
   }

          //----- destaque_img
   function ajax_return_values_destaque_img($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("destaque_img", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->destaque_img);
              $aLookup = array();
          if (!is_file($this->Ini->root  . $this->Ini->path_imag_cab . "/grp__NM__ico__NM__star_36.png"))
          { 
              $destaque_img = "&nbsp;" ;  
          } 
          else 
          { 
              $destaque_img = "<img border=\"0\" src=\"" . $this->Ini->path_imag_cab . "/grp__NM__ico__NM__star_36.png\"/>" ; 
          } 
    $sTmpImgHtml = "" . $destaque_img . "";
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['destaque_img'] = array(
                       'row'    => '',
               'type'    => 'imagehtml',
               'valList' => array($sTmpValue),
               'imgHtml' => $sTmpImgHtml,
              );
          }
   }

          //----- destaque
   function ajax_return_values_destaque($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("destaque", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->destaque);
              $aLookup = array();
              $this->_tmp_lookup_destaque = $this->destaque;

$aLookup[] = array(form_ap_contrato_publicador_cliente_mob_pack_protect_string('1') => form_ap_contrato_publicador_cliente_mob_pack_protect_string("Em Destaque"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_destaque'][] = '1';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['destaque']) && !empty($this->NM_ajax_info['select_html']['destaque']))
          {
              $sOptComp = $this->NM_ajax_info['select_html']['destaque'];
          }
          $this->NM_ajax_info['fldList']['destaque'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-destaque',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['destaque']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['destaque']['valList'][$i] = form_ap_contrato_publicador_cliente_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['destaque']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['destaque']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['destaque']['labList'] = $aLabel;
          }
   }

          //----- foto_publicacao
   function ajax_return_values_foto_publicacao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("foto_publicacao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->foto_publicacao);
              $aLookup = array();
   $out_foto_publicacao = '';
   $out1_foto_publicacao = '';
   if ($this->foto_publicacao != "" && $this->foto_publicacao != "none")   
   { 
       $path_foto_publicacao = $this->Ini->root . $this->Ini->path_imagens . "" . $_SESSION['pastacliente'] . "/" . $this->foto_publicacao;
       $md5_foto_publicacao  = md5("" . $_SESSION['pastacliente'] . $this->foto_publicacao);
       if (is_file($path_foto_publicacao))  
       { 
           $NM_ler_img = true;
           $out_foto_publicacao = $this->Ini->path_imag_temp . "/sc_foto_publicacao_" . $md5_foto_publicacao . ".gif" ;  
           $out1_foto_publicacao = $out_foto_publicacao; 
           if (is_file($this->Ini->root . $out_foto_publicacao))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_foto_publicacao) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_foto_publicacao = fopen($path_foto_publicacao, "r") ; 
               $reg_foto_publicacao = fread($tmp_foto_publicacao, filesize($path_foto_publicacao)) ; 
               fclose($tmp_foto_publicacao) ;  
               $arq_foto_publicacao = fopen($this->Ini->root . $out_foto_publicacao, "w") ;  
               fwrite($arq_foto_publicacao, $reg_foto_publicacao) ;  
               fclose($arq_foto_publicacao) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_foto_publicacao);
           $this->nmgp_return_img['foto_publicacao'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['foto_publicacao'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $md5_foto_publicacao  = md5($this->foto_publicacao);
           $out_foto_publicacao = $this->Ini->path_imag_temp . "/sc_foto_publicacao_350350" . $md5_foto_publicacao . ".gif" ;  
           if (is_file($this->Ini->root . $out_foto_publicacao))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_foto_publicacao) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_foto_publicacao);
                   $sc_obj_img->setWidth(350);
                   $sc_obj_img->setHeight(350);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_foto_publicacao);
               } 
               else 
               { 
                   $out_foto_publicacao = $out1_foto_publicacao;
               } 
           } 
       } 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['foto_publicacao'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($sTmpValue),
               'imgFile' => $out_foto_publicacao,
               'imgOrig' => $out1_foto_publicacao,
               'keepImg' => $sKeepImage,
               'hideName' => 'S',
              );
          }
   }

          //----- texto_publicacao
   function ajax_return_values_texto_publicacao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("texto_publicacao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->texto_publicacao);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['texto_publicacao'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- pk_publicador
   function ajax_return_values_pk_publicador($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pk_publicador", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pk_publicador);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pk_publicador'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_foto_publicacao = $this->foto_publicacao;
}
if (!isset($this->sc_temp_usr_admin)) {$this->sc_temp_usr_admin = (isset($_SESSION['usr_admin'])) ? $_SESSION['usr_admin'] : "";}
if (!isset($this->sc_temp_usr_cnpj)) {$this->sc_temp_usr_cnpj = (isset($_SESSION['usr_cnpj'])) ? $_SESSION['usr_cnpj'] : "";}
if (!isset($this->sc_temp_pastacliente)) {$this->sc_temp_pastacliente = (isset($_SESSION['pastacliente'])) ? $_SESSION['pastacliente'] : "";}
         if( $this->foto_publicacao  == null )
	{
		
	
	    $this->foto_publicacao  = 'no_foto.png';
		$this->sc_temp_pastacliente = '/imagempub/';
		
	}

    else
    {
	   
		 $this->sc_temp_pastacliente = '/imagempub/'. $this->sc_temp_usr_cnpj;
	}





if( $this->sc_temp_usr_admin == "SIM")
	{
	      $this->sc_ajax_javascript('nm_field_disabled', array("destaque=", ""));
;
	}
else
	{
	      $this->sc_ajax_javascript('nm_field_disabled', array("destaque=disabled", ""));
;
	}
if (isset($this->sc_temp_pastacliente)) { $_SESSION['pastacliente'] = $this->sc_temp_pastacliente;}
if (isset($this->sc_temp_usr_cnpj)) { $_SESSION['usr_cnpj'] = $this->sc_temp_usr_cnpj;}
if (isset($this->sc_temp_usr_admin)) { $_SESSION['usr_admin'] = $this->sc_temp_usr_admin;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_foto_publicacao != $this->foto_publicacao || (isset($bFlagRead_foto_publicacao) && $bFlagRead_foto_publicacao)))
    {
        $this->ajax_return_values_foto_publicacao(true);
    }
}
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off'; 
      }
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros

   function nm_acessa_banco() 
   { 
      global  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
    if ("incluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_bairro = $this->bairro;
    $original_cidade = $this->cidade;
    $original_complemento = $this->complemento;
    $original_estado = $this->estado;
    $original_nomenclatura = $this->nomenclatura;
    $original_numero = $this->numero;
    $original_rua = $this->rua;
}
if (!isset($this->sc_temp_pastaclientepremio)) {$this->sc_temp_pastaclientepremio = (isset($_SESSION['pastaclientepremio'])) ? $_SESSION['pastaclientepremio'] : "";}
if (!isset($this->sc_temp_usr_cnpj)) {$this->sc_temp_usr_cnpj = (isset($_SESSION['usr_cnpj'])) ? $_SESSION['usr_cnpj'] : "";}
if (!isset($this->sc_temp_pastacliente)) {$this->sc_temp_pastacliente = (isset($_SESSION['pastacliente'])) ? $_SESSION['pastacliente'] : "";}
         $this->sc_temp_pastacliente = '/imagempub/'. $this->sc_temp_usr_cnpj;
$this->sc_temp_pastaclientepremio = '/imagempub/'. $this->sc_temp_usr_cnpj;

$this->nomenclatura  =$this->act_retiraAcento($this->nomenclatura );
$this->rua  =$this->act_retiraAcento($this->rua );
$this->bairro  =$this->act_retiraAcento($this->bairro );
$this->complemento  =$this->act_retiraAcento($this->complemento );
$this->cidade  =$this->act_retiraAcento($this->cidade );


$address = $this->rua  .','.$this->numero .','.$this->bairro .','.$this->cidade .','.$this->estado ;
$request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$address."&sensor=true";
$xml = simplexml_load_file($request_url) or die("url nao carregada");
$status = $xml->status;
if ($status=="OK")  
{ 
      $this->latitude  = $xml->result->geometry->location->lat; 
      $this->longitude  = $xml->result->geometry->location->lng;       
} 


if (isset($this->sc_temp_pastacliente)) { $_SESSION['pastacliente'] = $this->sc_temp_pastacliente;}
if (isset($this->sc_temp_usr_cnpj)) { $_SESSION['usr_cnpj'] = $this->sc_temp_usr_cnpj;}
if (isset($this->sc_temp_pastaclientepremio)) { $_SESSION['pastaclientepremio'] = $this->sc_temp_pastaclientepremio;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_bairro != $this->bairro || (isset($bFlagRead_bairro) && $bFlagRead_bairro)))
    {
        $this->ajax_return_values_bairro(true);
    }
    if (($original_cidade != $this->cidade || (isset($bFlagRead_cidade) && $bFlagRead_cidade)))
    {
        $this->ajax_return_values_cidade(true);
    }
    if (($original_complemento != $this->complemento || (isset($bFlagRead_complemento) && $bFlagRead_complemento)))
    {
        $this->ajax_return_values_complemento(true);
    }
    if (($original_estado != $this->estado || (isset($bFlagRead_estado) && $bFlagRead_estado)))
    {
        $this->ajax_return_values_estado(true);
    }
    if (($original_nomenclatura != $this->nomenclatura || (isset($bFlagRead_nomenclatura) && $bFlagRead_nomenclatura)))
    {
        $this->ajax_return_values_nomenclatura(true);
    }
    if (($original_numero != $this->numero || (isset($bFlagRead_numero) && $bFlagRead_numero)))
    {
        $this->ajax_return_values_numero(true);
    }
    if (($original_rua != $this->rua || (isset($bFlagRead_rua) && $bFlagRead_rua)))
    {
        $this->ajax_return_values_rua(true);
    }
}
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off'; 
    }
    if ("alterar" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_bairro = $this->bairro;
    $original_cidade = $this->cidade;
    $original_complemento = $this->complemento;
    $original_estado = $this->estado;
    $original_nomenclatura = $this->nomenclatura;
    $original_numero = $this->numero;
    $original_rua = $this->rua;
}
if (!isset($this->sc_temp_pastaclientepremio)) {$this->sc_temp_pastaclientepremio = (isset($_SESSION['pastaclientepremio'])) ? $_SESSION['pastaclientepremio'] : "";}
if (!isset($this->sc_temp_usr_cnpj)) {$this->sc_temp_usr_cnpj = (isset($_SESSION['usr_cnpj'])) ? $_SESSION['usr_cnpj'] : "";}
if (!isset($this->sc_temp_pastacliente)) {$this->sc_temp_pastacliente = (isset($_SESSION['pastacliente'])) ? $_SESSION['pastacliente'] : "";}
         $this->sc_temp_pastacliente = '/imagempub/'. $this->sc_temp_usr_cnpj;
$this->sc_temp_pastaclientepremio = '/imagempub/'. $this->sc_temp_usr_cnpj;




$this->nomenclatura  =$this->act_retiraAcento($this->nomenclatura );
$this->rua  =$this->act_retiraAcento($this->rua );
$this->bairro  =$this->act_retiraAcento($this->bairro );
$this->complemento  =$this->act_retiraAcento($this->complemento );
$this->cidade  =$this->act_retiraAcento($this->cidade );


$address = $this->rua  .','.$this->numero .','.$this->bairro .','.$this->cidade .','.$this->estado ;
$request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$address."&sensor=true";
$xml = simplexml_load_file($request_url) or die("url nao carregada");
$status = $xml->status;
if ($status=="OK")  
{ 
      $this->latitude  = $xml->result->geometry->location->lat; 
      $this->longitude  = $xml->result->geometry->location->lng;       
} 


if (isset($this->sc_temp_pastacliente)) { $_SESSION['pastacliente'] = $this->sc_temp_pastacliente;}
if (isset($this->sc_temp_usr_cnpj)) { $_SESSION['usr_cnpj'] = $this->sc_temp_usr_cnpj;}
if (isset($this->sc_temp_pastaclientepremio)) { $_SESSION['pastaclientepremio'] = $this->sc_temp_pastaclientepremio;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_bairro != $this->bairro || (isset($bFlagRead_bairro) && $bFlagRead_bairro)))
    {
        $this->ajax_return_values_bairro(true);
    }
    if (($original_cidade != $this->cidade || (isset($bFlagRead_cidade) && $bFlagRead_cidade)))
    {
        $this->ajax_return_values_cidade(true);
    }
    if (($original_complemento != $this->complemento || (isset($bFlagRead_complemento) && $bFlagRead_complemento)))
    {
        $this->ajax_return_values_complemento(true);
    }
    if (($original_estado != $this->estado || (isset($bFlagRead_estado) && $bFlagRead_estado)))
    {
        $this->ajax_return_values_estado(true);
    }
    if (($original_nomenclatura != $this->nomenclatura || (isset($bFlagRead_nomenclatura) && $bFlagRead_nomenclatura)))
    {
        $this->ajax_return_values_nomenclatura(true);
    }
    if (($original_numero != $this->numero || (isset($bFlagRead_numero) && $bFlagRead_numero)))
    {
        $this->ajax_return_values_numero(true);
    }
    if (($original_rua != $this->rua || (isset($bFlagRead_rua) && $bFlagRead_rua)))
    {
        $this->ajax_return_values_rua(true);
    }
}
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off'; 
    }
    if ("excluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'on';
                     /* ap_contrato_coletor */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) FROM ap_contrato_coletor WHERE fk_publicador = " . $this->pk_publicador ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) FROM ap_contrato_coletor WHERE fk_publicador = " . $this->pk_publicador ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) FROM ap_contrato_coletor WHERE fk_publicador = " . $this->pk_publicador ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) FROM ap_contrato_coletor WHERE fk_publicador = " . $this->pk_publicador ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) FROM ap_contrato_coletor WHERE fk_publicador = " . $this->pk_publicador ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_ap_contrato_coletor = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_ap_contrato_coletor[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_ap_contrato_coletor = false;
          $this->dataset_ap_contrato_coletor_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_ap_contrato_coletor[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_ap_contrato_publicador_cliente_mob' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $this->nmgp_opcao ; 
          if ($this->nmgp_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          else
          { 
              $this->sc_evento = ""; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->NM_rollback_db(); 
          $this->Campos_Mens_erro = ""; 
      }
      $SC_tem_cmp_update = true; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Db->BeginTrans(); 
          $this->Ini->sc_tem_trans_banco = true; 
      } 
      $NM_val_form['fk_contrato'] = $this->fk_contrato;
      $NM_val_form['situacao'] = $this->situacao;
      $NM_val_form['nomenclatura'] = $this->nomenclatura;
      $NM_val_form['data_criacao'] = $this->data_criacao;
      $NM_val_form['cep'] = $this->cep;
      $NM_val_form['bairro'] = $this->bairro;
      $NM_val_form['rua'] = $this->rua;
      $NM_val_form['numero'] = $this->numero;
      $NM_val_form['complemento'] = $this->complemento;
      $NM_val_form['cidade'] = $this->cidade;
      $NM_val_form['estado'] = $this->estado;
      $NM_val_form['abreviatura'] = $this->abreviatura;
      $NM_val_form['pseg'] = $this->pseg;
      $NM_val_form['pter'] = $this->pter;
      $NM_val_form['pqua'] = $this->pqua;
      $NM_val_form['pqui'] = $this->pqui;
      $NM_val_form['psex'] = $this->psex;
      $NM_val_form['psab'] = $this->psab;
      $NM_val_form['pdom'] = $this->pdom;
      $NM_val_form['destaque_img'] = $this->destaque_img;
      $NM_val_form['destaque'] = $this->destaque;
      $NM_val_form['foto_publicacao'] = $this->foto_publicacao;
      $NM_val_form['texto_publicacao'] = $this->texto_publicacao;
      $NM_val_form['pk_publicador'] = $this->pk_publicador;
      $NM_val_form['foto_premiacao'] = $this->foto_premiacao;
      $NM_val_form['texto_premiacao'] = $this->texto_premiacao;
      $NM_val_form['gera_dados'] = $this->gera_dados;
      $NM_val_form['latitude'] = $this->latitude;
      $NM_val_form['longitude'] = $this->longitude;
      $NM_val_form['pdesconto'] = $this->pdesconto;
      if ($this->pk_publicador == "")  
      { 
          $this->pk_publicador = 0;
      } 
      if ($this->fk_contrato == "")  
      { 
          $this->fk_contrato = 0;
          $this->sc_force_zero[] = 'fk_contrato';
      } 
      if ($this->gera_dados == "")  
      { 
          $this->gera_dados = 0;
          $this->sc_force_zero[] = 'gera_dados';
      } 
      if ($this->destaque == "")  
      { 
          $this->destaque = 0;
          $this->sc_force_zero[] = 'destaque';
      } 
      if ($this->pdesconto == "")  
      { 
          $this->pdesconto = 0;
          $this->sc_force_zero[] = 'pdesconto';
      } 
      if ($this->situacao == "")  
      { 
          $this->situacao = 0;
          $this->sc_force_zero[] = 'situacao';
      } 
      if ($this->pseg == "")  
      { 
          $this->pseg = 0;
          $this->sc_force_zero[] = 'pseg';
      } 
      if ($this->pter == "")  
      { 
          $this->pter = 0;
          $this->sc_force_zero[] = 'pter';
      } 
      if ($this->pqua == "")  
      { 
          $this->pqua = 0;
          $this->sc_force_zero[] = 'pqua';
      } 
      if ($this->pqui == "")  
      { 
          $this->pqui = 0;
          $this->sc_force_zero[] = 'pqui';
      } 
      if ($this->psex == "")  
      { 
          $this->psex = 0;
          $this->sc_force_zero[] = 'psex';
      } 
      if ($this->psab == "")  
      { 
          $this->psab = 0;
          $this->sc_force_zero[] = 'psab';
      } 
      if ($this->pdom == "")  
      { 
          $this->pdom = 0;
          $this->sc_force_zero[] = 'pdom';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql);
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          if ($this->data_criacao == "")  
          { 
              $this->data_criacao = "null"; 
              $NM_val_null[] = "data_criacao";
          } 
          $this->nomenclatura_before_qstr = $this->nomenclatura;
          $this->nomenclatura = substr($this->Db->qstr($this->nomenclatura), 1, -1); 
          if ($this->nomenclatura == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nomenclatura = "null"; 
              $NM_val_null[] = "nomenclatura";
          } 
          $this->foto_publicacao_before_qstr = $this->foto_publicacao;
          $this->foto_publicacao = substr($this->Db->qstr($this->foto_publicacao), 1, -1); 
          if ($this->foto_publicacao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->foto_publicacao = "null"; 
              $NM_val_null[] = "foto_publicacao";
          } 
          $this->texto_publicacao_before_qstr = $this->texto_publicacao;
          $this->texto_publicacao = substr($this->Db->qstr($this->texto_publicacao), 1, -1); 
          if ($this->texto_publicacao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->texto_publicacao = "null"; 
              $NM_val_null[] = "texto_publicacao";
          } 
          $this->foto_premiacao_before_qstr = $this->foto_premiacao;
          $this->foto_premiacao = substr($this->Db->qstr($this->foto_premiacao), 1, -1); 
          if ($this->foto_premiacao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->foto_premiacao = "null"; 
              $NM_val_null[] = "foto_premiacao";
          } 
          $this->texto_premiacao_before_qstr = $this->texto_premiacao;
          $this->texto_premiacao = substr($this->Db->qstr($this->texto_premiacao), 1, -1); 
          if ($this->texto_premiacao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->texto_premiacao = "null"; 
              $NM_val_null[] = "texto_premiacao";
          } 
          $this->cep_before_qstr = $this->cep;
          $this->cep = substr($this->Db->qstr($this->cep), 1, -1); 
          if ($this->cep == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cep = "null"; 
              $NM_val_null[] = "cep";
          } 
          $this->bairro_before_qstr = $this->bairro;
          $this->bairro = substr($this->Db->qstr($this->bairro), 1, -1); 
          if ($this->bairro == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->bairro = "null"; 
              $NM_val_null[] = "bairro";
          } 
          $this->rua_before_qstr = $this->rua;
          $this->rua = substr($this->Db->qstr($this->rua), 1, -1); 
          if ($this->rua == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->rua = "null"; 
              $NM_val_null[] = "rua";
          } 
          $this->numero_before_qstr = $this->numero;
          $this->numero = substr($this->Db->qstr($this->numero), 1, -1); 
          if ($this->numero == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->numero = "null"; 
              $NM_val_null[] = "numero";
          } 
          $this->complemento_before_qstr = $this->complemento;
          $this->complemento = substr($this->Db->qstr($this->complemento), 1, -1); 
          if ($this->complemento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->complemento = "null"; 
              $NM_val_null[] = "complemento";
          } 
          $this->cidade_before_qstr = $this->cidade;
          $this->cidade = substr($this->Db->qstr($this->cidade), 1, -1); 
          if ($this->cidade == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cidade = "null"; 
              $NM_val_null[] = "cidade";
          } 
          $this->estado_before_qstr = $this->estado;
          $this->estado = substr($this->Db->qstr($this->estado), 1, -1); 
          if ($this->estado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->estado = "null"; 
              $NM_val_null[] = "estado";
          } 
          $this->latitude_before_qstr = $this->latitude;
          $this->latitude = substr($this->Db->qstr($this->latitude), 1, -1); 
          if ($this->latitude == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->latitude = "null"; 
              $NM_val_null[] = "latitude";
          } 
          $this->longitude_before_qstr = $this->longitude;
          $this->longitude = substr($this->Db->qstr($this->longitude), 1, -1); 
          if ($this->longitude == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->longitude = "null"; 
              $NM_val_null[] = "longitude";
          } 
          $this->abreviatura_before_qstr = $this->abreviatura;
          $this->abreviatura = substr($this->Db->qstr($this->abreviatura), 1, -1); 
          if ($this->abreviatura == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->abreviatura = "null"; 
              $NM_val_null[] = "abreviatura";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET fk_contrato = $this->fk_contrato, data_criacao = #$this->data_criacao#, nomenclatura = '$this->nomenclatura', texto_publicacao = '$this->texto_publicacao', cep = '$this->cep', bairro = '$this->bairro', rua = '$this->rua', numero = '$this->numero', complemento = '$this->complemento', cidade = '$this->cidade', estado = '$this->estado', destaque = $this->destaque, situacao = $this->situacao, pseg = $this->pseg, pter = $this->pter, pqua = $this->pqua, pqui = $this->pqui, psex = $this->psex, psab = $this->psab, pdom = $this->pdom, abreviatura = '$this->abreviatura'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET fk_contrato = $this->fk_contrato, data_criacao = " . $this->Ini->date_delim . $this->data_criacao . $this->Ini->date_delim1 . ", nomenclatura = '$this->nomenclatura', texto_publicacao = '$this->texto_publicacao', cep = '$this->cep', bairro = '$this->bairro', rua = '$this->rua', numero = '$this->numero', complemento = '$this->complemento', cidade = '$this->cidade', estado = '$this->estado', destaque = $this->destaque, situacao = $this->situacao, pseg = $this->pseg, pter = $this->pter, pqua = $this->pqua, pqui = $this->pqui, psex = $this->psex, psab = $this->psab, pdom = $this->pdom, abreviatura = '$this->abreviatura'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET fk_contrato = $this->fk_contrato, data_criacao = " . $this->Ini->date_delim . $this->data_criacao . $this->Ini->date_delim1 . ", nomenclatura = '$this->nomenclatura', texto_publicacao = '$this->texto_publicacao', cep = '$this->cep', bairro = '$this->bairro', rua = '$this->rua', numero = '$this->numero', complemento = '$this->complemento', cidade = '$this->cidade', estado = '$this->estado', destaque = $this->destaque, situacao = $this->situacao, pseg = $this->pseg, pter = $this->pter, pqua = $this->pqua, pqui = $this->pqui, psex = $this->psex, psab = $this->psab, pdom = $this->pdom, abreviatura = '$this->abreviatura'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET fk_contrato = $this->fk_contrato, data_criacao = EXTEND('$this->data_criacao', YEAR TO DAY), nomenclatura = '$this->nomenclatura', texto_publicacao = '$this->texto_publicacao', cep = '$this->cep', bairro = '$this->bairro', rua = '$this->rua', numero = '$this->numero', complemento = '$this->complemento', cidade = '$this->cidade', estado = '$this->estado', destaque = $this->destaque, situacao = $this->situacao, pseg = $this->pseg, pter = $this->pter, pqua = $this->pqua, pqui = $this->pqui, psex = $this->psex, psab = $this->psab, pdom = $this->pdom, abreviatura = '$this->abreviatura'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET fk_contrato = $this->fk_contrato, data_criacao = " . $this->Ini->date_delim . $this->data_criacao . $this->Ini->date_delim1 . ", nomenclatura = '$this->nomenclatura', texto_publicacao = '$this->texto_publicacao', cep = '$this->cep', bairro = '$this->bairro', rua = '$this->rua', numero = '$this->numero', complemento = '$this->complemento', cidade = '$this->cidade', estado = '$this->estado', destaque = $this->destaque, situacao = $this->situacao, pseg = $this->pseg, pter = $this->pter, pqua = $this->pqua, pqui = $this->pqui, psex = $this->psex, psab = $this->psab, pdom = $this->pdom, abreviatura = '$this->abreviatura'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET fk_contrato = $this->fk_contrato, data_criacao = " . $this->Ini->date_delim . $this->data_criacao . $this->Ini->date_delim1 . ", nomenclatura = '$this->nomenclatura', texto_publicacao = '$this->texto_publicacao', cep = '$this->cep', bairro = '$this->bairro', rua = '$this->rua', numero = '$this->numero', complemento = '$this->complemento', cidade = '$this->cidade', estado = '$this->estado', destaque = $this->destaque, situacao = $this->situacao, pseg = $this->pseg, pter = $this->pter, pqua = $this->pqua, pqui = $this->pqui, psex = $this->psex, psab = $this->psab, pdom = $this->pdom, abreviatura = '$this->abreviatura'";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET fk_contrato = $this->fk_contrato, data_criacao = " . $this->Ini->date_delim . $this->data_criacao . $this->Ini->date_delim1 . ", nomenclatura = '$this->nomenclatura', texto_publicacao = '$this->texto_publicacao', cep = '$this->cep', bairro = '$this->bairro', rua = '$this->rua', numero = '$this->numero', complemento = '$this->complemento', cidade = '$this->cidade', estado = '$this->estado', destaque = $this->destaque, situacao = $this->situacao, pseg = $this->pseg, pter = $this->pter, pqua = $this->pqua, pqui = $this->pqui, psex = $this->psex, psab = $this->psab, pdom = $this->pdom, abreviatura = '$this->abreviatura'";  
              } 
              if (isset($NM_val_form['texto_premiacao']) && $NM_val_form['texto_premiacao'] != $this->nmgp_dados_select['texto_premiacao']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " texto_premiacao = '$this->texto_premiacao'"; 
                  $comando_oracle        .= " texto_premiacao = '$this->texto_premiacao'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['gera_dados']) && $NM_val_form['gera_dados'] != $this->nmgp_dados_select['gera_dados']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " gera_dados = $this->gera_dados"; 
                  $comando_oracle        .= " gera_dados = $this->gera_dados"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['latitude']) && $NM_val_form['latitude'] != $this->nmgp_dados_select['latitude']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " latitude = '$this->latitude'"; 
                  $comando_oracle        .= " latitude = '$this->latitude'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['longitude']) && $NM_val_form['longitude'] != $this->nmgp_dados_select['longitude']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " longitude = '$this->longitude'"; 
                  $comando_oracle        .= " longitude = '$this->longitude'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['pdesconto']) && $NM_val_form['pdesconto'] != $this->nmgp_dados_select['pdesconto']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " pdesconto = $this->pdesconto"; 
                  $comando_oracle        .= " pdesconto = $this->pdesconto"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              $aDoNotUpdate = array();
              $temp_cmd_sql = "";
              if ($this->foto_publicacao_limpa == "S") 
              { 
                  if ($this->foto_publicacao != "null") 
                  { 
                      $this->foto_publicacao = ''; 
                  } 
                  if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                  { 
                      $temp_cmd_sql .= ", foto_publicacao = '" . $this->foto_publicacao . "'"; 
                      $comando_oracle .= ", foto_publicacao = '" . $this->foto_publicacao . "'"; 
                  } 
                  else 
                  { 
                     $temp_cmd_sql .= " foto_publicacao = '" . $this->foto_publicacao . "'"; 
                     $comando_oracle .= " foto_publicacao = '" . $this->foto_publicacao . "'"; 
                     $SC_ex_upd_or = true; 
                     $SC_ex_update = true; 
                  } 
                  $this->foto_publicacao = "";
              } 
              else 
              { 
                  if ($this->foto_publicacao != "none" && $this->foto_publicacao != "") 
                  { 
                      $NM_conteudo =  $this->foto_publicacao;
                      if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                      { 
                          $temp_cmd_sql .= ", foto_publicacao = '$NM_conteudo'" ; 
                          $comando_oracle .= ", foto_publicacao = '$NM_conteudo'" ; 
                      } 
                      else 
                      { 
                          $temp_cmd_sql .= " foto_publicacao = '$NM_conteudo'" ; 
                          $comando_oracle .= " foto_publicacao = '$NM_conteudo'" ; 
                          $SC_ex_upd_or = true; 
                          $SC_ex_update = true; 
                      } 
                  } 
                  else
                  {
                      $aDoNotUpdate[] = "foto_publicacao";
                  }
              } 
              if (!empty($temp_cmd_sql)) 
              { 
                  $comando .= $temp_cmd_sql;
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE pk_publicador = $this->pk_publicador ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE pk_publicador = $this->pk_publicador ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE pk_publicador = $this->pk_publicador ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE pk_publicador = $this->pk_publicador ";  
              }  
              else  
              {
                  $comando .= " WHERE pk_publicador = $this->pk_publicador ";  
              }  
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              if ($SC_ex_update || $SC_tem_cmp_update)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg(), true); 
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $this->Db->ErrorMsg();  
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              if ($this->foto_publicacao_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['foto_publicacao_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
          $this->nomenclatura = $this->nomenclatura_before_qstr;
          $this->foto_publicacao = $this->foto_publicacao_before_qstr;
          $this->texto_publicacao = $this->texto_publicacao_before_qstr;
          $this->foto_premiacao = $this->foto_premiacao_before_qstr;
          $this->texto_premiacao = $this->texto_premiacao_before_qstr;
          $this->cep = $this->cep_before_qstr;
          $this->bairro = $this->bairro_before_qstr;
          $this->rua = $this->rua_before_qstr;
          $this->numero = $this->numero_before_qstr;
          $this->complemento = $this->complemento_before_qstr;
          $this->cidade = $this->cidade_before_qstr;
          $this->estado = $this->estado_before_qstr;
          $this->latitude = $this->latitude_before_qstr;
          $this->longitude = $this->longitude_before_qstr;
          $this->abreviatura = $this->abreviatura_before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['pk_publicador'])) { $this->pk_publicador = $NM_val_form['pk_publicador']; }
              elseif (isset($this->pk_publicador)) { $this->nm_limpa_alfa($this->pk_publicador); }
              if     (isset($NM_val_form) && isset($NM_val_form['fk_contrato'])) { $this->fk_contrato = $NM_val_form['fk_contrato']; }
              elseif (isset($this->fk_contrato)) { $this->nm_limpa_alfa($this->fk_contrato); }
              if     (isset($NM_val_form) && isset($NM_val_form['nomenclatura'])) { $this->nomenclatura = $NM_val_form['nomenclatura']; }
              elseif (isset($this->nomenclatura)) { $this->nm_limpa_alfa($this->nomenclatura); }
              if     (isset($NM_val_form) && isset($NM_val_form['texto_publicacao'])) { $this->texto_publicacao = $NM_val_form['texto_publicacao']; }
              elseif (isset($this->texto_publicacao)) { $this->nm_limpa_alfa($this->texto_publicacao); }
              if     (isset($NM_val_form) && isset($NM_val_form['cep'])) { $this->cep = $NM_val_form['cep']; }
              elseif (isset($this->cep)) { $this->nm_limpa_alfa($this->cep); }
              if     (isset($NM_val_form) && isset($NM_val_form['bairro'])) { $this->bairro = $NM_val_form['bairro']; }
              elseif (isset($this->bairro)) { $this->nm_limpa_alfa($this->bairro); }
              if     (isset($NM_val_form) && isset($NM_val_form['rua'])) { $this->rua = $NM_val_form['rua']; }
              elseif (isset($this->rua)) { $this->nm_limpa_alfa($this->rua); }
              if     (isset($NM_val_form) && isset($NM_val_form['numero'])) { $this->numero = $NM_val_form['numero']; }
              elseif (isset($this->numero)) { $this->nm_limpa_alfa($this->numero); }
              if     (isset($NM_val_form) && isset($NM_val_form['complemento'])) { $this->complemento = $NM_val_form['complemento']; }
              elseif (isset($this->complemento)) { $this->nm_limpa_alfa($this->complemento); }
              if     (isset($NM_val_form) && isset($NM_val_form['cidade'])) { $this->cidade = $NM_val_form['cidade']; }
              elseif (isset($this->cidade)) { $this->nm_limpa_alfa($this->cidade); }
              if     (isset($NM_val_form) && isset($NM_val_form['estado'])) { $this->estado = $NM_val_form['estado']; }
              elseif (isset($this->estado)) { $this->nm_limpa_alfa($this->estado); }
              if     (isset($NM_val_form) && isset($NM_val_form['destaque'])) { $this->destaque = $NM_val_form['destaque']; }
              elseif (isset($this->destaque)) { $this->nm_limpa_alfa($this->destaque); }
              if     (isset($NM_val_form) && isset($NM_val_form['situacao'])) { $this->situacao = $NM_val_form['situacao']; }
              elseif (isset($this->situacao)) { $this->nm_limpa_alfa($this->situacao); }
              if     (isset($NM_val_form) && isset($NM_val_form['pseg'])) { $this->pseg = $NM_val_form['pseg']; }
              elseif (isset($this->pseg)) { $this->nm_limpa_alfa($this->pseg); }
              if     (isset($NM_val_form) && isset($NM_val_form['pter'])) { $this->pter = $NM_val_form['pter']; }
              elseif (isset($this->pter)) { $this->nm_limpa_alfa($this->pter); }
              if     (isset($NM_val_form) && isset($NM_val_form['pqua'])) { $this->pqua = $NM_val_form['pqua']; }
              elseif (isset($this->pqua)) { $this->nm_limpa_alfa($this->pqua); }
              if     (isset($NM_val_form) && isset($NM_val_form['pqui'])) { $this->pqui = $NM_val_form['pqui']; }
              elseif (isset($this->pqui)) { $this->nm_limpa_alfa($this->pqui); }
              if     (isset($NM_val_form) && isset($NM_val_form['psex'])) { $this->psex = $NM_val_form['psex']; }
              elseif (isset($this->psex)) { $this->nm_limpa_alfa($this->psex); }
              if     (isset($NM_val_form) && isset($NM_val_form['psab'])) { $this->psab = $NM_val_form['psab']; }
              elseif (isset($this->psab)) { $this->nm_limpa_alfa($this->psab); }
              if     (isset($NM_val_form) && isset($NM_val_form['pdom'])) { $this->pdom = $NM_val_form['pdom']; }
              elseif (isset($this->pdom)) { $this->nm_limpa_alfa($this->pdom); }
              if     (isset($NM_val_form) && isset($NM_val_form['abreviatura'])) { $this->abreviatura = $NM_val_form['abreviatura']; }
              elseif (isset($this->abreviatura)) { $this->nm_limpa_alfa($this->abreviatura); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('fk_contrato', 'situacao', 'nomenclatura', 'data_criacao', 'cep', 'bairro', 'rua', 'numero', 'complemento', 'cidade', 'estado', 'abreviatura', 'pseg', 'pter', 'pqua', 'pqui', 'psex', 'psab', 'pdom', 'destaque_img', 'destaque', 'foto_publicacao', 'texto_publicacao'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "pk_publicador, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              $dir_file = $this->Ini->root . $this->Ini->path_imagens . "" . $_SESSION['pastacliente'] . "/"; 
              $_test_file = $this->fetchUniqueUploadName($this->foto_publicacao_scfile_name, $dir_file, "foto_publicacao");
              if (trim($this->foto_publicacao_scfile_name) != $_test_file)
              {
                  $this->foto_publicacao_scfile_name = $_test_file;
                  $this->foto_publicacao = $_test_file;
              }
              $_test_file = $this->fetchUniqueUploadName($this->foto_premiacao_scfile_name, $dir_file, "foto_premiacao");
              if (trim($this->foto_premiacao_scfile_name) != $_test_file)
              {
                  $this->foto_premiacao_scfile_name = $_test_file;
                  $this->foto_premiacao = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (fk_contrato, data_criacao, nomenclatura, foto_publicacao, texto_publicacao, foto_premiacao, texto_premiacao, gera_dados, cep, bairro, rua, numero, complemento, cidade, estado, latitude, longitude, destaque, pdesconto, situacao, pseg, pter, pqua, pqui, psex, psab, pdom, abreviatura) VALUES ($this->fk_contrato, #$this->data_criacao#, '$this->nomenclatura', '$this->foto_publicacao', '$this->texto_publicacao', '$this->foto_premiacao', '$this->texto_premiacao', $this->gera_dados, '$this->cep', '$this->bairro', '$this->rua', '$this->numero', '$this->complemento', '$this->cidade', '$this->estado', '$this->latitude', '$this->longitude', $this->destaque, $this->pdesconto, $this->situacao, $this->pseg, $this->pter, $this->pqua, $this->pqui, $this->psex, $this->psab, $this->pdom, '$this->abreviatura')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fk_contrato, data_criacao, nomenclatura, foto_publicacao, texto_publicacao, foto_premiacao, texto_premiacao, gera_dados, cep, bairro, rua, numero, complemento, cidade, estado, latitude, longitude, destaque, pdesconto, situacao, pseg, pter, pqua, pqui, psex, psab, pdom, abreviatura) VALUES (" . $NM_seq_auto . "$this->fk_contrato, " . $this->Ini->date_delim . $this->data_criacao . $this->Ini->date_delim1 . ", '$this->nomenclatura', '$this->foto_publicacao', '$this->texto_publicacao', '$this->foto_premiacao', '$this->texto_premiacao', $this->gera_dados, '$this->cep', '$this->bairro', '$this->rua', '$this->numero', '$this->complemento', '$this->cidade', '$this->estado', '$this->latitude', '$this->longitude', $this->destaque, $this->pdesconto, $this->situacao, $this->pseg, $this->pter, $this->pqua, $this->pqui, $this->psex, $this->psab, $this->pdom, '$this->abreviatura')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fk_contrato, data_criacao, nomenclatura, foto_publicacao, texto_publicacao, foto_premiacao, texto_premiacao, gera_dados, cep, bairro, rua, numero, complemento, cidade, estado, latitude, longitude, destaque, pdesconto, situacao, pseg, pter, pqua, pqui, psex, psab, pdom, abreviatura) VALUES (" . $NM_seq_auto . "$this->fk_contrato, " . $this->Ini->date_delim . $this->data_criacao . $this->Ini->date_delim1 . ", '$this->nomenclatura', '$this->foto_publicacao', '$this->texto_publicacao', '$this->foto_premiacao', '$this->texto_premiacao', $this->gera_dados, '$this->cep', '$this->bairro', '$this->rua', '$this->numero', '$this->complemento', '$this->cidade', '$this->estado', '$this->latitude', '$this->longitude', $this->destaque, $this->pdesconto, $this->situacao, $this->pseg, $this->pter, $this->pqua, $this->pqui, $this->psex, $this->psab, $this->pdom, '$this->abreviatura')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fk_contrato, data_criacao, nomenclatura, foto_publicacao, texto_publicacao, foto_premiacao, texto_premiacao, gera_dados, cep, bairro, rua, numero, complemento, cidade, estado, latitude, longitude, destaque, pdesconto, situacao, pseg, pter, pqua, pqui, psex, psab, pdom, abreviatura) VALUES (" . $NM_seq_auto . "$this->fk_contrato, EXTEND('$this->data_criacao', YEAR TO DAY), '$this->nomenclatura', '$this->foto_publicacao', '$this->texto_publicacao', '$this->foto_premiacao', '$this->texto_premiacao', $this->gera_dados, '$this->cep', '$this->bairro', '$this->rua', '$this->numero', '$this->complemento', '$this->cidade', '$this->estado', '$this->latitude', '$this->longitude', $this->destaque, $this->pdesconto, $this->situacao, $this->pseg, $this->pter, $this->pqua, $this->pqui, $this->psex, $this->psab, $this->pdom, '$this->abreviatura')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fk_contrato, data_criacao, nomenclatura, foto_publicacao, texto_publicacao, foto_premiacao, texto_premiacao, gera_dados, cep, bairro, rua, numero, complemento, cidade, estado, latitude, longitude, destaque, pdesconto, situacao, pseg, pter, pqua, pqui, psex, psab, pdom, abreviatura) VALUES (" . $NM_seq_auto . "$this->fk_contrato, " . $this->Ini->date_delim . $this->data_criacao . $this->Ini->date_delim1 . ", '$this->nomenclatura', '$this->foto_publicacao', '$this->texto_publicacao', '$this->foto_premiacao', '$this->texto_premiacao', $this->gera_dados, '$this->cep', '$this->bairro', '$this->rua', '$this->numero', '$this->complemento', '$this->cidade', '$this->estado', '$this->latitude', '$this->longitude', $this->destaque, $this->pdesconto, $this->situacao, $this->pseg, $this->pter, $this->pqua, $this->pqui, $this->psex, $this->psab, $this->pdom, '$this->abreviatura')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fk_contrato, data_criacao, nomenclatura, foto_publicacao, texto_publicacao, foto_premiacao, texto_premiacao, gera_dados, cep, bairro, rua, numero, complemento, cidade, estado, latitude, longitude, destaque, pdesconto, situacao, pseg, pter, pqua, pqui, psex, psab, pdom, abreviatura) VALUES (" . $NM_seq_auto . "$this->fk_contrato, " . $this->Ini->date_delim . $this->data_criacao . $this->Ini->date_delim1 . ", '$this->nomenclatura', '$this->foto_publicacao', '$this->texto_publicacao', '$this->foto_premiacao', '$this->texto_premiacao', $this->gera_dados, '$this->cep', '$this->bairro', '$this->rua', '$this->numero', '$this->complemento', '$this->cidade', '$this->estado', '$this->latitude', '$this->longitude', $this->destaque, $this->pdesconto, $this->situacao, $this->pseg, $this->pter, $this->pqua, $this->pqui, $this->psex, $this->psab, $this->pdom, '$this->abreviatura')"; 
              }
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg(), true); 
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                      { 
                          $this->sc_erro_insert = $this->Db->ErrorMsg();  
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) 
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select @@identity"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->pk_publicador =  $rsy->fields[0];
                 $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->pk_publicador = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT dbinfo('sqlca.sqlerrd1') FROM " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->pk_publicador = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select .currval from dual"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->pk_publicador = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $str_tabela = "SYSIBM.SYSDUMMY1"; 
                  if($this->Ini->nm_con_use_schema == "N") 
                  { 
                          $str_tabela = "SYSDUMMY1"; 
                  } 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT IDENTITY_VAL_LOCAL() FROM " . $str_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->pk_publicador = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select CURRVAL('')"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->pk_publicador = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select gen_id(, 0) from " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->pk_publicador = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->pk_publicador = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total']);
              }

              $dir_img = $this->Ini->root . $this->Ini->path_imagens . "" . $_SESSION['pastacliente'] . "/"; 
              $arq_foto_publicacao = fopen($this->SC_IMG_foto_publicacao, "r") ; 
              $reg_foto_publicacao = fread($arq_foto_publicacao, filesize($this->SC_IMG_foto_publicacao)) ; 
              fclose($arq_foto_publicacao) ;  
              $arq_foto_publicacao = fopen($dir_img . trim($this->foto_publicacao_scfile_name), "w") ; 
              fwrite($arq_foto_publicacao, $reg_foto_publicacao) ;  
              fclose($arq_foto_publicacao) ;  
              $this->sc_evento = "insert"; 
              $this->sc_insert_on = true; 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->pk_publicador = substr($this->Db->qstr($this->pk_publicador), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pk_publicador = $this->pk_publicador "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total']);
              }

              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['parms'] = "pk_publicador?#?$this->pk_publicador?@?"; 
      }
      $this->nmgp_dados_form['foto_publicacao'] = ""; 
      $this->foto_publicacao_limpa = ""; 
      $this->foto_publicacao_salva = ""; 
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->pk_publicador = substr($this->Db->qstr($this->pk_publicador), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter'] . ")";
          }
      }
//------------ 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "R")
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['iframe_evento'] == "insert") 
          { 
               $this->nmgp_opcao = "novo"; 
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['select'] = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['iframe_evento'] = $this->sc_evento; 
      } 
      if (!isset($this->nmgp_opcao) || empty($this->nmgp_opcao)) 
      { 
          if (empty($this->pk_publicador)) 
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
          else 
          { 
              $this->nmgp_opcao = "igual"; 
          } 
      } 
      if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->nmgp_opcao != "nada" && (trim($this->pk_publicador) == "")) 
      { 
          if ($this->nmgp_opcao == "avanca")  
          { 
              $this->nmgp_opcao = "final"; 
          } 
          elseif ($this->nmgp_opcao != "novo")
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "F" && $this->sc_evento == "insert")
      {
          $this->nmgp_opcao = "final";
      }
      $sc_where = trim("fk_contrato = ( select pk_contrato from ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "')");
      if (substr(strtolower($sc_where), 0, 5) == "where")
      {
          $sc_where  = substr($sc_where , 5);
      }
      if (!empty($sc_where))
      {
          $sc_where = " where " . $sc_where . " ";
      }
      if ('' != $sc_where_filter)
      {
          $sc_where = ('' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total']))
      { 
          $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_ap_contrato_publicador_cliente_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total'] = $qt_geral_reg_form_ap_contrato_publicador_cliente_mob;
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->pk_publicador))
          {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $Key_Where = "pk_publicador < $this->pk_publicador "; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Key_Where = "pk_publicador < $this->pk_publicador "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Key_Where = "pk_publicador < $this->pk_publicador "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Key_Where = "pk_publicador < $this->pk_publicador "; 
              }
              else  
              {
                  $Key_Where = "pk_publicador < $this->pk_publicador "; 
              }
              $Where_Start = (empty($sc_where)) ? " where " . $Key_Where :  $sc_where . " and (" . $Key_Where . ")";
              $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $Where_Start; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_ap_contrato_publicador_cliente_mob = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total'];
      } 
      if ($this->nmgp_opcao == "inicio") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start']++; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] > $qt_geral_reg_form_ap_contrato_publicador_cliente_mob)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] = $qt_geral_reg_form_ap_contrato_publicador_cliente_mob; 
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start']--; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] = $qt_geral_reg_form_ap_contrato_publicador_cliente_mob; 
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] = 0;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] + 1;
      $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] + 1; 
      $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_qtd']; 
      $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total'] + 1; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT pk_publicador, fk_contrato, str_replace (convert(char(10),data_criacao,102), '.', '-') + ' ' + convert(char(8),data_criacao,20), nomenclatura, foto_publicacao, texto_publicacao, foto_premiacao, texto_premiacao, gera_dados, cep, bairro, rua, numero, complemento, cidade, estado, latitude, longitude, destaque, pdesconto, situacao, pseg, pter, pqua, pqui, psex, psab, pdom, abreviatura from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT pk_publicador, fk_contrato, convert(char(23),data_criacao,121), nomenclatura, foto_publicacao, texto_publicacao, foto_premiacao, texto_premiacao, gera_dados, cep, bairro, rua, numero, complemento, cidade, estado, latitude, longitude, destaque, pdesconto, situacao, pseg, pter, pqua, pqui, psex, psab, pdom, abreviatura from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT pk_publicador, fk_contrato, data_criacao, nomenclatura, foto_publicacao, texto_publicacao, foto_premiacao, texto_premiacao, gera_dados, cep, bairro, rua, numero, complemento, cidade, estado, latitude, longitude, destaque, pdesconto, situacao, pseg, pter, pqua, pqui, psex, psab, pdom, abreviatura from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT pk_publicador, fk_contrato, EXTEND(data_criacao, YEAR TO DAY), nomenclatura, foto_publicacao, texto_publicacao, foto_premiacao, texto_premiacao, gera_dados, cep, bairro, rua, numero, complemento, cidade, estado, latitude, longitude, destaque, pdesconto, situacao, pseg, pter, pqua, pqui, psex, psab, pdom, abreviatura from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT pk_publicador, fk_contrato, data_criacao, nomenclatura, foto_publicacao, texto_publicacao, foto_premiacao, texto_premiacao, gera_dados, cep, bairro, rua, numero, complemento, cidade, estado, latitude, longitude, destaque, pdesconto, situacao, pseg, pter, pqua, pqui, psex, psab, pdom, abreviatura from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = "fk_contrato = ( select pk_contrato from ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "')";
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (!empty($sc_where))
              {
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  {
                     $aWhere[] = "pk_publicador = $this->pk_publicador"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                  {
                     $aWhere[] = "pk_publicador = $this->pk_publicador"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                  {
                     $aWhere[] = "pk_publicador = $this->pk_publicador"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  {
                     $aWhere[] = "pk_publicador = $this->pk_publicador"; 
                  }  
                  else  
                  {
                     $aWhere[] = "pk_publicador = $this->pk_publicador"; 
                  }
              } 
              else
              {
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  {
                      $aWhere[] = "pk_publicador = $this->pk_publicador"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                  {
                      $aWhere[] = "pk_publicador = $this->pk_publicador"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                  {
                      $aWhere[] = "pk_publicador = $this->pk_publicador"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  {
                      $aWhere[] = "pk_publicador = $this->pk_publicador"; 
                  }  
                  else  
                  {
                      $aWhere[] = "pk_publicador = $this->pk_publicador"; 
                  }
              } 
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "pk_publicador";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start']) ;  
              } 
          } 
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              if ($this->aba_iframe)
              {
                  $this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->pk_publicador = $rs->fields[0] ; 
              $this->nmgp_dados_select['pk_publicador'] = $this->pk_publicador;
              $this->fk_contrato = $rs->fields[1] ; 
              $this->nmgp_dados_select['fk_contrato'] = $this->fk_contrato;
              $this->data_criacao = $rs->fields[2] ; 
              $this->nmgp_dados_select['data_criacao'] = $this->data_criacao;
              $this->nomenclatura = $rs->fields[3] ; 
              $this->nmgp_dados_select['nomenclatura'] = $this->nomenclatura;
              $this->foto_publicacao = $rs->fields[4] ; 
              $this->nmgp_dados_select['foto_publicacao'] = $this->foto_publicacao;
              $this->texto_publicacao = $rs->fields[5] ; 
              $this->nmgp_dados_select['texto_publicacao'] = $this->texto_publicacao;
              $this->foto_premiacao = $rs->fields[6] ; 
              $this->nmgp_dados_select['foto_premiacao'] = $this->foto_premiacao;
              $this->texto_premiacao = $rs->fields[7] ; 
              $this->nmgp_dados_select['texto_premiacao'] = $this->texto_premiacao;
              $this->gera_dados = $rs->fields[8] ; 
              $this->nmgp_dados_select['gera_dados'] = $this->gera_dados;
              $this->cep = $rs->fields[9] ; 
              $this->nmgp_dados_select['cep'] = $this->cep;
              $this->bairro = $rs->fields[10] ; 
              $this->nmgp_dados_select['bairro'] = $this->bairro;
              $this->rua = $rs->fields[11] ; 
              $this->nmgp_dados_select['rua'] = $this->rua;
              $this->numero = $rs->fields[12] ; 
              $this->nmgp_dados_select['numero'] = $this->numero;
              $this->complemento = $rs->fields[13] ; 
              $this->nmgp_dados_select['complemento'] = $this->complemento;
              $this->cidade = $rs->fields[14] ; 
              $this->nmgp_dados_select['cidade'] = $this->cidade;
              $this->estado = $rs->fields[15] ; 
              $this->nmgp_dados_select['estado'] = $this->estado;
              $this->latitude = $rs->fields[16] ; 
              $this->nmgp_dados_select['latitude'] = $this->latitude;
              $this->longitude = $rs->fields[17] ; 
              $this->nmgp_dados_select['longitude'] = $this->longitude;
              $this->destaque = $rs->fields[18] ; 
              $this->nmgp_dados_select['destaque'] = $this->destaque;
              $this->pdesconto = $rs->fields[19] ; 
              $this->nmgp_dados_select['pdesconto'] = $this->pdesconto;
              $this->situacao = $rs->fields[20] ; 
              $this->nmgp_dados_select['situacao'] = $this->situacao;
              $this->pseg = $rs->fields[21] ; 
              $this->nmgp_dados_select['pseg'] = $this->pseg;
              $this->pter = $rs->fields[22] ; 
              $this->nmgp_dados_select['pter'] = $this->pter;
              $this->pqua = $rs->fields[23] ; 
              $this->nmgp_dados_select['pqua'] = $this->pqua;
              $this->pqui = $rs->fields[24] ; 
              $this->nmgp_dados_select['pqui'] = $this->pqui;
              $this->psex = $rs->fields[25] ; 
              $this->nmgp_dados_select['psex'] = $this->psex;
              $this->psab = $rs->fields[26] ; 
              $this->nmgp_dados_select['psab'] = $this->psab;
              $this->pdom = $rs->fields[27] ; 
              $this->nmgp_dados_select['pdom'] = $this->pdom;
              $this->abreviatura = $rs->fields[28] ; 
              $this->nmgp_dados_select['abreviatura'] = $this->abreviatura;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->pk_publicador = (string)$this->pk_publicador; 
              $this->fk_contrato = (string)$this->fk_contrato; 
              $this->gera_dados = (string)$this->gera_dados; 
              $this->destaque = (string)$this->destaque; 
              $this->pdesconto = (string)$this->pdesconto; 
              $this->situacao = (string)$this->situacao; 
              $this->pseg = (string)$this->pseg; 
              $this->pter = (string)$this->pter; 
              $this->pqua = (string)$this->pqua; 
              $this->pqui = (string)$this->pqui; 
              $this->psex = (string)$this->psex; 
              $this->psab = (string)$this->psab; 
              $this->pdom = (string)$this->pdom; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['parms'] = "pk_publicador?#?$this->pk_publicador?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['sub_dir'][0]  = "" . $_SESSION['pastacliente'];
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['sub_dir'][1]  = "" . $_SESSION['pastaclientepremio'];
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] < $qt_geral_reg_form_ap_contrato_publicador_cliente_mob;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opcao']   = '';
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->pk_publicador = "";  
              $this->fk_contrato = "";  
              $this->data_criacao =  date('Y') . "-" . date('m')  . "-" . date('d');
              $this->nomenclatura = "";  
              $this->foto_publicacao = "";  
              $this->foto_publicacao_ul_name = "" ;  
              $this->foto_publicacao_ul_type = "" ;  
              $this->texto_publicacao = "";  
              $this->foto_premiacao = "";  
              $this->foto_premiacao_ul_name = "" ;  
              $this->foto_premiacao_ul_type = "" ;  
              $this->texto_premiacao = "";  
              $this->gera_dados = "";  
              $this->cep = "";  
              $this->bairro = "";  
              $this->rua = "";  
              $this->numero = "";  
              $this->complemento = "";  
              $this->cidade = "";  
              $this->estado = "";  
              $this->latitude = "";  
              $this->longitude = "";  
              $this->destaque = "";  
              $this->pdesconto = "0";  
              $this->situacao = "";  
              $this->pseg = "";  
              $this->pter = "";  
              $this->pqua = "";  
              $this->pqui = "";  
              $this->psex = "";  
              $this->psab = "";  
              $this->pdom = "";  
              $this->abreviatura = "";  
              $this->destaque_img = "";  
              $this->formatado = false;
              if ($this->nmgp_clone != "S")
              {
              }
              if ($this->nmgp_clone == "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dados_select']))
              {
                  $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dados_select'];
                  $this->fk_contrato = $this->nmgp_dados_select['fk_contrato'];  
                  $this->data_criacao = $this->nmgp_dados_select['data_criacao'];  
                  $this->nomenclatura = $this->nmgp_dados_select['nomenclatura'];  
                  $this->foto_publicacao = $this->nmgp_dados_select['foto_publicacao'];  
                  $this->texto_publicacao = $this->nmgp_dados_select['texto_publicacao'];  
                  $this->foto_premiacao = $this->nmgp_dados_select['foto_premiacao'];  
                  $this->texto_premiacao = $this->nmgp_dados_select['texto_premiacao'];  
                  $this->gera_dados = $this->nmgp_dados_select['gera_dados'];  
                  $this->cep = $this->nmgp_dados_select['cep'];  
                  $this->bairro = $this->nmgp_dados_select['bairro'];  
                  $this->rua = $this->nmgp_dados_select['rua'];  
                  $this->numero = $this->nmgp_dados_select['numero'];  
                  $this->complemento = $this->nmgp_dados_select['complemento'];  
                  $this->cidade = $this->nmgp_dados_select['cidade'];  
                  $this->estado = $this->nmgp_dados_select['estado'];  
                  $this->latitude = $this->nmgp_dados_select['latitude'];  
                  $this->longitude = $this->nmgp_dados_select['longitude'];  
                  $this->destaque = $this->nmgp_dados_select['destaque'];  
                  $this->pdesconto = $this->nmgp_dados_select['pdesconto'];  
                  $this->situacao = $this->nmgp_dados_select['situacao'];  
                  $this->pseg = $this->nmgp_dados_select['pseg'];  
                  $this->pter = $this->nmgp_dados_select['pter'];  
                  $this->pqua = $this->nmgp_dados_select['pqua'];  
                  $this->pqui = $this->nmgp_dados_select['pqui'];  
                  $this->psex = $this->nmgp_dados_select['psex'];  
                  $this->psab = $this->nmgp_dados_select['psab'];  
                  $this->pdom = $this->nmgp_dados_select['pdom'];  
                  $this->abreviatura = $this->nmgp_dados_select['abreviatura'];  
              }
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      if (!isset($this->nmgp_refresh_fields)) 
      { 
          $this->nm_proc_onload();
      }
  }
//
function act_cep($cep)
{
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'on';
         
$resultado = @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.urlencode($this->cep).'&formato=query_string');

   if(!$resultado){
      $resultado = "&resultado=0&resultado_txt=erro+ao+buscar+cep";
   }
   parse_str($this->act_retiraAcento($resultado), $retorno); 
   return $retorno;



$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off';
}
function act_retiraAcento($textostring)
{
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'on';
         
return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),
					explode(" ","a A e E i I o O u U n N c C"),$textostring);

$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off';
}
function cep_onChange()
{
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'on';
         
$original_cep = $this->cep;
$original_cidade = $this->cidade;
$original_estado = $this->estado;
$original_rua = $this->rua;
$original_bairro = $this->bairro;




$modificado_cep = $this->cep;
$modificado_cidade = $this->cidade;
$modificado_estado = $this->estado;
$modificado_rua = $this->rua;
$modificado_bairro = $this->bairro;
$this->nm_formatar_campos('cep', 'cidade', 'estado', 'rua', 'bairro');
if ($original_cep !== $modificado_cep || isset($this->nmgp_cmp_readonly['cep']) || (isset($bFlagRead_cep) && $bFlagRead_cep))
{
    $this->ajax_return_values_cep(true);
}
if ($original_cidade !== $modificado_cidade || isset($this->nmgp_cmp_readonly['cidade']) || (isset($bFlagRead_cidade) && $bFlagRead_cidade))
{
    $this->ajax_return_values_cidade(true);
}
if ($original_estado !== $modificado_estado || isset($this->nmgp_cmp_readonly['estado']) || (isset($bFlagRead_estado) && $bFlagRead_estado))
{
    $this->ajax_return_values_estado(true);
}
if ($original_rua !== $modificado_rua || isset($this->nmgp_cmp_readonly['rua']) || (isset($bFlagRead_rua) && $bFlagRead_rua))
{
    $this->ajax_return_values_rua(true);
}
if ($original_bairro !== $modificado_bairro || isset($this->nmgp_cmp_readonly['bairro']) || (isset($bFlagRead_bairro) && $bFlagRead_bairro))
{
    $this->ajax_return_values_bairro(true);
}
form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off';
}
function permissao()
{
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_usr_cnpj)) {$this->sc_temp_usr_cnpj = (isset($_SESSION['usr_cnpj'])) ? $_SESSION['usr_cnpj'] : "";}
         

$check_sql = "SELECT cnpj FROM ap_contrato WHERE cnpj = '". $this->sc_temp_usr_cnpj ."'";
	
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;

			if (isset($this->rs[0][0]))     
			{
				return true;
			}
			else     
			{
				return false;
			}
if (isset($this->sc_temp_usr_cnpj)) { $_SESSION['usr_cnpj'] = $this->sc_temp_usr_cnpj;}
$_SESSION['scriptcase']['form_ap_contrato_publicador_cliente_mob']['contr_erro'] = 'off';
}
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
//-- 
   if ($this->nmgp_opcao == "novo")
   { 
       $out_foto_publicacao = "";  
   } 
   else 
   { 
       $out_foto_publicacao = $this->foto_publicacao;  
   } 
   if ($this->foto_publicacao != "" && $this->foto_publicacao != "none")   
   { 
       $path_foto_publicacao = $this->Ini->root . $this->Ini->path_imagens . "" . $_SESSION['pastacliente'] . "/" . $this->foto_publicacao;
       $md5_foto_publicacao  = md5("" . $_SESSION['pastacliente'] . $this->foto_publicacao);
       if (is_file($path_foto_publicacao))  
       { 
           $NM_ler_img = true;
           $out_foto_publicacao = $this->Ini->path_imag_temp . "/sc_foto_publicacao_" . $md5_foto_publicacao . ".gif" ;  
           if (is_file($this->Ini->root . $out_foto_publicacao))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_foto_publicacao) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_foto_publicacao = fopen($path_foto_publicacao, "r") ; 
               $reg_foto_publicacao = fread($tmp_foto_publicacao, filesize($path_foto_publicacao)) ; 
               fclose($tmp_foto_publicacao) ;  
               $arq_foto_publicacao = fopen($this->Ini->root . $out_foto_publicacao, "w") ;  
               fwrite($arq_foto_publicacao, $reg_foto_publicacao) ;  
               fclose($arq_foto_publicacao) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_foto_publicacao);
           $this->nmgp_return_img['foto_publicacao'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['foto_publicacao'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $out1_foto_publicacao = $out_foto_publicacao; 
           $md5_foto_publicacao  = md5("" . $_SESSION['pastacliente'] . $this->foto_publicacao);
           $out_foto_publicacao = $this->Ini->path_imag_temp . "/sc_foto_publicacao_350350" . $md5_foto_publicacao . ".gif" ;  
           if (is_file($this->Ini->root . $out_foto_publicacao))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_foto_publicacao) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_foto_publicacao);
                   $sc_obj_img->setWidth(350);
                   $sc_obj_img->setHeight(350);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_foto_publicacao);
               } 
               else 
               { 
                   $out_foto_publicacao = $out1_foto_publicacao;
               } 
           } 
       } 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_foto_publicacao;
       if (isset($temp_out_foto_publicacao))
       {
           $out_foto_publicacao = $temp_out_foto_publicacao;
       }
       global $temp_out1_foto_publicacao;
       if (isset($temp_out1_foto_publicacao))
       {
           $out1_foto_publicacao = $temp_out1_foto_publicacao;
       }
   }
        include_once("form_ap_contrato_publicador_cliente_mob_form0.php");
        include_once("form_ap_contrato_publicador_cliente_mob_form1.php");
 }

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

        function addUrlParam($url, $param, $value) {
                $urlParts  = explode('?', $url);
                $urlParams = isset($urlParts[1]) ? explode('&', $urlParts[1]) : array();
                $objParams = array();
                foreach ($urlParams as $paramInfo) {
                        $paramParts = explode('=', $paramInfo);
                        $objParams[ $paramParts[0] ] = isset($paramParts[1]) ? $paramParts[1] : '';
                }
                $objParams[$param] = $value;
                $urlParams = array();
                foreach ($objParams as $paramName => $paramValue) {
                        $urlParams[] = $paramName . '=' . $paramValue;
                }
                return $urlParts[0] . '?' . implode('&', $urlParams);
        }
 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

 function new_date_format($type, $field)
 {
     $new_date_format = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format .= $time_sep;
         }
         else
         {
             $new_date_format .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format;
     if ('DH' == $type)
     {
         $new_date_format                                      = explode(';', $new_date_format);
         $this->field_config[$field]['date_format_js']        = $new_date_format[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function Form_lookup_fk_contrato()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato'] = array(); 
    }

   $old_value_data_criacao = $this->data_criacao;
   $old_value_cep = $this->cep;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_criacao = $this->data_criacao;
   $unformatted_value_cep = $this->cep;

   $nm_comando = "SELECT pk_contrato, razao  FROM ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "' ORDER BY razao";

   $this->data_criacao = $old_value_data_criacao;
   $this->cep = $old_value_cep;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_fk_contrato'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_situacao()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "Ativo?#?0?#?S?@?";
       $nmgp_def_dados .= "Inativo?#?1?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_pseg()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "0%?#?0?#?N?@?";
       $nmgp_def_dados .= "1%?#?1?#?N?@?";
       $nmgp_def_dados .= "2%?#?2?#?N?@?";
       $nmgp_def_dados .= "3%?#?3?#?N?@?";
       $nmgp_def_dados .= "4%?#?4?#?N?@?";
       $nmgp_def_dados .= "5%?#?5?#?N?@?";
       $nmgp_def_dados .= "6%?#?6?#?N?@?";
       $nmgp_def_dados .= "7%?#?7?#?N?@?";
       $nmgp_def_dados .= "8%?#?8?#?N?@?";
       $nmgp_def_dados .= "9%?#?9?#?N?@?";
       $nmgp_def_dados .= "10%?#?10?#?N?@?";
       $nmgp_def_dados .= "15%?#?15?#?N?@?";
       $nmgp_def_dados .= "20%?#?20?#?N?@?";
       $nmgp_def_dados .= "25%?#?25?#?N?@?";
       $nmgp_def_dados .= "30%?#?30?#?N?@?";
       $nmgp_def_dados .= "35%?#?35?#?N?@?";
       $nmgp_def_dados .= "40%?#?40?#?N?@?";
       $nmgp_def_dados .= "45%?#?45?#?N?@?";
       $nmgp_def_dados .= "50%?#?50?#?N?@?";
       $nmgp_def_dados .= "55%?#?55?#?N?@?";
       $nmgp_def_dados .= "60%?#?60?#?N?@?";
       $nmgp_def_dados .= "65%?#?65?#?N?@?";
       $nmgp_def_dados .= "70%?#?70?#?N?@?";
       $nmgp_def_dados .= "75%?#?75?#?N?@?";
       $nmgp_def_dados .= "80%?#?80?#?N?@?";
       $nmgp_def_dados .= "85%?#?85?#?N?@?";
       $nmgp_def_dados .= "90%?#?90?#?N?@?";
       $nmgp_def_dados .= "95%?#?95?#?N?@?";
       $nmgp_def_dados .= "100%?#?100?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_pter()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "0%?#?0?#??@?";
       $nmgp_def_dados .= "1%?#?1?#??@?";
       $nmgp_def_dados .= "2%?#?2?#??@?";
       $nmgp_def_dados .= "3%?#?3?#??@?";
       $nmgp_def_dados .= "4%?#?4?#??@?";
       $nmgp_def_dados .= "5%?#?5?#??@?";
       $nmgp_def_dados .= "6%?#?6?#??@?";
       $nmgp_def_dados .= "7%?#?7?#??@?";
       $nmgp_def_dados .= "8%?#?8?#??@?";
       $nmgp_def_dados .= "9%?#?9?#??@?";
       $nmgp_def_dados .= "10%?#?10?#??@?";
       $nmgp_def_dados .= "15%?#?15?#??@?";
       $nmgp_def_dados .= "20%?#?20?#??@?";
       $nmgp_def_dados .= "25%?#?25?#??@?";
       $nmgp_def_dados .= "30%?#?30?#??@?";
       $nmgp_def_dados .= "35%?#?35?#??@?";
       $nmgp_def_dados .= "40%?#?40?#??@?";
       $nmgp_def_dados .= "45%?#?45?#??@?";
       $nmgp_def_dados .= "50%?#?50?#??@?";
       $nmgp_def_dados .= "55%?#?55?#??@?";
       $nmgp_def_dados .= "60%?#?60?#??@?";
       $nmgp_def_dados .= "65%?#?65?#??@?";
       $nmgp_def_dados .= "70%?#?70?#??@?";
       $nmgp_def_dados .= "75%?#?75?#??@?";
       $nmgp_def_dados .= "80%?#?80?#??@?";
       $nmgp_def_dados .= "85%?#?85?#??@?";
       $nmgp_def_dados .= "90%?#?90?#??@?";
       $nmgp_def_dados .= "95%?#?95?#??@?";
       $nmgp_def_dados .= "100%?#?100?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_pqua()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "0%?#?0?#??@?";
       $nmgp_def_dados .= "1%?#?1?#??@?";
       $nmgp_def_dados .= "2%?#?2?#??@?";
       $nmgp_def_dados .= "3%?#?3?#??@?";
       $nmgp_def_dados .= "4%?#?4?#??@?";
       $nmgp_def_dados .= "5%?#?5?#??@?";
       $nmgp_def_dados .= "6%?#?6?#??@?";
       $nmgp_def_dados .= "7%?#?7?#??@?";
       $nmgp_def_dados .= "8%?#?8?#??@?";
       $nmgp_def_dados .= "9%?#?9?#??@?";
       $nmgp_def_dados .= "10%?#?10?#??@?";
       $nmgp_def_dados .= "15%?#?15?#??@?";
       $nmgp_def_dados .= "20%?#?20?#??@?";
       $nmgp_def_dados .= "25%?#?25?#??@?";
       $nmgp_def_dados .= "30%?#?30?#??@?";
       $nmgp_def_dados .= "35%?#?35?#??@?";
       $nmgp_def_dados .= "40%?#?40?#??@?";
       $nmgp_def_dados .= "45%?#?45?#??@?";
       $nmgp_def_dados .= "50%?#?50?#??@?";
       $nmgp_def_dados .= "55%?#?55?#??@?";
       $nmgp_def_dados .= "60%?#?60?#??@?";
       $nmgp_def_dados .= "65%?#?65?#??@?";
       $nmgp_def_dados .= "70%?#?70?#??@?";
       $nmgp_def_dados .= "75%?#?75?#??@?";
       $nmgp_def_dados .= "80%?#?80?#??@?";
       $nmgp_def_dados .= "85%?#?85?#??@?";
       $nmgp_def_dados .= "90%?#?90?#??@?";
       $nmgp_def_dados .= "95%?#?95?#??@?";
       $nmgp_def_dados .= "100%?#?100?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_pqui()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "0%?#?0?#??@?";
       $nmgp_def_dados .= "1%?#?1?#??@?";
       $nmgp_def_dados .= "2%?#?2?#??@?";
       $nmgp_def_dados .= "3%?#?3?#??@?";
       $nmgp_def_dados .= "4%?#?4?#??@?";
       $nmgp_def_dados .= "5%?#?5?#??@?";
       $nmgp_def_dados .= "6%?#?6?#??@?";
       $nmgp_def_dados .= "7%?#?7?#??@?";
       $nmgp_def_dados .= "8%?#?8?#??@?";
       $nmgp_def_dados .= "9%?#?9?#??@?";
       $nmgp_def_dados .= "10%?#?10?#??@?";
       $nmgp_def_dados .= "15%?#?15?#??@?";
       $nmgp_def_dados .= "20%?#?20?#??@?";
       $nmgp_def_dados .= "25%?#?25?#??@?";
       $nmgp_def_dados .= "30%?#?30?#??@?";
       $nmgp_def_dados .= "35%?#?35?#??@?";
       $nmgp_def_dados .= "40%?#?40?#??@?";
       $nmgp_def_dados .= "45%?#?45?#??@?";
       $nmgp_def_dados .= "50%?#?50?#??@?";
       $nmgp_def_dados .= "55%?#?55?#??@?";
       $nmgp_def_dados .= "60%?#?60?#??@?";
       $nmgp_def_dados .= "65%?#?65?#??@?";
       $nmgp_def_dados .= "70%?#?70?#??@?";
       $nmgp_def_dados .= "75%?#?75?#??@?";
       $nmgp_def_dados .= "80%?#?80?#??@?";
       $nmgp_def_dados .= "85%?#?85?#??@?";
       $nmgp_def_dados .= "90%?#?90?#??@?";
       $nmgp_def_dados .= "95%?#?95?#??@?";
       $nmgp_def_dados .= "100%?#?100?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_psex()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "0%?#?0?#??@?";
       $nmgp_def_dados .= "1%?#?1?#??@?";
       $nmgp_def_dados .= "2%?#?2?#??@?";
       $nmgp_def_dados .= "3%?#?3?#??@?";
       $nmgp_def_dados .= "4%?#?4?#??@?";
       $nmgp_def_dados .= "5%?#?5?#??@?";
       $nmgp_def_dados .= "6%?#?6?#??@?";
       $nmgp_def_dados .= "7%?#?7?#??@?";
       $nmgp_def_dados .= "8%?#?8?#??@?";
       $nmgp_def_dados .= "9%?#?9?#??@?";
       $nmgp_def_dados .= "10%?#?10?#??@?";
       $nmgp_def_dados .= "15%?#?15?#??@?";
       $nmgp_def_dados .= "20%?#?20?#??@?";
       $nmgp_def_dados .= "25%?#?25?#??@?";
       $nmgp_def_dados .= "30%?#?30?#??@?";
       $nmgp_def_dados .= "35%?#?35?#??@?";
       $nmgp_def_dados .= "40%?#?40?#??@?";
       $nmgp_def_dados .= "45%?#?45?#??@?";
       $nmgp_def_dados .= "50%?#?50?#??@?";
       $nmgp_def_dados .= "55%?#?55?#??@?";
       $nmgp_def_dados .= "60%?#?60?#??@?";
       $nmgp_def_dados .= "65%?#?65?#??@?";
       $nmgp_def_dados .= "70%?#?70?#??@?";
       $nmgp_def_dados .= "75%?#?75?#??@?";
       $nmgp_def_dados .= "80%?#?80?#??@?";
       $nmgp_def_dados .= "85%?#?85?#??@?";
       $nmgp_def_dados .= "90%?#?90?#??@?";
       $nmgp_def_dados .= "95%?#?95?#??@?";
       $nmgp_def_dados .= "100%?#?100?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_psab()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "0%?#?0?#??@?";
       $nmgp_def_dados .= "1%?#?1?#??@?";
       $nmgp_def_dados .= "2%?#?2?#??@?";
       $nmgp_def_dados .= "3%?#?3?#??@?";
       $nmgp_def_dados .= "4%?#?4?#??@?";
       $nmgp_def_dados .= "5%?#?5?#??@?";
       $nmgp_def_dados .= "6%?#?6?#??@?";
       $nmgp_def_dados .= "7%?#?7?#??@?";
       $nmgp_def_dados .= "8%?#?8?#??@?";
       $nmgp_def_dados .= "9%?#?9?#??@?";
       $nmgp_def_dados .= "10%?#?10?#??@?";
       $nmgp_def_dados .= "15%?#?15?#??@?";
       $nmgp_def_dados .= "20%?#?20?#??@?";
       $nmgp_def_dados .= "25%?#?25?#??@?";
       $nmgp_def_dados .= "30%?#?30?#??@?";
       $nmgp_def_dados .= "35%?#?35?#??@?";
       $nmgp_def_dados .= "40%?#?40?#??@?";
       $nmgp_def_dados .= "45%?#?45?#??@?";
       $nmgp_def_dados .= "50%?#?50?#??@?";
       $nmgp_def_dados .= "55%?#?55?#??@?";
       $nmgp_def_dados .= "60%?#?60?#??@?";
       $nmgp_def_dados .= "65%?#?65?#??@?";
       $nmgp_def_dados .= "70%?#?70?#??@?";
       $nmgp_def_dados .= "75%?#?75?#??@?";
       $nmgp_def_dados .= "80%?#?80?#??@?";
       $nmgp_def_dados .= "85%?#?85?#??@?";
       $nmgp_def_dados .= "90%?#?90?#??@?";
       $nmgp_def_dados .= "95%?#?95?#??@?";
       $nmgp_def_dados .= "100%?#?100?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_pdom()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "0%?#?0?#??@?";
       $nmgp_def_dados .= "1%?#?1?#??@?";
       $nmgp_def_dados .= "2%?#?2?#??@?";
       $nmgp_def_dados .= "3%?#?3?#??@?";
       $nmgp_def_dados .= "4%?#?4?#??@?";
       $nmgp_def_dados .= "5%?#?5?#??@?";
       $nmgp_def_dados .= "6%?#?6?#??@?";
       $nmgp_def_dados .= "7%?#?7?#??@?";
       $nmgp_def_dados .= "8%?#?8?#??@?";
       $nmgp_def_dados .= "9%?#?9?#??@?";
       $nmgp_def_dados .= "10%?#?10?#??@?";
       $nmgp_def_dados .= "15%?#?15?#??@?";
       $nmgp_def_dados .= "20%?#?20?#??@?";
       $nmgp_def_dados .= "25%?#?25?#??@?";
       $nmgp_def_dados .= "30%?#?30?#??@?";
       $nmgp_def_dados .= "35%?#?35?#??@?";
       $nmgp_def_dados .= "40%?#?40?#??@?";
       $nmgp_def_dados .= "45%?#?45?#??@?";
       $nmgp_def_dados .= "50%?#?50?#??@?";
       $nmgp_def_dados .= "55%?#?55?#??@?";
       $nmgp_def_dados .= "60%?#?60?#??@?";
       $nmgp_def_dados .= "65%?#?65?#??@?";
       $nmgp_def_dados .= "70%?#?70?#??@?";
       $nmgp_def_dados .= "75%?#?75?#??@?";
       $nmgp_def_dados .= "80%?#?80?#??@?";
       $nmgp_def_dados .= "85%?#?85?#??@?";
       $nmgp_def_dados .= "90%?#?90?#??@?";
       $nmgp_def_dados .= "95%?#?95?#??@?";
       $nmgp_def_dados .= "100%?#?100?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_destaque()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "Em Destaque?#?1?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function SC_fast_search($field, $arg_search, $data_search)
   {
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "pk_publicador", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_fk_contrato($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "fk_contrato", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nomenclatura", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "foto_publicacao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "texto_publicacao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "gera_dados", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cep", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "bairro", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rua", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numero", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "complemento", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cidade", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "estado", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "latitude", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "longitude", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_fk_contrato($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "fk_contrato", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_situacao($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "situacao", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nomenclatura", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cep", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "bairro", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rua", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numero", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "complemento", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cidade", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "estado", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "abreviatura", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_pseg($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "pseg", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_pter($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "pter", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_pqua($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "pqua", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_pqui($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "pqui", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_psex($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "psex", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_psab($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "psab", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_pdom($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "pdom", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_destaque($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "destaque", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "foto_publicacao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "texto_publicacao", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter_form'] . " and (fk_contrato = ( select pk_contrato from ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "')) and (" . $comando . ")";
      }
      else
      {
          $sc_where = " where fk_contrato = ( select pk_contrato from ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "') and (" . $comando . ")";
      }
      $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_ap_contrato_publicador_cliente_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total'] = $qt_geral_reg_form_ap_contrato_publicador_cliente_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $nm_esp_postgres = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "pk_publicador";$nm_numeric[] = "fk_contrato";$nm_numeric[] = "gera_dados";$nm_numeric[] = "destaque";$nm_numeric[] = "pdesconto";$nm_numeric[] = "situacao";$nm_numeric[] = "pseg";$nm_numeric[] = "pter";$nm_numeric[] = "pqua";$nm_numeric[] = "pqui";$nm_numeric[] = "psex";$nm_numeric[] = "psab";$nm_numeric[] = "pdom";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_esp_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
      $Nm_datas['data_criacao'] = "date";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
          if (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
          elseif ($Nm_datas[$campo_join] == "time" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'hh24:mi:ss')";
          }
          elseif (substr($Nm_datas[$campo_join], 0, 4) == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          {
              $nome = "str_replace (convert(char(10)," . $nome . ",102), '.', '-') + ' ' + convert(char(8)," . $nome . ",20)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(10)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(19)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "times" || $Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $nome  = "TO_DATE(TO_CHAR(" . $nome . ", 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO FRACTION)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO DAY)";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_aspas . $Cmp . $nm_aspas1;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         switch (strtoupper($condicao))
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " like '" . $campo . "%'";
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." like '%" . $campo . "%'";
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." not like '%" . $campo . "%'";
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GT":     // 
               $comando        .= " $nome > " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GE":     // 
               $comando        .= " $nome >= " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LT":     // 
               $comando        .= " $nome < " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LE":     // 
               $comando        .= " $nome <= " . $nm_aspas . $campo . $nm_aspas1;
            break;
         }
   }
   function SC_lookup_fk_contrato($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT razao, pk_contrato FROM ap_contrato WHERE (CAST (pk_contrato AS TEXT) LIKE '%$campo%') AND (cnpj = '" . $_SESSION['usr_cnpj'] . "')" ; 
       }
       else
       {
           $nm_comando = "SELECT razao, pk_contrato FROM ap_contrato WHERE (razao LIKE '%$campo%') AND (cnpj = '" . $_SESSION['usr_cnpj'] . "')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2)
   {
       $nmgp_saida_form = "form_ap_contrato_publicador_cliente_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_ap_contrato_publicador_cliente_mob_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $sTarget = '_self';
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = $sTarget;
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['sc_modal'])
   {
?>
        parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
   }
   elseif ($this->lig_edit_lookup)
   {
?>
        opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
   }
?>
      }
      if (bLigEditLookupCall)
      {
        scLigEditLookupCall();
      }
<?php
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['masterValue']);
?>
}
<?php
    }
}
?>
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
function nmgp_redireciona_form($nm_apl_dest, $nm_apl_retorno, $nm_apl_parms, $nm_target="", $opc="", $alt_modal=430, $larg_modal=630)
{
   if (isset($this->NM_is_redirected) && $this->NM_is_redirected)
   {
       return;
   }
   if (is_array($nm_apl_parms))
   {
       $tmp_parms = "";
       foreach ($nm_apl_parms as $par => $val)
       {
           $par = trim($par);
           $val = trim($val);
           $tmp_parms .= str_replace(".", "_", $par) . "?#?";
           if (substr($val, 0, 1) == "$")
           {
               $tmp_parms .= $$val;
           }
           elseif (substr($val, 0, 1) == "{")
           {
               $val        = substr($val, 1, -1);
               $tmp_parms .= $this->$val;
           }
           elseif (substr($val, 0, 1) == "[")
           {
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob'][substr($val, 1, -1)];
           }
           else
           {
               $tmp_parms .= $val;
           }
           $tmp_parms .= "?@?";
       }
       $nm_apl_parms = $tmp_parms;
   }
   if (empty($opc))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
           exit;
       }
       echo "<SCRIPT language=\"javascript\">";
       if (strtolower($nm_target) == "_blank")
       {
           echo "window.open ('" . $nm_apl_dest . "');";
           echo "</SCRIPT>";
           return;
       }
       else
       {
           echo "window.location='" . $nm_apl_dest . "';";
           echo "</SCRIPT>";
           $this->NM_close_db();
           exit;
       }
   }
   $dir = explode("/", $nm_apl_dest);
   if (count($dir) == 1)
   {
       $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
       $nm_apl_dest = $this->Ini->path_link . SC_dir_app_name($nm_apl_dest) . "/" . $nm_apl_dest . ".php";
   }
   if ($this->NM_ajax_flag)
   {
       $nm_apl_parms = str_replace("?#?", "*scin", NM_charset_to_utf8($nm_apl_parms));
       $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
       $this->NM_ajax_info['redir']['metodo']     = 'post';
       $this->NM_ajax_info['redir']['action']     = $nm_apl_dest;
       $this->NM_ajax_info['redir']['nmgp_parms'] = $nm_apl_parms;
       $this->NM_ajax_info['redir']['target']     = $nm_target_form;
       $this->NM_ajax_info['redir']['h_modal']    = $alt_modal;
       $this->NM_ajax_info['redir']['w_modal']    = $larg_modal;
       if ($nm_target_form == "_blank")
       {
           $this->NM_ajax_info['redir']['nmgp_outra_jan'] = 'true';
       }
       else
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida']      = $nm_apl_retorno;
           $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
           $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       }
       form_ap_contrato_publicador_cliente_mob_pack_ajax_response();
       exit;
   }
   if ($nm_target == "modal")
   {
       if (!empty($nm_apl_parms))
       {
           $nm_apl_parms = str_replace("?#?", "*scin", $nm_apl_parms);
           $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
           $nm_apl_parms = "nmgp_parms=" . $nm_apl_parms . "&";
       }
       $par_modal = "?script_case_init=" . $this->Ini->sc_page . "&script_case_session=" . session_id() . "&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&";
       $this->redir_modal = "$(function() { tb_show('', '" . $nm_apl_dest . $par_modal . $nm_apl_parms . "TB_iframe=true&modal=true&height=" . $alt_modal . "&width=" . $larg_modal . "', '') })";
       $this->NM_is_redirected = true;
       return;
   }
?>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
   </HEAD>
   <BODY>
<?php
   }
?>
<form name="Fredir" method="post" 
                  target="_self"> 
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
<?php
   if ($nm_target_form == "_blank")
   {
?>
  <input type="hidden" name="nmgp_outra_jan" value="true"/> 
<?php
   }
   else
   {
?>
  <input type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($nm_apl_retorno) ?>">
  <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"/> 
  <input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
<?php
   }
?>
</form> 
   <SCRIPT type="text/javascript">
<?php
   if ($nm_target_form == "modal")
   {
?>
       $(document).ready(function(){
           tb_show('', '<?php echo $nm_apl_dest ?>?script_case_init=<?php echo $this->Ini->sc_page; ?>&script_case_session=<?php echo session_id() ?> &nmgp_url_saida=modal&nmgp_parms=<?php echo $this->form_encode_input($nm_apl_parms); ?>&nmgp_outra_jan=true&TB_iframe=true&height=<?php echo $alt_modal; ?>&width=<?php echo $larg_modal; ?>&modal=true', '');
       });
<?php
   }
   else
   {
?>
    $(function() {
       document.Fredir.target = "<?php echo $nm_target_form ?>"; 
       document.Fredir.action = "<?php echo $nm_apl_dest ?>";
       document.Fredir.submit();
    });
<?php
   }
?>
   </SCRIPT>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
?>
   </BODY>
   </HTML>
<?php
   }
?>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
       $this->NM_close_db();
       exit;
   }
}
    function sc_ajax_javascript($sJsFunc, $aParam = array())
    {
        if ($this->NM_ajax_flag)
        {
            $this->NM_ajax_info['ajaxJavascript'][] = array($sJsFunc, $aParam);
        }
        else
        {
            foreach ($aParam as $i => $v)
            {
                $aParam[$i] = '"' . str_replace('"', '\"', $v) . '"';
            }
            $this->NM_non_ajax_info['ajaxJavascript'][] = array($sJsFunc, $aParam);
        }
    } // sc_ajax_javascript
}
?>
