<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_terhapus extends CI_Model {

	public function show_terhapus()
	{
		$query = $this->db->get('buang');
		return $query->result();
	}
}

/* End of file M_terhapus.php */
/* Location: ./application/models/M_terhapus.php */