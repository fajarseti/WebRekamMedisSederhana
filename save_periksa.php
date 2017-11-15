<?php
session_start();
error_reporting(0);

include 'koneksi.php';
$no_periksa		=	$_POST['no_periksa'];
$tgl_periksa	=	$_POST['tgl_periksa'];
$nirm			=	$_POST['nirm'];

// query untuk insert data user baru
  $insert = "insert into periksa values('','$no_periksa','$tgl_periksa','$nirm')";
  mysql_query($insert);
  
 header("location:index.php?page=input_dtlperiksa&&no_periksa=$no_periksa&&tgl_periksa=$tgl_periksa&&nirm=$nirm");

?>