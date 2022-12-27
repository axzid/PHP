<?php
//anonymous function adalah sebuah function yang dimana kita bisa membuat function tanpa nama 
// oke langsng saja kita membuat code nya tapi kalau di PHP anonymous function biasa di sebut sebagai closure

$meer = function($nama){
    echo "Hello $nama" . PHP_EOL;
};

echo $meer("Rizky");

//dan kalau kita ingin mengakses argumen variable sebelum nya kita bisa menggunkan use 
$namaLain = "lawak geming";
$meer = function($nama) use ($namaLain){
    echo "Hello $nama $namaLain" . PHP_EOL;
};

echo $meer("Rizky");



// jadi mungkin begini lah anonymous function yang ada di dalam bahasa PHP 

