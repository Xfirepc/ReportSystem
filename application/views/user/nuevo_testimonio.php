 <div class="right_col" role="main">
             <div class="row tile_count">
        <div class="col-lg-12">

			<div class="row">
			<h1> Nuevo Testimonio</h1>

                    <div id="form">

                  <?php
                    echo form_open_multipart("testimonios/crear");
                    echo form_input_text('cliente','Ingresa nombre del Cliente');
                    echo form_input_text('empresa','Ingresa la Compania o Empresa');
                    echo form_input_text('test','Ingresa una descripcion del testmionio');
                    echo '<label>Imagen del Cliente</label><div class="form-control">';
                    echo form_input_file('userfile');
                    echo '</div><br>';
                    echo form_submit('Guardar');
                    echo form_close();

                    ?>

                    </div>



                    </div>
                </div>
        </div>

</div>
