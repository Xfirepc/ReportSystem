 <!-- page content -->
 <div class="right_col" role="main">
			 <div class="row tile_count">
			 <a href="<?= base_url()?>servicios/nuevo" class="btn btn-default"> Crear Nuevo Servicio</a>

			 <div class="col-lg-12">

			<h1>Servicios:</h1>

				 	<?php

					 	$content  = "<div class='table-responsive'>";
						$content .= "<table class='table table-hover table-bordered table-condensed'>";
						$content .=	"<thead>";
						$content .=	"<tr>";
						$content .= "<th style='text-align: center;'>#ID</th>";
						$content .= "<th style='text-align: center;'>Titulo</th>";
						$content .= "<th style='text-align: center;'>Descripcion</th>";
						$content .= "<th style='text-align: center;'>Modificar</th>";
						$content .= "<th style='text-align: center;'>Eliminar</th>";
						$content .=	"</tr>";
						$content .=	"</thead>";
						$content .=	"<tbody>";

							foreach ($post_servicios->result() as $row) {
						$ida = $row->servicio_id;
						$content .= "<tr id='tr$ida'>";



								$content .= "<td style='text-align: center;'>" . $row->servicio_id . "</td>";
								$content .= "<td style='text-align: center;'>" . $row->nombre . "</td>";
								$content .= "<td style='text-align: center;'>" . $row->contenido . "</td>";
								$content .= "<td style='text-align: center;'>


								<a href='".base_url('servicios/modificar')."/$row->servicio_id' class= 'btn btn-primary'>Modificar</a></td>";
								$content .= "<td style='text-align: center;'><a href=".base_url().'servicios/borrar/'.$ida."><button class= 'delete btn btn-danger'
								 id='$ida'>Eliminar</button></td></a>";



						$content .= "</tr>";
						//$ida++;
							}
						$content .=	"</tbody>";
						$content .=	"</table>";
						$content .= "</div>";
						echo $content;


		 ?>

		</div>
	</div>
</div>
