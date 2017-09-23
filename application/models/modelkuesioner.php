<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelkuesioner extends CI_Controller {
	
	public function getdata()
	{
		$query=$this->db->get('mahasiswa');
		return $query->result_array();
	}	
}
 