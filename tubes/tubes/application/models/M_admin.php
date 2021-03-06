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
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email', $email);

		$query = $this->db->get();
		if ($query->num_rows()) {
			return true;
		} else {
			return false;
		}		
	}

	public function cek_pass($email)
	{
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

	public function insert_admin($data)
	{
		$this->db->insert('admin', $data);
		return $this->db->insert_id();
	}

	public function update_admin($id,$data)
	{
		$this->db->where('id_admin', $id);
		return $this->db->update('admin', $data);
	}

	public function delete_admin($id)
	{
		$this->db->where('id_admin', $id);
		return $this->db->delete('admin');
	}

	public function get_admin($id)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_admin', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_email($id)
	{
		$this->db->select('email');
		$this->db->from('admin');
		$this->db->where('id_admin', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function buang_admin($data)
	{
		$this->db->insert('buang', $data);
		return $this->db->insert_id();
	}

	public function catat_log($data)
	{
		$this->db->insert('riwayat', $data);
		return $this->db->insert_id();
	}

	public function cek_aktif($email)
	{
		$now = date("Y-m-d H:i:s");

		$this->db->select("TIMESTAMPDIFF(MINUTE,tglwaktu,'$now') AS menit");
		$this->db->from('admin');
		$this->db->where('active', 'False');
		$this->db->where('md5(email)', $email);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$data['a'] = $query->result_array();
			$menit = $data['a']['0']['menit'];
			if ($menit <= 1) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function aktif_akun($email,$data)
	{
		$this->db->where('md5(email)', $email);
		return $this->db->update('admin', $data);
	}

	public function hangus_akun($email)
	{
		$this->db->where('md5(email)', $email);
		return $this->db->delete('admin');
	}

	public function respas($email,$pass)
	{
		$this->db->where('md5(email)', $email);
		return $this->db->update('admin', $data);
	}

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */