<?php

class front_paging_model extends CI_Model{

function lihat($sampai,$dari){
		//Paging bisa
		$this->db->limit($sampai,$dari);
		//return $query=$this->db->query('SELECT * FROM tbl_semuabaju')->get()->result_array();
		//return $query = $this->db->select('*')->from('tbl_semuabaju')->get()->result_array();
		return $query = $this->db->select('*')->from('lowongan')->where('status','1')->get()->result();
		
	}
		


	function jumlah(){
		return $this->db->get('lowongan')->num_rows();
	}

}
