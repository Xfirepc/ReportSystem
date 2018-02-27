<?php

/**
 * @author José Flores -  vinygfx@gmail.com
 * @copyright 2017-2018, José Flores -Rights Reserved.
 */

class Home extends CI_Controller {

	public function index()
	{

      $data = array('app' =>'');
      $data = array('titulo' =>'Trole System');
  
    //Entradas de BLOG y SERVICIOS
     /* $this->load->model('producto');
      $data['producto'] = $this->producto->getProductos();*/
     	
     	$this->load->view("guest/head");
  		$this->load->view("login");
  		$this->load->view("guest/footer");

	}
}
