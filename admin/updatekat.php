<?php
include '../koneksi.php';

		$id=$_POST["id"];
		$kat=$_POST["kategori"];
		
	
	$update="UPDATE tb_katdok SET kategori='$kat' WHERE id_katdok ='$id'";
	

	$sql=mysqli_query($config,$update);
	if($sql){
		
	 	echo"<script> alert ('Data Berhasil Tersimpan');
	  	location.href='admin.php?p=kategoridok';</script>";
	 }
	else{
		echo mysqli_error($config);
	 	echo"<script> alert ('Data Gagal Tersimpan');
		windows.history.go(-1);</script>";
	}
	if (!isset($_GET['p'])) {
                
            } else {
                $page = $_GET['p'];
                include $page .".php";
            }
	 
?>