<?php

use GuzzleHttp\Client;

class Pkpt extends CI_Controller
{

	private $_client;
	
	public function __construct()
	{
		parent::__construct();
		# code...
		$this->load->model('pkptModel');

		$_client= new Client();
        $this->is_logged_in();
    }

	function is_logged_in() {
		$is_logged_in = $this -> session -> userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in != true) {
			// echo 'Anda tidak memiliki akses untuk masuk ke halaman ini. <a href="' . base_url('login') . '">Login</a>';
			// die();
			header('Location: ' . (base_url("/user/login/")));
		}
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

	public function index(){
		$tahun = $this->tahun();
		$data['pkptAll'] = $this->pkptModel->pkptAll($tahun);
		$data['tahun'] = $tahun;


		// print_r($data);

		// $data['judul'] = "Program Kerja Pengawasan Tahunan";
		$this->load->view("template/header", $data);
		$this->load->view("pkpt/list", $data);
		$this->load->view("template/footer");

	} 

	public function form(){



		if (!empty($this->input->get('pkpt_id'))) {
			$pkpt_id = $this->input->get('pkpt_id');
		} else {
			$pkpt_id = 0;
		}

		// $data['refPenugasan'] = $this->pkptModel->pkptDetail($pkpt_id);


		// $tahun = $this->tahun();


		if ($pkpt_id>0) {
		$data['pkptDetail'] = $this->pkptModel->pkptDetail($pkpt_id);
		// $data['pkptTim'] = $this->pkptModel->pkptTim($pkpt_id);
		} else {
			$data['pkptDetail'] = array(
				'pkpt_id' => '',
				'pkpt_objek' => '',
				'penugasan_kd' => '',
				'wil_kd' => '',
				'tahun' => date('Y'),
				'rmp' => date('Y').'-01-01',
				'rpl' => date('Y').'-01-01',
				'pkpt_laporan' => '',
				'pkpt_keterangan' => '',
				'status' => true
			);
			// $data['pkptTim'] = array();

/*

 [pkpt_id] => 1 [penugasan_kd] => 1 [wil_kd] => 1 [wil_nama] => Inspektur Pembantu Wilayah I [pkpt_objek] => Reviu Penyerapan Anggaran, PBJ dan Dana Desa Triwulan IV tahun 2019 [penugasan_nama] => Reviu [tahun] => 2020 [rmp] => 2020-01-02 [rpl] => 2020-01-14 [pkpt_laporan] => 1 [penugasan_laporan] => LHR

		);*/
		}

		$data['refPenugasan'] = $this->pkptModel->refAll('ref_penugasan');
		$data['refWilayah'] = $this->pkptModel->refAll('ref_wilayah');	
		// $data['refTim'] = $this->pkptModel->referensiAll('ref_tim');
		$data['pkpt_id'] = $pkpt_id;
// print_r($data['pkptTim']);


		$data['judul'] = "Program Kerja Pengawasan Tahunan";

		$this->load->view("template/header", $data);
		$this->load->view("pkpt/form", $data);
		$this->load->view("template/footer");

	}
	public function tambah(){
		$datainput = [
				"pkpt_objek" => $this->input->post('pkpt_objek',true),
				"penugasan_kd" => $this->input->post('penugasan_kd',true),
				"wil_kd" => $this->input->post('wil_kd',true),
				"tahun" => $this->input->post('tahun',true),
				"rmp" => $this->input->post('rmp',true),
				"rpl" => $this->input->post('rpl',true)
			];
		// if ($datainput=>pkpt_id==0) {
		// 	$datainput=>pkpt_id = "";
		// } 

		// print_r($datainput); echo br();


		$result = $this->pkptModel->tambahPkpt($datainput);
	
		header("Location: ".base_url('pkpt')."?tahun=".$datainput['tahun']);
   

	}
	public function update(){
		// $pkpt_id = $this->PUT('pkpt_id');
		$tahun = $this->input->post('tahun',true);
		$datainput = [
				"pkpt_id" => $this->input->post('pkpt_id',true),
				"pkpt_objek" => $this->input->post('pkpt_objek',true),
				"penugasan_kd" => $this->input->post('penugasan_kd',true),
				"wil_kd" => $this->input->post('wil_kd',true),
				"tahun" => $this->input->post('tahun',true),
				"rmp" => $this->input->post('rmp',true),
				"rpl" => $this->input->post('rpl',true)
			];



			// print_r($datainput); echo br();



		// INPUT UPDATE TIM
		for ($i=1; $i < 6; $i++) {
			$pkpt_tim_id = NULL;
			if ($this->input->post('pkpt_tim_id'.$i,true)>0) {
				$pkpt_tim_id = $this->input->post('pkpt_tim_id'.$i,true);
			}
	
		$datatim = [
				"pkpt_tim_id" => $pkpt_tim_id,
				"pkpt_id" => $this->input->post('pkpt_id',true),
				"kt_tim" => $i,
				"jml_tim" => $this->input->post('jml_tim'.$i,true),
				"jml_hari" => $this->input->post('jml_hari'.$i,true)
				// "tahun" => $this->input->post('tahun',true)
			];
			print_r($datatim); echo br(2);
			
				$inputTim = $this->pkptModel->inputTim($datatim);
				if($inputTim) {echo "berhasil Input".br();} else {echo "gagal Input".br();}

				// $updateTim = $this->pkptModel->updateTim($datatim);
				// if($updateTim) {echo "berhasil Input".br();} else {echo "gagal Update".br();}

		// // 	// print_r($this->input->post()); echo br();


		}




		$result_pkpt = $this->pkptModel->updatePkpt($datainput);

		if($result_pkpt) {

			header("Location: ".base_url('pkpt')."?tahun=".$datainput['tahun']);
		}
	
   

	}

	
}

?>