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
	    echo "<center><h1>"."LEVEL"."</h1></center>"."<center><p>".$row[LEVEL]."</p></center>"."<meta http-equiv='refresh' content='3'>";
	    echo "<center><h1>DIRECTION</h1></center>"."<center><p>".$row[DIRECTION]."</p></center>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
