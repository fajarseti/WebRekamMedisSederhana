<?php
session_start();
error_reporting(0);
include 'koneksi.php';
$id_obat = '';
$no_obat= $_POST['no_obat'];
$nama_obat= $_POST['nama_obat'];
$jenis_obat = $_POST['jns_obat'];
$gram_obat = $_POST['gram_obat'];
$tarif_obat = $_POST['tarif_obat'];

// query untuk insert data order baru
  $insert = "insert into obat values('$id_obat','$no_obat','$nama_obat','$jns_obat','$gram_obat','$tarif_obat')";
  mysql_query($insert);
  
 header('location:index.php?page=lihat_obat');

?>