<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')=="") {
			redirect('Itcyb3r/Auth');
		}
		$this->load->helper('form');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Anggota_model');
		$this->load->model('Kategori_model');
		$this->load->model('Jenis_model');
		$this->load->model('File_model');
	}
	// start of file
		public function index()
		{
			$data['file'] = $this->File_model->get_all();
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/download/file/tabel',$data);
			$this->load->view('backend/template/footer');
		}
		public function tambah_file(){
			$data['kategori'] = $this->Kategori_model->get_all();
			$data['jenis'] = $this->Jenis_model->get_all();
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/download/file/form_add',$data);
			$this->load->view('backend/template/footer');
		}
		public function edit_file($id){
			$data['edit_file'] = $this->File_model->get_editfile($id);
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/download/file/tabel',$data);
			$this->load->view('backend/template/footer');
		}
	// end of file
	// start of kategori
		public function kategori(){
			$data['kategori'] = $this->Kategori_model->get_all();
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/download/kategori/table',$data);
			$this->load->view('backend/template/footer');
		}
		public function tambah_kategori(){
			$data = array(
					'kategori'	=>	$this->input->post('kategori')
				);
			$this->Kategori_model->insert($data);
			$this->session->set_flashdata('sukses_kategori','
	              <div class="alert alert-success alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Kategori Berhasil Ditambah.
	              </div>');
			redirect('Itcyb3r/file/kategori');
		}
		public function edit_kategori(){
			$data = array(
					'kategori'	=>	$this->input->post('kategori')
				);
			$condition['id_kategori'] = $this->input->post('id');
			$this->Kategori_model->update($condition,$data);
			$this->session->set_flashdata('sukses_kategori','
	              <div class="alert alert-success alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Kategori Berhasil Di Edit.
	              </div>');
			redirect('Itcyb3r/file/kategori');
		}
		public function delete_kategori($id){
			if ($this->File_model->get_byKat($id)->num_rows() > 0) {
				$this->session->set_flashdata('sukses_kategori','
		              <div class="alert alert-danger alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
		                Kategori Sedang Digunakan !.
		              </div>');
				redirect('Itcyb3r/file/kategori');
			}else{
				$condition['id_kategori'] = $id;
				$this->Kategori_model->delete($condition);
				$this->session->set_flashdata('sukses_kategori','
		              <div class="alert alert-warning alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
		                Kategori Berhasil Dihapus !.
		              </div>');
				redirect('Itcyb3r/file/kategori');
			}
		}
	// end of kategori
	// start of jenis
		public function jenis(){
			$data['jenis'] = $this->Jenis_model->get_all();
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/download/jenis/table',$data);
			$this->load->view('backend/template/footer');
		}
		public function tambah_jenis(){
			$data = array(
					'jenis'	=>	$this->input->post('jenis')
				);
			$this->Jenis_model->insert($data);
			$this->session->set_flashdata('sukses_jenis','
	              <div class="alert alert-success alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Jenis Berhasil Ditambah.
	              </div>');
			redirect('Itcyb3r/file/jenis');
		}
		public function edit_jenis(){
			$data = array(
					'jenis'	=>	$this->input->post('jenis')
				);
			$condition['id_jenis'] = $this->input->post('id');
			$this->Jenis_model->update($condition,$data);
			$this->session->set_flashdata('sukses_jenis','
	              <div class="alert alert-success alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Jenis Berhasil Di Edit.
	              </div>');
			redirect('Itcyb3r/file/jenis');
		}
		public function delete_jenis($id){
			if ($this->File_model->get_byKat($id)->num_rows() > 0) {
				$this->session->set_flashdata('sukses_jenis','
		              <div class="alert alert-success alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
		                Data Sedang Digunakan !.
		              </div>');
				redirect('Itcyb3r/file/jenis');
			}else{
				$condition['id_jenis'] = $id;
				$this->Jenis_model->delete($condition);
				$this->session->set_flashdata('sukses_kategori','
		              <div class="alert alert-warning alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
		                Jenis Berhasil Dihapus !.
		              </div>');
				redirect('Itcyb3r/file/jenis');
			}
		}
	// end of jenis
}

// end of file backend 
// itcyber/application/controllers/itcyb3r/file.php
