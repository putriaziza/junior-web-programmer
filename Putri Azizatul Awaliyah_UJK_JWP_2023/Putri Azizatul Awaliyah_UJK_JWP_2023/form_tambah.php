<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Tambah Data Skema </title>
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
	<h1>FORM DATA SKEMA</h1>
	<hr>
	<form action="sertifikasi.php" method="post">
		<div>
			<label for="Kd_Skema">KODE SKEMA</label><br>
			<input type="text" name="Kd_Skema" placeholder="Isikan kode" required="required">
		</div>
		
		<div>
			<label for="Nm_Skema">NAMA SKEMA</label><br>
			<input type="text" name="Nm_Skema" placeholder="Isikan nama skema">
		</div>
		<div>
			<label for="Jenis">JENIS</label><br>
			<input type="text" name="Jenis" placeholder="Isikan jenis">
			
		</div>
		<div>
			<label for="Jml_Unit">JUMLAH UNIT</label><br>
			<input type="text" name="Jml_Unit" placeholder="Isikan jumlah">
		</div>
		<br>
		<input type="submit" value="SIMPAN">
	</form>

	
</body>
</html>