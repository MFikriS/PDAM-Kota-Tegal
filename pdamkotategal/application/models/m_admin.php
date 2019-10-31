<?php

class M_admin extends CI_Model{
	public $table = 'admin';

	public function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
}