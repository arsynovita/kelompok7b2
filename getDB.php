<?php
	
	$c = array(
		"caption"=>"Grafik Golongan Kendaraan",
		"subCaption"=>"PKKPT TOL",
		"xAxisName"=>"Golongan",
		"yAxisName"=>"Jumlah",
		"theme"=>"fint"
	);

	$d = array();

	$koneksi = mysqli_connect("localhost","root","","tol_kel7");
	$q = "SELECT *, COUNT(golongan) AS jumlah FROM tol GROUP BY (golongan)";
	$hq = mysqli_query($koneksi, $q);
	while ($rc= mysqli_fetch_assoc($hq)) {
		array_push($d, array("label"=>$rc["golongan"],"value"=>$rc["jumlah"]));
	}
	$gab = array("chart"=>$c, "data"=>$d);
	echo $jsonnya = json_encode($gab);

?>