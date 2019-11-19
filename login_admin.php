<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
 
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
		<p class="tulisan_login">Masuk Sebagai Admin</p>
 
		<form action="ceklogin_admin.php" method="post">
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
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