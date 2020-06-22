<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class manageModel extends CI_model
{
	public function getAllUser()
	{
		return $this->db->get('User')->result_array();
	}

	// public function getUserBy($id)
	// {
	// 	return $this->db->get_where('User', ['id' => $id])->row_array();
	// }

	public function getUserById($id)
    {
      return $this->db->get_where('user' , ["id" => $id ] )->row_array();
    }
 
	public function tambahUser()
	{
		$data = [

			'nama' => $this->input->post('nama', true),
			'username' => $this->input->post('username', true),
			'password' => $this->input->post('password', true),
			'role' => $this->input->post('bagian', true)

		];

		$this->db->insert('user', $data);
	}

	public function hapusUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}

	public function ubahUser()
	{
		$data = [
			'nama' => $this->input->post('nama', true),
			'username' => $this->input->post('username', true),
			'password' => $this->input->post('password', true),
			'role' => $this->input->post('bagian', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data);
	}
}
