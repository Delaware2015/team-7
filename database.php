<?php

$servername = "ec2-54-87-67-182.compute-1.amazonaws.com";
$username = "root";
$password = "code4good";
$dbname = "code4good.db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>
