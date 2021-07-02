<?php

//operasi aritmatika ada  +,-,/,8,dan (%untuk sisa bagi)
$nilai1 = 10;
$nilai2 = 9;

echo ($nilai1 * $nilai2);
echo "<br>";
echo ($nilai1 % $nilai2); //menghitung sisa bagi antara 10/9
echo "<hr>";

//operator penugasan. 

$total1 = 0; // tidak menggunakan operator penugasan
$total2 = 0; //menggunakan operator penugasan

$jeruk = 5000;
$apel = 10000;
$salak = 5000;

$total1 = $total1 + $jeruk;
$total1 = $total1 + $apel;
$total1 = $total1 + $salak;

$total2 += $jeruk;
$total2 += $apel;
$total2 += $salak;
//hasilnya sama saja. begitu juga dengan -=, /= dll
echo ($total1);
echo "<br>";
echo ($total2);
echo "<hr>";

//operator perbandingan, 
// == (sama dengan walaupun tipe data berbeda)
// === (identik membedakan nilai dan tipe datanya)
// >= (lebih dari atau samadengan)
// != (tidak samadengan)
//operator perbandingan bernilai boolean, true untuk benar dan false untuk salah

var_dump ("10" == 10); 
var_dump ("10" === 10);
var_dump (10 > 9);
var_dump (10 < 9);
echo "<hr>";

//operator logika
// && atau end
// || or
// ! not

var_dump(true && true);
var_dump('true' && 'false');
echo "<hr>";


//increment dan decrement
$i = 1; 
$i++;
var_dump($i);




















