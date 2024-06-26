<?php
	include "koneksi.php";

	$Id_peserta=$_GET['Id_peserta'];

	mysqli_query($koneksi,"delete from tb_skema where id_peserta=$id_peserta");

	header("location:data_skema.php")
?>