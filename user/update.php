<?php
include '../koneksi.php';
$id=$_REQUEST["idDokumen"];
		$nmrDok=$_POST["nmrDok"];
		$asalDok=$_POST["asalDok"];
		$tglDok=$_POST["tglDok"];
		$perihalDok=$_POST["perihalDok"];
		$tujuanDok=$_POST["tujuanDok"];	
		$kategoriDok=$_POST["kategoriDok"];
		$jenisDok=$_POST["jenisDok"];
		$bagian=$_POST["bagian"];
		$statusDok=$_POST["statusDok"];

	$update="UPDATE tb_dok SET nomor_surat='$nmrDok', asal_surat='$asalDok', tgl_surat='$tglDok', perihal='$perihalDok', kepada='$tujuanDok', id_kadok='$kategoriDok',id_jenis_dok='$jenisDok', id_bagian='$bagian', id_fu='$statusDok'	WHERE id_dok='$id'";
	$sql=mysqli_query($config,$update);

	if($sql){
		
	 	echo"<script> alert ('Data Berhasil Tersimpan');
	  	location.href='user.php?p=../dok';</script>";
	 }
	else{
		echo mysqli_error($config);
	 	echo"<script> alert ('Data Gagal Tersimpan');
		windows.history.go(-1);</script>";
	}
            
?>