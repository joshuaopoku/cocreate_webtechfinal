<?php
require __DIR__ . "/credential.php";
	
	//Create connection
	$conn= new mysqli(servername, username, password, db);
	

	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
		echo "Connection failed";
	}
	else{
		echo "<div class='alert alert-success'>Connection successful!</div>";
	}
	// $conn->close();
?>