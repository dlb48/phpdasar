<?php
//Koneksi database
$db_hostname = "localhost";
$db_username = "root";
$db_password = "server";
$db_name     = "phpdasar";

$conn = mysqli_connect("$db_hostname", "$db_username", "$db_password", "$db_name");

function query ($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc ($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data) {
     global $conn;
     $nrp = $data["nrp"];
     $nama = $data["nama"];
     $email = $data["email"];
     $jurusan = $data["jurusan"];
     $gambar = $data["gambar"];

     $query = "INSERT INTO mahasiswa
                 VALUES ('','$nama','$nrp','$email','$jurusan','$gambar')
                ";

     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}

?>