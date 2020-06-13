<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class manageModel extends CI_model
{
	public function getAllUser()
	{
		return $this->db->get('managemen_user')->result_array();
	}

	public function setUser()
	{
		$data = [

			
		];

	}

}





