<?php

// ini adalah sebuah feature dimana kita bisa memanggil fuinction berdasarkan nama yang sama dengan function yang udah kita declare 
// oke mari kita coba saja bagimana cara kita bisa menggunkaan in

function foo(){
    echo "foo function ";
}

$lawak = "foo";

echo $lawak() . PHP_EOL; // ini akan mengembalikan sebuah function foo

// untuk selanjutnya kita akan memanggil sebuah function untuk memfilter sebuah parameter menggunakan variable function

function sayHello($nama, $filter){
    $finalNama = $filter($nama);
    echo "Hello $finalNama" . PHP_EOL;
}

sayHello("Rizky", "strtoupper"); // ini akan mengembalikan sebuah function strtoupper yang akan mengubah string menjadi huruf besar semua
// di sini str to upper adalah sebuah built in function pada PHP maka isi dari final nama sebenarnya adalah 