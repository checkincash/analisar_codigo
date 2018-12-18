<?php
session_start();
if (empty($_SESSION['dash_contrato'])) {
    header('location: login.php');
}

$contrato = $_SESSION['dash_contrato'];

include_once 'model/apPincashMoedaDAO.php';
$pincashMoedaDAO = new apPincashMoedaDAO();
$pacotes = $pincashMoedaDAO->select('*', 'ativo is true ORDER BY valor_pacote')->fetchAll(PDO::FETCH_OBJ);

include_once 'model/apPincashCreditoDAO.php';
$pincashCredDAO = new apPincashCreditoDAO();
$contratoCred = $pincashCredDAO->select('*', "fk_contrato = $contrato->pk_contrato")->fetch(PDO::FETCH_OBJ);
$pincashSaldo = !empty($contratoCred) ? $contratoCred->pincash_saldo : 0;

include_once 'model/apPincashCreditoMovDAO.php';
$pincashCredMovDAO = new apPincashCreditoMovDAO();
$creditos = $pincashCredMovDAO->select('*', "fk_pincash_contrato_creditos = $contratoCred->pk_pincash_credito")->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHECK-INcash | Pincash</title>
        <link rel="shortcut icon" href="images/logo.png" />

        <!-- Bootstrap -->
        <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- PNotify -->
        <link href="vendors/pnotify/dist/pnotify.css" rel="stylesheet">
        <link href="vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
        <link href="vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
        <!-- Datatables -->
        <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="build/css/custom.min.css" rel="stylesheet">
        <link href="build/css/checkincash.css" rel="stylesheet">
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
                    <div class="col-xs-12 col-sm-8">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>COMPRAR PACOTES</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>QUANTIDADE</th>
                                            <th>VALOR</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?  foreach($pacotes as $pacote) { ?>
                                        <tr>
                                            <th scope="row"><?= $pacote->pk_pincash_moeda; ?></th>
                                            <td><?= number_format($pacote->pacote, 0, ',', '.'); ?></td>
                                            <td>R$ <?= number_format($pacote->valor_pacote, 2, ',', '.'); ?></td>
                                            <td>
                                                <form method="POST" target="pagseguro" action="https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html">
                                                    <input name="receiverEmail" type="hidden" value="checkin.tecnologia@gmail.com">
                                                    <input name="currency" type="hidden" value="BRL">
                                                    <input name="itemId1" type="hidden" value="0001">  
                                                    <input name="itemDescription1" type="hidden" value="<?= "$pacote->pacote pincash"; ?> - CHECKINcash">  
                                                    <input name="itemAmount1" type="hidden" value="<?= number_format($pacote->valor_pacote, 2, '.', ''); ?>">
                                                    <input name="itemQuantity1" type="hidden" value="1">  
                                                    <input name="reference" type="hidden" value="<?= "pincash|$contrato->pk_contrato|$pacote->pk_pincash_moeda"; ?>">
                                                    <button type="submit" class="btn btn-success btn-xs">
                                                        <i class="fa fa-shopping-basket"></i> Comprar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?  } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="top_tiles">
                        <div class="animated flipInY col-xs-12 col-sm-4 ">
                            <div class="tile-stats">
                                <div class="icon" style="right: 35px;"><i class="fa fa-map-marker"></i></div>
                                <div class="count"><?= number_format($pincashSaldo, 0, ',', '.'); ?></div>
                                <h3>Meu Saldo</h3>
                                <!--<p>Lorem ipsum psdea itgum rixt.</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>MINHAS COMPRAS</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <table id="tblCreditos" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>AQUISIÇÃO</th>
                                            <th>QUANTIDADE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <? foreach ($creditos as $credito) { ?>
                                            <tr>
                                                <td><?= date('Y-m-d', strtotime($credito->aquisicao)); ?></td>
                                                <td><?= number_format($credito->pacote, 0, ',', '.'); ?></td>
                                            </tr>
                                        <? } ?>
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
        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="vendors/fastclick/lib/fastclick.js"></script>
        <!-- PNotify -->
        <script src="vendors/pnotify/dist/pnotify.js"></script>
        <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
        <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>
        <!-- Datatables -->
        <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="vendors/jszip/dist/jszip.min.js"></script>
        <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="vendors/pdfmake/build/vfs_fonts.js"></script>        

        <!-- Custom Theme Scripts -->
        <script src="build/js/custom.min.js"></script>
        <script src="js/padrao.js"></script>
        <script src="js/pincash.js"></script>
    </body>
</html>