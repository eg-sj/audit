<?php
use GuzzleHttp\Client;   

class Nopen extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

    private function refTim() {
      $url= SITE_API.'refAll?tabel=ref_tim';
      // echo $url;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result['data'];

      }
    private function refPangkat() {
      $url= SITE_API.'refAll?tabel=ref_pangkat';
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

	private function pw_tim_id(){
		if (!empty($this->input->get('pw_tim_id'))) {
			$pw_tim_id = $this->input->get('pw_tim_id');
		} else {
			$pw_tim_id = 0;
		}
		return $pw_tim_id;
	}
	private function kt_tim(){
		if (!empty($this->input->get('kt_tim'))) {
			$kt_tim = $this->input->get('kt_tim');
		} else {
			$kt_tim = 0;
		}
		return $kt_tim;
	}
	private function nip(){
		if (!empty($this->input->get('nip'))) {
			$nip = $this->input->get('nip');
		} else {
			$nip = 0;
		}
		return $nip;
	}

    private function pegawaiDetail($nip) {
      $url= PEGAWAI_API.'data_pegawai/?nip='.$nip;
      // echo $url;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result;

      }

    private function pegawaiAll() {
      $url= PEGAWAI_API.'get_pegawai?unit_id=730705';
      // echo $url;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result;

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

     private function tambahTim($datainput=0) {
      $url= SITE_API.'pwTim';
      // echo $url;
      $client = new client();
      $response = $client->request('POST',$url, 
      	['auth' => [USER, PASSWORD],
      	'form_params' => $datainput
  ]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result;

      }
      private function updateTim($datainput=0) {
      $url= SITE_API.'pwTim';
      // echo $url;
      $client = new client();
      $response = $client->request('PUT',$url, 
      	['auth' => [USER, PASSWORD],
      	'form_params' => $datainput
      ]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result;

      }
	  private function updateNopen($datainput=0) {
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

    private function pwTimDetail($pw_tim_id=0) {
      $url= SITE_API.'pwTim?pw_tim_id='.$pw_tim_id;
      // echo $url;
      $client = new client();
      $response = $client->request('GET',$url, ['auth' => [USER, PASSWORD]]);

      $result = json_decode($response->getBody()->getContents(), true);
      // echo $result['status'];
      return $result['data'];

      }


	public function index(){
		$data['judul']= "Nota pengajuan Calon Personil Tim";
		$data['pw_id']= $pw_id=$this->pw_id();
		$data['kt_tim']= $kt_tim=$this->kt_tim();
		$data['refTim']= $this->refTim($pw_id);
		$data['refPangkat']= $this->refPangkat($pw_id);
		$data['pwTim']= $this->pwTim($pw_id);
		// $data['pwTimDetail']= $this->pwTimDetail($pw_tim_id);
		$data['pwDetail']= $this->pwDetail($pw_id);
		$data['pegawaiAll']= $pegawaiAll=$this->pegawaiAll();

		// print_r($data);










		$this->load->view("template/header", $data);

		$this->load->view("nopen/index", $data);
		// $this->load->view("nopen/np_form1", $data);


		$this->load->view("template/kop", $data);
		$this->load->view("nopen/nopen_cetak", $data);


		$this->load->view("template/footer");


	}
	


	// public function cetak(){
	// 	$data['pw_id'] = $pw_id = $this->pw_id();
	// 	$data['pwTim'] = $pwTim = $this->pwTim($pw_id);
	// 	$this->load->view("template/header", $data);
	// 	// $this->load->view("nopen/np_form1", $data);
	// 	$this->load->view("template/footer");


	// }
	public function np_form(){
		$data['judul']= "Input Personil Tim";
		$data['pw_id']= $pw_id=$this->pw_id();
		$data['kt_tim']= $kt_tim=$this->kt_tim();
		$data['pw_tim_id']= $pw_tim_id=$this->pw_tim_id();
		$data['refTim']= $this->refTim($pw_id);
		$data['refPangkat']= $this->refPangkat();
		$data['nip']= $nip=$this->nip();


		$this->load->view("template/header", $data);


		if ($pw_tim_id>0) {
			# update
			$pwTimDetail = $this->pwTimDetail($pw_tim_id);
			$data['pwTimDetail']= $pwTimDetail;

			$this->load->view("nopen/np_form", $data);


		} elseif ($nip>0) {
			# input
			$pegawaiDetail= $this->pegawaiDetail($nip);
			$pwTimDetail = 	array(
				'pw_tim_id' => "",
				'kt_tim' => $kt_tim,
				'pw_id' => $pw_id,
				'nip' => $nip,
				'nama' => $pegawaiDetail['nama'],
				'pangkat_id' => $pegawaiDetail['pangkat_id'],
				'jabatan_nama' => $pegawaiDetail['jabatan_nama']
				// 'jabatan_jenis_id' => $pegawaiDetail['jabatan_jenis_id'],
				// 'pangkat_nama' => $pegawaiDetail['pangkat_nama']
			);
			// print_r($pegawaiDetail);
			$data['pwTimDetail']= $pwTimDetail;

			$this->load->view("nopen/np_form", $data);

		} else {
			#pilih pegawai
			// $data['pegawaiAll']= $pegawaiAll=$this->pegawaiAll();
			// $this->load->view("nopen/np_form1", $data);

		}


		// print_r($data);
		// $this->load->view("nopen/np_form", $data);
		$this->load->view("template/footer");


	}
	public function tambah(){

		$datainput = [
				'kt_tim' => $this->input->post('kt_tim',true),
				'pw_id' => $this->input->post('pw_id',true),
				'nip' => $this->input->post('nip',true),
				'nama' => $this->input->post('nama',true),
				'pangkat_id' => $this->input->post('pangkat_id',true),
				'jabatan_nama' => $this->input->post('jabatan_nama',true)
				// 'jabatan_jenis_id' => $this->input->post('jabatan_jenis_id',true)
				// 'pangkat_nama' => $this->input->post('pangkat_nama',true)
			];
		print_r($datainput);

		$result = $this -> tambahTim($datainput);


		header("Location: ".base_url('nopen/index')."?pw_id=".$datainput['pw_id']);


	}
	public function update(){
		$pw_tim_id = $this->input->post('pw_tim_id',true);
		$datainput = 	[
				'pw_tim_id' => $this->input->post('pw_tim_id',true),
				'kt_tim' => $this->input->post('kt_tim',true),
				'pw_id' => $this->input->post('pw_id',true),
				'nip' => $this->input->post('nip',true),
				'nama' => $this->input->post('nama',true),
				'pangkat_id' => $this->input->post('pangkat_id',true),
				'jabatan_nama' => $this->input->post('jabatan_nama',true)
				// 'jabatan_jenis_id' => $this->input->post('jabatan_jenis_id',true)
				// 'pangkat_nama' => $this->input->post('pangkat_nama',true)
			];
		print_r($datainput);

		$result = $this -> updateTim($datainput);


		header("Location: ".base_url('nopen')."?pw_id=".$datainput['pw_id']);


	}
	
	 public function delete() {
      $url= SITE_API.'pwTim';
      // echo $url;
      $pw_id = $this->input->get('pw_id',true);

	  $datadelete = [
				'pw_tim_id' => $this->input->get('pw_tim_id',true)
	  ];
      $client = new client();
      $response = $client->request('DELETE',$url, 
      	['auth' => [USER, PASSWORD],
      	'form_params' => $datadelete
      ]);
		
	  print_r($datadelete);
      $result = json_decode($response->getBody()->getContents(), true);
	  header("Location: ".base_url('nopen')."?pw_id=".$pw_id);

      }
	public function np_update(){
		$datainput['kunci'] = 	json_encode([
				'pw_id' => $this->input->post('pw_id',true)
				// 'jabatan_jenis_id' => $this->input->post('jabatan_jenis_id',true)
				// 'pangkat_nama' => $this->input->post('pangkat_nama',true)
			]);
		$datainput['data'] = 	json_encode([
				'nopen_no' => $this->input->post('nopen_no',true),
				'nopen_tgl' => $this->input->post('nopen_tgl',true)
				// 'jabatan_jenis_id' => $this->input->post('jabatan_jenis_id',true)
				// 'pangkat_nama' => $this->input->post('pangkat_nama',true)
			]);
		$datainput['tabel'] = 'dat_pw';
		
		// $datainput = json_encode($datainput);
		print_r($datainput);
		// echo $data;

		$result = $this -> updateNopen($datainput);




		if($result) {
			$pw_id = $this->input->post('pw_id',true);
			header("Location: ".base_url('nopen')."?pw_id=".$pw_id);
		}

	}
	public function st_update(){
		$datainput['kunci'] = 	json_encode([
				'pw_id' => $this->input->post('pw_id',true)
				// 'jabatan_jenis_id' => $this->input->post('jabatan_jenis_id',true)
				// 'pangkat_nama' => $this->input->post('pangkat_nama',true)
			]);
		$datainput['data'] = 	json_encode([
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
			header("Location: ".base_url('nopen')."?pw_id=".$pw_id);
		}

	}
	


	
}

?>