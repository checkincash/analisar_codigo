<?php
session_start();
if (empty($_SESSION['dash_adm'])) {
    return header('location: ../login.php');
}
$doc = isset($_GET['doc']) ? $_GET['doc'] : 0;
if(!is_numeric($doc)) {
    return header('location: ./');
}
$admin = $_SESSION['dash_adm'];

include_once '../model/apContratoDAO.php';
$contratoDAO = new apContratoDAO();
$contrato = $contratoDAO->select('*', "cnpj = '$doc'")->fetch(PDO::FETCH_OBJ);
if(empty($contrato)) {
    $contrato = $contratoDAO->getEmptyContrato();
}

//se admin não for de nivel 1
//verifica se o contrato acessado foi cadastrado por ele
if($admin->nivel != '1' && !empty($contrato->pk_contrato)) {
    if($admin->id != $contrato->id_admin) {
        return header('location: ./');
    }
}

include_once '../model/apClassificacaoDAO.php';
$classificacaoDAO = new apClassificacaoDAO();
$categorias = $classificacaoDAO->select('pk_classificacao, descricao', "descricao like '%%'")->fetchAll(PDO::FETCH_OBJ);

$idContrato = !empty($contrato->pk_contrato) ? $contrato->pk_contrato : 0;
$checkedAtivo = $contrato->ativo == '1' ? 'checked="true"' : '';
if(!empty($contrato->fachada)) {
    $imgLoja = "../../app/_lib/file/img/imagempub/$contrato->cnpj/$contrato->fachada";
} else {
    $imgLoja = '../images/sem-imagem.png';
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

        <title>CHECK-INcash | Contrato</title>
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
                                                <a href="campanha.php?doc=<?= $doc; ?>" class="btn btn-primary pull-left">
                                                    <i class="fa fa-list"></i> Campanha
                                                </a>
                                                <a href="financeiro.php?doc=<?= $doc; ?>" class="btn btn-default pull-left">
                                                    <i class="fa fa-money"></i> Financeiro
                                                </a>
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
                                                <h2>IDENTIFICAÇÃO</h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <form class="form-horizontal form-label-left input_mask">
                                                        <input type="hidden" id="idContrato" value="<?= $idContrato; ?>">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                            <input type="text" class="form-control has-feedback-left" id="txtCNPJ" placeholder="CNPJ" value="<?= $contrato->cnpj; ?>" data-inputmask="'mask': '(999.999.999-99)|(99.999.999/9999-99)', 'keepStatic': true" >
                                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                            <input type="text" class="form-control" id="txtInscricao" placeholder="Inscrição" value="<?= $contrato->inscricao; ?>" data-inputmask="'mask': '999999999999'">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                            <input type="text" class="form-control has-feedback-left" id="txtRazao" placeholder="Razão Social" value="<?= $contrato->razao; ?>" >
                                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                            <input type="text" class="form-control" id="txtFantasia" placeholder="Nome Fantasia" value="<?= $contrato->fantasia; ?>">
                                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-12">
                                                                <select id="txtClassificacao" class="form-control">
                                                                    <option value="0">Seleciona a Categoria</option>
                                                                <?  foreach($categorias as $categoria) { 
                                                                        if($categoria->pk_classificacao == $contrato->fk_classificacao) { ?>
                                                                    <option value="<?= $categoria->pk_classificacao; ?>" selected="true"><?= $categoria->descricao; ?></option>
                                                                    <?  } else { ?>
                                                                        <option value="<?= $categoria->pk_classificacao; ?>"><?= $categoria->descricao; ?></option>
                                                                    <?  } ?>
                                                                <?  } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-xs-12">
                                                                <input id="txtClassificacao1" type="text" class="form-control" placeholder="Classificação 1" value="<?= $contrato->classificacao1; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-xs-12">
                                                                <input id="txtClassificacao2" type="text" class="form-control" placeholder="Classificação 2" value="<?= $contrato->classificacao2; ?>">
                                                            </div>
                                                        </div>                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2>FRENTE DA LOJA</h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <div class="col-xs-12">
                                                    <!--<form action="form_upload.html" class="dropzone"></form>-->
                                                    <div class="form-group filePreviewBox" style="background-image: url(<?= $imgLoja; ?>);">
                                                        <img id="filePreview" src="<?= $imgLoja; ?>" width="100%">
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
                                        <h2>CREDENCIAIS DE ACESSO</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li>
                                                <input id="chkAtivo" type="checkbox" <?= $checkedAtivo; ?> class="js-switch" title="Contrato Ativo?"/>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <form class="form-horizontal form-label-left input_mask">

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left" id="txtEmail" placeholder="Email" value="<?= $contrato->email; ?>">
                                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control" id="txtConfEmail" placeholder="Confirme Email" value="<?= $contrato->email; ?>">
                                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="password" class="form-control has-feedback-left" id="txtSenha" placeholder="Senha">
                                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="password" class="form-control" id="txtConfSenha" placeholder="Confirme Senha">
                                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
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
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-left" id="txtNomeContato" placeholder="Nome Contato" value="<?= $contrato->nome_contato; ?>">
                                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtTelefone" placeholder="Telefone" value="<?= $contrato->telefone; ?>" data-inputmask="'mask': '(99) (9{4}-9{4})|(9{5}-9{4})', 'greedy': false, 'keepStatic': true">
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtCEP" placeholder="CEP" value="<?= $contrato->cep; ?>" data-inputmask="'mask': '99999-999'" >
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtBairro" placeholder="BAIRRO" value="<?= $contrato->bairro; ?>" >
                                                </div>

                                                <div class="col-sm-8 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtRua" placeholder="RUA" value="<?= $contrato->rua; ?>" >
                                                </div>

                                                <div class="col-sm-4 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtNumero" placeholder="Nº" value="<?= $contrato->numero; ?>" >
                                                </div>

                                                <div class="col-sm-8 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtCidade" placeholder="CIDADE" value="<?= $contrato->cidade; ?>" >
                                                </div>

                                                <div class="col-sm-4 col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtEstado" placeholder="ESTADO" value="<?= $contrato->estado; ?>" >
                                                </div>

                                                <div class="col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtComplemento" placeholder="COMPLEMENTO" value="<?= $contrato->complemento; ?>" >
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-4 form-group ">
                                                    <input type="text" class="form-control" id="txtLatitude" placeholder="LATITUDE" value="<?= $contrato->latitude; ?>">
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-4 form-group">
                                                    <input type="text" class="form-control" id="txtLongitude" placeholder="LONGITUDE" value="<?= $contrato->longitude; ?>" >
                                                </div>
                                                <div class="col-xs-12 col-sm-4 form-group">
                                                    <button type="button" class="btn btn-primary btn-block" data-tooltip="tooltip" title="Buscar Geolocalização" onclick="buscaGeolocalizacao();">
                                                        <i class="fa fa-globe"></i> Buscar
                                                    </button>
                                                </div>

                                                <div class="col-xs-12 form-group ">
                                                    <input type="text" class="form-control" id="txtWebSite" placeholder="SITE NA WEB" value="<?= $contrato->website; ?>">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>HORARIO DE FUNCIONAMENTO</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-xs-12">
                                            <div class="row" role="tabpanel" data-example-id="togglable-tabs">
                                                <ul id="myTab" class="nav nav-tabs tabs-left col-xs-4" role="tablist">
                                                    <li role="presentation" class="active"><a href="#tab_segunda" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Segunda</a></li>
                                                    <li role="presentation" class=""><a href="#tab_terca" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Terça</a></li>
                                                    <li role="presentation" class=""><a href="#tab_quarta" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Quarta</a></li>
                                                    <li role="presentation" class=""><a href="#tab_quinta" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Quinta</a></li>
                                                    <li role="presentation" class=""><a href="#tab_sexta" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Sexta</a></li>
                                                    <li role="presentation" class=""><a href="#tab_sabado" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Sábado</a></li>
                                                    <li role="presentation" class=""><a href="#tab_domingo" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Domingo</a></li>
                                                </ul>
                                                <div id="myTabContent" class="tab-content col-xs-8">
                                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_segunda" aria-labelledby="home-tab">
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã De
                                                            <div class='input-group date' id='dtPickerSeg1'>
                                                                <input type='text' class="form-control" value="<?= $contrato->seg_m_de; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã Até
                                                            <div class='input-group date' id='dtPickerSeg2'>
                                                                <input type='text' class="form-control" value="<?= $contrato->seg_m_ate; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_terca" aria-labelledby="profile-tab">
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã De
                                                            <div class='input-group date' id='dtPickerTer1'>
                                                                <input type='text' class="form-control" value="<?= $contrato->ter_m_de; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã Até
                                                            <div class='input-group date' id='dtPickerTer2'>
                                                                <input type='text' class="form-control" value="<?= $contrato->ter_m_ate; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_quarta" aria-labelledby="profile-tab">
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã De
                                                            <div class='input-group date' id='dtPickerQua1'>
                                                                <input type='text' class="form-control" value="<?= $contrato->qua_m_de; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã Até
                                                            <div class='input-group date' id='dtPickerQua2'>
                                                                <input type='text' class="form-control" value="<?= $contrato->qua_m_ate; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_quinta" aria-labelledby="profile-tab">
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã De
                                                            <div class='input-group date' id='dtPickerQui1'>
                                                                <input type='text' class="form-control" value="<?= $contrato->qui_m_de; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã Até
                                                            <div class='input-group date' id='dtPickerQui2'>
                                                                <input type='text' class="form-control" value="<?= $contrato->qui_m_ate; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_sexta" aria-labelledby="profile-tab">
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã De
                                                            <div class='input-group date' id='dtPickerSex1'>
                                                                <input type='text' class="form-control" value="<?= $contrato->sex_m_de; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã Até
                                                            <div class='input-group date' id='dtPickerSex2'>
                                                                <input type='text' class="form-control" value="<?= $contrato->sex_m_ate; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_sabado" aria-labelledby="profile-tab">
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã De
                                                            <div class='input-group date' id='dtPickerSab1'>
                                                                <input type='text' class="form-control" value="<?= $contrato->sab_m_de; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã Até
                                                            <div class='input-group date' id='dtPickerSab2'>
                                                                <input type='text' class="form-control" value="<?= $contrato->sab_m_ate; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_domingo" aria-labelledby="profile-tab">
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã De
                                                            <div class='input-group date' id='dtPickerDom1'>
                                                                <input type='text' class="form-control" value="<?= $contrato->dom_m_de; ?>">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-sm-6">
                                                            Manhã Até
                                                            <div class='input-group date' id='dtPickerDom2'>
                                                                <input type='text' class="form-control" value="<?= $contrato->dom_m_ate; ?>">
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

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
        <script src="../js/padrao.js"></script>
        <script src="js/contrato.js"></script>
    </body>
</html>