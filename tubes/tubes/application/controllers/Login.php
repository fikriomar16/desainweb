<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_login','login');
	}

	public function index()
	{
		$login = $this->session->userdata('login');
		if ($login) {
			redirect('Home','refresh');
		}

		$data['title']='Desain Web - 5150411175';
		$this->load->view('v_login', $data);
		$this->load->view('modal/mdlpass', $data);
		$this->load->view('modal/mdlreg', $data);
	}

	public function masuk()
	{
		$username = $this->input->post('username');
		$pass = md5($this->input->post('password'));
		$data = $this->login->login($username,$pass);
		if ($data) {
			$this->login->update_login($username);
			$newdata = $this->login->login($username,$pass);

			$this->session->set_userdata('login',$newdata);
			redirect('Home','refresh');
		} else {
			redirect('masuk','refresh');
		}
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('masuk','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
?>