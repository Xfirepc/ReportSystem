
<?php
/**
 * @author Jose Flores - Compunec     corp.compunec@gmail.com
 * @copyright 2014-2017, Carlos Yánez Correra - Compunec All Rights Reserved.
 */
class Register extends CI_Controller
{

public function index($data = ''){
    
	$info = [];
	if ($data == 'success')
		$info = array('msg' => 'El Registro ha sido satisfactorio', 'type' => 'success');
	elseif ($data == 'error')
		$info = array('msg' => 'Existe un problema con los datos ingresados...', 'type' => 'danger');
	elseif($data == 'exist')
		$info = array('msg' => 'Un usuario con la cedula ingresada ya existe...', 'type' => 'warning');

	$this->load->view("guest/head");
	$this->load->view("register", $info);
	$this->load->view("guest/footer");

}
public function registro ()
{	

		$this->load->model('user');
		$post = $this->input->post(); 
		$pass = $this->Encrypt($post['pass']);

		$registro = array(
			'nombres' => $post['nombres'],
			'apellidos' => $post['apellidos'],
			'ci' => $post['ci'],
			'cargo' => $post['cargo'],
			'estado_civ' => $post['estado_civ'],
			'nacimiento' => $post['nacimiento'],
			'fingreso' => $post['fingreso'],
			'fnacimiento' => $post['fnacimiento'],
			'direccion' => $post['direccion'],
			'telefono' => $post['telefono'],
			'telefono_e' => $post['telefono_e'],
			'email' => $post['email'],
			'pass' => $this->Encrypt($post['pass']),
			'role' => 0,
			'observaciones' => $post['observaciones'],
			'img' => ''
		);

		if (is_null($this->user->getUserCi($registro['ci']))) {
		
			if ($this->db->insert('users', $registro))
				header('Location: '.base_url().'register/index/success');
			else 
				header('Location: '.base_url().'register/index/error');
		}else
			header('Location: '.base_url().'register/index/exist');
	

}
public function update ()
{	

		$this->load->model('user');
		$post = $this->input->post(); 
		$user = $this->user->getUserCi($_SESSION['ci']);

		$registro = array(
			'nombres' => $post['nombres'],
			'apellidos' => $post['apellidos'],
			'ci' => $post['ci'],
			'cargo' => $post['cargo'],
			'estado_civ' => $post['estado_civ'],
			'nacimiento' => $post['nacimiento'],
			'fingreso' => $post['fingreso'],
			'fnacimiento' => $post['fnacimiento'],
			'direccion' => $post['direccion'],
			'telefono' => $post['telefono'],
			'telefono_e' => $post['telefono_e'],
			'email' => $post['email'],
			'observaciones' => $post['observaciones'],
		);

		if (isset( $post['passw'] ) && !empty( $post['passw'] ))
			if ($user->pass != $post['passw'])
				$registro['pass'] =  $this->Encrypt($post['passw']);

		if (isset( $_FILES['userfile']['name'] ) && !empty( $_FILES['userfile']['name'] )){
				$_FILES['userfile']['name'] = 'xf-'.time().substr($_FILES['userfile']['name'], -4);
				$this->load->model('file');
 				$file_name = $this->file->UploadImage('./plantilla/dashboard/plugins/images/users/','No es posible subir la imagen...');
				$registro['img'] =  $file_name;
		}

		if ($this->db->update('users', $registro)) {
			header('location: '. base_url().'profile');
		}else
			echo "Algo fallo...";
	

}
public function Encrypt($string)
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
