<?php
include '../koneksi.php';

		$id=$_REQUEST["id"];
		$userid=$_POST["userid"];
		$uname=$_POST["username"];
		$pass=$_POST["pass"];
		$bagian=$_POST["bagian"];
		$unit=$_POST["unit"];


	if ($userid == "Sekretaris") {
		$iduser = "2";
	}
	elseif ($userid == "Pemimpin Divisi") {
		$iduser = "3";
	}
	elseif ($userid == "Pemimpin Bagian") {
		$iduser = "4";
	}
	elseif ($userid == "Pengelola") {
		$iduser = "5";
	}
	elseif ($userid == "Staf") {
		$iduser = "6";
	}

	$update="UPDATE tb_user SET user_id='$iduser', user_name='$uname', password='$pass', id_bagian='$bagian', id_unit='$unit' WHERE id='$id'";
	$sql=mysqli_query($config,$update);

	if($sql){
		
	 	echo"<script> alert ('Data Berhasil Tersimpan');
	  	location.href='admin.php?p=tambahuser';</script>";
	 }
	else{
		echo mysqli_error($config);
	 	echo"<script> alert ('Data Gagal Tersimpan');
		windows.history.go(-1);</script>";
	}
	if (!isset($_GET['p'])) {
                include ('dashboard.php');
            } else {
                $page = $_GET['p'];
                include $page .".php";
            }
	 
?>