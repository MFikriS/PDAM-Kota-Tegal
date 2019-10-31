<?php

class M_datPeg extends CI_Model{
	
	private $_table = "pegawai";
	
	public function tampil_data(){
		return $this->db->get('pegawai');
	}
	
	public function insert($image,$nip,$jbtn,$nm){
		$data = array(
			'NIP' => $nip,
            'Nama_pegawai' => $nm,
            'Jabatan' => $jbtn,
            'Foto_Pegawai' => $image,
			);
		$result=$this->db->insert('pegawai',$data);
		return $result;
	}
	
	public function getById($id_info)
    {
        return $this->db->get_where($this->_table, ["Id_DataPegawai" => $id_info])->row();
    }
	
	public function getJmlPeg()
	{
		//get data admin based on id 
		

         $informasi = $this->db->query("SELECT * FROM `pegawai` WHERE Jml_Pegawai_Tetap IS NOT NULL AND Jml_Pegawai_Tidak_Tetap IS NOT NULL");
        return $informasi->result_array();
	}
	
	function hapus_gambar($id_info){
		$this->_deleteImage($id_info);
	}
	
	function hapus($id_info){
		$this->_deleteImage($id_info);
        return $this->db->delete($this->_table, array("Id_DataPegawai" => $id_info));
	}
		
	private function _deleteImage($id_info)
	{
		$data = $this->getById($id_info);
		if ($data->Foto_pegawai != "default.jpg") {
			$filename = explode(".", $data->Foto_pegawai)[0];
			return array_map('unlink', glob(FCPATH."./assets/upload/pegawai/$filename.*"));
		}
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}