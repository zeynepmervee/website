<?php
echo'
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>MYSQL\'deki Verilerin Listelenmesi</title>
</head>
<body>
<table border="2">
<tr>
<td>ID</td>
<td>NAME</td>
<td>HIT</td>
</tr>';
$baglanti=mysqli_connect('localhost','root','','subwaysu');
mysqli_set_charset($baglanti,"utf8");
$sql="select id,name,hit from games where swf not like '%oyunskorlarim%' order by hit desc";
$result=mysqli_query($baglanti,$sql);
$i=0;$renk;
while($row=mysqli_fetch_assoc($result))
{
	if($i%2==0)
	$renk='gray';
	else
	$renk='aqua';
	echo '<tr><td bgcolor='.$renk.'>'.$row["id"].'</td><td bgcolor='.$renk.'>'.$row["name"].'</td><td bgcolor='.$renk.'>'.$row["hit"].'</td></tr>';
	echo "\n";
$i++;
	}
mysqli_close($baglanti);
echo '</table>
</body></html>';
?>