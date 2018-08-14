<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Membresia extends CI_Controller {
	function __construct()
    {
        parent::__construct();
				$this->removeCache();
				if(!$this->session->userdata('login')){

					redirect(base_url());
				}
        $this->load->model('M_membresia');
				$this->load->model('M_login');


    }
		public function removeCache()
	 {
	 $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
	 $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
	 $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
	 $this->output->set_header('Pragma: no-cache');
	 }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function totales()
	{
		$data['Mujer']=$this->M_membresia->totaoM();
		$data['Hombre']=$this->M_membresia->totaoH();
		$data['MujerI']=$this->M_membresia->totaoMI();
		$data['HombreI']=$this->M_membresia->totaoHI();
		$data['bebeM']=$this->M_membresia->bebesM();
		$data['ninoM']=$this->M_membresia->ninosM();
		$data['adolM']=$this->M_membresia->adoleM();
		$data['joveM']=$this->M_membresia->JoveM();
		$data['AdultM']=$this->M_membresia->AdultoM();
		$data['bebeI']=$this->M_membresia->bebesI();
		$data['ninoI']=$this->M_membresia->ninosI();
		$data['adolI']=$this->M_membresia->adoleI();
		$data['joveI']=$this->M_membresia->JoveI();
		$data['AdultI']=$this->M_membresia->AdultoI();
		$data['TotalM']=$this->M_membresia->getNumMiembros();
		$data['TotalI']=$this->M_membresia->getNumInvitados();

		$data["CbbM"]=$this->M_membresia->getEdaM(0,4);
		$data["CbbI"]=$this->M_membresia->getEdaI(0,4);
		$data["CninoM"]=$this->M_membresia->getEdaM(5,12);
		$data["CninoI"]=$this->M_membresia->getEdaI(5,12);
		$data["CadoleM"]=$this->M_membresia->getEdaM(13,17);
		$data["CadoleI"]=$this->M_membresia->getEdaI(13,17);
		$data["CjoveM"]=$this->M_membresia->getEdaM(18,30);
		$data["CjoveI"]=$this->M_membresia->getEdaI(18,30);
		$data["CadlM"]=$this->M_membresia->getEdaM(31,100);
		$data["CadlI"]=$this->M_membresia->getEdaI(31,100);

		$data["SmM"]=$this->M_membresia->getSexM("Mujer");
		$data["ShM"]=$this->M_membresia->getSexM("Hombre");
		$data["SmI"]=$this->M_membresia->getSexI("Mujer");
		$data["ShI"]=$this->M_membresia->getSexI("Hombre");


		$this->load->view('V_Membresia',$data);
	}



}
