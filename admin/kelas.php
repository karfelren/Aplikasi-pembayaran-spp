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
	<title>halaman petugas</title>
</head>
<body>
<a class="tombol" href="tambahkelas.php">+ Tambah Data Baru</a>
            <h5>Data table</h5>
            <table border="1" class="table">             
                <tr>
                  <th>#</th>
                  <th>id</th>
                  <th>Kompetensi</th>
                  <th>Kelas</th>
              </tr>
              <tbody>
                <?php
                include "../koneksi.php";
                $query_mysql=mysqli_query($kon,"SELECT * FROM kelas");
                $no=1; while ($data=mysqli_fetch_array($query_mysql)) {
                 ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['id_kelas']; ?></td>
                  <td><?php echo $data['nama_kelas']; ?></td>
                  <td><?php echo $data['kompetensi_keahlian']; ?></td>
                  <td><a href="editkelas.php?id=<?PHP echo $data['id_kelas']?>">Edit</a></td>
                  <td><a href="../proses/delkelas.php?id=<?PHP echo $data['id_kelas']?>">Hapus</a></td>
                </tr>
                <?php $no++; } ?>
              </tbody>
            </table>
                </body>
                </html>