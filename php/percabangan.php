<?php

//if dan else statement
$nilai = 40;
$absen = 40;

if ( $nilai >= 75 && $absen >= 75){ //jika bernilai true maka lulus jika false maka tidak lulus
    echo "Selamat Anda Lulus";
} else {
    echo "Anda Tidak Lulus";
}
echo "<br>";

//if elseif statement
if ( $nilai >= 80 && $absen >= 80){
    echo "Nilai anda A";
}else if ( $nilai >= 70 && $absen >= 70) {
    echo "Nilai anda B";
}else if ( $nilai >= 60 && $absen >= 60) {
    echo "Nilai anda C";
}else if ( $nilai >= 50 && $absen >= 50) {
    echo "Nilai anda D";
}else{
    echo "Nilai anda E";
}

echo "<br>";

//syntax alternatif untuk ganti {} dengan : dengan menambahkan endif; elseif tanpa spasi.

if ( $nilai >= 80 && $absen >= 80):
    echo "Nilai anda A";
elseif ( $nilai >= 70 && $absen >= 70):
    echo "Nilai anda B";
elseif ( $nilai >= 60 && $absen >= 60):
    echo "Nilai anda C";
elseif ( $nilai >= 50 && $absen >= 50):
    echo "Nilai anda D";
else :
    echo "Nilai anda E";
endif;

echo "<br>";

//switch statement hanya menggunakan ==

$nilaihuruf = "E";
switch ($nilaihuruf){
    case "A":
        echo "Anda lulus dengan predikat memuaskan";
        break;
    case "B":
    case "C":
        echo "Anda lulus";
        break;
    case "D" :
        echo "Anda tidak lulus";
        break;
    default : //selain huruf di atas akan masuk kesini
        echo "Mungkin anda salah jurusan";
}

echo "<br>";
//syntax alternatif di switch

$nilaihuruf = "E";
switch ($nilaihuruf):
    case "A":
        echo "Anda lulus dengan predikat memuaskan";
        break;
    case "B":
    case "C":
        echo "Anda lulus";
        break;
    case "D" :
        echo "Anda tidak lulus";
        break;
    default : //selain huruf di atas akan masuk kesini
        echo "Mungkin anda salah jurusan";
    endswitch;

















