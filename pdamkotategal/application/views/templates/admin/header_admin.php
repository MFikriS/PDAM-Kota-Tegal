<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="<?php echo base_url().'assets/admin/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url().'assets/admin/css/style.css'?>" rel="stylesheet" type="text/css">
	</head>
<nav class="navbar">
		<div>
			<h1 class="pdam-1"  style="float:center;">PERUSAHAAN DAERAH AIR MINUM</h1>
			<h1 class="pdam-1">KOTA TEGAL</h1>
		</div>
		<div class="navbar-brand">
			<img src="assets/admin/gambar/logo.png" style="float:left;"class="logo-1">
		</div>
	</nav>
	
<script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
     </script>