<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		//$this->load->view('welcome_message');
		$this->removeCache();
		header('Location:'.base_url('C_login'));
	}
	public function removeCache()
 {
 $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
 $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
 $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
 $this->output->set_header('Pragma: no-cache');
 }
}
