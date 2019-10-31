<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatPeg extends CI_Controller {
	
	private $_table = "pegawai";
	
	public function __construct()
	{
		parent::__construct();
			$this->load->library('session'); 
			$this->load->model('m_datPeg');
			$this->load->library('upload');
			$this->load->helper(array('form', 'url'));
	}
	
	public function tambah()
    {
		$config['upload_path'] = './assets/upload/pegawai/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name 
	    $this->upload->initialize($config);
	    if(!empty($_FILES['ft']['name'])){
	        if ($this->upload->do_upload('ft')){
	            $data   = $this->upload->data();
	            $image  = $data['file_name']; //get file name
                $nip = $this->input->post('nip');
                $nm = $this->input->post('nm');
                $jbtn = $this->input->post('jbtn');
				$this->m_datPeg->insert($image,$nip,$jbtn,$nm,'pegawai');
				redirect('admin/data_pegawai');
				echo "Upload Successful";
			}else{
				redirect('admin/data_pegawai');
	            echo "Upload failed. Image file must be gif|jpg|png|jpeg|bmp";
	        }
	                 
	    }else{
			redirect('admin/data_pegawai');
			echo "Foto tidak ada";
		}
    }
	
	function hapus($id_info){
		$this->m_datPeg->hapus($id_info);
		redirect('admin/data_pegawai');
	}
	
	function edit($id_info)
	{
		$where = array('Id_DataPegawai' => $id_info);
		$data['pegawai'] = $this->m_datPeg->edit_data($where,'pegawai')->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_editDatPeg',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	function editjmlPeg($id_info)
	{
		$where = array('Id_DataPegawai' => $id_info);
		$data['pegawai'] = $this->m_datPeg->edit_data($where,'pegawai')->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_editJmlPeg',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	function updateJmlPeg()
	{
		$data = array(
                'Jml_Pegawai_Tetap' => $this->input->post('ttp'),
                'Jml_Pegawai_Tidak_Tetap' => $this->input->post('tdk_ttp'),
            );
 
		$where = array(
			'Id_DataPegawai' => $this->input->post('id_info'),
		);
	 
		$this->m_datPeg->update_data($where,$data,'pegawai');
		redirect('admin/data_pegawai');
	}
	
	function update()
	{
		$config['upload_path'] = './assets/upload/pegawai'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name
	    $this->upload->initialize($config);
		$post = $this->input->post();
		$id = $post["id_info"];
		$data   = $this->upload->data();
	    $image  = $data['file_name']; //get file name
        $this->Id_DataPegawai = $post["id_info"];
        $this->NIP = $post["nip"];
		$this->Nama_pegawai = $post["nm"];
		$this->Jabatan = $post["jbtn"];
		$kode = array('Id_DataPegawai'=> $id);
		$foto = $this->db->get_where('pegawai',$kode);
		
		if (!empty($_FILES['ft']['name'])) {
			$this->load->library('upload',$config);
            $this->Foto_pegawai = $this->upload->do_upload('ft');
			$data   = $this->upload->data();
	        $image  = $data['file_name']; //get file name
			$this->Foto_pegawai = $image;
        } else {
            $this->Foto_pegawai = $post["old_image"];
		}
        $this->db->update($this->_table, $this, array('Id_DataPegawai' => $post['id_info']));
		redirect('admin/data_pegawai');
	
	}
	
	function hapus_gambar($id_info)
	{
		$this->m_datPeg->hapus_gambar($id_info);
		redirect('admin/data_pegawai');
	}
	
}