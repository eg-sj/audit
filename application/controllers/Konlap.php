<?php
class Konlap extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul']="Konsep Laporan";
		$this->load->view("template/header", $data);
		$this->load->view("konlap/index", $data);
		$this->load->view("template/footer");

	}

	
}

?>