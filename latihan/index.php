<?php
require 'conf.php';
$dokter = query("SELECT * FROM dokter");
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Dokter</h1>

<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>N0.</th>
    <th>Kode Dokter</th>
    <th>Nama Dokter</th>
    <th>Jenis Kelamin</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Golongan Darah</th>
    <th>agama</th>
    <th>Alamat</th>
    <th>Nomer Telpon</th>
    <th>Status Perkawinan</th>
    <th>Kode SPS</th>
    <th>Alumni</th>
    <th>Nomer Izin</th>
    <th>Status</th>

</tr>
<?php $i = 1; ?>
<?php foreach ( $dokter as $row ) : ?>
<tr>
    <td><?= $i; ?></td>
    <td><?=$row["kd_dokter"]?></td>
    <td><?=$row["nm_dokter"]?></td>
    <td><?=$row["jk"]?></td>
    <td><?=$row["tmp_lahir"]?></td>
    <td><?=$row["tgl_lahir"]?></td>
    <td><?=$row["gol_drh"]?></td>
    <td><?=$row["agama"]?></td>
    <td><?=$row["almt_tgl"]?></td>
    <td><?=$row["no_telp"]?></td>
    <td><?=$row["stts_nikah"]?></td>
    <td><?=$row["kd_sps"]?></td>
    <td><?=$row["alumni"]?></td>
    <td><?=$row["no_ijn_praktek"]?></td>
    <td><?=$row["status"]?></td>
</tr> 
<?php $i++ ?>
<?php endforeach; ?>    

</table>


</body>
</html>