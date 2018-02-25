
 <!-- page content -->
 <div class="right_col" role="main">
             <div class="row tile_count">
    <div class="col-lg-12">
      <center><h1>Marcas</h1></center><br>
      <div class="col-md-4 col-sm-4">
     <?php
                echo form_open_multipart("sliders/new_brand");
                echo form_input_text('alt','Alt Imagen');
                echo '<label>Imagen (100 x 60)</label><div class="form-control" style="overflow: hidden;">';
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
              <th>Alt</th>
              <th width="200px">Imagen</th>
              <th width="60px">Accion</th>
            </tr>
          </thead>

          <tbody>
              <?php
              foreach ($brands as $fila)
              {
                echo '<tr>
                        <td>'.$fila->id.'</td>
                        <td>'.$fila->alt.'</td>
                        <td><img src="'.base_url().'plantilla/assets/images/'.$fila->img.'" width="150px" height="60px"></td>
                        <td>
                          <a href="'.base_url().'sliders/del_brand/'.$fila->id.'">
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
</div>
