
 <!-- page content -->
 <div class="right_col" role="main">
  <div class="row tile_count">
    <div class="col-md-12">
      <center><h1>Sliders</h1></center><br>

      <div class="col-md-4 col-sm-4">
     <?php
                echo form_open_multipart("sliders/new");
                echo form_input_text('titulo','Titulo del Slider');
                echo form_input_text('descripcion','Descripcion del Slider');
                echo '<label>Imagen del slider (1920 x 830)</label><div class="form-control" style="overflow: hidden;">';
                echo form_input_file('userfile');
                echo '</div><br>';
                echo form_submit('Subir Slider');

                echo form_close();
      ?>

      </div>
      <div class="col-md-8 col-sm-8">
        <table class="table table-borded table-hover table-responsive">
          <thead>
            <tr>
              <th>ID</th>
              <th>Titulo</th>
              <th width="200px">Imagen</th>
              <th width="60px">Accion</th>
            </tr>
          </thead>

          <tbody>
              <?php
              foreach ($sliders as $fila)
              {
                echo '<tr>
                        <td>'.$fila->id.'</td>
                        <td>'.$fila->titulo.'</td>
                        <td><img src="'.base_url().'plantilla/assets/images/'.$fila->img.'" width="400px" height="100px"></td>
                        <td>
                          <a href="'.base_url().'sliders/del/'.$fila->id.'">
                            <button class="btn btn-sm btn-danger" type="button" >Eliminar</button>
                          </a>
                        <td>
                      <tr>';
              }
              ?>
          </tbody>
        </table>
      </div>
</div>
</div>

  <div class="row tile_count">
    <div class="col-md-12">
        <center><h1>Imagenes</h1></center><br>

        <div class="col-md-4 col-sm-4">
       <?php
                  echo form_open_multipart("sliders/new_image");
                  echo form_input_text('nombre','Imagen');
                  echo '<label>Imagen del slider (600 x 380)</label><div class="form-control" style="overflow: hidden;">';
                  echo form_input_file('userfile');
                  echo '</div><br>';
                  echo form_submit('Subir Imagen');
                  echo form_close();
        ?>

        </div>

        <div class="col-md-8 col-sm-8">
          <?php foreach($reciente as $row){ ?>
          <div class="col-md-3 div-img">
            <img src="<?= base_url().'public/img/'.$row->imagen?>" alt="<?= $row->nombre ?>" width="100%" height="100px">
            <div class="col-md-3">
              <a class="btn btn-danger btn-sm btn_float" href="<?= base_url().'sliders/del_image/'.$row->id?>"><i class="fa fa-trash"></i></a>
            </div>
          </div>
          <?php } ?>
        </div>
        <style media="screen">
          .btn_float{
            margin-top: -50px;
            margin-left: -8px;
          }
        </style>
    </div>
  </div>
</div>
