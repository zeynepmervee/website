<?php
echo "Cookienin İçeriği: ".$_COOKIE["baslik"]."<br/>";
echo "Sebze Dizisinin İçerikleri:<br/>";
foreach ($_COOKIE["sebze"] as $key => $deger)
echo "Sebze[".$key."]= ".$deger."<br/>";

echo "Kitap Cookienin İçeriği: ".$_COOKIE["kitap"]."<br/>";
echo "Web Kitap Cookienin İçeriği: ".$_COOKIE["web-kitap"]."<br/>";
echo "Yeni Kitap Cookienin İçeriği: ".$_COOKIE["yeni-kitap"]."<br/>";
?>