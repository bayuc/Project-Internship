<?php
	include "../koneksi.php";
	$id = $_REQUEST["id"];
	$query = "DELETE FROM tb_user where id = '$id'";
	$sql = mysqli_query($config, $query);
	if($sql){
		header("location:admin.php?p=tambahuser");
	}else{
		header("location:.php");
	}
			if (!isset($_GET['p'])) {
            
            } else {
                $page = $_GET['p'];
                include $page .".php";
            }
?>