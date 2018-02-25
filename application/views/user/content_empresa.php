
<div class="right_col" role="main">
      <div class="row tile_count">
        <center><h1>Empresa</h1></center><br>
          <div class="col-md-12">
            <form class="" action="<?=base_url()?>perfil/empresa/edit" method="POST" enctype="multipart/form-data">

            <div class="row">

              <div class="col-md-6 col-sm-6">

                <div class="form-group">
                  <label class="control-label">Nombre de la empresa</label>
                    <input type="text" class="form-control" name="nombre" value="<?= $empresa->nombre?>" required>
                </div>

                <div class="form-group">
                  <label class="control-label">Ruc</label>
                    <input type="text" class="form-control" name="ruc" value="<?= $empresa->ruc?>" required>
                </div>

                <div class="form-group">
                  <label class="control-label">Telefonos</label>
                    <input type="text" class="form-control" name="telefonos" value="<?= $empresa->telefonos?>" required>
                </div>

                <div class="form-group">
                  <label class="control-label">Razon Social</label>
                    <input type="text" class="form-control" name="razon_social" value="<?= $empresa->razon_social?>" required>
                </div>

                <div class="form-group">
                  <label class="control-label">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= $empresa->email?>" required>
                </div>

                <div class="form-group">
                  <label class="control-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion" value="<?= $empresa->direccion?>" required>
                </div>
                </div>

                <div class="col-md-6 col-sm-6">
                  <label>Redes Sociales</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                    <input type="text" class="form-control" name="facebook" value="<?= $empresa->facebook?>">
                    <span class="input-group-btn">
                    </span>
                  </div>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                    <input type="text" class="form-control" name="twitter" value="<?= $empresa->twitter?>">
                    <span class="input-group-btn">
                    </span>
                  </div>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-google"></i></span>
                    <input type="text" class="form-control" name="google" value="<?= $empresa->google?>">
                    <span class="input-group-btn">
                    </span>
                  </div>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                    <input type="text" class="form-control" name="instagram" value="<?= $empresa->instagram?>">
                    <span class="input-group-btn">
                    </span>
                  </div>

                  <label for="">Logo</label><br>
                   <div class="text-center">
                     <img src="<?= base_url().'plantilla/assets/images/'.$empresa->logo?>" alt="" style="max-width: 400px;">
                   </div>
                   <div class="form-group">
                     <br>
                       <input type="file" class="form-control" name="userfile">
                   </div>
                   <div class="text-center">
                     <br>
                       <button type="submit" class="btn btn-primary" name="button">Guardar</button>
                   </div>
            </form>
                </div>
              </div><!--ROW-->
      </div>

  </div>
</div>
