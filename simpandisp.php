<?php
	include "koneksi.php";

	if (isset($_POST['tambah'])){
		$idDisposisi=$_POST["idDisposisi"];
		$idDokumen=$_POST["idDokumen"];
		$user=$_POST["user"];
		$disposisi=$_POST["disposisi"];
		$Tgldok=$_POST["tglDis"];
		$tujuanDok=$_POST["tujuanDis"];	

	$query="INSERT INTO tb_disposisi (id_disposisi,id_dok,user,disposisi,tgl_disposisi,tujuan_disposisi)
			values ('$idDisposisi','$idDokumen','$user','$disposisi','$Tgldok','$tujuanDok')";


	//validasi data berhasil atau tidak dimasukkan
	 if(mysqli_query($config,$query)){
	 	//header("location:dispo.php?id=$idDokumen");
	 	echo"<script> alert ('Data Berhasil Tersimpan');
	 	location.href='sekretaris/main_s.php?p=../dispo&id=$idDokumen';</script>";
	 }
	 else{
	 	echo mysqli_error($config);
	 	echo"<script> alert ('Data Gagal Tersimpan');
		windows.history.go(-1);</script>";
	 }

      }      
?>