 <?php

$servername = "localhost";
$username = "u392064796_user";
$password = "cagin1990";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$isim = $mail = $icerik = $oy = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $isim = test_input($_POST["isim"]);
  $mail = test_input($_POST["mail"]);
  $icerik = test_input($_POST["icerik"]);
  $oy = test_input($_POST["oy"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql = "INSERT INTO u392064796_db.iletisim(isim,mail,icerik,oy)
VALUES ('".$isim."', '".$mail."', '".$icerik."', '".$oy."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$to = "destek@caginagirdemir.online";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

?> 

<html>
<head>
<meta charset="utf-8">
</head>
<body>

<p><font face="verdana" color="green">Bildiriminiz için teşekkür ederim.</font></p>
</br>
<p><a href="http://www.caginagirdemir.online">Geri</a></p>

</body>
</html>