<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profileadm extends CI_Controller {
	public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }

   public function index()
   {
   		if($this->session->userdata('masuk'))
      {
        if($this->session->userdata('level') == 'root')
            {
                $session_data = $this->session->userdata('masuk');
                $data['username'] = $session_data['username'];
                $data['nama'] = $session_data['nama'];
                $data['foto'] = $session_data['foto'];
                $key= $session_data['username'];

                 //ini adalah property untuk CHATBOX
                //$this -> db -> select('nama,foto')->from('user') ->join('chat','user.username=chat.username')->select('isi,time')-> limit(10,'DESC');
               //$querytable  = $this -> db -> get()->result_array();
              //$data['chat']=$querytable;
                $querychat="SELECT user.nama , user.foto , chat.username , chat.isi , chat.time FROM chat , user WHERE user.username=chat.username ORDER BY chat.id DESC LIMIT 50";
                $query=$this->db->query($querychat)->result_array();
                $data['chat']=$query;
              //END Chatbox
             //ini adalah property untuk TO DO LIST
                $queryjob="SELECT * FROM todolist WHERE todolist.username='$key'";
                $hasil=$this->db->query($queryjob)->result_array();
                $data['todolist']=$hasil;
              //END to do list
            //ini adalah untuk private message
                $querypm="SELECT mahasiswa.nama , mahasiswa.foto , privatemessage.id , privatemessage.pengirim, privatemessage.isi , privatemessage.penerima , privatemessage.time FROM privatemessage , mahasiswa WHERE mahasiswa.nim=privatemessage.pengirim and privatemessage.penerima='$key' ";
                $pm=$this->db->query($querypm)->result_array();
                $data['pm']=$pm;
              //ini adalah batas akhir private message 
            //ini adalah untuk notif dari dosen 
                $querynotifdosen="SELECT dosen.dosen , notifdosen.isi , notifdosen.time FROM dosen, notifdosen WHERE dosen.nip=notifdosen.nidn ";
                $qdn=$this->db->query($querynotifdosen)->result_array();
                $data['notifdosen']=$qdn;
                //End Notif dosen

                $data['hasil']=$this->db->where('user',$key)->get('admin')->row_array();

	              $this->load->view('profileadm',$data);
	            }
              else
              {
                echo '<script>alert("Bukan Level Anda ,STOP");</script>';
                redirect('page=auth','refresh');
              }
      }
      else
      {
        echo '<script>alert("Silahkan Login untuk melanjutkan");</script>';
        redirect('page=auth','refresh');
      }
    }

   public function submittodolist()
	{
		if($this->session->userdata('masuk'))
	{
      $session_data = $this->session->userdata('masuk');
      $data['username'] = $session_data['username'];
      $data['isi']=$this->input->post('kontentodolist');
      $this->db->insert('todolist',$data);
      redirect('profileadm','refresh');
  }
  else
  {
    echo '<script>alert("LOGIN Dulu kakak!");</script>';
    redirect('page=auth','refresh');
  }
	}

	public function deletetodolist()
	{
		$key=$this->uri->segment(3);
		$this->db->where('id',$key);
		$this->db->delete('todolist');
		redirect('page=profileadm','refresh');

	}
	 public function submitprivatemessage()
  {
    if($this->session->userdata('masuk'))
  {
      $session_data = $this->session->userdata('masuk');
      $data['pengirim'] = $session_data['username'];
      
      $data['penerima'] = $this->input->post('username');
      $data['isi'] = $this->input->post('isi');
      if($this->db->insert('privatemessage',$data))
      {
       echo '<script>alert("Private Message Terikirm");</script>';
       redirect('page=profileadm','refresh');
      }
      else
        {
          echo '<script>alert("FAILED!!");</script>';
       redirect('page=profileadm','refresh');
        }

  }

  }

  public function submitchat()
	{
		if($this->session->userdata('masuk'))
	{
      $session_data = $this->session->userdata('masuk');
      $data['username'] = $session_data['username'];
		$data['isi']=$this->input->post('kontenchat');
		$this->db->insert('chat',$data);
		redirect('page=profileadm','refresh');
	}
	}

	public function editprofile()
	{
		if($this->session->userdata('masuk'))
	{
      $session_data = $this->session->userdata('masuk');
      $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
      $key= $session_data['username'];

      //ini adalah PROPERTY SESSION Termasuk foto nama yg aktif DLL
        $this->db->where('user',$key);
    	$result=$this->db->get('admin')->row_array();
    	$data['hasil']=$result;
    	//END PROPERTY
    	$this->load->view('design/header',$data);
    	$this->load->view('profile/editable_adm',$data);
    	$this->load->view('design/footer');
	}
   else
  {
    echo '<script>alert("LOGIN Dulu kakak!");</script>';
    redirect('page=auth','refresh');
  }
}
public function simpandata()
  {
    if($this->session->userdata('masuk'))
  {
      $session_data = $this->session->userdata('masuk');
      $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
      $key= $session_data['username'];

      $config['upload_path'] = './assets/alumni/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '5000';
      $config['max_width']  = '2368';
      $config['max_height']  = '4208';
 
     $this->load->library('upload', $config);
     $this->upload->do_upload();
     $f=$this->upload->data();

      $update['pekerjaan']=$this->input->post('pekerjaan');
      $update['jabatan']=$this->input->post('jabatan');
      $update['status']=$this->input->post('status');
      $update['domisili']=$this->input->post('domisili');
      $update['bbm']=$this->input->post('bbm');
      $update['no_hp']=$this->input->post('no_hp');
     
      
     if($f['orig_name'] == null)
     {
     $foto['foto']=$this->input->post('foto');
     $update['foto']=$this->input->post('foto');
     }
     else
     {
     $foto['foto']=$f['orig_name'];
     $update['foto']=$f['orig_name'];
     }

      $this->db->where('user',$key);
      $this->db->update('admin',$update);
      $this->db->where('username',$key);
      $this->db->update('user',$foto);
      ob_start();
      $this->session->sess_destroy();
      echo '<script>alert("Data Telah di Update Silahkan Login ulang! ");</script>';
      redirect('page=home','refresh');
      ob_end_flush();
   
  }
  else
  {
    echo '<script>alert("LOGIN Dulu kakak!");</script>';
    redirect('page=auth','refresh');
  }

  }

}