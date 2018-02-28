<?php

/**
 * @author José Flores -  vinygfx@gmail.com
 * @copyright 2017-2018, José Flores -Rights Reserved.
 */


class Login extends CI_Controller
{

	public function index ()
	{

		if (isset($_SESSION['login'])) 
        header('location: '.base_url().'dashboard'); 

	
		$ci = $this->input->post('user');
		$password = $this->input->post('pass');

		$this->load->model('user');
		$fila = $this->user->getUserCi($ci);

		if ($fila != NULL) {

			if ($fila->pass == $this->Encrypt($password)) {

			$data = array(
				'nombres' => $fila->nombres,
				'apellidos' => $fila->apellidos,
				'email' => $fila->email,
				'ci' => $fila->ci,
				'id' => $fila->user_id,
				'login' => true,
				'img'=> $fila->img
			);
			
			$this->session->set_userdata($data);

			echo "Ha ingresado correctamente";
			}else
			header("Location:". base_url().'home/index/exist');
		}else
			header("Location:". base_url().'home/index/error');
		
	}

	public function salir()
	{
		$this->session->sess_destroy();
		header("Location:". base_url());
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
