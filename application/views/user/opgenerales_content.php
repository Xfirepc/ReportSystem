 <!-- page content -->
 <div class="right_col" role="main">
			 <div class="row tile_count">
                    <div class="col-lg-12">

                    <h1> Opciones Generales</h1>
			 <?php  
                    echo form_open("perfil/insertar_opgenerales");
                    echo "<label>logo</label>";
                    echo form_input_text('logo','Logo Para tu Pagina Home & otros Documentos');
                    echo form_input_text('razon_social','Ingresa tu Razon Social');
                    echo form_input_text('identificacion', 'Ingresa RUC de la empresa');
                    echo form_input_text('email', 'Ingresa un correo electronico');
                    echo form_input_text('direccion', 'Ingresa una dirección fisica de tu empresa');
                    echo form_input_text('telefono', 'Ingresa unos telefonos de contacto');                   
                    echo form_submit('Guardar');
                    echo form_close();
                    
                ?>      
                    </div>
			</div>
</div>			 