<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Kerjasama | Admin</title>
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
		<?php foreach($kerjasama as $k){ ?>
		<form class="form-signin" action="<?php echo base_url().'data_kerjasama/update'; ?>" enctype="multipart/form-data" method="post">                   
			<div class="form-group">                            
				<label>ID Data Kerjasama</label>
					<input type="text" class="form-control" id="id_info" name="id_info" value="<?php echo $k->Id_DataKerjasama ?>" readonly="readonly" />                  
			</div>                      
			<div class="form-group">                            
				<label>Gambar</label>                            
					<input type="file" class="form-control" id="gmbr" name="gmbr" value="<?php echo $k->Gambar ?>" >                                       
					<input type="hidden" name="old_image" value="<?php echo $k->Gambar ?>" />										
			</div>
			<button type="submit" class="btn btn-primary" id="btn-simpan" style="width: 100%;" >Submit</button>
		<?php } ?>    								
		</form>
	
	
	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	