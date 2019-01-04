<?php

class MLogin extends CI_Model
{	
	public function ingresar($usuario,$contra){
		$this->db->select('p.id_profesionista, up.id_usuariop, p.nombre, p.a_paterno, p.a_materno');
		$this->db->from('usuariosp up');
		$this->db->join('profesionistas p', 'p.id_profesionista = up.id_usuariop');
		$this->db->where('up.correo',$usuario);
		$this->db->where('up.contraseña',$contra);
		$resultado = $this->db->get();

		if ($resultado->num_rows() == 1){
			$r = $resultado->row();

			$s_usuario = array(
				's_idPersona' => $r->id_profesionista,
				's_id_profesionista' => $r->id_usuariop, 
				's_usuariosp' => $r->nombre.", ".$r->a_paterno." ".$r->a_materno
			);

			$this->session->set_userdata($s_usuario);
			return 1;
		}else {
			return 0;
		}
	}
}