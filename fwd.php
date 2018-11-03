<?php 
require_once("db.php");
if (isset($_GET['level'])) {

	$device_id = $_GET['device_id'];

	$level = $_GET['level'];

	$direction = $_GET['direction'];

	$query = "UPDATE Quake SET LEVEL = '$level', DIRECTION = '$direction' WHERE DEVICE_ID = '$device_id'";

	$result = mysqli_query($connection, $query);

	if (!$result) {
		die('Query FAILED').mysql_error();
	} else {
        	echo "UPDATED";
    	}
}
?>
