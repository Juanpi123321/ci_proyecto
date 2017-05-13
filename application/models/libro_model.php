<?php   
/**  * Class Libro_model  *  
* @package Models  
* @author      Prof. Alfonzo, pedro */  

class Libro_model extends CI_Model  
{     
	function __construct()     
	{         
		parent::__construct();     
	}

public function guardar_libro($data)
{
    $this->db->insert('libro', $data);           
}

public function select_categoria()
{                   
 	$query = $this->db->get('libro_categoria');         
 	return $query->result();                  
}	

}