<?php

$servername = "ec2-54-87-67-182.compute-1.amazonaws.com";
$username = "root";
$password = "code4good";
$dbname = "code4good.db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("connection failed " . $conn->connect_error);
}

$sql = "SELECT * FROM school";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	// This section will be where all of the college information goes.
	// College id number, College name, college application deadline.
	echo $row['school_name'] . " " . $row['school_id'] . " " . $row['enrollment_deadline'];
}

?>
