<?php

class Profesionista extends CI_Model{	
	function __construct(){       
		parent::__construct();
	}

	public function getProfesionista($idProfesionista){
		$this->db->select('*');
		$this->db->from('profesionistas');
		$this->db->where('id_profesionista',$idProfesionista);
		$resultado = $this->db->get();
		$info = $resultado->result_array();
		if (count($info) == 1){            
			return $info[0];            
		}else{
			return null;
		}				
	}
}