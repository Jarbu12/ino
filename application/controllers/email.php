<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class email extends CI_Controller {
	public function __construct() {
        parent::__construct(); 
        $this->load->library('email');  
    }

    public function send(){
            //load library email
            

            $konten = $this->input->post('konten');
            $mailfrom=$this->input->post('emailfrom');
            $mailto = $this->input->post('emailto');
            $subject = $this->input->post('subject');
            //ini unutuk menunjukan email ini dari siapa 
            
            $this->ci_email->from($mailto);
            //jelas ini email tujuan
            $this->ci_email->to($mailfrom, 'No Reply');
            //ini tentunya subject
            $this->ci_email->subject($subject);     
            //yup ini konten email
            $this->ci_email->message($konten);
 
            if($this->ci_email->send()){
               echo '<script>alert("Email Terkirim!");</script>';
			   redirect('page=auth','refresh');
            }else{
               redirect('page=home');
            }
        }


}