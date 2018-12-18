<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHECK-INcash | Login</title>
        <link rel="shortcut icon" href="images/logo.png" />

        <!-- Bootstrap -->
        <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
        <!-- PNotify -->
        <link href="vendors/pnotify/dist/pnotify.css" rel="stylesheet">
        <link href="vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
        <link href="vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
        
        <!-- Custom Theme Style -->
        <link href="build/css/custom.min.css" rel="stylesheet">

        <style type="text/css">
            #admin:target ~ .login_wrapper .registration_form,
            #login:target ~ .login_wrapper .login_form {
                z-index: 22;
                animation-name: fadeInLeft;
                animation-delay: .1s;
            }
            #admin:target ~ .login_wrapper .login_form,
            #login:target ~ .login_wrapper .registration_form {
                animation-name: fadeOutLeft;
            }
        </style>
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="admin"></a>
            <a class="hiddenanchor" id="login"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <div>
                        <img src="images/logo-checkincash.png" width="100%">
                    </div>
                    <section class="login_content">
                        <form>
                            <h1>Clientes</h1>
                            <div>
                                <input id="txtCNPJ" type="text" class="form-control" placeholder="CPF/CNPJ" data-inputmask="'mask': '99999999999999'"/>
                            </div>
                            <div>
                                <input id="txtSenha" type="password" class="form-control" placeholder="Senha" required="" />
                            </div>
                            <div>
                                <a onclick="login(false);" class="btn btn-default submit">
                                    <i class="fa fa-sign-in"></i> Acessar
                                </a>
                                <!--<a class="reset_pass" href="#">Esqueceu sua senha?</a>-->
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">
                                    <a href="#admin" class="to_register"> Acesso Administrativo </a>
                                </p>
                            </div>
                        </form>
                    </section>
                </div>

                <div id="register" class="animate form registration_form">
                    <div>
                        <img src="images/logo-checkincash.png" width="100%">
                    </div>
                    <section class="login_content">
                        <form>
                            <h1>Administradores</h1>
                            <div>
                                <input id="txtUsuario" type="text" class="form-control" placeholder="Usuário" required="" />
                            </div>
                            <div>
                                <input id="txtAdmSenha" type="password" class="form-control" placeholder="Senha" required="" />
                            </div>
                            <div>
                                <a onclick="login(true);" class="btn btn-default submit">
                                    <i class="fa fa-sign-in"></i> Login
                                </a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">
                                    <a href="#login" class="to_register"> Acesso do Cliente </a>
                                </p>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>


        <!-- jQuery -->
        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <!-- jquery.inputmask -->
        <script src="vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
        <!-- PNotify -->
        <script src="vendors/pnotify/dist/pnotify.js"></script>
        <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
        <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>
        
        <script src="js/padrao.js" type="text/javascript"></script>
        <script src="js/login.js" type="text/javascript"></script>
    </body>
</html>
