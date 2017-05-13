<?php 
/**  
* Class Libro_controler  *  
* @package Controllers  *  
* @author      Prof. Alfonzo, pedro */  

defined('BASEPATH') OR exit('No direct script access allowed');  

class Libro_controler extends CI_Controller {   

  function __construct()        
  	{            
  		parent::__construct();        
  	}

        public function index()  
        	{                 
        		$this->load->view('plantillas(profe)/header');   
    				$this->load->view('plantillas(profe)/navegar');
            
            $this->load->model('libro_model');  
            $data['categorias'] = $this->libro_model->select_categoria();   
    				$this->load->view('contenido(profe)/agregar_libro_view', $data);   
    				$this->load->view('plantillas(profe)/footer');    
    			}

public function registrar_libro()  
 {  
                $this->form_validation->set_rules('titulo', 'Titulo', 'required');     
                $this->form_validation->set_rules('autor', 'Autor', 'required');     
                $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');     
                $this->form_validation->set_rules('stock', 'Stock', 'required|integer');     
                $this->form_validation->set_rules('precio', 'Precio', 'required|decimal');  
          			$this->form_validation->set_rules('categoria', 'Seleccionar una categoria', 'required|callback_select_validate'); 
      			    $this->form_validation->set_rules('imagen', 'Seleccionar una imagen',  'callback_validar_imagen');  

      			    $this->form_validation->set_message('decimal', 'Debe ingresar valores con decimales');    
      			    $this->form_validation->set_message('integer', 'El campo %s debe poseer solo numeros enteros');     
      			    $this->form_validation->set_message('required', 'El campo %s es obligatorio'); 

if ($this->form_validation->run() == FALSE) 
	{  
            $this->index();  
    } else {  
            $this->guardar_libro();  
           }   
 }   

function validar_imagen($imagen)  
{          //Verifica que se ingreso una imagen  
           $nombre_imagen = $_FILES['imagen']['name']; //Obtiene el nombre de la imagen  
           if (empty($nombre_imagen))             {                 
           		$this->form_validation->set_message('validar_imagen', 'Seleccionar una imagen');        
           		return false;                           
           	} else {      
                return true;             
            }     
 }          

 function select_validate($categoria) 
 {			// verifica que se selecciono una categoria del libro  
      		if($categoria=="ninguno"){  
                  $this->form_validation->set_message('select_validate', 'Seleccione una categoria');     
                  return false;  
            } else{  
                  return true;         
            }  
}   

function guardar_libro() 
{  
                $config['upload_path'] = './uploads/imagenes_libro';                 
                $config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';                 
                $config['remove_spaces'] = TRUE;                 
                $config['max_size'] = '1024';  
                           
                $this->load->library('upload', $config);   
        	
        	if (!$this->upload->do_upload('imagen')) 
        	{  
           		echo "<script type=\"text/javascript\">alert('No se pudo cargar el archivo');</script>";  
           		$this->index();  
        	} else {  
                $data = array(
	                	'libro_titulo' => $this->input->post('titulo'),
	                	'libro_autor' => $this->input->post('autor'),                   
	                	'libro_descripcion'=> $this->input->post('descripcion'),                   
	                	'libro_stock' => $this->input->post('stock'),                   
	                	'libro_precio'=> $this->input->post('precio'),                   
	                	'libro_imagen' => $_FILES['imagen']['name'],                    
	                	'libro_categoria'=> $this->input->post('categoria'),                   
	                	'libro_estado' => 1);

                        $this->load->model('libro_model');                                    
                        $this->libro_model->guardar_libro($data);   
                  		
                  		redirect('libro_controler');      
                  	}
    }                      

}