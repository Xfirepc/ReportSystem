
 <!-- page content -->
 <div class="right_col" role="main">
             <div class="row tile_count">
    <div class="col-md-12">
      <script type="text/javascript" src="<?=base_url().'plantilla_admin/js/jscolor.js'?>"></script>
      <h4 data-toggle="collapse" data-target="#demo" style="cursor: pointer;">Desea Otro icono?</h4>
      <div id="demo" class="collapse">
      <ul>
        <li>Visitar el enlace: <a href="http://fontawesome.io/icons/" target="_blank"><b>FontAwesome</b></a></li>
        <li>Buscar y seleccionar el Icono que desea Ingresar.</li>
        <li>Buscar un codigo de la etiqueta class como este: fa fa-google</li>
        <li>Pegarlo en el campo de Icono del Estado y Guardar</li>
      </ul>
      </div>
     <?php
      echo form_open_multipart("status/edit");

     foreach ($status as $value) {
       $id = $value->id;
       echo '<div class="col-md-6 col-sm-6">';
       echo '<h3>Icono '.$id.'</h3>';

       $attr['value'] = $value->text;
       echo form_input_text('text'.$id,'Titulo', $attr);

       $attr['value'] = $value->icon;
       echo form_input_text('icono'.$id,'Icono del Estado', $attr);

       $attr['value'] = $value->number;
       echo form_input_text('number'.$id,'Numero', $attr);

       echo '</div>';
     }
     ?>
      <div class="col-md-12 col-sm-12">
        <div class="col-md-8">
          <label>Color:</label><input name="color" class="jscolor form-control" value="<?= $status[0]->color ?>"><br>
            <input type="file" name="userfile" class="form-control">
        </div>
        <div class="col-md-4 text-right"><br>
      <?php
      echo form_submit('Editar Datos');
      echo form_close();
       ?>
       </div>
      </div>
</div>
</div>
</div>
