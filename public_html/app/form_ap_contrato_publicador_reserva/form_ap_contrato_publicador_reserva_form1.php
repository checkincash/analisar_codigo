<div id="form_ap_contrato_publicador_reserva_form1" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_1" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="4" height="20" class="scFormBlock" style="text-align: center; vertical-align: middle">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="middle" class="scFormBlockFont" style="color: #CC6600">PARAMETROS DA CAMPANHA</TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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

    <TD class="scFormLabelOdd scUiLabelWidthFix css_pdesconto_label" id="hidden_field_label_pdesconto" style="<?php echo $sStyleHidden_pdesconto; ?>"><span id="id_label_pdesconto"><?php echo $this->nm_new_label['pdesconto']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['php_cmp_required']['pdesconto']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['php_cmp_required']['pdesconto'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_pdesconto_line" id="hidden_field_data_pdesconto" style="<?php echo $sStyleHidden_pdesconto; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pdesconto_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pdesconto"]) &&  $this->nmgp_cmp_readonly["pdesconto"] == "on") { 

 ?>
<input type="hidden" name="pdesconto" value="<?php echo $this->form_encode_input($pdesconto) . "\">" . $pdesconto . ""; ?>
<?php } else { ?>
<span id="id_read_on_pdesconto" class="sc-ui-readonly-pdesconto css_pdesconto_line" style="<?php echo $sStyleReadLab_pdesconto; ?>"><?php echo $this->form_encode_input($this->pdesconto); ?></span><span id="id_read_off_pdesconto" style="white-space: nowrap;<?php echo $sStyleReadInp_pdesconto; ?>">
 <input class="sc-js-input scFormObjectOdd css_pdesconto_obj" style="" id="id_sc_field_pdesconto" type=text name="pdesconto" value="<?php echo $this->form_encode_input($pdesconto) ?>"
 size=6 alt="{datatype: 'decimal', maxLength: 6, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pdesconto']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['pdesconto']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['pdesconto']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><img src="../_lib/img/scriptcase__NM__nm_transparent.gif" style="vertical-align: middle; display: none" class="sc-js-ui-statusimg" id="id_sc_status_pdesconto" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pdesconto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pdesconto_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['destaque']))
   {
       $this->nm_new_label['destaque'] = " ";
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

    <TD class="scFormLabelOdd scUiLabelWidthFix css_destaque_label" id="hidden_field_label_destaque" style="<?php echo $sStyleHidden_destaque; ?>"><span id="id_label_destaque"><?php echo $this->nm_new_label['destaque']; ?></span></TD>
    <TD class="scFormDataOdd css_destaque_line" id="hidden_field_data_destaque" style="<?php echo $sStyleHidden_destaque; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_destaque_line" style="vertical-align: top;padding: 0px">
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
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['Lookup_destaque'][] = '1'; ?>
<?php  if (in_array("1", $this->destaque_1))  { echo " checked" ;} ?> onClick="" >Em Destaque</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
<span class="scFormPopupBubble" style="vertical-align: top; display: inline-block"><span class="scFormPopupTrigger"><?php echo nmButtonOutput($this->arr_buttons, "bfieldhelp", "return false;", "return false;", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</span><table class="scFormPopup"><tbody><?php
if (isset($_SESSION['scriptcase']['reg_conf']['html_dir']) && $_SESSION['scriptcase']['reg_conf']['html_dir'] == " DIR='RTL'") {
?>
<tr><td class="scFormPopupTopRight scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopLeft scFormPopupCorner"></td></tr><tr><td class="scFormPopupRight"></td><td class="scFormPopupContent">Insere seu anúncio no topo da campanha.</td><td class="scFormPopupLeft"></td></tr><tr><td class="scFormPopupBottomRight scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomLeft scFormPopupCorner"></td></tr><?php
} else {
?>
<tr><td class="scFormPopupTopLeft scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopRight scFormPopupCorner"></td></tr><tr><td class="scFormPopupLeft"></td><td class="scFormPopupContent">Insere seu anúncio no topo da campanha.</td><td class="scFormPopupRight"></td></tr><tr><td class="scFormPopupBottomLeft scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomRight scFormPopupCorner"></td></tr><?php
}
?>
</tbody></table></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_destaque_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_destaque_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="50%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock" style="text-align: center; vertical-align: middle">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="middle" class="scFormBlockFont">FOTO DA PUBLICACAO</TD>
       
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
   <td width="100%" height="">
   <a name="bloco_3"></a>
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable" width="100%" style="height: 100%;">   <tr>


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
</td></tr>
</td></tr>
<tr><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
 $NM_pag_atual = "form_ap_contrato_publicador_reserva_form0";
 if (isset($this->nmgp_ancora) && $this->nmgp_ancora != "")
 {
     $NM_pag_atual = "form_ap_contrato_publicador_reserva_form" . $this->nmgp_ancora;
 }
?>
  document.getElementById('<?php echo $NM_pag_atual; ?>').style.width='';
  document.getElementById('<?php echo $NM_pag_atual; ?>').style.height='';
  document.getElementById('<?php echo $NM_pag_atual; ?>').style.display='';
  document.getElementById('<?php echo $NM_pag_atual; ?>').style.overflow='visible';
</script> 
<?php
      $Tzone = ini_get('date.timezone');
      if (empty($Tzone))
      {
?>
<script> 
  _scAjaxShowMessage('', "<?php echo $this->Ini->Nm_lang['lang_errm_tz']; ?>", false, 0, false, "Ok", 0, 0, 0, 0, "", "", "", true, false);
</script> 
<?php
      }
?>
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_ap_contrato_publicador_reserva");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_ap_contrato_publicador_reserva");
 parent.scAjaxDetailHeight("form_ap_contrato_publicador_reserva", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_ap_contrato_publicador_reserva", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_ap_contrato_publicador_reserva", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
?>
<script type="text/javascript">
_scAjaxShowMessage(scMsgDefTitle, "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_reserva']['sc_modal'])
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
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
</body> 
</html> 
