<?php 
session_start();
 
include 'aksi_koneksi.php';
	
$username = $_POST['username'];
$password = $_POST['password'];
$gerbang = $_POST['gerbang'];

$q = "SELECT * FROM pegawai WHERE username='$username' AND password='$password'";
$login = mysqli_query($koneksi,$q);
 
if ($data = mysqli_fetch_assoc($login)){
	if($data['status'] == 'Pegawai'){
		session_start();
		$_SESSION['username'] = $data['username'];
		$_SESSION['id_pegawai'] = $data['id_pegawai'];
		$_SESSION['gerbang'] = $gerbang;
		header("location:dashboardpegawai.php");
 }else
 		header("location:login.php?pesan=gagal");
}else
		header("location:login.php?pesan=gagal");	
?>