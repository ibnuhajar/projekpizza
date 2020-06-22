 <?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class ManageUser extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
		}


		public function index()
		{
			$data['judul'] 		= 'Administrator';
			$data['user']  		= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
			$data['pegawai']	= $this->manageModel->getAllUser();
			// $data['role'] 		= $this->manageModel->getUserById($id);
			// $data['id'] 	= $this->manageModel->getUserBy($id);
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar1');
			$this->load->view('template/topbar1', $data);
			$this->load->view('manage/index', $data);
			$this->load->view('template/footer');
		}

		public function insert()
		{
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('bagian', 'Bidang', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('repassword', 'Password', 'trim|required');


			if ($this->form_validation->run() == false) {
				$data['judul'] 		= 'Administrator';
				$data['user']  		= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
				$data['pegawai']	= $this->manageModel->getAllUser();

				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar1');
				$this->load->view('template/topbar1', $data);
				$this->load->view('manage/index', $data);
				$this->load->view('template/footer');
			} else {
				$this->manageModel->tambahUser();
				$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">berhasil di tambahkan</div>');
				redirect('ManageUser');
			}
		}

		public function delete($id)
		{
			$this->manageModel->hapusUser($id);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">berhasil di hapus</div>');
			redirect('ManageUser');
		}

		public function update($id)
		{
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('bagian', 'Bidang', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('repassword', 'Password', 'trim|required');


			if ($this->form_validation->run() == false) {
				$data['judul'] 		= 'Administrator';
				$data['user']  		= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
				$data['pegawai'] 		= $this->manageModel->getUserById($id);

				
				// $data['karyawan']	= $this->manageModel->getAllUser();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar1');
				$this->load->view('template/topbar1', $data);
				$this->load->view('manage/ubah', $data);
				$this->load->view('template/footer');
			} else {
				$this->manageModel->ubahUser();
				$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">berhasil di ubah</div>');
				redirect('ManageUser');
			}
		}
	}
 