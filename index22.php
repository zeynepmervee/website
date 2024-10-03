<?php
/*$baglanti=@mysql_connect('10.123.0.209','cerak9_veri','deneme61');
if($baglanti==true)
	echo "Mysql'e bağlanıldı.<br/>";
else
	echo "Mysql'e bağlanılamadı.<br/>";
$baglan=mysql_select_db('b7_17909065_database',$baglanti);
if($baglan==true)
	echo "b7_17909065_database'e veritabanına bağlanıldı.<br/>";
else
	echo "b7_17909065_database'e veritabanına bağlanılamadı.<br/>";

echo "<br/><br/>";*/
// host, user, password, database
//$yeninesil=@mysqli_connect('db4free.net:3306','sql_uzaktan_bagl','HqRL9sRZed','sql_uzaktan_bagl');
$yeninesil=@mysqli_connect('db4free.net','ileriwebdat','ileriwebdat123','ileriwebdatabas','3306');
if($yeninesil==true)
	echo "Uzak Mysql'e Bağlandı<br/>";
else
	echo "Uzak Mysql'e Bağlanamadı<br/>";

$yeninesil=@mysqli_connect('localhost','root','','test');
if($yeninesil==true)
	echo "Yerel Mysql'e Bağlandı<br/>";
else
	echo "Yerel Mysql'e Bağlanamadı<br/>"
?>