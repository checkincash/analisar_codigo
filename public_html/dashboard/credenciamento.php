<?
include_once './model/apConfiguracaoDAO.php';
$configuracaoDAO = new apConfiguracaoDAO();
$conf = $configuracaoDAO->select('*', 'id = 1')->fetch(PDO::FETCH_OBJ);
include_once './model/apClassificacaoDAO.php';
$classificacaoDAO = new apClassificacaoDAO();
$categorias = $classificacaoDAO->select('pk_classificacao, descricao', "descricao like '%%'")->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHECK-INcash | Credenciamento</title>
        <link rel="shortcut icon" href="images/logo.png" />

        <!-- Bootstrap -->
        <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- bootstrap-datetimepicker -->
        <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <!-- PNotify -->
        <link href="vendors/pnotify/dist/pnotify.css" rel="stylesheet">
        <link href="vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
        <link href="vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
        <!-- jQuery Smart Wizard -->
        <link href="vendors/jQuery-Smart-Wizard/styles/smart_wizard.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="build/css/custom.min.css" rel="stylesheet">
        <link href="build/css/checkincash.css" rel="stylesheet">
        <link href="build/css/credenciamento.css" rel="stylesheet">
        <!--<link href="http://checkincash.com.br/css/pe-icon-7-stroke.css" rel="stylesheet">-->
        <!--<link href="http://checkincash.com.br/css/style.css" rel="stylesheet">-->
    </head>

    <body style="background-color: #DDDDDD;">
        
        <!-- Navbar -->
        <div class="navbar navbar-custom navbar-white navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                <!-- LOGO -->
                <a class="navbar-brand logo" href="index.html">
                   <img src="images/logo-checkincash.png"> 
                </a>
                </div>
                <!-- end navbar-header -->

                <!-- menu -->
                <div class="navbar-collapse collapse" id="data-scroll">
                    <ul class="nav navbar-nav navbar-center">
                        <li class="active">
                            <a href="http://checkincash.com.br/#home">HOME</a>
                        </li>
                        <li>
                            <a href="http://checkincash.com.br/#services">COMO FUNCIONA</a>
                        </li>
                        <li>
                            <a href="http://checkincash.com.br/#features">O APLICATIVO</a>
                        </li>
                    </ul>
                </div>
                <!--/Menu -->
            </div><!-- end container -->
        </div>
        <!--END NAVBAR-->
        
        <div class="container" style="margin-top: 80px; padding-top: 15px;">
            <div class="x_panel">
                <div class="x_title">
                    <h2>CREDENCIAMENTO</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- Smart Wizard -->
                    <div id="frmCredenciamento" class="form_wizard wizard_horizontal">
                        <ul class="wizard_steps">
                            <li>
                                <a href="#step-1">
                                    <span class="step_no">1</span>
                                    <span class="step_descr">
                                        IDENTIFICAÇÃO<br />
                                        <small style="visibility: hidden;">Step 1 description</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-2">
                                    <span class="step_no">2</span>
                                    <span class="step_descr">
                                        CONTATO<br />
                                        <small style="visibility: hidden;">Step 2 description</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-3">
                                    <span class="step_no">3</span>
                                    <span class="step_descr">
                                        LOJA<br />
                                        <small style="visibility: hidden;">Step 3 description</small>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div id="step-1">
                            <div class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        CPF/CNPJ <span class="required">*</span>
                                    </label>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="text" class="form-control" id="txtCNPJ" placeholder="CPF ou CNPJ" data-tooltip="tooltip" data-container="body" title="Para CNPJ digite o ponto(.) após dois digitos.">
                                    </div>
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        I.E.
                                    </label>
                                    <div class="col-xs-12 col-sm-3">
                                        <input type="text" class="form-control" id="txtInscricao" placeholder="INSCRIÇÃO ESTADUAL">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        RAZÃO SOCIAL <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-9 col-md-8">
                                        <input type="text" class="form-control" id="txtRazao" placeholder="RAZÃO">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        FANTASIA <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-9 col-md-8">
                                        <input type="text" class="form-control" id="txtFantasia" placeholder="Nome Fantasia">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        CATEGORIA <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-9 col-md-8">
                                        <select type="text" class="form-control" id="txtClassificacao">
                                            <option value="">Selecione...</option>
                                        <?  foreach($categorias as $categoria) { ?>
                                                <option value="<?= $categoria->pk_classificacao; ?>"><?= $categoria->descricao; ?></option>
                                        <?  } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        CLASSIFCAÇÃO 1
                                    </label>
                                    <div class="col-xs-12 col-sm-3">
                                        <input type="text" class="form-control" id="txtClassificacao1" value="">
                                    </div>
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        CLASSIFICAÇÃO 2
                                    </label>
                                    <div class="col-xs-12 col-sm-3">
                                        <input type="text" class="form-control" id="txtClassificacao2" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        EMAIL <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-3">
                                        <input type="text" class="form-control" id="txtEmail">
                                    </div>
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        CONF. EMAIL <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-3">
                                        <input type="text" class="form-control" id="txtConfEmail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        SENHA <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-3">
                                        <input type="password" class="form-control" id="txtSenha">
                                    </div>
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        CONF. SENHA <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-3">
                                        <input type="password" class="form-control" id="txtConfSenha">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="step-2">
                            <div class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        CONTATO <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <input type="text" class="form-control" id="txtNomeContato">
                                    </div>
                                    <label class="control-label col-xs-12 col-sm-1">
                                        Tel. <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-3">
                                        <input type="text" class="form-control" id="txtTelefone" placeholder="(xx) 9123412345">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        CEP <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-2">
                                        <input type="text" class="form-control" id="txtCEP" placeholder="12654-999">
                                    </div>
                                    <label class="control-label col-xs-12 col-sm-2">
                                        BAIRRO <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <input type="text" class="form-control" id="txtBairro">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        RUA <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-5">
                                        <input type="text" class="form-control" id="txtRua">
                                    </div>
                                    <label class="control-label col-xs-12 col-sm-1">
                                        Nº <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-2">
                                        <input type="text" class="form-control" id="txtNumero">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        CIDADE <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-5">
                                        <input type="text" class="form-control" id="txtCidade">
                                    </div>
                                    <label class="control-label col-xs-12 col-sm-1">
                                        UF <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-2">
                                        <input type="text" class="form-control" id="txtEstado">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        COMPLEMENTO
                                    </label>
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <input type="text" class="form-control" id="txtComplemento">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        LATITUDE <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-3 col-md-2">
                                        <input type="text" class="form-control" id="txtLatitude">
                                    </div>
                                    <label class="control-label col-xs-12 col-sm-2">
                                        LONGITUDE <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-3 col-md-2">
                                        <input type="text" class="form-control" id="txtLongitude">
                                    </div>
                                    <div class="col-xs-12 col-sm-1 col-md-2">
                                        <button type="button" class="btn btn-primary btn-block" data-tooltip="tooltip" data-container="body" title="Buscar Geolocalização" onclick="buscaGeolocalizacao();">
                                            <i class="fa fa-globe"></i> <span class="hidden-sm">Geolocalização</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 col-md-2">
                                        SITE <span class="required">*</span>
                                    </label>
                                    <div class="col-xs-12 col-sm-9 col-md-8">
                                        <input type="text" class="form-control" id="txtWebSite">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="step-3">
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group filePreviewBox" style="background-image: url('images/sem-imagem.png');">
                                    <img id="filePreview" src="" width="100%">
                                </div>
                                <div class="text-right">
                                    <label class="btn btn-primary btn-upload" for="fileUpload" title="Escolha a imagem da Loja">
                                        <input type="file" class="sr-only" id="fileUpload" name="file" accept="image/*">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="Escolha a imagem da Loja">
                                            <span class="fa fa-upload"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <div class="row" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs form-group" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab_segunda" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Seg</a></li>
                                        <li role="presentation" class=""><a href="#tab_terca" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Ter</a></li>
                                        <li role="presentation" class=""><a href="#tab_quarta" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Qua</a></li>
                                        <li role="presentation" class=""><a href="#tab_quinta" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Qui</a></li>
                                        <li role="presentation" class=""><a href="#tab_sexta" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Sex</a></li>
                                        <li role="presentation" class=""><a href="#tab_sabado" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Sáb</a></li>
                                        <li role="presentation" class=""><a href="#tab_domingo" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Dom</a></li>
                                    </ul>
                                    
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_segunda" aria-labelledby="home-tab">
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Abre:
                                                <div class='input-group date' id='dtPickerSeg1'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Fecha:
                                                <div class='input-group date' id='dtPickerSeg2'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_terca" aria-labelledby="profile-tab">
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Abre:
                                                <div class='input-group date' id='dtPickerTer1'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Fecha:
                                                <div class='input-group date' id='dtPickerTer2'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_quarta" aria-labelledby="profile-tab">
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Abre:
                                                <div class='input-group date' id='dtPickerQua1'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Fecha:
                                                <div class='input-group date' id='dtPickerQua2'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_quinta" aria-labelledby="profile-tab">
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Abre:
                                                <div class='input-group date' id='dtPickerQui1'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Fecha:
                                                <div class='input-group date' id='dtPickerQui2'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_sexta" aria-labelledby="profile-tab">
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Abre:
                                                <div class='input-group date' id='dtPickerSex1'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Fecha:
                                                <div class='input-group date' id='dtPickerSex2'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_sabado" aria-labelledby="profile-tab">
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Abre:
                                                <div class='input-group date' id='dtPickerSab1'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Fecha:
                                                <div class='input-group date' id='dtPickerSab2'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_domingo" aria-labelledby="profile-tab">
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Abre:
                                                <div class='input-group date' id='dtPickerDom1'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6">
                                                Fecha:
                                                <div class='input-group date' id='dtPickerDom2'>
                                                    <input type='text' class="form-control" value="00:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End SmartWizard Content -->
                </div>
            </div>
        </div>
        <div id="auto"></div>
        
        <!--START SOCIAL-->
        <section class="cta bg-dark" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline social margin-t-20">
                            <li><a href="" class="social-icon"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" class="social-icon"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="" class="social-icon"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="" class="social-icon"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="" class="social-icon"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- <div class="col-md-3 text-white margin-t-30">
                        <p class="margin-b-0 contact-title"><i class="pe-7s-call"></i> &nbsp;+91 123 4556 789</p>
                    </div> -->
                    <div class="col-sm-6 text-white margin-t-30 text-right">
                        <p class="contact-title"><i class="fa fa-envelope-o"></i> contato@checkincash.com.br</p>
                    </div>
                </div>
            </div>
        </section>
        <!--END SOCIAL-->

        <!--START FOOTER-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 margin-t-20">
                        <h5>CheckIN-cash</h5>
                        <div class="text-muted margin-t-20">
                            <ul class="list-unstyled footer-list">
                                <li><a href="#">Como Funciona</a></li>
                                <li><a href="#">O Aplicativo</a></li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-md-3 margin-t-20">
                        <h5>Informações</h5>
                        <div class="text-muted margin-t-20">
                            <ul class="list-unstyled footer-list">
                                <li><a href="#">Termos e Condições</a></li>
                                <li><a href="#">Vagas</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 margin-t-20">
                        <h5>Suporte</h5>
                        <div class="text-muted margin-t-20">
                            <ul class="list-unstyled footer-list">
                                <li><a href="">FAQ</a></li>
                                <li><a href="">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 margin-t-20">
                        <h5>NewsLetter</h5>
                        <div class="text-muted margin-t-20">
                            <p>Cadastre-se e receba promoções.</p>
                        </div>
                        <form class="form subscribe">
                            <input placeholder="E-mail" class="form-control" required>
                            <a href="#" class="submit"><i class="fa fa-send-o"></i></a>
                        </form>
                    </div>
                </div>                    
            </div>
        </footer>
        <!--END FOOTER-->


        <!--START FOOTER ALTER-->
        <div class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-alt-border"></div>
                        <div class="footer-alt">
                            <div class="pull-left float-none">
                                <p class="copy-rights text-muted">2017 © Check-INcash. website by <a href="https://m31tecnologia.com.br" target="_blank">M31</a></p>
                            </div>
                            <div class="pull-right float-none">
                               <!-- <img src="images/payment.png" alt="payment-img" height="36" /> -->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--START FOOTER ALTER-->
        

        <!-- jQuery -->
        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="vendors/nprogress/nprogress.js"></script>
        <!-- DateJS -->
        <script src="vendors/DateJS/build/date.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="vendors/moment/min/moment.min.js"></script>
        <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- Switchery -->
        <script src="vendors/switchery/dist/switchery.min.js"></script>
        <!-- bootstrap-datetimepicker -->    
        <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <!-- jquery.inputmask -->
        <script src="vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
        <!-- PNotify -->
        <script src="vendors/pnotify/dist/pnotify.js"></script>
        <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
        <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>
        <!-- jQuery Smart Wizard -->
        <script src="vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="build/js/custom.min.js"></script>
        <script src="js/padrao.js"></script>
        <script src="js/credenciamento.js"></script>
    </body>
</html>