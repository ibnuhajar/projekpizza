<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['judul']='Home';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}

}
