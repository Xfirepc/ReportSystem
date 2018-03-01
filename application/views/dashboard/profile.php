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
                            <div class="user-bg">
                                  <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="<?= base_url()?>plantilla/dashboard/plugins/images/users/<?= !empty($profile->img) ? $profile->img : 'varun.jpg' ?>" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white"><?= $profile->nombres?></h4>
                                        <h5 class="text-white"><?= $profile->email?></h5> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <p> <?= $profile->ci?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
         <form role="form" action="<?= base_url()?>register/update" method="post" class="login-form"  enctype="multipart/form-data">
           <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-control-line">*Nombres</label>
                <input type="text"  name="nombres"   value="<?= $profile->nombres?>" class="form-control form-control-line" id="req">
              </div>
           </div>
            <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-control-line">*Apellidos</label>
                <input type="text"  name="apellidos"   value="<?= $profile->apellidos?>" class="form-control form-control-line"  id="req">
              </div>
           </div>
               <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-control-line">*Cedula de Identidad</label>
                <input type="number"  name="ci"   value="<?= $profile->ci?>" class="form-control form-control-line" id="req">
              </div>
           </div>
             <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-control-line">Cargo</label>
                <input type="text"  name="cargo"   value="<?= $profile->cargo?>" class="form-control form-control-line" >
              </div>
           </div>
             <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-control-line">Estado civil</label>
                <select class="form-control form-control-line" id="exampleFormControlSelect2" name="estado_civ">
                  <option><?= $profile->estado_civ?></option>
                  <option>------------------</option>
                  <option>Casado/a</option>
                  <option>Soltero/a</option>
                  <option>Divorciado/a</option>
                  <option>Viudo/a</option>
                </select>
              </div>
           </div>
             <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-control-line">Lugar de nacimiento</label>
                <input type="text"  name="nacimiento"   value="<?= $profile->nacimiento?>" class="form-control form-control-line" >
              </div>
           </div>
            <div class="form-group">
              <div class="col-md-6">
                <label class="" for="form-control-line">Fecha de Ingreso</label>
                <input type="date"  name="fingreso"   value="<?= $profile->fingreso?>" class="form-control form-control-line" id="form-control-line">
              </div>
              <div class="col-md-6">
              <label class="" for="fnacimiento">Fecha de nacimiento</label>
                <input type="date"  name="fnacimiento"   value="<?= $profile->fnacimiento?>" class="form-control form-control-line" id="form-control-line">
                <br>
              </div>
                 <br>
            </div>

               <div class="col-md-12">
                 <div class="form-group">
              <label class="" for="direccion">*Direccion de Domicilio</label>
                <input type="text"  name="direccion"   value="<?= $profile->direccion?>" class="form-control form-control-line" id="req">
              </div>
               </div>

               <div class="col-md-6"><div class="form-group">
              <label class="" for="form-control-line">*Telefono</label>
                <input type="number"  name="telefono"   value="<?= $profile->telefono?>" class="form-control form-control-line" id="req">
              </div></div>
               <div class="col-md-6">
                 <div class="form-group">
              <label class="" for="form-control-line">*Telefono de Emergencia</label>
                <input type="number"  name="telefono_e"  value="<?= $profile->telefono_e?>"  class="form-control form-control-line" id="req">
              </div>
               </div>
              <div class="col-md-6"><div class="form-group">
              <label class="" for="form-control-line">*Correo Electronico</label>
                <input type="email"  name="email"  value="<?= $profile->email?>" class="form-control form-control-line" id="req" autocomplete="off">
              </div>
            </div>

              <div class="col-md-6"> <div class="form-group">
                <label class="" for="form-password">*Contraseña</label>
                <input type="password" name="passw"   value="<?= $profile->pass?>" class="form-control form-control-line" id="pass" autocomplete="off">
              </div>
            </div>
                <div class="col-md-12">
                  <div class="form-group">
              <label class="" for="form-control-line">Observaciones</label>
                <input type="text"  name="observaciones"   value="<?= $profile->observaciones?>" class="form-control form-control-line"><br>
              </div>
                </div>
              <div class="col-md-12">
                  <div class="form-group">
                    <label class="" for="form-control-line">Imagen</label>
                      <input type="file" name="userfile" class="form-control form-control-line"><br>
                    </div>
                </div>
               <div class="form-group">
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-success">Actualizar</button>
                    </div>
                </div>
              <div class="clear-fix"> </div>

              <center><p>Actulizara sus datos.</p></center>
          </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <style type="text/css">
        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0px 1000px #fff inset;
        }
    </style>

    <script type="text/javascript">
      document.addEventListener('load', () => {
        let pass = document.getElementById('pass');
        pass.value = ""
      })
    </script>