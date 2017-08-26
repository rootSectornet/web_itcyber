<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$data['animate'] = "";
		if (isset($_POST['submit'])) {
			$username = $this->input->post('username');
			$pass = md5($this->input->post('password'));
			$data = array(
						'email'		=>	$username,
						'password'	=>	$pass
				);
			$this->load->model('login_model');
			$hasil 	= 	$this->login_model->cek_user($data);
			if ($hasil->num_rows() > 0) {
				foreach ($hasil->result() as $key) {
					$sess_data['logged_in'] 		= 	'Sudah Loggin';
					$sess_data['nama'] 				=	$key->nama;
					$sess_data['id_jabatan']		=	$key->id_jabatan;
					$sess_data['status_jabatan']	=	$key->status_jabatan;
					$sess_data['status_active']		=	$key->status_active;
					$sess_data['email']				=	$key->email;
					$sess_data['id']				=	$key->id_anggota;
					$sess_data['foto']				=	$key->foto;
					$this->session->set_userdata($sess_data);
				}
			redirect('Itcyb3r/backend');
			}else{
				$data['animate'] = "animated swing";
				$this->session->set_flashdata("pesan_eror","<div class='alert bg-red alert-dismissible' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                            Username Atau Password Salah !
                        </div>");
			}
		}
		$this->load->view('backend/login',$data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Itcyb3r/Auth');
	}
}
// end of file Auth
// itcyber/application/controllers/Itcyb3r/Auth.php
