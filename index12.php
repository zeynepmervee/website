<?php
setcookie("kitap","PHP",time()+86400);
if(setcookie("yeni-kitap","PHP&MYSQL"))
echo "Cookie oluşturuldu.<br/>";
else
echo "Cookie oluşturulamadı.";
if(setcookie("web-kitap","Dreamweaver",time()+86400))
echo "Cookie oluşturuldu.<br/>";
else
echo "Cookie oluşturulamadı.<br/>";
?>