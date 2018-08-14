<?php

class M_eventos extends CI_Model
{

function nuevo_evento($data)
	{
		$this->db->insert('tb_eventos',$data);
	}

	function get_eventos(){
        return $this->db->get('tb_eventos');
    }
function asignaM($data)
	{
		$this->db->insert('tb_asignar_eventom',$data);
	}
	function asignaI($data)
	{
		$this->db->insert('tb_asignar_eventoi',$data);
	}
		public function delete_by_id($id)
	{
		$this->db->where('id_evento', $id);
		$this->db->delete('tb_eventos');
	}

	public function verEI($id){
		$this->db->select('tb_eventos.id_evento, codigo_evento , nom_evento , nom_invitado,apat_inivtado,amat_invitado,edad_invitado,tb_asignar_eventoi.observaciones,codigo_invitado,ninos');
		$this->db->from('tb_inivitado');
		$this->db->join('tb_asignar_eventoi ','tb_asignar_eventoi ON  tb_inivitado.id_invitado = tb_asignar_eventoi.id_invitado','inner');
		$this->db->join('tb_eventos','tb_asignar_eventoi.id_evento = tb_eventos.id_evento','inner');
		$this->db->where('tb_eventos.id_evento', $id);
		return $this->db->get();

	}
	public function verEM($id){
		$this->db->select('tb_eventos.id_evento, codigo_evento , nom_evento , nom_miembro,apat_miembro,amat_miembro,edad_miembro,tb_asignar_eventom.observaciones,codigo_miembro,ninos');
		$this->db->from('tb_miembros');
		$this->db->join('tb_asignar_eventom','tb_miembros.id_miembro = tb_asignar_eventom.id_miembro','inner');
		$this->db->join('tb_eventos','tb_asignar_eventom.id_evento = tb_eventos.id_evento','inner');
		$this->db->where('tb_eventos.id_evento', $id);
		return $this->db->get();

	}
	public function recupera_miembros_sin_evento()
	{
		return $this->db->query("SELECT * FROM tb_miembros WHERE id_miembro NOT IN (SELECT id_miembro FROM tb_asignar_eventom)");
	}
	public function recupera_invitado_sin_evento()
	{
		return $this->db->query("SELECT * FROM tb_inivitado WHERE id_invitado NOT IN (SELECT id_invitado FROM tb_asignar_eventoi)");
	}
	public function verEventoES($id){
		$this->db->where('tb_eventos.id_evento', $id);
		return $this->db->get("tb_eventos");

	}
}
