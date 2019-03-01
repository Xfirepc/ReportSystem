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

	public function del ( $id = '' ){
		$this->load->model('user');
		$user = $this->user->getUserCi( intval($_SESSION['ci']) );
		if ($id != '' && intval($user->role) == 1) {
			
			$this->user->deleteUser($id);
			header('location: '.base_url().'empleados');
		}else
			echo 'No tienes permisos para realizar esta accion';
	}
	public function view( $ci ){

		$this->load->model( 'user' );
		$user = $this->user->getUserCi( $_SESSION['ci'] );
		$empleado = $this->user->getUserCi( $ci );
		$data = [ 
				   'profile' => $user,
				   'emp' => $empleado
				];	
		$this->load->view( 'dashboard/head.php', $data );
		$this->load->view( 'dashboard/header.php', $data );
		$this->load->view( 'dashboard/single_emp.php', $data );
		$this->load->view( 'dashboard/footer.php' );

	}	
}

?>