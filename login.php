<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<?php
	 $gerbang = array("Ramp Taman Mini","Ramp Dukuh","Jakarta IC","Pasar Rebo","Cibubur", "Gunung Putri", "Citereup", "Sentul", "Bogor", "Ciawi", "Cimanggis");
	?>
 
	<h1>Login</h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username atau password yang anda masukkan salah!</div>";
		}
		else if($_GET['pesan']=="logout"){
			echo "<div class='alert'>Anda Telah Logout, Terima Kasih!</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Masuk Sebagai Pegawai</p>
 
		<form action="ceklogin.php" method="post">
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">


		<select class="form_login" name="gerbang">
			<?php
				foreach ($gerbang as $masuk)
					echo "<option value='$masuk'>$masuk</option>"
			?>
		</select>
 
			<input type="submit" class="tombol_login" value="LOGIN">
 			<center>
			<br>	
			<input type="button" onclick="window.location.href='index.html'" class="tombol_login" value="Kembali">
			</center>
			<br/>
			<br/>
			
		</form>
		
	</div>
 
 
</body>
</html>