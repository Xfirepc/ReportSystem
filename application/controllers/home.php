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
     	$this->load->view("guest/header",$data);
		$this->load->view("home",$data);
		$this->load->view("guest/footer",$data);
	}



		/*public function buscadormain($query){

			// Iniciando variables
				$data = array('app' =>'Compunec Company');
				$data = array('titulo' =>'AutoLeather');
				$data['seo_subj'] = "TAPIZADO DE AUTOS, TAPIZADO DE MUEBLES, CUERO NATURAL , CUERO ATUMORTIZ, FOROS DE CUERO, EN QUITO,ECUADOR";
				$data['seo_key'] = "TAPIZADO DE AUTOS, TAPIZADO DE MUEBLES, CUERO NATURAL , CUERO ATUMORTIZ, FOROS DE CUERO, EN QUITO,ECUADOR";
				$data['seo_desc'] = "TAPIZADO DE AUTOS, TAPIZADO DE MUEBLES, CUERO NATURAL , CUERO ATUMORTIZ, FOROS DE CUERO, EN QUITO,ECUADOR";


			//Informacion de la EMPRESA
					$data['empresa'] = $this->empresa->getEmpresa();//Llamamos al datos de empresa
					$data['menu_p'] = $this->menu->getMenuProducts();
					$data['menu_s'] = $this->menu->getMenuServices();
					$data['titulo'] = 'Blog';
					$data['recent_posts'] = $this->entrada->recent_posts();

					$this->db->select('*');
	        $this->db->like('title', $query);
					$this->db->or_like('desc_small', $query);
					$this->db->or_like('desc_short', $query);

	        $resultados = $this->db->get('entradas', 10);
	        //si existe algún resultado lo devolvemos
	        if($resultados->num_rows() > 0)
	        {
							$data['blog'] = $resultados->result();
	        //en otro caso devolvemos false
	        }else{
	            return FALSE;
	        }
					// Cargando Vistas

					$this->load->view("guest/head",$data);
					$this->load->view("guest/header",$data);
					$this->load->view("guest/blog", $data);
					$this->load->view("guest/footer");

		}*/

}
