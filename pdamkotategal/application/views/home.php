		
	<head>
		

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>

<script type="text/javascript" src="assets/jquery.bxslider/jquery.bxslider.min.js"></script>


<link rel="stylesheet" type="text/css" href="assets/jquery.bxslider/jquery.bxslider.css">





  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <script>
  	$(function(){
	      $('.bxslider').bxSlider({
	        autoControls: true,
	        auto: true,
	        pager: true,
	        mode: 'horizontal',
	        captions: true,
	        speed: 1000,
	        slideWidth: 560
	        
	      });    
	    });    
  </script>



  <style type="text/css">
  	.h{
 		text-align: center; 
  	}

  	.card-body{
  		background: #C4C4C4;
  	}
  
  	.left{
  		float :left !important;
  	}

  	.op {
	background : #157FFB;

	color: white;
	font-size:11pt;
	width:100%;
	border:none;
	padding: 10px 20px;
	border-radius: 5px;
	align-content: center
}
	.container1 {
    display:grid;
    grid-template-columns: 66% auto;
    padding: 2em 1em;
}

.row .col{
	float: left;
	box-sizing:  border-box;
	padding: 0 0.7rem;
	min-height: 1px;
}
		.container {
    display:grid;
    padding: 2em;
}

.goks{
		
        padding-left: 200px;
}

	.garis-bawah{
		height: 5px;
		width:100%;
		background: #4A93FF;
	}


	.garis-bawah2{
		height: 2px;
		width:100%;
		background: #CDCDCD;
	}
	
	
	@media (max-width: 375px) {
		.gmbr {
			height: 200px;
		}
		
	}
	@media (max-width: 414px) {
		.gmbr {
			height: 200px;
		}
		
	}
}
  </style>
	
	

  </head>

		

<body>
				&nbsp
 <marquee bgcolor='#157FFB' style="color: white";>Bayarlah Rekening Air Tepat Waktu Maksimal Tanggal 25 Setiap Bulan </marquee>
	<div class="container-fluid">
    	<div class="row">
			<div class="col-md-3">
				<div class="container">

					<div class="card" style="width: 18rem;">
  
  			<div class="card-body">
  			<form class="form-horizontal" action="<?php echo base_url('Tagihan/cari'); ?>" method="post">
                <h5 class="card-title" style="text-align: center;">Cek Tagihan</h5>
                 <p class="card-text" style="text-align: justify;">Untuk melakukan cek tagihan silahkan masukkan nomor sambungan pelanggan</p>
    
                <label>No Sambungan</label><br/>
                <input type="text" id="no" name="no" class="form-control" placeholder="Nomor Sambungan" required><br/>

                <button type="submit" class="btn btn-primary op">Cek Tagihan</button>
            </form>
                <br/>
                <br/>
               
            </div>
        </div>

		  		</div>
			</div>

			<div class="col-md-6">
			<div class="container">
			<div class="bxslider">
						

		  							<?php
                    foreach ($informasi as $info1) {
                    ?>

<?php echo '<img class="gmbr" src="' . base_url().'assets/upload/' . $info1['Gambar'] . '"  height="340" width="560px"  ;/> '	?> 




		  					 <?php
                    }
                    ?>
		  			</div>
			
			</div>
			
			</div>
			
			<div class="col-md-3">
			<div class="container">
			<div class="bxslider">
		  							<?php
                    foreach ($informasi as $info1) {
                    ?>

<h4>
<?php echo $info1['Tgl_Terbit']; ?> | <?php echo $info1['Jam_Terbit']; echo "</br>"?> </style>
<?php echo "<center><strong>"; echo $info1['Judul']; echo"</strong></center>"; ?>
<?php $a = $info1['Isi']; echo substr($a,0,80).". . . . . ."; echo "</br>"; ?></br>
<center><a href="<?php echo site_url('info/baca_selengkapnya/'.$info1['Id_Informasi']) ?>"  class="btn btn-primary" width="200%">Baca Selengkapnya</a></center></h4>
				 



		  					 <?php
                    }
                    ?>
		  			</div>
			
			
			</div>
		</div>

		 </div>
	</div>
	&nbsp



			<h6 style="font-size: 24pt; text-align: center;">Berita Terbaru</h6>
		<div class="garis-bawah"></div>
			&nbsp




<div class="container-fluid">
		
	<div class="row">

	
	<?php
                    foreach ($informasi2 as $info2) {
                    ?>
                   
		<div class="col-md-4">
		<center>
			<div class="card" style="width: 20rem;">
			
  				 <?php echo '<img src="' . base_url().'assets/upload/' . $info2['Gambar'] . '"" alt="Card image cap";  width="318" height="200" />' ;  ?>
  					 
				  <div class="card-body">
				    <span class="card-title">
				    	<i class="left">
				    		<h4 style="font-size: 13px;">Terbit pada: <?= $info2['Tgl_Terbit']; ?> | <?= $info2['Jam_Terbit']; ?></h4>
				    	</i>
				    	</br>
				    </span>
					<span class="card-title">
				    	<i class="left">
				    		<h4 style="font-size: 13px;">Diterbitkan oleh: <?= $info2['Id_Admin']; ?></h4>
				    	</i>
				    	</br>
				    </span>
					<span class="card-title">
				    	<h4 style="font-weight: bold; font-size:16px;"><?= $info2['Judul']; ?></h4>
				    </span>
					
				    <p style="text-align: left; font-size: 12px;"><?php $a = $info2['Isi']; echo substr($a,0,80).". . . . . ."; ?></p>
				    
				    <a href="<?php echo site_url('info/baca_selengkapnya/'.$info2['Id_Informasi']) ?>"  class="btn btn-primary">Baca Selengkapnya</a>
				  </div>

		             
			</div>
			 <br/>
			 </center>
		</div>
			
		<?php
         }
        ?>
        
	</div>
</div>
<h6 style="font-size: 24pt; text-align: center;">Kerjasama</h6>
  <div class="garis-bawah"></div>
  &nbsp
  <div class="container">
  <?php
	$kol = 6;
	$jml_kol = 0;
	$kol_width = 12 / $kol;
	?>
	<div class="row">
	<?php
	foreach ($kerjasama as $k){
	?>  
			<div class="col-md-<?php echo $kol_width; ?>">
				<div class="thumbnail">
					<center><?php echo '<img src="' . base_url().'assets/upload/kerjasama/' . $k['Gambar'] . '"  height="60" width="120"/>' ?></center>
				</br>
				</div>
			</div>
	<?php
		$jml_kol++;
		if($jml_kol % $kol == 0) echo '</div><div class="row">';
	}
	?>
	</div>
	</div>
</body>