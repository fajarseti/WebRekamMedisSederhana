<?php
session_start();
error_reporting(0);
include 'koneksi.php';
$id_dokter = '';
$noid = $_POST['noid'];
$order_name = $_POST['nama_dokter'];
$spesialis_dokter = $_POST['spesialis_dokter'];
$tarif = $_POST['tarif_dokter'];

// query untuk insert data order baru
  $insert = "insert into dokter values('$id_dokter','$noid','$order_name','$spesialis_dokter','$tarif')";
  mysql_query($insert);
  
 header('location:index.php?page=lihat_dokter');

?>