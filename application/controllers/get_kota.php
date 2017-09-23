<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class get_kota extends CI_Controller {
	public function __construct() {
        parent::__construct(); 
          
    }

    public function index()
    {
    	$curl = curl_init();
 
curl_setopt_array($curl, array(
 CURLOPT_URL => "http://rajaongkir.com/api/starter/city",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "GET",
 CURLOPT_HTTPHEADER => array(
 "key:1ef284c2ae9a4cba4bd2efb7e5b14db7"
 ),
));
 
$response = curl_exec($curl);
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
 echo "cURL Error #:" . $err;
} else {
 
 $k = json_decode($response, true);
 echo json_encode($k['rajaongkir']['results']);
 
}
    }

    public function tampil(){
    	$this->load->view('rajaongkir/view');
    }

    public function result(){

$origin = $this->input->post('origin');
$destination = $this->input->post('destination');
$weight = $this->input->post('weight');
$data['weight']=$weight;
$kurir =$this->input->post('kurir');
 
$curl = curl_init();
 
curl_setopt_array($curl, array(
 CURLOPT_URL => "http://rajaongkir.com/api/starter/cost",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight&courier=$kurir",
 CURLOPT_HTTPHEADER => array(
 "key:1ef284c2ae9a4cba4bd2efb7e5b14db7"
 ),
));
 
$response = curl_exec($curl);
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
 echo "cURL Error #:" . $err;
} else {
 
 $data['data'] = json_decode($response, true);
}
 //echo "<pre>";
//print_r($data);
//echo "</pre>";
$this->load->view('rajaongkir/output',$data);
    }

}