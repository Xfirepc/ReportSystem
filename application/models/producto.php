<?php

/**
 * @author Jose Flores - Compunec     corp.compunec@gmail.com
 * @copyright 2014-2017, Carlos Yánez Correra - Compunec All Rights Reserved.
 */


class Producto extends CI_Model
{

	public function getProductos()
	{
		$this->db->select('*');
		$this->db->from('productos');
		$this->db->order_by('product_id','DESC');
		$query = $this->db->get();
		//$result = $query->result();
		return $query;

	}

	public function getProductoById($id = '')
	{
		$result =$this->db->query("SELECT * FROM productos WHERE product_id ='".$id."'LIMIT 1");
		return $result->row();
	}

	public function getProdcuto ($id = '' )
	{
		$this->db->select('*');
		$this->db->from('productos');
		$this->db->where('product_id', $id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

		public function num_post()

		{
			$number = $this->db->query("SELECT count(*) as number FROM productos")->row()->number;

			return intval($number);

		}
		public function get_pagination($number_per_page)
		{
			return $this->db->get("productos",$number_per_page,$this->uri->segment(3));
		}
		public function getProductsType($type){
			$this->db->select('*');
			$this->db->from('productos');
			$this->db->where('type', $type);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
}

 ?>
