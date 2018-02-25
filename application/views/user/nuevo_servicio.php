

 <!-- page content -->
 <div class="right_col" role="main">
             <div class="row tile_count">
    <div class="col-lg-12">
      <center><h1>Crear Servicio</h1></center>
         <div id="richbox">

            <textarea></textarea>
            <button id="btnGenerate" class="form-control btn-default">Continuar</button>

        </div>

      <div id="form" style="display: none;">
         <button id="btnEdit" class="form-control btn-default">Editar</button>
           <?php
                    echo form_open_multipart("servicios/crear");
                    echo form_input_text('nombre','Ingresa el titulo del Servicio');
                    echo form_input_text('contenido','Ingresa Contenido (Max *150)');
                    echo form_input_text('precio','Precio');

                    echo form_input_text('etiquetas','Etiquetas');
                    echo form_input_text('status','Estado 1: Activo - 0: Pausado');
                    echo form_input_text('desc_small', '');
                          ?>
                  <label for="">Imagen del Servicio</label>
                    <div class="form-control">
                        <?php echo form_input_file('userfile', ''); ?>
                    </div>
                    <br>
            <?php
                      echo form_submit('Crear Servicio');
                      echo form_close();
            ?>

    </div>

</div>
</div>
