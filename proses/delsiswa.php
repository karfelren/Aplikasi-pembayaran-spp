<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$nisn = $_GET['id'];

 
// menghapus data dari database
mysqli_query($kon,"delete from siswa where nisn='$nisn'");
 
// mengalihkan halaman kembali ke index.php
 
header("location:../admin/siswa.php");
 
?>