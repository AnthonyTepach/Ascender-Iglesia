<?php

class M_Familia extends CI_Model
{


    //obtenemos el total de filas para hacer la paginación del buscador
    public function add($data) {
    	$this->db->insert('tb_familia',$data);


    }
    public function adda($data) {
    	$this->db->insert('tb_asigna_fam',$data);


    }
    public function get(){
        return $this->db->get('tb_familia');
    }
    public function getFa($id){
        $this->db->where('id_fam', $id);
        return $this->db->get('tb_familia');
    }
    	public function getAsigna($id){
		$this->db->select(' nom_miembro,apat_miembro,amat_miembro,edad_miembro,tipo');
		$this->db->from('tb_miembros');
		$this->db->join('tb_asigna_fam','tb_miembros.id_miembro = tb_asigna_fam.id_miembro','inner');
		$this->db->join('tb_familia','tb_asigna_fam.id_fam = tb_asigna_fam.id_fam','inner');
		$this->db->where('tb_familia.id_fam', $id);
		return $this->db->get();

	}
  public function recupera_familiares($value='')
  {
    return $this->db->query("SELECT `tb_familia`.`desc_fam`, `tb_asigna_fam`.`tipo`, `tb_miembros`.`nom_miembro`,`tb_miembros`.`edad_miembro` ,`tb_miembros`.`apat_miembro`, `tb_miembros`.`amat_miembro`
                             FROM `tb_familia`
                             LEFT JOIN `tb_asigna_fam` ON `tb_familia`.`id_fam` = `tb_asigna_fam`.`id_fam`
                             LEFT JOIN `tb_miembros` ON `tb_miembros`.`id_miembro` = `tb_asigna_fam`.`id_miembro`
                             WHERE `tb_asigna_fam`.`id_fam` = $value");
  }

  public function recupera_miembros_sin_familia()
  {
    return $this->db->query("SELECT * FROM tb_miembros WHERE id_miembro NOT IN (SELECT id_miembro FROM tb_asigna_fam)");
  }
  public function delete_by_id($id)
{
  $this->db->where('id_fam', $id);
  $this->db->delete('tb_familia');
}
}
