<?php
include '../koneksi.php';

$id = $_POST['id_pembayaran'];
$petugas = $_POST['petugas'];
$nisn = $_POST['nisn'];
$tgl = $_POST['tgl_bayar'];
$bulan = $_POST['bulan_bayar'];
$spp = $_POST['id_spp'];
$jumlah = $_POST['jumlah_dibayar'];

mysqli_query($kon, "update pembayaran set id_pembayaran='$id', id_petugas='$petugas', nisn='$nisn', tgl_bayar='$tgl', bulan_dibayar='$bulan', id_spp='$spp', jumlah_bayar='$jumlah' where id_pembayaran='$id'");
header("location:../petugas/pembayaran.php");


?>