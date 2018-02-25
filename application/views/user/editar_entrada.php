<!-- page content -->
<div class="right_col" role="main">
     <div class="row tile_count">

       <div class="row">
            <div class="containter">
<center><h1>Editar Entrada</h1></center>


              <div class="col-sm-10"><br><br>


     <div id="form" >

                <?php
                    echo form_open_multipart("entradas/updatePost");
                    $attribs = array('style'=> 'display: none;', 'value'=> $row->post_id);
                    echo form_input_text('post_id','',$attribs);
                    $attribs = array('value'=> $row->title);
                    echo form_input_text('title','Titulo',$attribs);
                     $attribs = array('value'=> $row->desc_short);
                    echo form_input_text('desc_short','Descripcion Corta',$attribs);
                    $attribs = array('style'=> '','value'=> $row->desc_small);
                    echo form_input_text('desc_small','Contenido',$attribs);
                 ?><label for="">Imagen del Post</label>
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
