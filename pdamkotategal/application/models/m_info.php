<?php

class M_info extends CI_Model{
	
	private $_table = "informasi";
	public $informasi ='informasi';
	
	public function tampil_data(){
		$informasi2 = $this->db->query("SELECT * FROM informasi WHERE Status='Draft'");
        return $informasi2->result_array();
	}
	
	public function getPost(){
		$informasi = $this->db->query("SELECT * FROM informasi WHERE Status='POST'");
        return $informasi->result_array();
	}
	
	public function insert($image,$id,$id_admin,$judul,$tipe,$isi,$status){
		$data = array(
			'Id_Informasi' => $id,
			'Id_Admin' => $id_admin,
                'Judul' => $judul,
                'Tipe' => $tipe,
                'Gambar' => $image,
				'Isi' => $isi,
				'Status' => "Draft",
				'Tgl_Terbit' => "",
				'Jam_Terbit' => "",
			);
		$result=$this->db->insert('informasi',$data);
		return $result;
	}
	
	public function getById($id_info)
    {
        return $this->db->get_where($this->_table, ["Id_Informasi" => $id_info])->row();
    }
	
	public function draft()
    {
        return $this->db->get_where($this->_table, ["Status" => "Draft"])->row();
    }
	
	public function post()
    {
        return $this->db->get_where($this->_table, ["Status" => "POST"])->row();
    }
	
	function hapus_gambar($id_info){
		$this->_deleteImage($id_info);
	}
	
	function hapus($id_info){
		$this->_deleteImage($id_info);
        return $this->db->delete($this->_table, array("Id_Informasi" => $id_info));
	}
		
	private function _deleteImage($id_info)
	{
		$data = $this->getById($id_info);
		if ($data->Gambar != "default.jpg") {
			$filename = explode(".", $data->Gambar)[0];
			return array_map('unlink', glob(FCPATH."./assets/upload/$filename.*"));
		}
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	public function update()
    {
        $post = $this->input->post();
        $this->Id_Informasi = $post["id_info"];
        $this->Judul = $post["jdl"];
		$this->Tipe = $post["tipe"];
		
		
		if (!empty($_FILES["gmbr"]["name"])) {
            $this->Gambar = $this->update_image();
        } else {
            $this->Gambar = $post["old_image"];
		}
        $this->Isi = $post["isi"];
		$this->Tgl_Terbit = "";
		$this->Jam_Terbit = "";
        $this->db->update_data($this->_table, $this, array('Id_Informasi' => $post['id_info']));
    }
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}