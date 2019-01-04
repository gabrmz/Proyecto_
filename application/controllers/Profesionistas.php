<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesionistas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu'));
		$this->load->model('mProfesionistas');
		$this->load->model('mProfesionistasDos');
	}

	public function index(){
		$data['menu'] = main_menu();
		$this->load->view('profesionistas',$data);
	}

	public function registrar(){
		//Profesionista
		$param['nombre'] = $this->input->post('txtNombre');
		$param['a_paterno'] = $this->input->post('txtApPaterno');
		$param['a_materno'] = $this->input->post('txtApMaterno');
		$param['calle'] = $this->input->post('txtCalle');
		$param['num_int'] = $this->input->post('txtNumInterno');
		$param['num_ext'] = $this->input->post('txtnNumExterno');
		$param['colonia'] = $this->input->post('txtColonia');
		$param['municipio'] = $this->input->post('txtCiudad');
		$param['estado'] = $this->input->post('txtEstado');
		$param['tel'] = $this->input->post('txtTel');
		$param['cel'] = $this->input->post('txtCel');
		$param['web'] = $this->input->post('txtSitio');
		$param['profesion'] = $this->input->post('txtProfesion');
		$param['servicios'] = $this->input->post('txtServicio');
		//Usuario
		$paramUser['correo'] = $this->input->post('txtCorreo');
		$paramUser['contraseña'] = $this->input->post('txtContra');
		
		$lastId = $this->mProfesionistas->guardar($param);

		if ($lastId > 0){
			$paramUser['id_profesionista'] = $lastId;
			$this->mProfesionistasDos->guardarProfesionista($paramUser);
		}
	}

	public function actualizarDatos(){
		$param['nombre'] = $this->input->post('txtNombre');
		$param['a_paterno'] = $this->input->post('txtApPaterno');
		$param['a_materno'] = $this->input->post('txtApMaterno');
		$param['calle'] = $this->input->post('txtCalle');
		$param['num_int'] = $this->input->post('txtNumInterno');
		$param['num_ext'] = $this->input->post('txtnNumExterno');
		$param['colonia'] = $this->input->post('txtColonia');
		$param['municipio'] = $this->input->post('txtCiudad');
		$param['estado'] = $this->input->post('txtEstado');
		$param['tel'] = $this->input->post('txtTel');
		$param['cel'] = $this->input->post('txtCel');
		$param['web'] = $this->input->post('txtSitio');
		$param['profesion'] = $this->input->post('txtProfesion');
		$param['servicios'] = $this->input->post('txtServicio');

		$this->mProfesionistas->actualizarDatos($param);

		//$this->load->view('profesionistas');
		redirect('profesionistas/index');
	}
}