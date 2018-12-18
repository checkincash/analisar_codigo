$(document).ready(function () {
    $('[data-tooltip="tooltip"]').tooltip();
    
    $('#tblContratos, #tblFinanceiro').DataTable({
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
    
    credenciar = function(credFinId) {
        $.ajax({
            url: "functions/credenciarcontrato.php",
            type: 'POST',
            data: {
                cred_fin_id: credFinId
            },
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
                var type = '';
                if(dados.erro) {
                    type = 'error';
                } else {
                    type = 'success';
                    
                    setTimeout(function() {
                        $(location).attr('href', './');
                    }, 1000);
                }
                
                PNotify.removeAll();
                new PNotify({
                    text: dados.msg,
                    type: type,
                    styling: 'bootstrap3'
                });
            }
        });
    };
    
    estornar = function(credFinId) {
        $.ajax({
            url: "functions/estornarcredenciamento.php",
            type: 'POST',
            data: {
                cred_fin_id: credFinId
            },
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
                var type = '';
                if(dados.erro) {
                    type = 'error';
                } else {
                    type = 'success';
                    
                    setTimeout(function() {
                        $(location).attr('href', './');
                    }, 1000);
                }
                
                PNotify.removeAll();
                new PNotify({
                    text: dados.msg,
                    type: type,
                    styling: 'bootstrap3'
                });
            }
        });
    };
});