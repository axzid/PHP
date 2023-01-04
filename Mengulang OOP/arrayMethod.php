<?php
//pada bab ini kita akan membahas tentang array method yang ada dan sering di gunakan pada PHP 
//dan kita akan memulai dengan array push yaitu menambahkan data apda PHP 

$nama = ["Rizky", "Fauzan", "Rahman"];
array_push($nama, "zulfikar");
var_dump($nama); // array push sering dogunakan untuk menambahakan data pada sebuah arra pada PHP di ahir array

//dan kita akan memulai dengan array pop yaitu menghapus data apda PHP

$nama = ["Rizky", "Fauzan", "Rahman"];
array_pop($nama);
var_dump($nama); // array pop sering dogunakan untuk menghapus data pada sebuah arra pada PHP di ahir array

//aku akan mencoba explode dan implode pada PHP 
//explode adalah untuk memecah sebuah string menjadi array
//dan implode adalah untuk menggabungkan sebuah array menjadi string

$nama = "Rizky Fauzan Rahman";
$nama_array = explode(" ", $nama);
$coba = ["Rizky", "Fauzan", "Rahman"];
var_dump(implode("_", $coba)); // ini adalah bagaimana cara memecah sebuah string menjadi array pada PHP
//parameter pertama adalah separator aantara pemisah atau penggabung pada sebuah array pada PHP dan pada parameter kedua adalah variabel yang akan di exlode atau di implde

/* selanjutnya kita kan mencoba yang lain dan setelah itu aku akan mencari problem solving yang bisa di selesaikan dengan menggunakan ini 
aku sudah kepikiran satu yaitu menampilkan sebuah data dari API pada PHP */

//dan kita akan memulai dengan array shift yaitu menghapus data apda PHP

$nama = ["Rizky", "Fauzan", "Rahman"];
array_shift($nama); // kalau tadi pop kan untuk menghapus data di ahir kalau shit digunakan untuk menghapus data di awal array
var_dump($nama); // jadi rezky akan di hapus pada saat ini di jalankan 


//dan kita akan memulai dengan array unshift yaitu menambahkan data apda PHP

$nama = ["Rizky", "Fauzan", "Rahman", "zulfikar"];
array_unshift($nama, "Rizal"); // kalau tadi pop dan shift kan untuk menghapus data di awal ataupun ahir nah ini unshit adalah untuk menambahkan data di awal arra 
var_dump($nama); // jadi akan menambahakan rizal pada awal array 

//berikutnya adalah array slice yaitu untuk mengambil sekaligus memotong sebuah array pada php 
//biasanya sering digunakan untuk pagination pada PHP atau untuk menampilkan hanya sedikit data pada kasus tertent 
//dan untuk parameter pertama adalah array yang akan di potong dan parameter kedua adalah dimana potongannya dimulai dan parameter ketiga adalah dimana potongannya berhenti

$list_data = [["nama" => "Rizky", "umur" => 20], ["nama" => "Fauzan", "umur" => 21], ["nama" => "Rahman", "umur" => 22], ["nama" => "Zulfikar", "umur" => 23]];

var_dump(array_slice($list_data, 2,));

//dan berikutnya adalah array splice yaitu untuk mengambil sekaligus memotong sebuah array pada php
