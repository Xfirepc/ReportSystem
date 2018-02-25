<?php

/**
 * @author Jose Flores - Compunec     corp.compunec@gmail.com
 * @copyright 2014-2017, Carlos Yánez Correra - Compunec All Rights Reserved.
 */


class Menu extends CI_Model
{

	public function getMenuProducts()
	{
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where('type', 1);
		$query = $this->db->get();
		//$result = $query->result();
		return $query;

	}
	public function getMenuServices()
	{
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where('type', 0);
		$query = $this->db->get();
		//$result = $query->result();
		return $query;

	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('menu');
		$query = $this->db->get();
		//$result = $query->result();
		return $query;

	}

}

 ?>
