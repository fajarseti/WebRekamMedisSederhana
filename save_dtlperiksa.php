<?php

include 'koneksi.php';
$no_periksa		=	$_POST['no_periksa'];
$tgl_periksa	=	$_POST['tgl_periksa'];
$nirm			=	$_POST['nirm'];
$nama_pasien	=	$_POST['nama_pasien'];
$jns_kelamin	=	$_POST['jns_kelamin'];
$noid			=	$_POST['noid'];
$jml_periksa	=	$_POST['jml_periksa'];


// query untuk insert data user baru
  
  $insert2 = "insert into dtl_periksa values('','$no_periksa','$noid','$jml_periksa')";
  mysql_query($insert2);
  
	header("location:index.php?page=input_dtlperiksa&&no_periksa=$no_periksa&&tgl_periksa=$tgl_periksa&&nirm=$nirm");
?>