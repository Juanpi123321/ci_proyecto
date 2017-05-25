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
    $this->db->join('rol', 'rol.Id_rol = personas.rol_id');       
    $query = $this->db->get();       
    return $query->result();         
  }

public function select_rol(){     
    $query = $this->db->get('rol_id');           
    return $query->result();    
  }

public function select_usuarios_id($id)  
   {                          
      $this->db->select('*');                           
      $this->db->from('usuarios');                           
      $this->db->where('Id_usuario', $id);                           
      $query = $this->db->get();                           
      return $query->result();    
  }

public function actualizar_usuario($data_us,$data_per, $id)  
{         
    $this->db->where('Id_usuario', $id);
    $this->db->update('usuarios', $data_us);
    $this->db->where('Id_persona', $id);
    $this->db->update('personas', $data_per);
}

public function estado_usuario($data, $id)  
{                                  
    $this->db->where('Id_usuario', $id);       
    $this->db->update('usuarios', $data);                               
}

public function select_persona_id($id)  
{                          
    $this->db->select('*');                           
    $this->db->from('personas');                           
    $this->db->where('Id_persona', $id);                           
    $query = $this->db->get();                           
    return $query->result();    
}

/*PRODUCTOS*/

public function select_productos(){       
    $this->db->select('*');       
    $this->db->from('productos');    
    $this->db->join('categoria', 'categoria.Id_categoria = productos.categoria_id');
    /*solo mustra los productos activos*/
    //$this->db->where('estado', "1");       
    $query = $this->db->get();       
    return $query->result();         
  }

  public function estado_producto($data, $id)  
  {                                  
    $this->db->where('Id_producto', $id);       
    $this->db->update('productos', $data);                               
  }

  public function guardar_producto($data){
        $this->db->insert('productos', $data);
        redirect('admin_controller/productos');
  }

  public function actualizar_producto($data, $id)  
{         
    $this->db->where('Id_producto', $id);
    $this->db->update('productos', $data);
}

  public function select_productos_id($id)  
   {                          
      $this->db->select('*');                           
      $this->db->from('productos');                           
      $this->db->where('Id_producto', $id);                    
      $query = $this->db->get();                           
      return $query->result();    
  }

}