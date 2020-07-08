<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class karyawanModel extends CI_model
{

	public function getAllKaryawan()
	{
		return $this->db->get('karyawan')->result_array();
	}


	public function getKaryawanById($id)
	{
		return $this->db->get_where('karyawan', ["id" => $id])->row_array();
	}


	public function tambahKaryawan()
	{
		$data = [
			'nip'		=> htmlspecialchars($this->input->post('nip', true)),
			'nama'		=> htmlspecialchars($this->input->post('nama', true)),
			'golongan'	=> htmlspecialchars($this->input->post('golongan', true)),
			'gaji'		=> htmlspecialchars($this->input->post('gaji', true)),
			'username'	=> htmlspecialchars($this->input->post('username', true)),
			'password'	=> htmlspecialchars($this->input->post('password', true))
		];


		$this->db->insert('karyawan', $data);
	}


	public function tambahUserKaryawan()
	{
		$data = [
			'nama' 		=> htmlspecialchars($this->input->post('nama', true)),
			'username' 	=> htmlspecialchars($this->input->post('username', true)),
			'password' 	=> htmlspecialchars($this->input->post('password', true)),
			'role' 		=> htmlspecialchars($this->input->post('role', true))
		];

		$this->db->insert('user', $data);
	}

	public function ubahKaryawan()
	{
		$data = [
			'nip'		=> htmlspecialchars($this->input->post('nip', true)),
			'nama'		=> htmlspecialchars($this->input->post('nama', true)),
			'golongan'	=> htmlspecialchars($this->input->post('golongan', true)),
			'gaji'		=> htmlspecialchars($this->input->post('gaji', true)),
			'username'	=> htmlspecialchars($this->input->post('username', true)),
			'password'	=> htmlspecialchars($this->input->post('password', true))
		];

		$this->db->where('id',$this->input->post('id'));
		$this->db->update('karyawan', $data);
	}

	public function ubahUserKaryawan()
	{
		$data = [
			'nama' 		=> htmlspecialchars($this->input->post('nama', true)),
			'username' 	=> htmlspecialchars($this->input->post('username', true)),
			'password' 	=> htmlspecialchars($this->input->post('password', true)),
			'role' 		=> htmlspecialchars($this->input->post('role', true))
		];

		$this->db->where('id',$this->input->post('id'));
		$this->db->update('user', $data);
	}

	public function hapusKaryawan($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('karyawan');
	}

}
