<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Registro extends CI_Controller {
	function __construct()
    {
        parent::__construct();
				$this->removeCache();
				if(!$this->session->userdata('login')){

				 redirect(base_url());
			 }
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
	public function Inicio()
	{
		$this->load->view('V_Registro');
	}
	public function Miembro_load()
	{
		$this->load->view('V_Registro_miembro');
	}
	public function Invitado_load()
	{
		$this->load->view('V_Registro_invitado');
	}
	public function GuardarMiembro()
	{

            $da['codigo_miembro']=$this->input->post('txtcod');
			$da['nom_miembro']=$this->input->post('txtNom');
			$da['apat_miembro']=$this->input->post('txtapat');
			$da['amat_miembro']=$this->input->post('txtamat');
			$da['fnaci_miembro']=$this->input->post('txtfNac');
			$da['edad_miembro']=$this->input->post('txtedad');
			$da['sexo_miembro']=$this->input->post('txtsexo');
			$da['estado_civil_m']=$this->input->post('txtcivil');
			$da['Lada_miembro']=$this->input->post('txtlada');
			$da['telefono_miembro']=$this->input->post('txttel');
			$da['movil_miembro']=$this->input->post('txtmovil');
			$da['email_miembro']=$this->input->post('txtemail');
			$da['domicilio_miembro']=$this->input->post('txtdom');
			$da['num_miembro']=$this->input->post('txtnum');
			$da['ciudad_miembro']=$this->input->post('txtciudad');
			$da['pais_miembro']=$this->input->post('txtpais');
			$da['Clasificacion_miembro']=$this->input->post('txtclas');
			$da['Ministerio_miembro']=$this->input->post('txtminis');
			$da['fecha_ingreso_mimebro']=date('Y') .'-'. date('m') . '-' . date('d') ;

			$config['upload_path'] = 'upload/miembros/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload()){
					/*Si al subirse hay algún error lo meto en un array para pasárselo a la vista*/
							$error=array('error' => $this->upload->display_errors());
							if ($da['sexo_miembro']=="Mujer") {
									$da['nom_imagen']="mujer.png";
							}else if($da['sexo_miembro']=="Hombre"){
									$da['nom_imagen']="hombre.png";
							}
							$this->M_Registro->nuevo_miembro($da);

							redirect('C_Registro/consulta_miembros', 'refresh');

			}else{
					//Datos del fichero subido
					$datosI["img"]=$this->upload->data();
					$da['nom_imagen']=$datosI["img"]["file_name"];
					$this->M_Registro->nuevo_miembro($da);

					redirect('C_Registro/consulta_miembros', 'refresh');
			}

  }
  public function GuardarInvitado()
	{

            $da['codigo_invitado']=$this->input->post('txtcod');
			$da['nom_invitado']=$this->input->post('txtNom');
			$da['apat_inivtado']=$this->input->post('txtapat');
			$da['amat_invitado']=$this->input->post('txtamat');
			$da['fnaci_invitado']=$this->input->post('txtfNac');
			$da['edad_invitado']=$this->input->post('txtedad');
			$da['sexo_invitado']=$this->input->post('txtsexo');
			$da['estado_civil_i']=$this->input->post('txtcivil');
			$da['Lada_inivitado']=$this->input->post('txtlada');
			$da['telefono_inivtado']=$this->input->post('txttel');
			$da['movil_invitado']=$this->input->post('txtmovil');
			$da['email_invitado']=$this->input->post('txtemail');
			$da['domicilio_invitado']=$this->input->post('txtdom');
			$da['num_invitado']=$this->input->post('txtnum');
			$da['ciudad_invitado']=$this->input->post('txtciudad');
			$da['pais_invitado']=$this->input->post('txtpais');
			$da['iglesia']=$this->input->post('txtclas');

			$da['fecha_ingreso_mimebro']=date('Y') .'-'. date('m') . '-' . date('d') ;
			$da['hospedaje']=$this->input->post('txtminis');

			$config['upload_path'] = 'upload/invitados/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload()){
					/*Si al subirse hay algún error lo meto en un array para pasárselo a la vista*/
							$error=array('error' => $this->upload->display_errors());
							if ($da['sexo_invitado']=="Mujer") {
									$da['nom_imagen']="mujer.png";
							}else if($da['sexo_invitado']=="Hombre"){
									$da['nom_imagen']="hombre.png";
							}
							$this->M_Registro->nuevo_miembro($da);

							redirect('C_Registro/consulta_miembros', 'refresh');
						echo $this->upload->display_errors();
						return;
			}else{
					//Datos del fichero subido
					$datosI["img"]=$this->upload->data();
					$da['nom_imagen']=$datosI["img"]["file_name"];
					$this->M_Registro->nuevo_invitado($da);
					redirect('C_Registro/consulta_invitado', 'refresh');
			}



  }

	public function index()
	{
		# code...
		header("Location:".base_url());
	}
  public function consulta_miembros()
  {
  			//$data['consulta']= $this->M_Registro->get_miembro();

			$data['tipo']="Miembro";

			$this->load->library('pagination');
			$config['base_url'] =base_url('Ver_Miembros/');
			$config['total_rows'] = $this->M_Registro->getNumMiembros();
			$config['per_page']=10;
			$config['uri_segment']=2;
			$config['num_links']=1;


			$config['full_tag_open'] = '<hr><nav aria-label="..."> <ul class="pagination justify-content-end">';
	$config['full_tag_close'] = '</ul></nav>';
	$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
	$config['num_tag_close'] = '</span></li>';
	$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	$config['cur_tag_close'] = '</a></li>';
	$config['prev_link'] = '<span class="page-link" ><i class="fa fa-angle-left" aria-hidden="true"></i></span>';
		$config['next_link'] = '<span class="page-link"><i class="fa fa-angle-right" aria-hidden="true"></i></span>';
		$config['first_link'] = '<span class="page-link"><i class="fa fa-angle-left" aria-hidden="true"></i><i class="fa fa-angle-left" aria-hidden="true"></i></span>'; //primer link
		        $config['last_link'] = '<span class="page-link"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></span>'; //último link


			$this->pagination->initialize($config);

			$data['consulta']= $this->M_Registro->getPafinacion($config['per_page'],$this->uri->segment('2'));
			$data['pagination_n']=$this->pagination->create_links();
			$this->load->view('V_Consultas',$data);

  }
  public function consulta_invitado()
  {
  			$data['consulta']= $this->M_Registro->get_invitado();
			$data['tipo']="Invitado";
			$this->load->view('V_ConsultasI',$data);


  }

  public function delete_by_idM($id)
	{
		$this->M_Registro->delete_by_idM($id);
		redirect('C_Registro/consulta_miembros', 'refresh');

	}
	public function delete_by_idI($id)
	{
		$this->M_Registro->delete_by_idI($id);
		redirect('C_Registro/consulta_invitado', 'refresh');

	}
 	function updateM($i) {

			$da['codigo_miembro']=$this->input->post('txtcod');
			$da['nom_miembro']=$this->input->post('txtNom');
			$da['apat_miembro']=$this->input->post('txtapat');
			$da['amat_miembro']=$this->input->post('txtamat');
			$da['fnaci_miembro']=$this->input->post('txtfNac');
			$da['edad_miembro']=$this->input->post('txtedad');
			$da['sexo_miembro']=$this->input->post('txtsexo');
			$da['estado_civil_m']=$this->input->post('txtcivil');
			$da['Lada_miembro']=$this->input->post('txtlada');
			$da['telefono_miembro']=$this->input->post('txttel');
			$da['movil_miembro']=$this->input->post('txtmovil');
			$da['email_miembro']=$this->input->post('txtemail');
			$da['domicilio_miembro']=$this->input->post('txtdom');
			$da['num_miembro']=$this->input->post('txtnum');
			$da['ciudad_miembro']=$this->input->post('txtciudad');
			$da['pais_miembro']=$this->input->post('txtpais');
			$da['Clasificacion_miembro']=$this->input->post('txtclas');
			$da['Ministerio_miembro']=$this->input->post('txtminis');
			$this->M_Registro->update_Miembro($i,$da);
			redirect('C_Registro/consulta_miembros', 'refresh');

		}
}
