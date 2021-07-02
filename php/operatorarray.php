<?php
//menggabungkan 2 array
$namadepan = ["namadepan" => "nur"];
$namabelakang = ["namabelakan" => "soleh"];

$fullname = $namadepan + $namabelakang;
var_dump ( $fullname);
echo "<hr>";

//perbandingan array

$a = [
    "namadepan" => "nur",
    "namabelakan" => "soleh"
];
$b = [
    "namabelakan" => "soleh",
    "namadepan" => "nur"
];

var_dump($a == $b);
echo "<br>";
var_dump($a === $b); //false, karna mengecek urutan dari isi array.nya
echo "<hr>";

//expression = apapun yang memiliki nilai atau value ex $a=5;
//statement = berisi eksekusi komplit ex $name = "nur ahmad soleh";
//block = biasanya blok diawali dengan kurung kurawa {}




















