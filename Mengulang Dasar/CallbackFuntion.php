<?php

//callback funtion 
//callback adalah sebuah fungsi yang akan di eksekusi ketika sebuah event terjadi
// oke langsung saja kita coba

function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Rizky", "strtoupper"); // ini akan mengembalikan sebuah function strtoupper yang akan mengubah string menjadi huruf besar semua

// 