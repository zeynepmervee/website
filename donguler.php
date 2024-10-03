<?php
//diger donguler c++ ile ayni, farkli olan foreach dongusu
$urunler = [
    ["iphone14",30000],
    ["iphone15",40000],
    ["iphone16",90000]
    ];

foreach($urunler as $urun){
    echo $urun[0]." ".$urun[1]."<br>";
}



?>