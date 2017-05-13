<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona_controller extends CI_Controller {


		function __construct()
    			{
        			parent::__construct();
    			}

public function index()
  {

    $data['title']= 'Bienvenido a Pc-Gamer';
    $this->load->view('plantillas/header',$data);

    $datos = array('inicio' => '', 'contacto' => '', 'nosotros' => '');
    $this->load->view('plantillas/nav_salir',$datos);

    $this->load->view('paginas/productos');
    $this->load->view('plantillas/footer');
   
}


public function registracion()
  {
    $data['title']= 'Registracion';
    $this->load->view('plantillas/header',$data);

    $datos = array('inicio' => '', 'contacto' => '', 'nosotros' => '');
    $this->load->view('plantillas/nav_ingresar',$datos);
    $this->load->view('paginas/registracion');
    $this->load->view('plantillas/footer');
  }



public function registrar_persona()

	{          
   $this->form_validation->set_rules('nombre', 'Nombre de la persona', 'required');
   $this->form_validation->set_rules('apellido', 'Apellido de la persona', 'required');
   
   $this->form_validation->set_rules('dni', 'DNI de la persona', 'required|integer');
   $this->form_validation->set_rules('direccion', 'Direccion de la persona');
   $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

   $this->form_validation->set_rules('usuario', 'usuario', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
   $this->form_validation->set_rules('passconf', 'Confirmar password', 'trim|required|matches[password]');  /*trim me quita espacios*/


/*para que mustre el mensaje con esa leyendo o sino va a mostrar en ingles*/
$this->form_validation->set_message('valid_email', 'El campo %s debe ser un mail válido');
$this->form_validation->set_message('integer', 'El campo %s debe poseer solo numeros enteros');
$this->form_validation->set_message('required', 'El campo %s es obligatorio');
$this->form_validation->set_message('min_length', 'El campo %s debe contener como mínimo %d caracteres');
$this->form_validation->set_message('matches', 'las contraseñas no coinciden');


   if ($this->form_validation->run() == FALSE) {

                $this->registracion();

        } else {
           $this->insertar_persona();
            
        }         
          
     }


public function insertar_persona()
{
      $nombre = $this->input->post('nombre');
      $apellido = $this->input->post('apellido');
      $dni = $this->input->post('dni');
      $direccion = $this->input->post('direccion');
      $email = $this->input->post('email');
      $usuario = $this->input->post('usuario');
      $password = $this->input->post('password');
      $passconf = $this->input->post('passconf');


      $this->load->model('persona_model');

                  
      $this->persona_model->guardar_persona($nombre, $apellido, $dni, $direccion, $email); 
      
      /*recupera el ultimo id creado incremental*/
      $id = $this->db->insert_id();
      $this->persona_model->guardar_usuario($id, $usuario, $password); 
 }

}