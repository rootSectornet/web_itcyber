<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Tag_model extends CI_Model
{
	var $tabel = "tag";

	function get_all(){
		return $this->db->get($this->tabel);
	}
	function insert($data){
		$this->db->insert($this->tabel,$data);
	}
	function update($condition,$data){
		$this->db->where($condition);
		$this->db->update($this->tabel,$data);
	}
	function delete($condition){
		$this->db->where($condition);
		$this->db->delete($this->tabel);
	}
}