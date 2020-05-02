<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slip extends CI_Controller {

	public function __construct() {
		parent::__construct();

	}


	public function index()
	{
		$data['judul'] 		= 'Home';
		$data['user']  		= $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array();
		$data['karyawan']	= $this->karyawanModel->getAllKaryawan();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar',$data);
		$this->load->view('slip/index',$data);
		$this->load->view('template/footer');
	}

	public function insert()
	{
		$data['judul'] 		= 'Home';
		$data['user']  		= $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array();
		$data['karyawan']	= $this->karyawanModel->getAllKaryawan();

		$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('gaji', 'Gaji', 'trim|required');
		$this->form_validation->set_rules('bagian', 'Bagian', 'trim|required');
		$this->form_validation->set_rules('golongan', 'Golongan', 'trim|required');
		$this->form_validation->set_rules('uang', 'Uang', 'trim|required');
		$this->form_validation->set_rules('iuran', 'Iuran', 'trim|required');
		$this->form_validation->set_rules('simpan', 'Simpan', 'trim|required');
		$this->form_validation->set_rules('darma', 'Darma', 'trim|required');
		$this->form_validation->set_rules('asuransi', 'Asuransi', 'trim|required');
		$this->form_validation->set_rules('bank', 'Bank', 'trim|required');
		$this->form_validation->set_rules('kpn', 'Kpn', 'trim|required');
		$this->form_validation->set_rules('seluruh', 'Seluruh', 'trim|required');
		$this->form_validation->set_rules('digital', 'Digital', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar');
			$this->load->view('template/topbar',$data);
			$this->load->view('slip/index',$data);
			$this->load->view('template/footer');
		} 
		else 
		{
			echo "berhasil";
			die;
			// $this->karyawanModel->tambahKaryawan();
			// $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Have ben deleted! </div>');
			// redirect('Slip');
		}
		
	}
	
	public function delete($no)
	{
		$this->karyawanModel->hapusKaryawan($no);
		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Have ben deleted! </div>');
		redirect('Slip');
	}

	

}
