<!DOCTYPE html>
<html>
<head>
	<title>Akun | User</title>
</head>
<body>

	<?php
		session_start();

		if($_SESSION['status']==""){
			header("location:index.php?pesan=gagal");
		}
	?>
	<h1>Akun | Admin</h1>
	<h3>Anda telah masuk sebagai user</h3>
	<a href="index.html">Keluar</a>

	
</body>
</html>