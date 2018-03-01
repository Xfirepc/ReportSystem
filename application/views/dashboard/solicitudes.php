
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">

    <div class="container-fluid">
        <br>
        <div class="row bg-title hidden-md hidden-lg">
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2">
                <h4 class="page-title"><a href="">Inicio</a></h4> 
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2">
                <h4 class="page-title"><a href="">Perfil</a></h4> 
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                <h4 class="page-title"><a href="">Empleados</a></h4> 
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                <h4 class="page-title"><a href="">Solicitudes</a></h4> 
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2">
                <h4 class="page-title"><a href="">Multas</a></h4> 
            </div>

            <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12">
                <a href="<?= base_url() ?>login/salir" class="btn btn-danger pull-right m-l-20 waves-effect waves-light">Cerrar Sesión</a>
                <ol class="breadcrumb">
                    <li><a href="#"></a></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        
        <!--row -->
        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- table -->
        <!-- ============================================================== -->
 <div class="row">
    <!-- .col -->
    <div class="col-md-2 pull-right text-right">
        <div class="white-box" style="padding: 5px;">
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Crear solicitud
            </button>

            <!-- Modal -->
            <div class="modal fade text-left" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
    

                        <form action="<?= base_url()?>Solicitudes/insert" method="post">
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Asunto</label>
                            <input type="text" name="asunto" class="form-control" id="exampleFormControlInput1" placeholder="">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Contenido</label>
                            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Fecha</label>
                            <input type="date" name="fecha" class="form-control" id="exampleFormControlInput1" placeholder="">
                          </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>


                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
        <!-- ============================================================== -->
        <!-- chat-listing & recent comments -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- .col -->
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Solicitudes Pendientes</h3>

                    <?php foreach ($solicitudes as $soli) {
                           if ((int)$soli->status == 0) {
                        ?>
                    <div class="comment-center p-t-10">
                        <div class="comment-body">
                            <div class="user-img"> <img src="<?= base_url()?>plantilla/dashboard/plugins/images/users/<?= $soli->img?>" alt="user" class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <div class="col-md-12">
                                    <h5>CI: <?= $soli->user_ci ?> &nbsp; <strong> <?= $soli->username ?> </strong> &nbsp;<span class="time pull-right"><?= $soli->fecha ?></span></h5>
                                </div>

                            <br/><span class="col-md-12 text-muted"><?= $soli->content?>           
                                    <div class="col-md-3 pull-right text-right">
                                    <a href="<?= base_url().'Solicitudes/checked/'.$soli->id ?>" class="btn-rounded btn btn-success btn-outline"><i class="fa fa-check"></i></a>
                                    <a href="<?= base_url().'Solicitudes/del/'.$soli->id ?>" class="btn-rounded btn btn-danger btn-outline"><i class="fa fa-trash"></i></a>
                                </div>
                            </span> 
                            </div>

                        </div>
                    </div>

                    <?php }} ?>

                </div>
            </div>

            <!-- /.col -->
        </div>
                <div class="row">
            <!-- .col -->
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Solicitudes Aprobadas</h3>

                    <?php foreach ($solicitudes as $soli) { 
                            if ((int)$soli->status == 1) {
                        ?>
                      
                    <div class="comment-center p-t-10 " style="background: #E3E4E5">
                        <div class="comment-body">
                            <div class="user-img"> <img src="<?= base_url()?>plantilla/dashboard/plugins/images/users/<?= $soli->img?>" alt="user" class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <div class="col-md-12">
                                    <h5>CI: <?= $soli->user_ci ?> &nbsp; <strong> <?= $soli->username ?> </strong> &nbsp;<span class="time pull-right"><?= $soli->fecha ?></span></h5>
                                </div>

                            <br/><span class="col-md-12 text-muted"><?= $soli->content?>           
                                    <div class="col-md-3 pull-right text-right">
                                    <a href="<?= base_url().'Solicitudes/del/'.$soli->id ?>" class="btn-rounded btn btn-danger btn-outline"><i class="fa fa-trash"></i></a>
                                </div>
                            </span> 
                            </div>

                        </div>
                    </div>

                    <?php }} ?>

                </div>
            </div>

            <!-- /.col -->
        </div>
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
