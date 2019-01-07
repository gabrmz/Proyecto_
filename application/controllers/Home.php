<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Profesionista');
	}

	public function resultados(){
		$palabrasClave = array('diseños','desarrollo','videoclips');
		$resultados = $this->Profesionista->getProfesionistaByServiceOrCategory($palabrasClave);
		$data = array();
		$data['resultados'] = $resultados;
		$this->load->view('results', $data);
	}
	
}
