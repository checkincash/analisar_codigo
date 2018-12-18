
function scJQGeneralAdd() {
  $('input:text.sc-js-input').listen();
  $('input:password.sc-js-input').listen();
  $('input:checkbox.sc-js-input').listen();
  $('input:radio.sc-js-input').listen();
  $('select.sc-js-input').listen();
  $('textarea.sc-js-input').listen();

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($oField.length > 0) {
    switch ($oField[0].name) {
      case 'fk_contrato':
      case 'situacao':
      case 'nomenclatura':
      case 'data_criacao':
      case 'cep':
      case 'bairro':
      case 'rua':
      case 'numero':
      case 'complemento':
      case 'cidade':
      case 'estado':
        sc_exib_ocult_pag('form_ap_contrato_publicador_cliente_mob_form0');
        break;
      case 'destaque_img':
      case 'destaque':
      case 'foto_publicacao':
      case 'texto_publicacao':
        sc_exib_ocult_pag('form_ap_contrato_publicador_cliente_mob_form1');
        break;
      case 'pdesconto':
      case 'foto_premiacao':
      case 'texto_premiacao':
        sc_exib_ocult_pag('form_ap_contrato_publicador_cliente_mob_form2');
        break;
    }
  }

  if (false == scSetFocusOnField($oField) && $("#id_ac_" + sField).length > 0) {
    if (false == scSetFocusOnField($("#id_ac_" + sField))) {
      setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["fk_contrato" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["situacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nomenclatura" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["data_criacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cep" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["bairro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rua" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["numero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["complemento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cidade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["destaque_img" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["destaque" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["foto_publicacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["texto_publicacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pdesconto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["foto_premiacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["texto_premiacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["fk_contrato" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fk_contrato" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["situacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["situacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nomenclatura" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nomenclatura" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["data_criacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["data_criacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rua" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rua" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["complemento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["complemento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cidade" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cidade" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["destaque_img" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["destaque_img" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["destaque" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["destaque" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["texto_publicacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["texto_publicacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pdesconto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pdesconto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["texto_premiacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["texto_premiacao" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("fk_contrato" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("situacao" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pdesconto" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_fk_contrato' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_fk_contrato_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_fk_contrato_onfocus(this, iSeqRow) });
  $('#id_sc_field_data_criacao' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_data_criacao_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_data_criacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_nomenclatura' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_nomenclatura_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_nomenclatura_onfocus(this, iSeqRow) });
  $('#id_sc_field_foto_publicacao' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_foto_publicacao_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_foto_publicacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_texto_publicacao' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_texto_publicacao_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_texto_publicacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_foto_premiacao' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_foto_premiacao_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_foto_premiacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_texto_premiacao' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_texto_premiacao_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_texto_premiacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_cep' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_cep_onblur(this, iSeqRow) })
                                 .bind('change', function() { sc_form_ap_contrato_publicador_cliente_cep_onchange(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_cep_onfocus(this, iSeqRow) });
  $('#id_sc_field_bairro' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_bairro_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_bairro_onfocus(this, iSeqRow) });
  $('#id_sc_field_rua' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_rua_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_rua_onfocus(this, iSeqRow) });
  $('#id_sc_field_numero' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_numero_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_numero_onfocus(this, iSeqRow) });
  $('#id_sc_field_complemento' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_complemento_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_complemento_onfocus(this, iSeqRow) });
  $('#id_sc_field_cidade' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_cidade_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_cidade_onfocus(this, iSeqRow) });
  $('#id_sc_field_estado' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_estado_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_destaque' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_destaque_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_destaque_onfocus(this, iSeqRow) });
  $('#id_sc_field_pdesconto' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_pdesconto_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_pdesconto_onfocus(this, iSeqRow) });
  $('#id_sc_field_situacao' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_situacao_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_situacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_destaque_img' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_publicador_cliente_destaque_img_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_ap_contrato_publicador_cliente_destaque_img_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_ap_contrato_publicador_cliente_fk_contrato_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_fk_contrato();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_fk_contrato_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_data_criacao_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_data_criacao();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_data_criacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_nomenclatura_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_nomenclatura();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_nomenclatura_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_foto_publicacao_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_foto_publicacao_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_texto_publicacao_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_texto_publicacao();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_texto_publicacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_foto_premiacao_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_foto_premiacao_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_texto_premiacao_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_texto_premiacao();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_texto_premiacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_cep_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_cep();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_cep_onchange(oThis, iSeqRow) {
  cep_cep(oThis.value, 'F1;CEP,cep;UF,estado;CIDADE,cidade;BAIRRO,bairro;RUA,rua');
}

function sc_form_ap_contrato_publicador_cliente_cep_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_bairro_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_bairro();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_bairro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_rua_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_rua();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_rua_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_numero_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_numero();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_numero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_complemento_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_complemento();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_complemento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_cidade_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_cidade();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_cidade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_estado();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_destaque_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_destaque();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_destaque_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_pdesconto_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_pdesconto();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_pdesconto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_situacao_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_situacao();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_situacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_publicador_cliente_destaque_img_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_publicador_cliente_mob_validate_destaque_img();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_publicador_cliente_destaque_img_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_data_criacao" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_data_criacao" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['data_criacao']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true,
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_foto_publicacao" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_ap_contrato_publicador_cliente_mob_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'foto_publicacao'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_foto_publicacao" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_foto_publicacao" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      $("#id_sc_field_foto_publicacao" + iSeqRow).val("");
      $("#id_sc_field_foto_publicacao_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_foto_publicacao_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_foto_publicacao = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_foto_publicacao) ? "none" : "";
      $("#id_ajax_img_foto_publicacao" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_foto_publicacao" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_foto_publicacao) {
        document.F1.temp_out_foto_publicacao.value = var_ajax_img_thumb;
        document.F1.temp_out1_foto_publicacao.value = var_ajax_img_foto_publicacao;
      }
      else if (document.F1.temp_out_foto_publicacao) {
        document.F1.temp_out_foto_publicacao.value = var_ajax_img_foto_publicacao;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_foto_publicacao" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_foto_publicacao" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_foto_publicacao" + iSeqRow).css("display", "none");
      $("#id_ajax_link_foto_publicacao" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_foto_premiacao" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_ap_contrato_publicador_cliente_mob_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'foto_premiacao'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_foto_premiacao" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_foto_premiacao" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      $("#id_sc_field_foto_premiacao" + iSeqRow).val("");
      $("#id_sc_field_foto_premiacao_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_foto_premiacao_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_foto_premiacao = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_foto_premiacao) ? "none" : "";
      $("#id_ajax_img_foto_premiacao" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_foto_premiacao" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_foto_premiacao) {
        document.F1.temp_out_foto_premiacao.value = var_ajax_img_thumb;
        document.F1.temp_out1_foto_premiacao.value = var_ajax_img_foto_premiacao;
      }
      else if (document.F1.temp_out_foto_premiacao) {
        document.F1.temp_out_foto_premiacao.value = var_ajax_img_foto_premiacao;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_foto_premiacao" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_foto_premiacao" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_foto_premiacao" + iSeqRow).css("display", "none");
      $("#id_ajax_link_foto_premiacao" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

var scBtnGrpStatus = {};
function scBtnGrpShow(sGroup) {
  var btnPos = $('#sc_btgp_btn_' + sGroup).offset();
  scBtnGrpStatus[sGroup] = 'open';
  $('#sc_btgp_btn_' + sGroup).mouseout(function() {
    setTimeout(function() {
      scBtnGrpHide(sGroup);
    }, 1000);
  });
  $('#sc_btgp_div_' + sGroup + ' span a').click(function() {
    scBtnGrpStatus[sGroup] = 'out';
    scBtnGrpHide(sGroup);
  });
  $('#sc_btgp_div_' + sGroup).css({
    'left': btnPos.left
  })
  .mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  })
  .mouseleave(function() {
    scBtnGrpStatus[sGroup] = 'out';
    setTimeout(function() {
      scBtnGrpHide(sGroup);
    }, 1000);
  })
  .show('fast');
}
function scBtnGrpHide(sGroup) {
  if ('over' != scBtnGrpStatus[sGroup]) {
    $('#sc_btgp_div_' + sGroup).hide('fast');
  }
}
