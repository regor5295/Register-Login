<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "mydatabase";

	$uname = $_POST['uname'];
	$upass = $_POST['upass'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM tbl_users WHERE uname = '$uname' AND upass = '$upass'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
			if ($row['uname']==$uname && $row['upass']==$upass){
					echo "Successful Login!";
				}
			else {
					echo "Not Yet Registered!";
				}
			}
	}
	else {
		echo "Not Yet Registered!";
	}
	$conn->close();
?>