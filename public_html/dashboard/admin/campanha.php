<?php
session_start();
if (empty($_SESSION['dash_adm'])) {
    header('location: ../login.php');
}
$doc = isset($_GET['doc']) ? $_GET['doc'] : 0;
if(!is_numeric($doc)) {
    header('location: contratos.php');
}
$admin = $_SESSION['dash_adm'];

include_once '../model/apContratoDAO.php';
$contratoDAO = new apContratoDAO();
$contrato = $contratoDAO->select('*', "cnpj = $doc")->fetch(PDO::FETCH_OBJ);
if(empty($contrato)) {
    header('location: contratos.php');
}

include_once '../model/apContratoPubDAO.php';
$publicacaoDAO = new apContratoPubDAO();
$publicacao = $publicacaoDAO->select('*', "fk_contrato = ".$contrato->pk_contrato)->fetch(PDO::FETCH_OBJ);

$checkedRegAtivo = $publicacao->situacao == '1' ? 'checked="true"' : '';
$checkedDestaque = $publicacao->destaque == '1' ? 'checked="true"' : '';
$imgPublicacao = "../../app/_lib/file/img/imagempub/$contrato->cnpj/$publicacao->foto_publicacao";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHECK-INcash | Campanha</title>
        <link rel="shortcut icon" href="../images/logo.png" />

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- bootstrap-datetimepicker -->
        <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <!-- PNotify -->
        <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
        <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
        <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
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
                <? include_once './template/menu-lateral.php'; ?>

                <!-- top navigation -->
                <? include_once './template/menu-superior.php'; ?>

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <div class="col-md-12 col-sm-12 col-xs-12">                          
                                            <div class="form-group text-right">
                                                <a href="contrato.php?doc=<?= $doc; ?>" class="btn btn-primary pull-left">
                                                    <i class="fa fa-list"></i> Contrato
                                                </a>
                                                <a href="financeiro.php?doc=<?= $doc; ?>" class="btn btn-default pull-left">
                                                    <i class="fa fa-money"></i> Financeiro
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2>DESCONTOS PRATICADOS</h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content" style="display: flex; justify-content: space-between; flex-wrap: wrap;">
                                                <div class="form-group">
                                                    <h5 class="text-center">SEGUNDA</h5>
                                                    <input id="txtDescontoSeg" class="knob-check-in" data-skin="tron" value="<?= $publicacao->pseg; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-center">TERÇA</h5>
                                                    <input id="txtDescontoTer" class="knob-check-in" data-skin="tron" value="<?= $publicacao->pter; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-center">QUARTA</h5>
                                                    <input id="txtDescontoQua" class="knob-check-in" data-skin="tron" value="<?= $publicacao->pqua; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-center">QUINTA</h5>
                                                    <input id="txtDescontoQui" class="knob-check-in" data-skin="tron" value="<?= $publicacao->pqui; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-center">SEXTA</h5>
                                                    <input id="txtDescontoSex" class="knob-check-in" data-skin="tron" value="<?= $publicacao->psex; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-center">SÁBADO</h5>
                                                    <input id="txtDescontoSab" class="knob-check-in" data-skin="tron" value="<?= $publicacao->psab; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-center">DOMINGO</h5>
                                                    <input id="txtDescontoDom" class="knob-check-in" data-skin="tron" value="<?= $publicacao->pdom; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2>PINCASH OFERTADO</h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content" style="display: flex; justify-content: space-between; flex-wrap: wrap;">
                                                <div class="form-group">
                                                    <h5 class="text-center">SEGUNDA</h5>
                                                    <input id="txtPincashSeg" class="knob-check-in-pin" data-skin="tron" value="<?= $publicacao->pinseg; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-center">TERÇA</h5>
                                                    <input id="txtPincashTer" class="knob-check-in-pin" data-skin="tron" value="<?= $publicacao->pinter; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-center">QUARTA</h5>
                                                    <input id="txtPincashQua" class="knob-check-in-pin" data-skin="tron" value="<?= $publicacao->pinqua; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-center">QUINTA</h5>
                                                    <input id="txtPincashQui" class="knob-check-in-pin" data-skin="tron" value="<?= $publicacao->pinqui; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-center">SEXTA</h5>
                                                    <input id="txtPincashSex" class="knob-check-in-pin" data-skin="tron" value="<?= $publicacao->pinsex; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-center">SÁBADO</h5>
                                                    <input id="txtPincashSab" class="knob-check-in-pin" data-skin="tron" value="<?= $publicacao->pinsab; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-center">DOMINGO</h5>
                                                    <input id="txtPincashDom" class="knob-check-in-pin" data-skin="tron" value="<?= $publicacao->pindom; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2>REGISTRO</h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                                    <li>
                                                        <input id="chkRegAtivo" type="checkbox" <?= $checkedRegAtivo; ?> class="js-switch" title="Contrato Ativo?"/>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <form class="form-horizontal form-label-left input_mask">
                                                        <div class="col-xs-12 col-sm-6 form-group">
                                                            <select id="txtRegContrato" class="form-control">
                                                                <option value="<?= $contrato->pk_contrato; ?>"><?= $contrato->razao; ?></option>
                                                            </select>
                                                        </div>
                                                        <div class='col-xs-12 col-sm-6 form-group date' id='txtRegData'>
                                                            <input type='text' class="form-control" readonly="readonly" placeholder="DATA CADASTRO" value="" />
                                                        </div>
                                                        <div class="col-xs-12 form-group">
                                                            <input type="text" class="form-control" id="txtRegTitulo" placeholder="TITULO DO EVENTO" value="<?= $publicacao->nomenclatura; ?>">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2>FOTO DA PUBLICAÇÂO</h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <div class="col-xs-12">
                                                    <!--<form action="form_upload.html" class="dropzone"></form>-->
                                                    <div class="form-group filePreviewBox" style="background-image: url(<?= $imgPublicacao; ?>);">
                                                        <img id="filePreview" src="<?= $imgPublicacao; ?>" width="100%">
                                                    </div>
                                                    <div class="text-right">
