<?php

class M_tarif extends CI_Model{
	
	public $table = 'tarif';
	
	
	public function tampil_data(){
		return $this->db->get('tarif');
	}
	
	public function insert($data,$table){
		$this->db->insert($table,$data);
	}
	
	function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}