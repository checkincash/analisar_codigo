<?php
session_start();
if (empty($_SESSION['dash_adm'])) {
    return header('location: ../login.php');
}
$admin = $_SESSION['dash_adm'];

if($admin->nivel != 1) {
    return header('location: ./');
}

include_once '../model/apAdministradorDAO.php';
$administradorDAO = new apAdministradorDAO();
$administradores = $administradorDAO->select('*', "usuario like '%%'")->fetchAll(PDO::FETCH_OBJ);
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
        <!-- Switchery -->
        <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
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
                    <div class="col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>USUÁRIOS</h2>
                                <button type="button" class="btn btn-primary btn-xs" style="margin: 3px 0 0 15px;" onclick="novo();">
                                    <i class="fa fa-plus"></i> Novo
                                </button>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-xs-12" style="padding: 0;">
                                        <form class="form-horizontal form-label-left input_mask">
                                            <input id="txtId" type="hidden" value="">
                                            <div class='col-xs-12 col-sm-4 col-md-4 form-group date'>
                                                <input id='txtUsuario' type='text' class="form-control" placeholder="USUÁRIO" value=""/>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 form-group">
                                                <input id="txtSenha" type="password" class="form-control" placeholder="SENHA" value="">
                                            </div>
                                            <div class="col-xs-10 col-sm-3 col-lg-2 form-group">
                                                <select id="txtNivel" class="form-control" data-tooltip="tooltip" title="Nivel de Acesso">
                                                    <option value="0">0 - Consultor</option>
                                                    <option value="1">1 - Administrador</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-2 col-sm-1 text-center form-group" style="margin-top: 5px;">
                                                <input id="chkAtivo" type="checkbox" class=""> Ativo
                                            </div>

                                            <div class="col-xs-12 col-lg-2 text-right">
                                                <button type="button" class="btn btn-primary" onclick="salvar();">
                                                    <i class="fa fa-check"></i> Salvar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div> 
                            
                                <hr/>
                            
                                <table id="tblUsuarios" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>USUÁRIO</th>
                                            <th>NÍVEL</th>
                                            <th>ATIVO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <? foreach ($administradores as $administrador) { ?>
                                            <tr>
                                                <td><?= $administrador->id; ?></td>
                                                <td class="login-usuario" onclick="editar(<?= $administrador->id; ?>);"><?= $administrador->usuario; ?></td>
                                                <td><?= $administrador->nivel == 1 ? 'Administrador' : 'Consultor'; ?></td>
                                                <td>
                                                    <?= $administrador->ativo ? 'Sim' : "Não"; ?>
                                                </td>
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
        <!-- Switchery -->
        <script src="../vendors/switchery/dist/switchery.min.js"></script>
        <!-- PNotify -->
        <script src="../vendors/pnotify/dist/pnotify.js"></script>
        <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
        <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
        <script src="js/usuario.js"></script>
    </body>
</html>