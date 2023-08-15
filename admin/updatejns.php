<?php
include '../koneksi.php';

		$id=$_POST["id"];
		$jenis=$_POST["jenis"];
		
	
	$update="UPDATE tb_jenis_dok SET jenis_dok='$jenis' WHERE id_jenis_dok ='$id'";
	

	$sql=mysqli_query($config,$update);
	if($sql){
		
	 	echo"<script> alert ('Data Berhasil Tersimpan');
	  	location.href='admin.php?p=jenisdok';</script>";
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