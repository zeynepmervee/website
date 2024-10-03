<?php
$ad="Sadik Ahmet";
$soyad="Turan";
echo $ad." ".$soyad;
echo "<br>";

$sayi1=100;
$sayi2=150;

echo "toplama islemi: {$sayi1}+{$sayi2}=";
echo $sayi1+$sayi2;
echo "<br>";

echo "1. ".strlen($ad)."<br>";
echo "2. ".str_word_count($ad)."<br>";
echo "3. ".strtolower($ad)."<br>";
echo "4. ".var_dump(strtoupper($ad))."<br>"; //var_dump türünü gösterir
//kalan fonksiyonlara w3school string functions yazarak bakabilirsin

echo "5. ".is_int($ad)."<br>"; //int olmadığı için bir şey yazılmadı, olsaydı 1 yazardı
echo "6. ".is_string($ad)."<br>"; //string oldugu icin 1 yazdı
echo "7. ".is_numeric("102")."<br>"; //bu true (1) değer döndürür, string olarak yazılmış sayilar da numeric sayilir
echo "8. ".ceil(3.2)."<br>"; //yukarıya yuvarlar
echo "9. ".floor(8.7)."<br>"; //asagi yuvarlar
echo "10. ".round(3.5)."<br>"; //normal yuvarlar
echo "11. ".sqrt(20)."<br>"; //karekok
echo "12. ".abs(-3)."<br>"; //mutlak deger









?>