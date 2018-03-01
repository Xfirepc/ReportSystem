<?php 
/**
 * @author José Flores -  vinygfx@gmail.com
 * @copyright 2017-2018, José Flores -Rights Reserved.
 */
	

class Dashboard extends CI_Controller
{
	public function index ()
	{
			
			if (isset( $_SESSION['ci'] )) {
				
				$this->load->model( 'user' );
				$user = $this->user->getUserCi( $_SESSION['ci'] );
				$users = $this->user->getUsersInfo();

				
				$data = [ 'users' => $users,
						  'profile' => $user
						 ];
				$this->load->view( 'dashboard/head.php', $data );
				$this->load->view( 'dashboard/header.php', $data );
				$this->load->view( 'dashboard/dashboard.php', $data );
				$this->load->view( 'dashboard/footer.php' );

			}else
				header('location: '.base_url());
	}
}

/*echo '<pre>';
var_dump($users);*/
?>