<!--                                                        <button id="fileReset" type="button" class="btn btn-primary" data-method="reset" title="Reset">
                                                            <span class="docs-tooltip" data-toggle="tooltip" title="Remover Imagem">
                                                                <span class="fa fa-close"></span>
                                                            </span>
                                                        </button>-->
                                                        <label class="btn btn-primary btn-upload" for="fileUpload" title="Escolha a imagem da Loja">
                                                            <input type="file" class="sr-only" id="fileUpload" name="file" accept="image/*">
                                                            <span class="docs-tooltip" data-toggle="tooltip" title="Escolha a imagem da Loja">
                                                                <span class="fa fa-upload"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-md-6">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>DESTAQUE</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li class="pull-right">
                                                <input id="chkDestaque" type="checkbox" class="flat" <?= $checkedDestaque; ?>>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <p>Obtenha melhores resultados ficando entre os primeiros no aplicativo.</p>
                                    </div>
                                </div>                                    
                                    
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>CONTATO</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-xs-12">
                                            <form class="form-horizontal form-label-left input_mask">
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtCEP" placeholder="CEP" value="<?= $publicacao->cep; ?>" data-inputmask="'mask': '99999-999'">
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtBairro" placeholder="BAIRRO" value="<?= $publicacao->bairro; ?>">
                                                </div>

                                                <div class="col-sm-8 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtRua" placeholder="RUA" value="<?= $publicacao->rua; ?>">
                                                </div>

                                                <div class="col-sm-4 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtNumero" placeholder="Nº" value="<?= $publicacao->numero; ?>">
                                                </div>

                                                <div class="col-sm-8 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtCidade" placeholder="CIDADE" value="<?= $publicacao->cidade; ?>">
                                                </div>

                                                <div class="col-sm-4 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtEstado" placeholder="ESTADO" value="<?= $publicacao->estado; ?>">
                                                </div>

                                                <div class="col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtComplemento" placeholder="COMPLEMENTO" value="<?= $publicacao->complemento; ?>">
                                                </div>

                                                <div class="col-xs-12 col-sm-4 form-group ">
                                                    <input type="text" class="form-control" id="txtLatitude" placeholder="LATITUDE" value="<?= $publicacao->latitude; ?>">
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-4 form-group">
                                                    <input type="text" class="form-control" id="txtLongitude" placeholder="LONGITUDE" value="<?= $publicacao->longitude; ?>" >
                                                </div>
                                                <div class="col-xs-12 col-sm-4 form-group">
                                                    <button type="button" class="btn btn-primary btn-block" data-tooltip="tooltip" title="Buscar Geolocalização" onclick="buscaGeolocalizacao();">
                                                        <i class="fa fa-globe"></i> Buscar
                                                    </button>
                                                </div>
                                                
                                                <div class="col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtAbreviatura" placeholder="ABREVIATURA" value="<?= $publicacao->abreviatura; ?>">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>TEXTO DA PUBLICAÇÃO</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="form-group">
                                            <textarea id="txtPubTexto" rows="4" class="form-control char-limite" maxlength="120" placeholder="INSIRA O TEXTO"><?= $publicacao->texto_publicacao; ?></textarea>
                                            <span class="pull-right spnChar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group text-right">
                                                <button type="button" class="btn btn-success" onclick="salvar();"><i class="fa fa-check"></i> Salvar</button>
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
        <script src="../vendors/moment/min/moment-with-locales.min.js"></script>
        <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- Switchery -->
        <script src="../vendors/switchery/dist/switchery.min.js"></script>
        <!-- bootstrap-datetimepicker -->    
        <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <!-- jquery.inputmask -->
        <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
        <!-- PNotify -->
        <script src="../vendors/pnotify/dist/pnotify.js"></script>
        <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
        <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>
        <!-- jQuery Knob -->
        <script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- iCheck -->
        <script src="../vendors/iCheck/icheck.min.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
        <script src="../js/padrao.js"></script>
        <script src="js/campanha.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#txtRegData').datetimepicker({
                    ignoreReadonly: true,
                    allowInputToggle: true,
                    format: 'DD/MM/YYYY',
                    locale: 'pt-br'
                });
                
                $('#txtRegData').data("DateTimePicker").date(new Date('<?= "$publicacao->data_criacao 00:00:00"; ?>')); 
            });
        </script>
    </body>
</html>