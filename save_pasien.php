<?php
session_start();
error_reporting(0);
include 'koneksi.php';
$id_pasien = '';
$nirm = $_POST['nirm'];
$order_name = $_POST['nama_pasien'];
$order_address = $_POST['alamat_pasien'];
$jkel = $_POST['jns_kelamin'];
$tgl_lahir = $_POST['tgl_lahir'];

// query untuk insert data order baru
  $insert = "insert into pasien values('$id_pasien','$nirm','$order_name','$order_address','$tgl_lahir','$jkel')";
  mysql_query($insert);
  
 header('location:index.php?page=lihat_pasien');

?>