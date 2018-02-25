

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <div class="menu-fixed">
          <div class="col-md-3 left_col">
            <div class="scroll-view">

              <div class="clearfix"></div>

            <div class="row">
              <!-- menu profile quick info -->
              <div class="profile">
                <div class="profile_pic">
                  <?php if($consulta_user->img == ""){    ?>
                     <img  src="<?=base_url()?>public/img/profile.png" alt="" class="img-circle profile_img">
               <?php }else{ ?>
                  <img src="<?= base_url()?>public/img/<?=$consulta_user->img?>" alt="..." class="img-circle profile_img">
                   <?php } ?>
                </div>
                <br>
                <div class="profile_info text-left">
                  <span>Hola,</span>
                  <h2><?= $consulta_user->nombre; ?> <?= $consulta_user->apellido; ?> </h2>
                </div>
              </div>
              <!-- /menu profile quick info -->
            </div>

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section"><br>
                    <h3 ><a href="<?=base_url();?>" style="color:white;" >Ver mi sitio</a></h3>

                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i>Inicio<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?= base_url()?>perfil/account">Perfil</a></li>
                        <li><a href="<?= base_url()?>perfil/empresa">Empresa</a></li>
                        <li><a href="<?= base_url()?>sliders">Sliders</a></li>
                        <li><a href="<?= base_url()?>sliders/marcas">Marcas</a></li>
                        <li><a href="<?= base_url()?>status/">Iconos y Estado</a></li>

                      </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i>Contenido<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?= base_url()?>entradas">Entradas</a></li>
                        <li><a href="<?= base_url()?>servicios">Servicios</a></li>
                        <li><a href="<?= base_url()?>productos/list">Productos</a></li>
                        <!--<li><a href="<?=base_url()?>categorias/">Categorias</a></li>-->
                        <!--<li><a href="<?=base_url()?>categorias/blog">Categorias de Blog</a></li>-->
                        <li><a href="<?=base_url()?>testimonios/">Testimonios</a></li>
                      </ul>
                    </li>
                    <!--<li><a><i class="fa fa-table"></i> Servicio Tecnico <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="tables.html">Tables</a></li>
                        <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                      </ul>
                    </li>-->
                  </ul>
                </div>


              </div>
              <!-- /sidebar menu -->

              <!-- /menu footer buttons -->
              <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                  <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                  <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a href="<?= base_url()?>login/salir" data-toggle="tooltip" data-placement="top" title="Logout">
                  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
              </div>
              <!-- /menu footer buttons -->
            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?= $consulta_user->nombre; ?> <?= $consulta_user->apellido; ?>&nbsp;
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?= base_url()?>perfil/account"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span>Empresa</span>
                      </a>
                    </li>

                    <li><a href="<?= base_url()?>login/salir"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
