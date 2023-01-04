<?php

class Anime {
    public $judul = " judul anime",
            $studio = "Studio anime",
            $genre = ["lawak","geming"];

    //create detail anime variable with variable 
  
    // this hanya bisa digunakan dalam sebuah method di dalam class dan tidak bisa digunakan sebagai porpertyd di dalam sebuah class

    protected $status = "status anime";
    // ini hanya bisa di akses mengguinakan method di dalam class atau pewarisan dari class tersebut

    private $rating = "rating anime";
    // ini hanya bisa di akses di dalam class itu sendiri dan tidak bisa di akses di tempat lain 
      public function detailAnime(){
        return "$this->judul, $this->studio, $this->genre, $this->status, $this->rating";
    }

}

$jujutsu = new Anime();

var_dump($jujutsu->detailAnime());