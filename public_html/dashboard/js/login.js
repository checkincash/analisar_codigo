$(document).ready(function() {    
    $(":input").inputmask();
    
    $('#txtCNPJ').keypress(function(e) {
        if(e.which == 13) {
            $('#txtSenha').select().focus();
        }
    });
    $('#txtUsuario').keypress(function(e) {
        if(e.which == 13) {
            $('#txtAdmSenha').select().focus();
        }
    });
    
    $('#txtSenha').keypress(function(e) {
        if(e.which == 13) {
            login(false);
        }
    });
    $('#txtAdmSenha').keypress(function(e) {
        if(e.which == 13) {
            login(true);
        }
    });
    
    login = function(admin) {
        var campo = $('#txtCNPJ').inputmask('unmaskedvalue');
        var senha = $('#txtSenha').val().trim();
        
        if(admin) {
            campo = $('#txtUsuario').val().trim();
            senha = $('#txtAdmSenha').val().trim();
        }
        
        $.ajax({
            url: "functions/autenticacao.php",
            type: 'POST',
            data: {
                campo: campo,
                senha: senha,
                admin: admin
            },
            beforeSend: function (xhr) {
                new PNotify({
                    title: 'AGUARDE',
                    text: 'Validando acesso...',
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
                var dados = JSON.parse(data);
                PNotify.removeAll();
                if(dados.erro){
                    new PNotify({
                        title: 'ERRO',
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
                        $(location).attr('href', dados.url);
                    }, 2000);
                }
            }
        });
    };
});