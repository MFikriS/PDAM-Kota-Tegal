<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="assets/admin/css/style.css" rel="stylesheet" type="text/css">
		<link href="assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    </head>
</html>

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
			<img src="<?php echo base_url().'assets/admin/gambar/logo.png'?>" style="width: 96%; float: center;">
            <h3 style="text-align: center; color: black;">PDAM Kota Tegal</h3>
        </div>
        <ul class="list-unstyled components">
            <li>
				<a href="<?php echo base_url().'admin'?>">Beranda</a>
            </li>
			<li>
				<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Informasi</a>
				<ul class="collapse list-unstyled" id="homeSubmenu">
					<li><a href="<?php echo base_url().'admin/draft'?>">Draft</a></li>
					<li><a href="<?php echo base_url().'admin/prosedur'?>">Prosedur</a></li>
					<li><a href="<?php echo base_url().'admin/tarif'?>">Tarif</a></li>
				</ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Data</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="<?php echo base_url().'admin/data_umum'?>">Data Umum</a></li>
                    <li><a href="<?php echo base_url().'admin/data_teknik'?>">Data Teknik</a></li>
                    <li><a href="<?php echo base_url().'admin/data_pegawai'?>">Data Pegawai</a></li>
                    <li><a href="<?php echo base_url().'admin/data_kerjasama'?>">Data Kerjasama</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url().'admin/profil'?>">Profil</a>
            </li>
            <li>
                <a href="<?php echo base_url().'admin/feedback'?>">Kritik & Saran</a>
            </li>
        </ul>
        <ul class="list-unstyled bawah">
            <li><a href="<?php echo base_url().'login/logout'?>" class="logout">Logout</a></li>
        </ul>
    </nav>
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="glyphicon glyphicon-align-left"></i>
                            <span>Menu</span>
                            </button>
                    </div>
                        <center><h3>Selamat datang <?php echo $this->session->userdata("Id_Admin"); ?> </h3></center>
                    </div>
            </nav>

	<!-- jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
	
	
		
				