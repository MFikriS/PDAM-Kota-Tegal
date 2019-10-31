<?php
class M_tagihan extends CI_model
{


	
		public function cek($no,$where) {
		return $this->db->get_where($no,$where);
		}
	


}

?>