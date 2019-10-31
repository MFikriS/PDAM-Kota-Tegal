<?php
class M_berita extends CI_model
{

	// public $informasi = 'informasi';
	public $informasi ='informasi';
	public $informasi2 ='informasi';

	public function getInformasiTerbaru()
	{
		//use query builder to get data table "admin"
		
		$informasi2 = $this->db->query("SELECT * FROM informasi WHERE Tipe='Biasa' AND Status='Post'");
        return $informasi2->result_array();
	}



	public function getGambarByTipe()
	{
		//get data admin based on id 
		

         $informasi = $this->db->query("SELECT * FROM `informasi` WHERE Tipe='Penting' AND Status='Post'");
        return $informasi->result_array();
	}

	function data($number,$offset){
		return $query = $this->db->get('informasi',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('informasi')->num_rows();
	}
	
	
		function lengkap($where,$table){		
		return $this->db->get_where($table,$where);
	}

}

?>