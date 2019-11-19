<!DOCTYPE html>
<html>
<head>
	<title>Akun | Admin</title>
</head>
<body>

	<?php
		session_start();

		if($_SESSION['status']==""){
			header("location:index.php?pesan=gagal");
		}
	?>
	<h1>Akun | Admin</h1>
	<h3>Anda telah masuk sebagai admin</h3>
	<a href="logout.php">Keluar</a>

	
</body>
</html>