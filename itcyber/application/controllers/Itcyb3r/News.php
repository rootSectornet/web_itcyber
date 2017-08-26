<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')=="") {
			redirect('Itcyb3r/Auth');
		}
		$this->load->helper('form');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Anggota_model');
		$this->load->model('Artikel_model');
		$this->load->model('Tag_model');
	}
	// start of artikel
		public function index()
		{
			$data['artikel'] = $this->Artikel_model->get_all();
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/News/artikel/table',$data);
			$this->load->view('backend/template/footer');
		}
		public function tambah_artikel(){
			if (isset($_POST['submit'])) {
					$config['upload_path']          = './assets/backend/image/artikel/';
			        $config['allowed_types']        = 'jpg|png';
			        $this->load->library('upload', $config);
			        $this->upload->do_upload('foto');
			        $hasil = $this->upload->data();
			        $data = array(
			        		'gambar'	=>	$hasil['file_name'],
			        		'author'	=>	$this->session->userdata('id'),
			        		'judul'		=>	$this->input->post('judul'),
			        		'id_tag'	=>	$this->input->post('tag'),
			        		'tanggal'	=>	date('Y-m-d'),
			        		'isi'		=>	$this->input->post('text')
			        	);
			        $this->Artikel_model->insert($data);
					$this->session->set_flashdata('sukses_artikel','
			              <div class="alert alert-info alert-dismissible">
			                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
			                Tambah Artikel Berhasil.
			              </div>');
					redirect('Itcyb3r/news');
			}
			$data['tag'] = $this->Tag_model->get_all();
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/News/artikel/form_add',$data);
			$this->load->view('backend/template/footer');
		}
		public function edit_artikel($id){
			if (isset($_POST['submit'])) {
				if (empty($this->input->post('foto'))) {
			        $data = array(
			        		'author'	=>	$this->session->userdata('id'),
			        		'judul'		=>	$this->input->post('judul'),
			        		'id_tag'	=>	$this->input->post('tag'),
			        		'tanggal'	=>	date('Y-m-d'),
			        		'isi'		=>	$this->input->post('text')
			        	);
				}else{
					$config['upload_path']          = './assets/backend/image/artikel/';
			        $config['allowed_types']        = 'jpg|png';
			        $this->load->library('upload', $config);
			        $this->upload->do_upload('foto');
			        $hasil = $this->upload->data();
			        $data = array(
			        		'gambar'	=>	$hasil['file_name'],
			        		'author'	=>	$this->session->userdata('id'),
			        		'judul'		=>	$this->input->post('judul'),
			        		'id_tag'	=>	$this->input->post('tag'),
			        		'tanggal'	=>	date('Y-m-d'),
			        		'isi'		=>	$this->input->post('text')
			        	);
				}
				$condition['id_artikel'] = $id;
				$this->Artikel_model->update($condition,$data);
				$this->session->set_flashdata('sukses_artikel','
		              <div class="alert alert-success alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
		                Edit Artikel Berhasil.
		              </div>');
				redirect('Itcyb3r/news');
			}
			$data['artikel']	=	$this->Artikel_model->get_Byid($id);
			$data['tag'] = $this->Tag_model->get_all();
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/News/artikel/form_edit',$data);
			$this->load->view('backend/template/footer');
		}
		public function publish_artikel($id){
			$data = array(
					'status_artikel'	=>	1
				);
			$condition['id_artikel']	=	$id;
			$this->Artikel_model->update($condition,$data);
			$this->session->set_flashdata('sukses_artikel','
	              <div class="alert alert-success alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Artikel Telah Ter Publish.
	              </div>');
			redirect('Itcyb3r/news');
		}
		public function detail_artikel($id){
			$data['artikel']	=	$this->Artikel_model->get_Byid($id);
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/News/artikel/detail',$data);
			$this->load->view('backend/template/footer');
		}
		public function delete_artikel($id){
			$condition['id_artikel'] = $id;
			$this->Artikel_model->delete($condition);
			$this->session->set_flashdata('sukses_artikel','
	              <div class="alert alert-warning alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Artikel Telah Di Hapus !.
	              </div>');
			redirect('Itcyb3r/news');
		}
	// end of artikel
	// start of tag
		public function tag(){
			$data['tag'] = $this->Tag_model->get_all();
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/News/tag/table',$data);
			$this->load->view('backend/template/footer');
		}
		public function tambah_tag(){
			$data = array(
					'tag'	=>	$this->input->post('tag')
				);
			$this->Tag_model->insert($data);
			$this->session->set_flashdata('sukses_tag','
	              <div class="alert alert-info alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Tambah Data Berhasil.
	              </div>');
			redirect('Itcyb3r/news/tag');
		}
		public function edit_tag(){
			$data = array(
					'tag'	=>	$this->input->post('tag')
				);
			$condition['id_tag'] = $this->input->post('id');
			$this->Tag_model->update($condition,$data);
			$this->session->set_flashdata('sukses_tag','
	              <div class="alert alert-info alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
	                Edit Data Berhasil.
	              </div>');
			redirect('Itcyb3r/news/tag');
		}
		public function delete_tag($id){
			if ($this->Artikel_model->get_by_tag($id)->num_rows() > 0) {
					$this->session->set_flashdata('sukses_tag','
			              <div class="alert alert-danger alert-dismissible">
			                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			                <h4><i class="icon fa fa-info-circle"></i> Gagal!</h4>
			                Data Sedang Dipakai !.
			              </div>');
					redirect('Itcyb3r/news/tag');
				}else{
					$condition['id_tag'] = $id;
					$this->Tag_model->delete($condition);
					$this->session->set_flashdata('sukses_tag','
			              <div class="alert alert-warning alert-dismissible">
			                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
			                Hapus Data Berhasil !.
			              </div>');
					redirect('Itcyb3r/news/tag');
				}
		}
	// end of tag
}

// end of file backend 
// itcyber/application/controllers/Itcyb3r/backend.php
