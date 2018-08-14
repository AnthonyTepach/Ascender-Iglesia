<?php

class M_Buscar extends CI_Model
{
	  public function construct() {
        parent::__construct();
    }


    //obtenemos el total de filas para hacer la paginación del buscador
    public function busqueda($tipo,$buscador) {
    	if ($tipo == "Nombre") {
    		# code...
    		 $this->db->like('nom_miembro', $buscador);
             return  $this->db->get('tb_miembros');
    	} else if($tipo == "Código") {
    		# code...
             $this->db->like('codigo_miembro', $buscador);
             return  $this->db->get('tb_miembros');
    	}else if($tipo == "Ministerio"){
             $this->db->like('Ministerio_miembro', $buscador);
             return  $this->db->get('tb_miembros');
    	}
    	
       
    }

}