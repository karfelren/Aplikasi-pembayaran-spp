<?php 
include "../koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama_petugas'];
$level = $_POST['level'];

mysqli_query($kon, "INSERT INTO petugas (username,password,nama_petugas,level)VALUES('$username', '$password', '$nama', '$level')");

header("location:../admin/petugas.php");

?>