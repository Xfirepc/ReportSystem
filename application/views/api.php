<body>

<!-- Top content -->
<div class="top-content">

<div class="inner-bg">
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text">
            <h1><strong>Register data for </strong>API</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-box">
          <div class="form-top">
            <div class="form-top-left pull-left">
              <h3>Data for portfolio</h3>
            </div>
            <div class="form-top-right">
              <i class="fa fa-lock"></i>
            </div>
            </div>
          </div>
      
            <div class="form-bottom">

          <form role="form" action="<?= base_url()?>api/portfolio" method="post" class="login-form">
           <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-username">*Name</label>
                <input type="text"  name="name" placeholder="" class="form-username form-control" id="req">
              </div>
           </div>
            <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-username">*Title</label>
                <input type="text"  name="title" placeholder="" class="form-username form-control" id="req">
              </div>
           </div>
               <div class="col-md-12">
              <div class="form-group">
              <label class="" for="form-username">*Description</label>
                <input type="text"  name="description" placeholder="" class="form-username form-control" id="req">
              </div>
           </div>
             <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-username">Category</label>
                <input type="text"  name="category" placeholder="" class="form-username form-control" >
              </div>
           </div>
             <div class="col-md-6">
              <div class="form-group">
              <label class="" for="form-username">Url Image</label>
                <input type="text"  name="url_image" placeholder="" class="form-username form-control" >
              </div>
           </div>
           
            <div class="col-md-12">
              <div class="form-group">
            <label class="" for="direccion">*Client</label>
              <input type="text"  name="client" placeholder="" class="form-username form-control" id="req">
            </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                <label class="" for="form-username">Date</label>
                <input type="date"  name="date" placeholder="" class="form-username form-control" id="form-username">
              </div>
              <div class="col-md-6">
              <label class="" for="fnacimiento">Link</label>
                <input type="text"  name="link" placeholder="" class="form-username form-control" id="form-username">
                <br>
              </div>
                 <br>
            </div>

              <div class="clear-fix"> </div>
              <button type="submit" class="btn">Enviar</button>
          </form>


          <div class="form-top">
              <div class="form-top-left pull-left">
                <h3>Data for blog</h3>
              </div>
              <div class="form-top-right">
                <i class="fa fa-lock"></i>
              </div>
              </div>
          <form role="form" action="<?= base_url()?>api/blog" method="post" class="login-form">
               <div class="col-md-6">
                 <div class="form-group">
                 <label class="" for="form-username">*Title</label>
                   <input type="text"  name="title" placeholder="" class="form-username form-control" id="req">
                 </div>
              </div>
                  <div class="col-md-6">
                 <div class="form-group">
                 <label class="" for="form-username">*Description</label>
                   <input type="text"  name="description" placeholder="" class="form-username form-control" id="req">
                 </div>
              </div>
                <div class="col-md-12">
                 <div class="form-group">
                 <label class="" for="form-username">Url Image</label>
                   <input type="text"  name="url_image" placeholder="" class="form-username form-control" >
                 </div>
              </div>
              
               <div class="form-group">
                 <div class="col-md-6">
                   <label class="" for="form-username">Date</label>
                   <input type="date"  name="date" placeholder="" class="form-username form-control" id="form-username">
                 </div>
                 <div class="col-md-6">
                 <label class="" for="fnacimiento">Mentions</label>
                   <input type="text"  name="mentions" placeholder="" class="form-username form-control" id="form-username">
                   <br>
                 </div>
                    <br>
               </div>
   
                 <div class="clear-fix"> </div>
                 <button type="submit" class="btn">Enviar</button>
             </form>

        </div>
        </div>
    </div>
</div>
</div>

</div>
