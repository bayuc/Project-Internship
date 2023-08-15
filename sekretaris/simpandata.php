<?php
	include "../koneksi.php";
	if ($_POST){

		$idDokumen=$_POST["idDokumen"];
		$nmrDok=$_POST["nmrDok"];
		$asalDok=$_POST["asalDok"];
		$tglDok=$_POST["tglDok"];
		$perihalDok=$_POST["perihalDok"];
		$tujuanDok=$_POST["tujuanDok"];	
		$kategoriDok=$_POST["kategoriDok"];
		$jenisDok=$_POST["jenisDok"];
		$bagian=$_POST["bagian"];
		$target_dir = "../Dokumen/";
		$nama_file = basename($_FILES["filedokumen"]["name"]);
		$target_file = $target_dir . $nama_file;
		$FileType = strtolower(pathinfo($nama_file,PATHINFO_EXTENSION));
		$fileSize = $_FILES["filedokumen"]["size"] ;

	$query="INSERT INTO tb_dok (id_dok,nomor_surat,asal_surat,tgl_surat,perihal,kepada,id_kadok,id_jenis_dok,id_bagian,id_fu,nama_file)
			values ('$idDokumen','$nmrDok','$asalDok','$tglDok','$perihalDok','$tujuanDok','$kategoriDok','$jenisDok','$bagian','2','$target_file')";

	
    // $check = ($_FILES["file"]["tmp_name"]);
    // if($check !== false) {
    //     echo "File is an image - " . $check["mime"] . ".";
    //     $uploadOk = 1;
    // } else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    // }
	//validasi data berhasil atau tidak dimasukkan
		define("FILEREPOSITORY","./");
	//if($_FILES["filedokumen"]["size"] < 1000000) {
		if($FileType != "pdf") {
			echo"<script> alert('Data Harus PDF')</script>";
		}else{	
			if(mysqli_query($config,$query)){
			 	move_uploaded_file($_FILES["filedokumen"]["tmp_name"], $target_file);
			 	//header("location:main_s.php?p=../dok");
			 	echo"<script> alert ('Data Berhasil Tersimpan');
			 	location.href='main_s.php?p=../dokumen&id=$kategoriDok';</script>";
		 	}else{
			 	echo mysqli_error($config);
			 	echo"<script> alert ('Data Gagal Tersimpan');
				windows.history.go(-1);</script>";
		 	}
		 }	
    //}else{
    	//echo "<script>alert('$fileSize');windows.history.go(-1);</script>";
	//}
 }      
?>