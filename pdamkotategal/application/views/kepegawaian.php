<!--
ORG CHART
=========================================-->

<head>
    
<link rel="stylesheet" href="<?php base_url(); ?>assets/css/tree.css" type="text/css">


  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<style type="text/css">
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
</style>
</head>


<body>
 <div style="overflow-x:auto;">
<div class="container-fluid" style="margin-top:20px">
    <div class="row">
        <div class="col-md-12">
		<h1 style="text-align: center;">Struktur Organisasi PDAM Kota Tegal</h1>
		<?php
            foreach ($strktr_orgns as $s) {
        ?>
		&nbsp
		<center>
		<td class="align-middle "><?php echo '<img src="' . base_url().'assets/upload/struktur_organisasi/' . $s->Struktur_Organisasi . '"  height="350" width="800"/>'; ?></td>
		</center>				
		
		<?php
                    }
                    ?>
					
					
					
					<?php
                    foreach ($jml_peg as $j) {
                    ?>
		<h4 style="font-size: 18px;">Jumlah Pegawai Tetap: <?php echo $j['Jml_Pegawai_Tetap']; ?> orang</h4>
		<h4 style="font-size: 18px;">Jumlah Pegawai Tidak Tetap: <?php echo $j['Jml_Pegawai_Tidak_Tetap']; ?> orang</h4>
		<?php
                    }
                    ?>
            </div>
        </div>
    </div>
</div>

&nbsp

</body>