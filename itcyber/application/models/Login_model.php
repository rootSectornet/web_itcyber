<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Login_model extends CI_Model
{
	
		public function cek_user($data) {
			$query = $this->db->get_where('anggota', $data);
			return $query;
		}
}