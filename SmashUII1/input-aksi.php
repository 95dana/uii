<?php 
include 'koneksi.php';
$nomer = $_POST['nomer'];
$nama_tim = $_POST['nama_tim'];
$lapangan = $_POST['lapangan'];
$tanggal_main = $_POST['tanggal_main'];
$jam = $_POST['jam'];
mysql_query("INSERT INTO user VALUES('','$nomer','$nama_tim','$lapangan','$tanggal_main','$jam')");

header("location:index.php?pesan=input");
?>