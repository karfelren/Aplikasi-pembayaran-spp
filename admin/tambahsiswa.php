<?php
include '../koneksi.php';
?>

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
	<a href="siswa.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="../proses/adsiswa.php" method="post">		
		<table>
		    <tr>
				<td>NISN</td>
				<td><input type="number" name="nisn"></td>					
			</tr>
			<tr>
				<td>NIS</td>
				<td><input type="number" name="nis"></td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<td>Kelas</td>
			<td><select name="id_kelas" required>
                <?php $query_kelas=mysqli_query($kon,"SELECT * FROM kelas");
                 while ($data_kelas=mysqli_fetch_array($query_kelas)) { ?>
                 
                   <option value="<?PHP echo $data_kelas['id_kelas']; ?>"><?PHP echo $data_kelas['kompetensi_keahlian']; ?> <?PHP echo $data_kelas['nama_kelas']; ?></option>
                 <?PHP } ?>
                </select></td>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td>Telepon</td>
				<td><input type="number" name="no_telp"></td>					
			</tr>	
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>