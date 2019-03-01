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
				$this->load->model( 'solicitud' );
				$users = $this->user->getUsersInfo(10);
				$user = $this->user->getUserCi( $_SESSION['ci'] );
				$soli = $this->solicitud->getSolicitudes(3)->result();
				

				for($x = 0; $x < count($soli); $x++) {
					$soli[$x] = (array) $soli[$x];
					$val = $this->user->getUserCi($soli[$x]['user_ci']);
					$nimage = $val->img;
					if(empty($val->img) || $val-> img == "")
						$nimage = 'varun.jpg';
					$soli[$x]['img'] = $nimage;
					$soli[$x] = (object) $soli[$x];
				}

				$data = [ 'profile' => $user,
							'users' => $users,
						  'solicitudes' => $soli 
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