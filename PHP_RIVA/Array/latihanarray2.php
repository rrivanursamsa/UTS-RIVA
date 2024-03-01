<?php
// membuat array asosiatif

$nama = [
        [
        "nama" => "Farel",
        "jenis_kelamin" => "Laki-laki",
        "hobi" =>  [
                    ["hobi1" => "Sepak Bola"],
                    ["hobi1" => "Berenang"],
                    ["hobi1" => "Biliar"]
                    ]
        ],
        [
        "nama" => "Salwa",
        "jenis_kelamin" => "Perempuan",
        "hobi" => [
                   ["hobi1" => "Membaca"],
                   ["hobi1" => "Nonton"],
                   ["hobi1" => "Melukis"]
                  ]
        ]
];

    foreach($nama as $data){
    echo "Nama : ".$data["nama"]."<br>";
    echo "jenis_kelamin : ".$data["jenis_kelamin"]."<br>";
    echo "Hobi : <br>";

    
    foreach ($data['hobi'] as $data2) {
        echo "<li>".$data2['hobi1']. "<br>";
    }
    

    echo "<hr>";
    };

?>