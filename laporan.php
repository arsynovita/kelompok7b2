<?php
	session_start();
	$nama= $_SESSION['nama'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Pemilik</title>
<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/Buttons-1.6.1/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="dashboardpegawai.css">

	<script type="text/javascript" src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="DataTables/Buttons-1.6.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="DataTables/JSZip-2.5.0/jszip.min.js"></script>
	<script type="text/javascript" src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="DataTables/Buttons-1.6.1/js/buttons.html5.min.js"></script>
	<script>
		
		$('document').ready(function(){
		$('table').DataTable({
			dom: 'Bfrtip',
			buttons:[
				'excelHtml5',{
					extend: 'pdfHtml5',
					text: 'Lihat PDF',
					orientation: 'portrait',
					pageSize:'A4',
					download: 'open',
					customize: function(doc){
						doc.content[1].table.widths = Array(doc.content[1].table.body[0].length+1).join('*').split('');
					},
					title: function(){
						return 'Laporan Data Transaksi';
					}
				}
				]
		});
	});
	</script>
</head>
<section id="menu" class="no-sticky">
		<img src="images/test2.png" class="kiri" style="width: 34px;">
			<div class="right" style="margin-top: 10px;">
				<ul>
					<li><a href="dashboardpemilik.php">Home</a></li>
					<li><a href="laporan.php">Laporan</a></li>
					<li><a href="form_add_pegawai.php">Daftar</a></li>
					<li><a href="logout_admin.php" class="btn btn-tomato">Logout</a></li>
				</ul>
			</div>
		</div>
	</section>
			<div class="clear"></div>
		
			<div id="container">
	
<section class="slateGrey" id="section1">
	<div class="content" style="margin-top: 40px;">
		<table class="table1">
	<?php
		include 'aksi_koneksi.php';
		$query = "SELECT * FROM tol";
			$result = mysqli_query($koneksi,$query);
?>
		<tbody>
			<?php
		while ($row = mysqli_fetch_array($result)) {
		
	?>
	
		<tr style="text-align: center;">
		<td><?php echo $row[0]?></td>
		<td><?php echo $row[1]?></td>
		<td><?php echo $row[2]?></td>
	</tr>
	
	<?php
		}
	?>
	</tbody>
	<thead>
	<tr>
		<th>ID Tol</th>
		<th>Golongan</th>
		<th>Harga</th>
	</tr>
	</thead>
</table>
	</div>
</section>

	<section class="pale">
		</div>
		<div class="clear"></div>
		</div>
		</section>
</html>