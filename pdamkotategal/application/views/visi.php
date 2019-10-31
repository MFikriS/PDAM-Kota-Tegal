<head>
    
    
 <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
 <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
	
	
    .card-panel{
          transition: box-shadow .25s;
        padding:24px 24px;
        
        border-radius: 2px;
        background: #FFFFFF;
         
    margin: 4rem auto 8.1rem auto;

    }

    body{
        background: #C0D9FF;
    }
	
    </style>
</head>



<div class="asip">
<div class="container-fluid">
<div class="row mt-5">
        <div class="col">
        <center>
        <div class="card-panel white">

            <h3 class="text-center">Visi</h3>
			<?php foreach($vm as $d){ ?>
            &nbsp
            <div class="ngalir">
                <p style="text-align: center;"><?php echo $d->Visi ?></p>
                &nbsp
                    
            <h3 class="text-center">Misi</h3>
            &nbsp
			
                <p style="text-align: center;">
				<?php echo $d->Misi1 ?>
                </p>
                <p style="text-align: center;">
				<?php echo $d->Misi2 ?>
                </p>
                <p style="text-align: center;">
                <?php echo $d->Misi3 ?>
                </p>
                 <p style="text-align: center;">
                <?php echo $d->Misi4 ?>
                </p>
                <p style="text-align: center;">
				<?php echo $d->Misi5 ?>
                </p>
				<p style="text-align: center;">
				<?php echo $d->Misi6 ?>
                </p>
				<p style="text-align: center;">
				<?php echo $d->Misi7 ?>
                </p>
				<p style="text-align: center;">
				<?php echo $d->Misi8 ?>
                </p>
				<p style="text-align: center;">
				<?php echo $d->Misi9 ?>
                </p>
				<p style="text-align: center;">
				<?php echo $d->Misi10 ?>
                </p>
            </div>
            </div>

            </center>
        </div>
			<?php } ?>
        </div>
    </div>
    </div>