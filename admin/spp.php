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
	<title>halaman spp</title>
</head>
<body>
<a class="tombol" href="tambahspp.php">+ Tambah Data Baru</a>
            <h5>Data table</h5>
            <table border="1" class="table">             
                <tr>
                  <th>#</th>
                  <th>Tahun</th>
                  <th>Nominal</th>
              </tr>
              <tbody>
                <?php
                include "../koneksi.php";
                function rupiah($angka){
	
                    $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                    return $hasil_rupiah;
                   
                  }
                $query_mysql=mysqli_query($kon,"SELECT * FROM spp");
                $no=1; while ($data=mysqli_fetch_array($query_mysql)) {
                 ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['tahun']; ?></td>
                  <td><?php echo rupiah ($data['nominal']); ?></td>
                  <td><a href="editspp.php?id=<?PHP echo $data['id_spp']?>">Edit</a></td>
                  <td><a href="../proses/delspp.php?id=<?PHP echo $data['id_spp']?>">Hapus</a></td>
                </tr>
                <?php $no++; } ?>
              </tbody>
            </table>
                </body>
                </html>