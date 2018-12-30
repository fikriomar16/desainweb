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
		
	}

	public function new_user()
	{
		$data = array(
			'fullname' => $this->input->post('reguser'),
			'email' => $this->input->post('regmail'),
			'password' => $this->input->post('regpass')
		);
		$nama = $this->input->post('reguser');
		$email = $this->input->post('regmail');
		if ($this->admin->cek_email($email)) {
			echo "EMail Sudah terpakai";
			redirect('home');
		} else {
			echo "SUKSES";
			$this->admin->insert_admin($data);

			//konfigurai send mail dll

			$from = "slimeque@gmail.com"; 
			$message = 'Dear User, <b>' . $nama . '</b><br><br> Silahkan klik alamat dibawah untuk melakukan aktivasi email!<br><a href=\'' . base_url('') . 'konfir_akun/' . md5($email) . '\'>' . base_url('') . 'konfir_akun/' . md5($email) . '</a><br><br>Terima Kasih';

			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			$config['smtp_port'] = '465';
			$config['smtp_user'] = $from;
			$config['smtp_pass'] = 'slime2017';  // Password email
			$config['mailtype'] = 'html';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = 'TRUE';
			$config['newline'] = "\r\n";

			$this->load->library('email',$config);
			$this->email->initialize($config);
			
			$this->email->from($from, 'Fikri Omar | Desain Web - 5150411175');
			$this->email->to($email);
			$this->email->subject($subject);
			$this->email->message($message);

			if ($this->email->send()) {
				$this->session->set_flashdata('sukses', 'Registered successfully. Silahlah cek email untuk ativasi!');
				// redirect('masuk');
			} else {
				$this->session->set_flashdata('gagal', $this->email->print_debugger());
			}

			redirect('masuk');
		}
	}

}

/* End of file Akun.php */
/* Location: ./application/controllers/Akun.php */