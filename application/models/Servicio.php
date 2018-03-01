<?php

/**
 * @author José Flores -  vinygfx@gmail.com
 * @copyright 2017-2018, José Flores -Rights Reserved.
 */
	

class Servicio extends CI_Model
{
	function __construct(){

	}
	public function getServicios()
	{
		$this->db->select('*');
		$this->db->from('servicios');
		$this->db->order_by('servicio_id','DESC');
		$query = $this->db->get();
		//$result = $query->result();
		return $query;

	}
	public function getServicioById($id = '')
	{
		$result =$this->db->query("SELECT * FROM servicios WHERE servicio_id ='".$id."'LIMIT 1");
		return $result->row();
	}
	public function getServiciosType($type){
		$this->db->select('*');
		$this->db->from('servicios');
		$this->db->where('type', $type);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function insert($post = null)
	{
		if ($post != null) {
			$nombre = $post['nombre_servicio'];
			$descripcion = $post['descripcion_servicio'];
			$contenido = $post['contenido'];
			$file_name = $post['file_name'];

			$SQL = "INSERT INTO servicios (id_servicio,nom_servicio,desc_servicio,contenido,img,fecha) VALUES (null,'$nombre','$descripcion','$contenido','$file_name',curdate());" ;

			if ($this->db->query($SQL))
			 {
				return true;
			}else
			{
				return false;
			}
		}

	}

}


?>
