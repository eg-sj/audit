<?php
use GuzzleHttp\Client;



class Pengawasan extends CI_Controller
{
	// private $client;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pkptModel');
	}

	private function tahun(){
		$tahun_skrg = date('Y');
		if (!empty($this->input->get('tahun'))) {
			$tahun = $this->input->get('tahun');
		} else {
			$tahun = $tahun_skrg;
		}
		return $tahun;
	}

	private function pkpt_id(){
		if (!empty($this->input->get('pkpt_id'))) {
			$pkpt_id = $this->input->get('pkpt_id');
		} else {
			$pkpt_id = 0;
		}
		return $pkpt_id;
	}

	private function pw_id(){
		if (!empty($this->input->get('pw_id'))) {
			$pw_id = $this->input->get('pw_id');
		} else {
			$pw_id = 0;
		}
		return $pw_id;
	}



	private function pwAll($tahun) {
		$url= SITE_API.'pwAll?tahun='.$tahun;
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


    private function pwTim($pw_id=0, $pkpt_id=0, $kt_tim=0) {
      $url= SITE_API.'pwTim?pw_id='.$pw_id.'&pkpt_id='.$pkpt_id.'&kt_tim='.$kt_tim;
      // echo $url;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result['data'];

      }


    private function refKecamatan() {
      $url= SITE_API.'refAll?tabel=ref_kecamatan';
      // echo $url;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result['data'];

      }



    private function refKegiatan($tahun=0) {

      $url= SITE_API.'refAll?tabel=ref_kecamatan';
      // echo $url;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result['data'];

      }



    private function refPenugasan() {
    	
      $url= SITE_API.'refAll?tabel=ref_penugasan';
      // echo $url;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result['data'];

      }


    private function refWilayah() {
    	
      $url= SITE_API.'refAll?tabel=ref_wilayah';
      // echo $url;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result['data'];

      }


    private function tambahPW($datainput=0) {

	// print_r($datainput);
	  $url= SITE_API.'pwAll';
	      $client = new client();
	      $response = $client->request('POST',$url, [
	      		'auth'=>[USER,PASSWORD],
	      		'form_params' => $datainput
	      ]);
	  // echo $url;
      $result = json_decode($response->getBody()->getContents(), true);
      return $result;


      }	 

    private function updatePW($datainput=0) {

	// print_r($datainput);
	  $url= SITE_API.'pwAll';
	      $client = new client();
	      $response = $client->request('PUT',$url, [
	      		'auth'=>[USER,PASSWORD],
	      		'form_params' => $datainput
	      ]);
	  // echo $url;
      $result = json_decode($response->getBody()->getContents(), true);
      return $result;


      }
      private function deletePW($datainput=0) {

	// print_r($datainput);
	  $url= SITE_API.'pwAll';
	      $client = new client();
	      $response = $client->request('DELETE',$url, [
	      		'auth'=>[USER,PASSWORD],
	      		'form_params' => $datainput
	      ]);
	  // echo $url;
      $result = json_decode($response->getBody()->getContents(), true);
      return $result;


      }	

	public function index(){
		$data['tahun'] = $tahun = $this -> tahun();
		$data['judul'] = "Data Pengawasan";
		$data['pwAll'] = $this -> pwAll($tahun);
		
		// print_r($data);

		$this->load->view("template/header", $data);
		// $this->load->view("template/kop", $data);

		$this->load->view("pengawasan/pw_list", $data);
		$this->load->view("template/footer");

	}


	public function pw_form(){

	$data['tahun'] = $tahun = $this -> tahun();
	$data['pkpt_id'] = $pkpt_id = $this -> pkpt_id();
	$data['pw_id'] = $pw_id = $this -> pw_id();
	$data['refKecamatan'] = $refKecamatan = $this -> refKecamatan();
	$data['refPenugasan'] = $refPenugasan = $this -> refPenugasan();
	$data['refWilayah'] = $refWilayah = $this -> refWilayah();

// print_r($data);


	$this->load->view("template/header", $data);

	if ($pw_id>0) {
		//update
		$data['pwDetail'] = $this->pwDetail($pw_id); 
		// print_r($data['pwDetail']);
		$this->load->view("pengawasan/pw_form", $data);

	} elseif ($pkpt_id>0) {
		//input

		$data['pkptDetail'] = $pkptDetail =$this->pkptModel->pkptDetail($pkpt_id);
		$data['pwDetail'] = array(
				'pw_id' => '',
				'pkpt_id' => $pkptDetail['pkpt_id'],
				'kecamatan_kd' => 0,
				'pw_kegiatan' => '',
				'pw_objek' => $pkptDetail['pkpt_objek'],
				'penugasan_kd' => $pkptDetail['penugasan_kd'],
				'wil_kd' => $pkptDetail['wil_kd'],
				'tahun' => $pkptDetail['tahun'],
				'pw_lokasi' => '',
				'pw_sasaran' => '',
				'pw_tgl_awal' => $pkptDetail['rmp'],
				'pw_tgl_akhir' => '',
				'pw_tgl_laporan' => $pkptDetail['rpl']



			);

		$this->load->view("pengawasan/pw_form", $data);
	} else {
		$data['pkptAll'] = $this->pkptModel->pkptAll($tahun);
		$this->load->view("pengawasan/pw_form2", $data);
	}

	$this->load->view("template/footer");

	}


	public function detail() {
		$data['pw_id'] = $pw_id = $this->pw_id();
		$data['pwDetail'] = $pwDetail = $this -> pwDetail($pw_id);
		



		$this->load->view("template/header", $data);
		// $this->load->view("template/kop", $data);
		

		$this->load->view("pengawasan/pw_detail", $data);
		$this->load->view("template/footer");
	}

			// pw_id
			// kt_tim
			// pkpt_id
			// pw_kegiatan
			// pw_nm_objek
			// pw_lokasi
			// pw_sasaran
			// pw_kartu_no
			// tahun
			// pw_tgl_awal
			// pw_tgl_akhir
			// pw_awal_persiapan
			// pw_akhir_persiapan
			// pw_rencana_pelaksanaan
			// pw_awal_pelaksanaan
			// pw_real_awal_pelaksanaan
			// pw_akhir_pelaksanaan

		public function tambah(){
		$datainput = [
				"pkpt_id" => $this->input->post('pkpt_id',true),
				"kecamatan_kd" => $this->input->post('kecamatan_kd',true),
				"pw_kegiatan" => $this->input->post('pw_kegiatan',true),
				"pw_objek" => $this->input->post('pw_objek',true),
				"penugasan_kd" => $this->input->post('penugasan_kd',true),
				"wil_kd" => $this->input->post('wil_kd',true),
				"tahun" => $this->input->post('tahun',true),
				"pw_lokasi" => $this->input->post('pw_lokasi',true),
				"pw_sasaran" => $this->input->post('pw_sasaran',true),
				// "pw_kartu_no" => $this->input->post('pw_kartu_no',true),
				"pw_tgl_awal" => $this->input->post('pw_tgl_awal',true),
				"pw_tgl_akhir" => $this->input->post('pw_tgl_akhir',true),
				// "pw_awal_persiapan" => $this->input->post('pw_awal_persiapan',true),
				// "pw_akhir_persiapan" => $this->input->post('pw_akhir_persiapan',true),
				// "pw_rencana_pelaksanaan" => $this->input->post('pw_rencana_pelaksanaan',true),
				// "pw_awal_pelaksanaan" => $this->input->post('pw_awal_pelaksanaan',true),
				// "pw_real_awal_pelaksanaan" => $this->input->post('pw_real_awal_pelaksanaan',true),
				"pw_tgl_laporan" => $this->input->post('pw_tgl_laporan',true)
			];

			// $datainput2 = $this->input->post();
 		// if ($datainput=>pkpt_id==0) {
		// 	$datainput=>pkpt_id = "";
		// } 

		 print_r($datainput); echo br();
		 // print_r($datainput2); echo br();


		// $data['pwDetail'] = $pwDetail = $this -> pwDetail($pw_id);
		$result = $data['tambahPW'] = $tambahPW = $this -> tambahPW($datainput);
	
		header("Location: ".base_url('pengawasan')."?tahun=".$datainput['tahun']);
   

	}
	public function update(){
		$pw_id = $this->input->post('pw_id',true);
		// $tahun = $this->input->post('tahun',true);
		$datainput = [
				"pw_id" => $this->input->post('pw_id',true),
				"pkpt_id" => $this->input->post('pkpt_id',true),
				"kecamatan_kd" => $this->input->post('kecamatan_kd',true),
				"pw_kegiatan" => $this->input->post('pw_kegiatan',true),
				"pw_objek" => $this->input->post('pw_objek',true),
				"penugasan_kd" => $this->input->post('penugasan_kd',true),
				"wil_kd" => $this->input->post('wil_kd',true),
				"tahun" => $this->input->post('tahun',true),
				"pw_lokasi" => $this->input->post('pw_lokasi',true),
				"pw_sasaran" => $this->input->post('pw_sasaran',true),
				// "pw_kartu_no" => $this->input->post('pw_kartu_no',true),
				"pw_tgl_awal" => $this->input->post('pw_tgl_awal',true),
				"pw_tgl_akhir" => $this->input->post('pw_tgl_akhir',true),
				"pw_tgl_laporan" => $this->input->post('pw_tgl_laporan',true)
			];

		// if ($datainput=>pkpt_id==0) {
		// 	$datainput=>pkpt_id = "";
		// } 

		print_r($datainput); echo br();


		$result = $data['updatePW'] = $updatePW = $this -> updatePW($datainput);
		// $result = $this->pkptModel->tambahPkpt($datainput);
	
		header("Location: ".base_url('pengawasan')."?tahun=".$datainput['tahun']);
   

	}
	 public function delete() {
      $url= SITE_API.'pwAll';
      // echo $url;
      $pw_id = $this->input->get('pw_id',true);

	  $datadelete = 	[
				'pw_id' => $this->input->get('pw_id',true)
	  ];
      $client = new client();
      $response = $client->request('DELETE',$url, 
      	['auth' => [USER, PASSWORD],
      	'form_params' => $datadelete
      ]);
		
	  print_r($datadelete);
      $result = json_decode($response->getBody()->getContents(), true);
	  header("Location: ".base_url('pengawasan')."?tahun=".$datadelete['tahun']);

      }


	
}

?>