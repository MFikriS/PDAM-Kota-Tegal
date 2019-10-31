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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
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
		<h2>Daftar Data Umum</h2>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th>ID Data Umum</th>
						<th>Jumlah Penduduk</th>
						<th>Jumlah Pelanggan</th>
						<th>Jumlah Pelanggan Aktif</th>
						<th>Gambar Struktur Organisasi</th>
						<th colspan="2" class="text-center"><span class="glyphicon glyphicon-cog">Opsi</span></th>
					</tr>
					<?php 
						$no = 1;
						foreach($data_umum as $d){ 
					?>
					<tr>
						<td class="align-middle text-center"><?php echo $no; ?></td>
						<td class="align-middle "><?php echo $d->Id_DataUmum ?></td>
						<td class="align-middle "><?php echo $d->Jml_Pnddk ?></td>
						<td class="align-middle "><?php echo $d->Jml_Pel ?></td>
						<td class="align-middle "><?php echo $d->Jml_Pel_Aktif ?></td>
						<td class="align-middle "><?php echo '<img src="' . base_url().'assets/upload/struktur_organisasi/' . $d->Struktur_Organisasi . '"  height="100" width="100"/>'; ?></td>
						<td class="align-middle text-center">       
							<a href="<?php echo site_url('datUm/edit/'.$d->Id_DataUmum) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</span></a>
						</td> 
						<td class="align-middle text-center">   
							<a onclick="deleteConfirm('<?php echo site_url('datUm/hapus_gambar/'.$d->Id_DataUmum) ?>')" href="#" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus_Gambar</a>
						</td>						
					</tr>
				<?php } ?>
			</table>
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
