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
	$data = mysqli_query($kon,"select * from petugas where id_petugas='$id'");
	$d = mysqli_fetch_array($data)
		?>
        
		<form method="post" action="../proses/uppetugas.php">
			<table>
				<tr>			
					<td>Username</td>
					<td>
						<input type="hidden" name="id_petugas" value="<?php echo $d['id_petugas']; ?>">
						<input type="text" name="username" value="<?php echo $d['username']; ?>">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="number" name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
				<tr>
					<td>Petugas</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama_petugas']; ?>"></td>
				</tr>
                <tr>
					<td>Sebagai</td>
					<td><select name="level">
						<option value="admin">admin</option>
						<option value="petugas">petugas</option>
					</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
                </table>
		</form>
		