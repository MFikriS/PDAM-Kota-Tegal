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
		<?php foreach($data_umum as $d){ ?>
		<form class="form-signin" action="<?php echo base_url().'datUm/update'; ?>" enctype="multipart/form-data" method="post">                   
			<div class="form-group">                            
				<label>ID Data Umum</label>
					<input type="text" class="form-control" id="id_info" name="id_info" value="<?php echo $d->Id_DataUmum  ?>" readonly="readonly" />                  
			</div>                        
			<div class="form-group">                            
				<label>Jumlah Penduduk</label>                            
					<input type="number" min="0" class="form-control" id="jml_pnddk" name="jml_pnddk" value="<?php echo $d->Jml_Pnddk ?>" placeholder="Jumlah penduduk yang ada di kota" required>                        
			</div>                        
			<div class="form-group">                           
				<label>Jumlah Pelanggan</label>
					<input type="number" min="0" class="form-control" id="jml_pel" name="jml_pel" value="<?php echo $d->Jml_Pel ?>" placeholder="Jumlah Pelanggan" required>                  
			</div>                        
			<div class="form-group">                            
				<label>Jumlah Pelanggan Aktif</label>                            
					<input type="number" min="0" class="form-control" id="jml_pelA" name="jml_pelA" value="<?php echo $d->Jml_Pel_Aktif ?>" placeholder="Jumlah Pelanggan yang Aktif" required>                                       
			</div>
			<div class="form-group">                            
				<label>Gambar Struktur Organisasi</label>                            
					<input type="file" class="form-control" id="gmbr" name="gmbr" value="<?php echo $d->Struktur_Organisasi ?>" placeholder="Foto Pegawai">     
					<input type="hidden" name="old_image" value="<?php echo $d->Struktur_Organisasi ?>" />
			</div>
			<button type="submit" class="btn btn-primary" id="btn-simpan" style="width: 100%;" >Submit</button>
		<?php } ?>    								
		</form>
	
	
	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	