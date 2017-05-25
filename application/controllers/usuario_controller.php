
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_controller extends CI_Controller {


		function __construct()
    			{
        			parent::__construct();
    			}

  public function index()
  {
    $data['title']= 'Bienvenido a Pc-Gamer';
    $this->load->view('plantillas/header',$data);

    $datos = array('inicio' => 'active', 'contacto' => '', 'nosotros' => '');
    $this->load->view('plantillas/nav_ingresar',$datos);
    $this->load->view('paginas/login_usuario');
    $this->load->view('plantillas/footer');
  }

/*
 public function iniciar_sesion() {
    
    $this->form_validation->set_rules('usuario_name', 'Nombre', 'required');
        $this->form_validation->set_rules('usuario_password', 'Password', 'required|callback_verificar_password');
    
	if ($this->form_validation->run() == FALSE) {

                $this->login();

        } else {

        	$this->usuario_logueado();     

                }
}*/
  
  public function iniciar_sesion() {
    
    $this->form_validation->set_rules('usuario', 'Nombre', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|callback_verificar_password');
    
  if ($this->form_validation->run() == FALSE) {
                $this->index();
        } else {
          /*redirect('persona_controller');*/
          $this->usuario_logueado();
        }
  }

  function verificar_password($password)
  {  // verifica que el usuario exista
         $usuario = $this->input->post('usuario');
         $password = $this->input->post('password');
         $contrasena = base64_encode($password);
         
         $this->load->model('usuario_model');
         $usuario = $this->usuario_model->buscar_usuario($usuario, $contrasena);
         if ($usuario) {
                 $persona_id = $usuario ->persona_id;
                 $persona = $this->usuario_model->buscar_persona($persona_id);
                 $datos_usuario = array(
                   'Id_usuario' => $usuario->Id_usuario,
                   'nombres' => $persona->nombres,
                   'apellidos' => $persona->apellidos,
                   'rol' =>$persona->rol_id,
                   'login' => TRUE
                );
                    $this->session->set_userdata($datos_usuario);
      return true;                            
         } else {
               $this->form_validation->set_message('verificar_password', 'Usuario o contraseña invalidos');
                return false;
         }
    }


 /*     function verificar_password($password)
	{
	// verifica que el usuario exista
         $usuario = $this->input->post('usuario_name');
         $pass = $this->input->post('usuario_password');
         $contrasenia = base64_encode($pass);
         
         $this->load->model('usuario_model');
         $usuario = $this->usuario_model->buscar_usuario($usuario, $contrasenia);
         if ($usuario) {
                 $persona_id = $usuario ->id_persona;
                 $persona = $this->usuario_model->buscar_persona($persona_id);
                 $datos_usuario = array(
                   'id_usuario' => $persona->id_persona,
                   'nombre' => $persona->nombre,
                   'apellido' => $persona->apellido,
                   'perfil' => $persona->perfil_id,
                   'login' => TRUE
                );
                   	$this->session->set_userdata($datos_usuario);
			return true;                            
         } else {
               $this->form_validation->set_message('verificar_password', 'Usuario o contraseña invalidos');
                return false;
         }
    }*/



  /*public function usuario_logueado() {
      if ($this->session->userdata('login')){
         $data = array();
         $perfil_usuario = $this->session->userdata('perfil');
         //SE VERIFICA EL PERFIL DEL USUARIO PARA REDIRECCIONAR A LA PAGINA CORRESPONDIENTE
			switch ($this->session->userdata('perfil')) {			
			case '1':
				redirect('libro_controler');
				break;				
			case '2':
				redirect('proyecto');
				break;	
			}      
       }else{        
            $this->login_sesion();
      }
   }*/

   public function usuario_logueado() {
      if ($this->session->userdata('login'))
      {
        $data = array();  //???
        $rol_usuario = $this->session->userdata('rol');
        //SE VERIFICA EL PERFIL DEL USUARIO PARA REDIRECCIONAR A LA PAGINA CORRESPONDIENTE
          switch ($rol_usuario){
          case '1':
            redirect('admin_controller');
            break;        
          case '2':
            redirect('persona_controller');
            break; 
          case '3':
            redirect('persona_controller');   //en este caso cliente va a ser igual que empledo
            break;                         
          default:
            redirect('index'); 
            break;
          }   
       }else{
          redirect('index');
      }
   }


 /*public function cerrar_sesion() {
          
      $this->session->sess_destroy();
    
      $this->iniciar_sesion();
   }*/



}
