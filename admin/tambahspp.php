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
	<a href="spp.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="../proses/adspp.php" method="post">		
		<table>
			<tr>
				<td>Tahun</td>
				<td><input type="number" name="tahun"></td>					
			</tr>	
			<tr>
				<td>Nominal</td>
				<td><input type="number" name="nominal"></td>					
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>