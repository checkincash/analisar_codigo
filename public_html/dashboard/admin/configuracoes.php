<?php
session_start();

if (empty($_SESSION['dash_adm'])) {
    header('location: login.php');
}
$admin = $_SESSION['dash_adm'];

if ($admin->nivel != 1) {
    header('location: ./');
}

include_once '../model/apPincashMoedaDAO.php';
$pincashMoedaDAO = new apPincashMoedaDAO();
$pacotes = $pincashMoedaDAO->select('*', 'pacote >= 1 ORDER BY valor_pacote')->fetchAll(PDO::FETCH_OBJ);
include_once '../model/apConfiguracaoDAO.php';
$configuracaoDAO = new apConfiguracaoDAO();
$config = $configuracaoDAO->select('*', 'id = 1')->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHECK-INcash | Configurações</title>
        <link rel="shortcut icon" href="../images/logo.png"/>

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
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
        <!-- iCheck -->
        <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
        <link href="../build/css/checkincash.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <!-- menu lateral -->
                <? include_once 'template/menu-lateral.php'; ?>

                <!-- top navigation -->
                <? include_once 'template/menu-superior.php'; ?>

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>CONFIGURAÇÕES DO SISTEMA</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#tab_geral" id="geral-tab" role="tab" data-toggle="tab" aria-expanded="true">Geral</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a href="#tab_pincash" role="tab" id="pincash-tab" data-toggle="tab" aria-expanded="false">PinCash</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a href="#tab_email" role="tab" id="email-tab" data-toggle="tab" aria-expanded="false">Email</a>
                                            </li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab_geral" aria-labelledby="geral-tab">
                                                <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                                    <label class="control-label" for="txtCred">Credenciamento R$</label>
                                                    <input type="text" id="txtValCred" class="form-control mask-decimal" value="<?= $config->valor_credenciamento; ?>">
                                                </div>
                                                <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                                    <label class="control-label" for="txtMens">Mensalidade R$</label>
                                                    <input type="text" id="txtValMens" class="form-control mask-decimal" value="<?= $config->valor_mensalidade; ?>">
                                                </div>
                                                <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                                    <label class="control-label" for="txtMensVenc">Dia Mensalidade</label>
                                                    <input type="number" min="1" max="31" id="txtDiaMens" class="form-control" value="<?= $config->dia_mensalidade; ?>">
                                                </div>
                                                <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                                    <label class="control-label" for="txtMensVenc">Limite Upload Imagem (MB)</label>
                                                    <input type="text" id="txtLimitUplaod" placeholder="Ex: 1 - 1.50 - 0.50" class="form-control mask-decimal" value="<?= $config->limite_upload; ?>">
                                                </div>

                                                <div class="col-xs-12">
                                                    <button type="button" class="btn btn-success pull-right" onclick="salvarGeral();">
                                                        <i class="fa fa-check"></i> Salvar
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div role="tabpanel" class="tab-pane fade" id="tab_pincash" aria-labelledby="geral-tab">
                                                <div class="form-inline form-group">
                                                    <input type="hidden" id="txtPacoteId" value="">
                                                    <div class="form-group">
                                                        <label for="txtPacote">Pacote</label>
                                                        <input type="text" id="txtPacote" class="form-control mask-integer">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="txtMens">Valor R$</label>
                                                        <input type="text" id="txtPacoteValor" class="form-control mask-decimal">
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="chkPacoteAtivo" type="checkbox" class="flat" <? ?>>
                                                        <label class="control-label" for="chkPacoteAtivo">Ativo</label>
                                                    </div>
                                                    <button type="button" class="btn btn-success pull-right" onclick="salvarPacote();">
                                                        <i class="fa fa-check"></i> Salvar Pacote
                                                    </button>
                                                </div>
                                                <hr/>
                                                <div class="form-group">
                                                    <table id="tblPincash" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>PACOTE</th>
                                                                <th>VALOR R$</th>
                                                                <th>ATIVO</th>
                                                                <th>CADASTRO</th>
                                                                <th>OPÇÕES</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?  foreach($pacotes as $pacote) { ?>
                                                            <tr>
                                                                <td><?= number_format($pacote->pacote, 0, ',', '.'); ?></td>
                                                                <td><?= number_format($pacote->valor_pacote, 2, ',', '.'); ?></td>
                                                                <td><?= $pacote->ativo == true ? 'Sim' : 'Não'; ?></td>
                                                                <td><?= $pacote->data_inclusao; ?></td>
                                                                <td class="text-center">
                                                                <?  if($pacote->ativo) { ?>
                                                                    <button type="button" class="btn btn-danger btn-xs" data-tooltip="tooltip" data-container="body" title="Inativar" onclick="editarPacote(<?= $pacote->pk_pincash_moeda; ?>, false, this);">
                                                                        <i class="fa fa-thumbs-down"></i>
                                                                    </button>
                                                                <?  } else { ?>
                                                                    <button type="button" class="btn btn-success btn-xs" data-tooltip="tooltip" data-container="body" title="Ativar" onclick="editarPacote(<?= $pacote->pk_pincash_moeda; ?>, true, this);">
                                                                        <i class="fa fa-thumbs-up"></i>
                                                                    </button>
                                                                <?  } ?>
                                                                </td>
                                                            </tr>
                                                        <?  } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            
                                            <div role="tabpanel" class="tab-pane fade" id="tab_email" aria-labelledby="email-tab">
                                                <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                                    <label class="control-label" for="txtCred">Alerta Pincash 1</label>
                                                    <input id="txtEmailPincash1" type="text" class="form-control mask-integer" value="<?= $config->alerta_pincash1; ?>">
                                                </div>
                                                <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                                    <label class="control-label" for="txtMens">Alerta Pincash 2</label>
                                                    <input id="txtEmailPincash2" type="text" class="form-control mask-integer" value="<?= $config->alerta_pincash2; ?>">
                                                </div>
                                                <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                                    <label class="control-label" for="txtMensVenc">Alerta Pincash 3</label>
                                                    <input id="txtEmailPincash3" type="text" class="form-control mask-integer" value="<?= $config->alerta_pincash3; ?>">
                                                </div>
                                                <div class="form-group col-xs-12">
                                                    <label class="control-label" for="txtMensVenc">Mensagem Alerta</label><br/>
                                                    <span>Escreva {lojista} para colocar o nome fantasia do contrato, e {saldo} para colocar o saldo.</span>
                                                    <textarea id="txtMsgPincash" class="form-control" placeholder="INSIRA O TEXTO" rows="5"><?= $config->alerta_pincash_msg; ?></textarea>
                                                </div>

                                                <div class="col-xs-12">
                                                    <button type="button" class="btn btn-success pull-right" onclick="salvarEmail();">
                                                        <i class="fa fa-check"></i> Salvar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- jQuery Sparklines -->
        <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- Flot -->
        <script src="../vendors/Flot/jquery.flot.js"></script>
        <script src="../vendors/Flot/jquery.flot.pie.js"></script>
        <script src="../vendors/Flot/jquery.flot.time.js"></script>
        <script src="../vendors/Flot/jquery.flot.stack.js"></script>
        <script src="../vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="../vendors/DateJS/build/date.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../vendors/moment/min/moment.min.js"></script>
        <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
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
        <!-- iCheck -->
        <script src="../vendors/iCheck/icheck.min.js"></script>
        <!-- jquery.inputmask -->
        <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
        <script src="../js/padrao.js"></script>
        <script src="js/configuracoes.js"></script>
    </body>
</html>