<div id="form_ap_contrato_publicador_cliente_form1" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_2" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="7" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf2\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>DESCONTOS PRATICADOS<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pseg']))
   {
       $this->nm_new_label['pseg'] = "SEGUNDA";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pseg = $this->pseg;
   $sStyleHidden_pseg = '';
   if (isset($this->nmgp_cmp_hidden['pseg']) && $this->nmgp_cmp_hidden['pseg'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pseg']);
       $sStyleHidden_pseg = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pseg = 'display: none;';
   $sStyleReadInp_pseg = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pseg']) && $this->nmgp_cmp_readonly['pseg'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pseg']);
       $sStyleReadLab_pseg = '';
       $sStyleReadInp_pseg = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pseg']) && $this->nmgp_cmp_hidden['pseg'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pseg" value="<?php echo $this->form_encode_input($this->pseg) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pseg_line" id="hidden_field_data_pseg" style="<?php echo $sStyleHidden_pseg; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pseg_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pseg_label"><span id="id_label_pseg"><?php echo $this->nm_new_label['pseg']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['pseg']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['pseg'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pseg"]) &&  $this->nmgp_cmp_readonly["pseg"] == "on") { 

$pseg_look = "";
 if ($this->pseg == "0") { $pseg_look .= "0%" ;} 
 if ($this->pseg == "1") { $pseg_look .= "1%" ;} 
 if ($this->pseg == "2") { $pseg_look .= "2%" ;} 
 if ($this->pseg == "3") { $pseg_look .= "3%" ;} 
 if ($this->pseg == "4") { $pseg_look .= "4%" ;} 
 if ($this->pseg == "5") { $pseg_look .= "5%" ;} 
 if ($this->pseg == "6") { $pseg_look .= "6%" ;} 
 if ($this->pseg == "7") { $pseg_look .= "7%" ;} 
 if ($this->pseg == "8") { $pseg_look .= "8%" ;} 
 if ($this->pseg == "9") { $pseg_look .= "9%" ;} 
 if ($this->pseg == "10") { $pseg_look .= "10%" ;} 
 if ($this->pseg == "15") { $pseg_look .= "15%" ;} 
 if ($this->pseg == "20") { $pseg_look .= "20%" ;} 
 if ($this->pseg == "25") { $pseg_look .= "25%" ;} 
 if ($this->pseg == "30") { $pseg_look .= "30%" ;} 
 if ($this->pseg == "35") { $pseg_look .= "35%" ;} 
 if ($this->pseg == "40") { $pseg_look .= "40%" ;} 
 if ($this->pseg == "45") { $pseg_look .= "45%" ;} 
 if ($this->pseg == "50") { $pseg_look .= "50%" ;} 
 if ($this->pseg == "55") { $pseg_look .= "55%" ;} 
 if ($this->pseg == "60") { $pseg_look .= "60%" ;} 
 if ($this->pseg == "65") { $pseg_look .= "65%" ;} 
 if ($this->pseg == "70") { $pseg_look .= "70%" ;} 
 if ($this->pseg == "75") { $pseg_look .= "75%" ;} 
 if ($this->pseg == "80") { $pseg_look .= "80%" ;} 
 if ($this->pseg == "85") { $pseg_look .= "85%" ;} 
 if ($this->pseg == "90") { $pseg_look .= "90%" ;} 
 if ($this->pseg == "95") { $pseg_look .= "95%" ;} 
 if ($this->pseg == "100") { $pseg_look .= "100%" ;} 
 if (empty($pseg_look)) { $pseg_look = $this->pseg; }
?>
<input type="hidden" name="pseg" value="<?php echo $this->form_encode_input($pseg) . "\">" . $pseg_look . ""; ?>
<?php } else { ?>
<?php

$pseg_look = "";
 if ($this->pseg == "0") { $pseg_look .= "0%" ;} 
 if ($this->pseg == "1") { $pseg_look .= "1%" ;} 
 if ($this->pseg == "2") { $pseg_look .= "2%" ;} 
 if ($this->pseg == "3") { $pseg_look .= "3%" ;} 
 if ($this->pseg == "4") { $pseg_look .= "4%" ;} 
 if ($this->pseg == "5") { $pseg_look .= "5%" ;} 
 if ($this->pseg == "6") { $pseg_look .= "6%" ;} 
 if ($this->pseg == "7") { $pseg_look .= "7%" ;} 
 if ($this->pseg == "8") { $pseg_look .= "8%" ;} 
 if ($this->pseg == "9") { $pseg_look .= "9%" ;} 
 if ($this->pseg == "10") { $pseg_look .= "10%" ;} 
 if ($this->pseg == "15") { $pseg_look .= "15%" ;} 
 if ($this->pseg == "20") { $pseg_look .= "20%" ;} 
 if ($this->pseg == "25") { $pseg_look .= "25%" ;} 
 if ($this->pseg == "30") { $pseg_look .= "30%" ;} 
 if ($this->pseg == "35") { $pseg_look .= "35%" ;} 
 if ($this->pseg == "40") { $pseg_look .= "40%" ;} 
 if ($this->pseg == "45") { $pseg_look .= "45%" ;} 
 if ($this->pseg == "50") { $pseg_look .= "50%" ;} 
 if ($this->pseg == "55") { $pseg_look .= "55%" ;} 
 if ($this->pseg == "60") { $pseg_look .= "60%" ;} 
 if ($this->pseg == "65") { $pseg_look .= "65%" ;} 
 if ($this->pseg == "70") { $pseg_look .= "70%" ;} 
 if ($this->pseg == "75") { $pseg_look .= "75%" ;} 
 if ($this->pseg == "80") { $pseg_look .= "80%" ;} 
 if ($this->pseg == "85") { $pseg_look .= "85%" ;} 
 if ($this->pseg == "90") { $pseg_look .= "90%" ;} 
 if ($this->pseg == "95") { $pseg_look .= "95%" ;} 
 if ($this->pseg == "100") { $pseg_look .= "100%" ;} 
 if (empty($pseg_look)) { $pseg_look = $this->pseg; }
?>
<span id="id_read_on_pseg" class="css_pseg_line"  style="<?php echo $sStyleReadLab_pseg; ?>"><?php echo $this->form_encode_input($pseg_look); ?></span><span id="id_read_off_pseg" style="<?php echo $sStyleReadInp_pseg; ?>">
 <span id="idAjaxSelect_pseg"><select class="sc-js-input scFormObjectOdd css_pseg_obj" style="" id="id_sc_field_pseg" name="pseg" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = ''; ?>
 <option value="">SELECIONE</option>
 <option  value="0" <?php  if ($this->pseg == "0") { echo " selected" ;} ?>>0%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '0'; ?>
 <option  value="1" <?php  if ($this->pseg == "1") { echo " selected" ;} ?>>1%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '1'; ?>
 <option  value="2" <?php  if ($this->pseg == "2") { echo " selected" ;} ?>>2%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '2'; ?>
 <option  value="3" <?php  if ($this->pseg == "3") { echo " selected" ;} ?>>3%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '3'; ?>
 <option  value="4" <?php  if ($this->pseg == "4") { echo " selected" ;} ?>>4%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '4'; ?>
 <option  value="5" <?php  if ($this->pseg == "5") { echo " selected" ;} ?>>5%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '5'; ?>
 <option  value="6" <?php  if ($this->pseg == "6") { echo " selected" ;} ?>>6%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '6'; ?>
 <option  value="7" <?php  if ($this->pseg == "7") { echo " selected" ;} ?>>7%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '7'; ?>
 <option  value="8" <?php  if ($this->pseg == "8") { echo " selected" ;} ?>>8%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '8'; ?>
 <option  value="9" <?php  if ($this->pseg == "9") { echo " selected" ;} ?>>9%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '9'; ?>
 <option  value="10" <?php  if ($this->pseg == "10") { echo " selected" ;} ?>>10%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '10'; ?>
 <option  value="15" <?php  if ($this->pseg == "15") { echo " selected" ;} ?>>15%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '15'; ?>
 <option  value="20" <?php  if ($this->pseg == "20") { echo " selected" ;} ?>>20%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '20'; ?>
 <option  value="25" <?php  if ($this->pseg == "25") { echo " selected" ;} ?>>25%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '25'; ?>
 <option  value="30" <?php  if ($this->pseg == "30") { echo " selected" ;} ?>>30%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '30'; ?>
 <option  value="35" <?php  if ($this->pseg == "35") { echo " selected" ;} ?>>35%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '35'; ?>
 <option  value="40" <?php  if ($this->pseg == "40") { echo " selected" ;} ?>>40%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '40'; ?>
 <option  value="45" <?php  if ($this->pseg == "45") { echo " selected" ;} ?>>45%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '45'; ?>
 <option  value="50" <?php  if ($this->pseg == "50") { echo " selected" ;} ?>>50%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '50'; ?>
 <option  value="55" <?php  if ($this->pseg == "55") { echo " selected" ;} ?>>55%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '55'; ?>
 <option  value="60" <?php  if ($this->pseg == "60") { echo " selected" ;} ?>>60%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '60'; ?>
 <option  value="65" <?php  if ($this->pseg == "65") { echo " selected" ;} ?>>65%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '65'; ?>
 <option  value="70" <?php  if ($this->pseg == "70") { echo " selected" ;} ?>>70%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '70'; ?>
 <option  value="75" <?php  if ($this->pseg == "75") { echo " selected" ;} ?>>75%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '75'; ?>
 <option  value="80" <?php  if ($this->pseg == "80") { echo " selected" ;} ?>>80%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '80'; ?>
 <option  value="85" <?php  if ($this->pseg == "85") { echo " selected" ;} ?>>85%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '85'; ?>
 <option  value="90" <?php  if ($this->pseg == "90") { echo " selected" ;} ?>>90%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '90'; ?>
 <option  value="95" <?php  if ($this->pseg == "95") { echo " selected" ;} ?>>95%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '95'; ?>
 <option  value="100" <?php  if ($this->pseg == "100") { echo " selected" ;} ?>>100%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pseg'][] = '100'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pseg_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pseg_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['pter']))
   {
       $this->nm_new_label['pter'] = "TERÇA";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pter = $this->pter;
   $sStyleHidden_pter = '';
   if (isset($this->nmgp_cmp_hidden['pter']) && $this->nmgp_cmp_hidden['pter'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pter']);
       $sStyleHidden_pter = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pter = 'display: none;';
   $sStyleReadInp_pter = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pter']) && $this->nmgp_cmp_readonly['pter'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pter']);
       $sStyleReadLab_pter = '';
       $sStyleReadInp_pter = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pter']) && $this->nmgp_cmp_hidden['pter'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pter" value="<?php echo $this->form_encode_input($this->pter) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pter_line" id="hidden_field_data_pter" style="<?php echo $sStyleHidden_pter; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pter_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pter_label"><span id="id_label_pter"><?php echo $this->nm_new_label['pter']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['pter']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['pter'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pter"]) &&  $this->nmgp_cmp_readonly["pter"] == "on") { 

$pter_look = "";
 if ($this->pter == "0") { $pter_look .= "0%" ;} 
 if ($this->pter == "1") { $pter_look .= "1%" ;} 
 if ($this->pter == "2") { $pter_look .= "2%" ;} 
 if ($this->pter == "3") { $pter_look .= "3%" ;} 
 if ($this->pter == "4") { $pter_look .= "4%" ;} 
 if ($this->pter == "5") { $pter_look .= "5%" ;} 
 if ($this->pter == "6") { $pter_look .= "6%" ;} 
 if ($this->pter == "7") { $pter_look .= "7%" ;} 
 if ($this->pter == "8") { $pter_look .= "8%" ;} 
 if ($this->pter == "9") { $pter_look .= "9%" ;} 
 if ($this->pter == "10") { $pter_look .= "10%" ;} 
 if ($this->pter == "15") { $pter_look .= "15%" ;} 
 if ($this->pter == "20") { $pter_look .= "20%" ;} 
 if ($this->pter == "25") { $pter_look .= "25%" ;} 
 if ($this->pter == "30") { $pter_look .= "30%" ;} 
 if ($this->pter == "35") { $pter_look .= "35%" ;} 
 if ($this->pter == "40") { $pter_look .= "40%" ;} 
 if ($this->pter == "45") { $pter_look .= "45%" ;} 
 if ($this->pter == "50") { $pter_look .= "50%" ;} 
 if ($this->pter == "55") { $pter_look .= "55%" ;} 
 if ($this->pter == "60") { $pter_look .= "60%" ;} 
 if ($this->pter == "65") { $pter_look .= "65%" ;} 
 if ($this->pter == "70") { $pter_look .= "70%" ;} 
 if ($this->pter == "75") { $pter_look .= "75%" ;} 
 if ($this->pter == "80") { $pter_look .= "80%" ;} 
 if ($this->pter == "85") { $pter_look .= "85%" ;} 
 if ($this->pter == "90") { $pter_look .= "90%" ;} 
 if ($this->pter == "95") { $pter_look .= "95%" ;} 
 if ($this->pter == "100") { $pter_look .= "100%" ;} 
 if (empty($pter_look)) { $pter_look = $this->pter; }
?>
<input type="hidden" name="pter" value="<?php echo $this->form_encode_input($pter) . "\">" . $pter_look . ""; ?>
<?php } else { ?>
<?php

$pter_look = "";
 if ($this->pter == "0") { $pter_look .= "0%" ;} 
 if ($this->pter == "1") { $pter_look .= "1%" ;} 
 if ($this->pter == "2") { $pter_look .= "2%" ;} 
 if ($this->pter == "3") { $pter_look .= "3%" ;} 
 if ($this->pter == "4") { $pter_look .= "4%" ;} 
 if ($this->pter == "5") { $pter_look .= "5%" ;} 
 if ($this->pter == "6") { $pter_look .= "6%" ;} 
 if ($this->pter == "7") { $pter_look .= "7%" ;} 
 if ($this->pter == "8") { $pter_look .= "8%" ;} 
 if ($this->pter == "9") { $pter_look .= "9%" ;} 
 if ($this->pter == "10") { $pter_look .= "10%" ;} 
 if ($this->pter == "15") { $pter_look .= "15%" ;} 
 if ($this->pter == "20") { $pter_look .= "20%" ;} 
 if ($this->pter == "25") { $pter_look .= "25%" ;} 
 if ($this->pter == "30") { $pter_look .= "30%" ;} 
 if ($this->pter == "35") { $pter_look .= "35%" ;} 
 if ($this->pter == "40") { $pter_look .= "40%" ;} 
 if ($this->pter == "45") { $pter_look .= "45%" ;} 
 if ($this->pter == "50") { $pter_look .= "50%" ;} 
 if ($this->pter == "55") { $pter_look .= "55%" ;} 
 if ($this->pter == "60") { $pter_look .= "60%" ;} 
 if ($this->pter == "65") { $pter_look .= "65%" ;} 
 if ($this->pter == "70") { $pter_look .= "70%" ;} 
 if ($this->pter == "75") { $pter_look .= "75%" ;} 
 if ($this->pter == "80") { $pter_look .= "80%" ;} 
 if ($this->pter == "85") { $pter_look .= "85%" ;} 
 if ($this->pter == "90") { $pter_look .= "90%" ;} 
 if ($this->pter == "95") { $pter_look .= "95%" ;} 
 if ($this->pter == "100") { $pter_look .= "100%" ;} 
 if (empty($pter_look)) { $pter_look = $this->pter; }
?>
<span id="id_read_on_pter" class="css_pter_line"  style="<?php echo $sStyleReadLab_pter; ?>"><?php echo $this->form_encode_input($pter_look); ?></span><span id="id_read_off_pter" style="<?php echo $sStyleReadInp_pter; ?>">
 <span id="idAjaxSelect_pter"><select class="sc-js-input scFormObjectOdd css_pter_obj" style="" id="id_sc_field_pter" name="pter" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = ''; ?>
 <option value="">SELECIONE</option>
 <option  value="0" <?php  if ($this->pter == "0") { echo " selected" ;} ?>>0%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '0'; ?>
 <option  value="1" <?php  if ($this->pter == "1") { echo " selected" ;} ?>>1%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '1'; ?>
 <option  value="2" <?php  if ($this->pter == "2") { echo " selected" ;} ?>>2%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '2'; ?>
 <option  value="3" <?php  if ($this->pter == "3") { echo " selected" ;} ?>>3%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '3'; ?>
 <option  value="4" <?php  if ($this->pter == "4") { echo " selected" ;} ?>>4%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '4'; ?>
 <option  value="5" <?php  if ($this->pter == "5") { echo " selected" ;} ?>>5%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '5'; ?>
 <option  value="6" <?php  if ($this->pter == "6") { echo " selected" ;} ?>>6%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '6'; ?>
 <option  value="7" <?php  if ($this->pter == "7") { echo " selected" ;} ?>>7%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '7'; ?>
 <option  value="8" <?php  if ($this->pter == "8") { echo " selected" ;} ?>>8%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '8'; ?>
 <option  value="9" <?php  if ($this->pter == "9") { echo " selected" ;} ?>>9%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '9'; ?>
 <option  value="10" <?php  if ($this->pter == "10") { echo " selected" ;} ?>>10%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '10'; ?>
 <option  value="15" <?php  if ($this->pter == "15") { echo " selected" ;} ?>>15%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '15'; ?>
 <option  value="20" <?php  if ($this->pter == "20") { echo " selected" ;} ?>>20%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '20'; ?>
 <option  value="25" <?php  if ($this->pter == "25") { echo " selected" ;} ?>>25%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '25'; ?>
 <option  value="30" <?php  if ($this->pter == "30") { echo " selected" ;} ?>>30%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '30'; ?>
 <option  value="35" <?php  if ($this->pter == "35") { echo " selected" ;} ?>>35%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '35'; ?>
 <option  value="40" <?php  if ($this->pter == "40") { echo " selected" ;} ?>>40%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '40'; ?>
 <option  value="45" <?php  if ($this->pter == "45") { echo " selected" ;} ?>>45%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '45'; ?>
 <option  value="50" <?php  if ($this->pter == "50") { echo " selected" ;} ?>>50%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '50'; ?>
 <option  value="55" <?php  if ($this->pter == "55") { echo " selected" ;} ?>>55%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '55'; ?>
 <option  value="60" <?php  if ($this->pter == "60") { echo " selected" ;} ?>>60%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '60'; ?>
 <option  value="65" <?php  if ($this->pter == "65") { echo " selected" ;} ?>>65%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '65'; ?>
 <option  value="70" <?php  if ($this->pter == "70") { echo " selected" ;} ?>>70%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '70'; ?>
 <option  value="75" <?php  if ($this->pter == "75") { echo " selected" ;} ?>>75%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '75'; ?>
 <option  value="80" <?php  if ($this->pter == "80") { echo " selected" ;} ?>>80%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '80'; ?>
 <option  value="85" <?php  if ($this->pter == "85") { echo " selected" ;} ?>>85%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '85'; ?>
 <option  value="90" <?php  if ($this->pter == "90") { echo " selected" ;} ?>>90%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '90'; ?>
 <option  value="95" <?php  if ($this->pter == "95") { echo " selected" ;} ?>>95%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '95'; ?>
 <option  value="100" <?php  if ($this->pter == "100") { echo " selected" ;} ?>>100%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pter'][] = '100'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pter_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pter_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['pqua']))
   {
       $this->nm_new_label['pqua'] = "QUARTA";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pqua = $this->pqua;
   $sStyleHidden_pqua = '';
   if (isset($this->nmgp_cmp_hidden['pqua']) && $this->nmgp_cmp_hidden['pqua'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pqua']);
       $sStyleHidden_pqua = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pqua = 'display: none;';
   $sStyleReadInp_pqua = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pqua']) && $this->nmgp_cmp_readonly['pqua'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pqua']);
       $sStyleReadLab_pqua = '';
       $sStyleReadInp_pqua = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pqua']) && $this->nmgp_cmp_hidden['pqua'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pqua" value="<?php echo $this->form_encode_input($this->pqua) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pqua_line" id="hidden_field_data_pqua" style="<?php echo $sStyleHidden_pqua; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pqua_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pqua_label"><span id="id_label_pqua"><?php echo $this->nm_new_label['pqua']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['pqua']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['pqua'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pqua"]) &&  $this->nmgp_cmp_readonly["pqua"] == "on") { 

$pqua_look = "";
 if ($this->pqua == "0") { $pqua_look .= "0%" ;} 
 if ($this->pqua == "1") { $pqua_look .= "1%" ;} 
 if ($this->pqua == "2") { $pqua_look .= "2%" ;} 
 if ($this->pqua == "3") { $pqua_look .= "3%" ;} 
 if ($this->pqua == "4") { $pqua_look .= "4%" ;} 
 if ($this->pqua == "5") { $pqua_look .= "5%" ;} 
 if ($this->pqua == "6") { $pqua_look .= "6%" ;} 
 if ($this->pqua == "7") { $pqua_look .= "7%" ;} 
 if ($this->pqua == "8") { $pqua_look .= "8%" ;} 
 if ($this->pqua == "9") { $pqua_look .= "9%" ;} 
 if ($this->pqua == "10") { $pqua_look .= "10%" ;} 
 if ($this->pqua == "15") { $pqua_look .= "15%" ;} 
 if ($this->pqua == "20") { $pqua_look .= "20%" ;} 
 if ($this->pqua == "25") { $pqua_look .= "25%" ;} 
 if ($this->pqua == "30") { $pqua_look .= "30%" ;} 
 if ($this->pqua == "35") { $pqua_look .= "35%" ;} 
 if ($this->pqua == "40") { $pqua_look .= "40%" ;} 
 if ($this->pqua == "45") { $pqua_look .= "45%" ;} 
 if ($this->pqua == "50") { $pqua_look .= "50%" ;} 
 if ($this->pqua == "55") { $pqua_look .= "55%" ;} 
 if ($this->pqua == "60") { $pqua_look .= "60%" ;} 
 if ($this->pqua == "65") { $pqua_look .= "65%" ;} 
 if ($this->pqua == "70") { $pqua_look .= "70%" ;} 
 if ($this->pqua == "75") { $pqua_look .= "75%" ;} 
 if ($this->pqua == "80") { $pqua_look .= "80%" ;} 
 if ($this->pqua == "85") { $pqua_look .= "85%" ;} 
 if ($this->pqua == "90") { $pqua_look .= "90%" ;} 
 if ($this->pqua == "95") { $pqua_look .= "95%" ;} 
 if ($this->pqua == "100") { $pqua_look .= "100%" ;} 
 if (empty($pqua_look)) { $pqua_look = $this->pqua; }
?>
<input type="hidden" name="pqua" value="<?php echo $this->form_encode_input($pqua) . "\">" . $pqua_look . ""; ?>
<?php } else { ?>
<?php

$pqua_look = "";
 if ($this->pqua == "0") { $pqua_look .= "0%" ;} 
 if ($this->pqua == "1") { $pqua_look .= "1%" ;} 
 if ($this->pqua == "2") { $pqua_look .= "2%" ;} 
 if ($this->pqua == "3") { $pqua_look .= "3%" ;} 
 if ($this->pqua == "4") { $pqua_look .= "4%" ;} 
 if ($this->pqua == "5") { $pqua_look .= "5%" ;} 
 if ($this->pqua == "6") { $pqua_look .= "6%" ;} 
 if ($this->pqua == "7") { $pqua_look .= "7%" ;} 
 if ($this->pqua == "8") { $pqua_look .= "8%" ;} 
 if ($this->pqua == "9") { $pqua_look .= "9%" ;} 
 if ($this->pqua == "10") { $pqua_look .= "10%" ;} 
 if ($this->pqua == "15") { $pqua_look .= "15%" ;} 
 if ($this->pqua == "20") { $pqua_look .= "20%" ;} 
 if ($this->pqua == "25") { $pqua_look .= "25%" ;} 
 if ($this->pqua == "30") { $pqua_look .= "30%" ;} 
 if ($this->pqua == "35") { $pqua_look .= "35%" ;} 
 if ($this->pqua == "40") { $pqua_look .= "40%" ;} 
 if ($this->pqua == "45") { $pqua_look .= "45%" ;} 
 if ($this->pqua == "50") { $pqua_look .= "50%" ;} 
 if ($this->pqua == "55") { $pqua_look .= "55%" ;} 
 if ($this->pqua == "60") { $pqua_look .= "60%" ;} 
 if ($this->pqua == "65") { $pqua_look .= "65%" ;} 
 if ($this->pqua == "70") { $pqua_look .= "70%" ;} 
 if ($this->pqua == "75") { $pqua_look .= "75%" ;} 
 if ($this->pqua == "80") { $pqua_look .= "80%" ;} 
 if ($this->pqua == "85") { $pqua_look .= "85%" ;} 
 if ($this->pqua == "90") { $pqua_look .= "90%" ;} 
 if ($this->pqua == "95") { $pqua_look .= "95%" ;} 
 if ($this->pqua == "100") { $pqua_look .= "100%" ;} 
 if (empty($pqua_look)) { $pqua_look = $this->pqua; }
?>
<span id="id_read_on_pqua" class="css_pqua_line"  style="<?php echo $sStyleReadLab_pqua; ?>"><?php echo $this->form_encode_input($pqua_look); ?></span><span id="id_read_off_pqua" style="<?php echo $sStyleReadInp_pqua; ?>">
 <span id="idAjaxSelect_pqua"><select class="sc-js-input scFormObjectOdd css_pqua_obj" style="" id="id_sc_field_pqua" name="pqua" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = ''; ?>
 <option value="">SELECIONE</option>
 <option  value="0" <?php  if ($this->pqua == "0") { echo " selected" ;} ?>>0%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '0'; ?>
 <option  value="1" <?php  if ($this->pqua == "1") { echo " selected" ;} ?>>1%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '1'; ?>
 <option  value="2" <?php  if ($this->pqua == "2") { echo " selected" ;} ?>>2%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '2'; ?>
 <option  value="3" <?php  if ($this->pqua == "3") { echo " selected" ;} ?>>3%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '3'; ?>
 <option  value="4" <?php  if ($this->pqua == "4") { echo " selected" ;} ?>>4%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '4'; ?>
 <option  value="5" <?php  if ($this->pqua == "5") { echo " selected" ;} ?>>5%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '5'; ?>
 <option  value="6" <?php  if ($this->pqua == "6") { echo " selected" ;} ?>>6%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '6'; ?>
 <option  value="7" <?php  if ($this->pqua == "7") { echo " selected" ;} ?>>7%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '7'; ?>
 <option  value="8" <?php  if ($this->pqua == "8") { echo " selected" ;} ?>>8%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '8'; ?>
 <option  value="9" <?php  if ($this->pqua == "9") { echo " selected" ;} ?>>9%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '9'; ?>
 <option  value="10" <?php  if ($this->pqua == "10") { echo " selected" ;} ?>>10%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '10'; ?>
 <option  value="15" <?php  if ($this->pqua == "15") { echo " selected" ;} ?>>15%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '15'; ?>
 <option  value="20" <?php  if ($this->pqua == "20") { echo " selected" ;} ?>>20%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '20'; ?>
 <option  value="25" <?php  if ($this->pqua == "25") { echo " selected" ;} ?>>25%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '25'; ?>
 <option  value="30" <?php  if ($this->pqua == "30") { echo " selected" ;} ?>>30%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '30'; ?>
 <option  value="35" <?php  if ($this->pqua == "35") { echo " selected" ;} ?>>35%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '35'; ?>
 <option  value="40" <?php  if ($this->pqua == "40") { echo " selected" ;} ?>>40%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '40'; ?>
 <option  value="45" <?php  if ($this->pqua == "45") { echo " selected" ;} ?>>45%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '45'; ?>
 <option  value="50" <?php  if ($this->pqua == "50") { echo " selected" ;} ?>>50%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '50'; ?>
 <option  value="55" <?php  if ($this->pqua == "55") { echo " selected" ;} ?>>55%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '55'; ?>
 <option  value="60" <?php  if ($this->pqua == "60") { echo " selected" ;} ?>>60%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '60'; ?>
 <option  value="65" <?php  if ($this->pqua == "65") { echo " selected" ;} ?>>65%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '65'; ?>
 <option  value="70" <?php  if ($this->pqua == "70") { echo " selected" ;} ?>>70%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '70'; ?>
 <option  value="75" <?php  if ($this->pqua == "75") { echo " selected" ;} ?>>75%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '75'; ?>
 <option  value="80" <?php  if ($this->pqua == "80") { echo " selected" ;} ?>>80%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '80'; ?>
 <option  value="85" <?php  if ($this->pqua == "85") { echo " selected" ;} ?>>85%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '85'; ?>
 <option  value="90" <?php  if ($this->pqua == "90") { echo " selected" ;} ?>>90%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '90'; ?>
 <option  value="95" <?php  if ($this->pqua == "95") { echo " selected" ;} ?>>95%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '95'; ?>
 <option  value="100" <?php  if ($this->pqua == "100") { echo " selected" ;} ?>>100%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqua'][] = '100'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pqua_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pqua_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['pqui']))
   {
       $this->nm_new_label['pqui'] = "QUINTA";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pqui = $this->pqui;
   $sStyleHidden_pqui = '';
   if (isset($this->nmgp_cmp_hidden['pqui']) && $this->nmgp_cmp_hidden['pqui'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pqui']);
       $sStyleHidden_pqui = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pqui = 'display: none;';
   $sStyleReadInp_pqui = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pqui']) && $this->nmgp_cmp_readonly['pqui'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pqui']);
       $sStyleReadLab_pqui = '';
       $sStyleReadInp_pqui = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pqui']) && $this->nmgp_cmp_hidden['pqui'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pqui" value="<?php echo $this->form_encode_input($this->pqui) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pqui_line" id="hidden_field_data_pqui" style="<?php echo $sStyleHidden_pqui; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pqui_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pqui_label"><span id="id_label_pqui"><?php echo $this->nm_new_label['pqui']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['pqui']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['pqui'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pqui"]) &&  $this->nmgp_cmp_readonly["pqui"] == "on") { 

$pqui_look = "";
 if ($this->pqui == "0") { $pqui_look .= "0%" ;} 
 if ($this->pqui == "1") { $pqui_look .= "1%" ;} 
 if ($this->pqui == "2") { $pqui_look .= "2%" ;} 
 if ($this->pqui == "3") { $pqui_look .= "3%" ;} 
 if ($this->pqui == "4") { $pqui_look .= "4%" ;} 
 if ($this->pqui == "5") { $pqui_look .= "5%" ;} 
 if ($this->pqui == "6") { $pqui_look .= "6%" ;} 
 if ($this->pqui == "7") { $pqui_look .= "7%" ;} 
 if ($this->pqui == "8") { $pqui_look .= "8%" ;} 
 if ($this->pqui == "9") { $pqui_look .= "9%" ;} 
 if ($this->pqui == "10") { $pqui_look .= "10%" ;} 
 if ($this->pqui == "15") { $pqui_look .= "15%" ;} 
 if ($this->pqui == "20") { $pqui_look .= "20%" ;} 
 if ($this->pqui == "25") { $pqui_look .= "25%" ;} 
 if ($this->pqui == "30") { $pqui_look .= "30%" ;} 
 if ($this->pqui == "35") { $pqui_look .= "35%" ;} 
 if ($this->pqui == "40") { $pqui_look .= "40%" ;} 
 if ($this->pqui == "45") { $pqui_look .= "45%" ;} 
 if ($this->pqui == "50") { $pqui_look .= "50%" ;} 
 if ($this->pqui == "55") { $pqui_look .= "55%" ;} 
 if ($this->pqui == "60") { $pqui_look .= "60%" ;} 
 if ($this->pqui == "65") { $pqui_look .= "65%" ;} 
 if ($this->pqui == "70") { $pqui_look .= "70%" ;} 
 if ($this->pqui == "75") { $pqui_look .= "75%" ;} 
 if ($this->pqui == "80") { $pqui_look .= "80%" ;} 
 if ($this->pqui == "85") { $pqui_look .= "85%" ;} 
 if ($this->pqui == "90") { $pqui_look .= "90%" ;} 
 if ($this->pqui == "95") { $pqui_look .= "95%" ;} 
 if ($this->pqui == "100") { $pqui_look .= "100%" ;} 
 if (empty($pqui_look)) { $pqui_look = $this->pqui; }
?>
<input type="hidden" name="pqui" value="<?php echo $this->form_encode_input($pqui) . "\">" . $pqui_look . ""; ?>
<?php } else { ?>
<?php

$pqui_look = "";
 if ($this->pqui == "0") { $pqui_look .= "0%" ;} 
 if ($this->pqui == "1") { $pqui_look .= "1%" ;} 
 if ($this->pqui == "2") { $pqui_look .= "2%" ;} 
 if ($this->pqui == "3") { $pqui_look .= "3%" ;} 
 if ($this->pqui == "4") { $pqui_look .= "4%" ;} 
 if ($this->pqui == "5") { $pqui_look .= "5%" ;} 
 if ($this->pqui == "6") { $pqui_look .= "6%" ;} 
 if ($this->pqui == "7") { $pqui_look .= "7%" ;} 
 if ($this->pqui == "8") { $pqui_look .= "8%" ;} 
 if ($this->pqui == "9") { $pqui_look .= "9%" ;} 
 if ($this->pqui == "10") { $pqui_look .= "10%" ;} 
 if ($this->pqui == "15") { $pqui_look .= "15%" ;} 
 if ($this->pqui == "20") { $pqui_look .= "20%" ;} 
 if ($this->pqui == "25") { $pqui_look .= "25%" ;} 
 if ($this->pqui == "30") { $pqui_look .= "30%" ;} 
 if ($this->pqui == "35") { $pqui_look .= "35%" ;} 
 if ($this->pqui == "40") { $pqui_look .= "40%" ;} 
 if ($this->pqui == "45") { $pqui_look .= "45%" ;} 
 if ($this->pqui == "50") { $pqui_look .= "50%" ;} 
 if ($this->pqui == "55") { $pqui_look .= "55%" ;} 
 if ($this->pqui == "60") { $pqui_look .= "60%" ;} 
 if ($this->pqui == "65") { $pqui_look .= "65%" ;} 
 if ($this->pqui == "70") { $pqui_look .= "70%" ;} 
 if ($this->pqui == "75") { $pqui_look .= "75%" ;} 
 if ($this->pqui == "80") { $pqui_look .= "80%" ;} 
 if ($this->pqui == "85") { $pqui_look .= "85%" ;} 
 if ($this->pqui == "90") { $pqui_look .= "90%" ;} 
 if ($this->pqui == "95") { $pqui_look .= "95%" ;} 
 if ($this->pqui == "100") { $pqui_look .= "100%" ;} 
 if (empty($pqui_look)) { $pqui_look = $this->pqui; }
?>
<span id="id_read_on_pqui" class="css_pqui_line"  style="<?php echo $sStyleReadLab_pqui; ?>"><?php echo $this->form_encode_input($pqui_look); ?></span><span id="id_read_off_pqui" style="<?php echo $sStyleReadInp_pqui; ?>">
 <span id="idAjaxSelect_pqui"><select class="sc-js-input scFormObjectOdd css_pqui_obj" style="" id="id_sc_field_pqui" name="pqui" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = ''; ?>
 <option value="">SELECIONE</option>
 <option  value="0" <?php  if ($this->pqui == "0") { echo " selected" ;} ?>>0%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '0'; ?>
 <option  value="1" <?php  if ($this->pqui == "1") { echo " selected" ;} ?>>1%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '1'; ?>
 <option  value="2" <?php  if ($this->pqui == "2") { echo " selected" ;} ?>>2%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '2'; ?>
 <option  value="3" <?php  if ($this->pqui == "3") { echo " selected" ;} ?>>3%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '3'; ?>
 <option  value="4" <?php  if ($this->pqui == "4") { echo " selected" ;} ?>>4%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '4'; ?>
 <option  value="5" <?php  if ($this->pqui == "5") { echo " selected" ;} ?>>5%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '5'; ?>
 <option  value="6" <?php  if ($this->pqui == "6") { echo " selected" ;} ?>>6%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '6'; ?>
 <option  value="7" <?php  if ($this->pqui == "7") { echo " selected" ;} ?>>7%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '7'; ?>
 <option  value="8" <?php  if ($this->pqui == "8") { echo " selected" ;} ?>>8%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '8'; ?>
 <option  value="9" <?php  if ($this->pqui == "9") { echo " selected" ;} ?>>9%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '9'; ?>
 <option  value="10" <?php  if ($this->pqui == "10") { echo " selected" ;} ?>>10%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '10'; ?>
 <option  value="15" <?php  if ($this->pqui == "15") { echo " selected" ;} ?>>15%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '15'; ?>
 <option  value="20" <?php  if ($this->pqui == "20") { echo " selected" ;} ?>>20%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '20'; ?>
 <option  value="25" <?php  if ($this->pqui == "25") { echo " selected" ;} ?>>25%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '25'; ?>
 <option  value="30" <?php  if ($this->pqui == "30") { echo " selected" ;} ?>>30%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '30'; ?>
 <option  value="35" <?php  if ($this->pqui == "35") { echo " selected" ;} ?>>35%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '35'; ?>
 <option  value="40" <?php  if ($this->pqui == "40") { echo " selected" ;} ?>>40%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '40'; ?>
 <option  value="45" <?php  if ($this->pqui == "45") { echo " selected" ;} ?>>45%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '45'; ?>
 <option  value="50" <?php  if ($this->pqui == "50") { echo " selected" ;} ?>>50%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '50'; ?>
 <option  value="55" <?php  if ($this->pqui == "55") { echo " selected" ;} ?>>55%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '55'; ?>
 <option  value="60" <?php  if ($this->pqui == "60") { echo " selected" ;} ?>>60%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '60'; ?>
 <option  value="65" <?php  if ($this->pqui == "65") { echo " selected" ;} ?>>65%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '65'; ?>
 <option  value="70" <?php  if ($this->pqui == "70") { echo " selected" ;} ?>>70%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '70'; ?>
 <option  value="75" <?php  if ($this->pqui == "75") { echo " selected" ;} ?>>75%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '75'; ?>
 <option  value="80" <?php  if ($this->pqui == "80") { echo " selected" ;} ?>>80%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '80'; ?>
 <option  value="85" <?php  if ($this->pqui == "85") { echo " selected" ;} ?>>85%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '85'; ?>
 <option  value="90" <?php  if ($this->pqui == "90") { echo " selected" ;} ?>>90%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '90'; ?>
 <option  value="95" <?php  if ($this->pqui == "95") { echo " selected" ;} ?>>95%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '95'; ?>
 <option  value="100" <?php  if ($this->pqui == "100") { echo " selected" ;} ?>>100%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pqui'][] = '100'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pqui_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pqui_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['psex']))
   {
       $this->nm_new_label['psex'] = "SEXTA";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $psex = $this->psex;
   $sStyleHidden_psex = '';
   if (isset($this->nmgp_cmp_hidden['psex']) && $this->nmgp_cmp_hidden['psex'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['psex']);
       $sStyleHidden_psex = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_psex = 'display: none;';
   $sStyleReadInp_psex = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['psex']) && $this->nmgp_cmp_readonly['psex'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['psex']);
       $sStyleReadLab_psex = '';
       $sStyleReadInp_psex = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['psex']) && $this->nmgp_cmp_hidden['psex'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="psex" value="<?php echo $this->form_encode_input($this->psex) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_psex_line" id="hidden_field_data_psex" style="<?php echo $sStyleHidden_psex; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_psex_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_psex_label"><span id="id_label_psex"><?php echo $this->nm_new_label['psex']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['psex']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['psex'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["psex"]) &&  $this->nmgp_cmp_readonly["psex"] == "on") { 

$psex_look = "";
 if ($this->psex == "0") { $psex_look .= "0%" ;} 
 if ($this->psex == "1") { $psex_look .= "1%" ;} 
 if ($this->psex == "2") { $psex_look .= "2%" ;} 
 if ($this->psex == "3") { $psex_look .= "3%" ;} 
 if ($this->psex == "4") { $psex_look .= "4%" ;} 
 if ($this->psex == "5") { $psex_look .= "5%" ;} 
 if ($this->psex == "6") { $psex_look .= "6%" ;} 
 if ($this->psex == "7") { $psex_look .= "7%" ;} 
 if ($this->psex == "8") { $psex_look .= "8%" ;} 
 if ($this->psex == "9") { $psex_look .= "9%" ;} 
 if ($this->psex == "10") { $psex_look .= "10%" ;} 
 if ($this->psex == "15") { $psex_look .= "15%" ;} 
 if ($this->psex == "20") { $psex_look .= "20%" ;} 
 if ($this->psex == "25") { $psex_look .= "25%" ;} 
 if ($this->psex == "30") { $psex_look .= "30%" ;} 
 if ($this->psex == "35") { $psex_look .= "35%" ;} 
 if ($this->psex == "40") { $psex_look .= "40%" ;} 
 if ($this->psex == "45") { $psex_look .= "45%" ;} 
 if ($this->psex == "50") { $psex_look .= "50%" ;} 
 if ($this->psex == "55") { $psex_look .= "55%" ;} 
 if ($this->psex == "60") { $psex_look .= "60%" ;} 
 if ($this->psex == "65") { $psex_look .= "65%" ;} 
 if ($this->psex == "70") { $psex_look .= "70%" ;} 
 if ($this->psex == "75") { $psex_look .= "75%" ;} 
 if ($this->psex == "80") { $psex_look .= "80%" ;} 
 if ($this->psex == "85") { $psex_look .= "85%" ;} 
 if ($this->psex == "90") { $psex_look .= "90%" ;} 
 if ($this->psex == "95") { $psex_look .= "95%" ;} 
 if ($this->psex == "100") { $psex_look .= "100%" ;} 
 if (empty($psex_look)) { $psex_look = $this->psex; }
?>
<input type="hidden" name="psex" value="<?php echo $this->form_encode_input($psex) . "\">" . $psex_look . ""; ?>
<?php } else { ?>
<?php

$psex_look = "";
 if ($this->psex == "0") { $psex_look .= "0%" ;} 
 if ($this->psex == "1") { $psex_look .= "1%" ;} 
 if ($this->psex == "2") { $psex_look .= "2%" ;} 
 if ($this->psex == "3") { $psex_look .= "3%" ;} 
 if ($this->psex == "4") { $psex_look .= "4%" ;} 
 if ($this->psex == "5") { $psex_look .= "5%" ;} 
 if ($this->psex == "6") { $psex_look .= "6%" ;} 
 if ($this->psex == "7") { $psex_look .= "7%" ;} 
 if ($this->psex == "8") { $psex_look .= "8%" ;} 
 if ($this->psex == "9") { $psex_look .= "9%" ;} 
 if ($this->psex == "10") { $psex_look .= "10%" ;} 
 if ($this->psex == "15") { $psex_look .= "15%" ;} 
 if ($this->psex == "20") { $psex_look .= "20%" ;} 
 if ($this->psex == "25") { $psex_look .= "25%" ;} 
 if ($this->psex == "30") { $psex_look .= "30%" ;} 
 if ($this->psex == "35") { $psex_look .= "35%" ;} 
 if ($this->psex == "40") { $psex_look .= "40%" ;} 
 if ($this->psex == "45") { $psex_look .= "45%" ;} 
 if ($this->psex == "50") { $psex_look .= "50%" ;} 
 if ($this->psex == "55") { $psex_look .= "55%" ;} 
 if ($this->psex == "60") { $psex_look .= "60%" ;} 
 if ($this->psex == "65") { $psex_look .= "65%" ;} 
 if ($this->psex == "70") { $psex_look .= "70%" ;} 
 if ($this->psex == "75") { $psex_look .= "75%" ;} 
 if ($this->psex == "80") { $psex_look .= "80%" ;} 
 if ($this->psex == "85") { $psex_look .= "85%" ;} 
 if ($this->psex == "90") { $psex_look .= "90%" ;} 
 if ($this->psex == "95") { $psex_look .= "95%" ;} 
 if ($this->psex == "100") { $psex_look .= "100%" ;} 
 if (empty($psex_look)) { $psex_look = $this->psex; }
?>
<span id="id_read_on_psex" class="css_psex_line"  style="<?php echo $sStyleReadLab_psex; ?>"><?php echo $this->form_encode_input($psex_look); ?></span><span id="id_read_off_psex" style="<?php echo $sStyleReadInp_psex; ?>">
 <span id="idAjaxSelect_psex"><select class="sc-js-input scFormObjectOdd css_psex_obj" style="" id="id_sc_field_psex" name="psex" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = ''; ?>
 <option value="">SELECIONE</option>
 <option  value="0" <?php  if ($this->psex == "0") { echo " selected" ;} ?>>0%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '0'; ?>
 <option  value="1" <?php  if ($this->psex == "1") { echo " selected" ;} ?>>1%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '1'; ?>
 <option  value="2" <?php  if ($this->psex == "2") { echo " selected" ;} ?>>2%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '2'; ?>
 <option  value="3" <?php  if ($this->psex == "3") { echo " selected" ;} ?>>3%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '3'; ?>
 <option  value="4" <?php  if ($this->psex == "4") { echo " selected" ;} ?>>4%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '4'; ?>
 <option  value="5" <?php  if ($this->psex == "5") { echo " selected" ;} ?>>5%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '5'; ?>
 <option  value="6" <?php  if ($this->psex == "6") { echo " selected" ;} ?>>6%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '6'; ?>
 <option  value="7" <?php  if ($this->psex == "7") { echo " selected" ;} ?>>7%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '7'; ?>
 <option  value="8" <?php  if ($this->psex == "8") { echo " selected" ;} ?>>8%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '8'; ?>
 <option  value="9" <?php  if ($this->psex == "9") { echo " selected" ;} ?>>9%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '9'; ?>
 <option  value="10" <?php  if ($this->psex == "10") { echo " selected" ;} ?>>10%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '10'; ?>
 <option  value="15" <?php  if ($this->psex == "15") { echo " selected" ;} ?>>15%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '15'; ?>
 <option  value="20" <?php  if ($this->psex == "20") { echo " selected" ;} ?>>20%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '20'; ?>
 <option  value="25" <?php  if ($this->psex == "25") { echo " selected" ;} ?>>25%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '25'; ?>
 <option  value="30" <?php  if ($this->psex == "30") { echo " selected" ;} ?>>30%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '30'; ?>
 <option  value="35" <?php  if ($this->psex == "35") { echo " selected" ;} ?>>35%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '35'; ?>
 <option  value="40" <?php  if ($this->psex == "40") { echo " selected" ;} ?>>40%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '40'; ?>
 <option  value="45" <?php  if ($this->psex == "45") { echo " selected" ;} ?>>45%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '45'; ?>
 <option  value="50" <?php  if ($this->psex == "50") { echo " selected" ;} ?>>50%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '50'; ?>
 <option  value="55" <?php  if ($this->psex == "55") { echo " selected" ;} ?>>55%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '55'; ?>
 <option  value="60" <?php  if ($this->psex == "60") { echo " selected" ;} ?>>60%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '60'; ?>
 <option  value="65" <?php  if ($this->psex == "65") { echo " selected" ;} ?>>65%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '65'; ?>
 <option  value="70" <?php  if ($this->psex == "70") { echo " selected" ;} ?>>70%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '70'; ?>
 <option  value="75" <?php  if ($this->psex == "75") { echo " selected" ;} ?>>75%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '75'; ?>
 <option  value="80" <?php  if ($this->psex == "80") { echo " selected" ;} ?>>80%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '80'; ?>
 <option  value="85" <?php  if ($this->psex == "85") { echo " selected" ;} ?>>85%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '85'; ?>
 <option  value="90" <?php  if ($this->psex == "90") { echo " selected" ;} ?>>90%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '90'; ?>
 <option  value="95" <?php  if ($this->psex == "95") { echo " selected" ;} ?>>95%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '95'; ?>
 <option  value="100" <?php  if ($this->psex == "100") { echo " selected" ;} ?>>100%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psex'][] = '100'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_psex_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_psex_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['psab']))
   {
       $this->nm_new_label['psab'] = "SABADO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $psab = $this->psab;
   $sStyleHidden_psab = '';
   if (isset($this->nmgp_cmp_hidden['psab']) && $this->nmgp_cmp_hidden['psab'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['psab']);
       $sStyleHidden_psab = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_psab = 'display: none;';
   $sStyleReadInp_psab = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['psab']) && $this->nmgp_cmp_readonly['psab'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['psab']);
       $sStyleReadLab_psab = '';
       $sStyleReadInp_psab = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['psab']) && $this->nmgp_cmp_hidden['psab'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="psab" value="<?php echo $this->form_encode_input($this->psab) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_psab_line" id="hidden_field_data_psab" style="<?php echo $sStyleHidden_psab; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_psab_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_psab_label"><span id="id_label_psab"><?php echo $this->nm_new_label['psab']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['psab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['psab'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["psab"]) &&  $this->nmgp_cmp_readonly["psab"] == "on") { 

$psab_look = "";
 if ($this->psab == "0") { $psab_look .= "0%" ;} 
 if ($this->psab == "1") { $psab_look .= "1%" ;} 
 if ($this->psab == "2") { $psab_look .= "2%" ;} 
 if ($this->psab == "3") { $psab_look .= "3%" ;} 
 if ($this->psab == "4") { $psab_look .= "4%" ;} 
 if ($this->psab == "5") { $psab_look .= "5%" ;} 
 if ($this->psab == "6") { $psab_look .= "6%" ;} 
 if ($this->psab == "7") { $psab_look .= "7%" ;} 
 if ($this->psab == "8") { $psab_look .= "8%" ;} 
 if ($this->psab == "9") { $psab_look .= "9%" ;} 
 if ($this->psab == "10") { $psab_look .= "10%" ;} 
 if ($this->psab == "15") { $psab_look .= "15%" ;} 
 if ($this->psab == "20") { $psab_look .= "20%" ;} 
 if ($this->psab == "25") { $psab_look .= "25%" ;} 
 if ($this->psab == "30") { $psab_look .= "30%" ;} 
 if ($this->psab == "35") { $psab_look .= "35%" ;} 
 if ($this->psab == "40") { $psab_look .= "40%" ;} 
 if ($this->psab == "45") { $psab_look .= "45%" ;} 
 if ($this->psab == "50") { $psab_look .= "50%" ;} 
 if ($this->psab == "55") { $psab_look .= "55%" ;} 
 if ($this->psab == "60") { $psab_look .= "60%" ;} 
 if ($this->psab == "65") { $psab_look .= "65%" ;} 
 if ($this->psab == "70") { $psab_look .= "70%" ;} 
 if ($this->psab == "75") { $psab_look .= "75%" ;} 
 if ($this->psab == "80") { $psab_look .= "80%" ;} 
 if ($this->psab == "85") { $psab_look .= "85%" ;} 
 if ($this->psab == "90") { $psab_look .= "90%" ;} 
 if ($this->psab == "95") { $psab_look .= "95%" ;} 
 if ($this->psab == "100") { $psab_look .= "100%" ;} 
 if (empty($psab_look)) { $psab_look = $this->psab; }
?>
<input type="hidden" name="psab" value="<?php echo $this->form_encode_input($psab) . "\">" . $psab_look . ""; ?>
<?php } else { ?>
<?php

$psab_look = "";
 if ($this->psab == "0") { $psab_look .= "0%" ;} 
 if ($this->psab == "1") { $psab_look .= "1%" ;} 
 if ($this->psab == "2") { $psab_look .= "2%" ;} 
 if ($this->psab == "3") { $psab_look .= "3%" ;} 
 if ($this->psab == "4") { $psab_look .= "4%" ;} 
 if ($this->psab == "5") { $psab_look .= "5%" ;} 
 if ($this->psab == "6") { $psab_look .= "6%" ;} 
 if ($this->psab == "7") { $psab_look .= "7%" ;} 
 if ($this->psab == "8") { $psab_look .= "8%" ;} 
 if ($this->psab == "9") { $psab_look .= "9%" ;} 
 if ($this->psab == "10") { $psab_look .= "10%" ;} 
 if ($this->psab == "15") { $psab_look .= "15%" ;} 
 if ($this->psab == "20") { $psab_look .= "20%" ;} 
 if ($this->psab == "25") { $psab_look .= "25%" ;} 
 if ($this->psab == "30") { $psab_look .= "30%" ;} 
 if ($this->psab == "35") { $psab_look .= "35%" ;} 
 if ($this->psab == "40") { $psab_look .= "40%" ;} 
 if ($this->psab == "45") { $psab_look .= "45%" ;} 
 if ($this->psab == "50") { $psab_look .= "50%" ;} 
 if ($this->psab == "55") { $psab_look .= "55%" ;} 
 if ($this->psab == "60") { $psab_look .= "60%" ;} 
 if ($this->psab == "65") { $psab_look .= "65%" ;} 
 if ($this->psab == "70") { $psab_look .= "70%" ;} 
 if ($this->psab == "75") { $psab_look .= "75%" ;} 
 if ($this->psab == "80") { $psab_look .= "80%" ;} 
 if ($this->psab == "85") { $psab_look .= "85%" ;} 
 if ($this->psab == "90") { $psab_look .= "90%" ;} 
 if ($this->psab == "95") { $psab_look .= "95%" ;} 
 if ($this->psab == "100") { $psab_look .= "100%" ;} 
 if (empty($psab_look)) { $psab_look = $this->psab; }
?>
<span id="id_read_on_psab" class="css_psab_line"  style="<?php echo $sStyleReadLab_psab; ?>"><?php echo $this->form_encode_input($psab_look); ?></span><span id="id_read_off_psab" style="<?php echo $sStyleReadInp_psab; ?>">
 <span id="idAjaxSelect_psab"><select class="sc-js-input scFormObjectOdd css_psab_obj" style="" id="id_sc_field_psab" name="psab" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = ''; ?>
 <option value="">SELECIONE</option>
 <option  value="0" <?php  if ($this->psab == "0") { echo " selected" ;} ?>>0%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '0'; ?>
 <option  value="1" <?php  if ($this->psab == "1") { echo " selected" ;} ?>>1%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '1'; ?>
 <option  value="2" <?php  if ($this->psab == "2") { echo " selected" ;} ?>>2%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '2'; ?>
 <option  value="3" <?php  if ($this->psab == "3") { echo " selected" ;} ?>>3%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '3'; ?>
 <option  value="4" <?php  if ($this->psab == "4") { echo " selected" ;} ?>>4%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '4'; ?>
 <option  value="5" <?php  if ($this->psab == "5") { echo " selected" ;} ?>>5%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '5'; ?>
 <option  value="6" <?php  if ($this->psab == "6") { echo " selected" ;} ?>>6%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '6'; ?>
 <option  value="7" <?php  if ($this->psab == "7") { echo " selected" ;} ?>>7%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '7'; ?>
 <option  value="8" <?php  if ($this->psab == "8") { echo " selected" ;} ?>>8%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '8'; ?>
 <option  value="9" <?php  if ($this->psab == "9") { echo " selected" ;} ?>>9%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '9'; ?>
 <option  value="10" <?php  if ($this->psab == "10") { echo " selected" ;} ?>>10%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '10'; ?>
 <option  value="15" <?php  if ($this->psab == "15") { echo " selected" ;} ?>>15%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '15'; ?>
 <option  value="20" <?php  if ($this->psab == "20") { echo " selected" ;} ?>>20%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '20'; ?>
 <option  value="25" <?php  if ($this->psab == "25") { echo " selected" ;} ?>>25%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '25'; ?>
 <option  value="30" <?php  if ($this->psab == "30") { echo " selected" ;} ?>>30%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '30'; ?>
 <option  value="35" <?php  if ($this->psab == "35") { echo " selected" ;} ?>>35%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '35'; ?>
 <option  value="40" <?php  if ($this->psab == "40") { echo " selected" ;} ?>>40%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '40'; ?>
 <option  value="45" <?php  if ($this->psab == "45") { echo " selected" ;} ?>>45%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '45'; ?>
 <option  value="50" <?php  if ($this->psab == "50") { echo " selected" ;} ?>>50%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '50'; ?>
 <option  value="55" <?php  if ($this->psab == "55") { echo " selected" ;} ?>>55%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '55'; ?>
 <option  value="60" <?php  if ($this->psab == "60") { echo " selected" ;} ?>>60%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '60'; ?>
 <option  value="65" <?php  if ($this->psab == "65") { echo " selected" ;} ?>>65%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '65'; ?>
 <option  value="70" <?php  if ($this->psab == "70") { echo " selected" ;} ?>>70%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '70'; ?>
 <option  value="75" <?php  if ($this->psab == "75") { echo " selected" ;} ?>>75%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '75'; ?>
 <option  value="80" <?php  if ($this->psab == "80") { echo " selected" ;} ?>>80%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '80'; ?>
 <option  value="85" <?php  if ($this->psab == "85") { echo " selected" ;} ?>>85%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '85'; ?>
 <option  value="90" <?php  if ($this->psab == "90") { echo " selected" ;} ?>>90%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '90'; ?>
 <option  value="95" <?php  if ($this->psab == "95") { echo " selected" ;} ?>>95%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '95'; ?>
 <option  value="100" <?php  if ($this->psab == "100") { echo " selected" ;} ?>>100%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_psab'][] = '100'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_psab_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_psab_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['pdom']))
   {
       $this->nm_new_label['pdom'] = "DOMINGO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pdom = $this->pdom;
   $sStyleHidden_pdom = '';
   if (isset($this->nmgp_cmp_hidden['pdom']) && $this->nmgp_cmp_hidden['pdom'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pdom']);
       $sStyleHidden_pdom = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pdom = 'display: none;';
   $sStyleReadInp_pdom = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pdom']) && $this->nmgp_cmp_readonly['pdom'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pdom']);
       $sStyleReadLab_pdom = '';
       $sStyleReadInp_pdom = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pdom']) && $this->nmgp_cmp_hidden['pdom'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pdom" value="<?php echo $this->form_encode_input($this->pdom) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pdom_line" id="hidden_field_data_pdom" style="<?php echo $sStyleHidden_pdom; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pdom_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pdom_label"><span id="id_label_pdom"><?php echo $this->nm_new_label['pdom']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['pdom']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['php_cmp_required']['pdom'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pdom"]) &&  $this->nmgp_cmp_readonly["pdom"] == "on") { 

$pdom_look = "";
 if ($this->pdom == "0") { $pdom_look .= "0%" ;} 
 if ($this->pdom == "1") { $pdom_look .= "1%" ;} 
 if ($this->pdom == "2") { $pdom_look .= "2%" ;} 
 if ($this->pdom == "3") { $pdom_look .= "3%" ;} 
 if ($this->pdom == "4") { $pdom_look .= "4%" ;} 
 if ($this->pdom == "5") { $pdom_look .= "5%" ;} 
 if ($this->pdom == "6") { $pdom_look .= "6%" ;} 
 if ($this->pdom == "7") { $pdom_look .= "7%" ;} 
 if ($this->pdom == "8") { $pdom_look .= "8%" ;} 
 if ($this->pdom == "9") { $pdom_look .= "9%" ;} 
 if ($this->pdom == "10") { $pdom_look .= "10%" ;} 
 if ($this->pdom == "15") { $pdom_look .= "15%" ;} 
 if ($this->pdom == "20") { $pdom_look .= "20%" ;} 
 if ($this->pdom == "25") { $pdom_look .= "25%" ;} 
 if ($this->pdom == "30") { $pdom_look .= "30%" ;} 
 if ($this->pdom == "35") { $pdom_look .= "35%" ;} 
 if ($this->pdom == "40") { $pdom_look .= "40%" ;} 
 if ($this->pdom == "45") { $pdom_look .= "45%" ;} 
 if ($this->pdom == "50") { $pdom_look .= "50%" ;} 
 if ($this->pdom == "55") { $pdom_look .= "55%" ;} 
 if ($this->pdom == "60") { $pdom_look .= "60%" ;} 
 if ($this->pdom == "65") { $pdom_look .= "65%" ;} 
 if ($this->pdom == "70") { $pdom_look .= "70%" ;} 
 if ($this->pdom == "75") { $pdom_look .= "75%" ;} 
 if ($this->pdom == "80") { $pdom_look .= "80%" ;} 
 if ($this->pdom == "85") { $pdom_look .= "85%" ;} 
 if ($this->pdom == "90") { $pdom_look .= "90%" ;} 
 if ($this->pdom == "95") { $pdom_look .= "95%" ;} 
 if ($this->pdom == "100") { $pdom_look .= "100%" ;} 
 if (empty($pdom_look)) { $pdom_look = $this->pdom; }
?>
<input type="hidden" name="pdom" value="<?php echo $this->form_encode_input($pdom) . "\">" . $pdom_look . ""; ?>
<?php } else { ?>
<?php

$pdom_look = "";
 if ($this->pdom == "0") { $pdom_look .= "0%" ;} 
 if ($this->pdom == "1") { $pdom_look .= "1%" ;} 
 if ($this->pdom == "2") { $pdom_look .= "2%" ;} 
 if ($this->pdom == "3") { $pdom_look .= "3%" ;} 
 if ($this->pdom == "4") { $pdom_look .= "4%" ;} 
 if ($this->pdom == "5") { $pdom_look .= "5%" ;} 
 if ($this->pdom == "6") { $pdom_look .= "6%" ;} 
 if ($this->pdom == "7") { $pdom_look .= "7%" ;} 
 if ($this->pdom == "8") { $pdom_look .= "8%" ;} 
 if ($this->pdom == "9") { $pdom_look .= "9%" ;} 
 if ($this->pdom == "10") { $pdom_look .= "10%" ;} 
 if ($this->pdom == "15") { $pdom_look .= "15%" ;} 
 if ($this->pdom == "20") { $pdom_look .= "20%" ;} 
 if ($this->pdom == "25") { $pdom_look .= "25%" ;} 
 if ($this->pdom == "30") { $pdom_look .= "30%" ;} 
 if ($this->pdom == "35") { $pdom_look .= "35%" ;} 
 if ($this->pdom == "40") { $pdom_look .= "40%" ;} 
 if ($this->pdom == "45") { $pdom_look .= "45%" ;} 
 if ($this->pdom == "50") { $pdom_look .= "50%" ;} 
 if ($this->pdom == "55") { $pdom_look .= "55%" ;} 
 if ($this->pdom == "60") { $pdom_look .= "60%" ;} 
 if ($this->pdom == "65") { $pdom_look .= "65%" ;} 
 if ($this->pdom == "70") { $pdom_look .= "70%" ;} 
 if ($this->pdom == "75") { $pdom_look .= "75%" ;} 
 if ($this->pdom == "80") { $pdom_look .= "80%" ;} 
 if ($this->pdom == "85") { $pdom_look .= "85%" ;} 
 if ($this->pdom == "90") { $pdom_look .= "90%" ;} 
 if ($this->pdom == "95") { $pdom_look .= "95%" ;} 
 if ($this->pdom == "100") { $pdom_look .= "100%" ;} 
 if (empty($pdom_look)) { $pdom_look = $this->pdom; }
?>
<span id="id_read_on_pdom" class="css_pdom_line"  style="<?php echo $sStyleReadLab_pdom; ?>"><?php echo $this->form_encode_input($pdom_look); ?></span><span id="id_read_off_pdom" style="<?php echo $sStyleReadInp_pdom; ?>">
 <span id="idAjaxSelect_pdom"><select class="sc-js-input scFormObjectOdd css_pdom_obj" style="" id="id_sc_field_pdom" name="pdom" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = ''; ?>
 <option value="">SELECIONE</option>
 <option  value="0" <?php  if ($this->pdom == "0") { echo " selected" ;} ?>>0%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '0'; ?>
 <option  value="1" <?php  if ($this->pdom == "1") { echo " selected" ;} ?>>1%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '1'; ?>
 <option  value="2" <?php  if ($this->pdom == "2") { echo " selected" ;} ?>>2%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '2'; ?>
 <option  value="3" <?php  if ($this->pdom == "3") { echo " selected" ;} ?>>3%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '3'; ?>
 <option  value="4" <?php  if ($this->pdom == "4") { echo " selected" ;} ?>>4%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '4'; ?>
 <option  value="5" <?php  if ($this->pdom == "5") { echo " selected" ;} ?>>5%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '5'; ?>
 <option  value="6" <?php  if ($this->pdom == "6") { echo " selected" ;} ?>>6%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '6'; ?>
 <option  value="7" <?php  if ($this->pdom == "7") { echo " selected" ;} ?>>7%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '7'; ?>
 <option  value="8" <?php  if ($this->pdom == "8") { echo " selected" ;} ?>>8%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '8'; ?>
 <option  value="9" <?php  if ($this->pdom == "9") { echo " selected" ;} ?>>9%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '9'; ?>
 <option  value="10" <?php  if ($this->pdom == "10") { echo " selected" ;} ?>>10%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '10'; ?>
 <option  value="15" <?php  if ($this->pdom == "15") { echo " selected" ;} ?>>15%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '15'; ?>
 <option  value="20" <?php  if ($this->pdom == "20") { echo " selected" ;} ?>>20%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '20'; ?>
 <option  value="25" <?php  if ($this->pdom == "25") { echo " selected" ;} ?>>25%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '25'; ?>
 <option  value="30" <?php  if ($this->pdom == "30") { echo " selected" ;} ?>>30%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '30'; ?>
 <option  value="35" <?php  if ($this->pdom == "35") { echo " selected" ;} ?>>35%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '35'; ?>
 <option  value="40" <?php  if ($this->pdom == "40") { echo " selected" ;} ?>>40%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '40'; ?>
 <option  value="45" <?php  if ($this->pdom == "45") { echo " selected" ;} ?>>45%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '45'; ?>
 <option  value="50" <?php  if ($this->pdom == "50") { echo " selected" ;} ?>>50%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '50'; ?>
 <option  value="55" <?php  if ($this->pdom == "55") { echo " selected" ;} ?>>55%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '55'; ?>
 <option  value="60" <?php  if ($this->pdom == "60") { echo " selected" ;} ?>>60%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '60'; ?>
 <option  value="65" <?php  if ($this->pdom == "65") { echo " selected" ;} ?>>65%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '65'; ?>
 <option  value="70" <?php  if ($this->pdom == "70") { echo " selected" ;} ?>>70%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '70'; ?>
 <option  value="75" <?php  if ($this->pdom == "75") { echo " selected" ;} ?>>75%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '75'; ?>
 <option  value="80" <?php  if ($this->pdom == "80") { echo " selected" ;} ?>>80%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '80'; ?>
 <option  value="85" <?php  if ($this->pdom == "85") { echo " selected" ;} ?>>85%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '85'; ?>
 <option  value="90" <?php  if ($this->pdom == "90") { echo " selected" ;} ?>>90%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '90'; ?>
 <option  value="95" <?php  if ($this->pdom == "95") { echo " selected" ;} ?>>95%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '95'; ?>
 <option  value="100" <?php  if ($this->pdom == "100") { echo " selected" ;} ?>>100%</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_pdom'][] = '100'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pdom_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pdom_text"></span></td></tr></table></td></tr></table> </TD>
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
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="20%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="2" height="20" class="scFormBlock" style="text-align: center; vertical-align: middle">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="middle" class="scFormBlockFont" style="font-size: 18px; color: #CC6600">ESTES DADOS SERÃO APRESENTADOS TANTO NO APLICATIVO MOBILE COMO NO CHECK-IN DENTRO DO FACEBOOK</TD>
       
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
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['Lookup_destaque'][] = '1'; ?>
<?php  if (in_array("1", $this->destaque_1))  { echo " checked" ;} ?> onClick="" >Em Destaque</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
<br><span class="scFormLabelOddFormat css_destaque_label"><span id="id_label_destaque"><?php echo $this->nm_new_label['destaque']; ?></span></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_destaque_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_destaque_text"></span></td></tr></table></td></tr></table> </TD>
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
       <TD align="center" valign="middle" class="scFormBlockFont">FOTO DA PUBLICAÇÃO NO FACE / MOBILE</TD>
       
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
   <a name="bloco_5"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_5"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_5" class="scFormTable" width="100%" style="height: 100%;">   <tr>


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

    <TD class="scFormDataOdd css_texto_publicacao_line" id="hidden_field_data_texto_publicacao" style="<?php echo $sStyleHidden_texto_publicacao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_texto_publicacao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_texto_publicacao_label"><span id="id_label_texto_publicacao"><?php echo $this->nm_new_label['texto_publicacao']; ?></span></span><br>
<?php
$texto_publicacao_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($texto_publicacao));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["texto_publicacao"]) &&  $this->nmgp_cmp_readonly["texto_publicacao"] == "on") { 

 ?>
<input type="hidden" name="texto_publicacao" value="<?php echo $this->form_encode_input($texto_publicacao) . "\">" . $texto_publicacao_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_texto_publicacao" class="sc-ui-readonly-texto_publicacao css_texto_publicacao_line" style="<?php echo $sStyleReadLab_texto_publicacao; ?>"><?php echo $this->form_encode_input($texto_publicacao_val); ?></span><span id="id_read_off_texto_publicacao" style="white-space: nowrap;<?php echo $sStyleReadInp_texto_publicacao; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_texto_publicacao_obj" style="white-space: pre-wrap;" name="texto_publicacao" id="id_sc_field_texto_publicacao" rows="5" cols="150"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $texto_publicacao; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_texto_publicacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_texto_publicacao_text"></span></td></tr></table></td></tr></table> </TD>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "R")
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
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
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
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo');", "nm_move ('novo');", "sc_b_new_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "nm_atualiza ('excluir');", "nm_atualiza ('excluir');", "sc_b_del_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
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
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['run_iframe'] != "R")
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
 $NM_pag_atual = "form_ap_contrato_publicador_cliente_form0";
 if (isset($this->nmgp_ancora) && $this->nmgp_ancora != "")
 {
     $NM_pag_atual = "form_ap_contrato_publicador_cliente_form" . $this->nmgp_ancora;
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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_ap_contrato_publicador_cliente");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_ap_contrato_publicador_cliente");
 parent.scAjaxDetailHeight("form_ap_contrato_publicador_cliente", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_ap_contrato_publicador_cliente", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_ap_contrato_publicador_cliente", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato_publicador_cliente']['sc_modal'])
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
