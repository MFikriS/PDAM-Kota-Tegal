

<head>
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
<script>
    $(document).ready(function(){
      $('.refreshCaptcha').on('click', function(){
        $.get('<?php echo base_url().'Feedback/refresh'; ?>', function(data){
          $('#captImg').html(data);
        });
      });
    });
  </script>
</head>

<body>

<div id="card-content">
   <div id="card-title">
   
    <center><h2 class="abc" style="font-weight: bold;">Kritik dan Saran</h2></center>
 
    <div class="underline-tittle">
    <form method="post" action="<?php echo base_url('Feedback') ?>" onsubmit="return validasi_input(this)">
    <h style="color: red;"><?php echo $this->session->flashdata('messages'); ?></h>
    <h style="color: red;"><?php echo $this->session->flashdata('message'); ?></h>
     <label for="email" style="padding-top:13px">&nbsp;Nomor Sambungan</label>
      <input type="number" min="0" id="sam" onKeyPress="if(this.value.length==10) return false" name="sam" class="form-control" placeholder="Masukkan angka sambungan disini" required autofocus><br/>

     <div class="form-group">
   <label for="user-message" class=" control-label">Kritik
   </label>
   <div>
       <textarea name="kritik" id="kritik" class="form-control" cols="5" rows="2" placeholder="Masukkan Kritik Anda"></textarea>
   </div><!--end col 10-->
 </div>
       <div class="form-group">
   <label for="user-message" class="control-label">Saran
   </label>
   <div>
       <textarea name="saran" id="saran" class="form-control" cols="5" rows="2" placeholder="Masukkan Saran Anda"></textarea>
   </div><!--end col 10-->
 </div>


    <label for="password">&nbsp;Kode Keamanan</label>
       <p id="captImg"><?php echo $image; ?></p>
  
  <a href="javascript:void(0);" class="refreshCaptcha" ><img src="<?php echo base_url().'assets/gambar/refresh.png'; ?>" height="28" width="28"/></a>

  
    <input type="text" name="captcha" placeholder="masukan kode keamanan disini"  /> </input></br></br>
    
       <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" value="submit"/></input>
     

     </form>
    
    
   </div>
  </div>
 </div>
 </div>
 <script type="text/javascript">
	function validasi_input(form){
	  var mincar = 10;
	  if (form.sam.value.length != mincar){
		alert("Panjang Nomor Sambungan Harus = 10 Digit!");
		form.sam.focus();
		return (false);
	  }
	   return (true);
	}
</script>
 </body>