<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Artikel_model extends CI_Model
{
	var $tabel = "artikel";

	function get_all(){
		$this->db->join('tag','tag.id_tag = artikel.id_tag','inner');
		$this->db->order_by('tanggal','ASC');
		return $this->db->get($this->tabel);
	}
	function get_by_tag($id){
		$this->db->where('id_tag',$id);
		return $this->db->get($this->tabel);
	}
	function insert($data){
		$this->db->insert($this->tabel,$data);
	}
	function get_Byid($id){
		$this->db->where('id_artikel',$id);
		$this->db->join('tag','tag.id_tag = artikel.id_tag','inner');
		$this->db->join('anggota','anggota.id_anggota = artikel.author','inner');
		return $this->db->get($this->tabel);
	}
	function update($condition,$data){
		$this->db->where($condition);
		$this->db->update($this->tabel,$data);
	}
	function delete($id){
		$this->db->where($id);
		$this->db->delete($this->tabel);
	}
}