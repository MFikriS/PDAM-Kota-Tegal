
<head>
    <style type="text/css">
	
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
}
	
        .card-body{
        background: #C4C4C4;
    }

    .garis-bawah{
        height: 5px;
        width:100%;
        background: #4A93FF;
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
&nbsp
<div class="container-fluid">
<div class="container1">    
    <center>
            <div class="col.md-3">
            <div class="card" style="width: 50rem;">
  
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Hasil Perhitungan</h5>
            <div class="garis-bawah"></div>
            &nbsp


            <div style="overflow-x:auto;">
<?php  
	echo "Stand Awal : $awal M3"; echo "<br>";
	echo "Stand Akhir : $akhir M3"; echo "<br>";
	echo "Tarif1: Rp. $trf"; echo "<br>";
	echo "Selisih : $slsh M3"; echo "<br>";
	echo "Biaya Admin : Rp. $admin"; echo "<br>";
	echo "$tghn"; echo "<br>";

?> </br>
<font size="2px"><strong>Cara Menghitung Tagihan</strong></p>
<p> 1. Menghitung selisih (Selisih = Stand Akhir - Stand Awal),</br>
2. Total Tagihan = (Selisih x Tarif1) + Biaya Admin, </br>
     Jika Total Tagihan lebih dari Rp. 250000 maka dikenakan biaya tambahan berupa bea materai sebagai berikut :</br>
	 - Total Tagihan Rp. 250.000 sampai kurang dari 1.000.000 dikenakan materai sebesar Rp. 3.000</br>
	 - Total Tagihan lebih dari 1.000.000 dikenakan materai sebesar Rp. 6.000</br>
3. Jika selisih lebih dari 10, diberlakukan 2 tarif sebagai berikut<br>  
        Tagihan 1 = 10M3 x Tarif1</br>
		Tagihan 2 = (Selisih - 10M3) x Tarif2</br>
4. Total Tagihan = Tagihan 1 + Tagihan 2 + Biaya Admin, diberlakukan biaya tambahan seperti point 2
</br></p>
<a href="<?php echo base_url().'Pdam/simulasi_tarif' ?>" button class="btn btn-md btn-primary" style="width:100%" type="submit"><span class="glyphicon glyphicon-globe">Kembali</button></a>
						

&nbsp
        
                    
            </div>
            </div>
            </div>
            </div>
            </center>
            </div>
        </div>
        </div>
    </div>
    &nbsp
</body>