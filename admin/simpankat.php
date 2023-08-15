<?php
	include "../koneksi.php";

	if (isset($_POST['submit'])){
		$kategori=$_POST["kat_dok"];

	//perintah insert data di mysql
	$query="INSERT INTO tb_katdok (kategori)
			values ('$kategori')";

	//validasi data berhasil atau tidak dimasukkan
	 if(mysqli_query($config,$query)){
	 	//header("location:admin.php?p=jenisdok");
	 	echo mysqli_error($config);
	 	echo"<script> alert ('Data Berhasil Tersimpan');
	 	location.href='admin.php?p=kategoridok';</script>";
	 }
	 else{
	 	//header("location:input.php");
	 	echo mysqli_error($config);
	 	echo"<script> alert ('Data Gagal Tersimpan');
		windows.history.go(-1);</script>";
	 }

	 }
?>