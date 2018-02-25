<!-- page content -->
<div class="right_col" role="main">
     <div class="row tile_count">

       <div class="row">
            <div class="containter">
<center><h1>Editar Servicio</h1></center>
              <div class="col-sm-10"><br>

     <div id="form" >

                <?php
                    echo form_open_multipart("servicios/update/");

                    $attribs = array('style'=> 'display: none;', 'value'=> $row->servicio_id);
                    echo form_input_text('servicio_id','',$attribs);

                    $attribs = array('value'=> $row->nombre);
                    echo form_input_text('nombre','Titulo',$attribs);

                     $attribs = array('value'=> $row->descripcion);
                    echo form_input_text('desc_small','Contenido',$attribs);

                    $attribs = array('style'=> '','value'=> $row->contenido);
                    echo form_input_text('contenido','Descripcion corta',$attribs);


                    $attribs = array('style'=> '','value'=> $row->precio);
                    echo form_input_text('precio','Precio',$attribs);

                    $attribs = array('style'=> '','value'=> $row->etiqueta);
                    echo form_input_text('etiqueta','Etiquetas',$attribs);

                 ?><label for="">Imagen del del Servicio</label>
                 <div class="form-control">

                   <?php
                      echo form_input_file('userfile','Selecionar Imagen').'<br>';
                    ?>
                 </div><br>
                <?php
                    echo form_submit('Modificar Post');
                    echo form_close();
                 ?>
                            <button id="modi_mas" class="form-control btn-default">Modificar más..</button>
                        </div>
                        <div id="richbox" style="display: none;">

                            <textarea></textarea>
                            <button id="vol_sa" class="form-control btn-default">Volver Para Guardar..</button>
                        </div>

              </div>

              <div class="col-sm-1"></div>

            </div>
       </div>
    </div>
</div>
