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
	$id = $_GET['id'];
	$data = mysqli_query($kon,"select * from kelas where id_kelas='$id'");
	$d = mysqli_fetch_array($data)
		?>
        
		<form method="post" action="../proses/upkelas.php">
			<table>
				<tr>			
					<td>kompetensi</td>
					<td>
						<input type="hidden" name="id_kelas" value="<?php echo $d['id_kelas']; ?>">
						<input type="text" name="kelas" value="<?php echo $d['nama_kelas']; ?>">
					</td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kompetensi" value="<?php echo $d['kompetensi_keahlian']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
                </table>
		</form>
		