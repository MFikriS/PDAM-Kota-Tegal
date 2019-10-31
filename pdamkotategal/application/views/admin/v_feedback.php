<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Kritik & Saran | Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url().'assets/admin/css/style.css'?>" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$("input[name='checkAll']").click(function() {
				var checked = $(this).attr("checked");
				$("#myTable tr td input:checkbox").attr("checked", checked);
			});
		});
	</script>
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
			#print {
				display: none;
			}
		</style>
    </head>
    <body>
        <!-- Content -->
		<a href="<?php echo base_url().'feedback/cetak'?>" button class="btn btn-primary pull-right" type="submit"><span class="glyphicon glyphicon-download"> Download </span></a>
		<a href type="button" onclick="printDiv('print')" class="btn btn-primary pull-right type="submit"><span class="glyphicon glyphicon-print"> CetakPerHalaman </span></a>
		<h2>Kritik & Saran dari Pelanggan</h2></br>
		<form action="<?php echo site_url('feedback/delete_multiple'); ?>" method="post">
			<div class="form-group">
			<label for="sel1">Pilih Aksi</label>
				<select class="form-control" name="action">
					<option value="delete">Hapus</option>
				</select>
			</div>
		<input type="submit" button class="btn btn-primary" name="submit" value="HapusTerpilih"> <a onclick="deleteConfirm('<?php echo site_url('feedback/deleteAll') ?>')" href="#!" class="btn btn-primary"><span class="glyphicon glyphicon-trash"> HapusSemua</a></br></br>        
		
		<p></p>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Ceklis</th>
						<th class="text-center">No</th>
						<th>ID Feedback</th>
						<th>No Sambungan</th>
						<th>Tanggal Input</th>
						<th>Jam Input</th>
						<th>Kritik</th>
						<th>Saran</th>
						<th colspan="2" class="text-center"><span class="glyphicon glyphicon-cog">Opsi</span></th>
					</tr>
					<?php 
						$no = 1;
						foreach($feedback->result() as $f){ 
					?>
					<tr>
						<td class="align-middle text-center"><input type="checkbox" name="msg[]" value="<?php echo $f->Id_Feedback; ?>"></td>
						<td class="align-middle text-center"><?php echo ++$page; ?></td>
						<td class="align-middle "><?php echo $f->Id_Feedback ?></td>
						<td class="align-middle "><?php echo $f->No_Sambungan ?></td>
						<td class="align-middle "><?php echo $f->Tgl_Input ?></td>
						<td class="align-middle "><?php echo $f->Jam_Input ?></td>
						<td class="align-middle "><?php echo $f->Kritik ?></td>
						<td class="align-middle "><?php echo $f->Saran ?></td>
						<td class="align-middle text-center">          
							<a onclick="deleteConfirm('<?php echo site_url('feedback/hapus/'.$f->Id_Feedback) ?>')" href="#!" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus</a>        
						</td>     						
					</tr>
					<?php } ?>
			</table>
			<center>
            <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
			</center>
    </div>
		</div>
		
	</form>
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
		<!-- Print -->
		<div id="print">
		<h1 style="text-align: center;">Kritik & Saran Pelanggan</h1>
		<table border="1" width="100%">
		<tr>
			<th>No</th>
			<th>Id Feedback</th>
			<th>No Sambungan Pelanggan</th>
			<th>Kritik</th>
			<th>Saran</th>
			<th>Tanggal Input</th>
			<th>Jam Input</th>
		</tr>
		<?php 
			$no = 1;
			foreach($feedback->result() as $f){ 
		?>
			<tr>
				<td class="align-middle text-center"><?php echo $no++; ?></td>
				<td class="align-middle "><?php echo $f->Id_Feedback ?></td>
				<td class="align-middle "><?php echo $f->No_Sambungan ?></td>
				<td class="align-middle "><?php echo $f->Tgl_Input ?></td>
				<td class="align-middle "><?php echo $f->Jam_Input ?></td>
				<td class="align-middle "><?php echo $f->Kritik ?></td>
				<td class="align-middle "><?php echo $f->Saran ?></td>						
			</tr>
		<?php } ?>
		</table>
		<h5><strong>Dicetak pada Tanggal : <?php
						date_default_timezone_set('Asia/Jakarta');
						$date = date('d-m-Y');
						$time = date('H:i:s');
						echo $date; 
						echo ', Jam : '. $time;
						if( ! empty($feedback)){
							foreach($feedback->result() as $data){
							}
								$id = $data->Id_Admin;
						echo ', Oleh : '. $id ;
						}
						?></strong></h5>
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
	<script>
	function printDiv(divName) {
		 var printContents = document.getElementById(divName).innerHTML;
		 var originalContents = document.body.innerHTML;

		 document.body.innerHTML = printContents;

		 window.print();

		 document.body.innerHTML = originalContents;
	}	
	</script>
    </body>
</html>
