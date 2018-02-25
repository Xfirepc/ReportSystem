  <!-- page content -->
 <div class="right_col" role="main">
             <div class="row tile_count">
                <div class="col-lg-12">

        <h1> Modificar Tesmtonio <?= $row->test_id; ?> </h1>

                    <div >
                <?php
                    echo form_open_multipart("testimonios/update");
                    $attribs = array('style'=> 'display: none;', 'value'=> $row->test_id);
                    echo form_input_text('id','',$attribs);
                    $attribs = array('value'=> $row->nombre);
                    echo form_input_text('nombre','Ingresa nombre del cliente',$attribs);
                    $attribs = array('value'=> $row->compania);
                    echo form_input_text('compania','Ingresa la Empresa',$attribs);
                    $attribs = array('value'=> $row->test);
                    echo form_input_text('test','Ingresa el testimonio',$attribs);
                    echo form_input_file('userfile');
                    echo form_submit('Modificar Testimonio');
                    echo form_close();


                    ?>

                    </div>



                    </div>
                </div>

</div>
