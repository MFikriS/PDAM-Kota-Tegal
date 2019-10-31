<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatUm extends CI_Controller {
	
	
	private $_table = "data_umum";
	
	public function __construct()
	{
		parent::__construct();
			$this->load->library('session'); 
			$this->load->model('m_datUm');			
			$this->load->library('upload');
			$this->load->helper(array('form', 'url'));
	}
	
	public function tambah()
    {	
        $data = array(
                'Id_DataUmum' => $this->input->post('id_info'),
                'Jml_Pnddk' => $this->input->post('jml_pnddk'),
                'Jml_Pel' => $this->input->post('jml_pel'),
                'Jml_Pel_Aktif' => $this->input->post('jml_pelA'),
            );
        $insert = $this->m_datUm->insert($data,'data_umum');
        redirect('admin/data_umum');
    }
	
	function hapus($id_info)
	{
		$where = array('Id_DataUmum' => $id_info);
		$this->m_datUm->hapus($where,'data_umum');
		redirect('admin/data_umum');
	}
	
	function edit($id_info)
	{
		$where = array('Id_DataUmum' => $id_info);
		$data['data_umum'] = $this->m_datUm->edit_data($where,'data_umum')->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_editDatUm',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	function update()
	{
		$config['upload_path'] = './assets/upload/struktur_organisasi'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name
	    $this->upload->initialize($config);
		$post = $this->input->post();
		$id = $post["id_info"];
		$data   = $this->upload->data();
	    $image  = $data['file_name']; //get file name
        $this->Id_DataUmum = $post["id_info"];
        $this->Jml_Pnddk = $post["jml_pnddk"];
        $this->Jml_Pel = $post["jml_pel"];
		$this->Jml_Pel_Aktif = $post["jml_pelA"];
		$kode = array('Id_DataUmum'=> $id);
		$foto = $this->db->get_where('data_umum',$kode);
		
		if (!empty($_FILES['gmbr']['name'])) {
			$this->load->library('upload',$config);
            $this->Struktur_Organisasi = $this->upload->do_upload('gmbr');
			$data   = $this->upload->data();
	        $image  = $data['file_name']; //get file name
			$this->Struktur_Organisasi = $image;
        } else {
            $this->Struktur_Organisasi = $post["old_image"];
		}
        $this->db->update($this->_table, $this, array('Id_DataUmum' => $post['id_info']));
		redirect('admin/data_umum');
	
	}
	
	function hapus_gambar($id_info)
	{
		$this->m_datUm->hapus_gambar($id_info);
		redirect('admin/data_umum');
	}
	
}