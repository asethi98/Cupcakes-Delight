<!doctype html>
<html>
<head>
</head>
<body>
<?php
	$servername = "localhost";
	$username = "shirani4";
	$password = "shirani4";

	$dbname="shirani4";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
?>
</body>
</html>

