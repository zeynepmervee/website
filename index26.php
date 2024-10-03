<?php
$sayfa=1;
if(isset($_GET["sayfa"]))
$sayfa=$_GET["sayfa"];

$baslangic=($sayfa-1)*10;
echo'
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>MYSQL\'deki Verilerin Listelenmesi</title>
</head>
<body>
<center>
<table border="2">
<tr>
<td>ID</td>
<td>NAME</td>
<td>HIT</td>
</tr>';
$baglanti=mysqli_connect('localhost','root','','subwaysu');
mysqli_set_charset($baglanti,"utf8");
$sql="select id,name,hit from games where swf not like '%oyunskorlarim%' order by hit desc limit ".$baslangic.",10";
$result=mysqli_query($baglanti,$sql);
$i=0;$renk;
while($row=mysqli_fetch_assoc($result))
{
	if($i%2==0)
	$renk='gray';
	else
	$renk='aqua';
	echo '<tr><td bgcolor='.$renk.'>'.$row["id"].'</td><td bgcolor='.$renk.'>'.$row["name"].'</td><td bgcolor='.$renk.'>'.$row["hit"].'</td></tr>';
$i++;
	}
echo '<tr><td colspan=3>';sayfala($sayfa); echo '</td></tr>';
mysqli_close($baglanti);
echo '</table></center>
</body></html>';

function sayfala($sayfa)
{
	global $baglanti;
	$sqltoplamkayit="select count(*) as toplamsayi from games where swf not like '%oyunskorlarim%'";
	$sorgu=mysqli_query($baglanti,$sqltoplamkayit);
	$toplamkitap=mysqli_fetch_assoc($sorgu);
	
	if($sayfa>=2)
	echo '<a href=index26.php?sayfa='.($sayfa-1).'><<</a>';
    for($j=1;$j<=ceil($toplamkitap["toplamsayi"]/10);$j++)
	{
		if($sayfa==$j)
		echo '&nbsp;&nbsp;<b>'.$sayfa.'</b>&nbsp;&nbsp;';
		else
		echo '&nbsp;&nbsp;<a href=index26.php?sayfa='.$j.'>'.$j.'</a>&nbsp;&nbsp;';
		if($j%11==0)
		echo '<br />';
	}
	if($sayfa<ceil($toplamkitap["toplamsayi"]/10))
	echo '<a href=index26.php?sayfa='.($sayfa+1).'>>></a>';
}

?>