<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PBL";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT LEVEL, DIRECTION FROM Quake WHERE DEVICE_ID = 'A01'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<style>";
	echo "h1{font-size: 80px; color: red;}";
	echo "h2{font-size: 80px; color: green;}";
	echo "div{margin: 120px 0; text-align: center;}";
	echo "p{font-family: Meiryo, 'Hiragino Kaku Gothic Pro W3', Courier New, sans-serif; line-height: 1.5; margin-bottom: 50px; color: #000;}";
	echo "</style>";
	echo "<center><h1>LEVEL</h1></center>";
	echo "<center><h1>".$row[LEVEL]."</h1></center>";
	echo "<center><h2>DIRECTION</h2></center>";
	echo "<center><h2>".$row[DIRECTION]."</h2></center>"."<meta http-equiv='refresh' content='3'>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
