<?php
$islem="";
if(isset($_GET["islem"]))
$islem=$_GET["islem"];

if($islem=="basla")
{
$yaricap=$_POST['yaricap'];
class MerhabaDunya 
	{
	function yazdir()
	{
		echo "Merhaba Dünya";
		
	}
	
	
	}
$merhaba=new MerhabaDunya();
$merhaba->yazdir();
echo "<br/><br/>";

class Selam{
	function yazdir($isim)
	{
			
		echo "Hoşgeldin ".$isim;
	}	
	static function deneme()
	{
	  echo "Direk Çağır";
	}
}
Selam::deneme();
echo "<br/>";
$selam=new Selam();
$selam->yazdir("Hasan");

echo "<br/><br/>";
class Merhaba{
	public $isim="Mehmet";
	function yazdir()
	{	
		echo "Hoşgeldin ".$this->isim;
	}
	
}

$merhabaisim=new Merhaba();
$merhabaisim->yazdir();
echo "<br/>";
echo $merhabaisim->isim;


class Hesapla
{
   public $pi=3.14;	
   function cevrehesapla($yaricap)
   { 
	echo 'Cevre: '.(2*$this->pi*$yaricap);
   }
   function alanhesapla($yaricap)
   {
	 echo 'Alan: '.($this->pi*$yaricap*$yaricap);
   }
}
echo "<br/><br/>";
$daire=new Hesapla();
$daire->cevrehesapla($yaricap);
echo "<br/><br/>";
$daire->alanhesapla($yaricap);


class Yapici
{
	public $deneme='Yes';
	private $ozel="Özel";
	private $isim="Hasan";
	function __construct($isim)
	{
		echo 'Yapici Örneği Hoşgeldin '.$isim.'</br>';
		echo 'İsim Örneği '.$this->isim;
		//echo 'Özel durumu '.$ozel.'<br/>';
	}
	
	function __destruct()
	{
	echo 'Güle Güle '.$this->ozel." insan";
	}
	
}
echo "<br/><br/>";
$yapici=new Yapici('Dayi');
echo "<br/><br/>";
echo $yapici->deneme.'<br/>';
echo "<br/>";
//echo $yapici->ozel.'<br/>';
echo "<br/>";
unset($yapici);
echo "<br/>";
echo $yapici->deneme.'<br/>';
}
else
{
echo'<form name="form1" method="POST" action="index27.php?islem=basla">
<input type="text" name="yaricap" />
<input type="submit" value="Hesapla" />
</form>';
}
?>