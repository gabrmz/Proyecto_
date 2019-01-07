<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Profesionista');
	}

	public function resultados(){
		$object = $this->input->post('busqueda');
		$keyWords = explode(' ', $object);
		$resultados = $this->Profesionista->getProfesionistaByServiceOrCategory($keyWords);
		$data = array();
		$data['resultados'] = $resultados;
		$this->load->view('results', $data);
	}
	
}
