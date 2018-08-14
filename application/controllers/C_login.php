<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller
{
  function __construct()
    {
        parent::__construct();
        $this->removeCache();
        $this->load->model('M_login');
    }

  public function index()
  {

    $this->session->sess_destroy();

    $this->load->view('V_login');

  }
  public function removeCache()
 {
 $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
 $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
 $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
 $this->output->set_header('Pragma: no-cache');
 }
  public function loging()
  {
    $user=$this->input->post('user');
    $pass=$this->input->post('pass');
    $fila=$this->M_login->user($user);
      if ($fila != null) {
        $con= $fila -> pass_usuario;
        if ($con == $pass) {
           $data['user']=$user;
           $data['id']=$fila-> id_usuario;
           $data['login']=true;
           $this->session->set_userdata($data);
          echo "<img width='50px' src=".base_url()."upload/gif/load.gif>";
          echo " Redireccionando a la página principal";
          echo "<script>setTimeout(function(){window.location.href='".base_url('Inicio')."'},2000);</script>";

        }else{
          echo "<b style='color:#900C3F;'>Contraseña incorrecta</b>";
        }
      }else{
        echo "<b style='color:#900C3F;'>El usuario no existe</b>";
      }
  }
  public function logout()
  {

  }

}

?>
