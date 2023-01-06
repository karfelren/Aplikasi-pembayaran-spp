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
    function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
        return $hasil_rupiah;
       
      }
	$id = $_GET['id'];
	$data = mysqli_query($kon,"select * from spp where id_spp='$id'");
	$d = mysqli_fetch_array($data)
		?>
        
		<form method="post" action="../proses/upspp.php">
			<table>
				<tr>			
					<td>Tahun</td>
					<td>
						<input type="hidden" name="id_spp" value="<?php echo $d['id_spp']; ?>">
						<input type="number" name="tahun" value="<?php echo $d['tahun']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nominal</td>
					<td><input type="number" name="nominal" value="<?php echo $d['nominal']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
                </table>
		</form>
		