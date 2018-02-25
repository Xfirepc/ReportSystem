<?php

/**
 * @author Jose Flores - Compunec     corp.compunec@gmail.com
 * @copyright 2014-2017, Carlos Yánez Correra - Compunec All Rights Reserved.
 */



class Contact extends CI_Controller {


	public function index()
	{
		// Iniciando variables
			$data = array('app' =>'Compunec Company');
			$data = array('titulo' =>'AutoLeather');
			$data['seo_subj'] = "TAPIZADO DE AUTOS, TAPIZADO DE MUEBLES, CUERO NATURAL , CUERO ATUMORTIZ, FOROS DE CUERO, EN QUITO,ECUADOR";
			$data['seo_key'] = "TAPIZADO DE AUTOS, TAPIZADO DE MUEBLES, CUERO NATURAL , CUERO ATUMORTIZ, FOROS DE CUERO, EN QUITO,ECUADOR";
			$data['seo_desc'] = "TAPIZADO DE AUTOS, TAPIZADO DE MUEBLES, CUERO NATURAL , CUERO ATUMORTIZ, FOROS DE CUERO, EN QUITO,ECUADOR";

		//Entradas de BLOG y SERVICIOS
			$this->load->model('producto');
			$data['producto'] = $this->producto->getProductos();
			$data['blog'] = $this->entrada->getEntradas();
			$data['servicio'] = $this->servicio->getServicios();

		//Informacion de la EMPRESA

		$data['empresa'] = $this->empresa->getEmpresa();//Llamamos al datos de empresa
		$data['menu_p'] = $this->menu->getMenuProducts();
		$data['menu_s'] = $this->servicio->getServicios();
		$data['titulo'] = 'Acerca de';
		// Cargando Vistas

		$this->load->view("guest/head",$data);
		$this->load->view("guest/header",$data);
		$this->load->view("guest/contact", $data);
		$this->load->view("guest/footer");
	}

	public function send_admin(){

			$this->load->library("email");
			//configuracion para gmail
			$configGmail = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => 465,
				'smtp_user' => 'correo_gmail',
				'smtp_pass' => 'password',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'newline' => "\r\n"
			);
			//cargamos la configuración para enviar con gmail
			$this->email->initialize($configGmail);

			$this->email->from('Correo que envia');
			$this->email->to("Para quien ");
			$this->email->subject('Asunto');
			$this->email->message('<h2>Email enviado con codeigniter haciendo uso del smtp de gmail</h2><hr><br> Prueba');
			$this->email->send();
			//con esto podemos ver el resultado
			var_dump($this->email->print_debugger());
	}

	public function send_sv(){
		//Envia mensajes desde el Servidor...
		if (isset($_POST['email'])) {
			$msg = $this->input->post();
			//Lleno un string que contiene datos para el mensaje..
			$mensaje = 'Cliente: '.$msg['nombre'].' Telefonos: '.$msg['telefono'].' Mensaje: '.$msg['mensaje'].' Email del Cliente: '.$post['email'];

			//Ingresar el email al que se quiere enviar..
			mail(INGRESAR, $msg['asunto'], $mensaje);
	}
}
}

 ?>
