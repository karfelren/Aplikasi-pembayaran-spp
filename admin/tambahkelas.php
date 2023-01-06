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
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
</head>
<body>
	<a href="kelas.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="../proses/adkelas.php" method="post">		
		<table>
			<tr>
				<td>Kompetensi</td>
				<td><input type="text" name="kelas"></td>					
			</tr>	
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kompetensi"></td>					
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>