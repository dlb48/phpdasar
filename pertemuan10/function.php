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
     $nrp = htmlspecialchars($data["nrp"]);
     $nama = htmlspecialchars($data["nama"]);
     $email = htmlspecialchars($data["email"]);
     $jurusan = htmlspecialchars($data["jurusan"]);
     $gambar = htmlspecialchars($data["gambar"]);

     $query = "INSERT INTO mahasiswa (`nama`, `nrp`, `email`, `jurusan`, `gambar`)
                 VALUES ('$nama','$nrp','$email','$jurusan','$gambar')
                ";

     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}

function hapus ($id){
    global $conn;
    $query = "DELETE FROM mahasiswa WHERE id=$id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>