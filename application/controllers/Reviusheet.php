<?php
class Reviusheet extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul']= "Reviu sheet";
		$this->load->view("template/header", $data);
		$this->load->view("reviusheet/index", $data);
		$this->load->view("template/footer");

	}

	
}

?>