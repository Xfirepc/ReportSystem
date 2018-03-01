<?php 
/**
 * @author José Flores -  vinygfx@gmail.com
 * @copyright 2017-2018, José Flores -Rights Reserved.
 */
	

class Solicitudes extends CI_Controller
{
	public function index ()
	{
			
			if (isset( $_SESSION['ci'] )) {
				
				$this->load->model( 'user' );
				$this->load->model( 'solicitud' );
				$user = $this->user->getUserCi( $_SESSION['ci'] );
				$soli = $this->solicitud->getSolicitudes()->result();
				

				for($x = 0; $x < count($soli); $x++) {
					$soli[$x] = (array) $soli[$x];
					$soli[$x]['img'] = $this->user->getUserCi( $soli[$x]['user_ci'] )->img;
					$soli[$x] = (object) $soli[$x];
				}

				$data = [ 'profile' => $user,
						  'solicitudes' => $soli 
						];

				$this->load->view( 'dashboard/head.php', $data );
				$this->load->view( 'dashboard/header.php', $data );
				$this->load->view( 'dashboard/solicitudes.php', $data );
				$this->load->view( 'dashboard/footer.php' );

			}else
				header('location: '.base_url());
	}

	public function del($id){
		if ($id != null) {
			$this->db->where('id', $id);
			$this->db->delete('solicitudes');
			header('location: '.base_url().'Solicitudes');
		}else{
			header('location: '.base_url());
		}
	}
	public function checked($id){
		if ($id != null) {
			$data = ['status' => 1];
			$this->db->where('id', $id);
			$this->db->update('solicitudes', $data);
			header('location: '.base_url().'Solicitudes');
		}else{
			header('location: '.base_url());
		}
	}
}

?>