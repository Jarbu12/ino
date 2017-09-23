<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
	var $konten;
	 function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('encrypt');
    }   

	public function index()
	{
		$this->load->view('register/register_mahasiswa');
		
	}

	public function get_progdi()
	{
		$fakultas=$this->input->post('fakultas');
		$data=$this->db->where('id_progdi',$fakultas)->get('progdi')->result_array();
		$this->konten .="<option value=''>-- Pilih Salah Satu --</option>";
		foreach ($data as $data ) {
			 $this->konten .="<option value='$data[nama_progdi]'>$data[nama_progdi]</option>\n";
			
		}
		echo $this->konten;
	}

	public function memberbaru()
	{	

		$config['upload_path'] = './assets/alumni/';
		$config['allowed_types'] = 'jpg';
		$config['max_size']	= '5000';
		$config['max_width']  = '2368';
		$config['max_height']  = '4208';
 
		$this->load->library('upload', $config);
		$this->upload->do_upload();

		$f = $this->upload->data();

		$nama=$this->input->post('nama');
		$username=str_replace(".","", $this->input->post('nim'));
		$password=$this->input->post('password');
		$foto=$this->input->post('foto');
		$level=2;


		$data['nim']=$this->input->post('nim');
		$data['nama']=$this->input->post('nama');
		$data['fakultas']=$this->input->post('fakultas');
		$data['jurusan']=$this->input->post('jurusan');
		$data['pekerjaan']=$this->input->post('pekerjaan');
		$data['jabatan']=$this->input->post('jabatan');
		$data['status']=$this->input->post('status');
		$data['jeniskelamin']=$this->input->post('jeniskelamin');
		$data['wisudawan']=$this->input->post('wisudawan');
		$data['domisili']=$this->input->post('domisili');
		$data['no_hp']=$this->input->post('no_hp');
		$data['bbm']=$this->input->post('bbm');
		$data['foto']=$f['orig_name'];
		$data['footnote']=$this->input->post('footnote');

		$user=array(
				'nama'=>$nama,
				'username'=>$username,
				'password'=>$this->encrypt->encode_url($password),
				'foto'=>$f['orig_name'],
				'level'=>$level,
			);

		

		
			$this->db->where('username',$username);
			$query=$this->db->get('user');
			 if($query->num_rows()> 0)
    		{
    			$this->session->set_flashdata('gagal','<div class="alert alert-danger">Username Ini Telah Terdaftar! , Mungkin Teman anda jahil atau anda yang lupa password silahkan hubungi UCAC </div>');
    	    // echo '<script>alert("Username Ini Telah Terdaftar! , Mungkin Teman anda jahil atau anda yang lupa password silahkan hubungi UCAC  ");</script>';
			 redirect('page=register','refresh');
    		//$this->db->where('nim',$username);
    		//$this->db->update('mahasiswa',$data);
    		//$this->db->where('username',$username);
		    //$this->db->update('user',$user);

    		}
    		else
    		{
			$this->db->insert('mahasiswa',$data);
		    $this->db->insert('user',$user);
		    }
			 echo '<script>alert("Data Telah Berhasil Dimasukan! , Terima kasih untuk partisipasinya silahkan login untuk melanjutkan  ");</script>';
			 redirect('page=home','refresh');

		
		//KOSONG
	}

	public function memberbaru_perusahaan()
	{
		$this->load->view('register/register_perusahaan');

	}

	public function simpan_member_perusahaan()
	{	
		$config['upload_path'] = './assets/alumni/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '5000';
		$config['max_width']  = '2368';
		$config['max_height']  = '4208';
 
		$this->load->library('upload', $config);
		$this->upload->do_upload();

		$f = $this->upload->data();

		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$nama=$this->input->post('nama');
		$jenis=$this->input->post('jenis');
		$alamat=$this->input->post('alamat');
		$email=$this->input->post('email');
		$no_hp=$this->input->post('no_hp');
		$npwp=$this->input->post('npwp');
		$footnote=$this->input->post('footnote');
		$lv=3;

		$data=array(
			'username'=>$username,
			'nama'=>$nama,
			'jenis'=>$jenis,
			'alamat'=>$alamat,
			'email'=>$email,
			'no_hp'=>$no_hp,
			'npwp'=>$npwp,
			'foto'=>$f['orig_name'],
			'footnote'=>$footnote,
			);

		$user=array(
			'nama'	=>$nama,
			'username'=>$username,
			'password'=>$this->encrypt->encode_url($password),
			'level'=>$lv,
			'foto'=>$f['orig_name'],
			);

		$this->db->where('username',$username);
		$query=$this->db->get('perusahaan');
		if($query->num_rows() > 0 )
		{
			$this->db->where('username',$username);
			$this->db->update('perusahaan',$data);
			$this->db->where('username',$username);
			$this->db->update('user',$user);
		}else
		{
			$this->db->insert('perusahaan',$data);
			$this->db->insert('user',$user);
		}
		echo '<script>alert("Data Telah Berhasil Dimasukan! , Terima kasih untuk partisipasinya silahkan login untuk melanjutkan  ");</script>';
			 redirect('page=home','refresh');

	}
}
