<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Eventos extends CI_Controller {
	function __construct()
    {
        parent::__construct();
				$this->removeCache();
				if(!$this->session->userdata('login')){

					redirect(base_url());
				}
        $this->load->model('M_Eventos');
        $this->load->model('M_Registro');


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
	public function index()
	{
		$this->load->view('V_Eventos');
	}
	public function add_evento()
	{
		$this->load->view('V_Crear_Evento');
	}
	public function guardar_evento(){

		$datos['codigo_evento']=$this->input->post('txtcod');
		$datos['nom_evento']=$this->input->post('txtNom');
		$datos['fecha_evento']=$this->input->post('txtfecha');
		$datos['Lugar']=$this->input->post('txtlugar');
		$datos['horario']=$this->input->post('txthora');
		$datos['cupo']=$this->input->post('txtcupo');
		$datos['observaciones']=$this->input->post('txtdesc');

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
				$datos['imagen_evento']=$datosI["img"]["file_name"];
				$this->M_Eventos->nuevo_evento($datos);
				redirect('Ver_Eventos', 'refresh');
		}


	}

	 public function consulta_miembros()
  {
  			$data['consulta']= $this->M_Eventos->get_eventos();

			$this->load->view('V_Consulta_eventos',$data);


  }
public function asig_eventos()
  {
  	$data['evento']=$this->M_Eventos->get_eventos();
  	$data['invitado']=$this->M_Registro->getNameInvitado();
  	$data['miembro']=$this->M_Registro->getNameMiembro();
  	$this->load->view('V_Asignar_Evento',$data);
  }
public function guardar_asignacion(){
	$tipo=$this->input->post('txttipo');
	if ($tipo == "Invitado") {
		# code...
		$datos['id_invitado']=$this->input->post('txtid');
		$datos['id_evento']=$this->input->post('txteve');
		$datos['ninos']=$this->input->post('txtnin');
		$datos['observaciones']=$this->input->post('txtob');
		$this->M_Eventos->asignaI($datos);
	} else if($tipo == "Miembro"){
		# code...
		$datos['id_miembro']=$this->input->post('txtid');
		$datos['id_evento']=$this->input->post('txteve');
		$datos['ninos']=$this->input->post('txtnin');
		$datos['observaciones']=$this->input->post('txtob');
		$this->M_Eventos->asignaM($datos);

	}
	echo "<br><br><br><center><img width='200px' src=".base_url()."upload/gif/load.gif>";
	echo " <h1>Guardando espere un momento</h1></center>";
	echo "<script>setTimeout(function(){window.location.href='".base_url('Ver_Evento/').$datos['id_evento']."'},2000);</script>";
	}
	public function delete_by_id($id)
	{
		$this->M_Eventos->delete_by_id($id);
		redirect('Ver_Eventos', 'refresh');

	}

	public function ver_asignacion($id)
	{
		$data['evento']=$this->M_Eventos->verEventoES($id);
		$data['invitado']=$this->M_Eventos->verEI($id);
		$data['miembro']=$this->M_Eventos->verEM($id);
		$this->load->view('V_Asignaciones',$data);

	}
}
