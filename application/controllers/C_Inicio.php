<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Inicio extends CI_Controller {
	function __construct()
    {
        parent::__construct();
$this->removeCache();
          if(!$this->session->userdata('login')){

						redirect(base_url());
					}


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
	public function Inicio()
	{
		$this->load->view('V_Principal');
	}

	public function pruebas()
	{
		$this->load->view('pruebas');
	}
	function cargar_archivo() {

        $mi_archivo = 'mi_archivo';
        $config['upload_path'] = base_url()."assets/img/eventos/";
        $config['file_name'] = "nombre_archivo";
        $config['allowed_types'] = "*";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
						echo $config['upload_path'];
            return;
        }else{
					  $data['uploadSuccess'] = $this->upload->data();
						echo $this->upload->data();
						return;
				}


    }

		public function subir(){

        $config['upload_path'] = 'upload/eventos/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload()){
            /*Si al subirse hay algún error lo meto en un array para pasárselo a la vista*/
                $error=array('error' => $this->upload->display_errors());
              echo $this->upload->display_errors();
							return;
        }else{
            //Datos del fichero subido
            $datosI["img"]=$this->upload->data();
						$datosI["img"]["file_name"];
        }
    }
}
