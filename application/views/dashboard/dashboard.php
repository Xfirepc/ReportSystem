
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
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
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                       <div role="search" class="app-search" style="margin-top: -20px;">
                        <input  class="form-control pull-right row b-none" style="background: #ECECEC"><a href=""><i class="fa fa-search"></i></a> 
                    </div>
                    </div>
                    <h3 class="box-title">Recent sales</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#CI</th>
                                    <th>Nombre</th>
                                    <th>Cargo</th>
                                    <th>F. Ingreso</th>
                                    <th>Telefono</th>
                                    <th>Observaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($users as $user){?>
                                <tr>
                                    <td><?= $user->ci ?></td>
                                    <td><?= $user->nombres.' '.$user->apellidos ?></td>
                                    <td><?= !empty($user->ci ) ? $user->cargo : 'Ninguno' ?></td>
                                    <td class="txt-oflo"><?= $user->fingreso ?></td>
                                    <td class="txt-oflo">0<?= $user->telefono ?></td>
                                    <td><?= !empty($user->observaciones ) ? $user->observaciones : 'Ninguna' ?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- chat-listing & recent comments -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- .col -->
            <div class="col-md-12 col-lg-8 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Recent Comments</h3>
                    <div class="comment-center p-t-10">
                        <div class="comment-body">
                            <div class="user-img"> <img src="<?= base_url()?>plantilla/dashboard/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <h5>Pavan kumar</h5><span class="time">10:20 AM   20  may 2016</span>
                                <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> <a href="javacript:void(0)" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Approve</a><a href="javacript:void(0)" class="btn-rounded btn btn-default btn-outline"><i class="ti-close text-danger m-r-5"></i> Reject</a>
                            </div>
                        </div>
                        <div class="comment-body">
                            <div class="user-img"> <img src="<?= base_url()?>plantilla/dashboard/plugins/images/users/sonu.jpg" alt="user" class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <h5>Sonu Nigam</h5><span class="time">10:20 AM   20  may 2016</span>
                                <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span>
                            </div>
                        </div>
                        <div class="comment-body b-none">
                            <div class="user-img"> <img src="<?= base_url()?>plantilla/dashboard/plugins/images/users/arijit.jpg" alt="user" class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <h5>Arijit singh</h5><span class="time">10:20 AM   20  may 2016</span>
                                <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="panel">
                    <div class="sk-chat-widgets">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                CHAT LISTING
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        </div>
                    </div>
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
