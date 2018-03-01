<?php

/**
 * @author José Flores -  vinygfx@gmail.com
 * @copyright 2017-2018, José Flores -Rights Reserved.
 */
	

class Solicitud extends CI_Model
{
	function __construct(){

	}
	public function getSolicitudes($data = null)
	{
		$this->db->select('*');
		$this->db->from('solicitudes');
		
		if (!$data) 
			$this->db->limit($data);
		
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		//$result = $query->result();
		return $query;

	}
	public function getSolicitudById($id = '')
	{
		$result =$this->db->query("SELECT * FROM servicios WHERE servicio_id ='".$id."'LIMIT 1");
		return $result->row();
	}
}


?>
