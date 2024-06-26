<?php 
	include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Skema</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
			width: 80%;
			text-align: center;
			margin: auto;
		}

		.table1{
			font-family: sans-serif;
			border-collapse: collapse;
			width: 100%;
			margin: auto;
		}

		.table1 tr th {
			background: #35A9DB;
			color: #fff;
			text-align: center;
			padding: 20px 8px;
		}

		.table1, th, td {
			text-align: center;
			padding: 20px 8px;
			border: 1px solid lightblue;
		}

		.btn-edit {
			background: darkblue;
			padding: 10px 15px 10px 15px;
			color: #fff;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
		}

		.btn-hapus{
			background: darkblue;
			padding: 10px 15px 10px 15px;
			color: #fff;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
		}

		.btn {
			background: darkblue;
			padding: 10px 15px 10px 15px;
			color: #fff;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
			float: left;
		}

		a:hover{
			background: red;
		}

		.table1 tr:hover {
			background-color: lightblue;
		}


	</style>
</head>
<body>
	<h3>DATA SKEMA SERTIFIKASI</h3>
	<hr>
	<a href="form_tambah.php" class="btn">TAMBAH DATA</a>
	<table class="table1">
		<tr>
			<th>KODE SKEMA</th>
			<th>NAMA SKEMA</th>
			<th>JENIS</th>
			<th>JUMLAH UNIT</th>
			<th>AKSI</th>
		</tr>

		<?php
			$data = mysqli_query($koneksi,"select * from tb_skema");
			while ($d=mysqli_fetch_array($data) ) {
				# code...
			
		?> 
		<tr>
			<td><?php echo $d['Kd_Skema'];?> </td>
			<td><?php echo $d['Nm_Skema'];?> </td>
			<td><?php echo $d['Jenis'];?> </td>
			<td><?php echo $d['Jml_Unit'];?> </td>
			<td><a href="edit_mhs.php?id_mhs=<?php echo $d['Kd_Skema'];?>" class="btn-edit">EDIT </a> <a href="hapus.php?Kd_Skema=<?php echo $d['Kd_Skema'];?>" onclick="return confirm('Apakah mau dihapus?')" class="btn-hapus">HAPUS</a></td>

		</tr>
	<?php } ?>
	</table>
</body>
</html>