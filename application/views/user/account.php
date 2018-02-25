
<div class="right_col" role="main">
      <div class="row tile_count">
        <center><h1>Mi Perfil</h1></center>
          <div class="col-md-6">
            <form class="" action="<?=base_url()?>perfil/account/edit" method="POST" enctype="multipart/form-data">

      <?php

          $attr = array('value' => $consulta_user->nombre);
          echo form_input_text('nombre','Su Nombre',$attr);

          $attr = array('value' => $consulta_user->apellido);
          echo form_input_text('apellido','Su Apellido',$attr);

          $attr = array('value' => $consulta_user->email);
          echo form_input_text('email', 'Su Email',$attr);

        ?>
      <label for="">Imagen de Perfil</label>
        <div class="form-control">
            <?php echo form_input_file('userfile', ''); ?>
        </div>
        <br>
        <?php
          echo form_submit('Guardar');

        ?>
        </form>
      </div>
      <div class="col-md-6 text-center">
        <br>
        <h2>Foto</h2>
        <br>
        <?php if($consulta_user->img == ""){    ?>
          <img class="img-circle" src="<?=base_url()?>public/img/profile.png" alt="" width="200px" height="200px">

        <?php }else{ ?>
          <img class="img-circle" src="<?=base_url()?>public/img/<?php echo $consulta_user->img?>" alt="" width="200px" height="200px">
      <?php } ?>
      </div>
  </div>
</div>
