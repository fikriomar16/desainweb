<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_admin','admin');
	}

	public function index()
	{
		$M_admin = $this->load->model('M_admin');
		$data['admin_list'] = $this->M_admin->show_admin();

		$login = $this->session->userdata('login');
		if (!$login) {
			redirect('masuk','refresh');
		}
		$data['title'] = 'Kelola Data Admin - 5150411175';
		// $this->load->view('home', $data);
		
		$this->load->view('templates/header', $data);
		$this->load->view('admin', $data);
		$this->load->view('modal/mdladmin', $data);
		$this->load->view('templates/footer', $data);		
	}

	public function add_update()
	{
		$data = array(
			'fullname'=> $this->input->post('adduser'),
			'email'=> $this->input->post('addmail'),
			'password'=> md5($this->input->post('addpass'))
		);
		$id = $this->input->post('idadmin');
		$name = $this->input->post('adduser');
		$email = $this->input->post('addmail');
		$pass = $this->input->post('addpass');
		if (empty($id)) {			
			if ($this->admin->cek_email($email)) {
				echo "EMail Sudah terpakai";
			} else {
				$this->admin->insert_admin($data);
				redirect('admin','refresh');
			}
		} else {
			//echo $id."<br>".$name."<br>".$email."<br>".$pass."<br>";
			$cek_pass = $this->admin->cek_pass($email);
			$get_pass = $cek_pass[0]['password'];
			if ($get_pass == $pass) {
				$data = array(
					'fullname'=> $this->input->post('adduser'),
					'email'=> $this->input->post('addmail')
				);
				$this->admin->update_admin($id,$data);
				redirect('admin','refresh');
			} else {
				$this->admin->update_admin($id,$data);
				redirect('admin','refresh');
			}			
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */