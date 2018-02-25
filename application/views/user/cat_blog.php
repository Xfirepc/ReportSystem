
 <!-- page content -->
 <div class="right_col" role="main">
             <div class="row tile_count">
    <div class="col-lg-12">
      <center><h1>Crear Categorias de Blog</h1></center><br>

      <div class="col-md-4 col-sm-4">
        <h4>Categoria</h4>
       <?php
            echo form_open_multipart("categorias/new_catblog");
            echo form_input_text('cat_nombre','');
            echo form_submit('Crear Categoria');
            echo form_close();
        ?>
      </div>

      <div class="col-md-4 col-sm-4">
        <h4>Subcategoria</h4>
       <?php
            echo form_open_multipart("categorias/new_subcatblog");
            echo form_input_text('nombre','');

        ?>
            <select name="padre" class="form-control">
              <option value="x">Seleccionar..</option>
              <?php foreach ($categoria as $c){ ?>
                <option value="<?= $c->cat_nombre ?>"><?= $c->cat_nombre ?></option>
              <?php } ?>
            </select></br>

        <?php
            echo form_submit('Crear Subcategoria');
            echo form_close();
        ?>
      </div>

      <div class="col-md-12 col-sm-12">
        <br><center><h1>Listado</h1></center><br>
        <table class="table table-borded table-hover table-responsive">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Subcategorias</th>
              <th width="60px">Accion</th>
            </tr>
          </thead>

          <tbody>
              <?php
              foreach ($categoria as $fila)
              {
                echo '<tr>
                        <td>'.$fila->cat_id.'</td>
                        <td>'.$fila->cat_nombre.'</td>
                        <td>';
                          $ci = &get_instance();
                          $sub = $ci->get_subcat($fila->cat_nombre);
                          echo '<ul>';
                          foreach ($sub as $value) {
                            echo '<li>' . $value->sub_nombre . '</li>';
                          }
                          echo '</ul>';
                echo   '</td>
                        <td>
                          <a href="'.base_url().'categorias/del/'.$fila->cat_id.'">
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
