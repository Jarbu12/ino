<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('datatables');
        $this->load->library('table');
        $this->load->database();
    }

	public function index()
	{  
    if($this->session->userdata('masuk'))
      {
        if($this->session->userdata('level') == 2){
      $session_data = $this->session->userdata('masuk');
      $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
      $key=$session_data['username'];
        $this->db->where('nim',$key);
        $query=$this->db->get('mahasiswa');
        if($query->num_rows() >0)
        {
            foreach ($query->result() as $row) {
                if($row->kuesioner == 1)
                {
                    //set table id in table open tag
                $tmpl = array ( 'table_open'  => '<table id="big_table"  cellpadding="2" cellspacing="1" class="table  table-striped ">' );
                $this->table->set_template($tmpl); 
        
                $this->table->set_heading('Nama','Jurusan','Pekerjaan','Jabatan','Status','Action');

                $this->load->view('design/header',$data);
                $this->load->view('js/jsajaxdatatable');
                $this->load->view('mahasiswa/daftaralumni');
                $this->load->view('design/footer');
                }
                else
                {
                          echo '<script>alert("Anda belum mengisi Kusioner!");</script>';
                          redirect('page=kuesioner&act=kuesioner_field','refresh');
                }
            }
        }else{
                    echo '<script>alert("Mahasiswa Tidak ada");</script>';
                    redirect('page=auth','refresh');
        }
		}
    else{
              echo '<script>alert("Bukan Level Anda ,STOP");</script>';
              redirect('page=auth','refresh');
    }
  }
    else
    {
      echo '<script>alert("Login Dulu mas");</script>';
      redirect('page=auth');
    }
	}

	 function datatable()
    {   
        $this->datatables->select('id,nim,nama,jurusan,pekerjaan,jabatan,status')
        ->unset_column('nim')
        ->unset_column('id')
        ->from('mahasiswa');
          $this->datatables->add_column("Action",  "<a href='mahasiswa/view/$1' class='tooltip-error' title='Lihat Mahasiswa'><i class='icon-eye-open bigger-120'></i></a>", "id");
           
        
        
        echo $this->datatables->generate();
    }

    public function view()
    {
       if($this->session->userdata('masuk'))
      {
        if($this->session->userdata('level') == 2){
              $session_data = $this->session->userdata('masuk');
              $data['username'] = $session_data['username'];
              $data['nama'] = $session_data['nama'];
              $data['foto'] = $session_data['foto'];
    	        $key=$this->uri->segment(3);
    	        $this->db->where('id',$key);
    	        $result=$this->db->get('mahasiswa')->row_array();
    	        $data['hasil']=$result;

    	        $this->load->view('design/header',$data);
    	        $this->load->view('mahasiswa/viewalumni');
    	        $this->load->view('design/footer');
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
       redirect('page=profile','refresh');
      }
      else
        {
          echo '<script>alert("FAILED!!");</script>';
       redirect('page=profile','refresh');
        }

  }

  }

  public function json_mahasiswa() {
        if (isset($_GET['term'])) {
            $sql = $this->db->query("SELECT * FROM mahasiswa WHERE nim OR nama LIKE '%" . $_GET['term'] . "%' ORDER BY id DESC")->result();
            echo json_encode($sql);
        } else {
            $sql = $this->db->query("SELECT * FROM mahasiswa ORDER BY id DESC")->result();
            echo json_encode($sql);
        }

    
    }


}
