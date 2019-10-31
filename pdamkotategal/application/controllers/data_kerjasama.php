<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kerjasama extends CI_Controller {
	
	private $_table = "data_kerjasama";
	
	public function __construct()
	{
		parent::__construct();
			$this->load->library('session');
			$this->load->library('upload');
			$this->load->model('m_dataKerjasama');
			$this->load->helper(array('form', 'url'));
	}
	
	function tambah(){
		$config['upload_path'] = './assets/upload/kerjasama'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name 
	    $this->upload->initialize($config);
	    if(!empty($_FILES['gmbr']['name'])){
	        if ($this->upload->do_upload('gmbr')){
	            $data   = $this->upload->data();
	            $image  = $data['file_name']; //get file name
				$id = $this->input->post('id_info');
				$this->m_dataKerjasama->insert($image,'data_kerjasama');
				redirect('admin/data_kerjasama');
				echo "Upload Successful";
			}else{
	            echo "Upload failed. Image file must be gif|jpg|png|jpeg|bmp";
	        }
	                 
	    }else{
			echo "Failed, Image file is empty.";
		}
				
	}
	
	function hapus($id_info){
		$this->m_dataKerjasama->hapus($id_info);
		redirect('admin/data_kerjasama');
	}
	
	function edit($Id_Informasi){
		$where = array('Id_DataKerjasama' => $Id_Informasi);
		$data['kerjasama'] = $this->m_dataKerjasama->edit_data($where,'data_kerjasama')->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_editKerjasama',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	function update()
	{
		$config['upload_path'] = './assets/upload/kerjasama/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name
	    $this->upload->initialize($config);
		$post = $this->input->post();
		$id = $post["id_info"];
		$data   = $this->upload->data();
	    $image  = $data['file_name']; //get file name
        $this->Id_DataKerjasama = $post["id_info"];	
		$kode = array('Id_DataKerjasama'=> $id);
		$foto = $this->db->get_where('data_kerjasama',$kode);
		
		if (!empty($_FILES["gmbr"]["name"])) {
			$this->load->library('upload',$config);
            $this->Gambar = $this->upload->do_upload('gmbr');
			$data   = $this->upload->data();
	        $image  = $data['file_name']; //get file name
			$this->Gambar = $image;
        } else {
            $this->Gambar = $post["old_image"];
		}
        $this->db->update($this->_table, $this, array('Id_DataKerjasama' => $post['id_info']));
		redirect('admin/data_kerjasama');
	
	}
	
	function hapus_gambar($id_info)
	{
		$this->m_dataKerjasama->hapus_gambar($id_info);
		redirect('admin/data_kerjasama');
	}
}