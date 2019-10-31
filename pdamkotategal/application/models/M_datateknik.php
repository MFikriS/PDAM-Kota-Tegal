<?php
class M_datateknik extends CI_model
{

	public $data_teknik = 'data_teknik';

	public function getAllDattek()
	{
		//use query builder to get data table "admin"
		$data = $this->db->get('data_teknik');
		return $data->result_array();
	}


}

?>