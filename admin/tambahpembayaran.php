<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../proses/pesan.php?pesan=sebagai");
	} 
 ?>

<?php
include '../koneksi.php';
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
   
  }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
</head>
<body>
	<a href="../petugas/pembayaran.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="../proses/adpembayaran.php" method="post">		
		<table>
		
            <td>Petugas</td>
			<td><select name="petugas" required>
                <?php $query_petugas=mysqli_query($kon,"SELECT * FROM petugas");
                 while ($data_petugas=mysqli_fetch_array($query_petugas)) { ?>
                 
                   <option value="<?PHP echo $data_petugas['id_petugas']; ?>"><?PHP echo $data_petugas['nama_petugas']; ?></option>
                 <?PHP } ?>
                </select></td>					
			
			<tr>
				<td>NISN</td>
				<td><select name="nisn" required>
                <?php $query_nisn=mysqli_query($kon,"SELECT * FROM siswa");
                 while ($data_nisn=mysqli_fetch_array($query_nisn)) { ?>
                 
                   <option value="<?PHP echo $data_nisn['nisn']; ?>"><?PHP echo $data_nisn['nisn']; ?> | <?PHP echo $data_nisn['nama']; ?></option>
                 <?PHP } ?>
                </select></td>							
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td><input type="date" name="tgl_bayar"></td>					
			</tr>	
            <tr>
				<td>Bulan Bayar</td>
				<td><select name="bulan_bayar">
				<option value="Januari">Januari</option>
				<option value="Februari">Februari</option>
				<option value="Maret">Maret</option>
				<option value="April">April</option>
				<option value="Mei">Mei</option>
				<option value="Juni">Juni</option>
				<option value="Juli">Juli</option>
				<option value="Agustus">Agustus</option>
				<option value="September">September</option>
				<option value="Oktober">Oktober</option>
				<option value="November">November</option>
				<option value="Desember">Desember</option>
				</select></td>					
			</tr>
            
            <tr>
            <td>Id_Spp</td>
			<td><select name="id_spp" required>
                <?php $query_spp=mysqli_query($kon,"SELECT * FROM spp");
                 while ($data_spp=mysqli_fetch_array($query_spp)) { ?>
                 
                   <option value="<?PHP echo $data_spp['id_spp']; ?>"><?PHP echo $data_spp['tahun']; ?> | <?PHP echo rupiah ($data_spp['nominal']); ?></option>
                 <?PHP } ?>
                </select></td>
            </tr>

            <tr>
				<td>Jumlah Bayar</td>
				<td><input type="number" name="jumlah_bayar"></td>					
			</tr>

            
            
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>