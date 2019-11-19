<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Pemilik</title>
<link rel="stylesheet" type="text/css" href="dashboardpemilik.css">
</head>
<section id="menu" class="no-sticky">
		<img src="images/test2.png" class="kiri" style="width: 34px;">
			<div class="right" style="margin-top: 10px;">
				<ul>
					<li><a href="laporan.php">Laporan</a></li>
					<li><a href="form_add_pegawai.php">Daftar</a></li>
					<li><a href="logout_admin.php" class="btn btn-tomato">Logout</a></li>
				</ul>
			</div>
		</div>
	</section>
			<div class="clear"></div>
		
			<div id="container">
	
<section class="slateGrey" id="section1">
	<div class="content"></div>
</section>

		<!--<img src="images/test2.png" class="tengah">-->
		<h2 align="center">SELAMAT DATANG DI DASHBOARD<br>PEMILIK</h2>
		<div class="content">
		<table cellpadding="3">
<h3 align="left">Grafik Golongan Mobil</h3>
			<div style="width: 800px;height: 800px">

	<script type="text/javascript" src="pustaka_fc/js/fusioncharts.js"></script>
	<script type="text/javascript" src="pustaka_fc/js/themes/fusioncharts.theme.fint.js"></script>
	<script type="text/javascript">
		FusionCharts.ready(function(){
					var G = new FusionCharts(
							{
								"type":"bar3d",
								"renderAt":"lokasiA",
								"width":"800",
								"height":"500",
								"dataFormat":"jsonurl",
								"dataSource":"getDB.php"
							}
						)
					G.render();
				}
			)
	</script>
</head>
<body>
<div id="lokasiA"></div>
</body>
</html>

<!--Fungsi Load Javascript fusioncharts
<script type="text/javascript" src="JS/jquery-1.4.js"></script>
<script type="text/javascript" src="JS/jquery.fusioncharts.js"></script>
GRAFIK JUMLAH SISWA PER KELAS

<table id="TableSiswa" border="0" align="center" cellpadding="10">
    <tr bgcolor="#FF9900" style='display:none;'> <th>Kelas</th> <th>Jumlah Siswa</th></tr>
    <?php
	//KONEKSI KE DATABASE
//	mysql_connect("localhost", "root", "") ;
//    mysql_select_db("tol_kel7");
	//QUERY AMBIL DATA KELAS
//    $query_kelas = "SELECT * FROM tol";
//    $result_kelas = mysql_query($query_kelas);
//    $count_kelas = mysql_num_rows($result_kelas);

//    while ($data = mysql_fetch_array($result_kelas)) {
//      $kode_kelas = $data['id_tol'];
		//QUERY MENGHITUNG JUMLAH SISWA SESUAI DENGAN KODE KELAS
//       $query_siswa = "SELECT COUNT(*) AS jumlah FROM tol WHERE id_tol='golongan'";
//        $result_siswa = mysql_query($query_siswa);
//        $data_siswa = mysql_fetch_array($result_siswa);

//        echo "<tr bgcolor='#D5F35B' style='display:none;'>
//              <td>Kelas $data[tol]</td>
//              <td align='center'>$data_siswa[jumlah]</td>
//              </tr>";
 //   }
 //   ?>

</table>
LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE
<script type="text/javascript">
    $('#TableSiswa').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#TableSiswa",
        dataFormat: "HTMLTable"
    });
</script>-->
	
<!--<script type="text/javascript" src="JS/jquery-1.4.js"></script>
<script type="text/javascript" src="JS/jquery.fusioncharts.js"></script>

<table id="Golongan" border="0" align="center" cellpadding="10">
 <tr bgcolor="#c04848" style='display:none;'>
 <?php
 
// 
// 
// include 'aksi_koneksi.php';
 
// $q = "SELECT * FROM golongan";
// $result_kelas = mysqli_query($koneksi,$q);
// $count_kelas = mysqli_num_rows($result_kelas);
//	while ($data = mysqli_fetch_array($result_kelas)) {
// $id = $data['id_gol'];
// $query = "SELECT COUNT(golongan) AS jumlah FROM tol ";
//"SELECT COUNT(*) AS jumlah_pemasukan FROM pemasukan WHERE id_ikan='$id'";
// $result = mysqli_query($koneksi,$query);
// $data_masuk = mysqli_fetch_array($result);
// echo "<tr bgcolor='#601848' style='display:none;'>
// <td>$data[golongan]</td>
// <td align='center'>$data_masuk[jumlah]</td>
// </tr>";
// }
// ?>
</table>

<script type="text/javascript">
 $('#Tabletransaksi').convertToFusionCharts({
 swfPath: "Charts/",
 type: "MSColumn3D",
 data: "#Tabletransaksi",
 dataFormat: "HTMLTable",
 yAxisName:"jumlah",
 width: "800",
 height: "500"
 //});
</script>
		</div>
</html>-->