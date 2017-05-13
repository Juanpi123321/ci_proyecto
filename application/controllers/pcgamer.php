<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pcgamer extends CI_Controller {
	
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
		$this->load->view('paginas/index');
		$this->load->view('plantillas/footer');
	}

	public function contacto()
	{
		$data['title']= 'Contacto';
		$this->load->view('plantillas/header',$data);

		$datos = array('inicio' => '', 'contacto' => 'active', 'nosotros' => '');
		$this->load->view('plantillas/nav_ingresar',$datos);
		$this->load->view('paginas/contacto');
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

	public function quienes_somos()
	{
		$data['title']= 'Quienes Somos';
		$this->load->view('plantillas/header',$data);

		$datos = array('inicio' => '', 'contacto' => '', 'nosotros' => 'active');
		$this->load->view('plantillas/nav_ingresar',$datos);
		$this->load->view('paginas/quienes_somos');
		$this->load->view('plantillas/footer');
	}

	public function comercializacion()
	{
		$data['title']= 'Comercializacion';
		$this->load->view('plantillas/header',$data);

		$datos = array('inicio' => '', 'contacto' => '', 'nosotros' => 'active');
		$this->load->view('plantillas/nav_ingresar',$datos);
		$this->load->view('paginas/comercializacion');
		$this->load->view('plantillas/footer');
	}

	public function terminos_y_condiciones()
	{
		$data['title']= 'Terminos y Condiciones';
		$this->load->view('plantillas/header',$data);

		$datos = array('inicio' => '', 'contacto' => '', 'nosotros' => 'active');
		$this->load->view('plantillas/nav_ingresar',$datos);
		$this->load->view('paginas/terminos_y_condiciones');
		$this->load->view('plantillas/footer');
	}
}