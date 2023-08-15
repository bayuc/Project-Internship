<?php

	include "koneksi.php";
	$id = $_REQUEST["id"];
	$dok = $_REQUEST["dokumen"];
	$query = "DELETE FROM tb_disposisi where id_disposisi = '$id'";
	$sql = mysqli_query($config, $query);
	if($sql){
		echo"<script> alert ('Data Berhasil Dihapus');
		windows.history.go(-1);</script>";
		header("location:main_s.php?p=../dispo&id=$dok");

	}
	else{
		header("location:.php");
	}
?>