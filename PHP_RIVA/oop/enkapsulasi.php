<?php

class manusia{
    public $nama;
    public $warna;

    protected function tampilkan_nama(){
        return "Nama saya malasngoding </br>";
    }
    public function tampil2(){
        echo $this->tampilkan_nama();
    }
}

$manusia = new manusia();

echo $manusia->tampil2();
?>