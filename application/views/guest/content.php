
<!--Banner-->
<section id="banner2">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	   <!-- Wrapper for slides -->
	   <div class="carousel-inner">
					<?php
					$x = 0;
					foreach ($sliders as $value){
						if ($x == 0){
							$x++;
							echo '<div class="item active">';}
						else{
							echo '<div class="item">';}
						?>
	              <img src="<?=base_url().'plantilla/assets/images/'.$value->img ?>" alt="image">
	              <div class="carousel-caption">
	                <div class="banner_text text-center div_zindex white-text">
	                        <h1><?= $value->titulo ?></h1>
	                        <h3><?= $value->descripcion ?></h3>
	                        <a href="#" class="btn">Ver Mas</a>
	                    </div>
	              </div>
	          </div>
					<?php } ?>
	   </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <div class="icon-prev"></div>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          	<div class="icon-next"></div>
          </a>
    </div>
</section>
<!--/Banner-->

<style media="screen">
  .banner-section{
    background: url('<?=base_url().'plantilla/assets/images/'.$empresa->slider ?>');
    background-size: cover;
    background-repeat: no-repeat;
  }
</style>
<!-- /Banners -->


<!-- About -->
<section class="about-us-section section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Bienvenidos a <span>Auto Leather</span></h2>
      <p>Aliados estratégicos de las principales marcas del país</p>
    </div>
  </div>
</section>
<!-- /About -->

