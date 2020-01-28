<?php
$gelensifre=$_POST["sifre"];

	if(getenv("HTTP_CLIENT_IP")) {
 		$ip = getenv("HTTP_CLIENT_IP");
 	} elseif(getenv("HTTP_X_FORWARDED_FOR")) {
 		$ip = getenv("HTTP_X_FORWARDED_FOR");
 		if (strstr($ip, ',')) {
 			$tmp = explode (',', $ip);
 			$ip = trim($tmp[0]);
 		}
 	} else {
 	$ip = getenv("REMOTE_ADDR");
 	}
	return $ip;
}
$ip_adresi = GetIP();

if($gelensifre=='123' and $ip_adresi='85.98.131.121')
{
header('Location:http://www.caginagirdemir.online\bildirim.php');
}
else
{
	echo "hata1";
}
?>