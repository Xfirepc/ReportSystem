

 <!-- page content -->
 <div class="right_col" role="main">
             <div class="row tile_count">
    <div class="col-lg-12">
         <div id="richbox">

            <textarea></textarea>
            <button id="btnGenerate" class="form-control btn-default">Continuar</button>

        </div>

         <div id="form" style="display: none;">
         <button id="btnEdit" class="form-control btn-default">Editar</button>
           <?php
                    echo form_open_multipart("entradas/crear");
                    echo form_input_text('title','Ingresa nombre de tu entrada');
                    echo form_input_text('desc_short','Ingresa un descripcion rapida');
                    echo form_input_text('desc_small', 'Ingresa Contenido del Post');
                    echo form_input_file('Selecionar Imagen');
                    echo form_submit('enviar');
                    echo form_close();
            ?>
    </div>

</div>
</div>
