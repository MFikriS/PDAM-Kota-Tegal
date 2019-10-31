<?php

class M_prosedur extends CI_Model{
	
	public $_table = 'prosedur';
	
	public function tampil_data(){
		return $this->db->get('prosedur');
	}
	
	public function getProsedur1()
	{
		$prosedur1 = $this->db->query("SELECT Gambar FROM prosedur WHERE Judul_Prosedur='Prosedur Menjadi Pelanggan'");
        return $prosedur1->result_array();
	}
	
	public function getProsedur2()
	{
		$prosedur2 = $this->db->query("SELECT Gambar FROM prosedur WHERE Judul_Prosedur='Prosedur Berhenti Sementara'");
        return $prosedur2->result_array();
	}
	
	public function getProsedur3()
	{
		$prosedur3 = $this->db->query("SELECT Gambar FROM prosedur WHERE Judul_Prosedur='Prosedur Pembukaan Kembali'");
        return $prosedur3->result_array();
	}
	
	public function getProsedur4()
	{
		$prosedur4 = $this->db->query("SELECT Gambar FROM prosedur WHERE Judul_Prosedur='Prosedur Balik Nama'");
		return $prosedur4->result_array();
	}
	
	public function getProsedur5()
	{
		
		$prosedur5 = $this->db->query("SELECT Gambar FROM prosedur WHERE Judul_Prosedur='Prosedur Pembayaran'");
        return $prosedur5->result_array();
	}
	
	public function insert($image,$id,$jdl,$ktrngn){
		$data = array(
			'Id_Prosedur' => $id,
			'Id_Admin' => "pdam456",
            'Judul_Prosedur' => $jdl,
            'Gambar' => $image,
			);
		$result=$this->db->insert('prosedur',$data);
		return $result;
	}
	
	public function insert2($id,$jdl,$ktrngn){
		$data = array(
			'Id_Prosedur' => $id,
			'Id_Admin' => "pdam456",
            'Judul_Prosedur' => $jdl,
            'Keterangan' => $ktrngn,
            'Gambar' => "NULL",
			);
		$result=$this->db->insert('prosedur',$data);
		return $result;
	}
	
	public function getById($id_info)
    {
        return $this->db->get_where($this->_table, ["Id_Prosedur" => $id_info])->row();
    }
	
	function hapus($id_info){
		$this->_deleteImage($id_info);
        return $this->db->delete($this->_table, array("Id_Prosedur" => $id_info));
	}
		private function _deleteImage($id_info)
		{
			$data = $this->getById($id_info);
			if ($data->Gambar != "default.jpg") {
				$filename = explode(".", $data->Gambar)[0];
				return array_map('unlink', glob(FCPATH."./assets/upload/prosedur/$filename.*"));
			}
	}
	
	function hapus_gambar($id_info){
		$this->_deleteImage($id_info);
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}