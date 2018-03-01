<?php

/**
 * @author José Flores -  vinygfx@gmail.com
 * @copyright 2017-2018, José Flores -Rights Reserved.
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

	public function updateUser($ci = '', $data = [])
	{
		$this->db->where('ci', $ci);
		return $this->db->update('users', $data);
	}

	public function getUsersInfo( $fields = 30)
	{

		$this->db->select('*');
		$this->db->from('users');
		$this->db->limit($fields);		
		$this->db->order_by('user_id','DESC');
		$query = $this->db->get();
		//$result = $query->result();
		return $query->result();
	}

	public function getUsers()
	{

		$this->db->select('*');
		$this->db->from('users');	
		$this->db->order_by('user_id','DESC');
		$query = $this->db->get();
		//$result = $query->result();
		return $query->result();
	}
	public function getUserById($id = '')
	{

		$result = $this->db->query("SELECT * FROM users WHERE user_id ='".$id."'LIMIT 1");
		return $result->row();

	}
}

 ?>
