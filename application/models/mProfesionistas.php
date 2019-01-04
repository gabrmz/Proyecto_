<?php

class MProfesionistas extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($param){
		$campos = array(
			'nombre' => $param['nombre'],
			'a_paterno' => $param['a_paterno'],
			'a_materno' => $param['a_materno'],
			'num_int' => $param['num_int'],
			'num_ext' => $param['num_ext'],
			'calle' => $param['calle'],
			'colonia' => $param['colonia'],
			'municipio' => $param['municipio'],
			'estado' => $param['estado'],
			'tel' => $param['tel'],
			'cel' => $param['cel'],
			'web' => $param['web'],
			'profesion' => $param['profesion'],
			'servicios' => $param['servicios']
		);

		$this->db->insert('profesionistas',$campos);

		return $this->db->insert_id();
	}

	public function actualizarDatos($param){
		$campos = array(
			'nombre' => $param['nombre'],
			'a_paterno' => $param['a_paterno'],
			'a_materno' => $param['a_materno'],
			'num_int' => $param['num_int'],
			'num_ext' => $param['num_ext'],
			'calle' => $param['calle'],
			'colonia' => $param['colonia'],
			'municipio' => $param['municipio'],
			'estado' => $param['estado'],
			'tel' => $param['tel'],
			'cel' => $param['cel'],
			'web' => $param['web'],
			'profesion' => $param['profesion'],
			'servicios' => $param['servicios']
		);
		
		$this->db->where('id_profesionista',$this->session->userdata('s_idPersona'));
		$this->db->update('profesionistas',$campos);

		return 1;
	}
}