<?php

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}

	public function profesionista(){
		$data['mensaje'] = '';
		$data['tipo'] = 'profesionista';
		$this->load->view('login',$data);
		$this->load->view('layout/footer');
	}

	public function cliente(){
		$data['mensaje'] = '';
		$data['tipo'] = 'cliente';
		$this->load->view('login',$data);
		$this->load->view('layout/footer');
	}

	public function ingresarProfesionista(){
		$usuario = $this->input->post('txtUsuario');
		$contra = $this->input->post('txtContra');

		$resultado = $this->mLogin->ingresarProfesionista($usuario,$contra);

		if ($resultado == 1){
			$this->load->view('layout/header');
			$this->load->view('perfilp');
			$this->load->view('layout/footer');
		}else{
			$data['mensaje'] = "Usuario o contraseña erronea";
			$this->load->view('login',$data);
		}
	}

	public function ingresarCliente(){
		$cliente = $this->input->post('txtUsuario');
		$contra = $this->input->post('txtContra');

		$resultado = $this->mLogin->ingresarCliente($cliente,$contra);
		if ($resultado == 1){
			$this->load->view('layout/header');
			$this->load->view('perfilp');
			$this->load->view('layout/footer');
		}else{
			$data['mensaje'] = "Usuario o contraseña erronea";
			$this->load->view('login',$data);
		}
	}

	public function endSession(){
		$this->session->sess_destroy();
	}
}