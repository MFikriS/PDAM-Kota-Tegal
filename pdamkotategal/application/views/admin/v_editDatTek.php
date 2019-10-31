<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Teknik | Admin</title>
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
		<?php foreach($data_teknik as $d){ ?>
		<form class="form-signin" action="<?php echo base_url().'datTek/update'; ?>" method="post">                   
			<div class="form-group">                            
				<label>ID Data Teknik</label>
					<input type="text" class="form-control" id="id_info" name="id_info" value="<?php echo $d->Id_DataTeknik  ?>" readonly="readonly" />                  
			</div>                        
			<div class="form-group">                            
				<label>Sumber Air</label>                            
					<input type="text" class="form-control" id="smbr_air" name="smbr_air" value="<?php echo $d->Sumber_Air ?>" placeholder="Sumber Air" required>                        
			</div>                        
			<div class="form-group">                           
				<label>Tersedia</label>
					<input type="text" min="1" class="form-control" id="trsd" name="trsd" value="<?php echo $d->Tersedia ?>" placeholder="Tersedia" required>                  
			</div>                        
			<div class="form-group">                            
				<label>Dimanfaatkan</label>                            
					<input type="text" min="1" class="form-control" id="dmnftkn" name="dmnftkn" value="<?php echo $d->Dimanfaatkan ?>" placeholder="Sumber Air yang dimanfaatkan" required>                                       
			</div>
			<button type="submit" class="btn btn-primary" id="btn-simpan" style="width: 100%;" >Submit</button>
		<?php } ?>    								
		</form>
	
	
	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	