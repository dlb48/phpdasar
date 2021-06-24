<?php
require 'function.php';
//cek submit apakah sudah di tekan atau belum
if(isset($_POST["submit"]) ) {

//cek apakah data berhasil ditambah atau tidak    
if (tambah ($_POST) > 0) {
    echo "data berhasil ditambahkan";
}else {
    echo "data gagal ditambahkan";
    echo "<br>";
    echo mysqli_error($conn);
}

}

?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Admin</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="jurusan">jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
            
        </ul>
    </form>


</body>
</html>