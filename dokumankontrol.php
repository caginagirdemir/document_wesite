9<?php
if($_POST["sifre"]=="123")
{
	header("Location:http://www.caginagirdemir.online\\documents\\".$_POST["dosyaadi"]);
}
else
{
	echo "Girdi�iniz �ifre Do�ru De�il. �imdi y�nlendiriliyorsunuz.";
	header("Location:http://www.caginagirdemir.online",5);
}
?>