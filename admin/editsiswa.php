<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../proses/pesan.php?pesan=sebagai");
	} else if ($_SESSION['level']=="petugas"){
		header("location:../proses/pesan.php?pesan=sebagai");	
	}
 ?>


<?php
	include '../koneksi.php';
	$nisn = $_GET['id'];
	$data = mysqli_query($kon,"select * from siswa where nisn='$nisn'");
	$d = mysqli_fetch_array($data)
		?>
        
		<form method="post" action="../proses/upsiswa.php">
			<table>
			    <tr>
					<td><input type="hidden" name="nisn" value="<?php echo $d['nisn']; ?>"></td>
				</tr>
				<tr>
					<td>Nis</td>
					<td><input type="number" name="nis" value="<?php echo $d['nis']; ?>"></td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>
				  <td>Kelas</td>
			      <td><select name="kelas" required>
                  <?php $query_kelas=mysqli_query($kon,"SELECT * FROM kelas");
                   while ($data_kelas=mysqli_fetch_array($query_kelas)) { ?>                
                   <option value="<?PHP echo $data_kelas['id_kelas']; ?>"><?PHP echo $data_kelas['kompetensi_keahlian']; ?> <?PHP echo $data_kelas['nama_kelas']; ?></option>
                 <?PHP } ?>
                </select></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
                <tr>
					<td>No Telp</td>
					<td><input type="number" name="no_telp" value="<?php echo $d['no_telp']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
                </table>
		</form>
		