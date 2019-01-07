<?php

class Valoracion extends CI_Model{	
	function __construct(){       
		parent::__construct();
	}

	public function getValoracionByProfesionista($idProfesionista){
		$this->db->select('*');
		$this->db->from('valoracion');
		$this->db->where('id_p',$idProfesionista);
		$resultado = $this->db->get();
		$info = $resultado->result_array();
		if (count($info) > 0){            
			return $info;            
		}else{
			return array();
		}				
	}
}