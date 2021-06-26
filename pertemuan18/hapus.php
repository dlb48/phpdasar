<?php
session_start();
if ( !isset ($_SESSION["login"])){
    header ( "location: login.php");
    exit;
}
require 'function.php';

$id = $_GET["id"];

if (hapus ($id) >0){
    echo " 
        <script>
        alert('data berhasil Dihapus!');
        document.location.href = 'index.php';
        </script>
    ";
} else {
    echo " 
        <script>
        alert('data berhasil Dihapus!');
        document.location.href = 'index.php';
        </script>
";


}
?>