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
	<title>halaman siswa</title>
</head>
<body>
<a class="tombol" href="tambahsiswa.php">+ Tambah Data Baru</a>
            <h5>Data table</h5>
            <table border="1" class="table">             
                <tr>
                  <th>no</th>
                  <th>nis</th>
                  <th>nama</th>
                  <th>id_kelas</th>
                  <th>kompetensi</th>
                  <th>edit</th>
                  <th>Hapus</th>
                  <th>Detail</th>
              </tr>
              <tbody>
                <?php
                include "../koneksi.php";
                $query_mysql=mysqli_query($kon,"select a.*,b.* from siswa a,kelas b where a.id_kelas=b.id_kelas");
                $no=1; while ($data=mysqli_fetch_array($query_mysql)) {
                 ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['nis']; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['id_kelas']; ?></td>
                  <td><?php echo $data['kompetensi_keahlian']; ?>, <?php echo $data['nama_kelas']; ?></td>
                  
                  <td><a href="editsiswa.php?id=<?PHP echo $data['nisn']?>"class="edit">Edit</a></td>
                  <td><a href="../proses/delsiswa.php?id=<?PHP echo $data['nisn']?>">Hapus</a></td>
                  <td><a href="detailsis.php?id=<?PHP echo $data['nisn']?>"class="detail">Detail</a></td>
                </tr>
                <?php $no++; } ?>
              </tbody>
            </table>
                </body>
                </html>