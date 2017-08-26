<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Anggota_model extends CI_Model
{
	var $tabel = "anggota";
	function get_whereAngkatan($id){
		$this->db->where('id_angkatan',$id);
		return $this->db->get($this->tabel);
	}
	function get_whereJabatan($id){
		$this->db->where('id_jabatan',$id);
		return $this->db->get($this->tabel);
	}
	function get_all(){
		$this->db->join('angkatan','angkatan.id_angkatan = anggota.id_angkatan','INNER');
		$this->db->join('jabatan','jabatan.id_jabatan = anggota.id_jabatan','INNER');
		return $this->db->get($this->tabel);
	}
	function insert($data){
		$this->db->insert($this->tabel,$data);
	}
	function get_byID($id){
		$this->db->where('id_anggota',$id);
		$this->db->join('angkatan','angkatan.id_angkatan = anggota.id_angkatan','INNER');
		$this->db->join('jabatan','jabatan.id_jabatan = anggota.id_jabatan','INNER');
		return $this->db->get($this->tabel);
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