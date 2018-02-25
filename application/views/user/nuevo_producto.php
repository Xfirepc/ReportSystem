

 <!-- page content -->
 <div class="right_col" role="main">
             <div class="row tile_count">
    <div class="col-lg-12">
      <center><h1>Crear Producto</h1></center>
         <div id="richbox">

            <textarea></textarea>
            <button id="btnGenerate" class="form-control btn-default">Continuar</button>

        </div>
<?php  ?>
      <div id="form" style="display: none;">
         <button id="btnEdit" class="form-control btn-default">Editar</button>
           <?php
                    echo form_open_multipart("productos/crear");
                    echo form_input_text('nombre','Nombre del Producto');
                    echo form_input_text('etiqueta','Etiqueta');
                    echo '<label>Tipo</label>';
                      echo '<select name="type" class="form-control">';
                      foreach ($mproducts as $fila) {
                        echo '<option value="'.$fila->nombre.'">'.$fila->nombre.'</option>';
                      }
                      echo "</select><br>";
                    echo form_input_text('marca','Marca');
                    echo form_input_text('material','Material');
                    echo form_input_text('precio','Precio');
                    echo form_input_text('status','Estado 1: Nuevo - 0: Usado');
                    echo form_input_text('desc_small', '');
                          ?>
                  <label for="">Imagen del Producto</label>
                    <div class="form-control">
                        <?php echo form_input_file('userfile', ''); ?>
                    </div>
                    <br>
            <?php
                      echo form_submit('Crear Producto');
                      echo form_close();
            ?>

    </div>

</div>
</div>
