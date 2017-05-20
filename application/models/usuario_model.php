<?php     

class Usuario_model extends CI_Model  
{     
	function __construct()     
	{         
		parent::__construct();     
	}

	/*public function guardar_libro($data){           
		$this->db->insert('libro', $data);    
	}   

	public function select_categoria(){     
		$query = $this->db->get('libro_categoria');           
		return $query->result();    
	}*/

	public function select_usuarios(){       
		$this->db->select('*');       
		$this->db->from('usuarios');  
		/*$this->db->join('libro_categoria', 'libro_categoria.categoria_id = libro.libro_categoria');*/    
		$this->db->join('personas', 'personas.Id_persona = usuarios.persona_id');       
		$query = $this->db->get();       
		return $query->result();         
	}   

	/*public function select_libros_id($id)  
   {                          
   		$this->db->select('*');                           
   		$this->db->from('libro');                           
   		$this->db->where('libro_id', $id);                           
   		$query = $this->db->get();                           
   		return $query->result();    
	}

	public function actualizar_libro($data, $id)  
   {         
   		$this->db->where('libro_id', $id);       
   		$this->db->update('libro', $data);                               
	}   

	public function eliminar_libro($data, $id)  
   {                                  
   		$this->db->where('libro_id', $id);       
   		$this->db->update('libro', $data);                               
   	}     */
 
} 