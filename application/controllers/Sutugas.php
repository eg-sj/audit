<?php
use GuzzleHttp\Client;

class Sutugas extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul']= "Surat Tugas";
		$data['pw_id']= $pw_id = $this->pw_id();
		$data['pwDetail']= $this->pwDetail($pw_id);
		$data['pwTim']= $this->pwTim($pw_id);


		$this->load->view("template/header", $data);
		$this->load->view("sutugas/index", $data);
		$this->load->view("template/kop", $data);
		$this->load->view("sutugas/st_cetak", $data);
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
	private function updateStugas($datainput=0) {
		      $url= SITE_API.'genCrud';
		      // echo $url;
		      $client = new client();
		      $response = $client->request('PUT',$url, 
		      	['auth' => [USER, PASSWORD],
		      	'form_params' => $datainput
		      ]);

		      $result = json_decode($response->getBody()->getContents(), true);
		      // echo $result;
		      return $result;

		      }

	public function st_update(){
		$datainput['kunci'] = 	json_encode([
				'pw_id' => $this->input->post('pw_id',true)
				// 'jabatan_jenis_id' => $this->input->post('jabatan_jenis_id',true)
				// 'pangkat_nama' => $this->input->post('pangkat_nama',true)
			]);
		$datainput['data'] = 	json_encode([
				'stugas_no' => $this->input->post('stugas_no',true),
				'stugas_tgl' => $this->input->post('stugas_tgl',true),
				'pw_dasar' => $this->input->post('pw_dasar',true),
				'pw_tujuan' => $this->input->post('pw_tujuan',true)
				// 'jabatan_jenis_id' => $this->input->post('jabatan_jenis_id',true)
				// 'pangkat_nama' => $this->input->post('pangkat_nama',true)
			]);
		$datainput['tabel'] = 'dat_pw';
		
		// $datainput = json_encode($datainput);
		print_r($datainput);
		// echo $data;

		$result = $this -> updateStugas($datainput);


		if($result) {
			$pw_id = $this->input->post('pw_id',true);
			header("Location: ".base_url('sutugas')."?pw_id=".$pw_id);
		}

	}
	
}

?>