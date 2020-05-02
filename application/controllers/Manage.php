<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function __construct() {
		parent::__construct();

	}


	public function index()
	{
		$data['judul'] 		= 'Home';
		$data['user']  		= $this->db->get_where('user', ['username'=> $this->session->userdata('username')])->row_array();
		$data['karyawan']	= $this->manageModel->getAllUser();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar',$data);
		$this->load->view('manage/index',$data);
		$this->load->view('template/footer');
	}

	public function insert()
	{
		
	}
	
	public function delete($id)
	{
		$this->manageModel->hapusUser($id);
		redirect('Slip');
	}

	

}
