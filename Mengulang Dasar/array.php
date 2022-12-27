<?php
// kali ini kita akan mempelajari bagaimana Aarray digunakan dalam bahasa php dan apa saj method method nya yang di butuhkan dalam php

// operasi array pada php ada 4 yaitu

$lawak = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

var_dump(count($lawak));

$lawak[] = 16;

var_dump($lawak);

unset($lawak[1]);

var_dump($lawak);

// ini adalah bagaimana operasi menghapus menambah dan juda ya gitu lah

$lawak[1] = 2;
// ini akan menambahkan data pada array dan menimbuli index ke 2

// array dengan menggunakan key

$dataDiri = [
    "nama" => "dasar banget",
    "umur" => 20,
    "alamat" => [
        "jalan" => "jalan tambakromo pati KM2",
        "kota" => "kota  pati ",
        "provinsi" => "Jawa tengah"
    ]
];

var_dump($dataDiri["alamat"]["jalan"]);

$lawak = ['lawak geaming'];

var_dump($lawak);