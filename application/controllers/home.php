<?php

/**
 * @author Carlos Yánez Correa - Compunec     corp.compunec@gmail.com
 * @copyright 2014-2017, Carlos Yánez Correra - Compunec All Rights Reserved.
 */

class Home extends CI_Controller {

	public function index()
	{

      $data = array('app' =>'');
      $data = array('titulo' =>'Trole System');
  
    //Entradas de BLOG y SERVICIOS
     /* $this->load->model('producto');
      $data['producto'] = $this->producto->getProductos();*/
     	
     	$this->load->view("guest/head",$data);
		$this->load->view("login",$data);
		$this->load->view("guest/footer",$data);

	}
}
