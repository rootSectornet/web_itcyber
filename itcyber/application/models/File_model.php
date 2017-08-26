<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/** 
* 
*/
class File_model extends CI_Model
{
	var $tabel = "file";

	function get_all(){
		$this->db->join('kategori','kategori.id_kategori = file.id_kategori','inner');
		$this->db->join('jenis','jenis.id_jenis = file.id_jenis','inner');
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
	function get_byKat($id){
		$this->db->where('id_kategori',$id);
		return $this->db->get($this->tabel);
	}
	function get_editfile($id){
		$this->db->where('id_file',$id);
		$this->db->join('kategori','kategori.id_kategori = file.id_kategori','inner');
		$this->db->join('jenis','jenis.id_jenis = file.id_jenis','inner');
		return $this->db->get($this->tabel);
	}
}