<?php
class Km04 extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul'] = "Kartu Penugasan Pemeriksaan";
		$this->load->view("template/header", $data);
		// $this->load->view("template/kop", $data);
		$this->load->view("km04/index", $data);
		$this->load->view("template/footer");

	}

	
}

?>