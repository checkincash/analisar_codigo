<?php
session_start();

if (empty($_SESSION['dash_contrato'])) {
    header('location: login.php');
}
$contrato = $_SESSION['dash_contrato'];

require_once './model/apPincashCreditoDAO.php';
$pincashCreditoDAO = new apPincashCreditoDAO();
$contratoCred = $pincashCreditoDAO->select('pincash_saldo', "fk_contrato = $contrato->pk_contrato")->fetch(PDO::FETCH_OBJ);

require_once './model/apContratoPubDAO.php';
$contratoPubDAO = new apContratoPubDAO();
$contratoPub = $contratoPubDAO->select('pk_publicador', "fk_contrato = $contrato->pk_contrato")->fetch(PDO::FETCH_OBJ);
require_once './model/apContratoColDAO.php';
$contratoColDAO = new apContratoColDAO();
$checkins = $contratoColDAO->select('COALESCE(SUM(contador), 0) as qtde', "fk_publicador = $contratoPub->pk_publicador")->fetch(PDO::FETCH_OBJ);
$clientes = $contratoColDAO->select('count(*) as qtde', "fk_publicador = $contratoPub->pk_publicador")->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHECK-INcash | Painel</title>
        <link rel="shortcut icon" href="images/logo.png" />

        <!-- Bootstrap -->
        <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
                    <div class="row">
                        <div class="top_tiles">
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-credit-card"></i></div>
                                    <div class="count"><?= $contratoCred->pincash_saldo; ?></div>
                                    <h3>Saldo Pincash</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                    <div class="count"><?= $checkins->qtde; ?></div>
                                    <h3>Checkins</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                                    <div class="count"><?= $clientes->qtde; ?></div>
                                    <h3>Clientes</h3>
                                </div>
                            </div>
                            <a href="pincash.php" id="divPincash" class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats" style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 96px;">
                                    <div>
                                        <i class="fa fa-money fa-4x"></i>
                                    </div>
                                    <h3>
                                        Comprar Pincash
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>HISTÓRICO CHECKINS</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    </ul>
<!--                                        <div class="filter">
                                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                            <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                        </div>
                                    </div>-->
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <canvas id="grafico1"></canvas>
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
        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- jQuery Sparklines -->
        <script src="vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- Flot -->
        <script src="vendors/Flot/jquery.flot.js"></script>
        <script src="vendors/Flot/jquery.flot.pie.js"></script>
        <script src="vendors/Flot/jquery.flot.time.js"></script>
        <script src="vendors/Flot/jquery.flot.stack.js"></script>
        <script src="vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="vendors/DateJS/build/date.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="vendors/moment/min/moment.min.js"></script>
        <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="build/js/custom.min.js"></script>
        <script src="js/painel.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                carregaGrafico(<?= $contrato->pk_contrato; ?>);
            });
        </script>
    </body>
</html>