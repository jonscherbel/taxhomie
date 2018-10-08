<?php
	$servername = "localhost";
	$username = "jonscherbel";
	$password = "test2";
	$dbname = "budget";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	// NEED TO GET MONTH AND YEAR SOMEHOW**********************
	// Select statement
	$sql = "SELECT * FROM category WHERE month_year = 516;"
	// Result
	$result = $conn->query($sql);
	//Set array with values

	//Feedback
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// Close connection
	$conn->close();
?>