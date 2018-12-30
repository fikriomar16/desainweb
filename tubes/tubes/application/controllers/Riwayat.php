<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	public function index()
	{
		$M_riwayat = $this->load->model('M_riwayat');
		$data['riwayat_list'] = $this->M_riwayat->show_riwayat();

		$login = $this->session->userdata('login');
		if (!$login) {
			redirect('masuk');
		}
		$data['title'] = 'Riwayat - 5150411175';

		$this->load->view('templates/header', $data);
		$this->load->view('riwayat', $data);
		$this->load->view('templates/footer', $data);
	}

}

/* End of file Riwayat.php */
/* Location: ./application/controllers/Riwayat.php */