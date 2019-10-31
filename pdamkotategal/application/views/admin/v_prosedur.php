<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Prosedur | Admin</title>
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
        <!-- Content -->
		<button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success pull-right">            
		<span class="glyphicon glyphicon-plus"></span>Tambah Data</button>
		<h2>Prosedur</h2>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th>ID Prosedur</th>
						<th>ID Admin</th>
						<th>Judul Prosedur</th>
						<th>Gambar</th>
						<th colspan="3" class="text-center"><span class="glyphicon glyphicon-cog">Opsi</span></th>
					</tr>
					<?php 
						$no = 1;
					foreach($prosedur as $f){ 
					?>
					<tr>
						<td class="align-middle text-center"><?php echo $no++; ?></td>
						<td class="align-middle "><?php echo $f->Id_Prosedur ?></td>
						<td class="align-middle "><?php echo $f->Id_Admin ?></td>
						<td class="align-middle "><?php echo $f->Judul_Prosedur ?></td>
						<td class="align-middle "><?php echo '<img src="' . base_url().'assets/upload/prosedur/' . $f->Gambar . '"  height="100" width="100"/>'; ?></td>
						<td class="align-middle text-center">       
							<a href="<?php echo site_url('prosedur/edit/'.$f->Id_Prosedur) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</span></a>
						</td>
						<td class="align-middle text-center">          
							<a onclick="deleteConfirm('<?php echo site_url('prosedur/hapus/'.$f->Id_Prosedur) ?>')" href="#!" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus</a>        
						</td> <td class="align-middle text-center">   
							<a onclick="deleteConfirm('<?php echo site_url('prosedur/hapus_gambar/'.$f->Id_Prosedur) ?>')" href="#" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus_Gambar</a>
						</td>    						
					</tr>
				<?php } ?>
			</table>
		</div>
		<div id="form-modal" class="modal fade">        
			<div class="modal-dialog">            
				<div class="modal-content">                
					<div class="modal-header">                    
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                    
						<h4 class="modal-title">Tambah Prosedur<span id="modal-title"></span></h4>                
					</div>                
					<div class="modal-body">
						<div id="pesan" class="alert alert-danger"></div>                    
							<form action="<?php echo base_url('prosedur/do_upload'); ?>" enctype="multipart/form-data" method="post">                        
								<div class="form-group">                            
									<label>ID Prosedur</label>
										<input type="text" class="form-control" id="id_info" name="id_info" value="PRSDR<?php echo date('Y')?><?php echo $no++ ?>" readonly="readonly">                  
								</div>                        
								<div class="form-group">                            
									<label>Judul Prosedur</label>  
										<select id="jdl" name="jdl" class="form-control" required>                                
											<option value="">-- Pilih Judul Prosedur--</option>                                
											<option value="Prosedur Menjadi Pelanggan">-- Prosedur Menjadi Pelanggan --</option>                                
											<option value="Prosedur Berhenti Sementara">-- Prosedur Berhenti Sementara --</option>       
											<option value="Prosedur Pembukaan Kembali">-- Prosedur Pembukaan Kembali --</option>       
											<option value="Prosedur Balik Nama">-- Prosedur Balik Nama --</option>       
											<option value="Prosedur Cek Tagihan">-- Prosedur Cek Tagihan Lewat SMS --</option>
										</select>                                  
								</div>     
								<div class="form-group">                            
									<label>Langkah 1</label>
										<input type="text" class="form-control" id="lngkh1" name="lngkh1" placeholder="Masukkan langkah 1 disini">                  
								</div> 
								<div class="form-group">                            
									<label>Langkah 2</label>
										<input type="text" class="form-control" id="lngkh2" name="lngkh2" placeholder="Masukkan langkah 2 disini">                  
								</div> 
								<div class="form-group">                            
									<label>Langkah 3</label>
										<input type="text" class="form-control" id="lngkh3" name="lngkh3" placeholder="Masukkan langkah 3 disini">                  
								</div> 
								<div class="form-group">                            
									<label>Langkah 4</label>
										<input type="text" class="form-control" id="lngkh4" name="lngkh4" placeholder="Masukkan langkah 4 disini">                  
								</div> 
								<div class="form-group">                            
									<label>Langkah 5</label>
										<input type="text" class="form-control" id="lngkh5" name="lngkh5" placeholder="Masukkan langkah 5 disini">                  
								</div> 
								<div class="form-group">                            
									<label>Langkah 6</label>
										<input type="text" class="form-control" id="lngkh6" name="lngkh6" placeholder="Masukkan langkah 6 disini">                  
								</div> 
								<div class="form-group">                            
									<label>Langkah 7</label>
										<input type="text" class="form-control" id="lngkh7" name="lngkh7" placeholder="Masukkan langkah 7 disini">                  
								</div> 
								<div class="form-group">                            
									<label>Langkah 8</label>
										<input type="text" class="form-control" id="lngkh8" name="lngkh8" placeholder="Masukkan langkah 8 disini">                  
								</div> 
								<div class="form-group">                            
									<label>Langkah 9</label>
										<input type="text" class="form-control" id="lngkh9" name="lngkh9" placeholder="Masukkan langkah 9 disini">                  
								</div> 
								<div class="form-group">                            
									<label>Langkah 10</label>
										<input type="text" class="form-control" id="lngkh10" name="lngkh10" placeholder="Masukkan langkah 10 disini">                  
								</div> 
								<div class="form-group">                            
									<label for="gmbr">Gambar</label>                            
										<input type="file" id="gmr" name="gmr" placeholder="Gambar">                  
								</div></br>
								<div style="text-align: right;">
									<button type="submit" class="btn btn-primary" id="btn-simpan">Submit</button> 
								</div>
							</form>                
					</div>
				</div>            
			</div>     
		</div>
		<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h2 class="modal-title" id="exampleModalLabel">Apakah Anda yakin ingin menghapus ini?</h2>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">×</span>
				</button>
			  </div>
			  <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
			  <div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
			  </div>
			</div>
		  </div>
		</div>
    </div>
</div>

	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
    </body>
</html>
