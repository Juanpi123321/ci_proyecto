<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
	
	function __construct()
		{
			parent::__construct();
		}

	public function index()
	{
		$data['title']= 'Bienvenido a Pc-Gamer';
		$this->load->view('plantillas/header',$data);

		$datos = array('inicio' => 'active', 'usuarios' => '', 'productos' => '');
		$this->load->view('plantillas/nav_admin',$datos);
		$this->load->view('paginas/index_admin');
		$this->load->view('plantillas/footer');
	}

	public function usuarios()
	{
		$data['title']= 'Usuarios';
		$this->load->view('plantillas/header',$data);

		$datos = array('inicio' => '', 'usuarios' => 'active', 'productos' => '');
		$this->load->view('plantillas/nav_admin',$datos);

		$this->load->model('admin_model');
		$data['usuarios'] = $this->admin_model->select_usuarios(); 
		$this->load->view('paginas/usuarios_admin', $data);
		$this->load->view('plantillas/footer');
	}

	public function registracion_admin()
	{
		$data['title']= 'Registro';
		$this->load->view('plantillas/header',$data);

		$datos = array('inicio' => '', 'usuarios' => 'active', 'productos' => '');
		$this->load->view('plantillas/nav_admin',$datos);
		$this->load->view('paginas/registracion_admin');
		$this->load->view('plantillas/footer');
	}

public function registrar_persona() //verifica todos los campos

	{          
   $this->form_validation->set_rules('nombres', 'Nombre de la persona', 'required');
   $this->form_validation->set_rules('apellidos', 'Apellido de la persona', 'required');
   
   $this->form_validation->set_rules('dni', 'DNI de la persona', 'required|integer');
   $this->form_validation->set_rules('direccion', 'Direccion de la persona');
   $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

   $this->form_validation->set_rules('usuario', 'usuario', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
   $this->form_validation->set_rules('passconf', 'Confirmar password', 'trim|required|matches[password]');  /*trim me quita espacios*/
   $this->form_validation->set_rules('imagen', 'Seleccionar una imagen',  'callback_validar_imagen');


/*para que mustre el mensaje con esa leyendo o sino va a mostrar en ingles*/
$this->form_validation->set_message('valid_email', 'El campo %s debe ser un mail válido');
$this->form_validation->set_message('integer', 'El campo %s debe poseer solo numeros enteros');
$this->form_validation->set_message('required', 'El campo %s es obligatorio');
$this->form_validation->set_message('min_length', 'El campo %s debe contener como mínimo %d caracteres');
$this->form_validation->set_message('matches', 'las contraseñas no coinciden');


   if ($this->form_validation->run() == FALSE) {

                $this->registracion_admin();

        } else {
           $this->insertar_persona();
            
        }         
          
     }

function validar_imagen($imagen)  //Verifica que se ingreso una imagen   
{         
      $nombre_imagen = $_FILES['imagen']['name']; //Obtiene el nombre de la imagen            
      if (empty($nombre_imagen))             
      {              
        $this->form_validation->set_message('validar_imagen', 'Seleccionar una imagen');              
        return false;                           
      } else {                           
        return true;             
      }     
}

public function insertar_persona()
{	
		$config['upload_path'] = './uploads/img_usuarios';            
        $config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';            
        $config['remove_spaces'] = TRUE;            
        $config['max_size'] = '1024';  

        $this->load->library('upload', $config);   
        if (!$this->upload->do_upload('imagen')) 
		{  
			echo "<script type=\"text/javascript\">alert('No se pudo cargar el archivo');</script>";
        	$this->registracion();  
		} else {
		      $data = array(
	               'nombres' => $this->input->post('nombres'),
	               'apellidos' => $this->input->post('apellidos'),
	               'dni' => $this->input->post('dni'),
	               'direccion' => $this->input->post('direccion'),
	               'email' => $this->input->post('email'),
                   'imagen' => $_FILES['imagen']['name'],
	               'rol_id' => $this->input->post('rol')
	               );

      $usuario = $this->input->post('usuario');
      $password = $this->input->post('password');

      $this->load->model('admin_model');
                  
      $this->admin_model->guardar_persona($data); 
      
      /*recupera el ultimo id creado incremental*/
      $id = $this->db->insert_id();
      $this->admin_model->guardar_usuario($id, $usuario, $password);
      } 
  }

	public function eliminar_usuario($id=NULL)  
    {            
	 	$data = array('estado'=> '0');     
            $this->load->model('admin_model');                   
            $this->admin_model->actualizar_usuario($data, $id);                    
            redirect('admin_controller/usuarios');    
    }

	public function activar_usuario($id=NULL)      
	{            
		$data = array('estado'=> '1');     
            $this->load->model('admin_model');                   
            $this->admin_model->actualizar_usuario($data, $id);                    
            redirect('admin_controller/usuarios');    
    }

    public function editar_usuario($id=NULL)      
    {             
    	$this->load->model('admin_model');             
    	$usuario = $this->admin_model->select_usuarios_id($id);
      $persona = $this->admin_model->select_persona_id($id);   
    
    	foreach ($usuario as $row) 
    	{         
    		$data['Id_usuario'] = $row->Id_usuario;
        $data['usuario'] = $row->usuario;
    	}
      foreach ($persona as $row) 
      {         
        $data['email'] = $row->email;
        $data['nombres'] = $row->nombres;
        $data['apellidos'] = $row->apellidos;
        $data['dni'] = $row->dni;
        $data['direccion'] = $row->direccion;
        
        
      }      
    		$titulo['title']= 'Usuarios';
  			$this->load->view('plantillas/header',$titulo);
  			$datos = array('inicio' => '', 'usuarios' => 'active', 'productos' => '');
  			$this->load->view('plantillas/nav_admin',$datos);      
    		$this->load->view('paginas/usuarios_edicion_admin', $data);        
    		$this->load->view('plantillas/footer');      
   	} 

    /* borra cuando no uses mas */
   	public function actualizar_libro($id=NULL)      
   	{   // VALIDAR LOS DATOS INGRESADOS   
            $data = array(                   
            	'libro_titulo' => $this->input->post('titulo'),                   
            	'libro_autor' => $this->input->post('autor'),                   
            	'libro_descripcion'=> $this->input->post('descripcion'),                   
            	'libro_stock' =>  $this->input->post('stock'),                   
            	'libro_precio'=>  $this->input->post('precio'),
            	);      
                
                $this->load->model('libro_model');                  
                $this->libro_model->actualizar_libro($data, $id);   
                redirect('libro_controler/gestionar_libros');
    }

    public function actualizar($id=NULL)      
    {   // VALIDAR LOS DATOS INGRESADOS   
            $data = array(
                'Id_usuario' => $this->input->post('Id_usuario'),
                'usuario' => $this->input->post('usuario'),
                'email' => $this->input->post('email'),
                'nombres' => $this->input->post('nombres'),
                'apellidos' => $this->input->post('apellidos'),
                'dni' => $this->input->post('dni'),
                'direccion' => $this->input->post('direccion'),
                ); 
                
                $this->load->model('admin_model');                  
                $this->admin_model->actualizar_usuario($data, $id);   
                redirect('admin_controller/usuarios');
    }



	public function productos()
	{
		$data['title']= 'Productos';
		$this->load->view('plantillas/header',$data);

		$datos = array('inicio' => '', 'usuarios' => '', 'productos' => 'active');
		$this->load->view('plantillas/nav_admin',$datos);
		$this->load->view('paginas/productos_admin');
		$this->load->view('plantillas/footer');
	}

}