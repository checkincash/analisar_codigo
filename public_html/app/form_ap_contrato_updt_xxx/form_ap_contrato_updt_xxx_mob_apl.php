<?php
//
class form_ap_contrato_updt_xxx_mob_apl
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
   var $pk_contrato;
   var $fk_classificacao;
   var $fk_classificacao_1;
   var $cnpj;
   var $inscricao;
   var $razao;
   var $fantasia;
   var $datacadastro;
   var $cidade;
   var $estado;
   var $bairro;
   var $rua;
   var $complemento;
   var $numero;
   var $cep;
   var $fachada;
   var $fachada_scfile_name;
   var $fachada_ul_name;
   var $fachada_scfile_type;
   var $fachada_ul_type;
   var $fachada_limpa;
   var $fachada_salva;
   var $out_fachada;
   var $out1_fachada;
   var $latitude;
   var $longitude;
   var $email;
   var $telefone;
   var $senha_usuario;
   var $nome_contato;
   var $ativo;
   var $rash;
   var $activate_code;
   var $activate_date;
   var $activate_date_hora;
   var $seg_m_de;
   var $seg_m_ate;
   var $seg_t_de;
   var $seg_t_ate;
   var $ter_m_de;
   var $ter_m_ate;
   var $ter_t_de;
   var $ter_t_ate;
   var $qua_m_de;
   var $qua_m_ate;
   var $qua_t_de;
   var $qua_t_ate;
   var $qui_m_de;
   var $qui_m_ate;
   var $qui_t_de;
   var $qui_t_ate;
   var $sex_m_de;
   var $sex_m_ate;
   var $sex_t_de;
   var $sex_t_ate;
   var $sab_m_de;
   var $sab_m_ate;
   var $sab_t_de;
   var $sab_t_ate;
   var $dom_m_de;
   var $dom_m_ate;
   var $dom_t_de;
   var $dom_t_ate;
   var $retype_email;
   var $retype_senha;
   var $txtmensagem;
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
          if (isset($this->NM_ajax_info['param']['cnpj']))
          {
              $this->cnpj = $this->NM_ajax_info['param']['cnpj'];
          }
          if (isset($this->NM_ajax_info['param']['complemento']))
          {
              $this->complemento = $this->NM_ajax_info['param']['complemento'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['datacadastro']))
          {
              $this->datacadastro = $this->NM_ajax_info['param']['datacadastro'];
          }
          if (isset($this->NM_ajax_info['param']['dom_m_ate']))
          {
              $this->dom_m_ate = $this->NM_ajax_info['param']['dom_m_ate'];
          }
          if (isset($this->NM_ajax_info['param']['dom_m_de']))
          {
              $this->dom_m_de = $this->NM_ajax_info['param']['dom_m_de'];
          }
          if (isset($this->NM_ajax_info['param']['dom_t_ate']))
          {
              $this->dom_t_ate = $this->NM_ajax_info['param']['dom_t_ate'];
          }
          if (isset($this->NM_ajax_info['param']['dom_t_de']))
          {
              $this->dom_t_de = $this->NM_ajax_info['param']['dom_t_de'];
          }
          if (isset($this->NM_ajax_info['param']['email']))
          {
              $this->email = $this->NM_ajax_info['param']['email'];
          }
          if (isset($this->NM_ajax_info['param']['estado']))
          {
              $this->estado = $this->NM_ajax_info['param']['estado'];
          }
          if (isset($this->NM_ajax_info['param']['fachada']))
          {
              $this->fachada = $this->NM_ajax_info['param']['fachada'];
          }
          if (isset($this->NM_ajax_info['param']['fachada_limpa']))
          {
              $this->fachada_limpa = $this->NM_ajax_info['param']['fachada_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['fachada_salva']))
          {
              $this->fachada_salva = $this->NM_ajax_info['param']['fachada_salva'];
          }
          if (isset($this->NM_ajax_info['param']['fachada_ul_name']))
          {
              $this->fachada_ul_name = $this->NM_ajax_info['param']['fachada_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['fachada_ul_type']))
          {
              $this->fachada_ul_type = $this->NM_ajax_info['param']['fachada_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['fantasia']))
          {
              $this->fantasia = $this->NM_ajax_info['param']['fantasia'];
          }
          if (isset($this->NM_ajax_info['param']['fk_classificacao']))
          {
              $this->fk_classificacao = $this->NM_ajax_info['param']['fk_classificacao'];
          }
          if (isset($this->NM_ajax_info['param']['inscricao']))
          {
              $this->inscricao = $this->NM_ajax_info['param']['inscricao'];
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
          if (isset($this->NM_ajax_info['param']['nome_contato']))
          {
              $this->nome_contato = $this->NM_ajax_info['param']['nome_contato'];
          }
          if (isset($this->NM_ajax_info['param']['numero']))
          {
              $this->numero = $this->NM_ajax_info['param']['numero'];
          }
          if (isset($this->NM_ajax_info['param']['pk_contrato']))
          {
              $this->pk_contrato = $this->NM_ajax_info['param']['pk_contrato'];
          }
          if (isset($this->NM_ajax_info['param']['qua_m_ate']))
          {
              $this->qua_m_ate = $this->NM_ajax_info['param']['qua_m_ate'];
          }
          if (isset($this->NM_ajax_info['param']['qua_m_de']))
          {
              $this->qua_m_de = $this->NM_ajax_info['param']['qua_m_de'];
          }
          if (isset($this->NM_ajax_info['param']['qua_t_ate']))
          {
              $this->qua_t_ate = $this->NM_ajax_info['param']['qua_t_ate'];
          }
          if (isset($this->NM_ajax_info['param']['qua_t_de']))
          {
              $this->qua_t_de = $this->NM_ajax_info['param']['qua_t_de'];
          }
          if (isset($this->NM_ajax_info['param']['qui_m_ate']))
          {
              $this->qui_m_ate = $this->NM_ajax_info['param']['qui_m_ate'];
          }
          if (isset($this->NM_ajax_info['param']['qui_m_de']))
          {
              $this->qui_m_de = $this->NM_ajax_info['param']['qui_m_de'];
          }
          if (isset($this->NM_ajax_info['param']['qui_t_ate']))
          {
              $this->qui_t_ate = $this->NM_ajax_info['param']['qui_t_ate'];
          }
          if (isset($this->NM_ajax_info['param']['qui_t_de']))
          {
              $this->qui_t_de = $this->NM_ajax_info['param']['qui_t_de'];
          }
          if (isset($this->NM_ajax_info['param']['razao']))
          {
              $this->razao = $this->NM_ajax_info['param']['razao'];
          }
          if (isset($this->NM_ajax_info['param']['retype_email']))
          {
              $this->retype_email = $this->NM_ajax_info['param']['retype_email'];
          }
          if (isset($this->NM_ajax_info['param']['rua']))
          {
              $this->rua = $this->NM_ajax_info['param']['rua'];
          }
          if (isset($this->NM_ajax_info['param']['sab_m_ate']))
          {
              $this->sab_m_ate = $this->NM_ajax_info['param']['sab_m_ate'];
          }
          if (isset($this->NM_ajax_info['param']['sab_m_de']))
          {
              $this->sab_m_de = $this->NM_ajax_info['param']['sab_m_de'];
          }
          if (isset($this->NM_ajax_info['param']['sab_t_ate']))
          {
              $this->sab_t_ate = $this->NM_ajax_info['param']['sab_t_ate'];
          }
          if (isset($this->NM_ajax_info['param']['sab_t_de']))
          {
              $this->sab_t_de = $this->NM_ajax_info['param']['sab_t_de'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['seg_m_ate']))
          {
              $this->seg_m_ate = $this->NM_ajax_info['param']['seg_m_ate'];
          }
          if (isset($this->NM_ajax_info['param']['seg_m_de']))
          {
              $this->seg_m_de = $this->NM_ajax_info['param']['seg_m_de'];
          }
          if (isset($this->NM_ajax_info['param']['seg_t_ate']))
          {
              $this->seg_t_ate = $this->NM_ajax_info['param']['seg_t_ate'];
          }
          if (isset($this->NM_ajax_info['param']['seg_t_de']))
          {
              $this->seg_t_de = $this->NM_ajax_info['param']['seg_t_de'];
          }
          if (isset($this->NM_ajax_info['param']['sex_m_ate']))
          {
              $this->sex_m_ate = $this->NM_ajax_info['param']['sex_m_ate'];
          }
          if (isset($this->NM_ajax_info['param']['sex_m_de']))
          {
              $this->sex_m_de = $this->NM_ajax_info['param']['sex_m_de'];
          }
          if (isset($this->NM_ajax_info['param']['sex_t_ate']))
          {
              $this->sex_t_ate = $this->NM_ajax_info['param']['sex_t_ate'];
          }
          if (isset($this->NM_ajax_info['param']['sex_t_de']))
          {
              $this->sex_t_de = $this->NM_ajax_info['param']['sex_t_de'];
          }
          if (isset($this->NM_ajax_info['param']['telefone']))
          {
              $this->telefone = $this->NM_ajax_info['param']['telefone'];
          }
          if (isset($this->NM_ajax_info['param']['ter_m_ate']))
          {
              $this->ter_m_ate = $this->NM_ajax_info['param']['ter_m_ate'];
          }
          if (isset($this->NM_ajax_info['param']['ter_m_de']))
          {
              $this->ter_m_de = $this->NM_ajax_info['param']['ter_m_de'];
          }
          if (isset($this->NM_ajax_info['param']['ter_t_ate']))
          {
              $this->ter_t_ate = $this->NM_ajax_info['param']['ter_t_ate'];
          }
          if (isset($this->NM_ajax_info['param']['ter_t_de']))
          {
              $this->ter_t_de = $this->NM_ajax_info['param']['ter_t_de'];
          }
          if (isset($this->NM_ajax_info['param']['txtmensagem']))
          {
              $this->txtmensagem = $this->NM_ajax_info['param']['txtmensagem'];
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
      if (isset($this->pastacliente) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['pastacliente'] = $this->pastacliente;
      }
      if (isset($_POST["pastacliente"]) && isset($this->pastacliente)) 
      {
          $_SESSION['pastacliente'] = $this->pastacliente;
      }
      if (isset($_GET["pastacliente"]) && isset($this->pastacliente)) 
      {
          $_SESSION['pastacliente'] = $this->pastacliente;
      }
      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['nm_run_menu'] = 1;
      } 
      if (isset($_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['embutida_parms']);
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
                 nm_limpa_str_form_ap_contrato_updt_xxx_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->pastacliente)) 
          {
              $_SESSION['pastacliente'] = $this->pastacliente;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->pastacliente)) 
          {
              $_SESSION['pastacliente'] = $this->pastacliente;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_ap_contrato_updt_xxx_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("pt_br");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['initialize'];
          $this->Db = $this->Ini->Db; 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['initialize']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['initialize'])
          {
              $_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'on';
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

$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off';
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob'][$I_conf]  = $Conf_opt;
              }
          }
          }
          $this->Ini->init2();
      } 
      else 
      { 
         $this->nm_data = new nm_data("pt_br");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_ap_contrato_updt_xxx_mob']['upload_field_info']['fachada'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_ap_contrato_updt_xxx_mob',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/\.(jpg|png)$/i',
          'upload_file_height' => '250',
          'upload_file_width'  => '250',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_ap_contrato_updt_xxx_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_ap_contrato_updt_xxx_mob'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_ap_contrato_updt_xxx_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_ap_contrato_updt_xxx_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_ap_contrato_updt_xxx_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_ap_contrato_updt_xxx_mob']['label'] = "CHECK-IN CASH | REGISTRO DE CONTRATO";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_ap_contrato_updt_xxx_mob")
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


      $_SESSION['scriptcase']['error_icon']['form_ap_contrato_updt_xxx_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_ap_contrato_updt_xxx_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      if (isset($this->NM_ajax_info['param']['fachada_ul_name']) && '' != $this->NM_ajax_info['param']['fachada_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['upload_field_ul_name'][$this->fachada_ul_name]))
          {
              $this->NM_ajax_info['param']['fachada_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['upload_field_ul_name'][$this->fachada_ul_name];
          }
          $this->fachada = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['fachada_ul_name'];
          $this->fachada_scfile_name = substr($this->NM_ajax_info['param']['fachada_ul_name'], 12);
          $this->fachada_scfile_type = $this->NM_ajax_info['param']['fachada_ul_type'];
          $this->fachada_ul_name = $this->NM_ajax_info['param']['fachada_ul_name'];
          $this->fachada_ul_type = $this->NM_ajax_info['param']['fachada_ul_type'];
      }
      elseif (isset($this->fachada_ul_name) && '' != $this->fachada_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['upload_field_ul_name'][$this->fachada_ul_name]))
          {
              $this->fachada_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['upload_field_ul_name'][$this->fachada_ul_name];
          }
          $this->fachada = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fachada_ul_name;
          $this->fachada_scfile_name = substr($this->fachada_ul_name, 12);
          $this->fachada_scfile_type = $this->fachada_ul_type;
      }

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['goto']      = 'on';
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_ap_contrato_updt_xxx_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_ap_contrato_updt_xxx_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_ap_contrato_updt_xxx_mob'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['exit'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_form'];
          if (!isset($this->pk_contrato)){$this->pk_contrato = $this->nmgp_dados_form['pk_contrato'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fk_classificacao'] != "null"){$this->fk_classificacao = $this->nmgp_dados_form['fk_classificacao'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['cnpj'] != "null"){$this->cnpj = $this->nmgp_dados_form['cnpj'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['datacadastro'] != "null"){$this->datacadastro = $this->nmgp_dados_form['datacadastro'];} 
          if (!isset($this->latitude)){$this->latitude = $this->nmgp_dados_form['latitude'];} 
          if (!isset($this->longitude)){$this->longitude = $this->nmgp_dados_form['longitude'];} 
          if (!isset($this->senha_usuario)){$this->senha_usuario = $this->nmgp_dados_form['senha_usuario'];} 
          if (!isset($this->ativo)){$this->ativo = $this->nmgp_dados_form['ativo'];} 
          if (!isset($this->rash)){$this->rash = $this->nmgp_dados_form['rash'];} 
          if (!isset($this->activate_code)){$this->activate_code = $this->nmgp_dados_form['activate_code'];} 
          if (!isset($this->activate_date)){$this->activate_date = $this->nmgp_dados_form['activate_date'];} 
          if (!isset($this->retype_senha)){$this->retype_senha = $this->nmgp_dados_form['retype_senha'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_ap_contrato_updt_xxx_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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
              include_once($this->Ini->path_embutida . 'form_ap_contrato_updt_xxx/form_ap_contrato_updt_xxx_mob_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_ap_contrato_updt_xxx_mob_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_ap_contrato_updt_xxx_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_ap_contrato_updt_xxx_mob_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_ap_contrato_updt_xxx/form_ap_contrato_updt_xxx_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_ap_contrato_updt_xxx_mob_erro.class.php"); 
      }
      $this->Erro      = new form_ap_contrato_updt_xxx_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opcao']))
         { 
             if ($this->pk_contrato != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_ap_contrato_updt_xxx_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
      $this->sc_insert_on = false;
      if (isset($this->fk_classificacao)) { $this->nm_limpa_alfa($this->fk_classificacao); }
      if (isset($this->cnpj)) { $this->nm_limpa_alfa($this->cnpj); }
      if (isset($this->inscricao)) { $this->nm_limpa_alfa($this->inscricao); }
      if (isset($this->razao)) { $this->nm_limpa_alfa($this->razao); }
      if (isset($this->fantasia)) { $this->nm_limpa_alfa($this->fantasia); }
      if (isset($this->cidade)) { $this->nm_limpa_alfa($this->cidade); }
      if (isset($this->estado)) { $this->nm_limpa_alfa($this->estado); }
      if (isset($this->bairro)) { $this->nm_limpa_alfa($this->bairro); }
      if (isset($this->rua)) { $this->nm_limpa_alfa($this->rua); }
      if (isset($this->complemento)) { $this->nm_limpa_alfa($this->complemento); }
      if (isset($this->numero)) { $this->nm_limpa_alfa($this->numero); }
      if (isset($this->cep)) { $this->nm_limpa_alfa($this->cep); }
      if (isset($this->email)) { $this->nm_limpa_alfa($this->email); }
      if (isset($this->telefone)) { $this->nm_limpa_alfa($this->telefone); }
      if (isset($this->nome_contato)) { $this->nm_limpa_alfa($this->nome_contato); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- datacadastro
      $this->field_config['datacadastro']                 = array();
      $this->field_config['datacadastro']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['datacadastro']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['datacadastro']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'datacadastro');
      //-- seg_m_de
      $this->field_config['seg_m_de']                 = array();
      $this->field_config['seg_m_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['seg_m_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['seg_m_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'seg_m_de');
      //-- seg_m_ate
      $this->field_config['seg_m_ate']                 = array();
      $this->field_config['seg_m_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['seg_m_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['seg_m_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'seg_m_ate');
      //-- seg_t_de
      $this->field_config['seg_t_de']                 = array();
      $this->field_config['seg_t_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['seg_t_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['seg_t_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'seg_t_de');
      //-- seg_t_ate
      $this->field_config['seg_t_ate']                 = array();
      $this->field_config['seg_t_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['seg_t_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['seg_t_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'seg_t_ate');
      //-- ter_m_de
      $this->field_config['ter_m_de']                 = array();
      $this->field_config['ter_m_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['ter_m_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['ter_m_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'ter_m_de');
      //-- ter_m_ate
      $this->field_config['ter_m_ate']                 = array();
      $this->field_config['ter_m_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['ter_m_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['ter_m_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'ter_m_ate');
      //-- ter_t_de
      $this->field_config['ter_t_de']                 = array();
      $this->field_config['ter_t_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['ter_t_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['ter_t_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'ter_t_de');
      //-- ter_t_ate
      $this->field_config['ter_t_ate']                 = array();
      $this->field_config['ter_t_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['ter_t_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['ter_t_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'ter_t_ate');
      //-- qua_m_de
      $this->field_config['qua_m_de']                 = array();
      $this->field_config['qua_m_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['qua_m_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['qua_m_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'qua_m_de');
      //-- qua_m_ate
      $this->field_config['qua_m_ate']                 = array();
      $this->field_config['qua_m_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['qua_m_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['qua_m_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'qua_m_ate');
      //-- qua_t_de
      $this->field_config['qua_t_de']                 = array();
      $this->field_config['qua_t_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['qua_t_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['qua_t_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'qua_t_de');
      //-- qua_t_ate
      $this->field_config['qua_t_ate']                 = array();
      $this->field_config['qua_t_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['qua_t_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['qua_t_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'qua_t_ate');
      //-- qui_m_de
      $this->field_config['qui_m_de']                 = array();
      $this->field_config['qui_m_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['qui_m_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['qui_m_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'qui_m_de');
      //-- qui_m_ate
      $this->field_config['qui_m_ate']                 = array();
      $this->field_config['qui_m_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['qui_m_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['qui_m_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'qui_m_ate');
      //-- qui_t_de
      $this->field_config['qui_t_de']                 = array();
      $this->field_config['qui_t_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['qui_t_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['qui_t_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'qui_t_de');
      //-- qui_t_ate
      $this->field_config['qui_t_ate']                 = array();
      $this->field_config['qui_t_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['qui_t_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['qui_t_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'qui_t_ate');
      //-- sex_m_de
      $this->field_config['sex_m_de']                 = array();
      $this->field_config['sex_m_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['sex_m_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['sex_m_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'sex_m_de');
      //-- sex_m_ate
      $this->field_config['sex_m_ate']                 = array();
      $this->field_config['sex_m_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['sex_m_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['sex_m_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'sex_m_ate');
      //-- sex_t_de
      $this->field_config['sex_t_de']                 = array();
      $this->field_config['sex_t_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['sex_t_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['sex_t_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'sex_t_de');
      //-- sex_t_ate
      $this->field_config['sex_t_ate']                 = array();
      $this->field_config['sex_t_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['sex_t_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['sex_t_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'sex_t_ate');
      //-- sab_m_de
      $this->field_config['sab_m_de']                 = array();
      $this->field_config['sab_m_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['sab_m_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['sab_m_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'sab_m_de');
      //-- sab_m_ate
      $this->field_config['sab_m_ate']                 = array();
      $this->field_config['sab_m_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['sab_m_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['sab_m_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'sab_m_ate');
      //-- sab_t_de
      $this->field_config['sab_t_de']                 = array();
      $this->field_config['sab_t_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['sab_t_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['sab_t_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'sab_t_de');
      //-- sab_t_ate
      $this->field_config['sab_t_ate']                 = array();
      $this->field_config['sab_t_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['sab_t_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['sab_t_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'sab_t_ate');
      //-- dom_m_de
      $this->field_config['dom_m_de']                 = array();
      $this->field_config['dom_m_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['dom_m_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['dom_m_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'dom_m_de');
      //-- dom_m_ate
      $this->field_config['dom_m_ate']                 = array();
      $this->field_config['dom_m_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['dom_m_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['dom_m_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'dom_m_ate');
      //-- dom_t_de
      $this->field_config['dom_t_de']                 = array();
      $this->field_config['dom_t_de']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['dom_t_de']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['dom_t_de']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'dom_t_de');
      //-- dom_t_ate
      $this->field_config['dom_t_ate']                 = array();
      $this->field_config['dom_t_ate']['date_format']  = $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['dom_t_ate']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['dom_t_ate']['date_display'] = "hhiiss";
      $this->new_date_format('HH', 'dom_t_ate');
      //-- pk_contrato
      $this->field_config['pk_contrato']               = array();
      $this->field_config['pk_contrato']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['pk_contrato']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pk_contrato']['symbol_dec'] = '';
      $this->field_config['pk_contrato']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['pk_contrato']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- ativo
      $this->field_config['ativo']               = array();
      $this->field_config['ativo']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['ativo']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['ativo']['symbol_dec'] = '';
      $this->field_config['ativo']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['ativo']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- activate_date
      $this->field_config['activate_date']                 = array();
      $this->field_config['activate_date']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['activate_date']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['activate_date']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['activate_date']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'activate_date');
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
         $this->txtmensagem = "&nbsp;";
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_datacadastro' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'datacadastro');
          }
          if ('validate_cnpj' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cnpj');
          }
          if ('validate_inscricao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'inscricao');
          }
          if ('validate_fk_classificacao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fk_classificacao');
          }
          if ('validate_razao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'razao');
          }
          if ('validate_fantasia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fantasia');
          }
          if ('validate_seg_m_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'seg_m_de');
          }
          if ('validate_seg_m_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'seg_m_ate');
          }
          if ('validate_seg_t_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'seg_t_de');
          }
          if ('validate_seg_t_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'seg_t_ate');
          }
          if ('validate_ter_m_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ter_m_de');
          }
          if ('validate_ter_m_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ter_m_ate');
          }
          if ('validate_ter_t_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ter_t_de');
          }
          if ('validate_ter_t_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ter_t_ate');
          }
          if ('validate_qua_m_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'qua_m_de');
          }
          if ('validate_qua_m_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'qua_m_ate');
          }
          if ('validate_qua_t_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'qua_t_de');
          }
          if ('validate_qua_t_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'qua_t_ate');
          }
          if ('validate_qui_m_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'qui_m_de');
          }
          if ('validate_qui_m_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'qui_m_ate');
          }
          if ('validate_qui_t_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'qui_t_de');
          }
          if ('validate_qui_t_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'qui_t_ate');
          }
          if ('validate_sex_m_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sex_m_de');
          }
          if ('validate_sex_m_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sex_m_ate');
          }
          if ('validate_sex_t_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sex_t_de');
          }
          if ('validate_sex_t_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sex_t_ate');
          }
          if ('validate_sab_m_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sab_m_de');
          }
          if ('validate_sab_m_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sab_m_ate');
          }
          if ('validate_sab_t_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sab_t_de');
          }
          if ('validate_sab_t_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sab_t_ate');
          }
          if ('validate_dom_m_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dom_m_de');
          }
          if ('validate_dom_m_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dom_m_ate');
          }
          if ('validate_dom_t_de' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dom_t_de');
          }
          if ('validate_dom_t_ate' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dom_t_ate');
          }
          if ('validate_email' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'email');
          }
          if ('validate_retype_email' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'retype_email');
          }
          if ('validate_cep' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cep');
          }
          if ('validate_cidade' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cidade');
          }
          if ('validate_estado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estado');
          }
          if ('validate_bairro' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bairro');
          }
          if ('validate_rua' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'rua');
          }
          if ('validate_complemento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'complemento');
          }
          if ('validate_numero' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'numero');
          }
          if ('validate_fachada' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fachada');
          }
          if ('validate_nome_contato' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nome_contato');
          }
          if ('validate_telefone' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'telefone');
          }
          form_ap_contrato_updt_xxx_mob_pack_ajax_response();
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
          if ('event_fk_classificacao_onchange' == $this->NM_ajax_opcao)
          {
              $this->fk_classificacao_onChange();
          }
          form_ap_contrato_updt_xxx_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_select']['datacadastro']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->datacadastro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_select']['datacadastro'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_select']['cnpj']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->cnpj = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_select']['cnpj'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_select']['fk_classificacao']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fk_classificacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_select']['fk_classificacao'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
    if ('recarga' == $nm_sc_sv_opcao) {
      $_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'on';
             ?>
	
<style type='text/css'>

body {
background-repeat: repeat;
background-image:  url(https://www.checkincash.com.br/imagem/fundo_tema.png) !important;

background-attachment: fixed;

background-size: 100% 100%;
}
</style>

<?php

$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off'; 
    }
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_ap_contrato_updt_xxx_mob_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_ap_contrato_updt_xxx_mob_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['recarga'] = $this->nmgp_opcao;
          if ($this->sc_evento == "update")
          {
              $this->NM_close_db(); 
              $this->nmgp_redireciona(2); 
          }
          if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
          {
              $this->NM_close_db(); 
              $this->nmgp_redireciona(2); 
          }
          if ($this->sc_evento == "delete")
          {
              $this->NM_close_db(); 
              $this->nmgp_redireciona(2); 
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_ap_contrato_updt_xxx_mob_pack_ajax_response();
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
          form_ap_contrato_updt_xxx_mob_pack_ajax_response();
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
           case 'datacadastro':
               return "Data Cadastro";
               break;
           case 'cnpj':
               return "CNPJ/CPF";
               break;
           case 'inscricao':
               return "Inscrição";
               break;
           case 'fk_classificacao':
               return "Classificação";
               break;
           case 'razao':
               return "Razao";
               break;
           case 'fantasia':
               return "Fantasia";
               break;
           case 'seg_m_de':
               return "Segunda";
               break;
           case 'seg_m_ate':
               return "";
               break;
           case 'seg_t_de':
               return "";
               break;
           case 'seg_t_ate':
               return "Seg T Ate";
               break;
           case 'ter_m_de':
               return "Terça";
               break;
           case 'ter_m_ate':
               return "";
               break;
           case 'ter_t_de':
               return "";
               break;
           case 'ter_t_ate':
               return "";
               break;
           case 'qua_m_de':
               return "Quarta";
               break;
           case 'qua_m_ate':
               return "";
               break;
           case 'qua_t_de':
               return "";
               break;
           case 'qua_t_ate':
               return "";
               break;
           case 'qui_m_de':
               return "Quinta";
               break;
           case 'qui_m_ate':
               return "";
               break;
           case 'qui_t_de':
               return "";
               break;
           case 'qui_t_ate':
               return "";
               break;
           case 'sex_m_de':
               return "Sexta";
               break;
           case 'sex_m_ate':
               return "";
               break;
           case 'sex_t_de':
               return "";
               break;
           case 'sex_t_ate':
               return "";
               break;
           case 'sab_m_de':
               return "Sábado";
               break;
           case 'sab_m_ate':
               return "";
               break;
           case 'sab_t_de':
               return "";
               break;
           case 'sab_t_ate':
               return "";
               break;
           case 'dom_m_de':
               return "Domingo";
               break;
           case 'dom_m_ate':
               return "";
               break;
           case 'dom_t_de':
               return "";
               break;
           case 'dom_t_ate':
               return "";
               break;
           case 'txtmensagem':
               return "Não há necessidade de informar horários de funcionamento para eventos";
               break;
           case 'email':
               return "Email";
               break;
           case 'retype_email':
               return "Redigite o Email";
               break;
           case 'cep':
               return "";
               break;
           case 'cidade':
               return "Cidade";
               break;
           case 'estado':
               return "Estado";
               break;
           case 'bairro':
               return "Bairro";
               break;
           case 'rua':
               return "Rua";
               break;
           case 'complemento':
               return "Complemento";
               break;
           case 'numero':
               return "Numero";
               break;
           case 'fachada':
               return "";
               break;
           case 'nome_contato':
               return "Nome Contato";
               break;
           case 'telefone':
               return "Telefone";
               break;
           case 'pk_contrato':
               return "Pk Contrato";
               break;
           case 'latitude':
               return "Latitude";
               break;
           case 'longitude':
               return "Longitude";
               break;
           case 'senha_usuario':
               return "Senha Usuario";
               break;
           case 'ativo':
               return "Ativo";
               break;
           case 'rash':
               return "Rash";
               break;
           case 'activate_code':
               return "Activate Code";
               break;
           case 'activate_date':
               return "Activate Date";
               break;
           case 'retype_senha':
               return "Redigite a Senha";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_ap_contrato_updt_xxx_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_ap_contrato_updt_xxx_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_ap_contrato_updt_xxx_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_ap_contrato_updt_xxx_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'datacadastro' == $filtro)
        $this->ValidateField_datacadastro($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cnpj' == $filtro)
        $this->ValidateField_cnpj($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'inscricao' == $filtro)
        $this->ValidateField_inscricao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fk_classificacao' == $filtro)
        $this->ValidateField_fk_classificacao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'razao' == $filtro)
        $this->ValidateField_razao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fantasia' == $filtro)
        $this->ValidateField_fantasia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'seg_m_de' == $filtro)
        $this->ValidateField_seg_m_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'seg_m_ate' == $filtro)
        $this->ValidateField_seg_m_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'seg_t_de' == $filtro)
        $this->ValidateField_seg_t_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'seg_t_ate' == $filtro)
        $this->ValidateField_seg_t_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ter_m_de' == $filtro)
        $this->ValidateField_ter_m_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ter_m_ate' == $filtro)
        $this->ValidateField_ter_m_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ter_t_de' == $filtro)
        $this->ValidateField_ter_t_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ter_t_ate' == $filtro)
        $this->ValidateField_ter_t_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'qua_m_de' == $filtro)
        $this->ValidateField_qua_m_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'qua_m_ate' == $filtro)
        $this->ValidateField_qua_m_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'qua_t_de' == $filtro)
        $this->ValidateField_qua_t_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'qua_t_ate' == $filtro)
        $this->ValidateField_qua_t_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'qui_m_de' == $filtro)
        $this->ValidateField_qui_m_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'qui_m_ate' == $filtro)
        $this->ValidateField_qui_m_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'qui_t_de' == $filtro)
        $this->ValidateField_qui_t_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'qui_t_ate' == $filtro)
        $this->ValidateField_qui_t_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sex_m_de' == $filtro)
        $this->ValidateField_sex_m_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sex_m_ate' == $filtro)
        $this->ValidateField_sex_m_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sex_t_de' == $filtro)
        $this->ValidateField_sex_t_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sex_t_ate' == $filtro)
        $this->ValidateField_sex_t_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sab_m_de' == $filtro)
        $this->ValidateField_sab_m_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sab_m_ate' == $filtro)
        $this->ValidateField_sab_m_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sab_t_de' == $filtro)
        $this->ValidateField_sab_t_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sab_t_ate' == $filtro)
        $this->ValidateField_sab_t_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'dom_m_de' == $filtro)
        $this->ValidateField_dom_m_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'dom_m_ate' == $filtro)
        $this->ValidateField_dom_m_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'dom_t_de' == $filtro)
        $this->ValidateField_dom_t_de($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'dom_t_ate' == $filtro)
        $this->ValidateField_dom_t_ate($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'email' == $filtro)
        $this->ValidateField_email($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'retype_email' == $filtro)
        $this->ValidateField_retype_email($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cep' == $filtro)
        $this->ValidateField_cep($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cidade' == $filtro)
        $this->ValidateField_cidade($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estado' == $filtro)
        $this->ValidateField_estado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'bairro' == $filtro)
        $this->ValidateField_bairro($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'rua' == $filtro)
        $this->ValidateField_rua($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'complemento' == $filtro)
        $this->ValidateField_complemento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'numero' == $filtro)
        $this->ValidateField_numero($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fachada' == $filtro)
        $this->ValidateField_fachada($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nome_contato' == $filtro)
        $this->ValidateField_nome_contato($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'telefone' == $filtro)
        $this->ValidateField_telefone($Campos_Crit, $Campos_Falta, $Campos_Erros);
      $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
//-- converter datas   
          $this->nm_converte_datas();
//---

      if (!isset($this->NM_ajax_flag) || 'validate_' != substr($this->NM_ajax_opcao, 0, 9))
      {
      $_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_email = $this->email;
    $original_retype_email = $this->retype_email;
}
             if ($this->email  <> $this->retype_email )
	{
	
	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= 'EMAIL NÃO CONFERE';
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_ap_contrato_updt_xxx_mob' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = 'EMAIL NÃO CONFERE';
 }
;

	}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_email != $this->email || (isset($bFlagRead_email) && $bFlagRead_email)))
    {
        $this->ajax_return_values_email(true);
    }
    if (($original_retype_email != $this->retype_email || (isset($bFlagRead_retype_email) && $bFlagRead_retype_email)))
    {
        $this->ajax_return_values_retype_email(true);
    }
}
$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off'; 
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

    function ValidateField_datacadastro(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->datacadastro, $this->field_config['datacadastro']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['datacadastro']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['datacadastro']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['datacadastro']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['datacadastro']['date_sep']) ; 
          if (trim($this->datacadastro) != "")  
          { 
              if ($teste_validade->Data($this->datacadastro, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Data Cadastro; " ; 
                  if (!isset($Campos_Erros['datacadastro']))
                  {
                      $Campos_Erros['datacadastro'] = array();
                  }
                  $Campos_Erros['datacadastro'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['datacadastro']) || !is_array($this->NM_ajax_info['errList']['datacadastro']))
                  {
                      $this->NM_ajax_info['errList']['datacadastro'] = array();
                  }
                  $this->NM_ajax_info['errList']['datacadastro'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['datacadastro']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_datacadastro

    function ValidateField_cnpj(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_ciccnpj($this->cnpj) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->cnpj) != "")  
          { 
              if (strlen($this->cnpj) < 12)  
              { 
                  if ($teste_validade->CIC($this->cnpj) == false)  
                  { 
                  $Campos_Crit .= "CNPJ/CPF; " ; 
                  if (!isset($Campos_Erros['cnpj']))
                  {
                      $Campos_Erros['cnpj'] = array();
                  }
                  $Campos_Erros['cnpj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['cnpj']) || !is_array($this->NM_ajax_info['errList']['cnpj']))
                  {
                      $this->NM_ajax_info['errList']['cnpj'] = array();
                  }
                  $this->NM_ajax_info['errList']['cnpj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  } 
              } 
              else 
              { 
                  if ($teste_validade->CNPJ($this->cnpj) == false)  
                  { 
                  $Campos_Crit .= "CNPJ/CPF; " ; 
                  if (!isset($Campos_Erros['cnpj']))
                  {
                      $Campos_Erros['cnpj'] = array();
                  }
                  $Campos_Erros['cnpj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['cnpj']) || !is_array($this->NM_ajax_info['errList']['cnpj']))
                  {
                      $this->NM_ajax_info['errList']['cnpj'] = array();
                  }
                  $this->NM_ajax_info['errList']['cnpj'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  } 
              } 
          } 
          elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['cnpj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['cnpj'] == "on") 
          { 
              $Campos_Falta[] = "CNPJ/CPF" ; 
              if (!isset($Campos_Erros['cnpj']))
              {
                  $Campos_Erros['cnpj'] = array();
              }
              $Campos_Erros['cnpj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['cnpj']) || !is_array($this->NM_ajax_info['errList']['cnpj']))
                  {
                      $this->NM_ajax_info['errList']['cnpj'] = array();
                  }
                  $this->NM_ajax_info['errList']['cnpj'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
    } // ValidateField_cnpj

    function ValidateField_inscricao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->inscricao) > 20) 
          { 
              $Campos_Crit .= "Inscrição " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['inscricao']))
              {
                  $Campos_Erros['inscricao'] = array();
              }
              $Campos_Erros['inscricao'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['inscricao']) || !is_array($this->NM_ajax_info['errList']['inscricao']))
              {
                  $this->NM_ajax_info['errList']['inscricao'] = array();
              }
              $this->NM_ajax_info['errList']['inscricao'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_inscricao

    function ValidateField_fk_classificacao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->fk_classificacao == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['fk_classificacao']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['fk_classificacao'] == "on"))
      {
          $Campos_Falta[] = "Classificação" ; 
          if (!isset($Campos_Erros['fk_classificacao']))
          {
              $Campos_Erros['fk_classificacao'] = array();
          }
          $Campos_Erros['fk_classificacao'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['fk_classificacao']) || !is_array($this->NM_ajax_info['errList']['fk_classificacao']))
          {
              $this->NM_ajax_info['errList']['fk_classificacao'] = array();
          }
          $this->NM_ajax_info['errList']['fk_classificacao'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->fk_classificacao) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao']) && !in_array($this->fk_classificacao, $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['fk_classificacao']))
              {
                  $Campos_Erros['fk_classificacao'] = array();
              }
              $Campos_Erros['fk_classificacao'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['fk_classificacao']) || !is_array($this->NM_ajax_info['errList']['fk_classificacao']))
              {
                  $this->NM_ajax_info['errList']['fk_classificacao'] = array();
              }
              $this->NM_ajax_info['errList']['fk_classificacao'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_fk_classificacao

    function ValidateField_razao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->razao = sc_strtoupper($this->razao); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['razao']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['razao'] == "on")) 
      { 
          if ($this->razao == "")  
          { 
              $Campos_Falta[] =  "Razao" ; 
              if (!isset($Campos_Erros['razao']))
              {
                  $Campos_Erros['razao'] = array();
              }
              $Campos_Erros['razao'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['razao']) || !is_array($this->NM_ajax_info['errList']['razao']))
                  {
                      $this->NM_ajax_info['errList']['razao'] = array();
                  }
                  $this->NM_ajax_info['errList']['razao'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->razao) > 80) 
          { 
              $Campos_Crit .= "Razao " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['razao']))
              {
                  $Campos_Erros['razao'] = array();
              }
              $Campos_Erros['razao'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['razao']) || !is_array($this->NM_ajax_info['errList']['razao']))
              {
                  $this->NM_ajax_info['errList']['razao'] = array();
              }
              $this->NM_ajax_info['errList']['razao'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_razao

    function ValidateField_fantasia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->fantasia = sc_strtoupper($this->fantasia); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['fantasia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['fantasia'] == "on")) 
      { 
          if ($this->fantasia == "")  
          { 
              $Campos_Falta[] =  "Fantasia" ; 
              if (!isset($Campos_Erros['fantasia']))
              {
                  $Campos_Erros['fantasia'] = array();
              }
              $Campos_Erros['fantasia'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fantasia']) || !is_array($this->NM_ajax_info['errList']['fantasia']))
                  {
                      $this->NM_ajax_info['errList']['fantasia'] = array();
                  }
                  $this->NM_ajax_info['errList']['fantasia'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fantasia) > 80) 
          { 
              $Campos_Crit .= "Fantasia " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fantasia']))
              {
                  $Campos_Erros['fantasia'] = array();
              }
              $Campos_Erros['fantasia'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fantasia']) || !is_array($this->NM_ajax_info['errList']['fantasia']))
              {
                  $this->NM_ajax_info['errList']['fantasia'] = array();
              }
              $this->NM_ajax_info['errList']['fantasia'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_fantasia

    function ValidateField_seg_m_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->seg_m_de, $this->field_config['seg_m_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['seg_m_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['seg_m_de']['time_sep']) ; 
          if (trim($this->seg_m_de) != "")  
          { 
              if ($teste_validade->Hora($this->seg_m_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "Segunda; " ; 
                  if (!isset($Campos_Erros['seg_m_de']))
                  {
                      $Campos_Erros['seg_m_de'] = array();
                  }
                  $Campos_Erros['seg_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['seg_m_de']) || !is_array($this->NM_ajax_info['errList']['seg_m_de']))
                  {
                      $this->NM_ajax_info['errList']['seg_m_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['seg_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_seg_m_de

    function ValidateField_seg_m_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->seg_m_ate, $this->field_config['seg_m_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['seg_m_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['seg_m_ate']['time_sep']) ; 
          if (trim($this->seg_m_ate) != "")  
          { 
              if ($teste_validade->Hora($this->seg_m_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['seg_m_ate']))
                  {
                      $Campos_Erros['seg_m_ate'] = array();
                  }
                  $Campos_Erros['seg_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['seg_m_ate']) || !is_array($this->NM_ajax_info['errList']['seg_m_ate']))
                  {
                      $this->NM_ajax_info['errList']['seg_m_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['seg_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_seg_m_ate

    function ValidateField_seg_t_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->seg_t_de, $this->field_config['seg_t_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['seg_t_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['seg_t_de']['time_sep']) ; 
          if (trim($this->seg_t_de) != "")  
          { 
              if ($teste_validade->Hora($this->seg_t_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['seg_t_de']))
                  {
                      $Campos_Erros['seg_t_de'] = array();
                  }
                  $Campos_Erros['seg_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['seg_t_de']) || !is_array($this->NM_ajax_info['errList']['seg_t_de']))
                  {
                      $this->NM_ajax_info['errList']['seg_t_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['seg_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_seg_t_de

    function ValidateField_seg_t_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->seg_t_ate, $this->field_config['seg_t_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['seg_t_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['seg_t_ate']['time_sep']) ; 
          if (trim($this->seg_t_ate) != "")  
          { 
              if ($teste_validade->Hora($this->seg_t_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "Seg T Ate; " ; 
                  if (!isset($Campos_Erros['seg_t_ate']))
                  {
                      $Campos_Erros['seg_t_ate'] = array();
                  }
                  $Campos_Erros['seg_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['seg_t_ate']) || !is_array($this->NM_ajax_info['errList']['seg_t_ate']))
                  {
                      $this->NM_ajax_info['errList']['seg_t_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['seg_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_seg_t_ate

    function ValidateField_ter_m_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->ter_m_de, $this->field_config['ter_m_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['ter_m_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['ter_m_de']['time_sep']) ; 
          if (trim($this->ter_m_de) != "")  
          { 
              if ($teste_validade->Hora($this->ter_m_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "Terça; " ; 
                  if (!isset($Campos_Erros['ter_m_de']))
                  {
                      $Campos_Erros['ter_m_de'] = array();
                  }
                  $Campos_Erros['ter_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['ter_m_de']) || !is_array($this->NM_ajax_info['errList']['ter_m_de']))
                  {
                      $this->NM_ajax_info['errList']['ter_m_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['ter_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_ter_m_de

    function ValidateField_ter_m_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->ter_m_ate, $this->field_config['ter_m_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['ter_m_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['ter_m_ate']['time_sep']) ; 
          if (trim($this->ter_m_ate) != "")  
          { 
              if ($teste_validade->Hora($this->ter_m_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['ter_m_ate']))
                  {
                      $Campos_Erros['ter_m_ate'] = array();
                  }
                  $Campos_Erros['ter_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['ter_m_ate']) || !is_array($this->NM_ajax_info['errList']['ter_m_ate']))
                  {
                      $this->NM_ajax_info['errList']['ter_m_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['ter_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_ter_m_ate

    function ValidateField_ter_t_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->ter_t_de, $this->field_config['ter_t_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['ter_t_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['ter_t_de']['time_sep']) ; 
          if (trim($this->ter_t_de) != "")  
          { 
              if ($teste_validade->Hora($this->ter_t_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['ter_t_de']))
                  {
                      $Campos_Erros['ter_t_de'] = array();
                  }
                  $Campos_Erros['ter_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['ter_t_de']) || !is_array($this->NM_ajax_info['errList']['ter_t_de']))
                  {
                      $this->NM_ajax_info['errList']['ter_t_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['ter_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_ter_t_de

    function ValidateField_ter_t_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->ter_t_ate, $this->field_config['ter_t_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['ter_t_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['ter_t_ate']['time_sep']) ; 
          if (trim($this->ter_t_ate) != "")  
          { 
              if ($teste_validade->Hora($this->ter_t_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['ter_t_ate']))
                  {
                      $Campos_Erros['ter_t_ate'] = array();
                  }
                  $Campos_Erros['ter_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['ter_t_ate']) || !is_array($this->NM_ajax_info['errList']['ter_t_ate']))
                  {
                      $this->NM_ajax_info['errList']['ter_t_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['ter_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_ter_t_ate

    function ValidateField_qua_m_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->qua_m_de, $this->field_config['qua_m_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['qua_m_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['qua_m_de']['time_sep']) ; 
          if (trim($this->qua_m_de) != "")  
          { 
              if ($teste_validade->Hora($this->qua_m_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "Quarta; " ; 
                  if (!isset($Campos_Erros['qua_m_de']))
                  {
                      $Campos_Erros['qua_m_de'] = array();
                  }
                  $Campos_Erros['qua_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['qua_m_de']) || !is_array($this->NM_ajax_info['errList']['qua_m_de']))
                  {
                      $this->NM_ajax_info['errList']['qua_m_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['qua_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_qua_m_de

    function ValidateField_qua_m_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->qua_m_ate, $this->field_config['qua_m_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['qua_m_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['qua_m_ate']['time_sep']) ; 
          if (trim($this->qua_m_ate) != "")  
          { 
              if ($teste_validade->Hora($this->qua_m_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['qua_m_ate']))
                  {
                      $Campos_Erros['qua_m_ate'] = array();
                  }
                  $Campos_Erros['qua_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['qua_m_ate']) || !is_array($this->NM_ajax_info['errList']['qua_m_ate']))
                  {
                      $this->NM_ajax_info['errList']['qua_m_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['qua_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_qua_m_ate

    function ValidateField_qua_t_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->qua_t_de, $this->field_config['qua_t_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['qua_t_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['qua_t_de']['time_sep']) ; 
          if (trim($this->qua_t_de) != "")  
          { 
              if ($teste_validade->Hora($this->qua_t_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['qua_t_de']))
                  {
                      $Campos_Erros['qua_t_de'] = array();
                  }
                  $Campos_Erros['qua_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['qua_t_de']) || !is_array($this->NM_ajax_info['errList']['qua_t_de']))
                  {
                      $this->NM_ajax_info['errList']['qua_t_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['qua_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_qua_t_de

    function ValidateField_qua_t_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->qua_t_ate, $this->field_config['qua_t_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['qua_t_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['qua_t_ate']['time_sep']) ; 
          if (trim($this->qua_t_ate) != "")  
          { 
              if ($teste_validade->Hora($this->qua_t_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['qua_t_ate']))
                  {
                      $Campos_Erros['qua_t_ate'] = array();
                  }
                  $Campos_Erros['qua_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['qua_t_ate']) || !is_array($this->NM_ajax_info['errList']['qua_t_ate']))
                  {
                      $this->NM_ajax_info['errList']['qua_t_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['qua_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_qua_t_ate

    function ValidateField_qui_m_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->qui_m_de, $this->field_config['qui_m_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['qui_m_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['qui_m_de']['time_sep']) ; 
          if (trim($this->qui_m_de) != "")  
          { 
              if ($teste_validade->Hora($this->qui_m_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "Quinta; " ; 
                  if (!isset($Campos_Erros['qui_m_de']))
                  {
                      $Campos_Erros['qui_m_de'] = array();
                  }
                  $Campos_Erros['qui_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['qui_m_de']) || !is_array($this->NM_ajax_info['errList']['qui_m_de']))
                  {
                      $this->NM_ajax_info['errList']['qui_m_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['qui_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_qui_m_de

    function ValidateField_qui_m_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->qui_m_ate, $this->field_config['qui_m_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['qui_m_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['qui_m_ate']['time_sep']) ; 
          if (trim($this->qui_m_ate) != "")  
          { 
              if ($teste_validade->Hora($this->qui_m_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['qui_m_ate']))
                  {
                      $Campos_Erros['qui_m_ate'] = array();
                  }
                  $Campos_Erros['qui_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['qui_m_ate']) || !is_array($this->NM_ajax_info['errList']['qui_m_ate']))
                  {
                      $this->NM_ajax_info['errList']['qui_m_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['qui_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_qui_m_ate

    function ValidateField_qui_t_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->qui_t_de, $this->field_config['qui_t_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['qui_t_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['qui_t_de']['time_sep']) ; 
          if (trim($this->qui_t_de) != "")  
          { 
              if ($teste_validade->Hora($this->qui_t_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['qui_t_de']))
                  {
                      $Campos_Erros['qui_t_de'] = array();
                  }
                  $Campos_Erros['qui_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['qui_t_de']) || !is_array($this->NM_ajax_info['errList']['qui_t_de']))
                  {
                      $this->NM_ajax_info['errList']['qui_t_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['qui_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_qui_t_de

    function ValidateField_qui_t_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->qui_t_ate, $this->field_config['qui_t_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['qui_t_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['qui_t_ate']['time_sep']) ; 
          if (trim($this->qui_t_ate) != "")  
          { 
              if ($teste_validade->Hora($this->qui_t_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['qui_t_ate']))
                  {
                      $Campos_Erros['qui_t_ate'] = array();
                  }
                  $Campos_Erros['qui_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['qui_t_ate']) || !is_array($this->NM_ajax_info['errList']['qui_t_ate']))
                  {
                      $this->NM_ajax_info['errList']['qui_t_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['qui_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_qui_t_ate

    function ValidateField_sex_m_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->sex_m_de, $this->field_config['sex_m_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['sex_m_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['sex_m_de']['time_sep']) ; 
          if (trim($this->sex_m_de) != "")  
          { 
              if ($teste_validade->Hora($this->sex_m_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "Sexta; " ; 
                  if (!isset($Campos_Erros['sex_m_de']))
                  {
                      $Campos_Erros['sex_m_de'] = array();
                  }
                  $Campos_Erros['sex_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['sex_m_de']) || !is_array($this->NM_ajax_info['errList']['sex_m_de']))
                  {
                      $this->NM_ajax_info['errList']['sex_m_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['sex_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_sex_m_de

    function ValidateField_sex_m_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->sex_m_ate, $this->field_config['sex_m_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['sex_m_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['sex_m_ate']['time_sep']) ; 
          if (trim($this->sex_m_ate) != "")  
          { 
              if ($teste_validade->Hora($this->sex_m_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['sex_m_ate']))
                  {
                      $Campos_Erros['sex_m_ate'] = array();
                  }
                  $Campos_Erros['sex_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['sex_m_ate']) || !is_array($this->NM_ajax_info['errList']['sex_m_ate']))
                  {
                      $this->NM_ajax_info['errList']['sex_m_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['sex_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_sex_m_ate

    function ValidateField_sex_t_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->sex_t_de, $this->field_config['sex_t_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['sex_t_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['sex_t_de']['time_sep']) ; 
          if (trim($this->sex_t_de) != "")  
          { 
              if ($teste_validade->Hora($this->sex_t_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['sex_t_de']))
                  {
                      $Campos_Erros['sex_t_de'] = array();
                  }
                  $Campos_Erros['sex_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['sex_t_de']) || !is_array($this->NM_ajax_info['errList']['sex_t_de']))
                  {
                      $this->NM_ajax_info['errList']['sex_t_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['sex_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_sex_t_de

    function ValidateField_sex_t_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->sex_t_ate, $this->field_config['sex_t_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['sex_t_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['sex_t_ate']['time_sep']) ; 
          if (trim($this->sex_t_ate) != "")  
          { 
              if ($teste_validade->Hora($this->sex_t_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['sex_t_ate']))
                  {
                      $Campos_Erros['sex_t_ate'] = array();
                  }
                  $Campos_Erros['sex_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['sex_t_ate']) || !is_array($this->NM_ajax_info['errList']['sex_t_ate']))
                  {
                      $this->NM_ajax_info['errList']['sex_t_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['sex_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_sex_t_ate

    function ValidateField_sab_m_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->sab_m_de, $this->field_config['sab_m_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['sab_m_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['sab_m_de']['time_sep']) ; 
          if (trim($this->sab_m_de) != "")  
          { 
              if ($teste_validade->Hora($this->sab_m_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "Sábado; " ; 
                  if (!isset($Campos_Erros['sab_m_de']))
                  {
                      $Campos_Erros['sab_m_de'] = array();
                  }
                  $Campos_Erros['sab_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['sab_m_de']) || !is_array($this->NM_ajax_info['errList']['sab_m_de']))
                  {
                      $this->NM_ajax_info['errList']['sab_m_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['sab_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_sab_m_de

    function ValidateField_sab_m_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->sab_m_ate, $this->field_config['sab_m_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['sab_m_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['sab_m_ate']['time_sep']) ; 
          if (trim($this->sab_m_ate) != "")  
          { 
              if ($teste_validade->Hora($this->sab_m_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['sab_m_ate']))
                  {
                      $Campos_Erros['sab_m_ate'] = array();
                  }
                  $Campos_Erros['sab_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['sab_m_ate']) || !is_array($this->NM_ajax_info['errList']['sab_m_ate']))
                  {
                      $this->NM_ajax_info['errList']['sab_m_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['sab_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_sab_m_ate

    function ValidateField_sab_t_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->sab_t_de, $this->field_config['sab_t_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['sab_t_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['sab_t_de']['time_sep']) ; 
          if (trim($this->sab_t_de) != "")  
          { 
              if ($teste_validade->Hora($this->sab_t_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['sab_t_de']))
                  {
                      $Campos_Erros['sab_t_de'] = array();
                  }
                  $Campos_Erros['sab_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['sab_t_de']) || !is_array($this->NM_ajax_info['errList']['sab_t_de']))
                  {
                      $this->NM_ajax_info['errList']['sab_t_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['sab_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_sab_t_de

    function ValidateField_sab_t_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->sab_t_ate, $this->field_config['sab_t_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['sab_t_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['sab_t_ate']['time_sep']) ; 
          if (trim($this->sab_t_ate) != "")  
          { 
              if ($teste_validade->Hora($this->sab_t_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['sab_t_ate']))
                  {
                      $Campos_Erros['sab_t_ate'] = array();
                  }
                  $Campos_Erros['sab_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['sab_t_ate']) || !is_array($this->NM_ajax_info['errList']['sab_t_ate']))
                  {
                      $this->NM_ajax_info['errList']['sab_t_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['sab_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_sab_t_ate

    function ValidateField_dom_m_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->dom_m_de, $this->field_config['dom_m_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['dom_m_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['dom_m_de']['time_sep']) ; 
          if (trim($this->dom_m_de) != "")  
          { 
              if ($teste_validade->Hora($this->dom_m_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "Domingo; " ; 
                  if (!isset($Campos_Erros['dom_m_de']))
                  {
                      $Campos_Erros['dom_m_de'] = array();
                  }
                  $Campos_Erros['dom_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dom_m_de']) || !is_array($this->NM_ajax_info['errList']['dom_m_de']))
                  {
                      $this->NM_ajax_info['errList']['dom_m_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['dom_m_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_dom_m_de

    function ValidateField_dom_m_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->dom_m_ate, $this->field_config['dom_m_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['dom_m_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['dom_m_ate']['time_sep']) ; 
          if (trim($this->dom_m_ate) != "")  
          { 
              if ($teste_validade->Hora($this->dom_m_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['dom_m_ate']))
                  {
                      $Campos_Erros['dom_m_ate'] = array();
                  }
                  $Campos_Erros['dom_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dom_m_ate']) || !is_array($this->NM_ajax_info['errList']['dom_m_ate']))
                  {
                      $this->NM_ajax_info['errList']['dom_m_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['dom_m_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_dom_m_ate

    function ValidateField_dom_t_de(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->dom_t_de, $this->field_config['dom_t_de']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['dom_t_de']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['dom_t_de']['time_sep']) ; 
          if (trim($this->dom_t_de) != "")  
          { 
              if ($teste_validade->Hora($this->dom_t_de, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['dom_t_de']))
                  {
                      $Campos_Erros['dom_t_de'] = array();
                  }
                  $Campos_Erros['dom_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dom_t_de']) || !is_array($this->NM_ajax_info['errList']['dom_t_de']))
                  {
                      $this->NM_ajax_info['errList']['dom_t_de'] = array();
                  }
                  $this->NM_ajax_info['errList']['dom_t_de'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_dom_t_de

    function ValidateField_dom_t_ate(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_hora($this->dom_t_ate, $this->field_config['dom_t_ate']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['dom_t_ate']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['dom_t_ate']['time_sep']) ; 
          if (trim($this->dom_t_ate) != "")  
          { 
              if ($teste_validade->Hora($this->dom_t_ate, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "; " ; 
                  if (!isset($Campos_Erros['dom_t_ate']))
                  {
                      $Campos_Erros['dom_t_ate'] = array();
                  }
                  $Campos_Erros['dom_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dom_t_ate']) || !is_array($this->NM_ajax_info['errList']['dom_t_ate']))
                  {
                      $this->NM_ajax_info['errList']['dom_t_ate'] = array();
                  }
                  $this->NM_ajax_info['errList']['dom_t_ate'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_dom_t_ate

    function ValidateField_email(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->email) != "")  
          { 
              if ($teste_validade->Email($this->email) == false)  
              { 
                      $Campos_Crit .= "Email; " ; 
                  if (!isset($Campos_Erros['email']))
                  {
                      $Campos_Erros['email'] = array();
                  }
                  $Campos_Erros['email'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                      if (!isset($this->NM_ajax_info['errList']['email']) || !is_array($this->NM_ajax_info['errList']['email']))
                      {
                          $this->NM_ajax_info['errList']['email'] = array();
                      }
                      $this->NM_ajax_info['errList']['email'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['email']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['email'] == "on") 
          { 
              $Campos_Falta[] = "Email" ; 
              if (!isset($Campos_Erros['email']))
              {
                  $Campos_Erros['email'] = array();
              }
              $Campos_Erros['email'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['email']) || !is_array($this->NM_ajax_info['errList']['email']))
                  {
                      $this->NM_ajax_info['errList']['email'] = array();
                  }
                  $this->NM_ajax_info['errList']['email'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
    } // ValidateField_email

    function ValidateField_retype_email(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->retype_email) != "")  
          { 
              if ($teste_validade->Email($this->retype_email) == false)  
              { 
                      $Campos_Crit .= "Redigite o Email; " ; 
                  if (!isset($Campos_Erros['retype_email']))
                  {
                      $Campos_Erros['retype_email'] = array();
                  }
                  $Campos_Erros['retype_email'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                      if (!isset($this->NM_ajax_info['errList']['retype_email']) || !is_array($this->NM_ajax_info['errList']['retype_email']))
                      {
                          $this->NM_ajax_info['errList']['retype_email'] = array();
                      }
                      $this->NM_ajax_info['errList']['retype_email'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_retype_email

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
                  $Campos_Crit .= "; " ; 
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
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['cep']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['cep'] == "on") 
           { 
              $Campos_Falta[] = "" ; 
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

    function ValidateField_cidade(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->cidade = sc_strtoupper($this->cidade); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['cidade']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['cidade'] == "on")) 
      { 
          if ($this->cidade == "")  
          { 
              $Campos_Falta[] =  "Cidade" ; 
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
              $Campos_Crit .= "Cidade " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 70 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
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
      $this->estado = sc_strtoupper($this->estado); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['estado']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['estado'] == "on")) 
      { 
          if ($this->estado == "")  
          { 
              $Campos_Falta[] =  "Estado" ; 
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
              $Campos_Crit .= "Estado " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
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

    function ValidateField_bairro(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->bairro = sc_strtoupper($this->bairro); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['bairro']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['bairro'] == "on")) 
      { 
          if ($this->bairro == "")  
          { 
              $Campos_Falta[] =  "Bairro" ; 
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
          if (NM_utf8_strlen($this->bairro) > 80) 
          { 
              $Campos_Crit .= "Bairro " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['bairro']))
              {
                  $Campos_Erros['bairro'] = array();
              }
              $Campos_Erros['bairro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['bairro']) || !is_array($this->NM_ajax_info['errList']['bairro']))
              {
                  $this->NM_ajax_info['errList']['bairro'] = array();
              }
              $this->NM_ajax_info['errList']['bairro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 80 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_bairro

    function ValidateField_rua(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->rua = sc_strtoupper($this->rua); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['rua']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['rua'] == "on")) 
      { 
          if ($this->rua == "")  
          { 
              $Campos_Falta[] =  "Rua" ; 
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
          if (NM_utf8_strlen($this->rua) > 90) 
          { 
              $Campos_Crit .= "Rua " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 90 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['rua']))
              {
                  $Campos_Erros['rua'] = array();
              }
              $Campos_Erros['rua'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 90 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['rua']) || !is_array($this->NM_ajax_info['errList']['rua']))
              {
                  $this->NM_ajax_info['errList']['rua'] = array();
              }
              $this->NM_ajax_info['errList']['rua'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 90 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_rua

    function ValidateField_complemento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->complemento = sc_strtoupper($this->complemento); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->complemento) > 50) 
          { 
              $Campos_Crit .= "Complemento " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['complemento']))
              {
                  $Campos_Erros['complemento'] = array();
              }
              $Campos_Erros['complemento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['complemento']) || !is_array($this->NM_ajax_info['errList']['complemento']))
              {
                  $this->NM_ajax_info['errList']['complemento'] = array();
              }
              $this->NM_ajax_info['errList']['complemento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_complemento

    function ValidateField_numero(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->numero = sc_strtoupper($this->numero); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['numero']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['numero'] == "on")) 
      { 
          if ($this->numero == "")  
          { 
              $Campos_Falta[] =  "Numero" ; 
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
              $Campos_Crit .= "Numero " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
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

    function ValidateField_fachada(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->fachada;
            if ("" != $this->fachada && "S" != $this->fachada_limpa && !$teste_validade->ArqExtensao($this->fachada, array('jpg', 'png')))
            {
                $Campos_Crit .= ": " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['fachada']))
                {
                    $Campos_Erros['fachada'] = array();
                }
                $Campos_Erros['fachada'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['fachada']) || !is_array($this->NM_ajax_info['errList']['fachada']))
                {
                    $this->NM_ajax_info['errList']['fachada'] = array();
                }
                $this->NM_ajax_info['errList']['fachada'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
    } // ValidateField_fachada

    function ValidateField_nome_contato(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->nome_contato = sc_strtoupper($this->nome_contato); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['nome_contato']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['nome_contato'] == "on")) 
      { 
          if ($this->nome_contato == "")  
          { 
              $Campos_Falta[] =  "Nome Contato" ; 
              if (!isset($Campos_Erros['nome_contato']))
              {
                  $Campos_Erros['nome_contato'] = array();
              }
              $Campos_Erros['nome_contato'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['nome_contato']) || !is_array($this->NM_ajax_info['errList']['nome_contato']))
                  {
                      $this->NM_ajax_info['errList']['nome_contato'] = array();
                  }
                  $this->NM_ajax_info['errList']['nome_contato'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nome_contato) > 70) 
          { 
              $Campos_Crit .= "Nome Contato " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 70 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nome_contato']))
              {
                  $Campos_Erros['nome_contato'] = array();
              }
              $Campos_Erros['nome_contato'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 70 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nome_contato']) || !is_array($this->NM_ajax_info['errList']['nome_contato']))
              {
                  $this->NM_ajax_info['errList']['nome_contato'] = array();
              }
              $this->NM_ajax_info['errList']['nome_contato'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 70 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_nome_contato

    function ValidateField_telefone(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->nm_tira_mask($this->telefone, "(99) 999999999", "(){}[].,;:-+/ "); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['telefone']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['php_cmp_required']['telefone'] == "on")) 
      { 
          if ($this->telefone == "")  
          { 
              $Campos_Falta[] =  "Telefone" ; 
              if (!isset($Campos_Erros['telefone']))
              {
                  $Campos_Erros['telefone'] = array();
              }
              $Campos_Erros['telefone'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['telefone']) || !is_array($this->NM_ajax_info['errList']['telefone']))
                  {
                      $this->NM_ajax_info['errList']['telefone'] = array();
                  }
                  $this->NM_ajax_info['errList']['telefone'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->telefone) > 45) 
          { 
              $Campos_Crit .= "Telefone " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['telefone']))
              {
                  $Campos_Erros['telefone'] = array();
              }
              $Campos_Erros['telefone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['telefone']) || !is_array($this->NM_ajax_info['errList']['telefone']))
              {
                  $this->NM_ajax_info['errList']['telefone'] = array();
              }
              $this->NM_ajax_info['errList']['telefone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_telefone
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
          if ($this->fachada == "none") 
          { 
              $this->fachada = ""; 
          } 
          if ($this->fachada != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_ap_contrato_updt_xxx_mob_doc_name.php';
              }
              $this->fachada = sc_upload_unprotect_chars($this->fachada);
              $this->fachada_scfile_name = sc_upload_unprotect_chars($this->fachada_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->fachada_scfile_type = substr($this->fachada_scfile_type, 0, strpos($this->fachada_scfile_type, ";")) ; 
              } 
              if ($this->fachada_scfile_type == "image/pjpeg" || $this->fachada_scfile_type == "image/jpeg" || $this->fachada_scfile_type == "image/gif" ||  
                  $this->fachada_scfile_type == "image/png" || $this->fachada_scfile_type == "image/x-png" || $this->fachada_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->fachada))  
                  { 
                      if ($this->nmgp_opcao == "incluir")
                      { 
                          $this->SC_IMG_fachada = $this->fachada;
                      } 
                      else 
                      { 
                          $arq_fachada = fopen($this->fachada, "r") ; 
                          $reg_fachada = fread($arq_fachada, filesize($this->fachada)) ; 
                          fclose($arq_fachada) ;  
                      } 
                      $this->fachada =  trim($this->fachada_scfile_name) ;  
                      $dir_img = $this->Ini->root . $this->Ini->path_imagens . "" . $_SESSION['pastacliente'] . "/"; 
                     if ($this->nmgp_opcao != "incluir")
                     { 
                      if (nm_mkdir($dir_img))  
                      { 
                          $_test_file = $this->fetchUniqueUploadName($this->fachada_scfile_name, $dir_img, "fachada");
                          if (trim($this->fachada_scfile_name) != $_test_file)
                          {
                              $this->fachada_scfile_name = $_test_file;
                              $this->fachada = $_test_file;
                          }
                          $arq_fachada = fopen($dir_img . trim($this->fachada_scfile_name), "w") ; 
                          fwrite($arq_fachada, $reg_fachada) ;  
                          fclose($arq_fachada) ;  
                      } 
                      else 
                      { 
                          $Campos_Crit .= ": " . $this->Ini->Nm_lang['lang_errm_ivdr']; 
                          $this->fachada = "";
                          if (!isset($Campos_Erros['fachada']))
                          {
                              $Campos_Erros['fachada'] = array();
                          }
                          $Campos_Erros['fachada'][] = $this->Ini->Nm_lang['lang_errm_ivdr'];
                          if (!isset($this->NM_ajax_info['errList']['fachada']) || !is_array($this->NM_ajax_info['errList']['fachada']))
                          {
                              $this->NM_ajax_info['errList']['fachada'] = array();
                          }
                          $this->NM_ajax_info['errList']['fachada'][] = $this->Ini->Nm_lang['lang_errm_ivdr'];
                      } 
                     } 
                  } 
                  else 
                  { 
                      $Campos_Crit .= " " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->fachada = "";
                      if (!isset($Campos_Erros['fachada']))
                      {
                          $Campos_Erros['fachada'] = array();
                      }
                      $Campos_Erros['fachada'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['fachada']) || !is_array($this->NM_ajax_info['errList']['fachada']))
                      {
                          $this->NM_ajax_info['errList']['fachada'] = array();
                      }
                      $this->NM_ajax_info['errList']['fachada'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->fachada = "" ; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= " " . $this->Ini->Nm_lang['lang_errm_ivtp']; 
                      if (!isset($Campos_Erros['fachada']))
                      {
                          $Campos_Erros['fachada'] = array();
                      }
                      $Campos_Erros['fachada'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                      if (!isset($this->NM_ajax_info['errList']['fachada']) || !is_array($this->NM_ajax_info['errList']['fachada']))
                      {
                          $this->NM_ajax_info['errList']['fachada'] = array();
                      }
                      $this->NM_ajax_info['errList']['fachada'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                  } 
              } 
          } 
          elseif (!empty($this->fachada_salva) && $this->fachada_limpa != "S")
          {
              $this->fachada = $this->fachada_salva;
          }
      } 
      elseif (!empty($this->fachada_salva) && $this->fachada_limpa != "S")
      {
          $this->fachada = $this->fachada_salva;
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
    $this->nmgp_dados_form['datacadastro'] = $this->datacadastro;
    $this->nmgp_dados_form['cnpj'] = $this->cnpj;
    $this->nmgp_dados_form['inscricao'] = $this->inscricao;
    $this->nmgp_dados_form['fk_classificacao'] = $this->fk_classificacao;
    $this->nmgp_dados_form['razao'] = $this->razao;
    $this->nmgp_dados_form['fantasia'] = $this->fantasia;
    $this->nmgp_dados_form['seg_m_de'] = $this->seg_m_de;
    $this->nmgp_dados_form['seg_m_ate'] = $this->seg_m_ate;
    $this->nmgp_dados_form['seg_t_de'] = $this->seg_t_de;
    $this->nmgp_dados_form['seg_t_ate'] = $this->seg_t_ate;
    $this->nmgp_dados_form['ter_m_de'] = $this->ter_m_de;
    $this->nmgp_dados_form['ter_m_ate'] = $this->ter_m_ate;
    $this->nmgp_dados_form['ter_t_de'] = $this->ter_t_de;
    $this->nmgp_dados_form['ter_t_ate'] = $this->ter_t_ate;
    $this->nmgp_dados_form['qua_m_de'] = $this->qua_m_de;
    $this->nmgp_dados_form['qua_m_ate'] = $this->qua_m_ate;
    $this->nmgp_dados_form['qua_t_de'] = $this->qua_t_de;
    $this->nmgp_dados_form['qua_t_ate'] = $this->qua_t_ate;
    $this->nmgp_dados_form['qui_m_de'] = $this->qui_m_de;
    $this->nmgp_dados_form['qui_m_ate'] = $this->qui_m_ate;
    $this->nmgp_dados_form['qui_t_de'] = $this->qui_t_de;
    $this->nmgp_dados_form['qui_t_ate'] = $this->qui_t_ate;
    $this->nmgp_dados_form['sex_m_de'] = $this->sex_m_de;
    $this->nmgp_dados_form['sex_m_ate'] = $this->sex_m_ate;
    $this->nmgp_dados_form['sex_t_de'] = $this->sex_t_de;
    $this->nmgp_dados_form['sex_t_ate'] = $this->sex_t_ate;
    $this->nmgp_dados_form['sab_m_de'] = $this->sab_m_de;
    $this->nmgp_dados_form['sab_m_ate'] = $this->sab_m_ate;
    $this->nmgp_dados_form['sab_t_de'] = $this->sab_t_de;
    $this->nmgp_dados_form['sab_t_ate'] = $this->sab_t_ate;
    $this->nmgp_dados_form['dom_m_de'] = $this->dom_m_de;
    $this->nmgp_dados_form['dom_m_ate'] = $this->dom_m_ate;
    $this->nmgp_dados_form['dom_t_de'] = $this->dom_t_de;
    $this->nmgp_dados_form['dom_t_ate'] = $this->dom_t_ate;
    $this->nmgp_dados_form['txtmensagem'] = $this->txtmensagem;
    $this->nmgp_dados_form['email'] = $this->email;
    $this->nmgp_dados_form['retype_email'] = $this->retype_email;
    $this->nmgp_dados_form['cep'] = $this->cep;
    $this->nmgp_dados_form['cidade'] = $this->cidade;
    $this->nmgp_dados_form['estado'] = $this->estado;
    $this->nmgp_dados_form['bairro'] = $this->bairro;
    $this->nmgp_dados_form['rua'] = $this->rua;
    $this->nmgp_dados_form['complemento'] = $this->complemento;
    $this->nmgp_dados_form['numero'] = $this->numero;
    if (empty($this->fachada))
    {
        $this->fachada = $this->nmgp_dados_form['fachada'];
    }
    $this->nmgp_dados_form['fachada'] = $this->fachada;
    $this->nmgp_dados_form['fachada_limpa'] = $this->fachada_limpa;
    $this->nmgp_dados_form['nome_contato'] = $this->nome_contato;
    $this->nmgp_dados_form['telefone'] = $this->telefone;
    $this->nmgp_dados_form['pk_contrato'] = $this->pk_contrato;
    $this->nmgp_dados_form['latitude'] = $this->latitude;
    $this->nmgp_dados_form['longitude'] = $this->longitude;
    $this->nmgp_dados_form['senha_usuario'] = $this->senha_usuario;
    $this->nmgp_dados_form['ativo'] = $this->ativo;
    $this->nmgp_dados_form['rash'] = $this->rash;
    $this->nmgp_dados_form['activate_code'] = $this->activate_code;
    $this->nmgp_dados_form['activate_date'] = $this->activate_date;
    $this->nmgp_dados_form['retype_senha'] = $this->retype_senha;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_data($this->datacadastro, $this->field_config['datacadastro']['date_sep']) ; 
      nm_limpa_ciccnpj($this->cnpj) ; 
      nm_limpa_hora($this->seg_m_de, $this->field_config['seg_m_de']['time_sep']) ; 
      nm_limpa_hora($this->seg_m_ate, $this->field_config['seg_m_ate']['time_sep']) ; 
      nm_limpa_hora($this->seg_t_de, $this->field_config['seg_t_de']['time_sep']) ; 
      nm_limpa_hora($this->seg_t_ate, $this->field_config['seg_t_ate']['time_sep']) ; 
      nm_limpa_hora($this->ter_m_de, $this->field_config['ter_m_de']['time_sep']) ; 
      nm_limpa_hora($this->ter_m_ate, $this->field_config['ter_m_ate']['time_sep']) ; 
      nm_limpa_hora($this->ter_t_de, $this->field_config['ter_t_de']['time_sep']) ; 
      nm_limpa_hora($this->ter_t_ate, $this->field_config['ter_t_ate']['time_sep']) ; 
      nm_limpa_hora($this->qua_m_de, $this->field_config['qua_m_de']['time_sep']) ; 
      nm_limpa_hora($this->qua_m_ate, $this->field_config['qua_m_ate']['time_sep']) ; 
      nm_limpa_hora($this->qua_t_de, $this->field_config['qua_t_de']['time_sep']) ; 
      nm_limpa_hora($this->qua_t_ate, $this->field_config['qua_t_ate']['time_sep']) ; 
      nm_limpa_hora($this->qui_m_de, $this->field_config['qui_m_de']['time_sep']) ; 
      nm_limpa_hora($this->qui_m_ate, $this->field_config['qui_m_ate']['time_sep']) ; 
      nm_limpa_hora($this->qui_t_de, $this->field_config['qui_t_de']['time_sep']) ; 
      nm_limpa_hora($this->qui_t_ate, $this->field_config['qui_t_ate']['time_sep']) ; 
      nm_limpa_hora($this->sex_m_de, $this->field_config['sex_m_de']['time_sep']) ; 
      nm_limpa_hora($this->sex_m_ate, $this->field_config['sex_m_ate']['time_sep']) ; 
      nm_limpa_hora($this->sex_t_de, $this->field_config['sex_t_de']['time_sep']) ; 
      nm_limpa_hora($this->sex_t_ate, $this->field_config['sex_t_ate']['time_sep']) ; 
      nm_limpa_hora($this->sab_m_de, $this->field_config['sab_m_de']['time_sep']) ; 
      nm_limpa_hora($this->sab_m_ate, $this->field_config['sab_m_ate']['time_sep']) ; 
      nm_limpa_hora($this->sab_t_de, $this->field_config['sab_t_de']['time_sep']) ; 
      nm_limpa_hora($this->sab_t_ate, $this->field_config['sab_t_ate']['time_sep']) ; 
      nm_limpa_hora($this->dom_m_de, $this->field_config['dom_m_de']['time_sep']) ; 
      nm_limpa_hora($this->dom_m_ate, $this->field_config['dom_m_ate']['time_sep']) ; 
      nm_limpa_hora($this->dom_t_de, $this->field_config['dom_t_de']['time_sep']) ; 
      nm_limpa_hora($this->dom_t_ate, $this->field_config['dom_t_ate']['time_sep']) ; 
      nm_limpa_cep($this->cep) ; 
      $this->nm_tira_mask($this->telefone, "(99) 999999999", "(){}[].,;:-+/ "); 
      nm_limpa_numero($this->pk_contrato, $this->field_config['pk_contrato']['symbol_grp']) ; 
      nm_limpa_numero($this->ativo, $this->field_config['ativo']['symbol_grp']) ; 
      nm_limpa_data($this->activate_date, $this->field_config['activate_date']['date_sep']) ; 
      nm_limpa_hora($this->activate_date_hora, $this->field_config['activate_date']['time_sep']) ; 
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
      if ($Nome_Campo == "cnpj")
      {
          nm_limpa_ciccnpj($this->cnpj) ; 
      }
      if ($Nome_Campo == "cep")
      {
          nm_limpa_cep($this->cep) ; 
      }
      if ($Nome_Campo == "telefone")
      {
          $this->nm_tira_mask($this->telefone, "(99) 999999999", "(){}[].,;:-+/ "); 
      }
      if ($Nome_Campo == "pk_contrato")
      {
          nm_limpa_numero($this->pk_contrato, $this->field_config['pk_contrato']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "ativo")
      {
          nm_limpa_numero($this->ativo, $this->field_config['ativo']['symbol_grp']) ; 
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
      if ((!empty($this->datacadastro) && 'null' != $this->datacadastro) || (!empty($format_fields) && isset($format_fields['datacadastro'])))
      {
          nm_volta_data($this->datacadastro, $this->field_config['datacadastro']['date_format']) ; 
          nmgp_Form_Datas($this->datacadastro, $this->field_config['datacadastro']['date_format'], $this->field_config['datacadastro']['date_sep']) ;  
      }
      elseif ('null' == $this->datacadastro || '' == $this->datacadastro)
      {
          $this->datacadastro = '';
      }
      if (!empty($this->cnpj) || (!empty($format_fields) && isset($format_fields['cnpj'])))
      {
          nmgp_Form_CicCnpj($this->cnpj) ; 
      }
      if ((!empty($this->seg_m_de) && 'null' != $this->seg_m_de) || (!empty($format_fields) && isset($format_fields['seg_m_de'])))
      {
          nm_volta_hora($this->seg_m_de, $this->field_config['seg_m_de']['date_format']) ; 
          nmgp_Form_Hora($this->seg_m_de, $this->field_config['seg_m_de']['date_format'], $this->field_config['seg_m_de']['time_sep']) ;  
      }
      elseif ('null' == $this->seg_m_de || '' == $this->seg_m_de)
      {
          $this->seg_m_de = '';
      }
      if ((!empty($this->seg_m_ate) && 'null' != $this->seg_m_ate) || (!empty($format_fields) && isset($format_fields['seg_m_ate'])))
      {
          nm_volta_hora($this->seg_m_ate, $this->field_config['seg_m_ate']['date_format']) ; 
          nmgp_Form_Hora($this->seg_m_ate, $this->field_config['seg_m_ate']['date_format'], $this->field_config['seg_m_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->seg_m_ate || '' == $this->seg_m_ate)
      {
          $this->seg_m_ate = '';
      }
      if ((!empty($this->seg_t_de) && 'null' != $this->seg_t_de) || (!empty($format_fields) && isset($format_fields['seg_t_de'])))
      {
          nm_volta_hora($this->seg_t_de, $this->field_config['seg_t_de']['date_format']) ; 
          nmgp_Form_Hora($this->seg_t_de, $this->field_config['seg_t_de']['date_format'], $this->field_config['seg_t_de']['time_sep']) ;  
      }
      elseif ('null' == $this->seg_t_de || '' == $this->seg_t_de)
      {
          $this->seg_t_de = '';
      }
      if ((!empty($this->seg_t_ate) && 'null' != $this->seg_t_ate) || (!empty($format_fields) && isset($format_fields['seg_t_ate'])))
      {
          nm_volta_hora($this->seg_t_ate, $this->field_config['seg_t_ate']['date_format']) ; 
          nmgp_Form_Hora($this->seg_t_ate, $this->field_config['seg_t_ate']['date_format'], $this->field_config['seg_t_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->seg_t_ate || '' == $this->seg_t_ate)
      {
          $this->seg_t_ate = '';
      }
      if ((!empty($this->ter_m_de) && 'null' != $this->ter_m_de) || (!empty($format_fields) && isset($format_fields['ter_m_de'])))
      {
          nm_volta_hora($this->ter_m_de, $this->field_config['ter_m_de']['date_format']) ; 
          nmgp_Form_Hora($this->ter_m_de, $this->field_config['ter_m_de']['date_format'], $this->field_config['ter_m_de']['time_sep']) ;  
      }
      elseif ('null' == $this->ter_m_de || '' == $this->ter_m_de)
      {
          $this->ter_m_de = '';
      }
      if ((!empty($this->ter_m_ate) && 'null' != $this->ter_m_ate) || (!empty($format_fields) && isset($format_fields['ter_m_ate'])))
      {
          nm_volta_hora($this->ter_m_ate, $this->field_config['ter_m_ate']['date_format']) ; 
          nmgp_Form_Hora($this->ter_m_ate, $this->field_config['ter_m_ate']['date_format'], $this->field_config['ter_m_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->ter_m_ate || '' == $this->ter_m_ate)
      {
          $this->ter_m_ate = '';
      }
      if ((!empty($this->ter_t_de) && 'null' != $this->ter_t_de) || (!empty($format_fields) && isset($format_fields['ter_t_de'])))
      {
          nm_volta_hora($this->ter_t_de, $this->field_config['ter_t_de']['date_format']) ; 
          nmgp_Form_Hora($this->ter_t_de, $this->field_config['ter_t_de']['date_format'], $this->field_config['ter_t_de']['time_sep']) ;  
      }
      elseif ('null' == $this->ter_t_de || '' == $this->ter_t_de)
      {
          $this->ter_t_de = '';
      }
      if ((!empty($this->ter_t_ate) && 'null' != $this->ter_t_ate) || (!empty($format_fields) && isset($format_fields['ter_t_ate'])))
      {
          nm_volta_hora($this->ter_t_ate, $this->field_config['ter_t_ate']['date_format']) ; 
          nmgp_Form_Hora($this->ter_t_ate, $this->field_config['ter_t_ate']['date_format'], $this->field_config['ter_t_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->ter_t_ate || '' == $this->ter_t_ate)
      {
          $this->ter_t_ate = '';
      }
      if ((!empty($this->qua_m_de) && 'null' != $this->qua_m_de) || (!empty($format_fields) && isset($format_fields['qua_m_de'])))
      {
          nm_volta_hora($this->qua_m_de, $this->field_config['qua_m_de']['date_format']) ; 
          nmgp_Form_Hora($this->qua_m_de, $this->field_config['qua_m_de']['date_format'], $this->field_config['qua_m_de']['time_sep']) ;  
      }
      elseif ('null' == $this->qua_m_de || '' == $this->qua_m_de)
      {
          $this->qua_m_de = '';
      }
      if ((!empty($this->qua_m_ate) && 'null' != $this->qua_m_ate) || (!empty($format_fields) && isset($format_fields['qua_m_ate'])))
      {
          nm_volta_hora($this->qua_m_ate, $this->field_config['qua_m_ate']['date_format']) ; 
          nmgp_Form_Hora($this->qua_m_ate, $this->field_config['qua_m_ate']['date_format'], $this->field_config['qua_m_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->qua_m_ate || '' == $this->qua_m_ate)
      {
          $this->qua_m_ate = '';
      }
      if ((!empty($this->qua_t_de) && 'null' != $this->qua_t_de) || (!empty($format_fields) && isset($format_fields['qua_t_de'])))
      {
          nm_volta_hora($this->qua_t_de, $this->field_config['qua_t_de']['date_format']) ; 
          nmgp_Form_Hora($this->qua_t_de, $this->field_config['qua_t_de']['date_format'], $this->field_config['qua_t_de']['time_sep']) ;  
      }
      elseif ('null' == $this->qua_t_de || '' == $this->qua_t_de)
      {
          $this->qua_t_de = '';
      }
      if ((!empty($this->qua_t_ate) && 'null' != $this->qua_t_ate) || (!empty($format_fields) && isset($format_fields['qua_t_ate'])))
      {
          nm_volta_hora($this->qua_t_ate, $this->field_config['qua_t_ate']['date_format']) ; 
          nmgp_Form_Hora($this->qua_t_ate, $this->field_config['qua_t_ate']['date_format'], $this->field_config['qua_t_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->qua_t_ate || '' == $this->qua_t_ate)
      {
          $this->qua_t_ate = '';
      }
      if ((!empty($this->qui_m_de) && 'null' != $this->qui_m_de) || (!empty($format_fields) && isset($format_fields['qui_m_de'])))
      {
          nm_volta_hora($this->qui_m_de, $this->field_config['qui_m_de']['date_format']) ; 
          nmgp_Form_Hora($this->qui_m_de, $this->field_config['qui_m_de']['date_format'], $this->field_config['qui_m_de']['time_sep']) ;  
      }
      elseif ('null' == $this->qui_m_de || '' == $this->qui_m_de)
      {
          $this->qui_m_de = '';
      }
      if ((!empty($this->qui_m_ate) && 'null' != $this->qui_m_ate) || (!empty($format_fields) && isset($format_fields['qui_m_ate'])))
      {
          nm_volta_hora($this->qui_m_ate, $this->field_config['qui_m_ate']['date_format']) ; 
          nmgp_Form_Hora($this->qui_m_ate, $this->field_config['qui_m_ate']['date_format'], $this->field_config['qui_m_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->qui_m_ate || '' == $this->qui_m_ate)
      {
          $this->qui_m_ate = '';
      }
      if ((!empty($this->qui_t_de) && 'null' != $this->qui_t_de) || (!empty($format_fields) && isset($format_fields['qui_t_de'])))
      {
          nm_volta_hora($this->qui_t_de, $this->field_config['qui_t_de']['date_format']) ; 
          nmgp_Form_Hora($this->qui_t_de, $this->field_config['qui_t_de']['date_format'], $this->field_config['qui_t_de']['time_sep']) ;  
      }
      elseif ('null' == $this->qui_t_de || '' == $this->qui_t_de)
      {
          $this->qui_t_de = '';
      }
      if ((!empty($this->qui_t_ate) && 'null' != $this->qui_t_ate) || (!empty($format_fields) && isset($format_fields['qui_t_ate'])))
      {
          nm_volta_hora($this->qui_t_ate, $this->field_config['qui_t_ate']['date_format']) ; 
          nmgp_Form_Hora($this->qui_t_ate, $this->field_config['qui_t_ate']['date_format'], $this->field_config['qui_t_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->qui_t_ate || '' == $this->qui_t_ate)
      {
          $this->qui_t_ate = '';
      }
      if ((!empty($this->sex_m_de) && 'null' != $this->sex_m_de) || (!empty($format_fields) && isset($format_fields['sex_m_de'])))
      {
          nm_volta_hora($this->sex_m_de, $this->field_config['sex_m_de']['date_format']) ; 
          nmgp_Form_Hora($this->sex_m_de, $this->field_config['sex_m_de']['date_format'], $this->field_config['sex_m_de']['time_sep']) ;  
      }
      elseif ('null' == $this->sex_m_de || '' == $this->sex_m_de)
      {
          $this->sex_m_de = '';
      }
      if ((!empty($this->sex_m_ate) && 'null' != $this->sex_m_ate) || (!empty($format_fields) && isset($format_fields['sex_m_ate'])))
      {
          nm_volta_hora($this->sex_m_ate, $this->field_config['sex_m_ate']['date_format']) ; 
          nmgp_Form_Hora($this->sex_m_ate, $this->field_config['sex_m_ate']['date_format'], $this->field_config['sex_m_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->sex_m_ate || '' == $this->sex_m_ate)
      {
          $this->sex_m_ate = '';
      }
      if ((!empty($this->sex_t_de) && 'null' != $this->sex_t_de) || (!empty($format_fields) && isset($format_fields['sex_t_de'])))
      {
          nm_volta_hora($this->sex_t_de, $this->field_config['sex_t_de']['date_format']) ; 
          nmgp_Form_Hora($this->sex_t_de, $this->field_config['sex_t_de']['date_format'], $this->field_config['sex_t_de']['time_sep']) ;  
      }
      elseif ('null' == $this->sex_t_de || '' == $this->sex_t_de)
      {
          $this->sex_t_de = '';
      }
      if ((!empty($this->sex_t_ate) && 'null' != $this->sex_t_ate) || (!empty($format_fields) && isset($format_fields['sex_t_ate'])))
      {
          nm_volta_hora($this->sex_t_ate, $this->field_config['sex_t_ate']['date_format']) ; 
          nmgp_Form_Hora($this->sex_t_ate, $this->field_config['sex_t_ate']['date_format'], $this->field_config['sex_t_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->sex_t_ate || '' == $this->sex_t_ate)
      {
          $this->sex_t_ate = '';
      }
      if ((!empty($this->sab_m_de) && 'null' != $this->sab_m_de) || (!empty($format_fields) && isset($format_fields['sab_m_de'])))
      {
          nm_volta_hora($this->sab_m_de, $this->field_config['sab_m_de']['date_format']) ; 
          nmgp_Form_Hora($this->sab_m_de, $this->field_config['sab_m_de']['date_format'], $this->field_config['sab_m_de']['time_sep']) ;  
      }
      elseif ('null' == $this->sab_m_de || '' == $this->sab_m_de)
      {
          $this->sab_m_de = '';
      }
      if ((!empty($this->sab_m_ate) && 'null' != $this->sab_m_ate) || (!empty($format_fields) && isset($format_fields['sab_m_ate'])))
      {
          nm_volta_hora($this->sab_m_ate, $this->field_config['sab_m_ate']['date_format']) ; 
          nmgp_Form_Hora($this->sab_m_ate, $this->field_config['sab_m_ate']['date_format'], $this->field_config['sab_m_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->sab_m_ate || '' == $this->sab_m_ate)
      {
          $this->sab_m_ate = '';
      }
      if ((!empty($this->sab_t_de) && 'null' != $this->sab_t_de) || (!empty($format_fields) && isset($format_fields['sab_t_de'])))
      {
          nm_volta_hora($this->sab_t_de, $this->field_config['sab_t_de']['date_format']) ; 
          nmgp_Form_Hora($this->sab_t_de, $this->field_config['sab_t_de']['date_format'], $this->field_config['sab_t_de']['time_sep']) ;  
      }
      elseif ('null' == $this->sab_t_de || '' == $this->sab_t_de)
      {
          $this->sab_t_de = '';
      }
      if ((!empty($this->sab_t_ate) && 'null' != $this->sab_t_ate) || (!empty($format_fields) && isset($format_fields['sab_t_ate'])))
      {
          nm_volta_hora($this->sab_t_ate, $this->field_config['sab_t_ate']['date_format']) ; 
          nmgp_Form_Hora($this->sab_t_ate, $this->field_config['sab_t_ate']['date_format'], $this->field_config['sab_t_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->sab_t_ate || '' == $this->sab_t_ate)
      {
          $this->sab_t_ate = '';
      }
      if ((!empty($this->dom_m_de) && 'null' != $this->dom_m_de) || (!empty($format_fields) && isset($format_fields['dom_m_de'])))
      {
          nm_volta_hora($this->dom_m_de, $this->field_config['dom_m_de']['date_format']) ; 
          nmgp_Form_Hora($this->dom_m_de, $this->field_config['dom_m_de']['date_format'], $this->field_config['dom_m_de']['time_sep']) ;  
      }
      elseif ('null' == $this->dom_m_de || '' == $this->dom_m_de)
      {
          $this->dom_m_de = '';
      }
      if ((!empty($this->dom_m_ate) && 'null' != $this->dom_m_ate) || (!empty($format_fields) && isset($format_fields['dom_m_ate'])))
      {
          nm_volta_hora($this->dom_m_ate, $this->field_config['dom_m_ate']['date_format']) ; 
          nmgp_Form_Hora($this->dom_m_ate, $this->field_config['dom_m_ate']['date_format'], $this->field_config['dom_m_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->dom_m_ate || '' == $this->dom_m_ate)
      {
          $this->dom_m_ate = '';
      }
      if ((!empty($this->dom_t_de) && 'null' != $this->dom_t_de) || (!empty($format_fields) && isset($format_fields['dom_t_de'])))
      {
          nm_volta_hora($this->dom_t_de, $this->field_config['dom_t_de']['date_format']) ; 
          nmgp_Form_Hora($this->dom_t_de, $this->field_config['dom_t_de']['date_format'], $this->field_config['dom_t_de']['time_sep']) ;  
      }
      elseif ('null' == $this->dom_t_de || '' == $this->dom_t_de)
      {
          $this->dom_t_de = '';
      }
      if ((!empty($this->dom_t_ate) && 'null' != $this->dom_t_ate) || (!empty($format_fields) && isset($format_fields['dom_t_ate'])))
      {
          nm_volta_hora($this->dom_t_ate, $this->field_config['dom_t_ate']['date_format']) ; 
          nmgp_Form_Hora($this->dom_t_ate, $this->field_config['dom_t_ate']['date_format'], $this->field_config['dom_t_ate']['time_sep']) ;  
      }
      elseif ('null' == $this->dom_t_ate || '' == $this->dom_t_ate)
      {
          $this->dom_t_ate = '';
      }
      if (!empty($this->cep) || (!empty($format_fields) && isset($format_fields['cep'])))
      {
          nmgp_Form_Cep($this->cep) ; 
      }
      if (!empty($this->telefone) || (!empty($format_fields) && isset($format_fields['telefone'])))
      {
          $this->nm_gera_mask($this->telefone, "(99) 999999999"); 
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
      $guarda_format_hora = $this->field_config['datacadastro']['date_format'];
      if ($this->datacadastro != "")  
      { 
          nm_conv_data($this->datacadastro, $this->field_config['datacadastro']['date_format']) ; 
          $this->datacadastro_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->datacadastro_hora = substr($this->datacadastro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->datacadastro_hora = substr($this->datacadastro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->datacadastro_hora = substr($this->datacadastro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->datacadastro_hora = substr($this->datacadastro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->datacadastro_hora = substr($this->datacadastro_hora, 0, -4);
          }
      } 
      if ($this->datacadastro == "" && $use_null)  
      { 
          $this->datacadastro = "null" ; 
      } 
      $this->field_config['datacadastro']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['seg_m_de']['date_format'];
      if ($this->seg_m_de != "")  
      { 
          $this->seg_m_de_hora = $this->seg_m_de;
          $this->seg_m_de = "1900-01-01";
          nm_conv_hora($this->seg_m_de_hora, $this->field_config['seg_m_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->seg_m_de_hora = substr($this->seg_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->seg_m_de_hora = substr($this->seg_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->seg_m_de_hora = substr($this->seg_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->seg_m_de_hora = substr($this->seg_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->seg_m_de_hora = substr($this->seg_m_de_hora, 0, -4);
          }
          $this->seg_m_de = $this->seg_m_de_hora;
      } 
      if ($this->seg_m_de == "" && $use_null)  
      { 
          $this->seg_m_de = "null" ; 
      } 
      $this->field_config['seg_m_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['seg_m_ate']['date_format'];
      if ($this->seg_m_ate != "")  
      { 
          $this->seg_m_ate_hora = $this->seg_m_ate;
          $this->seg_m_ate = "1900-01-01";
          nm_conv_hora($this->seg_m_ate_hora, $this->field_config['seg_m_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->seg_m_ate_hora = substr($this->seg_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->seg_m_ate_hora = substr($this->seg_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->seg_m_ate_hora = substr($this->seg_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->seg_m_ate_hora = substr($this->seg_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->seg_m_ate_hora = substr($this->seg_m_ate_hora, 0, -4);
          }
          $this->seg_m_ate = $this->seg_m_ate_hora;
      } 
      if ($this->seg_m_ate == "" && $use_null)  
      { 
          $this->seg_m_ate = "null" ; 
      } 
      $this->field_config['seg_m_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['seg_t_de']['date_format'];
      if ($this->seg_t_de != "")  
      { 
          $this->seg_t_de_hora = $this->seg_t_de;
          $this->seg_t_de = "1900-01-01";
          nm_conv_hora($this->seg_t_de_hora, $this->field_config['seg_t_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->seg_t_de_hora = substr($this->seg_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->seg_t_de_hora = substr($this->seg_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->seg_t_de_hora = substr($this->seg_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->seg_t_de_hora = substr($this->seg_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->seg_t_de_hora = substr($this->seg_t_de_hora, 0, -4);
          }
          $this->seg_t_de = $this->seg_t_de_hora;
      } 
      if ($this->seg_t_de == "" && $use_null)  
      { 
          $this->seg_t_de = "null" ; 
      } 
      $this->field_config['seg_t_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['seg_t_ate']['date_format'];
      if ($this->seg_t_ate != "")  
      { 
          $this->seg_t_ate_hora = $this->seg_t_ate;
          $this->seg_t_ate = "1900-01-01";
          nm_conv_hora($this->seg_t_ate_hora, $this->field_config['seg_t_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->seg_t_ate_hora = substr($this->seg_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->seg_t_ate_hora = substr($this->seg_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->seg_t_ate_hora = substr($this->seg_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->seg_t_ate_hora = substr($this->seg_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->seg_t_ate_hora = substr($this->seg_t_ate_hora, 0, -4);
          }
          $this->seg_t_ate = $this->seg_t_ate_hora;
      } 
      if ($this->seg_t_ate == "" && $use_null)  
      { 
          $this->seg_t_ate = "null" ; 
      } 
      $this->field_config['seg_t_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['ter_m_de']['date_format'];
      if ($this->ter_m_de != "")  
      { 
          $this->ter_m_de_hora = $this->ter_m_de;
          $this->ter_m_de = "1900-01-01";
          nm_conv_hora($this->ter_m_de_hora, $this->field_config['ter_m_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->ter_m_de_hora = substr($this->ter_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->ter_m_de_hora = substr($this->ter_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->ter_m_de_hora = substr($this->ter_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->ter_m_de_hora = substr($this->ter_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->ter_m_de_hora = substr($this->ter_m_de_hora, 0, -4);
          }
          $this->ter_m_de = $this->ter_m_de_hora;
      } 
      if ($this->ter_m_de == "" && $use_null)  
      { 
          $this->ter_m_de = "null" ; 
      } 
      $this->field_config['ter_m_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['ter_m_ate']['date_format'];
      if ($this->ter_m_ate != "")  
      { 
          $this->ter_m_ate_hora = $this->ter_m_ate;
          $this->ter_m_ate = "1900-01-01";
          nm_conv_hora($this->ter_m_ate_hora, $this->field_config['ter_m_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->ter_m_ate_hora = substr($this->ter_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->ter_m_ate_hora = substr($this->ter_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->ter_m_ate_hora = substr($this->ter_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->ter_m_ate_hora = substr($this->ter_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->ter_m_ate_hora = substr($this->ter_m_ate_hora, 0, -4);
          }
          $this->ter_m_ate = $this->ter_m_ate_hora;
      } 
      if ($this->ter_m_ate == "" && $use_null)  
      { 
          $this->ter_m_ate = "null" ; 
      } 
      $this->field_config['ter_m_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['ter_t_de']['date_format'];
      if ($this->ter_t_de != "")  
      { 
          $this->ter_t_de_hora = $this->ter_t_de;
          $this->ter_t_de = "1900-01-01";
          nm_conv_hora($this->ter_t_de_hora, $this->field_config['ter_t_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->ter_t_de_hora = substr($this->ter_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->ter_t_de_hora = substr($this->ter_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->ter_t_de_hora = substr($this->ter_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->ter_t_de_hora = substr($this->ter_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->ter_t_de_hora = substr($this->ter_t_de_hora, 0, -4);
          }
          $this->ter_t_de = $this->ter_t_de_hora;
      } 
      if ($this->ter_t_de == "" && $use_null)  
      { 
          $this->ter_t_de = "null" ; 
      } 
      $this->field_config['ter_t_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['ter_t_ate']['date_format'];
      if ($this->ter_t_ate != "")  
      { 
          $this->ter_t_ate_hora = $this->ter_t_ate;
          $this->ter_t_ate = "1900-01-01";
          nm_conv_hora($this->ter_t_ate_hora, $this->field_config['ter_t_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->ter_t_ate_hora = substr($this->ter_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->ter_t_ate_hora = substr($this->ter_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->ter_t_ate_hora = substr($this->ter_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->ter_t_ate_hora = substr($this->ter_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->ter_t_ate_hora = substr($this->ter_t_ate_hora, 0, -4);
          }
          $this->ter_t_ate = $this->ter_t_ate_hora;
      } 
      if ($this->ter_t_ate == "" && $use_null)  
      { 
          $this->ter_t_ate = "null" ; 
      } 
      $this->field_config['ter_t_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['qua_m_de']['date_format'];
      if ($this->qua_m_de != "")  
      { 
          $this->qua_m_de_hora = $this->qua_m_de;
          $this->qua_m_de = "1900-01-01";
          nm_conv_hora($this->qua_m_de_hora, $this->field_config['qua_m_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->qua_m_de_hora = substr($this->qua_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->qua_m_de_hora = substr($this->qua_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->qua_m_de_hora = substr($this->qua_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->qua_m_de_hora = substr($this->qua_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->qua_m_de_hora = substr($this->qua_m_de_hora, 0, -4);
          }
          $this->qua_m_de = $this->qua_m_de_hora;
      } 
      if ($this->qua_m_de == "" && $use_null)  
      { 
          $this->qua_m_de = "null" ; 
      } 
      $this->field_config['qua_m_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['qua_m_ate']['date_format'];
      if ($this->qua_m_ate != "")  
      { 
          $this->qua_m_ate_hora = $this->qua_m_ate;
          $this->qua_m_ate = "1900-01-01";
          nm_conv_hora($this->qua_m_ate_hora, $this->field_config['qua_m_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->qua_m_ate_hora = substr($this->qua_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->qua_m_ate_hora = substr($this->qua_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->qua_m_ate_hora = substr($this->qua_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->qua_m_ate_hora = substr($this->qua_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->qua_m_ate_hora = substr($this->qua_m_ate_hora, 0, -4);
          }
          $this->qua_m_ate = $this->qua_m_ate_hora;
      } 
      if ($this->qua_m_ate == "" && $use_null)  
      { 
          $this->qua_m_ate = "null" ; 
      } 
      $this->field_config['qua_m_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['qua_t_de']['date_format'];
      if ($this->qua_t_de != "")  
      { 
          $this->qua_t_de_hora = $this->qua_t_de;
          $this->qua_t_de = "1900-01-01";
          nm_conv_hora($this->qua_t_de_hora, $this->field_config['qua_t_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->qua_t_de_hora = substr($this->qua_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->qua_t_de_hora = substr($this->qua_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->qua_t_de_hora = substr($this->qua_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->qua_t_de_hora = substr($this->qua_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->qua_t_de_hora = substr($this->qua_t_de_hora, 0, -4);
          }
          $this->qua_t_de = $this->qua_t_de_hora;
      } 
      if ($this->qua_t_de == "" && $use_null)  
      { 
          $this->qua_t_de = "null" ; 
      } 
      $this->field_config['qua_t_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['qua_t_ate']['date_format'];
      if ($this->qua_t_ate != "")  
      { 
          $this->qua_t_ate_hora = $this->qua_t_ate;
          $this->qua_t_ate = "1900-01-01";
          nm_conv_hora($this->qua_t_ate_hora, $this->field_config['qua_t_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->qua_t_ate_hora = substr($this->qua_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->qua_t_ate_hora = substr($this->qua_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->qua_t_ate_hora = substr($this->qua_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->qua_t_ate_hora = substr($this->qua_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->qua_t_ate_hora = substr($this->qua_t_ate_hora, 0, -4);
          }
          $this->qua_t_ate = $this->qua_t_ate_hora;
      } 
      if ($this->qua_t_ate == "" && $use_null)  
      { 
          $this->qua_t_ate = "null" ; 
      } 
      $this->field_config['qua_t_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['qui_m_de']['date_format'];
      if ($this->qui_m_de != "")  
      { 
          $this->qui_m_de_hora = $this->qui_m_de;
          $this->qui_m_de = "1900-01-01";
          nm_conv_hora($this->qui_m_de_hora, $this->field_config['qui_m_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->qui_m_de_hora = substr($this->qui_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->qui_m_de_hora = substr($this->qui_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->qui_m_de_hora = substr($this->qui_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->qui_m_de_hora = substr($this->qui_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->qui_m_de_hora = substr($this->qui_m_de_hora, 0, -4);
          }
          $this->qui_m_de = $this->qui_m_de_hora;
      } 
      if ($this->qui_m_de == "" && $use_null)  
      { 
          $this->qui_m_de = "null" ; 
      } 
      $this->field_config['qui_m_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['qui_m_ate']['date_format'];
      if ($this->qui_m_ate != "")  
      { 
          $this->qui_m_ate_hora = $this->qui_m_ate;
          $this->qui_m_ate = "1900-01-01";
          nm_conv_hora($this->qui_m_ate_hora, $this->field_config['qui_m_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->qui_m_ate_hora = substr($this->qui_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->qui_m_ate_hora = substr($this->qui_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->qui_m_ate_hora = substr($this->qui_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->qui_m_ate_hora = substr($this->qui_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->qui_m_ate_hora = substr($this->qui_m_ate_hora, 0, -4);
          }
          $this->qui_m_ate = $this->qui_m_ate_hora;
      } 
      if ($this->qui_m_ate == "" && $use_null)  
      { 
          $this->qui_m_ate = "null" ; 
      } 
      $this->field_config['qui_m_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['qui_t_de']['date_format'];
      if ($this->qui_t_de != "")  
      { 
          $this->qui_t_de_hora = $this->qui_t_de;
          $this->qui_t_de = "1900-01-01";
          nm_conv_hora($this->qui_t_de_hora, $this->field_config['qui_t_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->qui_t_de_hora = substr($this->qui_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->qui_t_de_hora = substr($this->qui_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->qui_t_de_hora = substr($this->qui_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->qui_t_de_hora = substr($this->qui_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->qui_t_de_hora = substr($this->qui_t_de_hora, 0, -4);
          }
          $this->qui_t_de = $this->qui_t_de_hora;
      } 
      if ($this->qui_t_de == "" && $use_null)  
      { 
          $this->qui_t_de = "null" ; 
      } 
      $this->field_config['qui_t_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['qui_t_ate']['date_format'];
      if ($this->qui_t_ate != "")  
      { 
          $this->qui_t_ate_hora = $this->qui_t_ate;
          $this->qui_t_ate = "1900-01-01";
          nm_conv_hora($this->qui_t_ate_hora, $this->field_config['qui_t_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->qui_t_ate_hora = substr($this->qui_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->qui_t_ate_hora = substr($this->qui_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->qui_t_ate_hora = substr($this->qui_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->qui_t_ate_hora = substr($this->qui_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->qui_t_ate_hora = substr($this->qui_t_ate_hora, 0, -4);
          }
          $this->qui_t_ate = $this->qui_t_ate_hora;
      } 
      if ($this->qui_t_ate == "" && $use_null)  
      { 
          $this->qui_t_ate = "null" ; 
      } 
      $this->field_config['qui_t_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['sex_m_de']['date_format'];
      if ($this->sex_m_de != "")  
      { 
          $this->sex_m_de_hora = $this->sex_m_de;
          $this->sex_m_de = "1900-01-01";
          nm_conv_hora($this->sex_m_de_hora, $this->field_config['sex_m_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->sex_m_de_hora = substr($this->sex_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->sex_m_de_hora = substr($this->sex_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->sex_m_de_hora = substr($this->sex_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->sex_m_de_hora = substr($this->sex_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->sex_m_de_hora = substr($this->sex_m_de_hora, 0, -4);
          }
          $this->sex_m_de = $this->sex_m_de_hora;
      } 
      if ($this->sex_m_de == "" && $use_null)  
      { 
          $this->sex_m_de = "null" ; 
      } 
      $this->field_config['sex_m_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['sex_m_ate']['date_format'];
      if ($this->sex_m_ate != "")  
      { 
          $this->sex_m_ate_hora = $this->sex_m_ate;
          $this->sex_m_ate = "1900-01-01";
          nm_conv_hora($this->sex_m_ate_hora, $this->field_config['sex_m_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->sex_m_ate_hora = substr($this->sex_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->sex_m_ate_hora = substr($this->sex_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->sex_m_ate_hora = substr($this->sex_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->sex_m_ate_hora = substr($this->sex_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->sex_m_ate_hora = substr($this->sex_m_ate_hora, 0, -4);
          }
          $this->sex_m_ate = $this->sex_m_ate_hora;
      } 
      if ($this->sex_m_ate == "" && $use_null)  
      { 
          $this->sex_m_ate = "null" ; 
      } 
      $this->field_config['sex_m_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['sex_t_de']['date_format'];
      if ($this->sex_t_de != "")  
      { 
          $this->sex_t_de_hora = $this->sex_t_de;
          $this->sex_t_de = "1900-01-01";
          nm_conv_hora($this->sex_t_de_hora, $this->field_config['sex_t_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->sex_t_de_hora = substr($this->sex_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->sex_t_de_hora = substr($this->sex_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->sex_t_de_hora = substr($this->sex_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->sex_t_de_hora = substr($this->sex_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->sex_t_de_hora = substr($this->sex_t_de_hora, 0, -4);
          }
          $this->sex_t_de = $this->sex_t_de_hora;
      } 
      if ($this->sex_t_de == "" && $use_null)  
      { 
          $this->sex_t_de = "null" ; 
      } 
      $this->field_config['sex_t_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['sex_t_ate']['date_format'];
      if ($this->sex_t_ate != "")  
      { 
          $this->sex_t_ate_hora = $this->sex_t_ate;
          $this->sex_t_ate = "1900-01-01";
          nm_conv_hora($this->sex_t_ate_hora, $this->field_config['sex_t_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->sex_t_ate_hora = substr($this->sex_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->sex_t_ate_hora = substr($this->sex_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->sex_t_ate_hora = substr($this->sex_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->sex_t_ate_hora = substr($this->sex_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->sex_t_ate_hora = substr($this->sex_t_ate_hora, 0, -4);
          }
          $this->sex_t_ate = $this->sex_t_ate_hora;
      } 
      if ($this->sex_t_ate == "" && $use_null)  
      { 
          $this->sex_t_ate = "null" ; 
      } 
      $this->field_config['sex_t_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['sab_m_de']['date_format'];
      if ($this->sab_m_de != "")  
      { 
          $this->sab_m_de_hora = $this->sab_m_de;
          $this->sab_m_de = "1900-01-01";
          nm_conv_hora($this->sab_m_de_hora, $this->field_config['sab_m_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->sab_m_de_hora = substr($this->sab_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->sab_m_de_hora = substr($this->sab_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->sab_m_de_hora = substr($this->sab_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->sab_m_de_hora = substr($this->sab_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->sab_m_de_hora = substr($this->sab_m_de_hora, 0, -4);
          }
          $this->sab_m_de = $this->sab_m_de_hora;
      } 
      if ($this->sab_m_de == "" && $use_null)  
      { 
          $this->sab_m_de = "null" ; 
      } 
      $this->field_config['sab_m_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['sab_m_ate']['date_format'];
      if ($this->sab_m_ate != "")  
      { 
          $this->sab_m_ate_hora = $this->sab_m_ate;
          $this->sab_m_ate = "1900-01-01";
          nm_conv_hora($this->sab_m_ate_hora, $this->field_config['sab_m_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->sab_m_ate_hora = substr($this->sab_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->sab_m_ate_hora = substr($this->sab_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->sab_m_ate_hora = substr($this->sab_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->sab_m_ate_hora = substr($this->sab_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->sab_m_ate_hora = substr($this->sab_m_ate_hora, 0, -4);
          }
          $this->sab_m_ate = $this->sab_m_ate_hora;
      } 
      if ($this->sab_m_ate == "" && $use_null)  
      { 
          $this->sab_m_ate = "null" ; 
      } 
      $this->field_config['sab_m_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['sab_t_de']['date_format'];
      if ($this->sab_t_de != "")  
      { 
          $this->sab_t_de_hora = $this->sab_t_de;
          $this->sab_t_de = "1900-01-01";
          nm_conv_hora($this->sab_t_de_hora, $this->field_config['sab_t_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->sab_t_de_hora = substr($this->sab_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->sab_t_de_hora = substr($this->sab_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->sab_t_de_hora = substr($this->sab_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->sab_t_de_hora = substr($this->sab_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->sab_t_de_hora = substr($this->sab_t_de_hora, 0, -4);
          }
          $this->sab_t_de = $this->sab_t_de_hora;
      } 
      if ($this->sab_t_de == "" && $use_null)  
      { 
          $this->sab_t_de = "null" ; 
      } 
      $this->field_config['sab_t_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['sab_t_ate']['date_format'];
      if ($this->sab_t_ate != "")  
      { 
          $this->sab_t_ate_hora = $this->sab_t_ate;
          $this->sab_t_ate = "1900-01-01";
          nm_conv_hora($this->sab_t_ate_hora, $this->field_config['sab_t_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->sab_t_ate_hora = substr($this->sab_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->sab_t_ate_hora = substr($this->sab_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->sab_t_ate_hora = substr($this->sab_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->sab_t_ate_hora = substr($this->sab_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->sab_t_ate_hora = substr($this->sab_t_ate_hora, 0, -4);
          }
          $this->sab_t_ate = $this->sab_t_ate_hora;
      } 
      if ($this->sab_t_ate == "" && $use_null)  
      { 
          $this->sab_t_ate = "null" ; 
      } 
      $this->field_config['sab_t_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['dom_m_de']['date_format'];
      if ($this->dom_m_de != "")  
      { 
          $this->dom_m_de_hora = $this->dom_m_de;
          $this->dom_m_de = "1900-01-01";
          nm_conv_hora($this->dom_m_de_hora, $this->field_config['dom_m_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->dom_m_de_hora = substr($this->dom_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dom_m_de_hora = substr($this->dom_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->dom_m_de_hora = substr($this->dom_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->dom_m_de_hora = substr($this->dom_m_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->dom_m_de_hora = substr($this->dom_m_de_hora, 0, -4);
          }
          $this->dom_m_de = $this->dom_m_de_hora;
      } 
      if ($this->dom_m_de == "" && $use_null)  
      { 
          $this->dom_m_de = "null" ; 
      } 
      $this->field_config['dom_m_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['dom_m_ate']['date_format'];
      if ($this->dom_m_ate != "")  
      { 
          $this->dom_m_ate_hora = $this->dom_m_ate;
          $this->dom_m_ate = "1900-01-01";
          nm_conv_hora($this->dom_m_ate_hora, $this->field_config['dom_m_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->dom_m_ate_hora = substr($this->dom_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dom_m_ate_hora = substr($this->dom_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->dom_m_ate_hora = substr($this->dom_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->dom_m_ate_hora = substr($this->dom_m_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->dom_m_ate_hora = substr($this->dom_m_ate_hora, 0, -4);
          }
          $this->dom_m_ate = $this->dom_m_ate_hora;
      } 
      if ($this->dom_m_ate == "" && $use_null)  
      { 
          $this->dom_m_ate = "null" ; 
      } 
      $this->field_config['dom_m_ate']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['dom_t_de']['date_format'];
      if ($this->dom_t_de != "")  
      { 
          $this->dom_t_de_hora = $this->dom_t_de;
          $this->dom_t_de = "1900-01-01";
          nm_conv_hora($this->dom_t_de_hora, $this->field_config['dom_t_de']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->dom_t_de_hora = substr($this->dom_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dom_t_de_hora = substr($this->dom_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->dom_t_de_hora = substr($this->dom_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->dom_t_de_hora = substr($this->dom_t_de_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->dom_t_de_hora = substr($this->dom_t_de_hora, 0, -4);
          }
          $this->dom_t_de = $this->dom_t_de_hora;
      } 
      if ($this->dom_t_de == "" && $use_null)  
      { 
          $this->dom_t_de = "null" ; 
      } 
      $this->field_config['dom_t_de']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['dom_t_ate']['date_format'];
      if ($this->dom_t_ate != "")  
      { 
          $this->dom_t_ate_hora = $this->dom_t_ate;
          $this->dom_t_ate = "1900-01-01";
          nm_conv_hora($this->dom_t_ate_hora, $this->field_config['dom_t_ate']['date_format']) ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->dom_t_ate_hora = substr($this->dom_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dom_t_ate_hora = substr($this->dom_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->dom_t_ate_hora = substr($this->dom_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->dom_t_ate_hora = substr($this->dom_t_ate_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->dom_t_ate_hora = substr($this->dom_t_ate_hora, 0, -4);
          }
          $this->dom_t_ate = $this->dom_t_ate_hora;
      } 
      if ($this->dom_t_ate == "" && $use_null)  
      { 
          $this->dom_t_ate = "null" ; 
      } 
      $this->field_config['dom_t_ate']['date_format'] = $guarda_format_hora;
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
          $this->ajax_return_values_datacadastro();
          $this->ajax_return_values_cnpj();
          $this->ajax_return_values_inscricao();
          $this->ajax_return_values_fk_classificacao();
          $this->ajax_return_values_razao();
          $this->ajax_return_values_fantasia();
          $this->ajax_return_values_seg_m_de();
          $this->ajax_return_values_seg_m_ate();
          $this->ajax_return_values_seg_t_de();
          $this->ajax_return_values_seg_t_ate();
          $this->ajax_return_values_ter_m_de();
          $this->ajax_return_values_ter_m_ate();
          $this->ajax_return_values_ter_t_de();
          $this->ajax_return_values_ter_t_ate();
          $this->ajax_return_values_qua_m_de();
          $this->ajax_return_values_qua_m_ate();
          $this->ajax_return_values_qua_t_de();
          $this->ajax_return_values_qua_t_ate();
          $this->ajax_return_values_qui_m_de();
          $this->ajax_return_values_qui_m_ate();
          $this->ajax_return_values_qui_t_de();
          $this->ajax_return_values_qui_t_ate();
          $this->ajax_return_values_sex_m_de();
          $this->ajax_return_values_sex_m_ate();
          $this->ajax_return_values_sex_t_de();
          $this->ajax_return_values_sex_t_ate();
          $this->ajax_return_values_sab_m_de();
          $this->ajax_return_values_sab_m_ate();
          $this->ajax_return_values_sab_t_de();
          $this->ajax_return_values_sab_t_ate();
          $this->ajax_return_values_dom_m_de();
          $this->ajax_return_values_dom_m_ate();
          $this->ajax_return_values_dom_t_de();
          $this->ajax_return_values_dom_t_ate();
          $this->ajax_return_values_txtmensagem();
          $this->ajax_return_values_email();
          $this->ajax_return_values_retype_email();
          $this->ajax_return_values_cep();
          $this->ajax_return_values_cidade();
          $this->ajax_return_values_estado();
          $this->ajax_return_values_bairro();
          $this->ajax_return_values_rua();
          $this->ajax_return_values_complemento();
          $this->ajax_return_values_numero();
          $this->ajax_return_values_fachada();
          $this->ajax_return_values_nome_contato();
          $this->ajax_return_values_telefone();
          $this->ajax_return_values_pk_contrato();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['pk_contrato']['keyVal'] = form_ap_contrato_updt_xxx_mob_pack_protect_string($this->nmgp_dados_form['pk_contrato']);
          }
   } // ajax_return_values

          //----- datacadastro
   function ajax_return_values_datacadastro($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("datacadastro", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->datacadastro);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['datacadastro'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- cnpj
   function ajax_return_values_cnpj($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cnpj", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cnpj);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cnpj'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- inscricao
   function ajax_return_values_inscricao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("inscricao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->inscricao);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['inscricao'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fk_classificacao
   function ajax_return_values_fk_classificacao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fk_classificacao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fk_classificacao);
              $aLookup = array();
              $this->_tmp_lookup_fk_classificacao = $this->fk_classificacao;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao'] = array(); 
}
$aLookup[] = array(form_ap_contrato_updt_xxx_mob_pack_protect_string('') => form_ap_contrato_updt_xxx_mob_pack_protect_string('SELECIONE'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_datacadastro = $this->datacadastro;
   $old_value_cnpj = $this->cnpj;
   $old_value_seg_m_de = $this->seg_m_de;
   $old_value_seg_m_ate = $this->seg_m_ate;
   $old_value_seg_t_de = $this->seg_t_de;
   $old_value_seg_t_ate = $this->seg_t_ate;
   $old_value_ter_m_de = $this->ter_m_de;
   $old_value_ter_m_ate = $this->ter_m_ate;
   $old_value_ter_t_de = $this->ter_t_de;
   $old_value_ter_t_ate = $this->ter_t_ate;
   $old_value_qua_m_de = $this->qua_m_de;
   $old_value_qua_m_ate = $this->qua_m_ate;
   $old_value_qua_t_de = $this->qua_t_de;
   $old_value_qua_t_ate = $this->qua_t_ate;
   $old_value_qui_m_de = $this->qui_m_de;
   $old_value_qui_m_ate = $this->qui_m_ate;
   $old_value_qui_t_de = $this->qui_t_de;
   $old_value_qui_t_ate = $this->qui_t_ate;
   $old_value_sex_m_de = $this->sex_m_de;
   $old_value_sex_m_ate = $this->sex_m_ate;
   $old_value_sex_t_de = $this->sex_t_de;
   $old_value_sex_t_ate = $this->sex_t_ate;
   $old_value_sab_m_de = $this->sab_m_de;
   $old_value_sab_m_ate = $this->sab_m_ate;
   $old_value_sab_t_de = $this->sab_t_de;
   $old_value_sab_t_ate = $this->sab_t_ate;
   $old_value_dom_m_de = $this->dom_m_de;
   $old_value_dom_m_ate = $this->dom_m_ate;
   $old_value_dom_t_de = $this->dom_t_de;
   $old_value_dom_t_ate = $this->dom_t_ate;
   $old_value_cep = $this->cep;
   $old_value_telefone = $this->telefone;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_datacadastro = $this->datacadastro;
   $unformatted_value_cnpj = $this->cnpj;
   $unformatted_value_seg_m_de = $this->seg_m_de;
   $unformatted_value_seg_m_ate = $this->seg_m_ate;
   $unformatted_value_seg_t_de = $this->seg_t_de;
   $unformatted_value_seg_t_ate = $this->seg_t_ate;
   $unformatted_value_ter_m_de = $this->ter_m_de;
   $unformatted_value_ter_m_ate = $this->ter_m_ate;
   $unformatted_value_ter_t_de = $this->ter_t_de;
   $unformatted_value_ter_t_ate = $this->ter_t_ate;
   $unformatted_value_qua_m_de = $this->qua_m_de;
   $unformatted_value_qua_m_ate = $this->qua_m_ate;
   $unformatted_value_qua_t_de = $this->qua_t_de;
   $unformatted_value_qua_t_ate = $this->qua_t_ate;
   $unformatted_value_qui_m_de = $this->qui_m_de;
   $unformatted_value_qui_m_ate = $this->qui_m_ate;
   $unformatted_value_qui_t_de = $this->qui_t_de;
   $unformatted_value_qui_t_ate = $this->qui_t_ate;
   $unformatted_value_sex_m_de = $this->sex_m_de;
   $unformatted_value_sex_m_ate = $this->sex_m_ate;
   $unformatted_value_sex_t_de = $this->sex_t_de;
   $unformatted_value_sex_t_ate = $this->sex_t_ate;
   $unformatted_value_sab_m_de = $this->sab_m_de;
   $unformatted_value_sab_m_ate = $this->sab_m_ate;
   $unformatted_value_sab_t_de = $this->sab_t_de;
   $unformatted_value_sab_t_ate = $this->sab_t_ate;
   $unformatted_value_dom_m_de = $this->dom_m_de;
   $unformatted_value_dom_m_ate = $this->dom_m_ate;
   $unformatted_value_dom_t_de = $this->dom_t_de;
   $unformatted_value_dom_t_ate = $this->dom_t_ate;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_telefone = $this->telefone;

   $nm_comando = "SELECT pk_classificacao, descricao  FROM ap_classificacao  ORDER BY descricao";

   $this->datacadastro = $old_value_datacadastro;
   $this->cnpj = $old_value_cnpj;
   $this->seg_m_de = $old_value_seg_m_de;
   $this->seg_m_ate = $old_value_seg_m_ate;
   $this->seg_t_de = $old_value_seg_t_de;
   $this->seg_t_ate = $old_value_seg_t_ate;
   $this->ter_m_de = $old_value_ter_m_de;
   $this->ter_m_ate = $old_value_ter_m_ate;
   $this->ter_t_de = $old_value_ter_t_de;
   $this->ter_t_ate = $old_value_ter_t_ate;
   $this->qua_m_de = $old_value_qua_m_de;
   $this->qua_m_ate = $old_value_qua_m_ate;
   $this->qua_t_de = $old_value_qua_t_de;
   $this->qua_t_ate = $old_value_qua_t_ate;
   $this->qui_m_de = $old_value_qui_m_de;
   $this->qui_m_ate = $old_value_qui_m_ate;
   $this->qui_t_de = $old_value_qui_t_de;
   $this->qui_t_ate = $old_value_qui_t_ate;
   $this->sex_m_de = $old_value_sex_m_de;
   $this->sex_m_ate = $old_value_sex_m_ate;
   $this->sex_t_de = $old_value_sex_t_de;
   $this->sex_t_ate = $old_value_sex_t_ate;
   $this->sab_m_de = $old_value_sab_m_de;
   $this->sab_m_ate = $old_value_sab_m_ate;
   $this->sab_t_de = $old_value_sab_t_de;
   $this->sab_t_ate = $old_value_sab_t_ate;
   $this->dom_m_de = $old_value_dom_m_de;
   $this->dom_m_ate = $old_value_dom_m_ate;
   $this->dom_t_de = $old_value_dom_t_de;
   $this->dom_t_ate = $old_value_dom_t_ate;
   $this->cep = $old_value_cep;
   $this->telefone = $old_value_telefone;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_ap_contrato_updt_xxx_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_ap_contrato_updt_xxx_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fk_classificacao\"";
          if (isset($this->NM_ajax_info['select_html']['fk_classificacao']) && !empty($this->NM_ajax_info['select_html']['fk_classificacao']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['fk_classificacao'];
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

                  if ($this->fk_classificacao == $sValue)
                  {
                      $this->_tmp_lookup_fk_classificacao = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fk_classificacao'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fk_classificacao']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fk_classificacao']['valList'][$i] = form_ap_contrato_updt_xxx_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fk_classificacao']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fk_classificacao']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fk_classificacao']['labList'] = $aLabel;
          }
   }

          //----- razao
   function ajax_return_values_razao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("razao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->razao);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['razao'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fantasia
   function ajax_return_values_fantasia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fantasia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fantasia);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fantasia'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- seg_m_de
   function ajax_return_values_seg_m_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("seg_m_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->seg_m_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['seg_m_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- seg_m_ate
   function ajax_return_values_seg_m_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("seg_m_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->seg_m_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['seg_m_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- seg_t_de
   function ajax_return_values_seg_t_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("seg_t_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->seg_t_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['seg_t_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- seg_t_ate
   function ajax_return_values_seg_t_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("seg_t_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->seg_t_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['seg_t_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- ter_m_de
   function ajax_return_values_ter_m_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ter_m_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ter_m_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ter_m_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- ter_m_ate
   function ajax_return_values_ter_m_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ter_m_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ter_m_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ter_m_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- ter_t_de
   function ajax_return_values_ter_t_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ter_t_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ter_t_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ter_t_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- ter_t_ate
   function ajax_return_values_ter_t_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ter_t_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ter_t_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ter_t_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- qua_m_de
   function ajax_return_values_qua_m_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("qua_m_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->qua_m_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['qua_m_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- qua_m_ate
   function ajax_return_values_qua_m_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("qua_m_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->qua_m_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['qua_m_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- qua_t_de
   function ajax_return_values_qua_t_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("qua_t_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->qua_t_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['qua_t_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- qua_t_ate
   function ajax_return_values_qua_t_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("qua_t_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->qua_t_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['qua_t_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- qui_m_de
   function ajax_return_values_qui_m_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("qui_m_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->qui_m_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['qui_m_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- qui_m_ate
   function ajax_return_values_qui_m_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("qui_m_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->qui_m_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['qui_m_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- qui_t_de
   function ajax_return_values_qui_t_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("qui_t_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->qui_t_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['qui_t_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- qui_t_ate
   function ajax_return_values_qui_t_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("qui_t_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->qui_t_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['qui_t_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- sex_m_de
   function ajax_return_values_sex_m_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sex_m_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sex_m_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['sex_m_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- sex_m_ate
   function ajax_return_values_sex_m_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sex_m_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sex_m_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['sex_m_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- sex_t_de
   function ajax_return_values_sex_t_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sex_t_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sex_t_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['sex_t_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- sex_t_ate
   function ajax_return_values_sex_t_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sex_t_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sex_t_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['sex_t_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- sab_m_de
   function ajax_return_values_sab_m_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sab_m_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sab_m_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['sab_m_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- sab_m_ate
   function ajax_return_values_sab_m_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sab_m_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sab_m_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['sab_m_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- sab_t_de
   function ajax_return_values_sab_t_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sab_t_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sab_t_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['sab_t_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- sab_t_ate
   function ajax_return_values_sab_t_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sab_t_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sab_t_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['sab_t_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- dom_m_de
   function ajax_return_values_dom_m_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dom_m_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dom_m_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dom_m_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- dom_m_ate
   function ajax_return_values_dom_m_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dom_m_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dom_m_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dom_m_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- dom_t_de
   function ajax_return_values_dom_t_de($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dom_t_de", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dom_t_de);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dom_t_de'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- dom_t_ate
   function ajax_return_values_dom_t_ate($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dom_t_ate", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dom_t_ate);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dom_t_ate'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- txtmensagem
   function ajax_return_values_txtmensagem($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("txtmensagem", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->txtmensagem);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['txtmensagem'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- email
   function ajax_return_values_email($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("email", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->email);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['email'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- retype_email
   function ajax_return_values_retype_email($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("retype_email", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->retype_email);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['retype_email'] = array(
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

          //----- fachada
   function ajax_return_values_fachada($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fachada", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fachada);
              $aLookup = array();
   $out_fachada = '';
   $out1_fachada = '';
   if ($this->fachada != "" && $this->fachada != "none")   
   { 
       $path_fachada = $this->Ini->root . $this->Ini->path_imagens . "" . $_SESSION['pastacliente'] . "/" . $this->fachada;
       $md5_fachada  = md5("" . $_SESSION['pastacliente'] . $this->fachada);
       if (is_file($path_fachada))  
       { 
           $NM_ler_img = true;
           $out_fachada = $this->Ini->path_imag_temp . "/sc_fachada_" . $md5_fachada . ".gif" ;  
           $out1_fachada = $out_fachada; 
           if (is_file($this->Ini->root . $out_fachada))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_fachada) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_fachada = fopen($path_fachada, "r") ; 
               $reg_fachada = fread($tmp_fachada, filesize($path_fachada)) ; 
               fclose($tmp_fachada) ;  
               $arq_fachada = fopen($this->Ini->root . $out_fachada, "w") ;  
               fwrite($arq_fachada, $reg_fachada) ;  
               fclose($arq_fachada) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fachada);
           $this->nmgp_return_img['fachada'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['fachada'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $md5_fachada  = md5($this->fachada);
           $out_fachada = $this->Ini->path_imag_temp . "/sc_fachada_250250" . $md5_fachada . ".gif" ;  
           if (is_file($this->Ini->root . $out_fachada))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_fachada) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_fachada);
                   $sc_obj_img->setWidth(250);
                   $sc_obj_img->setHeight(250);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_fachada);
               } 
               else 
               { 
                   $out_fachada = $out1_fachada;
               } 
           } 
       } 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fachada'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($sTmpValue),
               'imgFile' => $out_fachada,
               'imgOrig' => $out1_fachada,
               'keepImg' => $sKeepImage,
               'hideName' => 'S',
              );
          }
   }

          //----- nome_contato
   function ajax_return_values_nome_contato($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nome_contato", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nome_contato);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nome_contato'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- telefone
   function ajax_return_values_telefone($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("telefone", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->telefone);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['telefone'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- pk_contrato
   function ajax_return_values_pk_contrato($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pk_contrato", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pk_contrato);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pk_contrato'] = array(
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['upload_dir'][$fieldName][] = $newName;
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
      $_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_cnpj = $this->cnpj;
    $original_dom_m_ate = $this->dom_m_ate;
    $original_dom_m_de = $this->dom_m_de;
    $original_dom_t_ate = $this->dom_t_ate;
    $original_dom_t_de = $this->dom_t_de;
    $original_email = $this->email;
    $original_fachada = $this->fachada;
    $original_fk_classificacao = $this->fk_classificacao;
    $original_qua_m_ate = $this->qua_m_ate;
    $original_qua_m_de = $this->qua_m_de;
    $original_qua_t_ate = $this->qua_t_ate;
    $original_qua_t_de = $this->qua_t_de;
    $original_qui_m_ate = $this->qui_m_ate;
    $original_qui_m_de = $this->qui_m_de;
    $original_qui_t_ate = $this->qui_t_ate;
    $original_qui_t_de = $this->qui_t_de;
    $original_retype_email = $this->retype_email;
    $original_sab_m_ate = $this->sab_m_ate;
    $original_sab_m_de = $this->sab_m_de;
    $original_sab_t_ate = $this->sab_t_ate;
    $original_sab_t_de = $this->sab_t_de;
    $original_seg_m_ate = $this->seg_m_ate;
    $original_seg_m_de = $this->seg_m_de;
    $original_seg_t_ate = $this->seg_t_ate;
    $original_seg_t_de = $this->seg_t_de;
    $original_sex_m_ate = $this->sex_m_ate;
    $original_sex_m_de = $this->sex_m_de;
    $original_sex_t_ate = $this->sex_t_ate;
    $original_sex_t_de = $this->sex_t_de;
    $original_ter_m_ate = $this->ter_m_ate;
    $original_ter_m_de = $this->ter_m_de;
    $original_ter_t_ate = $this->ter_t_ate;
    $original_ter_t_de = $this->ter_t_de;
}
if (!isset($this->sc_temp_pastacliente)) {$this->sc_temp_pastacliente = (isset($_SESSION['pastacliente'])) ? $_SESSION['pastacliente'] : "";}
             $this->retype_email  = $this->email ;

if( $this->fachada  == null )
	{
		$this->fachada  = 'no_foto.png';
		$this->sc_temp_pastacliente = '/noimagem/';
	}
    else
    {
		$this->sc_temp_pastacliente = '/imagempub/'. $this->cnpj ;
	}

	
	$this->nmgp_cmp_hidden["txtmensagem"] = "off"; $this->NM_ajax_info['fieldDisplay']['txtmensagem'] = 'off';




if ( $this->fk_classificacao  == "7" )
	{
	
	   
		$this->nmgp_cmp_hidden["txtmensagem"] = "on"; $this->NM_ajax_info['fieldDisplay']['txtmensagem'] = 'on';
	
		$this->nmgp_cmp_hidden["seg_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['seg_m_de'] = 'off';
		$this->nmgp_cmp_hidden["seg_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['seg_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["seg_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['seg_t_de'] = 'off';
		$this->nmgp_cmp_hidden["seg_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['seg_t_ate'] = 'off';

		$this->nmgp_cmp_hidden["ter_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['ter_m_de'] = 'off';
		$this->nmgp_cmp_hidden["ter_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['ter_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["ter_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['ter_t_de'] = 'off';
		$this->nmgp_cmp_hidden["ter_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['ter_t_ate'] = 'off';

		$this->nmgp_cmp_hidden["qua_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['qua_m_de'] = 'off';
		$this->nmgp_cmp_hidden["qua_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['qua_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["qua_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['qua_t_de'] = 'off';
		$this->nmgp_cmp_hidden["qua_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['qua_t_ate'] = 'off';

		$this->nmgp_cmp_hidden["qui_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['qui_m_de'] = 'off';
		$this->nmgp_cmp_hidden["qui_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['qui_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["qui_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['qui_t_de'] = 'off';
		$this->nmgp_cmp_hidden["qui_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['qui_t_ate'] = 'off';

		$this->nmgp_cmp_hidden["sex_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['sex_m_de'] = 'off';
		$this->nmgp_cmp_hidden["sex_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['sex_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["sex_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['sex_t_de'] = 'off';
		$this->nmgp_cmp_hidden["sex_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['sex_t_ate'] = 'off';

		$this->nmgp_cmp_hidden["sab_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['sab_m_de'] = 'off';
		$this->nmgp_cmp_hidden["sab_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['sab_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["sab_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['sab_t_de'] = 'off';
		$this->nmgp_cmp_hidden["sab_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['sab_t_ate'] = 'off';

		$this->nmgp_cmp_hidden["dom_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['dom_m_de'] = 'off';
		$this->nmgp_cmp_hidden["dom_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['dom_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["dom_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['dom_t_de'] = 'off';
		$this->nmgp_cmp_hidden["dom_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['dom_t_ate'] = 'off';
 	}
	 else
	{
		$this->nmgp_cmp_hidden["txtmensagem"] = "off"; $this->NM_ajax_info['fieldDisplay']['txtmensagem'] = 'off';
		 
		$this->nmgp_cmp_hidden["seg_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['seg_m_de'] = 'on';
		$this->nmgp_cmp_hidden["seg_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['seg_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["seg_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['seg_t_de'] = 'on';
		$this->nmgp_cmp_hidden["seg_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['seg_t_ate'] = 'on';

		$this->nmgp_cmp_hidden["ter_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['ter_m_de'] = 'on';
		$this->nmgp_cmp_hidden["ter_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['ter_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["ter_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['ter_t_de'] = 'on';
		$this->nmgp_cmp_hidden["ter_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['ter_t_ate'] = 'on';

		$this->nmgp_cmp_hidden["qua_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['qua_m_de'] = 'on';
		$this->nmgp_cmp_hidden["qua_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['qua_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["qua_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['qua_t_de'] = 'on';
		$this->nmgp_cmp_hidden["qua_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['qua_t_ate'] = 'on';

		$this->nmgp_cmp_hidden["qui_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['qui_m_de'] = 'on';
		$this->nmgp_cmp_hidden["qui_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['qui_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["qui_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['qui_t_de'] = 'on';
		$this->nmgp_cmp_hidden["qui_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['qui_t_ate'] = 'on';

		$this->nmgp_cmp_hidden["sex_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['sex_m_de'] = 'on';
		$this->nmgp_cmp_hidden["sex_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['sex_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["sex_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['sex_t_de'] = 'on';
		$this->nmgp_cmp_hidden["sex_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['sex_t_ate'] = 'on';

		$this->nmgp_cmp_hidden["sab_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['sab_m_de'] = 'on';
		$this->nmgp_cmp_hidden["sab_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['sab_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["sab_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['sab_t_de'] = 'on';
		$this->nmgp_cmp_hidden["sab_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['sab_t_ate'] = 'on';

		$this->nmgp_cmp_hidden["dom_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['dom_m_de'] = 'on';
		$this->nmgp_cmp_hidden["dom_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['dom_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["dom_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['dom_t_de'] = 'on';
		$this->nmgp_cmp_hidden["dom_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['dom_t_ate'] = 'on';
	}
if (isset($this->sc_temp_pastacliente)) { $_SESSION['pastacliente'] = $this->sc_temp_pastacliente;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_cnpj != $this->cnpj || (isset($bFlagRead_cnpj) && $bFlagRead_cnpj)))
    {
        $this->ajax_return_values_cnpj(true);
    }
    if (($original_dom_m_ate != $this->dom_m_ate || (isset($bFlagRead_dom_m_ate) && $bFlagRead_dom_m_ate)))
    {
        $this->ajax_return_values_dom_m_ate(true);
    }
    if (($original_dom_m_de != $this->dom_m_de || (isset($bFlagRead_dom_m_de) && $bFlagRead_dom_m_de)))
    {
        $this->ajax_return_values_dom_m_de(true);
    }
    if (($original_dom_t_ate != $this->dom_t_ate || (isset($bFlagRead_dom_t_ate) && $bFlagRead_dom_t_ate)))
    {
        $this->ajax_return_values_dom_t_ate(true);
    }
    if (($original_dom_t_de != $this->dom_t_de || (isset($bFlagRead_dom_t_de) && $bFlagRead_dom_t_de)))
    {
        $this->ajax_return_values_dom_t_de(true);
    }
    if (($original_email != $this->email || (isset($bFlagRead_email) && $bFlagRead_email)))
    {
        $this->ajax_return_values_email(true);
    }
    if (($original_fachada != $this->fachada || (isset($bFlagRead_fachada) && $bFlagRead_fachada)))
    {
        $this->ajax_return_values_fachada(true);
    }
    if (($original_fk_classificacao != $this->fk_classificacao || (isset($bFlagRead_fk_classificacao) && $bFlagRead_fk_classificacao)))
    {
        $this->ajax_return_values_fk_classificacao(true);
    }
    if (($original_qua_m_ate != $this->qua_m_ate || (isset($bFlagRead_qua_m_ate) && $bFlagRead_qua_m_ate)))
    {
        $this->ajax_return_values_qua_m_ate(true);
    }
    if (($original_qua_m_de != $this->qua_m_de || (isset($bFlagRead_qua_m_de) && $bFlagRead_qua_m_de)))
    {
        $this->ajax_return_values_qua_m_de(true);
    }
    if (($original_qua_t_ate != $this->qua_t_ate || (isset($bFlagRead_qua_t_ate) && $bFlagRead_qua_t_ate)))
    {
        $this->ajax_return_values_qua_t_ate(true);
    }
    if (($original_qua_t_de != $this->qua_t_de || (isset($bFlagRead_qua_t_de) && $bFlagRead_qua_t_de)))
    {
        $this->ajax_return_values_qua_t_de(true);
    }
    if (($original_qui_m_ate != $this->qui_m_ate || (isset($bFlagRead_qui_m_ate) && $bFlagRead_qui_m_ate)))
    {
        $this->ajax_return_values_qui_m_ate(true);
    }
    if (($original_qui_m_de != $this->qui_m_de || (isset($bFlagRead_qui_m_de) && $bFlagRead_qui_m_de)))
    {
        $this->ajax_return_values_qui_m_de(true);
    }
    if (($original_qui_t_ate != $this->qui_t_ate || (isset($bFlagRead_qui_t_ate) && $bFlagRead_qui_t_ate)))
    {
        $this->ajax_return_values_qui_t_ate(true);
    }
    if (($original_qui_t_de != $this->qui_t_de || (isset($bFlagRead_qui_t_de) && $bFlagRead_qui_t_de)))
    {
        $this->ajax_return_values_qui_t_de(true);
    }
    if (($original_retype_email != $this->retype_email || (isset($bFlagRead_retype_email) && $bFlagRead_retype_email)))
    {
        $this->ajax_return_values_retype_email(true);
    }
    if (($original_sab_m_ate != $this->sab_m_ate || (isset($bFlagRead_sab_m_ate) && $bFlagRead_sab_m_ate)))
    {
        $this->ajax_return_values_sab_m_ate(true);
    }
    if (($original_sab_m_de != $this->sab_m_de || (isset($bFlagRead_sab_m_de) && $bFlagRead_sab_m_de)))
    {
        $this->ajax_return_values_sab_m_de(true);
    }
    if (($original_sab_t_ate != $this->sab_t_ate || (isset($bFlagRead_sab_t_ate) && $bFlagRead_sab_t_ate)))
    {
        $this->ajax_return_values_sab_t_ate(true);
    }
    if (($original_sab_t_de != $this->sab_t_de || (isset($bFlagRead_sab_t_de) && $bFlagRead_sab_t_de)))
    {
        $this->ajax_return_values_sab_t_de(true);
    }
    if (($original_seg_m_ate != $this->seg_m_ate || (isset($bFlagRead_seg_m_ate) && $bFlagRead_seg_m_ate)))
    {
        $this->ajax_return_values_seg_m_ate(true);
    }
    if (($original_seg_m_de != $this->seg_m_de || (isset($bFlagRead_seg_m_de) && $bFlagRead_seg_m_de)))
    {
        $this->ajax_return_values_seg_m_de(true);
    }
    if (($original_seg_t_ate != $this->seg_t_ate || (isset($bFlagRead_seg_t_ate) && $bFlagRead_seg_t_ate)))
    {
        $this->ajax_return_values_seg_t_ate(true);
    }
    if (($original_seg_t_de != $this->seg_t_de || (isset($bFlagRead_seg_t_de) && $bFlagRead_seg_t_de)))
    {
        $this->ajax_return_values_seg_t_de(true);
    }
    if (($original_sex_m_ate != $this->sex_m_ate || (isset($bFlagRead_sex_m_ate) && $bFlagRead_sex_m_ate)))
    {
        $this->ajax_return_values_sex_m_ate(true);
    }
    if (($original_sex_m_de != $this->sex_m_de || (isset($bFlagRead_sex_m_de) && $bFlagRead_sex_m_de)))
    {
        $this->ajax_return_values_sex_m_de(true);
    }
    if (($original_sex_t_ate != $this->sex_t_ate || (isset($bFlagRead_sex_t_ate) && $bFlagRead_sex_t_ate)))
    {
        $this->ajax_return_values_sex_t_ate(true);
    }
    if (($original_sex_t_de != $this->sex_t_de || (isset($bFlagRead_sex_t_de) && $bFlagRead_sex_t_de)))
    {
        $this->ajax_return_values_sex_t_de(true);
    }
    if (($original_ter_m_ate != $this->ter_m_ate || (isset($bFlagRead_ter_m_ate) && $bFlagRead_ter_m_ate)))
    {
        $this->ajax_return_values_ter_m_ate(true);
    }
    if (($original_ter_m_de != $this->ter_m_de || (isset($bFlagRead_ter_m_de) && $bFlagRead_ter_m_de)))
    {
        $this->ajax_return_values_ter_m_de(true);
    }
    if (($original_ter_t_ate != $this->ter_t_ate || (isset($bFlagRead_ter_t_ate) && $bFlagRead_ter_t_ate)))
    {
        $this->ajax_return_values_ter_t_ate(true);
    }
    if (($original_ter_t_de != $this->ter_t_de || (isset($bFlagRead_ter_t_de) && $bFlagRead_ter_t_de)))
    {
        $this->ajax_return_values_ter_t_de(true);
    }
}
$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off'; 
      }
      if (empty($this->activate_date))
      {
          $this->activate_date_hora = $this->activate_date;
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
      $_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_bairro = $this->bairro;
    $original_cidade = $this->cidade;
    $original_cnpj = $this->cnpj;
    $original_complemento = $this->complemento;
    $original_estado = $this->estado;
    $original_fantasia = $this->fantasia;
    $original_nome_contato = $this->nome_contato;
    $original_numero = $this->numero;
    $original_razao = $this->razao;
    $original_rua = $this->rua;
}
if (!isset($this->sc_temp_pastacliente)) {$this->sc_temp_pastacliente = (isset($_SESSION['pastacliente'])) ? $_SESSION['pastacliente'] : "";}
             $this->sc_temp_pastacliente = '/imagempub/'. $this->cnpj ;
$this->senha_usuario  = md5($this->senha_usuario );


$this->razao  =$this->act_retiraAcento($this->razao );
$this->fantasia  =$this->act_retiraAcento($this->fantasia );
$this->rua  =$this->act_retiraAcento($this->rua );
$this->bairro  =$this->act_retiraAcento($this->bairro );
$this->complemento  =$this->act_retiraAcento($this->complemento );
$this->nome_contato  =$this->act_retiraAcento($this->nome_contato );
$this->cidade  =$this->act_retiraAcento($this->cidade );
$this->rash  =$this->act_code();


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
    if (($original_cnpj != $this->cnpj || (isset($bFlagRead_cnpj) && $bFlagRead_cnpj)))
    {
        $this->ajax_return_values_cnpj(true);
    }
    if (($original_complemento != $this->complemento || (isset($bFlagRead_complemento) && $bFlagRead_complemento)))
    {
        $this->ajax_return_values_complemento(true);
    }
    if (($original_estado != $this->estado || (isset($bFlagRead_estado) && $bFlagRead_estado)))
    {
        $this->ajax_return_values_estado(true);
    }
    if (($original_fantasia != $this->fantasia || (isset($bFlagRead_fantasia) && $bFlagRead_fantasia)))
    {
        $this->ajax_return_values_fantasia(true);
    }
    if (($original_nome_contato != $this->nome_contato || (isset($bFlagRead_nome_contato) && $bFlagRead_nome_contato)))
    {
        $this->ajax_return_values_nome_contato(true);
    }
    if (($original_numero != $this->numero || (isset($bFlagRead_numero) && $bFlagRead_numero)))
    {
        $this->ajax_return_values_numero(true);
    }
    if (($original_razao != $this->razao || (isset($bFlagRead_razao) && $bFlagRead_razao)))
    {
        $this->ajax_return_values_razao(true);
    }
    if (($original_rua != $this->rua || (isset($bFlagRead_rua) && $bFlagRead_rua)))
    {
        $this->ajax_return_values_rua(true);
    }
}
$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off'; 
    }
    if ("excluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'on';
                         /* ap_contrato_publicador */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) FROM ap_contrato_publicador WHERE fk_contrato = " . $this->pk_contrato ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) FROM ap_contrato_publicador WHERE fk_contrato = " . $this->pk_contrato ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) FROM ap_contrato_publicador WHERE fk_contrato = " . $this->pk_contrato ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) FROM ap_contrato_publicador WHERE fk_contrato = " . $this->pk_contrato ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) FROM ap_contrato_publicador WHERE fk_contrato = " . $this->pk_contrato ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_ap_contrato_publicador = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_ap_contrato_publicador[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_ap_contrato_publicador = false;
          $this->dataset_ap_contrato_publicador_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_ap_contrato_publicador[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_ap_contrato_updt_xxx_mob' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }
$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off'; 
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
      $NM_val_form['datacadastro'] = $this->datacadastro;
      $NM_val_form['cnpj'] = $this->cnpj;
      $NM_val_form['inscricao'] = $this->inscricao;
      $NM_val_form['fk_classificacao'] = $this->fk_classificacao;
      $NM_val_form['razao'] = $this->razao;
      $NM_val_form['fantasia'] = $this->fantasia;
      $NM_val_form['seg_m_de'] = $this->seg_m_de;
      $NM_val_form['seg_m_ate'] = $this->seg_m_ate;
      $NM_val_form['seg_t_de'] = $this->seg_t_de;
      $NM_val_form['seg_t_ate'] = $this->seg_t_ate;
      $NM_val_form['ter_m_de'] = $this->ter_m_de;
      $NM_val_form['ter_m_ate'] = $this->ter_m_ate;
      $NM_val_form['ter_t_de'] = $this->ter_t_de;
      $NM_val_form['ter_t_ate'] = $this->ter_t_ate;
      $NM_val_form['qua_m_de'] = $this->qua_m_de;
      $NM_val_form['qua_m_ate'] = $this->qua_m_ate;
      $NM_val_form['qua_t_de'] = $this->qua_t_de;
      $NM_val_form['qua_t_ate'] = $this->qua_t_ate;
      $NM_val_form['qui_m_de'] = $this->qui_m_de;
      $NM_val_form['qui_m_ate'] = $this->qui_m_ate;
      $NM_val_form['qui_t_de'] = $this->qui_t_de;
      $NM_val_form['qui_t_ate'] = $this->qui_t_ate;
      $NM_val_form['sex_m_de'] = $this->sex_m_de;
      $NM_val_form['sex_m_ate'] = $this->sex_m_ate;
      $NM_val_form['sex_t_de'] = $this->sex_t_de;
      $NM_val_form['sex_t_ate'] = $this->sex_t_ate;
      $NM_val_form['sab_m_de'] = $this->sab_m_de;
      $NM_val_form['sab_m_ate'] = $this->sab_m_ate;
      $NM_val_form['sab_t_de'] = $this->sab_t_de;
      $NM_val_form['sab_t_ate'] = $this->sab_t_ate;
      $NM_val_form['dom_m_de'] = $this->dom_m_de;
      $NM_val_form['dom_m_ate'] = $this->dom_m_ate;
      $NM_val_form['dom_t_de'] = $this->dom_t_de;
      $NM_val_form['dom_t_ate'] = $this->dom_t_ate;
      $NM_val_form['txtmensagem'] = $this->txtmensagem;
      $NM_val_form['email'] = $this->email;
      $NM_val_form['retype_email'] = $this->retype_email;
      $NM_val_form['cep'] = $this->cep;
      $NM_val_form['cidade'] = $this->cidade;
      $NM_val_form['estado'] = $this->estado;
      $NM_val_form['bairro'] = $this->bairro;
      $NM_val_form['rua'] = $this->rua;
      $NM_val_form['complemento'] = $this->complemento;
      $NM_val_form['numero'] = $this->numero;
      $NM_val_form['fachada'] = $this->fachada;
      $NM_val_form['nome_contato'] = $this->nome_contato;
      $NM_val_form['telefone'] = $this->telefone;
      $NM_val_form['pk_contrato'] = $this->pk_contrato;
      $NM_val_form['latitude'] = $this->latitude;
      $NM_val_form['longitude'] = $this->longitude;
      $NM_val_form['senha_usuario'] = $this->senha_usuario;
      $NM_val_form['ativo'] = $this->ativo;
      $NM_val_form['rash'] = $this->rash;
      $NM_val_form['activate_code'] = $this->activate_code;
      $NM_val_form['activate_date'] = $this->activate_date;
      $NM_val_form['retype_senha'] = $this->retype_senha;
      if ($this->pk_contrato == "")  
      { 
          $this->pk_contrato = 0;
      } 
      if ($this->fk_classificacao == "")  
      { 
          $this->fk_classificacao = 0;
          $this->sc_force_zero[] = 'fk_classificacao';
      } 
      if ($this->ativo == "")  
      { 
          $this->ativo = 0;
          $this->sc_force_zero[] = 'ativo';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql);
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->cnpj_before_qstr = $this->cnpj;
          $this->cnpj = substr($this->Db->qstr($this->cnpj), 1, -1); 
          if ($this->cnpj == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cnpj = "null"; 
              $NM_val_null[] = "cnpj";
          } 
          $this->inscricao_before_qstr = $this->inscricao;
          $this->inscricao = substr($this->Db->qstr($this->inscricao), 1, -1); 
          if ($this->inscricao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->inscricao = "null"; 
              $NM_val_null[] = "inscricao";
          } 
          $this->razao_before_qstr = $this->razao;
          $this->razao = substr($this->Db->qstr($this->razao), 1, -1); 
          if ($this->razao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->razao = "null"; 
              $NM_val_null[] = "razao";
          } 
          $this->fantasia_before_qstr = $this->fantasia;
          $this->fantasia = substr($this->Db->qstr($this->fantasia), 1, -1); 
          if ($this->fantasia == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fantasia = "null"; 
              $NM_val_null[] = "fantasia";
          } 
          if ($this->datacadastro == "")  
          { 
              $this->datacadastro = "null"; 
              $NM_val_null[] = "datacadastro";
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
          $this->complemento_before_qstr = $this->complemento;
          $this->complemento = substr($this->Db->qstr($this->complemento), 1, -1); 
          if ($this->complemento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->complemento = "null"; 
              $NM_val_null[] = "complemento";
          } 
          $this->numero_before_qstr = $this->numero;
          $this->numero = substr($this->Db->qstr($this->numero), 1, -1); 
          if ($this->numero == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->numero = "null"; 
              $NM_val_null[] = "numero";
          } 
          $this->cep_before_qstr = $this->cep;
          $this->cep = substr($this->Db->qstr($this->cep), 1, -1); 
          if ($this->cep == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cep = "null"; 
              $NM_val_null[] = "cep";
          } 
          $this->fachada_before_qstr = $this->fachada;
          $this->fachada = substr($this->Db->qstr($this->fachada), 1, -1); 
          if ($this->fachada == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fachada = "null"; 
              $NM_val_null[] = "fachada";
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
          $this->email_before_qstr = $this->email;
          $this->email = substr($this->Db->qstr($this->email), 1, -1); 
          if ($this->email == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->email = "null"; 
              $NM_val_null[] = "email";
          } 
          $this->telefone_before_qstr = $this->telefone;
          $this->telefone = substr($this->Db->qstr($this->telefone), 1, -1); 
          if ($this->telefone == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->telefone = "null"; 
              $NM_val_null[] = "telefone";
          } 
          $this->senha_usuario_before_qstr = $this->senha_usuario;
          $this->senha_usuario = substr($this->Db->qstr($this->senha_usuario), 1, -1); 
          if ($this->senha_usuario == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->senha_usuario = "null"; 
              $NM_val_null[] = "senha_usuario";
          } 
          $this->nome_contato_before_qstr = $this->nome_contato;
          $this->nome_contato = substr($this->Db->qstr($this->nome_contato), 1, -1); 
          if ($this->nome_contato == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nome_contato = "null"; 
              $NM_val_null[] = "nome_contato";
          } 
          $this->rash_before_qstr = $this->rash;
          $this->rash = substr($this->Db->qstr($this->rash), 1, -1); 
          if ($this->rash == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->rash = "null"; 
              $NM_val_null[] = "rash";
          } 
          $this->activate_code_before_qstr = $this->activate_code;
          $this->activate_code = substr($this->Db->qstr($this->activate_code), 1, -1); 
          if ($this->activate_code == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->activate_code = "null"; 
              $NM_val_null[] = "activate_code";
          } 
          if ($this->activate_date == "")  
          { 
              $this->activate_date = "null"; 
              $NM_val_null[] = "activate_date";
          } 
          if ($this->seg_m_de == "")  
          { 
              $this->seg_m_de = "null"; 
              $NM_val_null[] = "seg_m_de";
          } 
          if ($this->seg_m_ate == "")  
          { 
              $this->seg_m_ate = "null"; 
              $NM_val_null[] = "seg_m_ate";
          } 
          if ($this->seg_t_de == "")  
          { 
              $this->seg_t_de = "null"; 
              $NM_val_null[] = "seg_t_de";
          } 
          if ($this->seg_t_ate == "")  
          { 
              $this->seg_t_ate = "null"; 
              $NM_val_null[] = "seg_t_ate";
          } 
          if ($this->ter_m_de == "")  
          { 
              $this->ter_m_de = "null"; 
              $NM_val_null[] = "ter_m_de";
          } 
          if ($this->ter_m_ate == "")  
          { 
              $this->ter_m_ate = "null"; 
              $NM_val_null[] = "ter_m_ate";
          } 
          if ($this->ter_t_de == "")  
          { 
              $this->ter_t_de = "null"; 
              $NM_val_null[] = "ter_t_de";
          } 
          if ($this->ter_t_ate == "")  
          { 
              $this->ter_t_ate = "null"; 
              $NM_val_null[] = "ter_t_ate";
          } 
          if ($this->qua_m_de == "")  
          { 
              $this->qua_m_de = "null"; 
              $NM_val_null[] = "qua_m_de";
          } 
          if ($this->qua_m_ate == "")  
          { 
              $this->qua_m_ate = "null"; 
              $NM_val_null[] = "qua_m_ate";
          } 
          if ($this->qua_t_de == "")  
          { 
              $this->qua_t_de = "null"; 
              $NM_val_null[] = "qua_t_de";
          } 
          if ($this->qua_t_ate == "")  
          { 
              $this->qua_t_ate = "null"; 
              $NM_val_null[] = "qua_t_ate";
          } 
          if ($this->qui_m_de == "")  
          { 
              $this->qui_m_de = "null"; 
              $NM_val_null[] = "qui_m_de";
          } 
          if ($this->qui_m_ate == "")  
          { 
              $this->qui_m_ate = "null"; 
              $NM_val_null[] = "qui_m_ate";
          } 
          if ($this->qui_t_de == "")  
          { 
              $this->qui_t_de = "null"; 
              $NM_val_null[] = "qui_t_de";
          } 
          if ($this->qui_t_ate == "")  
          { 
              $this->qui_t_ate = "null"; 
              $NM_val_null[] = "qui_t_ate";
          } 
          if ($this->sex_m_de == "")  
          { 
              $this->sex_m_de = "null"; 
              $NM_val_null[] = "sex_m_de";
          } 
          if ($this->sex_m_ate == "")  
          { 
              $this->sex_m_ate = "null"; 
              $NM_val_null[] = "sex_m_ate";
          } 
          if ($this->sex_t_de == "")  
          { 
              $this->sex_t_de = "null"; 
              $NM_val_null[] = "sex_t_de";
          } 
          if ($this->sex_t_ate == "")  
          { 
              $this->sex_t_ate = "null"; 
              $NM_val_null[] = "sex_t_ate";
          } 
          if ($this->sab_m_de == "")  
          { 
              $this->sab_m_de = "null"; 
              $NM_val_null[] = "sab_m_de";
          } 
          if ($this->sab_m_ate == "")  
          { 
              $this->sab_m_ate = "null"; 
              $NM_val_null[] = "sab_m_ate";
          } 
          if ($this->sab_t_de == "")  
          { 
              $this->sab_t_de = "null"; 
              $NM_val_null[] = "sab_t_de";
          } 
          if ($this->sab_t_ate == "")  
          { 
              $this->sab_t_ate = "null"; 
              $NM_val_null[] = "sab_t_ate";
          } 
          if ($this->dom_m_de == "")  
          { 
              $this->dom_m_de = "null"; 
              $NM_val_null[] = "dom_m_de";
          } 
          if ($this->dom_m_ate == "")  
          { 
              $this->dom_m_ate = "null"; 
              $NM_val_null[] = "dom_m_ate";
          } 
          if ($this->dom_t_de == "")  
          { 
              $this->dom_t_de = "null"; 
              $NM_val_null[] = "dom_t_de";
          } 
          if ($this->dom_t_ate == "")  
          { 
              $this->dom_t_ate = "null"; 
              $NM_val_null[] = "dom_t_ate";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['foreign_key'] as $sFKName => $sFKValue)
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
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_ap_contrato_updt_xxx_mob_pack_ajax_response();
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
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET fk_classificacao = $this->fk_classificacao, cnpj = '$this->cnpj', inscricao = '$this->inscricao', razao = '$this->razao', fantasia = '$this->fantasia', datacadastro = #$this->datacadastro#, cidade = '$this->cidade', estado = '$this->estado', bairro = '$this->bairro', rua = '$this->rua', complemento = '$this->complemento', numero = '$this->numero', cep = '$this->cep', email = '$this->email', telefone = '$this->telefone', nome_contato = '$this->nome_contato', seg_m_de = #$this->seg_m_de#, seg_m_ate = #$this->seg_m_ate#, seg_t_de = #$this->seg_t_de#, seg_t_ate = #$this->seg_t_ate#, ter_m_de = #$this->ter_m_de#, ter_m_ate = #$this->ter_m_ate#, ter_t_de = #$this->ter_t_de#, ter_t_ate = #$this->ter_t_ate#, qua_m_de = #$this->qua_m_de#, qua_m_ate = #$this->qua_m_ate#, qua_t_de = #$this->qua_t_de#, qua_t_ate = #$this->qua_t_ate#, qui_m_de = #$this->qui_m_de#, qui_m_ate = #$this->qui_m_ate#, qui_t_de = #$this->qui_t_de#, qui_t_ate = #$this->qui_t_ate#, sex_m_de = #$this->sex_m_de#, sex_m_ate = #$this->sex_m_ate#, sex_t_de = #$this->sex_t_de#, sex_t_ate = #$this->sex_t_ate#, sab_m_de = #$this->sab_m_de#, sab_m_ate = #$this->sab_m_ate#, sab_t_de = #$this->sab_t_de#, sab_t_ate = #$this->sab_t_ate#, dom_m_de = #$this->dom_m_de#, dom_m_ate = #$this->dom_m_ate#, dom_t_de = #$this->dom_t_de#, dom_t_ate = #$this->dom_t_ate#";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET fk_classificacao = $this->fk_classificacao, cnpj = '$this->cnpj', inscricao = '$this->inscricao', razao = '$this->razao', fantasia = '$this->fantasia', datacadastro = " . $this->Ini->date_delim . $this->datacadastro . $this->Ini->date_delim1 . ", cidade = '$this->cidade', estado = '$this->estado', bairro = '$this->bairro', rua = '$this->rua', complemento = '$this->complemento', numero = '$this->numero', cep = '$this->cep', email = '$this->email', telefone = '$this->telefone', nome_contato = '$this->nome_contato', seg_m_de = " . $this->Ini->date_delim . $this->seg_m_de . $this->Ini->date_delim1 . ", seg_m_ate = " . $this->Ini->date_delim . $this->seg_m_ate . $this->Ini->date_delim1 . ", seg_t_de = " . $this->Ini->date_delim . $this->seg_t_de . $this->Ini->date_delim1 . ", seg_t_ate = " . $this->Ini->date_delim . $this->seg_t_ate . $this->Ini->date_delim1 . ", ter_m_de = " . $this->Ini->date_delim . $this->ter_m_de . $this->Ini->date_delim1 . ", ter_m_ate = " . $this->Ini->date_delim . $this->ter_m_ate . $this->Ini->date_delim1 . ", ter_t_de = " . $this->Ini->date_delim . $this->ter_t_de . $this->Ini->date_delim1 . ", ter_t_ate = " . $this->Ini->date_delim . $this->ter_t_ate . $this->Ini->date_delim1 . ", qua_m_de = " . $this->Ini->date_delim . $this->qua_m_de . $this->Ini->date_delim1 . ", qua_m_ate = " . $this->Ini->date_delim . $this->qua_m_ate . $this->Ini->date_delim1 . ", qua_t_de = " . $this->Ini->date_delim . $this->qua_t_de . $this->Ini->date_delim1 . ", qua_t_ate = " . $this->Ini->date_delim . $this->qua_t_ate . $this->Ini->date_delim1 . ", qui_m_de = " . $this->Ini->date_delim . $this->qui_m_de . $this->Ini->date_delim1 . ", qui_m_ate = " . $this->Ini->date_delim . $this->qui_m_ate . $this->Ini->date_delim1 . ", qui_t_de = " . $this->Ini->date_delim . $this->qui_t_de . $this->Ini->date_delim1 . ", qui_t_ate = " . $this->Ini->date_delim . $this->qui_t_ate . $this->Ini->date_delim1 . ", sex_m_de = " . $this->Ini->date_delim . $this->sex_m_de . $this->Ini->date_delim1 . ", sex_m_ate = " . $this->Ini->date_delim . $this->sex_m_ate . $this->Ini->date_delim1 . ", sex_t_de = " . $this->Ini->date_delim . $this->sex_t_de . $this->Ini->date_delim1 . ", sex_t_ate = " . $this->Ini->date_delim . $this->sex_t_ate . $this->Ini->date_delim1 . ", sab_m_de = " . $this->Ini->date_delim . $this->sab_m_de . $this->Ini->date_delim1 . ", sab_m_ate = " . $this->Ini->date_delim . $this->sab_m_ate . $this->Ini->date_delim1 . ", sab_t_de = " . $this->Ini->date_delim . $this->sab_t_de . $this->Ini->date_delim1 . ", sab_t_ate = " . $this->Ini->date_delim . $this->sab_t_ate . $this->Ini->date_delim1 . ", dom_m_de = " . $this->Ini->date_delim . $this->dom_m_de . $this->Ini->date_delim1 . ", dom_m_ate = " . $this->Ini->date_delim . $this->dom_m_ate . $this->Ini->date_delim1 . ", dom_t_de = " . $this->Ini->date_delim . $this->dom_t_de . $this->Ini->date_delim1 . ", dom_t_ate = " . $this->Ini->date_delim . $this->dom_t_ate . $this->Ini->date_delim1 . "";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET fk_classificacao = $this->fk_classificacao, cnpj = '$this->cnpj', inscricao = '$this->inscricao', razao = '$this->razao', fantasia = '$this->fantasia', datacadastro = " . $this->Ini->date_delim . $this->datacadastro . $this->Ini->date_delim1 . ", cidade = '$this->cidade', estado = '$this->estado', bairro = '$this->bairro', rua = '$this->rua', complemento = '$this->complemento', numero = '$this->numero', cep = '$this->cep', email = '$this->email', telefone = '$this->telefone', nome_contato = '$this->nome_contato', seg_m_de = " . $this->Ini->date_delim . $this->seg_m_de . $this->Ini->date_delim1 . ", seg_m_ate = " . $this->Ini->date_delim . $this->seg_m_ate . $this->Ini->date_delim1 . ", seg_t_de = " . $this->Ini->date_delim . $this->seg_t_de . $this->Ini->date_delim1 . ", seg_t_ate = " . $this->Ini->date_delim . $this->seg_t_ate . $this->Ini->date_delim1 . ", ter_m_de = " . $this->Ini->date_delim . $this->ter_m_de . $this->Ini->date_delim1 . ", ter_m_ate = " . $this->Ini->date_delim . $this->ter_m_ate . $this->Ini->date_delim1 . ", ter_t_de = " . $this->Ini->date_delim . $this->ter_t_de . $this->Ini->date_delim1 . ", ter_t_ate = " . $this->Ini->date_delim . $this->ter_t_ate . $this->Ini->date_delim1 . ", qua_m_de = " . $this->Ini->date_delim . $this->qua_m_de . $this->Ini->date_delim1 . ", qua_m_ate = " . $this->Ini->date_delim . $this->qua_m_ate . $this->Ini->date_delim1 . ", qua_t_de = " . $this->Ini->date_delim . $this->qua_t_de . $this->Ini->date_delim1 . ", qua_t_ate = " . $this->Ini->date_delim . $this->qua_t_ate . $this->Ini->date_delim1 . ", qui_m_de = " . $this->Ini->date_delim . $this->qui_m_de . $this->Ini->date_delim1 . ", qui_m_ate = " . $this->Ini->date_delim . $this->qui_m_ate . $this->Ini->date_delim1 . ", qui_t_de = " . $this->Ini->date_delim . $this->qui_t_de . $this->Ini->date_delim1 . ", qui_t_ate = " . $this->Ini->date_delim . $this->qui_t_ate . $this->Ini->date_delim1 . ", sex_m_de = " . $this->Ini->date_delim . $this->sex_m_de . $this->Ini->date_delim1 . ", sex_m_ate = " . $this->Ini->date_delim . $this->sex_m_ate . $this->Ini->date_delim1 . ", sex_t_de = " . $this->Ini->date_delim . $this->sex_t_de . $this->Ini->date_delim1 . ", sex_t_ate = " . $this->Ini->date_delim . $this->sex_t_ate . $this->Ini->date_delim1 . ", sab_m_de = " . $this->Ini->date_delim . $this->sab_m_de . $this->Ini->date_delim1 . ", sab_m_ate = " . $this->Ini->date_delim . $this->sab_m_ate . $this->Ini->date_delim1 . ", sab_t_de = " . $this->Ini->date_delim . $this->sab_t_de . $this->Ini->date_delim1 . ", sab_t_ate = " . $this->Ini->date_delim . $this->sab_t_ate . $this->Ini->date_delim1 . ", dom_m_de = " . $this->Ini->date_delim . $this->dom_m_de . $this->Ini->date_delim1 . ", dom_m_ate = " . $this->Ini->date_delim . $this->dom_m_ate . $this->Ini->date_delim1 . ", dom_t_de = " . $this->Ini->date_delim . $this->dom_t_de . $this->Ini->date_delim1 . ", dom_t_ate = " . $this->Ini->date_delim . $this->dom_t_ate . $this->Ini->date_delim1 . "";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET fk_classificacao = $this->fk_classificacao, cnpj = '$this->cnpj', inscricao = '$this->inscricao', razao = '$this->razao', fantasia = '$this->fantasia', datacadastro = EXTEND('$this->datacadastro', YEAR TO DAY), cidade = '$this->cidade', estado = '$this->estado', bairro = '$this->bairro', rua = '$this->rua', complemento = '$this->complemento', numero = '$this->numero', cep = '$this->cep', email = '$this->email', telefone = '$this->telefone', nome_contato = '$this->nome_contato', seg_m_de = " . $this->Ini->date_delim . $this->seg_m_de . $this->Ini->date_delim1 . ", seg_m_ate = " . $this->Ini->date_delim . $this->seg_m_ate . $this->Ini->date_delim1 . ", seg_t_de = " . $this->Ini->date_delim . $this->seg_t_de . $this->Ini->date_delim1 . ", seg_t_ate = " . $this->Ini->date_delim . $this->seg_t_ate . $this->Ini->date_delim1 . ", ter_m_de = " . $this->Ini->date_delim . $this->ter_m_de . $this->Ini->date_delim1 . ", ter_m_ate = " . $this->Ini->date_delim . $this->ter_m_ate . $this->Ini->date_delim1 . ", ter_t_de = " . $this->Ini->date_delim . $this->ter_t_de . $this->Ini->date_delim1 . ", ter_t_ate = " . $this->Ini->date_delim . $this->ter_t_ate . $this->Ini->date_delim1 . ", qua_m_de = " . $this->Ini->date_delim . $this->qua_m_de . $this->Ini->date_delim1 . ", qua_m_ate = " . $this->Ini->date_delim . $this->qua_m_ate . $this->Ini->date_delim1 . ", qua_t_de = " . $this->Ini->date_delim . $this->qua_t_de . $this->Ini->date_delim1 . ", qua_t_ate = " . $this->Ini->date_delim . $this->qua_t_ate . $this->Ini->date_delim1 . ", qui_m_de = " . $this->Ini->date_delim . $this->qui_m_de . $this->Ini->date_delim1 . ", qui_m_ate = " . $this->Ini->date_delim . $this->qui_m_ate . $this->Ini->date_delim1 . ", qui_t_de = " . $this->Ini->date_delim . $this->qui_t_de . $this->Ini->date_delim1 . ", qui_t_ate = " . $this->Ini->date_delim . $this->qui_t_ate . $this->Ini->date_delim1 . ", sex_m_de = " . $this->Ini->date_delim . $this->sex_m_de . $this->Ini->date_delim1 . ", sex_m_ate = " . $this->Ini->date_delim . $this->sex_m_ate . $this->Ini->date_delim1 . ", sex_t_de = " . $this->Ini->date_delim . $this->sex_t_de . $this->Ini->date_delim1 . ", sex_t_ate = " . $this->Ini->date_delim . $this->sex_t_ate . $this->Ini->date_delim1 . ", sab_m_de = " . $this->Ini->date_delim . $this->sab_m_de . $this->Ini->date_delim1 . ", sab_m_ate = " . $this->Ini->date_delim . $this->sab_m_ate . $this->Ini->date_delim1 . ", sab_t_de = " . $this->Ini->date_delim . $this->sab_t_de . $this->Ini->date_delim1 . ", sab_t_ate = " . $this->Ini->date_delim . $this->sab_t_ate . $this->Ini->date_delim1 . ", dom_m_de = " . $this->Ini->date_delim . $this->dom_m_de . $this->Ini->date_delim1 . ", dom_m_ate = " . $this->Ini->date_delim . $this->dom_m_ate . $this->Ini->date_delim1 . ", dom_t_de = " . $this->Ini->date_delim . $this->dom_t_de . $this->Ini->date_delim1 . ", dom_t_ate = " . $this->Ini->date_delim . $this->dom_t_ate . $this->Ini->date_delim1 . "";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET fk_classificacao = $this->fk_classificacao, cnpj = '$this->cnpj', inscricao = '$this->inscricao', razao = '$this->razao', fantasia = '$this->fantasia', datacadastro = " . $this->Ini->date_delim . $this->datacadastro . $this->Ini->date_delim1 . ", cidade = '$this->cidade', estado = '$this->estado', bairro = '$this->bairro', rua = '$this->rua', complemento = '$this->complemento', numero = '$this->numero', cep = '$this->cep', email = '$this->email', telefone = '$this->telefone', nome_contato = '$this->nome_contato', seg_m_de = " . $this->Ini->date_delim . $this->seg_m_de . $this->Ini->date_delim1 . ", seg_m_ate = " . $this->Ini->date_delim . $this->seg_m_ate . $this->Ini->date_delim1 . ", seg_t_de = " . $this->Ini->date_delim . $this->seg_t_de . $this->Ini->date_delim1 . ", seg_t_ate = " . $this->Ini->date_delim . $this->seg_t_ate . $this->Ini->date_delim1 . ", ter_m_de = " . $this->Ini->date_delim . $this->ter_m_de . $this->Ini->date_delim1 . ", ter_m_ate = " . $this->Ini->date_delim . $this->ter_m_ate . $this->Ini->date_delim1 . ", ter_t_de = " . $this->Ini->date_delim . $this->ter_t_de . $this->Ini->date_delim1 . ", ter_t_ate = " . $this->Ini->date_delim . $this->ter_t_ate . $this->Ini->date_delim1 . ", qua_m_de = " . $this->Ini->date_delim . $this->qua_m_de . $this->Ini->date_delim1 . ", qua_m_ate = " . $this->Ini->date_delim . $this->qua_m_ate . $this->Ini->date_delim1 . ", qua_t_de = " . $this->Ini->date_delim . $this->qua_t_de . $this->Ini->date_delim1 . ", qua_t_ate = " . $this->Ini->date_delim . $this->qua_t_ate . $this->Ini->date_delim1 . ", qui_m_de = " . $this->Ini->date_delim . $this->qui_m_de . $this->Ini->date_delim1 . ", qui_m_ate = " . $this->Ini->date_delim . $this->qui_m_ate . $this->Ini->date_delim1 . ", qui_t_de = " . $this->Ini->date_delim . $this->qui_t_de . $this->Ini->date_delim1 . ", qui_t_ate = " . $this->Ini->date_delim . $this->qui_t_ate . $this->Ini->date_delim1 . ", sex_m_de = " . $this->Ini->date_delim . $this->sex_m_de . $this->Ini->date_delim1 . ", sex_m_ate = " . $this->Ini->date_delim . $this->sex_m_ate . $this->Ini->date_delim1 . ", sex_t_de = " . $this->Ini->date_delim . $this->sex_t_de . $this->Ini->date_delim1 . ", sex_t_ate = " . $this->Ini->date_delim . $this->sex_t_ate . $this->Ini->date_delim1 . ", sab_m_de = " . $this->Ini->date_delim . $this->sab_m_de . $this->Ini->date_delim1 . ", sab_m_ate = " . $this->Ini->date_delim . $this->sab_m_ate . $this->Ini->date_delim1 . ", sab_t_de = " . $this->Ini->date_delim . $this->sab_t_de . $this->Ini->date_delim1 . ", sab_t_ate = " . $this->Ini->date_delim . $this->sab_t_ate . $this->Ini->date_delim1 . ", dom_m_de = " . $this->Ini->date_delim . $this->dom_m_de . $this->Ini->date_delim1 . ", dom_m_ate = " . $this->Ini->date_delim . $this->dom_m_ate . $this->Ini->date_delim1 . ", dom_t_de = " . $this->Ini->date_delim . $this->dom_t_de . $this->Ini->date_delim1 . ", dom_t_ate = " . $this->Ini->date_delim . $this->dom_t_ate . $this->Ini->date_delim1 . "";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET fk_classificacao = $this->fk_classificacao, cnpj = '$this->cnpj', inscricao = '$this->inscricao', razao = '$this->razao', fantasia = '$this->fantasia', datacadastro = " . $this->Ini->date_delim . $this->datacadastro . $this->Ini->date_delim1 . ", cidade = '$this->cidade', estado = '$this->estado', bairro = '$this->bairro', rua = '$this->rua', complemento = '$this->complemento', numero = '$this->numero', cep = '$this->cep', email = '$this->email', telefone = '$this->telefone', nome_contato = '$this->nome_contato', seg_m_de = " . $this->Ini->date_delim . $this->seg_m_de . $this->Ini->date_delim1 . ", seg_m_ate = " . $this->Ini->date_delim . $this->seg_m_ate . $this->Ini->date_delim1 . ", seg_t_de = " . $this->Ini->date_delim . $this->seg_t_de . $this->Ini->date_delim1 . ", seg_t_ate = " . $this->Ini->date_delim . $this->seg_t_ate . $this->Ini->date_delim1 . ", ter_m_de = " . $this->Ini->date_delim . $this->ter_m_de . $this->Ini->date_delim1 . ", ter_m_ate = " . $this->Ini->date_delim . $this->ter_m_ate . $this->Ini->date_delim1 . ", ter_t_de = " . $this->Ini->date_delim . $this->ter_t_de . $this->Ini->date_delim1 . ", ter_t_ate = " . $this->Ini->date_delim . $this->ter_t_ate . $this->Ini->date_delim1 . ", qua_m_de = " . $this->Ini->date_delim . $this->qua_m_de . $this->Ini->date_delim1 . ", qua_m_ate = " . $this->Ini->date_delim . $this->qua_m_ate . $this->Ini->date_delim1 . ", qua_t_de = " . $this->Ini->date_delim . $this->qua_t_de . $this->Ini->date_delim1 . ", qua_t_ate = " . $this->Ini->date_delim . $this->qua_t_ate . $this->Ini->date_delim1 . ", qui_m_de = " . $this->Ini->date_delim . $this->qui_m_de . $this->Ini->date_delim1 . ", qui_m_ate = " . $this->Ini->date_delim . $this->qui_m_ate . $this->Ini->date_delim1 . ", qui_t_de = " . $this->Ini->date_delim . $this->qui_t_de . $this->Ini->date_delim1 . ", qui_t_ate = " . $this->Ini->date_delim . $this->qui_t_ate . $this->Ini->date_delim1 . ", sex_m_de = " . $this->Ini->date_delim . $this->sex_m_de . $this->Ini->date_delim1 . ", sex_m_ate = " . $this->Ini->date_delim . $this->sex_m_ate . $this->Ini->date_delim1 . ", sex_t_de = " . $this->Ini->date_delim . $this->sex_t_de . $this->Ini->date_delim1 . ", sex_t_ate = " . $this->Ini->date_delim . $this->sex_t_ate . $this->Ini->date_delim1 . ", sab_m_de = " . $this->Ini->date_delim . $this->sab_m_de . $this->Ini->date_delim1 . ", sab_m_ate = " . $this->Ini->date_delim . $this->sab_m_ate . $this->Ini->date_delim1 . ", sab_t_de = " . $this->Ini->date_delim . $this->sab_t_de . $this->Ini->date_delim1 . ", sab_t_ate = " . $this->Ini->date_delim . $this->sab_t_ate . $this->Ini->date_delim1 . ", dom_m_de = " . $this->Ini->date_delim . $this->dom_m_de . $this->Ini->date_delim1 . ", dom_m_ate = " . $this->Ini->date_delim . $this->dom_m_ate . $this->Ini->date_delim1 . ", dom_t_de = " . $this->Ini->date_delim . $this->dom_t_de . $this->Ini->date_delim1 . ", dom_t_ate = " . $this->Ini->date_delim . $this->dom_t_ate . $this->Ini->date_delim1 . "";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET fk_classificacao = $this->fk_classificacao, cnpj = '$this->cnpj', inscricao = '$this->inscricao', razao = '$this->razao', fantasia = '$this->fantasia', datacadastro = " . $this->Ini->date_delim . $this->datacadastro . $this->Ini->date_delim1 . ", cidade = '$this->cidade', estado = '$this->estado', bairro = '$this->bairro', rua = '$this->rua', complemento = '$this->complemento', numero = '$this->numero', cep = '$this->cep', email = '$this->email', telefone = '$this->telefone', nome_contato = '$this->nome_contato', seg_m_de = " . $this->Ini->date_delim . $this->seg_m_de . $this->Ini->date_delim1 . ", seg_m_ate = " . $this->Ini->date_delim . $this->seg_m_ate . $this->Ini->date_delim1 . ", seg_t_de = " . $this->Ini->date_delim . $this->seg_t_de . $this->Ini->date_delim1 . ", seg_t_ate = " . $this->Ini->date_delim . $this->seg_t_ate . $this->Ini->date_delim1 . ", ter_m_de = " . $this->Ini->date_delim . $this->ter_m_de . $this->Ini->date_delim1 . ", ter_m_ate = " . $this->Ini->date_delim . $this->ter_m_ate . $this->Ini->date_delim1 . ", ter_t_de = " . $this->Ini->date_delim . $this->ter_t_de . $this->Ini->date_delim1 . ", ter_t_ate = " . $this->Ini->date_delim . $this->ter_t_ate . $this->Ini->date_delim1 . ", qua_m_de = " . $this->Ini->date_delim . $this->qua_m_de . $this->Ini->date_delim1 . ", qua_m_ate = " . $this->Ini->date_delim . $this->qua_m_ate . $this->Ini->date_delim1 . ", qua_t_de = " . $this->Ini->date_delim . $this->qua_t_de . $this->Ini->date_delim1 . ", qua_t_ate = " . $this->Ini->date_delim . $this->qua_t_ate . $this->Ini->date_delim1 . ", qui_m_de = " . $this->Ini->date_delim . $this->qui_m_de . $this->Ini->date_delim1 . ", qui_m_ate = " . $this->Ini->date_delim . $this->qui_m_ate . $this->Ini->date_delim1 . ", qui_t_de = " . $this->Ini->date_delim . $this->qui_t_de . $this->Ini->date_delim1 . ", qui_t_ate = " . $this->Ini->date_delim . $this->qui_t_ate . $this->Ini->date_delim1 . ", sex_m_de = " . $this->Ini->date_delim . $this->sex_m_de . $this->Ini->date_delim1 . ", sex_m_ate = " . $this->Ini->date_delim . $this->sex_m_ate . $this->Ini->date_delim1 . ", sex_t_de = " . $this->Ini->date_delim . $this->sex_t_de . $this->Ini->date_delim1 . ", sex_t_ate = " . $this->Ini->date_delim . $this->sex_t_ate . $this->Ini->date_delim1 . ", sab_m_de = " . $this->Ini->date_delim . $this->sab_m_de . $this->Ini->date_delim1 . ", sab_m_ate = " . $this->Ini->date_delim . $this->sab_m_ate . $this->Ini->date_delim1 . ", sab_t_de = " . $this->Ini->date_delim . $this->sab_t_de . $this->Ini->date_delim1 . ", sab_t_ate = " . $this->Ini->date_delim . $this->sab_t_ate . $this->Ini->date_delim1 . ", dom_m_de = " . $this->Ini->date_delim . $this->dom_m_de . $this->Ini->date_delim1 . ", dom_m_ate = " . $this->Ini->date_delim . $this->dom_m_ate . $this->Ini->date_delim1 . ", dom_t_de = " . $this->Ini->date_delim . $this->dom_t_de . $this->Ini->date_delim1 . ", dom_t_ate = " . $this->Ini->date_delim . $this->dom_t_ate . $this->Ini->date_delim1 . "";  
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
              if (isset($NM_val_form['ativo']) && $NM_val_form['ativo'] != $this->nmgp_dados_select['ativo']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " ativo = $this->ativo"; 
                  $comando_oracle        .= " ativo = $this->ativo"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['rash']) && $NM_val_form['rash'] != $this->nmgp_dados_select['rash']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " rash = '$this->rash'"; 
                  $comando_oracle        .= " rash = '$this->rash'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['activate_code']) && $NM_val_form['activate_code'] != $this->nmgp_dados_select['activate_code']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " activate_code = '$this->activate_code'"; 
                  $comando_oracle        .= " activate_code = '$this->activate_code'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['activate_date']) && $NM_val_form['activate_date'] != $this->nmgp_dados_select['activate_date']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $comando        .= " activate_date = #$this->activate_date#"; 
                  } 
                  else 
                  { 
                      $comando        .= " activate_date = " . $this->Ini->date_delim . $this->activate_date . $this->Ini->date_delim1 . ""; 
                  } 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  { 
                      $comando_oracle        .= " activate_date = EXTEND('" . $this->activate_date . "', YEAR TO FRACTION)"; 
                  } 
                  else
                  { 
                      $comando_oracle        .= " activate_date = " . $this->Ini->date_delim . $this->activate_date . $this->Ini->date_delim1 . ""; 
                  } 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              $aDoNotUpdate = array();
              $temp_cmd_sql = "";
              if ($this->fachada_limpa == "S") 
              { 
                  if ($this->fachada != "null") 
                  { 
                      $this->fachada = ''; 
                  } 
                  if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                  { 
                      $temp_cmd_sql .= ", fachada = '" . $this->fachada . "'"; 
                      $comando_oracle .= ", fachada = '" . $this->fachada . "'"; 
                  } 
                  else 
                  { 
                     $temp_cmd_sql .= " fachada = '" . $this->fachada . "'"; 
                     $comando_oracle .= " fachada = '" . $this->fachada . "'"; 
                     $SC_ex_upd_or = true; 
                     $SC_ex_update = true; 
                  } 
                  $this->fachada = "";
              } 
              else 
              { 
                  if ($this->fachada != "none" && $this->fachada != "") 
                  { 
                      $NM_conteudo =  $this->fachada;
                      if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                      { 
                          $temp_cmd_sql .= ", fachada = '$NM_conteudo'" ; 
                          $comando_oracle .= ", fachada = '$NM_conteudo'" ; 
                      } 
                      else 
                      { 
                          $temp_cmd_sql .= " fachada = '$NM_conteudo'" ; 
                          $comando_oracle .= " fachada = '$NM_conteudo'" ; 
                          $SC_ex_upd_or = true; 
                          $SC_ex_update = true; 
                      } 
                  } 
                  else
                  {
                      $aDoNotUpdate[] = "fachada";
                  }
              } 
              if (!empty($temp_cmd_sql)) 
              { 
                  $comando .= $temp_cmd_sql;
              } 
             if ($this->senha_usuario != "" && $this->senha_usuario != "null" && $this->senha_usuario != $this->nmgp_dados_select['senha_usuario']) 
             { 
                 if ($SC_ex_update || $SC_tem_cmp_update) 
                 { 
                     $comando .= ", senha_usuario = '$this->senha_usuario'" ; 
                 } 
                 else 
                 { 
                      $comando .= " senha_usuario = '$this->senha_usuario'" ; 
                      $SC_ex_update = true; 
                 } 
             } 
             if ($this->senha_usuario != "" && $this->senha_usuario != "null" && $this->senha_usuario != $this->nmgp_dados_select['senha_usuario']) 
             { 
                 if ($SC_ex_upd_or) 
                 { 
                      $comando_oracle .= ", senha_usuario = '$this->senha_usuario'" ; 
                 } 
                 else 
                 { 
                      $comando_oracle .= " senha_usuario = '$this->senha_usuario'" ; 
                      $SC_ex_upd_or = true; 
                 } 
             } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE pk_contrato = $this->pk_contrato ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE pk_contrato = $this->pk_contrato ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE pk_contrato = $this->pk_contrato ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE pk_contrato = $this->pk_contrato ";  
              }  
              else  
              {
                  $comando .= " WHERE pk_contrato = $this->pk_contrato ";  
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
                                  form_ap_contrato_updt_xxx_mob_pack_ajax_response();
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
              if ($this->fachada_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['fachada_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
          $this->cnpj = $this->cnpj_before_qstr;
          $this->inscricao = $this->inscricao_before_qstr;
          $this->razao = $this->razao_before_qstr;
          $this->fantasia = $this->fantasia_before_qstr;
          $this->cidade = $this->cidade_before_qstr;
          $this->estado = $this->estado_before_qstr;
          $this->bairro = $this->bairro_before_qstr;
          $this->rua = $this->rua_before_qstr;
          $this->complemento = $this->complemento_before_qstr;
          $this->numero = $this->numero_before_qstr;
          $this->cep = $this->cep_before_qstr;
          $this->fachada = $this->fachada_before_qstr;
          $this->latitude = $this->latitude_before_qstr;
          $this->longitude = $this->longitude_before_qstr;
          $this->email = $this->email_before_qstr;
          $this->telefone = $this->telefone_before_qstr;
          $this->senha_usuario = $this->senha_usuario_before_qstr;
          $this->nome_contato = $this->nome_contato_before_qstr;
          $this->rash = $this->rash_before_qstr;
          $this->activate_code = $this->activate_code_before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['pk_contrato'])) { $this->pk_contrato = $NM_val_form['pk_contrato']; }
              elseif (isset($this->pk_contrato)) { $this->nm_limpa_alfa($this->pk_contrato); }
              if     (isset($NM_val_form) && isset($NM_val_form['fk_classificacao'])) { $this->fk_classificacao = $NM_val_form['fk_classificacao']; }
              elseif (isset($this->fk_classificacao)) { $this->nm_limpa_alfa($this->fk_classificacao); }
              if     (isset($NM_val_form) && isset($NM_val_form['cnpj'])) { $this->cnpj = $NM_val_form['cnpj']; }
              elseif (isset($this->cnpj)) { $this->nm_limpa_alfa($this->cnpj); }
              if     (isset($NM_val_form) && isset($NM_val_form['inscricao'])) { $this->inscricao = $NM_val_form['inscricao']; }
              elseif (isset($this->inscricao)) { $this->nm_limpa_alfa($this->inscricao); }
              if     (isset($NM_val_form) && isset($NM_val_form['razao'])) { $this->razao = $NM_val_form['razao']; }
              elseif (isset($this->razao)) { $this->nm_limpa_alfa($this->razao); }
              if     (isset($NM_val_form) && isset($NM_val_form['fantasia'])) { $this->fantasia = $NM_val_form['fantasia']; }
              elseif (isset($this->fantasia)) { $this->nm_limpa_alfa($this->fantasia); }
              if     (isset($NM_val_form) && isset($NM_val_form['cidade'])) { $this->cidade = $NM_val_form['cidade']; }
              elseif (isset($this->cidade)) { $this->nm_limpa_alfa($this->cidade); }
              if     (isset($NM_val_form) && isset($NM_val_form['estado'])) { $this->estado = $NM_val_form['estado']; }
              elseif (isset($this->estado)) { $this->nm_limpa_alfa($this->estado); }
              if     (isset($NM_val_form) && isset($NM_val_form['bairro'])) { $this->bairro = $NM_val_form['bairro']; }
              elseif (isset($this->bairro)) { $this->nm_limpa_alfa($this->bairro); }
              if     (isset($NM_val_form) && isset($NM_val_form['rua'])) { $this->rua = $NM_val_form['rua']; }
              elseif (isset($this->rua)) { $this->nm_limpa_alfa($this->rua); }
              if     (isset($NM_val_form) && isset($NM_val_form['complemento'])) { $this->complemento = $NM_val_form['complemento']; }
              elseif (isset($this->complemento)) { $this->nm_limpa_alfa($this->complemento); }
              if     (isset($NM_val_form) && isset($NM_val_form['numero'])) { $this->numero = $NM_val_form['numero']; }
              elseif (isset($this->numero)) { $this->nm_limpa_alfa($this->numero); }
              if     (isset($NM_val_form) && isset($NM_val_form['cep'])) { $this->cep = $NM_val_form['cep']; }
              elseif (isset($this->cep)) { $this->nm_limpa_alfa($this->cep); }
              if     (isset($NM_val_form) && isset($NM_val_form['email'])) { $this->email = $NM_val_form['email']; }
              elseif (isset($this->email)) { $this->nm_limpa_alfa($this->email); }
              if     (isset($NM_val_form) && isset($NM_val_form['telefone'])) { $this->telefone = $NM_val_form['telefone']; }
              elseif (isset($this->telefone)) { $this->nm_limpa_alfa($this->telefone); }
              if     (isset($NM_val_form) && isset($NM_val_form['nome_contato'])) { $this->nome_contato = $NM_val_form['nome_contato']; }
              elseif (isset($this->nome_contato)) { $this->nm_limpa_alfa($this->nome_contato); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('datacadastro', 'cnpj', 'inscricao', 'fk_classificacao', 'razao', 'fantasia', 'seg_m_de', 'seg_m_ate', 'seg_t_de', 'seg_t_ate', 'ter_m_de', 'ter_m_ate', 'ter_t_de', 'ter_t_ate', 'qua_m_de', 'qua_m_ate', 'qua_t_de', 'qua_t_ate', 'qui_m_de', 'qui_m_ate', 'qui_t_de', 'qui_t_ate', 'sex_m_de', 'sex_m_ate', 'sex_t_de', 'sex_t_ate', 'sab_m_de', 'sab_m_ate', 'sab_t_de', 'sab_t_ate', 'dom_m_de', 'dom_m_ate', 'dom_t_de', 'dom_t_ate', 'txtmensagem', 'email', 'retype_email', 'cep', 'cidade', 'estado', 'bairro', 'rua', 'complemento', 'numero', 'fachada', 'nome_contato', 'telefone'), $aDoNotUpdate);
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
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['foreign_key'] as $sFKName => $sFKValue)
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
              $NM_cmp_auto = "pk_contrato, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_ap_contrato_updt_xxx_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              $dir_file = $this->Ini->root . $this->Ini->path_imagens . "" . $_SESSION['pastacliente'] . "/"; 
              $_test_file = $this->fetchUniqueUploadName($this->fachada_scfile_name, $dir_file, "fachada");
              if (trim($this->fachada_scfile_name) != $_test_file)
              {
                  $this->fachada_scfile_name = $_test_file;
                  $this->fachada = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (fk_classificacao, cnpj, inscricao, razao, fantasia, datacadastro, cidade, estado, bairro, rua, complemento, numero, cep, fachada, latitude, longitude, email, telefone, senha_usuario, nome_contato, ativo, rash, activate_code, activate_date, seg_m_de, seg_m_ate, seg_t_de, seg_t_ate, ter_m_de, ter_m_ate, ter_t_de, ter_t_ate, qua_m_de, qua_m_ate, qua_t_de, qua_t_ate, qui_m_de, qui_m_ate, qui_t_de, qui_t_ate, sex_m_de, sex_m_ate, sex_t_de, sex_t_ate, sab_m_de, sab_m_ate, sab_t_de, sab_t_ate, dom_m_de, dom_m_ate, dom_t_de, dom_t_ate) VALUES ($this->fk_classificacao, '$this->cnpj', '$this->inscricao', '$this->razao', '$this->fantasia', #$this->datacadastro#, '$this->cidade', '$this->estado', '$this->bairro', '$this->rua', '$this->complemento', '$this->numero', '$this->cep', '$this->fachada', '$this->latitude', '$this->longitude', '$this->email', '$this->telefone', '$this->senha_usuario', '$this->nome_contato', $this->ativo, '$this->rash', '$this->activate_code', #$this->activate_date#, #$this->seg_m_de#, #$this->seg_m_ate#, #$this->seg_t_de#, #$this->seg_t_ate#, #$this->ter_m_de#, #$this->ter_m_ate#, #$this->ter_t_de#, #$this->ter_t_ate#, #$this->qua_m_de#, #$this->qua_m_ate#, #$this->qua_t_de#, #$this->qua_t_ate#, #$this->qui_m_de#, #$this->qui_m_ate#, #$this->qui_t_de#, #$this->qui_t_ate#, #$this->sex_m_de#, #$this->sex_m_ate#, #$this->sex_t_de#, #$this->sex_t_ate#, #$this->sab_m_de#, #$this->sab_m_ate#, #$this->sab_t_de#, #$this->sab_t_ate#, #$this->dom_m_de#, #$this->dom_m_ate#, #$this->dom_t_de#, #$this->dom_t_ate#)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fk_classificacao, cnpj, inscricao, razao, fantasia, datacadastro, cidade, estado, bairro, rua, complemento, numero, cep, fachada, latitude, longitude, email, telefone, senha_usuario, nome_contato, ativo, rash, activate_code, activate_date, seg_m_de, seg_m_ate, seg_t_de, seg_t_ate, ter_m_de, ter_m_ate, ter_t_de, ter_t_ate, qua_m_de, qua_m_ate, qua_t_de, qua_t_ate, qui_m_de, qui_m_ate, qui_t_de, qui_t_ate, sex_m_de, sex_m_ate, sex_t_de, sex_t_ate, sab_m_de, sab_m_ate, sab_t_de, sab_t_ate, dom_m_de, dom_m_ate, dom_t_de, dom_t_ate) VALUES (" . $NM_seq_auto . "$this->fk_classificacao, '$this->cnpj', '$this->inscricao', '$this->razao', '$this->fantasia', " . $this->Ini->date_delim . $this->datacadastro . $this->Ini->date_delim1 . ", '$this->cidade', '$this->estado', '$this->bairro', '$this->rua', '$this->complemento', '$this->numero', '$this->cep', '$this->fachada', '$this->latitude', '$this->longitude', '$this->email', '$this->telefone', '$this->senha_usuario', '$this->nome_contato', $this->ativo, '$this->rash', '$this->activate_code', " . $this->Ini->date_delim . $this->activate_date . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_t_ate . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fk_classificacao, cnpj, inscricao, razao, fantasia, datacadastro, cidade, estado, bairro, rua, complemento, numero, cep, fachada, latitude, longitude, email, telefone, senha_usuario, nome_contato, ativo, rash, activate_code, activate_date, seg_m_de, seg_m_ate, seg_t_de, seg_t_ate, ter_m_de, ter_m_ate, ter_t_de, ter_t_ate, qua_m_de, qua_m_ate, qua_t_de, qua_t_ate, qui_m_de, qui_m_ate, qui_t_de, qui_t_ate, sex_m_de, sex_m_ate, sex_t_de, sex_t_ate, sab_m_de, sab_m_ate, sab_t_de, sab_t_ate, dom_m_de, dom_m_ate, dom_t_de, dom_t_ate) VALUES (" . $NM_seq_auto . "$this->fk_classificacao, '$this->cnpj', '$this->inscricao', '$this->razao', '$this->fantasia', " . $this->Ini->date_delim . $this->datacadastro . $this->Ini->date_delim1 . ", '$this->cidade', '$this->estado', '$this->bairro', '$this->rua', '$this->complemento', '$this->numero', '$this->cep', '$this->fachada', '$this->latitude', '$this->longitude', '$this->email', '$this->telefone', '$this->senha_usuario', '$this->nome_contato', $this->ativo, '$this->rash', '$this->activate_code', " . $this->Ini->date_delim . $this->activate_date . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_t_ate . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fk_classificacao, cnpj, inscricao, razao, fantasia, datacadastro, cidade, estado, bairro, rua, complemento, numero, cep, fachada, latitude, longitude, email, telefone, senha_usuario, nome_contato, ativo, rash, activate_code, activate_date, seg_m_de, seg_m_ate, seg_t_de, seg_t_ate, ter_m_de, ter_m_ate, ter_t_de, ter_t_ate, qua_m_de, qua_m_ate, qua_t_de, qua_t_ate, qui_m_de, qui_m_ate, qui_t_de, qui_t_ate, sex_m_de, sex_m_ate, sex_t_de, sex_t_ate, sab_m_de, sab_m_ate, sab_t_de, sab_t_ate, dom_m_de, dom_m_ate, dom_t_de, dom_t_ate) VALUES (" . $NM_seq_auto . "$this->fk_classificacao, '$this->cnpj', '$this->inscricao', '$this->razao', '$this->fantasia', EXTEND('$this->datacadastro', YEAR TO DAY), '$this->cidade', '$this->estado', '$this->bairro', '$this->rua', '$this->complemento', '$this->numero', '$this->cep', '$this->fachada', '$this->latitude', '$this->longitude', '$this->email', '$this->telefone', '$this->senha_usuario', '$this->nome_contato', $this->ativo, '$this->rash', '$this->activate_code', EXTEND('$this->activate_date', YEAR TO FRACTION), " . $this->Ini->date_delim . $this->seg_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_t_ate . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fk_classificacao, cnpj, inscricao, razao, fantasia, datacadastro, cidade, estado, bairro, rua, complemento, numero, cep, fachada, latitude, longitude, email, telefone, senha_usuario, nome_contato, ativo, rash, activate_code, activate_date, seg_m_de, seg_m_ate, seg_t_de, seg_t_ate, ter_m_de, ter_m_ate, ter_t_de, ter_t_ate, qua_m_de, qua_m_ate, qua_t_de, qua_t_ate, qui_m_de, qui_m_ate, qui_t_de, qui_t_ate, sex_m_de, sex_m_ate, sex_t_de, sex_t_ate, sab_m_de, sab_m_ate, sab_t_de, sab_t_ate, dom_m_de, dom_m_ate, dom_t_de, dom_t_ate) VALUES (" . $NM_seq_auto . "$this->fk_classificacao, '$this->cnpj', '$this->inscricao', '$this->razao', '$this->fantasia', " . $this->Ini->date_delim . $this->datacadastro . $this->Ini->date_delim1 . ", '$this->cidade', '$this->estado', '$this->bairro', '$this->rua', '$this->complemento', '$this->numero', '$this->cep', '$this->fachada', '$this->latitude', '$this->longitude', '$this->email', '$this->telefone', '$this->senha_usuario', '$this->nome_contato', $this->ativo, '$this->rash', '$this->activate_code', " . $this->Ini->date_delim . $this->activate_date . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_t_ate . $this->Ini->date_delim1 . ")"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fk_classificacao, cnpj, inscricao, razao, fantasia, datacadastro, cidade, estado, bairro, rua, complemento, numero, cep, fachada, latitude, longitude, email, telefone, senha_usuario, nome_contato, ativo, rash, activate_code, activate_date, seg_m_de, seg_m_ate, seg_t_de, seg_t_ate, ter_m_de, ter_m_ate, ter_t_de, ter_t_ate, qua_m_de, qua_m_ate, qua_t_de, qua_t_ate, qui_m_de, qui_m_ate, qui_t_de, qui_t_ate, sex_m_de, sex_m_ate, sex_t_de, sex_t_ate, sab_m_de, sab_m_ate, sab_t_de, sab_t_ate, dom_m_de, dom_m_ate, dom_t_de, dom_t_ate) VALUES (" . $NM_seq_auto . "$this->fk_classificacao, '$this->cnpj', '$this->inscricao', '$this->razao', '$this->fantasia', " . $this->Ini->date_delim . $this->datacadastro . $this->Ini->date_delim1 . ", '$this->cidade', '$this->estado', '$this->bairro', '$this->rua', '$this->complemento', '$this->numero', '$this->cep', '$this->fachada', '$this->latitude', '$this->longitude', '$this->email', '$this->telefone', '$this->senha_usuario', '$this->nome_contato', $this->ativo, '$this->rash', '$this->activate_code', " . $this->Ini->date_delim . $this->activate_date . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->seg_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->ter_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qua_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->qui_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sex_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->sab_t_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_m_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_m_ate . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_t_de . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->dom_t_ate . $this->Ini->date_delim1 . ")"; 
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
                              form_ap_contrato_updt_xxx_mob_pack_ajax_response();
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
                          form_ap_contrato_updt_xxx_mob_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->pk_contrato =  $rsy->fields[0];
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
                  $this->pk_contrato = $rsy->fields[0];
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
                  $this->pk_contrato = $rsy->fields[0];
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
                  $this->pk_contrato = $rsy->fields[0];
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
                  $this->pk_contrato = $rsy->fields[0];
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
                  $this->pk_contrato = $rsy->fields[0];
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
                  $this->pk_contrato = $rsy->fields[0];
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
                  $this->pk_contrato = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total']);
              }

              $dir_img = $this->Ini->root . $this->Ini->path_imagens . "" . $_SESSION['pastacliente'] . "/"; 
              if (nm_mkdir($dir_img))  
              { 
                  $arq_fachada = fopen($this->SC_IMG_fachada, "r") ; 
                  $reg_fachada = fread($arq_fachada, filesize($this->SC_IMG_fachada)) ; 
                  fclose($arq_fachada) ;  
                  $arq_fachada = fopen($dir_img . trim($this->fachada_scfile_name), "w") ; 
                  fwrite($arq_fachada, $reg_fachada) ;  
                  fclose($arq_fachada) ;  
              } 
              $this->sc_evento = "insert"; 
              $this->sc_insert_on = true; 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['return_edit'] = "new";
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
          $this->pk_contrato = substr($this->Db->qstr($this->pk_contrato), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pk_contrato = $this->pk_contrato "); 
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
                          form_ap_contrato_updt_xxx_mob_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total']);
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['parms'] = "pk_contrato?#?$this->pk_contrato?@?"; 
      }
      $this->nmgp_dados_form['fachada'] = ""; 
      $this->fachada_limpa = ""; 
      $this->fachada_salva = ""; 
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->pk_contrato = substr($this->Db->qstr($this->pk_contrato), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter'] . ")";
          }
      }
//------------ 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "R")
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['iframe_evento'] == "insert") 
          { 
               $this->nmgp_opcao = "novo"; 
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['select'] = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['iframe_evento'] = $this->sc_evento; 
      } 
      if (!isset($this->nmgp_opcao) || empty($this->nmgp_opcao)) 
      { 
          if (empty($this->pk_contrato)) 
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
      if ($this->nmgp_opcao != "nada" && (trim($this->pk_contrato) == "")) 
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "F" && $this->sc_evento == "insert")
      {
          $this->nmgp_opcao = "final";
      }
      $sc_where = trim("");
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
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total']))
      { 
          $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_ap_contrato_updt_xxx_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total'] = $qt_geral_reg_form_ap_contrato_updt_xxx_mob;
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->pk_contrato))
          {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $Key_Where = "pk_contrato < $this->pk_contrato "; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Key_Where = "pk_contrato < $this->pk_contrato "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Key_Where = "pk_contrato < $this->pk_contrato "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Key_Where = "pk_contrato < $this->pk_contrato "; 
              }
              else  
              {
                  $Key_Where = "pk_contrato < $this->pk_contrato "; 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_ap_contrato_updt_xxx_mob = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total'];
      } 
      if ($this->nmgp_opcao == "inicio") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start']++; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] > $qt_geral_reg_form_ap_contrato_updt_xxx_mob)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] = $qt_geral_reg_form_ap_contrato_updt_xxx_mob; 
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start']--; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] = $qt_geral_reg_form_ap_contrato_updt_xxx_mob; 
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] = 0;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] + 1;
      $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] + 1; 
      $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_qtd']; 
      $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total'] + 1; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT pk_contrato, fk_classificacao, cnpj, inscricao, razao, fantasia, str_replace (convert(char(10),datacadastro,102), '.', '-') + ' ' + convert(char(8),datacadastro,20), cidade, estado, bairro, rua, complemento, numero, cep, fachada, latitude, longitude, email, telefone, senha_usuario, nome_contato, ativo, rash, activate_code, str_replace (convert(char(10),activate_date,102), '.', '-') + ' ' + convert(char(8),activate_date,20), str_replace (convert(char(10),seg_m_de,102), '.', '-') + ' ' + convert(char(8),seg_m_de,20), str_replace (convert(char(10),seg_m_ate,102), '.', '-') + ' ' + convert(char(8),seg_m_ate,20), str_replace (convert(char(10),seg_t_de,102), '.', '-') + ' ' + convert(char(8),seg_t_de,20), str_replace (convert(char(10),seg_t_ate,102), '.', '-') + ' ' + convert(char(8),seg_t_ate,20), str_replace (convert(char(10),ter_m_de,102), '.', '-') + ' ' + convert(char(8),ter_m_de,20), str_replace (convert(char(10),ter_m_ate,102), '.', '-') + ' ' + convert(char(8),ter_m_ate,20), str_replace (convert(char(10),ter_t_de,102), '.', '-') + ' ' + convert(char(8),ter_t_de,20), str_replace (convert(char(10),ter_t_ate,102), '.', '-') + ' ' + convert(char(8),ter_t_ate,20), str_replace (convert(char(10),qua_m_de,102), '.', '-') + ' ' + convert(char(8),qua_m_de,20), str_replace (convert(char(10),qua_m_ate,102), '.', '-') + ' ' + convert(char(8),qua_m_ate,20), str_replace (convert(char(10),qua_t_de,102), '.', '-') + ' ' + convert(char(8),qua_t_de,20), str_replace (convert(char(10),qua_t_ate,102), '.', '-') + ' ' + convert(char(8),qua_t_ate,20), str_replace (convert(char(10),qui_m_de,102), '.', '-') + ' ' + convert(char(8),qui_m_de,20), str_replace (convert(char(10),qui_m_ate,102), '.', '-') + ' ' + convert(char(8),qui_m_ate,20), str_replace (convert(char(10),qui_t_de,102), '.', '-') + ' ' + convert(char(8),qui_t_de,20), str_replace (convert(char(10),qui_t_ate,102), '.', '-') + ' ' + convert(char(8),qui_t_ate,20), str_replace (convert(char(10),sex_m_de,102), '.', '-') + ' ' + convert(char(8),sex_m_de,20), str_replace (convert(char(10),sex_m_ate,102), '.', '-') + ' ' + convert(char(8),sex_m_ate,20), str_replace (convert(char(10),sex_t_de,102), '.', '-') + ' ' + convert(char(8),sex_t_de,20), str_replace (convert(char(10),sex_t_ate,102), '.', '-') + ' ' + convert(char(8),sex_t_ate,20), str_replace (convert(char(10),sab_m_de,102), '.', '-') + ' ' + convert(char(8),sab_m_de,20), str_replace (convert(char(10),sab_m_ate,102), '.', '-') + ' ' + convert(char(8),sab_m_ate,20), str_replace (convert(char(10),sab_t_de,102), '.', '-') + ' ' + convert(char(8),sab_t_de,20), str_replace (convert(char(10),sab_t_ate,102), '.', '-') + ' ' + convert(char(8),sab_t_ate,20), str_replace (convert(char(10),dom_m_de,102), '.', '-') + ' ' + convert(char(8),dom_m_de,20), str_replace (convert(char(10),dom_m_ate,102), '.', '-') + ' ' + convert(char(8),dom_m_ate,20), str_replace (convert(char(10),dom_t_de,102), '.', '-') + ' ' + convert(char(8),dom_t_de,20), str_replace (convert(char(10),dom_t_ate,102), '.', '-') + ' ' + convert(char(8),dom_t_ate,20) from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT pk_contrato, fk_classificacao, cnpj, inscricao, razao, fantasia, convert(char(23),datacadastro,121), cidade, estado, bairro, rua, complemento, numero, cep, fachada, latitude, longitude, email, telefone, senha_usuario, nome_contato, ativo, rash, activate_code, convert(char(23),activate_date,121), convert(char(23),seg_m_de,121), convert(char(23),seg_m_ate,121), convert(char(23),seg_t_de,121), convert(char(23),seg_t_ate,121), convert(char(23),ter_m_de,121), convert(char(23),ter_m_ate,121), convert(char(23),ter_t_de,121), convert(char(23),ter_t_ate,121), convert(char(23),qua_m_de,121), convert(char(23),qua_m_ate,121), convert(char(23),qua_t_de,121), convert(char(23),qua_t_ate,121), convert(char(23),qui_m_de,121), convert(char(23),qui_m_ate,121), convert(char(23),qui_t_de,121), convert(char(23),qui_t_ate,121), convert(char(23),sex_m_de,121), convert(char(23),sex_m_ate,121), convert(char(23),sex_t_de,121), convert(char(23),sex_t_ate,121), convert(char(23),sab_m_de,121), convert(char(23),sab_m_ate,121), convert(char(23),sab_t_de,121), convert(char(23),sab_t_ate,121), convert(char(23),dom_m_de,121), convert(char(23),dom_m_ate,121), convert(char(23),dom_t_de,121), convert(char(23),dom_t_ate,121) from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT pk_contrato, fk_classificacao, cnpj, inscricao, razao, fantasia, datacadastro, cidade, estado, bairro, rua, complemento, numero, cep, fachada, latitude, longitude, email, telefone, senha_usuario, nome_contato, ativo, rash, activate_code, activate_date, seg_m_de, seg_m_ate, seg_t_de, seg_t_ate, ter_m_de, ter_m_ate, ter_t_de, ter_t_ate, qua_m_de, qua_m_ate, qua_t_de, qua_t_ate, qui_m_de, qui_m_ate, qui_t_de, qui_t_ate, sex_m_de, sex_m_ate, sex_t_de, sex_t_ate, sab_m_de, sab_m_ate, sab_t_de, sab_t_ate, dom_m_de, dom_m_ate, dom_t_de, dom_t_ate from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT pk_contrato, fk_classificacao, cnpj, inscricao, razao, fantasia, EXTEND(datacadastro, YEAR TO DAY), cidade, estado, bairro, rua, complemento, numero, cep, fachada, latitude, longitude, email, telefone, senha_usuario, nome_contato, ativo, rash, activate_code, EXTEND(activate_date, YEAR TO FRACTION), seg_m_de, seg_m_ate, seg_t_de, seg_t_ate, ter_m_de, ter_m_ate, ter_t_de, ter_t_ate, qua_m_de, qua_m_ate, qua_t_de, qua_t_ate, qui_m_de, qui_m_ate, qui_t_de, qui_t_ate, sex_m_de, sex_m_ate, sex_t_de, sex_t_ate, sab_m_de, sab_m_ate, sab_t_de, sab_t_ate, dom_m_de, dom_m_ate, dom_t_de, dom_t_ate from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT pk_contrato, fk_classificacao, cnpj, inscricao, razao, fantasia, datacadastro, cidade, estado, bairro, rua, complemento, numero, cep, fachada, latitude, longitude, email, telefone, senha_usuario, nome_contato, ativo, rash, activate_code, activate_date, seg_m_de, seg_m_ate, seg_t_de, seg_t_ate, ter_m_de, ter_m_ate, ter_t_de, ter_t_ate, qua_m_de, qua_m_ate, qua_t_de, qua_t_ate, qui_m_de, qui_m_ate, qui_t_de, qui_t_ate, sex_m_de, sex_m_ate, sex_t_de, sex_t_ate, sab_m_de, sab_m_ate, sab_t_de, sab_t_ate, dom_m_de, dom_m_ate, dom_t_de, dom_t_ate from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "pk_contrato = $this->pk_contrato"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "pk_contrato = $this->pk_contrato"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "pk_contrato = $this->pk_contrato"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "pk_contrato = $this->pk_contrato"; 
              }  
              else  
              {
                  $aWhere[] = "pk_contrato = $this->pk_contrato"; 
              }  
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "pk_contrato";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start']) ;  
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
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['empty_filter'] = true;
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
              $this->pk_contrato = $rs->fields[0] ; 
              $this->nmgp_dados_select['pk_contrato'] = $this->pk_contrato;
              $this->fk_classificacao = $rs->fields[1] ; 
              $this->nmgp_dados_select['fk_classificacao'] = $this->fk_classificacao;
              $this->cnpj = $rs->fields[2] ; 
              $this->nmgp_dados_select['cnpj'] = $this->cnpj;
              $this->cnpj = trim($this->cnpj);
              if (strlen($this->cnpj) < 14 && strlen($this->cnpj) != 11  && !empty($this->cnpj)) 
              { 
                  $this->cnpj = str_repeat(0, 14 - strlen($this->cnpj)) . $this->cnpj; 
              } 
              if (strlen($this->cnpj) > 11 && substr($this->cnpj, 0, 3) == "000" && $teste_validade->CNPJ($this->cnpj) == false) 
              { 
                  $this->cnpj = substr($this->cnpj, strlen($this->cnpj) - 11); 
              } 
              $this->inscricao = $rs->fields[3] ; 
              $this->nmgp_dados_select['inscricao'] = $this->inscricao;
              $this->razao = $rs->fields[4] ; 
              $this->nmgp_dados_select['razao'] = $this->razao;
              $this->fantasia = $rs->fields[5] ; 
              $this->nmgp_dados_select['fantasia'] = $this->fantasia;
              $this->datacadastro = $rs->fields[6] ; 
              $this->nmgp_dados_select['datacadastro'] = $this->datacadastro;
              $this->cidade = $rs->fields[7] ; 
              $this->nmgp_dados_select['cidade'] = $this->cidade;
              $this->estado = $rs->fields[8] ; 
              $this->nmgp_dados_select['estado'] = $this->estado;
              $this->bairro = $rs->fields[9] ; 
              $this->nmgp_dados_select['bairro'] = $this->bairro;
              $this->rua = $rs->fields[10] ; 
              $this->nmgp_dados_select['rua'] = $this->rua;
              $this->complemento = $rs->fields[11] ; 
              $this->nmgp_dados_select['complemento'] = $this->complemento;
              $this->numero = $rs->fields[12] ; 
              $this->nmgp_dados_select['numero'] = $this->numero;
              $this->cep = $rs->fields[13] ; 
              $this->nmgp_dados_select['cep'] = $this->cep;
              $this->fachada = $rs->fields[14] ; 
              $this->nmgp_dados_select['fachada'] = $this->fachada;
              $this->latitude = $rs->fields[15] ; 
              $this->nmgp_dados_select['latitude'] = $this->latitude;
              $this->longitude = $rs->fields[16] ; 
              $this->nmgp_dados_select['longitude'] = $this->longitude;
              $this->email = $rs->fields[17] ; 
              $this->nmgp_dados_select['email'] = $this->email;
              $this->telefone = $rs->fields[18] ; 
              $this->nmgp_dados_select['telefone'] = $this->telefone;
              $this->senha_usuario = $rs->fields[19] ; 
              $this->nmgp_dados_select['senha_usuario'] = $this->senha_usuario;
              $this->nome_contato = $rs->fields[20] ; 
              $this->nmgp_dados_select['nome_contato'] = $this->nome_contato;
              $this->ativo = $rs->fields[21] ; 
              $this->nmgp_dados_select['ativo'] = $this->ativo;
              $this->rash = $rs->fields[22] ; 
              $this->nmgp_dados_select['rash'] = $this->rash;
              $this->activate_code = $rs->fields[23] ; 
              $this->nmgp_dados_select['activate_code'] = $this->activate_code;
              $this->activate_date = $rs->fields[24] ; 
              if (substr($this->activate_date, 10, 1) == "-") 
              { 
                 $this->activate_date = substr($this->activate_date, 0, 10) . " " . substr($this->activate_date, 11);
              } 
              if (substr($this->activate_date, 13, 1) == ".") 
              { 
                 $this->activate_date = substr($this->activate_date, 0, 13) . ":" . substr($this->activate_date, 14, 2) . ":" . substr($this->activate_date, 17);
              } 
              $this->nmgp_dados_select['activate_date'] = $this->activate_date;
              $this->seg_m_de = $rs->fields[25] ; 
              $this->nmgp_dados_select['seg_m_de'] = $this->seg_m_de;
              $this->seg_m_ate = $rs->fields[26] ; 
              $this->nmgp_dados_select['seg_m_ate'] = $this->seg_m_ate;
              $this->seg_t_de = $rs->fields[27] ; 
              $this->nmgp_dados_select['seg_t_de'] = $this->seg_t_de;
              $this->seg_t_ate = $rs->fields[28] ; 
              $this->nmgp_dados_select['seg_t_ate'] = $this->seg_t_ate;
              $this->ter_m_de = $rs->fields[29] ; 
              $this->nmgp_dados_select['ter_m_de'] = $this->ter_m_de;
              $this->ter_m_ate = $rs->fields[30] ; 
              $this->nmgp_dados_select['ter_m_ate'] = $this->ter_m_ate;
              $this->ter_t_de = $rs->fields[31] ; 
              $this->nmgp_dados_select['ter_t_de'] = $this->ter_t_de;
              $this->ter_t_ate = $rs->fields[32] ; 
              $this->nmgp_dados_select['ter_t_ate'] = $this->ter_t_ate;
              $this->qua_m_de = $rs->fields[33] ; 
              $this->nmgp_dados_select['qua_m_de'] = $this->qua_m_de;
              $this->qua_m_ate = $rs->fields[34] ; 
              $this->nmgp_dados_select['qua_m_ate'] = $this->qua_m_ate;
              $this->qua_t_de = $rs->fields[35] ; 
              $this->nmgp_dados_select['qua_t_de'] = $this->qua_t_de;
              $this->qua_t_ate = $rs->fields[36] ; 
              $this->nmgp_dados_select['qua_t_ate'] = $this->qua_t_ate;
              $this->qui_m_de = $rs->fields[37] ; 
              $this->nmgp_dados_select['qui_m_de'] = $this->qui_m_de;
              $this->qui_m_ate = $rs->fields[38] ; 
              $this->nmgp_dados_select['qui_m_ate'] = $this->qui_m_ate;
              $this->qui_t_de = $rs->fields[39] ; 
              $this->nmgp_dados_select['qui_t_de'] = $this->qui_t_de;
              $this->qui_t_ate = $rs->fields[40] ; 
              $this->nmgp_dados_select['qui_t_ate'] = $this->qui_t_ate;
              $this->sex_m_de = $rs->fields[41] ; 
              $this->nmgp_dados_select['sex_m_de'] = $this->sex_m_de;
              $this->sex_m_ate = $rs->fields[42] ; 
              $this->nmgp_dados_select['sex_m_ate'] = $this->sex_m_ate;
              $this->sex_t_de = $rs->fields[43] ; 
              $this->nmgp_dados_select['sex_t_de'] = $this->sex_t_de;
              $this->sex_t_ate = $rs->fields[44] ; 
              $this->nmgp_dados_select['sex_t_ate'] = $this->sex_t_ate;
              $this->sab_m_de = $rs->fields[45] ; 
              $this->nmgp_dados_select['sab_m_de'] = $this->sab_m_de;
              $this->sab_m_ate = $rs->fields[46] ; 
              $this->nmgp_dados_select['sab_m_ate'] = $this->sab_m_ate;
              $this->sab_t_de = $rs->fields[47] ; 
              $this->nmgp_dados_select['sab_t_de'] = $this->sab_t_de;
              $this->sab_t_ate = $rs->fields[48] ; 
              $this->nmgp_dados_select['sab_t_ate'] = $this->sab_t_ate;
              $this->dom_m_de = $rs->fields[49] ; 
              $this->nmgp_dados_select['dom_m_de'] = $this->dom_m_de;
              $this->dom_m_ate = $rs->fields[50] ; 
              $this->nmgp_dados_select['dom_m_ate'] = $this->dom_m_ate;
              $this->dom_t_de = $rs->fields[51] ; 
              $this->nmgp_dados_select['dom_t_de'] = $this->dom_t_de;
              $this->dom_t_ate = $rs->fields[52] ; 
              $this->nmgp_dados_select['dom_t_ate'] = $this->dom_t_ate;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->pk_contrato = (string)$this->pk_contrato; 
              $this->fk_classificacao = (string)$this->fk_classificacao; 
              $this->ativo = (string)$this->ativo; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['parms'] = "pk_contrato?#?$this->pk_contrato?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['sub_dir'][0]  = "" . $_SESSION['pastacliente'];
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['reg_start'] < $qt_geral_reg_form_ap_contrato_updt_xxx_mob;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opcao']   = '';
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
              $this->pk_contrato = "";  
              $this->fk_classificacao = "";  
              $this->cnpj = "";  
              $this->inscricao = "";  
              $this->razao = "";  
              $this->fantasia = "";  
              $this->datacadastro =  date('Y') . "-" . date('m')  . "-" . date('d');
              $this->cidade = "";  
              $this->estado = "";  
              $this->bairro = "";  
              $this->rua = "";  
              $this->complemento = "";  
              $this->numero = "";  
              $this->cep = "";  
              $this->fachada = "";  
              $this->fachada_ul_name = "" ;  
              $this->fachada_ul_type = "" ;  
              $this->latitude = "";  
              $this->longitude = "";  
              $this->email = "";  
              $this->telefone = "";  
              $this->senha_usuario = "";  
              $this->nome_contato = "";  
              $this->ativo = "";  
              $this->rash = "";  
              $this->activate_code = "";  
              $this->activate_date = "";  
              $this->activate_date_hora = "" ;  
              $this->seg_m_de = "";  
              $this->seg_m_de_hora = "" ;  
              $this->seg_m_ate = "";  
              $this->seg_m_ate_hora = "" ;  
              $this->seg_t_de = "";  
              $this->seg_t_de_hora = "" ;  
              $this->seg_t_ate = "";  
              $this->seg_t_ate_hora = "" ;  
              $this->ter_m_de = "";  
              $this->ter_m_de_hora = "" ;  
              $this->ter_m_ate = "";  
              $this->ter_m_ate_hora = "" ;  
              $this->ter_t_de = "";  
              $this->ter_t_de_hora = "" ;  
              $this->ter_t_ate = "";  
              $this->ter_t_ate_hora = "" ;  
              $this->qua_m_de = "";  
              $this->qua_m_de_hora = "" ;  
              $this->qua_m_ate = "";  
              $this->qua_m_ate_hora = "" ;  
              $this->qua_t_de = "";  
              $this->qua_t_de_hora = "" ;  
              $this->qua_t_ate = "";  
              $this->qua_t_ate_hora = "" ;  
              $this->qui_m_de = "";  
              $this->qui_m_de_hora = "" ;  
              $this->qui_m_ate = "";  
              $this->qui_m_ate_hora = "" ;  
              $this->qui_t_de = "";  
              $this->qui_t_de_hora = "" ;  
              $this->qui_t_ate = "";  
              $this->qui_t_ate_hora = "" ;  
              $this->sex_m_de = "";  
              $this->sex_m_de_hora = "" ;  
              $this->sex_m_ate = "";  
              $this->sex_m_ate_hora = "" ;  
              $this->sex_t_de = "";  
              $this->sex_t_de_hora = "" ;  
              $this->sex_t_ate = "";  
              $this->sex_t_ate_hora = "" ;  
              $this->sab_m_de = "";  
              $this->sab_m_de_hora = "" ;  
              $this->sab_m_ate = "";  
              $this->sab_m_ate_hora = "" ;  
              $this->sab_t_de = "";  
              $this->sab_t_de_hora = "" ;  
              $this->sab_t_ate = "";  
              $this->sab_t_ate_hora = "" ;  
              $this->dom_m_de = "";  
              $this->dom_m_de_hora = "" ;  
              $this->dom_m_ate = "";  
              $this->dom_m_ate_hora = "" ;  
              $this->dom_t_de = "";  
              $this->dom_t_de_hora = "" ;  
              $this->dom_t_ate = "";  
              $this->dom_t_ate_hora = "" ;  
              $this->retype_email = "";  
              $this->retype_senha = "";  
              $this->formatado = false;
              if ($this->nmgp_clone != "S")
              {
              }
              if ($this->nmgp_clone == "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_select']))
              {
                  $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dados_select'];
                  $this->fk_classificacao = $this->nmgp_dados_select['fk_classificacao'];  
                  $this->cnpj = $this->nmgp_dados_select['cnpj'];  
                  $this->inscricao = $this->nmgp_dados_select['inscricao'];  
                  $this->razao = $this->nmgp_dados_select['razao'];  
                  $this->fantasia = $this->nmgp_dados_select['fantasia'];  
                  $this->datacadastro = $this->nmgp_dados_select['datacadastro'];  
                  $this->cidade = $this->nmgp_dados_select['cidade'];  
                  $this->estado = $this->nmgp_dados_select['estado'];  
                  $this->bairro = $this->nmgp_dados_select['bairro'];  
                  $this->rua = $this->nmgp_dados_select['rua'];  
                  $this->complemento = $this->nmgp_dados_select['complemento'];  
                  $this->numero = $this->nmgp_dados_select['numero'];  
                  $this->cep = $this->nmgp_dados_select['cep'];  
                  $this->fachada = $this->nmgp_dados_select['fachada'];  
                  $this->latitude = $this->nmgp_dados_select['latitude'];  
                  $this->longitude = $this->nmgp_dados_select['longitude'];  
                  $this->email = $this->nmgp_dados_select['email'];  
                  $this->telefone = $this->nmgp_dados_select['telefone'];  
                  $this->senha_usuario = $this->nmgp_dados_select['senha_usuario'];  
                  $this->nome_contato = $this->nmgp_dados_select['nome_contato'];  
                  $this->ativo = $this->nmgp_dados_select['ativo'];  
                  $this->rash = $this->nmgp_dados_select['rash'];  
                  $this->activate_code = $this->nmgp_dados_select['activate_code'];  
                  $this->activate_date = $this->nmgp_dados_select['activate_date'];  
                  $this->seg_m_de = $this->nmgp_dados_select['seg_m_de'];  
                  $this->seg_m_ate = $this->nmgp_dados_select['seg_m_ate'];  
                  $this->seg_t_de = $this->nmgp_dados_select['seg_t_de'];  
                  $this->seg_t_ate = $this->nmgp_dados_select['seg_t_ate'];  
                  $this->ter_m_de = $this->nmgp_dados_select['ter_m_de'];  
                  $this->ter_m_ate = $this->nmgp_dados_select['ter_m_ate'];  
                  $this->ter_t_de = $this->nmgp_dados_select['ter_t_de'];  
                  $this->ter_t_ate = $this->nmgp_dados_select['ter_t_ate'];  
                  $this->qua_m_de = $this->nmgp_dados_select['qua_m_de'];  
                  $this->qua_m_ate = $this->nmgp_dados_select['qua_m_ate'];  
                  $this->qua_t_de = $this->nmgp_dados_select['qua_t_de'];  
                  $this->qua_t_ate = $this->nmgp_dados_select['qua_t_ate'];  
                  $this->qui_m_de = $this->nmgp_dados_select['qui_m_de'];  
                  $this->qui_m_ate = $this->nmgp_dados_select['qui_m_ate'];  
                  $this->qui_t_de = $this->nmgp_dados_select['qui_t_de'];  
                  $this->qui_t_ate = $this->nmgp_dados_select['qui_t_ate'];  
                  $this->sex_m_de = $this->nmgp_dados_select['sex_m_de'];  
                  $this->sex_m_ate = $this->nmgp_dados_select['sex_m_ate'];  
                  $this->sex_t_de = $this->nmgp_dados_select['sex_t_de'];  
                  $this->sex_t_ate = $this->nmgp_dados_select['sex_t_ate'];  
                  $this->sab_m_de = $this->nmgp_dados_select['sab_m_de'];  
                  $this->sab_m_ate = $this->nmgp_dados_select['sab_m_ate'];  
                  $this->sab_t_de = $this->nmgp_dados_select['sab_t_de'];  
                  $this->sab_t_ate = $this->nmgp_dados_select['sab_t_ate'];  
                  $this->dom_m_de = $this->nmgp_dados_select['dom_m_de'];  
                  $this->dom_m_ate = $this->nmgp_dados_select['dom_m_ate'];  
                  $this->dom_t_de = $this->nmgp_dados_select['dom_t_de'];  
                  $this->dom_t_ate = $this->nmgp_dados_select['dom_t_ate'];  
              }
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['foreign_key'] as $sFKName => $sFKValue)
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
//-- 
   function nm_db_retorna($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato < $this->pk_contrato" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato < $this->pk_contrato" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato < $this->pk_contrato" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato < $this->pk_contrato" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato < $this->pk_contrato" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato < $this->pk_contrato" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato < $this->pk_contrato" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato < $this->pk_contrato" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato < $this->pk_contrato" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato < $this->pk_contrato" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->pk_contrato = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "inicio";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_avanca($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato > $this->pk_contrato" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato > $this->pk_contrato" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato > $this->pk_contrato" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato > $this->pk_contrato" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato > $this->pk_contrato" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato > $this->pk_contrato" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato > $this->pk_contrato" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato > $this->pk_contrato" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato > $this->pk_contrato" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pk_contrato) from " . $this->Ini->nm_tabela . " where pk_contrato > $this->pk_contrato" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->pk_contrato = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "final";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_inicio($str_where_param = '') 
   {   
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela; 
     $rs = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela);
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if ($rs->fields[0] == 0) 
     { 
         $this->nmgp_opcao = "novo"; 
         $this->nm_flag_saida_novo = "S"; 
         $rs->Close(); 
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return;
     }
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->pk_contrato = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
// 
//-- 
   function nm_db_final($str_where_param = '') 
   { 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pk_contrato) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->pk_contrato = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
//
function act_cep($cep)
{
$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'on';
             
$resultado = @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.urlencode($this->cep).'&formato=query_string');
   if(!$resultado){
      $resultado = "&resultado=0&resultado_txt=erro+ao+buscar+cep";
   }
   parse_str($resultado, $retorno); 
   return $retorno;



$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off';
}
function act_classificacao()
{
$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'on';
             


if ( $this->fk_classificacao  == "7" )
	{
	
	   
		$this->nmgp_cmp_hidden["txtmensagem"] = "on"; $this->NM_ajax_info['fieldDisplay']['txtmensagem'] = 'on';
	
		$this->nmgp_cmp_hidden["seg_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['seg_m_de'] = 'off';
		$this->nmgp_cmp_hidden["seg_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['seg_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["seg_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['seg_t_de'] = 'off';
		$this->nmgp_cmp_hidden["seg_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['seg_t_ate'] = 'off';

		$this->nmgp_cmp_hidden["ter_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['ter_m_de'] = 'off';
		$this->nmgp_cmp_hidden["ter_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['ter_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["ter_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['ter_t_de'] = 'off';
		$this->nmgp_cmp_hidden["ter_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['ter_t_ate'] = 'off';

		$this->nmgp_cmp_hidden["qua_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['qua_m_de'] = 'off';
		$this->nmgp_cmp_hidden["qua_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['qua_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["qua_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['qua_t_de'] = 'off';
		$this->nmgp_cmp_hidden["qua_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['qua_t_ate'] = 'off';

		$this->nmgp_cmp_hidden["qui_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['qui_m_de'] = 'off';
		$this->nmgp_cmp_hidden["qui_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['qui_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["qui_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['qui_t_de'] = 'off';
		$this->nmgp_cmp_hidden["qui_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['qui_t_ate'] = 'off';

		$this->nmgp_cmp_hidden["sex_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['sex_m_de'] = 'off';
		$this->nmgp_cmp_hidden["sex_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['sex_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["sex_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['sex_t_de'] = 'off';
		$this->nmgp_cmp_hidden["sex_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['sex_t_ate'] = 'off';

		$this->nmgp_cmp_hidden["sab_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['sab_m_de'] = 'off';
		$this->nmgp_cmp_hidden["sab_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['sab_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["sab_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['sab_t_de'] = 'off';
		$this->nmgp_cmp_hidden["sab_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['sab_t_ate'] = 'off';

		$this->nmgp_cmp_hidden["dom_m_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['dom_m_de'] = 'off';
		$this->nmgp_cmp_hidden["dom_m_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['dom_m_ate'] = 'off';
		$this->nmgp_cmp_hidden["dom_t_de"] = "off"; $this->NM_ajax_info['fieldDisplay']['dom_t_de'] = 'off';
		$this->nmgp_cmp_hidden["dom_t_ate"] = "off"; $this->NM_ajax_info['fieldDisplay']['dom_t_ate'] = 'off';
 	}
	 else
	{
		$this->nmgp_cmp_hidden["txtmensagem"] = "off"; $this->NM_ajax_info['fieldDisplay']['txtmensagem'] = 'off';
		 
		$this->nmgp_cmp_hidden["seg_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['seg_m_de'] = 'on';
		$this->nmgp_cmp_hidden["seg_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['seg_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["seg_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['seg_t_de'] = 'on';
		$this->nmgp_cmp_hidden["seg_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['seg_t_ate'] = 'on';

		$this->nmgp_cmp_hidden["ter_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['ter_m_de'] = 'on';
		$this->nmgp_cmp_hidden["ter_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['ter_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["ter_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['ter_t_de'] = 'on';
		$this->nmgp_cmp_hidden["ter_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['ter_t_ate'] = 'on';

		$this->nmgp_cmp_hidden["qua_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['qua_m_de'] = 'on';
		$this->nmgp_cmp_hidden["qua_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['qua_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["qua_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['qua_t_de'] = 'on';
		$this->nmgp_cmp_hidden["qua_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['qua_t_ate'] = 'on';

		$this->nmgp_cmp_hidden["qui_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['qui_m_de'] = 'on';
		$this->nmgp_cmp_hidden["qui_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['qui_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["qui_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['qui_t_de'] = 'on';
		$this->nmgp_cmp_hidden["qui_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['qui_t_ate'] = 'on';

		$this->nmgp_cmp_hidden["sex_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['sex_m_de'] = 'on';
		$this->nmgp_cmp_hidden["sex_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['sex_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["sex_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['sex_t_de'] = 'on';
		$this->nmgp_cmp_hidden["sex_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['sex_t_ate'] = 'on';

		$this->nmgp_cmp_hidden["sab_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['sab_m_de'] = 'on';
		$this->nmgp_cmp_hidden["sab_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['sab_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["sab_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['sab_t_de'] = 'on';
		$this->nmgp_cmp_hidden["sab_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['sab_t_ate'] = 'on';

		$this->nmgp_cmp_hidden["dom_m_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['dom_m_de'] = 'on';
		$this->nmgp_cmp_hidden["dom_m_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['dom_m_ate'] = 'on';
		$this->nmgp_cmp_hidden["dom_t_de"] = "on"; $this->NM_ajax_info['fieldDisplay']['dom_t_de'] = 'on';
		$this->nmgp_cmp_hidden["dom_t_ate"] = "on"; $this->NM_ajax_info['fieldDisplay']['dom_t_ate'] = 'on';
	}
$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off';
}
function act_code()
{
$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'on';
             
$chars = 'abcdefghijklmnopqrstuvxywz';
$chars .= 'ABCDEFGHIJKLMNOPQRSTUVXYWZ';
$chars .= '0123456789!@$*.,;:';
$max = strlen($chars)-1;
$act_code = "sec_";
for($i=0; $i < 28; $i++)
{
	$act_code .= $chars{mt_rand(0, $max)};
}

return $act_code;

$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off';
}
function act_retiraAcento($textostring)
{
$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'on';
             
return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),
					explode(" ","a A e E i I o O u U n N c C"),$textostring);

$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off';
}
function cep_onChange($cep)
{
$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'on';
             
$original_cep = $this->cep;
$original_cidade = $this->cidade;
$original_estado = $this->estado;
$original_rua = $this->rua;
$original_bairro = $this->bairro;
$original_cep = $this->cep;

$resultado_busca =$this->act_cep($this->cep );
switch($resultado_busca['resultado']){
   case '2':
      $this->cidade  = $resultado_busca['cidade'];
      $this->estado  = $resultado_busca['uf'];
   break;
   case '1':
   $this->rua  = $resultado_busca['logradouro'];
   $this->bairro  = $resultado_busca['bairro'];
   $this->cidade  = $resultado_busca['cidade'];
   $this->estado  = $resultado_busca['uf'];
   break;   
   default:
      $msg = "CEP ".$this->cep ." não encontrado";
      $this->sc_ajax_message($msg, "Busca de CEP");   
   break;
}


$modificado_cep = $this->cep;
$modificado_cidade = $this->cidade;
$modificado_estado = $this->estado;
$modificado_rua = $this->rua;
$modificado_bairro = $this->bairro;
$modificado_cep = $this->cep;
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
if ($original_cep !== $modificado_cep || isset($this->nmgp_cmp_readonly['cep']) || (isset($bFlagRead_cep) && $bFlagRead_cep))
{
    $this->ajax_return_values_cep(true);
}
form_ap_contrato_updt_xxx_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off';
}
function fk_classificacao_onChange()
{
$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'on';
             
$original_fk_classificacao = $this->fk_classificacao;
$original_txtmensagem = $this->txtmensagem;
$original_seg_m_de = $this->seg_m_de;
$original_seg_m_ate = $this->seg_m_ate;
$original_seg_t_de = $this->seg_t_de;
$original_seg_t_ate = $this->seg_t_ate;
$original_ter_m_de = $this->ter_m_de;
$original_ter_m_ate = $this->ter_m_ate;
$original_ter_t_de = $this->ter_t_de;
$original_ter_t_ate = $this->ter_t_ate;
$original_qua_m_de = $this->qua_m_de;
$original_qua_m_ate = $this->qua_m_ate;
$original_qua_t_de = $this->qua_t_de;
$original_qua_t_ate = $this->qua_t_ate;
$original_qui_m_de = $this->qui_m_de;
$original_qui_m_ate = $this->qui_m_ate;
$original_qui_t_de = $this->qui_t_de;
$original_qui_t_ate = $this->qui_t_ate;
$original_sex_m_de = $this->sex_m_de;
$original_sex_m_ate = $this->sex_m_ate;
$original_sex_t_de = $this->sex_t_de;
$original_sex_t_ate = $this->sex_t_ate;
$original_sab_m_de = $this->sab_m_de;
$original_sab_m_ate = $this->sab_m_ate;
$original_sab_t_de = $this->sab_t_de;
$original_sab_t_ate = $this->sab_t_ate;
$original_dom_m_de = $this->dom_m_de;
$original_dom_m_ate = $this->dom_m_ate;
$original_dom_t_de = $this->dom_t_de;
$original_dom_t_ate = $this->dom_t_ate;
$this->act_classificacao();

$modificado_fk_classificacao = $this->fk_classificacao;
$modificado_txtmensagem = $this->txtmensagem;
$modificado_seg_m_de = $this->seg_m_de;
$modificado_seg_m_ate = $this->seg_m_ate;
$modificado_seg_t_de = $this->seg_t_de;
$modificado_seg_t_ate = $this->seg_t_ate;
$modificado_ter_m_de = $this->ter_m_de;
$modificado_ter_m_ate = $this->ter_m_ate;
$modificado_ter_t_de = $this->ter_t_de;
$modificado_ter_t_ate = $this->ter_t_ate;
$modificado_qua_m_de = $this->qua_m_de;
$modificado_qua_m_ate = $this->qua_m_ate;
$modificado_qua_t_de = $this->qua_t_de;
$modificado_qua_t_ate = $this->qua_t_ate;
$modificado_qui_m_de = $this->qui_m_de;
$modificado_qui_m_ate = $this->qui_m_ate;
$modificado_qui_t_de = $this->qui_t_de;
$modificado_qui_t_ate = $this->qui_t_ate;
$modificado_sex_m_de = $this->sex_m_de;
$modificado_sex_m_ate = $this->sex_m_ate;
$modificado_sex_t_de = $this->sex_t_de;
$modificado_sex_t_ate = $this->sex_t_ate;
$modificado_sab_m_de = $this->sab_m_de;
$modificado_sab_m_ate = $this->sab_m_ate;
$modificado_sab_t_de = $this->sab_t_de;
$modificado_sab_t_ate = $this->sab_t_ate;
$modificado_dom_m_de = $this->dom_m_de;
$modificado_dom_m_ate = $this->dom_m_ate;
$modificado_dom_t_de = $this->dom_t_de;
$modificado_dom_t_ate = $this->dom_t_ate;
$this->nm_formatar_campos('fk_classificacao', 'txtmensagem', 'seg_m_de', 'seg_m_ate', 'seg_t_de', 'seg_t_ate', 'ter_m_de', 'ter_m_ate', 'ter_t_de', 'ter_t_ate', 'qua_m_de', 'qua_m_ate', 'qua_t_de', 'qua_t_ate', 'qui_m_de', 'qui_m_ate', 'qui_t_de', 'qui_t_ate', 'sex_m_de', 'sex_m_ate', 'sex_t_de', 'sex_t_ate', 'sab_m_de', 'sab_m_ate', 'sab_t_de', 'sab_t_ate', 'dom_m_de', 'dom_m_ate', 'dom_t_de', 'dom_t_ate');
if ($original_fk_classificacao !== $modificado_fk_classificacao || isset($this->nmgp_cmp_readonly['fk_classificacao']) || (isset($bFlagRead_fk_classificacao) && $bFlagRead_fk_classificacao))
{
    $this->ajax_return_values_fk_classificacao(true);
}
if ($original_txtmensagem !== $modificado_txtmensagem || isset($this->nmgp_cmp_readonly['txtmensagem']) || (isset($bFlagRead_txtmensagem) && $bFlagRead_txtmensagem))
{
    $this->ajax_return_values_txtmensagem(true);
}
if ($original_seg_m_de !== $modificado_seg_m_de || isset($this->nmgp_cmp_readonly['seg_m_de']) || (isset($bFlagRead_seg_m_de) && $bFlagRead_seg_m_de))
{
    $this->ajax_return_values_seg_m_de(true);
}
if ($original_seg_m_ate !== $modificado_seg_m_ate || isset($this->nmgp_cmp_readonly['seg_m_ate']) || (isset($bFlagRead_seg_m_ate) && $bFlagRead_seg_m_ate))
{
    $this->ajax_return_values_seg_m_ate(true);
}
if ($original_seg_t_de !== $modificado_seg_t_de || isset($this->nmgp_cmp_readonly['seg_t_de']) || (isset($bFlagRead_seg_t_de) && $bFlagRead_seg_t_de))
{
    $this->ajax_return_values_seg_t_de(true);
}
if ($original_seg_t_ate !== $modificado_seg_t_ate || isset($this->nmgp_cmp_readonly['seg_t_ate']) || (isset($bFlagRead_seg_t_ate) && $bFlagRead_seg_t_ate))
{
    $this->ajax_return_values_seg_t_ate(true);
}
if ($original_ter_m_de !== $modificado_ter_m_de || isset($this->nmgp_cmp_readonly['ter_m_de']) || (isset($bFlagRead_ter_m_de) && $bFlagRead_ter_m_de))
{
    $this->ajax_return_values_ter_m_de(true);
}
if ($original_ter_m_ate !== $modificado_ter_m_ate || isset($this->nmgp_cmp_readonly['ter_m_ate']) || (isset($bFlagRead_ter_m_ate) && $bFlagRead_ter_m_ate))
{
    $this->ajax_return_values_ter_m_ate(true);
}
if ($original_ter_t_de !== $modificado_ter_t_de || isset($this->nmgp_cmp_readonly['ter_t_de']) || (isset($bFlagRead_ter_t_de) && $bFlagRead_ter_t_de))
{
    $this->ajax_return_values_ter_t_de(true);
}
if ($original_ter_t_ate !== $modificado_ter_t_ate || isset($this->nmgp_cmp_readonly['ter_t_ate']) || (isset($bFlagRead_ter_t_ate) && $bFlagRead_ter_t_ate))
{
    $this->ajax_return_values_ter_t_ate(true);
}
if ($original_qua_m_de !== $modificado_qua_m_de || isset($this->nmgp_cmp_readonly['qua_m_de']) || (isset($bFlagRead_qua_m_de) && $bFlagRead_qua_m_de))
{
    $this->ajax_return_values_qua_m_de(true);
}
if ($original_qua_m_ate !== $modificado_qua_m_ate || isset($this->nmgp_cmp_readonly['qua_m_ate']) || (isset($bFlagRead_qua_m_ate) && $bFlagRead_qua_m_ate))
{
    $this->ajax_return_values_qua_m_ate(true);
}
if ($original_qua_t_de !== $modificado_qua_t_de || isset($this->nmgp_cmp_readonly['qua_t_de']) || (isset($bFlagRead_qua_t_de) && $bFlagRead_qua_t_de))
{
    $this->ajax_return_values_qua_t_de(true);
}
if ($original_qua_t_ate !== $modificado_qua_t_ate || isset($this->nmgp_cmp_readonly['qua_t_ate']) || (isset($bFlagRead_qua_t_ate) && $bFlagRead_qua_t_ate))
{
    $this->ajax_return_values_qua_t_ate(true);
}
if ($original_qui_m_de !== $modificado_qui_m_de || isset($this->nmgp_cmp_readonly['qui_m_de']) || (isset($bFlagRead_qui_m_de) && $bFlagRead_qui_m_de))
{
    $this->ajax_return_values_qui_m_de(true);
}
if ($original_qui_m_ate !== $modificado_qui_m_ate || isset($this->nmgp_cmp_readonly['qui_m_ate']) || (isset($bFlagRead_qui_m_ate) && $bFlagRead_qui_m_ate))
{
    $this->ajax_return_values_qui_m_ate(true);
}
if ($original_qui_t_de !== $modificado_qui_t_de || isset($this->nmgp_cmp_readonly['qui_t_de']) || (isset($bFlagRead_qui_t_de) && $bFlagRead_qui_t_de))
{
    $this->ajax_return_values_qui_t_de(true);
}
if ($original_qui_t_ate !== $modificado_qui_t_ate || isset($this->nmgp_cmp_readonly['qui_t_ate']) || (isset($bFlagRead_qui_t_ate) && $bFlagRead_qui_t_ate))
{
    $this->ajax_return_values_qui_t_ate(true);
}
if ($original_sex_m_de !== $modificado_sex_m_de || isset($this->nmgp_cmp_readonly['sex_m_de']) || (isset($bFlagRead_sex_m_de) && $bFlagRead_sex_m_de))
{
    $this->ajax_return_values_sex_m_de(true);
}
if ($original_sex_m_ate !== $modificado_sex_m_ate || isset($this->nmgp_cmp_readonly['sex_m_ate']) || (isset($bFlagRead_sex_m_ate) && $bFlagRead_sex_m_ate))
{
    $this->ajax_return_values_sex_m_ate(true);
}
if ($original_sex_t_de !== $modificado_sex_t_de || isset($this->nmgp_cmp_readonly['sex_t_de']) || (isset($bFlagRead_sex_t_de) && $bFlagRead_sex_t_de))
{
    $this->ajax_return_values_sex_t_de(true);
}
if ($original_sex_t_ate !== $modificado_sex_t_ate || isset($this->nmgp_cmp_readonly['sex_t_ate']) || (isset($bFlagRead_sex_t_ate) && $bFlagRead_sex_t_ate))
{
    $this->ajax_return_values_sex_t_ate(true);
}
if ($original_sab_m_de !== $modificado_sab_m_de || isset($this->nmgp_cmp_readonly['sab_m_de']) || (isset($bFlagRead_sab_m_de) && $bFlagRead_sab_m_de))
{
    $this->ajax_return_values_sab_m_de(true);
}
if ($original_sab_m_ate !== $modificado_sab_m_ate || isset($this->nmgp_cmp_readonly['sab_m_ate']) || (isset($bFlagRead_sab_m_ate) && $bFlagRead_sab_m_ate))
{
    $this->ajax_return_values_sab_m_ate(true);
}
if ($original_sab_t_de !== $modificado_sab_t_de || isset($this->nmgp_cmp_readonly['sab_t_de']) || (isset($bFlagRead_sab_t_de) && $bFlagRead_sab_t_de))
{
    $this->ajax_return_values_sab_t_de(true);
}
if ($original_sab_t_ate !== $modificado_sab_t_ate || isset($this->nmgp_cmp_readonly['sab_t_ate']) || (isset($bFlagRead_sab_t_ate) && $bFlagRead_sab_t_ate))
{
    $this->ajax_return_values_sab_t_ate(true);
}
if ($original_dom_m_de !== $modificado_dom_m_de || isset($this->nmgp_cmp_readonly['dom_m_de']) || (isset($bFlagRead_dom_m_de) && $bFlagRead_dom_m_de))
{
    $this->ajax_return_values_dom_m_de(true);
}
if ($original_dom_m_ate !== $modificado_dom_m_ate || isset($this->nmgp_cmp_readonly['dom_m_ate']) || (isset($bFlagRead_dom_m_ate) && $bFlagRead_dom_m_ate))
{
    $this->ajax_return_values_dom_m_ate(true);
}
if ($original_dom_t_de !== $modificado_dom_t_de || isset($this->nmgp_cmp_readonly['dom_t_de']) || (isset($bFlagRead_dom_t_de) && $bFlagRead_dom_t_de))
{
    $this->ajax_return_values_dom_t_de(true);
}
if ($original_dom_t_ate !== $modificado_dom_t_ate || isset($this->nmgp_cmp_readonly['dom_t_ate']) || (isset($bFlagRead_dom_t_ate) && $bFlagRead_dom_t_ate))
{
    $this->ajax_return_values_dom_t_ate(true);
}
form_ap_contrato_updt_xxx_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_ap_contrato_updt_xxx_mob']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_ap_contrato_updt_xxx_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['retorno_edit'] . "';";
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
       $out_fachada = "";  
   } 
   else 
   { 
       $out_fachada = $this->fachada;  
   } 
   if ($this->fachada != "" && $this->fachada != "none")   
   { 
       $path_fachada = $this->Ini->root . $this->Ini->path_imagens . "" . $_SESSION['pastacliente'] . "/" . $this->fachada;
       $md5_fachada  = md5("" . $_SESSION['pastacliente'] . $this->fachada);
       if (is_file($path_fachada))  
       { 
           $NM_ler_img = true;
           $out_fachada = $this->Ini->path_imag_temp . "/sc_fachada_" . $md5_fachada . ".gif" ;  
           if (is_file($this->Ini->root . $out_fachada))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_fachada) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_fachada = fopen($path_fachada, "r") ; 
               $reg_fachada = fread($tmp_fachada, filesize($path_fachada)) ; 
               fclose($tmp_fachada) ;  
               $arq_fachada = fopen($this->Ini->root . $out_fachada, "w") ;  
               fwrite($arq_fachada, $reg_fachada) ;  
               fclose($arq_fachada) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fachada);
           $this->nmgp_return_img['fachada'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['fachada'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $out1_fachada = $out_fachada; 
           $md5_fachada  = md5("" . $_SESSION['pastacliente'] . $this->fachada);
           $out_fachada = $this->Ini->path_imag_temp . "/sc_fachada_250250" . $md5_fachada . ".gif" ;  
           if (is_file($this->Ini->root . $out_fachada))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_fachada) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_fachada);
                   $sc_obj_img->setWidth(250);
                   $sc_obj_img->setHeight(250);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_fachada);
               } 
               else 
               { 
                   $out_fachada = $out1_fachada;
               } 
           } 
       } 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_fachada;
       if (isset($temp_out_fachada))
       {
           $out_fachada = $temp_out_fachada;
       }
       global $temp_out1_fachada;
       if (isset($temp_out1_fachada))
       {
           $out1_fachada = $temp_out1_fachada;
       }
   }
    include_once("form_ap_contrato_updt_xxx_mob_form0.php");
 }

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['csrf_token'];
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

   function Form_lookup_fk_classificacao()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao'] = array(); 
    }

   $old_value_datacadastro = $this->datacadastro;
   $old_value_cnpj = $this->cnpj;
   $old_value_seg_m_de = $this->seg_m_de;
   $old_value_seg_m_ate = $this->seg_m_ate;
   $old_value_seg_t_de = $this->seg_t_de;
   $old_value_seg_t_ate = $this->seg_t_ate;
   $old_value_ter_m_de = $this->ter_m_de;
   $old_value_ter_m_ate = $this->ter_m_ate;
   $old_value_ter_t_de = $this->ter_t_de;
   $old_value_ter_t_ate = $this->ter_t_ate;
   $old_value_qua_m_de = $this->qua_m_de;
   $old_value_qua_m_ate = $this->qua_m_ate;
   $old_value_qua_t_de = $this->qua_t_de;
   $old_value_qua_t_ate = $this->qua_t_ate;
   $old_value_qui_m_de = $this->qui_m_de;
   $old_value_qui_m_ate = $this->qui_m_ate;
   $old_value_qui_t_de = $this->qui_t_de;
   $old_value_qui_t_ate = $this->qui_t_ate;
   $old_value_sex_m_de = $this->sex_m_de;
   $old_value_sex_m_ate = $this->sex_m_ate;
   $old_value_sex_t_de = $this->sex_t_de;
   $old_value_sex_t_ate = $this->sex_t_ate;
   $old_value_sab_m_de = $this->sab_m_de;
   $old_value_sab_m_ate = $this->sab_m_ate;
   $old_value_sab_t_de = $this->sab_t_de;
   $old_value_sab_t_ate = $this->sab_t_ate;
   $old_value_dom_m_de = $this->dom_m_de;
   $old_value_dom_m_ate = $this->dom_m_ate;
   $old_value_dom_t_de = $this->dom_t_de;
   $old_value_dom_t_ate = $this->dom_t_ate;
   $old_value_cep = $this->cep;
   $old_value_telefone = $this->telefone;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_datacadastro = $this->datacadastro;
   $unformatted_value_cnpj = $this->cnpj;
   $unformatted_value_seg_m_de = $this->seg_m_de;
   $unformatted_value_seg_m_ate = $this->seg_m_ate;
   $unformatted_value_seg_t_de = $this->seg_t_de;
   $unformatted_value_seg_t_ate = $this->seg_t_ate;
   $unformatted_value_ter_m_de = $this->ter_m_de;
   $unformatted_value_ter_m_ate = $this->ter_m_ate;
   $unformatted_value_ter_t_de = $this->ter_t_de;
   $unformatted_value_ter_t_ate = $this->ter_t_ate;
   $unformatted_value_qua_m_de = $this->qua_m_de;
   $unformatted_value_qua_m_ate = $this->qua_m_ate;
   $unformatted_value_qua_t_de = $this->qua_t_de;
   $unformatted_value_qua_t_ate = $this->qua_t_ate;
   $unformatted_value_qui_m_de = $this->qui_m_de;
   $unformatted_value_qui_m_ate = $this->qui_m_ate;
   $unformatted_value_qui_t_de = $this->qui_t_de;
   $unformatted_value_qui_t_ate = $this->qui_t_ate;
   $unformatted_value_sex_m_de = $this->sex_m_de;
   $unformatted_value_sex_m_ate = $this->sex_m_ate;
   $unformatted_value_sex_t_de = $this->sex_t_de;
   $unformatted_value_sex_t_ate = $this->sex_t_ate;
   $unformatted_value_sab_m_de = $this->sab_m_de;
   $unformatted_value_sab_m_ate = $this->sab_m_ate;
   $unformatted_value_sab_t_de = $this->sab_t_de;
   $unformatted_value_sab_t_ate = $this->sab_t_ate;
   $unformatted_value_dom_m_de = $this->dom_m_de;
   $unformatted_value_dom_m_ate = $this->dom_m_ate;
   $unformatted_value_dom_t_de = $this->dom_t_de;
   $unformatted_value_dom_t_ate = $this->dom_t_ate;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_telefone = $this->telefone;

   $nm_comando = "SELECT pk_classificacao, descricao  FROM ap_classificacao  ORDER BY descricao";

   $this->datacadastro = $old_value_datacadastro;
   $this->cnpj = $old_value_cnpj;
   $this->seg_m_de = $old_value_seg_m_de;
   $this->seg_m_ate = $old_value_seg_m_ate;
   $this->seg_t_de = $old_value_seg_t_de;
   $this->seg_t_ate = $old_value_seg_t_ate;
   $this->ter_m_de = $old_value_ter_m_de;
   $this->ter_m_ate = $old_value_ter_m_ate;
   $this->ter_t_de = $old_value_ter_t_de;
   $this->ter_t_ate = $old_value_ter_t_ate;
   $this->qua_m_de = $old_value_qua_m_de;
   $this->qua_m_ate = $old_value_qua_m_ate;
   $this->qua_t_de = $old_value_qua_t_de;
   $this->qua_t_ate = $old_value_qua_t_ate;
   $this->qui_m_de = $old_value_qui_m_de;
   $this->qui_m_ate = $old_value_qui_m_ate;
   $this->qui_t_de = $old_value_qui_t_de;
   $this->qui_t_ate = $old_value_qui_t_ate;
   $this->sex_m_de = $old_value_sex_m_de;
   $this->sex_m_ate = $old_value_sex_m_ate;
   $this->sex_t_de = $old_value_sex_t_de;
   $this->sex_t_ate = $old_value_sex_t_ate;
   $this->sab_m_de = $old_value_sab_m_de;
   $this->sab_m_ate = $old_value_sab_m_ate;
   $this->sab_t_de = $old_value_sab_t_de;
   $this->sab_t_ate = $old_value_sab_t_ate;
   $this->dom_m_de = $old_value_dom_m_de;
   $this->dom_m_ate = $old_value_dom_m_ate;
   $this->dom_t_de = $old_value_dom_t_de;
   $this->dom_t_ate = $old_value_dom_t_ate;
   $this->cep = $old_value_cep;
   $this->telefone = $old_value_telefone;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['Lookup_fk_classificacao'][] = $rs->fields[0];
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
   function SC_fast_search($field, $arg_search, $data_search)
   {
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_ap_contrato_updt_xxx_mob_pack_ajax_response();
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
          $this->SC_monta_condicao($comando, "pk_contrato", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_fk_classificacao($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "fk_classificacao", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cnpj", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "inscricao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "razao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "fantasia", $arg_search, $data_search);
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
          $this->SC_monta_condicao($comando, "bairro", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rua", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "complemento", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numero", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cep", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "fachada", $arg_search, $data_search);
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
          $this->SC_monta_condicao($comando, "email", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "telefone", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "senha_usuario", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nome_contato", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "ativo", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cnpj", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "inscricao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_fk_classificacao($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "fk_classificacao", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "razao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "fantasia", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "email", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cep", $arg_search, $data_search);
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
          $this->SC_monta_condicao($comando, "bairro", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rua", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "complemento", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numero", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "fachada", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nome_contato", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "telefone", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_ap_contrato_updt_xxx_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['total'] = $qt_geral_reg_form_ap_contrato_updt_xxx_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_ap_contrato_updt_xxx_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_ap_contrato_updt_xxx_mob_pack_ajax_response();
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
      $nm_numeric[] = "pk_contrato";$nm_numeric[] = "fk_classificacao";$nm_numeric[] = "ativo";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['decimal_db'] == ".")
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
      $Nm_datas['datacadastro'] = "date";$Nm_datas['activate_date'] = "datetime";$Nm_datas['seg_m_de'] = "time";$Nm_datas['seg_m_ate'] = "time";$Nm_datas['seg_t_de'] = "time";$Nm_datas['seg_t_ate'] = "time";$Nm_datas['ter_m_de'] = "time";$Nm_datas['ter_m_ate'] = "time";$Nm_datas['ter_t_de'] = "time";$Nm_datas['ter_t_ate'] = "time";$Nm_datas['qua_m_de'] = "time";$Nm_datas['qua_m_ate'] = "time";$Nm_datas['qua_t_de'] = "time";$Nm_datas['qua_t_ate'] = "time";$Nm_datas['qui_m_de'] = "time";$Nm_datas['qui_m_ate'] = "time";$Nm_datas['qui_t_de'] = "time";$Nm_datas['qui_t_ate'] = "time";$Nm_datas['sex_m_de'] = "time";$Nm_datas['sex_m_ate'] = "time";$Nm_datas['sex_t_de'] = "time";$Nm_datas['sex_t_ate'] = "time";$Nm_datas['sab_m_de'] = "time";$Nm_datas['sab_m_ate'] = "time";$Nm_datas['sab_t_de'] = "time";$Nm_datas['sab_t_ate'] = "time";$Nm_datas['dom_m_de'] = "time";$Nm_datas['dom_m_ate'] = "time";$Nm_datas['dom_t_de'] = "time";$Nm_datas['dom_t_ate'] = "time";
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
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['SC_sep_date1'];
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
   function SC_lookup_fk_classificacao($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT descricao, pk_classificacao FROM ap_classificacao WHERE (descricao LIKE '%$campo%')" ; 
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
       $nmgp_saida_form = "form_ap_contrato_updt_xxx_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_ap_contrato_updt_xxx_mob_fim.php";
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
       form_ap_contrato_updt_xxx_mob_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_updt_xxx_mob']['masterValue']);
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
    function sc_ajax_message($sMessage, $sTitle = '', $sParam = '', $sRedirPar = '')
    {
        if ($this->NM_ajax_flag)
        {
            if ('' != $sParam)
            {
                $aParamList = explode('&', $sParam);
                foreach ($aParamList as $sParamItem)
                {
                    $aParamData = explode('=', $sParamItem);
                    if (2 == sizeof($aParamData) &&
                        in_array($aParamData[0], array('modal', 'timeout', 'button', 'button_label', 'top', 'left', 'width', 'height', 'redir', 'redir_target', 'show_close', 'body_icon')))
                    {
                        $this->NM_ajax_info['ajaxMessage'][$aParamData[0]] = $aParamData[1];
                    }
                }
            }
            if (isset($this->NM_ajax_info['ajaxMessage']['redir']) && '' != $this->NM_ajax_info['ajaxMessage']['redir'] && '.php' == substr($this->NM_ajax_info['ajaxMessage']['redir'], -4) && 'http' != substr($this->NM_ajax_info['ajaxMessage']['redir'], 0, 4))
            {
                $this->NM_ajax_info['ajaxMessage']['redir'] = $this->Ini->path_link . SC_dir_app_name(substr($this->NM_ajax_info['ajaxMessage']['redir'], 0, -4)) . '/' . $this->NM_ajax_info['ajaxMessage']['redir'];
            }
            if ('' != $sRedirPar)
            {
                $this->NM_ajax_info['ajaxMessage']['redir_par'] = str_replace('=', '?#?', str_replace(';', '?@?', $sRedirPar));
            }
            else
            {
                $this->NM_ajax_info['ajaxMessage']['redir_par'] = '';
            }
            $this->NM_ajax_info['ajaxMessage']['message'] = NM_charset_to_utf8($sMessage);
            $this->NM_ajax_info['ajaxMessage']['title']   = NM_charset_to_utf8($sTitle);
        }
    } // sc_ajax_message
}
?>
