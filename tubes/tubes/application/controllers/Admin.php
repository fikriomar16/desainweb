<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('user_agent');
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_admin','admin');
	}

	public function testip()
	{
		echo $this->input->ip_address();
	}
	public function cekos()
	{
		echo $this->agent->platform();
	}
	public function cek()
	{
		echo $this->session->userdata('login')['email'];
	}
	
	public function index()
	{
		$M_admin = $this->load->model('M_admin');
		$data['admin_list'] = $this->M_admin->show_admin();

		$login = $this->session->userdata('login');
		if (!$login) {
			redirect('masuk');
		}
		$data['title'] = 'Kelola Data Admin - 5150411175';
		// $this->load->view('home', $data);
		
		$this->load->view('templates/header', $data);
		$this->load->view('admin', $data);
		$this->load->view('modal/mdladmin', $data);
		$this->load->view('modal/mdldel', $data);
		$this->load->view('templates/footer', $data);		
	}

	public function add_update()
	{
		$data = array(
			'fullname'=> $this->input->post('adduser'),
			'email'=> $this->input->post('addmail'),
			'password'=> md5($this->input->post('addpass'))
		);
		$log_insert = array(
			'admin' => $this->session->userdata('login')['email'],
			'ip_address' => $this->input->ip_address(),
			'os' => $this->agent->platform(),
			'user' => $this->input->post('addmail'),
			'ket' => 'Insert User'
		);
		$log_update = array(
			'admin' => $this->session->userdata('login')['email'],
			'ip_address' => $this->input->ip_address(),
			'os' => $this->agent->platform(),
			'user' => $this->input->post('addmail'),
			'ket' => 'Update User'
		);

		$id = $this->input->post('idadmin');
		$name = $this->input->post('adduser');
		$email = $this->input->post('addmail');
		$pass = $this->input->post('addpass');

		if (empty($id)) {
			// Jika id kosong, maka akan melakukan insert data
			if ($this->admin->cek_email($email)) {
				echo "EMail Sudah terpakai";
				redirect('admin');
			} else {
				$this->admin->insert_admin($data);
				$this->admin->catat_log($log_insert);
				redirect('admin');
			}
		} else {
			// Jika id terisi, maka akan melakukan update data
			$cek_pass = $this->admin->cek_pass($email);
			$get_pass = $cek_pass[0]['password'];
			if ($get_pass == $pass) {
				$data = array(
					'fullname'=> $this->input->post('adduser'),
					'email'=> $this->input->post('addmail')
				);
				$this->admin->update_admin($id,$data);
				$this->admin->catat_log($log_update);
				redirect('admin');
			} else {
				$this->admin->update_admin($id,$data);
				$this->admin->catat_log($log_update);
				redirect('admin');
			}			
		}
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$data_buang = $this->admin->get_admin($id);
		$get_email = $this->admin->get_email($id)['email'];

		$log_delete = array(
			'admin' => $this->session->userdata('login')['email'],
			'ip_address' => $this->input->ip_address(),
			'os' => $this->agent->platform(),
			'user' => $get_email,
			'ket' => 'Delete User'
		);

		$this->admin->catat_log($log_delete);
		// memindahkan data ke tabel lain, kemudian menghapus data pada tabel ini
		$this->admin->buang_admin($data_buang);
		$this->admin->delete_admin($id);

		redirect('admin');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */