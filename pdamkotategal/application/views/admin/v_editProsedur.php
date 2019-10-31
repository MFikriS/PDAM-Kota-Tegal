<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Umum | Admin</title>
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
		<?php foreach($prosedur as $d){ ?>
		<form class="form-signin" action="<?php echo base_url().'prosedur/update'; ?>" enctype="multipart/form-data" method="post">                   
			<div class="form-group">                            
				<label>ID Prosedur</label>
					<input type="text" class="form-control" id="id_info" name="id_info" value="<?php echo $d->Id_Prosedur  ?>" readonly="readonly" />                  
			</div>                        
			<div class="form-group">                            
				<label>Judul Prosedur</label>  
					<select id="jdl" name="jdl" class="form-control" required>                                
						<option value="value="<?php echo $d->Judul_Prosedur  ?>" ">-- <?php echo $d->Judul_Prosedur  ?> --</option>                                
						<option value="Prosedur Menjadi Pelanggan">-- Prosedur Menjadi Pelanggan --</option>                                
						<option value="Prosedur Berhenti Sementara">-- Prosedur Berhenti Sementara --</option>       
						<option value="Prosedur Pembukaan Kembali">-- Prosedur Pembukaan Kembali --</option>       
						<option value="Prosedur Balik Nama">-- Prosedur Balik Nama --</option>       
						<option value="Prosedur Pembayaran">-- Prosedur Cek Tagihan Lewat SMS  --</option>
					</select>                                  
			</div>                            
			<div class="form-group">                            
				<label>Gambar</label>                            
					<input type="file" class="form-control" id="gmr" name="gmr" value="<?php echo $d->Gambar ?>" >                                       
					<input type="hidden" name="old_image" value="<?php echo $d->Gambar ?>" />										
			</div>
			<button type="submit" class="btn btn-primary" id="btn-simpan" style="width: 100%;" >Submit</button>
		<?php } ?>    								
		</form>
	
	
	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	