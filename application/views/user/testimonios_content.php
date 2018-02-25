 <!-- page content -->
 <div class="right_col" role="main">
			 <div class="row tile_count">
			 <a href="<?= base_url()?>testimonios/nuevo" class="btn btn-default"> Crear Nuevo Testimonio</a>

			 <div class="col-lg-12">

			<h1>Testimonios:</h1>
	 	<?php

					 	$content  = "<div class='table-responsive'>";
						$content .= "<table class='table table-hover table-bordered table-condensed'>";
						$content .=	"<thead>";
						$content .=	"<tr>";
						$content .= "<th style='text-align: center;'>#ID</th>";
						$content .= "<th style='text-align: center;'>Cliente</th>";
						$content .= "<th style='text-align: center;'>Descripcion</th>";
						$content .= "<th style='text-align: center;'>Modificar</th>";
						$content .= "<th style='text-align: center;'>Eliminar</th>";
						$content .=	"</tr>";
						$content .=	"</thead>";
						$content .=	"<tbody>";

							foreach ($post_test->result() as $row) {
						$ida = $row->test_id;
						$content .= "<tr id='tr$ida'>";



								$content .= "<td style='text-align: center;'>" . $row->test_id . "</td>";
								$content .= "<td style='text-align: center;'>" . $row->nombre . "</td>";
								$content .= "<td style='text-align: center;'>" . $row->test . "</td>";
								$content .= "<td style='text-align: center;'>


								<a href='".base_url('testimonios/modificar')."/$row->test_id' class= 'btn btn-primary'>Modificar</a></td>";
								$content .= '<td style="text-align: center;"><a class="btn btn-danger" href="'.base_url().'testimonios/borrar/'.$ida.'">Eliminar</a></td>';



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

<script type="text/javascript">

$(document).ready(function () {

	$("button").on("click", function (e){
	//var name = $(this).attr('name');
	var id = $(this).attr('id');

	var req;

	if (req) {

		req.abort();
	}
	req = $.ajax({
		url: "<?php echo base_url()?>testimonios/borrar",
		type: "POST",
		data: "id=" + id

	});

	req.done(function (response, textStatus, jqXHR){

		console.log(response + textStatus);
		$("#tr"+ response ).html(" ");

	});

	req.fail(function (jqXHR, textStatus, thrown){

		console.log("error" + textStatus);

	});

	req.always(function (){

		console.log("termino la exec de ajax");

	});

	e.preventDefault();

	//location.reload();

	});
});

</script>
