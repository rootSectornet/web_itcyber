<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')=="") {
			redirect('Itcyb3r/Auth');
		}
		$this->load->helper('form');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Anggota_model');
		$this->load->model('Galery_model');
		$this->load->model('Portfolio_model');
	}
	// start of galery
		public function index()
		{
			$data['galery'] = $this->Galery_model->get_all();
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/media/galery/table',$data);
			$this->load->view('backend/template/footer');
		}
		public function tambah_galery(){
			$data = array(
					'link'		=>	$this->input->post('link'),
					'caption'	=>	$this->input->post('caption')
				);
			$this->Galery_model->insert($data);
			$this->session->set_flashdata('sukses_galery','
	              <div class="alert alert-success alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Galery Berhasil Ditambah.
	              </div>');
			redirect('Itcyb3r/media');
		}
		public function edit_galery(){
			$data = array(
					'link'		=>	$this->input->post('link'),
					'caption'	=>	$this->input->post('caption')
				);
			$condition['id_galery'] = $this->input->post('id');
			$this->Galery_model->update($condition,$data);
			$this->session->set_flashdata('sukses_galery','
	              <div class="alert alert-info alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Galery Berhasil Di Edit.
	              </div>');
			redirect('Itcyb3r/media');
		}
		public function delete_galery($id){
			$condition['id_galery'] = $id;
			$this->Galery_model->delete($condition);
			$this->session->set_flashdata('sukses_galery','
	              <div class="alert alert-warning alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Galery Berhasil Di Hapus.
	              </div>');
			redirect('Itcyb3r/media');
		}
	// end of galery
	// start of portfolio
		public function portfolio(){
			$data['portfolio'] = $this->Portfolio_model->get_all();
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/media/portfolio/table',$data);
			$this->load->view('backend/template/footer');
		}
		public function tambah_portfolio(){
			$data = array(
					'link'		=>	$this->input->post('link'),
					'caption'	=>	$this->input->post('caption')
				);
			$this->Portfolio_model->insert($data);
			$this->session->set_flashdata('sukses_portfolio','
	              <div class="alert alert-success alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Portfolio Berhasil Ditambah.
	              </div>');
			redirect('Itcyb3r/media/portfolio');
		}
		public function edit_portfolio(){
			$data = array(
					'link'		=>	$this->input->post('link'),
					'caption'	=>	$this->input->post('caption')
				);
			$condition['id_portfolio'] = $this->input->post('id');
			$this->Portfolio_model->update($condition,$data);
			$this->session->set_flashdata('sukses_portfolio','
	              <div class="alert alert-info alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Portfolio Berhasil Di Edit.
	              </div>');
			redirect('Itcyb3r/media/portfolio');
		}
		public function delete_portfolio($id){
			$condition['id_portfolio'] = $id;
			$this->Portfolio_model->delete($condition);
			$this->session->set_flashdata('sukses_portfolio','
	              <div class="alert alert-warning alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Portfolio Berhasil Di Hapus.
	              </div>');
			redirect('Itcyb3r/media/portfolio');
		}
	// end of portfolio
}

// end of file backend 
// itcyber/application/controllers/itcyb3r/backend.php
