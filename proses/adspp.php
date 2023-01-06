<?php 
include "../koneksi.php";

$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

mysqli_query($kon, "INSERT INTO spp (tahun, nominal)VALUES('$tahun', '$nominal')");

header("location:../admin/spp.php");

?>