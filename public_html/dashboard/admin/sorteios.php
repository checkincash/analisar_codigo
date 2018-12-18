<?php
session_start();
if (empty($_SESSION['dash_adm'])) {
    return header('location: ../login.php');
}
$admin = $_SESSION['dash_adm'];

//se admin não for de nivel 1
//verifica se o contrato acessado foi cadastrado por ele
if($admin->nivel != '1') {
    if($admin->id != $contrato->id_admin) {
        return header('location: ./');
    }
}

include_once '../model/apPincashSorteioDAO.php';
$pincashSorteioDAO = new apPincashSorteioDAO();
$sorteios = $pincashSorteioDAO->select('*', "texto_campanha like '%%'")->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHECK-INcash | Sorteios</title>
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
                            <div class="x_title">
                                <h2>
                                    SORTEIOS CADASTRADOS
                                    <a href="sorteio.php" class="btn btn-primary btn-xs" style="margin-left: 15px;">
                                        <i class="fa fa-plus"></i> Novo
                                    </a>
                                </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <table id="tblSorteios" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>IMAGEM</th>
                                            <th>TEXTO</th>
                                            <th>ATIVO</th>
                                            <th>INÍCIO</th>
                                            <th>FIM</th>
                                            <th>OPÇÕES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?  foreach($sorteios as $sorteio) { ?>
                                        <tr>
                                            <td style="max-width: 10px;"><img src="<?= "../../app/_lib/file/img/imagemsorteio/$sorteio->pk_sorteio_cabe_pincash/$sorteio->foto_campanha"; ?>" width="100%"></td>
                                            <td><?= $sorteio->texto_campanha; ?></td>
                                            <td><?= $sorteio->ativo == true ? 'Sim' : 'Não'; ?></td>
                                            <td><?= date('Y-m-d', strtotime($sorteio->datainicio)); ?></td>
                                            <td><?= date('Y-m-d', strtotime($sorteio->datafim)); ?></td>
                                            <td class="text-center">
                                                <a href="sorteio.php?sort=<?= $sorteio->pk_sorteio_cabe_pincash; ?>" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-pencil"></i> Editar
                                                </a>
                                            <?  if($sorteio->ativo) { ?>
                                                <button type="button" class="btn btn-danger btn-xs" onclick="updateStatusSorteio(<?= $sorteio->pk_sorteio_cabe_pincash; ?>, false);">
                                                    <i class="fa fa-thumbs-down"></i> Inativar
                                                </button>
                                            <?  } else { ?>
                                                <button type="button" class="btn btn-success btn-xs" onclick="updateStatusSorteio(<?= $sorteio->pk_sorteio_cabe_pincash; ?>, true);">
                                                    <i class="fa fa-thumbs-up"></i> Ativar
                                                </button>
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
        <script src="js/sorteios.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {                
                
            });
        </script>
    </body>
</html>