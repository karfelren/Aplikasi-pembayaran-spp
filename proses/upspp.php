<?php
include '../koneksi.php';

$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

mysqli_query($kon, "update spp set tahun='$tahun', nominal='$nominal' where id_spp='$id_spp'");

header("location:../admin/spp.php");
?>