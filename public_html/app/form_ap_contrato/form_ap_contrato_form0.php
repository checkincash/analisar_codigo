<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("CHECK-IN CASH | REGISTRO DE CONTRATO"); } else { echo strip_tags("CHECK-IN CASH | REGISTRO DE CONTRATO"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
<?php
header("X-XSS-Protection: 0");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_ap_contrato/form_ap_contrato_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_ap_contrato_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_binicio_off = "<?php echo $this->arr_buttons['binicio_off']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bavanca_off = "<?php echo $this->arr_buttons['bavanca_off']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bretorna_off = "<?php echo $this->arr_buttons['bretorna_off']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_bfinal_off  = "<?php echo $this->arr_buttons['bfinal_off']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).show();
       $("#sc_b_ini_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ini_" + str_pos).show();
       $("#gbl_sc_b_ini_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).show();
       $("#sc_b_ret_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ret_" + str_pos).show();
       $("#gbl_sc_b_ret_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).hide();
       $("#sc_b_ini_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ini_" + str_pos).hide();
       $("#gbl_sc_b_ini_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).hide();
       $("#sc_b_ret_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ret_" + str_pos).hide();
       $("#gbl_sc_b_ret_off_" + str_pos).show();
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).show();
       $("#sc_b_fim_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_fim_" + str_pos).show();
       $("#gbl_sc_b_fim_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).show();
       $("#sc_b_avc_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_avc_" + str_pos).show();
       $("#gbl_sc_b_avc_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).hide();
       $("#sc_b_fim_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_fim_" + str_pos).hide();
       $("#gbl_sc_b_fim_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).hide();
       $("#sc_b_avc_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_avc_" + str_pos).hide();
       $("#gbl_sc_b_avc_off_" + str_pos).show();
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_ap_contrato_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
   });
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = 'margin-bottom:  px;';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/nm_rpc.js" ?>"> 
</script> 
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_ap_contrato_js0.php");
?>
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/nm_rpc.js" ?>"> 
</script> 
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
 </script>
<form  name="F1" method="post" enctype="multipart/form-data" 
               action="./" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="upload_file_flag" value="">
<input type="hidden" name="upload_file_check" value="">
<input type="hidden" name="upload_file_name" value="">
<input type="hidden" name="upload_file_temp" value="">
<input type="hidden" name="upload_file_libs" value="">
<input type="hidden" name="upload_file_height" value="">
<input type="hidden" name="upload_file_width" value="">
<input type="hidden" name="upload_file_aspect" value="">
<input type="hidden" name="upload_file_type" value="">
<input type="hidden" name="fachada_salva" value="<?php  echo $this->form_encode_input($this->fachada) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_ap_contrato'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_ap_contrato'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0  width="70%">
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['mostra_cab'] != "N") && (!$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['dashboard_info']['under_dashboard'] || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['dashboard_info']['compact_mode'] || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['dashboard_info']['maximized']))
  {
?>
<tr><td>
<TABLE width="100%" style="padding: 0px; border-spacing: 0px; border-width: 0px;" cellpadding="0" cellspacing="0">
<TR align="center">
 <TD colspan="3">
     <table  style="padding: 0px; border-spacing: 0px; border-width: 0px;" width="100%" cellpadding="0" cellspacing="0">
       <tr valign="middle">
         <td align="left" ><span class="scFormHeaderFont">  </span></td>
         <td style="font-size: 5px">&nbsp; &nbsp; </td>
         <td align="center" ><span class="scFormHeaderFont"> <?php if ($this->nmgp_opcao == "novo") { echo "CHECK-IN CASH | REGISTRO DE CONTRATO"; } else { echo "CHECK-IN CASH | REGISTRO DE CONTRATO"; } ?> </span></td>
         <td style="font-size: 5px">&nbsp; &nbsp; </td>
         <td align="right" ><span class="scFormHeaderFont">  &nbsp;&nbsp;</span></td>
         <td width="3px" class="scFormHeader"></td>
       </tr>
     </table>
 </TD>
</TR>
<TR align="center" >
  <TD height="5px" class="scFormHeader"></TD>
  <TD height="1px" class="scFormHeader"></TD>
  <TD height="1px" class="scFormHeader"></TD>
</TR>
</TABLE></td></tr>
<?php
  }
?>
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['empty_filter'] = true;
       }
  }
  else
  {
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="50%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><input type="hidden" name="fachada_ul_name" id="id_sc_field_fachada_ul_name" value="<?php echo $this->form_encode_input($this->fachada_ul_name);?>">
<input type="hidden" name="fachada_ul_type" id="id_sc_field_fachada_ul_type" value="<?php echo $this->form_encode_input($this->fachada_ul_type);?>">
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont" style="color: 003366">IDENTIFICA��O</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cnpj']))
    {
        $this->nm_new_label['cnpj'] = "CNPJ/CPF";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cnpj = $this->cnpj;
   $sStyleHidden_cnpj = '';
   if (isset($this->nmgp_cmp_hidden['cnpj']) && $this->nmgp_cmp_hidden['cnpj'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cnpj']);
       $sStyleHidden_cnpj = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cnpj = 'display: none;';
   $sStyleReadInp_cnpj = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cnpj']) && $this->nmgp_cmp_readonly['cnpj'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cnpj']);
       $sStyleReadLab_cnpj = '';
       $sStyleReadInp_cnpj = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cnpj']) && $this->nmgp_cmp_hidden['cnpj'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cnpj" value="<?php echo $this->form_encode_input($cnpj) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cnpj_line" id="hidden_field_data_cnpj" style="<?php echo $sStyleHidden_cnpj; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cnpj_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cnpj_label"><span id="id_label_cnpj"><?php echo $this->nm_new_label['cnpj']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['cnpj']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['cnpj'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cnpj"]) &&  $this->nmgp_cmp_readonly["cnpj"] == "on") { 

 ?>
<input type="hidden" name="cnpj" value="<?php echo $this->form_encode_input($cnpj) . "\">" . $cnpj . ""; ?>
<?php } else { ?>
<span id="id_read_on_cnpj" class="sc-ui-readonly-cnpj css_cnpj_line" style="<?php echo $sStyleReadLab_cnpj; ?>"><?php echo $this->form_encode_input($this->cnpj); ?></span><span id="id_read_off_cnpj" style="white-space: nowrap;<?php echo $sStyleReadInp_cnpj; ?>">
 <input class="sc-js-input scFormObjectOdd css_cnpj_obj" style="" id="id_sc_field_cnpj" type=text name="cnpj" value="<?php echo $this->form_encode_input($cnpj) ?>"
 size=16 alt="{datatype: 'mask', maskList: '999.999.999-99;99.999.999/9999-99', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cnpj_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cnpj_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['inscricao']))
    {
        $this->nm_new_label['inscricao'] = "INSCRI��O";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inscricao = $this->inscricao;
   $sStyleHidden_inscricao = '';
   if (isset($this->nmgp_cmp_hidden['inscricao']) && $this->nmgp_cmp_hidden['inscricao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inscricao']);
       $sStyleHidden_inscricao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inscricao = 'display: none;';
   $sStyleReadInp_inscricao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['inscricao']) && $this->nmgp_cmp_readonly['inscricao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inscricao']);
       $sStyleReadLab_inscricao = '';
       $sStyleReadInp_inscricao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inscricao']) && $this->nmgp_cmp_hidden['inscricao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="inscricao" value="<?php echo $this->form_encode_input($inscricao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_inscricao_line" id="hidden_field_data_inscricao" style="<?php echo $sStyleHidden_inscricao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inscricao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_inscricao_label"><span id="id_label_inscricao"><?php echo $this->nm_new_label['inscricao']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["inscricao"]) &&  $this->nmgp_cmp_readonly["inscricao"] == "on") { 

 ?>
<input type="hidden" name="inscricao" value="<?php echo $this->form_encode_input($inscricao) . "\">" . $inscricao . ""; ?>
<?php } else { ?>
<span id="id_read_on_inscricao" class="sc-ui-readonly-inscricao css_inscricao_line" style="<?php echo $sStyleReadLab_inscricao; ?>"><?php echo $this->form_encode_input($this->inscricao); ?></span><span id="id_read_off_inscricao" style="white-space: nowrap;<?php echo $sStyleReadInp_inscricao; ?>">
 <input class="sc-js-input scFormObjectOdd css_inscricao_obj" style="" id="id_sc_field_inscricao" type=text name="inscricao" value="<?php echo $this->form_encode_input($inscricao) ?>"
 size=20 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inscricao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inscricao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['razao']))
    {
        $this->nm_new_label['razao'] = "Raz�o Social";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $razao = $this->razao;
   $sStyleHidden_razao = '';
   if (isset($this->nmgp_cmp_hidden['razao']) && $this->nmgp_cmp_hidden['razao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['razao']);
       $sStyleHidden_razao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_razao = 'display: none;';
   $sStyleReadInp_razao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['razao']) && $this->nmgp_cmp_readonly['razao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['razao']);
       $sStyleReadLab_razao = '';
       $sStyleReadInp_razao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['razao']) && $this->nmgp_cmp_hidden['razao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="razao" value="<?php echo $this->form_encode_input($razao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_razao_line" id="hidden_field_data_razao" style="<?php echo $sStyleHidden_razao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_razao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_razao_label"><span id="id_label_razao"><?php echo $this->nm_new_label['razao']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['razao']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['razao'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["razao"]) &&  $this->nmgp_cmp_readonly["razao"] == "on") { 

 ?>
<input type="hidden" name="razao" value="<?php echo $this->form_encode_input($razao) . "\">" . $razao . ""; ?>
<?php } else { ?>
<span id="id_read_on_razao" class="sc-ui-readonly-razao css_razao_line" style="<?php echo $sStyleReadLab_razao; ?>"><?php echo $this->form_encode_input($this->razao); ?></span><span id="id_read_off_razao" style="white-space: nowrap;<?php echo $sStyleReadInp_razao; ?>">
 <input class="sc-js-input scFormObjectOdd css_razao_obj" style="" id="id_sc_field_razao" type=text name="razao" value="<?php echo $this->form_encode_input($razao) ?>"
 size=50 maxlength=80 alt="{datatype: 'text', maxLength: 80, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_razao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_razao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fantasia']))
    {
        $this->nm_new_label['fantasia'] = "Nome Fantasia";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fantasia = $this->fantasia;
   $sStyleHidden_fantasia = '';
   if (isset($this->nmgp_cmp_hidden['fantasia']) && $this->nmgp_cmp_hidden['fantasia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fantasia']);
       $sStyleHidden_fantasia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fantasia = 'display: none;';
   $sStyleReadInp_fantasia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fantasia']) && $this->nmgp_cmp_readonly['fantasia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fantasia']);
       $sStyleReadLab_fantasia = '';
       $sStyleReadInp_fantasia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fantasia']) && $this->nmgp_cmp_hidden['fantasia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fantasia" value="<?php echo $this->form_encode_input($fantasia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fantasia_line" id="hidden_field_data_fantasia" style="<?php echo $sStyleHidden_fantasia; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fantasia_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fantasia_label"><span id="id_label_fantasia"><?php echo $this->nm_new_label['fantasia']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['fantasia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['fantasia'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fantasia"]) &&  $this->nmgp_cmp_readonly["fantasia"] == "on") { 

 ?>
<input type="hidden" name="fantasia" value="<?php echo $this->form_encode_input($fantasia) . "\">" . $fantasia . ""; ?>
<?php } else { ?>
<span id="id_read_on_fantasia" class="sc-ui-readonly-fantasia css_fantasia_line" style="<?php echo $sStyleReadLab_fantasia; ?>"><?php echo $this->form_encode_input($this->fantasia); ?></span><span id="id_read_off_fantasia" style="white-space: nowrap;<?php echo $sStyleReadInp_fantasia; ?>">
 <input class="sc-js-input scFormObjectOdd css_fantasia_obj" style="" id="id_sc_field_fantasia" type=text name="fantasia" value="<?php echo $this->form_encode_input($fantasia) ?>"
 size=50 maxlength=80 alt="{datatype: 'text', maxLength: 80, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fantasia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fantasia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fantasia_dumb = ('' == $sStyleHidden_fantasia) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fantasia_dumb" style="<?php echo $sStyleHidden_fantasia_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   <td width="25%" height="">
   <a name="bloco_1"></a>
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont" style="color: 003366">CREDENCIAIS DE ACESSO</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['senha_usuario']))
    {
        $this->nm_new_label['senha_usuario'] = "Senha Usuario";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $senha_usuario = $this->senha_usuario;
   $sStyleHidden_senha_usuario = '';
   if (isset($this->nmgp_cmp_hidden['senha_usuario']) && $this->nmgp_cmp_hidden['senha_usuario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['senha_usuario']);
       $sStyleHidden_senha_usuario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_senha_usuario = 'display: none;';
   $sStyleReadInp_senha_usuario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['senha_usuario']) && $this->nmgp_cmp_readonly['senha_usuario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['senha_usuario']);
       $sStyleReadLab_senha_usuario = '';
       $sStyleReadInp_senha_usuario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['senha_usuario']) && $this->nmgp_cmp_hidden['senha_usuario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="senha_usuario" value="<?php echo $this->form_encode_input($senha_usuario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_senha_usuario_line" id="hidden_field_data_senha_usuario" style="<?php echo $sStyleHidden_senha_usuario; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_senha_usuario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_senha_usuario_label"><span id="id_label_senha_usuario"><?php echo $this->nm_new_label['senha_usuario']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['senha_usuario']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['senha_usuario'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["senha_usuario"]) &&  $this->nmgp_cmp_readonly["senha_usuario"] == "on") { ?>
<input type="hidden" name="senha_usuario" value="">
<?php } else { ?>
<span id="id_read_on_senha_usuario" class="sc-ui-readonly-senha_usuario css_senha_usuario_line" style="<?php echo $sStyleReadLab_senha_usuario; ?>"><?php echo $this->form_encode_input($this->senha_usuario); ?></span><span id="id_read_off_senha_usuario" style="white-space: nowrap;<?php echo $sStyleReadInp_senha_usuario; ?>"><input class="sc-js-input scFormObjectOdd css_senha_usuario_obj" style="" id="id_sc_field_senha_usuario" type=password name="senha_usuario" value="" 
 size=30 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_senha_usuario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_senha_usuario_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['retype_senha']))
    {
        $this->nm_new_label['retype_senha'] = "Redigite a Senha";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $retype_senha = $this->retype_senha;
   $sStyleHidden_retype_senha = '';
   if (isset($this->nmgp_cmp_hidden['retype_senha']) && $this->nmgp_cmp_hidden['retype_senha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['retype_senha']);
       $sStyleHidden_retype_senha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_retype_senha = 'display: none;';
   $sStyleReadInp_retype_senha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['retype_senha']) && $this->nmgp_cmp_readonly['retype_senha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['retype_senha']);
       $sStyleReadLab_retype_senha = '';
       $sStyleReadInp_retype_senha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['retype_senha']) && $this->nmgp_cmp_hidden['retype_senha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="retype_senha" value="<?php echo $this->form_encode_input($retype_senha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_retype_senha_line" id="hidden_field_data_retype_senha" style="<?php echo $sStyleHidden_retype_senha; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_retype_senha_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_retype_senha_label"><span id="id_label_retype_senha"><?php echo $this->nm_new_label['retype_senha']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['retype_senha']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['retype_senha'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["retype_senha"]) &&  $this->nmgp_cmp_readonly["retype_senha"] == "on") { ?>
<input type="hidden" name="retype_senha" value="">
<?php } else { ?>
<span id="id_read_on_retype_senha" class="sc-ui-readonly-retype_senha css_retype_senha_line" style="<?php echo $sStyleReadLab_retype_senha; ?>"><?php echo $this->form_encode_input($this->retype_senha); ?></span><span id="id_read_off_retype_senha" style="white-space: nowrap;<?php echo $sStyleReadInp_retype_senha; ?>"><input class="sc-js-input scFormObjectOdd css_retype_senha_obj" style="" id="id_sc_field_retype_senha" type=password name="retype_senha" value="" 
 size=30 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_retype_senha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_retype_senha_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['email']))
    {
        $this->nm_new_label['email'] = "Email";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $email = $this->email;
   $sStyleHidden_email = '';
   if (isset($this->nmgp_cmp_hidden['email']) && $this->nmgp_cmp_hidden['email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['email']);
       $sStyleHidden_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_email = 'display: none;';
   $sStyleReadInp_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['email']) && $this->nmgp_cmp_readonly['email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['email']);
       $sStyleReadLab_email = '';
       $sStyleReadInp_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['email']) && $this->nmgp_cmp_hidden['email'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="email" value="<?php echo $this->form_encode_input($email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_email_line" id="hidden_field_data_email" style="<?php echo $sStyleHidden_email; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_email_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_email_label"><span id="id_label_email"><?php echo $this->nm_new_label['email']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['email']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['email'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["email"]) &&  $this->nmgp_cmp_readonly["email"] == "on") { 

 ?>
<input type="hidden" name="email" value="<?php echo $this->form_encode_input($email) . "\">" . $email . ""; ?>
<?php } else { ?>
<span id="id_read_on_email" class="sc-ui-readonly-email css_email_line" style="<?php echo $sStyleReadLab_email; ?>"><?php echo $this->form_encode_input($this->email); ?></span><span id="id_read_off_email" style="white-space: nowrap;<?php echo $sStyleReadInp_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_email_obj" style="" id="id_sc_field_email" type=text name="email" value="<?php echo $this->form_encode_input($email) ?>"
 size=40 maxlength=145 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><img src="../_lib/img/scriptcase__NM__nm_transparent.gif" style="vertical-align: middle; display: none" class="sc-js-ui-statusimg" id="id_sc_status_email" />&nbsp;<?php if ($this->nmgp_opcao != "novo"){ ?><?php echo nmButtonOutput($this->arr_buttons, "bemail", "if (document.F1.email.value != '') {window.open('mailto:' + document.F1.email.value); }", "if (document.F1.email.value != '') {window.open('mailto:' + document.F1.email.value); }", "email_mail", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_email_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['retype_email']))
    {
        $this->nm_new_label['retype_email'] = "Redigite o Email";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $retype_email = $this->retype_email;
   $sStyleHidden_retype_email = '';
   if (isset($this->nmgp_cmp_hidden['retype_email']) && $this->nmgp_cmp_hidden['retype_email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['retype_email']);
       $sStyleHidden_retype_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_retype_email = 'display: none;';
   $sStyleReadInp_retype_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['retype_email']) && $this->nmgp_cmp_readonly['retype_email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['retype_email']);
       $sStyleReadLab_retype_email = '';
       $sStyleReadInp_retype_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['retype_email']) && $this->nmgp_cmp_hidden['retype_email'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="retype_email" value="<?php echo $this->form_encode_input($retype_email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_retype_email_line" id="hidden_field_data_retype_email" style="<?php echo $sStyleHidden_retype_email; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_retype_email_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_retype_email_label"><span id="id_label_retype_email"><?php echo $this->nm_new_label['retype_email']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["retype_email"]) &&  $this->nmgp_cmp_readonly["retype_email"] == "on") { 

 ?>
<input type="hidden" name="retype_email" value="<?php echo $this->form_encode_input($retype_email) . "\">" . $retype_email . ""; ?>
<?php } else { ?>
<span id="id_read_on_retype_email" class="sc-ui-readonly-retype_email css_retype_email_line" style="<?php echo $sStyleReadLab_retype_email; ?>"><?php echo $this->form_encode_input($this->retype_email); ?></span><span id="id_read_off_retype_email" style="white-space: nowrap;<?php echo $sStyleReadInp_retype_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_retype_email_obj" style="" id="id_sc_field_retype_email" type=text name="retype_email" value="<?php echo $this->form_encode_input($retype_email) ?>"
 size=40 maxlength=145 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><img src="../_lib/img/scriptcase__NM__nm_transparent.gif" style="vertical-align: middle; display: none" class="sc-js-ui-statusimg" id="id_sc_status_retype_email" />&nbsp;<?php if ($this->nmgp_opcao != "novo"){ ?><?php echo nmButtonOutput($this->arr_buttons, "bemail", "if (document.F1.retype_email.value != '') {window.open('mailto:' + document.F1.retype_email.value); }", "if (document.F1.retype_email.value != '') {window.open('mailto:' + document.F1.retype_email.value); }", "retype_email_mail", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_retype_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_retype_email_text"></span></td></tr></table></td></tr></table> </TD>
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
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fk_classificacao']))
   {
       $this->nm_new_label['fk_classificacao'] = "Categoria";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fk_classificacao = $this->fk_classificacao;
   $sStyleHidden_fk_classificacao = '';
   if (isset($this->nmgp_cmp_hidden['fk_classificacao']) && $this->nmgp_cmp_hidden['fk_classificacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fk_classificacao']);
       $sStyleHidden_fk_classificacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fk_classificacao = 'display: none;';
   $sStyleReadInp_fk_classificacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fk_classificacao']) && $this->nmgp_cmp_readonly['fk_classificacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fk_classificacao']);
       $sStyleReadLab_fk_classificacao = '';
       $sStyleReadInp_fk_classificacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fk_classificacao']) && $this->nmgp_cmp_hidden['fk_classificacao'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fk_classificacao" value="<?php echo $this->form_encode_input($this->fk_classificacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fk_classificacao_line" id="hidden_field_data_fk_classificacao" style="<?php echo $sStyleHidden_fk_classificacao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fk_classificacao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fk_classificacao_label"><span id="id_label_fk_classificacao"><?php echo $this->nm_new_label['fk_classificacao']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['fk_classificacao']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['fk_classificacao'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fk_classificacao"]) &&  $this->nmgp_cmp_readonly["fk_classificacao"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['Lookup_fk_classificacao']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['Lookup_fk_classificacao'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['Lookup_fk_classificacao']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['Lookup_fk_classificacao'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['Lookup_fk_classificacao']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['Lookup_fk_classificacao'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['Lookup_fk_classificacao']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['Lookup_fk_classificacao'] = array(); 
    }

   $old_value_cnpj = $this->cnpj;
   $old_value_telefone = $this->telefone;
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
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_cnpj = $this->cnpj;
   $unformatted_value_telefone = $this->telefone;
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

   $nm_comando = "SELECT pk_classificacao, descricao  FROM ap_classificacao  ORDER BY descricao";

   $this->cnpj = $old_value_cnpj;
   $this->telefone = $old_value_telefone;
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['Lookup_fk_classificacao'][] = $rs->fields[0];
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
   $x = 0; 
   $fk_classificacao_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fk_classificacao_1))
          {
              foreach ($this->fk_classificacao_1 as $tmp_fk_classificacao)
              {
                  if (trim($tmp_fk_classificacao) === trim($cadaselect[1])) { $fk_classificacao_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->fk_classificacao) === trim($cadaselect[1])) { $fk_classificacao_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="fk_classificacao" value="<?php echo $this->form_encode_input($fk_classificacao) . "\">" . $fk_classificacao_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fk_classificacao();
   $x = 0 ; 
   $fk_classificacao_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fk_classificacao_1))
          {
              foreach ($this->fk_classificacao_1 as $tmp_fk_classificacao)
              {
                  if (trim($tmp_fk_classificacao) === trim($cadaselect[1])) { $fk_classificacao_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->fk_classificacao) === trim($cadaselect[1])) { $fk_classificacao_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fk_classificacao_look))
          {
              $fk_classificacao_look = $this->fk_classificacao;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fk_classificacao\" class=\"css_fk_classificacao_line\" style=\"" .  $sStyleReadLab_fk_classificacao . "\">" . $this->form_encode_input($fk_classificacao_look) . "</span><span id=\"id_read_off_fk_classificacao\" style=\"" . $sStyleReadInp_fk_classificacao . "\">";
   echo " <span id=\"idAjaxSelect_fk_classificacao\"><select class=\"sc-js-input scFormObjectOdd css_fk_classificacao_obj\" style=\"\" id=\"id_sc_field_fk_classificacao\" name=\"fk_classificacao\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['Lookup_fk_classificacao'][] = ''; 
   echo "  <option value=\"\">SELECIONE</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fk_classificacao) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fk_classificacao)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fk_classificacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fk_classificacao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['classificacao1']))
    {
        $this->nm_new_label['classificacao1'] = "Classifica��o 1";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $classificacao1 = $this->classificacao1;
   $sStyleHidden_classificacao1 = '';
   if (isset($this->nmgp_cmp_hidden['classificacao1']) && $this->nmgp_cmp_hidden['classificacao1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['classificacao1']);
       $sStyleHidden_classificacao1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_classificacao1 = 'display: none;';
   $sStyleReadInp_classificacao1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['classificacao1']) && $this->nmgp_cmp_readonly['classificacao1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['classificacao1']);
       $sStyleReadLab_classificacao1 = '';
       $sStyleReadInp_classificacao1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['classificacao1']) && $this->nmgp_cmp_hidden['classificacao1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="classificacao1" value="<?php echo $this->form_encode_input($classificacao1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_classificacao1_line" id="hidden_field_data_classificacao1" style="<?php echo $sStyleHidden_classificacao1; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_classificacao1_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_classificacao1_label"><span id="id_label_classificacao1"><?php echo $this->nm_new_label['classificacao1']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["classificacao1"]) &&  $this->nmgp_cmp_readonly["classificacao1"] == "on") { 

 ?>
<input type="hidden" name="classificacao1" value="<?php echo $this->form_encode_input($classificacao1) . "\">" . $classificacao1 . ""; ?>
<?php } else { ?>
<span id="id_read_on_classificacao1" class="sc-ui-readonly-classificacao1 css_classificacao1_line" style="<?php echo $sStyleReadLab_classificacao1; ?>"><?php echo $this->form_encode_input($this->classificacao1); ?></span><span id="id_read_off_classificacao1" style="white-space: nowrap;<?php echo $sStyleReadInp_classificacao1; ?>">
 <input class="sc-js-input scFormObjectOdd css_classificacao1_obj" style="" id="id_sc_field_classificacao1" type=text name="classificacao1" value="<?php echo $this->form_encode_input($classificacao1) ?>"
 size=50 maxlength=70 alt="{datatype: 'text', maxLength: 70, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_classificacao1_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_classificacao1_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['classificacao2']))
    {
        $this->nm_new_label['classificacao2'] = "Classifica��o 2";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $classificacao2 = $this->classificacao2;
   $sStyleHidden_classificacao2 = '';
   if (isset($this->nmgp_cmp_hidden['classificacao2']) && $this->nmgp_cmp_hidden['classificacao2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['classificacao2']);
       $sStyleHidden_classificacao2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_classificacao2 = 'display: none;';
   $sStyleReadInp_classificacao2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['classificacao2']) && $this->nmgp_cmp_readonly['classificacao2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['classificacao2']);
       $sStyleReadLab_classificacao2 = '';
       $sStyleReadInp_classificacao2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['classificacao2']) && $this->nmgp_cmp_hidden['classificacao2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="classificacao2" value="<?php echo $this->form_encode_input($classificacao2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_classificacao2_line" id="hidden_field_data_classificacao2" style="<?php echo $sStyleHidden_classificacao2; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_classificacao2_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_classificacao2_label"><span id="id_label_classificacao2"><?php echo $this->nm_new_label['classificacao2']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["classificacao2"]) &&  $this->nmgp_cmp_readonly["classificacao2"] == "on") { 

 ?>
<input type="hidden" name="classificacao2" value="<?php echo $this->form_encode_input($classificacao2) . "\">" . $classificacao2 . ""; ?>
<?php } else { ?>
<span id="id_read_on_classificacao2" class="sc-ui-readonly-classificacao2 css_classificacao2_line" style="<?php echo $sStyleReadLab_classificacao2; ?>"><?php echo $this->form_encode_input($this->classificacao2); ?></span><span id="id_read_off_classificacao2" style="white-space: nowrap;<?php echo $sStyleReadInp_classificacao2; ?>">
 <input class="sc-js-input scFormObjectOdd css_classificacao2_obj" style="" id="id_sc_field_classificacao2" type=text name="classificacao2" value="<?php echo $this->form_encode_input($classificacao2) ?>"
 size=50 maxlength=70 alt="{datatype: 'text', maxLength: 70, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_classificacao2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_classificacao2_text"></span></td></tr></table></td></tr></table> </TD>
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
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="25%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="2" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont" style="color: 003366">CONTATO</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nome_contato']))
    {
        $this->nm_new_label['nome_contato'] = "Nome Contato";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nome_contato = $this->nome_contato;
   $sStyleHidden_nome_contato = '';
   if (isset($this->nmgp_cmp_hidden['nome_contato']) && $this->nmgp_cmp_hidden['nome_contato'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nome_contato']);
       $sStyleHidden_nome_contato = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nome_contato = 'display: none;';
   $sStyleReadInp_nome_contato = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nome_contato']) && $this->nmgp_cmp_readonly['nome_contato'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nome_contato']);
       $sStyleReadLab_nome_contato = '';
       $sStyleReadInp_nome_contato = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nome_contato']) && $this->nmgp_cmp_hidden['nome_contato'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nome_contato" value="<?php echo $this->form_encode_input($nome_contato) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nome_contato_line" id="hidden_field_data_nome_contato" style="<?php echo $sStyleHidden_nome_contato; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nome_contato_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nome_contato_label"><span id="id_label_nome_contato"><?php echo $this->nm_new_label['nome_contato']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['nome_contato']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['nome_contato'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nome_contato"]) &&  $this->nmgp_cmp_readonly["nome_contato"] == "on") { 

 ?>
<input type="hidden" name="nome_contato" value="<?php echo $this->form_encode_input($nome_contato) . "\">" . $nome_contato . ""; ?>
<?php } else { ?>
<span id="id_read_on_nome_contato" class="sc-ui-readonly-nome_contato css_nome_contato_line" style="<?php echo $sStyleReadLab_nome_contato; ?>"><?php echo $this->form_encode_input($this->nome_contato); ?></span><span id="id_read_off_nome_contato" style="white-space: nowrap;<?php echo $sStyleReadInp_nome_contato; ?>">
 <input class="sc-js-input scFormObjectOdd css_nome_contato_obj" style="" id="id_sc_field_nome_contato" type=text name="nome_contato" value="<?php echo $this->form_encode_input($nome_contato) ?>"
 size=30 maxlength=70 alt="{datatype: 'text', maxLength: 70, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nome_contato_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nome_contato_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['telefone']))
    {
        $this->nm_new_label['telefone'] = "Telefone";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $telefone = $this->telefone;
   $sStyleHidden_telefone = '';
   if (isset($this->nmgp_cmp_hidden['telefone']) && $this->nmgp_cmp_hidden['telefone'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['telefone']);
       $sStyleHidden_telefone = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_telefone = 'display: none;';
   $sStyleReadInp_telefone = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['telefone']) && $this->nmgp_cmp_readonly['telefone'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['telefone']);
       $sStyleReadLab_telefone = '';
       $sStyleReadInp_telefone = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['telefone']) && $this->nmgp_cmp_hidden['telefone'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="telefone" value="<?php echo $this->form_encode_input($telefone) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_telefone_line" id="hidden_field_data_telefone" style="<?php echo $sStyleHidden_telefone; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_telefone_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_telefone_label"><span id="id_label_telefone"><?php echo $this->nm_new_label['telefone']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['telefone']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['telefone'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["telefone"]) &&  $this->nmgp_cmp_readonly["telefone"] == "on") { 

 ?>
<input type="hidden" name="telefone" value="<?php echo $this->form_encode_input($telefone) . "\">" . $telefone . ""; ?>
<?php } else { ?>
<span id="id_read_on_telefone" class="sc-ui-readonly-telefone css_telefone_line" style="<?php echo $sStyleReadLab_telefone; ?>"><?php echo $this->form_encode_input($this->telefone); ?></span><span id="id_read_off_telefone" style="white-space: nowrap;<?php echo $sStyleReadInp_telefone; ?>">
 <input class="sc-js-input scFormObjectOdd css_telefone_obj" style="" id="id_sc_field_telefone" type=text name="telefone" value="<?php echo $this->form_encode_input($telefone) ?>"
 size=20 maxlength=59 alt="{datatype: 'mask', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', maskList: '(99) 9999-9999', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_telefone_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_telefone_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_nome_contato_dumb = ('' == $sStyleHidden_nome_contato) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nome_contato_dumb" style="<?php echo $sStyleHidden_nome_contato_dumb; ?>"></TD>
<?php $sStyleHidden_telefone_dumb = ('' == $sStyleHidden_telefone) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_telefone_dumb" style="<?php echo $sStyleHidden_telefone_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="8" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont">HOR�RIO DE FUNCIONAMENTO</TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['seg_m_de']))
    {
        $this->nm_new_label['seg_m_de'] = "Segunda";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $seg_m_de = $this->seg_m_de;
   $sStyleHidden_seg_m_de = '';
   if (isset($this->nmgp_cmp_hidden['seg_m_de']) && $this->nmgp_cmp_hidden['seg_m_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['seg_m_de']);
       $sStyleHidden_seg_m_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_seg_m_de = 'display: none;';
   $sStyleReadInp_seg_m_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['seg_m_de']) && $this->nmgp_cmp_readonly['seg_m_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['seg_m_de']);
       $sStyleReadLab_seg_m_de = '';
       $sStyleReadInp_seg_m_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['seg_m_de']) && $this->nmgp_cmp_hidden['seg_m_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="seg_m_de" value="<?php echo $this->form_encode_input($seg_m_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_seg_m_de_label" id="hidden_field_label_seg_m_de" style="<?php echo $sStyleHidden_seg_m_de; ?>"><span id="id_label_seg_m_de"><?php echo $this->nm_new_label['seg_m_de']; ?></span></TD>
    <TD class="scFormDataOdd css_seg_m_de_line" id="hidden_field_data_seg_m_de" style="<?php echo $sStyleHidden_seg_m_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_seg_m_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["seg_m_de"]) &&  $this->nmgp_cmp_readonly["seg_m_de"] == "on") { 

 ?>
<input type="hidden" name="seg_m_de" value="<?php echo $this->form_encode_input($seg_m_de) . "\">" . $seg_m_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_seg_m_de" class="sc-ui-readonly-seg_m_de css_seg_m_de_line" style="<?php echo $sStyleReadLab_seg_m_de; ?>"><?php echo $this->form_encode_input($seg_m_de); ?></span><span id="id_read_off_seg_m_de" style="white-space: nowrap;<?php echo $sStyleReadInp_seg_m_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_seg_m_de_obj" style="" id="id_sc_field_seg_m_de" type=text name="seg_m_de" value="<?php echo $this->form_encode_input($seg_m_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['seg_m_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['seg_m_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['seg_m_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_seg_m_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_seg_m_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['seg_m_ate']))
    {
        $this->nm_new_label['seg_m_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $seg_m_ate = $this->seg_m_ate;
   $sStyleHidden_seg_m_ate = '';
   if (isset($this->nmgp_cmp_hidden['seg_m_ate']) && $this->nmgp_cmp_hidden['seg_m_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['seg_m_ate']);
       $sStyleHidden_seg_m_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_seg_m_ate = 'display: none;';
   $sStyleReadInp_seg_m_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['seg_m_ate']) && $this->nmgp_cmp_readonly['seg_m_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['seg_m_ate']);
       $sStyleReadLab_seg_m_ate = '';
       $sStyleReadInp_seg_m_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['seg_m_ate']) && $this->nmgp_cmp_hidden['seg_m_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="seg_m_ate" value="<?php echo $this->form_encode_input($seg_m_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_seg_m_ate_label" id="hidden_field_label_seg_m_ate" style="<?php echo $sStyleHidden_seg_m_ate; ?>"><span id="id_label_seg_m_ate"><?php echo $this->nm_new_label['seg_m_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_seg_m_ate_line" id="hidden_field_data_seg_m_ate" style="<?php echo $sStyleHidden_seg_m_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_seg_m_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["seg_m_ate"]) &&  $this->nmgp_cmp_readonly["seg_m_ate"] == "on") { 

 ?>
<input type="hidden" name="seg_m_ate" value="<?php echo $this->form_encode_input($seg_m_ate) . "\">" . $seg_m_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_seg_m_ate" class="sc-ui-readonly-seg_m_ate css_seg_m_ate_line" style="<?php echo $sStyleReadLab_seg_m_ate; ?>"><?php echo $this->form_encode_input($seg_m_ate); ?></span><span id="id_read_off_seg_m_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_seg_m_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_seg_m_ate_obj" style="" id="id_sc_field_seg_m_ate" type=text name="seg_m_ate" value="<?php echo $this->form_encode_input($seg_m_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['seg_m_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['seg_m_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['seg_m_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_seg_m_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_seg_m_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['seg_t_de']))
    {
        $this->nm_new_label['seg_t_de'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $seg_t_de = $this->seg_t_de;
   $sStyleHidden_seg_t_de = '';
   if (isset($this->nmgp_cmp_hidden['seg_t_de']) && $this->nmgp_cmp_hidden['seg_t_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['seg_t_de']);
       $sStyleHidden_seg_t_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_seg_t_de = 'display: none;';
   $sStyleReadInp_seg_t_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['seg_t_de']) && $this->nmgp_cmp_readonly['seg_t_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['seg_t_de']);
       $sStyleReadLab_seg_t_de = '';
       $sStyleReadInp_seg_t_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['seg_t_de']) && $this->nmgp_cmp_hidden['seg_t_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="seg_t_de" value="<?php echo $this->form_encode_input($seg_t_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_seg_t_de_label" id="hidden_field_label_seg_t_de" style="<?php echo $sStyleHidden_seg_t_de; ?>"><span id="id_label_seg_t_de"><?php echo $this->nm_new_label['seg_t_de']; ?></span></TD>
    <TD class="scFormDataOdd css_seg_t_de_line" id="hidden_field_data_seg_t_de" style="<?php echo $sStyleHidden_seg_t_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_seg_t_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["seg_t_de"]) &&  $this->nmgp_cmp_readonly["seg_t_de"] == "on") { 

 ?>
<input type="hidden" name="seg_t_de" value="<?php echo $this->form_encode_input($seg_t_de) . "\">" . $seg_t_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_seg_t_de" class="sc-ui-readonly-seg_t_de css_seg_t_de_line" style="<?php echo $sStyleReadLab_seg_t_de; ?>"><?php echo $this->form_encode_input($seg_t_de); ?></span><span id="id_read_off_seg_t_de" style="white-space: nowrap;<?php echo $sStyleReadInp_seg_t_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_seg_t_de_obj" style="" id="id_sc_field_seg_t_de" type=text name="seg_t_de" value="<?php echo $this->form_encode_input($seg_t_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['seg_t_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['seg_t_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['seg_t_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_seg_t_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_seg_t_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['seg_t_ate']))
    {
        $this->nm_new_label['seg_t_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $seg_t_ate = $this->seg_t_ate;
   $sStyleHidden_seg_t_ate = '';
   if (isset($this->nmgp_cmp_hidden['seg_t_ate']) && $this->nmgp_cmp_hidden['seg_t_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['seg_t_ate']);
       $sStyleHidden_seg_t_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_seg_t_ate = 'display: none;';
   $sStyleReadInp_seg_t_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['seg_t_ate']) && $this->nmgp_cmp_readonly['seg_t_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['seg_t_ate']);
       $sStyleReadLab_seg_t_ate = '';
       $sStyleReadInp_seg_t_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['seg_t_ate']) && $this->nmgp_cmp_hidden['seg_t_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="seg_t_ate" value="<?php echo $this->form_encode_input($seg_t_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_seg_t_ate_label" id="hidden_field_label_seg_t_ate" style="<?php echo $sStyleHidden_seg_t_ate; ?>"><span id="id_label_seg_t_ate"><?php echo $this->nm_new_label['seg_t_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_seg_t_ate_line" id="hidden_field_data_seg_t_ate" style="<?php echo $sStyleHidden_seg_t_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_seg_t_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["seg_t_ate"]) &&  $this->nmgp_cmp_readonly["seg_t_ate"] == "on") { 

 ?>
<input type="hidden" name="seg_t_ate" value="<?php echo $this->form_encode_input($seg_t_ate) . "\">" . $seg_t_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_seg_t_ate" class="sc-ui-readonly-seg_t_ate css_seg_t_ate_line" style="<?php echo $sStyleReadLab_seg_t_ate; ?>"><?php echo $this->form_encode_input($seg_t_ate); ?></span><span id="id_read_off_seg_t_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_seg_t_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_seg_t_ate_obj" style="" id="id_sc_field_seg_t_ate" type=text name="seg_t_ate" value="<?php echo $this->form_encode_input($seg_t_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['seg_t_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['seg_t_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['seg_t_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_seg_t_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_seg_t_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ter_m_de']))
    {
        $this->nm_new_label['ter_m_de'] = "Ter�a";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ter_m_de = $this->ter_m_de;
   $sStyleHidden_ter_m_de = '';
   if (isset($this->nmgp_cmp_hidden['ter_m_de']) && $this->nmgp_cmp_hidden['ter_m_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ter_m_de']);
       $sStyleHidden_ter_m_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ter_m_de = 'display: none;';
   $sStyleReadInp_ter_m_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ter_m_de']) && $this->nmgp_cmp_readonly['ter_m_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ter_m_de']);
       $sStyleReadLab_ter_m_de = '';
       $sStyleReadInp_ter_m_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ter_m_de']) && $this->nmgp_cmp_hidden['ter_m_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ter_m_de" value="<?php echo $this->form_encode_input($ter_m_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ter_m_de_label" id="hidden_field_label_ter_m_de" style="<?php echo $sStyleHidden_ter_m_de; ?>"><span id="id_label_ter_m_de"><?php echo $this->nm_new_label['ter_m_de']; ?></span></TD>
    <TD class="scFormDataOdd css_ter_m_de_line" id="hidden_field_data_ter_m_de" style="<?php echo $sStyleHidden_ter_m_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ter_m_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ter_m_de"]) &&  $this->nmgp_cmp_readonly["ter_m_de"] == "on") { 

 ?>
<input type="hidden" name="ter_m_de" value="<?php echo $this->form_encode_input($ter_m_de) . "\">" . $ter_m_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_ter_m_de" class="sc-ui-readonly-ter_m_de css_ter_m_de_line" style="<?php echo $sStyleReadLab_ter_m_de; ?>"><?php echo $this->form_encode_input($ter_m_de); ?></span><span id="id_read_off_ter_m_de" style="white-space: nowrap;<?php echo $sStyleReadInp_ter_m_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_ter_m_de_obj" style="" id="id_sc_field_ter_m_de" type=text name="ter_m_de" value="<?php echo $this->form_encode_input($ter_m_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['ter_m_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['ter_m_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['ter_m_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ter_m_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ter_m_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ter_m_ate']))
    {
        $this->nm_new_label['ter_m_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ter_m_ate = $this->ter_m_ate;
   $sStyleHidden_ter_m_ate = '';
   if (isset($this->nmgp_cmp_hidden['ter_m_ate']) && $this->nmgp_cmp_hidden['ter_m_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ter_m_ate']);
       $sStyleHidden_ter_m_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ter_m_ate = 'display: none;';
   $sStyleReadInp_ter_m_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ter_m_ate']) && $this->nmgp_cmp_readonly['ter_m_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ter_m_ate']);
       $sStyleReadLab_ter_m_ate = '';
       $sStyleReadInp_ter_m_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ter_m_ate']) && $this->nmgp_cmp_hidden['ter_m_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ter_m_ate" value="<?php echo $this->form_encode_input($ter_m_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ter_m_ate_label" id="hidden_field_label_ter_m_ate" style="<?php echo $sStyleHidden_ter_m_ate; ?>"><span id="id_label_ter_m_ate"><?php echo $this->nm_new_label['ter_m_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_ter_m_ate_line" id="hidden_field_data_ter_m_ate" style="<?php echo $sStyleHidden_ter_m_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ter_m_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ter_m_ate"]) &&  $this->nmgp_cmp_readonly["ter_m_ate"] == "on") { 

 ?>
<input type="hidden" name="ter_m_ate" value="<?php echo $this->form_encode_input($ter_m_ate) . "\">" . $ter_m_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_ter_m_ate" class="sc-ui-readonly-ter_m_ate css_ter_m_ate_line" style="<?php echo $sStyleReadLab_ter_m_ate; ?>"><?php echo $this->form_encode_input($ter_m_ate); ?></span><span id="id_read_off_ter_m_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_ter_m_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_ter_m_ate_obj" style="" id="id_sc_field_ter_m_ate" type=text name="ter_m_ate" value="<?php echo $this->form_encode_input($ter_m_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['ter_m_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['ter_m_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['ter_m_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ter_m_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ter_m_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ter_t_de']))
    {
        $this->nm_new_label['ter_t_de'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ter_t_de = $this->ter_t_de;
   $sStyleHidden_ter_t_de = '';
   if (isset($this->nmgp_cmp_hidden['ter_t_de']) && $this->nmgp_cmp_hidden['ter_t_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ter_t_de']);
       $sStyleHidden_ter_t_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ter_t_de = 'display: none;';
   $sStyleReadInp_ter_t_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ter_t_de']) && $this->nmgp_cmp_readonly['ter_t_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ter_t_de']);
       $sStyleReadLab_ter_t_de = '';
       $sStyleReadInp_ter_t_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ter_t_de']) && $this->nmgp_cmp_hidden['ter_t_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ter_t_de" value="<?php echo $this->form_encode_input($ter_t_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ter_t_de_label" id="hidden_field_label_ter_t_de" style="<?php echo $sStyleHidden_ter_t_de; ?>"><span id="id_label_ter_t_de"><?php echo $this->nm_new_label['ter_t_de']; ?></span></TD>
    <TD class="scFormDataOdd css_ter_t_de_line" id="hidden_field_data_ter_t_de" style="<?php echo $sStyleHidden_ter_t_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ter_t_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ter_t_de"]) &&  $this->nmgp_cmp_readonly["ter_t_de"] == "on") { 

 ?>
<input type="hidden" name="ter_t_de" value="<?php echo $this->form_encode_input($ter_t_de) . "\">" . $ter_t_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_ter_t_de" class="sc-ui-readonly-ter_t_de css_ter_t_de_line" style="<?php echo $sStyleReadLab_ter_t_de; ?>"><?php echo $this->form_encode_input($ter_t_de); ?></span><span id="id_read_off_ter_t_de" style="white-space: nowrap;<?php echo $sStyleReadInp_ter_t_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_ter_t_de_obj" style="" id="id_sc_field_ter_t_de" type=text name="ter_t_de" value="<?php echo $this->form_encode_input($ter_t_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['ter_t_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['ter_t_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['ter_t_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ter_t_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ter_t_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ter_t_ate']))
    {
        $this->nm_new_label['ter_t_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ter_t_ate = $this->ter_t_ate;
   $sStyleHidden_ter_t_ate = '';
   if (isset($this->nmgp_cmp_hidden['ter_t_ate']) && $this->nmgp_cmp_hidden['ter_t_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ter_t_ate']);
       $sStyleHidden_ter_t_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ter_t_ate = 'display: none;';
   $sStyleReadInp_ter_t_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ter_t_ate']) && $this->nmgp_cmp_readonly['ter_t_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ter_t_ate']);
       $sStyleReadLab_ter_t_ate = '';
       $sStyleReadInp_ter_t_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ter_t_ate']) && $this->nmgp_cmp_hidden['ter_t_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ter_t_ate" value="<?php echo $this->form_encode_input($ter_t_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ter_t_ate_label" id="hidden_field_label_ter_t_ate" style="<?php echo $sStyleHidden_ter_t_ate; ?>"><span id="id_label_ter_t_ate"><?php echo $this->nm_new_label['ter_t_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_ter_t_ate_line" id="hidden_field_data_ter_t_ate" style="<?php echo $sStyleHidden_ter_t_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ter_t_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ter_t_ate"]) &&  $this->nmgp_cmp_readonly["ter_t_ate"] == "on") { 

 ?>
<input type="hidden" name="ter_t_ate" value="<?php echo $this->form_encode_input($ter_t_ate) . "\">" . $ter_t_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_ter_t_ate" class="sc-ui-readonly-ter_t_ate css_ter_t_ate_line" style="<?php echo $sStyleReadLab_ter_t_ate; ?>"><?php echo $this->form_encode_input($ter_t_ate); ?></span><span id="id_read_off_ter_t_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_ter_t_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_ter_t_ate_obj" style="" id="id_sc_field_ter_t_ate" type=text name="ter_t_ate" value="<?php echo $this->form_encode_input($ter_t_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['ter_t_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['ter_t_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['ter_t_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ter_t_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ter_t_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['qua_m_de']))
    {
        $this->nm_new_label['qua_m_de'] = "Quarta";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qua_m_de = $this->qua_m_de;
   $sStyleHidden_qua_m_de = '';
   if (isset($this->nmgp_cmp_hidden['qua_m_de']) && $this->nmgp_cmp_hidden['qua_m_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qua_m_de']);
       $sStyleHidden_qua_m_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qua_m_de = 'display: none;';
   $sStyleReadInp_qua_m_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qua_m_de']) && $this->nmgp_cmp_readonly['qua_m_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qua_m_de']);
       $sStyleReadLab_qua_m_de = '';
       $sStyleReadInp_qua_m_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qua_m_de']) && $this->nmgp_cmp_hidden['qua_m_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qua_m_de" value="<?php echo $this->form_encode_input($qua_m_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_qua_m_de_label" id="hidden_field_label_qua_m_de" style="<?php echo $sStyleHidden_qua_m_de; ?>"><span id="id_label_qua_m_de"><?php echo $this->nm_new_label['qua_m_de']; ?></span></TD>
    <TD class="scFormDataOdd css_qua_m_de_line" id="hidden_field_data_qua_m_de" style="<?php echo $sStyleHidden_qua_m_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_qua_m_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["qua_m_de"]) &&  $this->nmgp_cmp_readonly["qua_m_de"] == "on") { 

 ?>
<input type="hidden" name="qua_m_de" value="<?php echo $this->form_encode_input($qua_m_de) . "\">" . $qua_m_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_qua_m_de" class="sc-ui-readonly-qua_m_de css_qua_m_de_line" style="<?php echo $sStyleReadLab_qua_m_de; ?>"><?php echo $this->form_encode_input($qua_m_de); ?></span><span id="id_read_off_qua_m_de" style="white-space: nowrap;<?php echo $sStyleReadInp_qua_m_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_qua_m_de_obj" style="" id="id_sc_field_qua_m_de" type=text name="qua_m_de" value="<?php echo $this->form_encode_input($qua_m_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['qua_m_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['qua_m_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['qua_m_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qua_m_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qua_m_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['qua_m_ate']))
    {
        $this->nm_new_label['qua_m_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qua_m_ate = $this->qua_m_ate;
   $sStyleHidden_qua_m_ate = '';
   if (isset($this->nmgp_cmp_hidden['qua_m_ate']) && $this->nmgp_cmp_hidden['qua_m_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qua_m_ate']);
       $sStyleHidden_qua_m_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qua_m_ate = 'display: none;';
   $sStyleReadInp_qua_m_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qua_m_ate']) && $this->nmgp_cmp_readonly['qua_m_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qua_m_ate']);
       $sStyleReadLab_qua_m_ate = '';
       $sStyleReadInp_qua_m_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qua_m_ate']) && $this->nmgp_cmp_hidden['qua_m_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qua_m_ate" value="<?php echo $this->form_encode_input($qua_m_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_qua_m_ate_label" id="hidden_field_label_qua_m_ate" style="<?php echo $sStyleHidden_qua_m_ate; ?>"><span id="id_label_qua_m_ate"><?php echo $this->nm_new_label['qua_m_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_qua_m_ate_line" id="hidden_field_data_qua_m_ate" style="<?php echo $sStyleHidden_qua_m_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_qua_m_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["qua_m_ate"]) &&  $this->nmgp_cmp_readonly["qua_m_ate"] == "on") { 

 ?>
<input type="hidden" name="qua_m_ate" value="<?php echo $this->form_encode_input($qua_m_ate) . "\">" . $qua_m_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_qua_m_ate" class="sc-ui-readonly-qua_m_ate css_qua_m_ate_line" style="<?php echo $sStyleReadLab_qua_m_ate; ?>"><?php echo $this->form_encode_input($qua_m_ate); ?></span><span id="id_read_off_qua_m_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_qua_m_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_qua_m_ate_obj" style="" id="id_sc_field_qua_m_ate" type=text name="qua_m_ate" value="<?php echo $this->form_encode_input($qua_m_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['qua_m_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['qua_m_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['qua_m_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qua_m_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qua_m_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['qua_t_de']))
    {
        $this->nm_new_label['qua_t_de'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qua_t_de = $this->qua_t_de;
   $sStyleHidden_qua_t_de = '';
   if (isset($this->nmgp_cmp_hidden['qua_t_de']) && $this->nmgp_cmp_hidden['qua_t_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qua_t_de']);
       $sStyleHidden_qua_t_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qua_t_de = 'display: none;';
   $sStyleReadInp_qua_t_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qua_t_de']) && $this->nmgp_cmp_readonly['qua_t_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qua_t_de']);
       $sStyleReadLab_qua_t_de = '';
       $sStyleReadInp_qua_t_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qua_t_de']) && $this->nmgp_cmp_hidden['qua_t_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qua_t_de" value="<?php echo $this->form_encode_input($qua_t_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_qua_t_de_label" id="hidden_field_label_qua_t_de" style="<?php echo $sStyleHidden_qua_t_de; ?>"><span id="id_label_qua_t_de"><?php echo $this->nm_new_label['qua_t_de']; ?></span></TD>
    <TD class="scFormDataOdd css_qua_t_de_line" id="hidden_field_data_qua_t_de" style="<?php echo $sStyleHidden_qua_t_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_qua_t_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["qua_t_de"]) &&  $this->nmgp_cmp_readonly["qua_t_de"] == "on") { 

 ?>
<input type="hidden" name="qua_t_de" value="<?php echo $this->form_encode_input($qua_t_de) . "\">" . $qua_t_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_qua_t_de" class="sc-ui-readonly-qua_t_de css_qua_t_de_line" style="<?php echo $sStyleReadLab_qua_t_de; ?>"><?php echo $this->form_encode_input($qua_t_de); ?></span><span id="id_read_off_qua_t_de" style="white-space: nowrap;<?php echo $sStyleReadInp_qua_t_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_qua_t_de_obj" style="" id="id_sc_field_qua_t_de" type=text name="qua_t_de" value="<?php echo $this->form_encode_input($qua_t_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['qua_t_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['qua_t_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['qua_t_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qua_t_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qua_t_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['qua_t_ate']))
    {
        $this->nm_new_label['qua_t_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qua_t_ate = $this->qua_t_ate;
   $sStyleHidden_qua_t_ate = '';
   if (isset($this->nmgp_cmp_hidden['qua_t_ate']) && $this->nmgp_cmp_hidden['qua_t_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qua_t_ate']);
       $sStyleHidden_qua_t_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qua_t_ate = 'display: none;';
   $sStyleReadInp_qua_t_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qua_t_ate']) && $this->nmgp_cmp_readonly['qua_t_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qua_t_ate']);
       $sStyleReadLab_qua_t_ate = '';
       $sStyleReadInp_qua_t_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qua_t_ate']) && $this->nmgp_cmp_hidden['qua_t_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qua_t_ate" value="<?php echo $this->form_encode_input($qua_t_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_qua_t_ate_label" id="hidden_field_label_qua_t_ate" style="<?php echo $sStyleHidden_qua_t_ate; ?>"><span id="id_label_qua_t_ate"><?php echo $this->nm_new_label['qua_t_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_qua_t_ate_line" id="hidden_field_data_qua_t_ate" style="<?php echo $sStyleHidden_qua_t_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_qua_t_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["qua_t_ate"]) &&  $this->nmgp_cmp_readonly["qua_t_ate"] == "on") { 

 ?>
<input type="hidden" name="qua_t_ate" value="<?php echo $this->form_encode_input($qua_t_ate) . "\">" . $qua_t_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_qua_t_ate" class="sc-ui-readonly-qua_t_ate css_qua_t_ate_line" style="<?php echo $sStyleReadLab_qua_t_ate; ?>"><?php echo $this->form_encode_input($qua_t_ate); ?></span><span id="id_read_off_qua_t_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_qua_t_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_qua_t_ate_obj" style="" id="id_sc_field_qua_t_ate" type=text name="qua_t_ate" value="<?php echo $this->form_encode_input($qua_t_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['qua_t_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['qua_t_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['qua_t_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qua_t_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qua_t_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['qui_m_de']))
    {
        $this->nm_new_label['qui_m_de'] = "Quinta";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qui_m_de = $this->qui_m_de;
   $sStyleHidden_qui_m_de = '';
   if (isset($this->nmgp_cmp_hidden['qui_m_de']) && $this->nmgp_cmp_hidden['qui_m_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qui_m_de']);
       $sStyleHidden_qui_m_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qui_m_de = 'display: none;';
   $sStyleReadInp_qui_m_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qui_m_de']) && $this->nmgp_cmp_readonly['qui_m_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qui_m_de']);
       $sStyleReadLab_qui_m_de = '';
       $sStyleReadInp_qui_m_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qui_m_de']) && $this->nmgp_cmp_hidden['qui_m_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qui_m_de" value="<?php echo $this->form_encode_input($qui_m_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_qui_m_de_label" id="hidden_field_label_qui_m_de" style="<?php echo $sStyleHidden_qui_m_de; ?>"><span id="id_label_qui_m_de"><?php echo $this->nm_new_label['qui_m_de']; ?></span></TD>
    <TD class="scFormDataOdd css_qui_m_de_line" id="hidden_field_data_qui_m_de" style="<?php echo $sStyleHidden_qui_m_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_qui_m_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["qui_m_de"]) &&  $this->nmgp_cmp_readonly["qui_m_de"] == "on") { 

 ?>
<input type="hidden" name="qui_m_de" value="<?php echo $this->form_encode_input($qui_m_de) . "\">" . $qui_m_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_qui_m_de" class="sc-ui-readonly-qui_m_de css_qui_m_de_line" style="<?php echo $sStyleReadLab_qui_m_de; ?>"><?php echo $this->form_encode_input($qui_m_de); ?></span><span id="id_read_off_qui_m_de" style="white-space: nowrap;<?php echo $sStyleReadInp_qui_m_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_qui_m_de_obj" style="" id="id_sc_field_qui_m_de" type=text name="qui_m_de" value="<?php echo $this->form_encode_input($qui_m_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['qui_m_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['qui_m_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['qui_m_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qui_m_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qui_m_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['qui_m_ate']))
    {
        $this->nm_new_label['qui_m_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qui_m_ate = $this->qui_m_ate;
   $sStyleHidden_qui_m_ate = '';
   if (isset($this->nmgp_cmp_hidden['qui_m_ate']) && $this->nmgp_cmp_hidden['qui_m_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qui_m_ate']);
       $sStyleHidden_qui_m_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qui_m_ate = 'display: none;';
   $sStyleReadInp_qui_m_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qui_m_ate']) && $this->nmgp_cmp_readonly['qui_m_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qui_m_ate']);
       $sStyleReadLab_qui_m_ate = '';
       $sStyleReadInp_qui_m_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qui_m_ate']) && $this->nmgp_cmp_hidden['qui_m_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qui_m_ate" value="<?php echo $this->form_encode_input($qui_m_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_qui_m_ate_label" id="hidden_field_label_qui_m_ate" style="<?php echo $sStyleHidden_qui_m_ate; ?>"><span id="id_label_qui_m_ate"><?php echo $this->nm_new_label['qui_m_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_qui_m_ate_line" id="hidden_field_data_qui_m_ate" style="<?php echo $sStyleHidden_qui_m_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_qui_m_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["qui_m_ate"]) &&  $this->nmgp_cmp_readonly["qui_m_ate"] == "on") { 

 ?>
<input type="hidden" name="qui_m_ate" value="<?php echo $this->form_encode_input($qui_m_ate) . "\">" . $qui_m_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_qui_m_ate" class="sc-ui-readonly-qui_m_ate css_qui_m_ate_line" style="<?php echo $sStyleReadLab_qui_m_ate; ?>"><?php echo $this->form_encode_input($qui_m_ate); ?></span><span id="id_read_off_qui_m_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_qui_m_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_qui_m_ate_obj" style="" id="id_sc_field_qui_m_ate" type=text name="qui_m_ate" value="<?php echo $this->form_encode_input($qui_m_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['qui_m_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['qui_m_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['qui_m_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qui_m_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qui_m_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['qui_t_de']))
    {
        $this->nm_new_label['qui_t_de'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qui_t_de = $this->qui_t_de;
   $sStyleHidden_qui_t_de = '';
   if (isset($this->nmgp_cmp_hidden['qui_t_de']) && $this->nmgp_cmp_hidden['qui_t_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qui_t_de']);
       $sStyleHidden_qui_t_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qui_t_de = 'display: none;';
   $sStyleReadInp_qui_t_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qui_t_de']) && $this->nmgp_cmp_readonly['qui_t_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qui_t_de']);
       $sStyleReadLab_qui_t_de = '';
       $sStyleReadInp_qui_t_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qui_t_de']) && $this->nmgp_cmp_hidden['qui_t_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qui_t_de" value="<?php echo $this->form_encode_input($qui_t_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_qui_t_de_label" id="hidden_field_label_qui_t_de" style="<?php echo $sStyleHidden_qui_t_de; ?>"><span id="id_label_qui_t_de"><?php echo $this->nm_new_label['qui_t_de']; ?></span></TD>
    <TD class="scFormDataOdd css_qui_t_de_line" id="hidden_field_data_qui_t_de" style="<?php echo $sStyleHidden_qui_t_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_qui_t_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["qui_t_de"]) &&  $this->nmgp_cmp_readonly["qui_t_de"] == "on") { 

 ?>
<input type="hidden" name="qui_t_de" value="<?php echo $this->form_encode_input($qui_t_de) . "\">" . $qui_t_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_qui_t_de" class="sc-ui-readonly-qui_t_de css_qui_t_de_line" style="<?php echo $sStyleReadLab_qui_t_de; ?>"><?php echo $this->form_encode_input($qui_t_de); ?></span><span id="id_read_off_qui_t_de" style="white-space: nowrap;<?php echo $sStyleReadInp_qui_t_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_qui_t_de_obj" style="" id="id_sc_field_qui_t_de" type=text name="qui_t_de" value="<?php echo $this->form_encode_input($qui_t_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['qui_t_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['qui_t_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['qui_t_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qui_t_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qui_t_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['qui_t_ate']))
    {
        $this->nm_new_label['qui_t_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qui_t_ate = $this->qui_t_ate;
   $sStyleHidden_qui_t_ate = '';
   if (isset($this->nmgp_cmp_hidden['qui_t_ate']) && $this->nmgp_cmp_hidden['qui_t_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qui_t_ate']);
       $sStyleHidden_qui_t_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qui_t_ate = 'display: none;';
   $sStyleReadInp_qui_t_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qui_t_ate']) && $this->nmgp_cmp_readonly['qui_t_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qui_t_ate']);
       $sStyleReadLab_qui_t_ate = '';
       $sStyleReadInp_qui_t_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qui_t_ate']) && $this->nmgp_cmp_hidden['qui_t_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qui_t_ate" value="<?php echo $this->form_encode_input($qui_t_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_qui_t_ate_label" id="hidden_field_label_qui_t_ate" style="<?php echo $sStyleHidden_qui_t_ate; ?>"><span id="id_label_qui_t_ate"><?php echo $this->nm_new_label['qui_t_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_qui_t_ate_line" id="hidden_field_data_qui_t_ate" style="<?php echo $sStyleHidden_qui_t_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_qui_t_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["qui_t_ate"]) &&  $this->nmgp_cmp_readonly["qui_t_ate"] == "on") { 

 ?>
<input type="hidden" name="qui_t_ate" value="<?php echo $this->form_encode_input($qui_t_ate) . "\">" . $qui_t_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_qui_t_ate" class="sc-ui-readonly-qui_t_ate css_qui_t_ate_line" style="<?php echo $sStyleReadLab_qui_t_ate; ?>"><?php echo $this->form_encode_input($qui_t_ate); ?></span><span id="id_read_off_qui_t_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_qui_t_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_qui_t_ate_obj" style="" id="id_sc_field_qui_t_ate" type=text name="qui_t_ate" value="<?php echo $this->form_encode_input($qui_t_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['qui_t_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['qui_t_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['qui_t_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qui_t_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qui_t_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sex_m_de']))
    {
        $this->nm_new_label['sex_m_de'] = "Sexta";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sex_m_de = $this->sex_m_de;
   $sStyleHidden_sex_m_de = '';
   if (isset($this->nmgp_cmp_hidden['sex_m_de']) && $this->nmgp_cmp_hidden['sex_m_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sex_m_de']);
       $sStyleHidden_sex_m_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sex_m_de = 'display: none;';
   $sStyleReadInp_sex_m_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sex_m_de']) && $this->nmgp_cmp_readonly['sex_m_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sex_m_de']);
       $sStyleReadLab_sex_m_de = '';
       $sStyleReadInp_sex_m_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sex_m_de']) && $this->nmgp_cmp_hidden['sex_m_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sex_m_de" value="<?php echo $this->form_encode_input($sex_m_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sex_m_de_label" id="hidden_field_label_sex_m_de" style="<?php echo $sStyleHidden_sex_m_de; ?>"><span id="id_label_sex_m_de"><?php echo $this->nm_new_label['sex_m_de']; ?></span></TD>
    <TD class="scFormDataOdd css_sex_m_de_line" id="hidden_field_data_sex_m_de" style="<?php echo $sStyleHidden_sex_m_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sex_m_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sex_m_de"]) &&  $this->nmgp_cmp_readonly["sex_m_de"] == "on") { 

 ?>
<input type="hidden" name="sex_m_de" value="<?php echo $this->form_encode_input($sex_m_de) . "\">" . $sex_m_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_sex_m_de" class="sc-ui-readonly-sex_m_de css_sex_m_de_line" style="<?php echo $sStyleReadLab_sex_m_de; ?>"><?php echo $this->form_encode_input($sex_m_de); ?></span><span id="id_read_off_sex_m_de" style="white-space: nowrap;<?php echo $sStyleReadInp_sex_m_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_sex_m_de_obj" style="" id="id_sc_field_sex_m_de" type=text name="sex_m_de" value="<?php echo $this->form_encode_input($sex_m_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['sex_m_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['sex_m_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['sex_m_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sex_m_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sex_m_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['sex_m_ate']))
    {
        $this->nm_new_label['sex_m_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sex_m_ate = $this->sex_m_ate;
   $sStyleHidden_sex_m_ate = '';
   if (isset($this->nmgp_cmp_hidden['sex_m_ate']) && $this->nmgp_cmp_hidden['sex_m_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sex_m_ate']);
       $sStyleHidden_sex_m_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sex_m_ate = 'display: none;';
   $sStyleReadInp_sex_m_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sex_m_ate']) && $this->nmgp_cmp_readonly['sex_m_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sex_m_ate']);
       $sStyleReadLab_sex_m_ate = '';
       $sStyleReadInp_sex_m_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sex_m_ate']) && $this->nmgp_cmp_hidden['sex_m_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sex_m_ate" value="<?php echo $this->form_encode_input($sex_m_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sex_m_ate_label" id="hidden_field_label_sex_m_ate" style="<?php echo $sStyleHidden_sex_m_ate; ?>"><span id="id_label_sex_m_ate"><?php echo $this->nm_new_label['sex_m_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_sex_m_ate_line" id="hidden_field_data_sex_m_ate" style="<?php echo $sStyleHidden_sex_m_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sex_m_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sex_m_ate"]) &&  $this->nmgp_cmp_readonly["sex_m_ate"] == "on") { 

 ?>
<input type="hidden" name="sex_m_ate" value="<?php echo $this->form_encode_input($sex_m_ate) . "\">" . $sex_m_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_sex_m_ate" class="sc-ui-readonly-sex_m_ate css_sex_m_ate_line" style="<?php echo $sStyleReadLab_sex_m_ate; ?>"><?php echo $this->form_encode_input($sex_m_ate); ?></span><span id="id_read_off_sex_m_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_sex_m_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_sex_m_ate_obj" style="" id="id_sc_field_sex_m_ate" type=text name="sex_m_ate" value="<?php echo $this->form_encode_input($sex_m_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['sex_m_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['sex_m_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['sex_m_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sex_m_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sex_m_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['sex_t_de']))
    {
        $this->nm_new_label['sex_t_de'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sex_t_de = $this->sex_t_de;
   $sStyleHidden_sex_t_de = '';
   if (isset($this->nmgp_cmp_hidden['sex_t_de']) && $this->nmgp_cmp_hidden['sex_t_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sex_t_de']);
       $sStyleHidden_sex_t_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sex_t_de = 'display: none;';
   $sStyleReadInp_sex_t_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sex_t_de']) && $this->nmgp_cmp_readonly['sex_t_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sex_t_de']);
       $sStyleReadLab_sex_t_de = '';
       $sStyleReadInp_sex_t_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sex_t_de']) && $this->nmgp_cmp_hidden['sex_t_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sex_t_de" value="<?php echo $this->form_encode_input($sex_t_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sex_t_de_label" id="hidden_field_label_sex_t_de" style="<?php echo $sStyleHidden_sex_t_de; ?>"><span id="id_label_sex_t_de"><?php echo $this->nm_new_label['sex_t_de']; ?></span></TD>
    <TD class="scFormDataOdd css_sex_t_de_line" id="hidden_field_data_sex_t_de" style="<?php echo $sStyleHidden_sex_t_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sex_t_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sex_t_de"]) &&  $this->nmgp_cmp_readonly["sex_t_de"] == "on") { 

 ?>
<input type="hidden" name="sex_t_de" value="<?php echo $this->form_encode_input($sex_t_de) . "\">" . $sex_t_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_sex_t_de" class="sc-ui-readonly-sex_t_de css_sex_t_de_line" style="<?php echo $sStyleReadLab_sex_t_de; ?>"><?php echo $this->form_encode_input($sex_t_de); ?></span><span id="id_read_off_sex_t_de" style="white-space: nowrap;<?php echo $sStyleReadInp_sex_t_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_sex_t_de_obj" style="" id="id_sc_field_sex_t_de" type=text name="sex_t_de" value="<?php echo $this->form_encode_input($sex_t_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['sex_t_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['sex_t_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['sex_t_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sex_t_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sex_t_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['sex_t_ate']))
    {
        $this->nm_new_label['sex_t_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sex_t_ate = $this->sex_t_ate;
   $sStyleHidden_sex_t_ate = '';
   if (isset($this->nmgp_cmp_hidden['sex_t_ate']) && $this->nmgp_cmp_hidden['sex_t_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sex_t_ate']);
       $sStyleHidden_sex_t_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sex_t_ate = 'display: none;';
   $sStyleReadInp_sex_t_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sex_t_ate']) && $this->nmgp_cmp_readonly['sex_t_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sex_t_ate']);
       $sStyleReadLab_sex_t_ate = '';
       $sStyleReadInp_sex_t_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sex_t_ate']) && $this->nmgp_cmp_hidden['sex_t_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sex_t_ate" value="<?php echo $this->form_encode_input($sex_t_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sex_t_ate_label" id="hidden_field_label_sex_t_ate" style="<?php echo $sStyleHidden_sex_t_ate; ?>"><span id="id_label_sex_t_ate"><?php echo $this->nm_new_label['sex_t_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_sex_t_ate_line" id="hidden_field_data_sex_t_ate" style="<?php echo $sStyleHidden_sex_t_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sex_t_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sex_t_ate"]) &&  $this->nmgp_cmp_readonly["sex_t_ate"] == "on") { 

 ?>
<input type="hidden" name="sex_t_ate" value="<?php echo $this->form_encode_input($sex_t_ate) . "\">" . $sex_t_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_sex_t_ate" class="sc-ui-readonly-sex_t_ate css_sex_t_ate_line" style="<?php echo $sStyleReadLab_sex_t_ate; ?>"><?php echo $this->form_encode_input($sex_t_ate); ?></span><span id="id_read_off_sex_t_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_sex_t_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_sex_t_ate_obj" style="" id="id_sc_field_sex_t_ate" type=text name="sex_t_ate" value="<?php echo $this->form_encode_input($sex_t_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['sex_t_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['sex_t_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['sex_t_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sex_t_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sex_t_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sab_m_de']))
    {
        $this->nm_new_label['sab_m_de'] = "S�bado";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sab_m_de = $this->sab_m_de;
   $sStyleHidden_sab_m_de = '';
   if (isset($this->nmgp_cmp_hidden['sab_m_de']) && $this->nmgp_cmp_hidden['sab_m_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sab_m_de']);
       $sStyleHidden_sab_m_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sab_m_de = 'display: none;';
   $sStyleReadInp_sab_m_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sab_m_de']) && $this->nmgp_cmp_readonly['sab_m_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sab_m_de']);
       $sStyleReadLab_sab_m_de = '';
       $sStyleReadInp_sab_m_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sab_m_de']) && $this->nmgp_cmp_hidden['sab_m_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sab_m_de" value="<?php echo $this->form_encode_input($sab_m_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sab_m_de_label" id="hidden_field_label_sab_m_de" style="<?php echo $sStyleHidden_sab_m_de; ?>"><span id="id_label_sab_m_de"><?php echo $this->nm_new_label['sab_m_de']; ?></span></TD>
    <TD class="scFormDataOdd css_sab_m_de_line" id="hidden_field_data_sab_m_de" style="<?php echo $sStyleHidden_sab_m_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sab_m_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sab_m_de"]) &&  $this->nmgp_cmp_readonly["sab_m_de"] == "on") { 

 ?>
<input type="hidden" name="sab_m_de" value="<?php echo $this->form_encode_input($sab_m_de) . "\">" . $sab_m_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_sab_m_de" class="sc-ui-readonly-sab_m_de css_sab_m_de_line" style="<?php echo $sStyleReadLab_sab_m_de; ?>"><?php echo $this->form_encode_input($sab_m_de); ?></span><span id="id_read_off_sab_m_de" style="white-space: nowrap;<?php echo $sStyleReadInp_sab_m_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_sab_m_de_obj" style="" id="id_sc_field_sab_m_de" type=text name="sab_m_de" value="<?php echo $this->form_encode_input($sab_m_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['sab_m_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['sab_m_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['sab_m_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sab_m_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sab_m_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['sab_m_ate']))
    {
        $this->nm_new_label['sab_m_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sab_m_ate = $this->sab_m_ate;
   $sStyleHidden_sab_m_ate = '';
   if (isset($this->nmgp_cmp_hidden['sab_m_ate']) && $this->nmgp_cmp_hidden['sab_m_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sab_m_ate']);
       $sStyleHidden_sab_m_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sab_m_ate = 'display: none;';
   $sStyleReadInp_sab_m_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sab_m_ate']) && $this->nmgp_cmp_readonly['sab_m_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sab_m_ate']);
       $sStyleReadLab_sab_m_ate = '';
       $sStyleReadInp_sab_m_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sab_m_ate']) && $this->nmgp_cmp_hidden['sab_m_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sab_m_ate" value="<?php echo $this->form_encode_input($sab_m_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sab_m_ate_label" id="hidden_field_label_sab_m_ate" style="<?php echo $sStyleHidden_sab_m_ate; ?>"><span id="id_label_sab_m_ate"><?php echo $this->nm_new_label['sab_m_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_sab_m_ate_line" id="hidden_field_data_sab_m_ate" style="<?php echo $sStyleHidden_sab_m_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sab_m_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sab_m_ate"]) &&  $this->nmgp_cmp_readonly["sab_m_ate"] == "on") { 

 ?>
<input type="hidden" name="sab_m_ate" value="<?php echo $this->form_encode_input($sab_m_ate) . "\">" . $sab_m_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_sab_m_ate" class="sc-ui-readonly-sab_m_ate css_sab_m_ate_line" style="<?php echo $sStyleReadLab_sab_m_ate; ?>"><?php echo $this->form_encode_input($sab_m_ate); ?></span><span id="id_read_off_sab_m_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_sab_m_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_sab_m_ate_obj" style="" id="id_sc_field_sab_m_ate" type=text name="sab_m_ate" value="<?php echo $this->form_encode_input($sab_m_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['sab_m_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['sab_m_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['sab_m_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sab_m_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sab_m_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['sab_t_de']))
    {
        $this->nm_new_label['sab_t_de'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sab_t_de = $this->sab_t_de;
   $sStyleHidden_sab_t_de = '';
   if (isset($this->nmgp_cmp_hidden['sab_t_de']) && $this->nmgp_cmp_hidden['sab_t_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sab_t_de']);
       $sStyleHidden_sab_t_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sab_t_de = 'display: none;';
   $sStyleReadInp_sab_t_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sab_t_de']) && $this->nmgp_cmp_readonly['sab_t_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sab_t_de']);
       $sStyleReadLab_sab_t_de = '';
       $sStyleReadInp_sab_t_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sab_t_de']) && $this->nmgp_cmp_hidden['sab_t_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sab_t_de" value="<?php echo $this->form_encode_input($sab_t_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sab_t_de_label" id="hidden_field_label_sab_t_de" style="<?php echo $sStyleHidden_sab_t_de; ?>"><span id="id_label_sab_t_de"><?php echo $this->nm_new_label['sab_t_de']; ?></span></TD>
    <TD class="scFormDataOdd css_sab_t_de_line" id="hidden_field_data_sab_t_de" style="<?php echo $sStyleHidden_sab_t_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sab_t_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sab_t_de"]) &&  $this->nmgp_cmp_readonly["sab_t_de"] == "on") { 

 ?>
<input type="hidden" name="sab_t_de" value="<?php echo $this->form_encode_input($sab_t_de) . "\">" . $sab_t_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_sab_t_de" class="sc-ui-readonly-sab_t_de css_sab_t_de_line" style="<?php echo $sStyleReadLab_sab_t_de; ?>"><?php echo $this->form_encode_input($sab_t_de); ?></span><span id="id_read_off_sab_t_de" style="white-space: nowrap;<?php echo $sStyleReadInp_sab_t_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_sab_t_de_obj" style="" id="id_sc_field_sab_t_de" type=text name="sab_t_de" value="<?php echo $this->form_encode_input($sab_t_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['sab_t_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['sab_t_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['sab_t_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sab_t_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sab_t_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['sab_t_ate']))
    {
        $this->nm_new_label['sab_t_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sab_t_ate = $this->sab_t_ate;
   $sStyleHidden_sab_t_ate = '';
   if (isset($this->nmgp_cmp_hidden['sab_t_ate']) && $this->nmgp_cmp_hidden['sab_t_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sab_t_ate']);
       $sStyleHidden_sab_t_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sab_t_ate = 'display: none;';
   $sStyleReadInp_sab_t_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sab_t_ate']) && $this->nmgp_cmp_readonly['sab_t_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sab_t_ate']);
       $sStyleReadLab_sab_t_ate = '';
       $sStyleReadInp_sab_t_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sab_t_ate']) && $this->nmgp_cmp_hidden['sab_t_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sab_t_ate" value="<?php echo $this->form_encode_input($sab_t_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sab_t_ate_label" id="hidden_field_label_sab_t_ate" style="<?php echo $sStyleHidden_sab_t_ate; ?>"><span id="id_label_sab_t_ate"><?php echo $this->nm_new_label['sab_t_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_sab_t_ate_line" id="hidden_field_data_sab_t_ate" style="<?php echo $sStyleHidden_sab_t_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sab_t_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sab_t_ate"]) &&  $this->nmgp_cmp_readonly["sab_t_ate"] == "on") { 

 ?>
<input type="hidden" name="sab_t_ate" value="<?php echo $this->form_encode_input($sab_t_ate) . "\">" . $sab_t_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_sab_t_ate" class="sc-ui-readonly-sab_t_ate css_sab_t_ate_line" style="<?php echo $sStyleReadLab_sab_t_ate; ?>"><?php echo $this->form_encode_input($sab_t_ate); ?></span><span id="id_read_off_sab_t_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_sab_t_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_sab_t_ate_obj" style="" id="id_sc_field_sab_t_ate" type=text name="sab_t_ate" value="<?php echo $this->form_encode_input($sab_t_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['sab_t_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['sab_t_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['sab_t_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sab_t_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sab_t_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dom_m_de']))
    {
        $this->nm_new_label['dom_m_de'] = "Domingo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dom_m_de = $this->dom_m_de;
   $sStyleHidden_dom_m_de = '';
   if (isset($this->nmgp_cmp_hidden['dom_m_de']) && $this->nmgp_cmp_hidden['dom_m_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dom_m_de']);
       $sStyleHidden_dom_m_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dom_m_de = 'display: none;';
   $sStyleReadInp_dom_m_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dom_m_de']) && $this->nmgp_cmp_readonly['dom_m_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dom_m_de']);
       $sStyleReadLab_dom_m_de = '';
       $sStyleReadInp_dom_m_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dom_m_de']) && $this->nmgp_cmp_hidden['dom_m_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dom_m_de" value="<?php echo $this->form_encode_input($dom_m_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_dom_m_de_label" id="hidden_field_label_dom_m_de" style="<?php echo $sStyleHidden_dom_m_de; ?>"><span id="id_label_dom_m_de"><?php echo $this->nm_new_label['dom_m_de']; ?></span></TD>
    <TD class="scFormDataOdd css_dom_m_de_line" id="hidden_field_data_dom_m_de" style="<?php echo $sStyleHidden_dom_m_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dom_m_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dom_m_de"]) &&  $this->nmgp_cmp_readonly["dom_m_de"] == "on") { 

 ?>
<input type="hidden" name="dom_m_de" value="<?php echo $this->form_encode_input($dom_m_de) . "\">" . $dom_m_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_dom_m_de" class="sc-ui-readonly-dom_m_de css_dom_m_de_line" style="<?php echo $sStyleReadLab_dom_m_de; ?>"><?php echo $this->form_encode_input($dom_m_de); ?></span><span id="id_read_off_dom_m_de" style="white-space: nowrap;<?php echo $sStyleReadInp_dom_m_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_dom_m_de_obj" style="" id="id_sc_field_dom_m_de" type=text name="dom_m_de" value="<?php echo $this->form_encode_input($dom_m_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['dom_m_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['dom_m_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['dom_m_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dom_m_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dom_m_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['dom_m_ate']))
    {
        $this->nm_new_label['dom_m_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dom_m_ate = $this->dom_m_ate;
   $sStyleHidden_dom_m_ate = '';
   if (isset($this->nmgp_cmp_hidden['dom_m_ate']) && $this->nmgp_cmp_hidden['dom_m_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dom_m_ate']);
       $sStyleHidden_dom_m_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dom_m_ate = 'display: none;';
   $sStyleReadInp_dom_m_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dom_m_ate']) && $this->nmgp_cmp_readonly['dom_m_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dom_m_ate']);
       $sStyleReadLab_dom_m_ate = '';
       $sStyleReadInp_dom_m_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dom_m_ate']) && $this->nmgp_cmp_hidden['dom_m_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dom_m_ate" value="<?php echo $this->form_encode_input($dom_m_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_dom_m_ate_label" id="hidden_field_label_dom_m_ate" style="<?php echo $sStyleHidden_dom_m_ate; ?>"><span id="id_label_dom_m_ate"><?php echo $this->nm_new_label['dom_m_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_dom_m_ate_line" id="hidden_field_data_dom_m_ate" style="<?php echo $sStyleHidden_dom_m_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dom_m_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dom_m_ate"]) &&  $this->nmgp_cmp_readonly["dom_m_ate"] == "on") { 

 ?>
<input type="hidden" name="dom_m_ate" value="<?php echo $this->form_encode_input($dom_m_ate) . "\">" . $dom_m_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_dom_m_ate" class="sc-ui-readonly-dom_m_ate css_dom_m_ate_line" style="<?php echo $sStyleReadLab_dom_m_ate; ?>"><?php echo $this->form_encode_input($dom_m_ate); ?></span><span id="id_read_off_dom_m_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_dom_m_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_dom_m_ate_obj" style="" id="id_sc_field_dom_m_ate" type=text name="dom_m_ate" value="<?php echo $this->form_encode_input($dom_m_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['dom_m_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['dom_m_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['dom_m_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dom_m_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dom_m_ate_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['dom_t_de']))
    {
        $this->nm_new_label['dom_t_de'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dom_t_de = $this->dom_t_de;
   $sStyleHidden_dom_t_de = '';
   if (isset($this->nmgp_cmp_hidden['dom_t_de']) && $this->nmgp_cmp_hidden['dom_t_de'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dom_t_de']);
       $sStyleHidden_dom_t_de = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dom_t_de = 'display: none;';
   $sStyleReadInp_dom_t_de = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dom_t_de']) && $this->nmgp_cmp_readonly['dom_t_de'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dom_t_de']);
       $sStyleReadLab_dom_t_de = '';
       $sStyleReadInp_dom_t_de = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dom_t_de']) && $this->nmgp_cmp_hidden['dom_t_de'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dom_t_de" value="<?php echo $this->form_encode_input($dom_t_de) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_dom_t_de_label" id="hidden_field_label_dom_t_de" style="<?php echo $sStyleHidden_dom_t_de; ?>"><span id="id_label_dom_t_de"><?php echo $this->nm_new_label['dom_t_de']; ?></span></TD>
    <TD class="scFormDataOdd css_dom_t_de_line" id="hidden_field_data_dom_t_de" style="<?php echo $sStyleHidden_dom_t_de; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dom_t_de_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dom_t_de"]) &&  $this->nmgp_cmp_readonly["dom_t_de"] == "on") { 

 ?>
<input type="hidden" name="dom_t_de" value="<?php echo $this->form_encode_input($dom_t_de) . "\">" . $dom_t_de . ""; ?>
<?php } else { ?>
<span id="id_read_on_dom_t_de" class="sc-ui-readonly-dom_t_de css_dom_t_de_line" style="<?php echo $sStyleReadLab_dom_t_de; ?>"><?php echo $this->form_encode_input($dom_t_de); ?></span><span id="id_read_off_dom_t_de" style="white-space: nowrap;<?php echo $sStyleReadInp_dom_t_de; ?>">
 <input class="sc-js-input scFormObjectOdd css_dom_t_de_obj" style="" id="id_sc_field_dom_t_de" type=text name="dom_t_de" value="<?php echo $this->form_encode_input($dom_t_de) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['dom_t_de']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['dom_t_de']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['dom_t_de']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dom_t_de_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dom_t_de_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['dom_t_ate']))
    {
        $this->nm_new_label['dom_t_ate'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dom_t_ate = $this->dom_t_ate;
   $sStyleHidden_dom_t_ate = '';
   if (isset($this->nmgp_cmp_hidden['dom_t_ate']) && $this->nmgp_cmp_hidden['dom_t_ate'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dom_t_ate']);
       $sStyleHidden_dom_t_ate = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dom_t_ate = 'display: none;';
   $sStyleReadInp_dom_t_ate = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dom_t_ate']) && $this->nmgp_cmp_readonly['dom_t_ate'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dom_t_ate']);
       $sStyleReadLab_dom_t_ate = '';
       $sStyleReadInp_dom_t_ate = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dom_t_ate']) && $this->nmgp_cmp_hidden['dom_t_ate'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dom_t_ate" value="<?php echo $this->form_encode_input($dom_t_ate) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_dom_t_ate_label" id="hidden_field_label_dom_t_ate" style="<?php echo $sStyleHidden_dom_t_ate; ?>"><span id="id_label_dom_t_ate"><?php echo $this->nm_new_label['dom_t_ate']; ?></span></TD>
    <TD class="scFormDataOdd css_dom_t_ate_line" id="hidden_field_data_dom_t_ate" style="<?php echo $sStyleHidden_dom_t_ate; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dom_t_ate_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dom_t_ate"]) &&  $this->nmgp_cmp_readonly["dom_t_ate"] == "on") { 

 ?>
<input type="hidden" name="dom_t_ate" value="<?php echo $this->form_encode_input($dom_t_ate) . "\">" . $dom_t_ate . ""; ?>
<?php } else { ?>
<span id="id_read_on_dom_t_ate" class="sc-ui-readonly-dom_t_ate css_dom_t_ate_line" style="<?php echo $sStyleReadLab_dom_t_ate; ?>"><?php echo $this->form_encode_input($dom_t_ate); ?></span><span id="id_read_off_dom_t_ate" style="white-space: nowrap;<?php echo $sStyleReadInp_dom_t_ate; ?>">
 <input class="sc-js-input scFormObjectOdd css_dom_t_ate_obj" style="" id="id_sc_field_dom_t_ate" type=text name="dom_t_ate" value="<?php echo $this->form_encode_input($dom_t_ate) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['dom_t_ate']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['dom_t_ate']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'hh:mm', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ><?php
$tmp_form_data = $this->field_config['dom_t_ate']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dom_t_ate_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dom_t_ate_text"></span></td></tr></table></td></tr></table></TD>
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
   <a name="bloco_5"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_5"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_5" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['txtmensagem']))
    {
        $this->nm_new_label['txtmensagem'] = "N�o h� necessidade de informar hor�rios de funcionamento para eventos";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $txtmensagem = $this->txtmensagem;
   $sStyleHidden_txtmensagem = '';
   if (isset($this->nmgp_cmp_hidden['txtmensagem']) && $this->nmgp_cmp_hidden['txtmensagem'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['txtmensagem']);
       $sStyleHidden_txtmensagem = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_txtmensagem = 'display: none;';
   $sStyleReadInp_txtmensagem = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['txtmensagem']) && $this->nmgp_cmp_readonly['txtmensagem'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['txtmensagem']);
       $sStyleReadLab_txtmensagem = '';
       $sStyleReadInp_txtmensagem = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['txtmensagem']) && $this->nmgp_cmp_hidden['txtmensagem'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="txtmensagem" value="<?php echo $this->form_encode_input($txtmensagem) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_txtmensagem_line" id="hidden_field_data_txtmensagem" style="<?php echo $sStyleHidden_txtmensagem; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_txtmensagem_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_txtmensagem_label"><span id="id_label_txtmensagem"><?php echo $this->nm_new_label['txtmensagem']; ?></span></span><br><span id="id_read_on_txtmensagem css_txtmensagem_line" style="<?php echo $sStyleReadLab_txtmensagem; ?>"><?php echo $this->form_encode_input($this->txtmensagem); ?></span><span id="id_read_off_txtmensagem" style="<?php echo $sStyleReadInp_txtmensagem; ?>"><span id="id_ajax_label_txtmensagem"><?php echo $txtmensagem?></span>
</span><input type="hidden" name="txtmensagem" value="<?php echo $this->form_encode_input($txtmensagem); ?>">
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_txtmensagem_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_txtmensagem_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_txtmensagem_dumb = ('' == $sStyleHidden_txtmensagem) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_txtmensagem_dumb" style="<?php echo $sStyleHidden_txtmensagem_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_6"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="60%" height="">
<div id="div_hidden_bloco_6"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_6" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont">ENDERE�O</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cep']))
    {
        $this->nm_new_label['cep'] = "CEP";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cep = $this->cep;
   $sStyleHidden_cep = '';
   if (isset($this->nmgp_cmp_hidden['cep']) && $this->nmgp_cmp_hidden['cep'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cep']);
       $sStyleHidden_cep = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cep = 'display: none;';
   $sStyleReadInp_cep = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cep']) && $this->nmgp_cmp_readonly['cep'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cep']);
       $sStyleReadLab_cep = '';
       $sStyleReadInp_cep = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cep']) && $this->nmgp_cmp_hidden['cep'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cep" value="<?php echo $this->form_encode_input($cep) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cep_line" id="hidden_field_data_cep" style="<?php echo $sStyleHidden_cep; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cep_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cep_label"><span id="id_label_cep"><?php echo $this->nm_new_label['cep']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['cep']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['cep'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cep"]) &&  $this->nmgp_cmp_readonly["cep"] == "on") { 

 ?>
<input type="hidden" name="cep" value="<?php echo $this->form_encode_input($cep) . "\">" . $cep . ""; ?>
<?php } else { ?>
<span id="id_read_on_cep" class="sc-ui-readonly-cep css_cep_line" style="<?php echo $sStyleReadLab_cep; ?>"><?php echo $this->form_encode_input($this->cep); ?></span><span id="id_read_off_cep" style="white-space: nowrap;<?php echo $sStyleReadInp_cep; ?>">
 <input class="sc-js-input scFormObjectOdd css_cep_obj" style="" id="id_sc_field_cep" type=text name="cep" value="<?php echo $this->form_encode_input($cep) ?>"
 size=8 alt="{datatype: 'cep', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >&nbsp;<?php echo nmButtonOutput($this->arr_buttons, "bzipcode", "tb_show('', '" . $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . SC_dir_app_name('form_ap_contrato'). "/form_ap_contrato_cep.php?cep=&form_origem=F1;CEP,cep;UF,estado;CIDADE,cidade;BAIRRO,bairro;RUA,rua&TB_iframe=true&height=220&width=350&modal=true', '')", "tb_show('', '" . $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . SC_dir_app_name('form_ap_contrato'). "/form_ap_contrato_cep.php?cep=&form_origem=F1;CEP,cep;UF,estado;CIDADE,cidade;BAIRRO,bairro;RUA,rua&TB_iframe=true&height=220&width=350&modal=true', '')", "cep_cep", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>

</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cep_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cep_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cidade']))
    {
        $this->nm_new_label['cidade'] = "Cidade";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cidade = $this->cidade;
   $sStyleHidden_cidade = '';
   if (isset($this->nmgp_cmp_hidden['cidade']) && $this->nmgp_cmp_hidden['cidade'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cidade']);
       $sStyleHidden_cidade = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cidade = 'display: none;';
   $sStyleReadInp_cidade = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cidade']) && $this->nmgp_cmp_readonly['cidade'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cidade']);
       $sStyleReadLab_cidade = '';
       $sStyleReadInp_cidade = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cidade']) && $this->nmgp_cmp_hidden['cidade'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cidade" value="<?php echo $this->form_encode_input($cidade) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cidade_line" id="hidden_field_data_cidade" style="<?php echo $sStyleHidden_cidade; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cidade_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cidade_label"><span id="id_label_cidade"><?php echo $this->nm_new_label['cidade']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['cidade']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['cidade'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cidade"]) &&  $this->nmgp_cmp_readonly["cidade"] == "on") { 

 ?>
<input type="hidden" name="cidade" value="<?php echo $this->form_encode_input($cidade) . "\">" . $cidade . ""; ?>
<?php } else { ?>
<span id="id_read_on_cidade" class="sc-ui-readonly-cidade css_cidade_line" style="<?php echo $sStyleReadLab_cidade; ?>"><?php echo $this->form_encode_input($this->cidade); ?></span><span id="id_read_off_cidade" style="white-space: nowrap;<?php echo $sStyleReadInp_cidade; ?>">
 <input class="sc-js-input scFormObjectOdd css_cidade_obj" style="" id="id_sc_field_cidade" type=text name="cidade" value="<?php echo $this->form_encode_input($cidade) ?>"
 size=50 maxlength=70 alt="{datatype: 'text', maxLength: 70, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cidade_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cidade_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['estado']))
    {
        $this->nm_new_label['estado'] = "Estado";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estado = $this->estado;
   $sStyleHidden_estado = '';
   if (isset($this->nmgp_cmp_hidden['estado']) && $this->nmgp_cmp_hidden['estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estado']);
       $sStyleHidden_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estado = 'display: none;';
   $sStyleReadInp_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estado']) && $this->nmgp_cmp_readonly['estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estado']);
       $sStyleReadLab_estado = '';
       $sStyleReadInp_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estado']) && $this->nmgp_cmp_hidden['estado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="estado" value="<?php echo $this->form_encode_input($estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_estado_line" id="hidden_field_data_estado" style="<?php echo $sStyleHidden_estado; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_estado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_estado_label"><span id="id_label_estado"><?php echo $this->nm_new_label['estado']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['estado']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['estado'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estado"]) &&  $this->nmgp_cmp_readonly["estado"] == "on") { 

 ?>
<input type="hidden" name="estado" value="<?php echo $this->form_encode_input($estado) . "\">" . $estado . ""; ?>
<?php } else { ?>
<span id="id_read_on_estado" class="sc-ui-readonly-estado css_estado_line" style="<?php echo $sStyleReadLab_estado; ?>"><?php echo $this->form_encode_input($this->estado); ?></span><span id="id_read_off_estado" style="white-space: nowrap;<?php echo $sStyleReadInp_estado; ?>">
 <input class="sc-js-input scFormObjectOdd css_estado_obj" style="" id="id_sc_field_estado" type=text name="estado" value="<?php echo $this->form_encode_input($estado) ?>"
 size=100% maxlength=2 alt="{datatype: 'text', maxLength: 2, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['bairro']))
    {
        $this->nm_new_label['bairro'] = "Bairro";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bairro = $this->bairro;
   $sStyleHidden_bairro = '';
   if (isset($this->nmgp_cmp_hidden['bairro']) && $this->nmgp_cmp_hidden['bairro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bairro']);
       $sStyleHidden_bairro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bairro = 'display: none;';
   $sStyleReadInp_bairro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bairro']) && $this->nmgp_cmp_readonly['bairro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bairro']);
       $sStyleReadLab_bairro = '';
       $sStyleReadInp_bairro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bairro']) && $this->nmgp_cmp_hidden['bairro'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bairro" value="<?php echo $this->form_encode_input($bairro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_bairro_line" id="hidden_field_data_bairro" style="<?php echo $sStyleHidden_bairro; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_bairro_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_bairro_label"><span id="id_label_bairro"><?php echo $this->nm_new_label['bairro']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['bairro']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['bairro'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bairro"]) &&  $this->nmgp_cmp_readonly["bairro"] == "on") { 

 ?>
<input type="hidden" name="bairro" value="<?php echo $this->form_encode_input($bairro) . "\">" . $bairro . ""; ?>
<?php } else { ?>
<span id="id_read_on_bairro" class="sc-ui-readonly-bairro css_bairro_line" style="<?php echo $sStyleReadLab_bairro; ?>"><?php echo $this->form_encode_input($this->bairro); ?></span><span id="id_read_off_bairro" style="white-space: nowrap;<?php echo $sStyleReadInp_bairro; ?>">
 <input class="sc-js-input scFormObjectOdd css_bairro_obj" style="" id="id_sc_field_bairro" type=text name="bairro" value="<?php echo $this->form_encode_input($bairro) ?>"
 size=100% maxlength=80 alt="{datatype: 'text', maxLength: 80, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bairro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bairro_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['rua']))
    {
        $this->nm_new_label['rua'] = "Rua";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $rua = $this->rua;
   $sStyleHidden_rua = '';
   if (isset($this->nmgp_cmp_hidden['rua']) && $this->nmgp_cmp_hidden['rua'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['rua']);
       $sStyleHidden_rua = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_rua = 'display: none;';
   $sStyleReadInp_rua = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['rua']) && $this->nmgp_cmp_readonly['rua'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['rua']);
       $sStyleReadLab_rua = '';
       $sStyleReadInp_rua = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['rua']) && $this->nmgp_cmp_hidden['rua'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="rua" value="<?php echo $this->form_encode_input($rua) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_rua_line" id="hidden_field_data_rua" style="<?php echo $sStyleHidden_rua; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_rua_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_rua_label"><span id="id_label_rua"><?php echo $this->nm_new_label['rua']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['rua']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['rua'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["rua"]) &&  $this->nmgp_cmp_readonly["rua"] == "on") { 

 ?>
<input type="hidden" name="rua" value="<?php echo $this->form_encode_input($rua) . "\">" . $rua . ""; ?>
<?php } else { ?>
<span id="id_read_on_rua" class="sc-ui-readonly-rua css_rua_line" style="<?php echo $sStyleReadLab_rua; ?>"><?php echo $this->form_encode_input($this->rua); ?></span><span id="id_read_off_rua" style="white-space: nowrap;<?php echo $sStyleReadInp_rua; ?>">
 <input class="sc-js-input scFormObjectOdd css_rua_obj" style="" id="id_sc_field_rua" type=text name="rua" value="<?php echo $this->form_encode_input($rua) ?>"
 size=100% maxlength=90 alt="{datatype: 'text', maxLength: 90, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_rua_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_rua_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['complemento']))
    {
        $this->nm_new_label['complemento'] = "Complemento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $complemento = $this->complemento;
   $sStyleHidden_complemento = '';
   if (isset($this->nmgp_cmp_hidden['complemento']) && $this->nmgp_cmp_hidden['complemento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['complemento']);
       $sStyleHidden_complemento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_complemento = 'display: none;';
   $sStyleReadInp_complemento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['complemento']) && $this->nmgp_cmp_readonly['complemento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['complemento']);
       $sStyleReadLab_complemento = '';
       $sStyleReadInp_complemento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['complemento']) && $this->nmgp_cmp_hidden['complemento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="complemento" value="<?php echo $this->form_encode_input($complemento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_complemento_line" id="hidden_field_data_complemento" style="<?php echo $sStyleHidden_complemento; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_complemento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_complemento_label"><span id="id_label_complemento"><?php echo $this->nm_new_label['complemento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["complemento"]) &&  $this->nmgp_cmp_readonly["complemento"] == "on") { 

 ?>
<input type="hidden" name="complemento" value="<?php echo $this->form_encode_input($complemento) . "\">" . $complemento . ""; ?>
<?php } else { ?>
<span id="id_read_on_complemento" class="sc-ui-readonly-complemento css_complemento_line" style="<?php echo $sStyleReadLab_complemento; ?>"><?php echo $this->form_encode_input($this->complemento); ?></span><span id="id_read_off_complemento" style="white-space: nowrap;<?php echo $sStyleReadInp_complemento; ?>">
 <input class="sc-js-input scFormObjectOdd css_complemento_obj" style="" id="id_sc_field_complemento" type=text name="complemento" value="<?php echo $this->form_encode_input($complemento) ?>"
 size=100% maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_complemento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_complemento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numero']))
    {
        $this->nm_new_label['numero'] = "Numero";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numero = $this->numero;
   $sStyleHidden_numero = '';
   if (isset($this->nmgp_cmp_hidden['numero']) && $this->nmgp_cmp_hidden['numero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numero']);
       $sStyleHidden_numero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numero = 'display: none;';
   $sStyleReadInp_numero = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['numero']) && $this->nmgp_cmp_readonly['numero'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numero']);
       $sStyleReadLab_numero = '';
       $sStyleReadInp_numero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numero']) && $this->nmgp_cmp_hidden['numero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numero" value="<?php echo $this->form_encode_input($numero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_numero_line" id="hidden_field_data_numero" style="<?php echo $sStyleHidden_numero; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_numero_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_numero_label"><span id="id_label_numero"><?php echo $this->nm_new_label['numero']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['numero']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['numero'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["numero"]) &&  $this->nmgp_cmp_readonly["numero"] == "on") { 

 ?>
<input type="hidden" name="numero" value="<?php echo $this->form_encode_input($numero) . "\">" . $numero . ""; ?>
<?php } else { ?>
<span id="id_read_on_numero" class="sc-ui-readonly-numero css_numero_line" style="<?php echo $sStyleReadLab_numero; ?>"><?php echo $this->form_encode_input($this->numero); ?></span><span id="id_read_off_numero" style="white-space: nowrap;<?php echo $sStyleReadInp_numero; ?>">
 <input class="sc-js-input scFormObjectOdd css_numero_obj" style="" id="id_sc_field_numero" type=text name="numero" value="<?php echo $this->form_encode_input($numero) ?>"
 size=100% maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_numero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_numero_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['website']))
    {
        $this->nm_new_label['website'] = "SIte na Web";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $website = $this->website;
   $sStyleHidden_website = '';
   if (isset($this->nmgp_cmp_hidden['website']) && $this->nmgp_cmp_hidden['website'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['website']);
       $sStyleHidden_website = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_website = 'display: none;';
   $sStyleReadInp_website = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['website']) && $this->nmgp_cmp_readonly['website'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['website']);
       $sStyleReadLab_website = '';
       $sStyleReadInp_website = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['website']) && $this->nmgp_cmp_hidden['website'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="website" value="<?php echo $this->form_encode_input($website) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_website_line" id="hidden_field_data_website" style="<?php echo $sStyleHidden_website; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_website_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_website_label"><span id="id_label_website"><?php echo $this->nm_new_label['website']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['website']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['php_cmp_required']['website'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["website"]) &&  $this->nmgp_cmp_readonly["website"] == "on") { 

 ?>
<input type="hidden" name="website" value="<?php echo $this->form_encode_input($website) . "\">" . $website . ""; ?>
<?php } else { ?>
<span id="id_read_on_website" class="sc-ui-readonly-website css_website_line" style="<?php echo $sStyleReadLab_website; ?>"><?php echo $this->form_encode_input($this->website); ?></span><span id="id_read_off_website" style="white-space: nowrap;<?php echo $sStyleReadInp_website; ?>">
 <input class="sc-js-input scFormObjectOdd css_website_obj" style="" id="id_sc_field_website" type=text name="website" value="<?php echo $this->form_encode_input($website) ?>"
 size=50 maxlength=120 alt="{datatype: 'text', maxLength: 120, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_website_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_website_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_website_dumb = ('' == $sStyleHidden_website) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_website_dumb" style="<?php echo $sStyleHidden_website_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   <td width="50%" height="">
   <a name="bloco_7"></a>
<div id="div_hidden_bloco_7"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_7" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock" style="text-align: center; vertical-align: middle">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="middle" class="scFormBlockFont" style="color: 003366">FRENTE DA LOJA</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fachada']))
    {
        $this->nm_new_label['fachada'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fachada = $this->fachada;
   $sStyleHidden_fachada = '';
   if (isset($this->nmgp_cmp_hidden['fachada']) && $this->nmgp_cmp_hidden['fachada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fachada']);
       $sStyleHidden_fachada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fachada = 'display: none;';
   $sStyleReadInp_fachada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fachada']) && $this->nmgp_cmp_readonly['fachada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fachada']);
       $sStyleReadLab_fachada = '';
       $sStyleReadInp_fachada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fachada']) && $this->nmgp_cmp_hidden['fachada'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fachada" value="<?php echo $this->form_encode_input($fachada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fachada_line" id="hidden_field_data_fachada" style="<?php echo $sStyleHidden_fachada; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fachada_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fachada_label"><span id="id_label_fachada"><?php echo $this->nm_new_label['fachada']; ?></span></span><br>
 <script>var var_ajax_img_fachada = '<?php echo $out1_fachada; ?>';</script><?php if (!empty($out_fachada)){ echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_fachada, '" . $this->nmgp_return_img['fachada'][0] . "', '" . $this->nmgp_return_img['fachada'][1] . "')\"><img id=\"id_ajax_img_fachada\" border=\"1\" src=\"$out_fachada\"></a> &nbsp;" . "<span id=\"txt_ajax_img_fachada\" style=\"display: none\">" . $fachada . "</span>"; if (!empty($fachada)){ echo "<br>";} } else { echo "<img id=\"id_ajax_img_fachada\" border=\"1\" style=\"display: none\"> &nbsp;<span id=\"txt_ajax_img_fachada\"></span><br />"; } ?>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fachada"]) &&  $this->nmgp_cmp_readonly["fachada"] == "on") { 

 ?>
<img id=\"fachada_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="fachada" value="<?php echo $this->form_encode_input($fachada) . "\">" . $fachada . ""; ?>
<?php } else { ?>
<span id="id_read_off_fachada" style="white-space: nowrap;<?php echo $sStyleReadInp_fachada; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-fachada" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_fachada_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="fachada[]" id="id_sc_field_fachada" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_fachada"<?php if ($this->nmgp_opcao == "novo" || empty($fachada)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="fachada_limpa" value="<?php echo $fachada_limpa . '" '; if ($fachada_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="fachada_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_img_loader_fachada" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_fachada" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fachada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fachada_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
<?php
  }
?>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "birpara", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", "brec_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
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
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_b", "", "INCLUIR CONTRATO", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
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
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "sc_b_sai_b", "", "VOLTAR", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
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
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
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
    if (isset($this->NMSC_modal) && $this->NMSC_modal == "ok") {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "SAIR", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_ap_contrato");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_ap_contrato");
 parent.scAjaxDetailHeight("form_ap_contrato", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_ap_contrato", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_ap_contrato", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_ap_contrato']['sc_modal'])
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
