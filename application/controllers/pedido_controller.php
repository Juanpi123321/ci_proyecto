
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido_controller extends CI_Controller {


		function __construct()
    			{
        			parent::__construct();
              $this->load->model('pedido_model');
    			}

  public function index()
  {
    $data['title']= 'Verificacion de datos';
    $this->load->view('plantillas/header',$data);

    $datos = array('inicio' => '', 'contacto' => '', 'nosotros' => '', 'productos' => '');
    /*aca no le puse el "seleccionar_nav" xq esta en el otro controlador*/
    if ($this->session->userdata('login'))
        {
          $datos['nombres'] = $this->session->userdata('nombres');
          $datos['apellidos'] = $this->session->userdata('apellidos');
          $datos['imagen'] = $this->session->userdata('imagen');
          $datos['nombre_usuario'] = $this->session->userdata('nombre_usuario');
          $this->load->view('plantillas/nav_salir',$datos); 
        } else {
                $this->load->view('plantillas/nav_ingresar',$datos);
        }
    $id = $this->session->userdata('Id_usuario');
    $this->buscar_usuario($id);
    $this->load->view('plantillas/footer');
  }

  public function buscar_usuario($id){
    $this->load->model('pedido_model');             
      $usuario = $this->pedido_model->select_usuario_id($id);
      $persona = $this->pedido_model->select_persona_id($id);   
    
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
      $this->load->view('paginas/pedido_view',$data);
  }

  public function editar_datos()
  {
    $data['title']= 'Datos del Usuario';
    $this->load->view('plantillas/header',$data);

    $datos = array('inicio' => '', 'contacto' => '', 'nosotros' => '', 'productos' => '');
    /*aca no le puse el "seleccionar_nav" xq esta en el otro controlador*/
    if ($this->session->userdata('login'))
        {
          $datos['Id_usuario'] = $this->session->userdata('Id_usuario');
          $datos['nombres'] = $this->session->userdata('nombres');
          $datos['apellidos'] = $this->session->userdata('apellidos');
          $datos['imagen'] = $this->session->userdata('imagen');
          $datos['nombre_usuario'] = $this->session->userdata('nombre_usuario');
          $this->load->view('plantillas/nav_salir',$datos); 
        } else {
                $this->load->view('plantillas/nav_ingresar',$datos);
        }

    $id = $this->session->userdata('Id_usuario');
    $this->load->model('pedido_model');             
      $usuario = $this->pedido_model->select_usuario_id($id);
      $persona = $this->pedido_model->select_persona_id($id);   
    
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

    $this->load->view('paginas/pedido_editar_datos',$data);
    $this->load->view('plantillas/footer');
  }

 public function guardar_pedido()  
 {   
    $orden_pedido = array(    
        'cliente_id'  => $this->session->userdata('Id_usuario'),    
        'fechayhora'  => date('Y-m-d H:i:s'),
        'forma_pago_id' => $this->input->post('forma_pago'), 
        );
        $this->pedido_model->guardar_factura_cabecera($orden_pedido);                         
        // obtiene el maximo id_orden_pedido ingresado                  
        $id_orden = $this->db->insert_id();  
        if ($cart = $this->cart->contents()):    
          foreach ($cart   as   $item):           
            $detalle_pedido = array(     
                  'factura_id'                => $id_orden,      
                  'producto_id'                => $item['id'],     
                  'cantidad' => $item['qty'],     
                  'precio_unit'  => $item['price']     
                  );                                                   
            $this->pedido_model->guardar_factura_detalle($detalle_pedido);     
          endforeach;   
        endif;      
        $this->cart->destroy();  
        // Mensaje de agradecimiento por la compra  
        redirect('pcgamer/productos'); // Regresar a la página de listado de productos    
  } 

  public function actualizar($id=NULL)      
    {  
            $data = array(
                'email' => $this->input->post('email'),
                'nombres' => $this->input->post('nombres'),
                'apellidos' => $this->input->post('apellidos'),
                'dni' => $this->input->post('dni'),
                'direccion' => $this->input->post('direccion'),
                ); 
                
                $this->load->model('pedido_model');
                $this->pedido_model->actualizar($data, $id);   
                redirect('pedido_controller');
    }

}
