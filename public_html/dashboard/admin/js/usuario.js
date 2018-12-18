$(document).ready(function () {
    $('[data-tooltip="tooltip"]').tooltip();
    
    var chkAtivo = new Switchery(document.getElementById('chkAtivo'), {color: '#26B99A'});
    
    $('#tblUsuarios').DataTable({
        language: {
            decimal: ",",
            emptyTable: "Não há dados disponíveis na tabela",
            info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
            infoEmpty: "Mostrando 0 a 0 de 0 registros",
            infoFiltered: "(filtrado de um total de _MAX_ registros)",
            infoPostFix: "",
            thousands: ".",
            lengthMenu: "Mostrar _MENU_ itens",
            loadingRecords: "Carregando...",
            processing:     "Processando...",
            search: 'Pesquisar:',
            zeroRecords: "Nenhum registro encontrado",
            paginate: {
                first: "Primeira",
                last: "Última",
                previous: "Anterior",
                next: 'Próxima'
            },
            aria: {
                sortAscending:  ": ative para ordenar a coluna de forma ascendente",
                sortDescending: ": ative para ordenar a coluna de forma descendente"
            }            
        }
    });
    
    novo = function() {
        $('#txtId').val('');
        $('#txtUsuario').val('').focus();
        $('#txtNivel').val(0);
        $('#chkAtivo').prop('checked', false);
        chkAtivo.handleOnchange($('#chkAtivo').prop('checked'));
    };
    
    editar = function(id) {
        var formData = new FormData();
        formData.append('id', id);
        
        $.ajax({
            url: "functions/buscausuario.php",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function (xhr) {
                new PNotify({
                     title: 'Procurando',
                    text: 'Buscando dados...',
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
                    
                    $('#txtId').val(dados.usuario.id);
                    $('#txtUsuario').val(dados.usuario.usuario).focus();
                    $('#txtNivel').val(dados.usuario.nivel);
                    $('#chkAtivo').prop('checked', (dados.usuario.ativo == 1 ? true : false));
                    chkAtivo.handleOnchange($('#chkAtivo').prop('checked'));
                }
                
                
            }
        });
    };
    
    salvar = function () {
        var formData = new FormData();
        formData.append('id', $('#txtId').val());
        formData.append('usuario', $('#txtUsuario').val().trim());
        formData.append('senha', $('#txtSenha').val().trim());
        formData.append('ativo', $('#chkAtivo').is(':checked'));
        formData.append('nivel', $('#txtNivel').val());

        $.ajax({
            url: "functions/salvausuario.php",
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
                    
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }
            }
        });
    };
});