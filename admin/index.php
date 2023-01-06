<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../proses/pesan.php?pesan=sebagai");
	} else if ($_SESSION['level']=="petugas"){
		header("location:../proses/pesan.php?pesan=sebagai");	
	}
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
	<h1>Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="../logout.php">LOGOUT</a>
	<a href="siswa.php">Siswa</a>
	<a href="petugas.php">petugas</a>
	<a href="kelas.php">kelas</a> 
	<a href="spp.php">spp</a> 
	<a href="../petugas/pembayaran.php">pembayaran</a> 
	<br/>
	<br/>

</body>
</html>