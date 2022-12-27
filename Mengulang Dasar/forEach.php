<?php
// foreach adalah sebuah perulangan untuk mengitesi sebuah array dan object


$listNama = [
    "nama" => "Rizky",
    "umur" => 20,
    "hobi" => "coding"
];

foreach ($listNama as $key => $value) { // foreach digunakan untuk mengiterasi array dan object
    echo "$key : $value" . PHP_EOL;
}

