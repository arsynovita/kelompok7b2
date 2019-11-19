<?php 
session_start();
 
include 'aksi_koneksi.php';
	
$username = $_POST['username'];
$password = $_POST['password'];

$q = "SELECT * FROM pegawai WHERE username='$username' AND password='$password'";
$login = mysqli_query($koneksi,$q);
 
if ($data = mysqli_fetch_assoc($login)){
	if($data['status'] == 'Admin'){
		session_start();
		$_SESSION['username'] = $data['username'];
		$_SESSION['nama'] = $data['nama'];
		header("location:dashboardpemilik.php");
	}else
		header("location:login_admin.php?pesan=gagal");
}else
		header("location:login_admin.php?pesan=gagal");	
 
?>