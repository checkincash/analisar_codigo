$(document).ready(function() {
    $('[data-tooltip="tooltip"]').tooltip();
    
    $('.mask-decimal').inputmask({
        mask: "9{1,9}.99",
        positionCaretOnClick: "radixFocus",
        radixPoint: ",",
        _radixDance: true,
        numericInput: true,
        placeholder: "0",
        definitions: {
            "0": {
                validator: "[0-9\uFF11-\uFF19]"
            }
        }
   });
   $('.mask-integer').inputmask({
        mask: "9{1,9}",
        positionCaretOnClick: "radixFocus",
        radixPoint: ",",
        _radixDance: true,
        numericInput: true,
        placeholder: "0",
        definitions: {
            "0": {
                validator: "[0-9\uFF11-\uFF19]"
            }
        }
   });
    
    $('#tblPincash').DataTable({
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
    
    editarPacote = function(id, ativo, button) {
        var formData = new FormData();
        formData.append('id', id);
        formData.append('ativo', ativo);
        
        $.ajax({
            url: "functions/editapincashmoeda.php",
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
                    
                    $('[data-tooltip="tooltip"]').tooltip('destroy');
                    if(ativo) {
                        $(button).parent().html('<button type="button" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-container="body" title="Inativar" onclick="editarPacote('+id+', false, this);"><i class="fa fa-thumbs-down"></i></button>');
                    } else {
                        $(button).parent().html('<button type="button" class="btn btn-success btn-xs" data-tooltip="tooltip" data-container="body" title="Ativar" onclick="editarPacote('+id+', true, this);"><i class="fa fa-thumbs-up"></i></button>');
                    }
                    $('[data-tooltip="tooltip"]').tooltip();
                }                
            }
        });
    };
    
    salvarPacote = function () {
        var formData = new FormData();
        formData.append('id', $('#txtPacoteId').val());
        formData.append('pacote', $('#txtPacote').val().trim());
        formData.append('valor', $('#txtPacoteValor').val().trim());
        formData.append('ativo', $('#chkPacoteAtivo').is(':checked'));

        $.ajax({
            url: "functions/salvapincashmoeda.php",
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
    
    salvarGeral = function () {        
        var formData = new FormData();        
        formData.append('credenciamento', $('#txtValCred').val());
        formData.append('mensalidade', $('#txtValMens').val());
        formData.append('dia_mensalidade', $('#txtDiaMens').val());
        formData.append('limite_upload', $('#txtLimitUplaod').val());

        $.ajax({
            url: "functions/salvaconfgeral.php",
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
    
    salvarEmail = function () {        
        var formData = new FormData();        
        formData.append('alerta_pincash1', $('#txtEmailPincash1').val());
        formData.append('alerta_pincash2', $('#txtEmailPincash2').val());
        formData.append('alerta_pincash3', $('#txtEmailPincash3').val());
        formData.append('alerta_pincash_msg', $('#txtMsgPincash').val());

        $.ajax({
            url: "functions/salvaconfemail.php",
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
});