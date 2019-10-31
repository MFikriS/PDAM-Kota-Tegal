<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prosedur extends CI_Controller {
	
	private $_table = "prosedur";
	
	public function __construct()
	{
		parent::__construct();
			$this->load->library('session'); 
			$this->load->model('m_prosedur');
			$this->load->library('upload');
			$this->load->helper(array('form', 'url'));
	}
	 
	function do_upload(){
		$config['upload_path'] = './assets/upload/prosedur/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name 
	    $this->upload->initialize($config);
	    if(!empty($_FILES['gmr']['name'])){
	        if ($this->upload->do_upload('gmr')){
	            $data   = $this->upload->data();
	            $image  = $data['file_name']; //get file name
				$id = $this->input->post('id_info');
                $jdl = $this->input->post('jdl');
                $ktrngn = $this->input->post('ktrngn');
				$this->m_prosedur->insert($image,$id,$jdl,$ktrngn,'prosedur');
				redirect('admin/prosedur');
				echo "Upload Successful";
			}else{
				redirect('admin/prosedur');
	            echo "Upload failed. Image file must be gif|jpg|png|jpeg|bmp";
	        }
	                 
	    }else{
			$id = $this->input->post('id_info');
            $jdl = $this->input->post('jdl');
			$this->m_prosedur->insert2($id,$jdl,'prosedur');
			redirect('admin/prosedur');
			echo "Sukses";
		}
	}
	
	function hapus($id_info){
		$this->m_prosedur->hapus($id_info);
		redirect('admin/prosedur');
	}
	
	function edit($id_info)
	{
		$where = array('Id_Prosedur' => $id_info);
		$data['prosedur'] = $this->m_prosedur->edit_data($where,'prosedur')->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_editProsedur',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	function update()
	{
		$config['upload_path'] = './assets/upload/prosedur/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name
	    $this->upload->initialize($config);
		$post = $this->input->post();
		$id = $post["id_info"];
		$data   = $this->upload->data();
	    $image  = $data['file_name']; //get file name
        $this->Id_Prosedur = $post["id_info"];
        $this->Judul_Prosedur = $post["jdl"];
		$kode = array('Id_Prosedur'=> $id);
		$foto = $this->db->get_where('prosedur',$kode);
		
		if (!empty($_FILES["gmr"]["name"])) {
			$this->load->library('upload',$config);
            $this->Gambar = $this->upload->do_upload('gmr');
			$data   = $this->upload->data();
	        $image  = $data['file_name']; //get file name
			$this->Gambar = $image;
        } else {
            $this->Gambar = $post["old_image"];
		}
        $this->db->update($this->_table, $this, array('Id_Prosedur' => $post['id_info']));
		redirect('admin/prosedur');
	
	}
	
	function hapus_gambar($id_info)
	{
		$this->m_prosedur->hapus_gambar($id_info);
		redirect('admin/prosedur');
	}
}