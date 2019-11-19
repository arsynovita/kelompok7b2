<?php
	error_reporting(0);
	DEFINE('dbuser','root');
	DEFINE('dbpass','');
	DEFINE('dbhost','localhost');
	DEFINE('dbname','tol_kel7');

	$koneksi = mysqli_connect(dbhost,dbuser,dbpass,dbname);

	if(mysqli_connect_errno()){
		echo "koneksi gagal";
		exit();
	}
	//print "koneksi sukses";

?>