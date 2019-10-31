<?php

class M_dataKerjasama extends CI_Model{
	
	private $_table = "data_kerjasama";
	
	public function tampil_data(){
		$kerjasama = $this->db->query("SELECT * FROM data_kerjasama");
        return $kerjasama->result_array();
	}
	
	public function insert($image){
		$data = array(
            'Gambar' => $image,
			);
		$result=$this->db->insert('data_kerjasama',$data);
		return $result;
	}
	
	public function getById($id_info)
    {
        return $this->db->get_where($this->_table, ["Id_DataKerjasama" => $id_info])->row();
    }
	
	function hapus_gambar($id_info){
		$this->_deleteImage($id_info);
	}
	
	function hapus($id_info){
		$this->_deleteImage($id_info);
        return $this->db->delete($this->_table, array("Id_DataKerjasama" => $id_info));
	}
		
	private function _deleteImage($id_info)
	{
		$data = $this->getById($id_info);
		if ($data->Gambar != "default.jpg") {
			$filename = explode(".", $data->Gambar)[0];
			return array_map('unlink', glob(FCPATH."./assets/upload/kerjasama/$filename.*"));
		}
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	public function update()
    {
        $post = $this->input->post();
        $this->Id_Informasi = $post["id_info"];
		
		
		if (!empty($_FILES["gmbr"]["name"])) {
            $this->Gambar = $this->update_image();
        } else {
            $this->Gambar = $post["old_image"];
		}
        $this->db->update_data($this->_table, $this, array('Id_DataKerjasama' => $post['id_info']));
    }
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	
}