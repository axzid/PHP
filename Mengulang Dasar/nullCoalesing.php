<?php

// null coalescing operator pada php digunakan untuk mengecek kondisi apakah variable
// bernilai null atau tidak, jika bernilai null maka akan mengembalikan nilai default

//pertama jika kita menggunakan if else

$gender = null;

if (isset($gender)) { // isset digunakan apakah variabel sudah di set isinya atau belum 
    $hi = "Hi bro";
} else {
    $hi = "Hi Nona";
}

echo $hi . PHP_EOL;


//kemudian kita menggunakan null coalescing operator pada php

$data = [];

$nama = $data["nama"] ?? "nama tidak ada"; // ?? digunakan untuk mengecek apakah variabel bernilai null atau tidak

echo $nama . PHP_EOL;