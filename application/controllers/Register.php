
<?php
/**
 * @author Jose Flores - Compunec     corp.compunec@gmail.com
 * @copyright 2014-2017, Carlos Yánez Correra - Compunec All Rights Reserved.
 */
class Register extends CI_Controller
{
public function index ()
{
		$claveseguriad = 'AU-LTH-CP17';

		if ($this->input->post('clave')) {
			$post = $this->input->post();
			if ($post['clave'] == $claveseguriad) {

				$this->load->model('file'); // Cargamos el modelo.
				$post = $this->input->post(); // Cargamos todos los datos que nos llegan de la vista
				$file_name = $this->file->UploadImage('./public/img/','No es posible subir la imagen...');

				$pass = $this->Encrypt($post['password']);

				$registro = array(  //Seteo new array con rows de la tabla
									'nombre' => $post['nombre'],
									'apellido' => $post['apellido'],
									'email' => $post['email'],
									'password' => $pass,
									'img' => $file_name
									);

				if ($this->db->insert('users', $registro)) {
					echo '<script>alert("Se ha registrado Correctamente")</script>';
					header('Location: '.base_url().'admin');
				}else {
					echo '<script>alert("No se ha podido registrar")</script>';
					header('Location: '.base_url().'Home/getMsg/A ocurrido un problema...');
				}
			}
		}
}
function Encrypt($string)
{
    $str = NULL;
    $long = strlen($string);

  for ($i = 0; $i < $long; $i++) {
    $str.= ($i % 2) != 0 ? md5($string[$i]) : $i ;
  }
 return md5($str);
}

}






 ?>
