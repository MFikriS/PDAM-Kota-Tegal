<?php

class M_profil extends CI_Model{
	
	private $_table = 'profil';
	
   public function insert($image,$id,$sjrh,$dskrps,$vs,$ms){
		$data = array(
			'Id_Profil' => $id,
                'Sejarah' => $sjrh,
                'Deskripsi_Perusahaan' => $dskrps,
                'Visi' => $vs,
				'Misi' => $ms,
				'Foto_Perusahaan' => $image
			);
		$result=$this->db->insert('profil',$data);
		return $result;
	}
	
	public function getById($id_info)
    {
        return $this->db->get_where($this->_table, ["Id_Profil" => $id_info])->row();
    }
	
	
	function hapus_gambar($id_info){
		$this->_deleteImage($id_info);
	}
	
	function hapus($id_info){
		$this->_deleteImage($id_info);
        return $this->db->delete($this->_table, array("Id_Profil" => $id_info));
	}
		
	private function _deleteImage($id_info)
	{
		$data = $this->getById($id_info);
		if ($data->Foto_Perusahaan != "default.jpg") {
			$filename = explode(".", $data->Foto_Perusahaan)[0];
			return array_map('unlink', glob(FCPATH."./assets/upload/profil/$filename.*"));
		}
	}
	
	public function tampil_data(){
		return $this->db->get('profil');
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	
	public function getAll()
	{
		//use query builder to get data table "admin"
		$data = $this->db->get('profil');
		return $data->result_array();
	}
}