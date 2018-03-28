
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <br>
        <div class="row bg-title hidden-md hidden-lg">
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2">
                <h4 class="page-title"><a href="">Inicio</a></h4> 
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2">
                <h4 class="page-title"><a href="">Perfil</a></h4> 
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                <h4 class="page-title"><a href="">Empleados</a></h4> 
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                <h4 class="page-title"><a href="">Solicitudes</a></h4> 
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2">
                <h4 class="page-title"><a href="">Multas</a></h4> 
            </div>

            <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12">
                <a href="<?= base_url() ?>login/salir" class="btn btn-danger pull-right m-l-20 waves-effect waves-light">Cerrar Sesión</a>
                <ol class="breadcrumb">
                    <li><a href="#"></a></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        
        <!--row -->
        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- table -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                       <div role="search" class="app-search" style="margin-top: -20px;">
                        <input  class="form-control pull-right row b-none" style="background: #ECECEC"><a href=""><i class="fa fa-search"></i></a> 
                    </div>
                    </div>
                    <h3 class="box-title">Empleados</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#CI</th>
                                    <th>Nombre</th>
                                    <th>Cargo</th>
                                    <th>F. Ingreso</th>
                                    <th>Telefono</th>
                                    <th>Observaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($users as $user){?>
                                <tr>
                                    <td><?= $user->ci ?></td>
                                    <td><?= $user->nombres.' '.$user->apellidos ?></td>
                                    <td><?= !empty($user->ci ) ? $user->cargo : 'Ninguno' ?></td>
                                    <td class="txt-oflo"><?= $user->fingreso ?></td>
                                    <td class="txt-oflo"><?= $user->telefono ?></td>
                                    <td><?= !empty($user->observaciones ) ? $user->observaciones : 'Ninguna' ?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- chat-listing & recent comments -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- .col -->
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Solicitudes</h3>
                    <?php foreach ($solicitudes as $soli) { ?>
                      
                    <div class="comment-center p-t-10">
                        <div class="comment-body">
                            <div class="user-img"> <img src="<?= base_url()?>plantilla/dashboard/plugins/images/users/<?= $soli->img?>" alt="user" class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <div class="col-md-12">
                                    <h5>CI: <?= $soli->user_ci ?> &nbsp; <strong> <?= $soli->username ?> </strong> &nbsp;<span class="time pull-right"><?= $soli->fecha ?></span></h5>
                                </div>

                            <br/><span class="col-md-12 text-muted"><?= $soli->content?>           
                                    <div class="col-md-3 pull-right text-right">
                                </div>
                            </span> 
                            </div>

                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>

            <!-- /.col -->
        </div>
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Template by wrappixel.com  Editor Backend: Jose Flores</footer>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
