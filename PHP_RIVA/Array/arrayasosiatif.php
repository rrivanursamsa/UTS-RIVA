<?php
// membuat array asosiatif
$buku = [
    [
    "judul" => "siksa neraka",
    "penerbit" => "Airlangga",
    "penulis" => "Sofyan",
    "rilis" => 2004
    ],
    [
    "judul" => "Azab kubur",
    "penerbit" => "sucipto",
    "penulis" => "edgar",
    "rilis" => 2024
    ]
];

 foreach($buku as $data){
    echo "judul : ". $data["judul"]."<br>";
    echo "penerbit : ". $data["penerbit"]."<br>";
    echo "penulis : ". $data["penulis"]."<br>";
    echo "rilis : ". $data["rilis"]."<br>";
    echo "<hr>";
    
 }
   
    
?>