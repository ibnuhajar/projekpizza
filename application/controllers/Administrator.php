<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct() {
		parent::__construct();

	}


	public function index()
	{
		$data['judul'] = 'Administrator' ;
		$data['user']  = $this->db->get_where('user', ['username'=> $this->session->userdata('username')])->row_array();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar1',$data);
		$this->load->view('template/topbar1',$data);
		$this->load->view('administrator/index',$data);
		$this->load->view('template/footer');
	}

	public function detail()
	{
		$data['judul'] = 'Administrator' ;
		$data['user']  = $this->db->get_where('user', ['username'=> $this->session->userdata('username')])->row_array();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar1',$data);
		$this->load->view('template/topbar1',$data);
		$this->load->view('administrator/index',$data);
		$this->load->view('template/footer');
	}
}
