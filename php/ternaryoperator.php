<?php

$jk ="WANITA";
$hi =null;

//else if biasa
if( $jk === "PRIA"){
    $hi = "hi Broo!!";
} else {
    $hi = "hi Mbaaa";
}
echo $hi;
echo "<br>";

//sekarang menggunakan ternary operator
$hi1=null;
$hi1 = $jk == "PRIA" ? "hi Broo!!" : "hi Mbaaa";

echo $hi1;
echo "<hr>";

//null coalescing operator

//penulisan biasa
$data =[
    "action" => "create"
];

if ( isset ($data["action"])){
    $action = $data["action"];
}else {
    $action = "nothing";
}
echo $action;

 //penulisan dengan coalescing operator

$data1 = [
    // "action" => "creat"
];
$action1 = $data1 ["action"] ?? "nothing";

echo "<br>";
echo $action1;





















