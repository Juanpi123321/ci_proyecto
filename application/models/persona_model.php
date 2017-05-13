<?php 

class Persona_model extends CI_Model

{
    function __construct()
    {
        parent::__construct();
    }


public function guardar_persona($nombre, $apellido, $dni, $direccion, $email){
      
        $data = array(
         'nombres' => $nombre,
         'apellidos' => $apellido,
         'dni' => $dni,
         'direccion' => $direccion,
         'email' => $email,
         'rol_id' => '2',

         );
         
         $this->db->insert('personas', $data);
}


public function guardar_usuario($id, $usuario, $password){
      
               
         $data = array(               
         'persona_id' => $id,
         'usuario' => $usuario,
	       'contrasena' => base64_encode($password)
          );

          $this->db->insert('usuarios', $data);
          redirect('persona_controller');
      
   }

 }