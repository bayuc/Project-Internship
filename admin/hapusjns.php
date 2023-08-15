<?php
	include "../koneksi.php";
	$id = $_REQUEST["id"];
	$query = "DELETE FROM tb_jenis_dok where id_jenis_dok = '$id'";
	$sql = mysqli_query($config, $query);
	if($sql){
		header("location:admin.php?p=jenisdok");
	}else{
		header("location:.php");
	}
?>