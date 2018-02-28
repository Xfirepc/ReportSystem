<?php

/**
 * @author José Flores -  vinygfx@gmail.com
 * @copyright 2017-2018, José Flores -Rights Reserved.
 */

class Home extends CI_Controller {

	public function index($data = '')
	{


    if (isset($_SESSION['login'])) 
        header('location: '.base_url().'dashboard');   

   	  $info = [];
      if ($data == 'success')
        $info = array('msg' => 'Success', 'type' => 'success');
      elseif ($data == 'error')
        $info = array('msg' => 'Los datos son incorrectos...', 'type' => 'danger');
      elseif($data == 'exist')
        $info = array('msg' => 'Clave incorrecta...', 'type' => 'warning');

     	$this->load->view("guest/head");
  		$this->load->view("login", $info);
  		$this->load->view("guest/footer");

	}
}
