<?php

class M_membresia extends CI_Model
{
	  public function construct() {
        parent::__construct();
    }


    //obtenemos el total de mujeres
    public function totaoM() {
			$number=$this->db->query('select count(id_miembro) as mujer from tb_miembros where sexo_miembro = "Mujer"')->row()->mujer;
    	return intval($number);
    }
    public function totaoH() {
			$number=$this->db->query('select count(id_miembro) as hombre from tb_miembros where sexo_miembro = "Hombre"')->row()->hombre;
    	return intval($number);
    }
     public function totaoHI() {
			 $number=$this->db->query('select count(id_invitado) as hombre from tb_inivitado where sexo_invitado = "Hombre"')->row()->hombre;
     	return intval($number);

    }
     public function totaoMI() {
			 $number=$this->db->query('select count(id_invitado) as hombre from tb_inivitado where sexo_invitado = "Mujer"')->row()->hombre;
			return intval($number);
    }

    public function bebesM(){
       	$this->db->select('COUNT(*) as bebe  FROM tb_miembros WHERE edad_miembro BETWEEN 0 AND 4 ');
        $number= $this->db->get()->row()->bebe;
				return intval($number);
    }
    public function ninosM(){
         $this->db->select('COUNT(*) as nino  FROM tb_miembros WHERE edad_miembro BETWEEN 5 AND 12 ');
				 $number= $this->db->get()->row()->nino;
 				return intval($number);
    }
    public function adoleM(){
         $this->db->select('COUNT(*) as adole  FROM tb_miembros WHERE edad_miembro BETWEEN 13 AND 17 ');
				 $number= $this->db->get()->row()->adole;
 				return intval($number);
    }
     public function JoveM(){
         $this->db->select('COUNT(*) as joven  FROM tb_miembros WHERE edad_miembro BETWEEN 18 AND 30 ');
				 $number= $this->db->get()->row()->joven;
 				return intval($number);
    }

		public function getEdaM($eda1,$eda2){
			$number=	$this->db->query("Select * FROM tb_miembros WHERE edad_miembro BETWEEN $eda1 AND $eda2 ");

			 return $number;
	 }
	 public function getEdaI($eda1,$eda2){
		 $number=	$this->db->query("Select * FROM tb_inivitado WHERE edad_invitado BETWEEN $eda1 AND $eda2 ");

			return $number;
	}
	 public function getSexM($sex){
	 		$number=$this->db->query("select * FROM tb_miembros WHERE sexo_miembro='$sex'");

	 	 return $number;
	 }

	 public function getSexI($sex){
	 		$number=$this->db->query("select * FROM tb_inivitado WHERE sexo_invitado= '$sex' ");

	 	 return $number;
	 }
    public function AdultoM(){
         $this->db->select('COUNT(*) as adulto  FROM tb_miembros WHERE edad_miembro BETWEEN 31 AND 100 ');
				 $number= $this->db->get()->row()->adulto;
 				return intval($number);
    }


     public function bebesI(){
         $this->db->select('COUNT(*) as bebe  FROM tb_inivitado WHERE edad_invitado BETWEEN 0 AND 4 ');
				 $number= $this->db->get()->row()->bebe;
 				return intval($number);
    }
    public function ninosI(){
         $this->db->select('COUNT(*) as nino  FROM tb_inivitado WHERE edad_invitado BETWEEN 5 AND 12 ');
				 $number= $this->db->get()->row()->nino;
 				return intval($number);
    }
    public function adoleI(){
         $this->db->select('COUNT(*) as adole  FROM tb_inivitado WHERE edad_invitado BETWEEN 13 AND 17 ');
				 $number= $this->db->get()->row()->adole;
 				return intval($number);
    }
     public function JoveI(){
         $this->db->select('COUNT(*) as joven  FROM tb_inivitado WHERE edad_invitado BETWEEN 18 AND 30 ');
				 $number= $this->db->get()->row()->joven;
 				return intval($number);
    }
    public function AdultoI(){
         $this->db->select('COUNT(*) as adulto  FROM tb_inivitado WHERE edad_invitado BETWEEN 31 AND 100 ');
				 $number= $this->db->get()->row()->adulto;
	 			return intval($number);
    }


		public function getNumMiembros()
		{
			$number=$this->db->query('SELECT count(*) as numfila FROM tb_miembros')->row()->numfila;
			return intval($number);
		}

		public function getNumInvitados()
		{
			$number=$this->db->query('SELECT count(*) as numfila FROM tb_inivitado')->row()->numfila;
			return intval($number);
		}
}
