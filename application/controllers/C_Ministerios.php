<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Ministerios extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->removeCache();
    if(!$this->session->userdata('login')){

     redirect(base_url());
   }
   $this->load->model('M_ministerio');
  }

  function index()
  {

       $this->load->view('V_ministerios');
  }
  public function allMinis()
  {
    # code...
    $data['ministerios']=$this->M_ministerio->getMinisterios();
       $this->load->view('V_all_ministerios',$data);
  }
  public function removeCache()
  {
  $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
  $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
  $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
  $this->output->set_header('Pragma: no-cache');
  }
}
