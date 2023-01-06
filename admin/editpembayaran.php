<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../proses/pesan.php?pesan=sebagai");
	} 
 ?>


<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($kon,"select * from pembayaran where id_pembayaran='$id'");
	$d = mysqli_fetch_array($data)
		?>
        
		<form method="post" action="../proses/uppembayaran.php">
			<table>
			    <tr>
					<td>Id_Pembayaran</td>
					<td><input type="number" name="id_pembayaran" value="<?php echo $d['id_pembayaran']; ?>"></td>
				</tr>
				<tr>
                 <td>Petugas</td>
			     <td><select name="petugas" required>
                   <?php $query_petugas=mysqli_query($kon,"SELECT * FROM petugas");
                   while ($data_petugas=mysqli_fetch_array($query_petugas)) { ?>
                 
                   <option value="<?PHP echo $data_petugas['id_petugas']; ?>"><?PHP echo $data_petugas['nama_petugas']; ?></option>
                 <?PHP } ?>
                </select></td>
				</tr>
                <tr>
				  <td>NISN</td>
				  <td><select name="nisn" required>
                  <?php $query_nisn=mysqli_query($kon,"SELECT * FROM siswa");
                   while ($data_nisn=mysqli_fetch_array($query_nisn)) { ?>
                 
                  <option value="<?PHP echo $data_nisn['nisn']; ?>"><?PHP echo $data_nisn['nisn']; ?></option>
                 <?PHP } ?>
                </select></td>							
			</tr>
				<tr>			
					<td>Tanggal Bayar</td>
					<td><input type="date" name="tgl_bayar" value="<?php echo $d['tgl_bayar']; ?>"></td>
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
                 
                   <option value="<?PHP echo $data_spp['id_spp']; ?>"><?PHP echo $data_spp['tahun']; ?> | Rp.<?PHP echo $data_spp['nominal']; ?></option>
                 <?PHP } ?>
                 </select></td>
                </tr>
                <tr>
					<td>Jumlah Bayar</td>
					<td><input type="number" name="jumlah_dibayar" value="<?php echo $d['jumlah_bayar']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
                </table>
		</form>
		