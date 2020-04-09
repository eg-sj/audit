<?php
class Nonpkpt extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul'] = " Non Program Kerja Pengawasan Tahunan";
		$this->load->view("template/header", $data);
		// $this->load->view("template/kop", $data);
		$this->load->view("nonpkpt/list", $data);
		$this->load->view("template/footer");

	}

	
}

?>