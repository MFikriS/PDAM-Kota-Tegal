<head>



  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style type="text/css">
    .card-panel{
        transition: box-shadow .25s;
        padding:24px 24px;
        
        border-radius: 6px;
        background: #FFFFFF;
         
    margin: 4rem auto 8.1rem auto;
    margin-top: 2px;
    margin-left:10px;
    margin-right:10px;


    }

    body{
        background: #C0D9FF;
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
    </style>
</head>



<body>
<div class="container-fluid">
<div class="row mt-5">
        <div class="col">
        <center>
        <div class="card-panel white">
			<?php
                    foreach ($prosedur2 as $d) {
                    ?>
            <h3 class="text-center">Prosedur Berhenti Sementara Menjadi Pelanggan</h3>
             <div style="overflow-x:auto;">
            <table class="table mt-5">
                <?php echo '<img src="' . base_url().'assets/upload/prosedur/' . $d['Gambar'] . '" width="600" height="600" style="margin-top: 10px;"/>'; ?>
            </table>
			</div>
			 <?php
                    }
                    ?>
            &nbsp
            <div class="ngalir">
                <p style="text-align: justify;">Prosedur berhenti sementara jadi pelanggan PDAM sebagai berikut:</p>
				
                <p style="text-align: justify;">1. Pelanggan melapor ke bagian Humas untuk tutup sementara.
                </p>

                <p style="text-align: justify;">
                2. Bagian distribusi mengambil meteran dan koordinasi dengan bagian kas dan rekening untuk menghentikan rekening pelanggan.
                </p>

            </div>
            </div>

            </center>
        </div>
        </div>
    </div>
&nbsp
</body>