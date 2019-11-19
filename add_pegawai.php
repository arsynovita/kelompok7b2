<?php
include 'aksi_koneksi.php';

$id_pegawai = $_POST["id_pegawai"];
$nama = $_POST["nama"];
$username = $_POST["username"];
$status	  = $_POST["status"];

$query = "INSERT INTO `pegawai`(`id_pegawai`,`nama`,`username`,`password`,`status`) VALUES ('$id_pegawai','$nama','$username','$id_pegawai','$status')";

mysqli_query($koneksi,$query);
header("location: form_add_pegawai.php");

?>