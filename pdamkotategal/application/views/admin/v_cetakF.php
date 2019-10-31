<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Kritik & Saran Pelanggan</h1>
<table border="1" width="100%">
<tr>
	<th>No</th>
    <th>Id Feedback</th>
    <th>No Sambungan Pelanggan</th>
    <th>Kritik</th>
    <th>Saran</th>
    <th>Tanggal Input</th>
    <th>Jam Input</th>
</tr>
<?php
if( ! empty($feedback)){
    $no = 1;
    foreach($feedback as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data->Id_Feedback."</td>";
        echo "<td>".$data->No_Sambungan."</td>";
        echo "<td>".$data->Kritik."</td>";
        echo "<td>".$data->Saran."</td>";
        echo "<td>".$data->Tgl_Input."</td>";
        echo "<td>".$data->Jam_Input."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
</table>
<h5><strong>Dicetak pada Tanggal : <?php
						date_default_timezone_set('Asia/Jakarta');
						$date = date('d-m-Y');
						$time = date('H:i:s');
						echo $date; 
						echo ', Jam : '. $time;
						if( ! empty($feedback)){
							foreach($feedback as $data){
							}
								$id = $data->Id_Admin;
						echo ', Oleh : '. $id ;
						}
						?></strong></h5>

</body>
</html>