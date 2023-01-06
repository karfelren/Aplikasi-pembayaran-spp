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
	<a href="petugas.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="../proses/adpetugas.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>					
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_petugas"></td>					
			</tr>
			<tr>
				<td>Sebagai</td>
				<td><select name="level"> 
					<option value="admin">Admin</option>
					<option value="petugas">Petugas</option>
					</select>
				</td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>