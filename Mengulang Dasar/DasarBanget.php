<?php


//tipe data boolean di PHP tidak menggunakanc ase sensitive dan karena itu walupun kita menggunakan huruf besar ataupun kecil itu tidak akan  berpengaruh pada
// apa yang kita calan kan

echo "benar";
var_dump(true);
echo "salah";
var_dump(false);

// lanjut kita akan membahas tipedata string string bisa mengandung kosong ataupun banyak character
// ada perbedaan antara double quote dan 1 quote dalam doble quote kita bisa menambahakan funcsi seperti \n pada text maka akan better jika menggunakan petik dua

echo  "anda lawak sekali \n";
echo 'anda lawak sekali \n'; //  nah kalau begini tidak bisa jadi better yang atas

// oke kali ini kita akan membahas vaiable pada PHP

$nama = "dasar banget";
echo  $nama;

// nah kalau kita ingin mengganti nama variabel kita bisa menggunakan cara ini

// vaiable di dalam javascript sifat nya bisa ri rubah rubah dan kalau kita ingin menggunakan sebuah variable constant bisa menggunakan keyword define dan ini maka datanya akan immutable dan tidak bisa di ubah
define('NAMA', 'dasar banget ini adlaah sebuah variable contant ');

echo NAMA;

// null adalah kosong dimana kita akan mengosongkan suatu data di dalam PHP maka kita akan menggunakan NULL dan biasanya case kita ketika kita ingin mengosongkan suatu data ataupun kita ingin membuat data awal yang kosonag

$nama = null;
var_dump($nama);

// buatkan code di php untuk memasukan input di dalam terminal
// dan tampilkan di dalam terminal

function sum (int $a, int $b) {
    return $a + $b;
}

echo sum(1,2);

