<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdam extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('M_datateknik');
		$this->load->model('M_berita');
		$this->load->model('M_pegawai');
		$this->load->model('m_datUm');
		$this->load->model('m_profil');
	
		
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function index()
	{
			
		$this->load->model('m_dataKerjasama');
		$data['informasi'] = $this->M_berita->getGambarByTipe();
		$data['informasi2'] = $this->M_berita->getInformasiTerbaru();
		$data['kerjasama'] = $this->m_dataKerjasama->tampil_data();
		// $this->M_berita->getInformasiTerbaru();
		$this->load->view('templates/header');
		$this->load->view('templates/header2');
		$this->load->view('home', $data);
		//$this->load->view('home');
		$this->load->view('templates/footer');
		
	}
	
	public  function profil_sejarah()
	{
		$data['ft_prshn'] = $this->m_profil->tampil_data()->result();
	   	$this->load->view('templates/header');
	    $this->load->view('templates/header2');
	    $this->load->view('sjrhdskrp',$data);
	    $this->load->view('templates/footer');
	}
	    
	public function profil_visimisi()
	{
		$data['vm'] = $this->m_profil->tampil_data()->result();
		$this->load->view('templates/header');
   		$this->load->view('templates/header2');
   		$this->load->view('visi',$data);
		$this->load->view('templates/footer');
	}
	
	public function datakepegawaian()
	{
		$this->load->model('m_datPeg');
		$this->load->model('m_datUm');
		$data['jml_peg'] = $this->m_datPeg->getJmlPeg();
		$data['strktr_orgns'] = $this->m_datUm->tampil_data()->result();
		
    	$this->load->view('templates/header');
    	$this->load->view('templates/header2');
    	$this->load->view('kepegawaian',$data);
    	$this->load->view('templates/footer');
	}
		
	public function dataumum()
	{
		$data['direktur'] = $this->M_pegawai->getDirektur();
		$data['kpelanggan'] = $this->M_pegawai->getPelanggan();
		$data['srek'] = $this->M_pegawai->getPelanggan1();
		$data['shum'] = $this->M_pegawai->getPelanggan2();
		
		$data['kkeuangan'] = $this->M_pegawai->getKeuangan();
		$data['sbuku'] = $this->M_pegawai->getKeuangan1();
		$data['skasir'] = $this->M_pegawai->getKeuangan2();
		$data['speg'] = $this->M_pegawai->getKeuangan3();
		$data['sgud'] = $this->M_pegawai->getKeuangan4();
		
		$data['ktehnik'] = $this->M_pegawai->getTehnik();
		$data['sper'] = $this->M_pegawai->getTehnik1();
		$data['speral'] = $this->M_pegawai->getTehnik2();
		$data['sdist'] = $this->M_pegawai->getTehnik3();
		$data['ssum'] = $this->M_pegawai->getTehnik4();
		
		$data['data_umum'] = $this->m_datUm-> getAllDatUm();
    	$this->load->view('templates/header');
    	$this->load->view('templates/header2');
    	$this->load->view('data_umum',$data);
    	$this->load->view('templates/footer');
	}
	
	public function datateknik1()
	{
		$data['data_teknik'] = $this->M_datateknik->getAllDattek();
    	$this->load->view('templates/header');
    	$this->load->view('templates/header2');
    	$this->load->view('kptsprdk',$data);
    	$this->load->view('templates/footer');
	}
	
	public function datateknik2()
	{
    		$this->load->view('templates/header');
    		$this->load->view('templates/header2');
    		$this->load->view('distribusi');
    		$this->load->view('templates/footer');
	}
	
	public function prosedur1()
	{
		$this->load->model('m_prosedur');
		$data['prosedur1'] = $this->m_prosedur->getProsedur1();
    	$this->load->view('templates/header');
    	$this->load->view('templates/header2');
    	$this->load->view('v_prosedur1',$data);
    	$this->load->view('templates/footer');
	}
	
	public function prosedur2()
	{
		$this->load->model('m_prosedur');
		$data['prosedur2'] = $this->m_prosedur->getProsedur2();
    	$this->load->view('templates/header');
    	$this->load->view('templates/header2');
    	$this->load->view('v_prosedur2',$data);
    	$this->load->view('templates/footer');
	}
	
	public function prosedur3()
	{
		$this->load->model('m_prosedur');
		$data['prosedur3'] = $this->m_prosedur->getProsedur3();
    	$this->load->view('templates/header');
    	$this->load->view('templates/header2');
    	$this->load->view('v_prosedur3',$data);
    	$this->load->view('templates/footer');
	}
	
	public function prosedur4()
	{
		$this->load->model('m_prosedur');
		$data['prosedur4'] = $this->m_prosedur->getProsedur4();
    	$this->load->view('templates/header');
    	$this->load->view('templates/header2');
    	$this->load->view('v_prosedur4',$data);
    	$this->load->view('templates/footer');
	}
	
	public function prosedur5()
	{
		$this->load->model('m_prosedur');
		$data['prosedur5'] = $this->m_prosedur->getProsedur5();
    	$this->load->view('templates/header');
    	$this->load->view('templates/header2');
    	$this->load->view('v_prosedur5',$data);
    	$this->load->view('templates/footer');
	}
	
	public function simulasi_tarif()
	{
		$this->load->model('M_tarif');
		$data['tarif'] = $this->M_tarif->tampil_data()->result();
    	$this->load->view('templates/header');
    	$this->load->view('templates/header2');
    	$this->load->view('v_simulasiTarif',$data);
    	$this->load->view('templates/footer');
	}
	
}
