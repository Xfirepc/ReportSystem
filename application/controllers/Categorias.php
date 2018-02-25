<?php

/**
 * @author Jose Flores - Compunec     corp.compunec@gmail.com
 * @copyright 2014-2017, Carlos Yánez Correra - Compunec All Rights Reserved.
 */
class Categorias extends CI_Controller {

	public function index()
	{
    $this->load->helper('bootstrap');
    $data = array('titulo' => 'Nuevo Post');
    $this->load->view("user/head",$data);
    $this->load->model('menu');
    $result_user = $this->user->getUserById($_SESSION['id']);
    $data = array('consulta_user' => $result_user);
    $this->load->view("user/header",$data);
		$data['categoria'] = $this->menu->getAll()->result();
    $this->load->view("user/nueva_categoria",$data);
    $this->load->view("user/footer_text");
	}
	public function del($id = ''){

		if ($id != ''){
			$this->db->where('id', intval($id));
			$this->db->delete('menu');
			header('Location: '.base_url().'categorias');
		}
	}
	public function new(){

		$post = $this->input->post();
		$this->load->model('file');
		$file_name = $this->file->UploadImage('./public/img/categorias/','No es posible subir la imagen...');

		$data = array('nombre' => $post['nombre'],
		 							'type' => intval($post['type']),
									'descripcion' => $post['descripcion'],
									'img' => $file_name
								);
		$this->db->insert('menu', $data);
		header('Location: '.base_url().'categorias');

	}

	public function blog(){

		$this->load->helper('bootstrap');
		$data = array('titulo' => 'Nuevo Post');
		$this->load->view("user/head",$data);
		$this->load->model('menu');
		$result_user = $this->user->getUserById($_SESSION['id']);
		$data = array('consulta_user' => $result_user);
		$this->load->view("user/header",$data);
		$data['categoria'] = $this->db->get('categorias')->result();
		
		$this->db->get('categorias')->result();
		$this->load->view("user/cat_blog",$data);
		$this->load->view("user/footer_text");
	}
	public function new_catblog(){

		$data = $this->input->post();
		$this->db->insert('categorias', $data);
		header('Location: '.base_url().'categorias/blog');
	}

	public function new_subcatblog(){

		//Llamo a los POST
		$post = $this->input->post();
		$data['sub_nombre'] = $post['nombre'];
		$data['categoria'] = $post['padre'];

		$this->db->insert('subcategorias', $data);
		header('Location: '.base_url().'categorias/blog');

	}
	public function get_subcat($data){

		$this->db->select('sub_nombre');
		$this->db->where('categoria', $data);
		return $this->db->get('subcategorias')->result();
	}
}
