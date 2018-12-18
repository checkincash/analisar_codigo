<div id="form_ap_contrato_publicador_form1" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="20%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_2" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="3" height="20" class="scFormBlock" style="text-align: center; vertical-align: middle">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="middle" class="scFormBlockFont" style="color: #CC6600">PARAMETROS DO EVENTO</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['destaque_img']))
    {
        $this->nm_new_label['destaque_img'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $destaque_img = $this->destaque_img;
   $sStyleHidden_destaque_img = '';
   if (isset($this->nmgp_cmp_hidden['destaque_img']) && $this->nmgp_cmp_hidden['destaque_img'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['destaque_img']);
       $sStyleHidden_destaque_img = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_destaque_img = 'display: none;';
   $sStyleReadInp_destaque_img = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['destaque_img']) && $this->nmgp_cmp_readonly['destaque_img'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['destaque_img']);
       $sStyleReadLab_destaque_img = '';
       $sStyleReadInp_destaque_img = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['destaque_img']) && $this->nmgp_cmp_hidden['destaque_img'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="destaque_img" value="<?php echo $this->form_encode_input($destaque_img) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_destaque_img_line" id="hidden_field_data_destaque_img" style="<?php echo $sStyleHidden_destaque_img; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_destaque_img_line" style="vertical-align: top;padding: 0px"><?php
          if (!is_file($this->Ini->root  . $this->Ini->path_imag_cab . "/grp__NM__ico__NM__star_36.png"))
          { 
              $destaque_img = "&nbsp;" ;  
          } 
          else 
          { 
              $destaque_img = "<img border=\"0\" src=\"" . $this->Ini->path_imag_cab . "/grp__NM__ico__NM__star_36.png\"/>" ; 
          } 
?>
<span id="id_imghtml_destaque_img"><?php echo $destaque_img; ?>
</span>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["destaque_img"]) &&  $this->nmgp_cmp_readonly["destaque_img"] == "on") { 

 ?>
<input type="hidden" name="destaque_img" value="<?php echo $this->form_encode_input($destaque_img) . "\">" . $destaque_img . ""; ?>
<?php } else { ?>
<span id="id_read_on_destaque_img" class="sc-ui-readonly-destaque_img css_destaque_img_line" style="<?php echo $sStyleReadLab_destaque_img; ?>"><?php echo $this->form_encode_input($this->destaque_img); ?></span><span id="id_read_off_destaque_img" style="white-space: nowrap;<?php echo $sStyleReadInp_destaque_img; ?>"></span><?php } ?>
<br><span class="scFormLabelOddFormat css_destaque_img_label"><span id="id_label_destaque_img"><?php echo $this->nm_new_label['destaque_img']; ?></span></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_destaque_img_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_destaque_img_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['destaque']))
   {
       $this->nm_new_label['destaque'] = " Obtenha melhores resultados ficando entre os primeiros no aplicativo mobile.";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $destaque = $this->destaque;
   $sStyleHidden_destaque = '';
   if (isset($this->nmgp_cmp_hidden['destaque']) && $this->nmgp_cmp_hidden['destaque'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['destaque']);
       $sStyleHidden_destaque = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_destaque = 'display: none;';
   $sStyleReadInp_destaque = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['destaque']) && $this->nmgp_cmp_readonly['destaque'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['destaque']);
       $sStyleReadLab_destaque = '';
       $sStyleReadInp_destaque = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['destaque']) && $this->nmgp_cmp_hidden['destaque'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="destaque" value="<?php echo $this->form_encode_input($this->destaque) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->destaque_1 = explode(";", trim($this->destaque));
  } 
  else
  {
      if (empty($this->destaque))
      {
          $this->destaque_1= array(); 
          $this->destaque= "0";
      } 
      else
      {
          $this->destaque_1= $this->destaque; 
          $this->destaque= ""; 
          foreach ($this->destaque_1 as $cada_destaque)
          {
             if (!empty($destaque))
             {
                 $this->destaque.= ";"; 
             } 
             $this->destaque.= $cada_destaque; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_destaque_line" id="hidden_field_data_destaque" style="<?php echo $sStyleHidden_destaque; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_destaque_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["destaque"]) &&  $this->nmgp_cmp_readonly["destaque"] == "on") { 

$destaque_look = "";
 if ($this->destaque == "1") { $destaque_look .= "Em Destaque" ;} 
 if (empty($destaque_look)) { $destaque_look = $this->destaque; }
?>
<input type="hidden" name="destaque" value="<?php echo $this->form_encode_input($destaque) . "\">" . $destaque_look . ""; ?>
<?php } else { ?>

<?php

$destaque_look = "";
 if ($this->destaque == "1") { $destaque_look .= "Em Destaque" ;} 
 if (empty($destaque_look)) { $destaque_look = $this->destaque; }
?>
<span id="id_read_on_destaque" class="css_destaque_line" style="<?php echo $sStyleReadLab_destaque; ?>"><?php echo $this->form_encode_input($destaque_look); ?></span><span id="id_read_off_destaque" style="<?php echo $sStyleReadInp_destaque; ?>"><?php echo "<div id=\"idAjaxCheckbox_destaque\" style=\"display: inline-block\">\r\n"; ?><TABLE><TR>
  <TD class="scFormDataFontOdd css_destaque_line"> <input type=checkbox class="sc-ui-checkbox-destaque sc-ui-checkbox-destaque" name="destaque[]" value="1"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador']['Lookup_destaque'][] = '1'; ?>
<?php  if (in_array("1", $this->destaque_1))  { echo " checked" ;} ?> onClick="" >Em Destaque</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
<br><span class="scFormLabelOddFormat css_destaque_label"><span id="id_label_destaque"><?php echo $this->nm_new_label['destaque']; ?></span></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_destaque_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_destaque_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['pdesconto']))
    {
        $this->nm_new_label['pdesconto'] = " Desconto a conceder";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pdesconto = $this->pdesconto;
   $sStyleHidden_pdesconto = '';
   if (isset($this->nmgp_cmp_hidden['pdesconto']) && $this->nmgp_cmp_hidden['pdesconto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pdesconto']);
       $sStyleHidden_pdesconto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pdesconto = 'display: none;';
   $sStyleReadInp_pdesconto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pdesconto']) && $this->nmgp_cmp_readonly['pdesconto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pdesconto']);
       $sStyleReadLab_pdesconto = '';
       $sStyleReadInp_pdesconto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pdesconto']) && $this->nmgp_cmp_hidden['pdesconto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pdesconto" value="<?php echo $this->form_encode_input($pdesconto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pdesconto_line" id="hidden_field_data_pdesconto" style="<?php echo $sStyleHidden_pdesconto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pdesconto_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pdesconto"]) &&  $this->nmgp_cmp_readonly["pdesconto"] == "on") { 

 ?>
<input type="hidden" name="pdesconto" value="<?php echo $this->form_encode_input($pdesconto) . "\">" . $pdesconto . ""; ?>
<?php } else { ?>
<span id="id_read_on_pdesconto" class="sc-ui-readonly-pdesconto css_pdesconto_line" style="<?php echo $sStyleReadLab_pdesconto; ?>"><?php echo $this->form_encode_input($this->pdesconto); ?></span><span id="id_read_off_pdesconto" style="white-space: nowrap;<?php echo $sStyleReadInp_pdesconto; ?>">
 <input class="sc-js-input scFormObjectOdd css_pdesconto_obj" style="" id="id_sc_field_pdesconto" type=text name="pdesconto" value="<?php echo $this->form_encode_input($pdesconto) ?>"
 size=6 alt="{datatype: 'decimal', maxLength: 6, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pdesconto']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['pdesconto']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['pdesconto']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><img src="../_lib/img/scriptcase__NM__nm_transparent.gif" style="vertical-align: middle; display: none" class="sc-js-ui-statusimg" id="id_sc_status_pdesconto" /></span><?php } ?>
<br><span class="scFormLabelOddFormat css_pdesconto_label"><span id="id_label_pdesconto"><?php echo $this->nm_new_label['pdesconto']; ?></span></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pdesconto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pdesconto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock" style="text-align: center; vertical-align: middle">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="middle" class="scFormBlockFont">FOTO DA PUBLICACAO NO FACE</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['foto_publicacao']))
    {
        $this->nm_new_label['foto_publicacao'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $foto_publicacao = $this->foto_publicacao;
   $sStyleHidden_foto_publicacao = '';
   if (isset($this->nmgp_cmp_hidden['foto_publicacao']) && $this->nmgp_cmp_hidden['foto_publicacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['foto_publicacao']);
       $sStyleHidden_foto_publicacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_foto_publicacao = 'display: none;';
   $sStyleReadInp_foto_publicacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['foto_publicacao']) && $this->nmgp_cmp_readonly['foto_publicacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['foto_publicacao']);
       $sStyleReadLab_foto_publicacao = '';
       $sStyleReadInp_foto_publicacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['foto_publicacao']) && $this->nmgp_cmp_hidden['foto_publicacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="foto_publicacao" value="<?php echo $this->form_encode_input($foto_publicacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_foto_publicacao_line" id="hidden_field_data_foto_publicacao" style="<?php echo $sStyleHidden_foto_publicacao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_foto_publicacao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_foto_publicacao_label"><span id="id_label_foto_publicacao"><?php echo $this->nm_new_label['foto_publicacao']; ?></span></span><br>
 <script>var var_ajax_img_foto_publicacao = '<?php echo $out1_foto_publicacao; ?>';</script><?php if (!empty($out_foto_publicacao)){ echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_foto_publicacao, '" . $this->nmgp_return_img['foto_publicacao'][0] . "', '" . $this->nmgp_return_img['foto_publicacao'][1] . "')\"><img id=\"id_ajax_img_foto_publicacao\" border=\"0\" src=\"$out_foto_publicacao\"></a> &nbsp;" . "<span id=\"txt_ajax_img_foto_publicacao\" style=\"display: none\">" . $foto_publicacao . "</span>"; if (!empty($foto_publicacao)){ echo "<br>";} } else { echo "<img id=\"id_ajax_img_foto_publicacao\" border=\"0\" style=\"display: none\"> &nbsp;<span id=\"txt_ajax_img_foto_publicacao\"></span><br />"; } ?>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["foto_publicacao"]) &&  $this->nmgp_cmp_readonly["foto_publicacao"] == "on") { 

 ?>
<img id=\"foto_publicacao_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="foto_publicacao" value="<?php echo $this->form_encode_input($foto_publicacao) . "\">" . $foto_publicacao . ""; ?>
<?php } else { ?>
<span id="id_read_off_foto_publicacao" style="white-space: nowrap;<?php echo $sStyleReadInp_foto_publicacao; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-foto_publicacao" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_foto_publicacao_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="foto_publicacao[]" id="id_sc_field_foto_publicacao" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_foto_publicacao"<?php if ($this->nmgp_opcao == "novo" || empty($foto_publicacao)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="foto_publicacao_limpa" value="<?php echo $foto_publicacao_limpa . '" '; if ($foto_publicacao_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="foto_publicacao_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_img_loader_foto_publicacao" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_foto_publicacao" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_foto_publicacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_foto_publicacao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock" style="text-align: center; vertical-align: middle">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="middle" class="scFormBlockFont">INSIRA O TEXTO QUE SERÁ APRESENTADO NA PUBLICAÇÃO</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['texto_publicacao']))
    {
        $this->nm_new_label['texto_publicacao'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $texto_publicacao = $this->texto_publicacao;
   $sStyleHidden_texto_publicacao = '';
   if (isset($this->nmgp_cmp_hidden['texto_publicacao']) && $this->nmgp_cmp_hidden['texto_publicacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['texto_publicacao']);
       $sStyleHidden_texto_publicacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_texto_publicacao = 'display: none;';
   $sStyleReadInp_texto_publicacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['texto_publicacao']) && $this->nmgp_cmp_readonly['texto_publicacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['texto_publicacao']);
       $sStyleReadLab_texto_publicacao = '';
       $sStyleReadInp_texto_publicacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['texto_publicacao']) && $this->nmgp_cmp_hidden['texto_publicacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="texto_publicacao" value="<?php echo $this->form_encode_input($texto_publicacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_texto_publicacao_line" id="hidden_field_data_texto_publicacao" style="<?php echo $sStyleHidden_texto_publicacao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_texto_publicacao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_texto_publicacao_label"><span id="id_label_texto_publicacao"><?php echo $this->nm_new_label['texto_publicacao']; ?></span></span><br><span id="id_read_on_texto_publicacao" style="<?php echo $sStyleReadLab_texto_publicacao; ?>"><?php echo $this->texto_publicacao; ?></span><span id="id_read_off_texto_publicacao" style="<?php echo $sStyleReadInp_texto_publicacao; ?>"><textarea id="texto_publicacao" name="texto_publicacao" cols="50" rows="10" class="mceEditor_texto_publicacao" style="width: 100%; height:200px;"><?php echo $this->texto_publicacao; ?></textarea>
</span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_texto_publicacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_texto_publicacao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
