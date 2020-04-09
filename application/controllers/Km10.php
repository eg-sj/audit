<?php
class Km10 extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul']="Daftar Pengujian Akhir";
		$this->load->view("template/header", $data);
		$this->load->view("km10/index", $data);
		$this->load->view("template/footer");

	}

	
}

?>