<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_login','login');
		$this->load->model('M_admin','admin');
	}

	public function index()
	{
		$login = $this->session->userdata('login');
		if ($login) {
			redirect('Home','refresh');
		}

		$data['title']='Desain Web - 5150411175';
		// $this->load->view('templates/login_header', $data);
		$this->load->view('v_login', $data);
		$this->load->view('modal/mdlpass', $data);
		$this->load->view('modal/mdlreg', $data);
		// $this->load->view('templates/login_footer', $data);
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
		redirect('masuk');
	}

	public function new_user()
	{
		$data = array(
			'fullname' => $this->input->post('reguser'),
			'email' => $this->input->post('regmail'),
			'password' => md5($this->input->post('regpass'))
		);
		$nama = $this->input->post('reguser');
		$email = $this->input->post('regmail');
		if ($this->admin->cek_email($email)) {
			echo "<script>swal('Email Sudah Terpakai')</script>";
			redirect('home');
		} else {
			echo "SUKSES";
			$this->admin->insert_admin($data);

			//konfigurai send mail dll

			$from = "slimeque69@gmail.com";
			$subject = 'Konfirmasi email address';
			$message = 'Yang Terhormat, <b>' . $nama . '</b><br><br> Silahkan klik alamat dibawah untuk melakukan aktivasi email!<br><a href=\'' . base_url('') . 'konfir_akun/' . md5($email) . '\'>' . base_url('') . 'konfir_akun/' . md5($email) . '</a><br><br>Terima Kasih';

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
			
			$this->email->from($from, 'Omar | Desain Web - 5150411175');
			$this->email->to($email);
			$this->email->subject($subject);
			$this->email->message($message);

			if ($this->email->send()) {
				$this->session->set_flashdata('sukses', 'Registered successfully. Silahlah cek email untuk ativasi!');
				//redirect('masuk');
			} else {
				$this->session->set_flashdata('gagal', $this->email->print_debugger());
			}

			redirect('masuk');
		}
	}

	public function aktivasi()
	{
		$code = $this->uri->segment(2);
		$data = array('active' => 'True');

		if ($this->admin->cek_aktif($code)) {
			$this->admin->aktif_akun($code,$data);
			echo "Sukses Aktivasi";
			redirect('masuk');
		} else {
			echo "Waktu untuk aktivasi telah kadaluarsa";
			$this->admin->hangus_akun($code);
		}
		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
?>