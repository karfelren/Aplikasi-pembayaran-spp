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
<a class="tombol" href="tambahpetugas.php">+ Tambah Data Baru</a>
            <h5>Data table</h5>
            <table border="1" class="table">             
                <tr>
                  <th>#</th>
                  <th>id</th>
                  <th>username</th>
                  <th>password</th>
                  <th>nama petugas</th>
                  <th>sebagai</th>
              </tr>
              <tbody>
                <?php
                include "../koneksi.php";
                $query_mysql=mysqli_query($kon,"SELECT * FROM petugas");
                $no=1; while ($data=mysqli_fetch_array($query_mysql)) {
                 ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['id_petugas']; ?></td>
                  <td><?php echo $data['username']; ?></td>
                  <td><?php echo $data['password']; ?></td>
                  <td><?php echo $data['nama_petugas']; ?></td>
                  <td><?php echo $data['level']; ?></td>
                  <td><a href="editpetugas.php?id=<?PHP echo $data['id_petugas']?>"class="edit">Edit</a></td>
                  <td><a href="../proses/delpetugas.php?id=<?PHP echo $data['id_petugas']?>">Hapus</a></td>
                </tr>
                <?php $no++; } ?>
              </tbody>
            </table>
                </body>
                </html>