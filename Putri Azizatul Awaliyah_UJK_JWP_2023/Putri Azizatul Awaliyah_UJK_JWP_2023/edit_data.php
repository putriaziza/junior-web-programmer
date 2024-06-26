<?php
	include "koneksi.php";

	$id = $_GET['Id_peserta'];
	$data = mysqli_query($koneksi,"select * from tb_mahasiswa where Id_peserta='$Id'");
	$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Mahasiswa</title>
	<style type="text/css">
		body {
			width: 80%;
			margin: auto;
		}
		input, select{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
		}
		label{
			font-family: sans-serif;
		}

	</style>

</head>
<body>
	<h1>FORM DATA</h1>
	<hr>
	<form action="update_data.php" method="post">
		<div>
			<label for="Kd_Skema">KODE SKEMA</label><br>
			<input type="hidden" name="Id_peserta" value="<?php echo $d['Id_peserta'];?>">
			<input type="text" name="Kd_Skema" value="<?php echo $d['Kd_Skema'];?>" required="required">
		</div>
		<div>
			<label for="Nm_Skema">NAMA SKEMA</label><br>
			<input type="text" name="Nm_Skema" value="<?php echo $d['Nm_Skema'];?>">
		</div>
		<div>
			<label for="Jenis">JENIS</label><br>
			<input type="text" name="Jenis" value="<?php echo $d['Jenis'];?>">
		</div>
		<div>
			<label for="Jml_Unit">JUMLAH UNIT</label><br>
			<input type="text" name="Jml_Unit" value="<?php echo $d['Jml_Unit'];?>">
		</div>
		<br>
		<input type="submit" value="SIMPAN">
	</form>

	
</body>
</html>