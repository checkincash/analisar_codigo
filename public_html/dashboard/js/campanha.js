$(document).ready(function () {        
    $('[data-tooltip="tooltip"').tooltip();
    
    $('.knob-check-in').knob({
        width: "110",
        height: "110",
        displayPrevious: "true",
        fgColor: "#26B99A",
        thickness: "0.2",
        change: function (value) {
            //console.log("change : " + value);
        },
        release: function (value) {
            //console.log(this.$.attr('value'));
//            console.log("release : " + value);
        },
        cancel: function () {
            console.log("cancel : ", this);
        },
        format: function (value) {
            return value + '%';
        },
        draw: function () {

            // "tron" case
            if (this.$.data('skin') == 'tron') {

                this.cursorExt = 0.3;

                var a = this.arc(this.cv) // Arc
                        ,
                        pa // Previous arc
                        , r = 1;

                this.g.lineWidth = this.lineWidth;

                if (this.o.displayPrevious) {
                    pa = this.arc(this.v);
                    this.g.beginPath();
                    this.g.strokeStyle = this.pColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                    this.g.stroke();
                }

                this.g.beginPath();
                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                this.g.stroke();

                this.g.lineWidth = 2;
                this.g.beginPath();
                this.g.strokeStyle = this.o.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                this.g.stroke();

                return false;
            }
        }
    });

    $('.knob-check-in-pin').knob({
        width: "110",
        height: "110",
        displayPrevious: "true",
        fgColor: "#26B99A",
        thickness: "0.2",
        min: 1,
        max: 10,
        change: function (value) {
            //console.log("change : " + value);
        },
        release: function (value) {
            //console.log(this.$.attr('value'));
//            console.log("release : " + value);
        },
        cancel: function () {
            console.log("cancel : ", this);
        },
        format: function (value) {
            return value;
        },
        draw: function () {
            // "tron" case
            if (this.$.data('skin') == 'tron') {

                this.cursorExt = 0.3;

                var a = this.arc(this.cv) // Arc
                        ,
                        pa // Previous arc
                        , r = 1;

                this.g.lineWidth = this.lineWidth;

                if (this.o.displayPrevious) {
                    pa = this.arc(this.v);
                    this.g.beginPath();
                    this.g.strokeStyle = this.pColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                    this.g.stroke();
                }

                this.g.beginPath();
                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                this.g.stroke();

                this.g.lineWidth = 2;
                this.g.beginPath();
                this.g.strokeStyle = this.o.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                this.g.stroke();

                return false;
            }
        }
    });

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

    $('#txtCEP').focusout(function() {
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
                    styling: 'bootstrap3',
                    buttons: {
                        sticker: false
                    }
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
                if(result.erro) {
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

    salvar = function () {
        var formData = new FormData();
        formData.append('imagem', $('#fileUpload')[0].files[0]);
        formData.append('contrato', $('#txtRegContrato').val().trim());
        formData.append('data', moment($('#txtRegData').data("DateTimePicker").date()).format('YYYY-MM-DD'));
        formData.append('titulo', $('#txtRegTitulo').val().trim());
//        formData.append('ativo', $('#chkRegAtivo').is(':checked'));

//        formData.append('destaque', $('#chkDestaque').is(':checked'));

        formData.append('cep', $('#txtCEP').inputmask('unmaskedvalue'));
        formData.append('bairro', $('#txtBairro').val().trim());
        formData.append('rua', $('#txtRua').val().trim());
        formData.append('numero', $('#txtNumero').val().trim());
        formData.append('cidade', $('#txtCidade').val().trim());
        formData.append('estado', $('#txtEstado').val().trim());
        formData.append('complemento', $('#txtComplemento').val().trim());
        formData.append('latitude', $('#txtLatitude').val());
        formData.append('longitude', $('#txtLongitude').val());
        
        formData.append('pseg', $('#txtDescontoSeg').val());
        formData.append('pter', $('#txtDescontoTer').val());
        formData.append('pqua', $('#txtDescontoQua').val());
        formData.append('pqui', $('#txtDescontoQui').val());
        formData.append('psex', $('#txtDescontoSex').val());
        formData.append('psab', $('#txtDescontoSab').val());
        formData.append('pdom', $('#txtDescontoDom').val());
        
        formData.append('pinseg', $('#txtPincashSeg').val());
        formData.append('pinter', $('#txtPincashTer').val());
        formData.append('pinqua', $('#txtPincashQua').val());
        formData.append('pinqui', $('#txtPincashQui').val());
        formData.append('pinsex', $('#txtPincashSex').val());
        formData.append('pinsab', $('#txtPincashSab').val());
        formData.append('pindom', $('#txtPincashDom').val());
        
        formData.append('texto_pub', $('#txtPubTexto').val().trim());

        $.ajax({
            url: "functions/updatecampanha.php",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function (xhr) {
                new PNotify({
                    title: 'Enviando',
                    text: 'Processando dados...',
                    type: 'info',
                    styling: 'bootstrap3'
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
});