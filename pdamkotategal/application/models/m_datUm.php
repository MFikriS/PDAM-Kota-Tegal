<?php

class M_datUm extends CI_Model{
	
	private $_table = "data_umum";

	public function getPost($table,$where){
		return $this->db->get_where($table,$where);
	}
	
	public function tampil_data(){
		return $this->db->get('data_umum');
	}
	
	public function getAllDatUm()
	{
		//use query builder to get data table "admin"
		$data = $this->db->get('data_umum');
		return $data->result_array();
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
	
	public function getById($id_info)
    {
        return $this->db->get_where($this->_table, ["Id_DataUmum" => $id_info])->row();
    }
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	
	function hapus_gambar($id_info){
		$this->_deleteImage($id_info);
	}
	
	private function _deleteImage($id_info)
	{
		$data = $this->getById($id_info);
		if ($data->Struktur_Organisasi != "default.jpg") {
			$filename = explode(".", $data->Struktur_Organisasi)[0];
			return array_map('unlink', glob(FCPATH."./assets/upload/struktur_organisasi/$filename.*"));
		}
	}
	
}