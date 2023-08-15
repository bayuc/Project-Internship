<?php
	include "../koneksi.php";
	$id = $_REQUEST["id"];
	$query = "DELETE FROM tb_katdok where id_katdok = '$id'";
	$sql = mysqli_query($config, $query);
	if($sql){
		header("location:admin.php?p=kategoridok");
	}else{
		header("location:.php");
	}
?>