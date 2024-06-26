<?php 
	include "koneksi.php";

	$Kd_Skema = $_POST['Kd_Skema'];
	$Nm_Skema = $_POST['Nm_Skema'];
	$Jenis = $_POST['Jenis'];
	$Jml_Unit = $_POST['Jml_Unit'];

	$query = mysqli_query($koneksi, "insert into tb_skema value('','$Kd_Skema','$Nm_Skema','$jenis','$Jml_Unit')");

	header('location:data_skema.php')

?>