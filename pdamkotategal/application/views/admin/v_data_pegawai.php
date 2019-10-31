<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Pegawai | Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
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
		
		<h2>Daftar Data Pegawai</h2>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Jumlah Pegawai Tetap</th>
						<th>Jumlah Pegawai Tidak Tetap</th>
						<th colspan="3" class="text-center"><span class="glyphicon glyphicon-cog">Opsi</span></th>
					</tr>
					<?php 
						$no = 1;
						foreach($jml_peg as $j){ 
					?>
					<tr>
						<td class="align-middle "><?php echo $j['Jml_Pegawai_Tetap']; ?></td>
						<td class="align-middle "><?php echo $j['Jml_Pegawai_Tidak_Tetap']; ?></td>
						<td class="align-middle text-center">       
							<a href="<?php echo site_url('datPeg/editjmlPeg/'.$j['Id_DataPegawai']) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</span></a>
						</td>
					</tr>
				<?php } ?>
			</table>
		</div>
        <!-- Content -->
		<button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success pull-right">            
		<span class="glyphicon glyphicon-plus"></span>Tambah Data Pegawai</button>
		<h2>Daftar Data Pegawai</h2>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th>ID Data Pegawai</th>
						<th>NIP</th>
						<th>Nama Pegawai</th>
						<th>Jabatan</th>
						<th>Foto Pegawai</th>
						<th colspan="3" class="text-center"><span class="glyphicon glyphicon-cog">Opsi</span></th>
					</tr>
					<?php 
						$no = 1;
						foreach($data_pegawai as $p){ 
					?>
					<tr>
						<td class="align-middle text-center"><?php echo $no++; ?></td>
						<td class="align-middle "><?php echo $p->Id_DataPegawai ?></td>
						<td class="align-middle "><?php echo $p->NIP ?></td>
						<td class="align-middle "><?php echo $p->Nama_pegawai ?></td>
						<td class="align-middle "><?php echo $p->Jabatan ?></td>
						<td class="align-middle "><?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $p->Foto_pegawai . '"  height="100" width="100"/>'; ?></td>
						<td class="align-middle text-center">       
							<a href="<?php echo site_url('datPeg/edit/'.$p->Id_DataPegawai) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</span></a>
						</td>
						<td class="align-middle text-center">          
							<a onclick="deleteConfirm('<?php echo site_url('datPeg/hapus/'.$p->Id_DataPegawai) ?>')" href="#!" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus</a>        
						</td>      
						<td class="align-middle text-center">   
							<a onclick="deleteConfirm('<?php echo site_url('datPeg/hapus_gambar/'.$p->Id_DataPegawai) ?>')" href="#" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus_Gambar</a>
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
						<h4 class="modal-title">Tambah Data Pegawai<span id="modal-title"></span></h4>                
					</div>                
					<div class="modal-body">
						<div id="pesan" class="alert alert-danger"></div>                    
							<form action="<?php echo base_url('datPeg/tambah'); ?>" enctype="multipart/form-data" method="post">                                               
								<div class="form-group">                            
									<label>NIP</label>                            
										<input type="number" class="form-control" id="nip" name="nip" placeholder="NIP" required>                        
								</div>                        
								<div class="form-group">                           
									<label>Nama Pegawai</label>
										<input type="text" class="form-control" id="nm" name="nm" placeholder="Nama Pegawai" required>                  
								</div>    								
								<div class="form-group">                            
									<label>Jabatan</label>  
										<select id="jbtn" name="jbtn" class="form-control" required>                                
											<option value="">-- Pilih Jabatan Pegawai--</option>                                
											<option value="Direktur">-- Direktur --</option>                                
											<option value="Kabag Hubungan Pelanggan">-- Kabag Hubungan Pelanggan --</option>       
											<option value="Kabag Administrasi dan Keuangan">-- Kabag Administrasi dan Keuangan --</option>       
											<option value="Kabag Teknik">-- Kabag Teknik --</option>       
											<option value="Kasubag perencana">-- KaSubag Perencana  --</option>
											<option value="Kasubag peralatan">-- KaSubag Peralatan --</option>
											<option value="Kasubag distribusi">-- KaSubag Distribusi --</option>
											<option value="Kasubag sumber">-- KaSubag Sumber --</option>
											<option value="Kasubag Pembukuan">-- KaSubag Pembukuan --</option>
											<option value="Kasubag Kasir dan Tagih">-- KaSubag Kasir&Tagih --</option>
											<option value="Kasubag Umum dan Kepegawaian">-- KaSubag Umum&Kepegawaian --</option>
											<option value="Kasubag Gudang">-- KaSubag Gudang --</option>
											<option value="Kasubag Rekening">-- KaSubag Rekening&PM --</option>
											<option value="Kasubag Humas">-- KaSubag Humas&PL --</option>
										</select>                                  
								</div>
								<div class="form-group">                            
									<label>Foto Pegawai</label>                            
										<input type="file" class="form-control" id="ft" name="ft" placeholder="Foto Pegawai" required>                                       
								</div>
								<div style="text-align: right;">
									<button type="submit"class="btn btn-primary" id="btn-simpan">Submit</button>             
									<button type="button"class="btn btn-default" data-dismiss="modal">Tutup</button>        								
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
        <!-- <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div> -->
    </div>
</div>

	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
	
	<script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
	
    </body>
</html>
