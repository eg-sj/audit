<?php
class Bastdist extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
		$data['judul']= "Berita Acara /Distribusi";
		$this->load->view("template/header", $data);
		$this->load->view("bastdist/index", $data);
		$this->load->view("template/footer");

	}

	
}

?>