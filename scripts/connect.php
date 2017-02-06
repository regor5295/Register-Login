<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "mydatabase";

$uname = $_POST['uname'];
$upass = $_POST['upass'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$bday = $_POST['bday'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO tbl_users (user_id, uname, upass, fname, mname, lname, gender, bday)
	VALUES('', '$uname', '$upass', '$fname', '$mname', '$lname', '$gender', '$bday')";
	
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>