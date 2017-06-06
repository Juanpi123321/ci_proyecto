<?php

class Producto_model extends CI_Model
{
	public function select_producto_id($id)  
   {                          
      $this->db->select('*');                           
      $this->db->from('productos');                           
      $this->db->where('Id_producto', $id);                    
      $query = $this->db->get();                           
      return $query->result();    
  }
}

?>