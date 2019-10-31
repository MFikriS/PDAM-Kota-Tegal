<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
    $this->load->model('M_feedback');
	
		
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
 
        // if form was submitted and given captcha word matches one in session
       
       		if($this->input->post('submit')){
       			$inputCaptcha = $this->input->post('captcha');
       			$sessCaptcha = $this->session->userdata('captchaCode');
       			if ($inputCaptcha === $sessCaptcha) {
       				# code...
       				$sam = $this->input->post('sam');
					$kritik = $this->input->post('kritik');
					$saran = $this->input->post('saran');
					 
					date_default_timezone_set('Asia/Jakarta');
					$date = date('Y-m-d');
					$time = date('H:i:s');
					  
					  $data = array(
					   'Id_Admin' => "pdam456",
					   'No_Sambungan' => $sam,
					   'Tgl_Input' => $date,
					   'Jam_Input' => $time,
					   'Kritik' => $kritik,
					   'Saran' => $saran,
					   );
					  $this->M_feedback->input_data($data,'feedback');
					  $this->session->set_flashdata('message', 'Sukses Input Feedback');
					  redirect('Feedback');
				}else{
					$this->session->set_flashdata('messages', 'kode keamanan tidak cocok');

				}
			}


           
 
            $vals = array(
                'img_path'	 => 'captcha/',
                'img_url'	 => base_url().'captcha/',
                'img_width'	 => '200',
                'img_height' => 50,
                'border' => 0, 
                'word_length' =>8,
                'font_size' =>55,
                'expiration' => 7200
            );
 
            // create captcha image
            $cap = create_captcha($vals);
 
            // store image html code in a variable
            $data['image'] = $cap['image'];
 
            // store the captcha word in a session

            $this->session->unset_userdata('captchaCode');

            $this->session->set_userdata('captchaCode', $cap['word']);
 
 
        

		$this->load->view('templates/header');
		$this->load->view('templates/header2');
		$this->load->view('v_feedback',$data);
		
		
		//$this->load->view('home');
		$this->load->view('templates/footer');
		
	}

	public function refresh(){
		$vals = array(
                'img_path'	 => './captcha/',
                'img_url'	 => base_url().'captcha/',
                'img_width'	 => '200',
                'img_height' => 50,
                'border' => 0, 
                'word_length' =>8,
                'font_size' =>16,
                'expiration' => 7200
            );
 
            // create captcha image
            $cap = create_captcha($vals);

            $this->session->unset_userdata('captchaCode');

            $this->session->set_userdata('captchaCode', $cap['word']);

            echo $cap['image'];
 
	}
	
	function cetak(){
		 ob_start();
    $data['feedback'] = $this->M_feedback->view();
    $this->load->view('admin/v_cetakF', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data_KritikSaran_Pelanggan.pdf', 'D');
	}


	
	function hapus($id_info){
		$where = array('Id_Feedback' => $id_info);
		$this->M_feedback->hapus($where,'feedback');
		redirect('admin/feedback');
	}
	
	function deleteAll(){
		$this->M_feedback->deleteAll();
		redirect('admin/feedback');
	}
	
	function delete_multiple() {
			$this->M_feedback->remove_checked();
			redirect('admin/feedback');
	}
	

}

