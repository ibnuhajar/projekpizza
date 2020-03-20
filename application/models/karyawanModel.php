<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class karyawanModel extends CI_model
{
	public function getAllKaryawan()
	{
		return $this->db->get('slip_gaji')->result_array();
	}

	

}





