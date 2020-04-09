<?php
class Awal extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$this->load->view("template/header");
		//$this->load->view("isi");

		//$this->load->view("awal");
		// $this->load->view("template/sidebar1");

		//$this->load->view("awal");
		$this->load->view("template/footer");

	}

	
}

?>