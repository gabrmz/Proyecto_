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

	public function getProfesionistaByServiceOrCategory($words){
		$this->db->select('profesionistas.id_profesionista, profesionistas.nombre, profesionistas.a_paterno, profesionistas.a_materno, profesionistas.profesion, profesionistas.municipio, profesionistas.estado, valoracion.puntuacion');
		$this->db->from('profesionistas');
		$this->db->join('valoracion', 'profesionistas.id_profesionista = valoracion.id_valoracion', 'left outer'); 
		foreach ($words as $word){
			$this->db->or_like('servicios', $word);
			$this->db->or_like('profesion', $word);
			$this->db->or_like('profesion', $word);
		}
		
		foreach ($words as $word){
			
		}
		$this->db->distinct();
		$resultado = $this->db->get();
		$info = $resultado->result_array();
		return $info;
	}
}