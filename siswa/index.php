<!DOCTYPE html>
<html>
<head>
	<title>halaman siswa</title>
</head>
<body>
            <h5>Data table</h5>
            <table border="1" class="table">             
                <tr>
                  <th>#</th>
                  <th>pembayaran</th>
                  <th>petugas</th>
                  <th>nisn</th>
                  <th>tanggal</th>
                  <th>bulan</th>
                  <th>id_spp</th>
                  <th>jumlah dibayar</th>
              </tr>
              <tbody>
                <?php
                include "../koneksi.php";
                function rupiah($angka){
	
                  $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                  return $hasil_rupiah;
                 
                }
                $nisn = $_GET['nisn'];
                $query_mysql=mysqli_query($kon,"SELECT * FROM pembayaran INNER JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas INNER JOIN siswa ON siswa.nisn = pembayaran.nisn INNER JOIN spp ON spp.id_spp = pembayaran.id_spp WHERE nisn = '$nisn'");
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
                  
                </tr>
                <?php $no++; } ?>
              </tbody>
            </table>
                </body>
                </html>