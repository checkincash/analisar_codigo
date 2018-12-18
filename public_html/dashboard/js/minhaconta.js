$(document).ready(function () {
    $('#tab_segunda .date, #tab_terca .date, #tab_quarta .date, #tab_quinta .date, #tab_sexta .date, #tab_sabado .date, #tab_domingo .date').datetimepicker({
        format: 'HH:mm',
        ignoreReadonly: true,
        allowInputToggle: true,
    }).find('input').prop('readonly', true).css('background-color', 'white');
    
    //gera o preview da imagem
    function readURL(input, seletorDestino) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(seletorDestino).css('background-image', 'url('+e.target.result+')');
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            $(seletorDestino).css('background-image', 'url(images/sem-imagem.png)');
        }
    }
    //carrega o preview
    $("#fileUpload").change(function () {
        readURL(this, '.filePreviewBox');
    });
    
//    $('#txtCEP').focusout(function() {
//        $.ajax({
//            url: "functions/buscarCep.php",
//            type: 'POST',
//            data: {
//                cep: $(this).val()
//            },
//            beforeSend: function (xhr) {
//                new PNotify({
//                    title: 'Procurando cep...',
//                    text: '',
//                    type: 'info',
//                    styling: 'bootstrap3'
//                });
//            },
//            error: function (jqXHR, textStatus, errorThrown) {
//                PNotify.removeAll();
//                new PNotify({
//                    title: textStatus,
//                    text: errorThrown,
//                    type: 'error',
//                    styling: 'bootstrap3'
//                });
//            },
//            success: function (data, textStatus, jqXHR) {
//                var result = JSON.parse(data);
//                PNotify.removeAll();
//                if(result.erro) {
//                    new PNotify({
//                        title: 'Erro',
//                        text: '',
//                        type: 'error',
//                        styling: 'bootstrap3'
//                    });
//                } else {
//                    new PNotify({
//                        title: 'Sucesso',
//                        text: '',
//                        type: 'success',
//                        styling: 'bootstrap3'
//                    });
//                    
//                    $('#txtRua').val(result.dados.rua);
//                    $('#txtBairro').val(result.dados.bairro);
//                    $('#txtCidade').val(result.dados.cidade);
//                    $('#txtEstado').val(result.dados.estado);
//                }
//            }
//        });
//    });
    
    salvar = function() {
        var formData = new FormData();
        formData.append('fachada', $('#fileUpload')[0].files[0]);
//        formData.append('cnpj', $('#txtCNPJ').inputmask('unmaskedvalue'));
        formData.append('inscricao', $('#txtInscricao').inputmask('unmaskedvalue'));
//        formData.append('razao', $('#txtRazao').val());
        formData.append('fantasia', $('#txtFantasia').val());
        formData.append('classificacao', $('#txtClassificacao').val());
        formData.append('classificacao1', $('#txtClassificacao1').val());
        formData.append('classificacao2', $('#txtClassificacao2').val());
        
//        formData.append('ativo', $('#chkAtivo').is(':checked'));
        formData.append('email', $('#txtEmail').val());
        formData.append('confEmail', $('#txtConfEmail').val());
        formData.append('senha', $('#txtSenha').val());
        formData.append('confSenha', $('#txtConfSenha').val());
        
        formData.append('nomeContato', $('#txtNomeContato').val());
        formData.append('telefone', $('#txtTelefone').val());
//        formData.append('cep', $('#txtCEP').inputmask('unmaskedvalue'));
//        formData.append('bairro', $('#txtBairro').val());
//        formData.append('rua', $('#txtRua').val());
//        formData.append('numero', $('#txtNumero').val());
//        formData.append('cidade', $('#txtCidade').val());
//        formData.append('estado', $('#txtEstado').val());
//        formData.append('complemento', $('#txtComplemento').val());
        formData.append('website', $('#txtWebSite').val());

        $('#tab_segunda .date, #tab_terca .date, #tab_quarta .date, #tab_quinta .date, #tab_sexta .date, #tab_sabado .date, #tab_domingo .date').each(function(key, item) {
            formData.append($(item).attr('id'), $(item).find('input').val());
        });
        
        $.ajax({
            url: "./functions/updatecontrato.php",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function (xhr) {
                new PNotify({
                    title: 'Enviando',
                    text: 'Processando dados...',
                    type: 'info',
                    styling: 'bootstrap3',
                    buttons: {
                        sticker: false
                    }
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                PNotify.removeAll();
                new PNotify({
                    title: 'Erro',
                    text: textStatus+' - '+errorThrown,
                    type: 'error',
                    styling: 'bootstrap3'
                });
            },
            success: function (data, textStatus, jqXHR) {
                var dados = JSON.parse(data);
                PNotify.removeAll();
                if(dados.erro) {
                    new PNotify({
                        title: 'Erro',
                        text: dados.msg,
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                } else {
                    new PNotify({
                        title: 'Sucesso',
                        text: dados.msg,
                        type: 'success',
                        styling: 'bootstrap3'
                    });
                }
            }
        });
    };
});