<?php
echo'
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>MYSQL Veri Ekleme</title>
</head>
<body>';
$baglanti=mysqli_connect('localhost','root','','subwaysu');
mysqli_set_charset($baglanti,"utf8");
$sql="insert into comments (name,comment,gameid,status,time,ip,blogid,userid) VALUES('Gökhan','Oyun çok güzel','12146',1,1967432561,'0.0.0.0',0,0)";
mysqli_query($baglanti,$sql);
mysqli_close($baglanti);
echo "Kayıt ekleme başarıyla tamamlandı";
echo '</body></html>';
?>