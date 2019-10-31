<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_admin');
	}
	
	public function index()
	{
		$this->load->view('templates/admin/header_admin');
		$this->load->view('admin/v_login');
	}
	
	public function validasi()
	{
		$eml = $this->input->post('email');
		$pass = $this->input->post('password');
		$where = array(
			'Id_Admin' => $eml,
			'Password' => md5($pass)
			);
		$cek = $this->m_admin->cek_login("admin",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'Id_Admin' => $eml,
				'status' => "login"
				);
				
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('success', 'Success Message...');  
			redirect(base_url('admin'));
		} else {
			$this->session->set_flashdata('sukses', 'Gagal Login!'); 
			redirect(base_url('login'));
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}

?>
