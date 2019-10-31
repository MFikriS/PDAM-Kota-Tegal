<head>
	<style>
		<script>
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

@media (max-width: 414px) {
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

    /*#region Organizational Chart*/

h {
    text-align: center;
    color: white;
}

.geser{
    padding-left: 100px;
    
}

.tree * {
    margin: 0; padding: 0;


}

.tree ul {
    padding-top: 20px; position: relative;

    -transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}

.tree li {
    float: left; text-align: center;
    list-style-type: none;
    position: relative;
    padding: 20px 5px 0 5px;

    -transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/




.tree li::before, .tree li::after{
    content: '';
    position: absolute; top: 0; right: 50%;
    border-top: 2px solid #696969;
    width: 50%; height: 20px;
}
.tree li::after{
    right: auto; left: 50%;
    border-left: 2px solid #696969;
}

/*We need to remove left-right connectors from elements without 
any siblings*/
.tree li:only-child::after, .tree li:only-child::before {
    display: none;
}

/*Remove space from the top of single children*/
.tree li:only-child{ padding-top: 0;}

/*Remove left connector from first child and 
right connector from last child*/
.tree li:first-child::before, .tree li:last-child::after{
    border: 0 none;
}
/*Adding back the vertical connector to the last nodes*/
.tree li:last-child::before{
    border-right: 2px solid #696969;
    border-radius: 0 5px 0 0;
    -webkit-border-radius: 0 5px 0 0;
    -moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
    border-radius: 5px 0 0 0;
    -webkit-border-radius: 5px 0 0 0;
    -moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.tree ul ul::before{
    content: '';
    position: absolute; top: 0; left: 50%;
    border-left: 2px solid #696969;
    width: 0; height: 20px;
}

.tree li a{
    height: 200px;
    width: 170px;
    padding: 5px 10px;
    text-decoration: none;
    background: linear-gradient(blue, white);
    color: #8b8b8b;
    font-family: arial, verdana, tahoma;
    font-size: 11px;
    display: inline-block;  
    box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	border-radius: 20px 20px;
    -transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}

.kabag li a{
    height: 210px;
    width: 130px;
    padding: 5px 10px;
    text-decoration: none;
    background: linear-gradient(blue, white);
    color: #8b8b8b;
    font-family: arial, verdana, tahoma;
    font-size: 11px;
    display: inline-block;  
    box-shadow: 0 1px 2px rgba(0,0,0,0.1);
    border-radius: 20px 20px;
    -transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;   
}


.kasubag li a{
    height: 160px;
    width: 90px;
    padding: 5px 10px;
    text-decoration: none;
    background: linear-gradient(blue, white);
    color: #8b8b8b;
    font-family: arial, verdana, tahoma;
    font-size: 11px;
    display: inline-block;  
    box-shadow: 0 1px 2px rgba(0,0,0,0.1);
    border-radius: 20px 20px;
    -transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;   
}


/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree li a:hover, .tree li a:hover+ul li a {
    background: #cbcbcb; color: #000;
}
/*Connector styles on hover*/
.tree li a:hover+ul li::after, 
.tree li a:hover+ul li::before, 
.tree li a:hover+ul::before, 
.tree li a:hover+ul ul::before{
    border-color:  #94a0b4;
}


@media all and (max-width: 767px){
    .tree{
        padding: 0 20px;
    }   
}

@media all and (max-width: 360px){
    .tree{
       margin-left: -600px;
    }   
}

@media all and (max-width: 375px){
    .tree{
       margin-left: -100px;
    }   
}


@media all and (max-width: 767px){
    ul a{
        font-size: 1em;
    }
}

/*#endregion*/


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
		font-size: 14px;
		font-family: Oldenburg;
		margin-left: 80px;
	}
	h1 {
		font-size: 14px;
		font-family: Oldenburg;
		margin-top: -64px;
		margin-left: 100px;
	}
}
	</script>
	</style>
</head>

<div class="container-fluid">
<div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Data Umum</h3>
			<div style="overflow-x:auto;">
		
            <div style="overflow-x:auto;">
            <table class="table mt-5">
                <thead>
                    <tr>
						<th>Jumlah Penduduk</th>
						<th>Jumlah Pelanggan</th>
						<th>Jumlah Pelanggan Aktif</th>
					</tr>
					<?php 
						foreach($data_umum as $d){ 
					?>
					<tr>
						<td class="align-middle "><?php echo $d['Jml_Pnddk'] ?></td>
						<td class="align-middle "><?php echo $d['Jml_Pel'] ?></td>
						<td class="align-middle "><?php echo $d['Jml_Pel_Aktif'] ?></td>   
					</tr>
						<?php } ?>
                    
                </tbody>
            </table>
            </div>
            
            <div class="geser"><h3 class="text-center">Bagan Organisasi PDAM Kota Tegal </h3>
			<center>
			
			<div class="col-md-10">
            <div class="tree">
                <ul>
               
                    <li>
                        <a href="#">

                            <div class="container-fluid">
                                <div class="row">

                    <?php
                    foreach ($direktur as $d) {
                    ?>

                                    </div>
<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $d['Foto_pegawai'] . '" width="120" height="120" style="margin-top: 10px;"/>'; ?>
                                    
									<h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 15px;"><?= $d['Jabatan']; ?></h2></br>
                                    
                                   
                                
                                <div class="row" style="margin-top: -10px;">
                                    <i class="fa fa-exclamation-circle fa-2x"></i>
                                </div>
                                <div class="row">
                                    <h2 style="margin-left: 12px; font-size: 18px;"><?= $d['Nama_pegawai']; ?></h2>
                                </div>
                                 <?php
                    }
                    ?>
                            </div>
                            

                        </a>
                        <ul>
                        <div class="kabag">
                            <li>
                                <a href="#">

                                    <div class="container-fluid">
                                        <div class="row">

                    <?php
                    foreach ($ktehnik as $t) {
                    ?>
                                          

                                        </div>
                                         

<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $t['Foto_pegawai'] . '" width="80" height="100" style="margin-top: 10px;"/>'; ?>
                                    
									<h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $t['Jabatan']; ?></h2></br>
             
                                        <div class="row" style="margin-top: -10px;">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="row">
                                             <h2 style="margin-left: 12px; font-size: 12px;"><?= $t['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                </a>


                            <ul>
                            <div class="kasubag">
                                <li>
                                    <a>
                                    <div class="container-fluid">
                                        <div class="row">

                    <?php
                    foreach ($sper as $p) {
                    ?>
                                          

                                        </div>
                                         

<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $p['Foto_pegawai'] . '" width="70" height="70" style="margin-top: 10px;"/>'; ?>
                                    
                                    <h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $p['Jabatan']; ?></h2></br>
             
                                        <div class="row" style="margin-top: -10px;">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="row">
                                             <h2 style="margin-left: 12px; font-size: 12px;"><?= $p['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                    </a>
                                </li>
                                <li>
                                    <a>
                                    <div class="container-fluid">
                                        <div class="row">

                    <?php
                    foreach ($speral as $per) {
                    ?>
                                          

                                        </div>
                                         

<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $per['Foto_pegawai'] . '" width="70" height="70" style="margin-top: 10px;"/>'; ?>
                                    
                                    <h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $per['Jabatan']; ?></h2></br>
             
                                        <div class="row" style="margin-top: -10px;">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="row">
                                             <h2 style="margin-left: 12px; font-size: 12px;"><?= $per['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                    </a>
                                </li>
                                <li>
                                    <a>
                                    <div class="container-fluid">
                                        <div class="row">

                    <?php
                    foreach ($sdist as $d) {
                    ?>
                                          

                                        </div>
                                         

<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $d['Foto_pegawai'] . '" width="70" height="70" style="margin-top: 10px;"/>'; ?>
                                    
                                    <h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $d['Jabatan']; ?></h2></br>
             
                                        <div class="row" style="margin-top: -10px;">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="row">
                                             <h2 style="margin-left: 12px; font-size: 12px;"><?= $d['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                    </a>
                                </li>
                                <li>
                                    <a>
                                    <div class="container-fluid">
                                        <div class="row">

                    <?php
                    foreach ($ssum as $s) {
                    ?>
                                          

                                        </div>
                                         

<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $s['Foto_pegawai'] . '" width="70" height="70" style="margin-top: 10px;"/>'; ?>
                                    
                                    <h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $s['Jabatan']; ?></h2></br>
             
                                        <div class="row" style="margin-top: -10px;">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="row">
                                             <h2 style="margin-left: 12px; font-size: 12px;"><?= $s['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                    </a>
                                </li>
                                </div>
                            </ul>
                            

                            <li>
                                <a href="#">

                                    <div class="container-fluid">
                                        <div class="row">
                                            
                    <?php
                    foreach ($kpelanggan as $p) {
                    ?>
                                            

                                        </div>
                                         
<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $p['Foto_pegawai'] . '" width="80" height="100" style="margin-top: 10px;"/>'; ?>
                                    
									<h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $p['Jabatan']; ?></h2></br>
             
                                    
                                        <div class="row" style="margin-top: -10px;">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="row">
                                            <h2 style="margin-left: 12px; font-size: 12px;"><?= $p['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                </a>
                                <ul>
                                <div class="kasubag">
                                <li>
                                    <a>
                                    <div class="container-fluid">
                                        <div class="row">

                    <?php
                    foreach ($srek as $rek) {
                    ?>
                                          

                                        </div>
                                         

<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $rek['Foto_pegawai'] . '" width="70" height="70" style="margin-top: 10px;"/>'; ?>
                                    
                                    <h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $rek['Jabatan']; ?></h2></br>
             
                                        <div class="row" style="margin-top: -10px;">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="row">
                                             <h2 style="margin-left: 12px; font-size: 12px;"><?= $rek['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                    </a>
                                </li>
                                <li>
                                    <a>
                                    <div class="container-fluid">
                                        <div class="row">

                    <?php
                    foreach ($shum as $hum) {
                    ?>
                                          

                                        </div>
                                         

<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $hum['Foto_pegawai'] . '" width="70" height="70" style="margin-top: 10px;"/>'; ?>
                                    
                                    <h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $hum['Jabatan']; ?></h2></br>
             
                                        <div class="row" style="margin-top: -10px;">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="row">
                                             <h2 style="margin-left: 12px; font-size: 12px;"><?= $hum['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                    </a>
                                </li>
                                
                                </div>
                            </ul>
                            </li>
                            <li>
                                <a href="#">

                                    <div class="container-fluid">
                                        <div class="row">
                                                                   
                    <?php
                    foreach ($kkeuangan as $k) {
                    ?>
                                            

                                        </div>
                                         
<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $k['Foto_pegawai'] . '" width="80" height="100" style="margin-top: 10px;"/>'; ?>
                                    
									<h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $k['Jabatan']; ?></h2>
                                        <div class="row" style="margin-top: 10px;">
                                            <i class="fa fa-exclamation-circle fa-inv fa-2x"></i>
                                        </div>
                                        <div class="row">
                                            <h2 style="margin-left: 12px; font-size: 12px;"><?= $k['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                </a>
                                <ul>
                                <div class="kasubag">
                                <li>
                                    <a>
                                    <div class="container-fluid">
                                        <div class="row">

                    <?php
                    foreach ($sbuku as $buk) {
                    ?>
                                          

                                        </div>
                                         

<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $buk['Foto_pegawai'] . '" width="70" height="70" style="margin-top: 10px;"/>'; ?>
                                    
                                    <h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $buk['Jabatan']; ?></h2></br>
             
                                        <div class="row" style="margin-top: -10px;">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="row">
                                             <h2 style="margin-left: 12px; font-size: 12px;"><?= $buk['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                    </a>
                                </li>
                                <li>
                                    <a>
                                    <div class="container-fluid">
                                        <div class="row">

                    <?php
                    foreach ($skasir as $kas) {
                    ?>
                                          

                                        </div>
                                         

<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $kas['Foto_pegawai'] . '" width="70" height="70" style="margin-top: 10px;"/>'; ?>
                                    
                                    <h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $kas['Jabatan']; ?></h2></br>
             
                                        <div class="row" style="margin-top: -10px;">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="row">
                                             <h2 style="margin-left: 12px; font-size: 12px;"><?= $kas['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                    </a>
                                </li>
                                <li>
                                    <a>
                                    <div class="container-fluid">
                                        <div class="row">

                    <?php
                    foreach ($speg as $peg) {
                    ?>
                                          

                                        </div>
                                         

<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $peg['Foto_pegawai'] . '" width="70" height="70" style="margin-top: 10px;"/>'; ?>
                                    
                                    <h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $peg['Jabatan']; ?></h2></br>
             
                                        <div class="row" style="margin-top: -10px;">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="row">
                                             <h2 style="margin-left: 12px; font-size: 12px;"><?= $peg['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                    </a>
                                </li>
                                <li>
                                    <a>
                                    <div class="container-fluid">
                                        <div class="row">

                    <?php
                    foreach ($sgud as $gud) {
                    ?>
                                          

                                        </div>
                                         

<?php echo '<img src="' . base_url().'assets/upload/pegawai/' . $gud['Foto_pegawai'] . '" width="70" height="70" style="margin-top: 10px;"/>'; ?>
                                    
                                    <h2 style="margin-left: 0px; font-weight: bold; margin-top: 10px; font-size: 13px;"><?= $gud['Jabatan']; ?></h2></br>
             
                                        <div class="row" style="margin-top: -10px;">
                                            <i class="fa fa-exclamation-circle fa-2x"></i>
                                        </div>
                                        <div class="row">
                                             <h2 style="margin-left: 12px; font-size: 12px;"><?= $gud['Nama_pegawai']; ?></h2>
                                        </div>

                                        <?php
                    }
                    ?>
                                    </div>

                                    </a>
                                </li>
                                </div>
                            </ul>

                            </li>
</div>

                        </ul>
                    </li>

                </ul>
            </div>
			</div>
            </div>
            </div></center>
        </div>
    </div>
</div>

&nbsp
        </div>
        </div>
    </div>
