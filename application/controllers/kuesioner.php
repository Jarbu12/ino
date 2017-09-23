<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kuesioner extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        
        $this->load->helper(array('form', 'url'));
        $this->load->model('modelkuesioner');
    }
 

    public function index()
    {
         if($this->session->userdata('masuk'))
    {
      $session_data = $this->session->userdata('masuk');
      $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
    	$this->load->view('design/header',$data);
    	$this->load->view('kuesioner/agreement');
    	$this->load->view('design/footer');
    }
    }

    public function start()
    {	
        if($this->session->userdata('masuk'))
    {
      $session_data = $this->session->userdata('masuk');
     // $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
      $key=$session_data['username'];
    	$agreement=$this->input->post('agreement');
    	$data['kuesioner']=$this->input->post('active');
      
    	//print_r($this->input->post('active'));
    	if($agreement == '1')
    	{
    		$this->db->where('nim',$key);
    		$this->db->update('mahasiswa',$data);
       redirect('https://docs.google.com/forms/d/11Hgc9A7ApHiz06te7OHAsVAN_f4pFrdr0aGvhmsBYvo/viewform?usp=send_form');
    	}
    	}
    }

    public function kuesioner_field()
    {
      if($this->session->userdata('masuk'))
    {
      $session_data = $this->session->userdata('masuk');
     // $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
      $key=$session_data['username'];

      $this->load->view('design/header',$data);
      $this->load->view('kuesioner/form_kuesioner',$data);
      $this->load->view('design/footer',$data);
    }
  }

  public function simpan_kuesioner()
  {
    if($this->session->userdata('masuk'))
    {
      $session_data = $this->session->userdata('masuk');
     // $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
      $key=$session_data['username'];

      $id_kues=$this->input->post('id');
      $kuesioner['nim']=str_replace(".","",$this->input->post('nim'));
      $kuesioner['nama']=$this->input->post('nama');
      $kuesioner['programstudi']=$this->input->post('programstudi');
      $kuesioner['nomortelepon']=$this->input->post('nomortelepon');
      $kuesioner['email']=$this->input->post('email');
      $kuesioner['F3']=$this->input->post('F3');
      $kuesioner['F4']=$this->input->post('F4');
      $kuesioner['F5']=$this->input->post('F5');
      $kuesioner['F6']=$this->input->post('F6');
      $kuesioner['F7']=$this->input->post('F7');
      $kuesioner['F8']=$this->input->post('F8');
      $kuesioner['F9']=$this->input->post('F9');
      $kuesioner['F10']=$this->input->post('F10');
      $kuesioner['F11']=$this->input->post('F11');
      $kuesioner['F12']=$this->input->post('F12');
      $kuesioner['F13']=$this->input->post('F13');
      $kuesioner['F14']=$this->input->post('F14');
      $kuesioner['F15']=$this->input->post('F15');
      $kuesioner['F16']=$this->input->post('F16');
      $kuesioner['A1']=$this->input->post('A1');
      $kuesioner['A2']=$this->input->post('A2');
      $kuesioner['A3']=$this->input->post('A3');
      $kuesioner['A4']=$this->input->post('A4');
      $kuesioner['A5']=$this->input->post('A5');
      $kuesioner['A6']=$this->input->post('A6');
      $kuesioner['A7']=$this->input->post('A7');
      $kuesioner['A8']=$this->input->post('A8');
      $kuesioner['A9']=$this->input->post('A9');
      $kuesioner['A10']=$this->input->post('A10');
      $kuesioner['A11']=$this->input->post('A11');
      $kuesioner['A12']=$this->input->post('A12');
      $kuesioner['A13']=$this->input->post('A13');
      $kuesioner['A14']=$this->input->post('A14');
      $kuesioner['A15']=$this->input->post('A15');
      $kuesioner['A16']=$this->input->post('A16');
      $kuesioner['A17']=$this->input->post('A17');
      $kuesioner['A18']=$this->input->post('A18');
      $kuesioner['A19']=$this->input->post('A19');
      $kuesioner['A20']=$this->input->post('A20');
      $kuesioner['A21']=$this->input->post('A21');
      $kuesioner['A22']=$this->input->post('A22');
      $kuesioner['A23']=$this->input->post('A23');
      $kuesioner['A24']=$this->input->post('A24');
      $kuesioner['A25']=$this->input->post('A25');
      $kuesioner['A26']=$this->input->post('A26');
      $kuesioner['A27']=$this->input->post('A27');
      $kuesioner['B1']=$this->input->post('B1');
      $kuesioner['B2']=$this->input->post('B2');
      $kuesioner['B3']=$this->input->post('B3');
      $kuesioner['B4']=$this->input->post('B4');
      $kuesioner['B5']=$this->input->post('B5');
      $kuesioner['B6']=$this->input->post('B6');
      $kuesioner['B7']=$this->input->post('B7');
      $kuesioner['B8']=$this->input->post('B8');
      $kuesioner['B9']=$this->input->post('B9');
      $kuesioner['B10']=$this->input->post('B10');
      $kuesioner['B11']=$this->input->post('B11');
      $kuesioner['B12']=$this->input->post('B12');
      $kuesioner['B13']=$this->input->post('B13');
      $kuesioner['B14']=$this->input->post('B14');
      $kuesioner['B15']=$this->input->post('B15');
      $kuesioner['B16']=$this->input->post('B16');
      $kuesioner['B17']=$this->input->post('B17');
      $kuesioner['B18']=$this->input->post('B18');
      $kuesioner['B19']=$this->input->post('B19');
      $kuesioner['B20']=$this->input->post('B20');
      $kuesioner['B21']=$this->input->post('B21');
      $kuesioner['B22']=$this->input->post('B22');
      $kuesioner['B23']=$this->input->post('B23');
      $kuesioner['B24']=$this->input->post('B24');
      $kuesioner['B25']=$this->input->post('B25');
      $kuesioner['B26']=$this->input->post('B26');
      $kuesioner['B27']=$this->input->post('B27');

      $this->db->where('id',$id_kues);
      $query=$this->db->get('kuesioner');
      if($query->num_rows() >0 )
      {
        $this->db->where('id',$id_kues);
        $this->db->update('kuesioner',$kuesioner);
        echo '<script>alert("Berhasil Di UPDATE!");</script>';
        if($this->session->userdata('level') == 2){
        redirect('page=profile','refresh');
        }else if($this->session->userdata('level') == root)
        {
          redirect('page=profileadm','refresh');
        }
      }else{
        $this->db->insert('kuesioner',$kuesioner);
        echo '<script>alert("Berhasil Disimpan!");</script>';
        if($this->session->userdata('level') == 2){
        redirect('page=profile','refresh');
        }else if($this->session->userdata('level') == root)
        {
          redirect('page=profileadm','refresh');
        }
     }



    }
  }

  public function edit_kuesioner()
  {
    if($this->session->userdata('masuk'))
    {
      $session_data = $this->session->userdata('masuk');
     // $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
      $key=$session_data['username'];

      $this->db->where('nim',$key);
      $query=$this->db->get('kuesioner');
      if($query->num_rows == 0)
      {
        redirect('page=kuesioner&act=kuesioner_field');
      }else if($query->num_rows == 1)
      {

    $this->db->where('nim',$key);
    $data['kuesioner']=$this->db->get('kuesioner')->row_array();
    //echo "<pre>";
    //print_r($data);
    //echo "</pre>";
     $this->load->view('design/header',$data);
     $this->load->view('kuesioner/edit_kuesioner',$data);
     $this->load->view('design/footer',$data);
        }
    }

  }

}
