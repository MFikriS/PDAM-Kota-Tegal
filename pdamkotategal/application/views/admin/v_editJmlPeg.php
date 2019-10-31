<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Pegawai | Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url().'assets/admin/css/style.css'?>" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<style>
			body {
				font-family: 'Poppins', sans-serif;
				background: #fafafa;
			}
		</style>
    </head>
	</br></br>
		<?php foreach($pegawai as $d){ ?>
		<form class="form-signin" action="<?php echo base_url().'datPeg/updateJmlPeg'; ?>" enctype="multipart/form-data" method="post">                   
			<div class="form-group">                            
				<label>Jumlah Pegawai Tetap</label>
					<input type="hidden" name="id_info" value="<?php echo $d->Id_DataPegawai  ?>" />
					<input type="number" class="form-control" id="ttp" name="ttp" value="<?php echo $d->Jml_Pegawai_Tetap  ?>"  placeholder="Masukkan Jumlah Pegawai Tetap disini" />                  
			</div>                        
			<div class="form-group">                            
				<label>Jumlah Pegawai Tidak Tetap</label>                            
					<input type="number" class="form-control" id="tdk_ttp" name="tdk_ttp" value="<?php echo $d->Jml_Pegawai_Tidak_Tetap ?>" placeholder="Masukkan Jumlah Pegawai Tidak Tetap disini" required>                        
			</div>                        
			<button type="submit" class="btn btn-primary" id="btn-simpan" style="width: 100%;" >Submit</button>
		<?php } ?>    								
		</form>
	
	
	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	