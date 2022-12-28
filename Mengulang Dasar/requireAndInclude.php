<?php

/* pada php ada dua metod yang bisa digunakan untuk memecah file 
atau file di jalankan pada masing2 seperti export dan import pada java script 
dan di javascript ada dua cara yaitu require dan include 
require: wajib kalau file nya nggak ada tau penulisan nya salah bisa eror 
include: kalau file nggak ada atupun penulisan salah program masih di lanjutkan  */

require "array.php";
include "forEach.php";

/* ada lagi yaitu rwequire once dimana ini berguna jika kita ingin meminimalisir eror 
ini berguna jika kita sudah pernah memanggil file ini apakah file nya akan di panggil lagi atau tidak 
dan karena itu mungkin lebih baik jika menggunkan requier once untuk meminimalisir eror 
dan tidak akan eror lagi jika ada redeclare sebuah include atau sebuah require */