<?php
session_start();
echo "Kitap session'nın içeriği: ".$_SESSION["kitap"]."<br/>";
echo "Kitap2 session'nın içeriği: ".$_SESSION["kitap2"]."<br/>";

foreach ($_SESSION['alacak'] as $key => $value )
echo "Sebze[".$key."]=".$value."<br/>";

foreach ($_SESSION['alacak'] as $value )
echo $value."<br/>";
?>