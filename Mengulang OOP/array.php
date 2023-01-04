<?php

// kita akan memulai pelajaran array di sini 

$name = ['Rizal', 'Rahmat', 'Rahman', 'Rahim', 'Rahma'];

var_dump(count($name)); // ini jumlahnya adalah 5 fungsi count adalah untuk menghitung isi di dalam array 

// kemudian nindex pada array tetap dimulai dari 0 sama seperti array pada bahasa lainya 

$age = [
    'Rizal' => 20,
    'Rahmat' => 21,
    'Rahman' => 22,
    'Rahim' => 23,
    'Rahma' => 24
];

foreach ($age as $key => $value) {
    echo "umur {$key} adalah {$value} \n"; //ini bisa di bilang adalah cara bagimana menampilkan array associative dan juga bagimana string literals bekerja pada PHP 
}

$anime = [
    [
        "judul" => "Naruto",
        "genre" => "Shonen",
        "episode" => 500

    ],
    [
        "judul" => "One Piece",
        "genre" => "Shonen",
        "episode" => 1000
    ],
    [
        "judul" => "Bleach",
        "genre" => "Shonen",
        "episode" => 300
    ]
    ];
// kemudian kita akan memulai bagimana cara menampilkan array multidimensi


foreach ($anime as $key => $value) { // dan ini adalah bagaimana cara menampilkan sebuah array multi dimensi pada PHP 
    echo "Judul : {$value['judul']} \n";
    echo "Genre : {$value['genre']} \n";
    echo "Episode : {$value['episode']} \n";
}

// sebenarnya ini mirip mirip denga JS cuman ya bedanya banyak pada penulisan syntax nya dan juga karena kerangka array nya 

//selanjutnya kita akan membuat sebuah array dinamis yang lebih kompleks
//dimana akan ada nested di dalam nested pada sebuah array 

$detail_anime = [
    [
        "judul" => "Kimetsu No Yaiba",
        "genre" => ['shonen', 'action', 'drama','fantasy'],
        "episode" => 26,
        "rating" => 8.5,
        "studio" => "ufotable",
        "status" => "ended",
        "season" => "winter 2019",
    ],
    [
        "judul" => "Boku No Hero Academia",
        "genre" => ['shonen', 'action', 'drama','fantasy'],
        "episode" => 25,
        "rating" => 8.5,
        "studio" => "Bones",
        "status" => "ended",
        "season" => "winter 2019",
    ],
    [
        "judul" => "One Piece",
        "genre" => ['shonen', 'action', 'drama','fantasy'],
        "episode" => 1000,
        "rating" => 8.5,
        "studio" => "Toei Animation",
        "status" => "ongoing",
        "season" => "winter 1999",
    ],
    [
        "judul" => "Naruto",
        "genre" => ['shonen', 'action', 'drama','fantasy'],
        "episode" => 500,
        "rating" => 8.5,
        "studio" => "Studio Pierrot",
        "status" => "ended",
        "season" => "winter 2002",
    ],
    [
        "judul" => "Bleach",
        "genre" => ['shonen', 'action', 'drama','fantasy'],
        "episode" => 300,
        "rating" => 8.5,
        "studio" => "Studio Pierrot",
        "status" => "ended",
        "season" => "winter 2004",
    ],
    [
        "judul" => "Fairy Tail",
        "genre" => ['shonen', 'action', 'drama','fantasy'],
        "episode" => 300,
        "rating" => 8.5,
        "studio" => "A-1 Pictures",
        "status" => "ended",
        "season" => "winter 2009",
    ],
    [
        "judul" => "Hunter X Hunter",
        "genre" => ['shonen', 'action', 'drama','fantasy'],
        "episode" => 148,
        "rating" => 8.5,
        "studio" => "Madhouse",
        "status" => "ended",
        "season" => "winter 2011",
    ]
    ];

// kemudian kita akan membuat sebuah fungsi untuk menampilkan detail anime

function get_detail_anime($anime){
    echo "Judul : {$anime['judul']} \n";
    echo "Genre : ";
    foreach ($anime['genre'] as $key => $value) {
        echo "{$value} ";
    }
    echo "\n";
    echo "Episode : {$anime['episode']} \n";
    echo "Rating : {$anime['rating']} \n";
    echo "Studio : {$anime['studio']} \n";
    echo "Status : {$anime['status']} \n";
    echo "Season : {$anime['season']} \n";
}

foreach ($detail_anime as $key => $value) {
    get_detail_anime($value);
}
// jadi jika kita ingin mengambil sebuah detail anime di dalam sebuah aray multi dimensi lebih enak kalau menggunakna function 

//berikutnya adalah tentang bagaimana cara untuk sorting built in function pada array

sort($detail_anime);
var_dump($detail_anime); // ini adalah sebuah sorting ascending pada PHP 

// selanjutnya kita akan belajar tentang method method pada array pada file lainya 


	