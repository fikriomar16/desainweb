<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terhapus extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_terhapus','terhapus');
	}

	public function index()
	{
		$data['buang_list'] = $this->terhapus->show_terhapus();
		$data['title'] = 'Data Terhapus - 5150411175';
		$this->load->view('templates/header', $data);
		$this->load->view('terhapus', $data);
		$this->load->view('templates/footer', $data);
	}

}

/* End of file Terhapus.php */
/* Location: ./application/controllers/Terhapus.php */