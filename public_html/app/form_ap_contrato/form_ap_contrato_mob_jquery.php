
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
  scEventControl_data["cnpj" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["inscricao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["razao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["fantasia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["senha_usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["retype_senha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["retype_email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["fk_classificacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["classificacao1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["classificacao2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nome_contato" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["telefone" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["seg_m_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["seg_m_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["seg_t_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["seg_t_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["ter_m_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["ter_m_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["ter_t_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["ter_t_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qua_m_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qua_m_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qua_t_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qua_t_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qui_m_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qui_m_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qui_t_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["qui_t_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sex_m_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sex_m_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sex_t_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sex_t_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sab_m_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sab_m_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sab_t_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sab_t_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["dom_m_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["dom_m_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["dom_t_de" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["dom_t_ate" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["txtmensagem" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cep" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cidade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["bairro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rua" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["complemento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["numero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["website" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["fachada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["cnpj" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cnpj" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["inscricao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["inscricao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["razao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["razao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fantasia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fantasia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["senha_usuario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["senha_usuario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["retype_senha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["retype_senha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["retype_email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["retype_email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fk_classificacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fk_classificacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["classificacao1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["classificacao1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["classificacao2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["classificacao2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nome_contato" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nome_contato" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["telefone" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["telefone" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["seg_m_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["seg_m_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["seg_m_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["seg_m_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["seg_t_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["seg_t_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["seg_t_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["seg_t_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ter_m_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ter_m_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ter_m_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ter_m_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ter_t_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ter_t_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ter_t_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ter_t_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qua_m_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qua_m_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qua_m_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qua_m_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qua_t_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qua_t_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qua_t_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qua_t_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qui_m_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qui_m_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qui_m_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qui_m_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qui_t_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qui_t_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qui_t_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qui_t_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sex_m_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sex_m_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sex_m_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sex_m_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sex_t_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sex_t_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sex_t_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sex_t_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sab_m_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sab_m_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sab_m_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sab_m_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sab_t_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sab_t_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sab_t_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sab_t_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dom_m_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dom_m_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dom_m_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dom_m_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dom_t_de" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dom_t_de" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dom_t_ate" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dom_t_ate" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["txtmensagem" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["txtmensagem" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["change"]) {
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
  if (scEventControl_data["complemento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["complemento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["website" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["website" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("fk_classificacao" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("cep" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    return;
  }
  if ("fk_classificacao" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    return;
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
  $('#id_sc_field_fk_classificacao' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_fk_classificacao_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_ap_contrato_fk_classificacao_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_ap_contrato_fk_classificacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_classificacao1' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_classificacao1_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_ap_contrato_classificacao1_onfocus(this, iSeqRow) });
  $('#id_sc_field_classificacao2' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_classificacao2_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_ap_contrato_classificacao2_onfocus(this, iSeqRow) });
  $('#id_sc_field_cnpj' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_cnpj_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_ap_contrato_cnpj_onfocus(this, iSeqRow) });
  $('#id_sc_field_inscricao' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_inscricao_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_inscricao_onfocus(this, iSeqRow) });
  $('#id_sc_field_razao' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_razao_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_ap_contrato_razao_onfocus(this, iSeqRow) });
  $('#id_sc_field_fantasia' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_fantasia_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_fantasia_onfocus(this, iSeqRow) });
  $('#id_sc_field_cidade' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_cidade_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_ap_contrato_cidade_onfocus(this, iSeqRow) });
  $('#id_sc_field_estado' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_estado_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_ap_contrato_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_bairro' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_bairro_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_ap_contrato_bairro_onfocus(this, iSeqRow) });
  $('#id_sc_field_rua' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_rua_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_ap_contrato_rua_onfocus(this, iSeqRow) });
  $('#id_sc_field_complemento' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_complemento_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_ap_contrato_complemento_onfocus(this, iSeqRow) });
  $('#id_sc_field_numero' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_numero_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_ap_contrato_numero_onfocus(this, iSeqRow) });
  $('#id_sc_field_cep' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_cep_onblur(this, iSeqRow) })
                                 .bind('change', function() { sc_form_ap_contrato_cep_onchange(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_ap_contrato_cep_onfocus(this, iSeqRow) });
  $('#id_sc_field_fachada' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_fachada_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_ap_contrato_fachada_onfocus(this, iSeqRow) });
  $('#id_sc_field_email' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_email_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_ap_contrato_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_telefone' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_telefone_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_telefone_onfocus(this, iSeqRow) });
  $('#id_sc_field_senha_usuario' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_senha_usuario_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_ap_contrato_senha_usuario_onfocus(this, iSeqRow) });
  $('#id_sc_field_nome_contato' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_nome_contato_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_ap_contrato_nome_contato_onfocus(this, iSeqRow) });
  $('#id_sc_field_seg_m_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_seg_m_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_seg_m_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_seg_m_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_seg_m_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_seg_m_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_seg_t_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_seg_t_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_seg_t_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_seg_t_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_seg_t_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_seg_t_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_ter_m_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_ter_m_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_ter_m_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_ter_m_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_ter_m_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_ter_m_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_ter_t_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_ter_t_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_ter_t_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_ter_t_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_ter_t_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_ter_t_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_qua_m_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_qua_m_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_qua_m_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_qua_m_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_qua_m_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_qua_m_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_qua_t_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_qua_t_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_qua_t_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_qua_t_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_qua_t_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_qua_t_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_qui_m_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_qui_m_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_qui_m_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_qui_m_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_qui_m_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_qui_m_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_qui_t_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_qui_t_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_qui_t_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_qui_t_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_qui_t_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_qui_t_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_sex_m_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_sex_m_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_sex_m_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_sex_m_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_sex_m_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_sex_m_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_sex_t_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_sex_t_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_sex_t_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_sex_t_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_sex_t_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_sex_t_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_sab_m_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_sab_m_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_sab_m_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_sab_m_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_sab_m_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_sab_m_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_sab_t_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_sab_t_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_sab_t_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_sab_t_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_sab_t_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_sab_t_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_dom_m_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_dom_m_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_dom_m_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_dom_m_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_dom_m_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_dom_m_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_dom_t_de' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_dom_t_de_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_ap_contrato_dom_t_de_onfocus(this, iSeqRow) });
  $('#id_sc_field_dom_t_ate' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_dom_t_ate_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_ap_contrato_dom_t_ate_onfocus(this, iSeqRow) });
  $('#id_sc_field_website' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_website_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_ap_contrato_website_onfocus(this, iSeqRow) });
  $('#id_sc_field_retype_email' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_retype_email_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_ap_contrato_retype_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_retype_senha' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_retype_senha_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_ap_contrato_retype_senha_onfocus(this, iSeqRow) });
  $('#id_sc_field_txtmensagem' + iSeqRow).bind('blur', function() { sc_form_ap_contrato_txtmensagem_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_ap_contrato_txtmensagem_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_ap_contrato_fk_classificacao_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_fk_classificacao();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_fk_classificacao_onchange(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_event_fk_classificacao_onchange();
}

function sc_form_ap_contrato_fk_classificacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_classificacao1_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_classificacao1();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_classificacao1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_classificacao2_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_classificacao2();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_classificacao2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_cnpj_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_cnpj();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_cnpj_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_inscricao_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_inscricao();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_inscricao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_razao_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_razao();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_razao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_fantasia_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_fantasia();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_fantasia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_cidade_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_cidade();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_cidade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_estado();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_bairro_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_bairro();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_bairro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_rua_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_rua();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_rua_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_complemento_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_complemento();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_complemento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_numero_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_numero();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_numero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_cep_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_cep();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_cep_onchange(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_event_cep_onchange();
  cep_cep(oThis.value, 'F1;CEP,cep;UF,estado;CIDADE,cidade;BAIRRO,bairro;RUA,rua');
}

function sc_form_ap_contrato_cep_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_fachada_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_ap_contrato_fachada_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_ap_contrato_email_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_email();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_telefone_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_telefone();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_telefone_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_senha_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_senha_usuario();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_senha_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_nome_contato_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_nome_contato();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_nome_contato_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_seg_m_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_seg_m_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_seg_m_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_seg_m_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_seg_m_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_seg_m_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_seg_t_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_seg_t_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_seg_t_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_seg_t_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_seg_t_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_seg_t_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_ter_m_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_ter_m_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_ter_m_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_ter_m_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_ter_m_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_ter_m_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_ter_t_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_ter_t_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_ter_t_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_ter_t_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_ter_t_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_ter_t_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_qua_m_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_qua_m_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_qua_m_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_qua_m_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_qua_m_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_qua_m_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_qua_t_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_qua_t_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_qua_t_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_qua_t_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_qua_t_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_qua_t_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_qui_m_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_qui_m_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_qui_m_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_qui_m_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_qui_m_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_qui_m_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_qui_t_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_qui_t_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_qui_t_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_qui_t_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_qui_t_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_qui_t_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_sex_m_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_sex_m_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_sex_m_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_sex_m_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_sex_m_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_sex_m_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_sex_t_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_sex_t_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_sex_t_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_sex_t_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_sex_t_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_sex_t_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_sab_m_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_sab_m_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_sab_m_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_sab_m_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_sab_m_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_sab_m_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_sab_t_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_sab_t_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_sab_t_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_sab_t_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_sab_t_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_sab_t_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_dom_m_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_dom_m_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_dom_m_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_dom_m_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_dom_m_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_dom_m_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_dom_t_de_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_dom_t_de();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_dom_t_de_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_dom_t_ate_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_dom_t_ate();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_dom_t_ate_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_website_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_website();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_website_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_retype_email_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_retype_email();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_retype_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_retype_senha_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_retype_senha();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_retype_senha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_ap_contrato_txtmensagem_onblur(oThis, iSeqRow) {
  do_ajax_form_ap_contrato_mob_validate_txtmensagem();
  scCssBlur(oThis);
}

function sc_form_ap_contrato_txtmensagem_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_datacadastro" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_datacadastro" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      var elemName;
      if ("" != dateText) {
        elemName = $(this).attr("name");
        $("input[name=sc_clone_" + elemName + "]").hide();
        $("input[name=" + elemName + "]").show();
      }
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['datacadastro']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true,
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });

  $("#id_sc_field_activate_date" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_activate_date" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['activate_date']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['activate_date']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['activate_date']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true,
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_fachada" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_ap_contrato_mob_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'fachada'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_fachada" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_fachada" + iSeqRow);
        loader.show();
      }
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
        $("#id_img_loader_fachada" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_fachada" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_fachada" + iSeqRow).val("");
      $("#id_sc_field_fachada_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_fachada_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_fachada = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_fachada) ? "none" : "";
      $("#id_ajax_img_fachada" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_fachada" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_fachada) {
        document.F1.temp_out_fachada.value = var_ajax_img_thumb;
        document.F1.temp_out1_fachada.value = var_ajax_img_fachada;
      }
      else if (document.F1.temp_out_fachada) {
        document.F1.temp_out_fachada.value = var_ajax_img_fachada;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_fachada" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_fachada" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_fachada" + iSeqRow).css("display", "none");
      $("#id_ajax_link_fachada" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
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
