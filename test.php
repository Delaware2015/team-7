<?php

$servername = "ec2-54-87-67-182.compute-1.amazonaws.com";
$username = "root";
$password = "code4good";
$dbname = "code4good.db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("connection failed " . $conn->connect_error);
}


$result = $mysqli->query("select * from student");
for($row_no = $result->num_rows -1; $row_no >=0; $row_no--){
	$result->data_seek($row_no);
	$row = $res->fetch_assoc();
	echo ' id = ' . $row['id'] . "\n";
}

mysqli_close(conn);


?>
