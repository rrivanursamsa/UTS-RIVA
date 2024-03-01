<?php

class sample{
 
    function __construct(){
        echo "Assalaammualaikum...<br>";
    }
    function perkenalan(){
        echo "Hello nama saya sahwal :)<br>";
    }
    function __destruct(){
        echo "Hatur nuhun";
    }
}

$cetak = new sample();

echo $cetak->perkenalan();
?>