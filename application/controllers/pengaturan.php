<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengaturan extends CI_Controller {
	public function __construct() {
        parent::__construct();
       $this->load->model('general');
       $this->load->library(array('encrypt','form_validation'));
       $this->load->helper('form','file');
        $this->load->database();
    }

    public function user_set_login()
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
      	            $data['hasil']=$this->db->get('user')->result_array();
    	              $this->load->view('design/header',$data);
    	              $this->load->view('js/jsdatatable');
    	              $this->load->view('pengaturan/pengaturan_user',$data);
    	              $this->load->view('design/footer',$data);
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

    public function evaluator_lowongan()
    {
      if($this->session->userdata('masuk'))
  {
    if($this->session->userdata('level') == 'root'){
      $session_data = $this->session->userdata('masuk');
      $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
      $key= $session_data['username'];
      $data['loker']=$this->db->get('lowongan')->result_array();
      $this->load->view('design/header',$data);
      $this->load->view('js/jsdatatable');
      $this->load->view('pengaturan/evaluator_lowongan',$data);
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

    public function aktifkan_lowongan()
    {
       if($this->session->userdata('masuk'))
          {
              if($this->session->userdata('level') == 'root')
                  {
                      $id=$this->encrypt->decode_url($_GET['id']);
                      $data['status']=1;
                      $this->db->where('id',$id);
                      $this->db->update('lowongan',$data);
                      redirect('pengaturan/evaluator_lowongan');
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

    public function hapus_lowongan()
    {
      if($this->session->userdata('masuk'))
        {
            if($this->session->userdata('level') == 'root')
              {
                $id=$this->encrypt->decode_url($_GET['id']);
                $this->db->where('id',$id);
                $this->db->delete('lowongan',$data);
                redirect('pengaturan/evaluator_lowongan');
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

    public function lihat_lowongan()
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

              $id=$this->encrypt->decode_url($_GET['id']);
              $this->db->where('id',$id);
              $data['lowongan']=$this->db->get('lowongan')->row_array();
     
              $this->load->view('design/header',$data);
              $this->load->view('pengaturan/lihat_lowongan',$data);
              $this->load->view('design/footer',$data);
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

    public function misc_setting()
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

              $setup=1;
              $data['hasil']=$this->db->query("SELECT * FROM pengaturan WHERE id='$setup'")->row_array();
              //echo "<pre>";
              //print_r($data);
              //echo "</pre>";
              $this->load->view('design/header',$data);
              $this->load->view('pengaturan/misc_setting',$data);
              $this->load->view('design/footer',$data);
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

    public function misc_simpan()
    { 

      $id               =$this->input->post('id');
      $up['telepon']    =$this->input->post('telepon');
      $up['email']      =$this->input->post('email');
      $up['fb']   =$this->input->post('fb');
      $up['twitter']    =$this->input->post('twitter');
      $up['alamat']     =$this->input->post('alamat');
      $up['no_hp']      =$this->input->post('no_hp');
      $up['ket'] =$this->input->post('ket');
      $up['dev']  =$this->input->post('dev');

      if($this->db->where('id',$id)->update('pengaturan',$up))
      {
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Data Berhasil Disimpan</div>');
        redirect('page=pengaturan&act=misc_setting');
      }else
      {
        $this->session->set_flashdata('sukses', '<div class="alert alert-danger">Data GAGAL Disimpan!</div>');
        redirect('page=pengaturan&act=misc_setting');
      }


    }

    public function modif_tulisan()
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

              
              $data['hasil']=$this->db->query("SELECT * FROM text_info WHERE id=1 ")->row();
              //echo "<pre>";
              //print_r($data);
              //echo "</pre>";
              $this->load->view('design/header',$data);
              $this->load->view('pengaturan/modif_tulisan',$data);
              $this->load->view('design/footer',$data);
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

    public function simpan_modif_tulisan()
    {
      $tentang_usm_career=$this->input->post('tentang_usm_career');
      $visi=$this->input->post('visi');
      $misi=$this->input->post('misi');
      $tujuan_manfaat=$this->input->post('tujuan_manfaat');
      $tentang_tracer=$this->input->post('tentang_tracer');
      $disclaimer=$this->input->post('disclaimer');

      $data=array(
          'tentang_usm_career'=>$tentang_usm_career,
          'visi'=>$visi,
          'misi'=>$misi,
          'tujuan_manfaat'=>$tujuan_manfaat,
          'tentang_tracer'=>$tentang_tracer,
          'disclaimer'=>$disclaimer
        );
      if($this->db->insert('text_info',$data) == TRUE)
      {
        $this->session->set_flashdata('sukses','<div class="alert alert-success">Update Berhasil Dimasukan</div>');
        redirect('page=pengaturan&act=modif_tulisan');
      }
    else
    {
      $this->session->set_flashdata('sukses','<div class="alert alert-danger">Update Gagal Dimasukan</div>');
        redirect('page=pengaturan&act=modif_tulisan');
    }
  }

  public function ubah_password_mhs()
  {
    if($this->session->userdata('masuk'))
    {
        if($this->session->userdata('level') == 2)
        {
          $session_data = $this->session->userdata('masuk');
              $data['username'] = $session_data['username'];
              $data['nama'] = $session_data['nama'];
              $data['foto'] = $session_data['foto'];
              $key= $session_data['username'];

              $data['username']=$this->db->query("SELECT username ,password FROM user WHERE username='$key'")->row_array();

          $this->load->view('design/header',$data);
          $this->load->view('pengaturan/ubah_password_mhs',$data);
          $this->load->view('design/footer',$data);
        }
        else
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
  public function simpan_password_mhs()
  {
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $msg_error = array(
                'username'   => form_error('username'),
                'password'      => form_error('password')
            );

            $has_error = array(
                'username'   => 'has-error',
                'password'      => 'has-error'
            );

            $this->session->set_flashdata('form_error', $msg_error);
            $this->session->set_flashdata('has_error', $has_error);
            redirect('pengaturan/ubah_password_mhs');
        } else {

          $update=array(
            'username'=>$username,
            'password'=>$this->encrypt->encode_url($password),
            );
          if($this->db->where('username',$username)->update('user',$update))
          {
            $this->session->set_flashdata('sukses','<div class="alert alert-success">Perubahan berhasil disimpan , silahkan logout dan login ulang</div>');    
            redirect('pengaturan/ubah_password_mhs');
          }else
          {
            $this->session->set_flashdata('gagal','<div class="alert alert-danger">Perubahan Gagal Disimpan</div>');
            redirect('pengaturan/ubah_password_mhs');
          }

        }
  }

  public function ganti_poster()
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

              $data['poster']=$this->db->get('poster')->result_array();

     
              $this->load->view('design/header',$data);
              $this->load->view('pengaturan/ganti_poster',$data);
              $this->load->view('design/footer',$data);
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

  public function simpan_poster()
  {
     //konfigurasi foto 
    $config['upload_path'] = './assets/home/assets/img/slideshow/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '5000';
    $config['max_width']  = '2368';
    $config['max_height']  = '4208';
   
 
    $this->load->library('upload', $config);

    $this->upload->do_upload();
    $f = $this->upload->data();
    
    //end konfigurasi foto 
  $id   =$this->input->post('id');
  $judul   =$this->input->post('judul');

  $data=array(
    'judul'    =>$judul,
    'foto'    =>$f['orig_name'],
    );
  $this->db->where('id',$id);
  if($this->db->update('poster',$data) == TRUE)
  {

    $this->session->set_flashdata('upload','<div class="alert alert-success">Data Berhasil di Update</div>');
    redirect('page=pengaturan&act=ganti_poster');
  }else
  {
    $this->session->set_flashdata('upload','<div class="alert alert-danger">Data Gagal di Update</div>');
    redirect('page=pengaturan&act=ganti_poster');
  }

  
  }
}