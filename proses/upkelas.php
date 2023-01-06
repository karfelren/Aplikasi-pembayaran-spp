<?php
include '../koneksi.php';

$id_kelas = $_POST['id_kelas'];
$kelas = $_POST['kelas'];
$kompetensi = $_POST['kompetensi'];

mysqli_query($kon, "update kelas set nama_kelas='$kelas', kompetensi_keahlian='$kompetensi' where id_kelas='$id_kelas'");

header("location:../admin/kelas.php");
?>