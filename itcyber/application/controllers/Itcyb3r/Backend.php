<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')=="") {
			redirect('Itcyb3r/Auth');
		}
		$this->load->helper('form');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index()
	{
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/menu');
		$this->load->view('backend/dashboard');
		$this->load->view('backend/template/footer');
	}
}

// end of file backend 
// itcyber/application/controllers/itcyb3r/backend.php
