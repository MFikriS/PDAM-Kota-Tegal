<?php
class M_feedback extends CI_model
{
	
	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 
	public function tampil_data($limit, $start){
		return $this->db->get('feedback', $limit, $start);
	}
	
	
	 public function get_feedback($limit, $start) {
        $query = $this->db->get('feedback', $limit, $start);
        return $query;
	 }
 
	public function get_total() {
        return $this->db->count_all('feedback');
    }
	
	public function view(){
		return $this->db->get('feedback')->result();
	}
	
	function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function deleteAll(){
		$this->db->empty_table('feedback');
	}
	
	function remove_checked() {
		$action = $this->input->post('action');
		if ($action == "delete") {
			$delete = $this->input->post('msg');
			for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('Id_Feedback', $delete[$i]);
				$this->db->delete('feedback');
			}
		}
	}
	
}





?>