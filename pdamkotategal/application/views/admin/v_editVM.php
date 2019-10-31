<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Visi&Misi | Admin</title>
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
		<form class="form-signin" action="<?php echo base_url().'profil/update_VM'; ?>" enctype="multipart/form-data" method="post">                   
			<div class="form-group">                            
				<label>ID Profil</label>
					<input type="text" class="form-control" id="id_info" name="id_info" value="<?php echo $d->Id_Profil ?>" readonly="readonly" />                  
			</div>                        
			<div class="form-group">                            
				<label>Visi</label>
					<input type="text" class="form-control" id="vs" name="vs" value="<?php echo $d->Visi ?>" />                  
			</div>           
			<div class="form-group">                            
				<label>Misi 1</label>
					<input type="text" class="form-control" id="ms1" name="ms1" value="<?php echo $d->Misi1 ?>" />                  
			</div>      
			<div class="form-group">                            
				<label>Misi 2</label>
					<input type="text" class="form-control" id="ms2" name="ms2" value="<?php echo $d->Misi2 ?>" />                  
			</div> 
			<div class="form-group">                            
				<label>Misi 3</label>
					<input type="text" class="form-control" id="ms3" name="ms3" value="<?php echo $d->Misi3 ?>" />                  
			</div> 
			<div class="form-group">                            
				<label>Misi 4</label>
					<input type="text" class="form-control" id="ms4" name="ms4" value="<?php echo $d->Misi4 ?>" />                  
			</div> 
			<div class="form-group">                            
				<label>Misi 5</label>
					<input type="text" class="form-control" id="ms5" name="ms5" value="<?php echo $d->Misi5 ?>" />                  
			</div> 
			<div class="form-group">                            
				<label>Misi 6</label>
					<input type="text" class="form-control" id="ms6" name="ms6" value="<?php echo $d->Misi6 ?>" />                  
			</div> 
			<div class="form-group">                            
				<label>Misi 7</label>
					<input type="text" class="form-control" id="ms7" name="ms7" value="<?php echo $d->Misi7 ?>" />                  
			</div> 
			<div class="form-group">                            
				<label>Misi 8</label>
					<input type="text" class="form-control" id="ms8" name="ms8" value="<?php echo $d->Misi8 ?>" />                  
			</div> 
			<div class="form-group">                            
				<label>Misi 9</label>
					<input type="text" class="form-control" id="ms9" name="ms9" value="<?php echo $d->Misi9 ?>" />                  
			</div> 
			<div class="form-group">                            
				<label>Misi 10</label>
					<input type="text" class="form-control" id="ms10" name="ms10" value="<?php echo $d->Misi10 ?>" />                  
			</div> 
			<button type="submit" class="btn btn-primary" id="btn-simpan" style="width: 100%;" >Submit</button></br>
		<?php } ?>    								
		</form></br>
	
	
	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	