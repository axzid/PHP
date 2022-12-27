<?php
// rekrusive function pada php adalah dimana kita memangil function kita sendiri di dalam satu buah function 
// dimana ini mungkin akan berguna jika menggunakan nya dalam factorial dan kalau untuk kasus yang lain saya masih belum nemu 

function factorialRecursive($angka){
    if ($angka < 2) {
        return 1;
    } else {
        return ($angka * factorialRecursive($angka - 1));
    }
}

echo factorialRecursive(10) . PHP_EOL;

// dimana ini akan jadi ini semacam memanggil value function lalu di kurangi 1 dan akan di kalikan 