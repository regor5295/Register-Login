<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "todoDB";
	$records = [];
	$i = 0;
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM todos";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	       $records[$i] = $row;
	       $i++;
	    }
	} else {
	    echo "0 results";
	}

	header('Content-Type: application/json');
	echo json_encode($records);
	
	$conn->close();
?>