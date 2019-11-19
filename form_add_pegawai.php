<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Add Pegawai</title>
<link rel="stylesheet" type="text/css" href="style_pegawai.css">
</head>
<section id="menu" class="no-sticky">
	<img src="images/test2.png" class="kiri" style="width: 34px;">
			<div class="right" style="margin-top: 10px;">
		<div class="content">
			
			</div>
			<div class="right">
				<ul>
					<li><a href="dashboardpemilik.php">Home</a></li>
					<li><a href="laporan.php">Laporan</a></li>
					<li><a href="form_add_pegawai.php">Daftar</a></li>
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
		<div class="content">
		<table cellpadding="3">
			
		<form action="add_pegawai.php" method="POST" enctype="multipart/form-data">
		<h2 align="center">SELAMAT DATANG DI INPUT PEGAWAI<br>MASUKAN DATA</h2>
		<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="berhasil"){
			echo "<div class='alert1'>Data berhasil dimasukan</div>";
		}
		}
	?>							
		<tr>
		<div  class="form-input">
		<td><h3>Id Pegawai</h3></td>
		<td><input type="text" name="id_pegawai" placeholder="Masukan ID" required><p/></td>	
		</tr>	
		
		<tr>	
		<td><h3>Nama Pegawai</h3></td>
		<td><input type="text" name="nama" placeholder="Masukan Nama" required><p/></p>
		</td>
	</tr>
	<tr>	
		<td><h3>User Name</h3></td>
		<td><input type="text" name="username" placeholder="Masukan username" required><p/></p>
		</td>
	</tr>
		
			<tr>
			<td>	
			<h3>Level</h3>
			</td>	
			<td>
  			<input type="radio" name="status" value="Admin" required> Admin
			</td>
			<td>
  			<input type="radio" name="status" value="Pegawai" required> Pegawai
			</td>	
			</tr>		
<tr>
<td></td>
<td></td>
<td></td>
<td>
<script type="text/javascript"></script>
	<button class="btn btn-tomati" type="submit" value="kirim" >Simpan</button>
	
</td>

</tr>

	</form>
		</table>
		</div>
		<div class="clear"></div>
		</div>
		</section>
		<?php
		if(isset($_SESSION["message"])){
			echo $_SESSION["message"];
			unset ($_SESSION["message"]);
		}
	?>
</html>