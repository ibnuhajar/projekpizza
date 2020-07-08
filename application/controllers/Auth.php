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

			// mengambil data kedalam database
			$user = $this->db->get_where('user', ['username' => $username])->row_array();

			// pengecekan user
			if ($user) {
				// pengecekan password
				if ($password == $user['password']) {
					// pengecekan role user
					if ($user['role']) {
						$data = [
							'username' => $user['username']
						];
						switch ($user['role']) {
							case ($user['role'] == 'Admin'):
								$this->session->set_userdata($data);
								redirect('Administrator');
								break;
							case ($user['role'] == 'Keuangan'):
								$this->session->set_userdata($data);
								redirect('Keuangan');
								break;
							case ($user['role'] == 'Pegawai'):
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

	public function detail($id)
	{
		$data['judul'] 		= 'Slip Gaji';
		$data['user']  		= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$user = $this->db->get_where('user', ['id' => $id])->row_array();
		// var_dump($user);
		switch ($user['role']) {
			case ($user['role'] === 'Admin'):
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar1');
				$this->load->view('template/topbar1', $data);
				$this->load->view('auth/detail', $data);
				$this->load->view('template/footer');
				break;
			case ($user['role'] === 'Keuangan'):
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar2');
				$this->load->view('template/topbar2', $data);
				$this->load->view('auth/detail', $data);
				$this->load->view('template/footer');
				break;
			default:
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar3');
				$this->load->view('template/topbar3', $data);
				$this->load->view('auth/detail', $data);
				$this->load->view('template/footer');
				break;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">You have ben logged out! </div>');
		redirect('Auth');
	}
}
