9<?php
if($_POST["sifre"]=="123")
{
	header("Location:http://www.caginagirdemir.online\\documents\\".$_POST["dosyaadi"]);
}
else
{
	echo "Girdiðiniz Þifre Doðru Deðil. Þimdi yönlendiriliyorsunuz.";
	header("Location:http://www.caginagirdemir.online",5);
}
?>