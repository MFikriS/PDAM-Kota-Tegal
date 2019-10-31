<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	
	private $_table = 'profil';
	
	public function __construct()
	{
		parent::__construct();
			$this->load->library('session'); 
			$this->load->model('m_profil');
			$this->load->library('upload');
			$this->load->helper(array('form', 'url'));
	}
	
	public function tambah()
    {	
		$config['upload_path'] = './assets/upload/profil/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name 
	    $this->upload->initialize($config);
	    if(!empty($_FILES['gmbr']['name'])){
	        if ($this->upload->do_upload('gmbr')){
	            $data   = $this->upload->data();
	            $image  = $data['file_name']; //get file name
				$id = $this->input->post('id_info');
                $sjrh = $this->input->post('sjrh');
                $dskrps = $this->input->post('dskrps');
				$this->m_profil->insert($image,$id,$sjrh,$dskrps,$vs,$ms,'profil');
				redirect('admin/profil');
				echo "Upload Successful";
			}else{
				redirect('admin/profil');
	            echo "Upload failed. Image file must be gif|jpg|png|jpeg|bmp";
	        }
	                 
	    }else{
			redirect('admin/profil');
			echo "Sukses";
		}
    }
	
	function hapus($id_info)
	{
		$this->m_profil->hapus($id_info);
		redirect('admin/profil');
	}
	
	function edit($id_info)
	{
		$where = array('Id_Profil' => $id_info);
		$data['profil'] = $this->m_profil->edit_data($where,'profil')->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_editProfil',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	function edit_vm($id_info)
	{
		$where = array('Id_Profil' => $id_info);
		$data['profil'] = $this->m_profil->edit_data($where,'profil')->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_editVM',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	function update_VM()
	{
		$data = array(
                'Id_Profil' => $this->input->post('id_info'),
                'Visi' => $this->input->post('vs'),
                'Misi1' => $this->input->post('ms1'),
                'Misi2' => $this->input->post('ms2'),
                'Misi3' => $this->input->post('ms3'),				
                'Misi4' => $this->input->post('ms4'),
                'Misi5' => $this->input->post('ms5'),
                'Misi6' => $this->input->post('ms6'),
                'Misi7' => $this->input->post('ms7'),
                'Misi8' => $this->input->post('ms8'),
                'Misi9' => $this->input->post('ms9'),
                'Misi10' => $this->input->post('ms10'),
            );
 
	$where = array(
		'Id_Profil' => $this->input->post('id_info'),
	);
 
	$this->m_profil->update_data($where,$data,'profil');
	redirect('admin/profil');
	}
	
	function update()
	{
		$config['upload_path'] = './assets/upload/profil'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name
	    $this->upload->initialize($config);
		$post = $this->input->post();
		$id = $post["id_info"];
		$data   = $this->upload->data();
	    $image  = $data['file_name']; //get file name
        $this->Id_Profil = $post["id_info"];
        $this->Sejarah = $post["sjrh"];
		$this->Deskripsi_Perusahaan = $post["dskrps"];
		$kode = array('Id_Profil'=> $id);
		$foto = $this->db->get_where('profil',$kode);
		
		if (!empty($_FILES['gmbr']['name'])) {
			$this->load->library('upload',$config);
            $this->Foto_Perusahaan = $this->upload->do_upload('gmbr');
			$data   = $this->upload->data();
	        $image  = $data['file_name']; //get file name
			$this->Foto_Perusahaan = $image;
        } else {
            $this->Foto_Perusahaan = $post["old_image"];
		}
        $this->db->update($this->_table, $this, array('Id_Profil' => $post['id_info']));
		redirect('admin/profil');
	
	}
	
	function hapus_gambar($id_info)
	{
		$this->m_profil->hapus_gambar($id_info);
		redirect('admin/profil');
	}
}