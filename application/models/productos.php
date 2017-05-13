<?php

class Productos extends CI_Model
{
	
	public function get_prod()
	{
		return $this->db->get('productos');		//de la db dame todas las tablas de productos
	}

	public function get_prod_by_id($Id_prod='')
	{
		$result = $this->db->query("SELECT * FROM productos WHERE productos = '". $Id_prod . "' LIMIT 1");
		return $result->row();
	}
}

?>