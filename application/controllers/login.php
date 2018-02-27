<?php

/**
 * @author José Flores -  vinygfx@gmail.com
 * @copyright 2017-2018, José Flores -Rights Reserved.
 */


class Login extends CI_Controller

	{

		public function index ()
		{

			$email = $this->input->post('user');
			$password = $this->input->post('password');

			$this->load->model('user');
			$fila = $this->user->getUser($email);

			//Consulta de Users
			if ($fila != NULL) {

				if ($fila->password == $this->Encrypt($password)) {

				//Set Arreglo para variables de session
				$data = array(
					'nombre' => $fila->nombre,
					'apellido' => $fila->apellido,
					'email' => $fila->email,
					'password' => $fila->password,
					'id' => $fila->user_id,
					'login' => true,
					'img'=> $fila->img
				);

			$this->session->set_userdata($data);

			header("Location:". base_url().perfil);

		}else {

			header("Location:". base_url().'admin');
		}
				}else{

			header("Location:". base_url().'admin');
			}
		}

		public function salir()
		{
			$this->session->sess_destroy();
			header("Location:". base_url());
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
