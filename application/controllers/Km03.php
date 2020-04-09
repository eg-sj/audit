<?php
class Km03 extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul'] = "Anggaran Waktu Pemeriksaan";
		$this->load->view("template/header", $data);
		// $this->load->view("template/kop", $data);
		$this->load->view("km03/index", $data);
		$this->load->view("template/footer");

	}

	
}

?>