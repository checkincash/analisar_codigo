<?php
session_start();
if (empty($_SESSION['dash_adm'])) {
    return header('location: ../login.php');
}
$doc = isset($_GET['doc']) ? $_GET['doc'] : 0;
if(!is_numeric($doc)) {
   return header('location: contratos.php');
}
$admin = $_SESSION['dash_adm'];

include_once '../model/apContratoDAO.php';
$contratoDAO = new apContratoDAO();
$contrato = $contratoDAO->select('*', "cnpj = $doc")->fetch(PDO::FETCH_OBJ);
if(empty($contrato)) {
    return header('location: contratos.php');
}

//se admin não for de nivel 1
//verifica se o contrato acessado foi cadastrado por ele
if($admin->nivel != '1') {
    if($admin->id != $contrato->id_admin) {
        return header('location: ./');
    }
}

include_once '../model/apContratoFinDAO.php';
$financeiroDAO = new apContratoFinDAO();
$lancamentos = $financeiroDAO->select('*', "contrato = ".$contrato->pk_contrato)->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHECK-INcash | Financeiro</title>
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
                            <div class="x_content">
                                <div class="col-md-12 col-sm-12 col-xs-12">                          
                                    <div class="form-group text-right">
                                        <a href="contrato.php?doc=<?= $doc; ?>" class="btn btn-primary pull-left">
                                            <i class="fa fa-list"></i> Contrato
                                        </a>
                                        <a href="campanha.php?doc=<?= $doc; ?>" class="btn btn-primary pull-left">
                                            <i class="fa fa-money"></i> Campanha
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>LANÇAMENTOS</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <table id="tblFinanceiro" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Vencimento</th>
                                            <th>Referência</th>
                                            <th>Valor R$</th>
                                            <th>Status</th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?  foreach($lancamentos as $lancamento) { ?>
                                        <tr>
                                            <td><?= date('Y-m-d', strtotime($lancamento->vencimento)); ?></td>
                                            <td><?= $lancamento->referencia; ?></td>
                                            <td><?= number_format($lancamento->valor, 2, ',', '.'); ?></td>
                                            <td class="text-center status">
                                            <?  if($lancamento->status == 0) { ?>
                                                <form method="POST" target="pagseguro" action="https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html">
                                                    <input name="receiverEmail" type="hidden" value="checkin.tecnologia@gmail.com">
                                                    <input name="currency" type="hidden" value="BRL">
                                                    <input name="itemId1" type="hidden" value="0001">  
                                                    <input name="itemDescription1" type="hidden" value="<?= $lancamento->referencia." ". date('Y-m', strtotime($lancamento->vencimento)); ?> CHECKINcash">  
                                                    <input name="itemAmount1" type="hidden" value="<?= number_format($lancamento->valor, 2, '.', ''); ?>">
                                                    <input name="itemQuantity1" type="hidden" value="1">  
                                                    <input name="reference" type="hidden" value="<?= $lancamento->id; ?>">
                                                    <button type="submit" class="btn btn-success btn-xs">
                                                        <i class="fa fa-shopping-cart"></i> Pagar
                                                    </button>
                                                </form>
                                            <?  } else if($lancamento->status == 1) { ?>
                                                <i class="fa fa-check" style="color: green;" data-tooltip="tooltip" title="Baixado"></i>
                                            <?  } else if($lancamento->status == 2) { ?>
                                                <i class="fa fa-reply" data-tooltip="tooltip" title="Estornado"></i>
                                            <?  } ?>
                                            </td>
                                            <td class="text-center">
                                            <?  if($lancamento->status == 0) { ?>
                                                <button type="button" class="btn btn-primary btn-xs" onclick="editar(<?= $lancamento->id; ?>, 1)">
                                                    <i class="fa fa-check"></i> Baixar
                                                </button>
                                                <button type="button" class="btn btn-default btn-xs" onclick="editar(<?= $lancamento->id; ?>, 2)">
                                                    <i class="fa fa-reply"></i> Estornar
                                                </button>
                                            <?  } else { ?>
                                                ---
                                            <?  } ?>
                                            </td>
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

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
        <script src="../js/padrao.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/financeiro.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {                
                
            });
        </script>
    </body>
</html>