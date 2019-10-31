<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Informasi | Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url().'assets/admin/css/style.css'?>" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<style>
			body {
				font-family: 'Poppins', sans-serif;
				background: #fafafa;
			}
			
			.navbar {
				padding: 15px 10px;
				background: #fff;
				border: none;
				border-radius: 0;
				margin-bottom: 40px;
				box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
			}
		</style>
    </head>
    <body>
<?php foreach($informasi as $s){ ?>
	<form action="<?php echo base_url('info/update'); ?>" enctype="multipart/form-data" method="post">                        
								<div class="form-group">                            
									<label>ID Informasi</label>
										<input type="text" class="form-control" id="id_info" name="id_info" value="<?php echo $s->Id_Informasi  ?>" readonly="readonly" />                  
								</div>
								<div class="form-group">                            
									<label>ID Admin</label>
										<input type="text" class="form-control" id="id_admin" name="id_admin" value="<?php echo $this->session->userdata("Id_Admin"); ?>" readonly="readonly" />                  
								</div>								
								<div class="form-group">                            
									<label>Judul</label>                            
										<input type="text" class="form-control" id="judul" name="jdl" value="<?php echo $s->Judul ?>" required>                        
								</div>                       
								<div class="form-group">                            
									<label>Tipe Informasi</label>                            
										<select id="tipe" name="tipe" class="form-control" required>
											<option><?php echo $s->Tipe ?></option>
											<option value="">-- Pilih Tipe Informasi--</option>                                
											<option value="Penting">-- Penting --</option>                                
											<option value="Biasa">-- Biasa --</option>
										</select>                         
								</div>                        
								<div class="form-group">                            
									<label for="gmbr">Gambar</label>                            
										<input type="file" id="gmbr" name="gmbr"><?php echo $s->Gambar ?>
										<input type="hidden" name="old_image" value="<?php echo $s->Gambar ?>" />										
								</div>
								<div class="md-form">
								  <label for="isi">Isi</label>
								  <div class="form-group shadow-textarea">
								  <textarea class="form-control z-depth-1" name="isi" id="exampleFormControlTextarea6" rows="3" ><?php echo "$s->Isi"; ?></textarea>
								</div>
								<div class="form-group">                            
									<label>Tanggal Terbit</label>
										<input type="text" name="tgl" value="<?php echo $s->Tgl_Terbit ?>" readonly="readonly" />                  
								</div>
								<div class="form-group">                            
									<label>Jam Terbit</label>
										<input type="text" name="jam" value="<?php echo $s->Jam_Terbit ?>" readonly="readonly" />
								</div>
								<div style="text-align: right;">
									<button type="submit"class="btn btn-primary" id="btn-simpan">Submit</button>    
								</div>
							</form>
				<?php } ?>
					</div>
	</div>
	
	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	