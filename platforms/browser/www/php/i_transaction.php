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

	// NEED TO GET CATEGORY ID SOMEHOW**********************
	// Insert statement
	$sql = "INSERT INTO transaction (categoryid, location, amount)
	VALUES
	(cat_id, '$_POST[location]', '$_POST[amount]')";
	$result = $conn->query($sql);

	//Feedback
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// Close connection
	$conn->close();
?>