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

		$this->load->model('usuario_model');
		$data['usuarios'] = $this->usuario_model->select_usuarios(); 
		$this->load->view('paginas/usuarios_admin', $data);
		$this->load->view('plantillas/footer');
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