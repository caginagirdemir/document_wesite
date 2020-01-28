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

$sql = "SELECT * FROM u392064796_db.Bildirimler";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	   echo "asd";
    }
} else {
    echo "0 results";
}
$conn->close();
	  ?>