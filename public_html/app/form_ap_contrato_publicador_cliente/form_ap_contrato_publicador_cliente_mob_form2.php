<div id="form_ap_contrato_publicador_cliente_mob_form2" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_5"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_5" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock" style="text-align: center; vertical-align: middle">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="middle" class="scFormBlockFont" style="color: #FF9900">PREENCHA CASO SUA  CAMPANHA  ESTEJA BASEADA EM DESCONTO</TD>
       
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
<?php if (isset($this->nmgp_cmp_hidden['pdesconto']) && $this->nmgp_cmp_hidden['pdesconto'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pdesconto" value="<?php echo $this->form_encode_input($this->pdesconto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pdesconto_line" id="hidden_field_data_pdesconto" style="<?php echo $sStyleHidden_pdesconto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pdesconto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pdesconto_label"><span id="id_label_pdesconto"><?php echo $this->nm_new_label['pdesconto']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pdesconto"]) &&  $this->nmgp_cmp_readonly["pdesconto"] == "on") { 

$pdesconto_look = "";
 if ($this->pdesconto == "0") { $pdesconto_look .= "0%" ;} 
 if ($this->pdesconto == "1") { $pdesconto_look .= "1%" ;} 
 if ($this->pdesconto == "2") { $pdesconto_look .= "2%" ;} 
 if ($this->pdesconto == "3") { $pdesconto_look .= "3%" ;} 
 if ($this->pdesconto == "5") { $pdesconto_look .= "5%" ;} 
 if ($this->pdesconto == "10") { $pdesconto_look .= "10%" ;} 
 if ($this->pdesconto == "15") { $pdesconto_look .= "15%" ;} 
 if ($this->pdesconto == "20") { $pdesconto_look .= "20%" ;} 
 if ($this->pdesconto == "25") { $pdesconto_look .= "25%" ;} 
 if ($this->pdesconto == "30") { $pdesconto_look .= "30%" ;} 
 if ($this->pdesconto == "35") { $pdesconto_look .= "35%" ;} 
 if ($this->pdesconto == "40") { $pdesconto_look .= "40%" ;} 
 if ($this->pdesconto == "45") { $pdesconto_look .= "45%" ;} 
 if ($this->pdesconto == "50") { $pdesconto_look .= "50%" ;} 
 if ($this->pdesconto == "55") { $pdesconto_look .= "55%" ;} 
 if ($this->pdesconto == "60") { $pdesconto_look .= "60%" ;} 
 if ($this->pdesconto == "65") { $pdesconto_look .= "65%" ;} 
 if ($this->pdesconto == "70") { $pdesconto_look .= "70%" ;} 
 if ($this->pdesconto == "75") { $pdesconto_look .= "75%" ;} 
 if ($this->pdesconto == "80") { $pdesconto_look .= "80%" ;} 
 if ($this->pdesconto == "85") { $pdesconto_look .= "85%" ;} 
 if ($this->pdesconto == "90") { $pdesconto_look .= "90%" ;} 
 if ($this->pdesconto == "95") { $pdesconto_look .= "95%" ;} 
 if ($this->pdesconto == "100") { $pdesconto_look .= "100%" ;} 
 if (empty($pdesconto_look)) { $pdesconto_look = $this->pdesconto; }
?>
<input type="hidden" name="pdesconto" value="<?php echo $this->form_encode_input($pdesconto) . "\">" . $pdesconto_look . ""; ?>
<?php } else { ?>
<?php

$pdesconto_look = "";
 if ($this->pdesconto == "0") { $pdesconto_look .= "0%" ;} 
 if ($this->pdesconto == "1") { $pdesconto_look .= "1%" ;} 
 if ($this->pdesconto == "2") { $pdesconto_look .= "2%" ;} 
 if ($this->pdesconto == "3") { $pdesconto_look .= "3%" ;} 
 if ($this->pdesconto == "5") { $pdesconto_look .= "5%" ;} 
 if ($this->pdesconto == "10") { $pdesconto_look .= "10%" ;} 
 if ($this->pdesconto == "15") { $pdesconto_look .= "15%" ;} 
 if ($this->pdesconto == "20") { $pdesconto_look .= "20%" ;} 
 if ($this->pdesconto == "25") { $pdesconto_look .= "25%" ;} 
 if ($this->pdesconto == "30") { $pdesconto_look .= "30%" ;} 
 if ($this->pdesconto == "35") { $pdesconto_look .= "35%" ;} 
 if ($this->pdesconto == "40") { $pdesconto_look .= "40%" ;} 
 if ($this->pdesconto == "45") { $pdesconto_look .= "45%" ;} 
 if ($this->pdesconto == "50") { $pdesconto_look .= "50%" ;} 
 if ($this->pdesconto == "55") { $pdesconto_look .= "55%" ;} 
 if ($this->pdesconto == "60") { $pdesconto_look .= "60%" ;} 
 if ($this->pdesconto == "65") { $pdesconto_look .= "65%" ;} 
 if ($this->pdesconto == "70") { $pdesconto_look .= "70%" ;} 
 if ($this->pdesconto == "75") { $pdesconto_look .= "75%" ;} 
 if ($this->pdesconto == "80") { $pdesconto_look .= "80%" ;} 
 if ($this->pdesconto == "85") { $pdesconto_look .= "85%" ;} 
 if ($this->pdesconto == "90") { $pdesconto_look .= "90%" ;} 
 if ($this->pdesconto == "95") { $pdesconto_look .= "95%" ;} 
 if ($this->pdesconto == "100") { $pdesconto_look .= "100%" ;} 
 if (empty($pdesconto_look)) { $pdesconto_look = $this->pdesconto; }
?>
<span id="id_read_on_pdesconto" class="css_pdesconto_line"  style="<?php echo $sStyleReadLab_pdesconto; ?>"><?php echo $this->form_encode_input($pdesconto_look); ?></span><span id="id_read_off_pdesconto" style="<?php echo $sStyleReadInp_pdesconto; ?>">
 <span id="idAjaxSelect_pdesconto"><select class="sc-js-input scFormObjectOdd css_pdesconto_obj" style="" id="id_sc_field_pdesconto" name="pdesconto" size="1" alt="{type: 'select', enterTab: false}">
 <option  value="0" <?php  if ($this->pdesconto == "0") { echo " selected" ;} ?>>0%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '0'; ?>
 <option  value="1" <?php  if ($this->pdesconto == "1") { echo " selected" ;} ?>>1%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '1'; ?>
 <option  value="2" <?php  if ($this->pdesconto == "2") { echo " selected" ;} ?>>2%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '2'; ?>
 <option  value="3" <?php  if ($this->pdesconto == "3") { echo " selected" ;} ?>>3%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '3'; ?>
 <option  value="5" <?php  if ($this->pdesconto == "5") { echo " selected" ;} ?>>5%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '5'; ?>
 <option  value="10" <?php  if ($this->pdesconto == "10") { echo " selected" ;} ?>>10%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '10'; ?>
 <option  value="15" <?php  if ($this->pdesconto == "15") { echo " selected" ;} ?>>15%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '15'; ?>
 <option  value="20" <?php  if ($this->pdesconto == "20") { echo " selected" ;} ?>>20%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '20'; ?>
 <option  value="25" <?php  if ($this->pdesconto == "25") { echo " selected" ;} ?>>25%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '25'; ?>
 <option  value="30" <?php  if ($this->pdesconto == "30") { echo " selected" ;} ?>>30%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '30'; ?>
 <option  value="35" <?php  if ($this->pdesconto == "35") { echo " selected" ;} ?>>35%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '35'; ?>
 <option  value="40" <?php  if ($this->pdesconto == "40") { echo " selected" ;} ?>>40%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '40'; ?>
 <option  value="45" <?php  if ($this->pdesconto == "45") { echo " selected" ;} ?>>45%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '45'; ?>
 <option  value="50" <?php  if ($this->pdesconto == "50") { echo " selected" ;} ?>>50%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '50'; ?>
 <option  value="55" <?php  if ($this->pdesconto == "55") { echo " selected" ;} ?>>55%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '55'; ?>
 <option  value="60" <?php  if ($this->pdesconto == "60") { echo " selected" ;} ?>>60%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '60'; ?>
 <option  value="65" <?php  if ($this->pdesconto == "65") { echo " selected" ;} ?>>65%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '65'; ?>
 <option  value="70" <?php  if ($this->pdesconto == "70") { echo " selected" ;} ?>>70%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '70'; ?>
 <option  value="75" <?php  if ($this->pdesconto == "75") { echo " selected" ;} ?>>75%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '75'; ?>
 <option  value="80" <?php  if ($this->pdesconto == "80") { echo " selected" ;} ?>>80%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '80'; ?>
 <option  value="85" <?php  if ($this->pdesconto == "85") { echo " selected" ;} ?>>85%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '85'; ?>
 <option  value="90" <?php  if ($this->pdesconto == "90") { echo " selected" ;} ?>>90%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '90'; ?>
 <option  value="95" <?php  if ($this->pdesconto == "95") { echo " selected" ;} ?>>95%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '95'; ?>
 <option  value="100" <?php  if ($this->pdesconto == "100") { echo " selected" ;} ?>>100%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['Lookup_pdesconto'][] = '100'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pdesconto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pdesconto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_pdesconto_dumb = ('' == $sStyleHidden_pdesconto) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_pdesconto_dumb" style="<?php echo $sStyleHidden_pdesconto_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_6"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_6"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_6" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock" style="text-align: center; vertical-align: middle">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="middle" class="scFormBlockFont" style="color: #FF9900">PREENCHA CASO SUA  CAMPANHA  ESTEJA BASEADA EM  ALGUMA PREMIAÇÃO</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['foto_premiacao']))
    {
        $this->nm_new_label['foto_premiacao'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $foto_premiacao = $this->foto_premiacao;
   $sStyleHidden_foto_premiacao = '';
   if (isset($this->nmgp_cmp_hidden['foto_premiacao']) && $this->nmgp_cmp_hidden['foto_premiacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['foto_premiacao']);
       $sStyleHidden_foto_premiacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_foto_premiacao = 'display: none;';
   $sStyleReadInp_foto_premiacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['foto_premiacao']) && $this->nmgp_cmp_readonly['foto_premiacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['foto_premiacao']);
       $sStyleReadLab_foto_premiacao = '';
       $sStyleReadInp_foto_premiacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['foto_premiacao']) && $this->nmgp_cmp_hidden['foto_premiacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="foto_premiacao" value="<?php echo $this->form_encode_input($foto_premiacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_foto_premiacao_line" id="hidden_field_data_foto_premiacao" style="<?php echo $sStyleHidden_foto_premiacao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_foto_premiacao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_foto_premiacao_label"><span id="id_label_foto_premiacao"><?php echo $this->nm_new_label['foto_premiacao']; ?></span></span><br>
 <script>var var_ajax_img_foto_premiacao = '<?php echo $out1_foto_premiacao; ?>';</script><?php if (!empty($out_foto_premiacao)){ echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_foto_premiacao, '" . $this->nmgp_return_img['foto_premiacao'][0] . "', '" . $this->nmgp_return_img['foto_premiacao'][1] . "')\"><img id=\"id_ajax_img_foto_premiacao\" border=\"0\" src=\"$out_foto_premiacao\"></a> &nbsp;" . "<span id=\"txt_ajax_img_foto_premiacao\" style=\"display: none\">" . $foto_premiacao . "</span>"; if (!empty($foto_premiacao)){ echo "<br>";} } else { echo "<img id=\"id_ajax_img_foto_premiacao\" border=\"0\" style=\"display: none\"> &nbsp;<span id=\"txt_ajax_img_foto_premiacao\"></span><br />"; } ?>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["foto_premiacao"]) &&  $this->nmgp_cmp_readonly["foto_premiacao"] == "on") { 

 ?>
<img id=\"foto_premiacao_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="foto_premiacao" value="<?php echo $this->form_encode_input($foto_premiacao) . "\">" . $foto_premiacao . ""; ?>
<?php } else { ?>
<span id="id_read_off_foto_premiacao" style="white-space: nowrap;<?php echo $sStyleReadInp_foto_premiacao; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-foto_premiacao" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_foto_premiacao_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="foto_premiacao[]" id="id_sc_field_foto_premiacao" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_foto_premiacao"<?php if ($this->nmgp_opcao == "novo" || empty($foto_premiacao)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="foto_premiacao_limpa" value="<?php echo $foto_premiacao_limpa . '" '; if ($foto_premiacao_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="foto_premiacao_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_img_loader_foto_premiacao" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_foto_premiacao" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_foto_premiacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_foto_premiacao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_foto_premiacao_dumb = ('' == $sStyleHidden_foto_premiacao) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_foto_premiacao_dumb" style="<?php echo $sStyleHidden_foto_premiacao_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_7"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_7"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_7" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock" style="text-align: center; vertical-align: middle">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="middle" class="scFormBlockFont">É RECOMENDÁVEL QUE O TEXTO DA PREMIAÇÃO QUE SERÁ INSERIDO ABAIXO SEJA UM TEXTO CURTO COM NO MÁXIMO 5 LINHAS</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['texto_premiacao']))
    {
        $this->nm_new_label['texto_premiacao'] = " ";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $texto_premiacao = $this->texto_premiacao;
   $sStyleHidden_texto_premiacao = '';
   if (isset($this->nmgp_cmp_hidden['texto_premiacao']) && $this->nmgp_cmp_hidden['texto_premiacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['texto_premiacao']);
       $sStyleHidden_texto_premiacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_texto_premiacao = 'display: none;';
   $sStyleReadInp_texto_premiacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['texto_premiacao']) && $this->nmgp_cmp_readonly['texto_premiacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['texto_premiacao']);
       $sStyleReadLab_texto_premiacao = '';
       $sStyleReadInp_texto_premiacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['texto_premiacao']) && $this->nmgp_cmp_hidden['texto_premiacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="texto_premiacao" value="<?php echo $this->form_encode_input($texto_premiacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_texto_premiacao_line" id="hidden_field_data_texto_premiacao" style="<?php echo $sStyleHidden_texto_premiacao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_texto_premiacao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_texto_premiacao_label"><span id="id_label_texto_premiacao"><?php echo $this->nm_new_label['texto_premiacao']; ?></span></span><br>
<?php
$texto_premiacao_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($texto_premiacao));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["texto_premiacao"]) &&  $this->nmgp_cmp_readonly["texto_premiacao"] == "on") { 

 ?>
<input type="hidden" name="texto_premiacao" value="<?php echo $this->form_encode_input($texto_premiacao) . "\">" . $texto_premiacao_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_texto_premiacao" class="sc-ui-readonly-texto_premiacao css_texto_premiacao_line" style="<?php echo $sStyleReadLab_texto_premiacao; ?>"><?php echo $this->form_encode_input($texto_premiacao_val); ?></span><span id="id_read_off_texto_premiacao" style="white-space: nowrap;<?php echo $sStyleReadInp_texto_premiacao; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_texto_premiacao_obj" style="white-space: pre-wrap;" name="texto_premiacao" id="id_sc_field_texto_premiacao" rows="5" cols="150"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $texto_premiacao; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_texto_premiacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_texto_premiacao_text"></span></td></tr></table></td></tr></table> </TD>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
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
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
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
 $NM_pag_atual = "form_ap_contrato_publicador_cliente_mob_form0";
 if (isset($this->nmgp_ancora) && $this->nmgp_ancora != "")
 {
     $NM_pag_atual = "form_ap_contrato_publicador_cliente_mob_form" . $this->nmgp_ancora;
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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5,6,7);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['masterValue']))
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_ap_contrato_publicador_cliente_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_ap_contrato_publicador_cliente_mob");
 parent.scAjaxDetailHeight("form_ap_contrato_publicador_cliente_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_ap_contrato_publicador_cliente_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_ap_contrato_publicador_cliente_mob", <?php echo $sTamanhoIframe; ?>);
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
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
</body> 
</html> 
