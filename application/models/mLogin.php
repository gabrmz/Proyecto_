<?php

class MLogin extends CI_Model
{	
	public function ingresarProfesionista($usuario,$contra){
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

	public function ingresarCliente($usuario,$contra){
		$this->db->select('c.id_cliente, uc.id_usuariosc, c.nombre, c.a_paterno, c.a_materno');
		$this->db->from('usuariosc uc');
		$this->db->join('clientes c', 'c.id_cliente = uc.id_usuariosc');
		$this->db->where('uc.correo',$usuario);
		$this->db->where('uc.contraseña',$contra);
		$resultado = $this->db->get();
		if ($resultado->num_rows() == 1){
			$r = $resultado->row();

			$s_usuario = array(
				's_idPersona' => $r->id_usuariosc,
				's_id_cliente' => $r->id_cliente, 
				's_usuariosc' => $r->nombre.", ".$r->a_paterno." ".$r->a_materno
			);
			$this->session->set_userdata($s_usuario);
			return 1;
		}else {
			return 0;
		}
	}
}