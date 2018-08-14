<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Familias extends CI_Controller {

	function __construct()
    {
        parent::__construct();
				$this->removeCache();
				if(!$this->session->userdata('login')){

					redirect(base_url());
				}
        $this->load->model('M_Familia');
        $this->load->model('M_Registro');

    }
		public function removeCache()
	 {
	 $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
	 $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
	 $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
	 $this->output->set_header('Pragma: no-cache');
	 }
	public function Inicio()
	{
		$this->load->view('V_Familia');
	}
	public function nueva()
	{
		$this->load->view('V_Familia_Nueva');
	}
	public function add()
	{

		$da['id_fam']=$this->input->post('txtcod');
			$da['Apellidos']=$this->input->post('txtNom');
			$da['desc_fam']=$this->input->post('txtdesc');
		$this->M_Familia->add($da);

		redirect('C_Familias/consulta_familia', 'refresh');
	}
	public function asigna()
	{

			$da['id_fam']=$this->input->post('id_fam');
			$da['id_miembro']=$this->input->post('id_miembro');
			$da['tipo']="indefinido";
			$this->M_Familia->adda($da);
			echo "<br><br><br><center><img width='200px' src=".base_url()."upload/gif/load.gif>";
			echo " <h1>Guardando espere un momento</h1></center>";
			echo "<script>setTimeout(function(){window.location.href='".base_url('C_Familias/verAF/').$da['id_fam']."'},2000);</script>";

		//redirect('C_Familias/consulta_familia', 'refresh');
	}
	public function consulta_familia()
	{
		$data['consulta']=$this->M_Familia->get();
		$this->load->view('V_Consulta_fam',$data);

	}
	public function nuevaAsignacion()
	{
		$data['fam']=$this->M_Familia->get();
		$data['mie']=$this->M_Familia->recupera_miembros_sin_familia();
		$this->load->view('V_asignar_familia',$data);

	}

		public function verAF($id)
	{
		$data['invitado']=$this->M_Familia->recupera_familiares($id);
		$data['familia']=$this->M_Familia->getFa($id);
		$this->load->view('Asignaciones_fam',$data);

	}
	public function elimina($p)
	{
		# code...
		$this->M_Familia->delete_by_id($p);
		redirect('Ver_familias','refresh');
	}

}
