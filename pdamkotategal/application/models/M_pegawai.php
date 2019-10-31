<?php
class M_pegawai extends CI_model
{

	// public $informasi = 'informasi';
	public $direktur ='pegawai';

	public $kpelanggan ='pegawai';
	public $srek ='pegawai';
	public $shum ='pegawai';
	


	public $kkeuangan ='pegawai';
	public $sbuku ='pegawai';
	public $skasir ='pegawai';
	public $speg ='pegawai';
	public $sgud ='pegawai';
	

	public $ktehnik ='pegawai';
	public $sper ='pegawai';
	public $speral ='pegawai';
	public $sdist ='pegawai';
	public $ssum ='pegawai';

	public function getDirektur()
	{
		$direktur = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Direktur'");
        return $direktur->result_array();
	}

	public function getPelanggan()
	{
		$kpelanggan = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kabag Hubungan Pelanggan'");
        return $kpelanggan->result_array();
	}

	public function getPelanggan1()
	{
		$srek = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kasubag Rekening'");
        return $srek->result_array();
	}

	public function getPelanggan2()
	{
		$shum = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kasubag Humas'");
        return $shum->result_array();
	}



	public function getKeuangan()
	{
		$kkeuangan = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kabag Administrasi dan Keuangan'");
        return $kkeuangan->result_array();
	}

	public function getKeuangan1()
	{
		$sbuku = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kasubag Pembukuan'");
        return $sbuku->result_array();
	}

	public function getKeuangan2()
	{
		$skasir = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kasubag Kasir dan Tagih'");
        return $skasir->result_array();
	}

	public function getKeuangan3()
	{
		$speg = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kasubag Umum dan Kepegawaian'");
        return $speg->result_array();
	}

	public function getKeuangan4()
	{
		$sgud = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kasubag Gudang'");
        return $sgud->result_array();
	}

	public function getTehnik()
	{
		$ktehnik = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kabag Teknik'");
        return $ktehnik->result_array();
	}

	public function getTehnik1()
	{
		$sper = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kasubag perencana'");
        return $sper->result_array();
	}

	public function getTehnik2()
	{
		$speral = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kasubag peralatan'");
        return $speral->result_array();
	}

	public function getTehnik3()
	{
		$sdist = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kasubag distribusi'");
        return $sdist->result_array();
	}

	public function getTehnik4()
	{
		$ssum = $this->db->query("SELECT * FROM pegawai WHERE Jabatan='Kasubag sumber'");
        return $ssum->result_array();
	}


}

?>
