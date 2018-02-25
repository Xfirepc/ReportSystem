<?php

/**
*
*/
class Empresa extends CI_Model
{

	public function getEmpresa()
	{
		$query = $this->db->get('empresa');
		return $query->row();
	}

	public function getEmpresaById($id = '')
	{

		$result =$this->db->query("SELECT * FROM empresa WHERE id ='".intval($id)."'LIMIT 1");
		return $result->row();
	}


	public function insert($post = null)
	{
		if ($post != null) {
			$nombre = $post['nombre'];
			$razonsocial = $post['razon_social'];
			$identificacion = $post['identificacion'];
			$email = $post['email'];
			$direccion = $post['direccion'];
			$telefono = $post['telefono'];


			$SQL = "INSERT INTO empresa (id_empresa,nombre,razon_social,identificacion,email,direccion,telefono) VALUES (null,'$nombre','$razonsocial','$identificacion','$email','$direccion','$telefono');" ;

			if ($this->db->query($SQL))
			 {
				return true;
			}else
			{
				return false;
			}
		}

	}

	public function getEmpresaByYearName ($year='', $name = '')
	{
		$result = $this->db->query("SELECT * FROM empresa_info WHERE year(fecha) = '$year' AND titulo LIKE '$name' ");
		return $result->row();
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
}

 ?>
