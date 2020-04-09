<?php
class Nilai1 extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul']= "Daftar Penilaian Kepribadian Auditor";
		$this->load->view("template/header", $data);
		$this->load->view("nilai1/index", $data);
		$this->load->view("template/footer");

	}

	
}

?>