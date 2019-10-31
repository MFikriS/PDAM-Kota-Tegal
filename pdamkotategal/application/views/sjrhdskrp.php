<head>


 <link href="assets/css/bootstrap.css" rel="stylesheet">
 <link href="assets/css/style.css" rel="stylesheet">
     <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


  <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <style type="text/css">
	
		@media (max-width: 360px) {
	.logo {
		width: 100;
		height: 68;
		}
	.my-sm-0{
		height: 30;
		font-size: 11px;
	}
	.navbar-toggler {
		height: 30px;
	}
		
	.navbar-toggler-icon {
		height: 20px;
		width: 20px;
	}
	.mr-sm-2{
		height: 30px;
	}
	h2 {
		font-size: 10;
		font-family: Oldenburg;
		margin-left: 80px;
	}
	h1 {
		font-size: 10;
		font-family: Oldenburg;
		margin-top: -64px;
		margin-left: 100px;
	}
}

@media (max-width: 414px) {
	.logo {
		width: 100;
		height: 68;
		}
	.my-sm-0{
		height: 30;
		font-size: 11px;
	}
	.navbar-toggler {
		height: 30px;
	}
		
	.navbar-toggler-icon {
		height: 20px;
		width: 20px;
	}
	.mr-sm-2{
		height: 30px;
	}
	h2 {
		font-size: 12px;
		font-family: Oldenburg;
		margin-left: 80px;
	}
	h1 {
		font-size: 12px;
		font-family: Oldenburg;
		margin-top: -64px;
		margin-left: 100px;
	}
}
    .card-panel{
        transition: box-shadow .25s;
        padding:24px 24px;
        
        border-radius: 6px;
        background: #FFFFFF;
         
    margin: 4rem auto 8.1rem auto;
    margin-top: 2px;
    margin-left:10px;
    margin-right:10px;

    }

    body{
        background: #C0D9FF;
    }
	@media (max-width: 375px) {
	.logo {
		width: 110;
		height: 76;
		}
		.my-sm-0{
		height: 30;
		font-size: 11px;
	}
	.navbar-toggler {
		height: 30px;
	}
		
	.navbar-toggler-icon {
		height: 20px;
		width: 20px;
	}
	.mr-sm-2{
		height: 30px;
	}
	h2 {
		font-size: 13;
		font-family: Oldenburg;
		margin-left: 80px;
	}
	h1 {
		font-size: 13;
		font-family: Oldenburg;
		margin-top: -64px;
		margin-left: 100px;
	}
}
    </style>
</head>


<div class="container-fluid">
<div class="row mt-5">
        <div class="col">
        <center>
        <div class="card-panel white">
            <h3 class="text-center">Sejarah PDAM Kota Tegal</h3>
			<?php
                foreach ($ft_prshn as $d) {
            ?>
				<?php echo '<img src="' . base_url().'assets/upload/profil/' . $d->Foto_Perusahaan . '" width="300" height="300" style="margin-top: 10px;"/>'; ?>
			<?php
                }
            ?></br></br>

            &nbsp
            <div class="ngalir">
	            <p style="text-align: justify;">PDAM sudah ada sejak zaman Belanda dimana mereka  berhasil menemukan sumber air yaitu di daerah Bulakan Bumijaya. Di karenakan kebutuhan air bersih pada saat itu sangat di butuhkan maka di bangunlah saluran air dari daerah  pegunungan sampai dengan daera kota. Oleh pihak Belanda saluran air tersebut dinamakan “ WATER LEIDANG BEDRRIEF OF PROVINCE MEDDEN JAVA” yang berarti saluran air minum yang berada di dalam kekuasaan pemerintah provinsi. Saluran air minum tersebut di bangun pada tahun 1917 sampai dengan tahun 1933 dan langsung di operasikan. Setelah bangsa Jepang datang dan memenangi peperangan melawan Belanda saluran air yang adapun dikuasai oleh pihak Jepang . Oleh Jepang saluran air tersebut di ganti dengan nama “SUWIDA” SU artinya Air dan WIDA artinya pipa, sehingga dapat diartikan pipa yang menyalurkan air. Setelah penjajahan Jepang berakhir SUWIDA berubah nama menjadi Dinas Saluran Air Minum  di bawah pimpinan Kepala Dinas.  Pada tanggal 1 Januari 1976 perusahaan ini terus berkembang karena kebutuhan masyarakt aka air  bersih terus bertambah dan meluas hingga ke daerah lain. Maka Pemerintah daerah mendirikan kantor baru yang terletak di Jalan Hangtuah No.29 Tegal dan diresmikan pada tanggal 12 Februari 1979 oleh Bapak Sarjoe selaku Walikota Madya Daerah Tingkat II Tegal pada waktu itu hingga sekarang</p>
                &nbsp
	            	
            <h3 class="text-center">Deskripsi PDAM Kota Tegal</h3>
            &nbsp


	            <p style="text-align: justify;">PDAM didirikan dengan maksud dan tujuan untuk turut serta melaksanakan pembangunan ekonomi nasional umumnya dalam rangka peningkatan kesejahteraan dan memenuhi kbutuhan rakyat  dan tenaga kerja dalam perusahaan menuju masyarakat adil dan makmur berdasarkan Pancasila dan UUD 1945.
                </p>
                <p style="text-align: justify;">

                    PDAM merupakan pelayanan terhadap masyarakat (Public Service) yang bertuuan untuk menyediakan air bersih dan sehat yang mencakupi kebutuhan masyarakat daerah dan sekitarnya berusaha di bidang idstribusi air yang  berhubungan dengan penyediaan air bersih dan sehat serta dpat melakukan kerjasama dengan Badan atau Instansi lain baik Pemerintah maupun Swasta.
                </p>
            </div>
            

            

            </div>

            </center>
        </div>
        </div>
    </div>
