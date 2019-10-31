<head>



  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="<?php echo base_url('assets/js/jquery.min.js') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/bootstrap.min.js') ?>" rel="stylesheet">

<link rel="stylesheet" href="<?php base_url(); ?>assets/css/style2.css" type="text/css" />

	<style>
		@media (max-width: 360px) {
	.logo {
		width: 100;
		height: 68;
		}
	.my-sm-0{
		height: 30;
		font-size: 11px;
	}
	.navbar-toggler {
		height: 30px;
	}
		
	.navbar-toggler-icon {
		height: 20px;
		width: 20px;
	}
	.mr-sm-2{
		height: 30px;
	}
	h2 {
		font-size: 10;
		font-family: Oldenburg;
		margin-left: 80px;
	}
	h1 {
		font-size: 10;
		font-family: Oldenburg;
		margin-top: -64px;
		margin-left: 100px;
	}
}

@media (max-width: 414px) {
	.logo {
		width: 100;
		height: 68;
		}
	.my-sm-0{
		height: 30;
		font-size: 11px;
	}
	.navbar-toggler {
		height: 30px;
	}
		
	.navbar-toggler-icon {
		height: 20px;
		width: 20px;
	}
	.mr-sm-2{
		height: 30px;
	}
	h2 {
		font-size: 12px;
		font-family: Oldenburg;
		margin-left: 80px;
	}
	h1 {
		font-size: 12px;
		font-family: Oldenburg;
		margin-top: -64px;
		margin-left: 100px;
	}
	.abc {
		font-size: 20px;
		font-family: Oldenburg;
		margin-left: 0px;
	}
}
	
		@media (max-width: 375px) {
	.logo {
		width: 110;
		height: 76;
		}
		.my-sm-0{
		height: 30;
		font-size: 11px;
	}
	.navbar-toggler {
		height: 30px;
	}
		
	.navbar-toggler-icon {
		height: 20px;
		width: 20px;
	}
	.mr-sm-2{
		height: 30px;
	}
	h2 {
		font-size: 13;
		font-family: Oldenburg;
		margin-left: 80px;
	}
	h1 {
		font-size: 13;
		font-family: Oldenburg;
		margin-top: -64px;
		margin-left: 100px;
	}
}
	</style>
</head>



<body>
<div class="container-fluid">
	<div class="row mt-5">
		<div class="col">
			<center>
			<div class="card-panel white">
				<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>KELOMPOK PELANGGAN</th>
						<th colspan="2" class="text-center"><span class="glyphicon glyphicon-cog">KLASIFIKASI PEMAKAIAN AIR</span></th>
					</tr>
						<th class="align-middle text-center"></th>
						<th class="align-middle text-center">1-10 M3 (Rp.)</th>
						<th class="align-middle text-center">Lebih dari 10 M3 (Rp.)</th>
					<?php 
						$no = 1;
					foreach($tarif as $t){ 
					?>
					<tr>
						<td class="align-middle "><?php echo $t->Kelompok_Pelanggan ?></td>
						<td class="align-middle "><?php echo $t->Tarif_I ?></td>
						<td class="align-middle "><?php echo $t->Tarif_II ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
				&nbsp
			</div>
			
			</center>
			<center>
			<div class="row">
				<div class="col-md-7">
					<div class="container">
						<div class="card-panel white">
							<h3 class="text-center">Cara Membaca Meteran</h3>
							<div style="overflow-x:auto;">
							<table class="table mt-5">
								<img src="<?php echo base_url().'assets/gambar/meteran.jpg'?>" width="600" height="300"/>
							</table>
							<p style="text-align: center;">1. Pelanggan hanya melihat satuan kubik , lihat 4 angka awal meteran atau yang berwarna hitam</p>
							<p style="text-align: center;">2. Angka terakhir atau yang berwarna merah tidak di lihat pelanggan</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="container">
						<div class="card" style="width: 18rem; background: #C4C4C4;">
							<div class="card-body">
							<form class="form-horizontal" action="<?php echo base_url('Tarif/hitung'); ?>" method="post">
								<h5 class="card-title" style="text-align: center;">Simulasi Tarif</h5>
								<p class="card-text" style="text-align: justify;">Untuk simulasi tarif, silakan masukkan stand awal, stand akhir, dan pilih tarif di bawah ini.</p>
					
								<label>Stand Awal</label><br/>
									<input type="number" min="0" id="awal" name="awal" class="form-control" placeholder="Masukkan Stand awal" required><br/>
								<label>Stand Akhir</label><br/>
									<input type="number" min="0" id="akhir" name="akhir" class="form-control" placeholder="Masukkan Stand awal" required><br/>
								<div class="form-group">                            
													<label>Tarif</label>  
														<select id="trf" name="trf" class="form-control" required>                                
															<option value="">-- Pilih Tarif --</option>                                
															<option value="2400">-- Sosial Umum (Rp.2.400)--</option>                                
															<option value="2700">-- Sosial Khusus (Rp.2.700)--</option>                               
															<option value="3000">-- Rumah Tangga A (Rp.3.000)--</option>                                 
															<option value="3750">-- Rumah Tangga B (Rp.3.750)--</option>                              
															<option value="4500">-- Rumah Tangga C (Rp.4.500)--</option>                               
															<option value="5250">-- Instansi Pemerintah (Rp.5.250)--</option>                                
															<option value="7500">-- Niaga A (Rp.7.500)--</option>                                   
															<option value="9000">-- Niaga B (Rp.9.000)--</option>                                 
															<option value="10500">-- Niaga C (Rp.10.500)--</option>                               
															<option value="11250">-- Industri A (Rp.11.250)--</option>  
															<option value="18000">-- Industri B (Rp.18.000)--</option>                                 
															<option value="39000">-- Usaha pada kawasan pelabuhan (Rp.39.000)--</option> 
															<option value="46500">-- Tangki air non komersil (Rp.46.000)--</option> 
															<option value="69000">-- Tangki air komersil (Rp.69.000)--</option> 
														</select>                                  
												</div>  
								<button type="submit" class="btn btn-primary op" style="width: 100%;">Hitung</button>
							</form><br/><br/> 
							</div>
						</div>
					</div><br/>
				</div>
			</div><br/>
</div>
</div>
</body>