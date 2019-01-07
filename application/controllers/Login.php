<?php

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}

	public function index(){
		$data['mensaje'] = '';
		$this->load->view('login',$data);
		$this->load->view('layout/footer');
	}

	public function ingresar(){
		$usuario = $this->input->post('txtUsuario');
		$contra = $this->input->post('txtContra');

		$resultado = $this->mLogin->ingresar($usuario,$contra);

		if ($resultado == 1){
			$this->load->view('layout/header');
			$this->load->view('perfilp');
			$this->load->view('layout/footer');
		}else{
			$data['mensaje'] = "Usuario o contraseña erronea";
			$this->load->view('login',$data);
		}
	}
}