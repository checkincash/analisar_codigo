<?php

class consulta_eventos_rtf
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Texto_tag;
   var $Arquivo;
   var $Tit_doc;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();

   //---- 
   function __construct()
   {
      $this->nm_data   = new nm_data("pt_br");
      $this->Texto_tag = "";
   }

   //---- 
   function monta_rtf()
   {
      $this->inicializa_vars();
      $this->gera_texto_tag();
      $this->grava_arquivo_rtf();
      $this->monta_html();
   }

   //----- 
   function inicializa_vars()
   {
      global $nm_lang;
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->Arquivo    = "sc_rtf";
      $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arquivo   .= "_consulta_eventos";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "consulta_eventos.rtf";
   }

   //----- 
   function gera_texto_tag()
   {
     global $nm_lang;
      global
             $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['consulta_eventos']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['consulta_eventos']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['consulta_eventos']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->data_criacao = $Busca_temp['data_criacao']; 
          $tmp_pos = strpos($this->data_criacao, "##@@");
          if ($tmp_pos !== false && !is_array($this->data_criacao))
          {
              $this->data_criacao = substr($this->data_criacao, 0, $tmp_pos);
          }
          $this->data_criacao_2 = $Busca_temp['data_criacao_input_2']; 
          $this->situacao = $Busca_temp['situacao']; 
          $tmp_pos = strpos($this->situacao, "##@@");
          if ($tmp_pos !== false && !is_array($this->situacao))
          {
              $this->situacao = substr($this->situacao, 0, $tmp_pos);
          }
          $this->destaque = $Busca_temp['destaque']; 
          $tmp_pos = strpos($this->destaque, "##@@");
          if ($tmp_pos !== false && !is_array($this->destaque))
          {
              $this->destaque = substr($this->destaque, 0, $tmp_pos);
          }
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['rtf_name']);
      }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT situacao, data_criacao, nomenclatura, estado, cidade, destaque, pk_publicador, fk_contrato, foto_publicacao, texto_publicacao from (SELECT     pk_publicador,     fk_contrato,     data_criacao,     nomenclatura,     foto_publicacao,     texto_publicacao,     gera_dados,     cep,     bairro,     rua,     numero,     complemento,     cidade,     estado,     latitude,     longitude,     destaque,     pdesconto,     situacao FROM     ap_contrato_publicador where fk_contrato = ( select pk_contrato from ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "' )) nm_sel_esp"; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT situacao, data_criacao, nomenclatura, estado, cidade, destaque, pk_publicador, fk_contrato, foto_publicacao, texto_publicacao from (SELECT     pk_publicador,     fk_contrato,     data_criacao,     nomenclatura,     foto_publicacao,     texto_publicacao,     gera_dados,     cep,     bairro,     rua,     numero,     complemento,     cidade,     estado,     latitude,     longitude,     destaque,     pdesconto,     situacao FROM     ap_contrato_publicador where fk_contrato = ( select pk_contrato from ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "' )) nm_sel_esp"; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nmgp_select = "SELECT situacao, data_criacao, nomenclatura, estado, cidade, destaque, pk_publicador, fk_contrato, foto_publicacao, texto_publicacao from (SELECT     pk_publicador,     fk_contrato,     data_criacao,     nomenclatura,     foto_publicacao,     texto_publicacao,     gera_dados,     cep,     bairro,     rua,     numero,     complemento,     cidade,     estado,     latitude,     longitude,     destaque,     pdesconto,     situacao FROM     ap_contrato_publicador where fk_contrato = ( select pk_contrato from ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "' )) nm_sel_esp"; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT situacao, data_criacao, nomenclatura, estado, cidade, destaque, pk_publicador, fk_contrato, foto_publicacao, texto_publicacao from (SELECT     pk_publicador,     fk_contrato,     data_criacao,     nomenclatura,     foto_publicacao,     texto_publicacao,     gera_dados,     cep,     bairro,     rua,     numero,     complemento,     cidade,     estado,     latitude,     longitude,     destaque,     pdesconto,     situacao FROM     ap_contrato_publicador where fk_contrato = ( select pk_contrato from ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "' )) nm_sel_esp"; 
       } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT situacao, data_criacao, nomenclatura, estado, cidade, destaque, pk_publicador, fk_contrato, foto_publicacao, texto_publicacao from (SELECT     pk_publicador,     fk_contrato,     data_criacao,     nomenclatura,     foto_publicacao,     texto_publicacao,     gera_dados,     cep,     bairro,     rua,     numero,     complemento,     cidade,     estado,     latitude,     longitude,     destaque,     pdesconto,     situacao FROM     ap_contrato_publicador where fk_contrato = ( select pk_contrato from ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "' )) nm_sel_esp"; 
       } 
      else 
      { 
          $nmgp_select = "SELECT situacao, data_criacao, nomenclatura, estado, cidade, destaque, pk_publicador, fk_contrato, foto_publicacao, texto_publicacao from (SELECT     pk_publicador,     fk_contrato,     data_criacao,     nomenclatura,     foto_publicacao,     texto_publicacao,     gera_dados,     cep,     bairro,     rua,     numero,     complemento,     cidade,     estado,     latitude,     longitude,     destaque,     pdesconto,     situacao FROM     ap_contrato_publicador where fk_contrato = ( select pk_contrato from ap_contrato where cnpj = '" . $_SESSION['usr_cnpj'] . "' )) nm_sel_esp"; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['situacao'])) ? $this->New_label['situacao'] : "Situacao"; 
          if ($Cada_col == "situacao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['data_criacao'])) ? $this->New_label['data_criacao'] : "Data Criacao"; 
          if ($Cada_col == "data_criacao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['nomenclatura'])) ? $this->New_label['nomenclatura'] : "Titulo do evento"; 
          if ($Cada_col == "nomenclatura" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['estado'])) ? $this->New_label['estado'] : "Estado"; 
          if ($Cada_col == "estado" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['cidade'])) ? $this->New_label['cidade'] : "Cidade"; 
          if ($Cada_col == "cidade" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['destaque'])) ? $this->New_label['destaque'] : "Destaque"; 
          if ($Cada_col == "destaque" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pk_publicador'])) ? $this->New_label['pk_publicador'] : "Pk Publicador"; 
          if ($Cada_col == "pk_publicador" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['fk_contrato'])) ? $this->New_label['fk_contrato'] : "Fk Contrato"; 
          if ($Cada_col == "fk_contrato" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['foto_publicacao'])) ? $this->New_label['foto_publicacao'] : "Foto Publicacao"; 
          if ($Cada_col == "foto_publicacao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['texto_publicacao'])) ? $this->New_label['texto_publicacao'] : "Texto Publicacao"; 
          if ($Cada_col == "texto_publicacao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
      } 
      $this->Texto_tag .= "</tr>\r\n";
      while (!$rs->EOF)
      {
         $this->Texto_tag .= "<tr>\r\n";
         $this->situacao = $rs->fields[0] ;  
         $this->data_criacao = $rs->fields[1] ;  
         $this->nomenclatura = $rs->fields[2] ;  
         $this->estado = $rs->fields[3] ;  
         $this->cidade = $rs->fields[4] ;  
         $this->destaque = $rs->fields[5] ;  
         $this->pk_publicador = $rs->fields[6] ;  
         $this->fk_contrato = $rs->fields[7] ;  
         $this->foto_publicacao = $rs->fields[8] ;  
         $this->texto_publicacao = $rs->fields[9] ;  
         //----- lookup - situacao
         $this->look_situacao = $this->situacao; 
         $this->Lookup->lookup_situacao($this->look_situacao); 
         $this->look_situacao = ($this->look_situacao == "&nbsp;") ? "" : $this->look_situacao; 
         //----- lookup - destaque
         $this->look_destaque = $this->destaque; 
         $this->Lookup->lookup_destaque($this->look_destaque); 
         $this->look_destaque = ($this->look_destaque == "&nbsp;") ? "" : $this->look_destaque; 
         $this->sc_proc_grid = true; 
         $_SESSION['scriptcase']['consulta_eventos']['contr_erro'] = 'on';
 $this->reg  = 1;
$_SESSION['scriptcase']['consulta_eventos']['contr_erro'] = 'off'; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                $NM_func_exp = "NM_export_" . $Cada_col;
                $this->$NM_func_exp();
            } 
         } 
         $this->Texto_tag .= "</tr>\r\n";
         $rs->MoveNext();
      }
      $this->Texto_tag .= "</table>\r\n";

      $rs->Close();
   }
   //----- situacao
   function NM_export_situacao()
   {
         $this->look_situacao = html_entity_decode($this->look_situacao, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->look_situacao = strip_tags($this->look_situacao);
         if (!NM_is_utf8($this->look_situacao))
         {
             $this->look_situacao = sc_convert_encoding($this->look_situacao, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->look_situacao = str_replace('<', '&lt;', $this->look_situacao);
         $this->look_situacao = str_replace('>', '&gt;', $this->look_situacao);
         $this->Texto_tag .= "<td>" . $this->look_situacao . "</td>\r\n";
   }
   //----- data_criacao
   function NM_export_data_criacao()
   {
         $conteudo_x =  $this->data_criacao;
         nm_conv_limpa_dado($conteudo_x, "");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->data_criacao, "");
             $this->data_criacao = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
         } 
         if (!NM_is_utf8($this->data_criacao))
         {
             $this->data_criacao = sc_convert_encoding($this->data_criacao, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->data_criacao = str_replace('<', '&lt;', $this->data_criacao);
         $this->data_criacao = str_replace('>', '&gt;', $this->data_criacao);
         $this->Texto_tag .= "<td>" . $this->data_criacao . "</td>\r\n";
   }
   //----- nomenclatura
   function NM_export_nomenclatura()
   {
         $this->nomenclatura = html_entity_decode($this->nomenclatura, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->nomenclatura = strip_tags($this->nomenclatura);
         if (!NM_is_utf8($this->nomenclatura))
         {
             $this->nomenclatura = sc_convert_encoding($this->nomenclatura, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->nomenclatura = str_replace('<', '&lt;', $this->nomenclatura);
         $this->nomenclatura = str_replace('>', '&gt;', $this->nomenclatura);
         $this->Texto_tag .= "<td>" . $this->nomenclatura . "</td>\r\n";
   }
   //----- estado
   function NM_export_estado()
   {
         $this->estado = html_entity_decode($this->estado, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->estado = strip_tags($this->estado);
         if (!NM_is_utf8($this->estado))
         {
             $this->estado = sc_convert_encoding($this->estado, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->estado = str_replace('<', '&lt;', $this->estado);
         $this->estado = str_replace('>', '&gt;', $this->estado);
         $this->Texto_tag .= "<td>" . $this->estado . "</td>\r\n";
   }
   //----- cidade
   function NM_export_cidade()
   {
         $this->cidade = html_entity_decode($this->cidade, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->cidade = strip_tags($this->cidade);
         if (!NM_is_utf8($this->cidade))
         {
             $this->cidade = sc_convert_encoding($this->cidade, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->cidade = str_replace('<', '&lt;', $this->cidade);
         $this->cidade = str_replace('>', '&gt;', $this->cidade);
         $this->Texto_tag .= "<td>" . $this->cidade . "</td>\r\n";
   }
   //----- destaque
   function NM_export_destaque()
   {
         if (!NM_is_utf8($this->look_destaque))
         {
             $this->look_destaque = sc_convert_encoding($this->look_destaque, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->look_destaque = str_replace('<', '&lt;', $this->look_destaque);
         $this->look_destaque = str_replace('>', '&gt;', $this->look_destaque);
         $this->Texto_tag .= "<td>" . $this->look_destaque . "</td>\r\n";
   }
   //----- pk_publicador
   function NM_export_pk_publicador()
   {
         nmgp_Form_Num_Val($this->pk_publicador, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->pk_publicador))
         {
             $this->pk_publicador = sc_convert_encoding($this->pk_publicador, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->pk_publicador = str_replace('<', '&lt;', $this->pk_publicador);
         $this->pk_publicador = str_replace('>', '&gt;', $this->pk_publicador);
         $this->Texto_tag .= "<td>" . $this->pk_publicador . "</td>\r\n";
   }
   //----- fk_contrato
   function NM_export_fk_contrato()
   {
         nmgp_Form_Num_Val($this->fk_contrato, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->fk_contrato))
         {
             $this->fk_contrato = sc_convert_encoding($this->fk_contrato, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->fk_contrato = str_replace('<', '&lt;', $this->fk_contrato);
         $this->fk_contrato = str_replace('>', '&gt;', $this->fk_contrato);
         $this->Texto_tag .= "<td>" . $this->fk_contrato . "</td>\r\n";
   }
   //----- foto_publicacao
   function NM_export_foto_publicacao()
   {
         $this->foto_publicacao = html_entity_decode($this->foto_publicacao, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->foto_publicacao = strip_tags($this->foto_publicacao);
         if (!NM_is_utf8($this->foto_publicacao))
         {
             $this->foto_publicacao = sc_convert_encoding($this->foto_publicacao, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->foto_publicacao = str_replace('<', '&lt;', $this->foto_publicacao);
         $this->foto_publicacao = str_replace('>', '&gt;', $this->foto_publicacao);
         $this->Texto_tag .= "<td>" . $this->foto_publicacao . "</td>\r\n";
   }
   //----- texto_publicacao
   function NM_export_texto_publicacao()
   {
         $this->texto_publicacao = html_entity_decode($this->texto_publicacao, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->texto_publicacao = strip_tags($this->texto_publicacao);
         if (!NM_is_utf8($this->texto_publicacao))
         {
             $this->texto_publicacao = sc_convert_encoding($this->texto_publicacao, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->texto_publicacao = str_replace('<', '&lt;', $this->texto_publicacao);
         $this->texto_publicacao = str_replace('>', '&gt;', $this->texto_publicacao);
         $this->Texto_tag .= "<td>" . $this->texto_publicacao . "</td>\r\n";
   }

   //----- 
   function grava_arquivo_rtf()
   {
      global $nm_lang, $doc_wrap;
      $rtf_f = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      require_once($this->Ini->path_third      . "/rtf_new/document_generator/cl_xml2driver.php"); 
      $text_ok  =  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\r\n"; 
      $text_ok .=  "<DOC config_file=\"" . $this->Ini->path_third . "/rtf_new/doc_config.inc\" >\r\n"; 
      $text_ok .=  $this->Texto_tag; 
      $text_ok .=  "</DOC>\r\n"; 
      $xml = new nDOCGEN($text_ok,"RTF"); 
      fwrite($rtf_f, $xml->get_result_file());
      fclose($rtf_f);
   }

   function nm_conv_data_db($dt_in, $form_in, $form_out)
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
       nm_conv_form_data($dt_out, $form_in, $form_out);
       return $dt_out;
   }
   //---- 
   function monta_html()
   {
      global $nm_url_saida, $nm_lang;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_eventos'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE>EVENTOS :: RTF</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}
?>
  <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
  <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
  <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
  <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
  <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">RTF</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="consulta_eventos_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="consulta_eventos"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="volta_grid"> 
</FORM> 
</BODY>
</HTML>
<?php
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
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
              if ($cont2 >= $tam_campo)
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
}

?>
