<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct() {
		parent::__construct();

	}


	public function index()
	{
		$data['judul'] = 'Validasi gaji' ;
		$data['user']  = $this->db->get_where('user', ['username'=> $this->session->userdata('username')])->row_array();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar3',$data);
		$this->load->view('template/topbar3',$data);
		$this->load->view('pegawai/index',$data);
		$this->load->view('template/footer');
	}


}
