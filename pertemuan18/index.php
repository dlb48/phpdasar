<?php
session_start();
if ( !isset ($_SESSION["login"])){
    header ( "location: login.php");
    exit;
}

require 'function.php';
//konfigurasi pagnation
$jumlahdataperhalaman = 5;
$jumlahdata = count(query("SELECT * FROM mahasiswa"));
//ceil = pembulatan ke atas
$jumlahhalaman = ceil ($jumlahdata / $jumlahdataperhalaman);
$halamanaktif = ( isset ($_GET["page"])) ?$_GET["page"] : 1;
$awaldata = ($jumlahdataperhalaman * $halamanaktif) - $jumlahdataperhalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awaldata, $jumlahdataperhalaman");

//tombol cari di klik data di timpa sama pencarian
if( isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<form action="" method="post">

	<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
	<button type="submit" name="cari">Cari!</button>
	
</form>
<br>

<!-- navigasi -->
<?php if( $halamanaktif > 1 ) : ?>
	<a href="?page=<?= $halamanaktif - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for( $i = 1; $i <= $jumlahhalaman; $i++ ) : ?>
    <?php if( $i == $halamanaktif ) : ?>
    <a href="?page=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
<?php else : ?>
    <a href="?page=<?= $i; ?>"><?= $i; ?></a>
    <?php endif; ?>
<?php endfor; ?>

<?php if( $halamanaktif < $jumlahhalaman ) : ?>
	<a href="?page=<?= $halamanaktif + 1; ?>">&raquo;</a>
<?php endif; ?>


<br><br>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>
<?php $i = 1; ?>
<?php foreach ( $mahasiswa as $row ) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="ubah.php?id= <?=$row["id"]?>"">ubah</a> |
        <a href="hapus.php?id= <?=$row["id"] ?>" onclick="return confirm('yakin?');">hapus</a>
    </td>
    <td><img src="img/<?=$row["gambar"]?>" width="50"></td>
    <td><?=$row["nrp"]?></td>
    <td><?=$row["nama"]?></td>
    <td><?=$row["email"]?></td>
    <td><?=$row["jurusan"]?></td>
</tr> 
<?php $i++ ?>
<?php endforeach; ?>    

</table>


</body>
</html>