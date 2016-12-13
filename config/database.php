<?php 
	
	$servername_db = "localhost";
	$username_db = "root";
	$password_db = "root";
	$name_db = "collegePlacements";

	// Create connection
	$conn = new mysqli($servername_db, $username_db, $password_db, $name_db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	 // echo "Connected successfully";




 ?>