<?php
//Koneksi database
$db_hostname = "localhost";
$db_username = "root";
$db_password = "server";
$db_name     = "sikjanuari";

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

?>