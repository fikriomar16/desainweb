<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_admin','admin');
	}

	public function index()
	{
		// $this->load->view('templates/form_header');
		// $this->load->view('resetpass');
		// $this->load->view('templates/form_footer');
		redirect('masuk');
	}

	public function resetpass()
	{
		$mail = $this->input->post('email');
		$pass = $this->input->post('password');

		$data = array('password' => md5($pass) );
		if ($this->admin->aktif_akun($mail,$data)) {
			echo "Reset Password Berhasil";
		} else {
			echo "Reset Password Gagal";
		}
		redirect('masuk');
	}

}

/* End of file Akun.php */
/* Location: ./application/controllers/Akun.php */