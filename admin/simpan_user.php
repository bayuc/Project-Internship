<?php
	include "../koneksi.php";

	if (isset($_POST['tambah'])){
		$userid=$_POST["userid"];
		$username=$_POST["username"];
		$pass=$_POST["pass"];

	//perintah insert data di mysql
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

	$query="INSERT INTO tb_user (user_id,user_name,password)
			values ('$iduser','$username','$pass')";



	//validasi data berhasil atau tidak dimasukkan
	 if(mysqli_query($config,$query)){
	 	header("location:admin.php?p=tambahuser");
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
	 }
?>