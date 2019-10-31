<head>
 <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php base_url(); ?>assets/css/style.css" type="text/css" />
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<style type="text/css">
      .navbar-inverse{
  background-color:  #4A93FF;
       }

       .text-coba{
        color: #FFFFFF;
       }

    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-inverse">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link text-white" href="<?php echo base_url('pdam') ?>">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item " href="<?php echo base_url('Pdam/profil_sejarah') ?>">Deskripsi dan Sejarah PDAM</a>
          <a class="dropdown-item" href="<?php echo base_url('Pdam/profil_visimisi') ?>">Visi dan Misi</a>
          <a class="dropdown-item " href="<?php echo base_url('Pdam/datakepegawaian') ?>">Kepegawaian</a>
        </div>
      </li>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Informasi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="<?php echo site_url('Pdam/dataumum') ?>">Data Umum</a>
          <a class="dropdown-item " href="<?php echo site_url('Pdam/datateknik1') ?>">Kapasitas Produksi</a>
          <a class="dropdown-item " href="<?php echo site_url('Pdam/datateknik2');?>">Cakupan Wilayah</a>
          <a class="dropdown-item " href="<?php echo site_url('Pdam/simulasi_tarif');?>">Simulasi Tarif</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Layanan
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="<?php echo site_url('Pdam/prosedur1') ?>">Prosedur Menjadi Pelanggan</a>
          <a class="dropdown-item " href="<?php echo site_url('Pdam/prosedur2') ?>">Prosedur Berhenti Sementara</a>
          <a class="dropdown-item" href="<?php echo site_url('Pdam/prosedur3') ?>">Prosedur Pembukaan Kembali</a>
          <a class="dropdown-item " href="<?php echo site_url('Pdam/prosedur4') ?>">Prosedur Balik Nama</a>
        </div>
      </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo base_url('Feedback') ?>">Kritik dan Saran</a>
      </li>

    </ul>
  </div>
</nav>

</body>