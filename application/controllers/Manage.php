<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function __construct() {
		parent::__construct();

	}


	public function index()
	{
		$data['judul']='Home';
		$data['karyawan']=$this->karyawanModel->getAllKaryawan();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar',$data);
		$this->load->view('manage/index',$data);
		$this->load->view('template/footer');
	}

	public function update()
	{

	}
	
	public function delete($no)
	{
		$this->karyawanModel->hapusKaryawan($no);
		redirect('Slip');
	}

	

}
