<?php
  date_default_timezone_set("Asia/Jakarta");
  session_start();
  $gerbang= $_SESSION['gerbang'];
  $tgl = date("d/m/Y");
  $jam = date("H:i:s");

include "aksi_koneksi.php";
    $gerbang = $_POST["gerbang"];
    $waktu = $_POST["waktu"];
    $hitung = 0.034*$waktu;
    $kurang = $hitung-4.2;

    	if($kurang<207){
    		$harga_total = 13000;
        $golongan="Golongan 3";
    	} else if ($kurang >=207 and $kurang<220){
            $harga_total = 9500;
            $golongan="Golongan 2";
        } else if ($kurang >=220){
            $harga_total = 6500;
            $golongan="Golongan 1";
        }

    		$q = "INSERT INTO `tol` (`golongan`, `harga_tol`) VALUES ('$golongan', '$harga_total')";
    $s = mysqli_query($koneksi,$q);
?>

<script>
    var popup = window.confirm("Ingin Cetak Struk?");
if (popup==true){

location.href = "#html";

}else{
    location.href = "dashboardpegawai.php?simpan=berhasil";
}
</script>

<img src="images/test2.png" class="kiri" style="width: 70px;">PKKPT
<br>
<br>
<table id="html" border="0" style="width: 80%; font-family: times new roman; font-size: 25pt;">
        <tr>
          <td><?php echo "$gerbang"; ?></td>  
        </tr>
        <tr>
          <td><?php echo "$tgl"; ?></td>
          <td><?php echo "$jam"; ?></td>  
        </tr>
        <tr>
          <td><?php echo "$golongan"; ?></td>
          <td>E-TOLL</td> 
          <td>Rp. <?php echo "$harga_total"; ?></td>  
        </tr>
    </table>

<script>
        window.print();
        </script>