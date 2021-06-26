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

     //upload gambar
     $gambar = upload();
     if ( !$gambar){
         return false;
     }


     $query = "INSERT INTO mahasiswa (`nama`, `nrp`, `email`, `jurusan`, `gambar`)
                 VALUES ('$nama','$nrp','$email','$jurusan','$gambar')
                ";

     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}

function upload() {
    
    $namafile = $_FILES ['gambar']['name'];
    $ukuranfile =  $_FILES ['gambar']['size'];
    $error =  $_FILES ['gambar']['error'];
    $tmpfile =  $_FILES ['gambar']['tmp_name'];

    //cek apakah ada gambar di upload
    if($error === 4){
        echo " <script>
        alert('pilih gambar terlebih dahulu');
        </script>";
    return false;
    }

    //cek apakah gambar atau bukan yang diupload
    $gambarvalid = ['jpg','jpeg'];
    $ekstensi = explode ('.', $namafile);
    $ekstensi = strtolower(end ($ekstensi));
    if (!in_array($ekstensi,$gambarvalid)){
    echo " <script>
    alert('format gambar salah');
    </script>";
    return false;
    }

    //cek ukuran file
    if($ukuranfile >1000000){
        echo " <script>
        alert('gambar terlalu besar');
        </script>";
        return false;
        }

    //jika berhasil dari ketiga di atas saatnya upload gambar
    //generate nama gambar
    $namabaru = uniqid();
    $namabaru .='.';
    $namabaru .= $ekstensi;
    move_uploaded_file( $tmpfile, 'img/' .$namabaru);

    return $namabaru;

}



function hapus ($id){
    global $conn;
    $query = "DELETE FROM mahasiswa WHERE id=$id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah ($data){
    global $conn;
    $id = $data ["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarlama = $data ["gambarlama"];

    //cek apakah user ubah gambar atau tidak
    if($_FILES['gambar']['error'] === 4){
        $gambar =$gambarlama;
    }else {
        $gambar = upload();
    }


    $query = "UPDATE `mahasiswa` SET `id`='$id',`nama`='$nama',`nrp`='$nrp',`email`='$email',`jurusan`='$jurusan',`gambar`='$gambar' WHERE `id` = '$id'
   ";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function cari($keyword) {
	$query = "SELECT * FROM mahasiswa
				WHERE
			  nama LIKE '%$keyword%' OR
			  nrp LIKE '%$keyword%' OR
			  email LIKE '%$keyword%' OR
			  jurusan LIKE '%$keyword%'
			";
	return query($query);
}

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
    //cek apakah user sudah ada atau belom
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc ($result)){
        echo "<script>
            alert ('username sudah ada');
            </script>";
        return false;
    }
   // cek konfirmasi password

    if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

    //encripsi dulu passwordnya
    $password = password_hash ($password, PASSWORD_DEFAULT);
    //tambahkan user baru kedatabase
    mysqli_query ($conn, "INSERT INTO user (`username`, `password`) VALUES ('$username', '$password')");

    return mysqli_affected_rows ($conn);
}

?>  