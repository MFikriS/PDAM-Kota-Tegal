<!DOCTYPE html>
<html>
	<head>
		<title>Login | Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="assets/admin/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/admin/css/style.css">
		<style>
			body {
				background-color: #C0E1FF;
				background-repeat: no-repeat;
			}
		</style>
	</head>
<body>
	<div id="card-1">
		<div id="card-content">
			<div id="card-title">
				<center><h2 style="font-weight: bold;">Login</h2></center>
				<center><strong><?php echo $this->session->flashdata('sukses'); ?></strong></center>
				<div class="underline-tittle">
					<form class="form-signin" action="<?php echo base_url('login/validasi'); ?>" method="post">
					<label for="email" style="padding-top:13px">&nbsp;Username</label>
						<input type="text" id="email" name="email" class="form-control" placeholder="Masukkan username disini" required autofocus><br/>
					<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password disini" required></br>
					<div class="button">
						<button class="button-1" type="submit">Login</button>&nbsp
					</div>&nbsp
					<center><font size="4px" weight="bold">&copy PDAM 2019</font></center>
					</form>
				</div>
			</div>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>