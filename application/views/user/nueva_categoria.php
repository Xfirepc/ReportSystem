
 <!-- page content -->
 <div class="right_col" role="main">
             <div class="row tile_count">
    <div class="col-lg-12">
      <center><h1>Editar Categorias</h1></center><br>

      <div class="col-md-4 col-sm-4">

                   <?php
                              echo form_open_multipart("categorias/new");
                              echo form_input_text('nombre','Nombre de la Catogoria');
                              echo form_input_text('descripcion','Descripcion de la Categoria');
                    ?>
                              <label for="type">Tipo</label>
                               <select name="type" class="form-control">
                                  <option value="0">Servicio</option>
                                  <option value="1">Producto</option>
                               </select><br>
                    <?php
                              echo '<label>Imagen de Categoria</label><div class="form-control" style="overflow: hidden;">';
                              echo form_input_file('Selecionar Imagen');
                              echo '</div><br>';
                              echo form_submit('Crear Categoria');
                              echo form_close();
                    ?>

      </div>

      <div class="col-md-8 col-sm-8">
        <table class="table table-borded table-hover table-responsive">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Tipo</th>
              <th width="60px">Accion</th>
            </tr>
          </thead>

          <tbody>
              <?php
              foreach ($categoria as $fila)
              {
                echo '<tr>
                        <td>'.$fila->id.'</td>
                        <td>'.$fila->nombre.'</td>
                        <td>'.$fila->type.'</td>
                        <td>
                          <a href="'.base_url().'categorias/del/'.$fila->id.'">
                            <button class="btn btn-xs btn-danger" type="button" >Eliminar</button>
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
