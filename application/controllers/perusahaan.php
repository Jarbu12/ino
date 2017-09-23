<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perusahaan extends CI_Controller {
	public function __construct() {
        parent::__construct();
       $this->load->model('general');
        $this->load->database();
    }

    public function index()
    {
    	if($this->session->userdata('masuk') == TRUE){
        if($this->session->userdata('level') == 3 || 2){
      $session_data = $this->session->userdata('masuk');
      $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
      $key= $session_data['username'];
      $this->load->view('design/header',$data);
      $this->load->view('perusahaan/lowongan',$data);
      $this->load->view('design/footer',$data);
    }else
    {
       echo '<script>alert("Bukan Level Anda ,STOP");</script>';
      redirect('page=auth','refresh');
    }

    }else
    {
      echo '<script>alert("Silahkan Login untuk melanjutkan");</script>';
      redirect('page=auth','refresh');
    }
    }

    public function simpan_lowongan()
    {
    if($this->session->userdata('masuk')){
      $session_data = $this->session->userdata('masuk');
      $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
      $key= $session_data['username'];
      //
      	$config['upload_path'] = './assets/lowongan/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '5000';
		$config['max_width']  = '2368';
		$config['max_height']  = '4208';
 
		$this->load->library('upload', $config);
		$this->upload->do_upload();

		$f = $this->upload->data();

      	$kategori=$this->input->post('kategori');
    	$judul=$this->input->post('judul');
    	$header=$this->input->post('header');
    	$isi	=$this->input->post('isi');
    	$outdate=date('Y-m-d',strtotime($this->input->post('outdate')));
    

    	$data=array(
    		'id_perusahaan' =>$session_data['username'],
    		'kategori'		=>$kategori,
    		'judul'			=>$judul,
    		'header'		=>$header,
    		'isi'			=>$isi,
    		'outdate'		=>$outdate,
    		'foto_industri'	=>$session_data['foto'],
    		'foto_lowongan'	=>$f['orig_name']
    		);
    	$this->db->insert('lowongan',$data);
    	echo '<script>alert("Data Berhasil Dimasukan!");</script>';
    	redirect('page=perusahaan','refresh');
    	
    
		}
    else
    {
      echo '<script>alert("Silahkan Login untuk melanjutkan");</script>';
      redirect('page=auth','refresh');
    }
	}

	public function tampil_lowongan()
	{
		if($this->session->userdata('masuk') == TRUE){
       if($this->session->userdata('level') == 3 || 2){
      $session_data = $this->session->userdata('masuk');
      $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
      $key= $session_data['username'];
      $data['poster']=$this->db->query("SELECT * FROM lowongan WHERE id_perusahaan='$key'")->result_array();
      $this->load->view('design/header',$data);
      $this->load->view('perusahaan/tampil_lowongan',$data);
      $this->load->view('design/footer',$data);
    }else
    {
       echo '<script>alert("Bukan Level Anda ,STOP");</script>';
      redirect('page=auth','refresh');
    }

    }else
    {
    	 echo '<script>alert("Silahkan Login untuk melanjutkan");</script>';
      redirect('page=auth','refresh');
    }
	}

	public function hapus_lowongan()
	{
		$id=$_GET['id'];
		$this->db->where('id',$id);
		$this->db->delete('lowongan');
		redirect('page=perusahaan&act=tampil_lowongan');
	}
}
