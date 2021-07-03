<?php

//ada tiga jenis variable scopeyaitu global, local, dan static

// global variable yang di buat diluar function
// variable global hanya bisa di akses dari luar function
// artinya di dalam function, kita tidak bisa akses variable global scope
// local kebalikan dari global



$contohglobal = "soleh"; //variable global scope

function halo(){
    global $contohglobal; //memanggil variable global agar bisa di akses di dalam function
    $contohlocal = "soleh";
    echo $contohglobal; // akan error karna memanggil variable dalam function
}

halo();
echo $contohlocal; //ini akan error karna local hanya dapat di panggil dari dalam funcion



echo "<hr>";

//variable static sama seperti local
// klo local hanya bisa di akses sekali, atau siklus hidupnya cuma sekali
//setelah di eksekusi tugas dia selesai
//klo static bisa di akses berulang kali, bisa di gunakan untuk looping

function increment (){
    static $contoh = 1;
    echo "contoh ke = $contoh <br>";
    $contoh++;

}

increment();
increment();
increment();











