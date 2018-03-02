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
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg" style="min-height: 400px;">
                                  <div class="overlay-box" style="background: #aeaeae;">
                                    <div class="user-content">
                                        <img src="<?= base_url()?>plantilla/dashboard/plugins/images/users/<?= !empty($emp->img) ? $emp->img : 'varun.jpg' ?>" class=" img-circle" alt="img">
                                        <h4 class="text-white"><?= $emp->nombres?></h4>
                                        <h5 class="text-white"><?= $emp->email?></h5> 
                                      </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <p> <strong><?= $emp->ci?></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
              <div class="col-md-8 col-xs-12">
                  <div class="white-box">
                    <div class="row">
                        <div class="col-md-12">

                        <div class="row based"><div class="col-md-4"><label class="" for="form-control-line">Nombres</label></div>
                          <div class="col-md-8"> <?= $emp->nombres?></div></div>

                        <div class="row based"><div class="col-md-4"><label class="" for="form-control-line">Apellidos</label></div>
                          <div class="col-md-8"> <?= $emp->apellidos?></div> </div>           
                  
                        <div class="row based"><div class="col-md-4"><label class="" for="form-control-line">Cedula de Identidad</label></div>
                          <div class="col-md-8"> <?= $emp->ci?></div></div>
                       
                        <div class="row based"><div class="col-md-4"><label class="" for="form-control-line">Cargo</label></div>
                          <div class="col-md-8"> <?= $emp->cargo?></div></div>

                        <div class="row based"><div class="col-md-4"><label class="" for="form-control-line">Estado civil</label></div>
                          <div class="col-md-8"> <?= $emp->estado_civ?></div> </div>
                                   
                        <div class="row based"><div class="col-md-4"><label class="" for="form-control-line">Lugar de nacimiento</label></div>
                          <div class="col-md-8"> <?= $emp->nacimiento?></div></div>

                        <div class="row based"><div class="col-md-4"><label class="" for="form-control-line">Fecha de Ingreso</label></div>
                          <div class="col-md-8"> <?= $emp->fingreso?></div></div>

                        <div class="row based"><div class="col-md-4"><label class="" for="fnacimiento">Fecha de nacimiento</label></div>
                          <div class="col-md-8"> <?= $emp->fnacimiento?></div></div> 

                       <div class="row based"><div class="col-md-4"> <label class="" for="direccion">Direccion de Domicilio</label></div>
                          <div class="col-md-8"> <?= $emp->direccion?></div></div>
                        
                        <div class="row based"><div class="col-md-4"><label class="" for="form-control-line">Telefono</label></div>
                          <div class="col-md-8"> <?= $emp->telefono?></div></div>

                        <div class="row based"><div class="col-md-4"><label class="" for="form-control-line">Telefono de Emergencia</label></div>
                          <div class="col-md-8"> <?= $emp->telefono_e?></div></div>

                        <div class="row based"><div class="col-md-4"><label class="" for="form-control-line">Correo Electronico</label></div>
                          <div class="col-md-8"> <?= $emp->email?></div></div>
                     
                        <div class="row based"><div class="col-md-4"><label class="" for="form-control-line">Observaciones</label></div>
                          <div class="col-md-8"> <?= $emp->observaciones?></div></div>
                      </div>
                    </div>
                       <div class="form-group">
                            <div class="col-sm-12 text-center">
                              <br>
                                <button class="btn btn-success">Imprimir (No funcional)</button>
                            </div>
                        </div>
                </div>
              </div>
        </div>
    </div>
                <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Template by wrappixel.com  Editor Backend: Jose Flores</footer>
</div>
        <!-- /#page-wrapper -->
    </div>
    <style type="text/css">
        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0px 1000px #fff inset;
        }
        .based{
          margin: 0.7em;
          border: 1px solid #eaeaea;
          padding-top: 0.4em;
        }
    </style>

    <script type="text/javascript">
      document.addEventListener('load', () => {
        let pass = document.getElementById('pass');
        pass.value = ""
      })
    </script>