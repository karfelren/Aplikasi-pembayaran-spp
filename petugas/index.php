<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../proses/pesan.php?pesan=sebagai");
	} 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman petugas</title>
</head>
<body>
	<h1>Halaman Petugas</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="../logout.php">LOGOUT</a>
	<a href="pembayaran.php">pembayaran</a>
 
	<br/>
	<br/>
 
</body>
</html>