<?php 
include '../koneksi.php';

$petugas = $_POST['petugas'];
$nisn = $_POST['nisn'];
$tanggal = $_POST['tgl_bayar'];
$bulan = $_POST['bulan_bayar'];
$spp = $_POST['id_spp'];
$jumlah = $_POST['jumlah_bayar'];

mysqli_query($kon, "INSERT INTO pembayaran (id_petugas,nisn,tgl_bayar,bulan_dibayar,id_spp,jumlah_bayar)VALUES('$petugas','$nisn','$tanggal','$bulan','$spp','$jumlah')");

header("location:../petugas/pembayaran.php");

?>