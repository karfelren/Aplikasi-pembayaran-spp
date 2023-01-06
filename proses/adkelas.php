<?php 
include "../koneksi.php";

$kelas = $_POST['kelas'];
$kompetensi = $_POST['kompetensi'];

mysqli_query($kon, "INSERT INTO kelas (nama_kelas, kompetensi_keahlian)VALUES('$kelas', '$kompetensi')");

header("location:../admin/kelas.php");

?>