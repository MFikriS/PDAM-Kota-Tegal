<head>
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

<div class="container-fluid">
<div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Kapasistas Produksi</h3>

            <?php if (empty($data_teknik)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>
            <div style="overflow-x:auto;">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">SUMBER AIR</th>
                        <th class="text-center" scope="col">KAPASITAS PRODUKSI(Liter/Detik)</th>
                        <th class="text-center" scope="col">KAPASITAS TEREALISASI(Liter/Detik)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_teknik as $tek) : ?>
                    <tr>
                        <td class="text-center"><?= $tek['Sumber_Air']; ?></td>
                        <td class="text-center"><?= $tek['Tersedia']; ?></td>
                        <td class="text-center"><?= $tek['Dimanfaatkan']; ?></td>
                      
                    </tr>
                    <?php endforeach ?>
                    
                </tbody>
            </table>
            </div>
            
        </div>
        </div>
    </div>
