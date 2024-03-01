<?php

class kucing{

    public $warna = "hitam & oren";
    public $jenis = "Anggora";

    function makan(){
        echo "kucing makan pindang";

    }
     function suara(){
        echo "meok meok meok";

     }
     function deskripsi(){
        echo "kucing saya berwarna $this->warna <br>";
        echo "jenis kucing nya yaitu $this->jenis";
     }

    }

$cetak = new kucing();

echo $cetak->deskripsi();
?>