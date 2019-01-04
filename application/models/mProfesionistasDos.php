<?php

class MProfesionistasDos extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function guardarProfesionista($param){
		$campos = array(
			'correo' => $param['correo'],
			'contraseña' => $param['contraseña'],
			'id_usuariop' => $param['id_profesionista']
		);

		$this->db->insert('usuariosp',$campos);
	}
}