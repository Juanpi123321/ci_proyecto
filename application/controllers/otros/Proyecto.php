<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto extends CI_Controller {

		public function index()
	{
		$data['title'] = 'pagina de inicio';

  
		$this->load->view('plantillas(profe)/header');
		$this->load->view('plantillas(profe)/navegar');
		$this->load->view('contenido(profe)/contenido_index');
		$this->load->view('plantillas(profe)/footer');

	}

	
		public function login()
	{

		$this->load->view('plantillas(profe)/header');
		$this->load->view('plantillas(profe)/navegar');
		$this->load->view('contenido(profe)/contenido_login');
		$this->load->view('plantillas(profe)/footer');

		
	}


}
