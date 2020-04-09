<?php
class Nilai2 extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul']= "Daftar Penilaian Kinerja dan Kepribadian Auditor";
		$this->load->view("template/header", $data);
		$this->load->view("nilai2/index", $data);
		$this->load->view("template/footer");

	}

	
}

?>