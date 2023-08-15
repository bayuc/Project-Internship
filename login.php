<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['uname'];
$password = $_POST['pass'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($config,"select * from tb_user where user_name='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['user_id']=="1"){
 
		// buat session login dan username
		$_SESSION['user_name'] = $username;
		$_SESSION['user_id'] = "1";
		// alihkan ke halaman dashboard admin
		header("location:admin/admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['user_id']=="2"){
		// buat session login dan username
		$_SESSION['user_name'] = $username;
		$_SESSION['user_id'] = "2";
		// alihkan ke halaman dashboard pegawai
		header("location:sekretaris/main_s.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['user_id']=="3"){
		// buat session login dan username
		$_SESSION['user_name'] = $username;
		$_SESSION['user_id'] = "3";
		// alihkan ke halaman dashboard pengurus
		header("location:user/user.php");
 	
 	}else if($data['user_id']=="4"){
		// buat session login dan username
		$_SESSION['user_name'] = $username;
		$_SESSION['user_id'] = "4";
		// alihkan ke halaman dashboard pengurus
		header("location:user/user.php");
 	
 	}else if($data['user_id']=="5"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['user_id'] = "5";
		// alihkan ke halaman dashboard pengurus
		header("location:user/user.php");
 	
 	}else if($data['user_id']=="6"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['user_id'] = "6";
		// alihkan ke halaman dashboard pengurus
		header("location:user/user.php");
 	
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>