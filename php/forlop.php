<?php

//perulangan tidak wajib di isi,
//klo tidak di isi maka kondisi akan bernilai true
//yang artinya akan ada perulangan atau lopping tanpa henti
// for (;;){
//     echo "hello word";
// }

//yang ada kondisinya, jika kondisi false akan berhenti

for ( $hitung =1; $hitung <= 10; $hitung++ ){
    echo "hello word ke $hitung<br>";
}
echo "<hr>";

// do while, = jalankan perulangan sekali baru masuk pengkondisian,
//jika true jalankan lagi jika false selesai perulangan,

$i =100;
do {
    echo "ini adalah peulangan do while ke $i <br>";
    $i++;
} while ($i <= 10);
echo "<hr>";

//contoh perulangan array tanpa for each

$nama = ["andi", "yudi", "soleh", "pakde"];
for ( $i =0; $i < count($nama); $i++){
    echo "hello $nama[$i] <br>";
}

//menggunakan for each
foreach($nama as $n){
    echo "hello menggunakan for each $n <br>";
}

//contoh jika bukan array numberik

$mahasiswa = [
    "nama" => "soleh",
    "nip" => 12345,
    "jurusan" => "teknik informatika"
];

foreach( $mahasiswa as $mhs => $value){
    echo "$mhs : $value <br>";
}
echo "<hr>";










































