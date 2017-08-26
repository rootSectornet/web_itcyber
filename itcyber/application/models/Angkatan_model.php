<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Angkatan_model extends CI_Model
{
	var $tabel = "angkatan";
	function get_data(){
		return $this->db->get($this->tabel);
	}
	function edit($data,$condition){
		$this->db->where($condition);
		$this->db->update($this->tabel,$data);
	}
	function insert($data){
		$this->db->insert($this->tabel,$data);
	}
	function delete($condition){
		$this->db->where($condition);
		$this->db->delete($this->tabel);
	}
}