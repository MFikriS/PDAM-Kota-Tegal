<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profil | Admin</title>
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
		<?php foreach($profil as $d){ ?>
		<form class="form-signin" action="<?php echo base_url().'profil/update'; ?>" enctype="multipart/form-data" method="post">                   
			<div class="form-group">                            
				<label>ID Profil</label>
					<input type="text" class="form-control" id="id_info" name="id_info" value="<?php echo $d->Id_Profil ?>" readonly="readonly" />                  
			</div>                        
			<div class="md-form">
				<label for="sjrh">Sejarah</label>
				<div class="form-group shadow-textarea">
				<textarea class="form-control z-depth-1" name="sjrh" id="exampleFormControlTextarea6" rows="3" ><?php echo $d->Sejarah; ?></textarea>
			</div>          
			<div class="md-form">
				<label for="dskrps">Deskripsi Perusahaan</label>
				<div class="form-group shadow-textarea">
				<textarea class="form-control z-depth-1" name="dskrps" id="exampleFormControlTextarea6" rows="3" ><?php echo $d->Deskripsi_Perusahaan; ?></textarea>
			</div>      
			<div class="form-group">                            
				<label for="gmbr">Gambar</label>                            
					<input type="file" id="gmbr" name="gmbr"><?php echo $d->Foto_Perusahaan ?>
					<input type="hidden" name="old_image" value="<?php echo $d->Foto_Perusahaan ?>" />										
			</div>
			<button type="submit" class="btn btn-primary" id="btn-simpan" style="width: 100%;" >Submit</button></br>
		<?php } ?>    								
		</form></br>
	
	
	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	