<?php

class admcontrato_rtf
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
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $this->Teste_validade = new NM_Valida;
      $this->Arquivo    = "sc_rtf";
      $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arquivo   .= "_admcontrato";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "admcontrato.rtf";
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
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['admcontrato']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['admcontrato']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['admcontrato']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->pk_contrato = $Busca_temp['pk_contrato']; 
          $tmp_pos = strpos($this->pk_contrato, "##@@");
          if ($tmp_pos !== false && !is_array($this->pk_contrato))
          {
              $this->pk_contrato = substr($this->pk_contrato, 0, $tmp_pos);
          }
          $this->fk_classificacao = $Busca_temp['fk_classificacao']; 
          $tmp_pos = strpos($this->fk_classificacao, "##@@");
          if ($tmp_pos !== false && !is_array($this->fk_classificacao))
          {
              $this->fk_classificacao = substr($this->fk_classificacao, 0, $tmp_pos);
          }
          $this->classificacao1 = $Busca_temp['classificacao1']; 
          $tmp_pos = strpos($this->classificacao1, "##@@");
          if ($tmp_pos !== false && !is_array($this->classificacao1))
          {
              $this->classificacao1 = substr($this->classificacao1, 0, $tmp_pos);
          }
          $this->classificacao2 = $Busca_temp['classificacao2']; 
          $tmp_pos = strpos($this->classificacao2, "##@@");
          if ($tmp_pos !== false && !is_array($this->classificacao2))
          {
              $this->classificacao2 = substr($this->classificacao2, 0, $tmp_pos);
          }
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['rtf_name']);
      }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT str_replace (convert(char(10),datacadastro,102), '.', '-') + ' ' + convert(char(8),datacadastro,20), cnpj, razao, fk_classificacao, classificacao1, classificacao2, cidade, estado, telefone, ativo, pk_contrato, inscricao from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT datacadastro, cnpj, razao, fk_classificacao, classificacao1, classificacao2, cidade, estado, telefone, ativo, pk_contrato, inscricao from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT convert(char(23),datacadastro,121), cnpj, razao, fk_classificacao, classificacao1, classificacao2, cidade, estado, telefone, ativo, pk_contrato, inscricao from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT datacadastro, cnpj, razao, fk_classificacao, classificacao1, classificacao2, cidade, estado, telefone, ativo, pk_contrato, inscricao from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT EXTEND(datacadastro, YEAR TO DAY), cnpj, razao, fk_classificacao, classificacao1, classificacao2, cidade, estado, telefone, ativo, pk_contrato, inscricao from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT datacadastro, cnpj, razao, fk_classificacao, classificacao1, classificacao2, cidade, estado, telefone, ativo, pk_contrato, inscricao from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['order_grid'];
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
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['datacadastro'])) ? $this->New_label['datacadastro'] : "Data cadastro"; 
          if ($Cada_col == "datacadastro" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['cnpj'])) ? $this->New_label['cnpj'] : "CNPJ"; 
          if ($Cada_col == "cnpj" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['razao'])) ? $this->New_label['razao'] : "RAZÃO"; 
          if ($Cada_col == "razao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['fk_classificacao'])) ? $this->New_label['fk_classificacao'] : "CATEGORIA"; 
          if ($Cada_col == "fk_classificacao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['classificacao1'])) ? $this->New_label['classificacao1'] : "CLASSIFICAÇÃO 1"; 
          if ($Cada_col == "classificacao1" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['classificacao2'])) ? $this->New_label['classificacao2'] : "CLASSIFICAÇÃO 2"; 
          if ($Cada_col == "classificacao2" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['cidade'])) ? $this->New_label['cidade'] : "CIDADE"; 
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
          $SC_Label = (isset($this->New_label['estado'])) ? $this->New_label['estado'] : "ESTADO"; 
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
          $SC_Label = (isset($this->New_label['telefone'])) ? $this->New_label['telefone'] : "TELEFONE"; 
          if ($Cada_col == "telefone" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['ativo'])) ? $this->New_label['ativo'] : "ATIVO"; 
          if ($Cada_col == "ativo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pk_contrato'])) ? $this->New_label['pk_contrato'] : "Pk Contrato"; 
          if ($Cada_col == "pk_contrato" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['inscricao'])) ? $this->New_label['inscricao'] : "Inscricao"; 
          if ($Cada_col == "inscricao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
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
         $this->datacadastro = $rs->fields[0] ;  
         $this->cnpj = $rs->fields[1] ;  
         $this->razao = $rs->fields[2] ;  
         $this->fk_classificacao = $rs->fields[3] ;  
         $this->fk_classificacao = (string)$this->fk_classificacao;
         $this->classificacao1 = $rs->fields[4] ;  
         $this->classificacao2 = $rs->fields[5] ;  
         $this->cidade = $rs->fields[6] ;  
         $this->estado = $rs->fields[7] ;  
         $this->telefone = $rs->fields[8] ;  
         $this->ativo = $rs->fields[9] ;  
         $this->ativo = (string)$this->ativo;
         $this->pk_contrato = $rs->fields[10] ;  
         $this->pk_contrato = (string)$this->pk_contrato;
         $this->inscricao = $rs->fields[11] ;  
         //----- lookup - fk_classificacao
         $this->look_fk_classificacao = $this->fk_classificacao; 
         $this->Lookup->lookup_fk_classificacao($this->look_fk_classificacao, $this->fk_classificacao) ; 
         $this->look_fk_classificacao = ($this->look_fk_classificacao == "&nbsp;") ? "" : $this->look_fk_classificacao; 
         //----- lookup - ativo
         $this->look_ativo = $this->ativo; 
         $this->Lookup->lookup_ativo($this->look_ativo); 
         $this->look_ativo = ($this->look_ativo == "&nbsp;") ? "" : $this->look_ativo; 
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['field_order'] as $Cada_col)
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
   //----- datacadastro
   function NM_export_datacadastro()
   {
         $conteudo_x =  $this->datacadastro;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
         if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
         { 
             $this->nm_data->SetaData($this->datacadastro, "YYYY-MM-DD  ");
             $this->datacadastro = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
         } 
         if (!NM_is_utf8($this->datacadastro))
         {
             $this->datacadastro = sc_convert_encoding($this->datacadastro, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->datacadastro = str_replace('<', '&lt;', $this->datacadastro);
         $this->datacadastro = str_replace('>', '&gt;', $this->datacadastro);
         $this->Texto_tag .= "<td>" . $this->datacadastro . "</td>\r\n";
   }
   //----- cnpj
   function NM_export_cnpj()
   {
         if (strlen($this->cnpj) < 14) 
         { 
             $this->cnpj = str_repeat(0, 14 - strlen($this->cnpj)) . $this->cnpj; 
         } 
         if (strlen($this->cnpj) > 11 && substr($this->cnpj, 0, 3) == "000" && $this->Teste_validade->CNPJ($this->cnpj) == false) 
         { 
             $this->cnpj = substr($this->cnpj, strlen($this->cnpj) - 11); 
         } 
         nmgp_Form_CicCnpj($this->cnpj) ; 
         if (!NM_is_utf8($this->cnpj))
         {
             $this->cnpj = sc_convert_encoding($this->cnpj, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->cnpj = str_replace('<', '&lt;', $this->cnpj);
         $this->cnpj = str_replace('>', '&gt;', $this->cnpj);
         $this->Texto_tag .= "<td>" . $this->cnpj . "</td>\r\n";
   }
   //----- razao
   function NM_export_razao()
   {
         $this->razao = html_entity_decode($this->razao, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->razao = strip_tags($this->razao);
         if (!NM_is_utf8($this->razao))
         {
             $this->razao = sc_convert_encoding($this->razao, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->razao = str_replace('<', '&lt;', $this->razao);
         $this->razao = str_replace('>', '&gt;', $this->razao);
         $this->Texto_tag .= "<td>" . $this->razao . "</td>\r\n";
   }
   //----- fk_classificacao
   function NM_export_fk_classificacao()
   {
         nmgp_Form_Num_Val($this->look_fk_classificacao, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->look_fk_classificacao))
         {
             $this->look_fk_classificacao = sc_convert_encoding($this->look_fk_classificacao, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->look_fk_classificacao = str_replace('<', '&lt;', $this->look_fk_classificacao);
         $this->look_fk_classificacao = str_replace('>', '&gt;', $this->look_fk_classificacao);
         $this->Texto_tag .= "<td>" . $this->look_fk_classificacao . "</td>\r\n";
   }
   //----- classificacao1
   function NM_export_classificacao1()
   {
         $this->classificacao1 = html_entity_decode($this->classificacao1, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->classificacao1 = strip_tags($this->classificacao1);
         if (!NM_is_utf8($this->classificacao1))
         {
             $this->classificacao1 = sc_convert_encoding($this->classificacao1, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->classificacao1 = str_replace('<', '&lt;', $this->classificacao1);
         $this->classificacao1 = str_replace('>', '&gt;', $this->classificacao1);
         $this->Texto_tag .= "<td>" . $this->classificacao1 . "</td>\r\n";
   }
   //----- classificacao2
   function NM_export_classificacao2()
   {
         $this->classificacao2 = html_entity_decode($this->classificacao2, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->classificacao2 = strip_tags($this->classificacao2);
         if (!NM_is_utf8($this->classificacao2))
         {
             $this->classificacao2 = sc_convert_encoding($this->classificacao2, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->classificacao2 = str_replace('<', '&lt;', $this->classificacao2);
         $this->classificacao2 = str_replace('>', '&gt;', $this->classificacao2);
         $this->Texto_tag .= "<td>" . $this->classificacao2 . "</td>\r\n";
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
   //----- telefone
   function NM_export_telefone()
   {
         $this->telefone = html_entity_decode($this->telefone, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->telefone = strip_tags($this->telefone);
         if (!NM_is_utf8($this->telefone))
         {
             $this->telefone = sc_convert_encoding($this->telefone, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->telefone = str_replace('<', '&lt;', $this->telefone);
         $this->telefone = str_replace('>', '&gt;', $this->telefone);
         $this->Texto_tag .= "<td>" . $this->telefone . "</td>\r\n";
   }
   //----- ativo
   function NM_export_ativo()
   {
         if (!NM_is_utf8($this->look_ativo))
         {
             $this->look_ativo = sc_convert_encoding($this->look_ativo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->look_ativo = str_replace('<', '&lt;', $this->look_ativo);
         $this->look_ativo = str_replace('>', '&gt;', $this->look_ativo);
         $this->Texto_tag .= "<td>" . $this->look_ativo . "</td>\r\n";
   }
   //----- pk_contrato
   function NM_export_pk_contrato()
   {
         nmgp_Form_Num_Val($this->pk_contrato, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->pk_contrato))
         {
             $this->pk_contrato = sc_convert_encoding($this->pk_contrato, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->pk_contrato = str_replace('<', '&lt;', $this->pk_contrato);
         $this->pk_contrato = str_replace('>', '&gt;', $this->pk_contrato);
         $this->Texto_tag .= "<td>" . $this->pk_contrato . "</td>\r\n";
   }
   //----- inscricao
   function NM_export_inscricao()
   {
         $this->inscricao = html_entity_decode($this->inscricao, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->inscricao = strip_tags($this->inscricao);
         if (!NM_is_utf8($this->inscricao))
         {
             $this->inscricao = sc_convert_encoding($this->inscricao, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->inscricao = str_replace('<', '&lt;', $this->inscricao);
         $this->inscricao = str_replace('>', '&gt;', $this->inscricao);
         $this->Texto_tag .= "<td>" . $this->inscricao . "</td>\r\n";
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['admcontrato'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE>CONTRATOS :: RTF</TITLE>
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
<form name="Fdown" method="get" action="admcontrato_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="admcontrato"> 
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
