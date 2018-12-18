<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="./" class="site_title"><img src="../images/logo.jpg" width="45px"> <span>CHECK-IN<small>cash</small></span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
<!--            <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>-->
            <div class="profile_info">
                <span>Código: <?= $admin->id; ?></span>
                <h2><?= $admin->usuario; ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                <? if($admin->nivel == 1) { ?>
                    <li><a href="./"><i class="fa fa-dashboard"></i> PAINEL</a></li>
                <? } ?>
                    <li><a href="contratos.php"><i class="fa fa-home"></i> CONTRATOS</a></li>
                <? if($admin->nivel == 1) { ?>
                    <li><a href="sorteios.php"><i class="fa fa-list-ul"></i> SORTEIOS</a></li>
                    <li><a href="usuarios.php"><i class="fa fa-users"></i> USUÁRIOS</a></li>
                    <li><a href="configuracoes.php"><i class="fa fa-cogs"></i> CONFIGURAÇÕES</a></li>
                <? } ?>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->
    </div>
</div>