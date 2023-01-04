<?php
//constructor
//constructor adalah sebuah function yang otomatis di panggil pada saat kita memanggil class dan mengisi object tersebut dengan value dari clas yang kita buat 

class Anime{
    public $judul,
           $genre,
           $rating;

    public function __construct($judul = "judul", $genre = "genre", $rating = 0){
        $this->judul = $judul;
        $this->genre = $genre;
        $this->rating = $rating;
    }

    public function getLabel(){
        return "$this->judul, $this->genre";
    }

}

$naruto = new Anime("Naruto Shippuden", "Action", 9);

var_dump($naruto);

//beigutlah seimple case menggunakan constructor dan kedepan nya ktia juga akan menggunakan ini jika ingin komunikasi menggunakan DB 
// oke kita lanjut aja ke nect materi 