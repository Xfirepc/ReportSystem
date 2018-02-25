<?php

/**
 * @author Jose Flores - Compunec     corp.compunec@gmail.com
 * @copyright 2014-2017, Carlos Yánez Correra - Compunec All Rights Reserved.
 */


class Entrada extends CI_Model
{

	public function getEntradas()
	{
		$this->db->select('*');
		$this->db->from('entradas');
		$this->db->order_by('post_id','DESC');
		$query = $this->db->get();
		//$result = $query->result();
		return $query;
	}

	public function getEntradaById($id = '')
	{
		$result =$this->db->query("SELECT * FROM entradas WHERE post_id ='".$id."'LIMIT 1");
		return $result->row();
	}


	public function insert($post = null) // Insertar una nueva Entrada
	{
		if ($post != null) {
			$nombre = $post['title'];
			$desc_short = $post['desc_short'];
                        $desc_small = $post['desc_small'];
			$user = $post['user'];
			$file_name = $post['file_name'];
			$type = $post['type'];
                        $seo_desc = $post ['seo_desc'];
                        $seo_subj = $post ['seo_subj'];
                        $seo_key = $post ['seo_key'];

			$SQL = "INSERT INTO entradas (title,desc_short,desc_small,etiqueta,comentarios,img,posted_by,type,fecha,seo_desc,seo_subj,seo_key)
              VALUES ('$nombre','$desc_short','$desc_small','etiqueta','comentarios','$file_name','$user','$type',curdate(),'$seo_desc','$seo_subj','$seo_key');" ;

			if ($this->db->query($SQL))
			 {
				return true;
			}else
			{
				return false;
			}
		}

	}

	public function getEntrada ($id = '' )
	{
		$this->db->select('*');
		$this->db->from('entradas');
		$this->db->where('post_id', $id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

		public function num_post()

		{

			$number = $this->db->query("SELECT count(*) as number FROM entradas")->row()->number;

			return intval($number);

		}

		public function get_pagination($number_per_page)
		{

			return $this->db->get("entradas",$number_per_page,$this->uri->segment(3));


		}
		public function recent_posts(){

				$this->db->order_by('post_id','DESC');
				$query = $this->db->get('entradas', 8);
				return $query->result();

		}
}

 ?>
