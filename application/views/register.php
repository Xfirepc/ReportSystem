<body>

<!-- Top content -->
<div class="top-content">

<div class="inner-bg">
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text">
            <h1><strong>Registro de </strong>empleados</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-box">
          <div class="form-top">
            <div class="form-top-left">
              <h3>Ingrese sus credenciales de Registro</h3>
                <p>Recuerde que son datos confidenciales y protegidos, los (*) son campos obligarotios.</p>
            </div>
            <div class="form-top-right">
              <i class="fa fa-lock"></i>
            </div>
            </div>

            <?php if(isset($msg)){ ?>
              <div class="alert alert-<?= $type?> alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php  echo $msg;
                if ($type == 'success') {
                  echo ', <strong><a class ="alert-link" href='.base_url().'>Inicie Sesion aqui.</a></strong> ';
                }
            ?>
          </div>
            <?php } ?>

            <div class="form-bottom">
          <form role="form" action="<?= base_url()?>register/registro" method="post" class="login-form" enctype="multipart/form-data">
           <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-username">*Nombres</label>
                <input type="text"  name="nombres" placeholder="" class="form-username form-control" id="req">
              </div>
           </div>
            <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-username">*Apellidos</label>
                <input type="text"  name="apellidos" placeholder="" class="form-username form-control" id="req">
              </div>
           </div>
               <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-username">*Cedula de Identidad</label>
                <input type="number"  name="ci" placeholder="" class="form-username form-control" id="req">
              </div>
           </div>
             <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-username">Cargo</label>
                <input type="text"  name="cargo" placeholder="" class="form-username form-control" >
              </div>
           </div>
             <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-username">Estado civil</label>
                <select class="form-control" id="exampleFormControlSelect2" name="estado_civ">
                  <option>Casado/a</option>
                  <option>Soltero/a</option>
                  <option>Divorciado/a</option>
                  <option>Viudo/a</option>
                </select>
              </div>
           </div>
             <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-username">Lugar de nacimiento</label>
                <input type="text"  name="nacimiento" placeholder="" class="form-username form-control" >
              </div>
           </div>
            <div class="form-group">
              <div class="col-md-6">
                <label class="" for="form-username">Fecha de Ingreso</label>
                <input type="date"  name="fingreso" placeholder="" class="form-username form-control" id="form-username">
              </div>
              <div class="col-md-6">
              <label class="" for="fnacimiento">Fecha de nacimiento</label>
                <input type="date"  name="fnacimiento" placeholder="" class="form-username form-control" id="form-username">
                <br>
              </div>
                 <br>
            </div>

               <div class="col-md-12">
                 <div class="form-group">
              <label class="" for="direccion">*Direccion de Domicilio</label>
                <input type="text"  name="direccion" placeholder="" class="form-username form-control" id="req">
              </div>
               </div>

               <div class="col-md-6"><div class="form-group">
              <label class="" for="form-username">*Telefono</label>
                <input type="number"  name="telefono" placeholder="" class="form-username form-control" id="req">
              </div></div>
               <div class="col-md-6">
                 <div class="form-group">
              <label class="" for="form-username">*Telefono de Emergencia</label>
                <input type="number"  name="telefono_e" placeholder="" class="form-username form-control" id="req">
              </div>
               </div>
              <div class="col-md-6"><div class="form-group">
              <label class="" for="form-username">*Correo Electronico</label>
                <input type="email"  name="email" placeholder="" class="form-username form-control" id="req">
              </div>
            </div>

              <div class="col-md-6"> <div class="form-group">
                <label class="" for="form-password">*Contraseña</label>
                <input type="password" name="pass" placeholder="" class="form-password form-control" id="req">
              </div>
            </div>
                <div class="col-md-12">
                  <div class="form-group">
              <label class="" for="form-username">Observaciones</label>
                <input type="text"  name="observaciones" placeholder="" class="form-username form-control"><br>
              </div>
                </div>


              <div class="clear-fix"> </div>
              <button type="submit" class="btn">Registrar</button>
              <center><p>Ya tienes cuenta? <a href="<?= base_url()?>"><strong>Inicia Sesion</strong></a> como empleado.</p></center>
          </form>
        </div>
        </div>
    </div>
</div>
</div>

</div>
