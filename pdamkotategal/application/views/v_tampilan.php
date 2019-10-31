
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
            <div class="card" style="width: 18rem;">
  
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Informasi Tagihan</h5>
            <div class="garis-bawah"></div>
            &nbsp


            <div style="overflow-x:auto;">

           
                <!--//36.78.220.116:6101/ws_cek_tagihan?parm_nosr=

                //192.168.1.3:6101/ws_cek_tagihan?parm_nosr -->
<?php  
	$sumber = 'http://36.78.220.116:6101/ws_cek_tagihan?parm_nosr='.$_POST["no"];
    $konten = file_get_contents($sumber);
    $json_data = json_decode($konten, true);
    
    $jml = is_countable($json_data);
    
    if($jml>0){
		echo " <center><strong> No SR : ".$json_data["DataUmum"][0]["nosr"]."</strong></center><br/>";
		echo " <center><strong>Nama : ".$json_data["DataUmum"][0]["nama"]."</strong></center><br/>";
		echo " <center><strong>Alamat :".$json_data["DataUmum"][0]["alamat"]."</strong></center><br/>";
		echo " <center><strong>Status :".$json_data["DataUmum"][0]["status"]."</strong></center><br/>";
		echo " <center><strong>Sisa Tagihan Rek. Air : Rp".$json_data["DataUmum"][0]["sisa_rekAir_rp"]."&nbsp; (".$json_data["DataUmum"][0]["sisa_rekAir_bln"].") bulan </strong></center><br/>";
		echo " <center><strong>Sisa Tagihan Rek. Sambar : Rp ".$json_data["DataUmum"][0]["sisa_rekSambar_Rp"]."&nbsp; (".$json_data["DataUmum"][0]["sisa_rekSambar_bln"].") bulan </strong></center><br/>";
	}else{
		echo "<center><strong>OOPS... HASIL PENCARIAN TIDAK DITEMUKAN</strong></center>";
	}

?>  

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