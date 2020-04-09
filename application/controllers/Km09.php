<?php
use GuzzleHttp\Client;

class Km09 extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul']="Program Kerja Pemeriksaan";
		$data['pw_id']= $pw_id = $this->pw_id();
		$data['pwDetail']= $this->pwDetail($pw_id);
		$data['pwTim']= $this->pwTim($pw_id);

		$this->load->view("template/header", $data);
		$this->load->view("km09/index", $data);
		$this->load->view("template/kop", $data);
		$this->load->view("km09/km9_cetak", $data);
		$this->load->view("template/footer", $data);

	}

	 private function pwTim($pw_id=0) {
      $url= SITE_API.'pwTim?pw_id='.$pw_id;
      // echo $url;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result['data'];

      }

	private function pw_id(){
		if (!empty($this->input->get('pw_id'))) {
			$pw_id = $this->input->get('pw_id');
		} else {
			$pw_id = 0;
		}
		return $pw_id;
	}

	private function pwDetail($pw_id = 0) {
      $url= SITE_API.'pwAll?pw_id='.$pw_id;
      $client = new client();
	//$keyAudit = ;
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);
      
      $result = json_decode($response->getBody()->getContents(), true);
      // print_r($result);
      if ($result) {
      	# code...
      }
      return $result['data'];

      }

	
}

?>