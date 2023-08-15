<?php
include 'koneksi.php';
		$id=$_REQUEST["idDisposisi"];
		$id_dok=$_POST["idDokumen"];
		$user=$_POST["user"];
		$disposisi=$_POST["disposisi"];
		$Tgldok=$_POST["tglDis"];
		$tujuanDok=$_POST["tujuanDis"];	

	$update="UPDATE tb_disposisi SET user='$user', disposisi='$disposisi', tgl_disposisi='$Tgldok', tujuan_disposisi='$tujuanDok' WHERE id_disposisi='$id'";
	$sql=mysqli_query($config,$update);

	if($sql){
		
	 	 echo"<script> alert ('Data Berhasil Tersimpan');
	 	 location.href='sekretaris/main_s.php?p=../dispo&id=$id_dok';</script>";
	 }
	else{
		echo mysqli_error($config);
	 	echo"<script> alert ('Data Gagal Tersimpan');
		windows.history.go(-1);</script>";
	}
       
?>