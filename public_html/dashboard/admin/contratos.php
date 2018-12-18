<?php
session_start();
if (empty($_SESSION['dash_adm'])) {
    header('location: ../login.php');
}
$admin = $_SESSION['dash_adm'];

include_once '../model/apContratoDAO.php';
$contratoDAO = new apContratoDAO();
if($admin->nivel == '1') {
    $contratos2 = $contratoDAO->select('*', "razao like '%%'")->fetchAll(PDO::FETCH_OBJ);
} else {
    $contratos2 = $contratoDAO->select('*', "razao like '%%' AND id_admin = $admin->id")->fetchAll(PDO::FETCH_OBJ);
}
$contratos = $contratoDAO->getInfo($contratos2);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHECK-INcash | Administrador</title>
        <link rel="shortcut icon" href="../images/logo.png" />

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Datatables -->
        <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
        <!-- PNotify -->
        <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
        <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
        <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>CONTRATOS</h2>
                                <a href="contrato.php" class="btn btn-primary btn-xs" style="margin: 3px 0 0 15px;">
                                    <i class="fa fa-plus"></i> Novo
                                </a>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <table id="tblContratos" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>CPF/CNPJ</th>
                                            <th>FANTASIA</th>
                                            <th>ATIVO</th>
                                            <th>CONSULTOR</th>
                                            <th>CREDENCIAMENTO</th>
                                        <?  if($admin->nivel == 1) { ?>
                                            <th>OPÇÕES</th>
                                        <?  } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?  foreach($contratos as $contrato) { ?>
                                        <tr>
                                            <!--<td><?= date('Y-m-d', strtotime($contrato->datacadastro)); ?></td>-->
                                            <td class="contrato-cnpj">
                                                <a href="contrato.php?doc=<?= $contrato->cnpj; ?>"><?= $contrato->cnpj; ?></a>
                                            </td>
                                            <td>
                                                <span style="display: none;"><?= $contrato->razao; ?></span>
                                                <span><?= $contrato->fantasia; ?></span>
                                            </td>
                                            <!--<td><?= "$contrato->cidade - $contrato->estado"; ?></td>-->
                                            <td><?= $contrato->ativo == 1 ? 'Sim' : 'Não'; ?></td>
                                            <td><?= $contrato->admin; ?></td>
                                            <td class="text-center">
                                            <?  if($contrato->cred_fin->status == 1) { ?>
                                                <i class="fa fa-check" style="font-size: 13pt;" data-tooltip="tooltip" data-container="body" title="Credenciado!"></i>
                                            <?  } else { ?>
                                                <form method="POST" target="pagseguro" action="https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html">
                                                    <input name="receiverEmail" type="hidden" value="checkin.tecnologia@gmail.com">
                                                    <input name="currency" type="hidden" value="BRL">
                                                    <input name="itemId1" type="hidden" value="0001">  
                                                    <input name="itemDescription1" type="hidden" value="Credenciamento CHECKINcash">  
                                                    <input name="itemAmount1" type="hidden" value="<?= $contrato->cred_fin->valor; ?>">
                                                    <input name="itemQuantity1" type="hidden" value="1">
                                                    <input name="reference" type="hidden" value="<?= $contrato->cred_fin->id; ?>">
                                                    <button type="submit" class="btn btn-success btn-xs">
                                                        <i class="fa fa-shopping-cart"></i> Pagar
                                                    </button>
                                                </form>
                                            <?  } ?>
                                            </td>
                                        <?  if($admin->nivel == 1) { ?>
                                            <td class="text-center">
                                            <?  if($contrato->cred_fin->status == 1) { ?>
                                                <button type="button" class="btn btn-default btn-xs" style="font-size: 8pt;" data-tooltip="tooltip" data-container="body" title="Estornar Credenciamento!" onclick="estornar(<?= $contrato->cred_fin->id; ?>);">
                                                    <i class="fa fa-reply"></i>
                                                </button>
                                            <?  } else { ?>
                                                <button type="button" class="btn btn-primary btn-xs" style="font-size: 8pt;" data-tooltip="tooltip" data-container="body" title="Ativar Credenciamento!" onclick="credenciar(<?= $contrato->cred_fin->id; ?>);">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                            <?  } ?>
                                            </td>
                                        <?  } ?>
                                        </tr>
                                    <?  } ?>
                                    </tbody>
                                </table>
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
        <!-- PNotify -->
        <script src="../vendors/pnotify/dist/pnotify.js"></script>
        <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
        <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
        <script src="js/admin.js"></script>
    </body>
</html>