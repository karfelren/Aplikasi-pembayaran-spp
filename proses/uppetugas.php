<?php
include '../koneksi.php';

$id = $_POST['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$petugas = $_POST['nama'];
$level = $_POST['level'];

mysqli_query($kon, "UPDATE petugas SET username='$username', password='$password', nama_petugas='$petugas', level='$level' WHERE id_petugas='$id'");
header("location:../admin/petugas.php");


?>