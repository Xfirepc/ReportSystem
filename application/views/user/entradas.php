  <!-- page content -->
 <div class="right_col" role="main">
	 <div class="row tile_count">
	 <a href="<?= base_url()?>entradas/nuevo" class="btn btn-default"> Crear Nueva entrada</a>

	 <div class="col-lg-12">
		<h1> Tus Entradas:</h1>
    <?php
        $content  = "<div class='table-responsive'>";
	$content .= "<table class='table table-hover table-bordered table-condensed table-responsive'>";
	$content .=	"<thead>";
	$content .=	"<tr>";
	$content .= "<th style='text-align: center;'>#ID</th>";
	$content .= "<th style='text-align: center;'>Titulo</th>";
	$content .= "<th style='text-align: center;'>Modificar</th>";
	$content .= "<th style='text-align: center;'>Eliminar</th>";
	$content .=	"</tr>";
	$content .=	"</thead>";
	$content .=	"<tbody>";
	$ida = 0;
    foreach ($post->result_array() as $row)
        {
	$content .= "<tr id='tr$ida'>";
            foreach ($row as $key => $value)
                {
                    if ($key == "title")
                     {
                    $content .= "<td style='text-align: center;'>".$row['post_id']."</td>";
                    $date = DateTime::createFromFormat("Y-m-d",$row['fecha']);
                    $year = $date->format("Y");
                    $id_e = $row['post_id'];
                    $content .= "<td style='text-align: center;'>" . $value . "</td>";
                    $content .= "<td style='text-align: center;'>
                    <a href='".base_url('entradas/modificar')."/$id_e' class= 'btn btn-primary'>Modificar</a></td>";
                     $content .= "<td style='text-align: center;'>
                    <a href='".base_url('entradas/borrar')."/$id_e' class= 'btn btn-danger'>Eliminar</a></td>";
                    }
                 }
		$content .= "</tr>";
		$ida++;
		}
		$content .=	"</tbody>";
                $content .=	"</table>";
		$content .= "</div>";
		echo $content;


		 ?>
			 </div>


			</div>
</div>
