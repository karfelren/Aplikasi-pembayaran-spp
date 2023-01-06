<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../proses/pesan.php?pesan=sebagai");
	} else if ($_SESSION['level']=="petugas"){
		header("location:../proses/pesan.php?pesan=sebagai");	
	}
 ?>

<?php
    if(isset($_GET['id'])){
        $nisn   =$_GET['id'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "../koneksi.php";
    $query    =mysqli_query($kon, "select a.*,b.* from siswa a,kelas b where a.id_kelas=b.id_kelas and nisn='$nisn'");
    $result    =mysqli_fetch_array($query);
?>
<html>
<head>
    <title>Script PHP untuk Menampilkan Data dari Database Derdasarkan Id</title>
</head>
<body>
    <h2>Detail Data Siswa</h2>
    <table border="0" cellpadding="4">
        <tr>
            <td size="90">Nisn</td>
            <td>: <?php echo $result['nisn']?></td>
        </tr>
        <tr>
            <td>Nis</td>
            <td>: <?php echo $result['nis']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $result['nama']?></td>
        </tr>
        <tr>
            <td>kompetensi</td>
            <td>: <?php echo $result['kompetensi_keahlian']; ?> | <?php echo $result['nama_kelas']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?php echo $result['alamat']?></td>
        </tr>
        <tr>
            <td>Telp</td>
            <td>: <?php echo $result['no_telp']?></td>
        </tr>
        <tr height="40">
            <td></td>
            <td>   <a href="siswa.php">Kembali</a></td>
        </tr>
    </table>
</body>
</html>