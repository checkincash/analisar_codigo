$(document).ready(function () {
    $('#tblSorteios').DataTable({
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
            processing: "Processando...",
            search: 'Pesquisar:',
            zeroRecords: "Nenhum registro encontrado",
            paginate: {
                first: "Primeira",
                last: "Última",
                previous: "Anterior",
                next: 'Próxima'
            },
            aria: {
                sortAscending: ": ative para ordenar a coluna de forma ascendente",
                sortDescending: ": ative para ordenar a coluna de forma descendente"
            }
        }
    });
    
    updateStatusSorteio = function (id, status) {
        var formData = new FormData();
        formData.append('id', id);
        formData.append('status', status);
        $.ajax({
            url: "functions/updatestatussorteio.php",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function (xhr) {
                new PNotify({
                    title: 'Salvando Sorteio...',
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
                        text: result.msg,
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                } else {
                    new PNotify({
                        title: 'Sucesso',
                        text: result.msg,
                        type: 'success',
                        styling: 'bootstrap3'
                    });
                    
                    setTimeout('location.reload()', 1000);
                }
            }
        });
    };
});