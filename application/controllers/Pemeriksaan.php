<?php
class Pemeriksaan extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul']="Data Pemeriksaan";
		$this->load->view("template/header", $data);
		$this->load->view("pemeriksaan/index", $data);
		$this->load->view("template/footer");

	}

	
}

?>