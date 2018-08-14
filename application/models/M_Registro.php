<?php

class M_Registro extends CI_Model
{
	function nuevo_miembro($data)
	{
		$this->db->insert('tb_miembros',$data);
	}
	function nuevo_invitado($data)
	{
		$this->db->insert('tb_inivitado',$data);
	}
	function get_miembro(){
				$this->db->order_by('codigo_miembro', 'ASC');
        return $this->db->get('tb_miembros');
    }
    function get_invitado(){
			$this->db->order_by('codigo_invitado', 'ASC');
        return $this->db->get('tb_inivitado');
    }
    function getNameInvitado(){
			$this->db->order_by('codigo_invitado', 'ASC');
    	$this->db->select("id_invitado,nom_imagen");
    	$this->db->select("CONCAT(nom_invitado, ' ', apat_inivtado,' ',amat_invitado) AS NombreCompleto", FALSE);
    	$this->db->from('tb_inivitado');
    	return $this->db->get();
    }
    function getNameMiembro(){
			$this->db->order_by('codigo_miembro', 'ASC');
    	$this->db->select("id_miembro,nom_imagen");
    	$this->db->select("CONCAT(nom_miembro, ' ', apat_miembro,' ',amat_miembro) AS NombreCompleto", FALSE);
    	$this->db->from('tb_miembros');
    	return $this->db->get();
    }
        public function delete_by_idM($id)
    {
        $this->db->where('id_miembro', $id);
        $this->db->delete('tb_miembros');
    }
        public function delete_by_idI($id)
    {
        $this->db->where('id_invitado', $id);
        $this->db->delete('tb_inivitado');
    }
    function update_Miembro($id,$data){
    $this->db->where('id_miembro', $id);
    $this->db->update('tb_miembros', $data);
    }

		public function getNumMiembros()
		{
			$number=$this->db->query('SELECT count(*) as numfila FROM tb_miembros')->row()->numfila;
			return intval($number);
		}

		public function getPafinacion($numero_por_pagina,$seg)
		{
				$this->db->order_by('codigo_miembro', 'ASC');
				return $this->db->get('tb_miembros',$numero_por_pagina,$seg);
		}
}
