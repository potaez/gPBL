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
	echo "{font-size: 16px;}";
	echo "h1{background-color: #CCFFCC; color: #009999; font-size: 7rem; text-align: center;}";
	echo "h2{color: #3399FF; font-size: 6rem; text-align: center;}";
	echo "h3{background-color: #CCFFCC; color: #009999; font-size: 7rem; text-align: center}";
	echo "h5{color: #3399FF; font-size: 5rem; text-align: center;}";
	echo "</style>";
	echo "<h1>LEVEL</h1>";
	echo "<h2>".$row[LEVEL]."</h2>";
	echo "<h3>DIRECTION</h3>";
	echo "<h5>".$row[DIRECTION]."</h5>"."<meta http-equiv='refresh' content='3'>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
