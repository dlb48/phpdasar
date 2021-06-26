<?php
require 'function.php';

//ambil data di id
$id = $_GET ["id"];
//query data mahasiswa berdasarkan id
$mhs = query ("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek submit apakah sudah di tekan atau belum
if(isset($_POST["submit"]) ) {

//cek apakah data berhasil diubah atau tidak    
if (ubah ($_POST) > 0) {
    echo " 
        <script>
        alert('data berhasil Diubah!');
        document.location.href = 'index.php';
        </script>
    ";
}else {
    echo " 
        <script>
        alert('data gagal Diubah!');
        document.location.href = 'index.php';
        </script>
    ";
}

}

?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Ubah Data</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name= "id" value="<?= $mhs["id"];?>">
        <input type="hidden" name= "gambarlama" value="<?= $mhs["gambar"];?>">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"];?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
            </li>
            <li>
                <label for="jurusan">jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"];?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"];?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label> <br>
				<img src="img/<?= $mhs['gambar']; ?>" width="40"> <br>
				<input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
            
        </ul>
    </form>


</body>
</html>
