<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function show_admin()
	{
		$query = $this->db->get('admin');
		return $query->result();
	}

	public function cek_email($email)
	{
		# code...
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email', $email);

		$query = $this->db->get();
		if ($query->num_rows()) {
			# code...
			return true;
		} else {
			# code...
			return false;
		}		
	}

	public function insert_admin($data)
	{
		# code...
		$this->db->insert('admin', $data);
		return $this->db->insert_id();
	}

	public function update_admin($id,$data)
	{
		# code...
		$this->db->where('id_admin', $id);
		return $this->db->update('admin', $data);
	}

	public function move_admin($id,$data)
	{
		# code...
	}

	public function delete_admin($id)
	{
		# code...
	}

	public function cek_pass($email)
	{
		# code...
		$this->db->select('password');
		$this->db->from('admin');
		$this->db->where('email', $email);

		$query = $this->db->get();
		if ($query->num_rows()) {
			// return true;
			return $query->result_array();
		} else {
			// return false;
		}	
	}

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */