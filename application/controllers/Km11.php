<?php
class Km11 extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul']="Notulensi Kesepakatan";
		$this->load->view("template/header", $data);
		$this->load->view("km11/index", $data);
		$this->load->view("template/footer");

	}

	
}

?>