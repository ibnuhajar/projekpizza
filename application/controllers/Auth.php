<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$this->load->view('auth/header');
		$this->load->view('auth/login');
		$this->load->view('auth/footer');
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/header');
			$this->load->view('auth/login');
			$this->load->view('auth/footer');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->db->get_where('user', ['username' => $username])->row_array();

			// pengecekan user
			if ($user) {
				// pengecekan password
				if ($password == $user['password']) {
					if ($user['role user']) {
						$data = [
							'username' => $user['username']
							// 'roleuser' => $user['roleuser']
						];
						switch ($user['role user']) {
							case ($user['role user'] == 'admin'):
								$this->session->set_userdata($data);
								redirect('Administrator');
								break;
							case ($user['role user'] == 'keuangan'):
								$this->session->set_userdata($data);
								redirect('Keuangan');
								break;
							case ($user['role user'] == 'pegawai'):
								$this->session->set_userdata($data);
								redirect('Pegawai');
								break;
							default:
								$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Wrong Password! </div>');
								redirect('Auth');
								break;
						}
					} else {
						$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Wrong Password! </div>');
						redirect('Auth');
					}
				} else {
					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Wrong Password! </div>');
					redirect('Auth');
				}
			} else {
				$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Wrong Username! </div>');
				redirect('Auth');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">You have ben logged out! </div>');
		redirect('Auth');
	}
}
