<?php ob_start(); /*içeriği göndermeden önce bufferla 
Çıktıyı tamponlamak/bufferlamak, PHP kodunun çalışması sırasında oluşturulan HTML,metin veya
diğer içeriğin geçici olarak bir bellek alanında saklanmasıdır.
Bu bellek alanına "buffer" denir.*/?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Cookiler</title>
</head>
<body>
<?php
if(setcookie("baslik","header warning"))
echo "Cookie oluşturuldu<br/>";
else
echo "Sorun var<br/>";	

setcookie("sebze[1]","Havuç");
setcookie("sebze[2]","Marul",time()+31536000,"/");
setcookie("sebze[3]",md5("Ispanak"),time()+50*80*60);
setcookie("sebze[4]","Domates");

echo '<a href="cookieoku.php" title="cookie oku" target="_blank"> Cookie Oku</a>.<br/>';
echo '<a href="cookiesil.php" title="cookie sil"> Cookie Sil</a>';
?>
</body>
</html>
<?php
ob_end_flush(); /* bufferlanmış içeriği bufferdan çıkarıp gönder */
/* ob_get_clean -> bufferı al ve içeriği temizle  */
/* ob_clean  -> bufferdaki veriyi temizle */
?>