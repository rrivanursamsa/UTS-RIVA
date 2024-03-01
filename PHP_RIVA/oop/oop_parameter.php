<?php

class bangunDatar{

   public $luas_persegi=0;
   public $luas_persegi_panjang=0;
   public $segitiga=0;

   function luasPersegi ($sisi){

    $this->luas_persegi = $sisi * $sisi;

    echo "<h3>Persegi</h3>";
    echo "Sisi : $sisi <br>";
    echo "Luas Persegi : $this->luas_persegi";
   }
    function luasPersegipanjang($panjang,$lebar){

        $this->luas_persegi_panjang = $panjang * $lebar;

        echo "<h3>Persegi Panjang</h3>";
        echo "panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Luas persegi panjang : $this->luas_persegi_panjang";

 }
    function luasSegitiga($alas,$tinggi){

        $this->luas_Segitiga = $alas * $tinggi / 2;

        echo "<h3>Segitiga</h3>";
        echo "alas : $alas <br>";
        echo "tinggi : $tinggi <br>";
        echo "luas segitiga : $this->luas_Segitiga";
    }
    function luasLingkaran($luas,$jari){

        $this->luas_Lingkaran= $luas * $jari * $jari;

        echo "<h3>Lingkaran</h3>";
        echo "Luas : $luas <br>";
        echo "jari : $jari <br>";
        echo "jari : $jari <br>";
    }

    }

    $cetak = new bangunDatar();
    echo $cetak->luasPersegi(5);
    echo "<br>";
    echo $cetak->luasPersegipanjang(6,5);
    echo "<br>";
    echo $cetak->luasSegitiga(12,13);
    echo "<br>";
    echo $cetak->luasLingkaran(3,13,14);
?>