<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
// menghapus data dari database
mysqli_query($kon,"delete from pembayaran where id_pembayaran='$id'");
 
// mengalihkan halaman kembali ke index.php
 
header("location:../petugas/pembayaran.php");
 
?>