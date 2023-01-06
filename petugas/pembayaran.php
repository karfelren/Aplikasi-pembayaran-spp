<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../proses/pesan.php?pesan=sebagai");
	} 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>halaman pembayaran</title>
</head>
<body>
<a class="tombol" href="../admin/tambahpembayaran.php">+ Tambah Data Baru</a>
            <h5>Data table</h5>
            <table border="1" class="table">             
                <tr>
                  <th>#</th>
                  <th>pembayaran</th>
                  <th>petugas</th>
                  <th>nisn</th>
                  <th>siswa</th>
                  <th>tanggal</th>
                  <th>bulan</th>
                  <th>tahun/nominal</th>
                  <th>jumlah</th>
                  <th>edit</th>
                  <th>Hapus</th>
              </tr>
              <tbody>
                <?php
                include "../koneksi.php";
                function rupiah($angka){
	
                  $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                  return $hasil_rupiah;
                 
                }
                $query_mysql=mysqli_query($kon,"SELECT * FROM pembayaran INNER JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas INNER JOIN siswa ON siswa.nisn = pembayaran.nisn INNER JOIN spp ON spp.id_spp = pembayaran.id_spp");
                $no=1; while ($data=mysqli_fetch_array($query_mysql)) {
                 ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['id_pembayaran']; ?></td>
                  <td><?php echo $data['username']; ?></td>
                  <td><?php echo $data['nisn']; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['tgl_bayar']; ?></td>
                  <td><?php echo $data['bulan_dibayar']; ?></td>
                  <td><?php echo $data['tahun']; ?> | <?php echo rupiah ($data['nominal']); ?></td>
                  <td><?php echo rupiah ($data['jumlah_bayar']); ?></td>
                  <td><a href="../admin/editpembayaran.php?id=<?PHP echo $data['id_pembayaran']?>"class="edit">Edit</a></td>
                  <td><a href="../proses/delpembayaran.php?id=<?PHP echo $data['id_pembayaran']?>">Hapus</a></td>
                </tr>
                <?php $no++; } ?>
              </tbody>
            </table>
            <a href="cetak.php" target="_blank">CETAK</a>
                </body>
                </html>