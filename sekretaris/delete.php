<?php
	include "../koneksi.php";

	$id = $_REQUEST["id"];
	$query = "DELETE FROM tb_dok where nomor_surat = '$id'";
	$sql = mysqli_query($config, $query);
	if($sql){
		header("location:main_s.php?p=../dokumen&id=id_kadok");
	}else{
		header("location:.php");
	}
			if (!isset($_GET['p'])) {
            
            } else {
                $page = $_GET['p'];
                include $page .".php";
            }
?>