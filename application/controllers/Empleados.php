<?php 
/**
 * @author José Flores -  vinygfx@gmail.com
 * @copyright 2017-2018, José Flores -Rights Reserved.
 */
	

class Empleados extends CI_Controller
{
	public function index ()
	{
			
			if (isset( $_SESSION['ci'] )) {
			
				$this->load->model( 'user' );
				$rows = $this->user->getUsers();
				$users = $this->user->getUsersInfo(count($rows));
				$user = $this->user->getUserCi( $_SESSION['ci'] );

				$data = [ 'profile' => $user,
						   'users' => $users
						 ];	
				$this->load->view( 'dashboard/head.php', $data );
				$this->load->view( 'dashboard/header.php', $data );
				$this->load->view( 'dashboard/empleados.php', $data );
				$this->load->view( 'dashboard/footer.php' );

			}else
				header('location: '.base_url());
	}
}

?>