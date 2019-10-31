<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_admin');
		$this->load->library(array('pagination'));
	
		
		if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/pdamkotategal/login';
				</script>";
		}
		
	}
	
	public function index()
	{
		$this->load->model('m_info');
		$data['informasi2'] = $this->m_info->tampil_data();
		$data['informasi'] = $this->m_info->getPost();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_beranda',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	public function login()
	{
		$this->load->view('templates/admin/header_admin');
		$this->load->view('admin/v_login');
	}
	
	public function draft()
	{
		$this->load->model('m_info');
		$data['informasi2'] = $this->m_info->tampil_data();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_draftInfo',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	public function prosedur()
	{
		$this->load->model('m_prosedur');
		$data['prosedur'] = $this->m_prosedur->tampil_data()->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_prosedur',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	public function data_umum()
	{
		$this->load->model('m_datUm');
		$data['data_umum'] = $this->m_datUm->tampil_data()->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_data_umum',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	public function data_teknik()
	{
		$this->load->model('m_datTek');
		$data['data_teknik'] = $this->m_datTek->tampil_data()->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_data_teknik',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	public function data_pegawai()
	{
		$this->load->model('m_datPeg');
		$data['data_pegawai'] = $this->m_datPeg->tampil_data()->result();
		$data['jml_peg'] = $this->m_datPeg->getJmlPeg();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_data_pegawai',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	public function profil()
	{
		$this->load->model('m_profil');
		$data['profil'] = $this->m_profil->tampil_data()->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_profil',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	public function feedback()
	{
		$this->load->model('M_feedback');
		$this->load->library('pagination');  
		
		//pagination
        $config['base_url'] = site_url('admin/feedback'); //site url
        $config['total_rows'] = $this->db->count_all('feedback'); //total row
        $config['per_page'] = 10;  //record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['feedback'] = $this->M_feedback->get_feedback($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_feedback',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	public function maintenance()
	{
		$this->config->load('config');
		$this->config->set_item(maintenance_mode, TRUE);
		redirect('admin');
	}
	
	public function data_kerjasama()
	{
		$this->load->model('m_dataKerjasama');
		$data['kerjasama'] = $this->m_dataKerjasama->tampil_data();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_kerjasama',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	public function tarif()
	{
		$this->load->model('M_tarif');
		$data['tarif'] = $this->M_tarif->tampil_data()->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_Tarif',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
}