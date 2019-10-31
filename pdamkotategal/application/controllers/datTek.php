<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatTek extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
			$this->load->library('session'); 
			$this->load->model('m_datTek');
			$this->load->helper(array('form', 'url'));
	}
	
	public function tambah()
    {	
        $data = array(
                'Id_DataTeknik' => $this->input->post('id_info'),
                'Sumber_Air' => $this->input->post('smbr_air'),
                'Tersedia' => $this->input->post('trsd'),
                'Dimanfaatkan' => $this->input->post('dmnftkn'),
            );
        $insert = $this->m_datTek->insert($data,'data_teknik');
        redirect('admin/data_teknik');
    }
	
	function hapus($id_info)
	{
	$where = array('Id_DataTeknik' => $id_info);
		$this->m_datTek->hapus($where,'data_teknik');
		redirect('admin/data_teknik');
	}
	
	function edit($id_info)
	{
		$where = array('Id_DataTeknik' => $id_info);
		$data['data_teknik'] = $this->m_datTek->edit_data($where,'data_teknik')->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_editDatTek',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	function update()
	{
		$data = array(
                'Id_DataTeknik' => $this->input->post('id_info'),
                'Sumber_Air' => $this->input->post('smbr_air'),
                'Tersedia' => $this->input->post('trsd'),
                'Dimanfaatkan' => $this->input->post('dmnftkn'),
            );
 
	$where = array(
		'Id_DataTeknik' => $this->input->post('id_info'),
	);
 
	$this->m_datTek->update_data($where,$data,'data_teknik');
	redirect('admin/data_teknik');
	}
}