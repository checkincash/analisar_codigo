$(document).ready(function () {
    $('#tblSorteioItens').DataTable({
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
    
    //gera o preview da imagem
    function readURL(input, seletorDestino) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(seletorDestino).attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            $(seletorDestino).attr('src', '../images/sem-imagem.png');
        }
    }
    
//-------------------- SORTEIO
    //carrega o preview
    $("#fileUploadSor").change(function () {
        readURL(this, '#filePreviewSor');
    });

    salvaSorteio = function (id) {
        var formData = new FormData();
        formData.append('imagem', $('#fileUploadSor')[0].files[0]);
        formData.append('id', id);
        formData.append('datafim', moment($('#txtSorteioDataFim').data("DateTimePicker").date()).format('YYYY-MM-DD'));
        formData.append('ativo', $('#chkSorteioAtivo').is(':checked'));
        formData.append('texto', $('#txtSorteioTexto').val());
        $.ajax({
            url: "functions/salvasorteio.php",
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
                    
//                    $(location).attr('href', 'sorteio.php?sort='+result.sorteioid);
                }
            }
        });
    };

    
//-------------------- SORTEIO ITEM 
    //carrega o preview do item
    $("#fileUpload").change(function () {
        readURL(this, '#filePreview');
    });
    //carrega o preview catalogo
    $("#fileUploadCat").change(function () {
        readURL(this, '#filePreviewCat');
    });

    novoSorteioItem = function () {
        $('#txtProdutoId').val('');
        $("#fileUpload, #fileUploadCat").val('').change();
        $('#txtProdutoTexto').val('').focus();
        $('#txtProdutoLabel, #txtProdutoTit, #txtProdutoCham').val('');
        $('#txtProdutoPincash').val(0);
    };

    editarSorteioItem = function (itemId) {
        $.ajax({
            url: "functions/buscasorteioitem.php",
            type: 'POST',
            data: {
                id: itemId
            },
            beforeSend: function (xhr) {
                new PNotify({
                    title: 'Buscando produto...',
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

                    $('#txtProdutoId').val(result.produto.pk_mov_sorteio_mv);
                    $("#fileUpload").val('').change();
                    $('#filePreview').prop('src', '../../app/_lib/file/img/imagemsorteio/'+result.produto.fk_cabe_sorteio+'/'+result.produto.foto_premiacao);
                    $('#filePreviewCat').prop('src', '../../app/_lib/file/img/imagemsorteio/'+result.produto.fk_cabe_sorteio+'/'+result.produto.foto_catalogo);
                    $('#txtProdutoTexto').val(result.produto.texto_premiacao).focus();
                    $('#txtProdutoLabel').val(result.produto.label);
                    $('#txtProdutoPincash').val(result.produto.pincash_premio);
                    $('#txtProdutoTit').val(result.produto.titulo);
                    $('#txtProdutoCham').val(result.produto.chamada);
                }
            }
        });
    };
    
    salvaSorteioItem = function (sorteioId) {
        var formData = new FormData();
        formData.append('imagem', $('#fileUpload')[0].files[0]);
        formData.append('imagemcat', $('#fileUploadCat')[0].files[0]);
        formData.append('id', $('#txtProdutoId').val().trim());
        formData.append('sorteioid', sorteioId);
        formData.append('texto', $('#txtProdutoTexto').val().trim());
        formData.append('label', $('#txtProdutoLabel').val().trim());
        formData.append('pincash', $('#txtProdutoPincash').val().trim());
        formData.append('titulo', $('#txtProdutoTit').val().trim());
        formData.append('chamada', $('#txtProdutoCham').val().trim());
        $.ajax({
            url: "functions/salvasorteioitem.php",
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
    
    excluirSorteioItem = function (itemId) {
        $.ajax({
            url: "functions/excluisorteioitem.php",
            type: 'POST',
            data: {
                id: itemId
            },
            beforeSend: function (xhr) {
                new PNotify({
                    title: 'Buscando produto...',
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