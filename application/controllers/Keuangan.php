<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$data['judul'] = 'Keuangan';
		$data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar2', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('home/index', $data);
		$this->load->view('template/footer');
	}
}
