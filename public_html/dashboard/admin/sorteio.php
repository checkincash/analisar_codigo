<?php
session_start();
if (empty($_SESSION['dash_adm'])) {
    return header('location: ../login.php');
}
$admin = $_SESSION['dash_adm'];

//se admin não for de nivel 1
//verifica se o contrato acessado foi cadastrado por ele
if ($admin->nivel != '1') {
    if ($admin->id != $contrato->id_admin) {
        return header('location: ./');
    }
}

$sort = isset($_GET['sort']) ? $_GET['sort'] : 0;

include_once '../model/apPincashSorteioDAO.php';
$pincashSorteioDAO = new apPincashSorteioDAO();

if (!empty($sort)) {
    $sorteio = $pincashSorteioDAO->select('*', "pk_sorteio_cabe_pincash = $sort")->fetch(PDO::FETCH_OBJ);
    if (!empty($sorteio)) {
        include_once '../model/apPincashSorteioMovDAO.php';
        $pincashSorteioMovDAO = new apPincashSorteioMovDAO();
        $sorteio->itens = $pincashSorteioMovDAO->select('*', "fk_cabe_sorteio = $sort")->fetchAll(PDO::FETCH_OBJ);

        $srcImgSorteio = "../../app/_lib/file/img/imagemsorteio/$sorteio->pk_sorteio_cabe_pincash/$sorteio->foto_campanha";
    } else {
        return header('location: sorteios.php');
    }
} else {
    $sorteios = $pincashSorteioDAO->select('*', "ativo is true")->fetchAll(PDO::FETCH_OBJ);
    if (!empty($sorteios)) {
        return header('location: sorteios.php');
    }

    $novoSorteio = true;
    $sorteio = new stdClass();
    $sorteio->pk_sorteio_cabe_pincash = 0;
    $sorteio->datafim = date('Y-m-d');
    $sorteio->ativo = false;
    $sorteio->texto_campanha = '';
    $sorteio->itens = array();

    $srcImgSorteio = "../images/sem-imagem.png";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHECK-INcash | Detalhe Sorteio</title>
        <link rel="shortcut icon" href="../images/logo.png" />

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- PNotify -->
        <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
        <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
        <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
        <!-- Datatables -->
        <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap-datetimepicker -->
        <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
        <link href="../build/css/checkincash.css" rel="stylesheet">
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <!-- menu lateral -->
                <? include_once './template/menu-lateral.php'; ?>

                <!-- top navigation -->
                <? include_once './template/menu-superior.php'; ?>

                <!-- page content -->
                <div class="right_col" role="main">                    
                    <div class="col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>SORTEIO</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="col-xs-12 col-sm-4 col-lg-3 form-group text-center">
                                    <div class="form-group">
                                        <img id="filePreviewSor" src="<?= $srcImgSorteio; ?>" style="max-height: 350px; max-width: 100%;">
                                    </div>
                                    <label class="btn btn-primary btn-upload" for="fileUploadSor" data-toggle="tooltip" title="Imagem do Sorteio">
                                        <input type="file" class="sr-only" id="fileUploadSor" name="fileSor" accept="image/*">
                                        <span class="docs-tooltip">
                                            <span class="fa fa-upload"></span>
                                        </span>
                                    </label>
                                </div>

                                <div class="col-xs-12 col-sm-8 col-lg-9 form-group text-center">
                                    <div class="col-xs-12 col-sm-4 col-md-4 form-group date">
                                        <input id="txtSorteioDataFim" type="text" class="form-control" readonly="readonly" placeholder="DATA TERMINO"/>
                                    </div>
                                    <div class="col-xs-12 col-sm-2 form-group">
                                        <input id="chkSorteioAtivo" type="checkbox" class="js-switch" <?= $sorteio->ativo ? 'checked="checked"' : ''; ?>> Ativo
                                    </div>
                                    <div class="col-xs-12 form-group">
                                        <textarea id="txtSorteioTexto" class="form-control char-limite" maxlength="210"  placeholder="TEXTO SORTEIO" rows="3"><?= $sorteio->texto_campanha; ?></textarea>
                                        <span class="pull-right spnChar"></span>
                                    </div>
                                    <div class="col-xs-12 text-right">
                                        <button type="button" class="btn btn-success" onclick="salvaSorteio(<?= $sorteio->pk_sorteio_cabe_pincash; ?>);">
                                            <i class="fa fa-check"></i> Salvar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? if (empty($novoSorteio)) { ?>
                        <div class="col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>DADOS PRODUTO</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="col-xs-12 col-sm-4 col-md-3 form-group text-center">
                                        <div class="form-group">
                                            <img id="filePreview" src="../images/sem-imagem.png" style="max-height: 350px; max-width: 100%;">
                                        </div>
                                        <label class="btn btn-primary btn-upload" for="fileUpload" data-toggle="tooltip" title="Imagem do Produto">
                                            <input type="file" class="sr-only" id="fileUpload" name="file" accept="image/*">
                                            <span class="docs-tooltip">
                                                <span class="fa fa-upload"></span>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="col-xs-12 col-sm-8 col-md-9 form-group">
                                        <input id="txtProdutoId" type="hidden">
                                        <textarea id="txtProdutoTexto" rows="3" class="form-control char-limite" maxlength="210" placeholder="DESCRIÇÃO"></textarea>
                                        <span class="pull-right spnChar"></span>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 form-group">
                                        <input id="txtProdutoLabel" type="text" class="form-control" placeholder="LABEL" maxlength="30">
                                    </div>
                                    <div class="col-xs-12 col-sm-3 form-group">
                                        <input id="txtProdutoPincash" type="text" class="form-control mask-integer" placeholder="PINCASH PRÊMIO">
                                    </div>
                                    
                                    <div class="col-xs-12 form-group">
                                        <h4>CATALOGO</h4>
                                        <hr style="margin: 0; border-color: #ddd;"/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-3 form-group text-center">
                                        <div class="form-group">
                                            <img id="filePreviewCat" src="../images/sem-imagem.png" style="max-height: 350px; max-width: 100%;">
                                        </div>
                                        <label class="btn btn-primary btn-upload" for="fileUploadCat" data-toggle="tooltip" title="Imagem do Catalogo">
                                            <input type="file" class="sr-only" id="fileUploadCat" name="fileCat" accept="image/*">
                                            <span class="docs-tooltip">
                                                <span class="fa fa-upload"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-xs-12 col-sm-8 col-md-9 form-group">
                                        <input id="txtProdutoTit" type="text" class="form-control" placeholder="TÍTULO" maxlength="30">
                                    </div>
                                    <div class="col-xs-12 col-sm-8 col-md-9 form-group">
                                        <textarea id="txtProdutoCham" rows="3" class="form-control char-limite" maxlength="210" placeholder="CHAMADA"></textarea>
                                        <span class="pull-right spnChar"></span>
                                    </div>
                                    
                                    <div class="col-xs-12 text-right">
                                        <button type="button" class="btn btn-primary" onclick="novoSorteioItem();">
                                            <i class="fa fa-plus"></i> Novo
                                        </button>
                                        <button type="button" class="btn btn-success" onclick="salvaSorteioItem(<?= $sorteio->pk_sorteio_cabe_pincash; ?>);">
                                            <i class="fa fa-check"></i> Salvar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>PRODUTOS</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="col-xs-12">
                                        <table id="tblSorteioItens" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>IMAGEM</th>
                                                    <th>LABEL</th>
                                                    <th>ITEM</th>
                                                    <th>PINCASH PRÊMIO</th>
                                                    <th>OPÇÕES</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <? foreach ($sorteio->itens as $item) { ?>
                                                    <tr>
                                                        <td style="max-width: 100px;"><img src="<?= "../../app/_lib/file/img/imagemsorteio/$item->fk_cabe_sorteio/$item->foto_premiacao"; ?>" width="100%"></td>
                                                        <td><?= $item->label; ?></td>
                                                        <td><?= $item->texto_premiacao; ?></td>
                                                        <td class="text-center"><?= $item->pincash_premio; ?></td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-primary btn-xs" onclick="editarSorteioItem(<?= $item->pk_mov_sorteio_mv; ?>);">
                                                                <i class="fa fa-pencil"></i> Editar
                                                            </button>
                                                            <button type="button" class="btn btn-danger btn-xs" onclick="excluirSorteioItem(<?= $item->pk_mov_sorteio_mv; ?>);">
                                                                <i class="fa fa-close"></i> Remover
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <? } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- PNotify -->
        <script src="../vendors/pnotify/dist/pnotify.js"></script>
        <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
        <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>
        <!-- Datatables -->
        <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="../vendors/jszip/dist/jszip.min.js"></script>
        <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
        <!-- moment -->
        <script src="../vendors/moment/min/moment.min.js"></script>
        <script src="../vendors/moment/min/moment-with-locales.min.js"></script> 
        <!-- bootstrap-datetimepicker -->    
        <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <!-- Switchery -->
        <script src="../vendors/switchery/dist/switchery.min.js"></script>
        <!-- jquery.inputmask -->
        <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
        <script src="../js/padrao.js"></script>
        <script src="js/sorteio.js"></script>

        <script>
                                                        $(document).ready(function () {
                                                            $('#txtSorteioDataFim').datetimepicker({
                                                                ignoreReadonly: true,
                                                                allowInputToggle: true,
                                                                format: 'DD/MM/YYYY',
                                                                locale: 'pt-br'
                                                            });
                                                            $('#txtSorteioDataFim').data("DateTimePicker").date(new Date('<?= "$sorteio->datafim  00:00:00"; ?>'));
                                                        });
        </script>
    </body>
</html>