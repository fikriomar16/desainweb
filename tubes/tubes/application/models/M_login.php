<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');
	}

	public function login($email,$password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->where('active', 'True');
		if ($query = $this->db->get()) {
			return $query->row_array();
		} else {
			return false;
		}
	}

	public function update_login($email)
	{
		$now = date("Y-m-d H:i:s");
		$data = array('tglwaktu' => $now);
		$this->db->where('email', $email);
		$this->db->update('admin', $data);
	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */
?>