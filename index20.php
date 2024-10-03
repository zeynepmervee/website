<!DOCTYPE html>
<html>
<head>
<title>Dört İşlem</title>
</head>
<body>
<form name="form1" method="POST" action="index20.php?islem=dort">
<input type="text" name="rakam1" id="rakam1" size="5" />
&nbsp;
<select name="islem" id="islem">
<option value="İşlem">İşlem</option>
<option value="Topla">+</option>
<option value="Çıkar">-</option>
<option value="Çarp">*</option>
<option value="Böl">/</option>
</select>
&nbsp;
<input type="text" name="rakam2" id="rakam2" size="5" />
<input type="submit" name="button" id="button" value="Hesapla" />
</form>

<?php
if(isset($_GET['islem']))
	{
	if ($_GET['islem']=="dort" && $_POST['islem']!="İşlem")
		{
		include('dortislem.php');
		dortislem($_POST['rakam1'],$_POST['rakam2'],$_POST['islem']);
		}
	}
?>

</body>
</html>