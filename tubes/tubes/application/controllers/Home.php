<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('user_agent');
	}

	public function index()
	{
		$login = $this->session->userdata('login');
		if (!$login) {
			redirect('masuk','refresh');
		}
		$data['title'] = 'Dashboard - 5150411175';
		// $this->load->view('home', $data);
		
		$this->load->view('templates/header', $data);
		$this->load->view('test', $data);
		$this->load->view('templates/footer', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */ ?>