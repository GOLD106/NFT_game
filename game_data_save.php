<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tigerdb";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$username = $_POST['username'];
	$HCA_point = $_POST['HCA_point'];

	$sql = "INSERT INTO score (username, Loyalties_Sotock_point, Gems_Stock, HCA_point) 
	VALUES ('$username', '$HCA_point', '80', '135')";

	if ($conn->query($sql) === TRUE) {
	  echo "true";
	} else {
	  echo "false";
	}

	$conn->close();
	



?>