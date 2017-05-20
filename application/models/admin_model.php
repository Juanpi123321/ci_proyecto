<?php 

class Admin_model extends CI_Model

{
    function __construct()
    {
        parent::__construct();
    }


public function guardar_persona($data){
        $this->db->insert('personas', $data);
}


public function guardar_usuario($id, $usuario, $password){
      
               
         $data = array(               
         'persona_id' => $id,
         'usuario' => $usuario,
	       'contrasena' => base64_encode($password),
         'estado' => '1'
          );

          $this->db->insert('usuarios', $data);
          redirect('admin_controller/usuarios');
      
   }

public function select_usuarios(){       
    $this->db->select('*');       
    $this->db->from('usuarios');    
    $this->db->join('personas', 'personas.Id_persona = usuarios.persona_id');       
    $query = $this->db->get();       
    return $query->result();         
  }   

 }