<?php
class Laporanharian extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul']= "Laporan Harian Pertanggungjawaban";
		$this->load->view("template/header", $data);
		$this->load->view("laporanharian/index", $data);
		$this->load->view("template/footer");

	}

	
}

?>