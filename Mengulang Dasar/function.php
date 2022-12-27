<?php 
// ini adalah sebuah code function pada php dan mari kita mempelajarinya 
// function adalah sebuah blok kode yang akan di eksekusi ketika dipanggil
function sayHello($argumen = "zulfikar"){ // di atas adalah default value dari argumen
    echo "hello $argumen" . PHP_EOL;
}

//ketika menambahkan default value argumen tidak akan berguna jika ini di taruh di awal maka usahakan better di taruh di ahri atau kasih semuanya wkwk

sayHello("Rizky");

//type declaration
// akan menyesuaikan tipe data yang di kirim pada argument value 

function sum (int $first, int $last) : int { // int digunakan untuk menyesuaikan tipe data yang di kirim pada argument value
    $total = $first + $last;
    return $total;
}
// function argument yang default bisa auto menkonversi tipe data asal value nya bisa di konversi ke number
// tapi jika tidak bisa makak akan memunculkan eror yang tidak bisa misalkan adalah sebuah string huruf ataupun array kedua ini tidak bisa di konversi ke number 
// pada sebuah function argumen 

echo sum(100, 100) . PHP_EOL;

//variable argument list kalau di javascript ini mirip sebuah spread operator 
// dimana dalam data ini kita bsia mengirimkan banyak argumen atau mengirimkan data sebanyak banyak nya 
// namun kalau di php ini akan di konversi menjadi array di dalam function nya oke langsung aja kita coba exec 

function sumALL(...$values){

    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    return $total;
}
// jika kita ingin mengirimkan data yang sudah ada di dalam sebuah function kita bisa menggunakan ... dalam pemanggilan argument function agar tidak eror 
$angka = [1,2,3,4,5,6,7,8,9,10];
echo sumALL(... $angka) . PHP_EOL;

//function retur pada php mungkin kayak nya semua function deh 
// intunya sebuah function hanyabisa mengembnalikan satu nilai saja dan jika sudah sampai kode return maka kode di bawah nya tidak akan di eksekusi 


//return type declaration 
// ini adalah type apa yang akan di return pada function tersebut misalkan sbuah int ataupun sebuah string 
// dan jika ada yang lain di dalam function tersebut maka akan di rubah menjadi sesuai type declaration yang ada kasih 

function getFinalValue() : int {
    return "100"; // ini akan eror jika isinya huruf karena tidak bisa mengembalikan sebuah string
}// jika angka maka tidak akan eror 

var_dump(getFinalValue());

