<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class karyawanModel extends CI_model
{
	public function getAllKaryawan()
	{
		return $this->db->get('slip_gaji')->result_array();
	}

	public function hapusKaryawan($no)
	{
		$this->db->where('no', $no) ;
		$this->db->delete('slip_gaji');
	}

	public function ubahKaryawan()
	{
		
	}

}





