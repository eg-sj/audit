<?php
class Klhp extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul']= "Kelengkapan Konsep LHP/LHE/LHR";
		$this->load->view("template/header", $data);
		$this->load->view("klhp/index", $data);
		$this->load->view("template/footer");

	}

	
}

?>