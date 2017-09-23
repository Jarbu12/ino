<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

		

	public function __construct() {
        parent::__construct();
        $a=& get_instance();
        $this->load->library('encrypt');
        $this->load->model('front_paging_model');
        $this->load->library('pagination');
         $this->first = 'First'; //Button paging first
        $this->prev = 'Sebelumnya'; //Button paging prev
        $this->next = 'Selanjutnya'; //Button paging next
        $this->last = 'Last'; //Button paging last
       
    }
		public function index()
		{	
			/*
		$jumlah=$this->front_paging_model->jumlah();
 
		$config['base_url'] = base_url().'index.php/home/index/';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 3; 
		$config['first_link'] = $this->first;
        $config['prev_link'] = $this->prev;
        $config['next_link'] = $this->next;
        $config['last_link'] = $this->last;
       
		
		
		$dari = $this->uri->segment('3');
		$data['lowongan'] = $this->front_paging_model->lihat($config['per_page'],$dari);
		$this->pagination->initialize($config); */
			//echo "<pre>";
			//print_r($data);
			//echo "</pre>";
			$data['lowongan']=$this->db->query("SELECT * FROM lowongan WHERE status=1 ORDER BY id DESC LIMIT 3")->result();
			$data['poster']=$this->db->query("SELECT * FROM poster")->result();
			$this->opview('front/header',$data);
			$this->opview('front/konten/firstpage',$data);
			$this->opview('front/footer',$data);
			
		} 

		public function daftar_baru()
		{
			$data['empty']='';
			$this->opview('front/header',$data);
			$this->opview('front/konten/member_baru',$data);
			$this->opview('front/footer',$data);
		}

		public function profile_web()
		{

			$this->opview('front/header');
			$this->opview('front/konten/profile_web');
			$this->opview('front/footer');
		}

		public function usm_karir()
		{
			
			$data['info']=$this->db->query("SELECT tentang_usm_career , visi, misi,tujuan_manfaat FROM text_info WHERE id=1")->row();
			$this->load->view('front/header',$data);
			$this->load->view('front/konten/usm_karir',$data);
			$this->load->view('front/footer',$data);
		}

		public function program_kerja()
		{
			$data="";
			$this->load->view('front/header',$data);
			$this->load->view('front/konten/program_kerja',$data);
			$this->load->view('front/footer',$data);
		}

		public function lowongan_kerja()
		{	
			$jumlah=$this->front_paging_model->jumlah();
 
			$config['base_url'] = base_url().'index.php/home/lowongan_kerja/';
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 3; 
			$config['first_link'] = $this->first;
        	$config['prev_link'] = $this->prev;
        	$config['next_link'] = $this->next;
        	$config['last_link'] = $this->last;
       
		
		
			$dari = $this->uri->segment('3');
			$data['lowongan'] = $this->front_paging_model->lihat($config['per_page'],$dari);
			$this->pagination->initialize($config); 
			$this->load->view('front/header',$data);
			$this->load->view('front/konten/lowongan',$data);
			$this->load->view('front/footer',$data);
		}

		public function tentang_tracer()
		{
			
			$data['info']=$this->db->query("SELECT tentang_tracer FROM text_info WHERE id=1")->row();
			$this->load->view('front/header',$data);
			$this->load->view('front/konten/tentang_tracer',$data);
			$this->load->view('front/footer',$data);
		}

		public function hubungi_kami()
		{
			$this->load->view('front/header');
			$this->load->view('front/konten/hubungi_kami');
			$this->load->view('front/footer');
		}	
		public function alumni_list()
		{
			$this->load->view('front/header');
			$this->load->view('front/konten/alumni_list');
			$this->load->view('front/footer');

		}
		public function alumni_single_search()
		{
			$data['kosong']="";
			
			if(isset($_GET['id']))
			{	
				$nim=$this->encrypt->decode_url($_GET['id']);
				$data['hasil']=$this->db->query("SELECT * FROM mahasiswa WHERE nim='".$nim."'")->row_array();
			}

			$this->load->view('front/header',$data);
			$this->load->view('front/konten/alumni_single_search',$data);
			$this->load->view('front/footer',$data);

		}

		
		public function alumni_singledata_search()
		{
			$nim=$this->input->post('nim');

			if(!empty($nim))
			{
				$query=$this->db->query("SELECT * FROM mahasiswa WHERE nim='$nim'");
				if($query->num_rows() > 0)
				{
					$data_mhs=$query->row();
					$truenim=$data_mhs->nim;
					redirect("page=home&act=alumni_single_search&id=".$this->encrypt->encode_url($truenim));
				}
			}

		} 
		public function alumni_list_view()
		{
			$wisudawan=$this->input->post('wisudawan');
			$fakultas=$this->input->post('fakultas');
			$progdi=$this->input->post('progdi');

			//$this->load->view('front/header',$data);
			//$this->load->view('front/konten/alumni_list_view',$data);
			//$this->load->view('front/footer',$data);

		}
		public function gagal_kirim_email()
		{
			$this->load->view('front/header');
			$this->load->view('front/konten/warning/gagal_kirim_email');
			$this->load->view('front/footer');
				
		}

		function opview($view, $data=null, $return=false)//Modifikasi Passing View
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $return);

		if ($return) return $view_html;
	}

    }