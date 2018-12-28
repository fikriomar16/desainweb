<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_riwayat extends CI_Model {

	public function show_riwayat()
	{
		$query = $this->db->get('riwayat');
		return $query->result();
	}

}

/* End of file M_riwayat.php */
/* Location: ./application/models/M_riwayat.php */