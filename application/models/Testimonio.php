<?php

/**
 * @author Jose Flores - Compunec     corp.compunec@gmail.com
 * @copyright 2014-2017, Carlos Yánez Correra - Compunec All Rights Reserved.
 */

class Testimonio extends CI_Model
{

	public function getTestimonios()
	{
		return $this->db->get('testimonios');
	}
	public function getTestmonioById($id = '')
	{

		$result =$this->db->query("SELECT * FROM testimonios WHERE test_id ='".$id."'LIMIT 1");
		return $result->row();
	}

	public function insert($post = NULL)
	{
		if ($post != NULL) {
			if($this->db->insert('testimonios', $post))
				return TRUE;
			else
				return FALSE;
		}
	}
}

 ?>
