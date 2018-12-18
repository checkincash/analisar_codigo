<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><img src="images/logo.jpg" width="45px"> <span>CHECK-IN<small>cash</small></span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
<!--            <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>-->
            <div class="profile_info">
                <span>Código: <?= $contrato->pk_contrato; ?></span>
                <h2><?= $contrato->razao; ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                    <li><a href="./"><i class="fa fa-home"></i> PAINEL</a></li>
                    <li><a href="minhaconta.php"><i class="fa fa-edit"></i> MINHA CONTA</a></li>
                    <li><a href="campanha.php"><i class="fa fa-desktop"></i> CAMPANHA</a></li>
                    <li><a href="financeiro.php"><i class="fa fa-money"></i> FINANCEIRO</a></li>
                    <li><a href="pincash.php"><i class="fa fa-credit-card"></i> PINCASH</a></li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <!--            <div class="sidebar-footer hidden-small">
                      <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                      </a>
                    </div>-->
        <!-- /menu footer buttons -->
    </div>
</div>