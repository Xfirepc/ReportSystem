<body>

        <!-- Top content -->
        <div class="top-content">
          
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Sistema </strong> De empleados</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Ingrese sus credenciales de Acceso.</h3>
                                <p>Recuerde que son datos confidenciales y protegidos.</p>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-lock"></i>
                            </div>
                            </div>
                            <div class="form-bottom">
                          <form role="form" action="<?= base_url() ?>login" method="post" class="login-form">
                            <div class="form-group">
                              <label class="sr-only" for="form-username">Usuario o Email</label>
                                <input type="text" name="user" placeholder="Usuario.." class="form-username form-control" id="form-username">
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-password">Contraseña</label>
                                <input type="password" name="pass" placeholder="Contraseña.." class="form-password form-control" id="form-password">
                              </div>
                              <button type="submit" class="btn">Ingresar</button>
                              <center><p>Aun no tienes cuenta <a href="<?= base_url()?>register"><strong>Registrate</strong></a> como empleado.</p></center>
                          </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
