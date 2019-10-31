<head>


 <link href="assets/css/bootstrap.css" rel="stylesheet">
 <link href="assets/css/style.css" rel="stylesheet">
     <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


  <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <style type="text/css">
    .card-panel{
        transition: box-shadow .25s;
        padding:24px 24px;
        
        border-radius: 6px;
        background: #FFFFFF;
         
    margin: 4rem auto 8.1rem auto;
    margin-top: 50px;
    margin-left:10px;
    margin-right:10px;

    }

    body{
        background: #C0D9FF;
    }
	
	@media (max-width: 414px) {
	.abc {
		width: 270px;
		height: 200px;
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
<div class="card-panel white">
<div class="container-fluid">
<div class="row mt-5">
        <div class="col">

    <?php
                    foreach ($informasi as $info2) {
                    ?>
                   
            <h3 class="text-center"><?= $info2->Judul ?></h3>
            &nbsp

				<h4 style="font-size: 13px;">Terbit pada: <?= $info2->Tgl_Terbit; ?> | <?= $info2->Jam_Terbit; ?></br> Oleh: <?= $info2->Id_Admin; ?></h4>
	            <p style="text-align: justify;">
				<?php echo '<img class="abc" src="' . base_url().'assets/upload/' . $info2->Gambar . '"" alt="Card image cap";  width="400" height="220"  style="float:left;"/>' ;  ?>
                <?= $info2->Isi ?></p>

        <?php
         }
        ?>
                &nbsp
	          
            

            

            </div>
        </div>
        </div>
    </div>
