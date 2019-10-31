<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
	
	private $_table = "informasi";
	
	public function __construct()
	{
		parent::__construct();
			$this->load->library('session');
			$this->load->library('upload');
			$this->load->model('m_info');
			$this->load->helper(array('form', 'url'));
	}
	
	function do_upload(){
		$config['upload_path'] = './assets/upload/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name 
	    $this->upload->initialize($config);
	    if(!empty($_FILES['gmbr']['name'])){
	        if ($this->upload->do_upload('gmbr')){
	            $data   = $this->upload->data();
	            $image  = $data['file_name']; //get file name
				$id = $this->input->post('id_info');
				$id_admin = $this->input->post('id_admin');
                $judul = $this->input->post('jdl');
                $tipe = $this->input->post('tipe');
				$isi = $this->input->post('isi');
				$status = "Draft";
				$this->m_info->insert($image,$id,$id_admin,$judul,$tipe,$isi,$status,'informasi');
				redirect('admin');
				echo "Upload Successful";
			}else{
	            echo "Upload failed. Image file must be gif|jpg|png|jpeg|bmp";
	        }
	                 
	    }else{
			echo "Failed, Image file is empty.";
		}
				
	}
	
	function hapus($id_info){
		$this->m_info->hapus($id_info);
		redirect('admin');
	}
	
	function edit($Id_Informasi){
		$where = array('Id_Informasi' => $Id_Informasi);
		$data['informasi'] = $this->m_info->edit_data($where,'informasi')->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_editInfo',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	function baca_selengkapnya($Id_Informasi){
		$where = array('Id_Informasi' => $Id_Informasi);
		$data['informasi'] = $this->m_info->edit_data($where,'informasi')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/header2');
		$this->load->view('v_baca_selengkapnya',$data);
		$this->load->view('templates/footer');
	}
	
	function update()
	{
		$config['upload_path'] = './assets/upload/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name
	    $this->upload->initialize($config);
		$post = $this->input->post();
		$id = $post["id_info"];
		$data   = $this->upload->data();
	    $image  = $data['file_name']; //get file name
        $this->Id_Informasi = $post["id_info"];
		$this->Id_Admin = $post["id_admin"];		
        $this->Judul = $post["jdl"];
		$this->Tipe = $post["tipe"];
		$this->Tgl_Terbit = $post["tgl"];
		$this->Jam_Terbit = $post["jam"];
		$kode = array('Id_Informasi'=> $id);
		$foto = $this->db->get_where('informasi',$kode);
		
		if (!empty($_FILES["gmbr"]["name"])) {
			$this->load->library('upload',$config);
            $this->Gambar = $this->upload->do_upload('gmbr');
			$data   = $this->upload->data();
	        $image  = $data['file_name']; //get file name
			$this->Gambar = $image;
        } else {
            $this->Gambar = $post["old_image"];
		}
        $this->Isi = $post["isi"];
		$this->Tgl_Terbit = $post["tgl"];
		$this->Jam_Terbit = $post["jam"];
        $this->db->update($this->_table, $this, array('Id_Informasi' => $post['id_info']));
		redirect('admin');
	
	}
	
	function posting($Id_Informasi)
	{
		$date = date('Y-m-d');
		$time = date('H:i:s');
		$stat = "POST";
		
		$data = array(
			'Tgl_Terbit' => $date,
			'Jam_Terbit' => $time,
			'Status' => $stat
			);
		
		$where = array(
			'Id_Informasi' => $Id_Informasi,
		);
		
	$this->m_info->update_data($where,$data,'informasi');
	redirect('admin');
	}
	
	function draft($Id_Informasi)
	{
		$stat = "Draft";
		
		$data = array(
			'Status' => $stat
			);
	
	$where = array(
		'Id_Informasi' => $Id_Informasi,
	);
	
	$this->m_info->update_data($where,$data,'informasi');
	redirect('admin');
	
	}
	
	function hapus_gambar($id_info)
	{
		$this->m_info->hapus_gambar($id_info);
		redirect('admin');
	}
}