<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$spp = $_GET['id'];

 
// menghapus data dari database
mysqli_query($kon,"delete from spp where id_spp='$spp'");
 
// mengalihkan halaman kembali ke index.php
 
header("location:../admin/spp.php");
 
?>