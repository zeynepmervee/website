<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Üye Kayıt</title>
</head>

<body>
<?php
$islem="";
if(isset($_GET["islem"]))
$islem=$_GET["islem"];
if($islem=="kayit")
{
	$host = "localhost";
	$mysqladi = "root";
	$mysqlsifre= "";
	$veritabaniadi="subwaysu";
	$mysqlebaglan = mysqli_connect($host,$mysqladi,$mysqlsifre,$veritabaniadi);
	mysqli_set_charset($mysqlebaglan,"utf8");
	$kullaniciadi = $_POST["kadi"];
	$mail = $_POST["mail"];
	$sifre = $_POST["sifre"];
	
	$tarih = time();
	$sor="select * from users where nick='$kullaniciadi'";
	$kontrol=mysqli_num_rows(mysqli_query($mysqlebaglan,$sor));
	if($kontrol<1)
	{
		$ekle ="INSERT INTO users(nick,email,password,signtime) values('$kullaniciadi','$mail',md5('$sifre'),'$tarih')";
		mysqli_query($mysqlebaglan,$ekle);
		mysqli_close($mysqlebaglan);
		header("location:index25.php");
	}
	else{
		echo "Aynı kullanici var";
		echo '<meta http-equiv="refresh" content="3;url=index25.php"><h3>Ana Sayfaya Yönlendiriliyorsunuz...</h3>';
	}
	
	
	
}
else
{
?>
<form action="index25.php?islem=kayit" name="uyekayit" method="post">
<table width="335" height="225" border="1">
<thead>ÜYE FORMU</thead>
  <tr>
    <td width="91">Kullanıcı Adı</td>
    <td width="232" align="center"><input type="text" name="kadi" /></td>
  </tr>
  <tr>
    <td>E-Mail</td>
    <td align="center"><input type="email" name="mail" /></td>
  </tr>
  <tr>
    <td>Şifre</td>
    <td align="center"><input type="password" name="sifre"></input></td>
  </tr>

  <tr>
    <td colspan="2" align="center"><input type="submit" value="Gönder" /></td>
  </tr>
</table>
<?php
}
?>

</body>
</html>