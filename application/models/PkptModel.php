<?php

use GuzzleHttp\Client;


class PkptModel extends CI_Model {

	private $client;

    public function pkptAll($tahun) {
      $url= SITE_API.'pkptAll?tahun='.$tahun;
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

    public function pkptDetail($pkpt_id) {
      $url= SITE_API.'pkptDetail?pkpt_id='.$pkpt_id;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // print_r($result);
      if ($result) {
      	# code...
      }
      return $result['data'];

      }

    public function refAll($tabel) {
      $url= SITE_API.'refAll?tabel='.$tabel;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // print_r($result);
      if ($result) {
      	# code...
      }
      return $result['data'];

      }

    public function pkptTim($pkpt_id=0, $kt_tim=0) {
      $url= SITE_API.'pkptTim?pkpt_id='.$pkpt_id.'&kt_tim='.$kt_tim;
      // echo $url;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result['data'];

      }


    public function getRef() {
      $url= SITE_API.'pkptTim?pkpt_id='.$pkpt_id;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      return $result['data'];

      }

    public function proses(){
		$datainput['pkpt_id']=$this->input->post('pkpt_id',true);

		$datainput['pkpt_objek']=$this->input->post('pkpt_objek',true);
		$datainput['penugasan_kd']=$this->input->post('penugasan_kd',true);
		$datainput['wil_kd']=$this->input->post('wil_kd',true);
		$datainput['rmp']=$this->input->post('rmp',true);
		$datainput['rpl']=$this->input->post('rpl',true);

		if ($datainput['pkpt_id']==0) {
			$datainput['pkpt_id'] = "";
		
		$response = $this->_client->request('POST', 'dat_pkpt', [
			'form_params' => $datainput
		]);


		$result = json_decode($response->getBody()->getContents(), true);

		return $result;

		} else {
			// $this->pkptModel->pkptAll();
			# update

		}
		


		print_r($datainput);

	}

   public function tambahPkpt($datainput=0) {

// print_r($datainput);
	  $url= SITE_API.'pkptAll';
      $client = new Client();
      $response = $client->request('POST',$url, [
      		'auth'=>[USER,PASSWORD],
      		'form_params' => $datainput
      ]);

      $result = json_decode($response->getBody()->getContents(), true);
      return $result;


      }	

   public function updatePkpt($datainput=0) {

// print_r($datainput);
	  $url= SITE_API.'pkptAll';
      $client = new Client();
      $response = $client->request('PUT',$url, [
      		'auth'=>[USER,PASSWORD],
      		'form_params' => $datainput
      ]);
      $result = json_decode($response->getBody()->getContents(), true);
      return $result;


      }	

   public function inputTim($datainput=0) {

// print_r($datainput);
     $url= SITE_API.'pkptTim';
      $client = new Client();
      $response = $client->request('POST',$url, [
            'auth'=>[USER,PASSWORD],
            'form_params' => $datainput
      ]);

      $result = json_decode($response->getBody()->getContents(), true);
      return $result;


      }  

   public function updateTim($datainput=0) {

// print_r($datainput);
	  $url= SITE_API.'pkptTim';
      $client = new Client();
      $response = $client->request('PUT',$url, [
      		'auth'=>[USER,PASSWORD],
      		'form_params' => $datainput
      ]);

      $result = json_decode($response->getBody()->getContents(), true);
      return $result;


      }	



}