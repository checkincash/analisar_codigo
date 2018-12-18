$(document).ready(function () {
    $('[data-tooltip="tooltip"]').tooltip();
    
    $("#txtCNPJ").inputmask({mask: "(999.999.999-99)|(99.999.999/9999-99)", clearIncomplete: true});
    $("#txtInscricao").inputmask({mask: "999999999999", clearIncomplete: true});
    $("#txtTelefone").inputmask({mask: "(99) 9{8,9}", clearIncomplete: true});
    $("#txtCEP").inputmask({mask: "99999-999", clearIncomplete: true});
    $("#txtNumero").inputmask({mask: "9{*}", clearIncomplete: true});
    $("#txtEstado").inputmask({mask: "AA", clearIncomplete: true});
    
    $("#txtLatitude").inputmask({
        mask: "(9{1,2}.9999999)|(-9{1,2}.9999999)",
        clearIncomplete: true
    });
    $("#txtLatitude").on('input', function() {
        if(parseFloat($(this).val()) > 90) {
            $(this).inputmask('setvalue', '90.0000000');
        }
        if(parseFloat($(this).val()) < -90) {
            $(this).inputmask('setvalue', '-90.0000000');
        }
    });
    $("#txtLongitude").inputmask({
        mask: "(9{1,3}.9999999)|(-9{1,3}.9999999)",
        clearIncomplete: true
    });
    $("#txtLongitude").on('input', function() {
        if(parseFloat($(this).val()) > 180) {
            $(this).inputmask('setvalue', '180.0000000');
        }
        if(parseFloat($(this).val()) < -180) {
            $(this).inputmask('setvalue', '-180.0000000');
        }
    });
    
    $('#tab_segunda .date, #tab_terca .date, #tab_quarta .date, #tab_quinta .date, #tab_sexta .date, #tab_sabado .date, #tab_domingo .date').datetimepicker({
        format: 'HH:mm',
        ignoreReadonly: true,
        allowInputToggle: true
    }).find('input').prop('readonly', true).css('background-color', 'white');

    $('#frmCredenciamento').smartWizard({
        // Properties
        selected: 0, // Selected Step, 0 = first step   
        keyNavigation: false, // Enable/Disable key navigation(left and right keys are used if enabled)
        enableAllSteps: false, // Enable/Disable all steps on first load
        transitionEffect: 'fade', // Effect on navigation, none/fade/slide/slideleft
        contentURL: null, // specifying content url enables ajax content loading
        contentURLData: null, // override ajax query parameters
        contentCache: true, // cache step contents, if false content is fetched always from ajax url
        cycleSteps: false, // cycle step navigation
        enableFinishButton: false, // makes finish button enabled always
        hideButtonsOnDisabled: false, // when the previous/next/finish buttons are disabled, hide them instead
        errorSteps: [], // array of step numbers to highlighting as error steps
        labelNext: 'Próximo <i class="fa fa-chevron-right"></i>', // label for Next button
        labelPrevious: '<i class="fa fa-chevron-left"></i> Anterior', // label for Previous button
        labelFinish: '<i class="fa fa-check"></i> Confirmar e Pagar', // label for Finish button        
        noForwardJumping: false,
        ajaxType: 'POST',
        // Events
        onLeaveStep: null, // triggers when leaving a step
        onShowStep: null, // triggers when showing a step
        onFinish: function () {
            salvar();
        }, // triggers when Finish button is clicked  
        buttonOrder: ['prev', 'next', 'finish']  // button order, to hide a button remove it from the list
    });
    $('.buttonPrevious').addClass('btn btn-default');
    $('.buttonNext').addClass('btn btn-primary');
    $('.buttonFinish').addClass('btn btn-success');
    $('.buttonFinish').attr('data-tooltip', 'tooltip').attr('data-container', 'body').prop('title', 'Pagar com Pagseguro').tooltip();

    //gera o preview da imagem
    function readURL(input, seletorDestino) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(seletorDestino).css('background-image', 'url(' + e.target.result + ')');
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

    $('#txtCEP').focusout(function () {
        if($(this).val() == "") {
            return;
        }
        $.ajax({
            url: "functions/buscarCep.php",
            type: 'POST',
            data: {
                cep: $(this).val()
            },
            beforeSend: function (xhr) {
                new PNotify({
                    title: 'Procurando cep...',
                    text: '',
                    type: 'info',
                    styling: 'bootstrap3'
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                PNotify.removeAll();
                new PNotify({
                    title: textStatus,
                    text: errorThrown,
                    type: 'error',
                    styling: 'bootstrap3'
                });
            },
            success: function (data, textStatus, jqXHR) {
                var result = JSON.parse(data);
                PNotify.removeAll();
                if (result.erro) {
                    new PNotify({
                        title: 'Erro',
                        text: '',
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                } else {
                    new PNotify({
                        title: 'Sucesso',
                        text: '',
                        type: 'success',
                        styling: 'bootstrap3'
                    });

                    $('#txtRua').val(result.dados.rua);
                    $('#txtBairro').val(result.dados.bairro);
                    $('#txtCidade').val(result.dados.cidade);
                    $('#txtEstado').val(result.dados.estado);
                }
            }
        });
    });
    
    buscaGeolocalizacao = function() {
        var formData = new FormData();
        formData.append('bairro', $('#txtBairro').val());
        formData.append('rua', $('#txtRua').val());
        formData.append('numero', $('#txtNumero').val());
        formData.append('cidade', $('#txtCidade').val());
        formData.append('estado', $('#txtEstado').val());
        
        $.ajax({
            url: "functions/buscageolocalizacao.php",
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
                    text: textStatus + ' - ' + errorThrown,
                    type: 'error',
                    styling: 'bootstrap3'
                });
            },
            success: function (data, textStatus, jqXHR) {
                var dados = JSON.parse(data);
                PNotify.removeAll();
                if (dados.erro) {
                    new PNotify({
                        title: 'Erro',
                        text: dados.msg,
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                } else {
                    if(dados.latitude === '' || dados.longitude === '') {
                        new PNotify({
                            title: 'Erro',
                            text: 'Latitude e Longitude não encontrados.',
                            type: 'error',
                            styling: 'bootstrap3'
                        });
                        $('#txtLatitude').inputmask('setvalue', '');
                        $('#txtLongitude').inputmask('setvalue', '');
                    } else {
                        $('#txtLatitude').inputmask('setvalue', dados.latitude);
                        $('#txtLongitude').inputmask('setvalue', dados.longitude);
                    }
                }
            }
        });
    };
    
    salvar = function() {
        var formData = new FormData();
        formData.append('fachada', $('#fileUpload')[0].files[0]);
        formData.append('cnpj', $('#txtCNPJ').inputmask('unmaskedvalue'));
        formData.append('inscricao', $('#txtInscricao').val());
        formData.append('razao', $('#txtRazao').val());
        formData.append('fantasia', $('#txtFantasia').val());
        formData.append('classificacao', $('#txtClassificacao').val());
        formData.append('classificacao1', $('#txtClassificacao1').val());
        formData.append('classificacao2', $('#txtClassificacao2').val());
        
        formData.append('email', $('#txtEmail').val());
        formData.append('confEmail', $('#txtConfEmail').val());
        formData.append('senha', $('#txtSenha').val());
        formData.append('confSenha', $('#txtConfSenha').val());
        
        formData.append('nomeContato', $('#txtNomeContato').val());
        formData.append('telefone', $('#txtTelefone').inputmask('unmaskedvalue'));
        formData.append('cep', $('#txtCEP').inputmask('unmaskedvalue'));
        formData.append('bairro', $('#txtBairro').val());
        formData.append('rua', $('#txtRua').val());
        formData.append('numero', $('#txtNumero').val());
        formData.append('cidade', $('#txtCidade').val());
        formData.append('estado', $('#txtEstado').val());
        formData.append('complemento', $('#txtComplemento').val());
        formData.append('latitude', $('#txtLatitude').val());
        formData.append('longitude', $('#txtLongitude').val());
        formData.append('website', $('#txtWebSite').val());

        $('#tab_segunda .date, #tab_terca .date, #tab_quarta .date, #tab_quinta .date, #tab_sexta .date, #tab_sabado .date, #tab_domingo .date').each(function(key, item) {
            formData.append($(item).attr('id'), $(item).find('input').val());
        });
        
        $.ajax({
            url: "functions/credenciar.php",
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
                    
                    setTimeout(function() {
                        $(location).attr('href', dados.urlpagseguro);
                    }, 3000);
                }
            }
        });
    };
});