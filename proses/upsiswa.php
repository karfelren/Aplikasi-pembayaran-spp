<?php
include '../koneksi.php';

$id = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

mysqli_query($kon, "update siswa set nisn='$id', nis='$nis', nama='$nama', id_kelas='$id_kelas', alamat='$alamat', no_telp='$no_telp' where nisn='$id'");

header("location:../admin/siswa.php");
?>