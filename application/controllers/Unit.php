<?php
class Unit extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index(){
        $source = $this -> rest_client_model -> unit_get();
        $data['data']=json_decode($source);
		$this->load->view("template/header");
		$this->load->view("unit/index", $data);
		$this->load->view("template/footer");
	}

	
}

?>