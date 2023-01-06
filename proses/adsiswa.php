<?php 
include '../koneksi.php';

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

 
mysqli_query($kon, "INSERT INTO siswa (nisn,nis,nama,id_kelas,alamat,no_telp)VALUES('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp')");
 
header("location:../admin/siswa.php");
?>