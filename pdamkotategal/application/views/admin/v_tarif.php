<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tarif | Admin</title>
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
		<h2>Tarif</h2>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID Tarif</th>
						<th>Kelompok Pelanggan</th>
						<th>Tarif I</th>
						<th>Tarif II</th>
						<th colspan="2" class="text-center"><span class="glyphicon glyphicon-cog">Opsi</span></th>
					</tr>
					<?php 
						$no = 1;
					foreach($tarif as $t){ 
					?>
					<tr>
						<td class="align-middle "><?php echo $t->Id_Tarif ?></td>
						<td class="align-middle "><?php echo $t->Kelompok_Pelanggan ?></td>
						<td class="align-middle "><?php echo $t->Tarif_I ?></td>
						<td class="align-middle "><?php echo $t->Tarif_II ?></td>
						<td class="align-middle text-center">       
							<a href="<?php echo site_url('Tarif/edit/'.$t->Id_Tarif) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</span></a>
						</td>
						<td class="align-middle text-center">          
							<a onclick="deleteConfirm('<?php echo site_url('Tarif/hapus/'.$t->Id_Tarif) ?>')" href="#!" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus</a>        
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
						<h4 class="modal-title">Tambah Data Tarif<span id="modal-title"></span></h4>                
					</div>                
					<div class="modal-body">
						<div id="pesan" class="alert alert-danger"></div>                    
							<form action="<?php echo base_url('Tarif/tambah'); ?>" enctype="multipart/form-data" method="post">                                      
								<div class="form-group">                            
									<label>Kelompok Pelanggan</label>
										<input type="text" class="form-control" id="klmpk" name="klmpk" placeholder="Masukkan kelompok pelanggan disini" />                  
								</div> 
								<div class="form-group">                            
									<label>Tarif I (1-10 M3 (Rp.))</label>
										<input type="number" min="0" class="form-control" id="trf1" name="trf1" placeholder="Masukkan tarif I disini" />                  
								</div> 
								<div class="form-group">                            
									<label>Tarif II (1-10 M3 (Rp.))</label>
										<input type="number" min = "0" class="form-control" id="trf2" name="trf2" placeholder="Masukkan tarif II disini" />                  
								</div> 
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