<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>PRODUCTOS CON CALIDAD<span>GARANTIZADA</span></h2>
      <p>Años de experencia nos respaldan en nuestros servicos...</p>
    </div>
    <div class="row">
          <?php foreach ($menu_s->result() as $fila) {
            ?>
          <div class="col-list-3" id="fade">
            <div class="recent-car-list">
              <div class="car-info-box">
									<center><a href="<?=base_url().'servicios/ver/'.$fila->servicio_id.'/'.str_replace(" ", "-", $fila->nombre)?>">
										<div class="back"></div>
		                <div class="">
		                	<img class="transition " src="<?=base_url()?>public/img/<?=$fila->img?>" alt="image"></a>
		                </div>
									</center>
	                <ul>
										<p class="textinf"><?=$fila->contenido?></p>
	                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="<?= base_url().'productos/ver_cat/'.$fila->type.'/'.str_replace(" ", "-", $fila->nombre)?>/<?= str_replace(" ", "-", $fila->nombre);?>"><?=$fila->nombre?></a></h6>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat -->
<style media="screen">
.back{
	position: absolute;
	width: 100%;
	height: 280px;
	z-index: 1;
	background: rgb(252, 117, 117);
	opacity: 0;
	transition: all 0.6s;
}
.car-info-box:hover .back{
	opacity: 0.2;
}
.car-info-box{
	overflow: hidden;
	height: 280px;
}
.transition {
	position: relative;
	width: 100%;
	height: 280px;
	background: #f92672;
	transition: all 0.6s;
}
.car-info-box:hover .transition{
	filter: blur(1px);
	width: 110%;
	height: 310px;
	margin: auto;
	margin-left: -1em;
	margin-top: -1em;
}
.textinf{
	color: white;
	font-size: 13px;
}
</style>
<!-- Fun Facts-->
<section class="fun-facts-section ">
  <div class="container div_zindex">
    <div class="row">

			<?php foreach($status as $row){ ?>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m" style="background: #<?=$row->color ?>;">
          <div class="cell">
            <h2><i class="<?= $row->icon ?>" aria-hidden="true"></i><?= $row->number ?>+</h2>
            <p><?= $row->text ?></p>
          </div>
        </div>
      </div>
			<?php } ?>

			<style media="screen">
					.fun-facts-section{
						background: url("<?= base_url().'public/img/'.$status[0]->img ?>");
						background-size: cover;
						background-repeat: no-repeat;
					}
			</style>
    </div>
  </div>
  <!-- Dark Overlay-->
</section>
<!-- /Fun Facts-->

<!--Featured Car-->
<!--
<section class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Productos Destacados <span>ofertas especiales</span></h2>
      <p>No te pierdas ningun producto de nuestras ofertas !! ... todos nos nuestros productos son hecho en 100% cuero </p>
    </div>
    <div class="row">

      <?php foreach ($producto->result() as $P){
        ?>

      <div class="col-list-3">
        <div class="featured-car-list">
          <div class="featured-car-img"> <a href="<?=base_url().'productos/ver/'.$P->product_id.'/'.str_replace(" ", "-", $P->nombre)?>"><img src="<?=base_url().'public/img/'.$P->img?>" width="100%" height="300px" alt="Image"></a>
            <div class="label_icon">
              <?php if ($P->status == 1) {
                echo "Nuevo";
              }else {
                echo "Usado";
              }
               ?>
            </div>
          <div class="compare_item">
              <div class="checkbox">
                <input  type="checkbox" id="compare">
                <label for="compare">Compare</label>
              </div>
            </div>
          </div>
          <div class="featured-car-content">
            <h6><a href="<?=base_url().'productos/ver/'.$P->product_id.'/'.str_replace(" ", "-", $P->nombre)?>"><?= $P->nombre ?></a></h6>
            <div class="price_info">
              <p class="featured-price">$ <?= $P->precio ?></p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
            </div>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i><?= $P->etiqueta ?></li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i><?= $P->type ?></li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i><?= $P->material ?></li>
              <li><i class="fa fa-car" aria-hidden="true"></i><?= $P->marca ?></li>

            </ul>
          </div>
        </div>
      </div>

<?php } ?>


    </div>
  </div>
</section>-->
<!-- /Featured Car-->

<!--Trending Car-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Trending <span>Cars of the Year</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div id="trending_slider">
          <?php foreach($reciente as $row){ ?>

						<div class="trending-car-m">
	            <div class="trending-car-img"> <img src="<?=base_url().'public/img/'.$row->imagen?>" alt="Image" width="100%" height="300px" /> </div>
	            <div class="trending-hover">
	              <h4><a href="#"><?= $row->nombre ?></a></h4>
	            </div>
	          </div>

					<?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Trending Car-->

<!--Testimonial -->
<!--
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Our Satisfied <span>Customers</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
    </div>
    <div class="row">

      <div id="testimonial-slider">

  <?php
      foreach ($testimonios->result() as $row) {
   ?>
         <div class="testimonial-m" >
           <div class="testimonial-img"> <img src="<?=base_url().'public/img/testimonios/'.$row->img?>" alt="images" /> </div>
           <div class="testimonial-content" style="background: #d9d9d9;">
             <div class="testimonial-heading">
               <h5><?= $row->nombre?></h5>
               <span class="client-designation"><?= $row->compania?></span> </div>
               <p><?= $row->test?></p>
           </div>
         </div>

   <?php
   }
    ?>
      </div>
    </div>
  </div>

  <div class="dark-overlay"></div>
</section>-->
<!-- /Testimonial-->

<!--Blog -->
<section class="section-padding" id="noticias">
  <div class="container">
    <div class="section-header text-center">
      <h2>Últimas Novedades de<span> la Industria Automoriz</span></h2>
      <p>Te presentamos las últimas novedades de Autoleather y del mundo Automotriz.</p>
    </div>
    <div class="row">

      <?php
				$x = 0;
				foreach ($blog->result() as $fila){
				if ($x <= 3) {
						if ($x % 2 == 0){
							echo '<div class="row">';
						}
				?>
				<div class="col-md-6 col-sm-6" style="margin-bottom: 2em; float: left;">
          <article class="blog-list" >
            <div class="blog-info-box">
              <div class="share_article">
                <p><i class="fa fa-share-alt" aria-hidden="true"></i></p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  </ul>
              </div>
              <a href="<?=base_url()?>post/ver/<?=$fila->post_id?>/<?= str_replace(" ", "-", $fila->title);?>">
                <img src="<?=base_url()?>public/img/<?=$fila->img?>" height="350px" width="100%"></a>
              <ul>
                <li><i class="fa fa-calendar" aria-hidden="true"></i><?=$fila->fecha?></li>
                <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i><?=$fila->comentarios?></a></li>
              </ul>
            </div>
            <div class="blog-content">
              <h5>  <a href="<?=base_url()?>post/ver/<?=$fila->post_id?>/<?= str_replace(" ", "-", $fila->title);?>"><?=$fila->title?></a></h5>
              <div class="col-md-9 col-sm-9 col-xs-9">
              	<p><?=substr($fila->desc_short, 0, 100).'...'?></p>
              </div>
							<div class="col-md-2 col-sm-2 col-xs-2 pull-right">
								<a href="<?=base_url()?>post/ver/<?=$fila->post_id?>/<?= str_replace(" ", "-", $fila->title);?>" class="btn" style="float: right;">
                Leer <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
							</div>
              </div>
          </article>
        </div>

				<?php
				$x++;
					if ($x % 2 == 0){
						echo '</div>';
					}
				}
      } ?>


    </div>
  </div>
</section>
<!-- /Blog-->

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Marcas Populares</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
				<?php
			foreach ($brands as $fila)
			{
			 ?>
        <div><a href="#"><img src="<?=base_url().'/plantilla/assets/images/'.$fila->img?>"  alt="<?= $fila->alt ?>" width="130px" height="60px"></a></div>
			<?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- /Brands-->
