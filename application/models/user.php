<?php

/**
 * @author Jose Flores - Compunec     corp.compunec@gmail.com
 * @copyright 2014-2017, Carlos Yánez Correra - Compunec All Rights Reserved.
 */


class User extends CI_Model
{

	public function getUserCi($ci = '')
	{
		$result = $this->db->query("SELECT * FROM users WHERE ci = '". $ci ."' LIMIT 1");

		if ($result->num_rows()>0)
		{
			return $result->row();
		}else{

			return null;
		}
	}

		public function getUserInfo()
	{

		return $this->db->get('users');
	}

		public function getUserById($id = '')
	{

		$result = $this->db->query("SELECT * FROM users WHERE user_id ='".$id."'LIMIT 1");
		return $result->row();

	}
}

 ?>
