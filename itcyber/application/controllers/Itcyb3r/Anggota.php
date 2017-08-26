<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('logged_in')=="") {
			redirect('Itcyb3r/Auth');
		}
		$this->load->helper('form');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Angkatan_model');
		$this->load->model('Anggota_model');
		$this->load->model('Jabatan_model');
	}
	public function index()
	{
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/menu');
		$this->load->view('backend/dashboard');
		$this->load->view('backend/template/footer');
	}
	// start of angkatan
		public function angkatan(){
			if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1) {
				if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3) {
						$data['angkatan'] = $this->Angkatan_model->get_data();
						$this->load->view('backend/template/header');
						$this->load->view('backend/template/menu');
						$this->load->view('backend/anggota/angkatan/table',$data);
						$this->load->view('backend/template/footer');
				}else{
					redirect('Itcyb3r/backend');
				}
			}else{
				redirect('Itcyb3r/backend');
			}
		}
		public function edit_angkatan(){
			if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1) {
				if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3) {
						$data = array(
								'angkatan'	=>	$this->input->post('angkatan')
							);
						$condition['id_angkatan'] = $this->input->post('id');
						$this->Angkatan_model->edit($data,$condition);
						$this->session->set_flashdata('sukses','
				              <div class="alert alert-info alert-dismissible">
				                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
				                Edit Data Berhasil.
				              </div>');
						redirect('Itcyb3r/anggota/angkatan');
				}else{
					redirect('Itcyb3r/backend');
				}
			}else{
				redirect('Itcyb3r/backend');
			}
		}
		public function tambah_angkatan(){
			if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1) {
				if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3) {
						$data = array(
								'angkatan'	=>	$this->input->post('angkatan')
							);
						$this->Angkatan_model->insert($data);
						$this->session->set_flashdata('sukses','
				              <div class="alert alert-success alert-dismissible">
				                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
				                Tambah Data Berhasil.
				              </div>');
						redirect('Itcyb3r/anggota/angkatan');
				}else{
					redirect('Itcyb3r/backend');
				}
			}else{
				redirect('Itcyb3r/backend');
			}
		}
		public function delete_angkatan($id){
			if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1) {
				if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3) {
						if ($this->Anggota_model->get_whereAngkatan($id)->num_rows() > 0) {
							$this->session->set_flashdata('sukses','
					              <div class="alert alert-danger alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					                <h4><i class="icon fa fa-info-circle"></i> Gagal!</h4>
					                Data Sedang Di Pakai.
					              </div>');
							redirect('Itcyb3r/anggota/angkatan');
						}else{
							$condition['id_angkatan'] = $id;
							$this->Angkatan_model->delete($condition);
							$this->session->set_flashdata('sukses','
					              <div class="alert alert-warning alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
					                Hapus Data Berhasil.
					              </div>');
							redirect('Itcyb3r/anggota/angkatan');
						}
				}else{
					redirect('Itcyb3r/backend');
				}
			}else{
				redirect('Itcyb3r/backend');
			}
		}
	// end of angkatan
	// start of jabatan
		public function jabatan(){
			if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1) {
				if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3) {
						$data['jabatan'] = $this->Jabatan_model->get_all();
						$this->load->view('backend/template/header');
						$this->load->view('backend/template/menu');
						$this->load->view('backend/anggota/jabatan/tabel',$data);
						$this->load->view('backend/template/footer');
				}else{
					redirect('Itcyb3r/backend');
				}
			}else{
				redirect('Itcyb3r/backend');
			}
		}
		public function edit_jabatan(){
			if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1) {
				if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3) {
						$data = array(
								'jabatan'	=>	$this->input->post('jabatan')
							);
						$condition['id_jabatan'] = $this->input->post('id');
						$this->Jabatan_model->update($condition,$data);
						$this->session->set_flashdata('jabatan','
				              <div class="alert alert-info alert-dismissible">
				                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
				                Edit Data Berhasil.
				              </div>');
						redirect('Itcyb3r/anggota/jabatan');
				}else{
					redirect('Itcyb3r/backend');
				}
			}else{
				redirect('Itcyb3r/backend');
			}
		}
		public function delete_jabatan($id){
			if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1) {
				if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3) {
						if ($this->Anggota_model->get_whereJabatan($id)->num_rows() > 0) {
							$this->session->set_flashdata('jabatan','
					              <div class="alert alert-danger alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					                <h4><i class="icon fa fa-info-circle"></i> Gagal!</h4>
					                Data Sedang Di Pakai.
					              </div>');
							redirect('Itcyb3r/anggota/jabatan');
						}else{
							$condition['id_jabatan'] = $id;
							$this->Jabatan_model->delete($condition);
							$this->session->set_flashdata('jabatan','
					              <div class="alert alert-warning alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
					                Hapus Data Berhasil.
					              </div>');
							redirect('Itcyb3r/anggota/jabatan');
						}
				}else{
					redirect('Itcyb3r/backend');
				}
			}else{
				redirect('Itcyb3r/backend');
			}

		}
		public function tambah_jabatan(){
			if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1) {
				if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3) {
						$data = array(
								'jabatan' => $this->input->post('jabatan')
							);
						$this->Jabatan_model->insert($data);
						$this->session->set_flashdata('jabatan','
				              <div class="alert alert-success alert-dismissible">
				                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
				                Tambah Data Berhasil.
				              </div>');
						redirect('Itcyb3r/anggota/jabatan');
				}else{
					redirect('Itcyb3r/backend');
				}
			}else{
				redirect('Itcyb3r/backend');
			}
		}
	// end of jabatan
	// start of anggota
		public function anggota(){
			$data['anggota'] = $this->Anggota_model->get_all();
			$data['angkatan'] = $this->Angkatan_model->get_data();
			$this->load->view('backend/template/header');
			$this->load->view('backend/template/menu');
			$this->load->view('backend/anggota/anggota/table',$data);
			$this->load->view('backend/template/footer');
		}
		public function tambah_anggota(){
			if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1) {
				if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3) {
							if (isset($_POST['submit'])) {
								$config['upload_path']          = './assets/backend/image/anggota/';
						        $config['allowed_types']        = 'jpg|png';
						        $this->load->library('upload', $config);
						        $this->upload->do_upload('foto');
						        $hasil = $this->upload->data();
						        $data = array(
						        			'id_anggota'		=>	$this->input->post('id'),
						        			'nama'				=>	$this->input->post('nama'),
						        			'email'				=>	$this->input->post('email'),
						        			'password'			=>	md5($this->input->post('password')),
						        			'foto'				=>	$hasil['file_name'],
						        			'id_angkatan'		=>	$this->input->post('angkatan'),
						        			'id_jabatan'		=>	$this->input->post('jabatan'),
						        			'status_active'		=>	$this->input->post('st_aktif'),
						        			'status_jabatan'	=>	$this->input->post('st_jabatan'),
						        			'alamat'			=>	$this->input->post('alamat'),
						        			'no_telp'			=>	$this->input->post('telp'),
						        			'tgl_lahir'			=>	$this->input->post('tgl_lahir'),
						        			'jenis_kelamin'		=>	$this->input->post('jk'),
						        			'keahlian'			=>	$this->input->post('keahlian'),
						        			'pekerjaan'			=>	$this->input->post('pekerjaan')
						        	);
						        $this->Anggota_model->insert($data);
								$this->session->set_flashdata('anggota','
						              <div class="alert alert-info alert-dismissible">
						                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
						                Tambah data anggota Berhasil !.
						              </div>');
							}
							$data['angkatan'] = $this->Angkatan_model->get_data();
							$data['jabatan'] = $this->Jabatan_model->get_all();
							$this->load->view('backend/template/header');
							$this->load->view('backend/template/menu');
							$this->load->view('backend/anggota/anggota/form_add',$data);
							$this->load->view('backend/template/footer');
				}else{
					redirect('Itcyb3r/backend');
				}
			}else{
				redirect('Itcyb3r/backend');
			}
		}
		public function edit_anggota($id){
			if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1) {
				if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3) {
						if (isset($_POST['submit'])) {
							$config['upload_path']          = './assets/backend/image/anggota/';
					        $config['allowed_types']        = 'jpg|png';
					        $this->load->library('upload', $config);
					        $this->upload->do_upload('foto');
					        $hasil = $this->upload->data();
					        if (empty($this->input->post('foto'))) {
						        $data = array(
						        			'id_anggota'		=>	$this->input->post('id'),
						        			'nama'				=>	$this->input->post('nama'),
						        			'email'				=>	$this->input->post('email'),
						        			'id_angkatan'		=>	$this->input->post('angkatan'),
						        			'id_jabatan'		=>	$this->input->post('jabatan'),
						        			'status_active'		=>	$this->input->post('st_aktif'),
						        			'status_jabatan'	=>	$this->input->post('st_jabatan'),
						        			'alamat'			=>	$this->input->post('alamat'),
						        			'no_telp'			=>	$this->input->post('telp'),
						        			'tgl_lahir'			=>	$this->input->post('tgl_lahir'),
						        			'jenis_kelamin'		=>	$this->input->post('jk'),
						        			'keahlian'			=>	$this->input->post('keahlian'),
						        			'pekerjaan'			=>	$this->input->post('pekerjaan')
						        	);
					        }else{
						        $data = array(
						        			'id_anggota'		=>	$this->input->post('id'),
						        			'nama'				=>	$this->input->post('nama'),
						        			'email'				=>	$this->input->post('email'),
						        			'foto'				=>	$hasil['file_name'],
						        			'id_angkatan'		=>	$this->input->post('angkatan'),
						        			'id_jabatan'		=>	$this->input->post('jabatan'),
						        			'status_active'		=>	$this->input->post('st_aktif'),
						        			'status_jabatan'	=>	$this->input->post('st_jabatan'),
						        			'alamat'			=>	$this->input->post('alamat'),
						        			'no_telp'			=>	$this->input->post('telp'),
						        			'tgl_lahir'			=>	$this->input->post('tgl_lahir'),
						        			'jenis_kelamin'		=>	$this->input->post('jk'),
						        			'keahlian'			=>	$this->input->post('keahlian'),
						        			'pekerjaan'			=>	$this->input->post('pekerjaan')
						        	);
					        }
							$condition['id_anggota'] = $id;
							$this->Anggota_model->update($condition,$data);
							$this->session->set_flashdata('anggota','
					              <div class="alert alert-info alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
					                Tambah data anggota Berhasil !.
					              </div>');
							redirect('Itcyb3r/anggota/anggota');
						}
						$data['anggota'] = $this->Anggota_model->get_byID($id);
						$data['angkatan'] = $this->Angkatan_model->get_data();
						$data['jabatan'] = $this->Jabatan_model->get_all();
						$this->load->view('backend/template/header');
						$this->load->view('backend/template/menu');
						$this->load->view('backend/anggota/anggota/form_edit',$data);
						$this->load->view('backend/template/footer');
				}else{
					redirect('Itcyb3r/backend');
				}
			}else{
				redirect('Itcyb3r/backend');
			}
		}
		public function delete_anggota($id){
			if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1) {
				if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3) {
						$condition['id_anggota'] = $id;
						$this->Anggota_model->delete($condition);
							$this->session->set_flashdata('anggota','
					              <div class="alert alert-warning alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					                <h4><i class="icon fa fa-info-circle"></i> Sukses!</h4>
					                Hapus data anggota Berhasil !.
					              </div>');
							redirect('Itcyb3r/anggota/anggota');

				}else{
					redirect('Itcyb3r/backend');
				}
			}else{
				redirect('Itcyb3r/backend');
			}

		}
	// end of anggota
}

// end of file backend 
// itcyber/application/controllers/Itcyb3r/backend.php
