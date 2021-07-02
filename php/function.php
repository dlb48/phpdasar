<?php
//contoh function

function hello(){
    echo "hello funcion <br>";
}

//untuk memanggil funcition, tanpa memanggil function, maka kode dalam 
//blok atau{} tidak akan di eksekusi
hello();
hello();

//function argument/parameter

function hay($name = "name default/tidak mengirim nama"){
    echo "hay $name <br>";
}
hay("soleh");
hay("budi");
//ketika memanggil function argument tanpa memasukan value nya
hay();

//function untuk mengembalikan nilai dengan kunci return

function sum( int $nilai, int $nilai1){
    $total = $nilai + $nilai1;
    return $total;
}

$ttl = sum (10, 100);
var_dump($ttl);
//contoh lain
echo "<br>";

function nilai ($nilai){
    if ($nilai >= 80){
        return "A";
    }else if
        ($nilai >= 70){
        return "B";
    }else if
        ($nilai >= 60){
        return "C";
    }else if 
        ($nilai >= 50){
        return "D";
    }else{
        return "E";
    }
}

$nilaihuruf = nilai (70);
var_dump($nilaihuruf);

echo "<hr>";

//memanggil function tapi dimasukan ke variable dulu

function coba($coba = "name default/tidak mengirim nama"){
    echo "hay $coba <br>";
}
$variablefunction = "hay";
//cara panggilnya bisa ke variablenya langsung
$variablefunction("soleh");




















