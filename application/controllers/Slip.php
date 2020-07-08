<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slip extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$data['judul'] 		= 'Slip Gaji';
		$data['user']  		= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['karyawan']	= $this->karyawanModel->getAllKaryawan();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1');
		$this->load->view('template/topbar1', $data);
		$this->load->view('slip/index', $data);
		$this->load->view('template/footer');
	}

	public function insert()
	{

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('nip', 'Nip', 'trim|required');
		$this->form_validation->set_rules('gaji', 'Gaji', 'trim|required');
		$this->form_validation->set_rules('role', 'Role', 'trim|required');
		$this->form_validation->set_rules('golongan', 'Golongan', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		// $this->form_validation->set_rules('validate');

		if ($this->form_validation->run() == false) {
			$data['judul'] 		= 'Slip Gaji';
			$data['user']  		= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
			$data['karyawan']	= $this->karyawanModel->getAllKaryawan();

			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar1');
			$this->load->view('template/topbar1', $data);
			$this->load->view('slip/index', $data);
			$this->load->view('template/footer');
		} else {
			$this->karyawanModel->tambahKaryawan();
			$this->karyawanModel->tambahUserKaryawan();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">berhasil di tambahkan</div>');
			redirect('Slip');
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('nip', 'Nip', 'trim|required');
		$this->form_validation->set_rules('gaji', 'Gaji', 'trim|required');
		$this->form_validation->set_rules('role', 'Role', 'trim|required');
		$this->form_validation->set_rules('golongan', 'Golongan', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		// $this->form_validation->set_rules('validate');

		if ($this->form_validation->run() == false) {
			$data['judul'] 		= 'Slip Gaji';
			$data['user']  		= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
			$data['karyawan']	= $this->karyawanModel->getKaryawanById($id);
			// $data['karyawan']	= $this->karyawanModel->getAllKaryawan();

			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar1');
			$this->load->view('template/topbar1', $data);
			$this->load->view('slip/ubah', $data);
			$this->load->view('template/footer');
		} else {
			$this->karyawanModel->ubahKaryawan();
			$this->karyawanModel->ubahUserKaryawan();
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">berhasil di tambahkan</div>');
			redirect('Slip');
		}
	}



	public function delete($id)
	{
		$this->karyawanModel->hapusKaryawan($id);
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Have ben deleted! </div>');
		redirect('Slip');
	}

	public function detail($id)
	{
		$data['judul'] 		= 'Slip Gaji';
		$data['user']  		= $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['karyawan']	= $this->karyawanModel->getKaryawanById($id);
		// $data['karyawan']	= $this->karyawanModel->getAllKaryawan();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar1');
		$this->load->view('template/topbar1', $data);
		$this->load->view('slip/detail', $data);
		$this->load->view('template/footer');
	}

	public function print($id)
	{
		$data['judul'] 		= 'Print Dokument';
		$data['karyawan']	= $this->karyawanModel->getKaryawanById($id);

		$this->load->view('slip/print', $data);

		$paper_size		= 'A6';
		$orientation 	= 'potrait';
		$html 			= $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		ob_clean();
		$this->dompdf->stream("Detail Pegawai.pdf", ['Attachment' => false]);
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Have ben deleted! </div>');
	}
}
