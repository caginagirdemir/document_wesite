 <?php
 echo "asd";
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file. 1";
    }
	if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file. 2";
    }
	if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
        echo "The file ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file. 3";
    }

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
  $baslik = test_input($_POST["baslik"]);
  $icerik = test_input($_POST["icerik"]);
  $Eksay = test_input($_POST["eksay"]);
  $Ek1=$_FILES["fileToUpload"]["name"];
  $Ek2=$_FILES["fileToUpload2"]["name"];
  $Ek3=$_FILES["fileToUpload3"]["name"];
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql = "INSERT INTO u392064796_db.Bildirimler(baslik,icerik,Eksay,Ek1,Ek2,Ek3) VALUES ('".$baslik."','".$icerik."','".$Eksay."','".$Ek1."','".$Ek2."','".$Ek3."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
header('Location: caginagirdemir.online');
?> 