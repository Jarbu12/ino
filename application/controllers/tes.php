<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tes extends CI_Controller {


	public function __construct() {
        parent::__construct();
        $this->load->library('encrypt');
     
    }

    var $z="3374071204950002";
    var $x=array();
    var $j=0;
    var $k=0;

    public function no_ktp()
    {
    	for($this->i=0;$this->i < strlen($this->z) ; $this->i++)
    	{
    		if($this->j >=4)
    		{
    			if($this->k <4)
    			{
    				$this->x[$this->i]=$this->z[$this->i - 4];
    				$this->k++;
    			}
    			else
    			{
    				$this->x[$this->i]=$this->z[$this->i+4];
    				$this->j=0;
    				$this->k=0;
    			}
    		}
    		else
    		{
    		$this->x[$this->i]=$this->z[$this->i+4];
    		$this->j++;	
    		}
    	}

    	$tes=implode(" ",$this->x);
    	print_r($tes);
    }

	public function index()
	{
		$this->load->view('profile');
	}

	public function karakter()
	{
		$data['root']=$this->encrypt->decode_url('etQfMimKmSs5NWGPwX5Q7U9jJDEhpU0I3-7p9Z4ZeaY');
		$data['user']=$this->encrypt->decode_url('Fw7t9vRVaQSUUqSSOcsih7paWTcl05lwlaf-RQ9Q-O0');
		$data['mhs']=$this->encrypt->decode_url('6waJHYdbOk01jWpfbpGI78Y2r0Ei5mIlowcA4bLE06Y');
		echo "<pre>";
	print_r($data);
	echo "</pre>";
	}

	public function tesfor()
	{
		for($i=0; $i < 100 ; $i++){ 

			echo "<pre>fajar[$i]";
		}
	}
}