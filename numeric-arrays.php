<?php
/********************* NUMERIC ARRAYS ******************/
//$ogrenciler = array("ahmet","ali","ayşe");
$ogrenciler = ["ahmet","ali","ayşe"];
 
array_push($ogrenciler,"fatma");
foreach($ogrenciler as $ogrenci){
    echo $ogrenci."<br>";
}

echo gettype($ogrenciler)."<br>";
/********************* ASSOCIATIVE ARRAYS ******************/
// key - value
// kocaeli - 41
$plakalar = array ("41","53","34");
$sehirler = array ("Kocaeli","Rize","Istanbul");

$plaka_bilgileri = array (
"41"=>"Kocaeli",
"53"=>"Rize",
"34"=>"Istanbul"
);

echo $plaka_bilgileri["41"]."<br>";
echo $plaka_bilgileri["34"]."<br>";
echo $plaka_bilgileri["53"]."<br>";

$urun = [
    "urun adi" => "iphone 14",
    "urun fiyati" => 30000,
    "satista mi" => true
];

//urunler dizisi numeric dizidir, icinde associative diziler barındırır
$urunler = [
    [
        "urun adi" => "iphone 14",
        "urun fiyati" => 30000,
        "satista mi" => true
    ],
    [
        "urun adi" => "iphone 15",
        "urun fiyati" => 40000,
        "satista mi" => true
    ],
    [
        "urun adi" => "iphone 16",
        "urun fiyati" => 90000,
        "satista mi" => true
    ]
    ];
echo $urunler[0]["urun adi"]."<br>";


?>