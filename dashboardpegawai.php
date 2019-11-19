<?php
	session_start();
	$id_pegawai= $_SESSION['id_pegawai'];
	$gerbang= $_SESSION['gerbang'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Pegawai</title>
<link rel="stylesheet" type="text/css" href="dashboardpegawai.css">
</head>
<section id="menu" class="no-sticky">
				<img src="images/test2.png" class="kiri" style="width: 34px;">
			<div class="right" style="margin-top: 10px;">
		<div class="content">
			
			</div>
			<div class="right">
				<ul>
					<li><a href="logout.php" class="btn btn-tomato">Logout</a></li>
				</ul>
			</div>
		</div>
	</section>
			<div class="clear"></div>
		
			<div id="container">
	
<section class="slateGrey" id="section1">
	<div class="content"></div>
</section>

	<section class="pale">
		<!--<img src="images/test2.png" class="tengah">-->
		<h2 align="center">SELAMAT DATANG DI DASHBOARD<br>PEGAWAI</h2>							
		
		<div class="kotakform">
		<table cellpadding="3">
		<h3 align="left">Masukan Data :</h3>	
		<form action="proses_add_tol.php" method="post" enctype="multipart/form-data">
	
		<div class="form-input">	
		<tr>
			<input type="hidden" value="<?php echo $gerbang?>" name="gerbang" placeholder="Silahkan Generate" required><p/></p>
	<td>	<h3>Waktu (dalam ms)</h3></td>
	<td>	<input type="text" id="random" value="" name="waktu" placeholder="Silahkan Generate" required><p/></p></td>
		</tr>
	<tr>
<h6></h6>
<tr>
<td></td>
<td></td>
<td>
	<button type="button" class="btn btn-tomati" onclick="myFunction()">Generate</button>
	<script>
		function myFunction(){
			document.getElementById("random").value = Math.floor(Math.random() * 5000) + 5000;
		}
	</script>
</td>
<td>	
		<button class="btn btn-tomati" type="submit" value="Simpan">Cetak</button></div>
	</td>
</tr>
	</form>
		</table>
		</div>
		<div class="clear"></div>
		</div>
		</section>
</html>