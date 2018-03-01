
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
                                    <td><button class="btn btn-info btn-xs"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-warning btn-xs"><i class="fa fa-trash"></i></button>
                                    </td>

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

    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
