<?php
class Kendalimutu8 extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$this->load->view("template/header");
		
		$this->load->view("template/footer");

	}

	
}

?>