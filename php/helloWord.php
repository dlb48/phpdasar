<?php


echo "hello word!"; //tipe data string yang mereprentasikan dengan texs
echo "<br>";
echo 10; //type data int dan cara penulisan tanpa kutip
echo "<hr>";

//tipe data boolean adalah benar dan salah di presentasikan dengan
//true dan false
echo "benar: ";
echo "<br>";
var_dump(true);
echo "<hr>";

//contoh variable- isi variable dapat di rubah
$name = "soleh";
echo $name;
echo "<hr>";

//constant - isi dari constant tidak dapat dirubah kebalikan variable, contoh
define ("AUTHOR" , "Programer IT");
define ("APP_VERSION", 100);

echo AUTHOR;
echo APP_VERSION;
echo "<hr>";
//data null atau data tanpa nilaiatau string kosong
$datanull = null;

//cek variable null atau ada isinya bisa dengan cara, menghasilkan nilai boolean true false
var_dump($name);
echo "<br>";
var_dump ($datanull);
echo "<hr>";

//tipe data array, index array dimulai dari 0,1,2,3 terbuat dari $key = value

$nilai = array (1,2,3,4);
$nama = ["eko", "budi", "joko", "andi"];
var_dump($nilai);
var_dump($nama);
echo "<br>";

//operasi array
echo $nama[2]; //mengakses data di array pada index ke 2
echo "<br>";
$nama[0] = "soleh"; //mengubah data di array pada index 0 dengan value baru
$nama[] = "eko"; //menambah data di array di index paling terakhir
var_dump($nama);
echo "<br>";
var_dump (count ($nama)); //mengambil total di array
echo "<br>";

//index di array juga kita bisa rubah dengan string
$contoh = [
    "id" => 20,
    "nama" => "Nur ahmad soleh",
    "umur" => 20
];
var_dump ($contoh);
echo "<br>";

//array bisa birisi data apapun, bahkan bisa membuat array di dalam array

$data = [
    "id" => 20,
    "nama" => "Nur ahmad soleh",
    "umur" => 20, 
    "alamat" => [
        "kab" => "Mesuji",
        "negara" => "Indonesia"
    ]
];
echo "array dalam array <br>";
var_dump($data["alamat"] ["kab"]); //memanggil kab di array dalam array
