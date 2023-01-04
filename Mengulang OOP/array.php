<?php

// $a = file_get_contents('http://api.kamerapengintai.com/home');
// $b = json_decode($a, 1);
// $array = [
//     'ok' => 1,
//     'status_code' => 200,
//     'message' => 'success',
    
// ];
$data = [
    [
            'nama' => 'zulfikar',
            'umur' => 12,
            'alamat' => [
                'desa' => 'sinom',
                'dukuh' => 'cengklik'
            ]
        ],
        [
            'nama' => 'zulfikar 2',
            'umur' => 122,
            'alamat' => [
                'desa' => 'sinom2',
                'dukuh' => 'cengklik2'
            ]


        ]
            ];


foreach ($data as $key => $value) {

    echo $value['nama'];

    # code...
}



	