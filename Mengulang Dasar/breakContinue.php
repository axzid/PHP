<?php

// break dan continue adalah ketika kita ingin membuat perulangan dan akan me skip beberapa kndisi ataupun menghentikan kondisi tertentu 
// oke langsung saja kita exec

for ($counter = 1 ; $counter <= 10 ; $counter++) { 
    if ($counter % 2 == 0) { // jika counter habis dibagi 2 maka akan me skip kondisi ini 
        continue;
    }

    if ($counter > 5) { // jika counter lebih dari 5 maka akan menghentikan perulangan 
        break;
    }

    echo "Hello World $counter" . PHP_EOL;
}